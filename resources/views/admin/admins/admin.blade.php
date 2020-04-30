@extends('admin.layouts.includes.admin_lay')
@section('content')
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>  Admins Table</h4>
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




                        <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#large-Modal" style="margin: 10px">Add New Admin</button>
                        <div class="modal fade" id="large-Modal" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add New Admin</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form  method="post" action="{{url('/gs_admin/add_admin')}}" enctype="multipart/form-data">
                                        <div class="modal-body">

                                            {{csrf_field()}}
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Name</label>
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
                                                    <label class="col-form-label">Email</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control autonumber"  name="email" data-a-sign="Name">
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Password</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control autonumber"  name="password" data-a-sign="Name">
                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Password_confirmation</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control autonumber"  name="password_confirmation" data-a-sign="Name">
                                                    @if ($errors->has('password_confirmation'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-sm-3">
                                                    <label class="col-form-label">Roles</label>
                                                </div>
                                                <div class="col-sm-9">
                                                    <select type="text" class="form-control autonumber"  name="role" data-a-sign="Name">
                                                        <option value="0">Manager</option>
                                                        <option value="1">Staff</option>
                                                        <option value="2">Data Entry</option>


                                                    </select>
                                                    @if ($errors->has('role'))
                                                        <span class="help-block">
                                            <strong>{{ $errors->first('role') }}</strong>
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

                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h5>Admins</h5>

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
                                            <th>Name</th>
                                            <th>E_mail</th>
                                            <th>Image</th>
                                            <th>Role</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user as $row)
                                            <tr>
                                                <td>{{$row->name}}</td>
                                                <td>{{$row->email}}</td>
                                                <td>
                                                    @if($row->image==!null)
                                                    <img src="{{asset('img/'.$row->image)}}" width="100px" height="100px">
                                                        @else
                                                        <img src="{{asset('admin/assets/images/avatar-1.png')}}" width="100px" height="100px" style="margin-left: 20%;">
                                                        @endif
                                                </td>

                                                <td>
                                                    @if($row->roles==0)
                                                        <h6>Manager</h6>
                                                    @elseif($row->roles==1)
                                                        <h6>Staff</h6>
                                                        @else
                                                        <h6>Data Entry</h6>
                                                    @endif
                                                </td>

                                                <td>


                                                    <button type="button" class="btn btn-primary waves-effect" data-toggle="modal" data-target="#min-Modal{{$row->id}}" style="margin: 10px">Edit</button>
                                                    <div class="modal fade" id="min-Modal{{$row->id}}" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Edit {{$row->name}}</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <form  method="post" action="{{url('/gs_admin/up_admin/'.$row->id)}}" enctype="multipart/form-data">
                                                                    <div class="modal-body">

                                                                        {{csrf_field()}}
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label">Name</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control autonumber"  name="name" value="{{$row->name}}" data-a-sign="Name">
                                                                                @if ($errors->has('name'))
                                                                                    <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label">Email</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control autonumber"  name="email"  value="{{$row->email}}"data-a-sign="Name">
                                                                                @if ($errors->has('email'))
                                                                                    <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                        
                                       



                                                                        <div class="row form-group">
                                                                            <div class="col-sm-3">
                                                                                <label class="col-form-label">Roles</label>
                                                                            </div>
                                                                            <div class="col-sm-9">
                                                                                <select type="text" class="form-control autonumber"  name="role" data-a-sign="Name">
                                                                                    @if($row->roles==0)
                                                                                        <option value="0" selected>Manager</option>
                                                                                    @elseif($row->roles==1)
                                                                                        <option value="1" selected>Staff</option>
                                                                                    @else
                                                                                        <option value="2" selected>Data Entry</option>
                                                                                    @endif
                                                                                    <option value="0">Manager</option>
                                                                                    <option value="1">Staff</option>
                                                                                    <option value="2">Data Entry</option>


                                                                                </select>
                                                                                @if ($errors->has('role'))
                                                                                    <span class="help-block">
                                            <strong>{{ $errors->first('role') }}</strong>
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



                                                </td>
                                                <td><a href="{{url('/gs_admin/del_admin/'.$row->id)}}" class="btn btn-danger">Delete</a> </td>
                                            </tr>
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

            {{$user->links()}}
            <div id="styleSelector"></div>
        </div>

    </div>
    </div>


@stop