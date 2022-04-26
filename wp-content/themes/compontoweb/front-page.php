 <?php 
/*
*Template Name: Front Page
*/
get_header(); ?>
<main>
  <section class="grid-main">
    <section class="content">
      <div class="thumbnail">
        <img src="<?php echo get_template_directory_uri()?>/assets/img/man-work.jpg" alt="">
        <h1>Lorem ipsum dolor sit amet</h1>
        <p>Lorem ipsum dolor sit amet</p>
      </div>
    </section>
    <section class="access">
      <section class="access-flex">
        <div class="access-flex-content">
          <h3>Como podemos ajudar você?</h3>
          <ul class="nav-info">  
            <li><i class="fa fa-user"></i><a>Área do <strong>candidato</strong></a></li>
            <li>
              <i class="fa fa-building"></i>
              <a href="<?php echo esc_url(home_url('/'))?>company" >Registrar <strong>empresa</strong></a>
            </li>
          </ul>
        </div>
      </section>
    </section>
  </section>	
</main>
<?php get_footer(); ?>