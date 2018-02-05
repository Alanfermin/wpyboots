<?php

    get_header();

 ?>
<!-- Contenido-->
<div class="container my-5">
  <div class="row">
  <!-- articulo -->
      <!-- Inserto el template de "the loop" de wordpress.org, mientras existan post coloca post-->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="col-12 col-sm-6 col-md-4 mb-3 my-5">
            <div class="card text-center">
              <!--card-img-top img-fluid esto lo cambio en el align left-->
              <a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) 
                      {
                       the_post_thumbnail('post-thumbnails', array( 'class' => 'card-img-top img-fluid' ));
                      }
                ?>
                <!--El nombre de thumbnail, se reemplaza con el de la pestaña functions linea 22 "add_theme_support" 'post-thumbnails'-->
</a>
                      
              <div class="card-block">
                  <a href="<?php the_permalink(); ?>"></a><h4 class="card-title"><?php the_title(); ?></h4></a>
                  <p class="card-text"><?php the_excerpt(); ?></p>
                 <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leer más</a>
              </div>
             
              <div class="card-footer text-muted">
                  <?php the_category(','); ?> / precio  / <?php echo get_the_date(); ?>
              </div>
            </div> 
          </div>
      <?php endwhile; endif; ?>
      <!-- Fin Inserto el template de "the loop" de wordpress.org-->
  <!-- articulo -->
  </div>
</div>

<!-- Fin de Contenido-->

<?php get_footer();?>