@extends('admin.layouts.includes.admin_lay')

@section('content')
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>  Programs Table</h4>

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
                                <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block">
                                <h4 class="sub-title">Basic Inputs</h4>

                                <form  method="post" action="{{url('/gs_admin/up_program/'.$pro->id)}}" enctype="multipart/form-data">


                                    {{csrf_field()}}
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Name</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" value="{{$pro->name_en}}" name="name_en" data-a-sign="Name">
                                            @if ($errors->has('name_en'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('name_en') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Name_DE</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" value="{{$pro->name_de}}" name="name_de" data-a-sign="Name">
                                            @if ($errors->has('name_de'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('name_de') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Name_IT</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" value="{{$pro->name_it}}" name="name_it" data-a-sign="Name">
                                            @if ($errors->has('name_it'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('name_it') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Name_ES</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" value="{{$pro->name_es}}" name="name_es" data-a-sign="Name">
                                            @if ($errors->has('name_es'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('name_es') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Name_FR</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" name="name_fr" value="{{$pro->name_fr}}"  data-a-sign="Name">
                                            @if ($errors->has('name_fr'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('name_fr') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Sale</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" name="sale" value="{{$pro->sale}}" data-a-sign="Name">
                                            @if ($errors->has('sale'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('sale') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>




                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Simplified description </label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control autonumber"  name="s_des_en" data-a-sign="Name">{{$pro->s_des_en}}</textarea>
                                            @if ($errors->has('s_des_en'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('s_des_en') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Simplified description_DE</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control autonumber"  name="s_des_de" data-a-sign="Name">{{$pro->s_des_de}}</textarea>
                                            @if ($errors->has('s_des_de'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('s_des_de') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Simplified description_IT</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control autonumber"  name="s_des_it" data-a-sign="Name">{{$pro->s_des_it}}</textarea>
                                            @if ($errors->has('s_des_it'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('s_des_it') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Simplified description_ES</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control autonumber"  name="s_des_es" data-a-sign="Name">{{$pro->s_des_es}}</textarea>
                                            @if ($errors->has('s_des_es'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('s_des_es') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Simplified description_FR</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control autonumber" name="s_des_fr"     data-a-sign="Name">{{$pro->s_des_fr}}</textarea>
                                            @if ($errors->has('s_des_fr'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('s_des_fr') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>




                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label"> Description </label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control autonumber" id="editor5"  name="des_en" data-a-sign="Name">{{$pro->des_en}}</textarea>
                                            @if ($errors->has('des_en'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('des_en') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Description_DE</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control autonumber"  id="editor4" name="des_de" data-a-sign="Name">{{$pro->des_de}}</textarea>
                                            @if ($errors->has('des_de'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('des_de') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Description_IT</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control autonumber" id="editor3"  name="des_it" data-a-sign="Name">{{$pro->des_it}}</textarea>
                                            @if ($errors->has('des_it'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('des_it') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Description_ES</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control autonumber" id="editor2" name="des_es" data-a-sign="Name">{{$pro->des_es}}</textarea>
                                            @if ($errors->has('des_es'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('des_es') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Description_FR</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control autonumber" name="des_fr"   id="editor1"  data-a-sign="Name">{{$pro->des_fr}}</textarea>
                                            @if ($errors->has('des_fr'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('des_fr') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <!--<div class="row form-group">-->
                                    <!--    <div class="col-sm-3">-->
                                    <!--        <label class="col-form-label">Price</label>-->
                                    <!--    </div>-->
                                    <!--    <div class="col-sm-9">-->
                                    <!--        <input type="text" class="form-control autonumber" value="{{$pro->price}}" name="price" data-a-sign="Name">-->
                                    <!--        @if ($errors->has('price'))-->
                                    <!--            <span class="help-block">-->
                                    <!--        <strong>{{ $errors->first('price') }}</strong>-->
                                    <!--    </span>-->
                                    <!--        @endif-->
                                    <!--    </div>-->
                                    <!--</div>-->


                                    <!--<div class="row form-group">-->
                                    <!--    <div class="col-sm-3">-->
                                    <!--        <label class="col-form-label">Child_Price</label>-->
                                    <!--    </div>-->
                                    <!--    <div class="col-sm-9">-->
                                    <!--        <input type="text" class="form-control autonumber" value="{{$pro->c_price}}" name="c_price" data-a-sign="Name">-->
                                    <!--        @if ($errors->has('c_price'))-->
                                    <!--            <span class="help-block">-->
                                    <!--        <strong>{{ $errors->first('c_price') }}</strong>-->
                                    <!--    </span>-->
                                    <!--        @endif-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">City</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber"  name="city" value="{{$pro->city}}" data-a-sign="Name">
                                            @if ($errors->has('city'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Video Link</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber"  name="link" value="{{$pro->video}}" data-a-sign="Name">
                                            @if ($errors->has('link'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('link') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Main Programs</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select type="text" class="form-control autonumber"  name="prog" data-a-sign="Name">
                                                @php(
                                                $prog2=App\program::find($pro->program_id)
                                                )
                                                <option value="{{$prog2->id}}">{{$prog2->name_en}}</option>
                                                @foreach($prog as $row)
                                                    <option value="{{$row->id}}">{{$row->name_en}}</option>
                                                @endforeach

                                            </select>
                                            @if ($errors->has('prog'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('prog') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Admin of Program</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select type="text" class="form-control autonumber"  name="admin" data-a-sign="Name">
                                                @php(
                                               $dd=App\User::find($pro->user_id)
                                               )

                                                <option value="{{$dd->id}}" selected>{{$dd->name}}</option>
                                                @foreach($admin as $row)
                                                    <option value="{{$row->id}}" selected>{{$row->name}}</option>
                                                @endforeach

                                            </select>
                                            @if ($errors->has('admin'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('admin') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>




                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Image</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="file"  class="form-control autonumber" name="image"  data-a-sign="Name">
                                            @if ($errors->has('image'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                            @endif
                                            <img src="{{asset('img/'.$pro->m_img)}}" width="100px" height="100px">
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