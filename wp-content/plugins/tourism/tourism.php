<?php
/*
Plugin Name: tourism
Plugin URI: http://wordpress.org/plugins/page-list/
Description: [pagelist], [subpages], [siblings] and [pagelist_ext] shortcodes
Version: 4.2
Author: webvitaly
Author URI: http://web-profile.com.ua/wordpress/plugins/
License: GPLv2 or later
*/
require_once( WP_PLUGIN_DIR . '/sitepress-multilingual-cms/inc/wpml-api.php' );
class Tourism
{
/* public static function register_activation_hook()
  {
	$new_page = array(
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
            'post_content'   => 'default content',
            'post_status'    => 'publish',
            'post_title'     => 'tesztdefault title',
    	    'post_type'      => 'page'
        );
          $new_page_id = wp_insert_post( $new_page );
          var_dump($new_page_id);die();
    }
*/
    public function __construct()
    {
    var_dump(get_permalink(2090));die();
	$_POST['icl_post_language'] = $language_code = 'hu';
           $new_page = array(
               'comment_status' => 'closed',
               'ping_status'    => 'closed',
               'post_content'   => 'default content',
               'post_status'    => 'publish',
               'post_title'     => 'tesztdefault title',
               'post_type'      => 'page'
           );
           $new_page_id = wp_insert_post( $new_page );
          if ($new_page_id) {
        	wp_delete_post(($new_page_id-1),true);
        	wp_delete_post(($new_page_id-2),true);
          }
            var_dump($new_page_id);die();
    }
}

var_dump(function_exists('wp_insert_post'));
//Tourism::register_activation_hook();
//register_activation_hook( __FILE__, Tourism::register_activation_hook );
//$myClass = new Tourism();
require_once('/home/slopa/ExcelProcessor.php');

echo 100/0;
?>