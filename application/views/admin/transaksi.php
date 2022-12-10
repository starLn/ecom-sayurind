<!-- page content -->
<div class="right_col" role="main">

    <div class=" top_tiles" style="margin: 10px 0;">
    <div class="container-fluid">
    
    <h3><i class="fas fa-file-invoice-dollar"></i> Data Pemesanan</h3>
    <hr/>
    <table class="table table-bordered table-hover table-striped">
        <tr>
            <th>Id Invoice</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Bukti Pembayaran</th>
            <th>Status</th>
            <th>Ubah Status</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 0;
        foreach ($invoice as $inv) :
          $no++;
        ?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $inv->nama;?></td>
            <td><?php echo $inv->alamat;?></td>
            <td><?php echo $inv->tgl_pesan;?></td>
            <td><?php echo $inv->batas_bayar;?></td>
            <td><img src="<?php echo base_url().'/uploads/bukti/'.$inv->bukti;?>" width="50"></td>
            <td>
            <?php if ($inv->status == 'Pending') { ?>
            <span class="badge badge-info badge-ad">Pending</span>
            <?php } else if ($inv->status == 'Terima') { ?>
            <span class="badge badge-success badge-ad">Terima</span>
            <?php } else if ($inv->status == 'Tolak') { ?>
            <span class="badge badge-danger badge-ad">Tolak</span>
            <?php } ?>
            </td>
            <td><?php echo anchor('admin/transaksi/edit/'.$inv->id,'<div class="btn btn-warning btn-sm">Edit</div>');?></td>
            <td><?php echo anchor('admin/transaksi/detail/'.$inv->id,'<div class="btn btn-primary btn-sm">Detail</div>');?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>
    </div>
</div>
<!-- /page content -->
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
