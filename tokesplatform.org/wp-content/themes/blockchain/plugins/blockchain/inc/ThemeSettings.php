<?php
/**
 * Created by IntelliJ IDEA.
 * User: vladislav
 * Date: 5/2/18
 * Time: 1:31 PM
 */

namespace blockchain\helpers;

class ThemeSettings
{
	public function init() {
		$optionKey = 'theme_settings';

		$cmb_options = new_cmb2_box( array(
			'id'           => $optionKey . 'page',
			'title'        => esc_html__( 'Theme Settings', 'cmb2' ),
			'object_types' => array( 'options-page' ),
			'show_on'	=>	array(
				'options-page'	=>	$optionKey,
			)
		) );

        $cmb_options->add_field(array(
            'name'    => esc_html__( 'Facebook', 'cmb2' ),
            'id'      => 'facebook',
            'type'    => 'text',
        ));

        $cmb_options->add_field(array(
            'name'    => esc_html__( 'Twitter', 'cmb2' ),
            'id'      => 'twitter',
            'type'    => 'text',
        ));

        $cmb_options->add_field(array(
            'name'    => esc_html__( 'YouTube', 'cmb2' ),
            'id'      => 'youtube',
            'type'    => 'text',
        ));

        $cmb_options->add_field(array(
            'name'    => esc_html__( 'Telegram', 'cmb2' ),
            'id'      => 'telegram',
            'type'    => 'text',
        ));

        $cmb_options->add_field(array(
            'name'    => esc_html__( 'Discord', 'cmb2' ),
            'id'      => 'discord',
            'type'    => 'text',
        ));

        $cmb_options->add_field(array(
            'name'    => esc_html__( 'Instagram', 'cmb2' ),
            'id'      => 'instagram',
            'type'    => 'text',
        ));

        $cmb_options->add_field(array(
            'name'    => esc_html__( 'Reddit', 'cmb2' ),
            'id'      => 'reddit',
            'type'    => 'text',
        ));

        $cmb_options->add_field(array(
            'name'    => esc_html__( 'Email', 'cmb2' ),
            'id'      => 'email',
            'type'    => 'text',
        ));

		$cmb_options->add_field(array(
			'name'    => esc_html__( 'App Store Link', 'cmb2' ),
			'id'      => 'app_store_link',
			'type'    => 'text',
		));

        $cmb_options->add_field(array(
            'name'    => esc_html__( 'Google Play Link', 'cmb2' ),
            'id'      => 'google_play_link',
            'type'    => 'text',
        ));

        $cmb_options->add_field(array(
            'name'    => esc_html__( 'Buy Tokes Link', 'cmb2' ),
            'id'      => 'buy_tokes_link',
            'type'    => 'text',
        ));

        $cmb_options->add_field(array(
            'name'    => esc_html__( 'Sign Up Link', 'cmb2' ),
            'id'      => 'sign_up_link',
            'type'    => 'text',
        ));

        $cmb_options->add_field(array(
            'name'    => esc_html__( 'Apply Now Link', 'cmb2' ),
            'id'      => 'apply_now_link',
            'type'    => 'text',
        ));

        $cmb_options->add_field(array(
            'name'    => esc_html__( 'Contact Us Link', 'cmb2' ),
            'id'      => 'contact_us_link',
            'type'    => 'text',
        ));


        $cmb_options->add_field(array(
            'name'    => esc_html__( 'Blockfolio', 'cmb2' ),
            'id'      => 'blockfolio',
            'type'    => 'text',
        ));

	}
}

$settings = new ThemeSettings();

add_filter( 'cmb2_admin_init', [ $settings, 'init' ] );