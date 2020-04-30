@extends('website.layouts.website')

@section('content')

    <div id="wrapper">
        <!-- content-->
        <div class="content">

            <section id="sec2">
                <div class="container">
                    <div class="section-title">
                        <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><span></span></div>
                        <h2>AGB  </h2>
                        <span class="listing-rating card-popup-rainingvis" data-starrating2="5"></span>
                        <div style="text-align:left; " class="liststyle">




                            @if(Config::get('app.locale') == 'en')
                                {!!$agb->des_en!!}
                            @elseif(Config::get('app.locale') == 'de')
                                {!!$agb->des_de!!}

                            @elseif(Config::get('app.locale') == 'it')
                                {!!$agb->des_it!!}

                            @elseif(Config::get('app.locale') == 'es')
                                {!!$agb->des_es!!}

                            @elseif(Config::get('app.locale') == 'fr')
                                {!!$agb->des_fr!!}

                            @else
                                {!!$agb->des_en!!}
                            @endif
  </div>
                    
 
                    </div>
                    
                    
                      
                </div>
                <!-- portfolio start -->
                <div class="gallery-items fl-wrap mr-bot spad home-grid">
                  
                   
                  

                </div>
                <!-- portfolio end -->

            </section>
            
            <!-- section end -->

        </div>
        <!-- content end-->
    </div>



@stop
