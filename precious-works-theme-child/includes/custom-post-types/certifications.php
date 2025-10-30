<?php
/**
 * certifications Custom Post Type
 *
 * This custom post type adds support for certifications. This file declares
 * basic support for the post type, while the fields are managed by the
 * Advanced Custom Fields plugin.
 */

 function register_custom_post_type_certifications() {
    $labels = apply_filters( 'certifications_post_type_labels', array(
        'name'               => 'Certifications',
        'singular_name'      => 'Certification',
        'menu_name'          => 'Certifications',
        'add_new'            => 'Add New Certification',
        'add_new_item'       => 'Add Certification',
        'edit'               => 'Edit',
        'edit_item'          => 'Edit Certification',
        'new_item'           => 'New Certification',
        'view'               => 'View Certification',
        'view_item'          => 'View Certification',
        'search_items'       => 'Search Certifications',
        'not_found'          => 'No Certification',
        'not_found_in_trash' => 'No Certifications Found in Trash',
        'parent'             => 'Parent Certifications',
    ));

    $args = apply_filters( 'certification_post_type_args', array(
        'label'               => 'certification',
        'description'         => '',
        'public'              => true,
        'publicly_queryable'  => false,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'capability_type'     => 'page',
        'hierarchical'        => true,
        'query_var'           => true,
        'has_archive'         => false,
        'exclude_from_search' => true,
        'menu_icon'           => 'dashicons-star-filled',
        'show_in_rest'        => true,
        'supports'            => array( 'title', 'thumbnail'),
        'labels'              => $labels,
        'map_meta_cap'        => true,
    ));

    register_post_type( 'certifications', $args );
}
add_action( 'init', 'register_custom_post_type_certifications' );


// Run once for user permissions

add_action( 'admin_init', 'add_certification_caps');
function add_certification_caps() {
$roles = array('administrator','editor');

foreach($roles as $the_role) {
    $role = get_role($the_role);
        $role->add_cap( 'edit_certification' );
        $role->add_cap( 'read_certification' );
        $role->add_cap( 'delete_certification' );
        $role->add_cap( 'edit_certification' );
        $role->add_cap( 'edit_others_certification' );
        $role->add_cap( 'publish_certification' );
        $role->add_cap( 'read_private_certification' );
    }
}