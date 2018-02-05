<
 <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" type="<?php bloginfo('template_url');?>text/css" href="style.css">

    <style>
      .suscribir
{
    background: url("<?php bloginfo('template_url');?>/image/22.jpg");
    background-size: cover;
    background-position: center;
    height: 400px;
}


    </style>

  </head>


<body>
  

    <!-- navbar -->
<div class="container fluid bg-dark fixed-top">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
    <img src="<?php bloginfo('template_url');?>/image/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    Bootstrap
  </a>
      
 
<!-- Crearé los navbar de forma dinámica para wordpress -->


        <?php wp_nav_menu(array

          ('theme_location'=>'superior', /*indico donde es´tará ubicado el menú*/
            'container' => 'div', /*indico que el menú estará dentro de una divición*/
            'container_class' => 'collapse navbar-collapse', /* Clases del container, transformando el navbar de bootstrap4*/
            'container_id' => 'navbarSupportedContent',
            'items_wrap' => '<ul class="navbar-nav ml-auto text-center">%3$s</ul>',
            'menu_class' => 'nav-item') /*Para los li*/
          ); 
        ?>



<!-- Fin Crearé los navbar de forma dinámica para wordpress -->

      </nav>


</div>

    <!--fin navbar -->

<!-- backgroun banner -->
<div class="container-fluid suscribir">
  
</div> -->
 <!-- Fin backgroun banner. Si es necesario, sino no aparece -->
  