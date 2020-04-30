@extends('website.layouts.website')

@section('content')

    <div id="wrapper">
        <!-- content-->
        <div class="content">

            <section id="sec2">
                <div class="container">
                    <div class="section-title">
                        <div  class="listing-rating card-popup-rainingvis" data-starrating2="5"><span></span></div>
                        <h2>@lang("home.selected_tours")  </h2>
                        <span class="section-separator"></span>

                    </div>
                </div>
                <!-- portfolio start -->
                <div class="gallery-items fl-wrap mr-bot spad home-grid">
                    <!-- gallery-item-->
                    @foreach($program as $main)
                    <div class="gallery-item">
                        <div class="grid-item-holder">
                            <div class="listing-item-grid">

                       <a href="{{url('/Our_Programs/'.str_replace(' ', '_',$main->name_en).'/'.Config::get('app.locale'))}}">  <img  src="{{asset('img/'.$main->img)}}"   alt=""></a>
                                <div class="listing-item-cat">
                                    <h3><a href="{{url('/Our_Programs/'.str_replace(' ', '_',$main->name_en).'/'.Config::get('app.locale'))}}">     @if(Config::get('app.locale') == 'en')
                                                                          {{$main->name_en}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                                {{$main->name_de}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                                {{$main->name_it}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                                {{$main->name_es}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                                {{$main->name_fr}}
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                                {{$main->name_it}}
                                                                                @else
                                                                                 {{$main->name_en}}
                                                                        @endif</a></h3>
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
