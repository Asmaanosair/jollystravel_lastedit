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
                        <h2><span>Hotel Selection</span></h2>
                        <span class="section-separator"></span>
                        <!--<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec tincidunt arcu, sit amet fermentum sem.</h4>-->
                    </div>
                </div>
            </section>
            <!--  section  end-->
            <div class="breadcrumbs-fs fl-wrap">
                <div class="container">
                    <div class="breadcrumbs fl-wrap"><a href="#">Home</a><a href="#">Hotel Selection</a></div>
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
                                <!--article-masonry
                                <div class="article-masonry">
                                    <article class="card-post">
                                        <div class="card-post-img fl-wrap">
                                            <div class="list-single-main-media fl-wrap">
                                                <div class="single-slider-wrapper fl-wrap">
                                                    <div class="single-slider fl-wrap"  >
                                                        <div class="slick-slide-item"><img src="{{asset('website/assets/images/all/1.jpg')}}" alt=""></div>
                                                        <div class="slick-slide-item"><img src="{{asset('website/assets/images/all/1.jpg')}}" alt=""></div>
                                                        <div class="slick-slide-item"><img src="{{asset('website/assets/images/all/1.jpg')}}" alt=""></div>
                                                    </div>
                                                    <div class="swiper-button-prev sw-btn"><i class="fa fa-long-arrow-left"></i></div>
                                                    <div class="swiper-button-next sw-btn"><i class="fa fa-long-arrow-right"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-post-content fl-wrap">
                                            <h3><a href="{{url('/Blog')}}">Blog Post Title.</a></h3>
                                            <p>In ut odio libero, at vulputate urna. Nulla tristique mi a massa convallis cursus. Nulla eu mi magna. Etiam suscipit commodo gravida. </p>
                                            <div class="post-author"><a href="#"><img src="{{asset('website/assets/images/avatar/1.jpg')}}" alt=""><span>By , Mery Lynn</span></a></div>
                                            <div class="post-opt">
                                                <ul>
                                                    <li><i class="fal fa-calendar"></i> <span>25 April 2018</span></li>
                                                    <li><i class="fal fa-eye"></i> <span>264</span></li>
                                                    <li><i class="fal fa-tags"></i> <a href="#">Design</a>  </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                </div>-->

                                @foreach($news as $row)

                                <div class="article-masonry">
                                    <article class="card-post">
                                        <div class="card-post-img fl-wrap">
                                            <a href="{{url('/Hotel/'.$row->id.'/'.Config::get('app.locale'))}}"><img  src="{{asset('img/'.$row->m_img)}}"   alt=""></a>
                                        </div>
                                        <div class="card-post-content fl-wrap">
                                            <h3><a href="{{url('/Hotel/'.$row->id.'/'.Config::get('app.locale'))}}">{{$row->name_en}}.</a></h3>
                                            <p> {{$row->s_des_en}}. </p>
                           
                                            <div class="post-opt">
                                                <ul>
                                                    @php( $d=strtotime($row->created_at))
                                                    <li><i class="fal fa-calendar"></i> <span>{{ date("Y-m-d", $d)}}</span></li>
                                                    <!--<li><i class="fal fa-eye"></i> <span>264</span></li>-->
                                                    <!--<li><i class="fal fa-tags"></i> <a href="#">Design</a>  </li>-->
                                                </ul>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                             @endforeach


                                <!-- pagination-->
                                <!--<div class="pagination">-->

                                <!--    <a href="#" class="prevposts-link"><i class="fa fa-caret-left"></i></a>-->
                                <!--    <a href="{{url('News?page=1')}}" >1</a>-->
                                <!--    <a href="{{url('News?page=2')}}" class="current-page">2</a>-->


                                <!--    <a href="#" class="nextposts-link"><i class="fa fa-caret-right"></i></a>-->
                                <!--</div>-->
                                <!-- pagination end-->
                            </div>
                            <!--post-container end -->
                        </div>
                        <!-- blog content end -->
                        <!--   sidebar  -->
                        <div class="col-md-4">
                            <!--box-widget-wrap -->
                            <div class="box-widget-wrap fl-wrap">
                                <!--box-widget-item -->
                                <div class="box-widget-item fl-wrap">
                                    <div class="box-widget">
                                        <div class="box-widget-content">
                                            <div class="box-widget-item-header">
                                                <h3> Search In Hotel </h3>
                                            </div>
                                          <div class="search-widget">

                                                <form action="{{url('/hotel_search/'.Config::get('app.locale'))}}" method="get" id="search" class="fl-wrap"
                                                {{csrf_field()}}

                                                <input name="hotel" id="se" type="text" class="search" placeholder="Search.."  />
                                                <button value="submit" class="search-submit color2-bg" id="submit_btn"><i class="fal fa-search transition"></i> </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             
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
