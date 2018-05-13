<?php

// WIDGET - FOOTER-MENU -----

genesis_register_sidebar( array(
	'id' 			=> 'footer-menu',
	'name' 			=> __( 'Footer Menu', 'genesis' ),
	'description' 	=> __( 'Place your footer menu(s) or short entries', 'setupbasic' ),
) );

// WIDGET - FOOTER-MENU ----- ALL PAGES

add_action( 'genesis_before_footer', 'setupbasic_footermenu' );
function setupbasic_footermenu() {
	genesis_widget_area( 'footer-menu', array(
		'before' => '<div class="footer-menu"><div class="wrap">',
		'after'  => '</div></div>',
    ) );
}

// WIDGET - FOOTER-MENU ----- ONLY FRONTPAGE

add_action( 'genesis_before_footer', 'setupbasic_footermenu' );
function setupbasic_footermenu() {

	if ( is_front_page() ) {
		genesis_widget_area( 'footer-menu', array(
			'before' => '<div class="footer-menu"><div class="wrap">',
			'after'  => '</div></div>',
	    ) );
	}

}