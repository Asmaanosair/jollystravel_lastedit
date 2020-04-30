
@extends('website.layouts.website')

@section('content')
<style>

.pagination a {
    display: inline-block;
    width: 44px;
    height: 44px;
    line-height: 44px;
    border-radius: 6px;
    border: 1px solid #eee;
    box-sizing: border-box;
    position: relative;
    font-size: 13px;
    color: #888DA0;
    background: #fff;
    letter-spacing: 1px;
}
.pagination a.current-page, .pagination a:hover {
    color: #fff;
}

</style>

    <!--  wrapper  -->
    <div id="wrapper">
        <!-- content-->
        <div class="content">
            <!--  section  -->
            <section class="parallax-section single-par" data-scrollax-parent="true">
                <div class="bg par-elem "  data-bg="{{asset('website/assets/images/hot.jpg')}}" data-scrollax="properties: { translateY: '30%' }"></div>
                <div class="overlay"></div>
                <div class="container">
                    <div class="section-title center-align big-title">
                        <div  class="listing-rating card-popup-rainingvis" data-starrating2="5"><span></span></div>
                        <h2><span>Hot Offers</span></h2>
                        <span class="section-separator"></span>
                        <!--<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet fermentum sem.</h4>-->
                    </div>
                </div>
                <div class="header-sec-link">
                    <div class="container"><a href="#sec1" class="custom-scroll-link color-bg"><i class="fal fa-angle-double-down"></i></a></div>
                </div>
            </section>
            <!--  section  end-->
            <div class="breadcrumbs-fs fl-wrap">
                <div class="container">
                    <div class="breadcrumbs fl-wrap"><a href="#">Home</a><span>Hot Offers</span></div>
                </div>
            </div>
            <!--section -->
            <section class="grey-blue-bg small-padding" id="sec1">
                <div class="container">
                    <div class="row">
                        <!--listing -->
                        <div class="col-md-12">
                            
                            
                            <div class="mobile-list-controls fl-wrap mar-bot-cont">
                                <!--<div class="mlc show-list-wrap-search fl-wrap"><i class="fal fa-filter"></i> Filter</div>-->
                            </div>
                            <!--list-wrap-search   -->
     <!--                       <div class="list-wrap-search lisfw fl-wrap lws_mobile">-->
     <!--                           <div class="container">-->
     <!--                               <div class="row">-->
                                        <!-- col-list-search-input-item -->
     <!--                                      <form action="{{url('/Main_Search/'.Config::get('app.locale'))}}" method="get">-->
     <!--                       {{csrf_field()}}-->
                                        
     <!--                                   <div class="col-md-6">-->
     <!--                                       <div class="col-list-search-input-item in-loc-dec fl-wrap not-vis-arrow">-->
     <!--                                           <label>  your favorite tour program</label>-->
     <!--                                           <div class="listsearch-input-item">-->
     <!--                                               <select data-placeholder="City" class="chosen-select"  name="prog">-->
     <!--                                                   <option>select your favorite tour </option>-->
     <!--@if($sub==null)-->
     <!--                                   @else-->
     <!--                                       @foreach($sub as $val)-->
     <!--                                                  <option> {{$val->name_en}}</option> @endforeach-->
     <!--                                                  @endif-->

     <!--                                               </select>-->
     <!--                                           </div>-->
     <!--                                       </div>-->
     <!--                                   </div>-->
                                        
     <!--                                     <div class="search-input-item small-input ">-->
     <!--                                           <div class="col-list-search-input-item fl-wrap">-->
     <!--                                               <button class="header-search-button" onclick="window.location.href='{{url("/Main_Search/".Config::get("app.locale"))}}'">Search <i class="far fa-search"></i></button>-->
     <!--                                           </div>-->
     <!--                                       </div>-->
     <!--                                   </form>-->
                                        <!-- col-list-search-input-item end -->
                                        <!-- col-list-search-input-item -->
                                        <!-- <div class="col-md-5">
     <!--                                        <div class="col-list-search-input-item fl-wrap location autocomplete-container">-->
     <!--                                            <label>Destination</label>-->
     <!--                                            <span class="header-search-input-item-icon"><i class="fal fa-map-marker-alt"></i></span>-->
     <!--                                            <input type="text" placeholder="Destination or Hotel Name" class="autocomplete-input" id="autocompleteid3" value=""/>-->
     <!--                                            <a href="#"><i class="fal fa-dot-circle"></i></a>-->
     <!--                                        </div>-->
     <!--                                    </div>-->
                                        <!-- col-list-search-input-item end -->
                                        <!-- col-list-search-input-item -->
                                    
                                        <!-- col-list-search-input-item end -->
     <!--                               </div>-->
     <!--                               <div class="search-opt-wrap fl-wrap">-->
     <!--                                   <div class="search-opt-wrap-container">-->
                                            <!-- col-list-search-input-item -->
                                            <!--<div class="search-input-item midd-input">-->
                                            <!--    <div class="col-list-search-input-item fl-wrap">-->
                                                    <!-- <div class="quantity-item">
                                            <!--             <label>Rooms</label>-->
                                            <!--             <div class="quantity">-->
                                            <!--                 <input type="number" min="1" max="3" step="1" value="1">-->
                                            <!--             </div>-->
                                            <!--         </div>-->
                                            <!--        <div class="quantity-item">-->
                                            <!--            <label>Adults</label>-->
                                            <!--            <div class="quantity">-->
                                            <!--                <input type="number" min="1" max="5" step="1" value="1">-->
                                            <!--            </div>-->
                                            <!--        </div>-->
                                            <!--        <div class="quantity-item">-->
                                            <!--            <label>Children</label>-->
                                            <!--            <div class="quantity">-->
                                            <!--                <input type="number" min="0" max="3" step="1" value="0">-->
                                            <!--            </div>-->
                                            <!--        </div>-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!-- col-list-search-input-item end -->
                                            <!-- col-list-search-input-item -->
                                            <!--<div class="search-input-item">-->
                                            <!--    <div class="range-slider-title">Price range</div>-->
                                            <!--    <div class="range-slider-wrap fl-wrap">-->
                                            <!--        <input class="range-slider" data-from="300" data-to="1200" data-step="50" data-min="50" data-max="2000" data-prefix="$">-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!-- col-list-search-input-item end -->
                                            <!-- col-list-search-input-item -->
                                           
                                            <!-- col-list-search-input-item end -->
                                            <!-- hidden-listing-filter -->
                                            <!-- <div class="hidden-listing-filter fl-wrap">
     <!--                                            <div class="row">-->
     <!--                                                <div class="col-md-4">-->

     <!--                                                    <div class="col-list-search-input-item fl-wrap">-->
     <!--                                                        <h4>Review Score</h4>-->
     <!--                                                        <div class="search-opt-container fl-wrap">-->

     <!--                                                            <ul class="fl-wrap filter-tags">-->
     <!--                                                                <li class="five-star-rating">-->
     <!--                                                                    <input id="check-aa2" type="checkbox" name="check" checked>-->
     <!--                                                                    <label for="check-aa2"><span class="listing-rating card-popup-rainingvis" data-starrating2="5"><span>5 Stars</span></span></label>-->
     <!--                                                                </li>-->
     <!--                                                                <li class="four-star-rating">-->
     <!--                                                                    <input id="check-aa3" type="checkbox" name="check">-->
     <!--                                                                    <label for="check-aa3"><span class="listing-rating card-popup-rainingvis" data-starrating2="5"><span>4 Star</span></span></label>-->
     <!--                                                                </li>-->
     <!--                                                                <li class="three-star-rating">-->
     <!--                                                                    <input id="check-aa4" type="checkbox" name="check">-->
     <!--                                                                    <label for="check-aa4"><span class="listing-rating card-popup-rainingvis" data-starrating2="5"><span>3 Star</span></span></label>-->
     <!--                                                                </li>-->
     <!--                                                            </ul>-->

     <!--                                                        </div>-->
     <!--                                                    </div>-->

     <!--                                                </div>-->
                                            <!-- <div class="col-md-8">

     <!--                                            <div class="col-list-search-input-item fl-wrap">-->
     <!--                                                <h4>Facilities</h4>-->
     <!--                                                <div class="search-opt-container fl-wrap">-->

     <!--                                                    <ul class="fl-wrap filter-tags half-tags">-->
     <!--                                                        <li>-->
     <!--                                                            <input id="check-aaa5" type="checkbox" name="check" checked>-->
     <!--                                                            <label for="check-aaa5">Free WiFi</label>-->
     <!--                                                        </li>-->
     <!--                                                        <li>-->
     <!--                                                            <input id="check-bb5" type="checkbox" name="check" checked>-->
     <!--                                                            <label for="check-bb5">Parking</label>-->
     <!--                                                        </li>-->
     <!--                                                        <li>-->
     <!--                                                            <input id="check-dd5" type="checkbox" name="check">-->
     <!--                                                            <label for="check-dd5">Fitness Center</label>-->
     <!--                                                        </li>-->
     <!--                                                    </ul>-->

     <!--                                                    <ul class="fl-wrap filter-tags half-tags">-->
     <!--                                                        <li>-->
     <!--                                                            <input id="check-cc5" type="checkbox" name="check">-->
     <!--                                                            <label for="check-cc5">Non-smoking Rooms</label>-->
     <!--                                                        </li>-->
     <!--                                                        <li>-->
     <!--                                                            <input id="check-ff5" type="checkbox" name="check" checked>-->
     <!--                                                            <label for="check-ff5">Airport Shuttle</label>-->
     <!--                                                        </li>-->
     <!--                                                        <li>-->
     <!--                                                            <input id="check-c4" type="checkbox" name="check">-->
     <!--                                                            <label for="check-c4">Air Conditioning</label>-->
     <!--                                                        </li>-->
     <!--                                                    </ul>-->

     <!--                                                </div>-->
     <!--                                            </div>-->

     <!--                                        </div>-->
     <!--                                    </div>-->
     <!--                                </div>-->
                                            <!-- hidden-listing-filter end -->
     <!--                                   </div>-->
                                        <!-- <div class="show-more-filters act-hiddenpanel color3-bg"><i class="fal fa-plus"></i><span>More options</span></div>-->
     <!--                               </div>-->
     <!--                           </div>-->
     <!--                       </div>-->
                            
                            
                            
                            <!--list-wrap-search end -->
                            <!--col-list-wrap -->
                            
                            
                            
                            <div class="col-list-wrap fw-col-list-wrap">
                                <!-- list-main-wrap-->
                                <div class="list-main-wrap fl-wrap card-listing">
                                    <!-- list-main-wrap-opt-->
                                    <div class="list-main-wrap-opt fl-wrap">
                                        <div class="list-main-wrap-title fl-wrap col-title">
                                            <h2> <span>all exclusive hot offer  </span></h2>
                                        </div>
                                        <!-- price-opt-->
                                        <!--<div class="price-opt">-->
                                        <!--    <span class="price-opt-title">Sort results by:</span>-->
                                        <!--    <div class="listsearch-input-item">-->
                                        <!--        <select data-placeholder="Popularity" class="chosen-select no-search-select" >-->

                                        <!--            <option>Price: low to high</option>-->
                                        <!--            <option>Price: high to low</option>-->
                                        <!--        </select>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                        <!-- price-opt end-->
                                        <!-- price-opt-->
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
                                        @if($sub==null)
                                        @else
                                            @foreach($sub as $val)
                                                <div class="listing-item">
                                                    <article class="geodir-category-listing fl-wrap">
                                                        <div class="geodir-category-img">
                                                            <a href="{{url('/Service/'.str_replace(' ', '_',$val->name_en).'/'.Config::get('app.locale'))}}"><img src="{{asset('img/'.$val->m_img)}}" alt=""></a>
                                                            <div class="listing-avatar">
                                                                <!--<a href="author-single.html"><img src="{{asset('img/'.$val->m_img)}}" alt=""></a>-->
                                                                <!--<span class="avatar-tooltip">Added By  <strong>Alisa Noory</strong></span>-->
                                                            </div>
                                                            @if ($val->sale==null) @else <div class="sale-window">Sale {{$val->sale}}</div> @endif
                                                            <!--<div class="geodir-category-opt">-->
                                                            <!--    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>-->
                                                                <!--<div class="rate-class-name">-->
                                                                <!--    <div class="score"><strong>Very Good</strong>27 Reviews </div>-->
                                                                <!--    <span>5.0</span>-->
                                                                <!--</div>-->
                                                            <!--</div>-->
                                                        </div>
                                                        <div class="geodir-category-content fl-wrap title-sin_item">
                                                            <div class="geodir-category-content-title fl-wrap">
                                                                <div class="geodir-category-content-title-item">
                                                                    <h3 class="title-sin_map"><a href="{{url('/Service/'.str_replace(' ', '_',$val->name_en).'/'.Config::get('app.locale'))}}">{{$val->name_en}}</a></h3>
                                                                    <!-- <div class="geodir-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a></div>-->
                                                                </div>
                                                            </div>
                                                            <p style="font-size:14px">{{$val->s_des_en}}.</p>
                                                            <!-- <ul class="facilities-list fl-wrap">
                                                                 <li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>
                                                                 <li><i class="fal fa-parking"></i><span>Parking</span></li>
                                                                 <li><i class="fal fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                                                                 <li><i class="fal fa-utensils"></i><span> Restaurant</span></li>
                                                             </ul>-->
                                                             
                                                            <!--<div class="geodir-category-footer fl-wrap">-->
                                                            <!--    <div class="geodir-category-price">-->
                                                                    <!--Awg/Price <span>$ {{$val->price}}</span>-->
                                                            <!--         <a href="{{url('/Service/'.str_replace(' ', '_',$val->name_en).'/'.Config::get('app.locale'))}}" class="geodir-js-booking"><i class="fa fa-list"></i><span class="geodir-opt-tooltip">Show Details </span></a>-->
                                                            <!--        </div>-->
                                                            <!--    <div class="geodir-opt-list">-->
                                                                    <!-- <a href="#" class="single-map-item" data-newlatitude="40.72956781" data-newlongitude="-73.99726866"><i class="fal fa-map-marker-alt"></i><span class="geodir-opt-tooltip">On the map</span></a>-->
                                                            <!--        <a href="#" class="geodir-js-favorite"><i class="fal fa-heart"></i><span class="geodir-opt-tooltip">Save</span></a>-->
                                                                   
                                                            <!--    </div>-->
                                                            <!--</div>-->
                                                            
                                                        </div>
                                                    </article>
                                                </div>
                                            @endforeach

                                    </div>
                                    <!-- listing-item-container end-->
                                    <!-- pagination-->
                                     <!--<div class="pagination">-->
                                         <!--<a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>-->
                                         <!--<a href="#" >1</a>-->
                                         <!--<a href="#" class="current-page">2</a>-->
                                         <!--<a href="#">3</a>-->
                                         <!--<a href="#">4</a>-->
                                         <!--<a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>-->
                                     <!--    {!! $sub->render() !!}-->
                                         
                                     <!--</div>-->
                                      <!--   <div class="pagination clearfix padd-120 " style="text-align: center">-->
                                      <!-- {{$sub->render()}}-->
                                      <!--</div>-->
                                     
                                    
                                     
                                     
                                @endif


                                <!-- listing-item end -->

                                    <!-- pagination end-->
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
