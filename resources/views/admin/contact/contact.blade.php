@extends('admin.layouts.includes.admin_lay')

@section('content')
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>  Contact Table</h4>

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

                    <!-- Page-header end -->
                    <!-- Page-body start -->
                    <div class="page-body">

                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h5>Basic Form Inputs</h5>

                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block">
                                <h4 class="sub-title">Basic Inputs</h4>

                                <form  method="post" action="{{url('/gs_admin/up_contact/1')}}" enctype="multipart/form-data">


                                    {{csrf_field()}}
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Address</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" value="{{$row->address_en}}"  name="name_en" data-a-sign="Name">
                                            @if ($errors->has('name_en'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('name_en') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Address_DE</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" value="{{$row->address_de}}" name="name_de" data-a-sign="Name">
                                            @if ($errors->has('name_de'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('name_de') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Address_IT</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" value="{{$row->address_it}}" name="name_it" data-a-sign="Name">
                                            @if ($errors->has('name_it'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('name_it') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Address_ES</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" value="{{$row->address_es}}"  name="name_es" data-a-sign="Name">
                                            @if ($errors->has('name_es'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('name_es') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Address_FR</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" name="name_fr" value="{{$row->address_fr}}"  data-a-sign="Name">
                                            @if ($errors->has('name_fr'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('name_fr') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                     <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Address2</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" value="{{$row->address2_en}}"  name="name2_en" data-a-sign="Name">
                                            @if ($errors->has('name2_en'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('name2_en') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Address2_DE</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" value="{{$row->address2_de}}" name="name2_de" data-a-sign="Name">
                                            @if ($errors->has('name2_de'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('name2_de') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Address2_IT</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" value="{{$row->address2_it}}" name="name2_it" data-a-sign="Name">
                                            @if ($errors->has('name2_it'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('name2_it') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Address2_ES</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" value="{{$row->address2_es}}"  name="name2_es" data-a-sign="Name">
                                            @if ($errors->has('name2_es'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('name2_es') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Address2_FR</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" name="name2_fr" value="{{$row->address2_fr}}"  data-a-sign="Name">
                                            @if ($errors->has('name2_fr'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('name2_fr') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>





                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Our office  </label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control autonumber"    name="s_des_en" data-a-sign="Name"> {{$row->s_des_en}}</textarea>
                                            @if ($errors->has('s_des_en'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('s_des_en') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Our office _DE</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control autonumber"   name="s_des_de" data-a-sign="Name"> {{$row->s_des_de}}</textarea>
                                            @if ($errors->has('s_des_de'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('s_des_de') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Our office _IT</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control autonumber"    name="s_des_it" data-a-sign="Name"> {{$row->s_des_it}}</textarea>
                                            @if ($errors->has('s_des_it'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('s_des_it') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Our office _ES</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control autonumber"    name="s_des_es" data-a-sign="Name"> {{$row->s_des_es}}</textarea>
                                            @if ($errors->has('s_des_es'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('s_des_es') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Our office _FR</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control autonumber" name="s_des_fr"     data-a-sign="Name"> {{$row->s_des_fr}}</textarea>
                                            @if ($errors->has('s_des_fr'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('s_des_fr') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Web site</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber"  value="{{$row->web}}"  name="web" data-a-sign="Name">
                                            @if ($errors->has('web'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('web') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Email</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber"  value="{{$row->email}}"  name="mail" data-a-sign="Name">
                                            @if ($errors->has('mail'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('mail') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">WORK CLosed</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber"  value="{{$row->close}}"  name="close" data-a-sign="Name">
                                            @if ($errors->has('close'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('close') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Phone</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" value="{{$row->phone}}"  name="ph" data-a-sign="Name">
                                            @if ($errors->has('ph'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('ph') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                       <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Phone1</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" value="{{$row->phone1}}"  name="ph1" data-a-sign="Name">
                                            @if ($errors->has('ph'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('ph') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Work Day</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" value="{{$row->day_open}}" name="w" data-a-sign="Name">
                                            @if ($errors->has('w'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('w') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Work hour</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" value="{{$row->time_open}}" name="t" data-a-sign="Name">
                                            @if ($errors->has('t'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('t') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">YouTube</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" value="{{$row->vk}}" name="vk" data-a-sign="Name">
                                            @if ($errors->has('vk'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('vk') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Instagram</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" value="{{$row->insta}}" name="insta" data-a-sign="Name">
                                            @if ($errors->has('insta'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('insta') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Facebook</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" value="{{$row->fb}}" name="fb" data-a-sign="Name">
                                            @if ($errors->has('fb'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('fb') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Twitter</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" value="{{$row->tw}}" name="tw" data-a-sign="Name">
                                            @if ($errors->has('tw'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('tw') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>



                                    <button type="submit" class="form-control autonumber btn btn-success" data-a-sign="Name">Save change</button>
                                </form>

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