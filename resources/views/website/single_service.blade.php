@extends('website.layouts.website')





@section('content')
 <!--Assma-->
  <style>
    
#yith-wcbk-booking-persons-type-450{
    display: none;
    }
#yith-wcbk-booking-persons-type-451{
    display: none;
    }
#yith-wcbk-booking-persons-type-452{
    display: none;
    }
#yith-wcbk-booking-persons-type-453{
    display: none;
    }
#yith-wcbk-booking-persons-type-454{
    display: none;
    }
#h2-hide{
        display: none; 
}
.age-style{
    padding: 5px;
    text-align: center;
    border:1px solid #eee;
    border-radius: 4px;
    float: none;
            
}
    
    </style>
   
    <div id="wrapper">
        <!-- content-->
        <div class="content">
            <!--  section  -->
            <section class="list-single-hero" data-scrollax-parent="true" id="sec1">
                @if($service->m_img==null)
                <div class="bg par-elem "  data-bg="{{asset('website/assets/images/bg/1.jpg')}}" data-scrollax="properties: { translateY: '30%' }"></div>
                @else
                  <div class="bg par-elem "  data-bg="{{asset('img/'.$service->m_img)}}" data-scrollax="properties: { translateY: '30%' }"></div>
                @endif
                <div class="list-single-hero-title fl-wrap">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="listing-rating-wrap">
                                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                </div>
                                <h2><span>{{$service->name_en}}</span></h2>
                                <div class="list-single-header-contacts fl-wrap">
                                    <ul>
                                    
                                        <li><i class="far fa-map-marker-alt"></i><a  href="#">{{$con->address_en}}</a></li>
                                        <li><i class="far fa-envelope"></i><a  href="#">{{$con->email}}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <!--  list-single-hero-details-->
                                <div class="list-single-hero-details fl-wrap">
                                    <!--  list-single-hero-rating-->
                                    <!--<div class="list-single-hero-rating">-->
                                    <!--    <div class="rate-class-name">-->
                                    <!--        <div class="score"><strong>Very Good</strong>2 Reviews </div>-->
                                    <!--        <span>4.5</span>-->
                                    <!--    </div>-->
                                        <!-- list-single-hero-rating-list-->
                                    <!--    <div class="list-single-hero-rating-list">-->
                                            <!-- rate item-->
                                    <!--        <div class="rate-item fl-wrap">-->
                                    <!--            <div class="rate-item-title fl-wrap"><span>Cleanliness</span></div>-->
                                    <!--            <div class="rate-item-bg" data-percent="100%">-->
                                    <!--                <div class="rate-item-line color-bg"></div>-->
                                    <!--            </div>-->
                                    <!--            <div class="rate-item-percent">5.0</div>-->
                                    <!--        </div>-->
                                            <!-- rate item end-->
                                            <!-- rate item-->
                                    <!--        <div class="rate-item fl-wrap">-->
                                    <!--            <div class="rate-item-title fl-wrap"><span>Comfort</span></div>-->
                                    <!--            <div class="rate-item-bg" data-percent="90%">-->
                                    <!--                <div class="rate-item-line color-bg"></div>-->
                                    <!--            </div>-->
                                    <!--            <div class="rate-item-percent">5.0</div>-->
                                    <!--        </div>-->
                                            <!-- rate item end-->
                                            <!-- rate item-->
                                    <!--        <div class="rate-item fl-wrap">-->
                                    <!--            <div class="rate-item-title fl-wrap"><span>Staf</span></div>-->
                                    <!--            <div class="rate-item-bg" data-percent="80%">-->
                                    <!--                <div class="rate-item-line color-bg"></div>-->
                                    <!--            </div>-->
                                    <!--            <div class="rate-item-percent">4.0</div>-->
                                    <!--        </div>-->
                                            <!-- rate item end-->
                                            <!-- rate item-->
                                    <!--        <div class="rate-item fl-wrap">-->
                                    <!--            <div class="rate-item-title fl-wrap"><span>Facilities</span></div>-->
                                    <!--            <div class="rate-item-bg" data-percent="90%">-->
                                    <!--                <div class="rate-item-line color-bg"></div>-->
                                    <!--            </div>-->
                                    <!--            <div class="rate-item-percent">4.5</div>-->
                                    <!--        </div>-->
                                            <!-- rate item end-->
                                    <!--    </div>-->
                                        <!-- list-single-hero-rating-list end-->
                                    <!--</div>-->
                                    <!--  list-single-hero-rating  end-->
                                    <div class="clearfix"></div>
                                    <!-- list-single-hero-links-->
                                    <!--<div class="list-single-hero-links">-->
                                        <!--@if(Auth::guard('client')->check())-->
                                        <!--<a class="lisd-link " href="{{url('Custom/'.$service->id.'/'.Config::get('app.locale'))}}"><i class="fal fa-bookmark"></i> Book Now</a>-->
                                        <!--@else-->
                                       
                                        <!-- <a class="lisd-link  modal-open " href="#"><i class="fal fa-bookmark"></i> Book Now</a>-->
                                        <!--    @endif-->
                                    <!--    <a class="custom-scroll-link lisd-link" href="#sec6"><i class="fal fa-comment-alt-check"></i> Add Comment</a>-->
                                    <!--</div>-->
                                    <!--  list-single-hero-links end-->
                                </div>
                                <!--  list-single-hero-details  end-->
                            </div>
                        </div>
                        <div class="breadcrumbs-hero-buttom fl-wrap">
                            <!--<div class="breadcrumbs"><a href="#">Home-->
                            <!--</a><a href="#">Listings</a><a href="#">New York</a><span>Listing Single</span></div>-->
                            <!--<div class="list-single-hero-price">AWG/NIGHT<span>$ 320</span></div>-->
                        </div>
                    </div>
                </div>
            </section>
            <!--  section  end-->
            <!--  section  -->
            <section class="grey-blue-bg small-padding scroll-nav-container" >
                <!--  scroll-nav-wrapper  -->
                <div class="scroll-nav-wrapper fl-wrap">
                    <!--<div class="hidden-map-container fl-wrap">
                        <input id="pac-input" class="controls fl-wrap controls-mapwn" type="text" placeholder="What Nearby ?   Bar , Gym , Restaurant ">
                        <div class="map-container">
                            <div id="singleMap" data-latitude="40.7427837" data-longitude="-73.11445617675781"></div>
                        </div>
                    </div>-->
                    <div class="clearfix"></div>
                    <div class="container">
                        <nav class="scroll-nav scroll-init">
                            <ul>
                                <li><a class="act-scrlink" href="#sec1">Top</a></li>
                                <li><a href="#sec2">Details</a></li>
                                <!--<li><a href="#sec4">Other Nights</a></li>-->
                                <li><a href="#sec5">Comments</a></li>
                            </ul>
                        </nav>
                        <!--  <a href="#" class="show-hidden-map">  <span>On The Map</span> <i class="fal fa-map-marked-alt"></i></a>-->
                    </div>
                </div>
                <!--  scroll-nav-wrapper end  -->
                <!--   container  -->
                <div class="container">
                    <!--   row  -->
                    <div class="row">
                        <!--   datails -->
                        <div class="col-md-8">
                            <div class="list-single-main-container ">
                                <!-- fixed-scroll-column  -->
                                <div class="fixed-scroll-column">
                                    <div class="fixed-scroll-column-item fl-wrap">
                                        <div class="showshare sfcs fc-button"><i class="far fa-share-alt"></i><span>Share </span></div>
                                        <div class="share-holder fixed-scroll-column-share-container">
                                            <div class="share-container  isShare"></div>
                                        </div>
                                        <a class="fc-button custom-scroll-link" href="#sec6"><i class="far fa-comment-alt-check"></i> <span>  Add Comment </span></a>
                                        @if(Auth::guard('client')->check())
                                            @php(
                                             $check=App\save_sub_service::where('client_id',Auth::guard('client')->user()->id)->where("sub_service_id",$service->id)->First()

                                            )
                                            @if(count($check)==0)
                                                <a class="fc-button"   href="{{url('/Service/save/'.$service->id.'/'.Auth::guard('client')->user()->id)}}"><i class="far fa-heart"></i> <span>Save</span></a>
                                            @else
                                                <a class="fc-button" style="background-color: #e9a24a;"  href="{{url('/Service/save/'.$service->id.'/'.Auth::guard('client')->user()->id)}}"><i class="far fa-heart"></i> <span>Saved</span></a>
                                        @endif
                                    @else
                                    @endif
                                        <!--@if(Auth::guard('client')->check())-->
                                      
                                        <!-- <a class="fc-button" href="{{url('Custom/'.$service->id.'/'.Config::get('app.locale'))}}"><i class="far fa-bookmark"></i> <span> Book Now </span></a>-->
                                        <!--@else-->
                                       
                                     
                                        <!--   <a class="fc-button modal-open" href="#"><i class="far fa-bookmark"></i> <span> Book Now </span></a>-->
                                        <!--    @endif-->
                                       
                                    </div>
                                </div>
                                <!-- fixed-scroll-column end   -->
                              
                                        
                                            <div class="list-single-main-media fl-wrap" id="sec1">
                                            <!-- gallery-items   -->
                                            <div class="gallery-items grid-small-pad  list-single-gallery three-coulms lightgallery">
                                                
                                                                          @php(
                                        $img=\App\service_img::where('sub_service_id',$service->id)->get()
                                        )
                                        @if(count($img)==0)
                                          @else
                                        
                                        @foreach($img as $key=>$image)
                                        @if($key<5)
                                                 <div class="gallery-item @if($key==2) gallery-item-second @else @endif ">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="{{asset('img/'.$image->img)}}"  @if($key==2) style=" height: 294px;" @else style=" height: 145px;" @endif alt="">
                                                            <a href="{{asset('img/'.$image->img)}}" class="gal-link popup-image"><i class="fa fa-search"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @else
                                                
                                                @endif
                                                      @endforeach
                                        @endif
                                               
                                                
                                             
                                                <div class="gallery-item">
                                                    <div class="grid-item-holder">
                                                        <div class="box-item">
                                                            <img  src="{{asset('img/'.$service->m_img)}}"   style=" height: 145px;" alt="">
                                                            
                                                            @if(count($img)==0)
                                          @else
                                                            
                                                            <div class="more-photos-button dynamic-gal"  data-dynamicPath="[  @foreach($img as $key2=>$image2)
                                                 @if($key2>3) {'src': '{{asset("img/".$image2->img)}}'},@else @endif
                                                      @endforeach ]">Other <span>{{count($img)-5}} photos</span><i class="far fa-long-arrow-right"></i></div>
                                                            
                                                            
                                                            @endif
                                                            
                                                            
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- 7 end -->
                                            </div>
                                            <!-- end gallery items -->                                          
                                        </div>

                                <div class="list-single-main-item fl-wrap" id="sec2">
                                    <div class="list-single-main-item-title fl-wrap">
                                        <h3>About {{$service->name_en}} </h3>
                                        <div style="text-align:left; text-decoration: none " class="liststyle">
                                  {!! $service->des_en !!}   </div> </div>
                                    @if($service->video==null)
                                    @else
                                        <a href="{{$service->video}}" class="btn flat-btn color-bg big-btn float-btn image-popup">Video Presentation <i class="fal fa-play"></i></a>
                                    @endif
                                </div>
<div class="accordion mar-top">
                                      @php(
                                      $details=App\detail::where('sub_service_id',$service->id)->get()
                                      
                                      )
                                      @if(count($details)==0)
                                      @else
                                      @foreach($details as $key=>$detail)
                                        <a class="toggle @if($key==0) act-accordion @else @endif" href="#"> {{$detail->name_en}}  <span></span></a>
                                      <div class="accordion-inner @if($key==0) visible @else @endif ">
                                           <div style="text-align:left; color: #000000 " class="liststyle">
                                         {!! $detail->des_en !!} 
                                          </div>
                                      </div>
                                      @endforeach
                                      @endif
                                    
                                      <!--<a class="toggle" href="#"> Details option 2  <span></span></a>-->
                                      <!--<div class="accordion-inner">-->
                                      <!--    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>-->
                                      <!--</div>-->
                                      <!--<a class="toggle" href="#"> Details option 3  <span></span></a>-->
                                      <!--<div class="accordion-inner">-->
                                      <!--    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra.</p>-->
                                      <!--</div>-->
                                  </div>
                                <!-- accordion end -->
                                <!--   list-single-main-item -->
<!--                          
                                <!-- list-single-main-item end -->
                                <!-- list-single-main-item -->
                                    <!-- list-single-main-item -->   
                                        <div class="list-single-main-item fl-wrap" id="sec5">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Comments  <span> </span></h3>
                                            </div>
                                            <!--reviews-score-wrap-->   
                                            <!--<div class="reviews-score-wrap fl-wrap">-->
                                            <!--    <div class="review-score-total">-->
                                            <!--        <span>-->
                                            <!--        4.5-->
                                            <!--        <strong>Very Good</strong>-->
                                            <!--        </span>-->
                                            <!--        <a href="#" class="color2-bg">Add Review</a>-->
                                            <!--    </div>-->
                                            <!--    <div class="review-score-detail">-->
                                                    <!-- review-score-detail-list-->
                                            <!--        <div class="review-score-detail-list review-score-detail-span">-->
                                                        <!-- rate item-->
                                            <!--            <div class="rate-item fl-wrap">-->
                                            <!--                <div class="rate-item-title fl-wrap"><span>Cleanliness</span></div>-->
                                            <!--                <div class="rate-item-bg" data-percent="100%">-->
                                            <!--                    <div class="rate-item-line color-bg"></div>-->
                                            <!--                </div>-->
                                            <!--                <div class="rate-item-percent">5.0</div>-->
                                            <!--            </div>-->
                                                        <!-- rate item end-->
                                                        <!-- rate item-->
                                            <!--            <div class="rate-item fl-wrap">-->
                                            <!--                <div class="rate-item-title fl-wrap"><span>Comfort</span></div>-->
                                            <!--                <div class="rate-item-bg" data-percent="90%">-->
                                            <!--                    <div class="rate-item-line color-bg"></div>-->
                                            <!--                </div>-->
                                            <!--                <div class="rate-item-percent">5.0</div>-->
                                            <!--            </div>-->
                                                        <!-- rate item end-->                                                        
                                                        <!-- rate item-->
                                            <!--            <div class="rate-item fl-wrap">-->
                                            <!--                <div class="rate-item-title fl-wrap"><span>Staf</span></div>-->
                                            <!--                <div class="rate-item-bg" data-percent="80%">-->
                                            <!--                    <div class="rate-item-line color-bg"></div>-->
                                            <!--                </div>-->
                                            <!--                <div class="rate-item-percent">4.0</div>-->
                                            <!--            </div>-->
                                                        <!-- rate item end-->  
                                                        <!-- rate item-->
                                                      
                                                        <!-- rate item end--> 
                                            <!--        </div>-->
                                                    <!--    <div class="review-score-detail-list review-score-detail-span">-->
                                                        <!-- rate item-->
                                                    <!--    <div class="rate-item fl-wrap">-->
                                                    <!--        <div class="rate-item-title fl-wrap"><span>Cleanliness</span></div>-->
                                                    <!--        <div class="rate-item-bg" data-percent="100%">-->
                                                    <!--            <div class="rate-item-line color-bg"></div>-->
                                                    <!--        </div>-->
                                                    <!--        <div class="rate-item-percent">5.0</div>-->
                                                    <!--    </div>-->
                                                        <!-- rate item end-->
                                                        <!-- rate item-->
                                                    <!--    <div class="rate-item fl-wrap">-->
                                                    <!--        <div class="rate-item-title fl-wrap"><span>Comfort</span></div>-->
                                                    <!--        <div class="rate-item-bg" data-percent="90%">-->
                                                    <!--            <div class="rate-item-line color-bg"></div>-->
                                                    <!--        </div>-->
                                                    <!--        <div class="rate-item-percent">5.0</div>-->
                                                    <!--    </div>-->
                                                        <!-- rate item end-->                                                        
                                                        <!-- rate item-->
                                                     
                                                        <!-- rate item end-->  
                                                        <!-- rate item-->
                                                    <!--    <div class="rate-item fl-wrap">-->
                                                    <!--        <div class="rate-item-title fl-wrap"><span>Facilities</span></div>-->
                                                    <!--        <div class="rate-item-bg" data-percent="90%">-->
                                                    <!--            <div class="rate-item-line color-bg"></div>-->
                                                    <!--        </div>-->
                                                    <!--        <div class="rate-item-percent">4.5</div>-->
                                                    <!--    </div>-->
                                                        <!-- rate item end--> 
                                                    <!--</div>-->
                                                    
                                                    <!-- review-score-detail-list end-->
                                            <!--    </div>-->
                                            <!--</div>-->
                                            <!-- reviews-score-wrap end -->   
                                            <div class="reviews-comments-wrap">
                                                <!-- reviews-comments-item -->  
                                                <div class="reviews-comments-item">
                                                    <div class="review-comments-avatar">
                                                        <img src="{{asset('img/'.$service->m_img)}}" alt=""> 
                                                    </div>
                                                    <div class="reviews-comments-item-text">
                                              <div class="fb-comments" data-href="{{url('Service/'.$service->name_en)}}"
                                         data-numposts="5"></div>
                                                    </div>
                                                </div>
                                                <!--reviews-comments-item end--> 
                                                <!-- reviews-comments-item -->  
                                                <!--<div class="reviews-comments-item">-->
                                                <!--    <div class="review-comments-avatar">-->
                                                <!--        <img src="{{asset('img/'.$service->m_img)}}" alt=""> -->
                                                <!--    </div>-->
                                                <!--    <div class="reviews-comments-item-text">-->
                                                <!--        <h4><a href="#">Adam Koncy</a></h4>-->
                                                <!--        <div class="review-score-user">-->
                                                <!--            <span>4.7</span>-->
                                                <!--            <strong>Very Good</strong>-->
                                                <!--        </div>-->
                                                <!--        <div class="clearfix"></div>-->
                                                <!--        <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut. "</p>-->
                                                <!--        <div class="reviews-comments-item-date"><span><i class="far fa-calendar-check"></i>03 December 2017</span><a href="#"><i class="fal fa-reply"></i> Reply</a></div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                <!--reviews-comments-item end-->                                                                  
                                            </div>
                                        </div>
                                        <!-- list-single-main-item end -->   
                                        <!-- list-single-main-item -->   
                                        <!--<div class="list-single-main-item fl-wrap" id="sec6">-->
                                        <!--    <div class="list-single-main-item-title fl-wrap">-->
                                        <!--        <h3>Add Review</h3>-->
                                        <!--    </div>-->
                                            <!-- Add Review Box -->
                                        <!--    <div id="add-review" class="add-review-box">-->
                                                <!-- Review Comment -->
                                        <!--        <form id="add-comment" class="add-comment  custom-form" name="rangeCalc" >-->
                                        <!--            <fieldset>-->
                                        <!--                <div class="review-score-form fl-wrap">-->
                                        <!--                    <div class="review-range-container">-->
                                                                <!-- review-range-item-->
                                        <!--                        <div class="review-range-item">-->
                                        <!--                            <div class="range-slider-title">Cleanliness</div>-->
                                        <!--                            <div class="range-slider-wrap ">-->
                                        <!--                                <input type="text" class="rate-range" data-min="0" data-max="10"  name="rgcl"  data-step="1" value="4">-->
                                        <!--                            </div>-->
                                        <!--                        </div>-->
                                                                <!-- review-range-item end --> 
                                                                <!-- review-range-item-->
                                        <!--                        <div class="review-range-item">-->
                                        <!--                            <div class="range-slider-title">Comfort</div>-->
                                        <!--                            <div class="range-slider-wrap ">-->
                                        <!--                                <input type="text" class="rate-range" data-min="0" data-max="10"  name="rgcl"  data-step="1"  value="1">-->
                                        <!--                            </div>-->
                                        <!--                        </div>-->
                                                                <!-- review-range-item end --> 
                                                                <!-- review-range-item-->
                                                              
                                                                <!-- review-range-item end --> 
                                                                <!-- review-range-item-->
                                        <!--                        <div class="review-range-item">-->
                                        <!--                            <div class="range-slider-title">Facilities</div>-->
                                        <!--                            <div class="range-slider-wrap">-->
                                        <!--                                <input type="text" class="rate-range" data-min="0" data-max="10"  name="rgcl"  data-step="1" value="3">-->
                                        <!--                            </div>-->
                                        <!--                        </div>-->
                                                                <!-- review-range-item end -->                                     
                                        <!--                    </div>-->
                                        <!--                    <div class="review-total">-->
                                        <!--                        <span><input type="text" name="rg_total"  data-form="AVG({rgcl})" value="0"></span>    -->
                                        <!--                        <strong>Your Score</strong>-->
                                        <!--                    </div>-->
                                        <!--                </div>-->
                                                        
                                        <!--                <div class="review-score-form fl-wrap">-->
                                        <!--                    <div class="review-range-container">-->
                                                                <!-- review-range-item-->
                                        <!--                        <div class="review-range-item">-->
                                        <!--                            <div class="range-slider-title">Cleanliness</div>-->
                                        <!--                            <div class="range-slider-wrap ">-->
                                        <!--                                <input type="text" class="rate-range" data-min="0" data-max="10"  name="rgcl"  data-step="1" value="4">-->
                                        <!--                            </div>-->
                                        <!--                        </div>-->
                                                                <!-- review-range-item end --> 
                                                                <!-- review-range-item-->
                                        <!--                        <div class="review-range-item">-->
                                        <!--                            <div class="range-slider-title">Comfort</div>-->
                                        <!--                            <div class="range-slider-wrap ">-->
                                        <!--                                <input type="text" class="rate-range" data-min="0" data-max="10"  name="rgcl"  data-step="1"  value="1">-->
                                        <!--                            </div>-->
                                        <!--                        </div>-->
                                                                <!-- review-range-item end --> 
                                                                <!-- review-range-item-->
                                        <!--                        <div class="review-range-item">-->
                                        <!--                            <div class="range-slider-title">Staf</div>-->
                                        <!--                            <div class="range-slider-wrap ">-->
                                        <!--                                <input type="text" class="rate-range" data-min="0" data-max="10"  name="rgcl"  data-step="1" value="5" >-->
                                        <!--                            </div>-->
                                        <!--                        </div>-->
                                                                <!-- review-range-item end --> 
                                                                <!-- review-range-item-->
                                                              
                                                                <!-- review-range-item end -->                                     
                                        <!--                    </div>-->
                                                         
                                        <!--                </div>-->
                                        <!--                <div class="row">-->
                                        <!--                    <div class="col-md-6">-->
                                        <!--                        <label><i class="fal fa-user"></i></label>-->
                                        <!--                        <input type="text" placeholder="Your Name *" value=""/>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="col-md-6">-->
                                        <!--                        <label><i class="fal fa-envelope"></i>  </label>-->
                                        <!--                        <input type="text" placeholder="Email Address*" value=""/>-->
                                        <!--                    </div>-->
                                        <!--                </div>-->
                                        <!--                <textarea cols="40" rows="3" placeholder="Your Review:"></textarea>-->
                                        <!--            </fieldset>-->
                                        <!--            <button class="btn  big-btn flat-btn float-btn color2-bg" style="margin-top:30px">Submit Review <i class="fal fa-paper-plane"></i></button>-->
                                        <!--        </form>-->
                                        <!--    </div>-->
                                            <!-- Add Review Box / End -->
                                        <!--</div>-->
                            </div>
                        </div>
                        <!--   datails end  -->
                        <!--   sidebar  -->
                        <div class="col-md-4">
                            <!--box-widget-wrap -->
                            <div class="box-widget-wrap">
                                <!--box-widget-item -->
                                <div class="box-widget-item fl-wrap">
                                    <div class="box-widget">
                                        <div class="box-widget-content">
                                            <div class="box-widget-item-header">
                                                <h3>Customize your Trip</h3>
                                            </div>
                                            <form name="bookFormCalc"  action="{{url('/First')}}" method="post"  class="book-form custom-form">
                                                 {{csrf_field()}}
                                                <fieldset>
                                                    <div class="cal-item">
                                                      <div class="col-list-search-input-item fl-wrap location autocomplete-container">
                                            <label>Nationality   </label>
                                          
                                           
                <select id="country" name="nation" class="form-control   chosen-select nationality ">
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>
                                        </div>
                                                    </div>
                                                    
                                                   
                                                     <div class="cal-item">
                                                        <div class="listsearch-input-item">
                                                            <label>Select room type</label>
                                                            <select data-placeholder="Room Type" name="level"   class="chosen-select no-search-select" >
                                                                 @php(
                                    $level=\App\program_l::where('sub_service_id',$service->id)->get()

                                    )
                                    @if(count($level)==0)

                                    @else
                                      @foreach($level as $lev)
                                                               <option value="{{$lev->id}}"> {{$lev->name}}  {{$lev->price}} $</option>

                                                        @endforeach
                                                                @endif
                                                               
                                                            </select>
                                                            <!--data-formula -->
                                                            <input type="text" name="serv" class="hid-input"  value="{{$service->id}}">
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                
                                                    <div class="cal-item">
                                                        <div class="bookdate-container  fl-wrap">
                                                            <label><i class="fal fa-calendar-check"></i> travel time </label>
                                                            <input type="text"    placeholder="Date In-Out" name="dates"   />
                                                            <div class="bookdate-container-dayscounter"><i class="far fa-question-circle"></i><span>Days : <strong>0</strong></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="cal-item">
                                                        <div class="quantity-item fl-wrap">
                                                            <label> Adults</label>
                                                            <div class="quantity">
                                                                <input type="number" name="qty3" min="0" max="3" step="1" value="0">
                                                                <input type="text" name="adult" class="hid-input" value="0" data-form="{qty3} * {repopt} - {repopt}">
                                                            </div>
                                                        </div>
                                                        <div class="quantity-item fl-wrap fcit">
                                                            <label> Children</label>
                                                            <div class="quantity">
                                                                <!--Asamaa-->
                                                                 <input id="yith-wcbk-booking-persons-type-389" name="num_child" class="yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="5" data-person-type-id="389" value="0" type="number">
                                                                 
                                                                
                                                                <select name="sale" class="hid-input">
                                                                   
                                                                    <option value=".7"  selected>sale</option>
                                                                </select>
                                                                
                                                                


                                                                <!--<input type="text" name="item_total" class="hid-input" value="0" data-form="({repopt} * {sale})*{qty2}">-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <!--<input type="number"  id="totaldays" name="qty5" class="hid-input">-->
                                                <!--<div class="total-coast fl-wrap"><strong>Total Cost</strong> <span>$ <input type="text" name="grand_total" value="" data-form="SUM({item_total}) * {qty5}"></span></div>-->
                                                
                                                <!--Asmaa-->
                                               
                                                <h2 class="py-2 my-2" id="h2-hide">Age of Chlidren</h2>
                                                
<input id="yith-wcbk-booking-persons-type-450"  class="yith-wcbk-booking-person-types yith-wcbk-number-minifield age-style" step="1" min="0" max="16" data-person-type-id="450" name="child[]" type="number" placeholder="child-1">

<input id="yith-wcbk-booking-persons-type-451"  class="yith-wcbk-booking-person-types yith-wcbk-number-minifield age-style" step="1" min="0" max="16" data-person-type-id="451" name="child[]" type="number" placeholder="child-2">

<input id="yith-wcbk-booking-persons-type-452" class="yith-wcbk-booking-person-types yith-wcbk-number-minifield age-style" step="1" min="0" max="16" data-person-type-id="452" name="child[]" type="number" placeholder="child-3">

<input id="yith-wcbk-booking-persons-type-453"  class="yith-wcbk-booking-person-types yith-wcbk-number-minifield age-style" step="1" min="0" max="16" data-person-type-id="453" name="child[]" type="number" placeholder="child-4">

<input id="yith-wcbk-booking-persons-type-454"  class="yith-wcbk-booking-person-types yith-wcbk-number-minifield age-style" step="1" min="0" max="16" data-person-type-id="454" name="child[]" type="number" placeholder="child-5">
                                                
                                                
                                                
                                                 @if(Auth::guard('client')->check())
                                      
                                        <button  type="submit" class="btnaplly color2-bg ">Request NOW<i class="fal fa-paper-plane"></i></button>
                                        @else
                                       
                                      <button  type="submit" class="btnaplly color2-bg modal-open">Request NOW<i class="fal fa-paper-plane"></i></button>
                                          
                                            @endif
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <input id="yith-wcbk-booking-persons-type-450" name="person_types[450]" class="yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="16" data-person-type-id="450"  name="child[]" type="number">

<input id="yith-wcbk-booking-persons-type-451" name="person_types[451]" class="yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="16" data-person-type-id="451"  name="child[]" type="number">

<input id="yith-wcbk-booking-persons-type-452" name="person_types[452]" class="yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="16" data-person-type-id="452"  name="child[]" type="number">

<input id="yith-wcbk-booking-persons-type-453" name="person_types[453]" class="yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="16" data-person-type-id="453"  name="child[]" type="number">

<input id="yith-wcbk-booking-persons-type-454" name="person_types[454]" class="yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="16" data-person-type-id="454"  name="child[]" type="number">
                               
                                <!--box-widget-item end -->
                                <!--box-widget-item -->
                                @if($service->hotoffer==1)
                                <div class="box-widget-item fl-wrap">
                                    <div class="box-widget counter-widget" data-countDate="09/5/2019">
                                        <div class="banner-wdget fl-wrap">
                                            <div class="overlay"></div>
                                            <div class="bg"  data-bg="{{asset('img/'.$service->m_img)}}"></div>
                                            <div class="banner-wdget-content fl-wrap">
                                                <h4>Get a discount <span>{{$service->sale}}%</span> when ordering a room from three days.</h4>
                                                <div class="countdown fl-wrap">
                                                    <div class="countdown-item">
                                                        <span class="days rot">10</span>
                                                        <p>days</p>
                                                    </div>
                                                    <div class="countdown-item">
                                                        <span class="hours rot">20</span>
                                                        <p>hours </p>
                                                    </div>
                                                    <div class="countdown-item">
                                                        <span class="minutes rot">4</span>
                                                        <p>minutes </p>
                                                    </div>
                                                    <div class="countdown-item">
                                                        <span class="seconds rot">5</span>
                                                        <p>seconds</p>
                                                    </div>
                                                </div>
                                                <!--<a href="#">Book Now</a>-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @else 
                                @endif
                                <!--box-widget-item end -->
                                <!--box-widget-item -->
                                
                              
<input id="yith-wcbk-booking-persons-type-450" name="person_types[450]" class="yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="16" data-person-type-id="450" value="" type="number">

<input id="yith-wcbk-booking-persons-type-451" name="person_types[451]" class="yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="16" data-person-type-id="451" value="" type="number">

<input id="yith-wcbk-booking-persons-type-452" name="person_types[452]" class="yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="16" data-person-type-id="452" value="" type="number">

<input id="yith-wcbk-booking-persons-type-453" name="person_types[453]" class="yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="16" data-person-type-id="453" value="" type="number">

<input id="yith-wcbk-booking-persons-type-454" name="person_types[454]" class="yith-wcbk-booking-person-types yith-wcbk-number-minifield" step="1" min="0" max="16" data-person-type-id="454" value="" type="number">
                                
                                
                                
                                
                               <div class="box-widget-item fl-wrap">
                                            <div class="box-widget widget-posts">
                                                <div class="box-widget-content">
                                                    <div class="box-widget-item-header">
                                                        <h3> Other Available Packages </h3>
                                                    </div>
                                                    <!--box-image-widget-->
                                                      @php(
                                        $avilable2=\App\sub_service::where('sub_program_id',$service->sub_program_id)->get()
                                        )
                                        @if(count($avilable2)==0)
                                        
                                        @else
                                        @foreach($avilable2 as $row6)
                                        @php(
                                        $ran_price=App\program_l::where('sub_service_id',$row6->id)->orderBy('price','asc')->First()
                                        )
                                                    <div class="box-image-widget">
                                                        <div class="box-image-widget-media"><img src="{{asset('img/'.$row6->m_img)}}" alt="">
                                                            <a href="{{url('/Service/'.str_replace(' ', '_',$row6->name_en).'/'.Config::get('app.locale'))}}" class="color2-bg" target="_blank">Details</a>
                                                        </div>
                                                        <div class="box-image-widget-details">
                                                            
                                                            <h4>{{$row6->room_en}} <span>@if(count($ran_price)==0)  @else  {{$ran_price->price}}   $   @endif  </span></h4>
                                                            <p>{{$row6->s_des_en}}.</p>
                                                        </div>
                                                    </div>
                                                    
                                                     @endforeach
                                                     @endif
                                                
                                                 
                                                    <!--box-image-widget end -->                                                         
                                                </div>
                                            </div>
                                        </div>
                               
                                <!--box-widget-item end -->
                                <!--box-widget-item -->
                                <!--<div class="box-widget-item fl-wrap">-->
                                <!--    <div class="box-widget">-->
                                <!--        <div class="box-widget-content">-->
                                <!--            <div class="box-widget-item-header">-->
                                <!--                <h3> Price Range </h3>-->
                                <!--            </div>-->
                                <!--            <div class="claim-price-wdget fl-wrap">-->
                                <!--                <div class="claim-price-wdget-content fl-wrap">-->
                                <!--                    <div class="pricerange fl-wrap"><span>Price : </span> 81$ - 320$ </div>-->
                                <!--                    <div class="claim-widget-link fl-wrap"><span>Own or work here?</span><a href="#">Claim Now!</a></div>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--box-widget-item end -->
                                <!--box-widget-item -->
                                <div class="box-widget-item fl-wrap">
                                    <div id="weather-widget" class="gradient-bg" data-city="New York" data-country="USA"></div>
                                </div>

                                <!--<div class="box-widget-item fl-wrap">-->
                                <!--    <div class="box-widget">-->
                                <!--        <div class="box-widget-content">-->
                                <!--            <div class="box-widget-item-header">-->
                                <!--                <h3>Hosted By</h3>-->
                                <!--            </div>-->
                                <!--            <div class="box-widget-author fl-wrap">-->
                                <!--                <div class="box-widget-author-title fl-wrap">-->
                                <!--                    <div class="box-widget-author-title-img">-->

                                <!--                        <img src="{{asset('website/assets/images/avatar/1.jpg')}}" alt="">-->
                                <!--                    </div>-->
                                <!--                    <a href="user-single.html">Jessie Manrty</a>-->
                                <!--                    <span>4 Places Hosted</span>-->
                                <!--                </div>-->
                                                <!--  <a href="author-single.html" class="btn flat-btn color-bg   float-btn image-popup">View Profile<i class="fal fa-user-alt"></i></a>-->
                                <!--            </div>-->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--box-widget-item end -->
                                <!--box-widget-item -->
                             
                                <!--box-widget-item end -->
                            </div>
                            <!--box-widget-wrap end -->
                        </div>
                        <!--   sidebar end  -->
                    </div>
                    <!--   row end  -->
                </div>
                <!--   container  end  -->
            </section>
            <!--  section  end-->
        </div>
        <!-- content end-->
        <div class="limit-box fl-wrap"></div>
    </div>
    
<script>
    $(function() {

$('#yith-wcbk-booking-persons-type-389').change(function() {

var input = $('#yith-wcbk-booking-persons-type-389').val();
    
    
    
    

	    if (input == "0") {
        $('#yith-wcbk-booking-persons-type-450').hide();
        $('#yith-wcbk-booking-persons-type-451').hide();
        $('#yith-wcbk-booking-persons-type-452').hide();
        $('#yith-wcbk-booking-persons-type-453').hide();
        $('#yith-wcbk-booking-persons-type-454').hide();
            
        
              
    }else if (input == "1"){
        $('#yith-wcbk-booking-persons-type-450').show();
        $('#yith-wcbk-booking-persons-type-451').hide();
        $('#yith-wcbk-booking-persons-type-452').hide();
        $('#yith-wcbk-booking-persons-type-453').hide();
        $('#yith-wcbk-booking-persons-type-454').hide();
    }
    else if (input == "2"){
        $('#yith-wcbk-booking-persons-type-450').show();
        $('#yith-wcbk-booking-persons-type-451').show();
        $('#yith-wcbk-booking-persons-type-452').hide();
        $('#yith-wcbk-booking-persons-type-453').hide();
        $('#yith-wcbk-booking-persons-type-454').hide();
    }else if (input == "3"){
        $('#yith-wcbk-booking-persons-type-450').show();
        $('#yith-wcbk-booking-persons-type-451').show();
        $('#yith-wcbk-booking-persons-type-452').show();
        $('#yith-wcbk-booking-persons-type-453').hide();
        $('#yith-wcbk-booking-persons-type-454').hide();
    }else if (input == "4"){
        $('#yith-wcbk-booking-persons-type-450').show();
        $('#yith-wcbk-booking-persons-type-451').show();
        $('#yith-wcbk-booking-persons-type-452').show();
        $('#yith-wcbk-booking-persons-type-453').show();
        $('#yith-wcbk-booking-persons-type-454').hide();
    }
    else if (input == "5"){
        $('#yith-wcbk-booking-persons-type-450').show();
        $('#yith-wcbk-booking-persons-type-451').show();
        $('#yith-wcbk-booking-persons-type-452').show();
        $('#yith-wcbk-booking-persons-type-453').show();
        $('#yith-wcbk-booking-persons-type-454').show();
    }
});
});
    </script>

@stop
