<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" xmlns="http://www.w3.org/1999/html"> <!--<![endif]-->
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> {{ isset($page['pageTitle']) ? $page['pageTitle'].' | '.CNF_APPNAME : CNF_APPNAME }} </title>
	<meta name="keywords" content="{{ CNF_METAKEY }}">
	<meta name="description" content="{{ CNF_METADESC }}"/>
	<link rel="shortcut icon" href="{{ asset('favicon.ico')}}" type="image/x-icon">

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic,300italic,300'
		  rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>
	<!-- Global CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/kariba-finance/') }}/plugins/bootstrap/css/bootstrap.min.css">
	<!-- Plugins CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/kariba-finance/') }}/plugins/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" href="{{ asset('frontend/kariba-finance/') }}/plugins/flexslider/flexslider.css">

	{{-- Signature font --}}
	<link href='https://fonts.googleapis.com/css?family=League+Script' rel='stylesheet' type='text/css'>

	{{-- Multi step CSS--}}
			<!--Import Google Icon Font-->
	<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<!--Import Multi Step Indicator css-->
	<link href="{{ asset('frontend/kariba-finance/') }}/assets/css/gsi-step-indicator.min.css" rel="stylesheet"/>

	<!--Import  Step Form Wizard css-->
	<link href="{{ asset('frontend/kariba-finance/') }}/assets/css/tsf-step-form-wizard.css" rel="stylesheet"/>
	<!--Import  demo css-->
	<link href="{{ asset('frontend/kariba-finance/') }}/assets/css/demo.css" rel="stylesheet"/>
	<!--Font Awesome-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- Latest compiled and minified CSS -->
	{{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">--}}
			<!--Plugin for validation-->
	<link href="{{ asset('frontend/kariba-finance/') }}/assets/plugin/parsley/css/parsley.css" rel="stylesheet"/>


	<!-- Theme CSS -->

	<link id="theme-style3" rel="stylesheet" href="{{ asset('frontend/kariba-finance/') }}/css/datepicker.css">
	<link id="theme-style1" rel="stylesheet" href="{{ asset('frontend/kariba-finance/') }}/css/simple-slider.css">
	<link id="theme-style2" rel="stylesheet" href="{{ asset('frontend/kariba-finance/') }}/css/simple-slider-volume.css">

	<link id="theme-style" rel="stylesheet" href="{{ asset('frontend/kariba-finance/') }}/css/form-elements.css">
	<link id="theme-style" rel="stylesheet" href="{{ asset('frontend/kariba-finance/') }}/css/styles.css">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>

	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

<body class="home-page">

{{--comment this out and pull from hte cms when launching--}}
{{--@include($pages)--}}

		<!-- ******HEADER****** -->
<header id="header" class="header navbar-fixed-top" style="background: #000; height: 25px">
	<div class="container" style="background: #000;">
		<div class="row moneyadvice">
            <span>Warning: Late repayment can cause you serious money problems. For help, go to <a
						target="_new" href="http://www.moneyadviceservice.org.uk">moneyadviceservice.org.uk</a></span>
		</div>
	</div>
</header>

<header id="header_" class="header navbar" style="background: #fff; margin-top:25px; color: black;">
	<!--<div class="container" style="background: #000;">-->
	<!--<div class="row moneyadvice">-->
	<!--<span style="z-index: 9999; background: black; padding: 2px 20px;">Warning: Late repayment can cause you serious money problems. For help, go to <a-->
	<!--target="_new" href="http://www.moneyadviceservice.org.uk">moneyadviceservice.org.uk</a></span>-->
	<!--</div>-->
	<!--</div>-->

	<div class="container">
		<h1 class="logo">
			{{--<a href="/" style="color: darkgreen">Kariba Finance</a>--}}

			<a href="/"><img src="{{ asset('frontend/kariba-finance/') }}/images/logos/logo.png" width="165px"/></a>
		</h1><!--//logo-->

		@include('layouts/kariba-finance/menu')


	</div><!--//container-->
</header><!--//header-->

{{--<div class="bg-slider-wrapper">--}}
	{{--<div class="flexslider bg-slider">--}}
		{{--<ul class="slides">--}}
			{{--<li class="slide slide-1"></li>--}}
			{{--<!--<li class="slide slide-2"></li>-->--}}
			{{--<!--<li class="slide slide-3"></li>-->--}}
		{{--</ul>--}}
	{{--</div>--}}
{{--</div><!--//bg-slider-wrapper-->--}}

<div class="container">
	<div class="row">
		<div class="container">
			<div class="row">&nbsp;</div>
		</div>
	</div>
</div>


{{--<div class="bg-slider-wrapper">--}}
	{{--<div class="flexslider bg-slider">--}}
		{{--<ul class="slides">--}}
			{{--<li class="slide slide-1"></li>--}}
			{{--<!--<li class="slide slide-2"></li>-->--}}
			{{--<!--<li class="slide slide-3"></li>-->--}}
		{{--</ul>--}}
	{{--</div>--}}
{{--</div><!--//bg-slider-wrapper-->--}}

<div class="sections-wrapper">


	<div class="container" style="margin-top: 180px!important;">
		<div class="row">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">

					</div>
				</div>
			</div>

		</div>
		<!-- END STEP FORM WIZARD -->
		{{--<div class="clearfix"></div>--}}

		<div class="col-lg-12 col-md-12 col-xs-10 col-xs-offset-1">
			<div class="col-lg-12 col-md-12">
				<h4 style="padding-top: 20px;">Dear {!! $contract_info['fullname'] !!}</h4>

				<p class="section-heading">Thank you for your application. A member of our team will be in touch shortly.</p>

				<p class="section-heading">We have sent you a text, with activation details to your number ending in <?php echo substr_replace($contract_info['mobile'], '*', 0, -3); ?></p>

				<p class="section-heading">You will need to activate your account and monitor the progress of your application. </p>

				<p class="section-heading">Below is a quick summary of your application. </p>

				<p>This Loan Agreement is between us (the Lender) and you (the Borrower), on the terms set out below.</p>

				<p>Agreement no: <strong>{!! $contract_info['agreement_no'] !!}</strong></p>

				<p>Name (the Lender): Micro-E C.I.C Limited trading as Kariba Finance</p>

				<p>Adress: 4 Charmwood St, Derby, Derbyshire, DE1 2 GT</p>

			</div>

			<h4 class="section-heading col-lg-12 col-md-12">BORROWER'S DETAILS</h4>


			<div class="col-lg-6 col-md-6">
				<p>Name (the Borrower): <strong>{!! $contract_info['fullname'] !!}</strong></p>

				<p>Title: <strong>{!! $contract_info['title'] !!}</strong></p>
				<p>Email: <strong>{!! $contract_info['email'] !!}</strong></p>
				<p>Occupation: <strong>{!! $contract_info['occupation'] !!}</strong></p>
			</div>

			<div class="col-lg-6 col-md-6">
				<p>&nbsp;</p>
				<p>Date of birth: <strong>{!! $contract_info['dob'] !!}</strong></p>
				<p>Tel: <strong>{!! $contract_info['mobile'] !!}</strong></p>
				<p>Employment Status: <strong>{!! $contract_info['employment_status'] !!}</strong></p>
			</div>

			<div class="col-lg-12 col-md-12">
				<h4 class="section-heading">KEY FINANCIAL INFORMATION</h4>
				<p>Amount of credit: £ <strong>{!! $contract_info['loan'] !!}</strong></p>
				<p>Total Amount Payable (1+5): £ <strong>{!! money_format('%i', $contract_info['total_payable']) !!}</strong></p>
				<p>APR : {!! $contract_info['apr'] !!} %</p>
				{{--<p>Term of Agreement:  <strong>{!! $contract_info['terms'] !!} </strong> days  --}}{{-- {!! $contract_info['days'] !!} --}}{{--  APR : {!! $contract_info['apr'] !!} %</p>--}}
			</div>

			<div class="col-lg-12 col-md-12" style="margin-bottom: 100px">
				<h4 class="section-heading">Regards,</h4>
				<p>Kariba Finance Team</p>
			</div>


			{{--{!! $contract_info['days'] !!}--}}
{{--			{!! $contract_info['total_payable'] !!}--}}

			{{--<div class="col-lg-12 col-md-12">--}}
				{{--<h4 class="section-heading">OTHER FINANCIAL INFORMATION</h4>--}}
				{{--<p>Interest: [!! #### !!]</p>--}}
				{{--<p>Loan setup fee (admin fee): [!! #### !!]</p>--}}
				{{--<p>Total charge for credit (3+4): [!! #### !!]</p>--}}
			{{--</div>--}}

		</div>

		</div>

</div><!--//section-wrapper-->


@include('layouts/kariba-finance/footer')




<link id="theme-style" rel="stylesheet" href="{{ asset('frontend/kariba-finance/') }}/css/styles.css">

<!-- Javascript -->
<script type="text/javascript" src="{{ asset('frontend/kariba-finance')}}/plugins/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/kariba-finance')}}/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/kariba-finance')}}/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/kariba-finance')}}/plugins/bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/kariba-finance')}}/plugins/back-to-top.js"></script>
<script type="text/javascript" src="{{ asset('frontend/kariba-finance')}}/plugins/jquery-placeholder/jquery.placeholder.js"></script>
<script type="text/javascript" src="{{ asset('frontend/kariba-finance')}}/plugins/FitVids/jquery.fitvids.js"></script>
<script type="text/javascript" src="{{ asset('frontend/kariba-finance')}}/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/kariba-finance')}}/js/main.js"></script>
<script type="text/javascript" src="{{ asset('frontend/kariba-finance')}}/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="{{ asset('frontend/kariba-finance')}}/js/slider.js"></script>
<script type="text/javascript" src="{{ asset('frontend/kariba-finance')}}/js/index.js"></script>


{{--<script src="{{ asset('frontend/kariba-finance')}}/assets/js/jquery-1.11.3.min.js"></script>--}}
<script src="{{ asset('frontend/kariba-finance')}}/assets/js/demo.js"></script>

<!--Plugin for validation-->
{{--<script src="{{ asset('frontend/kariba-finance')}}/assets/plugin/parsley/js/parsley.min.js"></script>--}}
<script src="{{ asset('frontend/kariba-finance')}}/assets/js/tsf-wizard-plugin.js"></script>
<script src="{{ asset('frontend/kariba-finance')}}/assets/js/multistep.js"></script>

</body>
</html>