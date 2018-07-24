

		 {!! Form::open(array('url'=>'clientsmanagement/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> All Clients</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group  " >
										<label for="Title" class=" control-label col-md-4 text-left"> Title </label>
										<div class="col-md-6">
										  {!! Form::text('title', $row['title'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="First Name" class=" control-label col-md-4 text-left"> First Name </label>
										<div class="col-md-6">
										  {!! Form::text('first_name', $row['first_name'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Middle Name" class=" control-label col-md-4 text-left"> Middle Name </label>
										<div class="col-md-6">
										  {!! Form::text('middle_name', $row['middle_name'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Last Name" class=" control-label col-md-4 text-left"> Last Name </label>
										<div class="col-md-6">
										  {!! Form::text('last_name', $row['last_name'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Assigned To Branch" class=" control-label col-md-4 text-left"> Assigned To Branch </label>
										<div class="col-md-6">
										  <select name='assigned_to_branch' rows='5' id='assigned_to_branch' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Assigned To Office" class=" control-label col-md-4 text-left"> Assigned To Office </label>
										<div class="col-md-6">
										  <select name='assigned_to_office' rows='5' id='assigned_to_office' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Assigned To Loan Executive" class=" control-label col-md-4 text-left"> Assigned To Loan Executive </label>
										<div class="col-md-6">
										  <select name='assigned_to_loan_executive' rows='5' id='assigned_to_loan_executive' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Client State" class=" control-label col-md-4 text-left"> Client State </label>
										<div class="col-md-6">
										  <select name='client_state' rows='5' id='client_state' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Approved Date" class=" control-label col-md-4 text-left"> Approved Date </label>
										<div class="col-md-6">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('approved_date', $row['approved_date'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Gender" class=" control-label col-md-4 text-left"> Gender </label>
										<div class="col-md-6">
										  {!! Form::text('gender', $row['gender'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Date Of Birth" class=" control-label col-md-4 text-left"> Date Of Birth </label>
										<div class="col-md-6">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('date_of_birth', $row['date_of_birth'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Preferred Language" class=" control-label col-md-4 text-left"> Preferred Language </label>
										<div class="col-md-6">
										  {!! Form::text('preferred_language', $row['preferred_language'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Email" class=" control-label col-md-4 text-left"> Email </label>
										<div class="col-md-6">
										  {!! Form::text('email', $row['email'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Phone" class=" control-label col-md-4 text-left"> Phone </label>
										<div class="col-md-6">
										  {!! Form::text('phone', $row['phone'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Mobile" class=" control-label col-md-4 text-left"> Mobile </label>
										<div class="col-md-6">
										  {!! Form::text('mobile', $row['mobile'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="House Number" class=" control-label col-md-4 text-left"> House Number </label>
										<div class="col-md-6">
										  {!! Form::text('house_number', $row['house_number'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Build Name" class=" control-label col-md-4 text-left"> Build Name </label>
										<div class="col-md-6">
										  {!! Form::text('build_name', $row['build_name'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Street Name" class=" control-label col-md-4 text-left"> Street Name </label>
										<div class="col-md-6">
										  {!! Form::text('street_name', $row['street_name'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Town" class=" control-label col-md-4 text-left"> Town </label>
										<div class="col-md-6">
										  {!! Form::text('town', $row['town'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="City" class=" control-label col-md-4 text-left"> City </label>
										<div class="col-md-6">
										  {!! Form::text('city', $row['city'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Post Code" class=" control-label col-md-4 text-left"> Post Code </label>
										<div class="col-md-6">
										  {!! Form::text('post_code', $row['post_code'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Completed Loan Cycle" class=" control-label col-md-4 text-left"> Completed Loan Cycle </label>
										<div class="col-md-6">
										  {!! Form::text('completed_loan_cycle', $row['completed_loan_cycle'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Identification Documents" class=" control-label col-md-4 text-left"> Identification Documents </label>
										<div class="col-md-6">
										  <textarea name='identification_documents' rows='5' id='identification_documents' class='form-control '  
				           >{{ $row['identification_documents'] }}</textarea> 
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
										<label for="Created At" class=" control-label col-md-4 text-left"> Created At </label>
										<div class="col-md-6">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('created_at', $row['created_at'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Updated At" class=" control-label col-md-4 text-left"> Updated At </label>
										<div class="col-md-6">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('updated_at', $row['updated_at'],array('class'=>'form-control datetime', 'style'=>'width:150px !important;')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div>
				 
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
		
		
		$("#assigned_to_branch").jCombo("{!! url('clientsmanagement/comboselect?filter=branch:name:name') !!}",
		{  selected_value : '{{ $row["assigned_to_branch"] }}' });
		
		$("#assigned_to_office").jCombo("{!! url('clientsmanagement/comboselect?filter=office:name:name') !!}",
		{  selected_value : '{{ $row["assigned_to_office"] }}' });
		
		$("#assigned_to_loan_executive").jCombo("{!! url('clientsmanagement/comboselect?filter=select_loan_executive:loan_executive:loan_executive') !!}",
		{  selected_value : '{{ $row["assigned_to_loan_executive"] }}' });
		
		$("#client_state").jCombo("{!! url('clientsmanagement/comboselect?filter=select_client_state:client_state:client_state') !!}",
		{  selected_value : '{{ $row["client_state"] }}' });
		
		$("#entry_by").jCombo("{!! url('clientsmanagement/comboselect?filter=tb_users:id:first_name|last_name') !!}",
		{  selected_value : '{{ $row["entry_by"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
