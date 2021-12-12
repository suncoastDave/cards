<?php

    function prescriptionDotCards_post_types() {
        register_post_type( 'drug', array(
            'public' => true,
            'labels'  => array(
                'name' => 'Drugs',
                'singular_name' => 'Drug'
        ),
            'menu-icon' => 'dashicons-table-col-after'
        ));
}

add_action('init', 'prescriptionDotCards_post_types');