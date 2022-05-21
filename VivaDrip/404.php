<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bootstrap2wordpress
 * @since 1.0
 */

get_header();
?>
<div class="notfoundpage">
    <h1>404</h1>
    <p>Oh no! Page not found!</p>
    <a href="/" class="main__btn">Go to Home page</a>
</div>
<?php
            the_content();
?>

<?php
get_footer();