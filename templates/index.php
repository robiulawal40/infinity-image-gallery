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
<body>

<!--Header Start-->
<header class="bg-slate-50 mb-10">
	<div class="mx-auto flex h-16 max-w-screen-xl items-center gap-8 px-4 sm:px-6 lg:px-8">
	<a class="block text-teal-600" href="http://localhost:3000/">
		<span class="sr-only">Home</span>
		<svg class="h-8" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path
			d="M0.41 10.3847C1.14777 7.4194 2.85643 4.7861 5.2639 2.90424C7.6714 1.02234 10.6393 0 13.695 0C16.7507 0 19.7186 1.02234 22.1261 2.90424C24.5336 4.7861 26.2422 7.4194 26.98 10.3847H25.78C23.7557 10.3549 21.7729 10.9599 20.11 12.1147C20.014 12.1842 19.9138 12.2477 19.81 12.3047H19.67C19.5662 12.2477 19.466 12.1842 19.37 12.1147C17.6924 10.9866 15.7166 10.3841 13.695 10.3841C11.6734 10.3841 9.6976 10.9866 8.02 12.1147C7.924 12.1842 7.8238 12.2477 7.72 12.3047H7.58C7.4762 12.2477 7.376 12.1842 7.28 12.1147C5.6171 10.9599 3.6343 10.3549 1.61 10.3847H0.41ZM23.62 16.6547C24.236 16.175 24.9995 15.924 25.78 15.9447H27.39V12.7347H25.78C24.4052 12.7181 23.0619 13.146 21.95 13.9547C21.3243 14.416 20.5674 14.6649 19.79 14.6649C19.0126 14.6649 18.2557 14.416 17.63 13.9547C16.4899 13.1611 15.1341 12.7356 13.745 12.7356C12.3559 12.7356 11.0001 13.1611 9.86 13.9547C9.2343 14.416 8.4774 14.6649 7.7 14.6649C6.9226 14.6649 6.1657 14.416 5.54 13.9547C4.4144 13.1356 3.0518 12.7072 1.66 12.7347H0V15.9447H1.61C2.39051 15.924 3.154 16.175 3.77 16.6547C4.908 17.4489 6.2623 17.8747 7.65 17.8747C9.0377 17.8747 10.392 17.4489 11.53 16.6547C12.1468 16.1765 12.9097 15.9257 13.69 15.9447C14.4708 15.9223 15.2348 16.1735 15.85 16.6547C16.9901 17.4484 18.3459 17.8738 19.735 17.8738C21.1241 17.8738 22.4799 17.4484 23.62 16.6547ZM23.62 22.3947C24.236 21.915 24.9995 21.664 25.78 21.6847H27.39V18.4747H25.78C24.4052 18.4581 23.0619 18.886 21.95 19.6947C21.3243 20.156 20.5674 20.4049 19.79 20.4049C19.0126 20.4049 18.2557 20.156 17.63 19.6947C16.4899 18.9011 15.1341 18.4757 13.745 18.4757C12.3559 18.4757 11.0001 18.9011 9.86 19.6947C9.2343 20.156 8.4774 20.4049 7.7 20.4049C6.9226 20.4049 6.1657 20.156 5.54 19.6947C4.4144 18.8757 3.0518 18.4472 1.66 18.4747H0V21.6847H1.61C2.39051 21.664 3.154 21.915 3.77 22.3947C4.908 23.1889 6.2623 23.6147 7.65 23.6147C9.0377 23.6147 10.392 23.1889 11.53 22.3947C12.1468 21.9165 12.9097 21.6657 13.69 21.6847C14.4708 21.6623 15.2348 21.9135 15.85 22.3947C16.9901 23.1884 18.3459 23.6138 19.735 23.6138C21.1241 23.6138 22.4799 23.1884 23.62 22.3947Z"
			fill="currentColor"
		/>
		</svg>
	</a>

	<div class="flex flex-1 items-center justify-end md:justify-between">
		<nav aria-label="Global" class="hidden md:block">
		<ul class="flex items-center gap-6 text-sm">
			<li>
			<a class="text-gray-500 transition hover:text-gray-500/75" href="/index-3.html"> Style 3 </a>
			</li>
			<li>
			<a class="text-gray-500 transition hover:text-gray-500/75" href="/index-4.html"> Style 4 </a>
			</li>
			<li>
			<a class="text-gray-500 transition hover:text-gray-500/75" href="/index-5.html"> Style 5 </a>
			</li>
			<li>
			<a class="text-gray-500 transition hover:text-gray-500/75" href="/index-6.html"> Style 6 </a>
			</li>
			<li>
			<a class="text-gray-500 transition hover:text-gray-500/75" href="/index-7.html"> Style 7 </a>
			</li>

		</ul>
		</nav>

		<div class="flex items-center gap-4">
		<div class="sm:flex sm:gap-4">
			<a
			class="block rounded-md bg-teal-600 px-5 py-2.5 text-sm font-medium text-white transition hover:bg-teal-700"
			href="#"
			>
			Login
			</a>

			<a
			class="hidden rounded-md bg-gray-100 px-5 py-2.5 text-sm font-medium text-teal-600 transition hover:text-teal-600/75 sm:block"
			href="#"
			>
			Register
			</a>
		</div>

		<button
			class="block rounded bg-gray-100 p-2.5 text-gray-600 transition hover:text-gray-600/75 md:hidden"
		>
			<span class="sr-only">Toggle menu</span>
			<svg
			xmlns="http://www.w3.org/2000/svg"
			class="size-5"
			fill="none"
			viewBox="0 0 24 24"
			stroke="currentColor"
			stroke-width="2"
			>
			<path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
			</svg>
		</button>
		</div>
	</div>
	</div>
</header>
<!--Header End-->

<section class=" max-w-7xl m-auto my-5">
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
		0  => array(
			'src_thumbnail' => 'images/image-61-300x231.jpg',
			'src_full'      => 'images/image-61-scaled.jpg',
			'srcset'        => 'images/image-61-300x231.jpg 300w, images/image-61-1024x790.jpg 1024w, images/image-61-768x593.jpg 768w, images/image-61-1536x1185.jpg 1536w, images/image-61-2048x1580.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		1  => array(
			'src_thumbnail' => 'images/image-60-300x199.jpg',
			'src_full'      => 'images/image-60-scaled.jpg',
			'srcset'        => 'images/image-60-300x199.jpg 300w, images/image-60-1024x679.jpg 1024w, images/image-60-768x510.jpg 768w, images/image-60-1536x1019.jpg 1536w, images/image-60-2048x1359.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		2  => array(
			'src_thumbnail' => 'images/image-59-200x300.jpg',
			'src_full'      => 'images/image-59-scaled.jpg',
			'srcset'        => 'images/image-59-200x300.jpg 200w, images/image-59-683x1024.jpg 683w, images/image-59-768x1152.jpg 768w, images/image-59-1024x1536.jpg 1024w, images/image-59-1365x2048.jpg 1365w, images/image-59-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		3  => array(
			'src_thumbnail' => 'images/image-58-300x225.jpg',
			'src_full'      => 'images/image-58.jpg',
			'srcset'        => 'images/image-58-300x225.jpg 300w, images/image-58-1024x767.jpg 1024w, images/image-58-768x575.jpg 768w',
			'alt'           => '',
			'caption'       => '',
		),

		4  => array(
			'src_thumbnail' => 'images/image-57-300x225.jpg',
			'src_full'      => 'images/image-57.jpg',
			'srcset'        => 'images/image-57-300x225.jpg 300w, images/image-57-1024x767.jpg 1024w, images/image-57-768x575.jpg 768w',
			'alt'           => '',
			'caption'       => '',
		),

		5  => array(
			'src_thumbnail' => 'images/image-56-300x200.jpg',
			'src_full'      => 'images/image-56-scaled.jpg',
			'srcset'        => 'images/image-56-300x200.jpg 300w, images/image-56-1024x683.jpg 1024w, images/image-56-768x512.jpg 768w, images/image-56-1536x1024.jpg 1536w, images/image-56-2048x1365.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		6  => array(
			'src_thumbnail' => 'images/image-55-197x300.jpg',
			'src_full'      => 'images/image-55-scaled.jpg',
			'srcset'        => 'images/image-55-197x300.jpg 197w, images/image-55-673x1024.jpg 673w, images/image-55-768x1169.jpg 768w, images/image-55-1009x1536.jpg 1009w, images/image-55-1346x2048.jpg 1346w, images/image-55-scaled.jpg 1682w',
			'alt'           => '',
			'caption'       => '',
		),

		7  => array(
			'src_thumbnail' => 'images/image-54-300x199.jpg',
			'src_full'      => 'images/image-54-scaled.jpg',
			'srcset'        => 'images/image-54-300x199.jpg 300w, images/image-54-1024x680.jpg 1024w, images/image-54-768x510.jpg 768w, images/image-54-1536x1020.jpg 1536w, images/image-54-2048x1360.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		8  => array(
			'src_thumbnail' => 'images/image-53-300x200.jpg',
			'src_full'      => 'images/image-53-scaled.jpg',
			'srcset'        => 'images/image-53-300x200.jpg 300w, images/image-53-1024x683.jpg 1024w, images/image-53-768x512.jpg 768w, images/image-53-1536x1024.jpg 1536w, images/image-53-2048x1365.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		9  => array(
			'src_thumbnail' => 'images/image-52-218x300.jpg',
			'src_full'      => 'images/image-52-scaled.jpg',
			'srcset'        => 'images/image-52-218x300.jpg 218w, images/image-52-745x1024.jpg 745w, images/image-52-768x1055.jpg 768w, images/image-52-1118x1536.jpg 1118w, images/image-52-1490x2048.jpg 1490w, images/image-52-scaled.jpg 1863w',
			'alt'           => '',
			'caption'       => '',
		),

		10 => array(
			'src_thumbnail' => 'images/image-51-300x200.jpg',
			'src_full'      => 'images/image-51-scaled.jpg',
			'srcset'        => 'images/image-51-300x200.jpg 300w, images/image-51-1024x683.jpg 1024w, images/image-51-768x512.jpg 768w, images/image-51-1536x1024.jpg 1536w, images/image-51-2048x1365.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		11 => array(
			'src_thumbnail' => 'images/image-50-200x300.jpg',
			'src_full'      => 'images/image-50-scaled.jpg',
			'srcset'        => 'images/image-50-200x300.jpg 200w, images/image-50-683x1024.jpg 683w, images/image-50-768x1152.jpg 768w, images/image-50-1024x1536.jpg 1024w, images/image-50-1365x2048.jpg 1365w, images/image-50-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		12 => array(
			'src_thumbnail' => 'images/image-49-300x168.jpg',
			'src_full'      => 'images/image-49-scaled.jpg',
			'srcset'        => 'images/image-49-300x168.jpg 300w, images/image-49-1024x575.jpg 1024w, images/image-49-768x431.jpg 768w, images/image-49-1536x862.jpg 1536w, images/image-49-2048x1150.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		13 => array(
			'src_thumbnail' => 'images/image-48-200x300.jpg',
			'src_full'      => 'images/image-48-scaled.jpg',
			'srcset'        => 'images/image-48-200x300.jpg 200w, images/image-48-683x1024.jpg 683w, images/image-48-768x1152.jpg 768w, images/image-48-1024x1536.jpg 1024w, images/image-48-1365x2048.jpg 1365w, images/image-48-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		14 => array(
			'src_thumbnail' => 'images/image-47-300x200.jpg',
			'src_full'      => 'images/image-47-scaled.jpg',
			'srcset'        => 'images/image-47-300x200.jpg 300w, images/image-47-1024x683.jpg 1024w, images/image-47-768x512.jpg 768w, images/image-47-1536x1024.jpg 1536w, images/image-47-2048x1365.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		15 => array(
			'src_thumbnail' => 'images/image-46-200x300.jpg',
			'src_full'      => 'images/image-46-scaled.jpg',
			'srcset'        => 'images/image-46-200x300.jpg 200w, images/image-46-683x1024.jpg 683w, images/image-46-768x1152.jpg 768w, images/image-46-1024x1536.jpg 1024w, images/image-46-1365x2048.jpg 1365w, images/image-46-scaled.jpg 1706w',
			'alt'           => '',
			'caption'       => '',
		),

		16 => array(
			'src_thumbnail' => 'images/image-45-200x300.jpg',
			'src_full'      => 'images/image-45-scaled.jpg',
			'srcset'        => 'images/image-45-200x300.jpg 200w, images/image-45-683x1024.jpg 683w, images/image-45-768x1152.jpg 768w, images/image-45-1024x1536.jpg 1024w, images/image-45-1365x2048.jpg 1365w, images/image-45-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		17 => array(
			'src_thumbnail' => 'images/image-44-200x300.jpg',
			'src_full'      => 'images/image-44-scaled.jpg',
			'srcset'        => 'images/image-44-200x300.jpg 200w, images/image-44-683x1024.jpg 683w, images/image-44-768x1152.jpg 768w, images/image-44-1024x1536.jpg 1024w, images/image-44-1365x2048.jpg 1365w, images/image-44-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		18 => array(
			'src_thumbnail' => 'images/image-43-200x300.jpg',
			'src_full'      => 'images/image-43-scaled.jpg',
			'srcset'        => 'images/image-43-200x300.jpg 200w, images/image-43-683x1024.jpg 683w, images/image-43-768x1152.jpg 768w, images/image-43-1024x1536.jpg 1024w, images/image-43-1365x2048.jpg 1365w, images/image-43-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		19 => array(
			'src_thumbnail' => 'images/image-42-200x300.jpg',
			'src_full'      => 'images/image-42-scaled.jpg',
			'srcset'        => 'images/image-42-200x300.jpg 200w, images/image-42-683x1024.jpg 683w, images/image-42-768x1152.jpg 768w, images/image-42-1024x1536.jpg 1024w, images/image-42-1365x2048.jpg 1365w, images/image-42-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		20 => array(
			'src_thumbnail' => 'images/image-41-217x300.jpg',
			'src_full'      => 'images/image-41-scaled.jpg',
			'srcset'        => 'images/image-41-217x300.jpg 217w, images/image-41-741x1024.jpg 741w, images/image-41-768x1062.jpg 768w, images/image-41-1111x1536.jpg 1111w, images/image-41-1481x2048.jpg 1481w, images/image-41-scaled.jpg 1851w',
			'alt'           => '',
			'caption'       => '',
		),

		21 => array(
			'src_thumbnail' => 'images/image-40-300x200.jpg',
			'src_full'      => 'images/image-40.jpg',
			'srcset'        => 'images/image-40-300x200.jpg 300w, images/image-40-1024x683.jpg 1024w, images/image-40-768x512.jpg 768w, images/image-40-1536x1024.jpg 1536w, images/image-40-2048x1366.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		22 => array(
			'src_thumbnail' => 'images/image-39-200x300.jpg',
			'src_full'      => 'images/image-39-scaled.jpg',
			'srcset'        => 'images/image-39-200x300.jpg 200w, images/image-39-682x1024.jpg 682w, images/image-39-768x1154.jpg 768w, images/image-39-1022x1536.jpg 1022w, images/image-39-1363x2048.jpg 1363w, images/image-39-scaled.jpg 1704w',
			'alt'           => '',
			'caption'       => '',
		),

		23 => array(
			'src_thumbnail' => 'images/image-38-300x199.jpg',
			'src_full'      => 'images/image-38-scaled.jpg',
			'srcset'        => 'images/image-38-300x199.jpg 300w, images/image-38-1024x678.jpg 1024w, images/image-38-768x509.jpg 768w, images/image-38-1536x1017.jpg 1536w, images/image-38-2048x1356.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		24 => array(
			'src_thumbnail' => 'images/image-37-212x300.jpg',
			'src_full'      => 'images/image-37-scaled.jpg',
			'srcset'        => 'images/image-37-212x300.jpg 212w, images/image-37-724x1024.jpg 724w, images/image-37-768x1086.jpg 768w, images/image-37-1086x1536.jpg 1086w, images/image-37-1448x2048.jpg 1448w, images/image-37-scaled.jpg 1810w',
			'alt'           => '',
			'caption'       => '',
		),

		25 => array(
			'src_thumbnail' => 'images/image-36-200x300.jpg',
			'src_full'      => 'images/image-36-scaled.jpg',
			'srcset'        => 'images/image-36-200x300.jpg 200w, images/image-36-683x1024.jpg 683w, images/image-36-768x1152.jpg 768w, images/image-36-1024x1536.jpg 1024w, images/image-36-1365x2048.jpg 1365w, images/image-36-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		26 => array(
			'src_thumbnail' => 'images/image-35-200x300.jpg',
			'src_full'      => 'images/image-35-scaled.jpg',
			'srcset'        => 'images/image-35-200x300.jpg 200w, images/image-35-683x1024.jpg 683w, images/image-35-768x1152.jpg 768w, images/image-35-1024x1536.jpg 1024w, images/image-35-1365x2048.jpg 1365w, images/image-35-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		27 => array(
			'src_thumbnail' => 'images/image-34-300x200.jpg',
			'src_full'      => 'images/image-34-scaled.jpg',
			'srcset'        => 'images/image-34-300x200.jpg 300w, images/image-34-1024x683.jpg 1024w, images/image-34-768x512.jpg 768w, images/image-34-1536x1024.jpg 1536w, images/image-34-2048x1365.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		28 => array(
			'src_thumbnail' => 'images/image-33-200x300.jpg',
			'src_full'      => 'images/image-33-scaled.jpg',
			'srcset'        => 'images/image-33-200x300.jpg 200w, images/image-33-683x1024.jpg 683w, images/image-33-768x1152.jpg 768w, images/image-33-1024x1536.jpg 1024w, images/image-33-1365x2048.jpg 1365w, images/image-33-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		29 => array(
			'src_thumbnail' => 'images/image-32-200x300.jpg',
			'src_full'      => 'images/image-32-scaled.jpg',
			'srcset'        => 'images/image-32-200x300.jpg 200w, images/image-32-683x1024.jpg 683w, images/image-32-768x1152.jpg 768w, images/image-32-1024x1536.jpg 1024w, images/image-32-1365x2048.jpg 1365w, images/image-32-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		30 => array(
			'src_thumbnail' => 'images/image-31-246x300.jpg',
			'src_full'      => 'images/image-31-scaled.jpg',
			'srcset'        => 'images/image-31-246x300.jpg 246w, images/image-31-840x1024.jpg 840w, images/image-31-768x936.jpg 768w, images/image-31-1260x1536.jpg 1260w, images/image-31-1680x2048.jpg 1680w',
			'alt'           => '',
			'caption'       => '',
		),

		31 => array(
			'src_thumbnail' => 'images/image-30-206x300.jpg',
			'src_full'      => 'images/image-30-scaled.jpg',
			'srcset'        => 'images/image-30-206x300.jpg 206w, images/image-30-702x1024.jpg 702w, images/image-30-768x1120.jpg 768w, images/image-30-1054x1536.jpg 1054w, images/image-30-1405x2048.jpg 1405w, images/image-30-scaled.jpg 1756w',
			'alt'           => '',
			'caption'       => '',
		),

		32 => array(
			'src_thumbnail' => 'images/image-29-200x300.jpg',
			'src_full'      => 'images/image-29-scaled.jpg',
			'srcset'        => 'images/image-29-200x300.jpg 200w, images/image-29-683x1024.jpg 683w, images/image-29-768x1152.jpg 768w, images/image-29-1024x1536.jpg 1024w, images/image-29-1365x2048.jpg 1365w, images/image-29-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		33 => array(
			'src_thumbnail' => 'images/image-28-200x300.jpg',
			'src_full'      => 'images/image-28-scaled.jpg',
			'srcset'        => 'images/image-28-200x300.jpg 200w, images/image-28-683x1024.jpg 683w, images/image-28-768x1152.jpg 768w, images/image-28-1024x1536.jpg 1024w, images/image-28-1365x2048.jpg 1365w, images/image-28-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		34 => array(
			'src_thumbnail' => 'images/image-27-300x200.jpg',
			'src_full'      => 'images/image-27-scaled.jpg',
			'srcset'        => 'images/image-27-300x200.jpg 300w, images/image-27-1024x683.jpg 1024w, images/image-27-768x512.jpg 768w, images/image-27-1536x1024.jpg 1536w, images/image-27-2048x1365.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		35 => array(
			'src_thumbnail' => 'images/image-26-237x300.jpg',
			'src_full'      => 'images/image-26-scaled.jpg',
			'srcset'        => 'images/image-26-237x300.jpg 237w, images/image-26-809x1024.jpg 809w, images/image-26-768x972.jpg 768w, images/image-26-1214x1536.jpg 1214w, images/image-26-1618x2048.jpg 1618w, images/image-26-scaled.jpg 2023w',
			'alt'           => '',
			'caption'       => '',
		),

		36 => array(
			'src_thumbnail' => 'images/image-25-240x300.jpg',
			'src_full'      => 'images/image-25-scaled.jpg',
			'srcset'        => 'images/image-25-240x300.jpg 240w, images/image-25-819x1024.jpg 819w, images/image-25-768x960.jpg 768w, images/image-25-1228x1536.jpg 1228w, images/image-25-1638x2048.jpg 1638w, images/image-25-scaled.jpg 2047w',
			'alt'           => '',
			'caption'       => '',
		),

		37 => array(
			'src_thumbnail' => 'images/image-24-240x300.jpg',
			'src_full'      => 'images/image-24-scaled.jpg',
			'srcset'        => 'images/image-24-240x300.jpg 240w, images/image-24-819x1024.jpg 819w, images/image-24-768x960.jpg 768w, images/image-24-1229x1536.jpg 1229w, images/image-24-1638x2048.jpg 1638w, images/image-24-scaled.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		38 => array(
			'src_thumbnail' => 'images/image-23-240x300.jpg',
			'src_full'      => 'images/image-23-scaled.jpg',
			'srcset'        => 'images/image-23-240x300.jpg 240w, images/image-23-819x1024.jpg 819w, images/image-23-768x960.jpg 768w, images/image-23-1229x1536.jpg 1229w, images/image-23-1638x2048.jpg 1638w, images/image-23-scaled.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		39 => array(
			'src_thumbnail' => 'images/image-22-300x240.jpg',
			'src_full'      => 'images/image-22-scaled.jpg',
			'srcset'        => 'images/image-22-300x240.jpg 300w, images/image-22-1024x819.jpg 1024w, images/image-22-768x614.jpg 768w, images/image-22-1536x1229.jpg 1536w, images/image-22-2048x1639.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		40 => array(
			'src_thumbnail' => 'images/image-21-240x300.jpg',
			'src_full'      => 'images/image-21.jpg',
			'srcset'        => 'images/image-21-240x300.jpg 240w, images/image-21-819x1024.jpg 819w, images/image-21-768x960.jpg 768w, images/image-21-1229x1536.jpg 1229w, images/image-21-1639x2048.jpg 1639w, images/image-21.jpg 1799w',
			'alt'           => '',
			'caption'       => '',
		),

		41 => array(
			'src_thumbnail' => 'images/image-20-240x300.jpg',
			'src_full'      => 'images/image-20-scaled.jpg',
			'srcset'        => 'images/image-20-240x300.jpg 240w, images/image-20-819x1024.jpg 819w, images/image-20-768x960.jpg 768w, images/image-20-1229x1536.jpg 1229w, images/image-20-1638x2048.jpg 1638w, images/image-20-scaled.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		42 => array(
			'src_thumbnail' => 'images/image-19-240x300.jpg',
			'src_full'      => 'images/image-19-scaled.jpg',
			'srcset'        => 'images/image-19-240x300.jpg 240w, images/image-19-819x1024.jpg 819w, images/image-19-768x960.jpg 768w, images/image-19-1229x1536.jpg 1229w, images/image-19-1638x2048.jpg 1638w, images/image-19-scaled.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		43 => array(
			'src_thumbnail' => 'images/image-18-225x300.jpg',
			'src_full'      => 'images/image-18-scaled.jpg',
			'srcset'        => 'images/image-18-225x300.jpg 225w, images/image-18-768x1024.jpg 768w, images/image-18-1152x1536.jpg 1152w, images/image-18-1536x2048.jpg 1536w, images/image-18-scaled.jpg 1920w',
			'alt'           => '',
			'caption'       => '',
		),

		44 => array(
			'src_thumbnail' => 'images/image-17-200x300.jpg',
			'src_full'      => 'images/image-17-scaled.jpg',
			'srcset'        => 'images/image-17-200x300.jpg 200w, images/image-17-683x1024.jpg 683w, images/image-17-768x1152.jpg 768w, images/image-17-1024x1536.jpg 1024w, images/image-17-1365x2048.jpg 1365w, images/image-17-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		45 => array(
			'src_thumbnail' => 'images/image-16-300x297.jpg',
			'src_full'      => 'images/image-16.jpg',
			'srcset'        => 'images/image-16-300x297.jpg 300w, images/image-16-1024x1012.jpg 1024w, images/image-16-150x150.jpg 150w, images/image-16-768x759.jpg 768w, images/image-16-1536x1518.jpg 1536w, images/image-16-2048x2025.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		46 => array(
			'src_thumbnail' => 'images/image-15-200x300.jpg',
			'src_full'      => 'images/image-15-scaled.jpg',
			'srcset'        => 'images/image-15-200x300.jpg 200w, images/image-15-683x1024.jpg 683w, images/image-15-768x1152.jpg 768w, images/image-15-1024x1536.jpg 1024w, images/image-15-1365x2048.jpg 1365w, images/image-15-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		47 => array(
			'src_thumbnail' => 'images/image-14-300x168.jpg',
			'src_full'      => 'images/image-14.jpg',
			'srcset'        => 'images/image-14-300x168.jpg 300w, images/image-14-1024x573.jpg 1024w, images/image-14-768x430.jpg 768w, images/image-14-1536x860.jpg 1536w, images/image-14-2048x1147.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		48 => array(
			'src_thumbnail' => 'images/image-13-300x200.jpg',
			'src_full'      => 'images/image-13.jpg',
			'srcset'        => 'images/image-13-300x200.jpg 300w, images/image-13-1024x683.jpg 1024w, images/image-13-768x512.jpg 768w, images/image-13-1536x1025.jpg 1536w, images/image-13.jpg 2000w',
			'alt'           => '',
			'caption'       => '',
		),

		49 => array(
			'src_thumbnail' => 'images/image-12-300x200.jpg',
			'src_full'      => 'images/image-12-scaled.jpg',
			'srcset'        => 'images/image-12-300x200.jpg 300w, images/image-12-1024x683.jpg 1024w, images/image-12-768x512.jpg 768w, images/image-12-1536x1024.jpg 1536w, images/image-12-2048x1365.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		50 => array(
			'src_thumbnail' => 'images/image-11-200x300.jpg',
			'src_full'      => 'images/image-11-scaled.jpg',
			'srcset'        => 'images/image-11-200x300.jpg 200w, images/image-11-683x1024.jpg 683w, images/image-11-768x1152.jpg 768w, images/image-11-1024x1536.jpg 1024w, images/image-11-1365x2048.jpg 1365w, images/image-11-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		51 => array(
			'src_thumbnail' => 'images/image-10-200x300.jpg',
			'src_full'      => 'images/image-10-scaled.jpg',
			'srcset'        => 'images/image-10-200x300.jpg 200w, images/image-10-683x1024.jpg 683w, images/image-10-768x1152.jpg 768w, images/image-10-1024x1536.jpg 1024w, images/image-10-1365x2048.jpg 1365w, images/image-10-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		52 => array(
			'src_thumbnail' => 'images/image-9-200x300.jpg',
			'src_full'      => 'images/image-9-scaled.jpg',
			'srcset'        => 'images/image-9-200x300.jpg 200w, images/image-9-683x1024.jpg 683w, images/image-9-768x1152.jpg 768w, images/image-9-1024x1536.jpg 1024w, images/image-9-1365x2048.jpg 1365w, images/image-9-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		53 => array(
			'src_thumbnail' => 'images/image-8-200x300.jpg',
			'src_full'      => 'images/image-8-scaled.jpg',
			'srcset'        => 'images/image-8-200x300.jpg 200w, images/image-8-683x1024.jpg 683w, images/image-8-768x1152.jpg 768w, images/image-8-1024x1536.jpg 1024w, images/image-8-1365x2048.jpg 1365w, images/image-8-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		54 => array(
			'src_thumbnail' => 'images/image-7-300x285.jpg',
			'src_full'      => 'images/image-7-scaled.jpg',
			'srcset'        => 'images/image-7-300x285.jpg 300w, images/image-7-1024x972.jpg 1024w, images/image-7-768x729.jpg 768w, images/image-7-1536x1458.jpg 1536w, images/image-7-2048x1943.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		55 => array(
			'src_thumbnail' => 'images/image-6-300x199.jpg',
			'src_full'      => 'images/image-6-scaled.jpg',
			'srcset'        => 'images/image-6-300x199.jpg 300w, images/image-6-1024x678.jpg 1024w, images/image-6-768x509.jpg 768w, images/image-6-1536x1017.jpg 1536w, images/image-6-2048x1356.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		56 => array(
			'src_thumbnail' => 'images/image-5-300x200.jpg',
			'src_full'      => 'images/image-5-scaled.jpg',
			'srcset'        => 'images/image-5-300x200.jpg 300w, images/image-5-1024x683.jpg 1024w, images/image-5-768x512.jpg 768w, images/image-5-1536x1024.jpg 1536w, images/image-5-2048x1366.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		57 => array(
			'src_thumbnail' => 'images/image-4-300x199.jpg',
			'src_full'      => 'images/image-4-scaled.jpg',
			'srcset'        => 'images/image-4-300x199.jpg 300w, images/image-4-1024x678.jpg 1024w, images/image-4-768x509.jpg 768w, images/image-4-1536x1017.jpg 1536w, images/image-4-2048x1356.jpg 2048w',
			'alt'           => '',
			'caption'       => '',
		),

		58 => array(
			'src_thumbnail' => 'images/image-3-200x300.jpg',
			'src_full'      => 'images/image-3-scaled.jpg',
			'srcset'        => 'images/image-3-200x300.jpg 200w, images/image-3-683x1024.jpg 683w, images/image-3-768x1152.jpg 768w, images/image-3-1024x1536.jpg 1024w, images/image-3-1365x2048.jpg 1365w, images/image-3-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		59 => array(
			'src_thumbnail' => 'images/image-2-200x300.jpg',
			'src_full'      => 'images/image-2-scaled.jpg',
			'srcset'        => 'images/image-2-200x300.jpg 200w, images/image-2-683x1024.jpg 683w, images/image-2-768x1152.jpg 768w, images/image-2-1024x1536.jpg 1024w, images/image-2-1365x2048.jpg 1365w, images/image-2-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),

		60 => array(
			'src_thumbnail' => 'images/image-1-200x300.jpg',
			'src_full'      => 'images/image-1-scaled.jpg',
			'srcset'        => 'images/image-1-200x300.jpg 200w, images/image-1-683x1024.jpg 683w, images/image-1-768x1152.jpg 768w, images/image-1-1024x1536.jpg 1024w, images/image-1-1365x2048.jpg 1365w, images/image-1-scaled.jpg 1707w',
			'alt'           => '',
			'caption'       => '',
		),
	);
	require_once 'style-3.php';
	?>
</section>

<!--Footer Start-->
<footer class="bg-slate-50 mt-40">
	<div class="mx-auto max-w-screen-xl px-4 pb-8 pt-16 sm:px-6 lg:px-8 lg:pt-24">
	<div class="text-center">
		<h2 class="text-3xl font-extrabold text-gray-900 sm:text-5xl">Customize This Plugin</h2>

		<p class="mx-auto mt-4 max-w-sm text-gray-500">
		Create a Plugin That Fits Your Style
		</p>

		<div class="mx-auto [&_a]:text-center [&_svg]:m-auto">
		<a
		href="https://www.facebook.com/profile.php?id=61551698108395"
		target="_blank"
		class="mt-8 inline-block rounded-full border border-indigo-600 px-12 py-3 text-sm font-medium text-indigo-600 hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring active:bg-indigo-500 "
		>
		<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="30px" width="30px" xmlns="http://www.w3.org/2000/svg"><path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5V334.2H141.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H287V510.1C413.8 494.8 512 386.9 512 256h0z"></path></svg>
		Get Started in Facebook
		</a>
		<a
		href="https://www.linkedin.com/company/wp-codezen"
		target="_blank"
		class="mt-8 inline-block rounded-full border border-indigo-600 px-12 py-3 text-sm font-medium text-indigo-600 hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring active:bg-indigo-500"
		>
		<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="30px" width="30px" xmlns="http://www.w3.org/2000/svg"><path d="M444.17 32H70.28C49.85 32 32 46.7 32 66.89v374.72C32 461.91 49.85 480 70.28 480h373.78c20.54 0 35.94-18.21 35.94-38.39V66.89C480.12 46.7 464.6 32 444.17 32zm-273.3 373.43h-64.18V205.88h64.18zM141 175.54h-.46c-20.54 0-33.84-15.29-33.84-34.43 0-19.49 13.65-34.42 34.65-34.42s33.85 14.82 34.31 34.42c-.01 19.14-13.31 34.43-34.66 34.43zm264.43 229.89h-64.18V296.32c0-26.14-9.34-44-32.56-44-17.74 0-28.24 12-32.91 23.69-1.75 4.2-2.22 9.92-2.22 15.76v113.66h-64.18V205.88h64.18v27.77c9.34-13.3 23.93-32.44 57.88-32.44 42.13 0 74 27.77 74 87.64z"></path></svg>
		Get Started in linkedin
		</a>
		</div>
	</div>

	<div
		class="mt-16 border-t border-gray-100 pt-8 sm:flex sm:items-center sm:justify-between lg:mt-24"
	>
		<ul class="flex flex-wrap justify-center gap-4 text-xs lg:justify-end">
		<li>
			<a href="#" class="text-gray-500 transition hover:opacity-75"> Terms & Conditions </a>
		</li>

		<li>
			<a href="#" class="text-gray-500 transition hover:opacity-75"> Privacy Policy </a>
		</li>

		<li>
			<a href="#" class="text-gray-500 transition hover:opacity-75"> Cookies </a>
		</li>
		</ul>

		<ul class="mt-8 flex justify-center gap-6 sm:mt-0 lg:justify-end">
		<li>
			<a
			href="#"
			rel="noreferrer"
			target="_blank"
			class="text-gray-700 transition hover:opacity-75"
			>
			<span class="sr-only">Facebook</span>

			<svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
				<path
				fill-rule="evenodd"
				d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
				clip-rule="evenodd"
				/>
			</svg>
			</a>
		</li>

		<li>
			<a
			href="#"
			rel="noreferrer"
			target="_blank"
			class="text-gray-700 transition hover:opacity-75"
			>
			<span class="sr-only">Instagram</span>

			<svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
				<path
				fill-rule="evenodd"
				d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
				clip-rule="evenodd"
				/>
			</svg>
			</a>
		</li>

		<li>
			<a
			href="#"
			rel="noreferrer"
			target="_blank"
			class="text-gray-700 transition hover:opacity-75"
			>
			<span class="sr-only">Twitter</span>

			<svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
				<path
				d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
				/>
			</svg>
			</a>
		</li>

		<li>
			<a
			href="#"
			rel="noreferrer"
			target="_blank"
			class="text-gray-700 transition hover:opacity-75"
			>
			<span class="sr-only">GitHub</span>

			<svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
				<path
				fill-rule="evenodd"
				d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
				clip-rule="evenodd"
				/>
			</svg>
			</a>
		</li>

		<li>
			<a
			href="#"
			rel="noreferrer"
			target="_blank"
			class="text-gray-700 transition hover:opacity-75"
			>
			<span class="sr-only">Dribbble</span>

			<svg class="size-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
				<path
				fill-rule="evenodd"
				d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
				clip-rule="evenodd"
				/>
			</svg>
			</a>
		</li>
		</ul>
	</div>
	</div>
</footer>
<!--Footer End-->

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
