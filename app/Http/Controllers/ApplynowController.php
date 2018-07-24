<?php

namespace App\Http\Controllers;

use App\Models\contracts;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Clients;
use Validator, Input, Redirect ;
use App\User;
use Aloha\Twilio\Twilio;

class ApplynowController extends Controller
{
    public function create()
    {
        $data = $_POST;
        return view('applynow.apply', compact('data', $data));
    }

    public function store()
    {
        $data = $_POST;
        return view('applynow.apply', compact('data', $data));
    }

    public function preContractAgreement()
    {
        return view('contract_agreements.precontract');
    }

    public function creditAgreement()
    {
        return view('contract_agreements.agreement');
    }

    public function testAgreement()
    {
        return view('contract_agreements.fonts');
    }

    public function processLoanApplication(Request $request)
    {

        $monthlyExpenses = $_POST['rent'] + $_POST['council_tax'] + $_POST['gas'] + $_POST['water'] + $_POST['food'] + $_POST['telephone'] +
        $_POST['tv'] + $_POST['loans_cc'] + $_POST['other_costs'];

        /* TODO: process new client registration on the portal */
        $code = rand(10000,10000000);

        $authen = new User;
        $authen->first_name = $request->input('first_name');
        $authen->last_name = $request->input('last_name');
        $authen->email = trim($request->input('email'));
        $authen->activation = $code;
        $authen->group_id = 3;
        $authen->password = \Hash::make($request->input('password'));
        if(CNF_ACTIVATION == 'auto') { $authen->active = '1'; } else { $authen->active = '0'; }
        $authen->save();


        $clients = new Clients;
        $clients->id = $authen->id;
        $clients->title = $request->input('title');
        $clients->first_name = $request->input('first_name');
        $clients->middle_name = $request->input('middle_name');
        $clients->last_name = $request->input('last_name');
        $clients->password = $request->input('password');
        $clients->confirm_password = $request->input('confirm_password');
        $clients->marital_status = $request->input('marital_status');
        $clients->email = $request->input('email');
        $clients->phone = $request->input('phone');
        $clients->mobile = $request->input('mobile');
        $clients->date_of_birth = $request->input('dob');
        $clients->loan_amount = $request->input('loan_amount');
        $clients->loan_purpose = $request->input('loan_purpose');
        $clients->house_number = $request->input('house_number');
        $clients->street_name = $request->input('street_name');
        $clients->town = $request->input('town');
        $clients->city = $request->input('city');
        $clients->post_code = $request->input('post_code');
        $clients->tenancy = $request->input('tenancy');
        $clients->profession = $request->input('profession');
        $clients->income_type = $request->input('employment_status');
        $clients->salary_frequency = $request->input('salary_frequency');
        $clients->monthly_income = $request->input('monthly_income');
        $clients->monthly_expenses = $monthlyExpenses;
        $clients->pay_date = $request->input('pay_date');
        $clients->acquisition_channel = $request->input('acquisition_channel');
        $clients->other_income = $request->input('other_income');
        $clients->account_name = $request->input('account_name');
        $clients->account_number = $request->input('account_number');
        $clients->sort_code = $request->input('sort_code');
        $clients->proof_of_id = $request->input('proof_of_id');
        $clients->proof_of_residency = $request->input('proof_of_residency');
        $clients->entry_by = $authen->id;
        $clients->save();

        //  Create new contract entry
        $contracts  = new Contracts;

        $contracts->application_id = $authen->id;
        $contracts->loan_amount = $clients->loan_amount;
        $contracts->due_date = $request->input('proposed_payment_date');
        $contracts->agree_terms = $request->input('terms');
//        $contracts->repayment_amount =
        $contracts->loan_date = date('Y-m-d');
        $contracts->entry_by = $authen->id;
        $contracts->save();


        $proofOfId = $clients->first_name .'_proof_of_id_'. $code . '.' . $request->file('proof_of_id')->getClientOriginalExtension();
        $proofOfAddress = $clients->first_name .'_proof_of_residency_'. $code . '.' . $request->file('proof_of_residency')->getClientOriginalExtension();

        $request->file('proof_of_id')->move(
            base_path() . '/public/uploads/files/contracts/', $proofOfId
        );

        $request->file('proof_of_residency')->move(
            base_path() . '/public/uploads/files/contracts/', $proofOfAddress
        );

        $data = array(
            'firstname'	=> $request->input('first_name') ,
            'lastname'	=> $request->input('last_name') ,
            'email'		=> $request->input('email') ,
            'password'	=> $request->input('password') ,
            'code'		=> $code

        );


        $accountId = 'AC999c7195ec168e6df05b93a550aee6b5';
        $token = 'c9825088e30798c497816713e7aa7f16';
        $fromNumber = '441332653540';

        $twillio = new Twilio($accountId, $token, $fromNumber);

        $firstname = $clients->first_name . " ". $clients->last_name;
        $email = $clients->email;
        $password = $clients->password;

        $activationLink = "http://karibafinance.com/" . trim('user/activation?code='.$code);

        $message = "Hello $firstname\n\r";
		$message .= "Thank your for you application. It is currently under review.\n\r";
		$message .= "Bellow is your account Info\n";
		$message .= "Email : $email \n";
        $message .= "Password : $password \n\r";
        $message .= "Please follow link activation  $activationLink\n\r";
        $message .= "Regards, \n" . CNF_APPNAME . " Team";

        //        TODO: Uncomment this when pushing live
        $twillio->message($clients->mobile, $message);

        if(CNF_ACTIVATION == 'confirmation')
        {
            $to = $request->input('email');
            $subject = "[ " .CNF_APPNAME." ] REGISTRATION ";

            if(defined('CNF_MAIL') && CNF_MAIL =='swift')
            {
                Mail::send('user.emails.registration', $data, function ($message) {
                    $message->to($to)->subject($subject);
                });
            }  else {

                $message = view('user.emails.registration', $data);
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $headers .= 'From: '.CNF_APPNAME.' <'.CNF_EMAIL.'>' . "\r\n";
                mail($to, $subject, $message, $headers);
            }

            $message = view('user.emails.registration', $data);
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: ' . CNF_APPNAME . ' <' . CNF_EMAIL . '>' . "\r\n";
            mail($to, $subject, $message, $headers);

            $message_ = "Thanks for registering! . Please check your inbox and follow activation link";

        } elseif(CNF_ACTIVATION=='manual') {
            $message_ = "Thanks for registering! . We will validate you account before your account active";
        } else {
            $message_ = "Thanks for registering! . Your account is active now ";

        }

        $s = substr(str_shuffle(str_repeat("ABCDEFGHIJKLMNOPQRSTUVWXYZ", 4)), 0, 4);

        $payableAmount = $request->input('interest') + $clients->loan_amount;

        $dateDiff =  round(abs(strtotime($contracts->due_date )-strtotime(date('Y-m-d')))/86400);

        $contract_info = [
            'agreement_no' => $s . $contracts->entry_by,
            'fullname' => $firstname,
            'title' => $clients->title,
            'email' => $clients->email,
            'employment_status' => $clients->income_type,
            'occupation' => $clients->profession,
            'dob' => $clients->date_of_birth,
            'loan' => $clients->loan_amount,
            'mobile' => $clients->mobile,
            'message' => $message,
            'interest' => $request->input('interest'),
            'terms' => $request->input('days'),
            'days' => $dateDiff,
            'total_payable' => $request->input('interest') + $clients->loan_amount,
            'apr' => $this->calculateAPR($clients->loan_amount, $payableAmount, $dateDiff)
        ];

        return view('contract_agreements.agreement')->with('contract_info', $contract_info);

//        return view('applynow.thankyou')->with('message', $message);
    }

    private function calculateAPR($advance, $payment, $days)
    {
        $apr = 0.00;

        $calculator = new Calculator(floatval($advance));
        $apr = $calculator->singlePayment(floatval($payment), intval($days));

        return $apr;
    }
}
