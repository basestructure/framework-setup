<?php

// WIDGET - AREA-HEADER -----

genesis_register_sidebar( array(
	'id' 			=> 'area-header',
	'name' 			=> __( 'Area Header', 'genesis' ),
	'description' 	=> __( 'Widget area designated to the header area', 'setupbasic' ),
) );

// WIDGET - AREA-HEADER ----- ALL PAGES

add_action( 'genesis_before_header', 'setupbasic_areaheader' );
function setupbasic_areaheader() {
		genesis_widget_area( 'area-header', array(
			'before' => '<div class="area-header"><div class="wrap">',
			'after'  => '</div></div>',
		) );
}

// WIDGET - AREA-HEADER ----- ONLY FRONTPAGE

add_action( 'genesis_before_header', 'setupbasic_areaheader' );
function setupbasic_areaheader() {

	if ( is_front_page() ) {
		genesis_widget_area( 'area-header', array(
			'before' => '<div class="area-header"><div class="wrap">',
			'after'  => '</div></div>',
		) );
	}

}