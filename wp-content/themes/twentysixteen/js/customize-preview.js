/**
 * Live-update changed settings in real time in the Customizer preview.
 */

( function( $ ) {
	var style = $( '#twentysixteen-color-scheme-scss' ),
		api = wp.customize;

	if ( ! style.length ) {
		style = $( 'head' ).append( '<style type="text/scss" id="twentysixteen-color-scheme-scss" />' )
		                    .find( '#twentysixteen-color-scheme-scss' );
	}

	// Site title.
	api( 'blogname', function( value ) {
		value.bind( function( to ) {
			$( '.site-title a' ).text( to );
		} );
	} );

	// Site tagline.
	api( 'blogdescription', function( value ) {
		value.bind( function( to ) {
			$( '.site-description' ).text( to );
		} );
	} );

	// Add custom-background-image body class when background image is added.
	api( 'background_image', function( value ) {
		value.bind( function( to ) {
			$( 'body' ).toggleClass( 'custom-background-image', '' !== to );
		} );
	} );

	// Color Scheme CSS.
	api.bind( 'preview-ready', function() {
		api.preview.bind( 'update-color-scheme-scss', function( css ) {
			style.html( css );
		} );
	} );
} )( jQuery );
