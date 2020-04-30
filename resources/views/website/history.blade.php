@extends('website.layouts.website')

@section('content')

    <div id="wrapper">
        <!-- content-->
        <div class="content">
            <!--  section  -->
            <section class="parallax-section single-par" data-scrollax-parent="true">
                <div class="bg par-elem "  data-bg="{{asset('img/'.$about->m_img)}}" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="section-title center-align big-title">
                        <div  class="listing-rating card-popup-rainingvis" data-starrating2="5"><span></span></div>
                        <h2><span>


                                @if(Config::get('app.locale') == 'en')
                                    {{$about->name_en}}
                                @elseif(Config::get('app.locale') == 'de')
                                    {{$about->name_de}}

                                @elseif(Config::get('app.locale') == 'it')
                                    {{$about->name_it}}

                                @elseif(Config::get('app.locale') == 'es')
                                    {{$about->name_es}}

                                @elseif(Config::get('app.locale') == 'fr')
                                    {{$about->name_fr}}

                                @else
                                    {{$about->name_en}}
                                @endif




                                </span></h2>
                        <span class="section-separator"></span>
                        <h4>
                            @if(Config::get('app.locale') == 'en')
                                {{$about->s_des_en}}
                            @elseif(Config::get('app.locale') == 'de')
                                {{$about->s_des_de}}

                            @elseif(Config::get('app.locale') == 'it')
                                {{$about->s_des_it}}

                            @elseif(Config::get('app.locale') == 'es')
                                {{$about->s_des_es}}

                            @elseif(Config::get('app.locale') == 'fr')
                                {{$about->s_des_fr}}

                            @else
                                {{$about->s_des_en}}
                            @endif





                            </h4>
                    </div>
                </div>
                <div class="header-sec-link">
                    <div class="container"><a href="#sec1" class="custom-scroll-link color-bg"><i class="fal fa-angle-double-down"></i></a></div>
                </div>
            </section>
            <!--  section  end-->
            <div class="breadcrumbs-fs fl-wrap">
                <div class="container">
                    <div class="breadcrumbs fl-wrap"><a href="#">Home</a><a href="#">Pages</a><span>About Us</span></div>
                </div>
            </div>
            <section  id="sec1" class="middle-padding">
                <div class="container">
                    <!--about-wrap -->
                    <div class="about-wrap">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="video-box fl-wrap">
                                    <img src="{{asset('img/'.$about->m_img)}}" class="respimg" alt="">
                                    <a class="video-box-btn image-popup" href="{{$about->link}}"><i class="fa fa-play" aria-hidden="true"></i></a>
                                    <span class="video-box-title">Our Video Presentation</span>
                                    
                                </div>
                                
                               {!! $about->o_des_en !!}
                            </div>
                            
                            
                            <div class="col-md-6">
                                {!! $about->des_en !!}

                                <a href="#sec2" class="btn  color-bg float-btn custom-scroll-link">Our Team <i class="fal fa-users"></i></a>
                            </div>
                        </div>
                    </div>


                </div>
            </section>
            <!-- section end -->
            <!--section -->
            <section class="color-bg hidden-section">
                <div class="wave-bg wave-bg2"></div>
                <div class="container">
                    <div class="section-title">
                        <h2>Why Choose Us</h2>
                        <span class="section-separator"></span>

                    </div>
                    <!-- -->
                    <div class="row">
                        @foreach($why as $key=>$row)
                        <div class="col-md-4" style="margin-bottom:10px">
                            <!-- process-item-->
                            <div class="process-item big-pad-pr-item @if($key==2 || $key==5) nodecpre @else @endif ">
                                <span class="process-count"> </span>
                                <div class="time-line-icon">{!!$row->icon!!}</div>
                                <h4><a href="#"> {{$row->title_en}}</a></h4>
                                <p>{{$row->s_des_en}}.</p>
                            </div>
                            <!-- process-item end -->
                        </div>
                      
                        @endforeach


                    </div>
                    <!--process-wrap   end-->
                </div>
            </section>
            <!-- section end -->
            <!--section -->
            <section id="sec2">
                <div class="container">
                    <div class="section-title">
                        <h2>Our Team</h2>
                        <span class="section-separator"></span>

                    </div>
                    <div class="team-holder section-team fl-wrap">
                        <!-- team-item -->
                        @foreach($team as $row)
                        <div class="team-box">
                            <div class="team-photo">
                                <img src="{{asset('img/'.$row->img)}}" alt="" class="respimg">
                            </div>
                            <div class="team-info">
                                <div class="team-dec"><i class="fal {{$row->icon}}"></i></div>
                                <h3><a href="#">{{$row->name_en}}</a></h3>
                                <h4>{{$row->job_en}}</h4>
                                <p>{{$row->s_des_en}}  </p>
                                <div class="team-social">
                                    <ul>
                                        <li><a href="{{$row->fb}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{$row->tw}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="{{$row->insta}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="{{$row->vk}}" target="_blank"><i class="fab fa-vk"></i></a></li>
                                    </ul>
                                    <a class="team-contact_link" href="{{url('/Contact')}}"><i class="fal fa-envelope"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </section>
            <!-- section end -->
            <section class="parallax-section" data-scrollax-parent="true">
                <div class="bg par-elem "  data-bg="{{asset('website/assets/images/bg/1.jpg')}}" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <!--container-->
                <div class="container">
                    <div class="intro-item fl-wrap">
                        <h2>Need more information</h2>
                      <!--  <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</h3>-->
                        <a class="btn  color-bg" href="{{url('/Contact')}}">Get in Touch <i class="fal fa-envelope"></i></a>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="section-title">
                        <h2> @php(
                                     $testimonail=explode(',',$tran->testimonail)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$testimonail[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$testimonail[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$testimonail[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$testimonail[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$testimonail[2]}} 
                                                                                
                                                                                @else
                                                                            {{$testimonail[0]}} 
                                                                        @endif</h2>
                        <span class="section-separator"></span>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!--slider-carousel-wrap -->
                <div class="slider-carousel-wrap text-carousel-wrap fl-wrap">
                    <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                    <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                    <div class="text-carousel single-carousel cur_carousel-slider-container fl-wrap">
                        <!--slick-item -->
                        @foreach($test as $row)
                        <div class="slick-item">
                            <div class="text-carousel-item">
                                <div class="popup-avatar"><img src="{{asset('img/'.$row->img)}}" alt=""></div>
                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                <div class="review-owner fl-wrap">{{$row->name_en}} <span></span></div>
                                <p> {{$row->s_des_en}}</p>

                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <!--slider-carousel-wrap end-->
                <div class="section-decor"></div>
            </section>
        </div>
        <!-- content end-->
    </div>



@stop
