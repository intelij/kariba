@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title"><h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3> 
	<div class="sbox-tools" >
   		<a href="{{ URL::to('deposittransactions?return='.$return) }}" class="tips btn btn-xs btn-white pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="icon-backward"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
		@if($access['is_add'] ==1)
   		<a href="{{ URL::to('deposittransactions/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-white pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Account Recepient', (isset($fields['account_recepient']['language'])? $fields['account_recepient']['language'] : array())) }}</td>
						<td>{{ $row->account_recepient}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Product', (isset($fields['product']['language'])? $fields['product']['language'] : array())) }}</td>
						<td>{{ $row->product}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Display Deposits', (isset($fields['display_deposits']['language'])? $fields['display_deposits']['language'] : array())) }}</td>
						<td>{{ $row->display_deposits}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Product Type', (isset($fields['product_type']['language'])? $fields['product_type']['language'] : array())) }}</td>
						<td>{{ $row->product_type}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Currency', (isset($fields['currency']['language'])? $fields['currency']['language'] : array())) }}</td>
						<td>{{ $row->currency}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Interest Rate', (isset($fields['interest_rate']['language'])? $fields['interest_rate']['language'] : array())) }}</td>
						<td>{{ $row->interest_rate}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Maximun Withdrawal Amount', (isset($fields['maximun_withdrawal_amount']['language'])? $fields['maximun_withdrawal_amount']['language'] : array())) }}</td>
						<td>{{ $row->maximun_withdrawal_amount}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Recommended Deposit Amount', (isset($fields['recommended_deposit_amount']['language'])? $fields['recommended_deposit_amount']['language'] : array())) }}</td>
						<td>{{ $row->recommended_deposit_amount}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Account Notes', (isset($fields['account_notes']['language'])? $fields['account_notes']['language'] : array())) }}</td>
						<td>{{ $row->account_notes}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop