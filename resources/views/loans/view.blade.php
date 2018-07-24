@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title"><h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3> 
	<div class="sbox-tools" >
   		<a href="{{ URL::to('loans?return='.$return) }}" class="tips btn btn-xs btn-white pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="icon-backward"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
		@if($access['is_add'] ==1)
   		<a href="{{ URL::to('loans/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-white pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
		@endif 
	</div>	
	</div>
	<div class="sbox-content" style="background:#fff;"> 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Product', (isset($fields['product']['language'])? $fields['product']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->product,'product','1:products:id:product') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Account Id', (isset($fields['account_id']['language'])? $fields['account_id']['language'] : array())) }}</td>
						<td>{{ $row->account_id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Account Holder Name', (isset($fields['account_holder_name']['language'])? $fields['account_holder_name']['language'] : array())) }}</td>
						<td>{{ $row->account_holder_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Account State', (isset($fields['account_state']['language'])? $fields['account_state']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->account_state,'account_state','1:accounts_state:account_state:account_state') }} </td>
						
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Updated At', (isset($fields['updated_at']['language'])? $fields['updated_at']['language'] : array())) }}</td>
						<td>{{ $row->updated_at}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop