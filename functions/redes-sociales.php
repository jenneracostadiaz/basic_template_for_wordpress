<?php 

$wp_customize->add_section('redes_sociales',array(
    'title'=>'Redes Sociales',
    'priority'=>60,
    'panel'=>'config_web',
));

$wp_customize->add_setting('red_facebook', array(
    'capability' => 'edit_theme_options',
    'type'       => 'option',
));
$wp_customize->add_control('red_facebook', array(
    'label' => __( 'Link Facebook', 'raio' ),
    'section' => 'redes_sociales',
    'type' => 'url',
));
$wp_customize->add_setting('red_instagram', array(
    'capability' => 'edit_theme_options',
    'type'       => 'option',
));
$wp_customize->add_control('red_instagram', array(
    'label' => __( 'Instagram ', 'raio' ),
    'section' => 'redes_sociales',
    'type' => 'url',
));
$wp_customize->add_setting('red_twitter', array(
    'capability' => 'edit_theme_options',
    'type'       => 'option',
));
$wp_customize->add_control('red_twitter', array(
    'label' => __( 'Twitter', 'raio' ),
    'section' => 'redes_sociales',
    'type' => 'url',
));
$wp_customize->add_setting('red_youtube', array(
    'capability' => 'edit_theme_options',
    'type'       => 'option',
));
$wp_customize->add_control('red_youtube', array(
    'label' => __( 'Youtube', 'raio' ),
    'section' => 'redes_sociales',
    'type' => 'url',
));
$wp_customize->add_setting('red_linkedin', array(
    'capability' => 'edit_theme_options',
    'type'       => 'option',
));
$wp_customize->add_control('red_linkedin', array(
    'label' => __( 'Linkedin', 'raio' ),
    'section' => 'redes_sociales',
    'type' => 'url',
));
$wp_customize->add_setting('red_tiktok', array(
    'capability' => 'edit_theme_options',
    'type'       => 'option',
));
$wp_customize->add_control('red_tiktok', array(
    'label' => __( 'Tiktok', 'raio' ),
    'section' => 'redes_sociales',
    'type' => 'url',
));

?>