$('.butt').on('click', function(event) {
       		event.preventDefault();
       		/* Act on the event */
       		$('.sviaz').toggleClass('sviaz_active');

	});

$('#video').on('click', function(event) {
       		event.preventDefault();
       		/* Act on the event */
       		$('.playvideo').toggleClass('video_active');
			$('.black').toggleClass('video_active')
	});