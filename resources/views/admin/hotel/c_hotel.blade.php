@extends('admin.layouts.includes.admin_lay')
@section('content')
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>  Hotel Table</h4>

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

                                <form  method="post" action="{{url('/gs_admin/add_hotel')}}" enctype="multipart/form-data">
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
                                            <label class="col-form-label">Number of Hotel Rooms</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" name="n_room"   data-a-sign="Name">
                                            @if ($errors->has('n_room'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('n_room') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    
                                    
                                     <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Number of Customers Every Year</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" name="n_cust"   data-a-sign="Name">
                                            @if ($errors->has('n_cust'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('n_cust') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                     <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Number of Restaurant Inside</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" name="n_rest"   data-a-sign="Name">
                                            @if ($errors->has('n_rest'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('n_rest') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Simplified description </label>
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
                                            <label class="col-form-label">Simplified description_DE</label>
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
                                            <label class="col-form-label">Simplified description_IT</label>
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
                                            <label class="col-form-label">Simplified description_ES</label>
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
                                            <label class="col-form-label">Simplified description_FR</label>
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
                                    
                                       <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Location</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" name="loc"   data-a-sign="Name">
                                            @if ($errors->has('loc'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('loc') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                     <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Choose Amenities</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <button type="button" class="btn btn-primary waves-effect form-control " data-toggle="modal" data-target="#large-Modal" style="margin: 10px">Choose Amenities </button>
                                        </div>

                                    </div>
                                    <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-lg" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Choose Amenities</h4>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>

                                                    <div class="modal-body">

                                                        <div class="row form-group">
                                                            @foreach($icon as $row)
                                                            <div class="col-sm-3">

                                                            <div class="col-sm-12">
                                                                <input type="checkbox" name="icon[]" value="{{$row->id}}">   <img src="{{asset('img/'.$row->code)}}" width="20px" height="20px">({{$row->name_en}})<br>
                                                                @if ($errors->has('icon'))
                                                                    <span class="help-block">
                                            <strong>{{ $errors->first('icon') }}</strong>
                                        </span>
                                                                @endif
                                                            </div>
                                                            </div>
                                                                @endforeach
                                                        </div>





                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>

                                                    </div>

                                            </div>
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