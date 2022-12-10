<!-- ======== Swiper Js ======= -->
<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css"
    />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/view_akses/css/style.css">

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.8/css/boxicons.min.css' rel='stylesheet'>
  <!-- Custom StyleSheet -->
  
<body>

  <!-- Navigation -->
 

  <div class="hero">
    <div class="row">
      <div class="swiper-container slider-1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="<?php echo base_url();?>assets/view_user/images/1.png" alt="" />
            <div class="content">
              <h1>Hemat dan Cepat
                <br/>
                mulai dari 
                <span>Rp10.000,00</span>
              </h1>
              <p>Kamu bisa mendapatkan beberapa sayur atau buah fresh yang berasal dari petani lokal
                yang telah terseleksi dalam proses produksinya, sehingga keamanan dan kesegaran produk terjaga.
              </p>

              <a href="http://localhost/sayurind/index.php/kategori/all">Belanja Sekarang</a>
            </div>
          </div>

          <div class="swiper-slide">
            <img src="<?php echo base_url();?>assets/view_user/images/2.png" alt="hero image" />
            <div class="content">
              <h1>Antar atau ambil sendiri
                <br/>
                <span>tidak ada tambahan biaya 
                  <br/>keduanya</span>
                di SayurInd.
              </h1> 
              </h1>
              <p>Jadi kamu dapat menentukan sendiri gaya belanjamu untuk memaksimalkan pengalaman berbelanja sayur dan buah di SayurInd.</p>
              <a href="http://localhost/sayurind/index.php/kategori/all">Belanja Sekarang</a>
            </div>
          </div>
          
          <div class="swiper-slide">
            <img src="<?php echo base_url();?>assets/view_user/images/3.png" alt="hero image" />
            <div class="content">
              <h1>Dapatkan 
                
                <span> tambahan produk <br/>setiap akhir bulan</span>
                <br/>di SayurInd.
              </h1>
              <p>Jadi kamu tidak perlu khawatir keuangan menipis di akhir bulan untuk mendapatkan ekstra sumber makanan yang sehat.</p>
              <a href="http://localhost/sayurind/index.php/kategori/all">Belanja Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Carousel Navigation -->
    <div class="arrows d-flex">
        <div class="swiper-prev d-flex">
          <i class="bx bx-chevrons-left swiper-icon"></i>
        </div>
        <div class="swiper-next d-flex">
          <i class="bx bx-chevrons-right swiper-icon"></i>
        </div>
    </div>
  </div>

  <!-- Promotion -->

  <section class="section promotion">
    <div class="title">
      <h2>Pilih Barang</h2>
      <span>Tentukan pilihan terbaikmu!</span>
      
    </div>
    

    <div class="promotion-layout container justify-content: center"> 

      <div class="promotion-item">
        <img src="<?php echo base_url();?>assets/view_user/images/promo2.jpg" alt="" />
        <div class="promotion-content">
          <h3>Buah-buahan</h3>
          <a href="http://localhost/sayurind/index.php/kategori/buah">Beli Sekarang</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="<?php echo base_url();?>assets/view_user/images/promo4.jpg" alt="" />
        <div class="promotion-content">
          <h3>Sayuran</h3>
          <a href="http://localhost/sayurind/index.php/kategori/sayuran">Beli Sekarang</a>
        </div>
      </div>

      <div class="promotion-item">
        <img src="<?php echo base_url();?>assets/view_user/images/promo5.jpg" alt="" />
        <div class="promotion-content">
          <h3>Lainnya</h3>
          <a href="http://localhost/sayurind/index.php/kategori/lainnya">Beli Sekarang</a>
        </div>
      </div>

      
    </div>
  </section>

  <!-- Featured -->
  <section class="section featured">
    <div class="title">
      <h2>Lengkapi kebutuhan sehat harianmu</h2>
      <span>Dengan berbelanja sayur dan buah fresh langsung dari petani lokal yang telah terseleksi.</span>
    </div>

    <div class="row container">
      <div class="swiper-container slider-2">
        <div class="swiper-wrapper">
        <?php foreach ($barang as $brg):?>
          <div class="swiper-slide">
            <div class="product">
              <div class="img-container">
              <img src="<?php echo base_url().'/uploads/'.$brg->gambar;?>" class="card-img-top" alt="...">
                <div class="addCart">
                <?php echo anchor('Home/tambah_keranjang/'.$brg->id_brg,'<div class="fas fa-shopping-cart"></div>');?><i class=""></i>
                </div>
              </div>
              <div class="bottom">
              <h5 class="card-title mb-1"><a href=""><?php echo $brg->nama_brg;?></a></h5>
              <small><?php echo $brg->keterangan;?></small><br/><br/>
              <?php echo anchor('detailproduk/products/'.$brg->id_brg,'<div class="btn btn-primary btn-sm">Lihat detail</div>');?>  
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

     <!-- Carousel Navigation -->
    
  </section>

  <!-- ======== SwiperJS ======= -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.js"></script>
  <!-- Custom Scripts -->
  <script src="<?php echo base_url();?>assets/view_user/js/slider.js"></script>
  <script src="<?php echo base_url();?>assets/view_user/js/index.js"></script>
</body>