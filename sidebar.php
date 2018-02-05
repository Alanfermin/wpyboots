<?php if ( is_active_sidebar( 'primary' ) ) : ?>
  <!-- Se cambia el left-sidebar por el id (primary) del functions-->
    <?php dynamic_sidebar( 'primary' ); ?>

<?php endif; ?>