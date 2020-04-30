@extends('website.layouts.website')

@section('content')
   


    <div id="wrapper">
        <!-- content-->
        <div class="content">
            <!--section -->
            @foreach($slider as $row)
            <section class="hero-section" data-scrollax-parent="true" id="sec1">
                <div class="hero-parallax">

                    <div class="bg"  data-bg="{{asset('img/'.$row->img)}}" data-scrollax="properties: { translateY: '200px' }"></div>
                    <div class="overlay op7"></div>
                </div>
                <div class="hero-section-wrap fl-wrap">
                    <div class="container">
                        <div class="home-intro">
                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><span></span></div>
                            <h2>
                                 @if(Config::get('app.locale') == 'en')
                                                                        {{$row->title_en}}
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$row->title_de}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$row->title_it}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                          {{$row->title_es}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                           {{$row->title_fr}}
                                                                                
                                                                                @else
                                                                             {{$row->title_en}}
                                                                        @endif
                                
                                
                                
                              </h2>
                            <span class="section-separator"></span>
                            <h3>
                                
                                 @if(Config::get('app.locale') == 'en')
                                                                        {{$row->s_des_en}}
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                          {{$row->s_des_de}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                           {{$row->s_des_it}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$row->s_des_es}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                           {{$row->s_des_fr}}
                                                                                
                                                                                @else
                                                                             {{$row->s_des_en}}
                                                                        @endif
                                
                                
                                
                               </h3>
                        </div>
                         <form action="{{url('/Main_Search/'.Config::get('app.locale'))}}" method="get" id="search">
                            {{csrf_field()}}

                        <div class="main-search-input-wrap">
                            <div class="main-search-input fl-wrap">
                                <div class="main-search-input-item location" id="autocomplete-container" style="width: 100%;">
                                    <span class="inpt_dec"><i class="fal fa-map-marker"></i></span>
                                    <input type="text" placeholder="Our Finest Tour Programs "   name="prog" id="programme"  />
                                    <a href="#"><i class="fal fa-dot-circle"></i></a>
                                </div>
                               <!-- <div class="main-search-input-item main-date-parent main-search-input-item_small">
                                    <span class="inpt_dec"><i class="fal fa-calendar-check"></i></span> <input type="text" placeholder="When" name="main-input-search" value="">
                                </div>-->
                                <!--<div class="main-search-input-item" style="width: 50%;">-->
                                <!--    <div class="qty-dropdown fl-wrap">-->
                                <!--        <div class="qty-dropdown-header fl-wrap"><i class="fal fa-users"></i> @lang("home.persons")</div>-->
                                <!--        <div class="qty-dropdown-content fl-wrap">-->
                                <!--            <div class="quantity-item">-->
                                <!--                <label><i class="fas fa-male"></i> @lang("home.adults")</label>-->
                                <!--                <div class="quantity">-->
                                <!--                    <input type="number" min="1" max="3" step="1" name="adults" value="1">-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--            <div class="quantity-item">-->
                                <!--                <label><i class="fas fa-child"></i>  @lang("home.children")</label>-->
                                <!--                <div class="quantity">-->
                                <!--                    <input type="number" min="0" max="3"  name="child"  step="1" value="0">-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                              <button type="submit" value="submit" class="main-search-button color2-bg" >
                                  
                                  
                                   @php(
                                     $search=explode(',',$tran->search)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$search[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$search[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$search[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$search[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$search[2]}} 
                                                                                
                                                                                @else
                                                                            {{$search[0]}} 
                                                                        @endif
                                  
                                  
                                 <i class="fal fa-search"></i></button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
                <div class="header-sec-link">
                    <div class="container"><a href="#sec2" class="custom-scroll-link color-bg"><i class="fal fa-angle-double-down"></i></a></div>
                </div>
            </section>
            @endforeach
            <!-- section end -->
            <!--section -->
            <section id="sec2">
                <div class="container">
                    <div class="section-title">
                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><span></span></div>
                        <h2>
                            
                             @php(
                                     $selectedtours=explode(',',$tran->selectedtours)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$selectedtours[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$selectedtours[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$selectedtours[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$selectedtours[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$selectedtours[2]}} 
                                                                                
                                                                                @else
                                                                            {{$selectedtours[0]}} 
                                                                        @endif
                            
                            
                            
                            </h2>
                        <span class="section-separator"></span>

                    </div>
                </div>
                <!-- portfolio start -->
                <div class="gallery-items fl-wrap mr-bot spad home-grid">
                    <!-- gallery-item-->

        @foreach($prog as $key=>$main)
                    <div class="gallery-item @if($key==1)  @else @endif">
                        <div class="grid-item-holder">
                            <div class="listing-item-grid">
                             <a href="{{url('/Our_Programs/'.str_replace(' ', '_',$main->name_en)).'/'.Config::get('app.locale')}}">   <img  src="{{asset('img/'.$main->img)}}"   alt=""></a>
                                <!--<div class="listing-counter"><span>43 </span> services</div>-->
                                <div class="listing-item-cat">
                                    <h3><a href="{{url('/Our_Programs/'.str_replace(' ', '_',$main->name_en)).'/'.Config::get('app.locale')}}">
                                        
                                        
                                        
                                      @if(Config::get('app.locale') == 'en')
                                                                          {{$main->name_en}}
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                             {{$main->name_de}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                             {{$main->name_it}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                          {{$main->name_it}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                         {{$main->name_it}}
                                                                                
                                                                                @else
                                                                           {{$main->name_en}}
                                                                        @endif
                                        
                                        
                                      </a></h3>
                                    <div class="weather-grid"   data-grcity="Paris"></div>
                                    <div class="clearfix"></div>
                                    <p>
                                         @if(Config::get('app.locale') == 'en')
                                                                           {{$main->s_des_en}}
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                             {{$main->s_des_de}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$main->s_des_it}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                          {{$main->s_des_es}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                       {{$main->s_des_fr}}
                                                                                
                                                                                @else
                                                                         {{$main->s_des_en}}
                                                                        @endif
                                        
                                        
                                        
                                        
                                       </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!-- portfolio end -->
                <!--<a href="{{url('/Our_Services')}}" class="btn    color-bg">Explore All services<i class="fas fa-caret-right"></i></a>-->
            </section>
            <!-- section end -->
            <!-- section-->
            <section class="grey-blue-bg">
                <!-- container-->
                <div class="container">
                    <div class="section-title">
                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><span></span></div>
                        <h2> @php(
                                     $allprograms=explode(',',$tran->allprograms)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$allprograms[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$allprograms[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$allprograms[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$allprograms[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$allprograms[2]}} 
                                                                                
                                                                                @else
                                                                            {{$allprograms[0]}} 
                                                                        @endif</h2>
                        <span class="section-separator"></span>
                        <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>-->
                    </div>
                </div>
                <!-- container end-->
                <!-- carousel -->
                <div class="list-carousel fl-wrap card-listing ">
                    <!--listing-carousel-->
                    <div class="listing-carousel  fl-wrap ">
                        <!--slick-slide-item-->
                        @foreach($program as $row)
                        <div class="slick-slide-item">
                            <!-- listing-item  -->
                            <div class="listing-item">
                                <article class="geodir-category-listing fl-wrap">
                                    <div class="geodir-category-img">
                                        <a href="{{url('/Program/'.str_replace(' ', '_',$row->name_en).'/'.Config::get('app.locale'))}}"><img style="height:250px" src="{{asset('img/'.$row->m_img)}}" alt=""></a>
                                        <div class="listing-avatar">
                                            
                                            <!--<a href="author-single.html"><img src="{{asset('website/assets/images/avatar/1.jpg')}}" alt=""></a>-->
                                            <!--<span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>-->
                                        </div>
                                        @if ($row->sale==null) @else <div class="sale-window"> @lang("home.sale"){{$row->sale}} </div> @endif
                                        
                                        <!--<div class="geodir-category-opt">-->
                                        <!--    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>-->
                                        <!--    <div class="rate-class-name">-->
                                        <!--        <div class="score"><strong> @lang("home.very_good")</strong>27  @lang("home.reviews")</div>-->
                                        <!--        <span>5.0</span>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        
                                    </div>
                                    <div class="geodir-category-content fl-wrap title-sin_item">
                                        <div class="geodir-category-content-title fl-wrap">
                                            <div class="geodir-category-content-title-item">
                                                <h3 class="title-sin_map"><a href="{{url('/Program/'.str_replace(' ', '_',$row->name_en).'/'.Config::get('app.locale'))}}"> 
                                                
                                                 @if(Config::get('app.locale') == 'en')
                                                                {{$row->name_en}}
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$row->name_de}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                           {{$row->name_it}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$row->name_es}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                        {{$row->name_fr}}
                                                                                
                                                                                @else
                                                                     {{$row->name_en}}
                                                                        @endif
                                                
                                                
                                                
                                                
                                               </a></h3>
                                                <div class="geodir-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i>{{$row->city}}</a></div>
                                            </div>
                                        </div>
                                       <!-- <p> -->
                                        
                                        
                                       <!--    @if(Config::get('app.locale') == 'en')-->
                                       <!--                       {{$row->s_des_en}}-->
                                       <!--                                 @elseif(Config::get('app.locale') == 'de')-->
                                       <!--                               {{$row->s_des_de}}-->
                                                                                
                                       <!--                                            @elseif(Config::get('app.locale') == 'it')-->
                                       <!--                                  {{$row->s_des_it}}-->
                                                                                
                                       <!--                                            @elseif(Config::get('app.locale') == 'es')-->
                                       <!--                                  {{$row->s_des_es}}-->
                                                                                
                                       <!--                                            @elseif(Config::get('app.locale') == 'fr')-->
                                       <!--                                 {{$row->s_des_fr}}-->
                                                                                
                                       <!--                                         @else-->
                                       <!--                           {{$row->s_des_en}}-->
                                       <!--                                 @endif-->
                                        
                                        
                                        
                                        
                                       <!--</p>-->
                                       <!-- <ul class="facilities-list fl-wrap">
                                            <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                            <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                            <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                            <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                                        </ul>-->
                                        <!--<div class="geodir-category-footer fl-wrap">-->
                                        <!--    <div class="geodir-category-price">-->
                                                
                                                <!--Awg/Price <span> @if(session()->get('currency')=="usa")-->
                                                <!--        $$$$$$$$$$$$$$$$$-->
                                                <!--        @else-->
                                                <!--        Uuuuuuuuuuuuu-->
                                                <!--        @endif</span>-->
                                        <!--          <a href="{{url('/Program/'.str_replace(' ', '_',$row->name_en).'/'.Config::get('app.locale'))}}" class="geodir-js-booking"><i class="fa fa-list"></i><span class="geodir-opt-tooltip">Show Details </span></a>-->
                                                
                                        <!--        </div>-->
                                        <!--    <div class="geodir-opt-list">-->
                                               <!-- <a href="#" class="single-map-item" data-newlatitude="40.72956781" data-newlongitude="-73.99726866"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map</span></a>-->
                                        <!--        <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">@lang("home.save")</span></a>-->
                                    
                                                <!--<a href="#" class="geodir-js-booking"><i class="fal fa-exchange"></i><span class="geodir-opt-tooltip">Find Directions</span></a>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    </div>
                                </article>
                            </div>
                            <!-- listing-item end -->
                        </div>
                        @endforeach

                    </div>
                    <!--listing-carousel end-->
                    <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                    <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                </div>
                <!--  carousel end-->
            </section>
            <!-- section end -->
            <!--section -->
            <section class="parallax-section" data-scrollax-parent="true">
                
                <div class="bg"  data-bg="{{asset('website/assets/images/hot.jpg')}}" data-scrollax="properties: { translateY: '100px' }"></div>
                <div class="overlay op7"></div>
                <!--container-->
                <div class="container">
                    <div class="section-title" style="position:relative ; top:-75px">
                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><span></span></div>
                        <h2> @php(
                                     $hotoffer=explode(',',$tran->hotoffer)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$hotoffer[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$hotoffer[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$hotoffer[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$hotoffer[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$hotoffer[2]}} 
                                                                                
                                                                                @else
                                                                            {{$hotoffer[0]}} 
                                                                        @endif </h2>
                        <span class="section-separator"></span>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-0">
                            <div class="colomn-text fl-wrap pad-top-column-text_small">
                                <div class="colomn-text-title">
                                    <!--<h3>@lang("home.hot_offers")</h3>-->
                                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>-->
                                    <!--<a href="{{url('/Hot_Offers/'.Config::get('app.locale'))}}" class="btn  color2-bg float-btn" style="margin-top:100px">-->
                                        
                                        @php(
                                     $showhot=explode(',',$tran->showhot)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$showhot[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$showhot[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$showhot[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$showhot[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$showhot[2]}} 
                                                                                
                                                                                @else
                                                                            {{$showhot[0]}} 
                                                                        @endif
                                        
                                        
                                        
                                     <i class="fas fa-caret-right"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <!--light-carousel-wrap-->
                            <div class="light-carousel-wrap fl-wrap">
                                <!--light-carousel-->
                                <div class="light-carousel">
                                    <!--slick-slide-item-->
                                    @foreach($hot as $row)
                                    <div class="slick-slide-item">
                                        <div class="hotel-card fl-wrap title-sin_item">
                                            <div class="geodir-category-img card-post">
                                                <a href="{{url('/Service/'.str_replace(' ', '_',$row->name_en).'/'.Config::get('app.locale'))}}"><img style="height:350px"  src="{{asset('img/'.$row->m_img)}}" alt=""></a>
                                                <!--<div class="listing-counter">Awg/Night <strong>$85</strong></div>-->
                                                <!--<div class="sale-window">Sale 20%</div>-->
                                                
                                                <div class="geodir-category-opt">
                                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                    <h4 class="title-sin_map"><a href="{{url('/Service/'.str_replace(' ', '_',$row->name_en).'/'.Config::get('app.locale'))}}">
                                                        
                                                        @if(Config::get('app.locale') == 'en')
                                                                        {{$row->name_en}}
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$row->name_de}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                           {{$row->name_it}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$row->name_es}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                        {{$row->name_fr}}
                                                                                
                                                                                @else
                                                                        {{$row->name_en}}
                                                                        @endif
                                                        
                                                        
                                                        
                                                       </a></h4>
                                                    <div class="geodir-category-location"><a href="#" class="single-map-item" data-newlatitude="40.90261483" data-newlongitude="-74.15737152"><i class="fas fa-map-marker-alt"></i> {{$row->city}}</a></div>
                                                    <!--<div class="rate-class-name">-->
                                                    <!--    <div class="score"><strong> @lang("home.good")</strong>8 @lang("home.reviews") </div>-->
                                                    <!--    <span>4.8</span>-->
                                                    <!--</div>-->
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                 
                                </div>
                                <!--light-carousel end-->
                                <div class="fc-cont  lc-prev"><i style="font-size:60px" class="fal fa-angle-left"></i></div>
                                <div class="fc-cont  lc-next"><i style="font-size:60px" class="fal fa-angle-right"></i></div>
                            </div>
                            <!--light-carousel-wrap end-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- section end -->
            <!--section -->
            <section>
                <div class="container">
                    <div class="section-title">
                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><span></span></div>
                        <h2>
                             
                            
                            
                            
                            @lang("home.why_choose_us")</h2>
                        <span class="section-separator"></span>

                    </div>
                    <!-- -->
                         <div class="row">
                        @foreach($why as $key=>$row)
                        <div class="col-md-4" style="margin-bottom:10px">
                            <!-- process-item-->
                            <div class="process-item big-pad-pr-item @if($key==2 || $key==5) nodecpre @else @endif ">
                                <span class="process-count"> </span>
                                <div class="time-line-icon">
                                   <!--<i class="far fa-abacus"></i>-->
                                   <!--<i class="fal fa-abacus"></i>-->
                                   <!--<i class="fas fa-abacus"></i>-->
                                    
                                    
                                    
                                    {!!$row->icon!!}</div>
                                <h4><a href="#"> 
                         
                                
                                 @if(Config::get('app.locale') == 'en')
                                                                         {{$row->title_en}}
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$row->title_de}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                           {{$row->title_it}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$row->title_es}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                        {{$row->title_fr}}
                                                                                
                                                                                @else
                                                                        {{$row->title_en}}
                                                                        @endif
                                
                                
                               </a></h4>
                                <p>
                                    @if(Config::get('app.locale') == 'en')
                                                                          {{$row->s_des_en}}
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                              {{$row->s_des_de}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                              {{$row->s_des_it}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                           {{$row->s_des_es}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$row->s_des_fr}}
                                                                                
                                                                                @else
                                                                         {{$row->s_des_en}}
                                                                        @endif
                                    
                                    
                                    
                                 .</p>
                            </div>
                            <!-- process-item end -->
                        </div>
                      
                        @endforeach


                    </div

                </div>
            </section>
            <!-- section end -->
            <!--section -->
            <section class="color-bg hidden-section">
                <div class="wave-bg wave-bg2"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- -->
                            <div class="colomn-text  pad-top-column-text fl-wrap">
                                <div class="colomn-text-title">
                                    <h3>@lang("home.our_app_available_now")</h3>
                                    <p>@lang("home.app").</p>
                                    <br>
                                       <p>@lang("home.app1").</p>
                                    <a href="#" class=" down-btn color3-bg"><i class="fab fa-apple"></i> Download for iPhone</a>
                                    <a href="#" class=" down-btn color3-bg"><i class="fab fa-android"></i> Download for Android</a>
                                </div>
                            </div>
                            <!--process-wrap   end-->
                        </div>
                        <div class="col-md-6">
                            <div class="collage-image">
                                <img src="{{asset('website/assets/images/api.png')}}" class="main-collage-image" alt="">
                                <div class="images-collage-title color3-bg">
                                    jolleys<span>travel</span></div>
                                <div class="collage-image-min cim_1"><img src="{{asset('website/assets/images/api/1.jpg')}}" alt=""></div>
                                <div class="collage-image-min cim_2"><img src="{{asset('website/assets/images/api/1.jpg')}}" alt=""></div>
                                <div class="collage-image-min cim_3"><img src="{{asset('website/assets/images/api/1.jpg')}}" alt=""></div>
                                <div class="collage-image-input">@lang("home.search") <i class="fa fa-search"></i></div>
                                <div class="collage-image-btn color2-bg">@lang("home.booking_now")</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- section end -->
            <!--section -->
            <section>
                <div class="container">
                    <div class="section-title">
                        <div  class="listing-rating card-popup-rainingvis" data-starrating2="5"><span></span></div>
                        <h2>
                        
                          @php(
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
                                                                        @endif
                        
                        
                        </h2>
                        <span class="section-separator"></span>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!--slider-carousel-wrap -->
                <div class="slider-carousel-wrap text-carousel-wrap fl-wrap">
                    <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                    <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                    <div class="text-carousel single-carousel fl-wrap">
                      @foreach($test as $row)
                        <div class="slick-item">
                            <div class="text-carousel-item">
                                <div class="popup-avatar"><img src="{{asset('img/'.$row->img)}}" alt=""></div>
                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5"> </div>
                                <div class="review-owner fl-wrap">
                                    
                                    
                                    
                                    
                                    @if(Config::get('app.locale') == 'en')
                                                                         {{$row->name_en}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                             {{$row->name_de}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                              {{$row->name_it}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                           {{$row->name_es}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$row->name_fr}} 
                                                                                
                                                                                @else
                                                                         {{$row->name_en}} 
                                                                        @endif
                                    
                                  
                                    
                                    
                                    
                                    <!-- - <span>Happy Client</span>--></div>
                                <p>
                                    @if(Config::get('app.locale') == 'en')
                                                                    {{$row->s_des_en}}
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$row->s_des_de}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$row->s_des_it}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$row->s_des_es}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                         {{$row->s_des_fr}}
                                                                                
                                                                                @else
                                                                         {{$row->s_des_en}}
                                                                        @endif
                                    
                                    
                                    
                                    </p>
                               <!-- <a href="#" class="testim-link">Via Facebook</a>-->
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                <!--slider-carousel-wrap end-->
            </section>
            <!-- section end-->
            <!--<section class="parallax-section" data-scrollax-parent="true">-->
            <!--    <div class="bg"  data-bg="{{asset('website/assets/images/bg/1.jpg')}}" data-scrollax="properties: { translateY: '100px' }"></div>-->
            <!--    <div class="overlay"></div>-->
                <!--container-->
            <!--    <div class="container">-->
            <!--        <div class="row">-->
            <!--            <div class="col-md-8">-->
                            <!-- column text-->
            <!--                <div class="colomn-text fl-wrap">-->
            <!--                    <div class="colomn-text-title">-->
                                    <!--<h3>The owner of the hotel or business ?</h3>-->
                                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar.</p>-->
                                    <!--<a href="dashboard-add-listing.html" class="btn  color-bg float-btn">Add your hotel<i class="fal fa-plus"></i></a>-->
            <!--                    </div>-->
            <!--                </div>-->
                            <!--column text   end-->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</section>-->
            <!-- section end -->
            <!--section -->
            <section class=" middle-padding">
              
                <div class="section-decor"></div>
            </section>
        </div>
        <!-- content end-->
    </div>



@stop

