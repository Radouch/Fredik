/* Fredik | javascript file */

$( function () {

	/*
	 * Site navigation
	 * adds proper Bootstrap CSS class to links added via mw.util.addPortletLink()
	 */
	function fredikNavigation() {
		$( '#p-personal li a:not(.dropdown-item), aside li a:not(.dropdown-item)' )
			.addClass( 'dropdown-item' );
		$( '#mw-navigation li a:not(.nav-link)' )
			.addClass( 'nav-link' );
	}

	/*
	 * Hide aside menu with no dropdown items
	 */
	function hideAsideDropdown() {
		$( 'aside .dropdown' ).has( 'div:empty' ).hide();
	}

	/*
	 * Remove echo notifications popup on smaller screens
	 */
	function fredikRemoveEchoPopup() {
		if ( $( window ).width() <= 650 ) {
			$( 'a.mw-echo-notifications-badge' ).off( 'click' );
		}
	}

	/*
	 * Hamburger menu
	 * opens navigation sidebar and login/user menu
	 */
	function fredikTogglehamb() {
		$( '#mw-navigation nav' ).toggle( 'fast' );
	}

	/*
	 * Start functions from the wrapper
	 */

	// immediately
	fredikNavigation();
	fredikRemoveEchoPopup();
	hideAsideDropdown();
	$( '.mw-hamb' ).on( 'click', fredikTogglehamb );

	// repeat every 1 s for 10 s after DOM content loaded
	window.fredikVarI = 0;
	window.fredikTimer = window.setInterval( function () {
		fredikNavigation();
		fredikRemoveEchoPopup();
		window.fredikVarI++;
		if ( window.fredikVarI === 10 ) {
			window.clearInterval( window.fredikTimer );
		}
	}, 1000 );

} );
