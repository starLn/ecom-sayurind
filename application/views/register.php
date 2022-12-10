<!-- / Bootstrap Core -->	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- / FontAwesome -->	
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- / Custom style -->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/view_akses/css/style.css">
	<!-- / Alert style -->	
	<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
	
<main>
	<div class="form-main-container">
		<div class="form-wrapper">
			<div class="form-header">
				<span class="form-title">
                </br>
				</br>Sign up to <strong>SayurInd.</strong>
				</span>
			</div>

			<form method="post" action="<?php echo base_url('registrasi/registration');?> "class="form-content">
				<div class="input-wrapper">
					<input class="input-style" id="nama"type="text" name="nama" placeholder="Nama lengkap" required>
					<?php echo form_error('nama','<div class="text-danger small ml-2">','</div>');?>
					<span class="input-style-focus"></span>
				</div>
				<div class="input-wrapper">
					<input class="input-style" id="username"type="text" name="username" placeholder="Username" required>
					<?php echo form_error('username','<div class="text-danger small ml-2">','</div>');?>
					<span class="input-style-focus"></span>
				</div>
				<div class="input-wrapper">
					<div class="input-group">
						<input class="form-control" id="password_1" type="password" name="password_1" placeholder="Password" id="password" required>
						<?php echo form_error('password_1','<div class="text-danger small ml-2">','</div>');?>
						<span class="form-control-focus"></span>
						<div class="input-group-addon" onclick="passwordVisibility();">
							<i class="fa fa-eye" id="showPass"></i>
							<i class="fa fa-eye-slash d-none" id="hidePass"></i>
						</div>
					</div>
				</div>
				
				<div class="input-wrapper">
					<input class="form-control" id="password_2"type="password"  name="password_2" placeholder="Repeat Password" id="repeatPassword" required>
					<span class="input-style-focus"></span>
				</div>
				
				
			 
				<button class="button-style w-100" id="tombol" onclick="Swal.fire({
  position: 'top-end',
  icon: 'success',
  title: 'Your work has been saved',
  showConfirmButton: true,
  timer: 4500
})">
					Submit
				</button>
				<script src="js/sweetalert2.all.min.js"></script>
				<p class="txt-style1 mt-5">Or <a class="txt-style2" href="<?php echo base_url(); ?>auth/login"><strong>Sign In!</strong></a></p>
			</form>
		</div>
	</div>
</main>

<script src="js/password-visibility.js"></script>


</body>
</html>