<?php get_header(); ?>
    <div id="conteudo">
        <div id="artigos">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="artigo">
                    <h1><?php the_title(); ?></h1>
                    <hr>
                    <?php the_post_thumbnail(); ?>
                    <p>Postado por <?php the_author() ?> em <?php the_time('d/M/Y') ?> - <?php comments_popup_link('Sem Comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?> <?php edit_post_link('(Editar)'); ?></p>
                    <p><?php the_content(); ?></p>
                </div>

                <?php // comments_template(); ?>

            <?php endwhile; else: ?>
            <div class="artigo">
                <h2>Nada Encontrado</h2>
                <p>Erro 404</p>
                <p>Lamentamos mas não foram encontrados artigos.</p>
            </div>            
        <?php endif; ?>

        </div>
        <?php get_sidebar(); ?>
    </div>
<?php get_footer(); ?>