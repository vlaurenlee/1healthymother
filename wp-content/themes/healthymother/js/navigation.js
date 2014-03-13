/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */
( function() {
	var container, button, menu;

	container = document.getElementById( 'site-navigation' );
	if ( ! container )
		return;

	button = container.getElementsByTagName( 'h1' )[0];
	if ( 'undefined' === typeof button )
		return;

	menu = container.getElementsByTagName( 'ul' )[0];

	// Hide menu toggle button if menu is empty and return early.
	if ( 'undefined' === typeof menu ) {
		button.style.display = 'none';
		return;
	}

	if ( -1 === menu.className.indexOf( 'nav-menu' ) )
		menu.className += ' nav-menu';

	button.onclick = function() {
		if ( -1 !== container.className.indexOf( 'toggled' ) )
			container.className = container.className.replace( ' toggled', '' );
		else
			container.className += ' toggled';
	};

	//make the jetpacks social plugin look appropriate
	$('div.sd-content').find('.share-facebook').find('span').replaceWith('<i class="ss-icon">facebook</i>');
	$('div.sd-content').find('.share-twitter').find('span').replaceWith('<i class="ss-icon">twitter</i>');
	$('div.sd-content').find('.share-pinterest').find('span').replaceWith('<i class="ss-icon">pinterest</i>');
	$('div.sd-content').find('.share-email').find('span').replaceWith('<i class="ss-icon">mail</i>');

} )();
