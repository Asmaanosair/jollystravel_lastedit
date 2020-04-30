@extends('admin.layouts.includes.admin_lay')

@section('content')
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>  Services Table</h4>

                    </div>
                    @include('sweet::alert')

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



                        <a  href="{{url('/gs_admin/c_service')}}" class="btn btn-primary waves-effect"  style="margin: 10px">Add New Service</a>

                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h5>Service</h5>

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
                                         
                                            <th>Price</th>
                                            <th> Edit Price</th>
                                             <th>Active</th>
                                            <th>Image</th>
                                            <th>Show All images</th>
                                            <th>Hot offer</th>
                                            
                                              <th>Show Details</th>
                                            <th>Add Details</th>
                                            <th>Edit</th>
                                            <th>Delte</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($prog as $row)
                                            <tr>
                                                <td>{{$row->name_en}}</td>
                                              
                                                <td>      <button type="button" class="btn btn-primary waves-effect sweet" data-toggle="modal" data-target="#large-Modalprice{{$row->id}}" style="margin: 10px"> Add Price </button>

                                                <div class="modal fade" id="large-Modalprice{{$row->id}}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Add New Price</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                       

                                                            <form  method="post" action="{{url('/gs_admin/add_level')}}" enctype="multipart/form-data">
                                                                <div class="modal-body">

                                                                    {{csrf_field()}}

                                                                    <div class="row form-group">
                                                                        <div class="col-sm-3">
                                                                            <label class="col-form-label">Room type</label>
                                                                        </div>
                                                                        <div class="col-sm-9">
                                                                             <input type="text"  class="form-control autonumber" name="id"  value="{{$row->id}}" data-a-sign="Name" hidden >
                                                                            <input type="text"  class="form-control autonumber" name="level"  data-a-sign="Name" >
                                                                            @if ($errors->has('level'))
                                                                                <span class="help-block">
                                                                         <strong>{{ $errors->first('level') }}</strong>
                                                                             </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    
                                                                    <div class="row form-group">
                                                                        <div class="col-sm-3">
                                                                            <label class="col-form-label"> Adult Price</label>
                                                                        </div>
                                                                        <div class="col-sm-9">
                                                                            <input type="text"  class="form-control autonumber" name="price"  data-a-sign="Name" >
                                                                            @if ($errors->has('price'))
                                                                                <span class="help-block">
                                                                         <strong>{{ $errors->first('price') }}</strong>
                                                                             </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    @foreach($child as $val)
                                                                     <div class="row form-group">
                                                                        <div class="col-sm-3">
                                                                            <label class="col-form-label">Child Price Age {{$val->age}}</label>
                                                                        </div>
                                                                        <div class="col-sm-9">
                                                                            <input type="text"  class="form-control autonumber" name="c_price[]"  data-a-sign="Name" >
                                                                             <input type="text"  class="form-control autonumber"  value="{{$val->id}}"name="child_id[]"  data-a-sign="Name" hidden >
                                                                            @if ($errors->has('price'))
                                                                                <span class="help-block">
                                                                         <strong>{{ $errors->first('price') }}</strong>
                                                                             </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
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
                                            
                                            
                                            <td>      <button type="button" class="btn btn-warning waves-effect sweet" data-toggle="modal" data-target="#large-Modaledit{{$row->id}}" style="margin: 10px"> Edit Price </button>

                                                <div class="modal fade" id="large-Modaledit{{$row->id}}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Price</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                      

                                                                <div class="modal-body">
                                                                          @php(
                                                            $level2=\App\program_l::where('sub_service_id',$row->id)->get()
                                                            )
                                                            @if(count($level2)==0)
                                                            @else
                                                                <div class="container">
                                                                    <div class="row">
                                                                        @foreach($level2 as $row2)
                                                                            <div class="col-lg-3">
                                                                                <form  method="post" action="{{url('/gs_admin/up_level/'.$row2->id)}}" enctype="multipart/form-data">
                                                                                    {{csrf_field()}}
                                                                                    
                                                                                    
                                                                       
                                                                                     <label class="col-form-label">Room type</label> <input type="text"  class="form-control autonumber" name="Level"  value="{{$row2->name}}" data-a-sign="Name" >
                                                                                         <input type="text"  class="form-control autonumber" name="id"  value="{{$row->id}}" data-a-sign="Name" hidden >
                                                                                    <label class="col-form-label">Adult Price</label><input type="text"  class="form-control autonumber" name="price"  value="{{$row2->price}}" data-a-sign="Name" >
                                                                                 @php(
                                                                               $child_price=\App\children_price_level::where('program_l_id',$row2->id)->get()
                                                                                 )
                                                            @if(count($child_price)==0)
                                                            @else
                                                             @foreach($child_price as $row3)
                                                             
                                                                               <label class="col-form-label">
                                                                                   
                                                                                                 @php(
                                                                               $child_age=\App\child::find($row3->child_id)
                                                                                 )
                                                            @if(count($child_age)==0)
                                                            @else
                                                                                   
                                                                                   
                                                                                   
                                                                                   child Price {{$child_age->age}}
                                                                                   
                                                                                   @endif
                                                                                   
                                                                                   </label><input type="text"  class="form-control autonumber" name="price"  value="{{$row3->price}}" data-a-sign="Name" >
                                                                              
                                                                                   <br>
                                                                                     @endforeach
                                                                                   @endif
                                                                                    <!--<button type="submit" class=" form-control btn btn-success  " >Edit</button>-->
                                                                                </form>
                                                                                <br><a href="{{url('/gs_admin/del_level/'.$row2->id)}}"class="btn btn-danger col-lg-12">delete</a>
                                                                                
                                                                                </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            @endif

                                                                  
                                                                    
                                                                    
                                                                  
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default waves-effect " data-dismiss="modal">Close</button>
                                                                  
                                                                </div>
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            
                                           
                                              <td>
                                                @if($row->active==0)
                                                    <a href="{{url('/gs_admin/active_service/'.$row->id)}}"class="btn btn-default col-lg-12">Not Active</a>
                                                    @else
                                                    <a href="{{url('/gs_admin/not_active_service/'.$row->id)}}"class="btn btn-success col-lg-12"> Active</a>
                                                @endif
                                            </td>


                                                <td><img src="{{asset('img/'.$row->m_img)}}" width="100px" height="100px"></td>
                                                   <td>   <button type="button" class="btn btn-primary waves-effect sweet" data-toggle="modal" data-target="#large-Modal{{$row->id}}" style="margin: 10px">Show images </button>

                                                <div class="modal fade" id="large-Modal{{$row->id}}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Add New image</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            @php(
                                                            $img=\App\service_img::all()->where('sub_service_id',$row->id)
                                                            )
                                                            @if($img==null)
                                                                @else
                                                                <div class="container">
                                                                <div class="row">
                                                                @foreach($img as $row2)
                                                                    <div class="col-lg-3"> <img style="width: 100%;" src="{{asset('img/'.$row2->img)}}" height="200px">
                                                                        <br><a href="{{url('/gs_admin/del_serv_img/'.$row2->id)}}"class="btn btn-danger col-lg-12">delete</a></div>
                                                                @endforeach
                                                                </div>
                                                        </div>
                                                            @endif

                                                            <form  method="post" action="{{url('/gs_admin/add_serv_img/'.$row->id)}}" enctype="multipart/form-data">
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
                                                
                                                <td> @if($row->hotoffer==0) <button type="button" class="btn btn-primary waves-effect sweet" data-toggle="modal" data-target="#small-Modal{{$row->id}}" style="margin: 10px">Add to hot offers </button>

                                                <div class="modal fade" id="small-Modal{{$row->id}}" tabindex="-1" role="dialog">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Add To Hot Offers</h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>

                                                            <form  method="post" action="{{url('/gs_admin/add_hot/'.$row->id)}}" enctype="multipart/form-data">
                                                                <div class="modal-body">

                                                                    {{csrf_field()}}

                                                                    <div class="row form-group" id="start">
                                                                        <div class="col-sm-3">
                                                                            <label class="col-form-label">Start Date</label>
                                                                        </div>
                                                                        <div class="col-sm-9">

                                                                            <input type="text" class="form-control autonumber datepicker"  name="start" data-a-sign="Name">
                                                                            @if ($errors->has('start'))
                                                                                <span class="help-block">
                                            <strong>{{ $errors->first('start') }}</strong>
                                        </span>
                                                                            @endif
                                                                        </div>
                                                                    </div>

                                                                    <div class="row form-group" id="end">
                                                                        <div class="col-sm-3">
                                                                            <label class="col-form-label">End Date</label>
                                                                        </div>
                                                                        <div class="col-sm-9">
                                                                            <input type="text" class="form-control autonumber datepicker"  name="end" data-a-sign="Name">
                                                                            @if ($errors->has('end'))
                                                                                <span class="help-block">
                                            <strong>{{ $errors->first('end') }}</strong>
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
                                                      @else
                                                    <a href="{{url('/gs_admin/rem_hot/'.$row->id)}}" class="btn btn-danger">Remove</a>
                                               
@endif

                                            </td>
                                            
                                               <td><a  href="{{url('/gs_admin/detail/'.$row->id)}}"class="btn btn-success">Show details</a></td>
                                                <td><a href="{{url('/gs_admin/c_detail/'.$row->id)}}" class="btn btn-warning">Add details</a> </td>
                                                <td><a  href="{{url('/gs_admin/e_service/'.$row->id)}}"class="btn btn-success">Edit</a></td>
                                                <td><a href="{{url('/gs_admin/del_service/'.$row->id)}}" class="btn btn-danger">Delete</a> </td>
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