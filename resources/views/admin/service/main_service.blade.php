@extends('admin.layouts.includes.admin_lay')

@section('content')
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4> Maim Services Table</h4>

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



                        <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#large-Modal" style="margin: 10px">Add New Service</button>
                        <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Service</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form  method="post" action="{{url('/gs_admin/add_main_service')}}" enctype="multipart/form-data">
                                        <div class="modal-body">

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
                                                    <label class="col-form-label">Image</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="file"  class="form-control autonumber" name="image"  data-a-sign="Name">
                                                    @if ($errors->has('image'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light ">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <br>
                        <!-- Basic table card start -->
                        @foreach($prog as $row)
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Tab variant tab card start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>{{$row->name_en}}</h5>
                                            <div class="card-header-right">
                                                <i class="icofont icofont-rounded-down"></i>
                                                <i class="icofont icofont-refresh"></i>
                                                <i class="icofont icofont-close-circled"></i>
                                            </div>
                                        </div>
                                        <div class="card-block tab-icon">
                                            <!-- Row start -->
                                            <div class="row">

                                                <div class="col-lg-12 col-xl-12 tab-with-img">

                                                    <ul class="nav nav-tabs md-tabs img-tabs b-none" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-toggle="tab" href="#home{{$row->id}}" role="tab">
                                                                <img src="{{url('website/assets/images/lan/1.png')}}" class="img-fluid img-circle" alt="">

                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#profile{{$row->id}}" role="tab">
                                                                <img src="{{url('website/assets/images/lan/2.png')}}" class="img-fluid img-circle" alt="">

                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#messages{{$row->id}}" role="tab">
                                                                <img src="{{url('website/assets/images/lan/3.png')}}" class="img-fluid img-circle" alt="">

                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#settings{{$row->id}}" role="tab">
                                                                <img src="{{url('website/assets/images/lan/4.png')}}" class="img-fluid img-circle" alt="">

                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-toggle="tab" href="#name{{$row->id}}" role="tab">
                                                                <img src="{{url('website/assets/images/lan/5.png')}}" class="img-fluid img-circle" alt="">

                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <form  method="post" action="{{url('/gs_admin/up_main_service/'.$row->id)}}" enctype="multipart/form-data">
                                                        {{csrf_field()}}
                                                        <div class="tab-content card-block">
                                                            <div class="tab-pane active" id="home{{$row->id}}" role="tabpanel">
                                                                <div class="card">

                                                                    <div class="card-block">

                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label">Name</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control autonumber" value="{{$row->name_en}}" name="name_en" data-a-sign="Name">
                                                                                @if ($errors->has('name_en'))
                                                                                    <span class="help-block">
                                            <strong>{{ $errors->first('name_en') }}</strong>
                                        </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="tab-pane" id="profile{{$row->id}}" role="tabpanel">
                                                                <div class="card">

                                                                    <div class="card-block">

                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label">Name_FR</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control autonumber" name="name_fr" value="{{$row->name_fr}}" data-a-sign="Name">
                                                                                @if ($errors->has('name_fr'))
                                                                                    <span class="help-block">
                                            <strong>{{ $errors->first('name_fr') }}</strong>
                                        </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="messages{{$row->id}}" role="tabpanel">
                                                                <div class="card">

                                                                    <div class="card-block">

                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label">Name_ES</label>

                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control autonumber" name="name_es" value="{{$row->name_es}}" data-a-sign="Name">
                                                                                @if ($errors->has('name_es'))
                                                                                    <span class="help-block">
                                            <strong>{{ $errors->first('name_es') }}</strong>
                                        </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="settings{{$row->id}}" role="tabpanel">
                                                                <div class="card">

                                                                    <div class="card-block">

                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label">Name_DE</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control autonumber" name="name_de" value="{{$row->name_de}}"  data-a-sign="Name">
                                                                                @if ($errors->has('name_de'))
                                                                                    <span class="help-block">
                                            <strong>{{ $errors->first('name_de') }}</strong>
                                        </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="tab-pane" id="name{{$row->id}}" role="tabpanel">
                                                                <div class="card">

                                                                    <div class="card-block">

                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label">Name_IT</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control autonumber" name="name_it" value="{{$row->name_it}}" data-a-sign="Name">
                                                                                @if ($errors->has('name_it'))
                                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('name_it') }}</strong>
                                        </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>

                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label">Image</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input type="file" class="form-control autonumber" name="image"  data-a-sign="Name">
                                                                                @if ($errors->has('image'))
                                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                                                                @endif
                                                                                <img src="{{asset('img/'.$row->img)}}" width="100px" height="100px">
                                                                            </div>
                                                                        </div>


                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">

                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <button type="submit" class="form-control autonumber btn btn-success" data-a-sign="Name">Save change</button>
                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <a  href="{{url('/gs_admin/del_main_service/'.$row->id)}}" class="btn btn-danger" style="   margin-left: 50%; border-radius: 20px; font-size: 13px; color: #ffffff;">Delete</a>

                                                </div>
                                            </div>
                                            </br>
                                            <!-- Row end -->




                                        </div>
                                    </div>
                                    <!-- Tab variant tab card start -->
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Page-body end -->
                </div>
            </div>


            <div id="styleSelector"></div>
        </div>


    </div>
    </div>




@stop