<?php $this->load->view('includes/header'); ?>

<section class="u-bg-overlay g-bg-pos-top-center g-bg-img-hero g-bg-black-opacity-0_3--after g-py-50" style="background-image: url(../../assets/img-temp/1920x1080/img24.jpg);">
    <div class="container u-bg-overlay__inner">
		
		<div class="row justify-content-center text-center mb-5">
          	<div class="col-lg-8">
            	<!-- Heading -->
            	<h1 class="g-color-white text-uppercase mb-4">Login or register an account</h1>
            	<div class="d-inline-block g-width-35 g-height-2 g-bg-white mb-4"></div>
            	<!-- End Heading -->
          	</div>
		</div>


		<div id="login_form">

			<h1>Login</h1>
			<?php 
			echo form_open('login/validate_credentials');
			echo form_input('username', 'Username');
			echo form_password('password', 'Password');
			echo form_submit('submit', 'Login');
			echo anchor('login/signup', 'Create Account');
			echo form_close();
			?>

		</div><!-- end login_form-->

			
	</div>
</section>

<?php //$this->load->view('includes/tut_info'); ?>
	
<?php //$this->load->view('includes/footer'); ?>