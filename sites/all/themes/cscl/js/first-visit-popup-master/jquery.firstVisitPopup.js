/*
 * First Visit Popup jQuery Plugin version 1.2
 * Chris Cook - chris@chris-cook.co.uk
 */

(function (jQuery) {

	'use strict';

	jQuery.fn.firstVisitPopup = function (settings) {

		var jQuerybody = jQuery('body');
		var jQuerydialog = jQuery(this);
		var jQueryblackout;
		var setCookie = function (name, value) {
			var date = new Date(),
				expires = 'expires=';
			date.setTime(date.getTime() + 31536000000);
			expires += date.toGMTString();
			document.cookie = name + '=' + value + '; ' + expires + '; path=/';
		}
		var getCookie = function (name) {
			var allCookies = document.cookie.split(';'),
				cookieCounter = 0,
				currentCookie = '';
			for (cookieCounter = 0; cookieCounter < allCookies.length; cookieCounter++) {
				currentCookie = allCookies[cookieCounter];
				while (currentCookie.charAt(0) === ' ') {
					currentCookie = currentCookie.substring(1, currentCookie.length);
				}
				if (currentCookie.indexOf(name + '=') === 0) {
					return currentCookie.substring(name.length + 1, currentCookie.length);
				}
			}
			return false;
		}
		var showMessage = function () {
			jQueryblackout.show();
			jQuerydialog.show();
		}
		var hideMessage = function () {
			jQueryblackout.hide();
			jQuerydialog.hide();
			setCookie('fvpp' + settings.cookieName, 'true');
		}

		jQuerybody.append('<div id="fvpp-blackout"></div>');
		jQuerydialog.append('<a id="fvpp-close">&#10006;</a>');
		jQueryblackout = jQuery('#fvpp-blackout');

		if (!getCookie('fvpp' + settings.cookieName)) {
			showMessage();
		}

		jQuery(settings.showAgainSelector).bind('click', showMessage);
		jQuerybody.bind('click', '#fvpp-blackout, #fvpp-close', hideMessage);

	};

})(jQuery);
