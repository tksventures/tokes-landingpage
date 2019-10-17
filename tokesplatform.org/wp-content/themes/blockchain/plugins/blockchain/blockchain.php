<?php
/*
Plugin Name: Lit Stories
Description: Lit Stories News Website backend services implementation of functional requirements
Version: 1.0.0
Author URI: http://therealstart.com
*/

global $wpdb;

require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'helpers' . DIRECTORY_SEPARATOR . 'database.php';

DatabaseHelper::setInstance($wpdb);

include_once(ABSPATH . 'wp-includes/pluggable.php');

require_once dirname( __FILE__ ) . '/vendor/cmb2/init.php';

$customPosts = array_diff(scandir(__DIR__ . '/customposts'), [ '.', '..' ]);

foreach( $customPosts as $customPost )
{
    require_once  __DIR__ . '/customposts/' . $customPost;
}

$includes = array_diff(scandir(__DIR__ . '/inc'), [ '.', '..' ]);

foreach( $includes as $include )
{
	require_once  __DIR__ . '/inc/' . $include;
}

if( function_exists('vc_action') ) {

	$bakeryBlocks = array_diff(scandir(__DIR__ . '/wp-bakery'), [ '.', '..' ]);

	foreach( $bakeryBlocks as $block )
	{
		require_once  __DIR__ . '/wp-bakery/' . $block;
	}
}