<?php
/**
 * Elementor Widget Base class.
 *
 * @package    ThemeGrill
 * @subpackage ColorMag
 * @since      ColorMag 3.0.0
 */

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Elementor Widget Base class.
 *
 * Class Colormag_Elementor_Widget_Base
 */
abstract class Colormag_Elementor_Widget_Base extends Widget_Base {

	/**
	 * Register Colormag_Elementor_Widget_Base widget controls.
	 *
	 * @access protected
	 */
	protected function _register_controls() {

		// Controls related to widget title section.
		$this->widget_title_controls();

		// Controls related to widget title style section.
		$this->widget_title_style_controls();

	}

	/**
	 * Controls related to widget title section.
	 */
	public function widget_title_controls() {

		// Widget title section.
		$this->start_controls_section(
			'section_colormag_widget_title_manage',
			array(
				'label' => esc_html__( 'Block Title', 'colormag' ),
			)
		);

		// Widget title.
		$this->add_control(
			'widget_title',
			array(
				'label'       => esc_html__( 'Title:', 'colormag' ),
				'type'        => Controls_Manager::TEXT,
				'placeholder' => esc_html__( 'Add your custom block title', 'colormag' ),
				'label_block' => true,
			)
		);

		$this->end_controls_section();

	}

	/**
	 * Controls related to widget title style section.
	 */
	public function widget_title_style_controls() {

		// Widget design section.
		$this->start_controls_section(
			'section_colormag_widget_title_design_manage',
			array(
				'label' => esc_html__( 'Widget Title', 'colormag' ),
				'tab'   => Controls_Manager::TAB_STYLE,
			)
		);

		$this->add_control(
			'widget_title_color',
			array(
				'label'     => esc_html__( 'Color:', 'colormag' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#289dcc',
				'scheme'    => array(
					'type'  => Scheme_Color::get_type(),
					'value' => Scheme_Color::COLOR_1,
				),
				'selectors' => array(
					'{{WRAPPER}} .tg-module-wrapper .module-title span' => 'background-color: {{VALUE}}',
					'{{WRAPPER}} .tg-module-wrapper .module-title'      => 'border-bottom-color: {{VALUE}}',
				),
			)
		);

		$this->add_control(
			'widget_title_text_color',
			array(
				'label'     => esc_html__( 'Text Color:', 'colormag' ),
				'type'      => Controls_Manager::COLOR,
				'default'   => '#ffffff',
				'scheme'    => array(
					'type'  => Scheme_Color::get_type(),
					'value' => Scheme_Color::COLOR_1,
				),
				'selectors' => array(
					'{{WRAPPER}} .tg-module-wrapper .module-title span' => 'color: {{VALUE}}',
				),
			)
		);

		$this->end_controls_section();

	}

}