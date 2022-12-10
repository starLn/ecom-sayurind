<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url();?>assets/view_user/images/icon1.png"/>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
 <!-- ======== Swiper Js ======= -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.css"
    />

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.0.8/css/boxicons.min.css' rel='stylesheet'>
  <!-- Custom StyleSheet -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/view_user/styles.css" />
  <title>SayurInd.</title>
</head>

<body>

  <!-- Navigation -->
  <nav class="nav">
    <div class="wrapper container">
      <div class="logo"><a href="">
        <img src="<?php echo base_url();?>assets/view_user/images/logo1.png" alt="">
      </a>
      </div>
      <ul class="nav-list">
        <div class="top">
          <label for="" class="btn close-btn"><i class="fas fa-times"></i></label>
        </div>
        <li><a href="http://localhost/sayurind/index.php/welcome">Home</a></li>
        <li><a href="http://localhost/sayurind/index.php/auth/login">Produk</a></li>
        <li><a href="http://localhost/sayurind/index.php/welcome/status">Status</a></li>

        
        <!-- icons -->
        
        <li class="icons">
        <li>
        
        <?php 
          $keranjang='<i class="fas fa-shopping-cart text-success"></i> : '.$this->cart->total_items().' Items';
          echo anchor('auth/login', $keranjang);  
        ?>
       
      </li>
          </span>
          
        </li>
        <li><a href="http://localhost/sayurind/index.php/auth/login">Login</a></li>
      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>

  

</body>
</html>