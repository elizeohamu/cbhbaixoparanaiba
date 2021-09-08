<?php

function baixoparanaiba_customizer( $baixoparanaiba_customize ){ 

    //
    // Header E-mail
    //
    $baixoparanaiba_customize->add_section(
        'sec_header', array(
            'title' => __('Header E-mail', 'baixoparanaiba'),
            'description' => __('Header E-mail', 'baixoparanaiba')
        )
    );
    $baixoparanaiba_customize->add_setting(
        'set_header_email', array(
            'type' => 'theme_mod',
            'default' => 'E-mail',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_header_email', array(
            'label' => __('E-mail', 'baixoparanaiba'),
            'description' => __('Type your e-mail', 'baixoparanaiba'),
            'section' => 'sec_header',
            'type' => 'text'
        )
    );

    //
    // Banner
    //
    $baixoparanaiba_customize->add_section(
        'sec_banner', array(
            'title' => __('Banner', 'baixoparanaiba'),
            'description' => __('Banner', 'baixoparanaiba')
        )
    );
    $baixoparanaiba_customize->add_setting(
        'set_banner', array(
            'type' => 'theme_mod',
            'default' => 'Shortcode',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_banner', array(
            'label' => __('Shortcode', 'baixoparanaiba'),
            'description' => __('Insert your shortcode', 'baixoparanaiba'),
            'section' => 'sec_banner',
            'type' => 'text'
        )
    );


    //
    // Footer Contact
    //
    $baixoparanaiba_customize->add_section(
        'sec_contact', array(
            'title' => __('Footer Contact', 'baixoparanaiba'),
            'description' => __('Footer Contact Section', 'baixoparanaiba')
        )
    );
    //Title
    $baixoparanaiba_customize->add_setting(
        'set_contact_title', array(
            'type' => 'theme_mod',
            'default' => 'Title',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_contact_title', array(
            'label' => __('Title', 'baixoparanaiba'),
            'description' => __('Type your title', 'baixoparanaiba'),
            'section' => 'sec_contact',
            'type' => 'text'
        )
    );
    //Text
    $baixoparanaiba_customize->add_setting(
        'set_contact_text', array(
            'type' => 'theme_mod',
            'default' => 'Text',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_contact_text', array(
            'label' => __('Text', 'baixoparanaiba'),
            'description' => __('Type your text', 'baixoparanaiba'),
            'section' => 'sec_contact',
            'type' => 'textarea'
        )
    );
    //Logo
    $baixoparanaiba_customize->add_setting(
        'set_logo', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $baixoparanaiba_customize->add_control( new WP_Customize_Image_Control( $baixoparanaiba_customize, 'logo_control', array(
        'label' => __('Upload Logo', 'baixoparanaiba'),
        'priority' => 1,
        'section' => 'sec_contact',
        'settings' => 'set_logo',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'baixoparanaiba'),
                    'remove' => __('Remove Logo', 'baixoparanaiba'),
                    'change' => __('Change Logo', 'baixoparanaiba'),
                    )
        ))
    );
    //Social
    $baixoparanaiba_customize->add_setting(
        'set_facebook_link', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
            'transport' => 'refresh'
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_facebook_link', array(
            'label' => __('Link', 'baixoparanaiba'),
            'description' => __('Type your Facebook link', 'baixoparanaiba'),
            'section' => 'sec_contact',
            'type' => 'text'
        )
    );

    $baixoparanaiba_customize->add_setting(
        'set_instagram_link', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
            'transport' => 'refresh'
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_instagram_link', array(
            'label' => __('Link', 'baixoparanaiba'),
            'description' => __('Type your Instagram link', 'baixoparanaiba'),
            'section' => 'sec_contact',
            'type' => 'text'
        )
    );

    $baixoparanaiba_customize->add_setting(
        'set_twitter_link', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
            'transport' => 'refresh'
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_twitter_link', array(
            'label' => __('Link', 'baixoparanaiba'),
            'description' => __('Type your Twitter link', 'baixoparanaiba'),
            'section' => 'sec_contact',
            'type' => 'text'
        )
    );

    $baixoparanaiba_customize->add_setting(
        'set_linkedin_link', array(
            'type' => 'theme_mod',
            'default' => '',
            'sanitize_callback' => 'wp_filter_nohtml_kses',
            'transport' => 'refresh'
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_linkedin_link', array(
            'label' => __('Link', 'baixoparanaiba'),
            'description' => __('Type your Linkedin link', 'baixoparanaiba'),
            'section' => 'sec_contact',
            'type' => 'text'
        )
    );

    //
    // Utilities Sectopn
    //
    $baixoparanaiba_customize->add_section(
        'sec_utilities', array(
            'title' => __('Section Utilities', 'baixoparanaiba'),
            'description' => __('Utilities Section', 'baixoparanaiba')
        )
    );
    //Utilities 1
    $baixoparanaiba_customize->add_setting(
        'set_utilities_text_1', array(
            'type' => 'theme_mod',
            'default' => 'Text',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_utilities_text_1', array(
            'label' => __('Events', 'baixoparanaiba'),
            'description' => __('Type your text', 'baixoparanaiba'),
            'section' => 'sec_utilities',
            'type' => 'textarea'
        )
    );    
    $baixoparanaiba_customize->add_setting(
        'set_utilities_link_1', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_utilities_link_1', array(
            'label' => __('Link for Events', 'baixoparanaiba'),
            'description' => __('Type your link', 'baixoparanaiba'),
            'section' => 'sec_utilities',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'baixoparanaiba' ),
            )
        )
    );
    //Utilities 2
    $baixoparanaiba_customize->add_setting(
        'set_utilities_text_2', array(
            'type' => 'theme_mod',
            'default' => 'Text',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_utilities_text_2', array(
            'label' => __('Events', 'baixoparanaiba'),
            'description' => __('Type your text', 'baixoparanaiba'),
            'section' => 'sec_utilities',
            'type' => 'textarea'
        )
    );    
    $baixoparanaiba_customize->add_setting(
        'set_utilities_link_2', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_utilities_link_2', array(
            'label' => __('Link for Events', 'baixoparanaiba'),
            'description' => __('Type your link', 'baixoparanaiba'),
            'section' => 'sec_utilities',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'baixoparanaiba' ),
            )
        )
    );
    //Utilities 3
    $baixoparanaiba_customize->add_setting(
        'set_utilities_text_3', array(
            'type' => 'theme_mod',
            'default' => 'Text',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_utilities_text_3', array(
            'label' => __('Events', 'baixoparanaiba'),
            'description' => __('Type your text', 'baixoparanaiba'),
            'section' => 'sec_utilities',
            'type' => 'textarea'
        )
    );    
    $baixoparanaiba_customize->add_setting(
        'set_utilities_link_3', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_utilities_link_3', array(
            'label' => __('Link for Events', 'baixoparanaiba'),
            'description' => __('Type your link', 'baixoparanaiba'),
            'section' => 'sec_utilities',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'baixoparanaiba' ),
            )
        )
    );
    
    //
    // About
    //
    $baixoparanaiba_customize->add_section(
        'sec_about', array(
            'title' => __('Section: About', 'baixoparanaiba'),
            'description' => __('About Section', 'baixoparanaiba')
        )
    );
    $baixoparanaiba_customize->add_setting(
        'set_about_text', array(
            'type' => 'theme_mod',
            'default' => 'Text',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_about_text', array(
            'label' => __('Text', 'baixoparanaiba'),
            'description' => __('Type your text', 'baixoparanaiba'),
            'section' => 'sec_about',
            'type' => 'textarea'
        )
    ); 
    $baixoparanaiba_customize->add_setting(
        'set_about_link', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_about_link', array(
            'label' => __('Link', 'baixoparanaiba'),
            'description' => __('Type your link', 'baixoparanaiba'),
            'section' => 'sec_about',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'baixoparanaiba' ),
            )
        )
    );
    $baixoparanaiba_customize->add_setting(
        'set_about_img', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $baixoparanaiba_customize->add_control( new WP_Customize_Image_Control( $baixoparanaiba_customize, 'image_control', array(
        'label' => __('Upload Image', 'baixoparanaiba'),        
        'section' => 'sec_about',
        'settings' => 'set_about_img',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Image', 'baixoparanaiba'),
                    'remove' => __('Remove Image', 'baixoparanaiba'),
                    'change' => __('Change Image', 'baixoparanaiba'),
                    )
        ))
    );

    //
    // Comites
    //
    $baixoparanaiba_customize->add_section(
        'sec_comites', array(
            'title' => __('Section: Comitês', 'baixoparanaiba'),
            'description' => __('Comitês Section', 'baixoparanaiba')
        )
    );
    //Comite 1
    $baixoparanaiba_customize->add_setting(
        'set_comites_title_1', array(
            'type' => 'theme_mod',
            'default' => 'Title 1',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_comites_title_1', array(
            'label' => __('Title 1', 'baixoparanaiba'),
            'description' => __('Type your title', 'baixoparanaiba'),
            'section' => 'sec_comites',
            'type' => 'text'
        )
    );
    $baixoparanaiba_customize->add_setting(
        'set_comites_link_1', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_comites_link_1', array(
            'label' => __('Link for Logo 1', 'baixoparanaiba'),
            'description' => __('Type your link', 'baixoparanaiba'),
            'section' => 'sec_comites',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'baixoparanaiba' ),
            )
        )
    );
    $baixoparanaiba_customize->add_setting(
        'set_comites_img_1', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $baixoparanaiba_customize->add_control( new WP_Customize_Image_Control( $baixoparanaiba_customize, 'image_comite_1', array(
        'label' => __('Upload Logo 1', 'baixoparanaiba'),        
        'section' => 'sec_comites',
        'settings' => 'set_comites_img_1',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'baixoparanaiba'),
                    'remove' => __('Remove Logo', 'baixoparanaiba'),
                    'change' => __('Change Logo', 'baixoparanaiba'),
                    )
        ))
    );
    //Comite 2
    $baixoparanaiba_customize->add_setting(
        'set_comites_title_2', array(
            'type' => 'theme_mod',
            'default' => 'Title 2',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_comites_title_2', array(
            'label' => __('Title 2', 'baixoparanaiba'),
            'description' => __('Type your title', 'baixoparanaiba'),
            'section' => 'sec_comites',
            'type' => 'text'
        )
    );
    $baixoparanaiba_customize->add_setting(
        'set_comites_link_2', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_comites_link_2', array(
            'label' => __('Link for Logo 2', 'baixoparanaiba'),
            'description' => __('Type your link', 'baixoparanaiba'),
            'section' => 'sec_comites',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'baixoparanaiba' ),
            )
        )
    );
    $baixoparanaiba_customize->add_setting(
        'set_comites_img_2', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $baixoparanaiba_customize->add_control( new WP_Customize_Image_Control( $baixoparanaiba_customize, 'image_comite_2', array(
        'label' => __('Upload Logo 2', 'baixoparanaiba'),        
        'section' => 'sec_comites',
        'settings' => 'set_comites_img_2',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'baixoparanaiba'),
                    'remove' => __('Remove Logo', 'baixoparanaiba'),
                    'change' => __('Change Logo', 'baixoparanaiba'),
                    )
        ))
    );
    //Comite 3
    $baixoparanaiba_customize->add_setting(
        'set_comites_title_3', array(
            'type' => 'theme_mod',
            'default' => 'Title 3',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_comites_title_3', array(
            'label' => __('Title 3', 'baixoparanaiba'),
            'description' => __('Type your title', 'baixoparanaiba'),
            'section' => 'sec_comites',
            'type' => 'text'
        )
    );
    $baixoparanaiba_customize->add_setting(
        'set_comites_link_3', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_comites_link_3', array(
            'label' => __('Link for Logo 3', 'baixoparanaiba'),
            'description' => __('Type your link', 'baixoparanaiba'),
            'section' => 'sec_comites',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'baixoparanaiba' ),
            )
        )
    );
    $baixoparanaiba_customize->add_setting(
        'set_comites_img_3', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $baixoparanaiba_customize->add_control( new WP_Customize_Image_Control( $baixoparanaiba_customize, 'image_comite_3', array(
        'label' => __('Upload Logo 3', 'baixoparanaiba'),        
        'section' => 'sec_comites',
        'settings' => 'set_comites_img_3',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'baixoparanaiba'),
                    'remove' => __('Remove Logo', 'baixoparanaiba'),
                    'change' => __('Change Logo', 'baixoparanaiba'),
                    )
        ))
    );

    //
    // Partners
    //
    $baixoparanaiba_customize->add_section(
        'sec_partners', array(
            'title' => __('Section: Partners', 'baixoparanaiba'),
            'description' => __('Partners Section', 'baixoparanaiba')
        )
    );

    $baixoparanaiba_customize->add_setting(
        'set_partners_img_1', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $baixoparanaiba_customize->add_control( new WP_Customize_Image_Control( $baixoparanaiba_customize, 'image_partners_1', array(
        'label' => __('Upload Logo 1', 'baixoparanaiba'),        
        'section' => 'sec_partners',
        'settings' => 'set_partners_img_1',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'baixoparanaiba'),
                    'remove' => __('Remove Logo', 'baixoparanaiba'),
                    'change' => __('Change Logo', 'baixoparanaiba'),
                    )
        ))
    );

    $baixoparanaiba_customize->add_setting(
        'set_partners_img_2', array(
            'type' => 'theme_mod',
            'default' => get_theme_file_uri('images/default.jpg'), // Add Default Image URL 
            'sanitize_callback' => 'esc_url_raw'
        )
    );
    
    $baixoparanaiba_customize->add_control( new WP_Customize_Image_Control( $baixoparanaiba_customize, 'image_partners_2', array(
        'label' => __('Upload Logo 2', 'baixoparanaiba'),        
        'section' => 'sec_partners',
        'settings' => 'set_partners_img_2',
        'width' => 280,        
        'button_labels' => array(// All These labels are optional
                    'select' => __('Select Logo', 'baixoparanaiba'),
                    'remove' => __('Remove Logo', 'baixoparanaiba'),
                    'change' => __('Change Logo', 'baixoparanaiba'),
                    )
        ))
    );
    $baixoparanaiba_customize->add_setting(
        'set_partners_link', array(
            'type' => 'theme_mod',
            'default' => 'http://www.url.com',
            'sanitize_callback' => 'wp_filter_nohtml_kses'
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_partners_link', array(
            'label' => __('Link for Page', 'baixoparanaiba'),
            'description' => __('Type your link', 'baixoparanaiba'),
            'section' => 'sec_partners',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'baixoparanaiba' ),
            )
        )
    );

    //
    // News
    //
    $baixoparanaiba_customize->add_section(
        'sec_news', array(
            'title' => __('News Link', 'baixoparanaiba'),
            'description' => __('News Link', 'baixoparanaiba')
        )
    );
    $baixoparanaiba_customize->add_setting(
        'set_news_link', array(
            'type' => 'theme_mod',
            'default' => 'Link',
            'sanitize_callback' => 'wp_kses_post'            
        )
    );
    $baixoparanaiba_customize->add_control(
        'set_news_link', array(
            'label' => __('Link', 'baixoparanaiba'),
            'description' => __('Type your link', 'baixoparanaiba'),
            'section' => 'sec_news',
            'type' => 'text',
            'input_attrs' => array(
                'placeholder' => __( 'http://www.url.com', 'baixoparanaiba' ),
            )
        )
    );
    
}

add_action( 'customize_register', 'baixoparanaiba_customizer' );