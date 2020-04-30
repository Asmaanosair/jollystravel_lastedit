@extends('admin.layouts.includes.admin_lay')
@section('content')
    <style>
        .btn {
            border-radius: 2px;
            text-transform: capitalize;
            font-size: 12px;
            padding: 7px 9px;
            font-family: 'Open Sans';
        }
    </style>
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


                    <div class="page-body">



                        <a  href="{{url('/gs_admin/c_program')}}" class="btn btn-primary waves-effect"  style="margin: 10px">Add New Program</a>

                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h5>Programs</h5>

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
                                            <!--<th>Price</th>-->
                                            <th>Image</th>

                                            <th>Show All images</th>
                                            <th>Active</th>
                                          
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                  @foreach($prog as $row1)
                                        <tr>
                                            <td>{{$row1->name_en}}</td>

                                           

                                            <td><img src="{{asset('img/'.$row1->m_img)}}" width="100px" height="100px"></td>

                                            <td>   <button type="button" class="btn btn-primary waves-effect sweet" data-toggle="modal" data-target="#large-Modal{{$row1->id}}" style="margin: 10px">Show images </button>

                                                <div class="modal fade" id="large-Modal{{$row1->id}}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Add New image</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            @php(
                                                            $img=\App\program_img::all()->where('sub_program_id',$row1->id)
                                                            )
                                                            @if($img==null)
                                                                @else
                                                                <div class="container">
                                                                <div class="row">
                                                                @foreach($img as $row)
                                                                    <div class="col-lg-3"> <img style="width: 100%;" src="{{asset('img/'.$row->img)}}" height="200px">
                                                                        <br><a href="{{url('/gs_admin/del_img/'.$row->id)}}"class="btn btn-danger col-lg-12">delete</a></div>
                                                                @endforeach
                                                                </div>
                                                        </div>
                                                            @endif

                                                            <form  method="post" action="{{url('/gs_admin/add_img/'.$row1->id)}}" enctype="multipart/form-data">
                                                                <div class="modal-body">

                                                                    {{csrf_field()}}

                                                                    <div class="row form-group">
                                                                        <div class="col-sm-3">
                                                                            <label class="col-form-label">Image</label>
                                                                        </div>
                                                                        <div class="col-sm-9">
                                                                            <input type="file"  class="form-control autonumber" name="image[]"  data-a-sign="Name" multiple>
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
                                            <td>
                                                @if($row1->active==0)
                                                    <a href="{{url('/gs_admin/active_program/'.$row1->id)}}"class="btn btn-default col-lg-12">Not Active</a>
                                                    @else
                                                    <a href="{{url('/gs_admin/not_active_program/'.$row1->id)}}"class="btn btn-success col-lg-12"> Active</a>
                                                @endif
                                            </td>
                                    
                                            <td><a  href="{{url('/gs_admin/e_program/'.$row1->id)}}"class="btn btn-success">Edit</a></td>
                                            <td><a href="{{url('/gs_admin/del_program/'.$row1->id)}}" class="btn btn-danger">Delete</a> </td>

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

{{$prog->links()}}
            <div id="styleSelector"></div>
        </div>

    </div>
    </div>


@stop