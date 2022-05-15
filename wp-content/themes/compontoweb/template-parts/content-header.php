<header class="p-3 bg-dark">
	<nav class="container">
		<div>
			<?php 
				switch($post->post_name){
					case 'vagas' :?>
						<a href="<?php echo esc_url(home_url('/'))?>vagas" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">Vitrine Empregos</a>
				<?php break;
				default : break;
				}
			?>
			<ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
				<li><a href="<?php esc_url(home_url('/'))?>vagas" class="nav-link px-2 text-white">Vagas</a></li>
				<li><a href="#" class="nav-link px-2 text-white">Sobre Nós</a></li>
				<li><a href="<?php echo esc_url(home_url('/'))?>help" class="nav-link px-2 text-white">Ajudar</a></li>
			</ul>
			<form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
				<input type="search" class="form-control form-control-dark" placeholder="Pesquisar..." aria-label="Search">
			</form>
			<div class="text-end">
				<a href="<?php echo esc_url(home_url('/'))?>login" class="btn btn-outline-primary me-2">Login</a>
				<a href="<?php echo esc_url(home_url('/'))?>register" class="btn btn-warning">Registrar</a>
			</div>
		</div>

	</nav>
</header>