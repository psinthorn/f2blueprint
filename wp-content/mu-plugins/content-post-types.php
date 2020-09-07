<?php
    function content_post_types() {

         // Field post type
        register_post_type('field', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
            'rewrite' => array('slug' => 'fields'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Fields',
                'add_new_item' => 'Add New Field',
                'edit_item' => 'Edit Field',
                'all_items' => 'All Fields',
                'singular_name' => 'Field'
            ),
            'menu_icon' => 'dashicons-location-alt'
        ));


        // Events post type
        register_post_type('event', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
            'rewrite' => array('slug' => 'events'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Events',
                'add_new_item' => 'Add New Event',
                'edit_item' => 'Edit Event',
                'all_items' => 'All Events',
                'singular_name' => 'Event'
            ),
            'menu_icon' => 'dashicons-calendar'
        ));

        // Type post type
        register_post_type('type', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor'),
            'rewrite' => array('slug' => 'types'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Types',
                'add_new_item' => 'Add New Type',
                'edit_item' => 'Edit Type',
                'all_items' => 'All Types',
                'singular_name' => 'Type'

            ),
            'menu_icon' => 'dashicons-awards'
        ));

        // Teamwork post type
        register_post_type('teamwork', array(
            'show_in_rest' => true,
            'supports' => array('title', 'editor','thumbnail'),
            'rewrite' => array('slug' => 'teamworks'),
            'has_archive' => true,
            'public' => true,
            'labels' => array(
                'name' => 'Teamworks',
                'add_new_item' => 'Add New Teamwork',
                'edit_item' => 'Edit Teamwork',
                'all_items' => 'All Teamworks',
                'singular_name' => 'Teamwork'

            ),
            'menu_icon' => 'dashicons-welcome-learn-more'
        ));
    }

    add_action('init', 'content_post_types'); 