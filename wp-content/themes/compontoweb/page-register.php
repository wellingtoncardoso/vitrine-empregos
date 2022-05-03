<?php 
/*
*Template Name: Register
* */get_header(); ?>
<section id="register">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 m-auto">
				<h1>Registrar minha empresa</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-6 m-auto">
				<?php echo do_shortcode('[ultimatemember form_id="79"]')?>
			</div>
		</div>
		<div class="row">
			<div class="col-12 col-md-4">
				<a class="to-back" href="<?php echo esc_url(home_url('/'))?>login"><i class="fa fa-arrow-left"></i> Voltar</a>
			</div>
		</div>
	</div>
</section> 
<?php get_footer(); ?>