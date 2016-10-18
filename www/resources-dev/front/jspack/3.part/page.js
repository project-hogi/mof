"use strict";

(function($) {

	$(document).on("appinitOnce", function() {
	});

	$(document).on("appinit", function() {
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
	});

})(jQuery);