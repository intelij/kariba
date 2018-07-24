<nav class="main-nav navbar-right" role="navigation">
    <div class="navbar-header">
        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button><!--//nav-toggle-->
    </div><!--//navbar-header-->
    <div id="navbar-collapse" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li class="active nav-item"><a href="/">Home</a></li>
            <li class="nav-item"><a href="#">About Us</a></li>
            <li class="nav-item"><a href="#">How it works</a></li>
            {{--<li class="nav-item"><a href="#">Log in</a></li>--}}
            @if(!Auth::check())
                <li class="nav-item"><a tabindex="-1" href="{{ url('user/profile?view=frontend') }}"> {{ Lang::get('core.signin') }} </a></li>
                {{--<li><a tabindex="-1" href="{{ url('user/register') }}"><i class="glyphicon glyphicon-off"></i> {{ Lang::get('core.signup') }}</a></li>--}}
            @endif

            @if(Auth::check())
                {{--<li class="text-welcome hidden-xs">Welcome to {{ CNF_APPNAME }}, <strong> {{ Session::get('fid')}}</strong></li>--}}
                <li>
                    <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="#"><i class="fa fa-user hidden-xs"></i> {{ Lang::get('core.m_myaccount') }}</a>
                    <ul class="dropdown-menu pull-right">
                        <li><a tabindex="-1" href="{{ url('dashboard') }}"><i class="fa fa-desktop"></i> Dashboard</a></li>
                        <li><a tabindex="-1" href="{{ url('user/profile?view=frontend') }}"><i class="fa fa-user"></i> {{ Lang::get('core.m_profile') }}</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="{{ url('user/logout') }}"><i class="glyphicon glyphicon-off"></i> {{ Lang::get('core.m_logout') }}</a></li>
                    </ul>
                </li>
            @endif
            <li class="nav-item nav-item-cta last">
                {!! Form::open(array('route' => 'applynow', 'class' => 'form')) !!}
                <input type="hidden" id="hidden_terms" name="terms" value=""/>
                <input type="hidden" id="hidden_interest" name="interest" value=""/>
                <input type="hidden" id="repayment_date" name="repayment_date" value=""/>
                <button class="btn btn-cta btn-cta-secondary"><i class="fa fa-lock"></i> Apply Now</button>
                {!! Form::close() !!}
                {{--<a class="btn btn-cta btn-cta-secondary" href="{{ url('applynow') }}">Apply now</a>--}}
            </li>
        </ul>
        <!--//nav-->
    </div><!--//navabr-collapse-->
</nav><!--//main-nav-->




