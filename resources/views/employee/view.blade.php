@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title"><h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3> 
	<div class="sbox-tools" >
   		<a href="{{ URL::to('employee?return='.$return) }}" class="tips btn btn-xs btn-white pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="icon-backward"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
		@if($access['is_add'] ==1)
   		<a href="{{ URL::to('employee/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-white pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
		@endif 
	</div>	
	</div>
	<div class="sbox-content" style="background:#fff;"> 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('EmployeeNumber', (isset($fields['employeeNumber']['language'])? $fields['employeeNumber']['language'] : array())) }}</td>
						<td>{{ $row->employeeNumber}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('LastName', (isset($fields['lastName']['language'])? $fields['lastName']['language'] : array())) }}</td>
						<td>{{ $row->lastName}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('FirstName', (isset($fields['firstName']['language'])? $fields['firstName']['language'] : array())) }}</td>
						<td>{{ $row->firstName}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Extension', (isset($fields['extension']['language'])? $fields['extension']['language'] : array())) }}</td>
						<td>{{ $row->extension}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Email', (isset($fields['email']['language'])? $fields['email']['language'] : array())) }}</td>
						<td>{{ $row->email}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('OfficeCode', (isset($fields['officeCode']['language'])? $fields['officeCode']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->officeCode,'officeCode','1:offices:officeCode:city|state|country') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('ReportsTo', (isset($fields['reportsTo']['language'])? $fields['reportsTo']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->reportsTo,'reportsTo','1:employees:employeeNumber:firstName|lastName') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('JobTitle', (isset($fields['jobTitle']['language'])? $fields['jobTitle']['language'] : array())) }}</td>
						<td>{{ $row->jobTitle}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Photo', (isset($fields['photo']['language'])? $fields['photo']['language'] : array())) }}</td>
						<td><a href="/uploads/images/">{{ $row->photo}} </a> </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop