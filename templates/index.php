<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Infinity Image Gallery</title>
	<link rel="stylesheet" href="./tailwind-style.css">
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/nanogallery2@3/dist/jquery.nanogallery2.min.js"></script>


</head>
<body class="bg-slate-100">

<?php
function esc_attr( $string ) {
	return $string;
}

?>


<!-- <div ID="ngy2p" data-nanogallery2='{
		"itemsBaseURL": "http://nanogallery2.nanostudio.org/samples/",
		"thumbnailWidth": "200",
		"thumbnailLabel": {
			"position": "overImageOnBottom"
		},
		"thumbnailAlignment": "center",
		"thumbnailOpenImage": true
		}'>
		<a href="berlin1.jpg" data-ngthumb="berlin1t.jpg" data-ngdesc="">Berlin 1</a>
		<a href="berlin2.jpg" data-ngthumb="berlin2t.jpg" data-ngdesc="">Berlin 2</a>
		<a href="berlin3.jpg" data-ngthumb="berlin3t.jpg" data-ngdesc="">Berlin 3</a>

	</div> -->

	<?php
	// Include your infinity image gallery code here.
	$images = array(
		array(
			'url'     => 'images/thomas-tucker-MNtag_eXMKw-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/thought-catalog-9aOswReDKPo-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/thought-catalog-EMX1eJ1BcgU-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/victoria-shes-UC0HZdUitWY-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/webvilla-hv1MrBzGGNY-unsplash (1).jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/webvilla-hv1MrBzGGNY-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/wikisleep-app-qvIrI4ueqzY-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/alexander-mils-aiIANaSK9DQ-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/alex-lvrs-HDjExSGuWUw-unsplash (1).jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/alex-lvrs-HDjExSGuWUw-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/alex-lvrs-Uw0umuQnkpk-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/alex-munsell-Yr4n8O_3UPc-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/annie-spratt-R3LcfTvcGWY-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/arturrro-GdTLaWamFHw-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/brooke-lark-GJMlSBS0FhU-unsplash (1).jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/brooke-lark-GJMlSBS0FhU-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/brooke-lark-GTMGG-xvxdU-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/brooke-lark-oGCF9yywFCM-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/brooke-lark-R18ecx07b3c-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/brooke-lark-V4MBq8kue3U-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/brooke-lark-ZkgWJ4BfgsE-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/carissa-gan-_0JpjeqtSyg-unsplash (1).jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/carissa-gan-_0JpjeqtSyg-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/carissa-gan-KSXvrqKUxnc-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/charlesdeluvio-yPI38imbQSI-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/daniel-oberg-3sl9_ubYIno-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/deniz-altindas-jVLahCBXaJs-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/ernest-porzi-Z-Y6I45f9kQ-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/food-photographer-jennifer-pallian-8pUjhBm4cLw-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/food-photographer-jennifer-pallian-B9LUnYtxHok-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/food-photographer-jennifer-pallian-dcPNZeSY3yk-unsplash (1).jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/food-photographer-jennifer-pallian-dcPNZeSY3yk-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/food-photographer-jennifer-pallian-DfbrRpHTLy0-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/food-photographer-jennifer-pallian-dZKiXR9FYcM-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/food-photographer-jennifer-pallian-FT7fjyEyqv0-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/food-photographer-jennifer-pallian-gw78G_i7GYo-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/heather-barnes-WbZesfqwR-A-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/hoach-le-dinh-c8TWWQ5ZnUw-unsplash (1).jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/hoach-le-dinh-c8TWWQ5ZnUw-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/ian-dooley-TLD6iCOlyb0-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/jennifer-schmidt-zOlQ7lF-3vs-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/jodie-morgan-v25z8P-CPB4-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/joseph-gonzalez-QaGDmf5tMiE-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/jo-sonn-M-tzZD5z720-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/jo-sonn-zeFy-oCUhV8-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/juan-jose-valencia-antia-TTrJMhrkoeY-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/karly-gomez-_EqjV7bHBB4-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/karly-gomez-lK1Q5RyD6tc-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/lidya-nada--iX-0JI8-0Y-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/luke-michael-1cWZgnBhZRs-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/matthias-heil-lDOEwat_MPs-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/megan-thomas-xMh_ww8HN_Q-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/mekht-GuvimT4IFok-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/mgg-vitchakorn-PLyJqEJVre0-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/monika-grabkowska-jsgJtBOR6jY-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/neha-deshmukh-cYZxxz4AweE-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/neha-deshmukh-GoKXJaQoLQs-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/nordwood-themes-d9vsO3166UI-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/nordwood-themes-Tmz8FThN_BE-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/odiseo-castrejon-4Q_xlBOaCso-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/pablo-merchan-montes-0nT08Z-MhiE-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/rachael-gorjestani-HLt6jQLf_J0-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/rachael-gorjestani-XlA2994Txhw-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/sincerely-media-rmfYcfs2Oq8-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/sydney-rae-_5TGspSCIdw-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/tatiana-lapina-qpf2glK0bAA-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
		array(
			'url'     => 'images/taylor-kiser-mepQiXCXETM-unsplash.jpg',
			'caption' => 'lorem ipsum dolor sit amet, consectet',
		),
	);
	require_once 'design-1.php';
	?>

<script type="text/javascript">
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
</script>
</body>
</html>
