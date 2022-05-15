 <?php
 /*
 *template Name: Login
 * */ get_header(); ?>
<section id="form-company">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4 m-auto">
				<h2>Acesse sua conta</h2>
				<?php echo do_shortcode('[ultimatemember form_id="80"]')?>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-4">
				<a class="to-back" href="<?php echo esc_url(home_url('/'))?>vagas"><i class="fa fa-arrow-left"></i> Voltar para site</a>
			</div>
		</div>
	</div>
</section>
 <?php get_footer(); ?>