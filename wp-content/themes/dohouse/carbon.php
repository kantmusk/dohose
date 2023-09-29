<?php 
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options' ) )
        ->add_fields( array(
            Field::make( 'text', 'tel', 'Телефон' ),
            Field::make( 'text', 'email', 'Электронная почта' ),
            Field::make( 'text', 'address', 'Адрес' ),
            Field::make( 'textarea', 'copyright', 'Copyright' ),
            Field::make( 'textarea', 'social', 'Социальные сети' )

        ) );

        Container::make('post_meta', 'Втростепенные фото')
        ->show_on_post_type('project')
        ->add_fields( array(
			Field::make( 'complex', 'slider', 'Фотографии' )
			->add_fields( array(
				Field::make( 'image', 'slider_photo', 'Фото' )
				 ->set_value_type( 'url' ),
				
			)),
			
		));
        

	    Container::make('post_meta', 'Дополнительные поля')
	    ->show_on_post_type('project')
	    ->add_tab( __( 'Шапка' ), array(
	       	Field::make( 'checkbox', 'crb_show_content', 'Вывод на главную страницу' )
    		->set_option_value( 'no' )
	        
	    ) );	                                                                                                                                                                                                
   
}



?>