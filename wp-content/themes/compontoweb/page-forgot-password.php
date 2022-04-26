 <?php 
 /*
 *Template Name: Forgot Password
 * */get_header(); ?>
 <section id="forgot-password">
	 <div class="container">
		 <div class="row">
			 <div class="col-12 col-md-6 m-auto">
				 <h1>Recuperar minha senha</h1>
			 </div>
		 </div>
		 	<div class="row">
				<div class="col-12 col-md-6 m-auto">
					<?php echo do_shortcode('[wppb-recover-password]')?>
				</div>
		 </div>
		 <div class="row">
				<div class="col-12 col-md-4">
					<a class="to-back" href="<?php echo esc_url(home_url('/'))?>company"><i class="fa fa-arrow-left"></i> Voltar</a>
				</div>
			</div>
	 </div>
 </section>
 <?php get_footer(); ?>