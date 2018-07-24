@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title"><h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3> 
	<div class="sbox-tools" >
   		<a href="{{ URL::to('contracts?return='.$return) }}" class="tips btn btn-xs btn-white pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="icon-backward"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
		@if($access['is_add'] ==1)
   		<a href="{{ URL::to('contracts/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-white pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
		@endif 
	</div>	
	</div>
	<div class="sbox-content" style="background:#fff;"> 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Application Id', (isset($fields['application_id']['language'])? $fields['application_id']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->application_id,'application_id','1:clients:id:first_name|middle_name|last_name') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Loan Amount', (isset($fields['loan_amount']['language'])? $fields['loan_amount']['language'] : array())) }}</td>
						<td>{{ $row->loan_amount}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Repayment Amount', (isset($fields['repayment_amount']['language'])? $fields['repayment_amount']['language'] : array())) }}</td>
						<td>{{ $row->repayment_amount}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Interest Rate', (isset($fields['interest_rate']['language'])? $fields['interest_rate']['language'] : array())) }}</td>
						<td>{{ $row->interest_rate}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Loan Date', (isset($fields['loan_date']['language'])? $fields['loan_date']['language'] : array())) }}</td>
						<td>{{ $row->loan_date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Due Date', (isset($fields['due_date']['language'])? $fields['due_date']['language'] : array())) }}</td>
						<td>{{ $row->due_date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Agree Terms', (isset($fields['agree_terms']['language'])? $fields['agree_terms']['language'] : array())) }}</td>
						<td>{{ $row->agree_terms}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Entry By', (isset($fields['entry_by']['language'])? $fields['entry_by']['language'] : array())) }}</td>
						<td>{{ $row->entry_by}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Created At', (isset($fields['created_at']['language'])? $fields['created_at']['language'] : array())) }}</td>
						<td>{{ $row->created_at}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Updated At', (isset($fields['updated_at']['language'])? $fields['updated_at']['language'] : array())) }}</td>
						<td>{{ $row->updated_at}} </td>
						
					</tr>
				
			</tbody>	
		</table>

		{{-- Contract Agreement --}}

		<div id="page1-div" style="position:relative;width:892px;height:1262px;">
			<p style="position:absolute;top:111px;left:339px;white-space:nowrap" class="ft01">KARIBA FINANCE&#160;</p>
			<p style="position:absolute;top:184px;left:141px;white-space:nowrap" class="ft02">FIXED-SUM&#160;LOAN&#160;AGREEEMENT&#160;REGULATED&#160;BY&#160;THE&#160;CONSUMER&#160;CREDIT&#160;ACT&#160;1974</p>
			<p style="position:absolute;top:239px;left:93px;white-space:nowrap" class="ft03">This Loan Agreement is between us (the Lender) and you (the Borrower), on the terms set out below.</p>
			<p style="position:absolute;top:296px;left:95px;white-space:nowrap" class="ft04">Agreement no:</p>
			<p style="position:absolute;top:347px;left:93px;white-space:nowrap" class="ft03">Name (the Lender): Micro-E C.I.C Limited trading as Kariba Finance&#160;</p>
			<p style="position:absolute;top:376px;left:93px;white-space:nowrap" class="ft03">Adress: 4 Charmwood St, Derby, Derbyshire, DE1 2 GT&#160;</p>
			<p style="position:absolute;top:433px;left:93px;white-space:nowrap" class="ft03">Name (the Borrower):&#160;</p>
			<p style="position:absolute;top:461px;left:93px;white-space:nowrap" class="ft03">Adress: &#160;</p>
			<p style="position:absolute;top:529px;left:363px;white-space:nowrap" class="ft05"><b>BORROWER'S&#160;DETAILS</b></p>
			<p style="position:absolute;top:557px;left:95px;white-space:nowrap" class="ft03">Title: &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Date of birth:&#160;</p>
			<p style="position:absolute;top:586px;left:95px;white-space:nowrap" class="ft03">Email: &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Tel:&#160;</p>
			<p style="position:absolute;top:614px;left:95px;white-space:nowrap" class="ft03">Occupation: &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; Employer:&#160;</p>
			<p style="position:absolute;top:699px;left:334px;white-space:nowrap" class="ft05"><b>KEY&#160;FINANCIAL&#160;INFORMATION</b></p>
			<p style="position:absolute;top:728px;left:93px;white-space:nowrap" class="ft03">1. Amount of credit &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&pound; &#160;</p>
			<p style="position:absolute;top:756px;left:93px;white-space:nowrap" class="ft03">2. Total Amount Payable (1+5) &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&pound; &#160;</p>
			<p style="position:absolute;top:785px;left:93px;white-space:nowrap" class="ft03">&#160; &#160; Term of Agreement: &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;days &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;APR &#160; &#160; &#160; &#160; &#160; &#160; &#160;</p>
			<p style="position:absolute;top:831px;left:323px;white-space:nowrap" class="ft05"><b>OTHER&#160;FINANCIAL&#160;INFORMATION</b></p>
			<p style="position:absolute;top:860px;left:93px;white-space:nowrap" class="ft03">3. Interest &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &pound; &#160;</p>
			<p style="position:absolute;top:888px;left:93px;white-space:nowrap" class="ft03">4. Loan setup fee (admin fee) &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&pound; &#160;</p>
			<p style="position:absolute;top:917px;left:93px;white-space:nowrap" class="ft03">5. Total charge for credit (3+4) &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;&pound; &#160;</p>
			<p style="position:absolute;top:945px;left:93px;white-space:nowrap" class="ft03">Interest is charged at an equivalent rate of &#160; &#160; &#160; &#160; &#160; &#160; &#160;p.a on the Amount of Credit, calculated and applied&#160;</p>
			<p style="position:absolute;top:974px;left:93px;white-space:nowrap" class="ft03">at the date, and for the Term of this Agreement.</p>
			<p style="position:absolute;top:1198px;left:205px;white-space:nowrap" class="ft06">KARIBA FINANCE IS A TRADING NAME OF MICRO-E C.I.C LTD REG 07090390&#160;</p>
			<p style="position:absolute;top:1231px;left:131px;white-space:nowrap" class="ft06">REGISTERED ADDRESS: DENBY HOUSE, TAYLOR LANE, LOSCOE, HEANOR, DERBYSHIRE, DE75 7TA</p>
		</div>

		<div id="page2-div" style="position:relative;width:892px;height:1262px;">
			<p style="position:absolute;top:111px;left:339px;white-space:nowrap" class="ft01">KARIBA FINANCE&#160;</p>
			<p style="position:absolute;top:191px;left:377px;white-space:nowrap" class="ft02"><b>KEY&#160;INFORMATION</b></p>
			<p style="position:absolute;top:227px;left:18px;white-space:nowrap" class="ft06"><b>Charges<br/></b>We may charge you a &pound; 10 default charge and any other default interest in accordance with clause 6 of your Pre-contract&#160;<br/>information. We may also require payment of our reasonable charges fro (a) sending arrears letters, reminders or documents to&#160;<br/>which you are not entitled; (b) tracing you if you move address without notifying us; (c) cheques, standing orders or direct&#160;<br/>debits which are dishonoured, stopped or not paid by you; (d) telephone calls; or (e) personal visits made to your home&#160;<br/>Where known at the date of this agreement, our costs for the above are for (a) Our time in setting up your account on our&#160;<br/>system or if you are an existing client going through your payment history before we can consider advancing you another loan&#160;<br/>(b) Cost of corresponding with you during the term of your loan, including but not limited to telephone call charges and any&#160;<br/>other forms of communication (c) cost of interest on the funds we are lending you and otherwise as notified to you. See also&#160;<br/>6(b) - costs of enforcing this agreement&#160;</p>
			<p style="position:absolute;top:425px;left:18px;white-space:nowrap" class="ft06"><b>IMPORTANT&#160;-&#160;READ&#160;THIS&#160;CAREFULLY&#160;TO&#160;FIND&#160;OUT&#160;ABOUT&#160;YOUR&#160;RIGHTS<br/></b>The Consumer Credit Act 1974 lays down certain requirements for your protection which should have been complied with when&#160;<br/>this agreement was made. if they were not, we cannot enforce the agreement without getting a court order.&#160;<br/>The Act also gives you a number of rights. You can settle this agreement at any time by giving notice in writing and paying off&#160;<br/>the amount you owe under the agreement which may be reduced by a rebate.&#160;<br/>If you would like to know your rights under the Act, contact either your local Trading Standards department or your nearest&#160;<br/>Citizen's Advice Bureau.&#160;</p>
			<p style="position:absolute;top:593px;left:18px;white-space:nowrap" class="ft02"><b>TERMS&#160;OF&#160;THE&#160;AGREEMENT</b></p>
			<p style="position:absolute;top:629px;left:18px;white-space:nowrap" class="ft06"><b>1&#160;Loan&#160;-&#160;&#160;</b>We agree to lend you, and you agree to borrow the Amount of Credit shown above on the terms set out below and any&#160;<br/>other terms within this document.&#160;<br/><b>2&#160;Payment&#160;by&#160;You&#160;-&#160;&#160;</b>You agree to pay us the Total Amount payable as shown above on the date shown. It is essential that you&#160;<br/>make the payment in full and on time. if you pay by post, you will be responsible for any payments lost in the post.&#160;<br/><b>3&#160;Earlier&#160;payment&#160;-</b>&#160;If you pay the outstanding balance under this agreement, you will usually be entitled to a rebate&#160;<br/>(reduction) of part &#160;of the interest.&#160;<br/><b>4&#160;Change&#160;of&#160;address&#160;-</b>&#160;You must let us know, within 7 days about any change of your address.&#160;<br/><b>5&#160;Right&#160;to&#160;demand&#160;earlier&#160;payment&#160;-&#160;</b>We will assume that you refuse to comply with this agreement if any of the events set out &#160;<br/>below happens. We will then be entitled to demand that you pay on the outstanding balance under the agreement (together with&#160;<br/>any interest) by sending you a ‘default notice'. The events are:&#160;<br/>a)&#160;If you do not pay us any amount you owe us within 14 days of its due date&#160;<br/>b)&#160;If you provided false information when entering this agreement&#160;<br/>c)&#160;If you have done something which would allow any of your belongings, property, income or savings to be legally removed to&#160;<br/>pay off any of your debts.&#160;<br/>d) &#160; If any of the following happens:&#160;<br/>•</p>
			<p style="position:absolute;top:899px;left:45px;white-space:nowrap" class="ft03">A statutory demand (that is, a written demand for paying a debt of at least &pound; 750, which, if not paid may result in bankruptcy&#160;</p>
			<p style="position:absolute;top:917px;left:18px;white-space:nowrap" class="ft06">proceedings being brought against you) is not paid for 21 days or any steps are taken by you or anyone else to declare you&#160;<br/>bankrupt.&#160;<br/>•</p>
			<p style="position:absolute;top:953px;left:45px;white-space:nowrap" class="ft03">You take steps to enter into any arrangement or debt management plan with your creditors.&#160;</p>
			<p style="position:absolute;top:971px;left:18px;white-space:nowrap" class="ft03">•</p>
			<p style="position:absolute;top:971px;left:45px;white-space:nowrap" class="ft03">A bailiff or other officer controls or seizes any of your goods following a court order.&#160;</p>
			<p style="position:absolute;top:989px;left:18px;white-space:nowrap" class="ft03">•</p>
			<p style="position:absolute;top:989px;left:45px;white-space:nowrap" class="ft06">The landlord of the premises at your address threatens, or takes steps, to seize or in any other way control any of your&#160;<br/>goods.&#160;</p>
			<p style="position:absolute;top:1025px;left:18px;white-space:nowrap" class="ft05"><b>6&#160;Default&#160;interest&#160;and&#160;other&#160;enforcement&#160;rights&#160;-&#160;<br/></b>a)&#160;If you fail to pay us any amount you owe under this agreement by the date it is due, we may charge you interest on that&#160;</p>
			<p style="position:absolute;top:1061px;left:43px;white-space:nowrap" class="ft06">amount until you pay it. We may charge interest for each day you still owe the payment, at the rate shown in the section&#160;<br/>“Other Financial Information”. We can charge interest even after we have received a court judgement against you.&#160;</p>
			<p style="position:absolute;top:1097px;left:18px;white-space:nowrap" class="ft03">b)&#160;You agree to pay us any charges or costs shown in “Key Information” which may be payable by you, including our&#160;</p>
			<p style="position:absolute;top:1115px;left:43px;white-space:nowrap" class="ft03">reasonable legal costs for enforcing the this agreement.&#160;</p>
			<p style="position:absolute;top:1198px;left:205px;white-space:nowrap" class="ft04">KARIBA FINANCE IS A TRADING NAME OF MICRO-E C.I.C LTD REG 07090390&#160;</p>
			<p style="position:absolute;top:1231px;left:131px;white-space:nowrap" class="ft04">REGISTERED ADDRESS: DENBY HOUSE, TAYLOR LANE, LOSCOE, HEANOR, DERBYSHIRE, DE75 7TA</p>
		</div>

		<div id="page3-div" style="position:relative;width:892px;height:1262px;">
			<p style="position:absolute;top:111px;left:339px;white-space:nowrap" class="ft01">KARIBA FINANCE&#160;</p>
			<p style="position:absolute;top:531px;left:24px;white-space:nowrap" class="ft06">This Agreement is entered into on the understanding that you are over the age of 18 and the information you have provided is&#160;<br/>true and correct.&#160;</p>
			<p style="position:absolute;top:603px;left:24px;white-space:nowrap" class="ft02">Read the terms on this document and the Terms of Agreement included in your Pre-contract Information.&#160;</p>
			<p style="position:absolute;top:639px;left:24px;white-space:nowrap" class="ft02">This is a Credit Agreement regulated by the Consumer Credit Act 1974. Sign it only if you want to be bound by its terms:&#160;</p>
			<p style="position:absolute;top:176px;left:24px;white-space:nowrap" class="ft03"><i>Terms of the agreement [continued]&#160;</i></p>
			<p style="position:absolute;top:212px;left:24px;white-space:nowrap" class="ft06">c) &#160; Any bank reasonable bank charges we incur during collecting your payment may be passed on to you.&#160;<br/><b>7&#160;General&#160;conditions<br/></b>a)&#160;References to any Act or regulation includes any amendment to that Act or regulation.&#160;<br/>b)&#160;If at any time we allow you to do something which is against any of the terms and conditions of this agreement, this will not&#160;</p>
			<p style="position:absolute;top:284px;left:49px;white-space:nowrap" class="ft02">prevent us from insisting that you strictly follow the terms &#160;and conditions at any later time.&#160;</p>
			<p style="position:absolute;top:302px;left:24px;white-space:nowrap" class="ft02">c)&#160;If two or more of you have signed this agreement as the Borrower, you are liable jointly and severally, that is together as&#160;</p>
			<p style="position:absolute;top:320px;left:49px;white-space:nowrap" class="ft06">well as separately under this agreement. This means that either of you can be held fully responsible for the responsibilities&#160;<br/>of the Borrower under this agreement.&#160;</p>
			<p style="position:absolute;top:356px;left:24px;white-space:nowrap" class="ft02">d)&#160;We may transfer our rights and responsibilities under this agreement to another person. This will not take away any of your&#160;</p>
			<p style="position:absolute;top:374px;left:49px;white-space:nowrap" class="ft06">rights or responsibilities under this agreement. You may not transfer any of your rights or responsibilities under this&#160;<br/>agreement to another person.&#160;</p>
			<p style="position:absolute;top:410px;left:24px;white-space:nowrap" class="ft02">e)&#160;English law will apply to this agreement. If you entered into this agreement in Scotland, words that are not in current use in&#160;</p>
			<p style="position:absolute;top:428px;left:49px;white-space:nowrap" class="ft02">Scotland will have their nearest equivalent meanings.&#160;</p>
			<p style="position:absolute;top:446px;left:24px;white-space:nowrap" class="ft07"><b>8&#160;&#160;When&#160;this&#160;agreement&#160;comes&#160;into&#160;force<br/></b>&#160; &#160; &#160; This agreement will only only come into force when we or our authorised representative have signed it.&#160;</p>
			<p style="position:absolute;top:1198px;left:205px;white-space:nowrap" class="ft05">KARIBA FINANCE IS A TRADING NAME OF MICRO-E C.I.C LTD REG 07090390&#160;</p>
			<p style="position:absolute;top:1231px;left:131px;white-space:nowrap" class="ft05">REGISTERED ADDRESS: DENBY HOUSE, TAYLOR LANE, LOSCOE, HEANOR, DERBYSHIRE, DE75 7TA</p>
			<p style="position:absolute;top:757px;left:42px;white-space:nowrap" class="ft04"><b>Signature:</b></p>
			<p style="position:absolute;top:789px;left:71px;white-space:nowrap" class="ft04"><b>Email:&#160;</b>k.mkhonza@yahoo.co.uk</p>
		</div>


		{{-- End Contract Agreement --}}
	
	</div>
</div>	

	</div>
</div>
	  
@stop