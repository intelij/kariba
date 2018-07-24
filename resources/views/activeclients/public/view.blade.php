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
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Title', (isset($fields['title']['language'])? $fields['title']['language'] : array())) }}</td>
						<td>{{ $row->title}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('First Name', (isset($fields['first_name']['language'])? $fields['first_name']['language'] : array())) }}</td>
						<td>{{ $row->first_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Middle Name', (isset($fields['middle_name']['language'])? $fields['middle_name']['language'] : array())) }}</td>
						<td>{{ $row->middle_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Last Name', (isset($fields['last_name']['language'])? $fields['last_name']['language'] : array())) }}</td>
						<td>{{ $row->last_name}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Approved Date', (isset($fields['approved_date']['language'])? $fields['approved_date']['language'] : array())) }}</td>
						<td>{{ $row->approved_date}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Date Of Birth', (isset($fields['date_of_birth']['language'])? $fields['date_of_birth']['language'] : array())) }}</td>
						<td>{{ $row->date_of_birth}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Preferred Language', (isset($fields['preferred_language']['language'])? $fields['preferred_language']['language'] : array())) }}</td>
						<td>{{ $row->preferred_language}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Email', (isset($fields['email']['language'])? $fields['email']['language'] : array())) }}</td>
						<td>{{ $row->email}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('Mobile', (isset($fields['mobile']['language'])? $fields['mobile']['language'] : array())) }}</td>
						<td>{{ $row->mobile}} </td>
						
					</tr>
				
					<tr>
						<td width='30%' class='label-view text-right'>{{ SiteHelpers::activeLang('House Number', (isset($fields['house_number']['language'])? $fields['house_number']['language'] : array())) }}</td>
						<td>{{ $row->house_number}} </td>
						
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
						<td width='30%' class='label-view text-right'></td>
						<td> <a href="javascript:history.go(-1)" class="btn btn-primary"> Back To Grid <a> </td>
						
					</tr>					
				
			</tbody>	
		</table>   

	 
	
	</div>
</div>	