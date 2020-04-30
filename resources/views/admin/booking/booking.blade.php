@extends('admin.layouts.includes.admin_lay')

@section('content')
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>  Booking Table</h4>
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


                        <!--<a  href="{{url('/gs_admin/c_new')}}" class="btn btn-primary waves-effect"  style="margin: 10px">Add New News</a>-->

                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h5>Booking</h5>

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
                                            <th>First Name</th>
                                           <th>last Name</th>
                                            <th>Email</th>
                                         
                                            <th>phone</th>
                                               <th>Country</th>
                                               <th>city</th>

                                            <th>Programme</th>
                                              
                                            <!--<th>Edit</th>-->
                                            <th>Delte</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($prog as $row)
                                            <tr>
                                                <td>{{$row->first_name}}</td>
                                                <td>{{$row->last_name}}</td>
                                                    <td>{{$row->email}}</td>
                                                       <td>{{$row->phone}}</td>
                                                          <td>{{$row->country}}</td>
                                                             <td>{{$row->city}}</td>
                                                                <td>{{$row->program_l_id}}</td>


                                                <!--<td><img src="{{asset('img/'.$row->m_img)}}" width="100px" height="100px"></td>-->
                                                <!--<td><a  href="{{url('/gs_admin/e_new/'.$row->id)}}"class="btn btn-success">Edit</a></td>-->
                                                <td><a href="{{url('/gs_admin/del_booking/'.$row->id)}}" class="btn btn-danger">Delete</a> </td>
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