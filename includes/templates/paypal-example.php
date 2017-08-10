<?php
return array(
	'_last_updated'      => 'Thu, 10 Aug 2017 00:39:57 +0000',
	'ID'                 => 'paypal-payment-form',
	'cf_version'         => '1.5.0.10',
	'name'               => 'PayPal Payment Form',
	'scroll_top'         => 0,
	'description'        => '',
	'success'            => 'Form has been successfully submitted. Thank you.',
	'db_support'         => 1,
	'pinned'             => 1,
	'hide_form'          => 1,
	'check_honey'        => 1,
	'avatar_field'       => '',
	'form_ajax'          => 1,
	'custom_callback'    => '',
	'layout_grid'        =>
		array(
			'fields'    =>
				array(
					'first_name'         => '1:1',
					'last_name'          => '1:2',
					'first_name_on_card' => '2:1',
					'last_name_on_card'  => '2:2',
					'email'              => '3:1',
					'address_line_1'     => '4:1',
					'address_line_2'     => '4:1',
					'city'               => '5:1',
					'zip_code'           => '5:2',
					'state_province'     => '5:3',
					'card_number'        => '6:1',
					'expiration_month'   => '7:1',
					'expiration_year'    => '7:2',
					'type_of_card'       => '7:3',
					'reset'              => '8:1',
				),
			'structure' => '6:6|6:6|12|12|6:4:2|12|4:4:4|12',
		),
	'fields'             =>
		array(
			'first_name'         =>
				array(
					'ID'         => 'first_name',
					'type'       => 'text',
					'label'      => 'First Name',
					'slug'       => 'first_name',
					'conditions' =>
						array(
							'type' => '',
						),
					'required'   => 1,
					'caption'    => '',
					'config'     =>
						array(
							'custom_class'  => '',
							'placeholder'   => '',
							'default'       => '{user:first_name}',
							'type_override' => 'text',
							'mask'          => '',
						),
				),
			'last_name'          =>
				array(
					'ID'         => 'last_name',
					'type'       => 'text',
					'label'      => 'Last Name',
					'slug'       => 'last_name',
					'conditions' =>
						array(
							'type' => '',
						),
					'required'   => 1,
					'caption'    => '',
					'config'     =>
						array(
							'custom_class'  => '',
							'placeholder'   => '',
							'default'       => '{user:last_name}',
							'type_override' => 'text',
							'mask'          => '',
						),
				),
			'email'              =>
				array(
					'ID'         => 'email',
					'type'       => 'email',
					'label'      => 'Email',
					'slug'       => 'email',
					'conditions' =>
						array(
							'type' => '',
						),
					'required'   => 1,
					'caption'    => '',
					'config'     =>
						array(
							'custom_class' => '',
							'placeholder'  => '',
							'default'      => '{user:user_email}',
						),
				),
			'first_name_on_card' =>
				array(
					'ID'         => 'first_name_on_card',
					'type'       => 'text',
					'label'      => 'First Name On Card',
					'slug'       => 'first_name_on_card',
					'conditions' =>
						array(
							'type' => '',
						),
					'required'   => 1,
					'caption'    => '',
					'config'     =>
						array(
							'custom_class'  => '',
							'placeholder'   => '',
							'default'       => '%first_name%',
							'type_override' => 'text',
							'mask'          => '',
						),
				),
			'last_name_on_card'  =>
				array(
					'ID'         => 'last_name_on_card',
					'type'       => 'text',
					'label'      => 'Last Name On Card',
					'slug'       => 'last_name_on_card',
					'conditions' =>
						array(
							'type' => '',
						),
					'required'   => 1,
					'caption'    => '',
					'config'     =>
						array(
							'custom_class'  => '',
							'placeholder'   => '',
							'default'       => '%last_name%',
							'type_override' => 'text',
							'mask'          => '',
						),
				),
			'address_line_1'     =>
				array(
					'ID'         => 'address_line_1',
					'type'       => 'text',
					'label'      => 'Address Line 1',
					'slug'       => 'address_line_1',
					'conditions' =>
						array(
							'type' => '',
						),
					'caption'    => '',
					'config'     =>
						array(
							'custom_class'  => '',
							'placeholder'   => '',
							'default'       => '',
							'type_override' => 'text',
							'mask'          => '',
						),
				),
			'address_line_2'     =>
				array(
					'ID'         => 'address_line_2',
					'type'       => 'text',
					'label'      => 'Address Line 2',
					'slug'       => 'address_line_2',
					'conditions' =>
						array(
							'type' => '',
						),
					'caption'    => '',
					'config'     =>
						array(
							'custom_class'  => '',
							'placeholder'   => '',
							'default'       => '',
							'type_override' => 'text',
							'mask'          => '',
						),
				),
			'city'               =>
				array(
					'ID'         => 'city',
					'type'       => 'text',
					'label'      => 'City',
					'slug'       => 'city',
					'conditions' =>
						array(
							'type' => '',
						),
					'caption'    => '',
					'config'     =>
						array(
							'custom_class'  => '',
							'placeholder'   => '',
							'default'       => '',
							'type_override' => 'text',
							'mask'          => '',
						),
				),
			'zip_code'           =>
				array(
					'ID'         => 'zip_code',
					'type'       => 'text',
					'label'      => 'Zip Code',
					'slug'       => 'zip_code',
					'conditions' =>
						array(
							'type' => '',
						),
					'required'   => 1,
					'caption'    => '',
					'config'     =>
						array(
							'custom_class'  => '',
							'placeholder'   => '',
							'default'       => '',
							'type_override' => 'text',
							'mask'          => '',
						),
				),
			'state_province'     =>
				array(
					'ID'         => 'state_province',
					'type'       => 'states',
					'label'      => 'State/ Province',
					'slug'       => 'state_province',
					'conditions' =>
						array(
							'type' => '',
						),
					'caption'    => '',
					'config'     =>
						array(
							'custom_class' => '',
						),
				),
			'card_number'        =>
				array(
					'ID'         => 'card_number',
					'type'       => 'text',
					'label'      => 'Card Number',
					'slug'       => 'card_number',
					'conditions' =>
						array(
							'type' => '',
						),
					'required'   => 1,
					'caption'    => '',
					'config'     =>
						array(
							'custom_class'  => '',
							'placeholder'   => '',
							'default'       => '',
							'type_override' => 'text',
							'mask'          => '',
						),
				),
			'expiration_month'   =>
				array(
					'ID'         => 'expiration_month',
					'type'       => 'text',
					'label'      => 'Expiration Month',
					'slug'       => 'expiration_month',
					'conditions' =>
						array(
							'type' => '',
						),
					'required'   => 1,
					'caption'    => '',
					'config'     =>
						array(
							'custom_class'  => '',
							'placeholder'   => '',
							'default'       => '',
							'type_override' => 'text',
							'masked'        => 1,
							'mask'          => 99,
						),
				),
			'expiration_year'    =>
				array(
					'ID'         => 'expiration_year',
					'type'       => 'text',
					'label'      => 'Expiration Year',
					'slug'       => 'expiration_year',
					'conditions' =>
						array(
							'type' => '',
						),
					'required'   => 1,
					'caption'    => '',
					'config'     =>
						array(
							'custom_class'  => '',
							'placeholder'   => '',
							'default'       => '',
							'type_override' => 'text',
							'masked'        => 1,
							'mask'          => 99,
						),
				),
			'reset'              =>
				array(
					'ID'         => 'reset',
					'type'       => 'button',
					'label'      => 'Reset',
					'slug'       => 'reset',
					'conditions' =>
						array(
							'type' => '',
						),
					'caption'    => '',
					'config'     =>
						array(
							'custom_class' => '',
							'type'         => 'reset',
							'class'        => 'btn btn-default',
							'target'       => '',
						),
				),
			'type_of_card'       =>
				array(
					'ID'         => 'type_of_card',
					'type'       => 'dropdown',
					'label'      => 'Type of Card',
					'slug'       => 'type_of_card',
					'conditions' =>
						array(
							'type' => '',
						),
					'caption'    => '',
					'config'     =>
						array(
							'custom_class' => '',
							'placeholder'  => '',
							'auto_type'    => '',
							'taxonomy'     => 'category',
							'post_type'    => 'post',
							'value_field'  => 'name',
							'orderby_tax'  => 'count',
							'orderby_post' => 'ID',
							'order'        => 'ASC',
							'default'      => 'opt154253',
							'option'       =>
								array(
									'opt154253'  =>
										array(
											'value' => 'visa',
											'label' => 'visa',
										),
									'opt1342764' =>
										array(
											'value' => 'mastercard',
											'label' => 'mastercard',
										),
									'opt2333345' =>
										array(
											'value' => 'amex',
											'label' => 'amex',
										),
									'opt4063894' =>
										array(
											'value' => 'discover',
											'label' => 'discover',
										),
								),
						),
				),
		),
	'page_names'         =>
		array(
			0 => 'Page 1',
		),
	'mailer'             =>
		array(
			'on_insert'     => 1,
			'sender_name'   => 'Caldera Forms Notification',
			'sender_email'  => 'chris@champoosa.com',
			'reply_to'      => '',
			'email_type'    => 'html',
			'recipients'    => '',
			'bcc_to'        => '',
			'email_subject' => 'jgkg',
			'email_message' => '{summary}',
		),
	'processors'         =>
		array(
			'fp_41257708' =>
				array(
					'ID'         => 'fp_41257708',
					'runtimes'   =>
						array(
							'insert' => 1,
						),
					'type'       => 'increment_capture',
					'config'     =>
						array(
							'start' => 42,
							'field' => null,
						),
					'conditions' =>
						array(
							'type' => '',
						),
				),
			'fp_43339419' =>
				array(
					'ID'         => 'fp_43339419',
					'runtimes'   =>
						array(
							'insert' => 1,
						),
					'type'       => 'cf_paypal_pro',
					'config'     =>
						array(
							'sandbox'                     => 'on',
							'cf-paypal-pro-restOrClassic' => 'rest',
							'cf-paypal-pro-planOrSingle'  => 'charge',
							'amount'                      => 99,
							'cf-paypal-pro-plan-actual'   => '',
							'cardholderFirstName'         => '%first_name_on_card%',
							'cardholderLastName'          => '%last_name_on_card%',
							'card_number'                 => '%card_number%',
							'card_exp_month'              => '%expiration_month%',
							'card_exp_year'               => '%expiration_year%',
							'card_cvc'                    => '%cvv%',
							'type_of_card'                => '%type_of_card%',
							'first_name'                  => '%first_name%',
							'last_name'                   => '%last_name%',
							'customer_email'              => 'email',
							'_required_bounds'            =>
								array(
									0 => 'customer_email',
								),
							'card_address'                => '%address_line_1%',
							'card_address_2'              => '%address_line_2%',
							'card_city'                   => '%city%',
							'card_state'                  => '%state_province%',
							'card_zip'                    => '%zip_code%',
							'card_country'                => 'US',
						),
					'conditions' =>
						array(
							'type' => '',
						),
				),
		),
	'conditional_groups' =>
		array(
			'_open_condition' => '',
		),
	'settings'           =>
		array(
			'responsive' =>
				array(
					'break_point' => 'sm',
				),
		),
	'version'            => '1.5.0.10',
);