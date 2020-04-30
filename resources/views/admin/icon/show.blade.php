@extends('admin.layouts.includes.admin_lay')

@section('content')
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>  Icon Table</h4>
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



                         <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#large-Modal" style="margin: 10px">Add New Icon</button>
                        <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Icon</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form  method="post" action="{{url('/gs_admin/add_icon')}}" enctype="multipart/form-data">
                                        <div class="modal-body">

                                              {{csrf_field()}}
                                                        <div class="form-group">
                                                            Name_en
                                                            <input class="form-control" type="text"  name="name_en"  >
                                                        </div>
                                                            @if ($errors->has('name_en'))
                                                                <span class="help-block text-danger">
                                                        <strong>{{ $errors->first('name_en') }}</strong>
                                        </span>
                                                @endif
                                            <div class="form-group">
                                                Name_fr
                                                <input class="form-control" type="text" name="name_fr" >
                                            </div>
                                                @if ($errors->has('name_fr'))
                                                    <span class="help-block text-danger">
                                            <strong>{{ $errors->first('name_fr') }}</strong>
                                        </span>
                                                @endif
                                            <div class="form-group">
                                                Name_de
                                                <input class="form-control" type="text" name="name_de"  >
                                            </div>
                                                @if ($errors->has('name_de'))
                                                    <span class="help-block text-danger">
                                            <strong>{{ $errors->first('name_de') }}</strong>
                                        </span>
                                                @endif
                                            <div class="form-group">
                                                Name_es
                                                <input class="form-control" type="text" name="name_es" >
                                            </div>
                                                @if ($errors->has('name_es'))
                                                    <span class="help-block text-danger">
                                            <strong>{{ $errors->first('name_es') }}</strong>
                                        </span>
                                                @endif
                                            <div class="form-group">
                                                Name_it
                                                <input class="form-control" type="text"  name="name_it" >
                                            </div>
                                                @if ($errors->has('name_it'))
                                                    <span class="help-block text-danger">
                                            <strong>{{ $errors->first('name_it') }}</strong>
                                        </span>
                                                @endif

                                           

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
                        <div class="card">
                            <div class="card-header">
                                <h5>Amenities</h5>

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
                                            <th>Name_en</th>
                                            <th>Name_de</th>
                                            <th>Name_fr</th>
                                            <th>Name_it</th>
                                            <th>Name_es</th>
                                            <th>Icon</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($icon as $row)
                                            <form  method="post" action="{{url('/gs_admin/up_icon/'.$row->id)}}" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row->name_en}}"  name="name_en" data-a-sign="Name">
                                                        @if ($errors->has('name_en'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('name_en') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row->name_de}}"  name="name_de" data-a-sign="Name">
                                                        @if ($errors->has('name_de'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('name_de') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>




                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row->name_fr}}"  name="name_fr" data-a-sign="Name">
                                                        @if ($errors->has('name_fr'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('name_fr') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>



                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row->name_it}}"  name="name_it" data-a-sign="Name">
                                                        @if ($errors->has('name_it'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('name_it') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>


                                                    <td>
                                                        <input type="text" class="form-control autonumber" value="{{$row->name_es}}"  name="name_es" data-a-sign="Name">
                                                        @if ($errors->has('name_es'))
                                                            <span class="help-block">
                                            <strong>{{ $errors->first('name_es') }}</strong>
                                        </span>
                                                        @endif

                                                    </td>

                                                    <td>
                                                       <img src="{{asset('img/'.$row->code)}}" width="20px" height="20px">

                                                    <input type="file"  class="form-control autonumber" name="image"  data-a-sign="Name">
                                                    @if ($errors->has('image'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                                    @endif



                                                    </td>
                                                    <td>   <button type="submit" class="btn btn-primary waves-effect waves-light "><i class="fa fa-edit"></i> </button></td>
                                                    <td><a href="{{url('/gs_admin/del_icon/'.$row->id)}}" class=" btn btn-danger"><i class="fa fa-trash"></i></a> </td>
                                                </tr>
                                            </form>
                                        @endforeach

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