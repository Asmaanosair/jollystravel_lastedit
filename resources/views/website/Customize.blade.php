@extends('website.layouts.website')

@section('content')

    <div id="wrapper">
        <!-- content-->
        <div class="content">
            <!--section -->
            @foreach($slider as $row)
                <section class="hero-section" data-scrollax-parent="true" id="sec1">
                    <div class="hero-parallax">

                        <div class="bg"  data-bg="{{asset('img/'.$row->img)}}" data-scrollax="properties: { translateY: '200px' }"></div>
                        <div class="overlay op7"></div>
                    </div>

                    <div class="col-list-wrap left-list" style="       width: 80%;
    min-height: 295px;
    margin-left: 10%;
         padding-bottom: 281px;
             background: #2934310a;
">

                        <!--list-wrap-search   -->
                        <form action="{{url('/First')}}" method="post">
                            {{csrf_field()}}
                        <div class="list-wrap-search fl-wrap " id="lisfw">
                            <div class="container">
                                <div class="row">
                                    <!-- col-list-search-input-item -->

                                    <div class="col-md-4">
                                        <div class="col-list-search-input-item fl-wrap location autocomplete-container">
                                            <label>Program</label>
                                            <span class="header-search-input-item-icon"></span>
                                            <input type="text" name="prog"  value="{{$sub_prog->name_en}}"/>
                                            <a href="#"><i class="fal fa-dot-circle"></i></a>
                                            @if ($errors->has('prog'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('prog') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    @php(
                                    $level=\App\program_l::where('sub_program_id',$sub_prog->id)->get()

                                    )
                                    @if(count($level)==0)

                                    @else

                                        <div class="col-md-4">
                                            <div class="col-list-search-input-item in-loc-dec fl-wrap not-vis-arrow" name="level">
                                                <label>Level Of {{$sub_prog->name_en}}    </label>
                                                <div class="listsearch-input-item">
                                                    <select data-placeholder="City" class="chosen-select" name="level" >
                                                        @php(
                                                        $i=0
                                                        )
                                                        @foreach($level as $lev)

                                                        <option value="{{$lev->id}}"> {{$lev->name}} {{$i++}}</option>

                                                        @endforeach
                                                            @if ($errors->has('level'))
                                                                <span class="help-block">
                                            <strong>{{ $errors->first('level') }}</strong>
                                        </span>
                                                            @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    <!-- col-list-search-input-item end -->
                                    <!-- col-list-search-input-item -->

                                    <!-- col-list-search-input-item end -->
                                    <!-- col-list-search-input-item -->

                                    <div class="col-md-4">
                                        <div class="col-list-search-input-item in-loc-dec date-container  fl-wrap">
                                            <label>Date In-Out </label>
                                            <span class="header-search-input-item-icon"><i class="fal fa-calendar-check"></i></span>
                                            <input type="text"   placeholder="When" name="dates"   value=""/>
                                            @if ($errors->has('dates'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('dates') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <!-- col-list-search-input-item end -->
                                </div>
                                <div class="search-opt-wrap fl-wrap">
                                    <div class="search-opt-wrap-container"  style="    overflow: inherit;">
                                        <!-- col-list-search-input-item -->
                                        <div class="search-input-item midd-input">
                                            <div class="col-list-search-input-item fl-wrap">

                                                <div class="quantity-item">
                                                    <label>Adults</label>
                                                    <div class="quantity">
                                                        <input type="number" name="adult" min="1" max="5" step="1" value="1">
                                                        @if ($errors->has('adult'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('adult') }}</strong>
                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="quantity-item">
                                                    <label>Children</label>
                                                    <div class="quantity">
                                                        <input type="number" min="0" name="child" max="3" step="1" value="0">
                                                        @if ($errors->has('child'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('child') }}</strong>
                                        </span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>







                                        <div class="search-input-item small-input ">
                                            <div class="col-list-search-input-item fl-wrap ">
                                                <button class="header-search-button"  type="submit" onclick="window.location.href='listing.html'">Next <i class="fal fa-paper-plane"></i></button>
                                            </div>
                                        </div>
                                        <!-- col-list-search-input-item end -->
                                        <!-- hidden-listing-filter -->
                                        {{--<div class="hidden-listing-filter fl-wrap">--}}
                                            {{--<div class="row">--}}
                                                {{--<div class="col-md-4">--}}
                                                    {{--<!--col-list-search-input-item -->--}}
                                                    {{--<div class="col-list-search-input-item fl-wrap">--}}
                                                        {{--<h4>Star Rating</h4>--}}
                                                        {{--<div class="search-opt-container fl-wrap">--}}
                                                            {{--<!-- Checkboxes -->--}}
                                                            {{--<ul class="fl-wrap filter-tags">--}}
                                                                {{--<li class="five-star-rating">--}}
                                                                    {{--<input id="check-aa2" type="checkbox" name="check" checked>--}}
                                                                    {{--<label for="check-aa2"><span class="listing-rating card-popup-rainingvis" data-starrating2="5"><span>5 Stars</span></span></label>--}}
                                                                {{--</li>--}}
                                                                {{--<li class="four-star-rating">--}}
                                                                    {{--<input id="check-aa3" type="checkbox" name="check">--}}
                                                                    {{--<label for="check-aa3"><span class="listing-rating card-popup-rainingvis" data-starrating2="5"><span>4 Star</span></span></label>--}}
                                                                {{--</li>--}}
                                                                {{--<li class="three-star-rating">--}}
                                                                    {{--<input id="check-aa4" type="checkbox" name="check">--}}
                                                                    {{--<label for="check-aa4"><span class="listing-rating card-popup-rainingvis" data-starrating2="5"><span>3 Star</span></span></label>--}}
                                                                {{--</li>--}}
                                                            {{--</ul>--}}
                                                            {{--<!-- Checkboxes end -->--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<!--col-list-search-input-item end-->--}}
                                                {{--</div>--}}
                                                {{--<div class="col-md-8">--}}
                                                    {{--<!--col-list-search-input-item -->--}}
                                                    {{--<div class="col-list-search-input-item fl-wrap">--}}
                                                        {{--<h4>Facilities</h4>--}}
                                                        {{--<div class="search-opt-container fl-wrap">--}}
                                                            {{--<!-- Checkboxes -->--}}
                                                            {{--<ul class="fl-wrap filter-tags half-tags">--}}
                                                                {{--<li>--}}
                                                                    {{--<input id="check-aaa5" type="checkbox" name="check" checked>--}}
                                                                    {{--<label for="check-aaa5">Free WiFi</label>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<input id="check-bb5" type="checkbox" name="check" checked>--}}
                                                                    {{--<label for="check-bb5">Parking</label>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<input id="check-dd5" type="checkbox" name="check">--}}
                                                                    {{--<label for="check-dd5">Fitness Center</label>--}}
                                                                {{--</li>--}}
                                                            {{--</ul>--}}
                                                            {{--<!-- Checkboxes end -->--}}
                                                            {{--<!-- Checkboxes -->--}}
                                                            {{--<ul class="fl-wrap filter-tags half-tags">--}}
                                                                {{--<li>--}}
                                                                    {{--<input id="check-cc5" type="checkbox" name="check">--}}
                                                                    {{--<label for="check-cc5">Non-smoking Rooms</label>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<input id="check-ff5" type="checkbox" name="check" checked>--}}
                                                                    {{--<label for="check-ff5">Airport Shuttle</label>--}}
                                                                {{--</li>--}}
                                                                {{--<li>--}}
                                                                    {{--<input id="check-c4" type="checkbox" name="check">--}}
                                                                    {{--<label for="check-c4">Air Conditioning</label>--}}
                                                                {{--</li>--}}
                                                            {{--</ul>--}}
                                                            {{--<!-- Checkboxes end -->--}}
                                                        {{--</div>--}}
                                                    {{--</div>--}}
                                                    {{--<!--col-list-search-input-item end-->--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        <!-- hidden-listing-filter end -->
                                    </div>
                                    {{--<div class="show-more-filters act-hiddenpanel color3-bg"><i class="fal fa-plus"></i><span>More options</span></div>--}}
                                </div>
                            </div>
                        </div>
                        </form>
                        <!--list-wrap-search end -->
                        <!-- list-main-wrap-->

                        <!-- list-main-wrap end-->
                    </div>
                    {{--<div class="header-sec-link">--}}
                        {{--<div class="container"><a href="#sec2" class="custom-scroll-link color-bg"><i class="fal fa-angle-double-down"></i></a></div>--}}
                    {{--</div>--}}
                </section>
        @endforeach



        </div>
        <!-- content end-->
    </div>



@stop
