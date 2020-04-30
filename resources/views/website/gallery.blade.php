@extends('website.layouts.website')

@section('content')

    <div id="wrapper">
        <!-- content-->
        <div class="content">

            <section id="sec2">
                <div class="container">
                    <div class="section-title">
                        <div  class="listing-rating card-popup-rainingvis" data-starrating2="5"><span></span></div>
                        <h2>Our Gallery </h2>
                        <span class="section-separator"></span>

                    </div>
                </div>
                <!-- portfolio start -->
                <div class="gallery-items fl-wrap mr-bot spad home-grid">
                    <!-- gallery-item-->
                    @foreach($gallery as $row)
                    <div class="gallery-item">
                        <div class="grid-item-holder">
                            <div class="listing-item-grid">

                                <img  src="{{asset('img/'.$row->img)}}"   alt="">
                                <div class="listing-item-cat">
                                    <h3><a>{{$row->name_en}}</a></h3>
                                    <div class="weather-grid"   data-grcity="Rome"></div>
                                    <div class="clearfix"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- gallery-item end-->
                    <!-- gallery-item-->

                    <!-- gallery-item end-->
                    <!-- gallery-item-->


                </div>
                <!-- portfolio end -->

            </section>
            <!-- section end -->

        </div>
        <!-- content end-->
    </div>



@stop
