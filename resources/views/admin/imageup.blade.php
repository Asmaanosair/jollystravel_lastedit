<!DOCTYPE html>
<html lang="en">
    
<head>
       <title>Jolleys travel World |Dashboard</title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>.

    <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Phoenixcoded">
    <meta name="keywords" content=", Flat ui, Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Phoenixcoded">
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('website/assets/images/Jolleys Travel logo_v copy 2.png')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/icofont/css/icofont.css')}}">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/flag-icon/flag-icon.min.css')}}">
    <!-- Menu-Search css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/menu-search/css/component.css')}}">
    <!-- Horizontal-Timeline css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/dashboard/horizontal-timeline/css/style.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/dashboard/amchart/css/amchart.css')}}">
    <!-- flag icon framework css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/pages/flag-icon/flag-icon.min.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}">
    <!--color css-->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/linearicons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/simple-line-icons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/ionicons.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/jquery.mCustomScrollbar.css')}}">
    <script src="https://cdn.ckeditor.com/4.9.2/full/ckeditor.js"></script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/themify-icons/themify-icons.css')}}">
</head>
<body>
        <form role="form" action="{{url('gs_admin/upload/article_img')}}" method="post" enctype="multipart/form-data" >
                {{csrf_field()}}
                <div class="box-body">
                
                    <div class="form-group">
                        <label for="exampleInputPassword1" dir="rtl"> Image </label>
                        <input name="image" type='file' >
                                @if ($errors->has('image'))
                            <span class="help-block">
                                            <strong>{{ $errors->first('image') }}</strong>
                                        </span>
                        @endif                                     
                                                            
                      
                    </div>


                    <div class="modal-footer">
          
                        <button type="submit" class="btn btn-success text-black">Save Image</button>
                    </div>

                </div>
            </form>
         
            @if(isset($filname1))
            
        <img src="{{asset('img/'.$filname1)}}" alt="" />
        <input id="imagess" type='text' value="{{asset('img/'.$filname1)}}" style="width:700px">

             @else
                          
    @endif
    <!--<button onclick="returnFileUrl()">Select File</button>-->
</body>
</html>

