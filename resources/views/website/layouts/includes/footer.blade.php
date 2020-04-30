<footer class="main-footer">
    <!--subscribe-wrap-->
    <div class="subscribe-wrap color-bg  fl-wrap">
        <div class="container">
            <div class="sp-bg"> </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="subscribe-header">
                        <h3>@lang('home.sub')</h3>

                        <p>@lang('home.sub_detail').</p>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="footer-widget fl-wrap">
                        <div class="subscribe-widget fl-wrap">
                            <div class="subcribe-form">
                                <form id="subscribe">
                                    <input class="enteremail fl-wrap" name="email" id="subscribe-email" placeholder="@lang('home.enter')" spellcheck="false" type="text">
                                    <button type="submit" id="subscribe-button" class="subscribe-button"><i class="fas fa-rss-square"></i> @lang('home.sub')</button>
                                    <label for="subscribe-email" class="subscribe-message"></label>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wave-bg"></div>
    </div>
    <!--subscribe-wrap end -->
    <!--footer-inner-->
    <div class="footer-inner">
        <div class="container">
            <!--footer-fw-widget-->
            <div class="footer-fw-widget fl-wrap" >
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-carousel-title" id="partner">
                              @php(
                                     $partners=explode(',',$tran->partners)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$partners[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$partners[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$partners[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$partners[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$partners[2]}} 
                                                                                
                                                                                @else
                                                                            {{$partners[0]}} 
                                                                        @endif
                        </div>
                    </div>
                    <div class="col-md-9">
                        <!--footer-carousel-wrap-->
                        <div class="footer-carousel-wrap fl-wrap">
                            <div class="footer-carousel fl-wrap">
                                <!--footer-carousel-item-->
                                @foreach($part as $row)
                                <div class="footer-carousel-item" style="padding-right:5px;">
                                    <a href="{{$row->link}}"><img src="{{asset('/img/'.$row->img)}}" alt="" style="height:92px"></a>
                                </div>
                                @endforeach

                            </div>
                            <div class="fc-cont  fc-cont-prev"><i class="fal fa-angle-left"></i></div>
                            <div class="fc-cont  fc-cont-next"><i class="fal fa-angle-right"></i></div>
                        </div>
                        <!--footer-carousel-wrap end-->
                    </div>
                </div>
            </div>
            <!--footer-fw-widget end-->
            <div class="row">
                <!--footer-widget -->
                <div class="col-md-3">
                    <div class="footer-widget fl-wrap">
                        <h3> @php(
                                $contact=explode(',',$tran->contact)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$contact[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$contact[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$contact[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$contact[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$contact[2]}} 
                                                                                
                                                                                @else
                                                                            {{$contact[0]}} 
                                                                        @endif</h3>
                        <div class="footer-contacts-widget fl-wrap">
                            <p>
                             @if(Config::get('app.locale') == 'en')
                                                                        {{$about->s_des_en}}
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                         {{$about->s_des_de}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                         {{$about->s_des_it}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                 {{$about->s_des_es}}
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                     {{$about->s_des_fr}}
                                                                                
                                                                                @else
                                                                        {{$about->s_des_en}}
                                                                        @endif
                            
                            
                            </p>
                            <ul  class="footer-contacts fl-wrap">
                                <li><span><i class="fal fa-envelope"></i>     @php(
                                     $mail=explode(',',$tran->email)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$mail[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$mail[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$mail[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$mail[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$mail[2]}} 
                                                                                
                                                                                @else
                                                                            {{$mail[0]}} 
                                                                        @endif :</span><a href="#" target="_blank">{{$con->email}}</a></li>
                                <li> <span><i class="fal fa-map-marker-alt"></i>   @php(
                                     $address=explode(',',$tran->address)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$address[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$address[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$address[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$address[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$address[2]}} 
                                                                                
                                                                                @else
                                                                            {{$address[0]}} 
                                                                        @endif 1:</span><a href="#" target="_blank">{{$con->address_en}}</a></li>
                                                                        
                                                                          <li> <span><i class="fal fa-map-marker-alt"></i>   @php(
                                     $address=explode(',',$tran->address)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$address[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$address[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$address[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$address[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$address[2]}} 
                                                                                
                                                                                @else
                                                                            {{$address[0]}} 
                                                                        @endif 2:</span><a href="#" target="_blank">{{$con->address2_en}}</a></li>
                                <li><span><i class="fal fa-phone"></i>   @php(
                                     $phone=explode(',',$tran->phone)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$phone[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$phone[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$phone[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$phone[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$phone[2]}} 
                                                                                
                                                                                @else
                                                                            {{$phone[0]}} 
                                                                        @endif :</span><a href="#">{{$con->phone}}</a></li>
                                  <li><span><i class="fab fa-whatsapp"></i> Whatsapp No :</span><a href="#">{{$con->phone1}}</a></li>
                            </ul>
                            <div class="footer-social">
                                <span>Find us : </span>
                                <ul>
                                    <li><a href="{{$con->fb}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{$con->tw}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="{{$con->insta}}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="{{$con->vk}}" target="_blank"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="footer-widget fl-wrap">
                        <h3> @php(
                                     $sourteam=explode(',',$tran->sourteam)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$sourteam[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$sourteam[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$sourteam[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$sourteam[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$sourteam[2]}} 
                                                                                
                                                                                @else
                                                                            {{$sourteam[0]}} 
                                                                        @endif
                                                                        </h3>
                        <div class="footer-contacts-widget fl-wrap">
                            <ul class="ul-footer">
                            <li><a href="{{url('/History/'.Config::get('app.locale'))}}"> @php(
                                     $team=explode(',',$tran->team)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$team[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$team[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$team[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$team[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$team[2]}} 
                                                                                
                                                                                @else
                                                                            {{$team[0]}} 
                                                                        @endif</a></li>
                            <li><a href="{{url('/History/'.Config::get('app.locale').'#sec2')}}"> @php(
                                     $courier=explode(',',$tran->courier)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$courier[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$courier[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$courier[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$courier[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$courier[2]}} 
                                                                                
                                                                                @else
                                                                            {{$courier[0]}} 
                                                                        @endif</a></li>
                            <li><a href="{{url('/History/'.Config::get('app.locale').'#sec1')}}">
                                 @php(
                                     $press=explode(',',$tran->press)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$press[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$press[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$press[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$press[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$press[2]}} 
                                                                                
                                                                                @else
                                                                            {{$press[0]}} 
                                                                        @endif
                                                                        </a></li>
                            <li><a href="{{url('/History/'.Config::get('app.locale'))}}"> @php(
                                     $jobs=explode(',',$tran->jobs)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$jobs[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$jobs[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$jobs[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$jobs[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$jobs[2]}} 
                                                                                
                                                                                @else
                                                                            {{$jobs[0]}} 
                                                                        @endif</a></li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="footer-widget fl-wrap">
                        <h3> @php(
                                     $SERVICEe=explode(',',$tran->SERVICE)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$SERVICEe[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$SERVICEe[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$SERVICEe[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$SERVICEe[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$SERVICEe[2]}} 
                                                                                
                                                                                @else
                                                                            {{$SERVICEe[0]}} 
                                                                        @endif</h3>
                        <div class="footer-contacts-widget fl-wrap">
                            <ul class="ul-footer">
                            <li><a href="{{url('/Selected_Tours/'.Config::get('app.locale'))}}"> @php(
                                     $Contac2t=explode(',',$tran->Contac2t)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$Contac2t[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$Contac2t[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$Contac2t[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$Contac2t[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$Contac2t[2]}} 
                                                                                
                                                                                @else
                                                                            {{$Contac2t[0]}} 
                                                                        @endif</a></li>
                            <li><a href="{{url('/Hot_Offers/'.Config::get('app.locale'))}}">
                                @php(
                                     $Newjsletter=explode(',',$tran->Newjsletter)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$Newjsletter[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$Newjsletter[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$Newjsletter[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$Newjsletter[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$Newjsletter[2]}} 
                                                                                
                                                                                @else
                                                                            {{$Newjsletter[0]}} 
                                                                        @endif</a></li>
                        
                            <li><a href="{{url('/Become_Partner/'.Config::get('app.locale'))}}"> @php(
                                     $travel=explode(',',$tran->travel)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$travel[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$travel[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$travel[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$travel[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$travel[2]}} 
                                                                                
                                                                                @else
                                                                            {{$travel[0]}} 
                                                                        @endif</a></li>
                            <li><a href="{{url('/Place/'.Config::get('app.locale'))}}"> @php(
                                     $facebook=explode(',',$tran->facebook)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$facebook[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$facebook[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$facebook[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$facebook[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$facebook[2]}} 
                                                                                
                                                                                @else
                                                                            {{$facebook[0]}} 
                                                                        @endif
                                </a></li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="footer-widget fl-wrap">
                        <h3>@php(
                                     $legal=explode(',',$tran->legal)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$legal[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$legal[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$legal[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$legal[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$legal[2]}} 
                                                                                
                                                                                @else
                                                                            {{$legal[0]}} 
                                                                        @endif</h3>
                        <div class="footer-contacts-widget fl-wrap">
                            <ul class="ul-footer">
                            <li><a href="{{url('/AGB/'.Config::get('app.locale'))}}">@php(
                                     $imprint=explode(',',$tran->imprint)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$imprint[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$imprint[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$imprint[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$imprint[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$imprint[2]}} 
                                                                                
                                                                                @else
                                                                            {{$imprint[0]}} 
                                                                        @endif</a></li>
                            <li><a href="{{url('/Faq/'.Config::get('app.locale'))}}">@php(
                                     $data_t=explode(',',$tran->data_t)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$data_t[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$data_t[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$data_t[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$data_t[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$data_t[2]}} 
                                                                                
                                                                                @else
                                                                            {{$data_t[0]}} 
                                                                        @endif</a></li>
                            <li><a href="#partner">@php(
                                     $privacy=explode(',',$tran->privacy)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$privacy[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$privacy[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$privacy[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$privacy[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$privacy[2]}} 
                                                                                
                                                                                @else
                                                                            {{$privacy[0]}} 
                                                                        @endif</a></li>
                            <li><a href="{{url('/Privacy_Policy/'.Config::get('app.locale'))}}">@php(
                                     $sagb=explode(',',$tran->sagb)
                                
                                )
                                   @if(Config::get('app.locale') == 'en')
                                                                         {{$sagb[0]}} 
                                                                        @elseif(Config::get('app.locale') == 'de')
                                                                            {{$sagb[4]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'it')
                                                                            {{$sagb[3]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'es')
                                                                         {{$sagb[1]}} 
                                                                                
                                                                                   @elseif(Config::get('app.locale') == 'fr')
                                                                          {{$sagb[2]}} 
                                                                                
                                                                                @else
                                                                            {{$sagb[0]}} 
                                                                        @endif</a></li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <!--footer-widget end-->
                <!--footer-widget -->
                <!--<div class="col-md-4">-->
                <!--    <div class="footer-widget fl-wrap">-->
                <!--        <h3>Our Last News</h3>-->
                <!--        <div class="widget-posts fl-wrap">-->
                <!--            <ul>-->
                <!--                @foreach($news5 as $row)-->
                <!--                <li class="clearfix">-->

                <!--                    <a href="#"  class="widget-posts-img"><img src="{{asset('/img/'.$row->m_img)}}" class="respimg" alt=""></a>-->
                <!--                    <div class="widget-posts-descr">-->
                <!--                        <a href="#" title="">{{$row->name_en}}</a>-->
                <!--                        @php( $d=strtotime($row->created_at))-->
                <!--                        <span class="widget-posts-date"> {{ date("d M Y", $d)}} </span>-->
                <!--                    </div>-->
                <!--                </li>-->
                <!--                @endforeach-->

                <!--            </ul>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->

                <!--<div class="col-md-4">-->
                <!--    <div class="footer-widget fl-wrap">-->
                <!--        <h3>Our Instagram  </h3>-->
                <!--        <div id="footer-twiit" class="fl-wrap"></div>-->
                <!--        <a href="{{$con->insta}}" class="twitter-link" target="_blank">Follow</a>-->
                <!--    </div>-->
                <!--</div>-->
                <!--footer-widget end-->
                <!--footer-widget -->
            </div>
            <div class="clearfix"></div>
            <!--footer-widget -->
            <div class="footer-widget">
                <div class="row">
                    <div class="col-md-4"><a class="contact-btn color-bg" href="{{url('/Contact/'.Config::get('app.locale'))}}">Get In Touch<i class="fal fa-envelope"></i></a></div>
                    <div class="col-md-8">
                        <div class="customer-support-widget fl-wrap">
                            <h4>@lang('home.costum') </h4>
                            <a href="mailto:{{$con->email}}" class="cs-mumber">{{$con->email}}</a>
                            <a href="mailto:{{$con->email}}" class="cs-mumber-button color2-bg">Mail Us<i class="fal fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer-widget end -->
        </div>
    </div>
    <!--footer-inner end -->
    <div class="footer-bg">
    </div>
    <!--sub-footer-->
    <div class="sub-footer">
        <div class="container">
            <div class="copyright"> &#169; Jolleys Travel World.  All rights reserved.</div>
            <br>
            
             <div class="copyright">  Powered By: PERFECT CODE - New Cairo - Egypt</div>
            
           
            <div class="subfooter-lang">
                <div class="subfooter-show-lang"><span>Eng</span><i class="fa fa-caret-up"></i></div>
                <ul class="subfooter-lang-tooltip">
                    <li><a href="de">Deutsch</a></li>
                    <li><a href="it">Italian</a></li>
                    <li><a href="fr">French</a></li>
                    <li><a href="es">Spanish</a></li>
                    <li><a href="en">English</a></li>
                </ul>
            </div>
            <div class="subfooter-nav">
                <ul>
                   <!-- <li><a href="#">Terms of use</a></li>-->
                    <!--<li><a href="{{url('/Polocy')}}">Privacy Policy</a></li>-->
                    <!--<li><a href="{{url('/News')}}">News</a></li>-->
                </ul>
            </div>
        </div>
    </div>
    <!--sub-footer end -->
</footer>
<!--footer end -->
<!--map-modal -->
<div class="map-modal-wrap">
    <div class="map-modal-wrap-overlay"></div>
    <div class="map-modal-item">
        <div class="map-modal-container fl-wrap">
            <div class="map-modal fl-wrap">
                <div id="singleMap" data-latitude="40.7" data-longitude="-73.1"></div>
            </div>
            <h3><i class="fal fa-location-arrow"></i><a href="#">Hotel Title</a></h3>
            <input id="pac-input" class="controls fl-wrap controls-mapwn" type="text" placeholder="What Nearby ?   Bar , Gym , Restaurant ">
            <div class="map-modal-close"><i class="fal fa-times"></i></div>
        </div>
    </div>
</div>
<!--map-modal end -->
<!--register form -->
<div class="main-register-wrap modal">
    <div class="reg-overlay"></div>
    <div class="main-register-holder">
        <div class="main-register fl-wrap">
            <div class="close-reg color-bg"><i class="fal fa-times"></i></div>
            <ul class="tabs-menu">
                <li class="current"><a href="#tab-1"><i class="fal fa-sign-in-alt"></i> Login</a></li>
                <li><a href="#tab-2"><i class="fal fa-user-plus"></i> Register</a></li>
            </ul>
            <!--tabs -->
            <div id="tabs-container">
                <div class="tab">
                    <!--tab -->
                    <div id="tab-1" class="tab-content">
                        <h3>Sign In <span>Jolleys<strong>Travel</strong></span></h3>
                        <div class="custom-form">
                            <form method="post"   action="{{url('/User_Login')}}" name="registerform">
                                {{csrf_field()}}
                                <label>Username or Email Address <span>*</span> </label>
                                <input name="email" type="text"   onClick="this.select()" value="">
                                <label >Password <span>*</span> </label>
                                <input name="password" type="password"   onClick="this.select()" value="" >
                                <button type="submit"  class="log-submit-btn color-bg"><span>Log In</span></button>
                                <div class="clearfix"></div>
                                <div class="filter-tags">
                                    <input id="check-a" type="checkbox" name="check">
                                    <label for="check-a">Remember me</label>
                                </div>
                            </form>
                            <div class="lost_password">
                                <a href="#">Lost Your Password?</a>
                            </div>
                        </div>
                    </div>
                    <!--tab end -->
                    <!--tab -->
                    <div class="tab">
                        <div id="tab-2" class="tab-content">
                            <h3>Sign Up <span>Jolleys<strong>Travel</strong></span></h3>
                            <div class="custom-form">
                                   <form method="post" action="{{url('/Use_register')}}"  id="discount"  name="registerform" class="main-register-form" id="main-register-form2">
                                    {{csrf_field()}}
                                    <label >Full Name <span>*</span> </label>
                                    <input name="name" type="text"   onClick="this.select()" value="">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                    <label>Email Address <span>*</span></label>
                                    <input name="email" type="text"  onClick="this.select()" value="">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                    <label >Password <span>*</span></label>
                                    <input name="password" type="password"   onClick="this.select()" value="" >
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                    <button type="submit"     class="log-submit-btn color-bg"  ><span>Register</span></button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <!--tab end -->
                </div>
                <!--tabs end -->
                <div class="log-separator fl-wrap"><span>or</span></div>
                <div class="soc-log fl-wrap">
                    <p>For faster login or register use your social account.</p>
                    <a href="{{url('/')}}/login/facebook" class="facebook-log"><i class="fab fa-facebook-f"></i>Connect with Facebook</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--register form end -->
<a class="to-top"><i class="fas fa-caret-up"></i></a>
</div>
<!-- Main end -->
<!--=============== scripts  ===============-->
<script type="text/javascript" src="{{asset('website/assets/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('website/assets/js/plugins.js')}}"></script>
<script type="text/javascript" src="{{asset('website/assets/js/scripts.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOURAPIKEYHERE&libraries=places&callback=initAutocomplete"></script>
<script type="text/javascript" src="{{asset('website/assets/js/map-single.js')}}"></script>

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
        $('#h2-hide').hide();    
            
        
              
    }else if (input == "1"){
        $('#yith-wcbk-booking-persons-type-450').show();
        $('#yith-wcbk-booking-persons-type-451').hide();
        $('#yith-wcbk-booking-persons-type-452').hide();
        $('#yith-wcbk-booking-persons-type-453').hide();
        $('#yith-wcbk-booking-persons-type-454').hide();
        $('#h2-hide').show();
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





<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#discount').on('submit',function(e){
        e.preventDefault(e);
        var data=$(this).serialize();
        var  url=$(this).attr('action');
        var  post=$(this).attr('method');
        console.log(data);
        $.ajax({
            type:post,
            url:url,
            data:data,
            dataType: 'json',
            success: function(data){
                console.log(data)
                alert("saved");

            }

        })
    })


</script>
</body>
</html>