<!-- footer starts -->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-3 m-md-auto">
        <div class="logo-footer d-flex justify-content-center aling-items-center">
          <?php 
            switch($post->post_name){
              case 'vagas' :?>
              <a href="<?php echo esc_url(home_url('/'))?>vagas">Vitrine Empregos</a>
              <?php break;
            default : break;
            }
          ?>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <h4>Institucional</h4>
        <ul>
          <li class="nav-item active"><a href="<?php echo esc_url(home_url('/'))?>" class="nav-link"><strong>Ajuda</strong></a></li>
          <li class="nav-item"><a href="" class="nav-link">Contatos</a></li>
          <li class="nav-item"><a href="" class="nav-link">Sobre Nós</a></li>
          <li class="nav-item"><a href="" class="nav-link">FAQs</a></li>
        </ul>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <h4>Para candidatos</h4>
        <ul>
          <li class="nav-item"><a href="" class="nav-link">Vagas</a></li>
          <li class="nav-item"><a href="" class="nav-link">Buscas de Vagas</a></li>
          <li class="nav-item"><a href="" class="nav-link">Por área/cargo</a></li>
          <li class="nav-item"><a href="" class="nav-link">Por estado</a></li>
          <li class="nav-item"><a href="" class="nav-link">Guia de Profissões</a></li>
          <li class="nav-item"><a href="" class="nav-link">Por dentro das empresas</a></li>
        </ul>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <h4>Para empresas</h4>
        <ul>
          <li class="nav-item"><a href="" class="nav-link">Produtos para Empresas</a></li>
          <li class="nav-item"><a href="" class="nav-link">Anunciar vagas</a></li>
          <li class="nav-item"><a href="" class="nav-link">Busca de currículos</a></li>
          <li class="nav-item"><a href="" class="nav-link">Recrutamento PcD</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!-- footer ends -->
<div id="copyright">
  <p>Todos os direitos reservados - &copy; Vitrine Empregos - <?php the_time('Y')?> | Desenvolvido por: Com Ponto Web</p>
</div>