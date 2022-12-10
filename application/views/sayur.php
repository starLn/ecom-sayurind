<section class="section products">
    <div class="products-layout container">
      <div class="col-1-of-4">
        <div>
          <div class="block-title">
            <h3>Kategori</h3>
          </div>

          <ul class="block-content">
          <li><a href="http://localhost/sayurind/index.php/kategori/all">1. Semua</a></li>

          <li><a href="http://localhost/sayurind/index.php/kategori/sayuran">2. Sayuran</a></li>

          <li><a href="http://localhost/sayurind/index.php/kategori/buah">3. Buah-buahan</a></li>

          <li><a href="http://localhost/sayurind/index.php/kategori/lainnya">4. Lainnya</a></li>

          </ul>
        </div>  
      </div>
    <div class="col-3-of-4">
      <div class="swiper-container slider-2">
        <div class="swiper-wrapper">
        <?php foreach ($sayuran as $brg):?>
          <div class="swiper-slide">
            <div class="product">
              <div class="img-container">
              <img src="<?php echo base_url().'/uploads/'.$brg->gambar;?>" class="card-img-top" alt="...">
                <div class="addCart">
                <?php echo anchor('Home/tambah_keranjang/'.$brg->id_brg,'<div class="fas fa-shopping-cart"></div>');?><i class=""></i>
                </div>
              </div>
              <div class="bottom">
              <h5 class="card-title mb-1"><a href="productDetails.html"><?php echo $brg->nama_brg;?></a></h5>
              <small><?php echo $brg->keterangan;?></small><br/><br/>
                <div class="price">
                <span class="badge badge-pill badge-info mb-3">Rp<?php echo number_format($brg->harga,0,',','.');?></span>
                </div>
              </div>
              <?php endforeach;?>
            </div>
          </div>
        </div>
        </div>
        </div>
      </div>
    </div>
  </section>

    </div>
  </section>