<?php

// WIDGET - AREA-SIDE -----

genesis_register_sidebar( array(
	'id' 			=> 'area-side',
	'name' 			=> __( 'Area Side', 'genesis' ),
	'description' 	=> __( 'Widget area designated to the side area', 'setupbasic' ),
) );

// WIDGET - AREA-SIDE ----- ALL PAGES

add_action( 'genesis_before_footer', 'setupbasic_areaside' );
function setupbasic_areaside() {
		genesis_widget_area( 'area-side', array(
			'before' => '<div class="area-side"><div class="wrap">',
			'after'  => '</div></div>',
		) );
}

// WIDGET - AREA-SIDE ----- ONLY FRONTPAGE

add_action( 'genesis_before_footer', 'setupbasic_areaside' );
function setupbasic_areaside() {

	if ( is_front_page() ) {
		genesis_widget_area( 'area-side', array(
			'before' => '<div class="area-side"><div class="wrap">',
			'after'  => '</div></div>',
		) );
	}

}