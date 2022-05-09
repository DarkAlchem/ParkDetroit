(function ($, root, undefined) {

	$(function () {

		'use strict';

		$(document).ready(function () {
			FAQbuttons();
			adjustSideMenu();
		});

		$(window).scroll(function () {
			adjustSideMenu();
		});

		$(window).resize(function () {
			adjustSideMenu();
		});

		function adjustSideMenu() {
			let changeNavi = $("#FAQHolder").offset().top - 30;

			$("#FAQMenu").removeClass('_extend');
			$("#FAQMenu").removeClass('_extend2');
			if ($(window).scrollTop() >= changeNavi && $(window).innerWidth() > 768) {
				if ($(window).innerWidth() < 1200) {
					if (!$("#FAQMenu").hasClass('_extend')) $("#FAQMenu").addClass('_extend');	
				} else {
					if (!$("#FAQMenu").hasClass('_extend2')) $("#FAQMenu").addClass('_extend2');		
				}
			}
			console.log(changeNavi, $(window).scrollTop(), $(window).innerWidth() < 768)
		}

		function FAQbuttons() {
			$("a[href='#generalloverview']").click(function () {
				event.preventDefault();
				$('#generaloverview').ScrollTo({
					duration: 1000
				});
			});
			$("a[href='#usingtheapp']").click(function () {
				$('#usingtheapp').ScrollTo({
					duration: 1000
				});
			});
			$("a[href='#rates']").click(function () {
				$('#rates').ScrollTo({
					duration: 1000
				});
			});
			$("a[href='#accounts']").click(function () {
				$('#accounts').ScrollTo({
					duration: 1000
				});
			});
			$("a[href='#troubleshooting']").click(function () {
				$('#troubleshooting').ScrollTo({
					duration: 1000
				});
			});
			$("a[href='#cellphoneusers']").click(function () {
				$('#cellphoneusers').ScrollTo({
					duration: 1000
				});
			});
			$("a[href='#support']").click(function () {
				$('#support').ScrollTo({
					duration: 1000
				});
			});
			$("a[href='#top']").click(function () {
				$('#top').ScrollTo({
					duration: 1000
				});
			});
		};

	});

})(jQuery, this);