;(function($, undefined) {
	
	/***/
	var objs = {
		'.block-2' : 'fadeInUp d1',
		'.widget-8' : 'fadeIn s.5 d2',
		'.blocklist-12 .item' : 'fadeIn s.5 d2',
		'.blocklist-90 .header' : 'fadeInUp d1',
		'.blocklist-90 .item' : 'fadeInDown',
		'.widget-48' : 'fadeInLeft',
		'.widget-49 p' : 'fadeInLeft',
		'.gallery-91 .gallery-header' : 'fadeInUp d1',
		'.gallery-91 .gallery-body' : 'fadeIn s.5 d2',
		'.widget-68' : 'fadeInUp d1',
		'.block-30' : 'fadeInUp d1'
	};
	/***/
	
	
	$(function() {
		for (var i in objs) {
			$(i).attr('data-s3-animator', objs[i]);
		}
	})
	var url = '/g/s3/misc/animator/1.0.0/css/s3.animator.scss.css';
	$.get(url, function(){
                    $('<link>', {rel:'stylesheet', type:'text/css', 'href':url}).appendTo('head');
                    if (!window.s3Animator) {
					$.getScript('/g/s3/misc/animator/1.1.0/js/s3.animator.js').done(function() {
						window.s3Animator.once = true;
					});
	}
    });
})(jQuery)