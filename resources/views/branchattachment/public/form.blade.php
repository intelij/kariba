

		 {!! Form::open(array('url'=>'branchattachment/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Branch Attachment</legend>
									
									  <div class="form-group  " >
										<label for="Id" class=" control-label col-md-4 text-left"> Id </label>
										<div class="col-md-6">
										  <select name='id' rows='5' id='id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Title" class=" control-label col-md-4 text-left"> Title </label>
										<div class="col-md-6">
										  {!! Form::text('title', $row['title'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Description" class=" control-label col-md-4 text-left"> Description </label>
										<div class="col-md-6">
										  <textarea name='description' rows='5' id='editor' class='form-control editor '  
						 >{{ $row['description'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="File" class=" control-label col-md-4 text-left"> File </label>
										<div class="col-md-6">
										  
					<a href="javascript:void(0)" class="btn btn-xs btn-primary pull-right" onclick="addMoreFiles('file')"><i class="fa fa-plus"></i></a>
					<div class="fileUpl">	
					 	<input  type='file' name='file[]'  />			
					</div>
					<ul class="uploadedLists " >
					<?php $cr= 0; 
					$row['file'] = explode(",",$row['file']);
					?>
					@foreach($row['file'] as $files)
						@if(file_exists('.'.$files) && $files !='')
						<li id="cr-<?php echo $cr;?>" class="">							
							<a href="{{ url('/'.$files) }}" target="_blank" >{{ $files }}</a> 
							<span class="pull-right removeMultiFiles" rel="cr-<?php echo $cr;?>" url="{{$files}}">
							<i class="fa fa-trash-o  btn btn-xs btn-danger"></i></span>
							<input type="hidden" name="currfile[]" value="{{ $files }}"/>
							<?php ++$cr;?>
						</li>
						@endif
					
					@endforeach
					</ul>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> {!! Form::hidden('town', $row['town']) !!}{!! Form::hidden('created_at', $row['created_at']) !!}{!! Form::hidden('updated_at', $row['updated_at']) !!}</fieldset>
			</div>
			
			

			<div style="clear:both"></div>	
				
					
				  <div class="form-group">
					<label class="col-sm-4 text-right">&nbsp;</label>
					<div class="col-sm-8">	
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="fa  fa-check-circle"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="fa  fa-save "></i> {{ Lang::get('core.sb_save') }}</button>
				  </div>	  
			
		</div> 
		 
		 {!! Form::close() !!}
		 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#id").jCombo("{!! url('branchattachment/comboselect?filter=branch:id:name') !!}",
		{  selected_value : '{{ $row["id"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
