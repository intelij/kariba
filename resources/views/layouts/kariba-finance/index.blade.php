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
        <div class="container" style="background: #000; text-align: center;">
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

    <div class="bg-slider-wrapper">
        <div class="flexslider bg-slider">
            <ul class="slides">
                <li class="slide slide-1"></li>
                <!--<li class="slide slide-2"></li>-->
                <!--<li class="slide slide-3"></li>-->
            </ul>
        </div>
    </div><!--//bg-slider-wrapper-->

    @if($filename !='home')
        <section class="page-header">
            <div class="container">

                <h1> {{ strtoupper($pageTitle) }}</h1>

                <!-- breadcrumbs -->
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">{{ $pageTitle }}</li>
                </ol><!-- /breadcrumbs -->

            </div>
        </section>
    @endif

    @if($filename =='home')
        @include('layouts/kariba-finance/calculator')
    @endif

    <div class="sections-wrapper">

        @include($pages)

    </div><!--//section-wrapper-->


    @include('layouts/kariba-finance/footer')



    <link id="theme-style" rel="stylesheet" href="{{ asset('frontend/kariba-finance/') }}/css/styles.css">

<!-- Javascript -->
<script type="text/javascript" src="{{ asset('frontend/kariba-finance')}}/plugins/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/kariba-finance')}}/plugins/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="{{ asset('frontend/kariba-finance')}}/plugins/bootstrap/js/bootstrap.min.js"></script>

    {{--<script type="text/javascript" src="http://code.jquery.com/ui/1.8.21/jquery-ui.min.js"></script>--}}
    {{--<script type="text/javascript" src="jquery.ui.touch-punch.min.js"></script>--}}

    <script type="text/javascript" src="{{ asset('frontend/kariba-finance')}}/js/jquery.accrue.min.js"></script>


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

<script>
    function update() {
        $interest = 0.15 ;
        $perday = 20;
        $amount1 = $("#flexi-value").val();
        $amount1 = parseInt($amount1, 10) || 100;
        $dayscount = $( "#flexi-months" ).val();
        $amount2 = parseInt($amount1) + $interest * parseInt($amount1) + (parseInt($dayscount) * ($perday/100));
        $apr = (($amount2-$amount1 / $amount1 ) / ((parseInt($dayscount)/365.25) * 100));
//        $("#amount").text($amount1);
//        $("#amount2").text($amount2);
//        $("#amount3").text(parseFloat($amount2-$amount1).toFixed(2));
//        $("#amount4").text(parseFloat($apr).toFixed(2));

        console.log($amount1);
        console.log($amount2);
        console.log(parseFloat($amount2-$amount1).toFixed(2));
        console.log(parseFloat($apr).toFixed(2));
        console.log($apr);
    }

    $(function() {
        $amount1 = $("#flexi-value").val();
        console.log( "ready! " + $amount1);
        update();
    });

    $('#flexi-value').change(function() {
        flexi_amount = $("#flexi-value").val();
        console.log( "ready! " + flexi_amount);
        update();
    });

    $( "#flexi-months" ).change(function() {
        flexi_months = $( "#flexi-months" ).val();
        console.log(flexi_months);

        apr = Math.pow($amount2 / 100, 365.25 / $dayscount) - 1;

        update();

    });

</script>
</body>
</html>








