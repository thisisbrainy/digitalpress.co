$(function() {

	var url = location.href;

	// fix
	if(url === 'https://digitalpress.co/signup/' || url === 'https://digitalpress.co/wp-signup.php') {

		$('.header-menu li.menu-item-29').removeClass('current_page_parent');
	}
	
});