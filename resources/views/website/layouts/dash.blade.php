@section('dash')
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

                            @if($data->img==null)
                                <img src="{{asset('website/assets/images/Kristine Bubble 14.03.2017.png')}}" alt="">
                            @else
                                <img src="{{url("img/".$data->img)}}" width="50px" height="50px">
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
                            <a href="dashboard.html" class="user-profile-act"><i class="far fa-user"></i>Edit profile</a>
                            <ul>
                                <li><a href="{{url('/Edit_profile')}}">Edit profile</a></li>
                                <li><a href="{{url('/MyAccount')}}">Dashboard</a></li>
                                {{--<li><a href="dashboard-password.html">Change Password</a></li>--}}
                            </ul>
                        </li>
                        {{--<li><a href="dashboard-messages.html"><i class="far fa-envelope"></i> Messages <span>3</span></a></li>--}}
                        {{--<li>--}}
                        {{--<a href="dashboard-listing-table.html"><i class="far fa-th-list"></i> My listigs  </a>--}}
                        {{--<ul>--}}
                        {{--<li><a href="#">Active</a><span>5</span></li>--}}
                        {{--<li><a href="#">Pending</a><span>2</span></li>--}}
                        {{--<li><a href="#">Expire</a><span>3</span></li>--}}
                        {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li><a href="dashboard-bookings.html"> <i class="far fa-calendar-check"></i> Bookings <span>2</span></a></li>--}}
                        {{--<li><a href="dashboard-review.html"><i class="far fa-comments"></i> Reviews </a></li>--}}
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
    @stop