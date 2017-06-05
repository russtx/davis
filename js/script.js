
(function ($, root, undefined) {

	$(function () {
		'use strict';
		// DOM ready, take it away

//next
$('#fullpage').fullpage({
        scrollBar: true,
        afterRender: function(){
              new WOW().init();
        }
    });


//end here
	});

})(jQuery, this);
