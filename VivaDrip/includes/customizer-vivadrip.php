<?php 

if ( ! class_exists ( 'Kirki' ) ) {
    return;
}

// PANELS
new \Kirki\Panel(
	'vivadrip_theme_option_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Viva Drip Theme Options', 'vivadrip' ),
		'description' => esc_html__( 'Use this to customize the Viva Drip Theme', 'vivadrip' ),
	]
);

// Sections
// NAVBAR
new \Kirki\Section(
	'vivadrip_navbar',
	[
		'title'       => esc_html__( 'NavBar', 'vivadrip' ),
		'description' => esc_html__( 'This section allows you to edit the navbar content such as the Logo link, the contact us button, and phone number', 'vivadrip' ),
		'panel'       => 'vivadrip_theme_option_panel',
		'priority'    => 160,
	]
);

//Controls

//Phone Number
new \Kirki\Field\Text(
	[
		'settings' => 'navbar__phonenumber',
		'label'    => esc_html__( 'NavBar Phone Number', 'vivadrip' ),
		'section'  => 'vivadrip_navbar',
		'default'  => esc_html__( '1888888888', 'vivadrip' ),
		'priority' => 9,
		'partial_refresh' => array (
            'navbar__phonenumber' => array (
                'selector' => '.nav-phonenumber',
                'render_callback' => function() {
                    return get_theme_mod('navbar__phonenumber');
                } 
            ),
        ),
	]
);

// Logo Link
new \Kirki\Field\Text(
	[
		'settings' => 'navbar__logo-link',
		'label'    => esc_html__( 'NavBar Logo Link', 'vivadrip' ),
		'section'  => 'vivadrip_navbar',
		'default'  => esc_html__( '/', 'vivadrip' ),
		'priority' => 10,
	]
);

//Contact Us Button Text
new \Kirki\Field\Text(
	[
		'settings' => 'navbar__contactus-text',
		'label'    => esc_html__( 'NavBar Contact Button Text', 'vivadrip' ),
		'section'  => 'vivadrip_navbar',
		'default'  => esc_html__( 'Contact Us', 'vivadrip' ),
		'priority' => 10,
		'partial_refresh' => array (
            'navbar__contactus-text' => array (
                'selector' => 'nav .main__btn',
                'render_callback' => function() {
                    return get_theme_mod('navbar__contactus-text');
                } 
            ),
        ),
	]
);
//Contact Button Link
new \Kirki\Field\Text(
	[
		'settings' => 'navbar__contactus-link',
		'label'    => esc_html__( 'NavBar Contact Button Link', 'vivadrip' ),
		'section'  => 'vivadrip_navbar',
		'default'  => esc_html__( '/contactus', 'vivadrip' ),
		'priority' => 10,
		
	]
);
//Navbar background color
new \Kirki\Field\Color(
	[
		'settings'    => 'navbar-backgroundcolor',
		'label'       => __( 'Color Control (hex only)', 'vivadrip' ),
		'description' => esc_html__( 'Regular color control, no alpha channel.', 'vivadrip' ),
		'section'     => 'vivadrip_navbar',
		'default'     => '#fff',
	]
);
// FOOTER
new \Kirki\Section(
	'vivadrip_footer_description',
	[
		'title'       => esc_html__( 'Footer', 'vivadrip' ),
		'description' => esc_html__( 'This section allows you to edit the footer description', 'vivadrip' ),
		'panel'       => 'vivadrip_theme_option_panel',
		'priority'    => 160,
	]
);

// Controls

new \Kirki\Field\TextArea(
	[
		'settings' => 'footer_description_section',
		'label'    => esc_html__( 'Footer Description', 'vivadrip' ),
		'section'  => 'vivadrip_footer_description',
		'default'  => esc_html__( 'This is a default value', 'vivadrip' ),
		'priority' => 10,
		'partial_refresh' => array (
            'footer_description_section' => array (
                'selector' => '.footer__description p',
                'render_callback' => function() {
                    return get_theme_mod('footer_description_section');
                } 
            ),
        ),
	]
);
//Description Heading
new \Kirki\Field\Text(
	[
		'settings' => 'footer_description_heading',
		'label'    => esc_html__( 'Footer Description Heading', 'vivadrip' ),
		'section'  => 'vivadrip_footer_description',
		'default'  => esc_html__( 'This is a default value', 'vivadrip' ),
		'priority' => 9,
		'partial_refresh' => array (
            'footer_description_heading' => array (
                'selector' => '.footer__description h6',
                'render_callback' => function() {
                    return get_theme_mod('footer_description_heading');
                } 
            ),
        ),
	]
);
// Packages
new \Kirki\Field\Text(
	[
		'settings' => 'footer_packages_heading',
		'label'    => esc_html__( 'Footer Packages Heading', 'vivadrip' ),
		'section'  => 'vivadrip_footer_description',
		'default'  => esc_html__( 'This is a default value', 'vivadrip' ),
		'priority' => 10,
		'partial_refresh' => array (
            'footer_packages_heading' => array (
                'selector' => '.footer__nav .footer_heading-1',
                'render_callback' => function() {
                    return get_theme_mod('footer_packages_heading');
                } 
            ),
        ),
	]
);
// Support
new \Kirki\Field\Text(
	[
		'settings' => 'footer_support_heading',
		'label'    => esc_html__( 'Footer Support Heading', 'vivadrip' ),
		'section'  => 'vivadrip_footer_description',
		'default'  => esc_html__( 'This is a default value', 'vivadrip' ),
		'priority' => 10,
		'partial_refresh' => array (
            'footer_support_heading' => array (
                'selector' => '.footer__nav .footer_heading-2',
                'render_callback' => function() {
                    return get_theme_mod('footer_support_heading');
                } 
            ),
        ),
	]
);
// More
new \Kirki\Field\Text(
	[
		'settings' => 'footer_more_heading',
		'label'    => esc_html__( 'Footer More Heading', 'vivadrip' ),
		'section'  => 'vivadrip_footer_description',
		'default'  => esc_html__( 'This is a default value', 'vivadrip' ),
		'priority' => 10,
		'partial_refresh' => array (
            'footer_more_heading' => array (
                'selector' => '.footer__nav .footer_heading-3',
                'render_callback' => function() {
                    return get_theme_mod('footer_more_heading');
                } 
            ),
        ),
	]
);

//Legal Description

new \Kirki\Field\TextArea(
	[
		'settings' => 'footer_legal_description',
		'label'    => esc_html__( 'Footer Legal Description', 'vivadrip' ),
		'section'  => 'vivadrip_footer_description',
		'default'  => esc_html__( 'This is a default value', 'vivadrip' ),
		'priority' => 10,
		'partial_refresh' => array (
            'footer_legal_description' => array (
                'selector' => '.footer__legal',
                'render_callback' => function() {
                    return get_theme_mod('footer_legal_description');
                } 
            ),
        ),
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'footer-backgroundcolor',
		'label'       => __( 'Color Control (hex only)', 'vivadrip' ),
		'description' => esc_html__( 'Regular color control, no alpha channel.', 'vivadrip' ),
		'section'     => 'vivadrip_footer_description',
		'default'     => '#011525',
	]
);


// Home Page

// Section
new \Kirki\Section(
	'vivadrip_homepage_header_section',
	[
		'title'       => esc_html__( 'Header Section', 'vivadrip' ),
		'description' => esc_html__( 'This section allows you to edit the Home Page Header', 'vivadrip' ),
		'panel'       => 'vivadrip_theme_option_panel',
		'priority'    => 120,
	]
);


// Controls

// Header Background image
new \Kirki\Field\Image(
	[
		'settings'    => 'homepage_header_image',
		'label'       => esc_html__( 'Header Image', 'vivadrip' ),
		'description' => esc_html__( 'The saved value will be the ID.', 'vivadrip' ),
		'section'     => 'vivadrip_homepage_header_section',
		'default'     => '',
	]
);
new \Kirki\Field\Color(
	[
		'settings'    => 'homepage_header_image_overlay',
		'label'       => __( 'Image Overlay Color', 'vivadrip' ),
		'description' => esc_html__( 'Advanced color control with alpha channel.', 'vivadrip' ),
		'section'     => 'vivadrip_homepage_header_section',
		'default'     => '#0008DC',
		'choices'     => [
			'alpha' => true,
		],
	]
);
// HEADER TEXT
new \Kirki\Field\Text(
	[
		'settings' => 'homepage_header_text',
		'label'    => esc_html__( 'Header Image Text', 'vivadrip' ),
		'section'  => 'vivadrip_homepage_header_section',
		'default'  => esc_html__( 'This is a default value', 'vivadrip' ),
		'priority' => 9,
		'partial_refresh' => array (
            'homepage_header_text' => array (
                'selector' => '.heading-1',
                'render_callback' => function() {
                    return get_theme_mod('homepage_header_text');
                } 
            ),
        ),
	]
);

// HEADER GET IN TOUCH BUTTON
new \Kirki\Field\Text(
	[
		'settings' => 'homepage_header_getintouch',
		'label'    => esc_html__( 'Get In Touch Button', 'vivadrip' ),
		'section'  => 'vivadrip_homepage_header_section',
		'default'  => esc_html__( 'This is a default value', 'vivadrip' ),
		'priority' => 9,
		'partial_refresh' => array (
            'homepage_header_getintouch' => array (
                'selector' => '.header__btn-container .homepage-btn--1',
                'render_callback' => function() {
                    return get_theme_mod('homepage_header_getintouch');
                } 
            ),
        ),
	]
);
// Link for get in touch btn
new \Kirki\Field\URL(
	[
		'settings' => 'homepage_header_getintouch_link',
		'label'    => esc_html__( 'URL Control', 'vivadrip' ),
		'section'  => 'vivadrip_homepage_header_section',
		'default'  => 'https://yoururl.com/',
		'priority' => 9,
	]
);

// HEADER GET IN TOUCH BUTTON
new \Kirki\Field\Text(
	[
		'settings' => 'homepage_header_allpackages',
		'label'    => esc_html__( 'Get In Touch Button', 'vivadrip' ),
		'section'  => 'vivadrip_homepage_header_section',
		'default'  => esc_html__( 'This is a default value', 'vivadrip' ),
		'priority' => 9,
		'partial_refresh' => array (
            'homepage_header_allpackages' => array (
                'selector' => '.header__btn-container .homepage-btn--2',
                'render_callback' => function() {
                    return get_theme_mod('homepage_header_allpackages');
                } 
            ),
        ),
	]
);
// Link for get in touch btn
new \Kirki\Field\URL(
	[
		'settings' => 'homepage_header_allpackages_link',
		'label'    => esc_html__( 'URL Control', 'vivadrip' ),
		'section'  => 'vivadrip_homepage_header_section',
		'default'  => 'https://yoururl.com/',
		'priority' => 9,
	]
);
// Progress section Heading
new \Kirki\Section(
	'vivadrip_homepage_progress_section',
	[
		'title'       => esc_html__( 'Progress Section', 'vivadrip' ),
		'description' => esc_html__( 'This section allows you to edit the Home Page Progress section', 'vivadrip' ),
		'panel'       => 'vivadrip_theme_option_panel',
		'priority'    => 120,
	]
);
new \Kirki\Section(
	'vivadrip_homepage_progress_step1',
	[
		'title'       => esc_html__( 'Progress Step 1', 'vivadrip' ),
		'description' => esc_html__( 'This section allows you to edit the Home Page Progress step 1', 'vivadrip' ),
		'panel'       => 'vivadrip_theme_option_panel',
		'priority'    => 120,
	]
);
new \Kirki\Section(
	'vivadrip_homepage_progress_step2',
	[
		'title'       => esc_html__( 'Progress Step 2', 'vivadrip' ),
		'description' => esc_html__( 'This section allows you to edit the Home Page Progress step 2', 'vivadrip' ),
		'panel'       => 'vivadrip_theme_option_panel',
		'priority'    => 120,
	]
);
new \Kirki\Section(
	'vivadrip_homepage_progress_step3',
	[
		'title'       => esc_html__( 'Progress Step 3', 'vivadrip' ),
		'description' => esc_html__( 'This section allows you to edit the Home Page Progress step 3', 'vivadrip' ),
		'panel'       => 'vivadrip_theme_option_panel',
		'priority'    => 120,
	]
);
// Step 1 image
new \Kirki\Field\Image(
	[
		'settings'    => 'progress_step--1',
		'label'       => esc_html__( 'Step 1 Image', 'vivadrip' ),
		'description' => esc_html__( 'The saved value will be the ID.', 'vivadrip' ),
		'section'     => 'vivadrip_homepage_progress_step1',
		'default'     => '',
	]
);
// Step 2 image
new \Kirki\Field\Image(
	[
		'settings'    => 'progress_step--2',
		'label'       => esc_html__( 'Step 2 Image', 'vivadrip' ),
		'description' => esc_html__( 'The saved value will be the ID.', 'vivadrip' ),
		'section'     => 'vivadrip_homepage_progress_step2',
		'default'     => '',
	]
);
// Step 3 image
new \Kirki\Field\Image(
	[
		'settings'    => 'progress_step--3',
		'label'       => esc_html__( 'Step 3 Image', 'vivadrip' ),
		'description' => esc_html__( 'The saved value will be the ID.', 'vivadrip' ),
		'section'     => 'vivadrip_homepage_progress_step3',
		'default'     => '',
	]
);
// Progress section Header
new \Kirki\Field\Text(
	[
		'settings' => 'progress_heading_header',
		'label'    => esc_html__( 'Progress Section Title', 'vivadrip' ),
		'section'  => 'vivadrip_homepage_progress_section',
		'default'  => esc_html__( 'This is a default value', 'vivadrip' ),
		'priority' => 9,
		'partial_refresh' => array (
            'progress_heading_header' => array (
                'selector' => '.progress-heading h2',
                'render_callback' => function() {
                    return get_theme_mod('progress_heading_header');
                } 
            ),
        ),
	]
);
// progress section inital description
new \Kirki\Field\TextArea(
	[
		'settings' => 'progress_heading_description',
		'label'    => esc_html__( 'Progress Section Description', 'vivadrip' ),
		'section'  => 'vivadrip_homepage_progress_section',
		'default'  => esc_html__( 'This is a default value', 'vivadrip' ),
		'priority' => 9,
		'partial_refresh' => array (
            'progress_heading_description' => array (
                'selector' => '.progress-heading p',
                'render_callback' => function() {
                    return get_theme_mod('progress_heading_description');
                } 
            ),
        ),
	]
);
// STEP 1
new \Kirki\Field\Text(
	[
		'settings' => 'progress_step1-head',
		'label'    => esc_html__( 'Progress Step 1 Main Title', 'vivadrip' ),
		'section'  => 'vivadrip_homepage_progress_step1',
		'default'  => esc_html__( 'This is a default value', 'vivadrip' ),
		'priority' => 9,
		'partial_refresh' => array (
            'progress_step1-head' => array (
                'selector' => '.step-1-title',
                'render_callback' => function() {
                    return get_theme_mod('progress_step1-head');
                } 
            ),
        ),
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'progress_step1-mainheading',
		'label'    => esc_html__( 'Progress Step 1 Main Title', 'vivadrip' ),
		'section'  => 'vivadrip_homepage_progress_step1',
		'default'  => esc_html__( 'This is a default value', 'vivadrip' ),
		'priority' => 9,
		'partial_refresh' => array (
            'progress_step1-mainheading' => array (
                'selector' => '.step-1-mainheading',
                'render_callback' => function() {
                    return get_theme_mod('progress_step1-mainheading');
                } 
            ),
        ),
	]
);

new \Kirki\Field\TextArea(
	[
		'settings' => 'progress_step1_description',
		'label'    => esc_html__( 'Progress Section Description', 'vivadrip' ),
		'section'  => 'vivadrip_homepage_progress_step1',
		'default'  => esc_html__( 'This is a default value', 'vivadrip' ),
		'priority' => 9,
		'partial_refresh' => array (
            'progress_step1_description' => array (
                'selector' => '.step-1-description',
                'render_callback' => function() {
                    return get_theme_mod('progress_step1_description');
                } 
            ),
        ),
	]
);

// STEP 2
new \Kirki\Field\Text(
	[
		'settings' => 'progress_step2-head',
		'label'    => esc_html__( 'Progress Step 2 Main Title', 'vivadrip' ),
		'section'  => 'vivadrip_homepage_progress_step2',
		'default'  => esc_html__( 'This is a default value', 'vivadrip' ),
		'priority' => 9,
		'partial_refresh' => array (
            'progress_step2-head' => array (
                'selector' => '.step-2-title',
                'render_callback' => function() {
                    return get_theme_mod('progress_step2-head');
                } 
            ),
        ),
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'progress_step2-mainheading',
		'label'    => esc_html__( 'Progress Step 2 Main Title', 'vivadrip' ),
		'section'  => 'vivadrip_homepage_progress_step2',
		'default'  => esc_html__( 'This is a default value', 'vivadrip' ),
		'priority' => 9,
		'partial_refresh' => array (
            'progress_step2-mainheading' => array (
                'selector' => '.step-2-mainheading',
                'render_callback' => function() {
                    return get_theme_mod('progress_step2-mainheading');
                } 
            ),
        ),
	]
);

new \Kirki\Field\TextArea(
	[
		'settings' => 'progress_step2_description',
		'label'    => esc_html__( 'Step 2 Description', 'vivadrip' ),
		'section'  => 'vivadrip_homepage_progress_step2',
		'default'  => esc_html__( 'This is a default value', 'vivadrip' ),
		'priority' => 9,
		'partial_refresh' => array (
            'progress_step2_description' => array (
                'selector' => '.step-2-description',
                'render_callback' => function() {
                    return get_theme_mod('progress_step2_description');
                } 
            ),
        ),
	]
);


// STEP 3
new \Kirki\Field\Text(
	[
		'settings' => 'progress_step3-head',
		'label'    => esc_html__( 'Progress Step 3 Main Title', 'vivadrip' ),
		'section'  => 'vivadrip_homepage_progress_step3',
		'default'  => esc_html__( 'This is a default value', 'vivadrip' ),
		'priority' => 9,
		'partial_refresh' => array (
            'progress_step3-head' => array (
                'selector' => '.step-3-title',
                'render_callback' => function() {
                    return get_theme_mod('progress_step3-head');
                } 
            ),
        ),
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'progress_step3-mainheading',
		'label'    => esc_html__( 'Progress Step 3 Main Title', 'vivadrip' ),
		'section'  => 'vivadrip_homepage_progress_step3',
		'default'  => esc_html__( 'This is a default value', 'vivadrip' ),
		'priority' => 9,
		'partial_refresh' => array (
            'progress_step3-mainheading' => array (
                'selector' => '.step-3-mainheading',
                'render_callback' => function() {
                    return get_theme_mod('progress_step3-mainheading');
                } 
            ),
        ),
	]
);

new \Kirki\Field\TextArea(
	[
		'settings' => 'progress_step3_description',
		'label'    => esc_html__( 'Step 3 Description', 'vivadrip' ),
		'section'  => 'vivadrip_homepage_progress_step3',
		'default'  => esc_html__( 'This is a default value', 'vivadrip' ),
		'priority' => 9,
		'partial_refresh' => array (
            'progress_step3_description' => array (
                'selector' => '.step-3-description',
                'render_callback' => function() {
                    return get_theme_mod('progress_step3_description');
                } 
            ),
        ),
	]
);