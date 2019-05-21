$(document).ready(function() {
	var hidder = $("#hidder");
	var admin = $("#nav-admin-buttons");
	hidder.click(function() {
		if (!admin.is(":hidden")) {
			Cookies.set('nav-display', 'off', { expires: 365 });
			admin.slideUp("slow");
		} else {
			admin.slideDown("slow");
			Cookies.set('nav-display', 'on', { expires: 365 });
		}
		hidder.toggleClass("fa-angle-double-up fa-angle-double-down");
	});
	if (Cookies.get('nav-display') == 'on')
		hidder.click();
});