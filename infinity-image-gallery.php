<?php
/**
 *
 * @wordpress-plugin
 * Plugin Name:       Wp Infinite Gallery
 * Plugin URI:        https://github.com/robiulawal40/
 * Description:       This plugin will make infinite Scroll Gallery.
 * Version:           1.2.0
 * Author:            Robiul Awal
 * Author URI:        https://github.com/robiulawal40/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpig
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! class_exists( 'WP_Infinite_Gallery' ) ) :

	final class WP_Infinite_Gallery {

		/**
		 * @var mixed
		 */
		private static $instance;

		/*
		 * instance functions
		 *
		 *
		 */
		public static function instance() {
			if ( is_null( self::$instance ) ) {
				self::$instance = new WP_Infinite_Gallery();
			}
			return self::$instance;
		}

		/*
		 * Cloning is forbidden.
		 *
		 */
		public function __clone() {
			_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', 'nvce' ), '1.0' );
		}

		/*
		 * Unserializing instances of this class is forbidden.
		 *
		 */
		public function __wakeup() {
			_doing_it_wrong( __FUNCTION__, __( 'Cheatin&#8217; huh?', 'nvce' ), '1.0' );
		}

		/*
		 * Plugin constructor
		 *
		 *
		 */
		function __construct() {
			$this->set_constants();
			$this->includes();
			$this->scripts();
		}

		/*
		 * Setting the plugin  constant
		 *
		 */
		public function set_constants() {

			if ( ! defined( 'WPIG_VERSION' ) ) {
				define( 'WPIG_VERSION', '1.2.0' );
			}
			if ( ! defined( 'WPIG_DOMAIN' ) ) {
				define( 'WPIG_DOMAIN', 'wpig' );
			}
			if ( ! defined( 'WPIG_NAME' ) ) {
				define( 'WPIG_NAME', 'Wp Infinite Gallery' );
			}

			if ( ! defined( 'WPIGDIR' ) ) {
				define( 'WPIGDIR', plugin_dir_path( __FILE__ ) );
			}
			if ( ! defined( 'WPIGBASENAME' ) ) {
				define( 'WPIGBASENAME', plugin_basename( __FILE__ ) );
			}
			if ( ! defined( 'WPIGURL' ) ) {
				define( 'WPIGURL', plugin_dir_url( __FILE__ ) );
			}
			if ( ! defined( 'WPIGDEV' ) ) {
				define( 'WPIGDEV', true );
			}
			if ( ! defined( 'WPIG_IMAGES' ) ) {
				define( 'WPIG_IMAGES', '_wpig_att' );
			}
		}

		/*
		 * Plugin include files
		 *
		 */
		public function includes() {

			require_once WPIGDIR . 'inc/functions.php';
			require_once WPIGDIR . 'inc/shortcode.php';
			require_once WPIGDIR . 'admin/options.php';
			require_once WPIGDIR . 'admin/class-gallery-image-list-table.php';
			require_once WPIGDIR . 'admin/register-post.php';
		}
		public function scripts() {
			// if ( is_admin() ) {
			// add_action( 'admin_menu', array( $this, 'register_menu' ) );
			// add_action( 'admin_init', array( $this, 'register_plugin_settings' ) );
			// }
			add_action( 'init', array( $this, 'register_scripts' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'load_styles' ) );
			add_action( 'admin_enqueue_scripts', array( $this, 'admin_scripts' ) );
		}

		public function register_scripts() {

			/*New versions*/
			wp_register_script( 'nanogallery2-min', WPIGURL . 'templates/assets/jquery.nanogallery2.min.js', array( 'jquery' ), WPIG_VERSION, true );
			wp_register_script( 'nanogallery2-starter', WPIGURL . 'templates/assets/nanogallery2.starter.js', array( 'nanogallery2-min', 'jquery' ), WPIG_VERSION, true );

			/*Old versions*/
			wp_register_script( 'images-loaded', WPIGURL . 'assets/imagesloaded.pkgd.min.js', array(), WPIG_VERSION, true );
			wp_register_script( 'iso', WPIGURL . 'assets/isotope.pkgd.min.js', array( 'images-loaded' ), WPIG_VERSION, true );
			wp_register_script( 'infinite-scroll', WPIGURL . 'assets/infinite-scroll.pkgd.min.js', array(), WPIG_VERSION, true );
			wp_register_script( 'wpig-scripts', WPIGURL . 'assets/scripts.js', array( 'jquery', 'iso', 'infinite-scroll' ), WPIG_VERSION, true );
		}

		/**
		 * @return null
		 */
		public function load_styles() {

			global $post, $wpdb;

			if ( ! has_shortcode( $post->post_content, 'wpig' ) ) {
				return;
			}
			wp_enqueue_style( 'wpig-style', WPIGURL . 'assets/style.css', array(), WPIG_VERSION );
			wp_enqueue_style( 'wpig-style-1', WPIGURL . 'assets/style-1.css', array(), WPIG_VERSION );
			wp_enqueue_style( 'wpig-style-2', WPIGURL . 'assets/style-2.css', array(), WPIG_VERSION );

			/** For Style 3 */
			wp_enqueue_style( 'wpig-style-3', WPIGURL . 'templates/tailwind-style.css', array(), WPIG_VERSION );

			/** Nano Gallery */
			wp_enqueue_style( 'nanogallery2', WPIGURL . 'templates/assets/nanogallery2.min.css', array(), WPIG_VERSION );
		}
		/**
		 * @param $hook
		 */
		public function admin_scripts( $hook ) {
			global $post_type, $post;

			if ( $hook == 'post-new.php' || $hook == 'post.php' ) {
				if ( 'infinite_gallery' === $post_type ) {
					// wp_enqueue_script( 'wpig-scripts' );
					if ( ! did_action( 'wp_enqueue_media' ) ) {
						wp_enqueue_media();
					}

					wp_enqueue_style( 'wpig-admin-style', WPIGURL . 'assets/style.admin.css', array(), WPIG_VERSION );

					wp_enqueue_style( 'wp-color-picker' );

					wp_enqueue_script( 'wpig-admin-scripts', WPIGURL . 'assets/scripts.admin.js', array( 'jquery', 'thickbox', 'wp-color-picker' ), WPIG_VERSION, true );
					wp_enqueue_style( 'thickbox' );
					wp_localize_script(
						'wpig-admin-scripts',
						'wpig',
						array(
							'ajax_url' => admin_url( 'admin-ajax.php' ),
							'nonce'    => wp_create_nonce( 'wpig_attachment_to_gallery' ),
							'post_id'  => $post->ID,
						)
					);

				}
			}

			if ( 'gallery-images_page_wsgp-general-settings' == $hook ) {
				wp_enqueue_style( 'wp-color-picker' );
				wp_enqueue_script( 'admin-setting-scripts', plugins_url( '/inc/admin/js/setting_scripts.js', __DIR__ ), array( 'jquery', 'wp-color-picker' ), null, true );
			}
		}
	}
endif;

function WPIG_init() {
	return WP_Infinite_Gallery::instance();
}
add_action( 'plugins_loaded', 'WPIG_init' );
