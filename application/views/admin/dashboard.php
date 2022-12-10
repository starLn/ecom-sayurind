<!DOCTYPE html>
<html lang="en">

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SayurInd. | Admin</title>

    <!-- Bootstrap -->
     <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url();?>assets/view_user/images/icon1.png"/>
    <link href="<?php echo base_url();?>assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>assets/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url();?>assets/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo base_url();?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/admin/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="http://localhost/sayurind/index.php/admin/dashboard" class="site_title"><img src="<?php echo base_url();?>assets/view_user/images/admin.png" alt=""><span>SayurInd.</span></a>
            </div>

            <div class="clearfix"></div>

           

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  <li><a href="http://localhost/sayurind/index.php/admin/data_barang/index"><i class="fa fa-cubes"></i> Barang</a>
          
                  </li>
                  <li><a href="http://localhost/sayurind/index.php/admin/transaksi/index"><i class="fa fa-dollar"></i> Transaksi</a>
                  </li>
                  </br>
                  </br>
                  </br>
                  </br>
                  </br>
                  </br>
                  </br>
                  </br>
                  </br>
                  </br>
                  </br>
                  </br>
                  </br>
                  </br>
                  </br>
                  </br>
                  <li><a href="http://localhost/sayurind/index.php/auth/login"><i class="fa fa-power-off"></i> Logout</a>
                  </li>
                </ul>
              </div>
             
            </div>
            <!-- /sidebar menu -->

          
          </div>
        </div>

        <!-- top navigation -->
         <!-- top navigation -->
         <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
               
                    
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile " aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="<?php echo base_url();?>assets/admin/images/img.jpg" alt="">
                    </a>
                  </li>
                 
              <?php if($this->session->userdata('username')){;?>
              <li>
                <b>Selamat Datang : <?php echo $this->session->userdata('username');?></b>
              </li>
            
              <li>
                <?php echo anchor('auth/logout','<i class="fa fa-sign-out-alt ml-2"></i>');?>
              </li>
                <?php }else{ ;?>
                  <li>
                    <?php echo anchor('auth/login','<i class="fa fa-user text-secondary mr-2"></i>Login');?>
                  </li>
                  <?php } ;?>
          
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
     
            <div class=" top_tiles" style="margin: 10px 0;">
              
             
             
           
             
             <!-- Earnings (Monthly) Card Example -->
             <div class="mt-3 col-xl-6 col-md-7 mb-6">
                 <div class="card border-left-success shadow h-100 py-2">
                     <div class="card-body">
                         <div class="row no-gutters align-items-center">
                             <div class="col mr-9">
                                 <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Sayuran</div>
                                 <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $a;?></div>
                             </div>
                             <div class="col-auto">
                                 <i class="fa fa-database fa-2x text-gray-300"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
                      
             <!-- Earnings (Monthly) Card Example -->
             <div class="mt-3 col-xl-6 col-md-7 mb-6">
                 <div class="card border-left-warning shadow h-100 py-2">
                     <div class="card-body">
                         <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Buah-buahan</div>
                                 <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $b;?></div>
                             </div>
                             <div class="col-auto">
                                 <i class="fa fa-database fa-2x text-gray-300"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
     
             <!-- Earnings (Monthly) Card Example -->
             <div class="mt-3 col-xl-6 col-md-7 mb-6">
                 <div class="card border-left-info shadow h-100 py-2">
                     <div class="card-body">
                         <div class="row no-gutters align-items-center">
                             <div class="col mr-2">
                                 <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Lainnya</div>
                                 <div class="row no-gutters align-items-center">
                                     <div class="col-auto">
                                         <div class="h5 mb-0 font-weight-bold text-gray-800">&nbsp;&nbsp;<?php echo $c;?></div>
                                     </div> 
                                 </div>
                             </div>
                             <div class="col-auto">
                                 <i class="fa fa-database fa-2x text-gray-300"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
     
             <!-- Pending Requests Card Example -->
            
            </div>
          </div>
         
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            SayurInd. by<a href="#">Novita</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?php echo base_url();?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="<?php echo base_url();?>assets/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url();?>assets/admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo base_url();?>assets/admin/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo base_url();?>assets/admin/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="<?php echo base_url();?>assets/admin/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- morris.js -->
    <script src="<?php echo base_url();?>assets/admin/vendors/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendors/morris.js/morris.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo base_url();?>assets/admin/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo base_url();?>assets/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo base_url();?>assets/admin/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo base_url();?>assets/admin/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo base_url();?>assets/admin/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo base_url();?>assets/admin/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url();?>assets/admin/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url();?>assets/admin/build/js/custom.min.js"></script>

  </body>
</html>