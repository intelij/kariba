

		 {!! Form::open(array('url'=>'clients/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Clients</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group  " >
										<label for="Title" class=" control-label col-md-4 text-left"> Title </label>
										<div class="col-md-6">
										  <select name='title' rows='5' id='title' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="First Name" class=" control-label col-md-4 text-left"> First Name <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('first_name', $row['first_name'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
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
										<label for="Last Name" class=" control-label col-md-4 text-left"> Last Name <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('last_name', $row['last_name'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Password" class=" control-label col-md-4 text-left"> Password <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('password', $row['password'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Confirm Password" class=" control-label col-md-4 text-left"> Confirm Password <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('confirm_password', $row['confirm_password'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Marital Status" class=" control-label col-md-4 text-left"> Marital Status </label>
										<div class="col-md-6">
										  <select name='marital_status' rows='5' id='marital_status' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Email" class=" control-label col-md-4 text-left"> Email <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('email', $row['email'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
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
										<label for="Date Of Birth" class=" control-label col-md-4 text-left"> Date Of Birth <span class="asterix"> * </span></label>
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
										<label for="Loan Amount" class=" control-label col-md-4 text-left"> Loan Amount <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('loan_amount', $row['loan_amount'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Loan Purpose" class=" control-label col-md-4 text-left"> Loan Purpose <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('loan_purpose', $row['loan_purpose'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
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
										<label for="Street Name" class=" control-label col-md-4 text-left"> Street Name <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('street_name', $row['street_name'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Town" class=" control-label col-md-4 text-left"> Town <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('town', $row['town'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
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
										<label for="Post Code" class=" control-label col-md-4 text-left"> Post Code <span class="asterix"> * </span></label>
										<div class="col-md-6">
										  {!! Form::text('post_code', $row['post_code'],array('class'=>'form-control', 'placeholder'=>'', 'required'=>'true'  )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Tenancy" class=" control-label col-md-4 text-left"> Tenancy </label>
										<div class="col-md-6">
										  <select name='tenancy' rows='5' id='tenancy' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Time At Address" class=" control-label col-md-4 text-left"> Time At Address </label>
										<div class="col-md-6">
										  <select name='time_at_address' rows='5' id='time_at_address' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Profession" class=" control-label col-md-4 text-left"> Profession </label>
										<div class="col-md-6">
										  {!! Form::text('profession', $row['profession'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Income Type" class=" control-label col-md-4 text-left"> Income Type </label>
										<div class="col-md-6">
										  <select name='income_type' rows='5' id='income_type' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Salary Frequency" class=" control-label col-md-4 text-left"> Salary Frequency </label>
										<div class="col-md-6">
										  <select name='salary_frequency' rows='5' id='salary_frequency' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Monthly Income" class=" control-label col-md-4 text-left"> Monthly Income </label>
										<div class="col-md-6">
										  {!! Form::text('monthly_income', $row['monthly_income'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Monthly Expenses" class=" control-label col-md-4 text-left"> Monthly Expenses </label>
										<div class="col-md-6">
										  {!! Form::text('monthly_expenses', $row['monthly_expenses'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Pay Date" class=" control-label col-md-4 text-left"> Pay Date </label>
										<div class="col-md-6">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('pay_date', $row['pay_date'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Acquisition Channel" class=" control-label col-md-4 text-left"> Acquisition Channel </label>
										<div class="col-md-6">
										  <select name='acquisition_channel' rows='5' id='acquisition_channel' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Other Income" class=" control-label col-md-4 text-left"> Other Income </label>
										<div class="col-md-6">
										  {!! Form::text('other_income', $row['other_income'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Account Name" class=" control-label col-md-4 text-left"> Account Name </label>
										<div class="col-md-6">
										  {!! Form::text('account_name', $row['account_name'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Account Number" class=" control-label col-md-4 text-left"> Account Number </label>
										<div class="col-md-6">
										  {!! Form::text('account_number', $row['account_number'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Sort Code" class=" control-label col-md-4 text-left"> Sort Code </label>
										<div class="col-md-6">
										  {!! Form::text('sort_code', $row['sort_code'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Proof Of Id" class=" control-label col-md-4 text-left"> Proof Of Id </label>
										<div class="col-md-6">
										  <input  type='file' name='proof_of_id' id='proof_of_id' @if($row['proof_of_id'] =='') class='required' @endif style='width:150px !important;'  />
					 	<div >
						{!! SiteHelpers::showUploadedFile($row['proof_of_id'],'/uploads/files/') !!}
						
						</div>					
					 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Proof Of Residency" class=" control-label col-md-4 text-left"> Proof Of Residency </label>
										<div class="col-md-6">
										  <input  type='file' name='proof_of_residency' id='proof_of_residency' @if($row['proof_of_residency'] =='') class='required' @endif style='width:150px !important;'  />
					 	<div >
						{!! SiteHelpers::showUploadedFile($row['proof_of_residency'],'/uploads/files/') !!}
						
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
		
		
		$("#title").jCombo("{!! url('clients/comboselect?filter=select_title:tenancy:tenancy') !!}",
		{  selected_value : '{{ $row["title"] }}' });
		
		$("#marital_status").jCombo("{!! url('clients/comboselect?filter=select_marital:marital:marital') !!}",
		{  selected_value : '{{ $row["marital_status"] }}' });
		
		$("#tenancy").jCombo("{!! url('clients/comboselect?filter=select_tenancy:tenancy:tenancy') !!}",
		{  selected_value : '{{ $row["tenancy"] }}' });
		
		$("#time_at_address").jCombo("{!! url('clients/comboselect?filter=select_time_at_address:tenancy:tenancy') !!}",
		{  selected_value : '{{ $row["time_at_address"] }}' });
		
		$("#income_type").jCombo("{!! url('clients/comboselect?filter=select_employment:employment_status:employment_status') !!}",
		{  selected_value : '{{ $row["income_type"] }}' });
		
		$("#salary_frequency").jCombo("{!! url('clients/comboselect?filter=select_frequency:tenancy:tenancy') !!}",
		{  selected_value : '{{ $row["salary_frequency"] }}' });
		
		$("#acquisition_channel").jCombo("{!! url('clients/comboselect?filter=select_channel:tenancy:tenancy') !!}",
		{  selected_value : '{{ $row["acquisition_channel"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
