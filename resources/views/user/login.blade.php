@extends('layouts.login')

@section('content')

    <div class="container">

        <div class="row-fluid"  style="margin-top: 100px;">

            <div class="col-lg-8 col-lg-offset-1">
                <div class="ajaxLoading"></div>
                <p class="message alert alert-danger " style="display:none;"></p>

                @if(Session::has('message'))
                    {!! Session::get('message') !!}
                @endif
                <ul class="parsley-error-list">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

                <div class="col-lg-12" style="padding: 20px; border-radius: 10px; background: #fff;">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab-sign-in" data-toggle="tab">  {{ Lang::get('core.signin') }} </a></li>
                        <li><a href="#tab-forgot" data-toggle="tab"> {{ Lang::get('core.forgotpassword') }} </a></li>
                        @if(CNF_REGIST =='true')
                            <li><a href="#tab-register" data-toggle="tab"> {{ Lang::get('core.signup') }} </a></li>
                            {{--<li><a href="{{ URL::TO('user/register')}}">  {{ Lang::get('core.signup') }} </a></li>--}}
                        @endif

                    </ul>

                    <div class="col-lg-12">
                        <span style="height: 80px!important;min-height: 80px!important;">&nbsp;</span>
                    </div>

                    <div class="col-lg-12">
                        <div class="tab-content">
                            <div class="tab-pane active m-t" id="tab-sign-in">
                                <form method="post" action="{{ url('user/signin')}}" class="form-vertical" id="LoginAjax">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                    <div class="form-group has-feedback animated fadeInLeft delayp1">
                                        <label>{{ Lang::get('core.email') }}    </label>
                                        <input type="text" name="email" placeholder="Email Address" class="form-control"
                                               required="email"/>

                                        <i class="icon-users form-control-feedback"></i>
                                    </div>

                                    <div class="form-group has-feedback  animated fadeInRight delayp1">
                                        <label>{{ Lang::get('core.password') }}    </label>
                                        <input type="password" name="password" placeholder="Password" class="form-control"
                                               required="true"/>

                                        <i class="icon-lock form-control-feedback"></i>
                                    </div>

                                    <div class="form-group has-feedback  animated fadeInRight delayp1">
                                        <label> Remember Me ? </label>
                                        <input type="checkbox" name="remember" value="1"/>

                                        {{--<i class="icon-lock form-control-feedback"></i>--}}
                                    </div>

                                    @if(CNF_RECAPTCHA =='true')
                                        <div class="form-group has-feedback  animated fadeInLeft delayp1">
                                            <label class="text-left"> Are u human ? </label>
                                            <br/>
                                            {!! captcha_img() !!} <br/><br/>
                                            <input type="text" name="captcha" placeholder="Type Security Code" class="form-control"
                                                   required/>

                                            <div class="clr"></div>
                                        </div>
                                    @endif

                                    @if(CNF_MULTILANG =='1')
                                        <div class="form-group has-feedback  animated fadeInLeft delayp1">
                                            <label class="text-left"> {{ Lang::get('core.language') }} </label>
                                            <select class="form-control" name="language">
                                                @foreach(SiteHelpers::langOption() as $lang)
                                                    <option value="{{ $lang['folder'] }}"
                                                            @if(Session::get('lang') ==$lang['folder']) selected @endif>  {{  $lang['name'] }}</option>
                                                @endforeach

                                            </select>

                                            <div class="clr"></div>
                                        </div>
                                    @endif

                                    <div class="form-group  has-feedback text-center  animated fadeInLeft delayp1"
                                         style=" margin-bottom:20px;">

                                        <button type="submit" class="btn btn-info btn-sm btn-block"><i
                                                    class="fa fa-sign-in"></i> {{ Lang::get('core.signin') }}</button>


                                        <div class="clr"></div>

                                    </div>
                                    <div class="animated fadeInUp delayp1">
                                        <div class="form-group has-feedback text-center">
                                            @if($socialize['google']['client_id'] !='' || $socialize['twitter']['client_id'] !='' || $socialize['facebook'] ['client_id'] !='')
                                                <br/>
                                                <p class="text-muted text-center"><b> {{ Lang::get('core.loginsocial') }} </b></p>
                                            @endif
                                            <div style="padding:15px 0;">
                                                @if($socialize['facebook']['client_id'] !='')
                                                    <a href="{{ URL::to('user/socialize/facebook')}}" class="btn btn-primary"><i
                                                                class="icon-facebook"></i> Facebook </a>
                                                @endif
                                                @if($socialize['google']['client_id'] !='')
                                                    <a href="{{ URL::to('user/socialize/google')}}" class="btn btn-danger"><i
                                                                class="icon-google"></i> Google </a>
                                                @endif
                                                @if($socialize['twitter']['client_id'] !='')
                                                    <a href="{{ URL::to('user/socialize/twitter')}}" class="btn btn-info"><i
                                                                class="icon-twitter"></i> Twitter </a>
                                                @endif
                                            </div>
                                        </div>


                                        <p style="padding:10px 0" class="text-center">
                                            <a href="{{ URL::to('')}}"> {{ Lang::get('core.backtosite') }} </a>
                                        </p>
                                    </div>
                                </form>
                            </div>


                            <div class="tab-pane  m-t" id="tab-forgot">


                                <form method="post" action="{{ url('user/request')}}" class="form-vertical box" id="fr">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group has-feedback">
                                        <div class="">
                                            <label>{{ Lang::get('core.enteremailforgot') }}</label>
                                            <input type="text" name="credit_email" placeholder="{{ Lang::get('core.email') }}"
                                                   class="form-control" required/>
                                            <i class="icon-envelope form-control-feedback"></i>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback">
                                        <button type="submit"
                                                class="btn btn-default pull-right"> {{ Lang::get('core.sb_submit') }} </button>
                                    </div>

                                    <div class="clr"></div>


                                </form>


                            </div>


                            <div class="tab-pane m-t" id="tab-register">

                                {!! Form::open(array('url'=>'user/create', 'class'=>'form-signup')) !!}
                                @if(Session::has('message'))
                                    {!! Session::get('message') !!}
                                @endif
                                <ul class="parsley-error-list">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>

                                <div class="form-group has-feedback">
                                    <label>{{ Lang::get('core.firstname') }}	 </label>
                                    {!! Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name' ,'required'=>'' )) !!}
                                    <i class="icon-users form-control-feedback"></i>
                                </div>

                                <div class="form-group has-feedback">
                                    <label>{{ Lang::get('core.lastname') }}	 </label>
                                    {!! Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name','required'=>'')) !!}
                                    <i class="icon-users form-control-feedback"></i>
                                </div>

                                <div class="form-group has-feedback">
                                    <label>{{ Lang::get('core.email') }}	 </label>
                                    {!! Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address','required'=>'email')) !!}
                                    <i class="icon-envelop form-control-feedback"></i>
                                </div>

                                <div class="form-group has-feedback">
                                    <label>{{ Lang::get('core.password') }}	</label>
                                    {!! Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password','required'=>'')) !!}
                                    <i class="icon-lock form-control-feedback"></i>
                                </div>

                                <div class="form-group has-feedback">
                                    <label>{{ Lang::get('core.repassword') }}	</label>
                                    {!! Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password','required'=>'')) !!}
                                    <i class="icon-lock form-control-feedback"></i>
                                </div>
                                @if(CNF_RECAPTCHA =='true')
                                    <div class="form-group has-feedback  animated fadeInLeft delayp1">
                                        <label class="text-left"> Are u human ? </label>
                                        <br />
                                        {!! captcha_img() !!} <br /><br />
                                        <input type="text" name="captcha" placeholder="Type Security Code" class="form-control" required/>

                                        <div class="clr"></div>
                                    </div>
                                @endif

                                <div class="row form-actions">
                                    <div class="col-sm-12">
                                        <button type="submit" style="width:100%;" class="btn btn-primary pull-right"><i class="icon-user-plus"></i> {{ Lang::get('core.signup') }}	</button>
                                    </div>
                                </div>
                                <p style="padding:10px 0" class="text-center">
                                    <a href="{{ URL::to('user/login')}}"> {{ Lang::get('core.signin') }}  </a> | <a href="{{ URL::to('')}}"> {{ Lang::get('core.backtosite') }}  </a>
                                </p>
                                {!! Form::close() !!}

                            </div>


                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#or').click(function () {
                $('#fr').toggle();
            });

            var form = $('#LoginAjax');
            form.parsley();
            form.submit(function () {

                if (form.parsley('isValid') == true) {
                    var options = {
                        dataType: 'json',
                        beforeSubmit: showRequest,
                        success: showResponse
                    }
                    $(this).ajaxSubmit(options);
                    return false;

                } else {
                    return false;
                }

            });

        });

        function showRequest() {
            $('.ajaxLoading').show();
        }
        function showResponse(data) {

            if (data.status == 'success') {
                window.location.href = data.url;
                $('.ajaxLoading').hide();
            } else {
                $('.message').html(data.message)
                $('.ajaxLoading').hide();
                $('.message').show(data.message)
                return false;
            }
        }
    </script>
@stop