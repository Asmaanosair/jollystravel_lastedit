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

                                        <form  method="post" action="{{url('/gs_admin/up_con_tran')}}" enctype="multipart/form-data">
                                            {{csrf_field()}}



                                            <tr>
                                                <td>
                                                    phone1

                                                </td>
                                                @php(
                                                $h22=explode(',',$home->phone1)
                                                )

                                                @foreach($h22 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="phone1[]" data-a-sign="Name">
                                                        @if ($errors->has('phone1'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('phone1') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    phone2

                                                </td>
                                                @php(
                                                $h23=explode(',',$home->phone2)
                                                )

                                                @foreach($h23 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="phone2[]" data-a-sign="Name">
                                                        @if ($errors->has('phone2'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('phone2') }}</strong>
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
                                                $h24=explode(',',$home->web)
                                                )

                                                @foreach($h24 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="web[]" data-a-sign="Name">
                                                        @if ($errors->has('web'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('web') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    contact

                                                </td>
                                                @php(
                                                $h25=explode(',',$home->contact)
                                                )

                                                @foreach($h25 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="contact[]" data-a-sign="Name">
                                                        @if ($errors->has('contact'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('contact') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    mail

                                                </td>
                                                @php(
                                                $h26=explode(',',$home->mail)
                                                )

                                                @foreach($h26 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="mail[]" data-a-sign="Name">
                                                        @if ($errors->has('mail'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('mail') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    get in touch

                                                </td>
                                                @php(
                                                $h27=explode(',',$home->get)
                                                )

                                                @foreach($h27 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="get[]" data-a-sign="Name">
                                                        @if ($errors->has('get'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('get') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                 our   office

                                                </td>
                                                @php(
                                                $h28=explode(',',$home->office)
                                                )

                                                @foreach($h28 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="office[]" data-a-sign="Name">
                                                        @if ($errors->has('office'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('office') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                   your email

                                                </td>
                                                @php(
                                                $h29=explode(',',$home->email)
                                                )

                                                @foreach($h29 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="email[]" data-a-sign="Name">
                                                        @if ($errors->has('email'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    your  phone

                                                </td>
                                                @php(
                                                $h30=explode(',',$home->phone)
                                                )

                                                @foreach($h30 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="phone[]" data-a-sign="Name">
                                                        @if ($errors->has('phone'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                  your  name

                                                </td>
                                                @php(
                                                $h30=explode(',',$home->name)
                                                )

                                                @foreach($h30 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="name[]" data-a-sign="Name">
                                                        @if ($errors->has('name'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    subject

                                                </td>
                                                @php(
                                                $h31=explode(',',$home->sub)
                                                )

                                                @foreach($h31 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="sub[]" data-a-sign="Name">
                                                        @if ($errors->has('sub'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('sub') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    message

                                                </td>
                                                @php(
                                                $h32=explode(',',$home->msg)
                                                )

                                                @foreach($h32 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="msg[]" data-a-sign="Name">
                                                        @if ($errors->has('msg'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('msg') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    send

                                                </td>
                                                @php(
                                                $h33=explode(',',$home->send)
                                                )

                                                @foreach($h33 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="send[]" data-a-sign="Name">
                                                        @if ($errors->has('send'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('send') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    work

                                                </td>
                                                @php(
                                                $h34=explode(',',$home->work)
                                                )

                                                @foreach($h34 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="work[]" data-a-sign="Name">
                                                        @if ($errors->has('work'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('work') }}</strong>
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