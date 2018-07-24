@extends('layouts.app')

@section('content')
<div class="page-content row">
 	<div class="page-content-wrapper m-t">   

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
  	<li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><b>{{ $pageTitle }} : </b>  View Detail </a></li>
	@foreach($subgrid as $sub)
		<li role="presentation"><a href="#{{ str_replace(" ","_",$sub['title']) }}" aria-controls="profile" role="tab" data-toggle="tab"><b>{{ $pageTitle }}</b>  : {{ $sub['title'] }}</a></li>
	@endforeach
  </ul>

  <!-- Tab panes -->
  <div class="tab-content m-t">
  	<div role="tabpanel" class="tab-pane active" id="home">
  		
		<div class="sbox">
			<div class="sbox-title"> 
				<h5> {{ $pageTitle }} <small>{{ $pageNote }}</small></h5>
				<div class="sbox-tools" >
			   		<a href="{{ URL::to('branches?return='.$return) }}" class="tips btn btn-xs btn-white pull-right" title="{{ Lang::get('core.btn_back') }}"><i class="icon-backward"></i>&nbsp;{{ Lang::get('core.btn_back') }}</a>
					@if($access['is_add'] ==1)
			   		<a href="{{ URL::to('branches/update/'.$id.'?return='.$return) }}" class="tips btn btn-xs btn-white pull-right" title="{{ Lang::get('core.btn_edit') }}"><i class="fa fa-edit"></i>&nbsp;{{ Lang::get('core.btn_edit') }}</a>
					@endif
				</div>	 
			</div>
			<div class="sbox-content" style="background:#fff;"> 	

				<table class="table table-striped table-bordered" >
					<tbody>	
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Name', (isset($fields['name']['language'])? $fields['name']['language'] : array())) }}</td>
						<td>{{ $row->name}} </td>
						
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
  	@foreach($subgrid as $sub)
  		<div role="tabpanel" class="tab-pane" id="{{ str_replace(" ","_",$sub['title']) }}"></div>
  	@endforeach
  </div>


</div>
</div>


<script type="text/javascript">
	$(function(){
		<?php for($i=0 ; $i<count($subgrid); $i++)  :?>
			$('#{{ str_replace(" ","_",$subgrid[$i]['title']) }}').load('{{ url("branches/lookup/".implode("-",$subgrid["$i"])."-".$id)}}')
		<?php endfor;?>
	})

</script>
	  
@stop