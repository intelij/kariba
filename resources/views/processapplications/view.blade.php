@extends('layouts.app')

@section('content')
<div class="page-content row">
    <!-- Page header -->

	 
	 
 	<div class="page-content-wrapper m-t">   

<div class="sbox ">
	<div class="sbox-title"><h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3> 
	<div class="sbox-tools" >
   		<a href="{{ URL::to('processapplications?return='.$return) }}" class="tips btn btn-xs btn-white pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="icon-backward"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
		@if($access['is_add'] ==1)
   		<a href="{{ URL::to('processapplications/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-white pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Status', (isset($fields['status']['language'])? $fields['status']['language'] : array())) }}</td>
						<td>{{ $row->status}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date', (isset($fields['date']['language'])? $fields['date']['language'] : array())) }}</td>
						<td>{{ date('',strtotime($row->date)) }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Notes', (isset($fields['notes']['language'])? $fields['notes']['language'] : array())) }}</td>
						<td>{{ $row->notes}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Documents', (isset($fields['documents']['language'])? $fields['documents']['language'] : array())) }}</td>
						<td>{!! SiteHelpers::formatRows($row->documents,$fields['documents'],$row ) !!} </td>
						
					</tr>
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	

	</div>
</div>
	  
@stop