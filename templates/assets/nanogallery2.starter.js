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

})(jQuery)