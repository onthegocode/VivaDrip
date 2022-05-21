<?php
/**
 * vivadrip Button Widget
 */

class VD_Buttons_Widget extends \Elementor\Widget_Base {

	public function get_name() {
    return 'vivadrip_buttons';
  }

	public function get_title() {
    return __( 'Button', 'plugin-vivadrip' );
  }

	public function get_icon() {
    return 'eicon-button';
  }

  public function get_keywords() {
    return [ 'vivadrip', 'button', 'link', 'ui', 'cta', 'happy' ];
  }

	public function get_categories() {
    return ['vivadrip_category'];
  }

	protected function _register_controls() {

    $this->start_controls_section(
      'vivadrip_buttons',
      [
        'label' => __('Button','plugin-vivadrip'),
        'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );

    // add our controls

    $this->add_control(
      'button_text',
      [
        'label' => __('Button Text', 'plugin-vivadrip'),
        'label_block' => true,
        'placeholder' => __('Type something special here, my friend!', 'plugin-vivadrip' ),
        'type' => \Elementor\Controls_Manager::TEXT,
        'default' => __('Learn More','plugin-vivadrip'),
      ]
    );

    $this->add_control(
      'button_link',
      [
        'label' => __('Button Link', 'plugin-vivadrip'),
        'type' => \Elementor\Controls_Manager::URL,
        'show_external' => true,
        'default' => [
          'url' => '#',
          'is_external' => true,
          'nofollow' => false
        ],
      ]
    );

    $this->add_control(
      'button_style',
      [
        'label' => __( 'Button Style', 'plugin-vivadrip' ),
        'type' => \Elementor\Controls_Manager::SELECT,
        'default' => 'main__btn',
        'options' => [
          'main__btn'   => __( 'Primary', 'plugin-vivadrip' ),
          'btn-secondary' => __( 'Secondary', 'plugin-vivadrip' ),
					'btn-invert'    => __( 'Invert', 'plugin-vivadrip' ),
        ],
      ],
    );

    $this->add_responsive_control(
      'button_align',
      [
        'label' => __( 'Alignment', 'plugin-vivadrip' ),
        'type' => \Elementor\Controls_Manager::CHOOSE,
        'options' => [

          'left' => [
            'title' => __( 'Left', 'plugin-vivadrip' ),
						'icon' => 'eicon-text-align-left',
          ],

          'center' => [
            'title' => __( 'Center', 'plugin-vivadrip' ),
						'icon' => 'eicon-text-align-center',
          ],

          'right' => [
            'title' => __( 'Right', 'plugin-vivadrip' ),
						'icon' => 'eicon-text-align-right',
          ],

        ],

				'devices' => [ 'desktop', 'tablet', 'mobile' ],
        'default' => 'left',
				'selectors' => [
					'{{WRAPPER}} .link-box' => 'text-align: {{VALUE}};',
				],
        'toggle' => true,

      ],
    );


    $this->end_controls_section();

  }

	protected function render() {

    $settings = $this->get_settings_for_display();
    $target = $settings['button_link']['is_external'] ? ' target="_blank"' : '';
    $nofollow = $settings['button_link']['nofollow'] ? ' rel="nofollow"' : '';

    echo '<a href="' . $settings['button_link']['url'] . '" ' . $target . $nofollow . ' class="btn ' . $settings['button_style'] . '">' . $settings['button_text'] . '</a>';


  }

}


// Register widget
\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new \VD_Buttons_Widget() );