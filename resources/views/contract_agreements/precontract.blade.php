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






	</div>
</div>	

	</div>
</div>
	  
@stop