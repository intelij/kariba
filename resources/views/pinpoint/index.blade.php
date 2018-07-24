@extends('layouts.app')

@section('content')

{{--*/ usort($tableGrid, "SiteHelpers::_sort") /*--}}
  <div class="page-content row">

	
	<div class="page-content-wrapper m-t">	 	

<div class="sbox">
	<div class="sbox-title"> <h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3>
<div class="sbox-tools" >
		<a href="{{ url($pageModule) }}" class="btn btn-xs btn-white tips"  title="{{ Lang::get('core.btn_clearsearch') }}" ><i class="fa fa-trash-o"></i> {{ Lang::get('core.btn_clearsearch') }} </a>
		@if(Session::get('gid') ==1)
			<a href="{{ URL::to('sximo/module/config/'.$pageModule) }}" class="btn btn-xs btn-white tips" title=" {{ Lang::get('core.btn_config') }}" ><i class="fa fa-cog"></i></a>
		@endif 
		</div>
	</div>
	<div class="sbox-content"> 	
	    <div class="toolbar-line ">
			@if($access['is_add'] ==1)
	   		<a href="{{ URL::to('pinpoint/update') }}" class="tips btn btn-sm btn-white"  title="{{ Lang::get('core.btn_create') }}">
			<i class="icon-plus-circle2 "></i>&nbsp;{{ Lang::get('core.btn_create') }}</a>
			@endif  
			@if($access['is_remove'] ==1)
			<a href="javascript://ajax"  onclick="SximoDelete();" class="tips btn btn-sm btn-white" title="{{ Lang::get('core.btn_remove') }}">
			<i class="icon-remove4"></i>&nbsp;{{ Lang::get('core.btn_remove') }}</a>
			@endif 
			<a href="{{ URL::to( 'pinpoint/search') }}" class="btn btn-sm btn-white" onclick="SximoModal(this.href,'Advance Search'); return false;" title="{{ Lang::get('core.btn_search') }}"><i class="icon-search3"></i> {{ Lang::get('core.btn_search') }} </a>				
			@if($access['is_excel'] ==1)
			<a href="{{ URL::to('pinpoint/download?return='.$return) }}" class="tips btn btn-sm btn-white" title="{{ Lang::get('core.btn_download') }}">
			<i class="icon-file-download"></i>&nbsp;{{ Lang::get('core.btn_download') }} </a>
			@endif			
		 
		</div> 		

	 {!! (isset($search_map) ? $search_map : '') !!}
	
	 {!! Form::open(array('url'=>'pinpoint/delete/', 'class'=>'form-horizontal' ,'id' =>'SximoTable' )) !!}
	 <div class="table-responsive" style="min-height:300px;">


	</div>
	{!! Form::close() !!}



		@include('footer')
	</div>
</div>	
	</div>	  
</div>	
<script>
$(document).ready(function(){

	$('.do-quick-search').click(function(){
		$('#SximoTable').attr('action','{{ URL::to("pinpoint/multisearch")}}');
		$('#SximoTable').submit();
	});
	
});
</script>
@stop