@extends('admin.layouts.includes.admin_lay')

@section('content')
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>  Partner Table</h4>
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



                        <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#large-Modal" style="margin: 10px">Add New Partner</button>
                        <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Partner</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form  method="post" action="{{url('/gs_admin/add_partner')}}" enctype="multipart/form-data">
                                        <div class="modal-body">

                                            {{csrf_field()}}
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Link</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control autonumber"  name="name" data-a-sign="Name">
                                                    @if ($errors->has('name'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
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
                        <div class="card">
                            <div class="card-header">
                                <h5>Partners</h5>

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
                                            <th>Link</th>
                                            <th>Image</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($prog as $row)
                                            <form  method="post" action="{{url('/gs_admin/up_partner/'.$row->id)}}" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control autonumber" value="{{$row->link}}"  name="name" data-a-sign="Name">
                                                    @if ($errors->has('name'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                                    @endif

                                                    </td>

                                                <td>
                                                    <img src="{{asset('img/'.$row->img)}}" width="100px" height="100px">

                                                    <input type="file"  class="form-control autonumber" name="image"  data-a-sign="Name">
                                                    @if ($errors->has('image'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                                                    @endif

                                                   </td>
                                                <td>   <button type="submit" class="btn btn-primary waves-effect waves-light ">Save changes</button></td>
                                                <td><a href="{{url('/gs_admin/del_partner/'.$row->id)}}" class="btn btn-danger">Delete</a> </td>
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

            {{$prog->links()}}
            <div id="styleSelector"></div>
        </div>


    </div>
    </div>




@stop