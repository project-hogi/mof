"use strict";

(function($) {

	$(document).on("appinitOnce", function() {
	});

	$(document).on("appinit", function() {
		$('.main-menu').each(function(){
			var $mainMenu = $(this);
			var $menuList = $('.menu-list', $mainMenu);
			var $menuDepth1Li = $('>li', $menuList);
			var $menuDepth1Li = $('>li', $menuList);
			$menuDepth1Li.has('.depth2').addClass('haschildren');
		});

		$('.search').each(function(){
			var $search = $(this);
			var $searchBtn = $('.btn-search', $search);

			$searchBtn.on('click', function(e){
				e.preventDefault();
				if($search.hasClass('active')){
					$search.removeClass('active');
				}else{
					$search.addClass('active');
				}
			});
		});
		var $btnSitemap = $('.btn-sitemap');
		$('#sitemap-tree').each(function(){
			var $sitemapTree = $(this);
			$btnSitemap.on('click', function(){
				$sitemapTree.addClass('on');
			});
			var $btnSitemapClose = $('.btn-sitemap-close', $sitemapTree);
			$btnSitemapClose.on('click', function(e){
				e.preventDefault();
				$sitemapTree.removeClass('on active');
			});
		});

		$('.rolling-banner-1').each(function() {
			var $visual = $(this);
			var $visualContent = $('>ul', $visual);
			var options = {
				slides : '>li',
				timeout : 2400,
				fx : 'fade',
				log : false,
				pauseOnHover : true,
				pagerActiveClass : 'on'
			};
			var $prev = $('.prev').each(function() {
				options.prev = this;
			});
			var $next = $('.next').each(function() {
				options.next = this;

				setTimeout(function() {
					$next.click();
				}, 1200);
			});
			var $pager = $('.pagination', $visual).each(function() {
				options.pager = this;
				options.pagerTemplate = '';
				options.pagerEvent = 'mouseover';
			});

			$visualContent.cycle(options);

			$(document).one('pjax:beforeReplace', function() {
				$visualContent.cycle('destroy');
			});
		});

		$('.rolling-banner-2').each(function() {
			var $visual = $(this);
			var $visualContent = $('>ul', $visual);
			var options = {
				slides : '>li',
				timeout : 2400,
				fx : 'fade',
				log : false,
				pauseOnHover : true,
				pagerActiveClass : 'on'
			};
			var $prev = $('.prev').each(function() {
				options.prev = this;
			});
			var $next = $('.next').each(function() {
				options.next = this;

				setTimeout(function() {
					$next.click();
				}, 1200);
			});
			var $pager = $('.pagination', $visual).each(function() {
				options.pager = this;
				options.pagerTemplate = '';
				options.pagerEvent = 'mouseover';
			});

			$visualContent.cycle(options);

			$(document).one('pjax:beforeReplace', function() {
				$visualContent.cycle('destroy');
			});
		});

		$('.rolling-banner-3').each(function() {
			var $visual = $(this);
			var $visualContent = $('>ul', $visual);
			var options = {
				slides : '>li',
				timeout : 2400,
				fx : 'fade',
				log : false,
				pauseOnHover : true,
				pagerActiveClass : 'on'
			};
			var $prev = $('.prev').each(function() {
				options.prev = this;
			});
			var $next = $('.next').each(function() {
				options.next = this;

				setTimeout(function() {
					$next.click();
				}, 1200);
			});
			var $pager = $('.pagination', $visual).each(function() {
				options.pager = this;
				options.pagerTemplate = '';
				options.pagerEvent = 'mouseover';
			});

			$visualContent.cycle(options);

			$(document).one('pjax:beforeReplace', function() {
				$visualContent.cycle('destroy');
			});
		});

		$('.rolling-banner-4').each(function() {
			var $visual = $(this);
			var $visualContent = $('>ul', $visual);
			var options = {
				slides : '>li',
				timeout : 2400,
				fx : 'fade',
				log : false,
				pauseOnHover : true,
				pagerActiveClass : 'on'
			};
			var $prev = $('.prev').each(function() {
				options.prev = this;
			});
			var $next = $('.next').each(function() {
				options.next = this;

				setTimeout(function() {
					$next.click();
				}, 1200);
			});
			var $pager = $('.pagination', $visual).each(function() {
				options.pager = this;
				options.pagerTemplate = '';
				options.pagerEvent = 'mouseover';
			});

			$visualContent.cycle(options);

			$(document).one('pjax:beforeReplace', function() {
				$visualContent.cycle('destroy');
			});
		});


	});

})(jQuery);
