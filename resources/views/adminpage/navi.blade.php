<div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="images/hk.jpg" />
                    </a>
                </div>

                <span class="logout-spn">
                  <p style="font-size: 40px;color: white">TOTO Car Company , Khulna
                </span>

                 <span class="logout-spn" >
                  <a href='/' style="color:#fff;">LOGOUT</a>

                </span>
            </div>
        </div>


        <!-- /. NAV TOP  -->

        <!-- /. NAV SIDE  -->



<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">


                       <li >
                        <a href={{route('admin')}} ><i class="fa fa-desktop "></i>Admin <span class="badge">Included</span></a>
                        <ul>
                            <li><a href={{route('admin.addusers')}} > Add users</a></li>
                            <li><a href= {{route('admin.seeusers')}}>See Users</a></li>
                            <li><a href= {{route('admin.manage')}}> Manage System</a></li>
                            <li><a href="seeComment.php" > Comment Box</a></li>
                            <li><a href="seeNotice.php" > Notice Board</a></li>
                            <li><a href="seeOnline.php" >Orders</a></li>


                        </ul>
                    </li>



                   <li>
                        <a href="blank.php"><i class="fa fa-edit "></i>Add Notice</a>
                    </li>

                    <!-- <li>
                        <a href="addins.php"><i class="fa fa-edit "></i>Add Instructors</a>
                    </li> -->
                    <li>
                        <a href="addimg.php"><i class="fa fa-edit "></i>Add Image of new Car</a>
                    </li>

                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
