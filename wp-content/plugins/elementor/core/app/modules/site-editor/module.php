<?php
namespace Elementor\Core\App\Modules\SiteEditor;

use Elementor\Core\Base\Module as BaseModule;
use Elementor\Plugin;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Site Editor Module
 *
 * Responsible for initializing Elementor App functionality
 */
class Module extends BaseModule {
	/**
	 * Get name.
	 *
	 * @access public
	 *
	 * @return string
	 */
	public function get_name() {
		return 'site-editor';
	}

<<<<<<< HEAD
	public function add_menu_in_admin_bar( $admin_bar_config ) {
		$admin_bar_config['elementor_edit_page']['children'][] = [
			'id' => 'elementor_app_site_editor',
			'title' => __( 'Open Theme Builder', 'elementor' ),
			'href' => Plugin::$instance->app->get_settings( 'menu_url' ),
			'class' => 'elementor-app-link',
		];

		return $admin_bar_config;
	}

	public function __construct() {
		add_filter( 'elementor/frontend/admin_bar/settings', [ $this, 'add_menu_in_admin_bar' ] );
=======
	public function add_menu_in_admin_bar( \WP_Admin_Bar $wp_admin_bar ) {
		$wp_admin_bar->add_menu( [
			'id' => 'elementor_app_site_editor',
			'parent' => 'elementor_edit_page',
			'title' => __( 'Open Theme Builder', 'elementor' ),
			'href' => Plugin::$instance->app->get_settings( 'menu_url' ),
			'meta' => [
				'class' => 'elementor-app-link',
			],
		] );
	}

	public function __construct() {
		add_action( 'admin_bar_menu', [ $this, 'add_menu_in_admin_bar' ], 201 /* After Elementor Edit */ );
>>>>>>> origin/KyungYul-Noh
	}
}
