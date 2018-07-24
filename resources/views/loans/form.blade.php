@extends('layouts.app')

@section('content')

  <div class="page-content row">
    <!-- Page header -->

 
 	<div class="page-content-wrapper m-t">


<div class="sbox">
	<div class="sbox-title"> <h3> {{ $pageTitle }} <small>{{ $pageNote }}</small></h3>
		<div class="sbox-tools" >
			<a href="{{ url($pageModule.'?return='.$return) }}" class="btn btn-xs btn-white tips"  title="{{ Lang::get('core.btn_back') }}" ><i class="icon-backward"></i> {{ Lang::get('core.btn_back') }} </a> 
		</div>
	</div>
	<div class="sbox-content"> 	

		<ul class="parsley-error-list">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>	

		 {!! Form::open(array('url'=>'loans/save?return='.$return, 'class'=>'form-horizontal','files' => true , 'parsley-validate'=>'','novalidate'=>' ')) !!}
<div class="col-md-12">
						<fieldset><legend> Loans</legend>
				{!! Form::hidden('id', $row['id']) !!}					
									  <div class="form-group  " >
										<label for="Account Holder Name" class=" control-label col-md-4 text-left"> Account Holder Name </label>
										<div class="col-md-6">
										  {!! Form::text('account_holder_name', $row['account_holder_name'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Account Id" class=" control-label col-md-4 text-left"> Account Id </label>
										<div class="col-md-6">
										  {!! Form::text('account_id', $row['account_id'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
										<label for="Activation Date" class=" control-label col-md-4 text-left"> Activation Date </label>
										<div class="col-md-6">
										  {!! Form::text('activation_date', $row['activation_date'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
										<label for="Product Type" class=" control-label col-md-4 text-left"> Product Type </label>
										<div class="col-md-6">
										  {!! Form::text('product_type', $row['product_type'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Loan Amount" class=" control-label col-md-4 text-left"> Loan Amount </label>
										<div class="col-md-6">
										  {!! Form::text('loan_amount', $row['loan_amount'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Principal Due" class=" control-label col-md-4 text-left"> Principal Due </label>
										<div class="col-md-6">
										  {!! Form::text('principal_due', $row['principal_due'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Total Due" class=" control-label col-md-4 text-left"> Total Due </label>
										<div class="col-md-6">
										  {!! Form::text('total_due', $row['total_due'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Total Paid" class=" control-label col-md-4 text-left"> Total Paid </label>
										<div class="col-md-6">
										  {!! Form::text('total_paid', $row['total_paid'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Interest Rate" class=" control-label col-md-4 text-left"> Interest Rate </label>
										<div class="col-md-6">
										  {!! Form::text('interest_rate', $row['interest_rate'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Interest Calculation Method" class=" control-label col-md-4 text-left"> Interest Calculation Method </label>
										<div class="col-md-6">
										  {!! Form::text('interest_calculation_method', $row['interest_calculation_method'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Accrued Interest Posting Frequency" class=" control-label col-md-4 text-left"> Accrued Interest Posting Frequency </label>
										<div class="col-md-6">
										  {!! Form::text('accrued_interest_posting_frequency', $row['accrued_interest_posting_frequency'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Arrears Tolerance Period" class=" control-label col-md-4 text-left"> Arrears Tolerance Period </label>
										<div class="col-md-6">
										  {!! Form::text('arrears_tolerance_period', $row['arrears_tolerance_period'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Payment Allocation Method" class=" control-label col-md-4 text-left"> Payment Allocation Method </label>
										<div class="col-md-6">
										  {!! Form::text('payment_allocation_method', $row['payment_allocation_method'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Repayment Rate" class=" control-label col-md-4 text-left"> Repayment Rate </label>
										<div class="col-md-6">
										  {!! Form::text('repayment_rate', $row['repayment_rate'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Number Of Installments" class=" control-label col-md-4 text-left"> Number Of Installments </label>
										<div class="col-md-6">
										  {!! Form::text('number_of_installments', $row['number_of_installments'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
										 </div> 
										 <div class="col-md-2">
										 	
										 </div>
									  </div> 					
									  <div class="form-group  " >
										<label for="Collect Principal Every" class=" control-label col-md-4 text-left"> Collect Principal Every </label>
										<div class="col-md-6">
										  {!! Form::text('collect_principal_every', $row['collect_principal_every'],array('class'=>'form-control', 'placeholder'=>'',   )) !!} 
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
					<button type="submit" name="apply" class="btn btn-info btn-sm" ><i class="icon-checkmark-circle2"></i> {{ Lang::get('core.sb_apply') }}</button>
					<button type="submit" name="submit" class="btn btn-primary btn-sm" ><i class="icon-bubble-check"></i> {{ Lang::get('core.sb_save') }}</button>
					<button type="button" onclick="location.href='{{ URL::to('loans?return='.$return) }}' " class="btn btn-warning btn-sm "><i class="icon-cancel-circle2 "></i>  {{ Lang::get('core.sb_cancel') }} </button>
					</div>	  
			
				  </div> 
		 
		 {!! Form::close() !!}
	</div>
</div>		 
</div>	
</div>			 
   <script type="text/javascript">
	$(document).ready(function() { 
		
		
		$("#account_state").jCombo("{!! url('loans/comboselect?filter=accounts_state:account_state:account_state') !!}",
		{  selected_value : '{{ $row["account_state"] }}' });
		
		$("#product").jCombo("{!! url('loans/comboselect?filter=products:id:product') !!}",
		{  selected_value : '{{ $row["product"] }}' });
		 

		$('.removeMultiFiles').on('click',function(){
			var removeUrl = '{{ url("loans/removefiles?file=")}}'+$(this).attr('url');
			$(this).parent().remove();
			$.get(removeUrl,function(response){});
			$(this).parent('div').empty();	
			return false;
		});		
		
	});
	</script>		 
@stop