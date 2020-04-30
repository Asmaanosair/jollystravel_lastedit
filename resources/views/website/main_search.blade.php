
@extends('website.layouts.website')

@section('content')

    <!--  wrapper  -->
    <div id="wrapper">
        <!-- content-->
        <div class="content">
            <!--  section  -->
            <section class="parallax-section single-par" data-scrollax-parent="true">
                <div class="bg par-elem "  data-bg="{{asset('website/assets/images/bg/1.jpg')}}" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="section-title center-align big-title">
                        <!--<div class="section-title-separator"><span></span></div>-->
                         <div  class="listing-rating card-popup-rainingvis" data-starrating2="5"><span></span></div>
                        <h2><span>Search</span></h2>
                        <span class="section-separator"></span>

                    </div>
                </div>
                <div class="header-sec-link">
                    <div class="container"><a href="#sec1" class="custom-scroll-link color-bg"><i class="fal fa-angle-double-down"></i></a></div>
                </div>
            </section>
            <!--  section  end-->
            <div class="breadcrumbs-fs fl-wrap">
                <div class="container">
                    <div class="breadcrumbs fl-wrap"><a href="#">Home</a><span>Search</span></div>
                </div>
            </div>
            <!--section -->
            <section class="grey-blue-bg small-padding" id="sec1">
                <div class="container">
                    <div class="row">
                        <!--listing -->
                        <div class="col-md-12">

                            <div class="col-list-wrap fw-col-list-wrap">
                                <!-- list-main-wrap-->
                                <div class="list-main-wrap fl-wrap card-listing">
                                    <!-- list-main-wrap-opt-->
                                    <div class="list-main-wrap-opt fl-wrap">
                                        <div class="list-main-wrap-title fl-wrap col-title">
                                            <h2> <span> Results </span></h2>
                                        </div>

                                        <div class="grid-opt">
                                            <ul>
                                                <li><span class="two-col-grid act-grid-opt"><i class="fas fa-th-large"></i></span></li>
                                                <li><span class="one-col-grid"><i class="fas fa-bars"></i></span></li>
                                            </ul>
                                        </div>
                                        <!-- price-opt end-->
                                    </div>
                                    <!-- list-main-wrap-opt end-->
                                    <!-- listing-item-container -->
                                    <div class="listing-item-container init-grid-items fl-wrap three-columns-grid">
                                        <!-- listing-item  -->
                                        @if (isset($search))

    @foreach($search as $val)
                                                <div class="listing-item">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                            <a href="{{url('/Program/'.str_replace(' ','_',$val->name_en).'/'.Config::get('app.locale'))}}"><img src="{{asset('img/'.$val->m_img)}}" alt=""></a>
                                                            <div class="listing-avatar">
                                                                <!--<a href="author-single.html"><img src="{{asset('img/'.$val->m_img)}}" alt=""></a>-->
                                                                <!--<span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>-->
                                                            </div>
                                                            @if ($val->sale==null) @else <div class="sale-window">Sale {{$val->sale}}</div> @endif
                                                            <div class="geodir-category-opt">
                                                                <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                                                <div class="rate-class-name">
                                                                    <div class="score"><strong>Very Good</strong>27 Reviews </div>
                                                                    <span>5.0</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="geodir-category-content fl-wrap title-sin_item">
                                                            <div class="geodir-category-content-title fl-wrap">
                                                                <div class="geodir-category-content-title-item">
                                                                    <h3 class="title-sin_map"><a href="{{url('/Program/'.str_replace(' ', '_',$val->name_en).'/'.Config::get('app.locale'))}}">{{$val->name_en}}</a></h3>
                                                                    <!-- <div class="geodir-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a></div>-->
                                                                </div>
                                                            </div>
                                                            <p>{{$val->s_des_en}}.</p>
                                                            <!-- <ul class="facilities-list fl-wrap">
                                                                 <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                                                 <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                                                 <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                                                 <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                                                             </ul>-->
                                                            <div class="geodir-category-footer fl-wrap">
                                                                <div class="geodir-category-price">
                                                                    <!--Awg/Price <span>$ {{$val->price}}</span>-->
                                                                    </div>
                                                                <div class="geodir-opt-list">
                                                                    <!-- <a href="#" class="single-map-item" data-newlatitude="40.72956781" data-newlongitude="-73.99726866"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map</span></a>-->
                                                                    <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Save</span></a>
                                                                    <a href="{{url('/Program/'.str_replace(' ', '_',$val->name_en).'/'.Config::get('app.locale'))}}" class="geodir-js-booking"><i class="fa fa-list"></i><span class="geodir-opt-tooltip">Show Details </span></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            @endforeach
                                            @else


                                            @endif

                                    </div>
                                   
                                </div>
                                <!-- list-main-wrap end-->
                            </div>
                            <!--col-list-wrap end -->
                        </div>
                        <!--listing  end-->
                    </div>
                    <!--row end-->
                </div>
            </section>
            <!--section end -->
        </div>
        <!-- content end-->
    </div>
    <!--wrapper end -->



@stop
