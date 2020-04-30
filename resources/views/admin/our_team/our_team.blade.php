@extends('admin.layouts.includes.admin_lay')

@section('content')
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4> Our Team Table</h4>

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

                        <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#large-Modal" style="margin: 10px">Add New </button>
                        <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New </h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form  method="post" action="{{url('/gs_admin/add_team')}}" enctype="multipart/form-data">
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
                                                    <label class="col-form-label">Job_EN</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control autonumber"  name="job_en" data-a-sign="Name">
                                                    @if ($errors->has('job_en'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('job_en') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Job_De</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control autonumber"  name="job_de" data-a-sign="Name">
                                                    @if ($errors->has('job_de'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('job_de') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Job_ES</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control autonumber"  name="job_es" data-a-sign="Name">
                                                    @if ($errors->has('job_es'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('job_es') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Job_FR</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control autonumber"  name="job_fr" data-a-sign="Name">
                                                    @if ($errors->has('job_fr'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('job_fr') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Job_IT</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control autonumber"  name="job_it" data-a-sign="Name">
                                                    @if ($errors->has('job_it'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('job_it') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Facebook</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control autonumber"  name="fb" data-a-sign="Name">
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
                                                    <input type="text" class="form-control autonumber"  name="tw" data-a-sign="Name">
                                                    @if ($errors->has('tw'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('tw') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Instagram</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control autonumber"  name="insta" data-a-sign="Name">
                                                    @if ($errors->has('insta'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('insta') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">VK</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control autonumber"  name="vk" data-a-sign="Name">
                                                    @if ($errors->has('vk'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('vk') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Description  </label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <textarea type="text" class="form-control autonumber"  name="s_des_en" data-a-sign="Name"></textarea>
                                                    @if ($errors->has('s_des_en'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('s_des_en') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label"> Description_DE</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <textarea type="text" class="form-control autonumber"  name="s_des_de" data-a-sign="Name"></textarea>
                                                    @if ($errors->has('s_des_de'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('s_des_de') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Description_IT</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <textarea type="text" class="form-control autonumber"  name="s_des_it" data-a-sign="Name"></textarea>
                                                    @if ($errors->has('s_des_it'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('s_des_it') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Description_ES</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <textarea type="text" class="form-control autonumber"  name="s_des_es" data-a-sign="Name"></textarea>
                                                    @if ($errors->has('s_des_es'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('s_des_es') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Description_FR</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <textarea type="text" class="form-control autonumber" name="s_des_fr"     data-a-sign="Name"></textarea>
                                                    @if ($errors->has('s_des_fr'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('s_des_fr') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Icon</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <select name="icon" style="color:black" class="form-control">


                                                        <option value="fa fa-adjust" > &#xf042;</option>
                                                        <option value="fa fa-desktop "> &#xf108;</option>
                                                        <option  value="fa fa-bullhorn"> &#xf0a1;</option>
                                                        <option  value="fa fa-bullseye"> &#xf045;</option>
                                                        <option  value="fa fa-heartbeat"> &#xf004;</option>
                                                        <option  value="fa fa-tint"> &#xf043;</option>
                                                        <option  value="fa fa-certificate "> &#xf0a3;</option>
                                                        <option  value="fa fa-quote-left "> &#xf10d;</option>
                                                        <option  value="fa fa-lock ">  &#xf023;</option>
                                                        <option  value="fa fa-star-half-o "> &#xf123;</option>
                                                        <option  value="fa fa-meh-o "> &#xf11a;</option>
                                                        <option  value="fa fa-list-alt "> &#xf022;</option>
                                                        <option  value="fa fa-birthday-cake ">  &#xf1fd;</option>
                                                        <option  value="fa fa-renren "> &#xf18b;</option>

                                                    </select>

                                                    @if ($errors->has('icon'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('icon') }}</strong>
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
                                                    <form  method="post" action="{{url('/gs_admin/up_team/'.$row->id)}}" enctype="multipart/form-data">
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
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label">Job</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control autonumber" value="{{$row->job_en}}" name="job_en" data-a-sign="Name">
                                                                                @if ($errors->has('job_en'))
                                                                                    <span class="help-block">
                                            <strong>{{ $errors->first('job_en') }}</strong>
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
                                                                                <label class="col-form-label">Description  </label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <textarea type="text" class="form-control autonumber"  name="s_des_en" data-a-sign="Name">{{$row->s_des_en}}</textarea>
                                                                                @if ($errors->has('s_des_en'))
                                                                                    <span class="help-block">
                                            <strong>{{ $errors->first('s_des_en') }}</strong>
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

                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label">Job_FR</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control autonumber" value="{{$row->job_fr}}" name="job_fr" data-a-sign="Name">
                                                                                @if ($errors->has('job_fr'))
                                                                                    <span class="help-block">
                                            <strong>{{ $errors->first('job_fr') }}</strong>
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
                                            <strong>{{ $errors->first('fb') }}</strong>
                                        </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>

                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label">Description_FR</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <textarea type="text" class="form-control autonumber" name="s_des_fr"    data-a-sign="Name">{{$row->s_des_fr}}</textarea>
                                                                                @if ($errors->has('s_des_fr'))
                                                                                    <span class="help-block">
                                            <strong>{{ $errors->first('s_des_fr') }}</strong>
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

                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label">Job_ES</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control autonumber" value="{{$row->job_es}}" name="job_es" data-a-sign="Name">
                                                                                @if ($errors->has('job_es'))
                                                                                    <span class="help-block">
                                            <strong>{{ $errors->first('job_es') }}</strong>
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
                                                                                <label class="col-form-label">Description_ES</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <textarea type="text" class="form-control autonumber"  name="s_des_es" data-a-sign="Name">{{$row->s_des_es}}</textarea>
                                                                                @if ($errors->has('s_des_es'))
                                                                                    <span class="help-block">
                                            <strong>{{ $errors->first('s_des_es') }}</strong>
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

                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label">Job_DE</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control autonumber" value="{{$row->job_de}}" name="job_de" data-a-sign="Name">
                                                                                @if ($errors->has('job_de'))
                                                                                    <span class="help-block">
                                            <strong>{{ $errors->first('job_de') }}</strong>
                                        </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>

                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label">VK</label>
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
                                                                                <label class="col-form-label">Description_DE</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <textarea type="text" class="form-control autonumber"  name="s_des_de" data-a-sign="Name">{{$row->s_des_de}}</textarea>
                                                                                @if ($errors->has('s_des_de'))
                                                                                    <span class="help-block">
                                            <strong>{{ $errors->first('s_des_de') }}</strong>
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
                                                                                <label class="col-form-label">Job_IT</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control autonumber" value="{{$row->job_it}}" name="job_it" data-a-sign="Name">
                                                                                @if ($errors->has('job_it'))
                                                                                    <span class="help-block">
                                            <strong>{{ $errors->first('job_it') }}</strong>
                                        </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>


                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label">Description_IT</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <textarea type="text" class="form-control autonumber"  name="s_des_it" data-a-sign="Name">{{$row->s_des_it}}</textarea>
                                                                                @if ($errors->has('s_des_it'))
                                                                                    <span class="help-block">
                                            <strong>{{ $errors->first('s_des_it') }}</strong>
                                        </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>

                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label">Icon</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <select name="icon" style="color:black" class="form-control">

                                                                                    <option value="{{$row->icon}}" selected> </option>
                                                                                    <option value="fa fa-adjust" > &#xf042;</option>
                                                                                    <option value="fa fa-desktop "> &#xf108;</option>
                                                                                    <option  value="fa fa-bullhorn"> &#xf0a1;</option>
                                                                                    <option  value="fa fa-bullseye"> &#xf045;</option>
                                                                                    <option  value="fa fa-heartbeat"> &#xf004;</option>
                                                                                    <option  value="fa fa-tint"> &#xf043;</option>
                                                                                    <option  value="fa fa-certificate "> &#xf0a3;</option>
                                                                                    <option  value="fa fa-quote-left "> &#xf10d;</option>
                                                                                    <option  value="fa fa-lock ">  &#xf023;</option>
                                                                                    <option  value="fa fa-star-half-o "> &#xf123;</option>
                                                                                    <option  value="fa fa-meh-o "> &#xf11a;</option>
                                                                                    <option  value="fa fa-list-alt "> &#xf022;</option>
                                                                                    <option  value="fa fa-birthday-cake ">  &#xf1fd;</option>
                                                                                    <option  value="fa fa-renren "> &#xf18b;</option>

                                                                                </select>

                                                                                @if ($errors->has('icon'))
                                                                                    <span class="help-block">
                                            <strong>{{ $errors->first('icon') }}</strong>
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
                                                            <div class="col-sm-12">
                                                                <button type="submit" class="form-control autonumber btn btn-success" data-a-sign="Name">Save change</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <a  href="{{url('/gs_admin/del_team/'.$row->id)}}" class="btn btn-danger" style="   margin-left: 50%; border-radius: 20px; font-size: 13px; color: #ffffff;">Delete</a>

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

            {{$prog->links()}}
            <div id="styleSelector"></div>
        </div>


    </div>
    </div>




@stop