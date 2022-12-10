
<body>

 <!-- Product Details -->
 <?php 
  foreach($prod as $prd):
  ?>
 <section class="section product-detail">
   <div class="details container">
     <div class="left">
       <div class="main" >
       <img src="<?php echo base_url().'/uploads/'.$prd->gambar;?>" alt="" />
       </div>
       <div class="thumbnails">
         <div class="thumbnail">
         <img src="<?php echo base_url().'/uploads/'.$prd->gambar;?>" alt="" />
      </div>
        <!-- <script>
          const zoom = document.getElementById("zoom");
          const img = document.querySelector("img");
          
          zoom.addEventListener("mousemove", (e) => {
            const x = e.clientX - e.target.offsetLeft;
            const y = e.clientY - e.target.offsetTop;

            console.log(x,y);

            img.style.transformOrigin = `${x}px ${y}px`;
            img.style.transform = "scale(2)"
          })

          zoom.addEventListener("mouseleave", () => {
            img.style.transformOrigin = "center";
            img.style.transform = "scale(1)"
          })
        </script> -->
       </div>
     </div>
     <div class="right">
       <span><?php echo $prd->kategori;?></span>
       <h1><strong><strong><?php echo $prd->nama_brg;?></strong></h1>
       <span>Stok: <?php echo $prd->stok;?>&nbsp|</span>
       <div class="price"><strong><div class="btn btn-info">Rp<?php echo number_format($prd->harga,0,',','.');?></div>&nbsp|</strong>
       <div class="addCart">
        <?php echo anchor('Home/tambah_keranjang/'.$prd->id_brg,'<div class="fas fa-shopping-cart"></div>');?><i class=""></i>
        </div>
      </div> 
       <h4>Kenapa Anda harus membelinya?</h4>
       <span>
       <?php echo $prd->keterangan;?>
       </span>
     </div>
   </div>
 </section>

 <!-- Related Products -->

 <?php endforeach; ?>

 

 <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.js"></script>
  <!-- Custom Scripts -->
  <script src="<?php echo base_url();?>assets/view_user/js/slider.js"></script>
  <script src="<?php echo base_url();?>assets/view_user/js/index.js"></script></body>
</body>