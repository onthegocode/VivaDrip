<footer class="footer" style="background-color: <?php echo get_theme_mod( 'footer-backgroundcolor', '#011525' ); ?>">
			<section class="footer__container">
				<div class="footer__description">
					<h6 class="heading-6"><?php echo wp_kses_post( get_theme_mod( 'footer_description_heading' ) );?></h6>
					<p>
					<?php echo wp_kses_post( get_theme_mod( 'footer_description_section' ) );?>
					</p>
				</div>
				<div class="footer__nav">
					<h6 class="heading-6 footer_heading-1"><?php echo wp_kses_post( get_theme_mod( 'footer_packages_heading' ) );?></h6>
					<nav class="footer__nav-list">
					<?php 
						wp_nav_menu(
                            array(
                                'theme_location' => 'packages', // as registered in functions.php
                                'container' => 'ul', 
                                'fallback_cb' => false // if primary menu is not created, then show nothing.
                            )
                        );
						?>
					</nav>
				</div>
				<div class="footer__nav">
					<h6 class="heading-6 footer_heading-2"><?php echo wp_kses_post( get_theme_mod( 'footer_support_heading' ) );?></h6>
					<nav class="footer__nav-list">
					<?php 
						wp_nav_menu(
                            array(
                                'theme_location' => 'support', // as registered in functions.php
                                'container' => 'ul', 
                                'fallback_cb' => false // if primary menu is not created, then show nothing.
                            )
                        );
						?>
					</nav>
				</div>
				<div class="footer__nav">
					<h6 class="heading-6 footer_heading-3"><?php echo wp_kses_post( get_theme_mod( 'footer_more_heading' ) );?></h6>
					<nav class="footer__nav-list">
						<?php 
						wp_nav_menu(
                            array(
                                'theme_location' => 'more', // as registered in functions.php
                                'container' => 'ul', 
                                'fallback_cb' => false // if primary menu is not created, then show nothing.
                            )
                        );
						?>
					</nav>
				</div>
			</section>
			<section class="footer__legal">
			<?php echo wp_kses_post( get_theme_mod( 'footer_legal_description' ) );?> 
				
			</section>
			<div class="footer__copyright">
				Copyrights © 2022-2022 All Rights Reserved
			</div>
		</footer>
		<?php wp_footer(); ?>
	</body>
</html>
