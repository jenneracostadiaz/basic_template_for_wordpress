<?php 

    $wp_customize->add_section('datos_contacto',array(
        'title'=>'Datos de Contacto',
        'priority'=>50,
        'panel'=>'config_web',
    ));

    $wp_customize->add_setting('dc_telefonofijo', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));
    $wp_customize->add_control('dc_telefonofijo', array(
        'label' => __( 'Tel. Fijo', 'raio' ),
        'section' => 'datos_contacto',
        'type' => 'url',
    ));
    $wp_customize->add_setting('dc_whatsapp', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));
    $wp_customize->add_control('dc_whatsapp', array(
        'label' => __( 'Numb. Whatsapp', 'raio' ),
        'section' => 'datos_contacto',
        'type' => 'url',
    ));
    $wp_customize->add_setting('dc_whatsapp_link', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));
    $wp_customize->add_control('dc_whatsapp_link', array(
        'label' => __( 'Link Whatsapp', 'raio' ),
        'section' => 'datos_contacto',
        'type' => 'url',
    ));
    $wp_customize->add_setting('dc_email', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));
    $wp_customize->add_control('dc_email', array(
        'label' => __( 'Email', 'raio' ),
        'section' => 'datos_contacto',
        'type' => 'email',
    ));
    $wp_customize->add_setting('dc_direccion', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));
    $wp_customize->add_control('dc_direccion', array(
        'label' => __( 'Dirección', 'raio' ),
        'section' => 'datos_contacto',
        'type' => 'textarea',
    ));
    $wp_customize->add_setting('dc_linkmaps', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));
    $wp_customize->add_control('dc_linkmaps', array(
        'label' => __( 'Link Google Maps', 'raio' ),
        'section' => 'datos_contacto',
        'type' => 'url',
    ));

?>