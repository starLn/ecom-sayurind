<!-- page content -->
<div class="right_col" role="main">

    <div class=" top_tiles" style="margin: 10px 0;">
    <div class="container-fluid">
    <h3 class="mb-3"><i class="fa fa-cubes"></i> Data Barang</h3>
    <hr />
    <div class="row">
        <div class="col">
            <button class="btn btn-outline-info " data-toggle="modal" data-target="#tambahbarang"><i class="fa fa-plus"></i> Tambah Produk</button>
            <a href="<?php echo base_url() . 'admin/data_barang/cetakpdf'; ?>" class="btn btn-outline-secondary"><i class="fas fa-file-pdf fa-sm"></i> Export to PDF</a>
          
        </div>
        <div class="col">
            <?php echo form_open('admin/data_barang/cari'); ?>
            <div class="input-group">
                <input type="text" class="form-control" name="katakunci" placeholder="Ketik yang anda cari...">
                <div class="input-group-append">
                    <button class="btn btn-outline-warning" type="submit">Cari</button>
                </div>
            </div>
        <?php echo form_close(); ?>
        </div>
    </div>
    <table class="table table-bordered table-responsive-sm mt-2 table-hover">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="3">Aksi</th>
        </tr>
        <?php
        $nomor = 1;
        foreach ($barang as $brg) :
        ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $brg->nama_brg; ?></td>
                <td><?php echo $brg->keterangan; ?></td>
                <td><?php echo $brg->kategori; ?></td>
                <td><?php echo $brg->harga; ?></td>
                <td><?php echo $brg->stok; ?></td>
                <td><?php echo anchor('admin/data_barang/detail/' . $brg->id_brg, '<div class="btn btn-success btn-sm"><i class="fa fa-question"  title="Detail"></i></div>'); ?>

                </td>
                <td><?php echo anchor('admin/data_barang/edit/' . $brg->id_brg, '<div class="btn btn-primary btn-sm" title="Edit"><i class="fa fa-edit"></i></div>'); ?>

                </td>
                <td onclick="javascript:return confirm('Konfirmasi Hapus Produk ?');"><?php echo anchor('admin/data_barang/hapus/' . $brg->id_brg, '<div class="btn btn-danger btn-sm" title="Hapus"><i class="fa fa-trash"></i></div>'); ?>

                </td>
            </tr>
        <?php
            $nomor++;
        endforeach; ?>
    </table>
</div>
<!-- Modal -->
<div class="modal fade" id="tambahbarang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Produk</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url() . 'admin/data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="namabrg">Nama Barang</label>
                        <input type="text" class="form-control" name="nama_brg" required oninvalid="this.setCustomValidity('isi dulu nama produknya !')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="ket">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" required oninvalid="this.setCustomValidity('isi dulu deskripsi produknya !')" oninput="setCustomValidity('')">
                    </div>

                    <div class="form-group">
                        <label for="kat">Kategori</label>
                        <!--  <input type="text" class="form-control" name="kategori">-->
                        <select name="kategori" class="form-control">
                            <option value="sayuran">Sayuran</option>
                            <option value="buah">Buah-buahan</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="hrg">Harga</label>
                        <input type="number" class="form-control" name="harga" required oninvalid="this.setCustomValidity('isi dulu harga produknya !')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="stk">Stok</label>
                        <input type="number" class="form-control" name="stok" required oninvalid="this.setCustomValidity('isi dulu stok produknya !')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto Produk</label>
                        <input type="file" class="form-control" name="gambar_brg">
                    </div>

            </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-warning" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-success">Simpan Produk</button>
            </div>
            </form>
        </div>
    </div>
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
