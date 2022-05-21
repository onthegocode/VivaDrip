<?php
/**
 * Title Banner and Subscribe Bar
 *
 * @package bootstrap2wordpress
 * @since 2.0
 */
?>

<div class="container-fluid p-none banner-title">
<?php
  if ( is_page() ) {

  the_title( '<h1 class="page-title">', '</h1>' );

  }
?>
</div>