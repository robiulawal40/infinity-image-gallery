(function($){
$("#infinity-gallery").nanogallery2({
	itemsBaseURL: "http://localhost:3000/",
	thumbnailHeight:  200,
	thumbnailWidth:   300,
	thumbnailBorderVertical: 0,
	thumbnailBorderHorizontal: 0,
	galleryDisplayMode: "moreButton",
	thumbnailHoverEffect2: "imageScale150|toolsSlideDown|labelAppear75",
	colorScheme: {
			"thumbnail": {
			"background": "rgba(217,217,217,1)"
			}
		},
	"thumbnailDisplayTransitionDuration": 10,
	"thumbnailGutterWidth": 10,
	"thumbnailGutterHeight":10,
});
})(jQuery)