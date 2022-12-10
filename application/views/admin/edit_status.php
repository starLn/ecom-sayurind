<!-- page content -->
<div class="right_col" role="main">

<div class=" top_tiles" style="margin: 10px 0;">
<div class="container-fluid">
    <h3 class="mb-3"><i class="fa fa-dollar"></i> Status Transaksi</h3>
    <?php foreach ($bayar as $byr) : ?>
        <form action="<?php echo base_url() . 'admin/transaksi/update' ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="kat">Status Transaksi</label>
                <input type="hidden" class="form-control" name="id" value="<?php echo $byr->id; ?>">
                <!-- <input type="text" class="form-control" name="kategori" value="<?php //echo $brg->kategori;
                                                                                    ?>">-->
                <select class="form-control" name="status">
                    <option <?php if ($byr->status == 'Pending') echo 'selected'; ?>> Pending</option>
                    <option <?php if ($byr->status == 'Tolak') echo 'selected'; ?>> Tolak</option>
                    <option <?php if ($byr->status == 'Terima') echo 'selected'; ?>> Terima</option>
                </select>
            </div>
            </div>

            <!-- <button type="reset" class="btn btn-danger">Reset</button>-->
            <input type="button" class="btn btn-warning" onclick="location.href='<?php echo base_url() . 'admin/transaksi'; ?>';" value="Batal" />
            <button type="submit" class="btn btn-success">Update</button>
            <!--</form>-->
        </form>
        <br/>
    <?php endforeach; ?>
    </div>
</div>
<!-- /page content -->