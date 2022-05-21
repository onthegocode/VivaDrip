<?php
/**
 * The template for homepage
 *
 * @package vivadrip
 * @since 1.0
 */

get_header();
?>
	<?php $image = get_theme_mod( 'homepage_header_image', '' ); ?>
	<?php $images1 = get_theme_mod( 'progress_step--1', '' ); ?>
	<?php $images2 = get_theme_mod( 'progress_step--2', '' ); ?>
	<?php $images3 = get_theme_mod( 'progress_step--3', '' ); ?>
	<header style="background-image: linear-gradient(<?php echo get_theme_mod( 'homepage_header_image_overlay' ); ?>,<?php echo get_theme_mod( 'homepage_header_image_overlay' ); ?>), url('<?php echo esc_url( $image ); ?>')"  class="homepage__header container-fluid" >
		<h1 class="heading-1"><?php echo wp_kses_post( get_theme_mod( 'homepage_header_text' ) );?></h1>

		<div class="header__btn-container">
			<a href="<?php echo wp_kses_post( get_theme_mod( 'homepage_header_getintouch_link' ) );?>" class="btn main__btn homepage-btn--1"><?php echo wp_kses_post( get_theme_mod( 'homepage_header_getintouch' ) );?></a
			><a href="<?php echo wp_kses_post( get_theme_mod( 'homepage_header_allpackages_link' ) );?>" class="btn main__btn homepage-btn--2"><?php echo wp_kses_post( get_theme_mod( 'homepage_header_allpackages' ) );?></a>
		</div>
	</header>
	<main class="main-container">
		<section class="progress__section container-padding-1">
			<div class="progress__section--container">

				<div class="progress-heading">
					<h2><?php echo wp_kses_post( get_theme_mod( 'progress_heading_header' ) );?></h2>
					<p>
					<?php echo wp_kses_post( get_theme_mod( 'progress_heading_description' ) );?>
					</p>
				</div>
				<div class="progress-step">
					<div class="progress-step--1">
						<div class="progress-step--img">
							<img src="<?php echo esc_url( $images1 ); ?>" alt="step 1" />
					</div>
					<h5 class="step-1-title"><?php echo wp_kses_post( get_theme_mod( 'progress_step1-head' ) );?></h5>
					<h4 class="step-1-mainheading"><?php echo wp_kses_post( get_theme_mod( 'progress_step1-mainheading' ) );?></h4>
					<p class="step-1-description">
					<?php echo wp_kses_post( get_theme_mod( 'progress_step1_description' ) );?>
					</p>
				</div>
				<div class="progress-step--2">
					<div class="progress-step--img">
						<img src="<?php echo esc_url( $images2 ); ?>" alt="step 2" />
					</div>
					<h5 class="step-2-title"><?php echo wp_kses_post( get_theme_mod( 'progress_step2-head' ) );?></h5>
					<h4 class="step-2-mainheading"><?php echo wp_kses_post( get_theme_mod( 'progress_step2-mainheading' ) );?></h4>
					<p class="step-2-description">
					<?php echo wp_kses_post( get_theme_mod( 'progress_step2_description' ) );?>
					</p>
				</div>
				<div class="progress-step--3">
					<div class="progress-step--img">
						<img src="<?php echo esc_url( $images3 ); ?>" alt="step 3" />
					</div>
					<h5 class="step-3-title"><?php echo wp_kses_post( get_theme_mod( 'progress_step3-head' ) );?></h5>
					<h4 class="step-3-mainheading"><?php echo wp_kses_post( get_theme_mod( 'progress_step3-mainheading' ) );?></h4>
					<p class="step-3-description">
					<?php echo wp_kses_post( get_theme_mod( 'progress_step3_description' ) );?>
					</p>
				</div>
			</div>
			</div>
		</section>
	</main>


<?php
            the_content();
?>

<?php
get_footer();