 <!-- Custom StyleSheet -->
 <link rel="stylesheet" href="<?php echo base_url();?>assets/view_user/styles.css" />
 <script src="<?php echo base_url();?>assets/admin/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <body>
 <!-- Cart Items -->
    <div class="container cart">

      <table>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Tanggal pesan</th>
          <th>Status</th>
          <?php
        $no = 0;
        foreach ($pesan as $sts) :
          $no++;
        ?>
        <tr>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $sts->nama;?></td>
            <td><?php echo $sts->tgl_pesan;?></td>
            <td>
            <?php if ($sts->status == 'Pending') { ?>
            <span style="background-color:yellow;">Pending</span>
            <?php } else if ($sts->status == 'Terima') { ?>
            <span style="background-color:aquamarine;">Terima</span>
            <?php } else if ($sts->status == 'Tolak') { ?>
            <span style="background-color:red;">Tolak</span>
            <?php } ?>
            </td>        
          </tr>
          
          <?php endforeach; ?>

        
      </table>

      
      </div>
     
    </div>

    <!-- Custom Scripts -->
    <script src="./js/index.js"></script>
    <script src="<?php echo base_url();?>assets/admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
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