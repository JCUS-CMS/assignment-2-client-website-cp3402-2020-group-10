<?php
<<<<<<< HEAD

=======
<<<<<<< HEAD

=======
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
namespace Essential_Addons_Elementor\Elements;

// If this file is called directly, abort.
if (!defined('ABSPATH')) {
    exit;
}

use \Elementor\Controls_Manager;
use \Elementor\Group_Control_Border;
use \Elementor\Group_Control_Typography;
use \Elementor\Widget_Base;

class Content_Ticker extends Widget_Base
{
    use \Essential_Addons_Elementor\Traits\Helper;
    use \Essential_Addons_Elementor\Template\Content\Content_Ticker;

    public function get_name()
    {
        return 'eael-content-ticker';
    }

    public function get_title()
    {
        return esc_html__('Content Ticker', 'essential-addons-for-elementor-lite');
    }

    public function get_icon()
    {
        return 'eaicon-content-ticker';
    }

    public function get_categories()
    {
        return ['essential-addons-elementor'];
    }

    public function get_keywords()
    {
        return [
            'ticker',
            'ea ticker',
            'ea content ticker',
            'news headline',
            'news ticker',
            'text rotate',
            'text animation',
            'text swing',
            'text slide',
            'ea',
<<<<<<< HEAD
            'essential addons',
=======
<<<<<<< HEAD
            'essential addons',
=======
            'essential addons'
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
        ];
    }

    public function get_custom_help_url()
    {
        return 'https://essential-addons.com/elementor/docs/content-ticker/';
    }

    protected function _register_controls()
    {
        /**
         * Content Ticker Content Settings
         */
        $this->start_controls_section(
            'eael_section_content_ticker_settings',
            [
                'label' => esc_html__('Ticker Settings', 'essential-addons-for-elementor-lite'),
            ]
        );

        $ticker_options = apply_filters(
            'eael_ticker_options',
            [
<<<<<<< HEAD
                'options'    => [
                    'dynamic' => esc_html__('Dynamic', 'essential-addons-for-elementor-lite'),
                    'custom'  => esc_html__('Custom', 'essential-addons-for-elementor-lite'),
=======
<<<<<<< HEAD
                'options'    => [
                    'dynamic' => esc_html__('Dynamic', 'essential-addons-for-elementor-lite'),
                    'custom'  => esc_html__('Custom', 'essential-addons-for-elementor-lite'),
=======
                'options' => [
                    'dynamic' => esc_html__('Dynamic', 'essential-addons-for-elementor-lite'),
                    'custom' => esc_html__('Custom', 'essential-addons-for-elementor-lite'),
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                ],
                'conditions' => [
                    'custom',
                ],
            ]
        );

        $this->add_control(
            'eael_ticker_type',
            [
<<<<<<< HEAD
                'label'       => esc_html__('Ticker Type', 'essential-addons-for-elementor-lite'),
                'type'        => Controls_Manager::SELECT,
                'default'     => 'dynamic',
                'label_block' => false,
                'options'     => $ticker_options['options'],
=======
<<<<<<< HEAD
                'label'       => esc_html__('Ticker Type', 'essential-addons-for-elementor-lite'),
                'type'        => Controls_Manager::SELECT,
                'default'     => 'dynamic',
                'label_block' => false,
                'options'     => $ticker_options['options'],
=======
                'label' => esc_html__('Ticker Type', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SELECT,
                'default' => 'dynamic',
                'label_block' => false,
                'options' => $ticker_options['options'],
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
            ]
        );

        $this->add_control(
            'eael_ticker_type_pro_alert',
            [
<<<<<<< HEAD
                'label'     => esc_html__('Custom Content available in pro version only!', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::HEADING,
=======
<<<<<<< HEAD
                'label'     => esc_html__('Custom Content available in pro version only!', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::HEADING,
=======
                'label' => esc_html__('Custom Content available in pro version only!', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::HEADING,
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                'condition' => [
                    'eael_ticker_type' => $ticker_options['conditions'],
                ],
            ]
        );

        $this->add_control(
            'eael_ticker_tag_text',
            [
<<<<<<< HEAD
                'label'       => esc_html__('Tag Text', 'essential-addons-for-elementor-lite'),
                'type'        => Controls_Manager::TEXT,
                'label_block' => false,
                'default'     => esc_html__('Trending Today', 'essential-addons-for-elementor-lite'),
=======
<<<<<<< HEAD
                'label'       => esc_html__('Tag Text', 'essential-addons-for-elementor-lite'),
                'type'        => Controls_Manager::TEXT,
                'label_block' => false,
                'default'     => esc_html__('Trending Today', 'essential-addons-for-elementor-lite'),
=======
                'label' => esc_html__('Tag Text', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::TEXT,
                'label_block' => false,
                'default' => esc_html__('Trending Today', 'essential-addons-for-elementor-lite'),
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
            ]
        );

        $this->end_controls_section();

        /**
         * Query Controls
         * @source includes/helper.php
         */
        $this->eael_query_controls();

        do_action('eael_ticker_custom_content_controls', $this);

        /**
         * Content Tab: Carousel Settings
         */
        $this->start_controls_section(
            'section_additional_options',
            [
                'label' => __('Animation Settings', 'essential-addons-for-elementor-lite'),
            ]
        );

        $this->add_control(
            'carousel_effect',
            [
<<<<<<< HEAD
                'label'       => __('Effect', 'essential-addons-for-elementor-lite'),
=======
<<<<<<< HEAD
                'label'       => __('Effect', 'essential-addons-for-elementor-lite'),
                'description' => __('Sets transition effect', 'essential-addons-for-elementor-lite'),
                'type'        => Controls_Manager::SELECT,
                'default'     => 'slide',
                'options'     => [
                    'slide' => __('Slide', 'essential-addons-for-elementor-lite'),
                    'fade'  => __('Fade', 'essential-addons-for-elementor-lite'),
=======
                'label' => __('Effect', 'essential-addons-for-elementor-lite'),
>>>>>>> yanzhou-li
                'description' => __('Sets transition effect', 'essential-addons-for-elementor-lite'),
                'type'        => Controls_Manager::SELECT,
                'default'     => 'slide',
                'options'     => [
                    'slide' => __('Slide', 'essential-addons-for-elementor-lite'),
<<<<<<< HEAD
                    'fade'  => __('Fade', 'essential-addons-for-elementor-lite'),
=======
                    'fade' => __('Fade', 'essential-addons-for-elementor-lite'),
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                ],
            ]
        );

        $this->add_responsive_control(
            'items',
            [
<<<<<<< HEAD
                'label'          => __('Visible Items', 'essential-addons-for-elementor-lite'),
                'type'           => Controls_Manager::SLIDER,
                'default'        => ['size' => 1],
=======
<<<<<<< HEAD
                'label'          => __('Visible Items', 'essential-addons-for-elementor-lite'),
                'type'           => Controls_Manager::SLIDER,
                'default'        => ['size' => 1],
                'tablet_default' => ['size' => 1],
                'mobile_default' => ['size' => 1],
                'range'          => [
                    'px' => [
                        'min'  => 1,
                        'max'  => 10,
                        'step' => 1,
                    ],
                ],
                'size_units'     => '',
                'condition'      => [
                    'carousel_effect' => 'slide',
                ],
                'separator'      => 'before',
=======
                'label' => __('Visible Items', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SLIDER,
                'default' => ['size' => 1],
>>>>>>> yanzhou-li
                'tablet_default' => ['size' => 1],
                'mobile_default' => ['size' => 1],
                'range'          => [
                    'px' => [
                        'min'  => 1,
                        'max'  => 10,
                        'step' => 1,
                    ],
                ],
                'size_units'     => '',
                'condition'      => [
                    'carousel_effect' => 'slide',
                ],
<<<<<<< HEAD
                'separator'      => 'before',
=======
                'separator' => 'before',
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
            ]
        );

        $this->add_responsive_control(
            'margin',
            [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> yanzhou-li
                'label'      => __('Items Gap', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::SLIDER,
                'default'    => ['size' => 10],
                'range'      => [
<<<<<<< HEAD
                    'px' => [
                        'min'  => 0,
                        'max'  => 100,
=======
                    'px' => [
                        'min'  => 0,
                        'max'  => 100,
=======
                'label' => __('Items Gap', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SLIDER,
                'default' => ['size' => 10],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                        'step' => 1,
                    ],
                ],
                'size_units' => '',
<<<<<<< HEAD
                'condition'  => [
=======
<<<<<<< HEAD
                'condition'  => [
=======
                'condition' => [
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                    'carousel_effect' => 'slide',
                ],
            ]
        );

        $this->add_control(
            'slider_speed',
            [
<<<<<<< HEAD
                'label'       => __('Slider Speed', 'essential-addons-for-elementor-lite'),
=======
<<<<<<< HEAD
                'label'       => __('Slider Speed', 'essential-addons-for-elementor-lite'),
                'description' => __('Duration of transition between slides (in ms)', 'essential-addons-for-elementor-lite'),
                'type'        => Controls_Manager::SLIDER,
                'default'     => ['size' => 400],
                'range'       => [
                    'px' => [
                        'min'  => 100,
                        'max'  => 3000,
                        'step' => 1,
                    ],
                ],
                'size_units'  => '',
                'separator'   => 'before',
=======
                'label' => __('Slider Speed', 'essential-addons-for-elementor-lite'),
>>>>>>> yanzhou-li
                'description' => __('Duration of transition between slides (in ms)', 'essential-addons-for-elementor-lite'),
                'type'        => Controls_Manager::SLIDER,
                'default'     => ['size' => 400],
                'range'       => [
                    'px' => [
                        'min'  => 100,
                        'max'  => 3000,
                        'step' => 1,
                    ],
                ],
<<<<<<< HEAD
                'size_units'  => '',
                'separator'   => 'before',
=======
                'size_units' => '',
                'separator' => 'before',
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
            ]
        );

        $this->add_control(
            'autoplay',
            [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> yanzhou-li
                'label'        => __('Autoplay', 'essential-addons-for-elementor-lite'),
                'type'         => Controls_Manager::SWITCHER,
                'default'      => 'yes',
                'label_on'     => __('Yes', 'essential-addons-for-elementor-lite'),
                'label_off'    => __('No', 'essential-addons-for-elementor-lite'),
<<<<<<< HEAD
                'return_value' => 'yes',
                'separator'    => 'before',
=======
                'return_value' => 'yes',
                'separator'    => 'before',
=======
                'label' => __('Autoplay', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'label_on' => __('Yes', 'essential-addons-for-elementor-lite'),
                'label_off' => __('No', 'essential-addons-for-elementor-lite'),
                'return_value' => 'yes',
                'separator' => 'before',
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
            ]
        );

        $this->add_control(
            'autoplay_speed',
            [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> yanzhou-li
                'label'      => __('Autoplay Speed', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::SLIDER,
                'default'    => ['size' => 2000],
                'range'      => [
<<<<<<< HEAD
                    'px' => [
                        'min'  => 500,
                        'max'  => 5000,
=======
                    'px' => [
                        'min'  => 500,
                        'max'  => 5000,
=======
                'label' => __('Autoplay Speed', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SLIDER,
                'default' => ['size' => 2000],
                'range' => [
                    'px' => [
                        'min' => 500,
                        'max' => 5000,
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                        'step' => 1,
                    ],
                ],
                'size_units' => '',
<<<<<<< HEAD
                'condition'  => [
=======
<<<<<<< HEAD
                'condition'  => [
=======
                'condition' => [
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                    'autoplay' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'pause_on_hover',
            [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> yanzhou-li
                'label'        => __('Pause On Hover', 'essential-addons-for-elementor-lite'),
                'type'         => Controls_Manager::SWITCHER,
                'default'      => '',
                'label_on'     => __('Yes', 'essential-addons-for-elementor-lite'),
                'label_off'    => __('No', 'essential-addons-for-elementor-lite'),
<<<<<<< HEAD
                'return_value' => 'yes',
                'condition'    => [
=======
                'return_value' => 'yes',
                'condition'    => [
=======
                'label' => __('Pause On Hover', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SWITCHER,
                'default' => '',
                'label_on' => __('Yes', 'essential-addons-for-elementor-lite'),
                'label_off' => __('No', 'essential-addons-for-elementor-lite'),
                'return_value' => 'yes',
                'condition' => [
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                    'autoplay' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'infinite_loop',
            [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> yanzhou-li
                'label'        => __('Infinite Loop', 'essential-addons-for-elementor-lite'),
                'type'         => Controls_Manager::SWITCHER,
                'default'      => 'yes',
                'label_on'     => __('Yes', 'essential-addons-for-elementor-lite'),
                'label_off'    => __('No', 'essential-addons-for-elementor-lite'),
<<<<<<< HEAD
=======
=======
                'label' => __('Infinite Loop', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'label_on' => __('Yes', 'essential-addons-for-elementor-lite'),
                'label_off' => __('No', 'essential-addons-for-elementor-lite'),
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                'return_value' => 'yes',
            ]
        );

        $this->add_control(
            'grab_cursor',
            [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> yanzhou-li
                'label'        => __('Grab Cursor', 'essential-addons-for-elementor-lite'),
                'description'  => __('Shows grab cursor when you hover over the slider', 'essential-addons-for-elementor-lite'),
                'type'         => Controls_Manager::SWITCHER,
                'default'      => '',
                'label_on'     => __('Show', 'essential-addons-for-elementor-lite'),
                'label_off'    => __('Hide', 'essential-addons-for-elementor-lite'),
<<<<<<< HEAD
                'return_value' => 'yes',
                'separator'    => 'before',
=======
                'return_value' => 'yes',
                'separator'    => 'before',
=======
                'label' => __('Grab Cursor', 'essential-addons-for-elementor-lite'),
                'description' => __('Shows grab cursor when you hover over the slider', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SWITCHER,
                'default' => '',
                'label_on' => __('Show', 'essential-addons-for-elementor-lite'),
                'label_off' => __('Hide', 'essential-addons-for-elementor-lite'),
                'return_value' => 'yes',
                'separator' => 'before',
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
            ]
        );

        $this->add_control(
            'navigation_heading',
            [
<<<<<<< HEAD
                'label'     => __('Navigation', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::HEADING,
=======
<<<<<<< HEAD
                'label'     => __('Navigation', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::HEADING,
=======
                'label' => __('Navigation', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::HEADING,
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'arrows',
            [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> yanzhou-li
                'label'        => __('Arrows', 'essential-addons-for-elementor-lite'),
                'type'         => Controls_Manager::SWITCHER,
                'default'      => 'yes',
                'label_on'     => __('Yes', 'essential-addons-for-elementor-lite'),
                'label_off'    => __('No', 'essential-addons-for-elementor-lite'),
<<<<<<< HEAD
=======
=======
                'label' => __('Arrows', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'label_on' => __('Yes', 'essential-addons-for-elementor-lite'),
                'label_off' => __('No', 'essential-addons-for-elementor-lite'),
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                'return_value' => 'yes',
            ]
        );

        $this->add_control(
            'direction',
            [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> yanzhou-li
                'label'     => __('Direction', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::SELECT,
                'default'   => 'left',
                'options'   => [
                    'left'  => __('Left', 'essential-addons-for-elementor-lite'),
<<<<<<< HEAD
=======
=======
                'label' => __('Direction', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SELECT,
                'default' => 'left',
                'options' => [
                    'left' => __('Left', 'essential-addons-for-elementor-lite'),
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                    'right' => __('Right', 'essential-addons-for-elementor-lite'),
                ],
                'separator' => 'before',
                'condition' => [
                    'carousel_effect' => 'slide',
                ],
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
<<<<<<< HEAD
                    'label'       => __('Unlock more possibilities', 'essential-addons-for-elementor-lite'),
                    'type'        => Controls_Manager::CHOOSE,
                    'options'     => [
=======
                    'label' => __('Unlock more possibilities', 'essential-addons-for-elementor-lite'),
                    'type' => Controls_Manager::CHOOSE,
                    'options' => [
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                        '1' => [
                            'title' => '',
                            'icon' => 'fa fa-unlock-alt',
                        ],
                    ],
<<<<<<< HEAD
                    'default'     => '1',
=======
<<<<<<< HEAD
                    'default'     => '1',
=======
                    'default' => '1',
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                    'description' => '<span class="pro-feature"> Get the  <a href="https://wpdeveloper.net/in/upgrade-essential-addons-elementor" target="_blank">Pro version</a> for more stunning elements and customization options.</span>',
                ]
            );

            $this->end_controls_section();
        }

        /**
         * -------------------------------------------
         * Tab Style (Ticker Content Style)
         * -------------------------------------------
         */
        $this->start_controls_section(
            'eael_section_ticker_typography_settings',
            [
                'label' => esc_html__('Ticker Content', 'essential-addons-for-elementor-lite'),
<<<<<<< HEAD
                'tab'   => Controls_Manager::TAB_STYLE,
=======
<<<<<<< HEAD
                'tab'   => Controls_Manager::TAB_STYLE,
=======
                'tab' => Controls_Manager::TAB_STYLE,
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
            ]
        );

        $this->add_control(
            'eael_ticker_content_bg',
            [
<<<<<<< HEAD
                'label'     => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
=======
<<<<<<< HEAD
                'label'     => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
=======
                'label' => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                'selectors' => [
                    '{{WRAPPER}} .eael-ticker-wrap .eael-ticker' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'eael_ticker_content_color',
            [
<<<<<<< HEAD
                'label'     => esc_html__('Text Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222222',
=======
<<<<<<< HEAD
                'label'     => esc_html__('Text Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222222',
=======
                'label' => esc_html__('Text Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '#222222',
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                'selectors' => [
                    '{{WRAPPER}} .eael-ticker-wrap .eael-ticker .ticker-content a' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'eael_ticker_hover_content_color',
            [
<<<<<<< HEAD
                'label'     => esc_html__('Text Hover Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f44336',
=======
<<<<<<< HEAD
                'label'     => esc_html__('Text Hover Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#f44336',
=======
                'label' => esc_html__('Text Hover Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '#f44336',
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                'selectors' => [
                    '{{WRAPPER}} .eael-ticker-wrap .eael-ticker .ticker-content a:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
<<<<<<< HEAD
                'name'     => 'eael_ticker_content_typography',
=======
<<<<<<< HEAD
                'name'     => 'eael_ticker_content_typography',
=======
                'name' => 'eael_ticker_content_typography',
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                'selector' => '{{WRAPPER}} .eael-ticker-wrap .eael-ticker .ticker-content a',

            ]
        );

        $this->add_responsive_control(
            'eael_ticker_content_padding',
            [
<<<<<<< HEAD
                'label'      => esc_html__('Padding', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
=======
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
>>>>>>> yanzhou-li
                    '{{WRAPPER}} .eael-ticker-wrap .eael-ticker .ticker-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> yanzhou-li
        $this->add_control(
            'eael_ticker_content_radius',
            [
                'label'      => esc_html__('Border Radius', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .eael-ticker-wrap .eael-ticker' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

<<<<<<< HEAD
=======
=======
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
        $this->end_controls_section();

        $this->start_controls_section(
            'eael_section_ticker_tag_style_settings',
            [
                'label' => esc_html__('Tag Style', 'essential-addons-for-elementor-lite'),
<<<<<<< HEAD
                'tab'   => Controls_Manager::TAB_STYLE,
=======
<<<<<<< HEAD
                'tab'   => Controls_Manager::TAB_STYLE,
=======
                'tab' => Controls_Manager::TAB_STYLE,
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
            ]
        );
        $this->add_control(
            'eael_ticker_tag_bg_color',
            [
<<<<<<< HEAD
                'label'     => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222222',
=======
<<<<<<< HEAD
                'label'     => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#222222',
=======
                'label' => esc_html__('Background Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '#222222',
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                'selectors' => [
                    '{{WRAPPER}} .eael-ticker-wrap .ticker-badge' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'eael_ticker_tag_color',
            [
<<<<<<< HEAD
                'label'     => esc_html__('Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
=======
<<<<<<< HEAD
                'label'     => esc_html__('Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '#fff',
=======
                'label' => esc_html__('Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '#fff',
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                'selectors' => [
                    '{{WRAPPER}} .eael-ticker-wrap .ticker-badge span' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
<<<<<<< HEAD
                'name'     => 'eael_ticker_tag_typography',
=======
<<<<<<< HEAD
                'name'     => 'eael_ticker_tag_typography',
=======
                'name' => 'eael_ticker_tag_typography',
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                'selector' => '{{WRAPPER}} .eael-ticker-wrap .ticker-badge span',
            ]
        );
        $this->add_responsive_control(
            'eael_ticker_tag_padding',
            [
<<<<<<< HEAD
                'label'      => esc_html__('Padding', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
=======
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
>>>>>>> yanzhou-li
                    '{{WRAPPER}} .eael-ticker-wrap .ticker-badge' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'eael_ticker_tag_margin',
            [
<<<<<<< HEAD
                'label'      => esc_html__('Margin', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
=======
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
>>>>>>> yanzhou-li
                    '{{WRAPPER}} .eael-ticker-wrap .ticker-badge' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'eael_ticker_tag_radius',
            [
<<<<<<< HEAD
                'label'      => esc_html__('Border Radius', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', 'em', '%'],
                'selectors'  => [
=======
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
>>>>>>> yanzhou-li
                    '{{WRAPPER}} .eael-ticker-wrap .ticker-badge' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        /**
         * Style Tab: Arrows
         */
        $this->start_controls_section(
            'section_arrows_style',
            [
<<<<<<< HEAD
                'label'     => __('Arrows', 'essential-addons-for-elementor-lite'),
                'tab'       => Controls_Manager::TAB_STYLE,
=======
<<<<<<< HEAD
                'label'     => __('Arrows', 'essential-addons-for-elementor-lite'),
                'tab'       => Controls_Manager::TAB_STYLE,
=======
                'label' => __('Arrows', 'essential-addons-for-elementor-lite'),
                'tab' => Controls_Manager::TAB_STYLE,
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                'condition' => [
                    'arrows' => 'yes',
                ],
            ]
        );

        $this->add_control(
            'prev_arrow',
            [
<<<<<<< HEAD
                'label'       => __('Choose Prev Arrow', 'essential-addons-for-elementor-lite'),
                'type'        => Controls_Manager::ICONS,
=======
<<<<<<< HEAD
                'label'       => __('Choose Prev Arrow', 'essential-addons-for-elementor-lite'),
                'type'        => Controls_Manager::ICONS,
                'label_block' => true,
                'default'     => [
                    'value'   => 'fas fa-angle-left',
                    'library' => 'fa-solid',
                ],
=======
                'label' => __('Choose Prev Arrow', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::ICONS,
>>>>>>> yanzhou-li
                'label_block' => true,
                'default'     => [
                    'value'   => 'fas fa-angle-left',
                    'library' => 'fa-solid',
<<<<<<< HEAD
                ],
=======
                ]
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
            ]
        );

        $this->add_control(
            'arrow_new',
            [
<<<<<<< HEAD
                'label'            => __('Choose Next Arrow', 'essential-addons-for-elementor-lite'),
                'type'             => Controls_Manager::ICONS,
=======
<<<<<<< HEAD
                'label'            => __('Choose Next Arrow', 'essential-addons-for-elementor-lite'),
                'type'             => Controls_Manager::ICONS,
                'fa4compatibility' => 'arrow',
                'label_block'      => true,
                'default'          => [
                    'value'   => 'fas fa-angle-right',
                    'library' => 'fa-solid',
                ],
=======
                'label' => __('Choose Next Arrow', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::ICONS,
>>>>>>> yanzhou-li
                'fa4compatibility' => 'arrow',
                'label_block'      => true,
                'default'          => [
                    'value'   => 'fas fa-angle-right',
                    'library' => 'fa-solid',
<<<<<<< HEAD
                ],
=======
                ]
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
            ]
        );

        $this->add_responsive_control(
            'arrows_size',
            [
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> yanzhou-li
                'label'      => __('Arrows Size', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::SLIDER,
                'default'    => ['size' => '22'],
                'range'      => [
<<<<<<< HEAD
                    'px' => [
                        'min'  => 5,
                        'max'  => 100,
=======
                    'px' => [
                        'min'  => 5,
                        'max'  => 100,
=======
                'label' => __('Arrows Size', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SLIDER,
                'default' => ['size' => '22'],
                'range' => [
                    'px' => [
                        'min' => 5,
                        'max' => 100,
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                        'step' => 1,
                    ],
                ],
                'size_units' => ['px'],
<<<<<<< HEAD
                'selectors'  => [
                    '{{WRAPPER}} .swiper-container-wrap .swiper-button-next, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev'         => 'font-size: {{SIZE}}{{UNIT}};',
=======
<<<<<<< HEAD
                'selectors'  => [
                    '{{WRAPPER}} .swiper-container-wrap .swiper-button-next, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev'         => 'font-size: {{SIZE}}{{UNIT}};',
=======
                'selectors' => [
                    '{{WRAPPER}} .swiper-container-wrap .swiper-button-next, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev' => 'font-size: {{SIZE}}{{UNIT}};',
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                    '{{WRAPPER}} .swiper-container-wrap .swiper-button-next img, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev img' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'left_arrow_position',
            [
<<<<<<< HEAD
                'label'      => __('Align Left Arrow', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::SLIDER,
                'range'      => [
                    'px' => [
                        'min'  => -100,
                        'max'  => 100,
=======
<<<<<<< HEAD
                'label'      => __('Align Left Arrow', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::SLIDER,
                'range'      => [
                    'px' => [
                        'min'  => -100,
                        'max'  => 100,
=======
                'label' => __('Align Left Arrow', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => -100,
                        'max' => 100,
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                        'step' => 1,
                    ],
                ],
                'size_units' => ['px'],
<<<<<<< HEAD
                'selectors'  => [
=======
<<<<<<< HEAD
                'selectors'  => [
=======
                'selectors' => [
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                    '{{WRAPPER}} .swiper-container-wrap .swiper-button-prev' => 'right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_responsive_control(
            'right_arrow_position',
            [
<<<<<<< HEAD
                'label'      => __('Align Right Arrow', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::SLIDER,
                'range'      => [
                    'px' => [
                        'min'  => -100,
                        'max'  => 100,
=======
<<<<<<< HEAD
                'label'      => __('Align Right Arrow', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::SLIDER,
                'range'      => [
                    'px' => [
                        'min'  => -100,
                        'max'  => 100,
=======
                'label' => __('Align Right Arrow', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => -100,
                        'max' => 100,
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                        'step' => 1,
                    ],
                ],
                'size_units' => ['px'],
<<<<<<< HEAD
                'selectors'  => [
=======
<<<<<<< HEAD
                'selectors'  => [
=======
                'selectors' => [
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                    '{{WRAPPER}} .swiper-container-wrap .swiper-button-next' => 'right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->start_controls_tabs('tabs_arrows_style');

        $this->start_controls_tab(
            'tab_arrows_normal',
            [
                'label' => __('Normal', 'essential-addons-for-elementor-lite'),
            ]
        );

        $this->add_control(
            'arrows_bg_color_normal',
            [
<<<<<<< HEAD
                'label'     => __('Background Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
=======
<<<<<<< HEAD
                'label'     => __('Background Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
=======
                'label' => __('Background Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                'selectors' => [
                    '{{WRAPPER}} .swiper-container-wrap .swiper-button-next, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'arrows_color_normal',
            [
<<<<<<< HEAD
                'label'     => __('Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
=======
<<<<<<< HEAD
                'label'     => __('Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
=======
                'label' => __('Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                'selectors' => [
                    '{{WRAPPER}} .swiper-container-wrap .swiper-button-next, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
<<<<<<< HEAD
                'name'        => 'arrows_border_normal',
                'label'       => __('Border', 'essential-addons-for-elementor-lite'),
                'placeholder' => '1px',
                'default'     => '1px',
                'selector'    => '{{WRAPPER}} .swiper-container-wrap .swiper-button-next, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev',
=======
<<<<<<< HEAD
                'name'        => 'arrows_border_normal',
                'label'       => __('Border', 'essential-addons-for-elementor-lite'),
                'placeholder' => '1px',
                'default'     => '1px',
                'selector'    => '{{WRAPPER}} .swiper-container-wrap .swiper-button-next, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev',
=======
                'name' => 'arrows_border_normal',
                'label' => __('Border', 'essential-addons-for-elementor-lite'),
                'placeholder' => '1px',
                'default' => '1px',
                'selector' => '{{WRAPPER}} .swiper-container-wrap .swiper-button-next, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev',
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
            ]
        );

        $this->add_control(
            'arrows_border_radius_normal',
            [
<<<<<<< HEAD
                'label'      => __('Border Radius', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
=======
<<<<<<< HEAD
                'label'      => __('Border Radius', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
=======
                'label' => __('Border Radius', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                    '{{WRAPPER}} .swiper-container-wrap .swiper-button-next, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'tab_arrows_hover',
            [
                'label' => __('Hover', 'essential-addons-for-elementor-lite'),
            ]
        );

        $this->add_control(
            'arrows_bg_color_hover',
            [
<<<<<<< HEAD
                'label'     => __('Background Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
=======
<<<<<<< HEAD
                'label'     => __('Background Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
=======
                'label' => __('Background Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                'selectors' => [
                    '{{WRAPPER}} .swiper-container-wrap .swiper-button-next:hover, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'arrows_color_hover',
            [
<<<<<<< HEAD
                'label'     => __('Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
=======
<<<<<<< HEAD
                'label'     => __('Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
=======
                'label' => __('Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                'selectors' => [
                    '{{WRAPPER}} .swiper-container-wrap .swiper-button-next:hover, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev:hover' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'arrows_border_color_hover',
            [
<<<<<<< HEAD
                'label'     => __('Border Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
=======
<<<<<<< HEAD
                'label'     => __('Border Color', 'essential-addons-for-elementor-lite'),
                'type'      => Controls_Manager::COLOR,
                'default'   => '',
=======
                'label' => __('Border Color', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
                'selectors' => [
                    '{{WRAPPER}} .swiper-container-wrap .swiper-button-next:hover, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev:hover' => 'border-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_responsive_control(
            'arrows_padding',
            [
<<<<<<< HEAD
                'label'      => __('Padding', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
=======
<<<<<<< HEAD
                'label'      => __('Padding', 'essential-addons-for-elementor-lite'),
                'type'       => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .swiper-container-wrap .swiper-button-next, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
                'separator'  => 'before',
=======
                'label' => __('Padding', 'essential-addons-for-elementor-lite'),
                'type' => Controls_Manager::DIMENSIONS,
>>>>>>> yanzhou-li
                'size_units' => ['px', '%'],
                'selectors'  => [
                    '{{WRAPPER}} .swiper-container-wrap .swiper-button-next, {{WRAPPER}} .swiper-container-wrap .swiper-button-prev' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
<<<<<<< HEAD
                'separator'  => 'before',
=======
                'separator' => 'before',
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
            ]
        );

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $settings = $this->fix_old_query($settings);
        $args = $this->eael_get_query_args($settings);

        $this->add_render_attribute('content-ticker-wrap', 'class', 'swiper-container-wrap eael-ticker');

        $this->add_render_attribute('content-ticker', 'class', 'swiper-container eael-content-ticker');
        $this->add_render_attribute('content-ticker', 'class', 'swiper-container-' . esc_attr($this->get_id()));
        $this->add_render_attribute('content-ticker', 'data-pagination', '.swiper-pagination-' . esc_attr($this->get_id()));
        $this->add_render_attribute('content-ticker', 'data-arrow-next', '.swiper-button-next-' . esc_attr($this->get_id()));
        $this->add_render_attribute('content-ticker', 'data-arrow-prev', '.swiper-button-prev-' . esc_attr($this->get_id()));

        if ($settings['direction'] == 'right') {
            $this->add_render_attribute('content-ticker', 'dir', 'rtl');
        }

        if (!empty($settings['items']['size'])) {
            $this->add_render_attribute('content-ticker', 'data-items', $settings['items']['size']);
        }
        if (!empty($settings['items_tablet']['size'])) {
            $this->add_render_attribute('content-ticker', 'data-items-tablet', $settings['items_tablet']['size']);
        }
        if (!empty($settings['items_mobile']['size'])) {
            $this->add_render_attribute('content-ticker', 'data-items-mobile', $settings['items_mobile']['size']);
        }
        if (!empty($settings['margin']['size'])) {
            $this->add_render_attribute('content-ticker', 'data-margin', $settings['margin']['size']);
        }
        if (!empty($settings['margin_tablet']['size'])) {
            $this->add_render_attribute('content-ticker', 'data-margin-tablet', $settings['margin_tablet']['size']);
        }
        if (!empty($settings['margin_mobile']['size'])) {
            $this->add_render_attribute('content-ticker', 'data-margin-mobile', $settings['margin_mobile']['size']);
        }
        if ($settings['carousel_effect']) {
            $this->add_render_attribute('content-ticker', 'data-effect', $settings['carousel_effect']);
        }
        if (!empty($settings['slider_speed']['size'])) {
            $this->add_render_attribute('content-ticker', 'data-speed', $settings['slider_speed']['size']);
        }
        if ($settings['autoplay'] == 'yes' && !empty($settings['autoplay_speed']['size'])) {
            $this->add_render_attribute('content-ticker', 'data-autoplay', $settings['autoplay_speed']['size']);
        } else {
            $this->add_render_attribute('content-ticker', 'data-autoplay', '999999');
        }
        if ($settings['pause_on_hover'] == 'yes') {
            $this->add_render_attribute('content-ticker', 'data-pause-on-hover', 'true');
        }
        if ($settings['infinite_loop'] == 'yes') {
            $this->add_render_attribute('content-ticker', 'data-loop', true);
        }
        if ($settings['grab_cursor'] == 'yes') {
            $this->add_render_attribute('content-ticker', 'data-grab-cursor', true);
        }
        if ($settings['arrows'] == 'yes') {
            $this->add_render_attribute('content-ticker', 'data-arrows', '1');
        }

        echo '<div class="eael-ticker-wrap" id="eael-ticker-wrap-' . $this->get_id() . '">';
<<<<<<< HEAD
        if (!empty($settings['eael_ticker_tag_text'])) {
            echo '<div class="ticker-badge">
=======
<<<<<<< HEAD
        if (!empty($settings['eael_ticker_tag_text'])) {
            echo '<div class="ticker-badge">
                    <span>' . $settings['eael_ticker_tag_text'] . '</span>
                </div>';
        }

        echo '<div ' . $this->get_render_attribute_string('content-ticker-wrap') . '>
                <div ' . $this->get_render_attribute_string('content-ticker') . '>
                    <div class="swiper-wrapper">';
        if ('dynamic' === $settings['eael_ticker_type']) {
            echo self::render_template_($args, null);
        }

        do_action('render_content_ticker_custom_content', $settings);
        echo '</div>
=======
            if (!empty($settings['eael_ticker_tag_text'])) {
                echo '<div class="ticker-badge">
>>>>>>> yanzhou-li
                    <span>' . $settings['eael_ticker_tag_text'] . '</span>
                </div>';
        }

        echo '<div ' . $this->get_render_attribute_string('content-ticker-wrap') . '>
                <div ' . $this->get_render_attribute_string('content-ticker') . '>
                    <div class="swiper-wrapper">';
        if ('dynamic' === $settings['eael_ticker_type']) {
            echo self::render_template_($args, null);
        }

<<<<<<< HEAD
        do_action('render_content_ticker_custom_content', $settings);
        echo '</div>
=======
                        do_action('render_content_ticker_custom_content', $settings);
                    echo '</div>
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li
				</div>
				' . $this->render_arrows() . '
			</div>
		</div>';
    }

    /**
     * Render Content Ticker arrows output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @access protected
     */
    protected function render_arrows()
    {
        $settings = $this->get_settings_for_display();

        if ($settings['arrows'] == 'yes') {
            if (isset($settings['__fa4_migrated']['arrow_new']) || empty($settings['arrow'])) {
                $arrow = $settings['arrow_new']['value'];
            } else {
                $arrow = $settings['arrow'];
            }

            $html = '<div class="content-ticker-pagination">';

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> yanzhou-li
            $html .= '<div class="swiper-button-next swiper-button-next-' . $this->get_id() . '">';
            if (isset($arrow['url'])) {
                $html .= '<img src="' . esc_url($arrow['url']) . '" alt="' . esc_attr(get_post_meta($arrow['id'], '_wp_attachment_image_alt', true)) . '" />';
            } else {
                $html .= '<i class="' . $arrow . '"></i>';
            }
            $html .= '</div>';
<<<<<<< HEAD
=======

            $html .= '<div class="swiper-button-prev swiper-button-prev-' . $this->get_id() . '">';
            if (isset($settings['prev_arrow']['value']['url'])) {
                $html .= '<img src="' . esc_url($settings['prev_arrow']['value']['url']) . '" alt="' . esc_attr(get_post_meta($settings['prev_arrow']['value']['id'], '_wp_attachment_image_alt', true)) . '" />';
            } else {
                $html .= '<i class="' . esc_attr($settings['prev_arrow']['value']) . '"></i>';
            }
            $html .= '</div>';

            $html .= '</div>';
=======
                $html .= '<div class="swiper-button-next swiper-button-next-' . $this->get_id() . '">';
                    if( isset($arrow['url']) ) {
                        $html .= '<img src="'.esc_url($arrow['url']).'" alt="'.esc_attr(get_post_meta($arrow['id'], '_wp_attachment_image_alt', true)).'" />';
                    }else {
                        $html .= '<i class="' . $arrow . '"></i>';
                    }
                $html .= '</div>';

                $html .='<div class="swiper-button-prev swiper-button-prev-' . $this->get_id() . '">';
                    if( isset($settings['prev_arrow']['value']['url'])) {
                        $html .= '<img src="'.esc_url($settings['prev_arrow']['value']['url']).'" alt="'.esc_attr(get_post_meta($settings['prev_arrow']['value']['id'], '_wp_attachment_image_alt', true)).'" />';
                    }else {
                        $html .= '<i class="' . esc_attr($settings['prev_arrow']['value']) . '"></i>';
                    }
                $html .= '</div>';
>>>>>>> yanzhou-li

            $html .= '<div class="swiper-button-prev swiper-button-prev-' . $this->get_id() . '">';
            if (isset($settings['prev_arrow']['value']['url'])) {
                $html .= '<img src="' . esc_url($settings['prev_arrow']['value']['url']) . '" alt="' . esc_attr(get_post_meta($settings['prev_arrow']['value']['id'], '_wp_attachment_image_alt', true)) . '" />';
            } else {
                $html .= '<i class="' . esc_attr($settings['prev_arrow']['value']) . '"></i>';
            }
            $html .= '</div>';

<<<<<<< HEAD
            $html .= '</div>';
=======
>>>>>>> origin/KyungYul-Noh
>>>>>>> yanzhou-li

            return $html;
        }
    }
}
