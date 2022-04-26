<?php switch($post->post_name){
  case 'vagas' :?>
    <?php get_template_part('template-parts/content','footer') ?>
  <?php break;
	default:?>
	<?php break; }?>
<?php wp_footer(); ?>

</body>
</html>