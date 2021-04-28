/**
 * Theme javascript functions file.
 *
 */

import 'jquery/dist/jquery.min';
import 'bootstrap/dist/js/bootstrap.bundle.min';
import lozad from 'lozad/dist/lozad.min.js';
import AOS from 'aos/dist/aos';
import 'jquery-countdown/dist/jquery.countdown.min';
import 'magnific-popup/dist/jquery.magnific-popup.min.js';
import 'flickity/dist/flickity.pkgd.min.js';
import 'jquery-countto/jquery.countTo.js';
import 'masonry-layout/dist/masonry.pkgd.min.js';


(function ($) {
	"use strict";

	// Nav
	function navigation() {
		// Add current class to active menu's item
		var links = $(".navbar a, .nav a");
		$.each(links, function (key, va) {
			if (va.href === document.URL) {
				$(this)
					.addClass("active")
					.parents("li")
					.addClass("active");
			}
		});
	}

	// Initialize lozad library
	lozad('.lozad', {
		load: function (el) {
			el.src = el.dataset.src;

		},
	}).observe()

	// Popup 
	function popupGallery() {
		$(".popup-gallery").magnificPopup({
			delegate: "img",
			type: "image",
			mainClass: "mfp-with-zoom mfp-img-mobile",
			fixedContentPos: false,
			gallery: {
				enabled: true,
			},
			zoom: {
				enabled: true,
				duration: 300, // don't foget to change the duration also in CSS
			},
			callbacks: {
				elementParse: function (qw) {
					qw.src = qw.el.attr("src");
				},
			},
		});

		// For video popup (PLAY VIDEO TRIGGER)
		$(".iframe-trigger, #iframe-trigger").magnificPopup({
			disableOn: 700,
			type: "iframe",
			mainClass: "mfp-fade",
			removalDelay: 160,
			preloader: false,
			fixedContentPos: false,
		});
	}

	/* Document Ready */
	$(document).ready(function () {

		// Navigation
		navigation();

		// CSS animations

		AOS.init({
			offset: 200,
			duration: 1500,
			once: true,
		});

		// countTo
		if ($(".timer").length) {
			$(".timer").countTo();
		}

		// countdown
		$("#getting-started").countdown("2022/01/01", function (event) {
			var $this = $(this);
			$this.html(
				event.strftime(
					'<span class="countdown_value"> %m <span class="countdown_lable"> Months  </span></span> <span class="countdown_value"> %d <span class="countdown_lable"> Days </span> </span> <span class="countdown_value"> %H <span class="countdown_lable"> Hours </span></span> <span class="countdown_value"> %M <span class="countdown_lable"> Minutes </span></span> <span class="countdown_value"> %S <span class="countdown_lable"> Seconds </span></span>'
				)
			);
		});

		// Popup
		popupGallery();
	});

})(jQuery);

