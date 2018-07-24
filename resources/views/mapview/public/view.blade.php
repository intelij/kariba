<div class="m-t" style="padding-top:25px;">	
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-responsive" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Title', (isset($fields['title']['language'])? $fields['title']['language'] : array())) }}</td>
						<td>{{ $row->title}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('First Name', (isset($fields['first_name']['language'])? $fields['first_name']['language'] : array())) }}</td>
						<td>{{ $row->first_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Middle Name', (isset($fields['middle_name']['language'])? $fields['middle_name']['language'] : array())) }}</td>
						<td>{{ $row->middle_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Last Name', (isset($fields['last_name']['language'])? $fields['last_name']['language'] : array())) }}</td>
						<td>{{ $row->last_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Password', (isset($fields['password']['language'])? $fields['password']['language'] : array())) }}</td>
						<td>{{ $row->password}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Confirm Password', (isset($fields['confirm_password']['language'])? $fields['confirm_password']['language'] : array())) }}</td>
						<td>{{ $row->confirm_password}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Marital Status', (isset($fields['marital_status']['language'])? $fields['marital_status']['language'] : array())) }}</td>
						<td>{{ $row->marital_status}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Email', (isset($fields['email']['language'])? $fields['email']['language'] : array())) }}</td>
						<td>{{ $row->email}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Phone', (isset($fields['phone']['language'])? $fields['phone']['language'] : array())) }}</td>
						<td>{{ $row->phone}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mobile', (isset($fields['mobile']['language'])? $fields['mobile']['language'] : array())) }}</td>
						<td>{{ $row->mobile}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date Of Birth', (isset($fields['date_of_birth']['language'])? $fields['date_of_birth']['language'] : array())) }}</td>
						<td>{{ $row->date_of_birth}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Loan Amount', (isset($fields['loan_amount']['language'])? $fields['loan_amount']['language'] : array())) }}</td>
						<td>{{ $row->loan_amount}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Loan Purpose', (isset($fields['loan_purpose']['language'])? $fields['loan_purpose']['language'] : array())) }}</td>
						<td>{{ $row->loan_purpose}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('House Number', (isset($fields['house_number']['language'])? $fields['house_number']['language'] : array())) }}</td>
						<td>{{ $row->house_number}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Build Name', (isset($fields['build_name']['language'])? $fields['build_name']['language'] : array())) }}</td>
						<td>{{ $row->build_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Street Name', (isset($fields['street_name']['language'])? $fields['street_name']['language'] : array())) }}</td>
						<td>{{ $row->street_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Town', (isset($fields['town']['language'])? $fields['town']['language'] : array())) }}</td>
						<td>{{ $row->town}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('City', (isset($fields['city']['language'])? $fields['city']['language'] : array())) }}</td>
						<td>{{ $row->city}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Post Code', (isset($fields['post_code']['language'])? $fields['post_code']['language'] : array())) }}</td>
						<td>{{ $row->post_code}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Tenancy', (isset($fields['tenancy']['language'])? $fields['tenancy']['language'] : array())) }}</td>
						<td>{{ $row->tenancy}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Time At Address', (isset($fields['time_at_address']['language'])? $fields['time_at_address']['language'] : array())) }}</td>
						<td>{{ $row->time_at_address}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Profession', (isset($fields['profession']['language'])? $fields['profession']['language'] : array())) }}</td>
						<td>{{ $row->profession}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Income Type', (isset($fields['income_type']['language'])? $fields['income_type']['language'] : array())) }}</td>
						<td>{{ $row->income_type}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Salary Frequency', (isset($fields['salary_frequency']['language'])? $fields['salary_frequency']['language'] : array())) }}</td>
						<td>{{ $row->salary_frequency}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Monthly Income', (isset($fields['monthly_income']['language'])? $fields['monthly_income']['language'] : array())) }}</td>
						<td>{{ $row->monthly_income}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Monthly Expenses', (isset($fields['monthly_expenses']['language'])? $fields['monthly_expenses']['language'] : array())) }}</td>
						<td>{{ $row->monthly_expenses}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Pay Date', (isset($fields['pay_date']['language'])? $fields['pay_date']['language'] : array())) }}</td>
						<td>{{ $row->pay_date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Acquisition Channel', (isset($fields['acquisition_channel']['language'])? $fields['acquisition_channel']['language'] : array())) }}</td>
						<td>{{ $row->acquisition_channel}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Other Income', (isset($fields['other_income']['language'])? $fields['other_income']['language'] : array())) }}</td>
						<td>{{ $row->other_income}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Account Name', (isset($fields['account_name']['language'])? $fields['account_name']['language'] : array())) }}</td>
						<td>{{ $row->account_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Account Number', (isset($fields['account_number']['language'])? $fields['account_number']['language'] : array())) }}</td>
						<td>{{ $row->account_number}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Sort Code', (isset($fields['sort_code']['language'])? $fields['sort_code']['language'] : array())) }}</td>
						<td>{{ $row->sort_code}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Proof Of Id', (isset($fields['proof_of_id']['language'])? $fields['proof_of_id']['language'] : array())) }}</td>
						<td>{{ $row->proof_of_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Proof Of Residency', (isset($fields['proof_of_residency']['language'])? $fields['proof_of_residency']['language'] : array())) }}</td>
						<td>{{ $row->proof_of_residency}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Entry By', (isset($fields['entry_by']['language'])? $fields['entry_by']['language'] : array())) }}</td>
						<td>{{ $row->entry_by}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	