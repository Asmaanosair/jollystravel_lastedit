@extends('website.layouts.website')

@section('content')

    <div id="wrapper">
                <!-- content-->
                <div class="content">
                    <!--  section  -->
                    <section class="list-single-hero" data-scrollax-parent="true" id="sec1">
                        <div class="bg par-elem "  data-bg="{{asset('img/'.$news->m_img)}}" data-scrollax="properties: { translateY: '30%' }"></div>
                        <div class="list-single-hero-title fl-wrap">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="listing-rating-wrap">
                                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>
                                        </div>
                                        <h2><span>{{$news->name_en}}</span></h2>
                                        <!--<div class="list-single-header-contacts fl-wrap">-->
                                        <!--    <ul>-->
                                        <!--        <li><i class="far fa-phone"></i><a  href="#">+7(111)123456789</a></li>-->
                                        <!--        <li><i class="far fa-map-marker-alt"></i><a  href="#">USA 27TH Brooklyn NY</a></li>-->
                                        <!--        <li><i class="far fa-envelope"></i><a  href="#">yourmail@domain.com</a></li>-->
                                        <!--    </ul>-->
                                        <!--</div>-->
                                    </div>
                                    <div class="col-md-5">
                                        <!--  list-single-hero-details-->
                                        <div class="list-single-hero-details fl-wrap">
                                            <!--  list-single-hero-rating-->
                                            <div class="list-single-hero-rating">
                                                <div class="rate-class-name">
                                                    <div class="score"><strong>Very Good</strong> </div>
                                                    <span>9.5/10</span>                                             
                                                </div>
                                                <!-- list-single-hero-rating-list-->
                                                <div class="list-single-hero-rating-list">
                                                    <!-- rate item-->
                                                    <div class="rate-item fl-wrap">
                                                        <div class="rate-item-title fl-wrap"><span>Cleanliness</span></div>
                                                        <div class="rate-item-bg" data-percent="100%">
                                                            <div class="rate-item-line color-bg"></div>
                                                        </div>
                                                        <div class="rate-item-percent">10</div>
                                                    </div>
                                                    <!-- rate item end-->
                                                    <!-- rate item-->
                                                    <div class="rate-item fl-wrap">
                                                        <div class="rate-item-title fl-wrap"><span>Comfort</span></div>
                                                        <div class="rate-item-bg" data-percent="90%">
                                                            <div class="rate-item-line color-bg"></div>
                                                        </div>
                                                        <div class="rate-item-percent">10</div>
                                                    </div>
                                                    <!-- rate item end-->                                                        
                                                    <!-- rate item-->
                                                    <div class="rate-item fl-wrap">
                                                        <div class="rate-item-title fl-wrap"><span>Staf</span></div>
                                                        <div class="rate-item-bg" data-percent="80%">
                                                            <div class="rate-item-line color-bg"></div>
                                                        </div>
                                                        <div class="rate-item-percent">9</div>
                                                    </div>
                                                    <!-- rate item end-->  
                                                    <!-- rate item-->
                                                    <div class="rate-item fl-wrap">
                                                        <div class="rate-item-title fl-wrap"><span>Facilities</span></div>
                                                        <div class="rate-item-bg" data-percent="90%">
                                                            <div class="rate-item-line color-bg"></div>
                                                        </div>
                                                        <div class="rate-item-percent">9.5</div>
                                                    </div>
                                                    <!-- rate item end--> 
                                                </div>
                                                <!-- list-single-hero-rating-list end-->
                                            </div>
                                            <!--  list-single-hero-rating  end-->
                                            <div class="clearfix"></div>
                                            <!-- list-single-hero-links-->
                                            <div class="list-single-hero-links">
                                            
                                                <!--<a class="custom-scroll-link lisd-link" href="#sec6"><i class="fal fa-comment-alt-check"></i> Add review</a>-->
                                            </div>
                                            <!--  list-single-hero-links end-->                                            
                                        </div>
                                        <!--  list-single-hero-details  end-->
                                    </div>
                                </div>
                                <div class="breadcrumbs-hero-buttom fl-wrap">
                                    <div class="breadcrumbs"><a href="#">Home</a><a href="#">Hotel</a><span>{{$news->name_en}}</span></div>
                                   
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--  section  end-->
                    <!--  section  -->
                    <section class="grey-blue-bg small-padding scroll-nav-container" >
                        <!--  scroll-nav-wrapper  -->
                        <div class="scroll-nav-wrapper fl-wrap">
                            <div class="hidden-map-container fl-wrap">
                                <input id="pac-input" class="controls fl-wrap controls-mapwn" type="text" placeholder="What Nearby ?   Bar , Gym , Restaurant ">
                                <div class="map-container">
                                    <div id="singleMap" data-latitude="30.055155,31.357442" data-longitude="30.0561389,31.9836667"></div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="container">
                                <nav class="scroll-nav scroll-init">
                                    <ul>
                                        <li><a class="act-scrlink" href="#sec1">Top</a></li>
                                        <li><a href="#sec2">Details</a></li>
                                        <li><a href="#sec3">Amenities</a></li>
                                        <li><a href="#sec4">Rooms</a></li>
                                        <!--<li><a href="#sec5">Reviews</a></li>-->
                                    </ul>
                                </nav>
                                <a href="#" class="show-hidden-map">  <span>On The Map</span> <i class="fal fa-map-marked-alt"></i></a>
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
                                                <!--<a class="fc-button custom-scroll-link" href="#sec6"><i class="far fa-comment-alt-check"></i> <span>  Add review </span></a>-->
                                                <!--<a class="fc-button" href="#"><i class="far fa-heart"></i> <span>Save</span></a>-->
                                            
                                            </div>
                                        </div>
                                        <!-- fixed-scroll-column end   -->
                                        <div class="list-single-main-media fl-wrap">
                                            <!-- gallery-items   -->
                                            <div class="gallery-items grid-small-pad  list-single-gallery three-coulms lightgallery">
                                                
                                                                          @php(
                                        $img=\App\hotel_img::where('hotel_id',$news->id)->get()
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
                                                            <img  src="{{asset('img/'.$news->m_img)}}"   style=" height: 145px;" alt="">
                                                            
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
                                        <!-- list-single-header end -->
                                        <div class="list-single-facts fl-wrap">
                                            <!-- inline-facts -->
                                            <div class="inline-facts-wrap">
                                                <div class="inline-facts">
                                                    <i class="fal fa-bed"></i>
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            {{$news->n_room}}
                                                        </div>
                                                    </div>
                                                    <h6>Hotel Rooms</h6>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->
                                            <!-- inline-facts  -->
                                            <div class="inline-facts-wrap">
                                                <div class="inline-facts">
                                                    <i class="fal fa-spa"></i>
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                            {{$news->n_cust}}
                                                        </div>
                                                    </div>
                                                    <h6>Spa </h6>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->
                                            <!-- inline-facts -->
                                      
                                            <!-- inline-facts end -->
                                            <!-- inline-facts -->
                                            <div class="inline-facts-wrap">
                                                <div class="inline-facts">
                                                    <i class="fal fa-cocktail"></i>
                                                    <div class="milestone-counter">
                                                        <div class="stats animaper">
                                                             {{$news->n_rest}}
                                                        </div>
                                                    </div>
                                                    <h6>Restaurant Inside</h6>
                                                </div>
                                            </div>
                                            <!-- inline-facts end -->                                                                        
                                        </div>
                                        <!--   list-single-main-item -->
                                        <div class="list-single-main-item fl-wrap" id="sec2">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>About {{$news->name_en}} </h3>
                                            </div>
                                           <div style="text-align:left; " class="liststyle">
                                    {!! $news->des_en !!} 
                                     </div>
                                            <!--<a href="https://vimeo.com/70851162" class="btn flat-btn color-bg big-btn float-btn image-popup">Video Presentation <i class="fal fa-play"></i></a>-->
                                        </div>
                                        <!--   list-single-main-item end -->
                                        <!--   list-single-main-item -->
                                        <div class="list-single-main-item fl-wrap" id="sec3">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Amenities</h3>
                                            </div>
                                            <div class="listing-features fl-wrap">
                                                <ul>
                                                    
                                                                 @php(
                                                                                $amin=explode(',',$news->icon)

                                                                                )
                                                                                @foreach($amin as $key=>$val)
                                                                                @php(
                                                                                $aminate=\App\icon::find($val)
                                                                                )
                                                                                @if(isset($aminate))
                                                                                
                                                                                <li>  <img src="{{asset('img/'.$aminate->code)}}" width="24px" height="24px"> {{$aminate->name_en}}</li>


                                       
                                                                                   
                                                                                 
                                                                                    @else
                                                                                    @endif
                                                                                    @endforeach
                                                <!--    <li><i class="fal fa-rocket"></i> Elevator in building</li>-->
                                                <!--    <li><i class="fal fa-wifi"></i> Free Wi Fi</li>-->
                                                <!--    <li><i class="fal fa-parking"></i> Free Parking</li>-->
                                                <!--    <li><i class="fal fa-snowflake"></i> Air Conditioned</li>-->
                                                <!--    <li><i class="fal fa-plane"></i>Airport Shuttle</li>-->
                                                <!--    <li><i class="fal fa-paw"></i> Pet Friendly</li>-->
                                                <!--    <li><i class="fal fa-utensils"></i> Restaurant Inside</li>-->
                                                <!--    <li><i class="fal fa-wheelchair"></i> Wheelchair Friendly</li>-->
                                                <!--</ul>-->
                                            </div>
                                            <span class="fw-separator"></span>
                                            <div class="list-single-main-item-title no-dec-title fl-wrap">
                                                <h3>Tags</h3>
                                            </div>
                                            <div class="list-single-tags tags-stylwrap">
                                                <a href="#">Hotel</a>
                                                <a href="#">Hostel</a>
                                                <a href="#">Room</a>
                                                <a href="#">Spa</a>
                                                <a href="#">Restourant</a>
                                                <a href="#">Parking</a>                                                                               
                                            </div>
                                        </div>
                                        <!--   list-single-main-item end -->     
                                        <!-- accordion-->
                                     
                                        <!-- accordion end -->                                                     
                                        <!--   list-single-main-item -->
                                        <div class="list-single-main-item fl-wrap" id="sec4">
                                            <div class="list-single-main-item-title fl-wrap">
                                                <h3>Available Rooms</h3>
                                            </div>
                                            <!--   rooms-container -->
                                            <div class="rooms-container fl-wrap">
                                                <!--  rooms-item -->
                                                
                                                @php(
                                                 $room=App\room::where('hotel_id',$news->id)->get()
                                                
                                                )
                                                @if(count($room)==0)
                                                @else
                                                @foreach($room as $type)
                                                <div class="rooms-item fl-wrap">
                                                    <div class="rooms-media">
                                                        <img src="{{asset('img/'.$type->m_img)}}" alt="">
                                                        
                                                        
                                                                                       @php(
                                        $img_room=\App\room_img::where('room_id',$type->id)->get()
                                        )
                                        @if(count($img_room)==0)
                                          @else
                                                          <div class="dynamic-gal more-photos-button" data-dynamicPath="[
                                        @foreach($img_room as $image3)
                                                  {'src': '{{asset("img/".$image3->img)}}'},
                                                      @endforeach
                                                      ]">  View Gallery <span>{{count($img_room)}} photos</span> <i class="far fa-long-arrow-right"></i></div>
                                        @endif
                                                    </div>
                                                    <div class="rooms-details">
                                                        <div class="rooms-details-header fl-wrap">
                                                            <!--<span class="rooms-price">$81 <strong> / person</strong></span>-->
                                                            <h3>{{$type->name_en}}</h3>
                                                            <h5> Max Guest : <span>{{$type->max_guest}} Person</span></h5>
                                                        </div>
                                                        <p style="font-size:15px">{{$type->des_en}}</p>
                                                        <div class="facilities-list fl-wrap">
                                                            <ul>
                                                                                @php(
                                                                                $amin2=explode(',',$type->icon)

                                                                                )
                                                                                @foreach($amin2 as $key=>$val)
                                                                                @php(
                                                                                $aminate2=\App\icon::find($val)
                                                                                )
                                                                                @if(isset($aminate2))
                                                                                
                                                                                <li><img src="{{asset('img/'.$aminate2->code)}}" width="24px" height="24px">  <span> {{$aminate2->name_en}} </span></li>


                                       
                                                                                   
                                                                                 
                                                                                    @else
                                                                                    @endif
                                                                                    @endforeach
                                                                
                                                                
                                                                
                                                                <!--<li><i class="fal fa-wifi"></i><span>Free WiFi</span></li>-->
                                                                <!--<li><i class="fal fa-bath"></i><span>1 Bathroom</span></li>-->
                                                                <!--<li><i class="fal fa-snowflake"></i><span>Air conditioner</span></li>-->
                                                                <!--<li><i class="fal fa-tv"></i><span> Tv Inside</span></li>-->
                                                                <!--<li><i class="fas fa-concierge-bell"></i><span>Breakfast</span></li>-->
                                                            </ul>
                                                            <!--<a href="rooms/room1.html" class="btn color-bg ajax-link">Details<i class="fas fa-caret-right"></i></a>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @endif
                                             
                                                                                                  
                                            </div>
                                            <!--   rooms-container end -->
                                        </div>
                                        <!-- list-single-main-item end -->
                                        <!-- list-single-main-item -->   
                                        <!--<div class="list-single-main-item fl-wrap" id="sec5">-->
                                        <!--    <div class="list-single-main-item-title fl-wrap">-->
                                        <!--        <h3>Item Reviews -  <span> 2 </span></h3>-->
                                        <!--    </div>-->
                                            <!--reviews-score-wrap-->   
                                        <!--    <div class="reviews-score-wrap fl-wrap">-->
                                        <!--        <div class="review-score-total">-->
                                        <!--            <span>-->
                                        <!--            9.5-->
                                        <!--            <strong>Very Good</strong>-->
                                        <!--            </span>-->
                                        <!--            <a href="#" class="color2-bg">Add Review</a>-->
                                        <!--        </div>-->
                                        <!--        <div class="review-score-detail">-->
                                                    <!-- review-score-detail-list-->
                                        <!--            <div class="review-score-detail-list review-score-detail-span">-->
                                                        <!-- rate item-->
                                        <!--                <div class="rate-item fl-wrap">-->
                                        <!--                    <div class="rate-item-title fl-wrap"><span>Cleanliness</span></div>-->
                                        <!--                    <div class="rate-item-bg" data-percent="100%">-->
                                        <!--                        <div class="rate-item-line color-bg"></div>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="rate-item-percent">5.0</div>-->
                                        <!--                </div>-->
                                                        <!-- rate item end-->
                                                        <!-- rate item-->
                                        <!--                <div class="rate-item fl-wrap">-->
                                        <!--                    <div class="rate-item-title fl-wrap"><span>Comfort</span></div>-->
                                        <!--                    <div class="rate-item-bg" data-percent="90%">-->
                                        <!--                        <div class="rate-item-line color-bg"></div>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="rate-item-percent">5.0</div>-->
                                        <!--                </div>-->
                                                        <!-- rate item end-->                                                        
                                                        <!-- rate item-->
                                        <!--                <div class="rate-item fl-wrap">-->
                                        <!--                    <div class="rate-item-title fl-wrap"><span>Staf</span></div>-->
                                        <!--                    <div class="rate-item-bg" data-percent="80%">-->
                                        <!--                        <div class="rate-item-line color-bg"></div>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="rate-item-percent">4.0</div>-->
                                        <!--                </div>-->
                                                        <!-- rate item end-->  
                                                        <!-- rate item-->
                                                      
                                                        <!-- rate item end--> 
                                        <!--            </div>-->
                                        <!--                <div class="review-score-detail-list review-score-detail-span">-->
                                                        <!-- rate item-->
                                        <!--                <div class="rate-item fl-wrap">-->
                                        <!--                    <div class="rate-item-title fl-wrap"><span>Cleanliness</span></div>-->
                                        <!--                    <div class="rate-item-bg" data-percent="100%">-->
                                        <!--                        <div class="rate-item-line color-bg"></div>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="rate-item-percent">5.0</div>-->
                                        <!--                </div>-->
                                                        <!-- rate item end-->
                                                        <!-- rate item-->
                                        <!--                <div class="rate-item fl-wrap">-->
                                        <!--                    <div class="rate-item-title fl-wrap"><span>Comfort</span></div>-->
                                        <!--                    <div class="rate-item-bg" data-percent="90%">-->
                                        <!--                        <div class="rate-item-line color-bg"></div>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="rate-item-percent">5.0</div>-->
                                        <!--                </div>-->
                                                        <!-- rate item end-->                                                        
                                                        <!-- rate item-->
                                                     
                                                        <!-- rate item end-->  
                                                        <!-- rate item-->
                                        <!--                <div class="rate-item fl-wrap">-->
                                        <!--                    <div class="rate-item-title fl-wrap"><span>Facilities</span></div>-->
                                        <!--                    <div class="rate-item-bg" data-percent="90%">-->
                                        <!--                        <div class="rate-item-line color-bg"></div>-->
                                        <!--                    </div>-->
                                        <!--                    <div class="rate-item-percent">4.5</div>-->
                                        <!--                </div>-->
                                                        <!-- rate item end--> 
                                        <!--            </div>-->
                                                    
                                                    <!-- review-score-detail-list end-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                            <!-- reviews-score-wrap end -->   
                                        <!--    <div class="reviews-comments-wrap">-->
                                                <!-- reviews-comments-item -->  
                                        <!--        <div class="reviews-comments-item">-->
                                        <!--            <div class="review-comments-avatar">-->
                                        <!--                <img src="{{asset('img/'.$news->m_img)}}" alt=""> -->
                                        <!--            </div>-->
                                        <!--            <div class="reviews-comments-item-text">-->
                                        <!--                <h4><a href="#">Liza Rose</a></h4>-->
                                        <!--                <div class="review-score-user">-->
                                        <!--                    <span>8.4</span>-->
                                        <!--                    <strong>Good</strong>-->
                                        <!--                </div>-->
                                        <!--                <div class="clearfix"></div>-->
                                        <!--                <p>" Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. "</p>-->
                                        <!--                <div class="reviews-comments-item-date"><span><i class="far fa-calendar-check"></i>12 April 2018</span><a href="#"><i class="fal fa-reply"></i> Reply</a></div>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                                <!--reviews-comments-item end--> 
                                                <!-- reviews-comments-item -->  
                                        <!--        <div class="reviews-comments-item">-->
                                        <!--            <div class="review-comments-avatar">-->
                                        <!--                <img src="{{asset('img/'.$news->m_img)}}" alt=""> -->
                                        <!--            </div>-->
                                        <!--            <div class="reviews-comments-item-text">-->
                                        <!--                <h4><a href="#">Adam Koncy</a></h4>-->
                                        <!--                <div class="review-score-user">-->
                                        <!--                    <span>8.7</span>-->
                                        <!--                    <strong>Very Good</strong>-->
                                        <!--                </div>-->
                                        <!--                <div class="clearfix"></div>-->
                                        <!--                <p>" Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc posuere convallis purus non cursus. Cras metus neque, gravida sodales massa ut. "</p>-->
                                        <!--                <div class="reviews-comments-item-date"><span><i class="far fa-calendar-check"></i>03 December 2017</span><a href="#"><i class="fal fa-reply"></i> Reply</a></div>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                                <!--reviews-comments-item end-->                                                                  
                                        <!--    </div>-->
                                        <!--</div>-->
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
                                        <!-- list-single-main-item end -->                                    
                                    </div>
                                </div>
                                <!--   datails end  -->
                                <!--   sidebar  -->
                                <div class="col-md-4">
                                    <!--box-widget-wrap -->  
                                    <div class="box-widget-wrap">
                                     
                                        <!--<div class="box-widget-item fl-wrap">-->
                                        <!--    <div class="box-widget">-->
                                        <!--        <div class="box-widget-content">-->
                                        <!--            <div class="box-widget-item-header">-->
                                        <!--                <h3> Contact Information</h3>-->
                                        <!--            </div>-->
                                        <!--            <div class="box-widget-list">-->
                                        <!--                <ul>-->
                                        <!--                    <li><span><i class="fal fa-map-marker"></i> Adress :</span> <a href="#">USA 27TH Brooklyn NY</a></li>-->
                                        <!--                    <li><span><i class="fal fa-phone"></i> Phone :</span> <a href="#">+7(123)987654</a></li>-->
                                        <!--                    <li><span><i class="fal fa-envelope"></i> Mail :</span> <a href="#">AlisaNoory@domain.com</a></li>-->
                                        <!--                    <li><span><i class="fal fa-browser"></i> Website :</span> <a href="#">themeforest.net</a></li>-->
                                        <!--                </ul>-->
                                        <!--            </div>-->
                                        <!--            <div class="list-widget-social">-->
                                        <!--                <ul>-->
                                        <!--                    <li><a href="#" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>-->
                                        <!--                    <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>-->
                                        <!--                    <li><a href="#" target="_blank" ><i class="fab fa-vk"></i></a></li>-->
                                        <!--                    <li><a href="#" target="_blank" ><i class="fab fa-instagram"></i></a></li>-->
                                        <!--                </ul>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
                                    
                                        <!--box-widget-item end -->                             
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap">
                                            <div id="weather-widget" class="gradient-bg" data-city="New York" data-country="USA"></div>
                                        </div>
                                        <!--box-widget-item end -->   
                                        <!--box-widget-item end -->   
                                        <!--box-widget-item -->
                                        <div class="box-widget-item fl-wrap" style="margin-top:434px">
                                            <div class="box-widget widget-posts">
                                                <div class="box-widget-content">
                                                    <div class="box-widget-item-header">
                                                        <h3>    Other Hotels</h3>
                                                    </div>
                                                    <!--box-image-widget-->
                                                    
                                                    @php(
                                                    $hotels=App\hotel::whereNotIn('id', [$news->m_img])->paginate(4)
                                                    )
                                                    @if(count($hotels)==0)
                                                    @else
                                                    @foreach($hotels as $hotel)
                                                    <div class="box-image-widget">
                                                        <div class="box-image-widget-media"><img src="{{asset('img/'.$hotel->m_img)}}" alt="">
                                                            <a href="{{url('/Hotel/'.$hotel->id.'/'.Config::get('app.locale'))}}" class="color2-bg" target="_blank">Details</a>
                                                        </div>
                                                        <div class="box-image-widget-details">
                                                            <h4>{{$hotel->name_en}} 
                                                            <!--<span>2.3 km</span>-->
                                                            
                                                            </h4>
                                                            <p>{{$hotel->s_des_en}}</p>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                    @endif

                                                     <a class="widget-posts-link" href="{{url('/Hotel/'.Config::get('app.locale'))}}" style="font-size:15px">view all hotels <i class="fal fa-long-arrow-right"></i> </a>
                                                   
                                            </div>
                                        </div>
                                        <!--box-widget-item end -->                           
                                        <!--box-widget-item -->
                                      
                                        <!--box-widget-item end -->                              
                                        <!--box-widget-item -->
                                        <!--<div class="box-widget-item fl-wrap">-->
                                        <!--    <div class="box-widget">-->
                                        <!--        <div class="box-widget-content">-->
                                        <!--            <div class="box-widget-item-header">-->
                                        <!--                <h3>Similar Listings</h3>-->
                                        <!--            </div>-->
                                        <!--            <div class="widget-posts fl-wrap">-->
                                        <!--                <ul>-->
                                        <!--                    <li class="clearfix">-->
                                        <!--                        <a href="#"  class="widget-posts-img"><img src="{{asset('img/'.$news->m_img)}}"  style="height:auto"class="respimg" alt=""></a>-->
                                        <!--                        <div class="widget-posts-descr">-->
                                        <!--                            <a href="#" title="">Park Central</a>-->
                                        <!--                            <div class="listing-rating card-popup-rainingvis" data-starrating2="5"></div>-->
                                        <!--                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 40 JOURNAL SQUARE PLAZA, NJ, US</a></div>-->
                                        <!--                            <span class="rooms-price">$80 <strong> /  Awg</strong></span>-->
                                        <!--                        </div>-->
                                        <!--                    </li>-->
                                        <!--                    <li class="clearfix">-->
                                        <!--                        <a href="#"  class="widget-posts-img"><img src="{{asset('img/'.$news->m_img)}}"  style="height:auto"class="respimg" alt=""></a>-->
                                        <!--                        <div class="widget-posts-descr">-->
                                        <!--                            <a href="#" title="">Holiday Home</a>-->
                                        <!--                            <div class="listing-rating card-popup-rainingvis" data-starrating2="3"></div>-->
                                        <!--                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> 75 PRINCE ST, NY, USA</a></div>-->
                                        <!--                            <span class="rooms-price">$50 <strong> /   Awg</strong></span>-->
                                        <!--                        </div>-->
                                        <!--                    </li>-->
                                        <!--                    <li class="clearfix">-->
                                        <!--                        <a href="#"  class="widget-posts-img" ><img src="{{asset('img/'.$news->m_img)}}" class="respimg" style="height:auto" alt=""></a>-->
                                        <!--                        <div class="widget-posts-descr">-->
                                        <!--                            <a href="#" title="">Moonlight Hotel</a>-->
                                        <!--                            <div class="listing-rating card-popup-rainingvis" data-starrating2="4"></div>-->
                                        <!--                            <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  70 BRIGHT ST NEW YORK, USA</a></div>-->
                                        <!--                            <span class="rooms-price">$105 <strong> /  Awg</strong></span>-->
                                        <!--                        </div>-->
                                        <!--                    </li>-->
                                        <!--                </ul>-->
                                        <!--                <a class="widget-posts-link" href="#">See All Listing <i class="fal fa-long-arrow-right"></i> </a>-->
                                        <!--            </div>-->
                                        <!--        </div>-->
                                        <!--    </div>-->
                                        <!--</div>-->
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



@stop