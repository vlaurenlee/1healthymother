$(function() {

	//span transform so we can use symbolsets with the jetpacks social plugin
	$('div.sd-content').find('.share-facebook').find('span').replaceWith('<i class="ss-icon">facebook</i>');
	$('div.sd-content').find('.share-twitter').find('span').replaceWith('<i class="ss-icon">twitter</i>');
	$('div.sd-content').find('.share-pinterest').find('span').replaceWith('<i class="ss-icon">pinterest</i>');
	$('div.sd-content').find('.share-email').find('span').replaceWith('<i class="ss-icon">mail</i>');

 	//for responsive navigation menu, handle clicks to "MENU" 
    var pull        = $('a#pull');  
        menu        = $('ul.nav-menu');  
        menuHeight  = menu.height();  
  
    $(pull).on('click', function(e) {  
        e.preventDefault();  
        $('div.nav-wrap').slideToggle();
    });  


});