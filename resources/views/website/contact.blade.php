

@extends('website.layouts.website')

@section('content')

  


    <div id="wrapper">
        <!-- content-->
        <div class="content">
            <!-- map-view-wrap -->
            <div class="map-view-wrap">
                <div class="container">
                    <div class="map-view-wrap_item">
                        <div class="list-single-main-item-title fl-wrap">
                            <h3>Contacts</h3>
                        </div>
                        <div class="box-widget-list mar-top">
                            <ul>
                                <li><span><i class="fal fa-map-marker"></i> Adress :</span> <a href="#">{{$con->address_en}}</a></li>
                                <li><span><i class="fal fa-map-marker"></i> Adress2 :</span> <a href="#">{{$con->address2_en}}</a></li>
                                <li><span><i class="fal fa-phone"></i> Phone :</span> <a href="#">{{$con->phone}}</a></li>
                                 <li><span><i class="fal fa-phone"></i> Phone :</span> <a href="#">{{$con->phone1}}</a></li>
                                <li><span><i class="fal fa-envelope"></i> Mail :</span> <a href="#">{{$con->email}}</a></li>
                                <li><span><i class="fal fa-browser"></i> Website :</span> <a href="#">{{$con->web}}</a></li>
                            </ul>
                        </div>
                        <div class="list-widget-social">
                            <ul>
                                <li><a href="{{$con->fb}}" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{$con->tw}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{$con->vk}}" target="_blank" ><i class="fab fa-youtube"></i></a></li>
                                <li><a href="{{$con->insta}}" target="_blank" ><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--map-view-wrap end -->
            <!-- Map -->
            <div class="map-container fw-map2">
                <iframe  id="singleMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.6128894633985!2d31.23616891459367!3d30.04796182536256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145840c74a111457%3A0x9a7d95715bc65156!2s8+Talaat+Harb%2C+Bab+Al+Louq%2C+Abdeen%2C+Cairo+Governorate!5e0!3m2!1sen!2seg!4v1553701827236" 
                width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div>
            </div>
            <!-- Map end -->
            <div class="breadcrumbs-fs fl-wrap">
                <div class="container">
                    <div class="breadcrumbs fl-wrap"><a href="#">Home</a><a href="#">Pages</a><span>Contacts</span></div>
                </div>
            </div>
            <section  id="sec1" class="grey-b lue-bg middle-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <!--   list-single-main-item -->
                            <div class="list-single-main-item fl-wrap">
                                <div class="list-single-main-item-title fl-wrap">
                                    <h3>Our Office </h3>
                                </div>
                                <div class="list-single-main-media fl-wrap">
                                    <img src="{{asset('website/assets/images/all/1.jpg')}}" alt="" class="respimg">
                                </div>
                                <p>{{$con->s_des_en}}.   </p>
                                <div class="list-single-main-item-title fl-wrap mar-top">
                                    <h3>Working Hours </h3>
                                </div>
                                <ul class="cat-item">
                                    <li><a href="#">Monday to Friday</a> <span>9am - 7pm</span></li>
                                    <li><a href="#">Saturday to Sunday </a> <span>Closed</span></li>
                                </ul>
                            </div>
                            <!--   list-single-main-item end -->
                        </div>
                        <div class="col-md-8">
                            <div class="list-single-main-item fl-wrap">
                                <div class="list-single-main-item-title fl-wrap">
                                    <h3>Get In Touch</h3>
                                </div>
                                <div id="contact-form">
                                    <div id="message"></div>
                                      <form class="custom-form" action="{{route('Contact_us_message')}}"  role="" method="post"  id="contact_us">

                                            @csrf

                                  
                                        <fieldset>
                                            <label><i class="fal fa-user"></i></label>
                                            <input type="text" name="name"  id="name"  placeholder="Your Name *" value=""/>
                                            <div class="clearfix"></div>
                                            <label><i class="fal fa-envelope"></i>  </label>
                                            <input type="text"  name="email" id="email" placeholder="Email Address*" value=""/>
                                              <label><i class="fal fa-envelope"></i>  </label>
                                            <input type="text"  name="phone"  id="phone" placeholder="phone*" value=""/>
                                              <label><i class="fal fa-envelope"></i>  </label>
                                            <input type="text"  name="subject" id="subject"  placeholder="subject*" value=""/>

                                            <textarea name="message"  id="message" cols="40" rows="3" placeholder="Your Message:"></textarea>
                                        </fieldset>
                                        <!--<button type="button"  value="submit" onclick="myFun()" -->
                                        <!--class="btn float-btn color2-bg" style="margin-top:15px;" id="submit">Send Message<i class="fal fa-angle-right"></i></button>-->
                                       
                                    <button  type="submit"  class="btn float-btn color2-bg" value="submit" onclick="myFun()">{{trans('main.send')}}</button>
                                    </form>
                                </div>
                                <!-- contact form  end-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-decor"></div>
            </section>
            <!-- section end -->
        </div>
        <!-- content end-->
    </div>



@stop

