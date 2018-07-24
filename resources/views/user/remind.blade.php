@extends('layouts.login')

@section('content')

	<div class="container">

		<div class="col-lg-6 col-lg-offset-3">
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

				<div class="col-lg-12">
					<span style="height: 80px!important;min-height: 80px!important;">&nbsp;</span>
				</div>

				<div class="col-lg-12">
					<div>
						<div class="tab-pane active m-t" id="tab-sign-in">
							{!! Form::open(array('url' => 'user/doreset/'.$verCode, 'class'=>'form-vertical sky-form boxed')) !!}

							<div class="form-group has-feedback  animated fadeInRight delayp1">
								<label class="label">New Password</label>
								{!! Form::password('password',  array('class'=>'form-control', 'placeholder'=>'New Password')) !!}
								<i class="icon-lock form-control-feedback"></i>
							</div>

							<div class="form-group has-feedback  animated fadeInRight delayp1">
								<label class="label">Re-type Password</label>
								{!! Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) !!}
								<i class="icon-lock form-control-feedback"></i>
							</div>

							<div class="form-group  has-feedback text-center  animated fadeInLeft delayp1"
								 style=" margin-bottom:20px;">

								<button type="submit" class="btn btn-info btn-sm btn-block"><i
											class="fa fa-sign-in"></i> {{ Lang::get('core.signin') }}</button>


								<div class="clr"></div>

							</div>
							<div class="animated fadeInUp delayp1">
								<p style="padding:10px 0" class="text-center">
									<a href="{{ URL::to('')}}"> {{ Lang::get('core.backtosite') }} </a>
								</p>
							</div>
							{!! Form::close() !!}

						</div>

					</div>
				</div>
			</div>

		</div>

	</div>


	{{--<div class="col-lg-12">--}}
		{{--<div class="tab-content">--}}
			{{--<div class="tab-pane active m-t" id="tab-sign-in">--}}

				{{--<div class="login-box">--}}
					{{--{!! Form::open(array('url' => 'user/doreset/'.$verCode, 'class'=>'form-vertical sky-form boxed')) !!}--}}
					{{--<header>--}}
						{{--{{ CNF_APPNAME }}--}}
					{{--</header>--}}
					{{--<fieldset>--}}
						{{--@if(Session::has('message'))--}}
							{{--{!! Session::get('message') !!}--}}
						{{--@endif--}}


						{{--<section>--}}
							{{--<label class="label">New Password</label>--}}
							{{--<label class="input">--}}
								{{--<i class="icon-append fa fa-lock"></i>--}}
								{{--{!! Form::password('password',  array('class'=>'form-control', 'placeholder'=>'New Password')) !!}--}}
								{{--<span class="tooltip tooltip-top-right">{{ Lang::get('core.email') }}</span>--}}
							{{--</label>--}}
						{{--</section>--}}


						{{--<section>--}}
							{{--<label class="label">Re-type Password</label>--}}
							{{--<label class="input">--}}
								{{--<i class="icon-append fa fa-lock"></i>--}}
								{{--{!! Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) !!}--}}
								{{--<span class="tooltip tooltip-top-right">Re-type Password</span>--}}
							{{--</label>--}}
						{{--</section>--}}

					{{--</fieldset>--}}

					{{--{!! Form::close() !!}--}}
				{{--</div>--}}

			{{--</div>--}}
		{{--</div>--}}
	{{--</div>--}}




@stop













