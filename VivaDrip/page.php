<?php
/**
 * The template for displaying page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vivadrip
 * @since 1.0
 */

get_header();
?>
<header class="page__header container-fluid">
		<h1 class="heading-page-1"><?php echo get_the_title(); ?></h1>
</header>
<?php
            the_content();
?>

<?php
get_footer();