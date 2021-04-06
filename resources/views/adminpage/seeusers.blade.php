<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>

	<!-- BOOTSTRAP STYLES-->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="{{asset('assets/css/font-awesome.css')}}" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

  <style type="text/css">
    .sh{

      color:black;
      box-sizing: content-box;
      width: 30%;
      border: solid #5B6DCD 3px;
      padding: 5px;

    }

  </style>
<body>





@include('adminpage.navi')

        <div id="page-wrapper" >
            <div id="page-inner">
            @<?php foreach ($user as $key => $user): ?>
<div class="sh">
  <h1>{{$user->username}}</h1>
</div>
            <?php endforeach; ?>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">


             <div class="row">@include('adminpage.clock')
                <div class="col-lg-12" >
                   <p style="text-align: center">Design by: <a href="#" style="color:#fff;" target="_blank">MD.Mushfiqur Rahman Rifat</a></p>
                </div>
        </div>
        </div>


     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{asset('assets/js/jquery-1.10.2.js')}}')}}')}}"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}')}}"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{asset('assets/js/custom.js')}}"></script>

</body>
</html>
