<?php
register_nav_menus(
    array('primary-menu'=>'Header Menu')
);

register_sidebar(
    array(
        'name'=>'Sidebar location',
        'id'=>'sidebar',
        'before_widget'=>'<aside id="%1$s" class="widget %2$s">',
        'after_widget'=>'</aside>',
        'before_title'=>'<h3 class="widget-title">',
        'after_title'=>'</h3>'
    )
    );
    register_sidebar(
        array(
            'name'=>'Footer Widget 1',
            'id'=>'Footerwidget1',
            'before_widget'=>'<aside id="%1$s" class="widget %2$s">',
            'after_widget'=>'</aside>',
            'before_title'=>'<h3 class="widget-title">',
            'after_title'=>'</h3>'
        )
        );
        register_sidebar(
            array(
                'name'=>' Footer Widget 2',
                'id'=>'Footerwidget2',
                'before_widget'=>'<aside id="%1$s" class="widget %2$s">',
                'after_widget'=>'</aside>',
                'before_title'=>'<h3 class="widget-title">',
                'after_title'=>'</h3>'
            )
            );

            function nexmag_customize_register( $wp_customize ) {

                $wp_customize->add_panel('demo_panel_id',array(
                        'title'=>'Demo panel title'
                 ));
                    
                    
                $wp_customize->add_section('demo_section_id',array(
                        'title'=>'Site Logo'
                ));
                    
                    
                $wp_customize->add_setting('demo_setting_id',array(
                        'default'=>'',
                ));
                
                $wp_customize->add_control('demo_control_id',array(
                        'type'=>'text',
                        'section'=>'demo_section_id',
                        'settings'=>'demo_setting_id',
                ));
                
                }
                   
                add_action( 'customize_register', 'nexmag_customize_register' );
?>