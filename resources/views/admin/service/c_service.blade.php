@extends('admin.layouts.includes.admin_lay')

@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(document).ready(function(){
            $("#hide").click(function(){
                $("#hh").hide();
            });
            $("#show").click(function(){
                $("#hh").show();
            });
        });
    </script>
    <script>
        $( function() {
            $( ".datepicker" ).datepicker();
        } );
    </script>

    <div class="pcoded-inner-content">

        @include('sweet::alert')
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>  Service </h4>

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

                                <form  method="post" action="{{url('/gs_admin/add_service')}}" enctype="multipart/form-data">


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
                                            <label class="col-form-label">Nights</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber"  name="room_en" data-a-sign="Name">
                                            @if ($errors->has('room_en'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('room_en') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Nights_DE</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber"  name="room_de" data-a-sign="Name">
                                            @if ($errors->has('room_de'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('room_de') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Nights_IT</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber"  name="room_it" data-a-sign="Name">
                                            @if ($errors->has('room_it'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('room_it') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Nights_ES</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber"  name="room_es" data-a-sign="Name">
                                            @if ($errors->has('room_es'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('room_es') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>


                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Nights_FR</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" name="room_fr"  data-a-sign="Name">
                                            @if ($errors->has('room_fr'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('room_fr') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Sale</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber" name="sale"  data-a-sign="Name">
                                            @if ($errors->has('sale'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('sale') }}</strong>
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
                                            <label class="col-form-label">Active</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select type="text" class="form-control "  name="active" data-a-sign="Name">

                                                    <option value="0" class="form-control-danger" >Not Active</option>
                                                <option value="1" class="form-control-success" > Active</option>


                                            </select>
                                            @if ($errors->has('active'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('active') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Add to hot offers</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select type="text" class="form-control "   name="offer" id="has_offer"  data-a-sign="Name">

                                                <option value="0" class="form-control-danger" >No</option>
                                                <option value="1" class="form-control-success" >Yes</option>


                                            </select>
                                            @if ($errors->has('admin'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('admin') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

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
                                    
                                         <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Max Guests</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber"  name="guest" data-a-sign="Name">
                                            @if ($errors->has('guest'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('guest') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                   

                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Video Link</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control autonumber"  name="link" data-a-sign="Name">
                                            @if ($errors->has('link'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('link') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label"> Program</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select type="text" class="form-control autonumber"  name="prog" data-a-sign="Name">
                                                @foreach($prog as $row)
                                                    <option value="{{$row->id}}">{{$row->name_en}}</option>
                                                @endforeach

                                            </select>
                                            @if ($errors->has('prog'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('prog') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Admin Of Services</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <select type="text" class="form-control autonumber"  name="admin" data-a-sign="Name">
                                                @foreach($admin as $row)
                                                    <option value="{{$row->id}}">{{$row->name}}</option>
                                                @endforeach

                                            </select>
                                            @if ($errors->has('admin'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('admin') }}</strong>
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
                                    
                                        <div class="row form-group">
                                        <div class="col-sm-3">
                                            <label class="col-form-label">Other Images</label>
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="file"  class="form-control autonumber" name="images[]"  data-a-sign="Name" multiple>
                                            @if ($errors->has('images'))
                                                <span class="help-block">
                                                                         <strong>{{ $errors->first('images') }}</strong>
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
  <script>

                                       var has_offer = $("#has_offer").val();
                                       if (has_offer == "1") {
                                           $("#start").show();
                                           $("#end").show();
                                       } else {
                                           $("#start").hide();
                                           $("#end").hide();
                                       }

                                       $("#has_offer").change(function () {

                                           has_offer = $("#has_offer").val();
                                           if (has_offer == "1") {
                                               $("#start").show();
                                               $("#end").show();
                                           } else {
                                               $("#start").hide();
                                               $("#end").hide();
                                           }
                                       });
                                   </script>


                                    <script type="text/javascript">


                                        $(document).ready(function() {


                                            $(".add-more").click(function(){
                                                var html = $(".copy").html();
                                                $(".after-add-more").after(html);
                                            });


                                            $("body").on("click",".remove",function(){
                                                $(this).parents(".control-group").remove();
                                            });


                                        });


                                    </script>



@stop