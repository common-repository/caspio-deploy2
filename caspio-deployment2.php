<?php
/*
  Plugin Name: Caspio Deployment Plugin
  Plugin URI: http://www.caspio.com
  Description: The Caspio Deployment Plugin allows you to embed Caspio apps seamlessly on any WordPress post or page, simply by pasting the provided shortcode.
  Author: Caspio
  Version: 1.9
  Author URI: http://www.caspio.com
 */
define( 'CASPIOPATH', trailingslashit(dirname(__FILE__)) );

require_once( CASPIOPATH . 'classes/class-shortcode-parser.php' );
require_once( CASPIOPATH . 'classes/class-datapage-loader.php' );
?>