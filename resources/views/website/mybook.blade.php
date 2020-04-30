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
                            <div class="dashboard-list-box fl-wrap">
                                <div class="dashboard-header fl-wrap">
                                    <h3>Bookings</h3>
                                </div>
                                <!-- dashboard-list end-->
                                @php(
                                $bookww=App\frist_cart::where('client_id',Auth::guard('client')->user()->id)->get()
                                )
                                @if(count($bookww)==0)
                                    @else
                                    @foreach($bookww as $row)
                                <div class="dashboard-list">
                                    <div class="dashboard-message">
{{--                                        <a href="#" class="new-dashboard-item">New</a>--}}
                                        <div class="dashboard-message-avatar">
                                            @php(
                                               $tour=\App\sub_service::Find($row->sub_service_id)
                                               )
                                            @if($tour==null)
                                                @else
                                                <img src="{{asset("img/".$tour->m_img)}}" alt="">
                                                @endif

                                        </div>
                                        <div class="dashboard-message-text">
                                            @php( $d=strtotime($row->created_at))
                                            <h4>Booking Date - <span>{{ date(" d  M Y", $d)}}</span></h4>
                                            <div class="booking-details fl-wrap">
                                                <span class="booking-title">Tour :</span>

                                                <span class="booking-text"><a href="{{url('/Service/'.str_replace(' ', '_',$tour->name_en).'/'.Config::get('app.locale'))}}">{{$tour->name_en}}</a></span>
                                            </div>

                                            <div class="booking-details fl-wrap">
                                                <span class="booking-title">Room Type :</span>
                                                @php(
                                                $room=\App\program_l::find($row->program_l_id)
                                                )
                                                <span class="booking-text"><a href="#">{{$room->name}}</a></span>
                                            </div>
                                            <div class="booking-details fl-wrap">
                                                <span class="booking-title">Persons :</span>
                                                <span class="booking-text">{{$row->Adult}} Peoples</span>
                                            </div>
                                            @if($row->child==0)
                                                @else
                                                <div class="booking-details fl-wrap">
                                                    <span class="booking-title">Children :</span>
                                                    <span class="booking-text"><a href="#" target="_top">{{$row->child}}</a></span>
                                                </div>
                                            @endif

                                            <div class="booking-details fl-wrap">
                                                <span class="booking-title">From :</span>
                                                @php( $d2=strtotime($row->from))
                                                <span class="booking-text">{{ date(" d  M Y", $d2)}}</span>
                                            </div>
                                            <div class="booking-details fl-wrap">
                                                @php( $d3=strtotime($row->to))
                                                <span class="booking-title">To :</span>
                                                <span class="booking-text">{{ date(" d  M Y", $d3)}}</span>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                                    @endforeach
@endif
                            </div>
                            <!-- pagination-->
{{--                            <div class="pagination">--}}
{{--                                <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>--}}
{{--                                <a href="#" class="current-page">1</a>--}}
{{--                                <a href="#">2</a>--}}
{{--                                <a href="#">3</a>--}}
{{--                                <a href="#">4</a>--}}
{{--                                <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
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