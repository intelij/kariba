

		 {!! Form::open(array('url'=>'deposits/savepublic', 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}

	@if(Session::has('messagetext'))
	  
		   {!! Session::get('messagetext') !!}
	   
	@endif
	<ul class="parsley-error-list">
		@foreach($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
	</ul>		


<div class="col-md-12">
						<fieldset><legend> Deposits</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group  " >
										<label for="Account Type" class=" control-label col-md-4 text-left"> Account Type </label>
										<div class="col-md-6">
										  {!! Form::text('created_type', $row['created_type'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Branch" class=" control-label col-md-4 text-left"> Branch </label>
										<div class="col-md-6">
										  {!! Form::text('branch', $row['branch'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Office" class=" control-label col-md-4 text-left"> Office </label>
										<div class="col-md-6">
										  {!! Form::text('office', $row['office'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Asigned To Loan" class=" control-label col-md-4 text-left"> Asigned To Loan </label>
										<div class="col-md-6">
										  {!! Form::text('asigned_to_loan', $row['asigned_to_loan'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Executive" class=" control-label col-md-4 text-left"> Executive </label>
										<div class="col-md-6">
										  {!! Form::text('executive', $row['executive'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Client State" class=" control-label col-md-4 text-left"> Client State </label>
										<div class="col-md-6">
										  {!! Form::text('client_state', $row['client_state'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
										<label for="Activation Date" class=" control-label col-md-4 text-left"> Activation Date </label>
										<div class="col-md-6">
										  
				<div class="input-group m-b" style="width:150px !important;">
					{!! Form::text('activation_date', $row['activation_date'],array('class'=>'form-control date')) !!}
					<span class="input-group-addon"><i class="fa fa-calendar"></i></span>
				</div> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Identification Document" class=" control-label col-md-4 text-left"> Identification Document </label>
										<div class="col-md-6">
										  <input  type='file' name='identification_document' id='identification_document' @if($row['identification_document'] =='') class='required' @endif style='width:150px !important;'  />
					 	<div >
						{!! SiteHelpers::showUploadedFile($row['identification_document'],'') !!}
						
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
										<label for="Account" class=" control-label col-md-4 text-left"> Account </label>
										<div class="col-md-6">
										  <select name='account' rows='5' id='account' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Account Holder Name" class=" control-label col-md-4 text-left"> Account Holder Name </label>
										<div class="col-md-6">
										  {!! Form::text('account_holder_name', $row['account_holder_name'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Account State" class=" control-label col-md-4 text-left"> Account State </label>
										<div class="col-md-6">
										  <select name='account_state' rows='5' id='account_state' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Product" class=" control-label col-md-4 text-left"> Product </label>
										<div class="col-md-6">
										  <select name='product' rows='5' id='product' class='select2 '   ></select> 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Balance" class=" control-label col-md-4 text-left"> Balance </label>
										<div class="col-md-6">
										  {!! Form::text('balance', $row['balance'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
		
		
		$("#account").jCombo("{!! url('deposits/comboselect?filter=available_products:products:products') !!}",
		{  selected_value : '{{ $row["account"] }}' });
		
		$("#account_state").jCombo("{!! url('deposits/comboselect?filter=accounts_state:account_state:account_state') !!}",
		{  selected_value : '{{ $row["account_state"] }}' });
		
		$("#product").jCombo("{!! url('deposits/comboselect?filter=available_products:products:products') !!}",
		{  selected_value : '{{ $row["product"] }}' });
		 

		$('.removeCurrentFiles').on('click',function(){
			var removeUrl = $(this).attr('href');
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
