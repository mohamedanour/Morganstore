<?php 
    Kirki::add_field( 'thehanger', array(
        'type'        => 'image',
        'settings'    => 'map_image_' . $navItem->ID,
        'label'       => __( 'Image Upload', 'the-hanger' ),
        'section'     => 'megamenu_' . $navItem->ID,
        'default'     => get_template_directory_uri() . '/images/contact/map.jpg',
        'priority'    => 10,
        'active_callback'    => array(
            array(
                'setting'  => 'typeof_megamenu_' . $navItem->ID,
                'operator' => '==',
                'value'    => 'contact',     
            ),
            array(
                'setting'  => 'enable_megamenu_' . $navItem->ID,
                'operator' => '==',
                'value'    => true,     
            ),
            $mega_header
        ),
    ) );

    Kirki::add_field( 'thehanger', array(
        'type'        => 'separator',
        'settings'    => 'separator_'. $i++,
        'section'     => 'megamenu_' . $navItem->ID,
        'active_callback'    => array(
            array(
                'setting'  => 'typeof_megamenu_' . $navItem->ID,
                'operator' => '==',
                'value'    => 'contact',     
            ),
            array(
                'setting'  => 'enable_megamenu_' . $navItem->ID,
                'operator' => '==',
                'value'    => true,     
            ),
            $mega_header
        ),
    ) );

    Kirki::add_field( 'thehanger', array(
        'type'        => 'textarea',
        'settings'    => 'phone_number_' . $navItem->ID,
        'label'       => __( 'Phone Number', 'the-hanger' ),
        'section'     => 'megamenu_' . $navItem->ID,
        'default'     => __('Call Us +40 123 123 123', 'the-hanger'),
        'priority'    => 10,
        'active_callback'    => array(
            array(
                'setting'  => 'typeof_megamenu_' . $navItem->ID,
                'operator' => '==',
                'value'    => 'contact',     
            ),
            array(
                'setting'  => 'enable_megamenu_' . $navItem->ID,
                'operator' => '==',
                'value'    => true,     
            ),
            $mega_header
        ),
    ) );

    Kirki::add_field( 'thehanger', array(
        'type'        => 'textarea',
        'settings'    => 'business_hours_' . $navItem->ID,
        'label'       => __( 'Business Hours', 'the-hanger' ),
        'section'     => 'megamenu_' . $navItem->ID,
        'default'     => __('Monday — Friday,<br/>9:00 AM — 5:00 PM', 'the-hanger'),
        'priority'    => 10,
        'active_callback'    => array(
            array(
                'setting'  => 'typeof_megamenu_' . $navItem->ID,
                'operator' => '==',
                'value'    => 'contact',     
            ),
            array(
                'setting'  => 'enable_megamenu_' . $navItem->ID,
                'operator' => '==',
                'value'    => true,     
            ),
            $mega_header
        ),
    ) );

    Kirki::add_field( 'thehanger', array(
        'type'        => 'textarea',
        'settings'    => 'email_' . $navItem->ID,
        'label'       => __( 'Email', 'the-hanger' ),
        'section'     => 'megamenu_' . $navItem->ID,
        'default'     => __('support@yourstore.com','the-hanger'),
        'priority'    => 10,
        'active_callback'    => array(
            array(
                'setting'  => 'typeof_megamenu_' . $navItem->ID,
                'operator' => '==',
                'value'    => 'contact',     
            ),
            array(
                'setting'  => 'enable_megamenu_' . $navItem->ID,
                'operator' => '==',
                'value'    => true,     
            ),
            $mega_header
        ),
    ) );

    Kirki::add_field( 'thehanger', array(
        'type'        => 'textarea',
        'settings'    => 'location_' . $navItem->ID,
        'label'       => __( 'Location', 'the-hanger' ),
        'section'     => 'megamenu_' . $navItem->ID,
        'default'     => __('17 Princess Road<br/>London, Greater London<br/>NW1 8JRUK, Europe', 'the-hanger'),
        'priority'    => 10,
        'active_callback'    => array(
            array(
                'setting'  => 'typeof_megamenu_' . $navItem->ID,
                'operator' => '==',
                'value'    => 'contact',     
            ),
            array(
                'setting'  => 'enable_megamenu_' . $navItem->ID,
                'operator' => '==',
                'value'    => true,     
            ),
            $mega_header
        ),
    ) );