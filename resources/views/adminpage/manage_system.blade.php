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
              <table class="table table-hover table-striped">
                <tr>
                  <th>Username</th>
                  <th>Tax_id</th>
                  <th>Phone_no</th>

                  <th>Action</th>
                </tr>
                <?php foreach ($user as $key => $user): ?>
                <tr>
                  <td>{{$user->username}}</td>
                <td>{{$user->Tax_id}}</td>
                <td>{{$user->phone_no}}</td>
                <td>



                  <a href="{{route('admin.manage.update',$user->Tax_id)}}" class="btn btn-success">Update</a>


                  <form method="POST" action="{{route('admin.delete.information',$user->Tax_id)}}">
                    <button type="submit" class="btn btn-danger">
                        {{ __('Delete') }}
                    </button>
                  </form>

<!-- Delete Modal -->

                 <!-- <div class="modal fade" id="deleteModal{{$user->Tax_id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                  <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Are you sure to delete???</h5>
                  <button type="button" class="close" data-dismiss="modal"aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                  </button>

                </div>
               <div class="modal-body">


              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-primary" >Save changes</button>
               </div>
                </div>
                </div> -->

          <!-- end  delete-modal -->

                </td>
                </tr>
                <?php endforeach; ?>
              </table>
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
