<?php

// ============================================
// Panel
// ============================================

Kirki::add_section( 'panel_header', array(
    'title'         => __( 'Header', 'the-hanger' ),
    'priority'       => 30,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

Kirki::add_field( 'thehanger', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'header_template',
    'label'       => esc_attr__( 'Header Template', 'the-hanger' ),
    'section'     => 'panel_header',
    'default'     => 'style-1',
    'priority'    => 10,
    'choices'     => array(
        'style-1'          => esc_attr__( 'Advanced', 'the-hanger' ),
        'style-2'    => esc_attr__( 'Simplified', 'the-hanger' ),
    ),
) );

$mega_header    = array(
                    'setting'  => 'header_template',
                    'operator' => '==',
                    'value'    => 'style-1'     
                );

$simple_header  = array(
                    'setting'  => 'header_template',
                    'operator' => '==',
                    'value'    => 'style-2'     
                );

require_once('mega_header/index.php');
require_once('mega_header/settings.php');
require_once('mega_header/elements.php');
require_once('mega_header/topbar.php');
require_once('mega_header/logo.php');
require_once('mega_header/sticky.php');
require_once('mega_header/dropdowns.php');
require_once('mega_header/mobile.php');

require_once('mega_header/mega_menu/mega_menu.php');
require_once('mega_header/mega_dropdown/mega_dropdown.php');

require_once('simplified/index.php');
require_once('simplified/settings.php');
require_once('simplified/logo.php');
require_once('simplified/elements.php');