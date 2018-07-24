<div class="m-t" style="padding-top:25px;">	
    <div class="row m-b-lg animated fadeInDown delayp1 text-center">
        <h3> {{ $pageTitle }} <small> {{ $pageNote }} </small></h3>
        <hr />       
    </div>
</div>
<div class="m-t">
	<div class="table-responsive" > 	

		<table class="table table-striped table-bordered" >
			<tbody>	
		
			
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Id', (isset($fields['id']['language'])? $fields['id']['language'] : array())) }}</td>
						<td>{{ $row->id}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Account Recepient', (isset($fields['account_recepient']['language'])? $fields['account_recepient']['language'] : array())) }}</td>
						<td>{{ $row->account_recepient}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Product', (isset($fields['product']['language'])? $fields['product']['language'] : array())) }}</td>
						<td>{{ $row->product}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Display Deposits', (isset($fields['display_deposits']['language'])? $fields['display_deposits']['language'] : array())) }}</td>
						<td>{{ $row->display_deposits}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Product Type', (isset($fields['product_type']['language'])? $fields['product_type']['language'] : array())) }}</td>
						<td>{{ $row->product_type}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Currency', (isset($fields['currency']['language'])? $fields['currency']['language'] : array())) }}</td>
						<td>{{ $row->currency}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Interest Rate', (isset($fields['interest_rate']['language'])? $fields['interest_rate']['language'] : array())) }}</td>
						<td>{{ $row->interest_rate}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Maximun Withdrawal Amount', (isset($fields['maximun_withdrawal_amount']['language'])? $fields['maximun_withdrawal_amount']['language'] : array())) }}</td>
						<td>{{ $row->maximun_withdrawal_amount}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Recommended Deposit Amount', (isset($fields['recommended_deposit_amount']['language'])? $fields['recommended_deposit_amount']['language'] : array())) }}</td>
						<td>{{ $row->recommended_deposit_amount}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Account Notes', (isset($fields['account_notes']['language'])? $fields['account_notes']['language'] : array())) }}</td>
						<td>{{ $row->account_notes}} </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	