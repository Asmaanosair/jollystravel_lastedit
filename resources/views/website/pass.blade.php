
@extends('website.layouts.website')
@section('content')
    <div id="wrapper">
        <!-- content-->
        <div class="content">
            <!-- section-->
            <section class="flat-header color-bg adm-header">
                <div class="wave-bg wave-bg2"></div>
                <div class="container">
                    <div class="dasboard-wrap fl-wrap">
                        <div class="dasboard-breadcrumbs breadcrumbs"><a href="#">Home</a><a href="#">Dashboard</a><span>Profile page</span></div>
                        <!--dasboard-sidebar-->
                        <div class="dasboard-sidebar">
                            <div class="dasboard-sidebar-content fl-wrap">
                                <div class="dasboard-avatar">
                                    @php
                                        $data=\App\data::where('client_id',Auth::guard('client')->user()->id)->first();
                                    @endphp
                                    @if(isset($data))

                                        @if($data->img==null)
                                            <img src="{{asset('website/assets/images/Kristine Bubble 14.03.2017.png')}}" alt="">
                                        @else
                                            <img src="{{asset("img/".$data->img)}}" width="50px" height="50px">
                                        @endif
                                    @else
                                        <img src="{{asset('website/assets/images/Kristine Bubble 14.03.2017.png')}}" alt="">
                                    @endif



                                </div>
                                <div class="dasboard-sidebar-item fl-wrap">
                                    <h3>
                                        <span>Welcome </span>
                                        {{Auth::guard('client')->user()->name}}
                                    </h3>
                                </div>
                                {{--<a href="dashboard-add-listing.html" class="ed-btn">Add Hotel</a>--}}
                                {{--<div class="user-stats fl-wrap">--}}
                                {{--<ul>--}}
                                {{--<li>--}}
                                {{--Listings--}}
                                {{--<span>4</span>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                {{--Bookings--}}
                                {{--<span>32</span>--}}
                                {{--</li>--}}
                                {{--<li>--}}
                                {{--Reviews--}}
                                {{--<span>9</span>--}}
                                {{--</li>--}}
                                {{--</ul>--}}
                                {{--</div>--}}
                                <a href="{{url('/User_Logout')}}" class="log-out-btn color-bg">Log Out <i class="far fa-sign-out"></i></a>
                            </div>
                        </div>
                        <!--dasboard-sidebar end-->
                        <!-- dasboard-menu-->
                        <div class="dasboard-menu">
                            <div class="dasboard-menu-btn color3-bg">Dashboard Menu <i class="fal fa-bars"></i></div>
                            <ul class="dasboard-menu-wrap">
                                <li>
                                    <a href="{{url('/MyAccount/'.Config::get('app.locale'))}}" class="user-profile-act"><i class="far fa-user"></i> profile</a>
                                    <ul>
                                        <li><a href="{{url('/Edit_profile/'.Config::get('app.locale'))}}">Edit profile</a></li>
                                        <li><a href="{{url('/MyPassword/'.Config::get('app.locale'))}}">Chang Password</a></li>
                                        {{--<li><a href="dashboard-password.html">Change Password</a></li>--}}
                                    </ul>
                                </li>


                                <li><a href="{{url('/MyBooking/'.Config::get('app.locale'))}}"> <i class="far fa-calendar-check"></i> Bookings <span>2</span></a></li>

                            </ul>
                        </div>
                        <!--dasboard-menu end-->
                        <!--Tariff Plan menu-->
                    {{--<div   class="tfp-btn"><span>Tariff Plan : </span> <strong>Extended</strong></div>--}}
                    {{--<div class="tfp-det">--}}
                    {{--<p>You Are on <a href="#">Extended</a> . Use link bellow to view details or upgrade. </p>--}}
                    {{--<a href="#" class="tfp-det-btn color2-bg">Details</a>--}}
                    {{--</div>--}}
                    <!--Tariff Plan menu end-->
                    </div>
                </div>
            </section>
            <!-- section end-->
            <!-- section-->
            <section class="middle-padding">
                <div class="container">
                    <!--dasboard-wrap-->
                    <div class="dasboard-wrap fl-wrap">
                        <!-- dashboard-content-->
                        <div class="dashboard-content fl-wrap">
                            <div class="box-widget-item-header">
                                <h3> Change Password</h3>
                            </div>
                            <div class="custom-form no-icons">
                                <form  method="post" action="{{url('/up_pass/'.Auth::guard('client')->user()->id)}}" enctype="multipart/form-data">
                                    {{csrf_field()}}
{{--                                <div class="pass-input-wrap fl-wrap">--}}
{{--                                    <label>Current Password</label>--}}
{{--                                    <input type="password" class="pass-input" placeholder="" value=""/>--}}
{{--                                    <span class="eye"><i class="far fa-eye" aria-hidden="true"></i> </span>--}}
{{--                                </div>--}}
                                <div class="pass-input-wrap fl-wrap">
                                    <label>New Password</label>
                                    <input type="password" class="pass-input" placeholder="" name="password" value=""/>
                                    <span class="eye"><i class="far fa-eye" aria-hidden="true"></i> </span>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="pass-input-wrap fl-wrap">
                                    <label>Confirm New Password</label>
                                    <input type="password" name="password_confirmation" class="pass-input" placeholder="" value=""/>
                                    <span class="eye"><i class="far fa-eye" aria-hidden="true"></i> </span>
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <button  type="submit" class="btn  big-btn  color2-bg flat-btn float-btn">Save Changes<i class="fal fa-save"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- dashboard-list-box end-->
                    </div>
                    <!-- dasboard-wrap end-->
                </div>
            </section>
            <!-- section end-->
            <div class="limit-box fl-wrap"></div>
        </div>
        <!-- content end-->
    </div>


@stop