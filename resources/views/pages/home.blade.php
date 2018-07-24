<!-- ******Testimonials Section****** -->
        <section class="section testimonials">
            <div class="container">
                <div class="row item">
                    <div class="content col-md-5 col-sm-12 col-xs-12">
                        <div class="col-md-6">
                            <p class="figure">Borrow<br/>
                            Interest rate<br/>
                            One repayment <br/>
                            Representative<br/>
                        </div>
                        <div class="col-md-6">
                            <p>&pound;100 for 17 days<br/>
                            185.5% pa (fixed)<br/>
                            &pound;108.50<br/>
                            477.06%  APR<br/>
                        </div>
                    </div>
                    <!--//content-->

                    <div class="figure col-md-7 col-sm-12 col-xs-12 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
                        <h4>If you don't repay on time there will be extra costs:</h4>
                        <p>Missed payment fee<br/>
                        <strong>£12.00</strong><br/>
                        Charged on the third day after your repayment date</p>
                    </div>
                </div>
                <!--//item-->
            </div><!--//container-->
        </section><!--//testimonials-->




<!-- ****** NEW APR LOAN CALC JQUERY POWERED ****** -->
<section class="section testimonials" style="background: #eeeeee;">
    <div class="container">
        <div class="row item">
            <div class="content col-lg-8 col-md-8 col-md-offset-2 col-lg-offset-2 col-sm-12 col-xs-12 calculator">
                <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center; color: white; margin-bottom: 20px;">
                    <h1 style="font-weight: 100;">Business and Instalment Loans</h1>
                </div>
                <div class="flexiloan col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-7 col-md-7 thirty form">

                    </div>
                    <div class="col-lg-5 col-md-5 thirty">
                        <div class="results"></div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center; background: #ffffff;">
                    <p>Instalment and business loans only available for platinum members</p>
                    <p><a href="/user/login">Sign in</a> to see if your membership account can qualify.</p>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12" style="text-align: center; color: white; margin-bottom: 20px;">&nbsp;</div>
            </div>

            {{--<div class="figure col-lg-5 col-md-5 col-sm-12 col-xs-12 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">--}}
                {{--<h4>Flexible Loans</h4>--}}
                {{--<p> Spread repayments over 12 monthly instalments</p>--}}
            {{--</div>--}}

            <div class="clear"></div>
            {{--<div class="calculator"></div>--}}
        </div>

        <!--//item-->
    </div><!--//container-->
</section><!--//testimonials-->



<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery.accrue.min.js"></script>
<script>
    $(document).ready(function(){
        $(".calculator").accrue();
    });
</script>
