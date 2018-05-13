<?php

// WIDGET - AREA-FOOTER -----

genesis_register_sidebar( array(
	'id' 			=> 'area-footer',
	'name' 			=> __( 'Area Footer', 'genesis' ),
	'description' 	=> __( 'Widget area designated to the footer area', 'setupbasic' ),
) );

// WIDGET - AREA-FOOTER ----- ALL PAGES

add_action( 'genesis_before_footer', 'setupbasic_areafooter' );
function setupbasic_areafooter() {
		genesis_widget_area( 'area-footer', array(
			'before' => '<div class="area-footer"><div class="wrap">',
			'after'  => '</div></div>',
		) );
}

// WIDGET - AREA-FOOTER ----- ONLY FRONTPAGE

add_action( 'genesis_before_footer', 'setupbasic_areafooter' );
function setupbasic_areafooter() {

	if ( is_front_page() ) {
		genesis_widget_area( 'area-footer', array(
			'before' => '<div class="area-footer"><div class="wrap">',
			'after'  => '</div></div>',
		) );
	}

}