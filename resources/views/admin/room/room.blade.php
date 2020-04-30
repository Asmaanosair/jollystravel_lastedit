@extends('admin.layouts.includes.admin_lay')
@section('content')

    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>  Rooms Table</h4>
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



                        <a  href="{{url('/gs_admin/c_room')}}" class="btn btn-primary waves-effect"  style="margin: 10px">Add New Room</a>

                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h5>Rooms</h5>

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
                                            <th>Amenities</th>
                                            <th> Edit Amenities</th>

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
                                                                $img=\App\room_img::all()->where('room_id',$row1->id)
                                                                )
                                                                @if($img==null)
                                                                @else
                                                                    <div class="container">
                                                                        <div class="row">
                                                                            @foreach($img as $row)
                                                                                <div class="col-lg-3"> <img style="width: 100%;" src="{{asset('img/'.$row->img)}}" height="200px">
                                                                                    <br><a href="{{url('/gs_admin/del_room_img/'.$row->id)}}"class="btn btn-danger col-lg-12">delete</a></div>
                                                                            @endforeach
                                                                        </div>
                                                                    </div>
                                                                @endif

                                                                <form  method="post" action="{{url('/gs_admin/add_room_img/'.$row1->id)}}" enctype="multipart/form-data">
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
                                                <td>      <button type="button" class="btn btn-primary waves-effect sweet" data-toggle="modal" data-target="#large-Modalprice{{$row1->id}}" style="margin: 10px"> Add Amenities </button>

                                                    <div class="modal fade" id="large-Modalprice{{$row1->id}}" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Add New Amenities</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>


                                                                <form  method="post" action="{{url('/gs_admin/add_room_icon/'.$row1->id)}}" enctype="multipart/form-data">
                                                                    <div class="modal-body">

                                                                        {{csrf_field()}}

                                                                        <div class="row form-group">
                                                                            @foreach($icon as $row)
                                                                                <div class="col-sm-3">

                                                                                    <div class="col-sm-12">
                                                                                        <input type="checkbox" name="icon[]" value="{{$row->id}}">  <img src="{{asset('img/'.$row->code)}}" width="20px" height="20px"> ({{$row->name_en}})<br>
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
                                                                        <button type="submit" class="btn btn-primary waves-effect waves-light ">Save changes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>


                                                <td>      <button type="button" class="btn btn-warning waves-effect sweet" data-toggle="modal" data-target="#large-Modaledit{{$row1->id}}" style="margin: 10px"> Edit Amenities </button>

                                                    <div class="modal fade" id="large-Modaledit{{$row1->id}}" tabindex="-1" role="dialog">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title">Edit Amenities</h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>


                                                                <div class="modal-body">


                                                                        <div class="container">
                                                                            <div class="row">
                                                                                @php(
                                                                                $amin=explode(',',$row1->icon)

                                                                                )
                                                                                @foreach($amin as $key=>$val)
                                                                                @php(
                                                                                $aminate=\App\icon::find($val)
                                                                                )
                                                                                @if(isset($aminate))


                                                                                    <div class="col-lg-2">
                                                                                  <img src="{{asset('img/'.$aminate->code)}}" width="20px" height="20px">   ( {{$aminate->name_en}} )
                                                                                        <br><a href="{{url('/gs_admin/del_icon_room/'.$row1->id.'/'.$key)}}"class="btn btn-danger col-lg-12">delete</a>

                                                                                    </div>
                                                                                    @else
                                                                                    @endif
                                                                                    @endforeach

                                                                            </div>
                                                                        </div>






                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td><a  href="{{url('/gs_admin/e_room/'.$row1->id)}}"class="btn btn-success">Edit</a></td>
                                                <td><a href="{{url('/gs_admin/del_room/'.$row1->id)}}" class="btn btn-danger">Delete</a> </td>

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
@stop