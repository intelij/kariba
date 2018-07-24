@extends('layouts.app')


@section('content')

<script type="text/javascript" src="{{ asset('sximo/js/plugins/chartjs/Chart.min.js') }}"></script>
<div class="page-content row">

	<div class="page-content-wrapper m-t">  
	
	
	@if(Auth::check() && Auth::user()->group_id == 1)
 
<section class="ribon-sximo"> 
	<div class="row m-l-none m-r-none m-t  white-bg shortcut ribon "  >
		<div class="col-sm-6 col-md-3  p-sm ribon-white">
			<span class="pull-left m-r-sm "><i class="fa fa-table"></i></span> 
			<a href="{{ URL::to('sximo/module') }}" class="clear">
				<span class="h3 block m-t-xs"><strong>  {{ Lang::get('core.dash_i_module') }}  </strong>
				</span> <small>  {{ Lang::get('core.dash_module') }}</small>
			</a>
		</div>
		<div class="col-sm-6 col-md-3   p-sm ribon-module">
			<span class="pull-left m-r-sm ">	<i class="icon-steam2"></i></span>
			<a href="{{ URL::to('sximo/config') }}" class="clear">
				<span class="h3 block m-t-xs"><strong> {{ Lang::get('core.dash_i_setting') }}</strong>
				</span> <small >   {{ Lang::get('core.dash_setting') }} </small> 
			</a>
		</div>
		<div class="col-sm-6 col-md-3   p-sm ribon-white">
			<span class="pull-left m-r-sm ">	<i class="icon-list"></i></span>
			<a href="{{ URL::to('sximo/menu') }}" class="clear">
			<span class="h3 block m-t-xs"><strong>  {{ Lang::get('core.dash_i_sitemenu') }} </strong></span>
			<small>  {{ Lang::get('core.dash_sitemenu') }}  </small> </a>
		</div>
		<div class="col-sm-6 col-md-3  p-sm ribon-setting">
			<span class="pull-left m-r-sm ">	<i class="icon-users"></i></span>
			<a href="{{ URL::to('core/users') }}" class="clear">
			<span class="h3 block m-t-xs"><strong> {{ Lang::get('core.dash_i_usergroup') }}</strong>
			</span> <small >  {{ Lang::get('core.dash_usergroup') }} </small> </a>
		</div>
	</div> 
</section>	

@endif


<div class="row m-t">  



            		<div class="col-lg-9">
            			<div class="row m-t">
                			<div class="col-lg-12">
        						<div class="sbox">     						
                                    <div class="sbox-content">
                                        <div>
                                            <span class="pull-right text-right">
                                                <small>Average value of sales in the past month in: <strong>United Kingdom</strong></small>
                                                    <br>
                                                   <span class="text-warning"> Total Loans: 712,862 </span>
                                            </span>
                                            <h1 class="m-b-xs">&pound;115,992</h1>
                                            <h3 class="font-bold no-margins">
                                                <span class="text-danger">{{ date("Y")}}</span> revenue margin
                                            </h3>
                                            <small>Sales marketing.</small>
                                        </div>

                                        <div>
                                            <div height="191" id="lineChart" style=" width: 100%;margin: 10px 0 ; height: 191px; background: #dadada;" >
                                                <p style="padding: 80px 0; font-size: 20px; text-align: center;">
                                                Your Charts Goes Here ...
                                                </p>

                                            </div>
                                        </div>

                                        <div class="m-t-md">
                                            <small class="pull-right">
                                                <i class="fa fa-clock-o"> </i>
                                                Update on 31.05.2016
                                            </small>
                                           <small>
                                               <strong>Analysis of sales:</strong> The value has been changed over time, and last month reached a level over &pound; 50,000.
                                           </small>
                                        </div>
                                    </div><!-- /sbox-content -->


        						</div><!-- /sbox -->
        					</div><!-- </div class="col-lg-12"> -->
                        </div><!-- </div class="row-mt"> -->

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="sbox">

                                    <div class="sbox-title">
                                        <span class="label label-info pull-right">Today</span>
                                        <h5>Title</h5>
                                    </div>
                                    <div class="sbox-content">
                                        <h2>76.886.200</h2>
                                        <div class="stat-percent font-bold text-info">98% <i class="fa fa-level-up"></i></div>
                                        <small>New Orders</small>
                                    </div>

                                </div><!-- /sbox -->
                            </div><!-- </div class="col-lg-4"> -->
                            <div class="col-lg-4">
                                <div class="sbox">

                                    <div class="sbox-title">
                                        <span class="label label-success pull-right">Monthly</span>
                                        <h5>Title</h5>
                                    </div>
                                    <div class="sbox-content">
                                        <h2>111.886.200</h2>
                                        <div class="stat-percent font-bold text-success">98% <i class="fa fa-level-up"></i></div>
                                        <small>New Orders</small>
                                    </div>

                                </div><!-- /sbox -->
                            </div><!-- </div class="col-lg-4"> -->
                            <div class="col-lg-4">
                                <div class="sbox">

                                    <div class="sbox-title">
                                        <span class="label label-warning pull-right">Annual</span>
                                        <h5>Title</h5>
                                    </div>
                                    <div class="sbox-content">
                                        <h2>&pound;870.886.200</h2>
                                        <div class="stat-percent font-bold text-warning">98% <i class="fa fa-level-up"></i></div>
                                        <small>New Orders</small>
                                    </div>

                                </div><!-- /sbox -->
                            </div><!-- </div class="col-lg-4"> -->
                        </div>



            		</div><!-- </div class="col-lg-9"> -->

                        <div class="col-lg-3" style="background-color:#ebebed;">
                            
                            <div class="" style="height: 1196px;">
                          
                                    <h3>Title <span class="badge badge-info pull-right">16</span></h3>
                                   
                                    <div class="feed-activity-list">               
                                        <div class="feed-element">
                                            <a class="pull-left" href="#">
                                                <img width="50" border="0" title="" class="img-circle tips" src="{{ asset('uploads/images/no-image-rounded.png') }}">&nbsp;
                                            </a>
                                            <div>                                                            
                                                <small>There are many variations of passages of Lorem Ipsum available.</small>
                                                <br/>
                                                <small class="text-muted">Today 1:21 pm</small>                  
                                            </div>
                                        </div>
                                        <hr/>
                                    
                                    </div><!-- </div class="feed-activity-list">  -->      
                                 
                                    <div class="feed-activity-list">               
                                        <div class="feed-element">
                                            <a class="pull-left" href="#">
                                                <img width="50" border="0" title="" class="img-circle tips" src="{{ asset('uploads/images/no-image-rounded.png') }}">&nbsp;
                                            </a>

                                            <div>                                                            
                                                <small>TIt is a long established fact that.</small>
                                                <br/>
                                                <small class="text-muted">Yesterday 2:11 am</small>                  
                                            </div>
                                        </div>
                                        <hr/>
                                    
                                    </div><!-- </div class="feed-activity-list">  -->

                                    <div class="feed-activity-list">               
                                        <div class="feed-element">
                                            <a class="pull-left" href="#">
                                                <img width="50" border="0" title="" class="img-circle tips" src="{{ asset('uploads/images/no-image-rounded.png') }}">&nbsp;
                                            </a>

                                            <div>                                                            
                                                <small>The generated Lorem Ipsum is therefore always free.</small>
                                                <br/>
                                                <small class="text-muted">Monday 4:11 pm</small>                  
                                            </div>
                                        </div>
                                        <hr/>
                                    
                                    </div><!-- </div class="feed-activity-list">  -->

                                    <div class="m-t-md">
                                        <h4>Title</h4>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                        </p>
                                        <div class="row m-t-sm">
                                            <div class="col-md-6">
                                                <span class="bar" style="display: none;">5,3,9,6,5,9,7,3,5,2</span><svg class="peity" height="16" width="32"><rect fill="#1ab394" x="0" y="7.111111111111111" width="2.3" height="8.88888888888889"/><rect fill="#d7d7d7" x="3.3" y="10.666666666666668" width="2.3" height="5.333333333333333"/><rect fill="#1ab394" x="6.6" y="0" width="2.3" height="16"/><rect fill="#d7d7d7" x="9.899999999999999" y="5.333333333333334" width="2.3" height="10.666666666666666"/><rect fill="#1ab394" x="13.2" y="7.111111111111111" width="2.3" height="8.88888888888889"/><rect fill="#d7d7d7" x="16.5" y="0" width="2.3" height="16"/><rect fill="#1ab394" x="19.799999999999997" y="3.555555555555557" width="2.3" height="12.444444444444443"/><rect fill="#d7d7d7" x="23.099999999999998" y="10.666666666666668" width="2.3" height="5.333333333333333"/><rect fill="#1ab394" x="26.4" y="7.111111111111111" width="2.3" height="8.88888888888889"/><rect fill="#d7d7d7" x="29.7" y="12.444444444444445" width="2.3" height="3.5555555555555554"/></svg>
                                                <h5><strong>169</strong> Posts</h5>
                                            </div>
                                            <div class="col-md-6">
                                                <span class="line" style="display: none;">5,3,9,6,5,9,7,3,5,2</span><svg class="peity" height="16" width="32"><polygon fill="#1ab394" points="0 15 0 7.166666666666666 3.5555555555555554 10.5 7.111111111111111 0.5 10.666666666666666 5.5 14.222222222222221 7.166666666666666 17.77777777777778 0.5 21.333333333333332 3.833333333333332 24.888888888888886 10.5 28.444444444444443 7.166666666666666 32 12.166666666666666 32 15"/><polyline fill="transparent" points="0 7.166666666666666 3.5555555555555554 10.5 7.111111111111111 0.5 10.666666666666666 5.5 14.222222222222221 7.166666666666666 17.77777777777778 0.5 21.333333333333332 3.833333333333332 24.888888888888886 10.5 28.444444444444443 7.166666666666666 32 12.166666666666666" stroke="#169c81" stroke-width="1" stroke-linecap="square"/></svg>
                                                <h5><strong>28</strong> Orders</h5>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="m-t-md">
                                        <h4>Title</h4>
                                        <div>
                                            <ul class="list-group">
                                                <li class="list-group-item">
                                                    <span class="badge badge-primary">16</span>
                                                    General topic
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="badge badge-info">12</span>
                                                    The generated Lorem
                                                </li>
                                                <li class="list-group-item">
                                                    <span class="badge badge-warning">7</span>
                                                    There are many variations
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                            </div><!-- </div style="height: 1196px;"> -->

                        </div><!-- </div class="col-lg-3" style="background-color:#ebebed;"> -->

                	</div>

	
</div>	
	
</div>



@stop