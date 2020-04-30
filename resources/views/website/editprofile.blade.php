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
                                <h3> Your Profile</h3>
                            </div>
                            <!-- profile-edit-container-->

                            @if($data==null)
                                <form action="{{url('/edit_profile')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="profile-edit-container">
                                        <div class="custom-form">
                                            <label>Your Name <i class="far fa-user"></i></label>
                                            <input type="text" placeholder="Jessie Manrty" name="name"  value="{{Auth::guard('client')->user()->name}}" required />
                                            <input type="text" placeholder="Jessie Manrty" name="client"  hidden value="{{Auth::guard('client')->user()->id}}"required />
                                            <label>Email Address<i class="far fa-envelope"></i>  </label>
                                            <input type="text" placeholder="JessieManrty@domain.com" name="email" value="{{Auth::guard('client')->user()->email}}" required/>
                                            <label>Phone<i class="far fa-phone"></i>  </label>
                                            <input type="text" placeholder="+7(123)987654" required name="phone"/>
                                            <label> Address <i class="fas fa-map-marker"></i>  </label>
                                            <input type="text" placeholder="USA 27TH Brooklyn NY"  required name="address"/>

                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <label> Notes</label>
                                                    <textarea cols="40" rows="3" name="note"   placeholder="About Me"></textarea>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Change Avatar</label>
                                                    <div class="add-list-media-wrap">
                                                        <div class="fuzone">
                                                            <div class="fu-text">
                                                                <span><i class="fal fa-image"></i> Click here or drop files to upload</span>
                                                            </div>
                                                            <input type="file"  name="image"  class="upload">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- profile-edit-container end-->
                                {{--<div class="box-widget-item-header mat-top">--}}
                                {{--<h3>Your  Tariff Plan</h3>--}}
                                {{--</div>--}}
                                {{--<!-- profile-edit-container-->--}}
                                {{--<div class="profile-edit-container add-list-container">--}}
                                {{--<div class="custom-form">--}}
                                {{--<div class="row">--}}
                                {{--<!--col -->--}}
                                {{--<div class="col-md-4">--}}
                                {{--<div class="add-list-media-header">--}}
                                {{--<label class="radio inline">--}}
                                {{--<input type="radio" name="gender">--}}
                                {{--<span>Basic 99$</span>--}}
                                {{--</label>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<!--col end-->--}}
                                {{--<!--col -->--}}
                                {{--<div class="col-md-4">--}}
                                {{--<div class="add-list-media-header">--}}
                                {{--<label class="radio inline">--}}
                                {{--<input type="radio" name="gender"  checked>--}}
                                {{--<span>Extended 99$</span>--}}
                                {{--</label>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<!--col end-->--}}
                                {{--<!--col -->--}}
                                {{--<div class="col-md-4">--}}
                                {{--<div class="add-list-media-header">--}}
                                {{--<label class="radio inline">--}}
                                {{--<input type="radio" name="gender">--}}
                                {{--<span>Professional 149$</span>--}}
                                {{--</label>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<!--col end-->--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                <!-- profile-edit-container end-->
                                    <div class="box-widget-item-header mat-top">
                                        <h3>Your  Socials</h3>
                                    </div>

                                    <!-- profile-edit-container-->
                                    <div class="profile-edit-container">
                                        <div class="custom-form">
                                            <label>Facebook <i class="fab fa-facebook"></i></label>
                                            <input type="text" placeholder="https://www.facebook.com/" name="fb"/>

                                            <label> Instagram <i class="fab fa-instagram"></i>  </label>
                                            <input type="text" placeholder="https://www.instagram.com/" name="insta"/>
                                            <button type="submit" class=" btn color2-bg  ">Save Changes<i class="fal fa-save"></i></button>
                                        </div>
                                    </div>
                                </form>
                            @else
                                <form action="{{url('/edit_profile')}}" method="post" enctype="multipart/form-data">

                                    {{csrf_field()}}
                                    <div class="profile-edit-container">
                                        <div class="custom-form">
                                            <label>Your Name <i class="far fa-user"></i></label>
                                            <input type="text"  name="name"  required value="{{Auth::guard('client')->user()->name}}" />
                                            <input type="text"  name="client"  hidden value="{{Auth::guard('client')->user()->id}}"required />
                                            <label>Email Address<i class="far fa-envelope"></i>  </label>
                                            <input type="text"  name="email"  value="{{Auth::guard('client')->user()->email}}"required/>
                                            <label>Phone<i class="far fa-phone"></i>  </label>
                                            <input type="text" value="{{$data->phone}}" required name="phone"/>
                                            <label> Address <i class="fas fa-map-marker"></i>  </label>
                                            <input type="text"   required name="address" value="{{$data->address}}"/>

                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <label> Notes</label>
                                                    <textarea cols="40" rows="3" name="note"   > {{$data->about}}</textarea>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label>Change Avatar</label>
                                                    <div class="add-list-media-wrap">
                                                        <div class="fuzone">
                                                            <div class="fu-text">
                                                                <span>
                                                                    @if($data->img==null)
                                                                        <i class="fal fa-image"></i>
                                                                    @else
                                                                        <img src="{{url("img/".$data->img)}}" width="50px" height="50px">
                                                                    @endif

                                                                   Click here or drop files to upload</span>
                                                            </div>
                                                            <input type="file"  name="image"  class="upload">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- profile-edit-container end-->
                                {{--<div class="box-widget-item-header mat-top">--}}
                                {{--<h3>Your  Tariff Plan</h3>--}}
                                {{--</div>--}}
                                {{--<!-- profile-edit-container-->--}}
                                {{--<div class="profile-edit-container add-list-container">--}}
                                {{--<div class="custom-form">--}}
                                {{--<div class="row">--}}
                                {{--<!--col -->--}}
                                {{--<div class="col-md-4">--}}
                                {{--<div class="add-list-media-header">--}}
                                {{--<label class="radio inline">--}}
                                {{--<input type="radio" name="gender">--}}
                                {{--<span>Basic 99$</span>--}}
                                {{--</label>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<!--col end-->--}}
                                {{--<!--col -->--}}
                                {{--<div class="col-md-4">--}}
                                {{--<div class="add-list-media-header">--}}
                                {{--<label class="radio inline">--}}
                                {{--<input type="radio" name="gender"  checked>--}}
                                {{--<span>Extended 99$</span>--}}
                                {{--</label>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<!--col end-->--}}
                                {{--<!--col -->--}}
                                {{--<div class="col-md-4">--}}
                                {{--<div class="add-list-media-header">--}}
                                {{--<label class="radio inline">--}}
                                {{--<input type="radio" name="gender">--}}
                                {{--<span>Professional 149$</span>--}}
                                {{--</label>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<!--col end-->--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                <!-- profile-edit-container end-->
                                    <div class="box-widget-item-header mat-top">
                                        <h3>Your  Socials</h3>
                                    </div>

                                    <!-- profile-edit-container-->
                                    <div class="profile-edit-container">
                                        <div class="custom-form">
                                            <label>Facebook <i class="fab fa-facebook"></i></label>
                                            <input type="text"   value="{{$data->fb}}"name="fb"/>

                                            <label> Instagram <i class="fab fa-instagram"></i>  </label>
                                            <input type="text"   value="{{$data->inst}}"name="insta"/>
                                            <button type="submit" class=" btn color2-bg  ">Save Changes<i class="fal fa-save"></i></button>
                                        </div>
                                    </div>
                                </form>
                        @endif
                        <!-- profile-edit-container end-->
                        </div>
                        <!-- dashboard-list-box end-->
                    </div>
                    <!-- dasboard-wrap end-->
                </div>
            </section>
            <div class="limit-box fl-wrap"></div>
        </div>
        <!-- content end-->
    </div>


@stop