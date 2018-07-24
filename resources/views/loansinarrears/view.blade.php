@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title"><h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3> 
	<div class="sbox-tools" >
   		<a href="{{ URL::to('loansinarrears?return='.$return) }}" class="tips btn btn-xs btn-white pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="icon-backward"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
		@if($access['is_add'] ==1)
   		<a href="{{ URL::to('loansinarrears/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-white pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Account Holder Name', (isset($fields['account_holder_name']['language'])? $fields['account_holder_name']['language'] : array())) }}</td>
						<td>{{ $row->account_holder_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Account Id', (isset($fields['account_id']['language'])? $fields['account_id']['language'] : array())) }}</td>
						<td>{{ $row->account_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Account State', (isset($fields['account_state']['language'])? $fields['account_state']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->account_state,'account_state','1:accounts_state:account_state:account_state') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Activation Date', (isset($fields['activation_date']['language'])? $fields['activation_date']['language'] : array())) }}</td>
						<td>{{ $row->activation_date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Product', (isset($fields['product']['language'])? $fields['product']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->product,'product','1:products:id:product') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Product Type', (isset($fields['product_type']['language'])? $fields['product_type']['language'] : array())) }}</td>
						<td>{{ $row->product_type}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Loan Amount', (isset($fields['loan_amount']['language'])? $fields['loan_amount']['language'] : array())) }}</td>
						<td>{{ $row->loan_amount}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Principal Due', (isset($fields['principal_due']['language'])? $fields['principal_due']['language'] : array())) }}</td>
						<td>{{ $row->principal_due}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Total Due', (isset($fields['total_due']['language'])? $fields['total_due']['language'] : array())) }}</td>
						<td>{{ $row->total_due}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Total Paid', (isset($fields['total_paid']['language'])? $fields['total_paid']['language'] : array())) }}</td>
						<td>{{ $row->total_paid}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Interest Rate', (isset($fields['interest_rate']['language'])? $fields['interest_rate']['language'] : array())) }}</td>
						<td>{{ $row->interest_rate}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Interest Calculation Method', (isset($fields['interest_calculation_method']['language'])? $fields['interest_calculation_method']['language'] : array())) }}</td>
						<td>{{ $row->interest_calculation_method}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Accrued Interest Posting Frequency', (isset($fields['accrued_interest_posting_frequency']['language'])? $fields['accrued_interest_posting_frequency']['language'] : array())) }}</td>
						<td>{{ $row->accrued_interest_posting_frequency}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Arrears Tolerance Period', (isset($fields['arrears_tolerance_period']['language'])? $fields['arrears_tolerance_period']['language'] : array())) }}</td>
						<td>{{ $row->arrears_tolerance_period}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Payment Allocation Method', (isset($fields['payment_allocation_method']['language'])? $fields['payment_allocation_method']['language'] : array())) }}</td>
						<td>{{ $row->payment_allocation_method}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Repayment Rate', (isset($fields['repayment_rate']['language'])? $fields['repayment_rate']['language'] : array())) }}</td>
						<td>{{ $row->repayment_rate}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Number Of Installments', (isset($fields['number_of_installments']['language'])? $fields['number_of_installments']['language'] : array())) }}</td>
						<td>{{ $row->number_of_installments}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Collect Principal Every', (isset($fields['collect_principal_every']['language'])? $fields['collect_principal_every']['language'] : array())) }}</td>
						<td>{{ $row->collect_principal_every}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Created At', (isset($fields['created_at']['language'])? $fields['created_at']['language'] : array())) }}</td>
						<td>{{ $row->created_at}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Updated At', (isset($fields['updated_at']['language'])? $fields['updated_at']['language'] : array())) }}</td>
						<td>{{ $row->updated_at}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Entry By', (isset($fields['entry_by']['language'])? $fields['entry_by']['language'] : array())) }}</td>
						<td>{{ $row->entry_by}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop