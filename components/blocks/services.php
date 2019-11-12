<?php 

if ( function_exists( 'lazyblocks' ) ) :

    lazyblocks()->add_block( array(
        'id' => 38,
        'title' => 'Služby a výhody',
        'icon' => 'dashicons dashicons-welcome-widgets-menus',
        'keywords' => array(
            0 => 'text',
            1 => ' ikona',
        ),
        'slug' => 'lazyblock/sluzby',
        'description' => '',
        'category' => 'common',
        'category_label' => 'common',
        'supports' => array(
            'customClassName' => true,
            'anchor' => false,
            'align' => array(
                0 => 'wide',
                1 => 'full',
            ),
            'html' => false,
            'multiple' => true,
            'inserter' => true,
        ),
        'ghostkit' => array(
            'supports' => array(
                'spacings' => false,
                'display' => false,
                'scrollReveal' => false,
            ),
        ),
        'controls' => array(
            'control_030a1b4261' => array(
                'label' => '',
                'name' => 'sluzby_a_vyhody',
                'type' => 'repeater',
                'child_of' => '',
                'default' => '',
                'characters_limit' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'true',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
                'rows_min' => '1',
                'rows_max' => '6',
                'rows_label' => 'Výhoda {{#}}',
                'rows_add_button_label' => '+ Přidat',
                'rows_collapsible' => 'true',
                'rows_collapsed' => 'true',
            ),
            'control_64cba549f9' => array(
                'label' => 'Ikona',
                'name' => 'ikona',
                'type' => 'select',
                'child_of' => 'control_030a1b4261',
                'default' => '',
                'characters_limit' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                    array(
                        'label' => 'Postel',
                        'value' => 'bed',
                    ),
                    array(
                        'label' => 'Káva',
                        'value' => 'coffee',
                    ),
                    array(
                        'label' => 'Mapa',
                        'value' => 'map',
                    ),
                    array(
                        'label' => 'Parkování',
                        'value' => 'parking',
                    ),
                    array(
                        'label' => 'Wifi',
                        'value' => 'wifi',
                    ),
                    array(
                        'label' => 'Sprcha',
                        'value' => 'shower',
                    ),
                    array(
                        'label' => 'Restaurace',
                        'value' => 'restaurant',
                    ),
                    array(
                        'label' => 'Společenská místnost',
                        'value' => 'game',
                    ),
                    array(
                        'label' => 'Lyžování',
                        'value' => 'ski',
                    ),
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'false',
                'rows_min' => '',
                'rows_max' => '',
                'rows_label' => '',
                'rows_add_button_label' => '',
                'rows_collapsible' => 'true',
                'rows_collapsed' => 'true',
            ),
            'control_cdeb0441aa' => array(
                'label' => 'Text',
                'name' => 'text',
                'type' => 'rich_text',
                'child_of' => 'control_030a1b4261',
                'default' => '',
                'characters_limit' => '',
                'placeholder' => '',
                'help' => '',
                'placement' => 'content',
                'hide_if_not_selected' => 'false',
                'save_in_meta' => 'false',
                'save_in_meta_name' => '',
                'required' => 'false',
                'choices' => array(
                ),
                'checked' => 'false',
                'allow_null' => 'false',
                'multiple' => 'false',
                'allowed_mime_types' => array(
                ),
                'alpha' => 'false',
                'min' => '',
                'max' => '',
                'step' => '',
                'date_time_picker' => 'date_time',
                'multiline' => 'true',
                'rows_min' => '',
                'rows_max' => '',
                'rows_label' => '',
                'rows_add_button_label' => '',
                'rows_collapsible' => 'true',
                'rows_collapsed' => 'true',
            ),
        ),
        'code' => array(
            'editor_html' => '<div class="featured">
            <div class="columns">
                {{#each sluzby_a_vyhody }}
                <div class="column col-4 col-sm-12 col-md-6">
                    <div class="featured-item">
                        <div class="featured-item__thumbnail">
                             <img src="{{stylesheet_dir}}/assets/images/{{ikona}}-icon.png">
                        </div>
                        <div class="featured-item__text">
                             {{{text}}}
                        </div>
                    </div>
                </div>
                {{/each}}
            </div>
    </div>',
            'editor_callback' => '',
            'editor_css' => '',
            'frontend_html' => '<div class="featured">
        <div class="container grid-xl">
            <div class="columns">
                {{#each sluzby_a_vyhody }}
                <div class="column col-4 col-sm-12 col-md-6">
                    <div class="featured-item">
                        <div class="featured-item__thumbnail">
                             <img src="{{stylesheet_dir}}/assets/images/{{ikona}}-icon.png" class="img-responsive">
                        </div>
                        <div class="featured-item__text">
                             {{{text}}}
                        </div>
                    </div>
                </div>
                {{/each}}
            </div>
        </div>
    </div>',
            'frontend_callback' => '',
            'frontend_css' => '',
            'show_preview' => 'always',
            'single_output' => false,
            'use_php' => false,
        ),
        'condition' => array(
        ),
    ) );
    
endif;