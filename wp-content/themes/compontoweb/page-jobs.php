 <?php 
 /*
 *Template Name: Jobs
 * */get_header(); ?>
	<main>
 		<div id="hero-banner">
 			<div class="slick-hero-banner">
 				<div
				 style="background-image: url('<?php echo get_template_directory_uri()?>/assets/img/delete/people-01.jpg');
				 				background-repeat: no-repeat;
								background-size: cover;
								background-position: center center;
								width:100%;
								height: 480px;">
					<div class="content-hero">
						<p>	 
							<span>As melhores vagas</span><br>
							estão aqui para vocês!
						</p>
					</div>
				</div>
			</div>
		</div>
 		<section id="list-jobs">
 			<div class="container">
				<div class="row">
					<div class="col-12"><h2>Encontre um emprego para você!</h2></div>
				</div>
				<div class="row">
					<?php for($i = 0; $i < 35; $i++){?>
						<article class="col-12 col-md-6 col-lg-6">
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
						</article>
					<?php }?>
				</div>
				<div class="row">
					<div class="col-12 col-md-4 m-md-auto text-center"><button id="loadmore" class="btn btn-lead-more">Mais vagas</button></div>
				</div>
			</div>
		</section>
		<!-- ends list jobs  -->
	</main>
 <?php get_footer(); ?>