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
	thumbnailHeight:  wpignew_get_value("thumbnail_height", 400),
	thumbnailWidth:  "auto",
	thumbnailBorderVertical: 0,
	thumbnailBorderHorizontal: 0,
	galleryDisplayMode: "pagination", //fullContent, moreButton, pagination, rows
	galleryPaginationTopButtons:false,
	galleryPaginationMode:"numbers",
	galleryMaxRows: wpignew_get_value("no_of_row_to_display", 10)?? 10,
	thumbnailAlignment: 'fillWidth',
	thumbnailHoverEffect2: "imageScale150|toolsSlideDown|labelAppear75",
	colorScheme: {
			"thumbnail": {
			"background":  wpignew_get_value("background_color")??"transparent",
			}
		},
	"thumbnailDisplayTransitionDuration": 10,
	"thumbnailGutterWidth": 10,
	"thumbnailGutterHeight":10,
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


$("#infinity-gallery.style-6").nanogallery2({
	itemsBaseURL: "",
	galleryDisplayTransitionDuration: 1500,
         
	// GALLERY AND THUMBNAIL LAYOUT
	galleryMosaic : [                       // default layout
		 { "w": 16, "h": 18, "c": 1,  "r": 1  },
		 { "w": 8,  "h": 9,  "c": 21, "r": 5  },
		 { "w": 4,  "h": 6,  "c": 28, "r": 2  },
		 { "w": 4,  "h": 6,  "c": 19, "r": 11 },
		 { "w": 6,  "h": 8,  "c": 27, "r": 10 }
	],
	galleryMosaicXS : [                     // layout for XS width
		 { "w": 6, "h": 9, "c": 1,  "r": 1  },
		 { "w": 4,  "h": 4,  "c": 9, "r": 3  },
		 { "w": 2,  "h": 3,  "c": 12, "r": 1  },
		 { "w": 2,  "h": 3,  "c": 8, "r": 5 },
		 { "w": 3,  "h": 4,  "c": 12, "r": 6 }
	],
	galleryMosaicSM : [                     // layout for SM width
		 { "w": 6, "h": 9, "c": 1,  "r": 1  },
		 { "w": 4,  "h": 4,  "c": 9, "r": 3  },
		 { "w": 2,  "h": 3,  "c": 12, "r": 1  },
		 { "w": 2,  "h": 3,  "c": 8, "r": 5 },
		 { "w": 3,  "h": 4,  "c": 12, "r": 6 }
	],
	galleryMaxRows: 1,
	galleryDisplayMode: 'rows',
	gallerySorting: 'random',
	thumbnailDisplayOrder: 'random',

	thumbnailAlignment: 'scaled',
	thumbnailHeight: 100, thumbnailWidth: 100,
	thumbnailGutterWidth: 0, thumbnailGutterHeight: 0,
	thumbnailBorderHorizontal: 0, thumbnailBorderVertical: 0,

	thumbnailToolbarImage : null,
	thumbnailToolbarAlbum: null,

	thumbnailLabel: { display: false },
	
	// DISPLAY ANIMATION
	galleryDisplayTransition: 'rotateX',        // gallery display animation
	galleryDisplayTransitionDuration: 1500,
	thumbnailDisplayTransition: 'scaleUp',     // thumbnail display animation
	thumbnailDisplayTransitionDuration: 600,
	thumbnailDisplayInterval: 30,


	// HOVER ANIMATION
	thumbnailBuildInit2: '.nGY2GThumbnailAlbumTitle_border-left_5px solid #23CB99|.nGY2GThumbnailAlbumTitle_margin_20px|\
				title_backgroundColor_rgba(200,200,200,0.8)|title_color_#000',
	thumbnailHoverEffect2: 'image_scale_1.00_1.15_500_bounce|image_rotateZ_0deg_05deg',
	touchAnimation: true,
	touchAutoOpenDelay: 500,

	// LIGHTBOX
	viewerToolbar:    {   // bottom toolbar
		display: true,
		standard:  'label',
		minimized: 'label' },
	viewerTools:    {
		topLeft:   '',
		topRight:  'rotateLeft, rotateRight, fullscreenButton, closeButton'
	},

	// DEEP LINKING
	locationHash: false
});

$("#infinity-gallery.style-7").nanogallery2({
	itemsBaseURL: "",
// GALLERY AND THUMBNAIL LAYOUT
galleryDisplayMode: 'moreButton',
galleryMaxRows: 3,
galleryMaxItems: 15,
gallerySorting: 'random',

thumbnailHeight: '300 XS200 SM200',       // RESPONSIVE THUMBNAIL HEIGHT: default=300px, XS resolution=200px, SM resolution=200px
thumbnailWidth: '300 XS180 SM200',        // RESPONSIVE THUMBNAIL WIDTH:  default=300px, XS resolution=180px, SM resolution=200px

thumbnailAlignment: 'center',
thumbnailBorderHorizontal: 0, thumbnailBorderVertical: 0,
thumbnailGutterWidth : '80 XS20 SM20' , thumbnailGutterHeight : '80 XS20 SM20',

// THUMBNAIL TOOLS & LABEL
thumbnailLabel: { display: true, position: 'onBottom', align: 'left'},
thumbnailToolbarImage :  { bottomLeft : 'display' },
// replace the default DISPLAY tool icon
icons: {thumbnailDisplay: '<i class="fa fa-long-arrow-right" aria-hidden="true"></i> display'},

// DISPLAY ANIMATION
galleryDisplayTransition: 'slideUp',
galleryDisplayTransitionDuration: 1000,
thumbnailDisplayTransition: 'scaleDown',
thumbnailDisplayTransitionDuration: 300,
thumbnailDisplayInterval: 50,


// THUMBNAIL'S HOVER ANIMATION
thumbnailBuildInit2 : 'tools_font-size_1.5em|title_font-size_1.5em',
thumbnailHoverEffect2 : 'image_scale_1.00_1.20_1000|tools_opacity_0_1|tools_translateX_-30px_0px|title_opacity_1_0|title_translateX_0px_-30px',
touchAnimation: true,
touchAutoOpenDelay: 800,

// GALLERY THEME
galleryTheme : { 
	thumbnail: { borderRadius: '10px', background: '#fff', titleShadow : 'none', titleColor: '#000', labelBackground: '#ff0' },
	thumbnailIcon: { color: '#000', shadow: 'none' },
},

// LIGHTBOX
// Hide the bottom toolbar and media title
viewerToolbar: { display: false },

// DEEP LINKING
locationHash: false
});

$("#infinity-gallery.style-8").nanogallery2({
	itemsBaseURL: "",
// KEYWORD FILTERING
galleryFilterTags: true,
galleryFilterTagsMode: 'multiple',

// GALLERY AND THUMBNAIL LAYOUT
thumbnailHeight: '250', thumbnailWidth: '250',
thumbnailAlignment: 'fillWidth',
galleryDisplayMode: 'fullContent',
gallerySorting: 'random',

thumbnailGutterWidth: 10, thumbnailGutterHeight: 10,
thumbnailBorderHorizontal: 2, thumbnailBorderVertical: 2,

// DISPLAY ANIMATION
galleryDisplayTransitionDuration: 1000,
thumbnailDisplayTransition: 'slideRight',
thumbnailDisplayTransitionDuration: 300,
thumbnailDisplayInterval: 150,
thumbnailDisplayOrder: 'colFromRight',

// THUMBNAIL TOOLS & LABEL
thumbnailLabel: { display: true, position:'onBottomOverImage', hideIcons: true, titleFontSize: '1em', align: 'left', titleMultiLine:true, displayDescription: false},
thumbnailToolbarImage: null,
thumbnailToolbarAlbum: null,

// THUMBNAIL HOVER ANIMATION
thumbnailHoverEffect2: 'label_font-size_1em_1.5em|title_backgroundColor_rgba(255,255,255,0.34)_rgba(((35,203,153,0.8)|title_color_#000_#fff|image_scale_1.00_1.10_5000|image_rotateZ_0deg_4deg_5000',
touchAnimation: true,
touchAutoOpenDelay: 800,

// GALLERY THEME
galleryTheme : { 
	thumbnail: { titleShadow : 'none', titleColor: '#fff', borderColor: '#fff' },
	navigationBreadcrumb: { background : '#3C4B5B' },
	navigationFilter: { background : '#003C3F', backgroundSelected: '#2E7C7F', color: '#fff' }
},

// DEEP LINKING
locationHash: false
});

$("#infinity-gallery.style-9").nanogallery2({
	itemsBaseURL: "",
// GALLERY AND THUMBNAIL LAYOUT
galleryDisplayMode: 'fullContent',
gallerySorting: 'random',
thumbnailHeight: 'auto', thumbnailWidth: '300',
thumbnailBaseGridHeight: 50,
thumbnailAlignment: 'fillWidth',
thumbnailL1GutterWidth: 4,
thumbnailL1GutterHeight: 4,
thumbnailBorderHorizontal: 5,
thumbnailBorderVertical: 5,

// THUMBNAIL TOOLS & LABEL
thumbnailLabel: { display: true, position:'onBottom', hideIcons: true, titleFontSize: '1em', align: 'right', titleMultiLine:true, displayDescription: false},
thumbnailToolbarAlbum: null,
thumbnailToolbarImage :  { bottomRight : 'display' },
// replace the default DISPLAY tool icon
icons: {thumbnailDisplay: '<i class="fa fa-long-arrow-right" aria-hidden="true"></i> display'},

// DISPLAY ANIMATION
thumbnailDisplayTransition: 'slideDown',
thumbnailDisplayTransitionDuration: 500,
thumbnailDisplayInterval: 30,

// THUMBNAIL'S HOVER ANIMATION
thumbnailHoverEffect2: 'label_translateY_0px_-20px|image_scale_1.00_1.10|image_rotateZ_0deg_3deg|image_translateY_0px_-20px|tools_opacity_0_1|tools_translateY_30px_0px',
touchAnimation: true,
touchAutoOpenDelay: 800,

// GALLERY THEME
galleryTheme : { 
	thumbnail: { background: '#444', backgroundImage: 'linear-gradient(315deg, #111 0%, #557 90%)', borderColor: '#000', labelOpacity : 1, labelBackground: '#444', titleColor: '#eee', titleBgColor: '#444', titleShadow: '' },
},

// DEEP LINKING
locationHash: false
});

$("#infinity-gallery.style-10").nanogallery2({
	itemsBaseURL: "",
// GALLERY AND THUMBNAIL LAYOUT
galleryL1DisplayMode: 'fullContent',                // first level display mode -> fullContent
galleryDisplayMode: 'rows',                         // other levels display mode -> 4 rows
galleryMaxRows: 4,
gallerySorting: 'random',

// thumbnail on first gallery level
thumbnailL1Height: 400, thumbnailL1Width: 600,      // first level -> grid kayout
thumbnailL1GutterWidth: 20,
thumbnailL1GutterHeight: 20,
thumbnailL1BorderHorizontal: 0,
thumbnailL1BorderVertical: 0,

// thumbnail on other gallery level
thumbnailHeight: 400, thumbnailWidth: 'auto',       // other levels -> justified layout
thumbnailGutterWidth: 2,
thumbnailGutterHeight: 2,
thumbnailBorderHorizontal: 0,
thumbnailBorderVertical: 0,

thumbnailAlignment: 'fillWidth',

// THUMBNAIL TOOLS & LABEL
thumbnailToolbarImage : null,
thumbnailToolbarAlbum: null,
// first level label
<!-- thumbnailL1Label: { display: true, position:'overImageOnBottom', hideIcons: true, titleFontSize: '1em', align: 'center', titleMultiLine:true, displayDescription: false}, -->
thumbnailL1Label: { display: true, valign:'bottom', hideIcons: true, titleFontSize: '3em', align: 'left', titleMultiLine:true, displayDescription: false},
// other level label
thumbnailLabel: { display: true, position:'overImageOnBottom', hideIcons: true, titleFontSize: '1em', align: 'center', titleMultiLine:true, displayDescription: false},

// thumbnailToolbarAlbum: { topRight: 'counter' },

// DISPLAY ANIMATION
thumbnailL1DisplayTransition: 'flipUp',         // first level display animation
thumbnailDisplayTransition: 'slideDown',        // other levels display animation
thumbnailDisplayTransitionDuration: 500,
thumbnailDisplayInterval: 30,

// THUMBNAIL'S HOVER ANIMATION
// first level
<!-- thumbnailL1BuildInit2: 'title_font-weight_bold|image_scale_0.8|label_left_-5px|label_text-transform_uppercase|label_top_95%|label_rotateZ_-90deg|label_transform-origin_top left', -->
thumbnailL1BuildInit2: 'title_font-weight_bold|image_scale_0.8|label_left_-25px|label_top_95%|label_rotateZ_-90deg|label_transform-origin_top left',
thumbnailL1HoverEffect2: 'imageGrayOff|title_color_#46D6AB_#aaaaaa|labelOpacity50',
// other levels -> no hover effect

// touch handling
touchAnimation: false,
touchAutoOpenDelay: 800,

// GALLERY THEME
galleryTheme : { 
	thumbnail: { background: '#111', titleShadow : '', descriptionShadow : 'none', titleColor: '#fff', borderColor: '#000' },
	navigationBreadcrumb: { background : '#3C4B5B' },
},

// DEEP LINKING
locationHash: false
});

$("#infinity-gallery.style-11").nanogallery2({
	itemsBaseURL: "",
 // CONTENT SOURCE
 items:[
	{
		src:          'https://vimeo.com/32875422',                           // media url
		srct:         'https://i.vimeocdn.com/video/222726041_1280x720.jpg',  // media thumbnail url
		title:        'Vimeo video',                                          // media title
	},
	{ src: 'https://www.youtube.com/watch?v=i5qOzqD9Rms', title: 'Youtube video' },
	{ src: 'https://www.dailymotion.com/video/x7shbov',   title: 'Dailymotion video' },
	{ src: 'berlin1.jpg',      srct: 'berlin1t.jpg',   title: 'Self hosted image' },
	{ src: 'berlin2.jpg',      srct: 'berlin2t.jpg',   title: 'Self hosted image' },
	{ src: 'berlin3.jpg',      srct: 'berlin3t.jpg',   title: 'Self hosted image' }
],
itemsBaseURL:    'https://nanogallery2.nanostudio.org/samples/',

// GALLERY AND THUMBNAIL LAYOUT
galleryDisplayMode: 'fullContent',
gallerySorting: 'random',


// thumbnail
thumbnailHeight: 200, thumbnailWidth: 350,
thumbnailGutterWidth: 2,
thumbnailGutterHeight: 2,
thumbnailBorderHorizontal: 0,
thumbnailBorderVertical: 0,

thumbnailAlignment: 'fillWidth',

// THUMBNAIL TOOLS & LABEL
thumbnailToolbarImage : null,
thumbnailToolbarAlbum: null,
thumbnailLabel: { display: true, position:'overImageOnBottom', hideIcons: true, titleFontSize: '2em', align: 'center', titleMultiLine:true, displayDescription: false},

// DISPLAY ANIMATION
thumbnailL1DisplayTransition: 'flipUp',         // first level display animation
thumbnailDisplayTransition: 'slideDown',        // other levels display animation
thumbnailDisplayTransitionDuration: 500,
thumbnailDisplayInterval: 30,

// THUMBNAIL'S HOVER ANIMATION
// first level
thumbnailBuildInit2: 'title_font-weight_bold',
thumbnailHoverEffect2: 'imageBlurOff',
// other levels -> no hover effect
// touch handling
touchAnimation: false,
touchAutoOpenDelay: 800,

// GALLERY THEME
galleryTheme : { 
	thumbnail: { titleShadow : '', descriptionShadow : 'none', titleColor: '#fff', borderColor: '#000' },
	navigationBreadcrumb: { background : '#3C4B5B' },
},

// DEEP LINKING
locationHash: false
});

})(jQuery)