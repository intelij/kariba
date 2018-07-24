<div class="demo-settings" data-open="true">
    <!--<div class="settings-icon">-->
    <!--<a href="#" class="btn-setting"><i class="fa fa-2x fa-cogs"></i></a>-->
    <!--<a href="#" class="btn-remove"><i class="fa fa-2x fa-times"></i></a>-->
    <!--</div>-->
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
        <br/>
        <label for="stepTransition">
            Step transition <input type="checkbox" id="stepTransition" name="stepTransition" value="11" checked/>
        </label>
        <br/>
        <label for="showButtons">
            Show buttons <input type="checkbox" id="showButtons" name="showButtons" value="111" checked/>
        </label>
        <br/>
        <label for="showStepNum">
            Show stepNum <input type="checkbox" id="showStepNum" name="showStepNum" value="123" checked/>
        </label>


    </div>
</div>

<div class="container">
    <div class="row">
        <!-- BEGIN STEP FORM WIZARD -->
        <div class="tsf-wizard tsf-wizard-1">
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
            <!-- BEGIN STEP CONTAINER -->

            <div class="tsf-container">
                <!-- BEGIN CONTENT-->
                <div class="tsf-content">
                    <!-- BEGIN STEP 1-->
                    <div class="tsf-step step-1 active">
                        <fieldset>
                            <legend>Personal details</legend>

                            <div class="row">
                                <!-- BEGIN STEP CONTENT-->
                                <form class="tsf-step-content">
                                    <div class="col-lg-12">
                                        <!-- Select Basic -->
                                        <div class="form-group col-lg-1">
                                            <label class="control-label" for="title">Title</label>
                                            <select id="title" name="title" class="form-control">
                                                <option value="Miss">Miss</option>
                                                <option value="Mr">Mr</option>
                                                <option value="Mrs">Mrs</option>
                                                <option value="Ms">Ms</option>
                                            </select>
                                        </div>

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
                                        <div class="form-group col-lg-4">
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

                                        <!-- Text input-->
                                        <div class="form-group col-lg-6">
                                            <label class="control-label" for="mobile">Mobile number</label>
                                            <input id="mobile" name="mobile" type="text" placeholder="mobile number"
                                                   class="form-control input-md">

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
                                            <select id="marital_status" name="marital_status" class="form-control">
                                                <option value="S">Single</option>
                                                <option value="M">Married</option>
                                                <option value="D">Divorced</option>
                                                <option value="W">Widowed</option>
                                            </select>
                                        </div>


                                        <!-- Select Basic -->
                                        <div class="form-group col-lg-6">
                                            <label class="control-label" for="acquisition_channel">Who referred you to us?</label>
                                            <input id="acquisition_channel" name="acquisition_channel" type="text" placeholder="Who referred you to us"
                                                   class="form-control input-md">
                                        </div>


                                        {{-- residential status --}}

                                                <!-- Select Basic -->
                                        <div class="form-group col-lg-3">
                                            <label class="control-label" for="tenancy">Residential status</label>
                                            <select id="tenancy" name="tenancy" class="form-control">
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
                                            <label class="control-label" for="employment_status">Income Type</label>
                                            <select id="employment_status" name="employment_status" class="form-control">
                                                <option value="Benefits">On Benefits</option>
                                                <option value="Employed full time)">Employed full time</option>
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
                                                   class="form-control input-md">

                                        </div>

                                        <!-- Text input-->
                                        <div class="form-group col-lg-3">
                                            <label class="control-label" for="current_employer">Time with your current employer</label>
                                            <input id="current_employer" name="current_employer" type="text"
                                                   placeholder="period with the current employer" class="form-control input-md">

                                        </div>




                                    </div>
                                </form>
                                <!-- END STEP CONTENT-->
                            </div>

                        </fieldset>
                    </div>
                    <!-- END STEP 1-->
                    <!-- BEGIN STEP 2-->
                    <div class=" tsf-step step-2 ">
                        <fieldset>
                            <legend>How much would you like to borrow?</legend>
                            <!-- BEGIN STEP CONTENT-->
                            <!-- Text input-->
                            <div class="form-group col-lg-3">
                                <label class="control-label" for="loan_amount">Loan amount</label>
                                <input id="loan_amount" name="loan_amount" type="number" placeholder="loan amount"
                                       class="form-control input-md" required>

                            </div>

                            <!-- Text input-->
                            <div class="form-group col-lg-3">
                                <label class="control-label" for="loan_purpose">Loan purpose</label>
                                <select id="loan_purpose" name="loan_purpose" class="form-control">
                                    <option value="subsistance">Subsistance</option>
                                    <option value="one off">One off</option>
                                    <option value="other">other</option>
                                </select>

                            </div>

                            <!-- Text input-->
                            <div class="form-group  col-lg-3">
                                <label class="control-label" for="proposed_payment_date">Proposed payment date</label>
                                <input id="proposed_payment_date" name="proposed_payment_date" type="date" placeholder="proposed payment date"
                                       class="form-control input-md">

                            </div>

                            <!-- Text input-->
                            <div class="form-group col-lg-3">
                                <label class="control-label" for="current_loans">Any loans paying for?</label>
                                <select id="current_loans" name="current_loans" class="form-control">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>

                            </div>

                            <!-- Text input-->
                            <div class="form-group col-lg-3">
                                <label class="control-label" for="account_name">Name on the account</label>
                                <input id="account_name" name="account_name" type="text" placeholder="name on the account"
                                       class="form-control input-md">

                            </div>

                            <!-- Text input-->
                            <div class="form-group col-lg-3">
                                <label class="control-label" for="sort_code">Sort code</label>
                                <input id="sort_code" name="sort_code" type="number" placeholder="sort code"
                                       class="form-control input-md">

                            </div>

                            <!-- Text input-->
                            <div class="form-group col-lg-3">
                                <label class="control-label" for="account_number">Account number</label>
                                <input id="account_number" name="account_number" type="number"
                                       placeholder="account number" class="form-control input-md">

                            </div>

                            <!-- Text input-->
                            <div class="form-group col-lg-3">
                                <label class="control-label" for="monthly_income">Monthly income</label>
                                <input id="monthly_income" name="monthly_income" type="number"
                                       placeholder="monthly income" class="form-control input-md">

                            </div>

                            <!-- Text input-->
                            <div class="form-group col-lg-4">
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
                                <label class="control-label" for="salary_frequency">Salary frequency</label>
                                <select id="salary_frequency" name="salary_frequency" class="form-control">
                                    <option value="Daily">Daily</option>
                                    <option value="Weekly">Weekly</option>
                                    <option value="Fortnightly">Fortnightly</option>
                                    <option value="Monthly">Monthly</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>

                            <!-- Text input-->
                            <div class="form-group col-lg-4">
                                <label class="control-label" for="pay_date">Pay date</label>
                                <input id="pay_date" name="pay_date" type="date" placeholder="pay date"
                                       class="form-control input-md">

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
                            <!--<form class="tsf-step-content">-->

                            <!-- Text input-->
                            <div class="form-group col-lg-4">
                                <label class="control-label" for="rent">Rent/Mortage</label>
                                    <input id="rent" name="rent" type="number" placeholder="rent/mortgage" class="form-control input-md" required>
                            </div>

                            <!-- Text input-->
                            <div class="form-group col-lg-4">
                                <label class="control-label" for="council_tax">Council tax</label>
                                    <input id="council_tax" name="council_tax" type="number" placeholder="council tax" class="form-control input-md">

                            </div>

                            <!-- Text input-->
                            <div class="form-group col-lg-4">
                                <label class="control-label" for="gas">Gas and Electricity</label>
                                    <input id="gas" name="gas" type="number" placeholder="Gas and Electricity" class="form-control input-md" required>

                            </div>

                            <!-- Text input-->
                            <div class="form-group col-lg-4">
                                <label class="control-label" for="water">Water and other utilities</label>
                                    <input id="water" name="water" type="number" placeholder="Water and other utilities" class="form-control input-md">

                            </div>

                            <!-- Text input-->
                            <div class="form-group col-lg-4">
                                <label class="control-label" for="food">Food and travelling cost</label>
                                    <input id="food" name="food" type="number" placeholder="Food and travelling cost" class="form-control input-md" required>

                            </div>

                            <!-- Text input-->
                            <div class="form-group col-lg-4">
                                <label class="control-label" for="telephone">Telephone and internet</label>
                                    <input id="telephone" name="telephone" type="number" placeholder="Telephone and internet" class="form-control input-md" required>

                            </div>

                            <!-- Text input-->
                            <div class="form-group col-lg-4">
                                <label class="control-label" for="tv">TV licence and other insurance policies</label>
                                    <input id="tv" name="tv" type="number" placeholder="TV licence and other insurance policies" class="form-control input-md" required>

                            </div>

                            <!-- Text input-->
                            <div class="form-group col-lg-4">
                                <label class="control-label" for="loans_cc">Loans and credit cards</label>
                                    <input id="loans_cc" name="loans_cc" type="number" placeholder="Loans and credit cards" class="form-control input-md">

                            </div>

                            <!-- Text input-->
                            <div class="form-group col-lg-4">
                                <label class="control-label" for="other_costs">Other costs</label>
                                    <input id="other_costs" name="other_costs" type="number" placeholder="Other costs" class="form-control input-md" required>

                            </div>


                            <!--</form>-->
                            <!-- END STEP CONTENT-->

                        </fieldset>
                    </div>
                    <!-- END STEP 3-->
                    <!-- BEGIN STEP 4-->
                    <div class="tsf-step step-4">
                        <fieldset>
                            <legend>Residency details</legend>
                            <!-- BEGIN STEP CONTENT-->
                            <!--<form class="tsf-step-content">-->
                            <div class="row col-lg-12">

                                <!-- Text input-->
                                <div class="form-group col-lg-3">
                                    <label class="control-label" for="house_number">House number</label>
                                    <input id="house_number" name="house_number" type="text" placeholder="house number"
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
                                           class="form-control input-md">

                                </div>

                                <!-- Text input-->
                                <div class="form-group col-lg-6">
                                    <label class="control-label" for="post_code">Post code</label>
                                    <input id="post_code" name="post_code" type="text" placeholder="post code"
                                           class="form-control input-md">

                                </div>


                                <!-- Text input-->
                                <div class="form-group col-lg-6">
                                    <label class="control-label" for="proof_of_residency">Proof of Address <span style="font-weight: 100;"> [bill or bank statement] </span></label>
                                    <input id="proof_of_residency" name="proof_of_residency" type="file"
                                           placeholder="proof of residency" class="form-control input-md">
                                </div>


                                <!-- Text input-->
                                <div class="form-group col-lg-6">
                                    <label class="control-label" for="proof_of_id">Photographic Identification <span style="font-weight: 100;"> [passport or driving licence] </span></label>
                                    <input id="proof_of_id" name="proof_of_id" type="file" placeholder=""
                                           class="form-control input-md">

                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> I have read and agree to the Terms of the
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


                    </div>
                    </form>
                    <!-- END STEP CONTENT-->
                    </fieldset>
                </div>
                <!-- END STEP 4-->

            </div>
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
                <button type="button" data-type="finish" class="btn btn-right tsf-wizard-btn">
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
