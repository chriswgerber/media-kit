<?php
/**
 * Plugin Name: EPG Media Kit
 * Plugin URI:  http://www.chriswgerber.com/
 * Description: Creates media kit and associates available information.
 * Version:     1.0.0
 * Author:      chriswgerber
 * Author URI:  http://www.chriswgerber.com/
 * License:     GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Domain Path: /languages
 * Text Domain: epgmk
 *
 * @WordPress-Plugin
 *
 * Creates an Online Media Kit for EPG Media & Specialty Information
 *
 * @link  http://www.chriswgerber.com/
 * @since 1.0.0
 *
 * @package    WordPress
 * @subpackage Component
 */

/* Load The Files */
include 'src/class.mediakit_post_type.php';

/* Create the Post Type Class */
$epg_media_kit = new Mediakit_Post_Type;
$epg_media_kit->post_type_name = 'Creative Unit';
$epg_media_kit->post_type_slug = 'epg_creative';

// Register Post Type
add_action( 'init', array( $epg_media_kit, 'register_post_type' ), 0 );