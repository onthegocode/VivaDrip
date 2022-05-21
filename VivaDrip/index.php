<?php
/**
* The main template file
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package VivaDrip
* @since 2.0
*/
 get_header(); 
//  //banner is the slug and title is the name / specialized name so you can have multiple names for the banner slug
//  get_template_part('template-parts/banner','title');
?>
		<header class="homepage__header container-fluid">
			<h1 class="heading-1">
				Iv Therapy In Las Vegas<br />
				Mobile IV Therapy Available in las vegas
			</h1>
			<p class="subheading-caption">
				We're Available 24/7, We Typically Arrive Within The Hour, What Could Be
				Better?
			</p>
			<div class="header__btn-container">
				<a href="" class="btn">Book Online</a
				><a href="" class="btn">Call 1-888-888-8888</a>
			</div>
		</header>
	

<?php get_footer(); ?>