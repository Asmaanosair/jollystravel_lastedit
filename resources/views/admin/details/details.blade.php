@extends('admin.layouts.includes.admin_lay')

@section('content')
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>  Details  Table</h4>
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


                        <a  href="{{url('/gs_admin/c_detail/')}}" class="btn btn-primary waves-effect"  style="margin: 10px">Add New Details</a>

                        <br>
                        <div class="card">
                            <div class="card-header">
                                <h5>Details</h5>

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
                                         

                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($prog as $row)
                                            <tr>
                                                <td>{{$row->name_en}}</td>
                                        


                                              
                                                <td><a  href="{{url('/gs_admin/e_detail/'.$row->id)}}"class="btn btn-success">Edit</a></td>
                                                <td><a href="{{url('/gs_admin/del_detail/'.$row->id)}}" class="btn btn-danger">Delete</a> </td>
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

      
            <div id="styleSelector"></div>
        </div>
<a  href="{{url('/gs_admin/service/')}}"class="btn btn-success">back to services</a>

    </div>
    </div>




@stop