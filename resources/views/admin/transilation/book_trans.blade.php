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

                                        <form  method="post" action="{{url('/gs_admin/up_book_tran')}}" enctype="multipart/form-data">
                                            {{csrf_field()}}



                                            <tr>
                                                <td>
                                                    booking page

                                                </td>
                                                @php(
                                                $h22=explode(',',$home->book1)
                                                )

                                                @foreach($h22 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="book1[]" data-a-sign="Name">
                                                        @if ($errors->has('book1'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('book1') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    booking

                                                </td>
                                                @php(
                                                $h23=explode(',',$home->book2)
                                                )

                                                @foreach($h23 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="book2[]" data-a-sign="Name">
                                                        @if ($errors->has('book2'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('book2') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    your cart

                                                </td>
                                                @php(
                                                $h24=explode(',',$home->cart)
                                                )

                                                @foreach($h24 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="cart[]" data-a-sign="Name">
                                                        @if ($errors->has('cart'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('cart') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    from

                                                </td>
                                                @php(
                                                $h25=explode(',',$home->from)
                                                )

                                                @foreach($h25 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="from[]" data-a-sign="Name">
                                                        @if ($errors->has('from'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('from') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    to

                                                </td>
                                                @php(
                                                $h26=explode(',',$home->to)
                                                )

                                                @foreach($h26 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="to[]" data-a-sign="Name">
                                                        @if ($errors->has('to'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('to') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    adult

                                                </td>
                                                @php(
                                                $h27=explode(',',$home->adult)
                                                )

                                                @foreach($h27 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="adult[]" data-a-sign="Name">
                                                        @if ($errors->has('adult'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('adult') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    children

                                                </td>
                                                @php(
                                                $h28=explode(',',$home->child)
                                                )

                                                @foreach($h28 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="child[]" data-a-sign="Name">
                                                        @if ($errors->has('child'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('child') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    personal information

                                                </td>
                                                @php(
                                                $h29=explode(',',$home->personal)
                                                )

                                                @foreach($h29 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="personal[]" data-a-sign="Name">
                                                        @if ($errors->has('personal'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('personal') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    billing address

                                                </td>
                                                @php(
                                                $h387=explode(',',$home->billing)
                                                )

                                                @foreach($h387 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="billing[]" data-a-sign="Name">
                                                        @if ($errors->has('billing'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('billing') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    billing1

                                                </td>
                                                @php(
                                                $h30=explode(',',$home->billing1)
                                                )

                                                @foreach($h30 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="billing1[]" data-a-sign="Name">
                                                        @if ($errors->has('billing1'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('billing1') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    billing2

                                                </td>
                                                @php(
                                                $h31=explode(',',$home->billing2)
                                                )

                                                @foreach($h31 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="billing2[]" data-a-sign="Name">
                                                        @if ($errors->has('billing2'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('billing2') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    personal

                                                </td>
                                                @php(
                                                $h32=explode(',',$home->personal2)
                                                )

                                                @foreach($h32 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="personal2[]" data-a-sign="Name">
                                                        @if ($errors->has('personal2'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('personal2') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>

                                            <tr>
                                                <td>
                                                    first name

                                                </td>
                                                @php(
                                                $h34=explode(',',$home->first)
                                                )

                                                @foreach($h34 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="first[]" data-a-sign="Name">
                                                        @if ($errors->has('first'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('first') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>





                                            <tr>
                                                <td>
                                                    last name

                                                </td>
                                                @php(
                                                $h35=explode(',',$home->last)
                                                )

                                                @foreach($h35 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="last[]" data-a-sign="Name">
                                                        @if ($errors->has('last'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('last') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    phone

                                                </td>
                                                @php(
                                                $h36=explode(',',$home->phone)
                                                )

                                                @foreach($h36 as $row)
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
                                                    email

                                                </td>
                                                @php(
                                                $h37=explode(',',$home->email)
                                                )

                                                @foreach($h37 as $row)
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
                                                     your first name

                                                </td>
                                                @php(
                                                $h38=explode(',',$home->first1)
                                                )

                                                @foreach($h38 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="first1[]" data-a-sign="Name">
                                                        @if ($errors->has('first1'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('first1') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    your last name

                                                </td>
                                                @php(
                                                $h39=explode(',',$home->last1)
                                                )

                                                @foreach($h39 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="last1[]" data-a-sign="Name">
                                                        @if ($errors->has('last1'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('last1') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    phone

                                                </td>
                                                @php(
                                                $h41=explode(',',$home->phone1)
                                                )

                                                @foreach($h41 as $row)
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
                                                    your email

                                                </td>
                                                @php(
                                                $h50=explode(',',$home->email1)
                                                )

                                                @foreach($h50 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="email1[]" data-a-sign="Name">
                                                        @if ($errors->has('email1'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('email1') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    city

                                                </td>
                                                @php(
                                                $h51=explode(',',$home->city)
                                                )

                                                @foreach($h51 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="city[]" data-a-sign="Name">
                                                        @if ($errors->has('city'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    your city1

                                                </td>
                                                @php(
                                                $h1=explode(',',$home->city1)
                                                )

                                                @foreach($h1 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="city1[]" data-a-sign="Name">
                                                        @if ($errors->has('city1'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('city1') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    street

                                                </td>
                                                @php(
                                                $h3=explode(',',$home->street)
                                                )

                                                @foreach($h3 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="street[]" data-a-sign="Name">
                                                        @if ($errors->has('street'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('street') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    street1

                                                </td>
                                                @php(
                                                $h4=explode(',',$home->street1)
                                                )

                                                @foreach($h4 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="street1[]" data-a-sign="Name">
                                                        @if ($errors->has('street1'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('street1') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    country

                                                </td>
                                                @php(
                                                $h5=explode(',',$home->country)
                                                )

                                                @foreach($h5 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="country[]" data-a-sign="Name">
                                                        @if ($errors->has('country'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('country') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    country1

                                                </td>
                                                @php(
                                                $h6=explode(',',$home->country1)
                                                )

                                                @foreach($h6 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="country1[]" data-a-sign="Name">
                                                        @if ($errors->has('country1'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('country1') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    state

                                                </td>
                                                @php(
                                                $h7=explode(',',$home->state)
                                                )

                                                @foreach($h7 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="state[]" data-a-sign="Name">
                                                        @if ($errors->has('state'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('state') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>





                                            <tr>
                                                <td>
                                                    state1

                                                </td>
                                                @php(
                                                $h9=explode(',',$home->state1)
                                                )

                                                @foreach($h9 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="state1[]" data-a-sign="Name">
                                                        @if ($errors->has('state1'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('state1') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    Postal code

                                                </td>
                                                @php(
                                                $h10=explode(',',$home->post)
                                                )

                                                @foreach($h10 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="post[]" data-a-sign="Name">
                                                        @if ($errors->has('post'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('post') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    Postal code

                                                </td>
                                                @php(
                                                $h11=explode(',',$home->post1)
                                                )

                                                @foreach($h11 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="post1[]" data-a-sign="Name">
                                                        @if ($errors->has('post1'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('post1') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    note

                                                </td>
                                                @php(
                                                $h12=explode(',',$home->note)
                                                )

                                                @foreach($h12 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="note[]" data-a-sign="Name">
                                                        @if ($errors->has('note'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('note') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    note1

                                                </td>
                                                @php(
                                                $h13=explode(',',$home->note1)
                                                )

                                                @foreach($h13 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="note1[]" data-a-sign="Name">
                                                        @if ($errors->has('note1'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('note1') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    back

                                                </td>
                                                @php(
                                                $h14=explode(',',$home->back)
                                                )

                                                @foreach($h14 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="back[]" data-a-sign="Name">
                                                        @if ($errors->has('back'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('back') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    back1

                                                </td>
                                                @php(
                                                $h15=explode(',',$home->back1)
                                                )

                                                @foreach($h15 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="back1[]" data-a-sign="Name">
                                                        @if ($errors->has('back1'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('back1') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    payment

                                                </td>
                                                @php(
                                                $h16=explode(',',$home->payment)
                                                )

                                                @foreach($h16 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="payment[]" data-a-sign="Name">
                                                        @if ($errors->has('payment'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('payment') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    confirm

                                                </td>
                                                @php(
                                                $h17=explode(',',$home->confirm)
                                                )

                                                @foreach($h17 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="confirm[]" data-a-sign="Name">
                                                        @if ($errors->has('confirm'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('confirm') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    thank

                                                </td>
                                                @php(
                                                $h55=explode(',',$home->thank)
                                                )

                                                @foreach($h55 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="thank[]" data-a-sign="Name">
                                                        @if ($errors->has('thank'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('thank') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                @endforeach

                                            </tr>
                                            <tr>
                                                <td>
                                                    confirm1

                                                </td>
                                                @php(
                                                $h56=explode(',',$home->confirm1)
                                                )

                                                @foreach($h56 as $row)
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row}}"  name="confirm1[]" data-a-sign="Name">
                                                        @if ($errors->has('confirm1'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('confirm1') }}</strong>
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
                                                $h56=explode(',',$home->send)
                                                )

                                                @foreach($h56 as $row)
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