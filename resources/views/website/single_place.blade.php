@extends('website.layouts.website')

@section('content')

    <div id="wrapper">
        <!-- content-->
        <div class="content">
            <!--  section  -->
            <section class="color-bg middle-padding ">
                <div class="wave-bg wave-bg2"></div>
                <div class="container">
                    <div class="flat-title-wrap">
                        <h2><span>{{$news->name_en}}</span></h2>
                        <span class="section-separator"></span>
                        <!--<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet fermentum sem.</h4>-->
                    </div>
                </div>
            </section>
            <!--  section  end-->
            <div class="breadcrumbs-fs fl-wrap">
                <div class="container">
                    <div class="breadcrumbs fl-wrap"><a href="#">Home</a><a href="#">{{$news->name_en}}</a><span></span></div>
                </div>
            </div>
            <!-- section-->
            <section  id="sec1" class="middle-padding grey-blue-bg">
                <div class="container">
                    <div class="row">
                        <!--blog content -->
                        <div class="col-md-8">
                            <!--post-container -->
                            <div class="post-container fl-wrap">
                                <!-- article> -->
                                <article class="post-article">
                                    <div class="list-single-main-media fl-wrap">
                                        <div class="single-slider-wrapper fl-wrap">
                                            <div class="single-slider fl-wrap"  >
                                                <div class="slick-slide-item"><img src="{{asset('img/'.$news->m_img)}}"  style="height:534px" alt=""></div>
                                                                   @php(
                                        $img=\App\place_img::where('place_id',$news->id)->get()
                                        )
                                        @if(count($img)==0)
                                          @else
                                        
                                        @foreach($img as $image)
                                                    <div class="slick-slide-item"><img src="{{asset('img/'.$image->img)}}"  style="height:534px" alt=""></div>
                                                      @endforeach
                                        @endif
                                            </div>
                                             <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                                            <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                                          
                                        </div>
                                    </div>
                                    <div class="list-single-main-item fl-wrap">
                                        <div class="list-single-main-item-title fl-wrap">
                                            <h3>{{$news->name_en}}.</h3>
                                        </div>
                                         <div style="text-align:left;"  class="liststyle">
                                   {!!$news->des_en!!}
                                    </div>
                                        <!--<div class="post-author"><a href="#"><img src="{{asset('website/assets/images/avatar/1.jpg')}}" alt=""><span>By , Jessie Manrty</span></a></div>-->
                                        <div class="post-opt">
                                            <ul>
                                                     @php( $d=strtotime($news->created_at))
                                                <!--    <li><i class="fal fa-calendar"></i> <span>{{ date("Y-m-d", $d)}}</span></li>-->
                                                <!--<li><i class="fal fa-calendar"></i> <span>25 April 2018</span></li>-->
                                                <!--<li><i class="fal fa-eye"></i> <span>264</span></li>-->
                                                <!--<li><i class="fal fa-tags"></i> <a href="#">Photography</a> , <a href="#">Design</a> </li>-->
                                            </ul>
                                        </div>
                                        <span class="fw-separator"></span>
                                        <!--<div class="list-single-main-item-title fl-wrap">-->
                                        <!--    <h3>Tags</h3>-->
                                        <!--</div>-->
                                        <!--<div class="list-single-tags tags-stylwrap blog-tags">-->
                                        <!--    <a href="#">Event</a>-->
                                        <!--    <a href="#">Conference</a>-->
                                        <!--    <a href="#">Strategies</a>-->
                                        <!--    <a href="#">Trends</a>-->
                                        <!--    <a href="#">Schedule</a>-->
                                        <!--    <a href="#">Speak</a>-->
                                        <!--</div>-->
                                        <span class="fw-separator"></span>
                                        <!--<div class="post-nav fl-wrap">-->
                                        <!--    <a href="#" class="post-link prev-post-link"><i class="fal fa-angle-left"></i>Prev <span class="clearfix">The Sign of Experience</span></a>-->
                                        <!--    <a href="#" class="post-link next-post-link"><i class="fal fa-angle-right"></i>Next<span class="clearfix">Dedicated to Results</span></a>-->
                                        <!--</div>-->
                                    </div>
                                    <!-- list-single-main-item -->
                                    <!--<div class="list-single-main-item fl-wrap" id="sec5">-->
                                    <!--        <div class="fb-comments" data-href="{{url('Hotel/'.$news->id)}}"-->
                                    <!--     data-numposts="5"></div>-->
                                     
                                    <!--</div>-->
                                    <!-- list-single-main-item end -->
                                    <!-- list-single-main-item -->
                                
                                    <!-- list-single-main-item end -->
                                </article>
                                <!-- article end -->
                            </div>
                            <!--post-container end -->
                        </div>
                        <!-- blog content end -->
                        <!--   sidebar  -->
                        <div class="col-md-4">
                            <!--box-widget-wrap -->
                            <div class="box-widget-wrap fl-wrap fixed-bar">
                                <!--box-widget-item -->
                                <div class="box-widget-item fl-wrap">
                                    <div class="box-widget">
                                        <div class="box-widget-content">
                                            <div class="box-widget-item-header">
                                                <h3> Search   </h3>
                                            </div>
                                            <div class="search-widget">
                                                <form action="#" class="fl-wrap">
                                                    <input name="se" id="se" type="text" class="search" placeholder="Search.." value="Search..." />
                                                    <button class="search-submit color2-bg" id="submit_btn"><i class="fal fa-search transition"></i> </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--box-widget-item end -->
                                <!--box-widget-item -->
                           
                                <!--box-widget-item end -->
                                <!--box-widget-item -->
                                <!--<div class="box-widget-item fl-wrap">-->
                                <!--    <div class="box-widget widget-posts">-->
                                <!--        <div class="box-widget-content">-->
                                <!--            <div class="box-widget-item-header">-->
                                <!--                <h3>Popular Posts</h3>-->
                                <!--            </div>-->
                                            <!--box-image-widget-->
                                <!--            <div class="box-image-widget">-->
                                <!--                <div class="box-image-widget-media"><img src="{{asset('website/assets/images/all/1.jpg')}}" alt="">-->
                                <!--                    <a href="blog-single.html" class="color-bg">Details</a>-->
                                <!--                </div>-->
                                <!--                <div class="box-image-widget-details">-->
                                <!--                    <h4>Nullam dictum felis</h4>-->
                                <!--                    <p>Integer tincidunt. Aliquam lorem ante, dapibus in, viverra quis...</p>-->
                                <!--                    <span class="widget-posts-date"><i class="fal fa-calendar"></i> 7 Mar 2017 </span>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                            <!--box-image-widget end -->
                                            <!--box-image-widget-->
                                <!--            <div class="box-image-widget">-->
                                <!--                <div class="box-image-widget-media"><img src="{{asset('website/assets/images/all/1.jpg')}}" alt="">-->
                                <!--                    <a href="blog-single.html" class="color-bg">Details</a>-->
                                <!--                </div>-->
                                <!--                <div class="box-image-widget-details">-->
                                <!--                    <h4>Scrambled it to mak</h4>-->
                                <!--                    <p>In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo...</p>-->
                                <!--                    <span class="widget-posts-date"><i class="fal fa-calendar"></i> 7 Mar 2017 </span>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                            <!--box-image-widget end -->
                                            <!--box-image-widget-->
                                <!--            <div class="box-image-widget">-->
                                <!--                <div class="box-image-widget-media"><img src="{{asset('website/assets/images/all/1.jpg')}}" alt="">-->
                                <!--                    <a href="blog-single.html" class="color-bg">Details</a>-->
                                <!--                </div>-->
                                <!--                <div class="box-image-widget-details">-->
                                <!--                    <h4>Fermentum nis type</h4>-->
                                <!--                    <p>Lorem Ipsum is simply dummy text of the printing and   industry...</p>-->
                                <!--                    <span class="widget-posts-date"><i class="fal fa-calendar"></i> 7 Mar 2017 </span>-->
                                <!--                </div>-->
                                <!--            </div>-->
                                            <!--box-image-widget end -->
                                <!--        </div>-->
                                <!--    </div>-->
                                <!--</div>-->
                                <!--box-widget-item end -->

                                <!--box-widget-item -->
                                <!--<div class="box-widget-item fl-wrap">-->
                                <!--    <div class="box-widget">-->
                                <!--        <div class="box-widget-content">-->
                                <!--            <div class="box-widget-item-header">-->
                                <!--                <h3>Our Instagram</h3>-->
                                <!--            </div>-->
                                <!--            <div class="jr-insta-thumb">-->
                                <!--                <ul>-->
                                <!--                    <li>-->
                                <!--                        <a href="#"><img src="{{asset('website/assets/images/instagram/1.jpg')}}" alt=""></a>-->
                                <!--                    </li>-->
                                <!--                    <li>-->
                                <!--                        <a href="#"><img src="{{asset('website/assets/images/instagram/1.jpg')}}" alt=""></a>-->
                                <!--                    </li>-->
                                <!--                    <li>-->
                                <!--                        <a href="#"><img src="{{asset('website/assets/images/instagram/1.jpg')}}" alt=""></a>-->
                                <!--                    </li>-->
                                <!--                    <li>-->
                                <!--                        <a href="#"><img src="{{asset('website/assets/images/instagram/1.jpg')}}" alt=""></a>-->
                                <!--                    </li>-->
                                <!--                    <li>-->
                                <!--                        <a href="#"><img src="{{asset('website/assets/images/instagram/1.jpg')}}" alt=""></a>-->
                                <!--                    </li>-->
                                <!--                    <li>-->
                                <!--                        <a href="#"><img src="{{asset('website/assets/images/instagram/1.jpg')}}" alt=""></a>-->
                                <!--                    </li>-->
                                <!--                </ul>-->
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
                </div>
                <div class="limit-box fl-wrap"></div>
            </section>
            <!-- section end -->
        </div>
        <!-- content end-->
    </div>



@stop