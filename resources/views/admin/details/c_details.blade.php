@extends('admin.layouts.includes.admin_lay')
@section('content')
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>  News Table</h4>

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
                                <h4 class="sub-title">Basic Inputs   {{$id}}</h4>
                                
                                

                                <form  method="post" action="{{url('/gs_admin/add_detail/'. $id)}}" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Name</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber"  name="name_en" data-a-sign="Name">
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
                                            <input type="text" class="form-control autonumber"  name="name_de" data-a-sign="Name">
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
                                            <input type="text" class="form-control autonumber"  name="name_it" data-a-sign="Name">
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
                                            <input type="text" class="form-control autonumber"  name="name_es" data-a-sign="Name">
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
                                            <input type="text" class="form-control autonumber" name="name_fr"  data-a-sign="Name">
                                            @if ($errors->has('name_fr'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('name_fr') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>








                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label"> Description </label>
                                        </div>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control autonumber" id="editor5"  name="des_en" data-a-sign="Name"></textarea>
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
                                            <textarea type="text" class="form-control autonumber"  id="editor4" name="des_de" data-a-sign="Name"></textarea>
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
                                            <textarea type="text" class="form-control autonumber" id="editor3"  name="des_it" data-a-sign="Name"></textarea>
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
                                            <textarea type="text" class="form-control autonumber" id="editor2" name="des_es" data-a-sign="Name"></textarea>
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
                                            <textarea type="text" class="form-control autonumber" name="des_fr"   id="editor1"  data-a-sign="Name"></textarea>
                                            @if ($errors->has('des_fr'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('des_fr') }}</strong>
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

<a  href="{{url('/gs_admin/detail/'.$id)}}"class="btn btn-success">back to Details</a>
            <div id="styleSelector"></div>
        </div>


    </div>
    </div>




@stop