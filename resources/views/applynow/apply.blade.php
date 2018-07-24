<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
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
    {{--<link rel="stylesheet" href="{{ asset('frontend/kariba-finance/') }}/plugins/bootstrap/css/bootstrap.min.css">--}}

    <!--Import Multi Step Indicator css-->
    <link href="{{ asset('frontend/kariba-finance/') }}/assets/css/gsi-step-indicator.min.css" rel="stylesheet" />

    <!--Import  Step Form Wizard css-->
    <link href="{{ asset('frontend/kariba-finance/') }}/assets/css/tsf-step-form-wizard.min.css" rel="stylesheet" />
    <!--Import  demo css-->
    <link href="{{ asset('frontend/kariba-finance/') }}/assets/css/demo.min.css" rel="stylesheet" />

    <link href="{{ asset('frontend/kariba-finance/') }}/assets/plugin/parsley/css/parsley.min.css" rel="stylesheet" />

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        #prompt, #prompt2 {font-size: 12px; font-weight: normal;}
    </style>

<body class="home-page">

{{--comment this out and pull from hte cms when launching--}}
{{--@include($pages)--}}

        <!-- ******HEADER****** -->
<header id="header" class="header navbar-fixed-top" style="background: #000; height: 25px; text-align: center;">
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

    <div class="container" style="width: 96%">
        <h1 class="logo">
            {{--<a href="/" style="color: darkgreen">Kariba Finance</a>--}}

            <a href="/"><img src="{{ asset('frontend/kariba-finance/') }}/images/logos/logo.png" width="165px"/></a>
        </h1><!--//logo-->

        @include('layouts/kariba-finance/menu')


    </div><!--//container-->
</header><!--//header-->



<section class="page-header">
    <div class="container">

        <h1> APPLY NOW</h1>

        <!-- breadcrumbs -->
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li class="active">Apply Now</li>
        </ol><!-- /breadcrumbs -->

    </div>
</section>


<div class="sections-wrapper" id="section_wrapper">

    <div class="demo-settings" data-open="true">

        <div class="settings-main">
            <label>Step effect</label>
            <select class="form-control" id="stepEffect">
                <option value="basic" selected="selected">basic</option>
                <option value="bounce">bounce</option>
                <option value="slideRightLeft">slideRightLeft</option>
                <option value="slideLeftRight">slideLeftRight</option>

                <option value="flip">flip</option>
                <option value="transformation">transformation</option>
                <option value="slideDownUp">slideDownUp</option>
                <option value="slideUpDown">slideUpDown</option>
            </select>
            <br />
            <label for="stepTransition">
                Step transition <input type="checkbox" id="stepTransition" name="stepTransition" value="11" checked />
            </label>
            <br />
            <label for="showButtons">
                Show buttons <input type="checkbox" id="showButtons" name="showButtons" value="111" checked />
            </label>
            <br />
            <label for="showStepNum">
                Show stepNum <input type="checkbox" id="showStepNum" name="showStepNum" value="123" checked />
            </label>


        </div>
    </div>

    {{--{!! $date = Carbon\Carbon::createFromFormat('d/m/Y', $date) !!}--}}

    <div class="container">
        <!--<div class="row"><div id="result" class="code-example"></div></div>-->
        <div class="row">
            <!-- BEGIN STEP FORM WIZARD -->
            <div class="tsf-wizard tsf-wizard-1">
                <!-- BEGIN NAV STEP-->
                <!-- BEGIN NAV STEP-->
                <div class="tsf-nav-step">
                    <!-- BEGIN STEP INDICATOR-->
                    <ul class="gsi-step-indicator triangle gsi-style-1  gsi-transition ">
                        <li class="current" data-target="step-1">
                            <a href="#0">
                                <span class="number">1</span>
                                <span class="desc">
                                    <label>Personal Details</label>
                                    <span>Tell us more about yourself</span>
                                </span>
                            </a>
                        </li>
                        <li data-target="step-2">
                            <a href="#0">
                                <span class="number">2</span>
                                <span class="desc">
                                    <label>Loan details</label>
                                    <span>Tell us how much you need</span>
                                </span>
                            </a>
                        </li>
                        <li data-target="step-3">
                            <a href="#0">
                                <span class="number">
                                    3
                                </span>
                                <span class="desc">
                                    <label>Expenditure</label>
                                    <span>Household Monthly Spending</span>
                                </span>
                            </a>
                        </li>
                        <li data-target="step-4">
                            <a href="#0">
                                <span class="number">
                                    4
                                </span>
                                <span class="desc">
                                    <label>Residential Details</label>
                                    <span>Proof of residency</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- END STEP INDICATOR--->
                </div>
                <!-- END NAV STEP-->
                <!-- END NAV STEP-->
                <!-- BEGIN STEP CONTAINER -->

                <div class="tsf-container">
                    <!-- BEGIN CONTENT-->
                    <form class="tsf-content" action="process_application" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                        <!--<form class="tsf-form">-->
                        <!-- BEGIN STEP 1-->
                        <div class="tsf-step step-1 active">
                            <fieldset>
                                <legend>Provide your account details</legend>
                                <div class="row">
                                    <!-- BEGIN STEP CONTENT-->
                                    <div class="tsf-step-content">
                                        <div class="col-lg-12">
                                            <!-- Select Basic -->
                                            <div class="form-group col-lg-2">
                                                <label class="control-label" for="title">Title</label>
                                                <select id="title" name="title" class="form-control" required>
                                                    <option value="">Please select ...</option>
                                                    <option value="Miss">Miss</option>
                                                    <option value="Mr">Mr</option>
                                                    <option value="Mrs">Mrs</option>
                                                    <option value="Ms">Ms</option>
                                                </select>
                                            </div>
                                            <!-- Start comment -->
                                            <!-- Text input-->
                                            <div class="form-group col-lg-4">
                                                <label class="control-label" for="first_name">First name</label>
                                                <input id="first_name" name="first_name" type="text"
                                                       placeholder="First Name" class="form-control input-md" required>

                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group col-lg-3">
                                                <label class="control-label" for="middle_name">Middle name</label>
                                                <input id="middle_name" name="middle_name" type="text"
                                                       placeholder="Middle name" class="form-control input-md">

                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group col-lg-3">
                                                <label class="control-label" for="last_name">Last name</label>
                                                <input id="last_name" name="last_name" type="text" placeholder="Last name"
                                                       class="form-control input-md" required>

                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group col-lg-6">
                                                <label class="control-label" for="email">Email</label>
                                                <input id="email" name="email" type="email" placeholder="name@domain.com"
                                                       class="form-control input-md" required>

                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group col-lg-6">
                                                <label class="control-label" for="dob">Date of birth</label>
                                                <input id="dob" name="dob" type="date" placeholder="date of birth"
                                                       class="form-control input-md" required>

                                            </div>



                                            <!-- Select Basic -->
                                            <div class="form-group col-lg-6">
                                                <label class="control-label" for="password">Create new password <span id="prompt">(Strength: <span id="passstrength"></span>)</span></label>
                                                <input id="password" name="password" type="password" placeholder="**********"
                                                       class="form-control input-md" required>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group col-lg-6">
                                                <label class="control-label" for="confirmPassword">Confirm new password <span id="prompt2"></span></label>
                                                <input id="confirmPassword" name="confirmPassword" type="password" placeholder="**********"
                                                       class="form-control input-md"  onblur="validatePassword()" required>
                                            </div>



                                            <!-- Text input-->
                                            <div class="form-group col-lg-6">
                                                <label class="control-label" for="mobile">Mobile number</label>
                                                <input id="mobile" name="mobile" type="text" placeholder="mobile number"
                                                       class="form-control input-md" required>

                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group col-lg-6">
                                                <label class="control-label" for="phone">Alternative number</label>
                                                <input id="phone" name="phone" type="text" placeholder="phone number"
                                                       class="form-control input-md">

                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group col-lg-6">
                                                <label class="control-label" for="marital_status">Marital Status</label>
                                                <select id="marital_status" name="marital_status" class="form-control" required>
                                                    <option value="">Please Select ...</option>
                                                    <option value="S">Single</option>
                                                    <option value="M">Married</option>
                                                    <option value="D">Divorced</option>
                                                    <option value="W">Widowed</option>
                                                    <option value="L">Living together</option>
                                                    <option value="SP">Separated</option>
                                                    <option value="O">Other</option>
                                                </select>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group col-lg-6">
                                                <label class="control-label" for="acquisition_channel">Who referred you to us?</label>
                                                <input id="acquisition_channel" name="acquisition_channel" type="text" placeholder="Who referred you to us"
                                                       class="form-control input-md" required>
                                            </div>


                                            {{-- residential status --}}

                                                    <!-- Select Basic -->
                                            <div class="form-group col-lg-3">
                                                <label class="control-label" for="tenancy">Residential status</label>
                                                <select id="tenancy" name="tenancy" class="form-control" required>
                                                    <option value="">Please select ..</option>
                                                    <option value="Owner">Owner</option>
                                                    <option value="Living with parents">Living with parents</option>
                                                    <option value="Tenant">Tenant</option>
                                                    <option value="council">Council Tenant</option>
                                                    <option value="Joint Owner">Joint owner</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>

                                            <!-- Select Basic -->
                                            <div class="form-group col-lg-3">
                                                <label class="control-label" for="employment_status">Employment status</label>
                                                <select id="employment_status" name="employment_status" class="form-control" required>
                                                    <option value="">Please select ..</option>
                                                    <option value="Benefits">On Benefits</option>
                                                    <option value="Employed full time">Employed full time</option>
                                                    <option value="Employed part time">Employed part time</option>
                                                    <option value="Self Employed">Self Employed</option>
                                                    <option value="student">Student</option>
                                                    <option value="homemaker">Homemaker</option>
                                                    <option value="unemployed">Unemployed</option>
                                                    <option value="armed forces">In armed forces</option>
                                                    <option value="other">other</option>
                                                </select>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group col-lg-3">
                                                <label class="control-label" for="profession">Profession</label>
                                                <input id="profession" name="profession" type="text" placeholder="profession"
                                                       class="form-control input-md" required>

                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group col-lg-3">
                                                <label class="control-label" for="current_employer">Time with your current employer</label>
                                                <select id="current_employer" name="current_employer" class="form-control input-md" required>
                                                    <optgroup label="Months">
                                                        <option value="">Please select ..</option>
                                                        <option value="0">0</option>
                                                        <option value="1 Month">1</option>
                                                        <option value="2 Months">2</option>
                                                        <option value="3 Months">3</option>
                                                        <option value="4 Months">4</option>
                                                        <option value="5 Months">5</option>
                                                        <option value="6 Months">6</option>
                                                        <option value="7 Months">7</option>
                                                        <option value="8 Months">8</option>
                                                        <option value="9 Months">9</option>
                                                        <option value="10 Months">10</option>
                                                        <option value="11 Months">11</option>
                                                    </optgroup>
                                                    <optgroup label="Years">
                                                        <option value="1 year">1</option>
                                                        <option value="2 years">2</option>
                                                        <option value="3 years">3</option>
                                                        <option value="4 years">4</option>
                                                        <option value="Over 5 years">5+</option>
                                                    </optgroup>

                                                </select>

                                                {{--<input id="current_employer" name="current_employer" type="text"--}}
                                                {{--placeholder="period with the current employer" class="form-control input-md">--}}

                                            </div>

                                            <!-- End Commennt -->


                                        </div>
                                    </div>
                                    <!-- END STEP CONTENT-->
                                </div>

                            </fieldset>
                        </div>
                        <!-- END STEP 1-->
                        <!-- BEGIN STEP 2-->
                        <div class="tsf-step step-2">
                            <fieldset>
                                <legend>How much would you like to borrow?</legend>
                                <!-- BEGIN STEP CONTENT-->
                                <div class="tsf-step-content">
                                    <!-- Start Comment -->
                                    <div class="form-group col-lg-6">
                                        <label class="control-label" for="loan_amount">Loan amount</label>
                                        <input id="loan_amount" name="loan_amount" type="number" placeholder="loan amount"
                                               class="form-control input-md" required value="{!! isset($data['loan_amount']) ? $data['loan_amount'] : 0 !!}">

                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group col-lg-6">
                                        <label class="control-label" for="loan_purpose">Loan purpose</label>
                                        <select id="loan_purpose" name="loan_purpose" class="form-control" required>
                                            <option value="">Please select ..</option>
                                            <option value="subsistance">Subsistance</option>
                                            <option value="one off">One off</option>
                                            <option value="other">other</option>
                                        </select>

                                    </div>


                                    <!-- Text input-->
                                    <div class="form-group  col-lg-6">
                                        <label class="control-label" for="proposed_payment_date">Proposed payment date {!! $data['repayment_date'] !!}</label>
                                        <input id="proposed_payment_date" name="proposed_payment_date" type="date" placeholder="proposed payment date"
                                               class="form-control input-md" value="{!! isset($data['repayment_date']) ? date("Y-m-d", strtotime($data['repayment_date'])) : '' !!}" required>

                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group col-lg-6">
                                        <label class="control-label" for="current_loans">Do you have any other loans that you are currently struggling to pay?</label>
                                        <select id="current_loans" name="current_loans" class="form-control">
                                            <option value="">Please select ..</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>

                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group col-lg-4">
                                        <label class="control-label" for="account_name">Name on the account</label>
                                        <input id="account_name" name="account_name" type="text" placeholder="name on the account"
                                               class="form-control input-md" required>

                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group col-lg-4">
                                        <label class="control-label" for="sort_code">Sort code</label>
                                        <input id="sort_code" name="sort_code" type="number" placeholder="sort code"
                                               class="form-control input-md" required>

                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group col-lg-4">
                                        <label class="control-label" for="account_number">Account number</label>
                                        <input id="account_number" name="account_number" type="number"
                                               placeholder="account number" class="form-control input-md" required>

                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group col-lg-6">
                                        <label class="control-label" for="monthly_income">Monthly income</label>
                                        <input id="monthly_income" name="monthly_income" type="number"
                                               placeholder="monthly income" class="form-control input-md" required>

                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group col-lg-6">
                                        <label class="control-label" for="other_income">Other household income</label>
                                        <input id="other_income" name="other_income" type="number"
                                               placeholder="other household income" class="form-control input-md">

                                    </div>

                                    <!-- Text input-->
                                    {{--<div class="form-group">--}}
                                    {{--<label class="control-label" for="monthly_expenses">Monthly expenses</label>--}}
                                    {{--<input id="monthly_expenses" name="monthly_expenses" type="text"--}}
                                    {{--placeholder="monthly expenses" class="form-control input-md">--}}

                                    {{--</div>--}}

                                            <!-- Select Basic -->
                                    <div class="form-group col-lg-4">
                                        <label class="control-label" for="salary_frequency">How often do you get paid</label>
                                        <select id="salary_frequency" name="salary_frequency" class="form-control">
                                            <option value="">Please select ..</option>
                                            <option value="Daily">Daily</option>
                                            <option value="Weekly">Weekly</option>
                                            <option value="Fortnightly">Every 2 weeks</option>
                                            <option value="Monthly">Monthly</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>

                                    <!-- End Comment -->

                                    <!-- Text input-->
                                    <div class="form-group col-lg-4">
                                        <label class="control-label" for="pay_date">What day or date do you get paid</label>
                                        <input id="pay_date" name="pay_date" type="date" placeholder="pay date"
                                               class="form-control input-md" required>

                                    </div>


                                </div>
                                <!-- END STEP CONTENT-->
                            </fieldset>
                        </div>
                        <!-- END STEP 2-->
                        <!-- BEGIN STEP 3-->
                        <div class=" tsf-step step-3 ">
                            <fieldset>
                                <legend>Household monthly spending</legend>
                                <!-- BEGIN STEP CONTENT-->
                                <div class="tsf-step-content">

                                    <!-- Text input-->
                                    <div class="form-group col-lg-12">
                                        <label class="control-label" for="rent">Rent/Mortage</label>
                                        <input id="rent" name="rent" type="number" placeholder="rent/mortgage" class="form-control input-md">
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group col-lg-12">
                                        <label class="control-label" for="council_tax">Council tax</label>
                                        <input id="council_tax" name="council_tax" type="number" placeholder="council tax" class="form-control input-md">

                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group col-lg-12">
                                        <label class="control-label" for="gas">Gas and Electricity</label>
                                        <input id="gas" name="gas" type="number" placeholder="Gas and Electricity" class="form-control input-md">

                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group col-lg-12">
                                        <label class="control-label" for="water">Water and other utilities</label>
                                        <input id="water" name="water" type="number" placeholder="Water and other utilities" class="form-control input-md">

                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group col-lg-12">
                                        <label class="control-label" for="food">Food and travelling cost</label>
                                        <input id="food" name="food" type="number" placeholder="Food and travelling cost" class="form-control input-md">

                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group col-lg-12">
                                        <label class="control-label" for="telephone">Telephone and internet</label>
                                        <input id="telephone" name="telephone" type="number" placeholder="Telephone and internet" class="form-control input-md">

                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group col-lg-12">
                                        <label class="control-label" for="tv">TV licence and other insurance policies</label>
                                        <input id="tv" name="tv" type="number" placeholder="TV licence and other insurance policies" class="form-control input-md">

                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group col-lg-12">
                                        <label class="control-label" for="loans_cc">Loans and credit cards</label>
                                        <input id="loans_cc" name="loans_cc" type="number" placeholder="Loans and credit cards" class="form-control input-md">

                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group col-lg-12">
                                        <label class="control-label" for="other_costs">Other costs</label>
                                        <input id="other_costs" name="other_costs" type="number" placeholder="Other costs" class="form-control input-md">

                                    </div>

                                </div>
                                <!-- END STEP CONTENT-->

                            </fieldset>
                        </div>
                        <!-- END STEP 3-->
                        <!-- BEGIN STEP 4-->
                        <div class=" tsf-step step-4 ">
                            <fieldset>
                                <legend>Residency details</legend>
                                <!-- BEGIN STEP CONTENT-->
                                <div class="tsf-step-content">

                                    <div class="row col-lg-12">

                                        <!-- Text input-->
                                        <div class="form-group col-lg-3">
                                            <label class="control-label" for="house_number">House number</label>
                                            <input id="house_number" name="house_number" type="number" placeholder="house number"
                                                   class="form-control input-md">

                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group col-lg-5">
                                            <label class="control-label" for="street_name">Street name</label>
                                            <input id="street_name" name="street_name" type="text" placeholder="street name"
                                                   class="form-control input-md" required>

                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group col-lg-4">
                                            <label class="control-label" for="town">Town</label>
                                            <input id="town" name="town" type="text" placeholder="town"
                                                   class="form-control input-md">

                                        </div>

                                    </div>
                                    <div class="row col-lg-12">
                                        <!-- Text input-->
                                        <div class="form-group col-lg-6">
                                            <label class="control-label" for="city">City</label>
                                            <input id="city" name="city" type="text" placeholder="city"
                                                   class="form-control input-md" required>

                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group col-lg-6">
                                            <label class="control-label" for="post_code">Post code</label>
                                            <input id="post_code" name="post_code" type="text" placeholder="post code"
                                                   class="form-control input-md" required>

                                        </div>


                                        <!-- Text input-->
                                        <div class="form-group col-lg-6">
                                            <label class="control-label" for="proof_of_residency">Proof of Address <span style="font-weight: 100;"> [bill or bank statement] </span></label>
                                            <input id="proof_of_residency" name="proof_of_residency" type="file"
                                                   placeholder="proof of residency" class="form-control input-md" required>
                                        </div>


                                        <!-- Text input-->
                                        <div class="form-group col-lg-6">
                                            <label class="control-label" for="proof_of_id">Photographic Identification <span style="font-weight: 100;"> [passport or driving licence] </span></label>
                                            <input id="proof_of_id" name="proof_of_id" type="file" placeholder=""
                                                   class="form-control input-md" required>

                                        </div>
                                    </div>


                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input name="terms" type="checkbox" id="agreeTerms" value="I Agree" required> I have read and agree to the Terms of the
                                                        contract
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <strong>CONFIDENTIALITY AND DATA PROTECTION </strong>
                                                Kariba Finance considers the confidentiality of its clients and any personal data provided of utmost importance and agrees to
                                                hold and process all sensitive information contained in this document and any other correspondence in accordance to the
                                                Data Protection Act 1998.
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" name="days" value="{!! isset($data['terms']) ? $data['terms'] : 0 !!}" />
                                    <input type="hidden" name="interest" value="{!! isset($data['interest']) ? $data['interest'] : 0 !!}" />

                                </div>
                                <!-- END STEP CONTENT-->

                            </fieldset>
                        </div>
                        <!-- END STEP 4-->
                        <!--</form>-->
                    </form>
                    <!-- END CONTENT-->
                    <!-- BEGIN CONTROLS-->
                    <div class="tsf-controls ">
                        <!-- BEGIN PREV BUTTTON-->
                        <button type="button" data-type="prev" class="btn btn-left tsf-wizard-btn">
                            <i class="fa fa-chevron-left"></i> PREV
                        </button>
                        <!-- END PREV BUTTTON-->
                        <!-- BEGIN NEXT BUTTTON-->
                        <button type="button" data-type="next" class="btn btn-right tsf-wizard-btn">
                            NEXT <i class="fa fa-chevron-right"></i>
                        </button>
                        <!-- END NEXT BUTTTON-->
                        <!-- BEGIN FINISH BUTTTON-->
                        <button type="submit" data-type="finish" class="btn btn-right tsf-wizard-btn">
                            FINISH
                        </button>
                        <!-- END FINISH BUTTTON-->
                    </div>
                    <!-- END CONTROLS-->
                </div>
                <!-- END STEP CONTAINER -->

            </div>
            <!-- END STEP FORM WIZARD -->
            <div class="clearfix"></div>

        </div>
        <div style="margin-bottom: 20px"></div>


    </div>

    {{--{!! Form::close() !!}--}}

</div><!--//section-wrapper-->

@include('layouts/kariba-finance/footer')



<link id="theme-style" rel="stylesheet" href="{{ asset('frontend/kariba-finance/') }}/css/styles.css">

<!-- Javascript -->
<script type="text/javascript" src="{{ asset('frontend/kariba-finance')}}/plugins/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/kariba-finance')}}/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/kariba-finance')}}/plugins/bootstrap/js/bootstrap.min.js"></script>


{{--<script src="{{ asset('frontend/kariba-finance')}}/assets/js/jquery-1.11.3.min.js"></script>--}}
<script src="{{ asset('frontend/kariba-finance')}}/assets/js/demo.js"></script>
<script src="{{ asset('frontend/kariba-finance')}}/assets/js/jquery-1.11.3.min.js"></script>
<script src="{{ asset('frontend/kariba-finance')}}/assets/js/demo.js"></script>
<!--Plugin for validation-->
<!--<script src="assets/plugin/validate/jquery.validate.js"></script>-->
<script src="{{ asset('frontend/kariba-finance')}}/assets/plugin/parsley/js/parsley.js"></script>

<script src="{{ asset('frontend/kariba-finance')}}/assets/js/tsf-wizard-plugin.js"></script>

<script>
    $(function () {
        pageLoadScript();
    });

    $('#password').keyup(function(e) {
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{6,}).*", "g");
        if (false == enoughRegex.test($(this).val())) {
            $('#passstrength').html('More Characters');
            $('#password').css("border", "1px solid red");
            $('#passstrength').css("color", "red");
        } else if (strongRegex.test($(this).val())) {
            $('#password').css("border", "1px solid green");
            $('#passstrength').css("color", "green");
            $('#passstrength').className = 'ok';
            $('#passstrength').html('Strong!');
        } else if (mediumRegex.test($(this).val())) {
            $('#password').css("border", "1px solid orange");
            $('#passstrength').css("color", "orange");
            $('#passstrength').className = 'alert';
            $('#passstrength').html('Medium!');
        } else {
            $('#passstrength').className = 'error';
            $('#passstrength').html('Weak!');
        }

        return true;
    });

    function validatePassword() {
        console.log($('#confirmPassword').val());
        if ($('#confirmPassword').val() == $('#password').val()) {
            console.log('Identical');
        } else {
            $("#confirmPassword").val('');
            $('#prompt2').css("color", "orange");
            $('#prompt2').html('Your passwords do not match, please re-enter');
        }
    }

    function pageLoadScript() {

        _stepEffect = $('#stepEffect').val();
        _style = 'style3';
        _stepTransition = $('#stepTransition').is(':checked');
        _showButtons = $('#showButtons').is(':checked');
        _showStepNum = $('#showStepNum').is(':checked');

        $('input[type="submit"]').prop('disabled', true);
        $('input[type="checkbox"]').keyup(function() {
            if($(this).val() != '') {
                $('input[type="submit"]').prop('disabled', false);
            }
        });

        tsf1=  $('.tsf-wizard-1').tsfWizard({
            stepEffect: _stepEffect,
            stepStyle: _style,
            navPosition: 'top',
            validation: true,
            stepTransition: _stepTransition,
            showButtons: _showButtons,
            showStepNum: _showStepNum,
            height: 'auto',
            onNextClick: function (e, from, to, validation) {
                $('#result').append('<br/>onNextClick from ' + from +
                        ' - to ' + to + ' validation ' + validation)
            },
            onPrevClick: function (e, from, to) {
                $('#result').append('<br/>onPrevClick from ' + from + ' - to ' + to)
            },
            onFinishClick: function (e, validation) {
                $('#result').append('<br/>onFinishClick validation ' + validation)
            }
        });


    }
</script>



</body>
</html>








