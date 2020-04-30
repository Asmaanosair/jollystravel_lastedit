@extends('admin.layouts.includes.admin_lay')
@section('content')
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>  Translation</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!"> Table</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!"> Table</a>
                            </li>
                        </ul>
                    </div>


                    <div class="page-body">





                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h5>Translation</h5>

                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="multi-colum-dt" class="table table-striped table-bordered nowrap">
                                        <thead>
                                        <tr>
                                            <th>Title</th>
                                            <th>ENG</th>
                                            <th>ES</th>
                                            <th>FR</th>
                                            <th>IT</th>
                                            <th>DE</th>
                                        </tr>
                                        </thead>
                                        <tbody>






                                        <form  method="post" action="{{url('/gs_admin/up_page_tran')}}" enctype="multipart/form-data">
                                            {{csrf_field()}}


                                            <tr>
                                                <td>
                                                    owner

                                                </td>
                                                @php(
                                                $h=explode(',',$home->owner)
                                                )

                                                @foreach($h as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="owner[]" data-a-sign="Name">
                                                        @if ($errors->has('owner'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('owner') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>


                                            <tr>
                                                <td>
                                                    top

                                                </td>
                                                @php(
                                                $h50=explode(',',$home->top)
                                                )

                                                @foreach($h50 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="top[]" data-a-sign="Name">
                                                        @if ($errors->has('top'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('top') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    viewowner

                                                </td>
                                                @php(
                                                $h2=explode(',',$home->viewowner)
                                                )

                                                @foreach($h2 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="viewowner[]" data-a-sign="Name">
                                                        @if ($errors->has('viewowner'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('viewowner') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    information

                                                </td>
                                                @php(
                                                $h3=explode(',',$home->information)
                                                )

                                                @foreach($h3 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="information[]" data-a-sign="Name">
                                                        @if ($errors->has('information'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('information') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    details

                                                </td>
                                                @php(
                                                $h4=explode(',',$home->details)
                                                )

                                                @foreach($h4 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="details[]" data-a-sign="Name">
                                                        @if ($errors->has('details'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('details') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>

                                            <tr>
                                                <td>
                                                    program

                                                </td>
                                                @php(
                                                $h6=explode(',',$home->program)
                                                )

                                                @foreach($h6 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="program[]" data-a-sign="Name">
                                                        @if ($errors->has('program'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('program') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    reviews

                                                </td>
                                                @php(
                                                $h7=explode(',',$home->reviews)
                                                )

                                                @foreach($h7 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="reviews[]" data-a-sign="Name">
                                                        @if ($errors->has('reviews'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('reviews') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    available

                                                </td>
                                                @php(
                                                $h8=explode(',',$home->available)
                                                )

                                                @foreach($h8 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="available[]" data-a-sign="Name">
                                                        @if ($errors->has('available'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('available') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>

                                            <tr>
                                                <td>
                                                    video

                                                </td>
                                                @php(
                                                $h9=explode(',',$home->video)
                                                )

                                                @foreach($h9 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="video[]" data-a-sign="Name">
                                                        @if ($errors->has('video'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('video') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    favorite_tour

                                                </td>
                                                @php(
                                                $h10=explode(',',$home->favorite_tour)
                                                )

                                                @foreach($h10 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="favorite_tour[]" data-a-sign="Name">
                                                        @if ($errors->has('favorite_tour'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('favorite_tour') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    cleanliness

                                                </td>
                                                @php(
                                                $h11=explode(',',$home->cleanliness)
                                                )

                                                @foreach($h11 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="cleanliness[]" data-a-sign="Name">
                                                        @if ($errors->has('cleanliness'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('cleanliness') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    comfort

                                                </td>
                                                @php(
                                                $h12=explode(',',$home->comfort)
                                                )

                                                @foreach($h12 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="comfort[]" data-a-sign="Name">
                                                        @if ($errors->has('comfort'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('comfort') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    staf

                                                </td>
                                                @php(
                                                $h13=explode(',',$home->staf)
                                                )

                                                @foreach($h13 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="staf[]" data-a-sign="Name">
                                                        @if ($errors->has('staf'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('staf') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    verygood

                                                </td>
                                                @php(
                                                $h14=explode(',',$home->verygood)
                                                )

                                                @foreach($h14 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="verygood[]" data-a-sign="Name">
                                                        @if ($errors->has('verygood'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('verygood') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    good
                                                </td>
                                                @php(
                                                $h15=explode(',',$home->good)
                                                )

                                                @foreach($h15 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="good[]" data-a-sign="Name">
                                                        @if ($errors->has('good'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('good') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    facilities

                                                </td>
                                                @php(
                                                $h16=explode(',',$home->facilities)
                                                )

                                                @foreach($h16 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="facilities[]" data-a-sign="Name">
                                                        @if ($errors->has('facilities'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('facilities') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    addreview

                                                </td>
                                                @php(
                                                $h17=explode(',',$home->addreview)
                                                )

                                                @foreach($h17 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="addreview[]" data-a-sign="Name">
                                                        @if ($errors->has('addreview'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('addreview') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    submitreview

                                                </td>
                                                @php(
                                                $h18=explode(',',$home->submitreview)
                                                )

                                                @foreach($h18 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="submitreview[]" data-a-sign="Name">
                                                        @if ($errors->has('submitreview'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('submitreview') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    yourreview

                                                </td>
                                                @php(
                                                $h19=explode(',',$home->yourreview)
                                                )

                                                @foreach($h19 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="yourreview[]" data-a-sign="Name">
                                                        @if ($errors->has('yourreview'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('yourreview') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    yourscore

                                                </td>
                                                @php(
                                                $h20=explode(',',$home->yourscore)
                                                )

                                                @foreach($h20 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="yourscore[]" data-a-sign="Name">
                                                        @if ($errors->has('yourscore'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('yourscore') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    ouroffice

                                                </td>
                                                @php(
                                                $h21=explode(',',$home->ouroffice)
                                                )

                                                @foreach($h21 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="ouroffice[]" data-a-sign="Name">
                                                        @if ($errors->has('ouroffice'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('ouroffice') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    sendmessage

                                                </td>
                                                @php(
                                                $h22=explode(',',$home->sendmessage)
                                                )

                                                @foreach($h22 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="sendmessage[]" data-a-sign="Name">
                                                        @if ($errors->has('sendmessage'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('sendmessage') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    requestnow

                                                </td>
                                                @php(
                                                $h23=explode(',',$home->requestnow)
                                                )

                                                @foreach($h23 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="requestnow[]" data-a-sign="Name">
                                                        @if ($errors->has('requestnow'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('requestnow') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    yourname

                                                </td>
                                                @php(
                                                $h24=explode(',',$home->yourname)
                                                )

                                                @foreach($h24 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="yourname[]" data-a-sign="Name">
                                                        @if ($errors->has('yourname'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('yourname') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    youremail

                                                </td>
                                                @php(
                                                $h25=explode(',',$home->youremail)
                                                )

                                                @foreach($h25 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="youremail[]" data-a-sign="Name">
                                                        @if ($errors->has('youremail'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('youremail') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    yourmessage

                                                </td>
                                                @php(
                                                $h26=explode(',',$home->yourmessage)
                                                )

                                                @foreach($h26 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="yourmessage[]" data-a-sign="Name">
                                                        @if ($errors->has('yourmessage'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('yourmessage') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    website

                                                </td>
                                                @php(
                                                $h27=explode(',',$home->website)
                                                )

                                                @foreach($h27 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="website[]" data-a-sign="Name">
                                                        @if ($errors->has('website'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('website') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    Our_Office

                                                </td>
                                                @php(
                                                $h28=explode(',',$home->Our_Office)
                                                )

                                                @foreach($h28 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="Our_Office[]" data-a-sign="Name">
                                                        @if ($errors->has('Our_Office'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('Our_Office') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    Working_Hours

                                                </td>
                                                @php(
                                                $h29=explode(',',$home->Working_Hours)
                                                )

                                                @foreach($h29 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="Working_Hours[]" data-a-sign="Name">
                                                        @if ($errors->has('Working_Hours'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('Working_Hours') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    Register

                                                </td>
                                                @php(
                                                $h30=explode(',',$home->Register)
                                                )

                                                @foreach($h30 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="Register[]" data-a-sign="Name">
                                                        @if ($errors->has('Register'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('Register') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>




                                            <tr>
                                                <td>
                                                    <button type="submit" class="btn btn-success form-control"> Save</button>

                                                </td>


                                            </tr>

                                        </form>


                                        </tbody>
                                        <tfoot>

                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>


            <div id="styleSelector"></div>
        </div>


    </div>
    </div>




@stop