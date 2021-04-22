<?php

/**
 * @package ThemesCustomPostType
 * @author Syed Mohammed Hassan <contactsyedmh@gmail.com>
 * @copyright 2021 Blue Synergy
 * @license GPL-2.0-or-later
 * 
 * Plugin Name: Themes Custom Post Type
 * Description: This is a custom plugin developed for My Little Montessorian that adds a custom post type with the name "Themes". This plugin requires the free or PRO version of ACF to be installed.
 * Version: 1.0
 * Author: Syed Mohammed Hassan
 * Author URI: https://syedmh.com/
 * Text Domain: themes=custom-post-type
 */

/*
 * Themes Custom Post Type is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 * 
 * Themes Custom Post Type is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
*/

/**
 * Security Measure
 */
if(!defined('ABSPATH')) exit;

/**
 * Require plugin files
 */
require_once plugin_dir_path(__FILE__) . '/includes/cpt-theme.php';
require_once plugin_dir_path(__FILE__) . '/includes/fields-theme.php';

/**
 * Add the custom post type to the WP loop
 */
add_action('init', 'mlm_themes_post_type');

/**
 * Add the single page template for brands to the WP loop
 */
add_filter('single_template', 'mlm_single_post_template');