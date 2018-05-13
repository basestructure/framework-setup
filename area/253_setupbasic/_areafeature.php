<?php

// WIDGET - AREA-FEATURE -----

genesis_register_sidebar( array(
	'id' 			=> 'area-feature',
	'name' 			=> __( 'Area Feature', 'genesis' ),
	'description' 	=> __( 'Widget area designated to the feature area', 'setupbasic' ),
) );

// WIDGET - AREA-FEATURE ----- ALL PAGES

add_action( 'genesis_before_footer', 'setupbasic_areafeature' );
function setupbasic_areafeature() {
		genesis_widget_area( 'area-feature', array(
			'before' => '<div class="area-feature"><div class="wrap">',
			'after'  => '</div></div>',
		) );
}

// WIDGET - AREA-FEATURE ----- ONLY FRONTPAGE

add_action( 'genesis_before_footer', 'setupbasic_areafeature' );
function setupbasic_areafeature() {

	if ( is_front_page() ) {
		genesis_widget_area( 'area-feature', array(
			'before' => '<div class="area-feature"><div class="wrap">',
			'after'  => '</div></div>',
		) );
	}

}