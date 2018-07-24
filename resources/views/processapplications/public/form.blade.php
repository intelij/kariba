

		 {!! Form::open(array('url'=>'processapplications/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Process Applications</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group  " >
										<label for="Application Id" class=" control-label col-md-4 text-left"> Application Id </label>
										<div class="col-md-6">
										  <select name='application_id' rows='5' id='application_id' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Status" class=" control-label col-md-4 text-left"> Status </label>
										<div class="col-md-6">
										  
					<?php $status = explode(',',$row['status']);
					$status_opt = array( 'Approve' => 'Approve' ,  'Decline' => 'Decline' ,  'Pending' => 'Pending' ,  'Review' => 'Review' , ); ?>
					<select name='status' rows='5'   class='select2 '  > 
						<?php 
						foreach($status_opt as $key=>$val)
						{
							echo "<option  value ='$key' ".($row['status'] == $key ? " selected='selected' " : '' ).">$val</option>"; 						
						}						
						?></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Date" class=" control-label col-md-4 text-left"> Date </label>
										<div class="col-md-6">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('date', $row['date'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Notes" class=" control-label col-md-4 text-left"> Notes </label>
										<div class="col-md-6">
										  <textarea name='notes' rows='5' id='notes' class='form-control '  
				           >{{ $row['notes'] }}</textarea> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Documents" class=" control-label col-md-4 text-left"> Documents </label>
										<div class="col-md-6">
										  
					<a href="javascript:void(0)" class="btn btn-xs btn-primary pull-right" onclick="addMoreFiles('documents')"><i class="fa fa-plus"></i></a>
					<div class="documentsUpl">	
					 	<input  type='file' name='documents[]'  />			
					</div>
					<ul class="uploadedLists " >
					<?php $cr= 0; 
					$row['documents'] = explode(",",$row['documents']);
					?>
					@foreach($row['documents'] as $files)
						@if(file_exists('./uploads/files/'.$files) && $files !='')
						<li id="cr-<?php echo $cr;?>" class="">							
							<a href="{{ url('/uploads/files//'.$files) }}" target="_blank" >{{ $files }}</a> 
							<span class="pull-right removeMultiFiles" rel="cr-<?php echo $cr;?>" url="/uploads/files/{{$files}}">
							<i class="fa fa-trash-o  btn btn-xs btn-danger"></i></span>
							<input type="hidden" name="currdocuments[]" value="{{ $files }}"/>
							<?php ++$cr;?>
						</li>
						@endif
					
					@endforeach
					</ul>
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> </fieldset>
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
		
		
		$("#application_id").jCombo("{!! url('processapplications/comboselect?filter=clients:id:first_name|middle_name|last_name') !!}",
		{  selected_value : '{{ $row["application_id"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
