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
  <title>SayurInd. | Healthy and Smart Farm</title>
</head>

<body>

  <!-- Navigation -->
  <nav class="nav">
    <div class="wrapper container">
      <div class="logo"><a href="http://localhost/sayurind/index.php/auth/home">
        <img src="<?php echo base_url();?>assets/view_user/images/logo1.png" alt="">
      </a>
      </div>
      <ul class="nav-list">
        <div class="top">
          <label for="" class="btn close-btn"><i class="fas fa-times"></i></label>
        </div>
        <li><a href="http://localhost/sayurind/index.php/auth/home">Home</a></li>
        <li><a href="http://localhost/sayurind/index.php/kategori/all">Produk</a></li>
        <li class="icons">
        <li>
        
        <?php 
          $keranjang='<i class="fas fa-shopping-cart text-success"></i> : '.$this->cart->total_items().' Items';
          echo anchor('auth/cart', $keranjang);  
        ?>
       
      </li>
        <!-- icons -->
        <li onclick="let timerInterval
Swal.fire({
  title: 'See You!',
  html: 'I will close in <b></b> milliseconds.',
  timer: 200000,
  timerProgressBar: true,
  didOpen: () => {
    Swal.showLoading()
    const b = Swal.getHtmlContainer().querySelector('b')
    timerInterval = setInterval(() => {
      b.textContent = Swal.getTimerLeft()
    }, 3)
  },
  willClose: () => {
    clearInterval(timerInterval)
  }
}).then((result) => {
  /* Read more about handling dismissals below */
  if (result.dismiss === Swal.DismissReason.timer) {
    console.log('That was a wonderful shopping!')
  }
})"><script src="<?php echo base_url();?>js/sweetalert2.all.min.js"></script><a href="<?php echo base_url();?>auth/logout_user">Logout</a></li>
      </ul>
      <label for="" class="btn open-btn"><i class="fas fa-bars"></i></label>
    </div>
  </nav>

  

</body>
</html>