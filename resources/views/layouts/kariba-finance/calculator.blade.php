<!--//bg-slider-wrapper-->
<section class="promo section section-on-bg">
    <div class="container text-center">
        <h2 class="title">Friendly. Responsible. Understanding.</h2>
        <p class="intro">
            Kariba Finance is a responsible lender aiming to be the market leader in the provision of short-term and instalment loan facilities for its members, non-members, and small businesses*.
        </p>
        <!--<p>Helping you cross the bridge</p>-->
        <p class="intro" style="margin-top: -30px">
            Members can borrow up to &pound;1,500 and can access other benefits which may be unavailable to non-members*.<br/>
            Please click on the following link for further information on <a href="#">how to become a member</a> and how the membership benefits scheme works.<br/><br/>
            Non-members can borrow up to £1,000*<br/>
            *subject to status – terms and conditions apply

        </p>
        <!-- Pricing slider layout here..-->

        <div class="button-slider  col-md-8 col-md-offset-2">

            {{--{!! Form::open(array('method' => 'get'))  !!}--}}
            {{--{!! Form::open(array('action' => 'applynow')) !!}--}}

            {!! Form::open(array('route' => 'applynow', 'class' => 'form')) !!}

            {!! Form::token() !!}

            <div class="btn-group col-md-12" style="padding-top: 20px; font-weight: 100;">

                <div class="btn  btn-cta btn-cta-default col-md-6 normal">How much would you like to borrow?</div>
                <div class="btn  btn-cta btn-cta-default col-md-6">
                    <input id="bootstrap-slider" type="text" name="loan_amount" data-slider-min="0" data-slider-max="1500"
                           data-slider-step="10" data-slider-value="350"/>
                    <div class="valueLabel"> £ <span id="sliderValue">350</span></div>
                </div>

                <div class="btn  btn-cta btn-cta-default col-md-6 normal">When would you like to pay it back?</div>
                <div class="col-md-6">
                    <p id="repayment-date"></p>
                    <input type="text" class="span2" id="dp1" name="date"> <span style="padding-left: 10px;">over <span class="default-color" id="loan-days">0</span> days</span>
                </div>



                <div style="clear: both;">&nbsp;</div>
                {{--<div class="col-md-12" style="margin-top: 20px;">--}}
                <div class="btn  btn-cta btn-cta-default col-md-6 normal">Please enter your membership status:</div>

                <div class="btn  btn-cta btn-cta-default col-md-6 normal">
                        <select class="btn  btn-cta btn-cta-default col-md-6 normal member-status" style="width: 190px;font-size: 15px;
    line-height: 0.8em;">
                            <option>Select Status ...</option>
                            <option>None Member</option>
                            <option>Silver Member</option>
                            <option>Gold Member</option>
                            <option>Platinum Member</option>
                        </select>
                    </div>

                {{--</div>--}}


                <div class="col-md-12" style="margin-top: 20px;">
                    <div class="col-md-9">
                        <p>
                            <span class="unit unit-borrowing">Borrowing      £ <span class="loan-amount">0</span>
                            </span> <span class="operator plus">+</span>
                            <span class="unit unit-interest">Interest      £ <span class="loan-interest">0</span>
                            </span>
                            <span class="operator equals"> = </span>
                            <span class="unit unit-total">Total to repay      £ <span class="loan-total">0</span>
                            </span>
                        </p>
                    </div>
                    <div class="col-md-3">
                        <input type="hidden" id="hidden_terms" name="terms" value=""/>
                        <input type="hidden" id="hidden_interest" name="interest" value=""/>
                        <input type="hidden" id="repayment_date" name="repayment_date" value=""/>
                        <button class="btn btn-cta btn-cta-primary"><i class="fa fa-lock"></i> Apply Now</button>
                    </div>
                </div>
            </div>


            {!! Form::close() !!}

        </div>

    </div>
    <!--//container-->
</section>