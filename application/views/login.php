
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- / FontAwesome -->	
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!-- / Custom style -->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/view_akses/css/style.css">

	<!-- / Alert style -->	
	<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<body>
	
<main>
	<div class="form-main-container">
		<div class="form-wrapper">
			<div class="form-header">
				<span class="form-title">
				</br>
				</br>
				Login to <strong>SayurInd.</strong>
				</span>
			</div>
			<?php echo $this->session->flashdata('pesan'); ?>
			<form method="post" action="<?php echo base_url('auth/login');?>" class="form-content">
				<div class="input-wrapper">
					<input class="input-style" type="text" name="username" placeholder="Username" required>
					<?php echo form_error('username','<div class="text-danger small ml-2">','</div>');?>
					<span class="input-style-focus"></span>
				</div>

				<div class="input-wrapper">
					<div class="input-group">
						<input class="form-control" type="password" name="password" placeholder="Password" id="password" required>
						<?php echo form_error('password','<div class="text-danger small ml-2">','</div>');?>
						<span class="form-control-focus"></span>
						<div class="input-group-addon" onclick="passwordVisibility();">
							<i class="fa fa-eye" id="showPass"></i>
							<i class="fa fa-eye-slash d-none" id="hidePass"></i>
						</div>
					</div>
				</div>
			 
				<button type="submit" class="button-style w-100">
					Login
				</button>
				
				<p class="txt-style1 mt-5">Or <a class="txt-style2" href="http://localhost/sayurind/index.php/auth/register"><strong>Sign Up!</strong></a></p>
			</form>
		</div>
	</div>
</main>

<script src="<?php echo base_url();?>assets/view_akses/js/password-visibility.js"></script>

</body>
</html>