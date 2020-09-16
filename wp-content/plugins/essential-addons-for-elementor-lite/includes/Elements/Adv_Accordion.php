<?php
<<<<<<< HEAD

=======
>>>>>>> origin/KyungYul-Noh
namespace Essential_Addons_Elementor\Elements;

// If this file is called directly, abort.
if (!defined('ABSPATH')) {
    exit;
}

use \Elementor\Controls_Manager;
<<<<<<< HEAD
=======
use \Elementor\Plugin;
>>>>>>> origin/KyungYul-Noh
use \Elementor\Group_Control_Background;
use \Elementor\Group_Control_Border;
use \Elementor\Group_Control_Box_Shadow;
use \Elementor\Group_Control_Typography;
<<<<<<< HEAD
use \Elementor\Plugin;
=======
>>>>>>> origin/KyungYul-Noh
use \Elementor\Widget_Base;

class Adv_Accordion extends Widget_Base
{
    use \Essential_Addons_Elementor\Traits\Helper;

    public function get_name()
    {
        return 'eael-adv-accordion';
    }

    public function get_title()
    {
        return esc_html__('Advanced Accordion', 'essential-addons-for-elementor-lite');
    }

    public function get_icon()
    {
        return 'eaicon-advanced-accordion';
    }

    public function get_categories()
    {
        return ['essential-addons-elementor'];
    }

    public function get_keywords()
    {
        return [
            'accordion',
            'ea accordion',
            'ea advanced accordion',
            'toggle',
            'collapsible',
            'faq',
            'group',
            'expand',
            'collapse',
            'ea',
<<<<<<< HEAD
            'essential addons',
        ];
    }

    public function get_style_depends()
    {
        return [
            'font-awesome-5-all',
            'font-awesome-4-shim',
        ];
    }

    public function get_script_depends()
    {
        return [
            'font-awesome-4-shim'
=======
            'essential addons'
>>>>>>> origin/KyungYul-Noh
        ];
    }

    public function get_custom_help_url()
    {
<<<<<<< HEAD
        return 'https://essential-addons.com/elementor/docs/advanced-accordion/';
    }
=======
		return 'https://essential-addons.com/elementor/docs/advanced-accordion/';
	}
>>>>>>> origin/KyungYul-Noh

    protected function _register_controls()
    {
        /**
         * Advance Accordion Settings
         */
        $this->start_controls_section(
            'eael_section_adv-accordion_settings',
            [
                'label' => esc_html__('General Settings', 'essential-addons-for-elementor-lite'),
            ]
        );
        $this->add_control(
            'eael_adv_accordion_type',
            [
<<<<<<< HEAD
                'label'       => esc_html__('Accordion Type', 'essential-addons-for-elementor-lite'),
                'type'        => Controls_Manager::SELECT,
                'default'     => 'accordion',
                'label_block' => false,
                'options'     => [
                    'accordion' => esc_html__('Accordion', 'essential-addons-for-elementor-lite'),
                    'toggle'    => esc_html__('Toggle', 'essential-addons-for-elementor-lite'),
                ],
            ]
        );
        $this->add_control(
            'eael_adv_accordion_title_tag',
            [
                'label'   => __('Select Accordion Tab Title Tag', 'essential-addons-for-elementor-lite'),
                'type'    => Controls_Manager::SELECT,
                'default' => 'span',
                'options' => [
                    'h1'   => __('H1', 'essential-addons-for-elementor-lite'),
                    'h2'   => __('H2', 'essential-addons-for-elementor-lite'),
                    'h3'   => __('H3', 'essential-addons-for-elementor-lite'),
                    'h4'   => __('H4', 'essential-addons-for-elementor-lite'),
                    'h5'   => __('H5', 'essential-addons-for-elementor-lite'),
                    'h6'   => __('H6', 'essential-addons-for-elementor-lite'),
                    'span' => __('Span', 'essential-addons-for-elementor-lite'),
                    'p'    => __('P', 'essential-addons-for-elementor-lite'),
                    'div'  => __('Div', 'essential-addons-for-elementor-lite'),
=======
                'label' => esc_html__('Accordion Type', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SELECT,
                'default' => 'accordion',
                'label_block' => false,
                'options' => [
                    'accordion' => esc_html__('Accordion', 'essential-addons-for-elementor-lite'),
                    'toggle' => esc_html__('Toggle', 'essential-addons-for-elementor-lite'),
>>>>>>> origin/KyungYul-Noh
                ],
            ]
        );
        $this->add_control(
            'eael_adv_accordion_icon_show',
            [
<<<<<<< HEAD
                'label'        => esc_html__('Enable Toggle Icon', 'essential-addons-for-elementor-lite'),
                'type'         => Controls_Manager::SWITCHER,
                'default'      => 'yes',
=======
                'label' => esc_html__('Enable Toggle Icon', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
>>>>>>> origin/KyungYul-Noh
                'return_value' => 'yes',
            ]
        );
        $this->add_control(
            'eael_adv_accordion_toggle_icon_postion',
            [
<<<<<<< HEAD
                'label'        => esc_html__('Toggle Icon Postion', 'essential-addons-for-elementor-lite'),
                'type'         => Controls_Manager::SWITCHER,
                'label_on'     => __('Right', 'essential-addons-for-elementor-lite'),
                'label_off'    => __('Left', 'essential-addons-for-elementor-lite'),
                'default'      => 'right',
                'return_value' => 'right',
                'condition'    => [
                    'eael_adv_accordion_icon_show' => 'yes',
=======
                'label' => esc_html__('Toggle Icon Postion', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SWITCHER,
                'label_on' => __( 'Right', 'essential-addons-for-elementor-lite' ),
				'label_off' => __( 'Left', 'essential-addons-for-elementor-lite' ),
                'default' => 'right',
                'return_value' => 'right',
                'condition' => [
                    'eael_adv_accordion_icon_show' => 'yes'
>>>>>>> origin/KyungYul-Noh
                ],
            ]
        );

        $this->add_control(
            'eael_adv_accordion_icon_new',
            [
<<<<<<< HEAD
                'label'            => esc_html__('Toggle Icon', 'essential-addons-for-elementor-lite'),
                'type'             => Controls_Manager::ICONS,
                'fa4compatibility' => 'eael_adv_accordion_icon',
                'default'          => [
                    'value'   => 'fas fa-angle-right',
                    'library' => 'fa-solid',
                ],
                'condition'        => [
=======
                'label' => esc_html__('Toggle Icon', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::ICONS,
                'fa4compatibility' => 'eael_adv_accordion_icon',
                'default' => [
                    'value' => 'fas fa-angle-right',
                    'library' => 'fa-solid',
                ],
                'condition' => [
>>>>>>> origin/KyungYul-Noh
                    'eael_adv_accordion_icon_show' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'eael_adv_accordion_toggle_speed',
            [
<<<<<<< HEAD
                'label'       => esc_html__('Toggle Speed (ms)', 'essential-addons-for-elementor-lite'),
                'type'        => Controls_Manager::NUMBER,
                'label_block' => false,
                'default'     => 300,
=======
                'label' => esc_html__('Toggle Speed (ms)', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::NUMBER,
                'label_block' => false,
                'default' => 300,
>>>>>>> origin/KyungYul-Noh
            ]
        );
        $this->end_controls_section();

        /**
         * Advance Accordion Content Settings
         */
        $this->start_controls_section(
            'eael_section_adv_accordion_content_settings',
            [
                'label' => esc_html__('Content Settings', 'essential-addons-for-elementor-lite'),
            ]
        );
        $this->add_control(
            'eael_adv_accordion_tab',
            [
<<<<<<< HEAD
                'type'        => Controls_Manager::REPEATER,
                'seperator'   => 'before',
                'default'     => [
=======
                'type' => Controls_Manager::REPEATER,
                'seperator' => 'before',
                'default' => [
>>>>>>> origin/KyungYul-Noh
                    ['eael_adv_accordion_tab_title' => esc_html__('Accordion Tab Title 1', 'essential-addons-for-elementor-lite')],
                    ['eael_adv_accordion_tab_title' => esc_html__('Accordion Tab Title 2', 'essential-addons-for-elementor-lite')],
                    ['eael_adv_accordion_tab_title' => esc_html__('Accordion Tab Title 3', 'essential-addons-for-elementor-lite')],
                ],
<<<<<<< HEAD
                'fields'      => [
                    [
                        'name'         => 'eael_adv_accordion_tab_default_active',
                        'label'        => esc_html__('Active as Default', 'essential-addons-for-elementor-lite'),
                        'type'         => Controls_Manager::SWITCHER,
                        'default'      => 'no',
                        'return_value' => 'yes',
                    ],
                    [
                        'name'         => 'eael_adv_accordion_tab_icon_show',
                        'label'        => esc_html__('Enable Tab Icon', 'essential-addons-for-elementor-lite'),
                        'type'         => Controls_Manager::SWITCHER,
                        'default'      => 'yes',
                        'return_value' => 'yes',
                    ],
                    [
                        'name'             => 'eael_adv_accordion_tab_title_icon_new',
                        'label'            => esc_html__('Icon', 'essential-addons-for-elementor-lite'),
                        'type'             => Controls_Manager::ICONS,
                        'fa4compatibility' => 'eael_adv_accordion_tab_title_icon',
                        'default'          => [
                            'value'   => 'fas fa-plus',
                            'library' => 'fa-solid',
                        ],
                        'condition'        => [
=======
                'fields' => [
                    [
                        'name' => 'eael_adv_accordion_tab_default_active',
                        'label' => esc_html__('Active as Default', 'essential-addons-for-elementor-lite'),
                        'type' => Controls_Manager::SWITCHER,
                        'default' => 'no',
                        'return_value' => 'yes',
                    ],
                    [
                        'name' => 'eael_adv_accordion_tab_icon_show',
                        'label' => esc_html__('Enable Tab Icon', 'essential-addons-for-elementor-lite'),
                        'type' => Controls_Manager::SWITCHER,
                        'default' => 'yes',
                        'return_value' => 'yes',
                    ],
                    [
                        'name' => 'eael_adv_accordion_tab_title_icon_new',
                        'label' => esc_html__('Icon', 'essential-addons-for-elementor-lite'),
                        'type' => Controls_Manager::ICONS,
                        'fa4compatibility' => 'eael_adv_accordion_tab_title_icon',
                        'default' => [
                            'value' => 'fas fa-plus',
                            'library' => 'fa-solid',
                        ],
                        'condition' => [
>>>>>>> origin/KyungYul-Noh
                            'eael_adv_accordion_tab_icon_show' => 'yes',
                        ],
                    ],
                    [
<<<<<<< HEAD
                        'name'    => 'eael_adv_accordion_tab_title',
                        'label'   => esc_html__('Tab Title', 'essential-addons-for-elementor-lite'),
                        'type'    => Controls_Manager::TEXT,
=======
                        'name' => 'eael_adv_accordion_tab_title',
                        'label' => esc_html__('Tab Title', 'essential-addons-for-elementor-lite'),
                        'type' => Controls_Manager::TEXT,
>>>>>>> origin/KyungYul-Noh
                        'default' => esc_html__('Tab Title', 'essential-addons-for-elementor-lite'),
                        'dynamic' => ['active' => true],
                    ],
                    [
<<<<<<< HEAD
                        'name'    => 'eael_adv_accordion_text_type',
                        'label'   => __('Content Type', 'essential-addons-for-elementor-lite'),
                        'type'    => Controls_Manager::SELECT,
                        'options' => [
                            'content'  => __('Content', 'essential-addons-for-elementor-lite'),
=======
                        'name' => 'eael_adv_accordion_text_type',
                        'label' => __('Content Type', 'essential-addons-for-elementor-lite'),
                        'type' => Controls_Manager::SELECT,
                        'options' => [
                            'content' => __('Content', 'essential-addons-for-elementor-lite'),
>>>>>>> origin/KyungYul-Noh
                            'template' => __('Saved Templates', 'essential-addons-for-elementor-lite'),
                        ],
                        'default' => 'content',
                    ],
                    [
<<<<<<< HEAD
                        'name'      => 'eael_primary_templates',
                        'label'     => __('Choose Template', 'essential-addons-for-elementor-lite'),
                        'type'      => Controls_Manager::SELECT,
                        'options'   => $this->eael_get_page_templates(),
=======
                        'name' => 'eael_primary_templates',
                        'label' => __('Choose Template', 'essential-addons-for-elementor-lite'),
                        'type' => Controls_Manager::SELECT,
                        'options' => $this->eael_get_page_templates(),
>>>>>>> origin/KyungYul-Noh
                        'condition' => [
                            'eael_adv_accordion_text_type' => 'template',
                        ],
                    ],
                    [
<<<<<<< HEAD
                        'name'      => 'eael_adv_accordion_tab_content',
                        'label'     => esc_html__('Tab Content', 'essential-addons-for-elementor-lite'),
                        'type'      => Controls_Manager::WYSIWYG,
                        'default'   => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, neque qui velit. Magni dolorum quidem ipsam eligendi, totam, facilis laudantium cum accusamus ullam voluptatibus commodi numquam, error, est. Ea, consequatur.', 'essential-addons-for-elementor-lite'),
                        'dynamic'   => ['active' => true],
=======
                        'name' => 'eael_adv_accordion_tab_content',
                        'label' => esc_html__('Tab Content', 'essential-addons-for-elementor-lite'),
                        'type' => Controls_Manager::WYSIWYG,
                        'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, neque qui velit. Magni dolorum quidem ipsam eligendi, totam, facilis laudantium cum accusamus ullam voluptatibus commodi numquam, error, est. Ea, consequatur.', 'essential-addons-for-elementor-lite'),
                        'dynamic' => ['active' => true],
>>>>>>> origin/KyungYul-Noh
                        'condition' => [
                            'eael_adv_accordion_text_type' => 'content',
                        ],
                    ],
                ],
                'title_field' => '{{eael_adv_accordion_tab_title}}',
            ]
        );
        $this->end_controls_section();

        if (!apply_filters('eael/pro_enabled', false)) {
            $this->start_controls_section(
                'eael_section_pro',
                [
                    'label' => __('Go Premium for More Features', 'essential-addons-for-elementor-lite'),
                ]
            );

            $this->add_control(
                'eael_control_get_pro',
                [
<<<<<<< HEAD
                    'label'       => __('Unlock more possibilities', 'essential-addons-for-elementor-lite'),
                    'type'        => Controls_Manager::CHOOSE,
                    'options'     => [
=======
                    'label' => __('Unlock more possibilities', 'essential-addons-for-elementor-lite'),
                    'type' => Controls_Manager::CHOOSE,
                    'options' => [
>>>>>>> origin/KyungYul-Noh
                        '1' => [
                            'title' => '',
                            'icon' => 'fa fa-unlock-alt',
                        ],
                    ],
<<<<<<< HEAD
                    'default'     => '1',
=======
                    'default' => '1',
>>>>>>> origin/KyungYul-Noh
                    'description' => '<span class="pro-feature"> Get the  <a href="https://wpdeveloper.net/in/upgrade-essential-addons-elementor" target="_blank">Pro version</a> for more stunning elements and customization options.</span>',
                ]
            );

            $this->end_controls_section();
        }

        /**
         * -------------------------------------------
         * Tab Style Advance Accordion Generel Style
         * -------------------------------------------
         */
        $this->start_controls_section(
            'eael_section_adv_accordion_style_settings',
            [
                'label' => esc_html__('General Style', 'essential-addons-for-elementor-lite'),
<<<<<<< HEAD
                'tab'   => Controls_Manager::TAB_STYLE,
=======
                'tab' => Controls_Manager::TAB_STYLE,
>>>>>>> origin/KyungYul-Noh
            ]
        );
        $this->add_responsive_control(
            'eael_adv_accordion_padding',
            [
<<<<<<< HEAD
                'label'      => esc_html__('Padding', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
=======
                'label' => esc_html__('Padding', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
>>>>>>> origin/KyungYul-Noh
                    '{{WRAPPER}} .eael-adv-accordion' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'eael_adv_accordion_margin',
            [
<<<<<<< HEAD
                'label'      => esc_html__('Margin', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
=======
                'label' => esc_html__('Margin', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
>>>>>>> origin/KyungYul-Noh
                    '{{WRAPPER}} .eael-adv-accordion' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
<<<<<<< HEAD
                'name'     => 'eael_adv_accordion_border',
                'label'    => esc_html__('Border', 'essential-addons-for-elementor-lite'),
=======
                'name' => 'eael_adv_accordion_border',
                'label' => esc_html__('Border', 'essential-addons-for-elementor-lite'),
>>>>>>> origin/KyungYul-Noh
                'selector' => '{{WRAPPER}} .eael-adv-accordion',
            ]
        );
        $this->add_responsive_control(
            'eael_adv_accordion_border_radius',
            [
<<<<<<< HEAD
                'label'      => esc_html__('Border Radius', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
=======
                'label' => esc_html__('Border Radius', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
>>>>>>> origin/KyungYul-Noh
                    '{{WRAPPER}} .eael-adv-accordion' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
<<<<<<< HEAD
                'name'     => 'eael_adv_accordion_box_shadow',
=======
                'name' => 'eael_adv_accordion_box_shadow',
>>>>>>> origin/KyungYul-Noh
                'selector' => '{{WRAPPER}} .eael-adv-accordion',
            ]
        );
        $this->end_controls_section();

        /**
         * -------------------------------------------
         * Tab Style Advance Accordion Content Style
         * -------------------------------------------
         */
        $this->start_controls_section(
            'eael_section_adv_accordions_tab_style_settings',
            [
                'label' => esc_html__('Tab Style', 'essential-addons-for-elementor-lite'),
<<<<<<< HEAD
                'tab'   => Controls_Manager::TAB_STYLE,
=======
                'tab' => Controls_Manager::TAB_STYLE,
>>>>>>> origin/KyungYul-Noh
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
<<<<<<< HEAD
                'name'     => 'eael_adv_accordion_tab_title_typography',
                'selector' => '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header .eael-accordion-tab-title',
=======
                'name' => 'eael_adv_accordion_tab_title_typography',
                'selector' => '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header',
>>>>>>> origin/KyungYul-Noh
            ]
        );
        $this->add_responsive_control(
            'eael_adv_accordion_tab_icon_size',
            [
<<<<<<< HEAD
                'label'      => __('Icon Size', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::SLIDER,
                'default'    => [
=======
                'label' => __('Icon Size', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SLIDER,
                'default' => [
>>>>>>> origin/KyungYul-Noh
                    'size' => 16,
                    'unit' => 'px',
                ],
                'size_units' => ['px'],
<<<<<<< HEAD
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header i'   => 'font-size: {{SIZE}}{{UNIT}};',
=======
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header i' => 'font-size: {{SIZE}}{{UNIT}};',
>>>>>>> origin/KyungYul-Noh
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header img' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'eael_adv_accordion_tab_icon_gap',
            [
<<<<<<< HEAD
                'label'      => __('Icon Gap', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::SLIDER,
                'default'    => [
=======
                'label' => __('Icon Gap', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SLIDER,
                'default' => [
>>>>>>> origin/KyungYul-Noh
                    'size' => 10,
                    'unit' => 'px',
                ],
                'size_units' => ['px'],
<<<<<<< HEAD
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header i'   => 'margin-left: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header img' => 'margin-left: {{SIZE}}{{UNIT}};',
                ],
                'condition'  => [
                    'eael_adv_accordion_toggle_icon_postion' => 'right',
                ],
=======
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header i' => 'margin-left: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header img'   => 'margin-left: {{SIZE}}{{UNIT}};'
                ],
                'condition' => [
                    'eael_adv_accordion_toggle_icon_postion' => 'right'
                ]
>>>>>>> origin/KyungYul-Noh
            ]
        );
        // after change toggle icon postion, tab icon will be also change postion then this control will be work
        $this->add_responsive_control(
            'eael_adv_accordion_tab_icon_gap_left',
            [
<<<<<<< HEAD
                'label'      => __('Icon Gap', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::SLIDER,
                'default'    => [
=======
                'label' => __('Icon Gap', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SLIDER,
                'default' => [
>>>>>>> origin/KyungYul-Noh
                    'size' => 10,
                    'unit' => 'px',
                ],
                'size_units' => ['px'],
<<<<<<< HEAD
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header i'   => 'margin-left: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header img' => 'margin-left: {{SIZE}}{{UNIT}};',
                ],
                'condition'  => [
                    'eael_adv_accordion_toggle_icon_postion' => '',
                ],
=======
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header i' => 'margin-left: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header img'   => 'margin-left: {{SIZE}}{{UNIT}};'
                ],
                'condition' => [
                    'eael_adv_accordion_toggle_icon_postion' => ''
                ]
>>>>>>> origin/KyungYul-Noh
            ]
        );

        $this->add_responsive_control(
            'eael_adv_accordion_tab_distance',
            [
<<<<<<< HEAD
                'label'      => esc_html__('Distance', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
=======
                'label' => esc_html__('Distance', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
>>>>>>> origin/KyungYul-Noh
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list' => 'margin-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'eael_adv_accordion_tab_padding',
            [
<<<<<<< HEAD
                'label'      => esc_html__('Padding', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
=======
                'label' => esc_html__('Padding', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
>>>>>>> origin/KyungYul-Noh
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'eael_adv_accordion_tab_margin',
            [
<<<<<<< HEAD
                'label'      => esc_html__('Margin', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
=======
                'label' => esc_html__('Margin', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
>>>>>>> origin/KyungYul-Noh
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs('eael_adv_accordion_header_tabs');
        # Normal State Tab
        $this->start_controls_tab('eael_adv_accordion_header_normal', ['label' => esc_html__('Normal', 'essential-addons-for-elementor-lite')]);
        $this->add_control(
            'eael_adv_accordion_tab_color',
            [
<<<<<<< HEAD
                'label'     => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f1f1f1',
=======
                'label' => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '#f1f1f1',
>>>>>>> origin/KyungYul-Noh
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
<<<<<<< HEAD
                'name'     => 'eael_adv_accordion_tab_bgtype',
                'types'    => ['classic', 'gradient'],
=======
                'name' => 'eael_adv_accordion_tab_bgtype',
                'types' => ['classic', 'gradient'],
>>>>>>> origin/KyungYul-Noh
                'selector' => '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header',
            ]
        );
        $this->add_control(
            'eael_adv_accordion_tab_text_color',
            [
<<<<<<< HEAD
                'label'     => esc_html__('Text Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#333',
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header'                           => 'color: {{VALUE}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header .eael-accordion-tab-title' => 'color: {{VALUE}};',
=======
                'label' => esc_html__('Text Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '#333',
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header' => 'color: {{VALUE}};',
>>>>>>> origin/KyungYul-Noh
                ],
            ]
        );
        $this->add_control(
            'eael_adv_accordion_tab_icon_color',
            [
<<<<<<< HEAD
                'label'     => esc_html__('Icon Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#333',
=======
                'label' => esc_html__('Icon Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '#333',
>>>>>>> origin/KyungYul-Noh
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header .fa' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'eael_adv_tabs_icon_show' => 'yes',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
<<<<<<< HEAD
                'name'     => 'eael_adv_accordion_tab_border',
                'label'    => esc_html__('Border', 'essential-addons-for-elementor-lite'),
=======
                'name' => 'eael_adv_accordion_tab_border',
                'label' => esc_html__('Border', 'essential-addons-for-elementor-lite'),
>>>>>>> origin/KyungYul-Noh
                'selector' => '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header',
            ]
        );
        $this->add_responsive_control(
            'eael_adv_accordion_tab_border_radius',
            [
<<<<<<< HEAD
                'label'      => esc_html__('Border Radius', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
=======
                'label' => esc_html__('Border Radius', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
>>>>>>> origin/KyungYul-Noh
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        # Hover State Tab
        $this->start_controls_tab(
            'eael_adv_accordion_header_hover',
            [
                'label' => esc_html__('Hover', 'essential-addons-for-elementor-lite'),
            ]
        );
        $this->add_control(
            'eael_adv_accordion_tab_color_hover',
            [
<<<<<<< HEAD
                'label'     => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#414141',
=======
                'label' => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '#414141',
>>>>>>> origin/KyungYul-Noh
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
<<<<<<< HEAD
                'name'     => 'eael_adv_accordion_tab_bgtype_hover',
                'types'    => ['classic', 'gradient'],
=======
                'name' => 'eael_adv_accordion_tab_bgtype_hover',
                'types' => ['classic', 'gradient'],
>>>>>>> origin/KyungYul-Noh
                'selector' => '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header:hover',
            ]
        );
        $this->add_control(
            'eael_adv_accordion_tab_text_color_hover',
            [
<<<<<<< HEAD
                'label'     => esc_html__('Text Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header:hover'                           => 'color: {{VALUE}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header:hover .eael-accordion-tab-title' => 'color: {{VALUE}};',
=======
                'label' => esc_html__('Text Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header:hover' => 'color: {{VALUE}};',
>>>>>>> origin/KyungYul-Noh
                ],
            ]
        );
        $this->add_control(
            'eael_adv_accordion_tab_icon_color_hover',
            [
<<<<<<< HEAD
                'label'     => esc_html__('Icon Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
=======
                'label' => esc_html__('Icon Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '#fff',
>>>>>>> origin/KyungYul-Noh
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header:hover .fa' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'eael_adv_accordion_toggle_icon_show' => 'yes',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
<<<<<<< HEAD
                'name'     => 'eael_adv_accordion_tab_border_hover',
                'label'    => esc_html__('Border', 'essential-addons-for-elementor-lite'),
=======
                'name' => 'eael_adv_accordion_tab_border_hover',
                'label' => esc_html__('Border', 'essential-addons-for-elementor-lite'),
>>>>>>> origin/KyungYul-Noh
                'selector' => '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header:hover',
            ]
        );
        $this->add_responsive_control(
            'eael_adv_accordion_tab_border_radius_hover',
            [
<<<<<<< HEAD
                'label'      => esc_html__('Border Radius', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
=======
                'label' => esc_html__('Border Radius', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
>>>>>>> origin/KyungYul-Noh
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header:hover' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();

        #Active State Tab
        $this->start_controls_tab(
            'eael_adv_accordion_header_active',
            [
                'label' => esc_html__('Active', 'essential-addons-for-elementor-lite'),
            ]
        );
        $this->add_control(
            'eael_adv_accordion_tab_color_active',
            [
<<<<<<< HEAD
                'label'     => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#444',
=======
                'label' => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '#444',
>>>>>>> origin/KyungYul-Noh
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header.active' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
<<<<<<< HEAD
                'name'     => 'eael_adv_accordion_tab_bgtype_active',
                'types'    => ['classic', 'gradient'],
=======
                'name' => 'eael_adv_accordion_tab_bgtype_active',
                'types' => ['classic', 'gradient'],
>>>>>>> origin/KyungYul-Noh
                'selector' => '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header.active',
            ]
        );
        $this->add_control(
            'eael_adv_accordion_tab_text_color_active',
            [
<<<<<<< HEAD
                'label'     => esc_html__('Text Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header.active'                           => 'color: {{VALUE}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header.active .eael-accordion-tab-title' => 'color: {{VALUE}};',
=======
                'label' => esc_html__('Text Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header.active' => 'color: {{VALUE}};',
>>>>>>> origin/KyungYul-Noh
                ],
            ]
        );
        $this->add_control(
            'eael_adv_accordion_tab_icon_color_active',
            [
<<<<<<< HEAD
                'label'     => esc_html__('Icon Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
=======
                'label' => esc_html__('Icon Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '#fff',
>>>>>>> origin/KyungYul-Noh
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header.active .fa' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'eael_adv_accordion_toggle_icon_show' => 'yes',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
<<<<<<< HEAD
                'name'     => 'eael_adv_accordion_tab_border_active',
                'label'    => esc_html__('Border', 'essential-addons-for-elementor-lite'),
=======
                'name' => 'eael_adv_accordion_tab_border_active',
                'label' => esc_html__('Border', 'essential-addons-for-elementor-lite'),
>>>>>>> origin/KyungYul-Noh
                'selector' => '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header.active',
            ]
        );
        $this->add_responsive_control(
            'eael_adv_accordion_tab_border_radius_active',
            [
<<<<<<< HEAD
                'label'      => esc_html__('Border Radius', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
=======
                'label' => esc_html__('Border Radius', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
>>>>>>> origin/KyungYul-Noh
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header.active' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();

        /**
         * -------------------------------------------
         * Tab Style Advance Accordion Content Style
         * -------------------------------------------
         */
        $this->start_controls_section(
            'eael_section_adv_accordion_tab_content_style_settings',
            [
                'label' => esc_html__('Content Style', 'essential-addons-for-elementor-lite'),
<<<<<<< HEAD
                'tab'   => Controls_Manager::TAB_STYLE,
=======
                'tab' => Controls_Manager::TAB_STYLE,
>>>>>>> origin/KyungYul-Noh
            ]
        );

        $this->add_control(
            'adv_accordion_content_bg_color',
            [
<<<<<<< HEAD
                'label'     => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
=======
                'label' => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
>>>>>>> origin/KyungYul-Noh
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-content' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
<<<<<<< HEAD
                'name'     => 'adv_accordion_content_bgtype',
                'types'    => ['classic', 'gradient'],
=======
                'name' => 'adv_accordion_content_bgtype',
                'types' => ['classic', 'gradient'],
>>>>>>> origin/KyungYul-Noh
                'selector' => '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-content',
            ]
        );

        $this->add_control(
            'adv_accordion_content_text_color',
            [
<<<<<<< HEAD
                'label'     => esc_html__('Text Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#333',
=======
                'label' => esc_html__('Text Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '#333',
>>>>>>> origin/KyungYul-Noh
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-content' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
<<<<<<< HEAD
                'name'     => 'eael_adv_accordion_content_typography',
=======
                'name' => 'eael_adv_accordion_content_typography',
>>>>>>> origin/KyungYul-Noh
                'selector' => '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-content',
            ]
        );
        $this->add_responsive_control(
            'eael_adv_accordion_content_padding',
            [
<<<<<<< HEAD
                'label'      => esc_html__('Padding', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
=======
                'label' => esc_html__('Padding', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
>>>>>>> origin/KyungYul-Noh
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'eael_adv_accordion_content_margin',
            [
<<<<<<< HEAD
                'label'      => esc_html__('Margin', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
=======
                'label' => esc_html__('Margin', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors' => [
>>>>>>> origin/KyungYul-Noh
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
<<<<<<< HEAD
                'name'     => 'eael_adv_accordion_content_border',
                'label'    => esc_html__('Border', 'essential-addons-for-elementor-lite'),
=======
                'name' => 'eael_adv_accordion_content_border',
                'label' => esc_html__('Border', 'essential-addons-for-elementor-lite'),
>>>>>>> origin/KyungYul-Noh
                'selector' => '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-content',
            ]
        );
        $this->add_group_control(
            Group_Control_Box_Shadow::get_type(),
            [
<<<<<<< HEAD
                'name'      => 'eael_adv_accordion_content_shadow',
                'selector'  => '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-content',
=======
                'name' => 'eael_adv_accordion_content_shadow',
                'selector' => '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-content',
>>>>>>> origin/KyungYul-Noh
                'separator' => 'before',
            ]
        );
        $this->end_controls_section();

        /**
         * Advance Accordion Caret Settings
         */
        $this->start_controls_section(
            'eael_section_adv_accordion_caret_settings',
            [
                'label' => esc_html__('Toggle Caret Style', 'essential-addons-for-elementor-lite'),
<<<<<<< HEAD
                'tab'   => Controls_Manager::TAB_STYLE,
=======
                'tab' => Controls_Manager::TAB_STYLE,
>>>>>>> origin/KyungYul-Noh
            ]
        );

        $this->add_responsive_control(
            'eael_adv_accordion_tab_toggle_icon_size',
            [
<<<<<<< HEAD
                'label'      => __('Icon Size', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::SLIDER,
                'default'    => [
=======
                'label' => __('Icon Size', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SLIDER,
                'default' => [
>>>>>>> origin/KyungYul-Noh
                    'size' => 16,
                    'unit' => 'px',
                ],
                'size_units' => ['px'],
<<<<<<< HEAD
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 100,
                        'step' => 1,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header .fa-toggle' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header > img'      => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
                ],
                'condition'  => [
=======
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 1,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header .fa-toggle' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header > img' => 'height: {{SIZE}}{{UNIT}}; width: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
>>>>>>> origin/KyungYul-Noh
                    'eael_adv_accordion_icon_show' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'eael_adv_accordion_tab_toggle_icon_padding',
            [
<<<<<<< HEAD
                'label'      => __('Icon Padding', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header .fa-toggle' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header > img'      => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition'  => [
=======
                'label' => __('Icon Padding', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header .fa-toggle'    => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header > img'         => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
>>>>>>> origin/KyungYul-Noh
                    'eael_adv_accordion_icon_show' => 'yes',
                ],
            ]
        );
        $this->add_responsive_control(
            'eael_adv_accordion_tab_toggle_icon_radius',
            [
<<<<<<< HEAD
                'label'      => __('Icon Radius', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors'  => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header .fa-toggle' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header > img'      => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition'  => [
=======
                'label' => __('Icon Radius', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header .fa-toggle'    => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header > img'         => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'condition' => [
>>>>>>> origin/KyungYul-Noh
                    'eael_adv_accordion_icon_show' => 'yes',
                ],
            ]
        );

        // caret tabs
        $this->start_controls_tabs(
<<<<<<< HEAD
            'eael_adv_accordion_tab_caret_tabs'
        );

        $this->start_controls_tab(
            'eael_adv_accordion_tab_caret_tabs_normal',
            [
                'label' => __('Normal', 'essential-addons-for-elementor-lite'),
            ]
        );
        $this->add_control(
            'eael_adv_tabs_tab_toggle_color',
            [
                'label'     => esc_html__('Caret Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#444',
=======
			'eael_adv_accordion_tab_caret_tabs'
		);

		$this->start_controls_tab(
			'eael_adv_accordion_tab_caret_tabs_normal',
			[
				'label' => __( 'Normal', 'essential-addons-for-elementor-lite' ),
			]
		);
        $this->add_control(
            'eael_adv_tabs_tab_toggle_color',
            [
                'label' => esc_html__('Caret Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '#444',
>>>>>>> origin/KyungYul-Noh
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header .fa-toggle' => 'color: {{VALUE}};',
                ],
                'condition' => [
                    'eael_adv_accordion_icon_show' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'eael_adv_tabs_tab_toggle_background_color',
            [
<<<<<<< HEAD
                'label'     => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
=======
                'label' => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
>>>>>>> origin/KyungYul-Noh
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header .fa-toggle' => 'background-color: {{VALUE}};',
                ],
                'condition' => [
                    'eael_adv_accordion_icon_show' => 'yes',
                ],
            ]
        );
        $this->add_group_control(
<<<<<<< HEAD
            Group_Control_Border::get_type(),
            [
                'name' => 'eael_adv_tabs_tab_toggle_border',
                'label' => __('Border', 'essential-addons-for-elementor-lite'),
                'selector' => '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header .fa-toggle',
            ]
        );



        $this->end_controls_tab();

        $this->start_controls_tab(
            'eael_adv_accordion_tab_caret_tabs_hover',
            [
                'label' => __('Hover', 'essential-addons-for-elementor-lite'),
            ]
        );
        $this->add_control(
            'eael_adv_tabs_tab_toggle_hover_color',
            [
                'label'     => esc_html__('Caret Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header.active .fa-toggle:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list:hover .eael-accordion-header .fa-toggle:hover'  => 'color: {{VALUE}};',
=======
			Group_Control_Border::get_type(),
			[
				'name' => 'eael_adv_tabs_tab_toggle_border',
				'label' => __( 'Border', 'essential-addons-for-elementor-lite' ),
				'selector' => '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header .fa-toggle',
			]
		);



		$this->end_controls_tab();

		$this->start_controls_tab(
			'eael_adv_accordion_tab_caret_tabs_hover',
			[
				'label' => __( 'Hover', 'essential-addons-for-elementor-lite' ),
			]
		);
        $this->add_control(
            'eael_adv_tabs_tab_toggle_hover_color',
            [
                'label' => esc_html__('Caret Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header.active .fa-toggle:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list:hover .eael-accordion-header .fa-toggle:hover' => 'color: {{VALUE}};',
>>>>>>> origin/KyungYul-Noh
                ],
                'condition' => [
                    'eael_adv_accordion_icon_show' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'eael_adv_tabs_tab_toggle_hover_background_color',
            [
<<<<<<< HEAD
                'label'     => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header.active .fa-toggle:hover' => 'background-color: {{VALUE}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list:hover .eael-accordion-header .fa-toggle:hover'  => 'background-color: {{VALUE}};',
=======
                'label' => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header.active .fa-toggle:hover'   => 'background-color: {{VALUE}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list:hover .eael-accordion-header .fa-toggle:hover'    => 'background-color: {{VALUE}};',
>>>>>>> origin/KyungYul-Noh
                ],
                'condition' => [
                    'eael_adv_accordion_icon_show' => 'yes',
                ],
            ]
        );
        $this->add_group_control(
<<<<<<< HEAD
            Group_Control_Border::get_type(),
            [
                'name' => 'eael_adv_tabs_tab_toggle_border_hover',
                'label' => __('Border', 'essential-addons-for-elementor-lite'),
                'selector' => '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header .fa-toggle:hover',
            ]
        );
=======
			Group_Control_Border::get_type(),
			[
				'name' => 'eael_adv_tabs_tab_toggle_border_hover',
				'label' => __( 'Border', 'essential-addons-for-elementor-lite' ),
				'selector' => '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header .fa-toggle:hover',
			]
		);
>>>>>>> origin/KyungYul-Noh


        $this->end_controls_tab();

        $this->start_controls_tab(
<<<<<<< HEAD
            'eael_adv_accordion_tab_caret_tabs_active',
            [
                'label' => __('Active', 'essential-addons-for-elementor-lite'),
            ]
        );
        $this->add_control(
            'eael_adv_tabs_tab_toggle_active_color',
            [
                'label'     => esc_html__('Caret Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header.active .fa-toggle' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list:hover .eael-accordion-header .fa-toggle'  => 'color: {{VALUE}};',
=======
			'eael_adv_accordion_tab_caret_tabs_active',
			[
				'label' => __( 'Active', 'essential-addons-for-elementor-lite' ),
			]
		);
        $this->add_control(
            'eael_adv_tabs_tab_toggle_active_color',
            [
                'label' => esc_html__('Caret Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '#fff',
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header.active .fa-toggle' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list:hover .eael-accordion-header .fa-toggle' => 'color: {{VALUE}};',
>>>>>>> origin/KyungYul-Noh
                ],
                'condition' => [
                    'eael_adv_accordion_icon_show' => 'yes',
                ],
            ]
        );
        $this->add_control(
            'eael_adv_tabs_tab_toggle_active_background_color',
            [
<<<<<<< HEAD
                'label'     => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header.active .fa-toggle' => 'background-color: {{VALUE}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list:hover .eael-accordion-header .fa-toggle'  => 'background-color: {{VALUE}};',
=======
                'label' => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header.active .fa-toggle'   => 'background-color: {{VALUE}};',
                    '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list:hover .eael-accordion-header .fa-toggle'    => 'background-color: {{VALUE}};',
>>>>>>> origin/KyungYul-Noh
                ],
                'condition' => [
                    'eael_adv_accordion_icon_show' => 'yes',
                ],
            ]
        );
        $this->add_group_control(
<<<<<<< HEAD
            Group_Control_Border::get_type(),
            [
                'name' => 'eael_adv_tabs_tab_toggle_border_active',
                'label' => __('Border', 'essential-addons-for-elementor-lite'),
                'selector' => '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header.active .fa-toggle',
            ]
        );


        $this->end_controls_tab();

        $this->end_controls_tabs();

        // end caret tabs

=======
			Group_Control_Border::get_type(),
			[
				'name' => 'eael_adv_tabs_tab_toggle_border_active',
				'label' => __( 'Border', 'essential-addons-for-elementor-lite' ),
				'selector' => '{{WRAPPER}} .eael-adv-accordion .eael-accordion-list .eael-accordion-header.active .fa-toggle',
			]
		);


		$this->end_controls_tab();

		$this->end_controls_tabs();

        // end caret tabs


>>>>>>> origin/KyungYul-Noh
        $this->end_controls_section();
    }

    protected function render()
    {

        $settings = $this->get_settings_for_display();
        $id_int = substr($this->get_id_int(), 0, 3);

        $this->add_render_attribute('eael-adv-accordion', 'class', 'eael-adv-accordion');
        $this->add_render_attribute('eael-adv-accordion', 'id', 'eael-adv-accordion-' . esc_attr($this->get_id()));

        // icon handler
        $accordion_icon_migrated = isset($settings['__fa4_migrated']['eael_adv_accordion_icon_new']);
        $accordion_icon_is_new = empty($settings['eael_adv_accordion_icon']);
<<<<<<< HEAD
?>
        <div <?php echo $this->get_render_attribute_string('eael-adv-accordion'); ?> <?php echo 'data-accordion-id="' . esc_attr($this->get_id()) . '"'; ?> <?php echo !empty($settings['eael_adv_accordion_type']) ? 'data-accordion-type="' . esc_attr($settings['eael_adv_accordion_type']) . '"' : 'accordion'; ?> <?php echo !empty($settings['eael_adv_accordion_toggle_speed']) ? 'data-toogle-speed="' . esc_attr($settings['eael_adv_accordion_toggle_speed']) . '"' : '300'; ?>>
    <?php foreach ($settings['eael_adv_accordion_tab'] as $index => $tab) {
=======
        ?>
        <div
            <?php echo $this->get_render_attribute_string('eael-adv-accordion'); ?>
            <?php echo 'data-accordion-id="' . esc_attr($this->get_id()) . '"'; ?>
            <?php echo !empty($settings['eael_adv_accordion_type']) ? 'data-accordion-type="' . esc_attr($settings['eael_adv_accordion_type']) . '"' : 'accordion'; ?>
            <?php echo !empty($settings['eael_adv_accordion_toggle_speed']) ? 'data-toogle-speed="' . esc_attr($settings['eael_adv_accordion_toggle_speed']) . '"' : '300'; ?>
        >
		<?php foreach ($settings['eael_adv_accordion_tab'] as $index => $tab) {
>>>>>>> origin/KyungYul-Noh
            $tab_count = $index + 1;
            $tab_title_setting_key = $this->get_repeater_setting_key('eael_adv_accordion_tab_title', 'eael_adv_accordion_tab', $index);
            $tab_content_setting_key = $this->get_repeater_setting_key('eael_adv_accordion_tab_content', 'eael_adv_accordion_tab', $index);

            $tab_title_class = ['elementor-tab-title', 'eael-accordion-header'];
            $tab_content_class = ['eael-accordion-content', 'clearfix'];

            $tab_icon_migrated = isset($tab['__fa4_migrated']['eael_adv_accordion_tab_title_icon_new']);
            $tab_icon_is_new = empty($tab['eael_adv_accordion_tab_title_icon']);

            if ($tab['eael_adv_accordion_tab_default_active'] == 'yes') {
                $tab_title_class[] = 'active-default';
                $tab_content_class[] = 'active-default';
            }

            $this->add_render_attribute($tab_title_setting_key, [
<<<<<<< HEAD
                'id'            => 'elementor-tab-title-' . $id_int . $tab_count,
                'class'         => $tab_title_class,
                'tabindex'      => $id_int . $tab_count,
                'data-tab'      => $tab_count,
                'role'          => 'tab',
=======
                'id' => 'elementor-tab-title-' . $id_int . $tab_count,
                'class' => $tab_title_class,
                'tabindex' => $id_int . $tab_count,
                'data-tab' => $tab_count,
                'role' => 'tab',
>>>>>>> origin/KyungYul-Noh
                'aria-controls' => 'elementor-tab-content-' . $id_int . $tab_count,
            ]);

            $this->add_render_attribute($tab_content_setting_key, [
<<<<<<< HEAD
                'id'              => 'elementor-tab-content-' . $id_int . $tab_count,
                'class'           => $tab_content_class,
                'data-tab'        => $tab_count,
                'role'            => 'tabpanel',
=======
                'id' => 'elementor-tab-content-' . $id_int . $tab_count,
                'class' => $tab_content_class,
                'data-tab' => $tab_count,
                'role' => 'tabpanel',
>>>>>>> origin/KyungYul-Noh
                'aria-labelledby' => 'elementor-tab-title-' . $id_int . $tab_count,
            ]);

            echo '<div class="eael-accordion-list">
                <div ' . $this->get_render_attribute_string($tab_title_setting_key) . '>';
<<<<<<< HEAD
            // toggle icon if user set position to left
            if ($settings['eael_adv_accordion_icon_show'] === 'yes' && $settings['eael_adv_accordion_toggle_icon_postion'] === '') {
                if ($accordion_icon_is_new || $accordion_icon_migrated) {
                    if (isset($settings['eael_adv_accordion_icon_new']['value']['url'])) {
                        echo '<img src="' . $settings['eael_adv_accordion_icon_new']['value']['url'] . '" />';
                    } else {
                        echo '<i class="' . $settings['eael_adv_accordion_icon_new']['value'] . ' fa-toggle"></i>';
                    }
                } else {
                    echo '<i class="' . $settings['eael_adv_accordion_icon'] . ' fa-toggle"></i>';
                }
            }
            // tab title
            if ($settings['eael_adv_accordion_toggle_icon_postion'] === '') {
                echo '<' . $settings['eael_adv_accordion_title_tag'] . ' class="eael-accordion-tab-title">' . $tab['eael_adv_accordion_tab_title'] . '</' . $settings['eael_adv_accordion_title_tag'] . '>';
            }
            // tab icon
            if ($tab['eael_adv_accordion_tab_icon_show'] === 'yes') {
                if ($tab_icon_is_new || $tab_icon_migrated) {
                    if (isset($tab['eael_adv_accordion_tab_title_icon_new']['value']['url'])) {
                        echo '<img src="' . $tab['eael_adv_accordion_tab_title_icon_new']['value']['url'] . '" />';
                    } else {
                        echo '<i class="' . $tab['eael_adv_accordion_tab_title_icon_new']['value'] . ' fa-accordion-icon"></i>';
                    }
                } else {
                    echo '<i class="' . $tab['eael_adv_accordion_tab_title_icon'] . ' fa-accordion-icon"></i>';
                }
            }
            // tab title
            if ($settings['eael_adv_accordion_toggle_icon_postion'] === 'right' || $settings['eael_adv_accordion_toggle_icon_postion'] === null) {
                echo '<' . $settings['eael_adv_accordion_title_tag'] . ' class="eael-accordion-tab-title">' . $tab['eael_adv_accordion_tab_title'] . '</' . $settings['eael_adv_accordion_title_tag'] . '>';
            }
            // toggle icon
            if ($settings['eael_adv_accordion_icon_show'] === 'yes' && $settings['eael_adv_accordion_toggle_icon_postion'] === 'right') {
                if ($accordion_icon_is_new || $accordion_icon_migrated) {
                    if (isset($settings['eael_adv_accordion_icon_new']['value']['url'])) {
                        echo '<img src="' . $settings['eael_adv_accordion_icon_new']['value']['url'] . '" />';
                    } else {
                        echo '<i class="' . $settings['eael_adv_accordion_icon_new']['value'] . ' fa-toggle"></i>';
                    }
                } else {
                    echo '<i class="' . $settings['eael_adv_accordion_icon'] . ' fa-toggle"></i>';
                }
            }
=======
                     // toggle icon if user set position to left
                    if ($settings['eael_adv_accordion_icon_show'] === 'yes' && $settings['eael_adv_accordion_toggle_icon_postion'] === '') {
                        if ($accordion_icon_is_new || $accordion_icon_migrated) {
                            if( isset($settings['eael_adv_accordion_icon_new']['value']['url']) ) {
                                echo '<img src="' . $settings['eael_adv_accordion_icon_new']['value']['url'] . '" />';
                            }else {
                                echo '<i class="' . $settings['eael_adv_accordion_icon_new']['value'] . ' fa-toggle"></i>';
                            }
                        } else {
                            echo '<i class="' . $settings['eael_adv_accordion_icon'] . ' fa-toggle"></i>';
                        }
                    }
                    // tab title
                    if($settings['eael_adv_accordion_toggle_icon_postion'] === ''){
                        echo '<span>' . $tab['eael_adv_accordion_tab_title'] . '</span>';
                    }
                    // tab icon
                    if ($tab['eael_adv_accordion_tab_icon_show'] === 'yes') {
                        if ($tab_icon_is_new || $tab_icon_migrated) {
                            if( isset($tab['eael_adv_accordion_tab_title_icon_new']['value']['url']) ) {
                                echo '<img src="' . $tab['eael_adv_accordion_tab_title_icon_new']['value']['url'] . '" />';
                            }else {
                                echo '<i class="' . $tab['eael_adv_accordion_tab_title_icon_new']['value'] . ' fa-accordion-icon"></i>';
                            }
                        } else {
                            echo '<i class="' . $tab['eael_adv_accordion_tab_title_icon'] . ' fa-accordion-icon"></i>';
                        }
                    }
                    // tab title
                    if($settings['eael_adv_accordion_toggle_icon_postion'] === 'right' || $settings['eael_adv_accordion_toggle_icon_postion'] === null){
                        echo '<span>' . $tab['eael_adv_accordion_tab_title'] . '</span>';
                    }
                    // toggle icon
                    if ($settings['eael_adv_accordion_icon_show'] === 'yes' && $settings['eael_adv_accordion_toggle_icon_postion'] === 'right') {
                        if ($accordion_icon_is_new || $accordion_icon_migrated) {
                            if( isset($settings['eael_adv_accordion_icon_new']['value']['url']) ) {
                                echo '<img src="' . $settings['eael_adv_accordion_icon_new']['value']['url'] . '" />';
                            }else {
                                echo '<i class="' . $settings['eael_adv_accordion_icon_new']['value'] . ' fa-toggle"></i>';
                            }
                        } else {
                            echo '<i class="' . $settings['eael_adv_accordion_icon'] . ' fa-toggle"></i>';
                        }
                    }
>>>>>>> origin/KyungYul-Noh
            echo '</div>';

            echo '<div ' . $this->get_render_attribute_string($tab_content_setting_key) . '>';
            if ('content' == $tab['eael_adv_accordion_text_type']) {
                echo '<p>' . do_shortcode($tab['eael_adv_accordion_tab_content']) . '</p>';
            } elseif ('template' == $tab['eael_adv_accordion_text_type']) {
                if (!empty($tab['eael_primary_templates'])) {
                    echo Plugin::$instance->frontend->get_builder_content($tab['eael_primary_templates'], true);
                }
            }
            echo '</div>
                </div>';
        }
        echo '</div>';
    }
}
