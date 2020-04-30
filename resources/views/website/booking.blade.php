@extends('website.layouts.website')

@section('content')


    <div id="wrapper">
        <!-- content-->
        <div class="content">
            <div class="breadcrumbs-fs fl-wrap">
                <div class="container">
                    <div class="breadcrumbs fl-wrap"><a href="#">Home</a><a href="#">Pages</a><span>Booking Page</span></div>
                </div>
            </div>
            <section class="middle-padding gre y-blue-bg">
                <div class="container">
                    <div class="list-main-wrap-title single-main-wrap-title fl-wrap">
                        <h2>Booking  </h2>
                    </div>
                    <div class="row">
                        @if(isset($cart))
                        <div class="col-md-4">
                            <div class="box-widget-item-header">
                                <h3> Your cart</h3>
                            </div>
                            <!--cart-details  -->
                            <div class="cart-details fl-wrap">
                                <!--cart-details_header-->
                                @php(
                                $sub_service=\App\sub_service::find($cart->sub_service_id)
                                )
                                @if($sub_service==null)
                                            @else
{{--                                            @php(--}}
{{--                                             $sub_program=\App\sub_program::find($sub_program_l->sub_program_id)--}}
{{--                                             )--}}
{{--                                                  @if($sub_program==null)--}}
{{--                                            @else--}}
                                <div class="cart-details_header">
                                    <a href="#"  class="widget-posts-img"><img src="{{asset('img/'.$sub_service->m_img)}}" class="respimg" alt="" style="height: 82px"></a>
                                    <div class="widget-posts-descr">
                                        <a href="#" title=""></a>
                                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>{{$sub_service->name_en}}</a></div>
                                    </div>
                                </div>
{{--                                 @endif--}}
                                  @endif
                                <!--cart-details_header end-->
                                <!--ccart-details_text-->
                                <div class="cart-details_text">
                                    <ul class="cart_list">
                                        @php(
                                        $level=\App\program_l::find($cart->program_l_id)
                                        )
                                        @if($level==null)
                                            @else
                                        <li>{{$level->name}} <span><strong>${{$level->price}}</strong></span></li>
                                        @endif
                                        <li>From <span>{{$cart->from}}</span></li>
                                        <li>To <span>{{$cart->to}}</span></li>
                                        {{--<li>Days<span>3 </span></li>--}}




                                        <li>Adults <span>{{$cart->Adult}}</span></li>
                                        @if($cart->child===0)
                                        <li>Child <span><strong>{{$cart->child}}</strong></span></li>
                                        @php(
                                       $number=explode(",",$cart->num_child)
                                        )
                                        @php(
                                       $i=1
                                        )
                                        @foreach($number as $num)



                                        <li>Age of Child {{$i++}}  <span><strong>{{$num}}</strong></span></li>
                                            @endforeach
                                            @endif
                                    </ul>
                                </div>
                                <!--cart-details_text end -->
                            </div>
                            <!--cart-details end -->
                            <!--cart-total -->
                            {{--<div class="cart-total">--}}
                                {{--<span class="cart-total_item_title">Total Cost</span>--}}
                                {{--<strong>$690</strong>--}}
                            {{--</div>--}}
                            <!--cart-total end -->
                        </div>
                        @endif
                        <div class="col-md-8">
                            <div class="bookiing-form-wrap">
                                <ul id="progressbar">
                                    <li class="active"><span>01.</span>Personal Info</li>

                                    <li class="modal-open"><span>02.</span>Billing Address</li>

                                    {{--<li><span>03.</span>Payment Method</li>--}}
                                    <li><span>04.</span>Confirm</li>
                                </ul>
                                <!--   list-single-main-item -->
                                <div class="list-single-main-item fl-wrap hidden-section tr-sec">
                                    <div class="profile-edit-container">
                                        <div class="custom-form">
                                            <form action="{{url('/add_book')}}" method="post">


                                                <input type="number"  name="cart"placeholder="id" value="{{$cart->id}}"  hidden required>

                                                {{csrf_field()}}
                                                <fieldset class="fl-wrap">
                                                    <div class="list-single-main-item-title fl-wrap">
                                                        <h3>Your personal Information</h3>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label>First Name <i class="far fa-user"></i></label>
                                                            <input type="text"  name="first" placeholder="Your Name"  required/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label>Last Name <i class="far fa-user"></i></label>
                                                            <input type="text"  name="last"placeholder="Your Last Name" required/>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label>Email Address<i class="far fa-envelope"></i>  </label>
                                                            <input type="text" name="email" placeholder="yourmail@domain.com" required/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label>Phone<i class="far fa-phone"></i>  </label>
                                                            <input type="text" placeholder="87945612233" name="phone" value=""/>
                                                        </div>
                                                    </div>
                                                    <!--<div class="log-massage">Existing Customer? <a href="#" class="modal-open">Click here to login</a></div>-->
                                                    <!--<div class="log-separator fl-wrap"><span>or</span></div>-->
                                                    <!--<div class="soc-log fl-wrap">-->
                                                    <!--    <p>For faster login or register use your social account.</p>-->
                                                    <!--    <a href="#" class="facebook-log"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>-->
                                                    <!--</div>-->

                                                    <div class="filter-tags">
                                                        <input id="check-a" type="checkbox" name="check">
                                                        <label for="check-a">By continuing, you agree to the<a href="#" target="_blank">Terms and Conditions</a>.</label>
                                                    </div>

                                                    <span class="fw-separator"></span>
                                                    @if(Auth::guard('client')->check())
                                                    <a  href="#"  class="next-form action-button btn no-shdow-btn color-bg">Billing Address <i class="fal fa-angle-right"></i></a>
                                                    @else
                                                    @endif
                                                </fieldset>
                                                <fieldset class="fl-wrap">
                                                    <div class="list-single-main-item-title fl-wrap">
                                                        <h3>Billing Address</h3>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <label>City <i class="fal fa-globe-asia"></i></label>
                                                            <input type="text" placeholder="Your city"  name="city" required/>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <label>Country </label>
                                                            <input type="text" placeholder="Your city"  name="country" required/>

                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <label>Street <i class="fal fa-road"></i> </label>
                                                            <input type="text" placeholder="Your Street"  name="street" required/>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <label>State<i class="fal fa-street-view"></i></label>
                                                            <input type="text" placeholder="Your State" name="state" required/>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <label>Postal code<i class="fal fa-barcode"></i> </label>
                                                            <input type="text" placeholder="123456" required name="code"/>
                                                        </div>
                                                    </div>
                                                    <div class="list-single-main-item-title fl-wrap">
                                                        <h3>Addtional Notes</h3>
                                                    </div>
                                                    <textarea cols="40" rows="3" placeholder="Notes" name="note" required></textarea>
                                                    <span class="fw-separator"></span>
                                                    <a  href="#"  class="previous-form action-button back-form   color-bg"><i class="fal fa-angle-left"></i> Back</a>
                                                    <a  href="#"  class="next-form back-form action-button btn no-shdow-btn color-bg">Payment Step <i class="fal fa-angle-right"></i></a>
                                                </fieldset>
                                                {{--<fieldset class="fl-wrap">--}}
                                                    {{--<div class="list-single-main-item-title fl-wrap">--}}
                                                        {{--<h3>Payment method</h3>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-sm-6">--}}
                                                            {{--<label>Cardholder's Name<i class="far fa-user"></i></label>--}}
                                                            {{--<input type="text" placeholder="" value="Adam Kowalsky"/>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-sm-6">--}}
                                                            {{--<label>Card Number <i class="fal fa-credit-card-front"></i></label>--}}
                                                            {{--<input type="text" placeholder="xxxx-xxxx-xxxx-xxxx" value=""/>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="row">--}}
                                                        {{--<div class="col-sm-3">--}}
                                                            {{--<label>Expiry Month<i class="fal fa-calendar"></i></label>--}}
                                                            {{--<input type="text" placeholder="MM" value=""/>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-sm-3">--}}
                                                            {{--<label>Expiry Year<i class="fal fa-calendar"></i></label>--}}
                                                            {{--<input type="text" placeholder="YY" value=""/>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-sm-2">--}}
                                                            {{--<label>CVV / CVC *<i class="fal fa-credit-card"></i></label>--}}
                                                            {{--<input type="password" placeholder="***" value=""/>--}}
                                                        {{--</div>--}}
                                                        {{--<div class="col-sm-4">--}}
                                                            {{--<p style="padding-top:20px;">*Three digits number on the back of your card</p>--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<div class="log-separator fl-wrap"><span>or</span></div>--}}
                                                    {{--<div class="soc-log fl-wrap">--}}
                                                        {{--<p>Select Other Payment Method</p>--}}
                                                        {{--<a href="#" class="paypal-log"><i class="fab fa-paypal"></i>Pay With Paypal</a>--}}
                                                    {{--</div>--}}
                                                    {{--<span class="fw-separator"></span>--}}
                                                    {{--<a  href="#"  class="previous-form  back-form action-button    color-bg"><i class="fal fa-angle-left"></i> Back</a>--}}
                                                    {{--<a  href="#"  class="next-form  action-button btn color2-bg no-shdow-btn">Confirm and Pay<i class="fal fa-angle-right"></i></a>--}}
                                                {{--</fieldset>--}}
                                                <fieldset class="fl-wrap">
                                                    <div class="list-single-main-item-title fl-wrap">
                                                        <h3>Confirmation</h3>
                                                    </div>
                                                    <div class="success-table-container">
                                                        <div class="success-table-header fl-wrap">
                                                            <i class="fal fa-check-circle decsth"></i>
                                                            <h4>Thank you.</h4>
                                                            <div class="clearfix"></div>
                                                            {{--<p>Your payment has been processed successfully.</p>--}}
                                                            {{--<a href="invoice.html" target="_blank" class="color-bg">View Invoice</a>--}}
                                                            <button  type="submit"  style="margin-left: 70%;" class="  btn btn-primary color-bg">Send</button>
                                                        </div>
                                                    </div>
                                                    <span class="fw-separator"></span>
                                                    <a  href="#"  class="previous-form action-button  back-form   color-bg"><i class="fal fa-angle-left"></i> Back</a>
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--   list-single-main-item end -->
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- section end -->
        </div>
        <!-- content end-->
    </div>



@stop