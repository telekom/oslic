/**
 * "Yet Another Multicolumn Layout" - (X)HTML/CSS Framework
 *
 * (en) Workaround for IE8 und Webkit browsers to fix focus problems when using skiplinks
 * (de) Workaround für IE8 und Webkit browser, um den Focus zu korrigieren, bei Verwendung von Skiplinks
 *
 * @note			inspired by Paul Ratcliffe's article 
 *					http://www.communis.co.uk/blog/2009-06-02-skip-links-chrome-safari-and-added-wai-aria
 *                  Many thanks to Mathias Schäfer (http://molily.de/) for his code improvements
 *
 * @copyright       Copyright 2005-2010, Dirk Jesse
 * @license         CC-A 2.0 (http://creativecommons.org/licenses/by/2.0/),
 *                  YAML-C (http://www.yaml.de/en/license/license-conditions.html)
 * @link            http://www.yaml.de
 * @package         yaml
 * @version         3.3
 * @revision        $Revision: 466 $
 * @lastmodified    $Date: 2010-09-14 21:19:30 +0200 (Di, 14 Sep 2010) $
 */
 
(function () {
	var YAML_focusFix = { 
		skipClass : 'skip',
		
		init : function () {
			var userAgent = navigator.userAgent.toLowerCase();
			var	is_webkit = userAgent.indexOf('webkit') > -1;
			var	is_ie = userAgent.indexOf('msie') > -1;
			
			if (is_webkit || is_ie) {
				var body = document.body,
					handler = YAML_focusFix.click;
				if (body.addEventListener) {
					body.addEventListener('click', handler, false);
				} else if (body.attachEvent) {
					body.attachEvent('onclick', handler);
				}
			}
		},
		
		click : function (e) {
			e = e || window.event;
			var target = e.target || e.srcElement;
			if (target.className.indexOf(YAML_focusFix.skipClass) > -1) {
				YAML_focusFix.focus(target);
			}
		},
		
		focus : function (link) {
			var href = link.href,
				id = href.substr(href.indexOf('#') + 1),
				target = document.getElementById(id);
			if (target) {
				target.setAttribute("tabindex", "-1");
				target.focus();
			}
		}
	};
	YAML_focusFix.init();
})();