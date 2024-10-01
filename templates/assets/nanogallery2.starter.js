(function($){

	function wpignew_get_value(option_key , defaultValue=false){
		if( "object" === typeof WPIGNEW && WPIGNEW.hasOwnProperty('options') && WPIGNEW.options.hasOwnProperty(option_key) ){
			return WPIGNEW.options[option_key];
		}
		return defaultValue;
	}
	$(".wppg-grid-sizer, .wppg-gutter-sizer").css("display", "none");
	$(".wppg-grid-wrapper").css("padding", wpignew_get_value("gutter_size")??10);

$("#infinity-gallery.style-3").nanogallery2({
	itemsBaseURL: "",
	thumbnailHeight:200,
	thumbnailWidth:300,
	thumbnailBorderVertical: 0,
	thumbnailBorderHorizontal: 0,
	galleryDisplayMode: "pagination", //fullContent, moreButton, pagination, rows
	galleryPaginationTopButtons:false,
	galleryPaginationMode:"numbers",
	galleryMaxRows: wpignew_get_value("no_of_row_to_display")?? 10,
	// thumbnailAlignment: 'fillWidth',
	// gallerySwipe:false,
	// galleryTheme: {
	// 	navigationBar :         { background: 'none', borderTop: '2px solid #444', borderBottom: '', borderRight: '', borderLeft: '' },
	// 	navigationBreadcrumb :  { background: '#111', color: '#fff', colorHover: '#ccc', borderRadius: '4px' },
	// 	navigationFilter :      { color: '#ddd', background: '#111', colorSelected: '#fff', backgroundSelected: '#111', borderRadius: '4px' },
	// 	navigationPagination :  { background: '#111', color: '#fff', colorHover: '#ccc', borderRadius: '4px' },
	// 	thumbnail :             { background: '#444', backgroundImage: 'linear-gradient(315deg, #111 0%, #445 90%)', borderColor: '#000', borderRadius: '0px', labelOpacity : 1, labelBackground: 'rgba(34, 34, 34, 0)', titleColor: '#fff', titleBgColor: 'transparent', titleShadow: '', descriptionColor: '#ccc', descriptionBgColor: 'transparent', descriptionShadow: '', stackBackground: '#aaa' },
	// 	thumbnailIcon :         { padding: '5px', color: '#fff', shadow:'' },
	// 	pagination :            { background: '#181818', backgroundSelected: '#666', color: '#fff', borderRadius: '2px', shapeBorder: '3px solid #666', shapeColor: '#444', shapeSelectedColor: '#aaa'}
	// },
	thumbnailHoverEffect2: "imageScale150|toolsSlideDown|labelAppear75",
	colorScheme: {
			"thumbnail": {
			"background":  wpignew_get_value("background_color")??"transparent",
			}
		},
	"thumbnailDisplayTransitionDuration": 10,
	"thumbnailGutterWidth": wpignew_get_value("gutter_size")??10,
	"thumbnailGutterHeight":wpignew_get_value("gutter_size")??10,
});


$("#infinity-gallery.style-4").nanogallery2({
	itemsBaseURL: "",
	thumbnailHeight:  wpignew_get_value("thumbnail_height")?? 200,
	thumbnailWidth:  wpignew_get_value("thumbnail_width")?? 300,
	thumbnailBorderVertical: 0,
	thumbnailBorderHorizontal: 0,
	galleryDisplayMode: "pagination", //fullContent, moreButton, pagination, rows
	galleryPaginationTopButtons:false,
	galleryPaginationMode:"numbers",
	galleryMaxRows: wpignew_get_value("no_of_row_to_display")?? 10,
	thumbnailAlignment: 'fillWidth',
	thumbnailHoverEffect2: "imageScale150|toolsSlideDown|labelAppear75",
	colorScheme: {
			"thumbnail": {
			"background":  wpignew_get_value("background_color")??"transparent",
			}
		},
	"thumbnailDisplayTransitionDuration": 10,
	"thumbnailGutterWidth": wpignew_get_value("gutter_size")??10,
	"thumbnailGutterHeight":wpignew_get_value("gutter_size")??10,
});


$("#infinity-gallery.style-5").nanogallery2({
	itemsBaseURL: "",
	thumbnailHeight:  wpignew_get_value("thumbnail_height")?? 200,
	thumbnailWidth:  wpignew_get_value("thumbnail_width")?? 300,
	galleryMosaic : [                       // default layout
		{ w: 2, h: 2, c: 1, r: 1 },
		{ w: 1, h: 1, c: 3, r: 1 },
		{ w: 1, h: 1, c: 3, r: 2 },
		{ w: 1, h: 2, c: 4, r: 1 },
		{ w: 2, h: 1, c: 5, r: 1 },
		{ w: 2, h: 2, c: 5, r: 2 },
		{ w: 1, h: 1, c: 4, r: 3 },
		{ w: 2, h: 1, c: 2, r: 3 },
		{ w: 1, h: 2, c: 1, r: 3 },
		{ w: 1, h: 1, c: 2, r: 4 },
		{ w: 2, h: 1, c: 3, r: 4 },
		{ w: 1, h: 1, c: 5, r: 4 },
		{ w: 1, h: 1, c: 6, r: 4 }
	],
	galleryMosaicXS : [                     // layout for XS width
		{ w: 2, h: 2, c: 1, r: 1 },
		{ w: 1, h: 1, c: 3, r: 1 },
		{ w: 1, h: 1, c: 3, r: 2 },
		{ w: 1, h: 2, c: 1, r: 3 },
		{ w: 2, h: 1, c: 2, r: 3 },
		{ w: 1, h: 1, c: 2, r: 4 },
		{ w: 1, h: 1, c: 3, r: 4 }
	],
	galleryMosaicSM : [                     // layout for SM width
		{ w: 2, h: 2, c: 1, r: 1 },
		{ w: 1, h: 1, c: 3, r: 1 },
		{ w: 1, h: 1, c: 3, r: 2 },
		{ w: 1, h: 2, c: 1, r: 3 },
		{ w: 2, h: 1, c: 2, r: 3 },
		{ w: 1, h: 1, c: 2, r: 4 },
		{ w: 1, h: 1, c: 3, r: 4 }
	],
	thumbnailHeight: '180', thumbnailWidth: '220',
	thumbnailAlignment: 'scaled',
	thumbnailGutterWidth: 0, thumbnailGutterHeight: 0,
	thumbnailBorderHorizontal: 0, thumbnailBorderVertical: 0,

	thumbnailToolbarImage: null,
	thumbnailToolbarAlbum: null,
	thumbnailLabel: { display: false },

	// DISPLAY ANIMATION
	// for gallery
	galleryDisplayTransitionDuration: 1500,
	// for thumbnails
	thumbnailDisplayTransition: 'imageSlideUp',
	thumbnailDisplayTransitionDuration: 1200,
	thumbnailDisplayTransitionEasing: 'easeInOutQuint',
	thumbnailDisplayInterval: 60,

	// THUMBNAIL HOVER ANIMATION
	thumbnailBuildInit2: 'image_scale_1.15',
	thumbnailHoverEffect2: 'thumbnail_scale_1.00_1.05_300|image_scale_1.15_1.00',
	touchAnimation: true,
	touchAutoOpenDelay: 500,

	// LIGHTBOX
	viewerToolbar: { display: false },
	viewerTools:    {
		topLeft:   'label',
		topRight:  'shareButton, rotateLeft, rotateRight, fullscreenButton, closeButton'
	},

	// GALLERY THEME
	galleryTheme : { 
		thumbnail: { background: '#111' },
	},
	
	// DEEP LINKING
	locationHash: true
});

})(jQuery)