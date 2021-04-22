<?php

/**
 * This file is responsible for creating the Themes
 * custom post type
 * 
 * @author Syed Mohammed Hassan <contactsyedmh@gmail.com>
 * @since 1.0
 */

/**
 * Initiate Themes custom post type
 */
function mlm_themes_post_type() {

  /**
   * Supported and relevant labels as defined by WP
   */
  $labels = array(
    'name' => _x('Themes', 'brand'),
    'singular_name' => _x('Theme', 'brand'),
    'add_new' => __('Add New'),
    'add_new_item' => __('Add New Theme'),
    'edit_item' => __('Edit Theme'),
    'new_item' => __('New Theme'),
    'view_item' => __('View Theme'),
    'search_items' => __('Search Theme'),
    'not_found' => __('No themes found'),
    'not_found_in_trash' => __('No themes found in trash'),
    'parent_item_colon' => '-',
    'menu_name' => 'Themes'
  );

  /**
   * Supported and relevant args as defined by WP
   */
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'query_var' => true,
    'capability_type' => 'post',
    'menu_icon' => 'dashicons-networking',
    'has_archive' => false,
    'hierarchical' => false,
    'rewrite' => array(
      'slug' => 'theme',
      'with_front' => false
    ),
    'supports' => array('title')
  );

  /**
   * Call WP's native function to register the post type
   */
  register_post_type('theme', $args);

}

/**
 * Function to set up a single post template for theme
 */
function mlm_single_post_template($template) {

  global $post;

  /**
   * Check to see if the current post type is theme
   */
  if('theme' === $post->post_type && locate_template(array('single-theme-cpt.php')) !== $template):
    return plugin_dir_path(__FILE__) . 'templates/single-theme-cpt.php';
  endif;

  return $template;

}