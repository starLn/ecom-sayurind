<html><head>
        <title>Laporan Data Transaksi</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head><body>
        <div class="container">
        <div class=jumbotron>
<h1 class="text-center">Laporan Data Produk</h1>
        <?php
        $timezone = new DateTimeZone('Asia/Jakarta');
        $date = new DateTime();
        $date->setTimeZone($timezone);
        echo 'Tanggal : ' . $date->format('d-m-Y'). ' , Jam : '.$date->format('H:i:s') ;
        ?>
        </div> 
        <div>
        <?php $this->session->userdata('username');?>
                <b>Oleh : <?php echo $this->session->userdata('username');?></b>
        </div>
         <table class="table table-bordered">
             <tr>
                <th>Id Invoice</th>
                <th>Nama Pemesan</th>
                <th>Alamat Pengiriman</th>
                <th>Tanggal Pemesanan</th>
                <th>Batas Pembayaran</th>
                <th>Bukti Pembayaran</th>
                <th>Aksi</th>
             </tr>
             <?php
                foreach ($invoice as $inv):
            ?>
        <tr>
            <td><?php echo $inv->id;?></td>
            <td><?php echo $inv->nama;?></td>
            <td><?php echo $inv->alamat;?></td>
            <td><?php echo $inv->tgl_pesan;?></td>
            <td><?php echo $inv->batas_bayar;?></td>
            <td><img src="<?php echo base_url().'/uploads/bukti/'.$inv->bukti;?>" width="50"></td>
            <td><?php echo anchor('admin/transaksi/detail/'.$inv->id,'<div class="btn btn-primary btn-sm">Detail</div>');?></td>
        </tr>
        <?php
            endforeach;
        ?>
         </table>
         </div>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body></html>