<?php

namespace CF_PayPal_Pro\Util;

class Config {

	public static function render_ui() {
		echo \Caldera_Forms_Processor_UI::ssl_notice( 'PayPal Pro for Caldera Forms' );
		$cf_paypal_pro_config_fields = cf_paypal_pro_fields();
		$config_fields              = \Caldera_Forms_Processor_UI::config_fields( $cf_paypal_pro_config_fields );
		echo $config_fields;
	}

}