<?php get_header();?>
<!-- Contenido Articulo -->
<div class="container">
   <div class="row">
    <!-- Articulo -->
    <div class="col-12 col-md-9 my-5">
        
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    

        <?php if ( has_post_thumbnail() ) 
                      {
                       the_post_thumbnail('post-thumbnails', array( 'class' => 'img-fluid' ));
                      }
                ?>
        <h2 class="my-3"><?php the_title() ;?> </h2>
        <p class="lead"><?php echo get_the_date(); ?></p>
        <div class="text-justify">
         <?php the_excerpt(); ?>
         <?php the_content(); ?>
        </div>

      <?php endwhile; endif; ?>  
    </div>
    <!-- Fin Articulo -->
    <!-- Aside col-12 para que se vea en dispositivos pequeños al 100% el col-md-3 es para que en dispositivos medianos tome 3 columnas-->
    <div class="col-12 col-md-3">
      <?php get_sidebar(); ?>
    </div>

    <!-- Fin Aside -->
  </div>
</div>



<!-- Fin Contenido Articulo -->
<?php get_footer(); ?>