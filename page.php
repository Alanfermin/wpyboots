<?php get_header(); ?>

<!--Contenido Menú-->
<div class="container my5">




  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    




  <h2><?php the_title(); ?></h2>
  <div class="text-justify">
    <?php the_content(); ?>
  </div>
  <?php endwhile; endif; ?>
</div>




<!--Fin Contenido Menú-->
<!-- Footer -->

<div class="container-fluid bg-dark text-white py-3">
  <div class="container text-center">
    <p> text example </p>
  </div>

</div>
<!-- Fin Footer -->




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>