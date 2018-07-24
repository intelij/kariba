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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('EmployeeNumber', (isset($fields['employeeNumber']['language'])? $fields['employeeNumber']['language'] : array())) }}</td>
						<td>{{ $row->employeeNumber}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('LastName', (isset($fields['lastName']['language'])? $fields['lastName']['language'] : array())) }}</td>
						<td>{{ $row->lastName}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('FirstName', (isset($fields['firstName']['language'])? $fields['firstName']['language'] : array())) }}</td>
						<td>{{ $row->firstName}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Extension', (isset($fields['extension']['language'])? $fields['extension']['language'] : array())) }}</td>
						<td>{{ $row->extension}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Email', (isset($fields['email']['language'])? $fields['email']['language'] : array())) }}</td>
						<td>{{ $row->email}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('OfficeCode', (isset($fields['officeCode']['language'])? $fields['officeCode']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->officeCode,'officeCode','1:offices:officeCode:city|state|country') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('ReportsTo', (isset($fields['reportsTo']['language'])? $fields['reportsTo']['language'] : array())) }}</td>
						<td>{{ SiteHelpers::formatLookUp($row->reportsTo,'reportsTo','1:employees:employeeNumber:firstName|lastName') }} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('JobTitle', (isset($fields['jobTitle']['language'])? $fields['jobTitle']['language'] : array())) }}</td>
						<td>{{ $row->jobTitle}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Photo', (isset($fields['photo']['language'])? $fields['photo']['language'] : array())) }}</td>
						<td><a href="/uploads/images/">{{ $row->photo}} </a> </td>
						
					</tr>
						
					<tr>
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	