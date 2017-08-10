<?php

namespace CF_PayPal_Pro\Menu;

class Menu {

	protected static $instance;

	/**
	 * Menu slug
	 *
	 * @since 0.0.1
	 *
	 * @var string
	 */
	protected $menu_slug;

	/**
	 * Menu constructor.
	 *
	 * @since 0.0.1
	 */
	protected function __construct() {
		add_action( 'admin_menu', array( $this, 'add_page' ) );
		$this->menu_slug = \Caldera_Forms::PLUGIN_SLUG . '-cf-paypal-pro';
		add_action( 'admin_enqueue_scripts', array( $this, 'scripts' ) );
	}

	/**
	 * Add menu page
	 *
	 * @since 0.0.1
	 *
	 * @uses "admin_menu"
	 */
	public function add_page() {
		add_submenu_page(
			\Caldera_Forms::PLUGIN_SLUG,
			__( 'PayPal Pro', 'cf-paypal-pro' ),
			__( 'PayPal Pro', 'cf-paypal-pro' ),
			\Caldera_Forms::get_manage_cap(),
			$this->menu_slug,
			array( $this, 'render_admin' ) );
	}

	/**
	 * Load scripts for admin page
	 *
	 * @since 0.0.1
	 *
	 * @uses "admin_enqueue_scripts"
	 *
	 * @param $hook
	 */
	public function scripts( $hook ) {
		if ( isset( $_GET['page'] ) && \Caldera_Forms::PLUGIN_SLUG . '-cf-paypal-pro' == $_GET['page'] ) {
			// CF 1.5.0+
			if ( class_exists( 'Caldera_Forms_Admin_Assets' ) ) {
				\Caldera_Forms_Admin_Assets::enqueue_style( 'admin' );
				\Caldera_Forms_Render_Assets::enqueue_script( 'vue' );
			} else {
				wp_enqueue_style( \Caldera_Forms::PLUGIN_SLUG . '-admin-styles', CFCORE_URL . 'assets/css/admin.css', array(), \Caldera_Forms::VERSION );
				wp_enqueue_script( 'cf-paypal-pro-vue', CF_PAYPAL_PRO_URL . '/assets/vue.min.js', array( 'jquery' ), CF_PAYPAL_PRO_VER, true );
			}
			wp_enqueue_script( 'cf-paypal-pro', CF_PAYPAL_PRO_URL . '/assets/admin.js', array( 'jquery' ), CF_PAYPAL_PRO_VER, true );
			wp_localize_script( 'cf-paypal-pro', 'CF_PayPal_Pro', array(
				'api'     => esc_url_raw( \Caldera_Forms_API_Util::url( 'add-ons/cf-paypal-pro/settings' ) ),
				'nonce'   => wp_create_nonce( 'wp_rest' ),
				'strings' => array(
					'saved' => esc_html__( 'Settings Saved', 'cf-paypal-pro' )
				)
			) );
		}
	}

	/**
	 * Render plugin admin page
	 *
	 * @since 0.0.1
	 *
	 * @todo move to partial and/or load via AJAX
	 */
	public function render_admin() {
		?>
		<style>
			#cf-paypal-pro-feedback {
				display: inline-block;
				margin-left: -12px;
				margin-bottom: 6px;
			}

			#cf-paypal-pro-feedback p {
				padding: 4px;
			}
		</style>
		<div class="caldera-editor-header">
			<ul class="caldera-editor-header-nav">
				<li class="caldera-editor-logo">
			<span class="caldera-forms-name">
				<?php esc_html_e( 'PayPal Pro For Caldera Forms - Settings', 'cf-paypal-pro' ); ?>
			</span>
				</li>
			</ul>
		</div>
		<div id="cf-paypal-pro" style="margin-top: 64px;">
			<cf-paypal-pro></cf-paypal-pro>
		</div>
		<script type="text/html" id="cf-paypal-pro-tmpl">
			<form v-on:submit.prevent="onSubmit" v-cloak>
				<div id="cf-paypal-pro-feedback"></div>
                <h3>PayPal REST API Credentials</h3>
				<div class="caldera-config-group">
					<label for="cf-paypal-pro-api-key">
						<?php esc_html_e( 'Client ID', 'cf-paypal-pro' ); ?>
					</label>
					<input v-model="<?php echo Settings::APIKEY; ?>" placeholder="<?php _e( 'Your Client ID', 'cf-paypal-pro' ); ?>" id="cf-paypal-pro-api-key"/>
				</div>
				<div class="caldera-config-group">
					<label for="cf-paypal-pro-secret">
						<?php esc_html_e( 'Client Secret', 'cf-paypal-pro' ); ?>
					</label>
					<input v-model="<?php echo Settings::SECRET; ?>" placeholder="<?php _e( 'Your Client Secret', 'cf-paypal-pro' ); ?>" id="cf-paypal-pro-secret"/>
				</div>
                <div class="caldera-config-group">
                    <label for="cf-paypal-pro-sandbox-api-key">
						<?php esc_html_e( 'Sandbox Client ID', 'cf-paypal-pro' ); ?>
                    </label>
                    <input v-model="<?php echo Settings::SANDBOX_APIKEY; ?>" placeholder="<?php _e( 'Your Sandbox Client ID', 'cf-paypal-pro' ); ?>" id="cf-paypal-pro-api-sandbox-key"/>
                </div>
                <div class="caldera-config-group">
                    <label for="cf-paypal-pro-sandbox-secret">
						<?php esc_html_e( 'Sandbox Client Secret', 'cf-paypal-pro' ); ?>
                    </label>
                    <input v-model="<?php echo Settings::SANDBOX_SECRET; ?>" placeholder="<?php _e( 'Your Sandbox Client Secret', 'cf-paypal-pro' ); ?>" id="cf-paypal-pro-sandbox-secret"/>
                </div>
                <h3>PayPal Classic API Credentials</h3>
                <div class="caldera-config-group">
                    <label for="cf-paypal-pro-classic-username">
						<?php esc_html_e( 'Username', 'cf-paypal-pro' ); ?>
                    </label>
                    <input v-model="<?php echo Settings::USERNAME; ?>" placeholder="<?php _e( 'Your API Username', 'cf-paypal-pro' ); ?>" id="cf-paypal-pro-classic-username"/>
                </div>
                <div class="caldera-config-group">
                    <label for="cf-paypal-pro-classic-pass">
						<?php esc_html_e( 'Password', 'cf-paypal-pro' ); ?>
                    </label>
                    <input v-model="<?php echo Settings::PASS; ?>" placeholder="<?php _e( 'Your API Password', 'cf-paypal-pro' ); ?>" id="cf-paypal-pro-classic-pass"/>
                </div>
                <div class="caldera-config-group">
                    <label for="cf-paypal-pro-classic-signature">
						<?php esc_html_e( 'Signature', 'cf-paypal-pro' ); ?>
                    </label>
                    <input v-model="<?php echo Settings::SIGNATURE; ?>" placeholder="<?php _e( 'Your API Signature', 'cf-paypal-pro' ); ?>" id="cf-paypal-pro-classic-signature"/>
                </div>
				<?php submit_button( esc_html__( 'Save' ) ); ?>
				<div id="cf-paypal-pro-spinner" aria-hidden="true" style="display: none">
					<img src="<?php echo esc_url( admin_url( 'images/spinner.gif' ) ); ?>"/>
				</div>
			</form>
		</script>

		<?php
	}

	/**
	 * @return Menu
	 */
	public static function instance() {
		if ( ! self::$instance ) {
			self::$instance = new self;
		}
		return self::$instance;
	}
}