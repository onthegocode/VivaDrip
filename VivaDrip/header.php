<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?> >
	<div class="top-navigation">
			<div class="container-fluid p-none">
				<nav class="navbar navbar-expand-lg navbar-light  main__navbar" style="background-color: <?php echo get_theme_mod( 'navbar-backgroundcolor', '#FFFFFF' ); ?>">
					<div class="container-fluid">
						<a class="navbar-brand" href="<?php echo wp_kses_post( get_theme_mod( 'navbar__logo-link' ) );?>">Logo</a>
						<button
							class="navbar-toggler"
							type="button"
							data-bs-toggle="collapse"
							data-bs-target="#navbarNavAltMarkup"
							aria-controls="navbarNavAltMarkup"
							aria-expanded="false"
							aria-label="Toggle navigation"
						>
							<!-- This is for the movile icon -->
							<input type="checkbox" class="navbar-icon">
						</input>
						<i class="navbar-icon-main"></i>
						</button>
						<div
							class="collapse navbar-collapse justify-content-between"
							id="navbarNavAltMarkup"
						>
							<?php 
							wp_nav_menu(
								array(
									'theme_location' => 'primary', // as registered in functions.php
									'container' => 'ul', // html wrapper of the menu ul
									'container_class' => '',
									'menu_class' => 'navbar-nav nav-link', // classes for menu / ul tag
									'fallback_cb' => false // if primary menu is not created, then show nothing.
								)
							);
							
							?>
							<div class="navbar-nav navright-1">
								<span class="rightsidebar">
									<svg
										viewBox="0 0 30 30"
										fill="none"
										xmlns="http://www.w3.org/2000/svg"
									>
										<path
											fill-rule="evenodd"
											clip-rule="evenodd"
											d="M16.2334 3.76636H24.9835C25.671 3.76636 26.2335 4.32886 26.2335 5.01636V11.2664C26.2335 11.9539 25.671 12.5164 24.9835 12.5164H18.7334L14.9834 16.2664V5.01636C14.9834 4.32886 15.5459 3.76636 16.2334 3.76636ZM20.8459 18.7289L24.021 19.0914C25.2835 19.2414 26.2334 20.3039 26.2209 21.5664V23.7289C26.2209 25.1414 25.0459 26.3164 23.6334 26.2289C12.971 25.5664 4.43345 17.0414 3.77095 6.36636C3.68345 4.95386 4.85845 3.77886 6.27095 3.77886H8.43345C9.70845 3.77886 10.7709 4.72886 10.9209 5.99136L11.2834 9.14136C11.3709 9.90386 11.1084 10.6539 10.5709 11.1914L8.25845 13.5039C10.0584 17.0539 12.9585 19.9414 16.4959 21.7414L18.7959 19.4414C19.3334 18.9039 20.0834 18.6414 20.8459 18.7289Z"
											fill="#011525"
										/>
									</svg>

									<a class="nav-phonenumber" href="tel:<?php echo wp_kses_post( get_theme_mod( 'navbar__phonenumber' ) );?> "
										><?php echo wp_kses_post( get_theme_mod( 'navbar__phonenumber' ) );?> </a
									>
								</span>
								<a href="<?php echo wp_kses_post( get_theme_mod( 'navbar__contactus-link' ) );?>" class="main__btn"><?php echo wp_kses_post( get_theme_mod( 'navbar__contactus-text' ) );?></a>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>