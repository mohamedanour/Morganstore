<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( 'social_media', array(
    'title'          => esc_attr__( 'Social Media', 'the-hanger' ),
    'priority'       => 65,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 98795;
$section = 'social_media';

Kirki::add_field( 'thehanger', array(
    'type'        => 'text',
    'settings'    => 'facebook_link',
    'label'       => esc_attr__( 'Facebook', 'the-hanger' ),
    'section'     => $section,
    'default'     => '#',
    'priority'    => 10,
) );

Kirki::add_field( 'thehanger', array(
    'type'        => 'text',
    'settings'    => 'twitter_link',
    'label'       => esc_attr__( 'Twitter', 'the-hanger' ),
    'section'     => $section,
    'default'     => '#',
    'priority'    => 10,
) );

Kirki::add_field( 'thehanger', array(
    'type'        => 'text',
    'settings'    => 'pinterest_link',
    'label'       => esc_attr__( 'Pinterest', 'the-hanger' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'thehanger', array(
    'type'        => 'text',
    'settings'    => 'linkedin_link',
    'label'       => esc_attr__( 'LinkedIn', 'the-hanger' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'thehanger', array(
    'type'        => 'text',
    'settings'    => 'googleplus_link',
    'label'       => esc_attr__( 'Google+', 'the-hanger' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'thehanger', array(
    'type'        => 'text',
    'settings'    => 'rss_link',
    'label'       => esc_attr__( 'RSS', 'the-hanger' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'thehanger', array(
    'type'        => 'text',
    'settings'    => 'tumblr_link',
    'label'       => esc_attr__( 'Tumblr', 'the-hanger' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'thehanger', array(
    'type'        => 'text',
    'settings'    => 'instagram_link',
    'label'       => esc_attr__( 'Instagram', 'the-hanger' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'thehanger', array(
    'type'        => 'text',
    'settings'    => 'youtube_link',
    'label'       => esc_attr__( 'Youtube', 'the-hanger' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'thehanger', array(
    'type'        => 'text',
    'settings'    => 'vimeo_link',
    'label'       => esc_attr__( 'Vimeo', 'the-hanger' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'thehanger', array(
    'type'        => 'text',
    'settings'    => 'behance_link',
    'label'       => esc_attr__( 'Behance', 'the-hanger' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'thehanger', array(
    'type'        => 'text',
    'settings'    => 'dribbble_link',
    'label'       => esc_attr__( 'Dribbble', 'the-hanger' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'thehanger', array(
    'type'        => 'text',
    'settings'    => 'flickr_link',
    'label'       => esc_attr__( 'Flickr', 'the-hanger' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'thehanger', array(
    'type'        => 'text',
    'settings'    => 'git_link',
    'label'       => esc_attr__( 'Git', 'the-hanger' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'thehanger', array(
    'type'        => 'text',
    'settings'    => 'skype_link',
    'label'       => esc_attr__( 'Skype', 'the-hanger' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'thehanger', array(
    'type'        => 'text',
    'settings'    => 'weibo_link',
    'label'       => esc_attr__( 'Weibo', 'the-hanger' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'thehanger', array(
    'type'        => 'text',
    'settings'    => 'foursquare_link',
    'label'       => esc_attr__( 'Foursquare', 'the-hanger' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'thehanger', array(
    'type'        => 'text',
    'settings'    => 'soundcloud_link',
    'label'       => esc_attr__( 'Soundcloud', 'the-hanger' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );

Kirki::add_field( 'thehanger', array(
    'type'        => 'text',
    'settings'    => 'snapchat_link',
    'label'       => esc_attr__( 'Snapchat', 'the-hanger' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
) );