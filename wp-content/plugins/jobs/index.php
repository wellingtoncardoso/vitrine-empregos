<?php
/*
Plugin Name: Job - Vitrine Empregos
Description: Create new job openings for candidates
Author: Cardoso Wellington
*/
if(!defined('ABSPATH')){
  die;
}
add_action('init', 'job');
function job(){
  $labels = array(
    'name'               => __( 'Job' ),
    'singular_name'      => __( 'Job' ),
    'add_new'            => __( 'Add New - job' ),
    'add_new_item'       => __( 'Add New - job' ),
    'edit_item'          => __( 'Edit job' ),
    'new_item'           => __( 'New job' ),
    'all_items'          => __( 'All - Jobs' ),
    'view_item'          => __( 'View job' ),
    'search_items'       => __( 'Search job' ),
    'featured_image'     => 'Imagem',
    'set_featured_image' => 'Add Imagem',
    'menu_name'          => 'Job',
  );
  $args = array(
    'labels'            => $labels,
    'description'       => 'Create new job openings for candidates',
    'public'            => true,
    'menu_position'     => 5,
    'supports'          => array('custom_field', 'editor', 'title'),
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'has_archive'       => true,
    'query_var'         => true,
    'hierarchical'      => false,
    'menu_icon'         => 'dashicons-networking',
  );
  register_post_type( 'job', $args);
  flush_rewrite_rules();
}