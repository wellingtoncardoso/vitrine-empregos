 <?php 
 /*
 *Template Name: Jobs
 * */get_header(); ?>

	<div class="container">
		<div class="row">
			<?php the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class('col-12 col-md-8 col-lg-8 mt-2 mt-md-5 mb-2 mb-md-5'); ?>>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="entry-content">
					<?php the_content(); ?>
					<?php wp_link_pages('before=<div class="page-link">' . __('Pages:', 'cpw' ) . '&after=</div>') ?>
					<?php edit_post_link(__('Edit', 'cpw' ), '<span class="edit-link">', '</span>' ) ?>
				</div>
			</div>  
			<?php if ( get_post_custom_values('comments') ) comments_template() // Adiciona um custom field com Nome e Valor "comments" para que possa usar comentários numa página ?>  

		</div><!-- row -->
	</div><!-- container --> 

	<main>
 		<section id="list-jobs">
 			<div class="container">
				<div class="row">
 					<div class="col-12 col-md-8 col-lg-8">
 						<?php for($i = 0; $i < 15; $i++){?>
 						<div class="card">
							<a href="">
								<div class="card-header">
									<ul class="items-header">
										<li><i class="fa fa-calendar"></i><span>18/04</span></li>
										<li><i class="fa fa-clock"></i><span>08:30</span></li>
										<li><i class="fa fa-id-card"></i><span>123456789</span></li>
									</ul>
								</div>
								<div class="card-body">
									<h2>Desenvolvedor Jr. /Jardim Proença / Campinas / SP </h2>
								</div>
								<div class="card-footer">
									<p> 
										is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
										standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled 
										it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic 
										typesetting, remaining essentially
										</p>
								</div>
							</a>
						</div>
						<!-- ends card -->
						<?php }?>
					</div>
				</div>
			</div>
		</section>
	</main>
 <?php get_footer(); ?>