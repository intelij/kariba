@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title"><h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3> 
	<div class="sbox-tools" >
   		<a href="{{ URL::to('payments?return='.$return) }}" class="tips btn btn-xs btn-white pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="icon-backward"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
		@if($access['is_add'] ==1)
   		<a href="{{ URL::to('payments/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-white pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
		@endif 
	</div>	
	</div>
	<div class="sbox-content" style="background:#fff;"> 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Customer Id', (isset($fields['customer_id']['language'])? $fields['customer_id']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->customer_id,'customer_id','1:clients:id:first_name|middle_name|last_name') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Payment Reference', (isset($fields['payment_reference']['language'])? $fields['payment_reference']['language'] : array())) }}</td>
						<td>{{ $row->payment_reference}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Payment Date', (isset($fields['payment_date']['language'])? $fields['payment_date']['language'] : array())) }}</td>
						<td>{{ $row->payment_date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Amount', (isset($fields['amount']['language'])? $fields['amount']['language'] : array())) }}</td>
						<td>{{ $row->amount}} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop