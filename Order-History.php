<?php
session_start();
include_once('Business/DB.php');
//$_SESSION["userid"] = 1; //for testing

if (!isset($_SESSION["userid"])) {
	if (isset($_SERVER["HTTP_REFERER"])) {
		header("location: " . $_SERVER["HTTP_REFERER"]);
	} else {
		header('location: index.php');
	}
}

$message = '';
//<div class="vc_column-inner"><div class="wpb_wrapper"><div class="rb_info_box info"><div class="icon_wrapper"><i></i></div><div class="content_wrapper"><p class="h5 info_box_title">Information Box</p></div></div></div></div>
//<div class="vc_column-inner"><div class="wpb_wrapper"><div class="rb_info_box success"><div class="icon_wrapper"><i></i></div><div class="content_wrapper"><p class="h5 info_box_title">Login Successfully</p></div></div></div></div>
//<div class="vc_column-inner"><div class="wpb_wrapper"><div class="rb_info_box error"><div class="icon_wrapper"><i></i></div><div class="content_wrapper"><p class="h5 info_box_title">Error Message</p></div></div></div></div>
//<div class="vc_column-inner"><div class="wpb_wrapper"><div class="rb_info_box warning"><div class="icon_wrapper"><i></i></div><div class="content_wrapper"><p class="h5 info_box_title">Warning Message</p></div></div></div></div>
if (isset($_SESSION["Item_Deleted"])) {
	$message = 'Item Removed From Cart';
	unset($_SESSION["Item_Deleted"]);
}

?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>SEO-Tech-Store Order History</title>
	<meta name='robots' content='noindex,nofollow' />

	<?php
	$page = strtolower(basename($_SERVER['PHP_SELF']));
	//echo $page;
	if($page === "seo.php" || $page === "content-writing.php" || $page === "graphics-designing.php")
	{
		//is a service and have to fetch meta for the service
		if(strstr($_SERVER['REQUEST_URI'], "sub-category")) {
			$querystring = urlencode($_GET["sub-category"]);
	
			include_once('business/DB.php');
			$sql = "select * from meta where page='".$page.'?sub-category='.$querystring."' limit 1";
			//echo $sql;
			$result = $conn->query($sql);
			if ($result->num_rows > 0) {
				while ($row = $result->fetch_assoc()) {
					echo "<meta name='keywords' content='".$row["keywords"]."' />";
				}
			}
		}
	}
	else
	{
		// is a page
		include_once('business/DB.php');
		$sql = "select * from meta where page='".$page."' limit 1";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {
				echo "<meta name='keywords' content='".$row["keywords"]."' />";
			}
		}
	}
	?>

	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='siteground-optimizer-combined-styles-header-css' href='wp-content/uploads/siteground-optimizer-assets/siteground-optimizer-combined-styles-681655fdcdce54196f13d3879fd6a93d.css' type='text/css' media='all' />
	<style id='siteground-optimizer-combined-styles-header-inline-css' type='text/css'>
		body[data-boxed="true"] .site.wrap {
			background-color: #fff;
		}

		.site-footer {
			background-color: #111111;
		}

		.menu-main-container.header_menu {
			font-family: Nunito Sans;
			font-size: 18px;
			line-height: 25px;
		}

		h1,
		.h1,
		h2,
		.h2,
		h3,
		.h3,
		h4,
		.h4,
		h5,
		.h5,
		h6,
		.h6,
		.rb-widget caption,
		.vc_pie_chart_value {
			font-family: Open Sans;
			color: #3e4a59;
		}

		.title_ff,
		ul.products li.product .price,
		body.wpb-js-composer .vc_tta-title-text {
			font-family: Open Sans;
		}

		body,
		select {
			font-family: Nunito Sans;
			color: rgba(62, 74, 89, 0.8);
			font-size: 17px;
			line-height: 30px;
		}

		.site-header .top-bar-box {
			padding-top: 10px;
			padding-bottom: 10px;
		}

		.top-bar-box {
			background-color: #dde9fa;
		}

		.top-bar-box .container>*>a,
		.header_icons>.mini-cart>a,
		.wishlist_products_counter_number,
		.rb_compare_count,
		.woo_mini-count>span {
			color: rgba(255, 255, 255, .7);
		}

		.page_title_container {
			padding-top: 90px;
			padding-bottom: 80px;
			background: linear-gradient(-6deg, #e9eeff, #ffffff);
			;
		}

		.site-header-mobile .page_title_container {
			padding-top: 70px;
			padding-bottom: 60px;
		}

		body:not(.single) .page_title_container .page_title_customizer_size {
			font-size: 48px;
		}

		body.single .page_title_container .page_title_customizer_size {
			font-size: 50px;
		}

		.page_title_container .single_post_categories {
			background-color: #3e4a59;
		}

		.page_title_container .single_post_categories a {
			color: #ffffff;
		}

		.page_title_container .page_title_customizer_size .page_title {
			color: #3e4a59;
		}

		.page_title_container .single_post_meta a {
			color: #3e4a59;
		}

		.page_title_container .single_post_meta a:not(:last-child):after {
			background-color: #3e4a59;
		}

		.page_title_container .title_divider {
			background-color: #5163dd;
		}

		.page_title_container .woocommerce-breadcrumb *,
		.page_title_container .bread-crumbs * {
			color: #3e4a59;
		}

		.site-sticky {
			background-color: #fff;
		}

		.site-sticky.shadow {
			-webkit-box-shadow: 0 0 15px 5px rgba(16, 1, 148, 0.05);
			-moz-box-shadow: 0 0 15px 5px rgba(16, 1, 148, 0.05);
			box-shadow: 0 0 15px 5px rgba(16, 1, 148, 0.05);
		}

		.site-sticky .menu-main-container.header_menu>.menu>.menu-item>a {
			color: #3E4A59;
		}

		.site-sticky .menu-main-container.header_menu>.menu>.menu-item>a:before,
		.site-sticky .menu-main-container.header_menu .menu-item-object-rb-megamenu .sub-menu .rb_megamenu_item .widgettitle:before {
			background-color: #5163DD;
		}

		.menu-main-container.header_menu>ul>.menu-item>a {
			padding-top: 39px;
			padding-bottom: 37px;
		}

		.search-trigger {
			color: #3E4A59;
		}

		.menu-main-container.header_menu>.menu>.menu-item>a:before,
		.menu-main-container.header_menu .menu-item-object-rb-megamenu .sub-menu .rb_megamenu_item .widgettitle:before {
			background-color: #5163DD;
		}

		.menu-main-container.header_menu .sub-menu a {
			color: rgba(62, 74, 89, .6);
		}

		.menu-main-container.header_menu .sub-menu .current-menu-item>a {
			color: #3E4A59;
		}

		.site-header-mobile .top-bar-box,
		.sticky-mobile {
			padding-top: 13px;
			padding-bottom: 13px;
		}

		.site-header-mobile .top-bar-box,
		.site-sticky.sticky-mobile {
			background-color: #ffffff;
		}

		.site-header-mobile .menu-trigger span,
		.site-sticky.sticky-mobile .menu-trigger span {
			background-color: #3e4a59;
		}

		.site-header-mobile .top-bar-box .container .mini-cart>a,
		.site-sticky.sticky-mobile .container .mini-cart>a {
			color: #3e4a59;
		}

		.site-header-mobile .menu-box .menu-main-container>ul .menu-item a,
		.site-header-mobile .menu-box .rb_megamenu_item .rb_column_wrapper .widgettitle {
			color: #3e4a59;
		}

		.site-header-mobile .sub-menu-trigger:before,
		.site-header-mobile .menu-box .menu-main-container>ul .current-menu-item>a,
		.site-header-mobile .menu-box .menu-main-container>ul .current-item-parent>a {
			color: #5163dd;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.search-trigger:hover {
				color: #5163DD;
			}

			.menu-main-container.header_menu .sub-menu a:hover {
				color: #3E4A59;
			}

			.site-sticky .search-trigger:hover {
				color: #5163DD;
			}

			.top-bar-box .container>*>a:hover,
			.header_icons>.mini-cart>a:hover {
				color: #fff;
			}
		}

		/*========================================================
====================== PRIMARY COLOR =====================
========================================================*/
		h1,
		.h1,
		h2,
		.h2,
		h3,
		.h3,
		h4,
		.h4,
		h5,
		.h5,
		h6,
		.h6,
		a,
		blockquote,
		label,
		.rb_button.empty_default,
		.rb_button.empty_reversed,
		.rb-widget .search-form .label:after,
		.rb-widget.rb-recent-posts a,
		legend,
		.rb-widget .calendar_wrap table caption,
		.table-size-guide td,
		.rb-widget .custom-widget-info i,
		.rb_carousel:hover .slick-arrow,
		.search-form .label .search-field,
		.rb-widget ul li.chosen a,
		.rb_presentation_module .presentation_triggers .presentation_trigger.active,
		body.wpb-js-composer .vc_tta.vc_general.vc_tta-tabs .vc_tta-tabs-list li>a,
		.rb-widget .search-form .label .search-submit,
		.rb-widget .recentcomments span,
		.main-content-inner.has_sb .sidebar .close_sidebar,
		.comment-body .comment-meta .comment-admin,
		.blog .blog-readmore-wrap .blog-readmore.simple,
		.search .blog-readmore-wrap .blog-readmore.simple,
		.post-meta-wrapper,
		.post-meta-wrapper a,
		.main_member_info .text-information *,
		.portfolio-single-content .portfolio-content-wrapper .aside-part .label {
			color: #3E4A59;
		}

		.body-overlay,
		.table-size-guide th {
			background-color: #3E4A59;
		}

		blockquote,
		.sidebar_trigger,
		.rb_textmodule.border_on_hover:before,
		.rb-widget ul li.chosen a,
		.rb-widget ul li.chosen:after {
			border-color: #3E4A59;
		}

		/*========================================================
===================== SECONDARY COLOR ====================
========================================================*/
		ul li:before,
		body.wpb-js-composer .vc_tta.vc_general.vc_tta-o-all-clickable .vc_tta-controls-icon,
		.rb-widget .recentcomments span:before,
		.comment-body .comment-buttons a,
		.single-content-title .cancel-reply a,
		.required,
		.blog .blog-readmore-wrap .blog-readmore:after,
		.search .blog-readmore-wrap .blog-readmore:after,
		.rb_our_team_module .rb_team_member .information_wrapper .meta,
		.rb_our_team_module .rb_team_member .information_wrapper .phone,
		.rb_our_team_module .rb_team_member .information_wrapper .email,
		.rb_footer_template a,
		.site-footer a,
		.price,
		.price ins,
		.sub-menu-trigger:before,
		.site-header-mobile .menu-box .current-menu-item>a,
		.site-header-mobile .menu-box .current-item-parent>a {
			color: #5163dd;
		}

		.rb-widget caption:before,
		.rb-widget .widget-title:before,
		.upsells.products>h2:before,
		.upsells.products>h2:after,
		.related.products>h2:before,
		.related.products>h2:after,
		.single-content-title:before,
		.single-content-title:after,
		.menu-main-container.header_menu>ul>.menu-item>a:before,
		body.wpb-js-composer .vc_tta.vc_general.vc_tta-o-all-clickable .vc_tta-panel.vc_active,
		body.wpb-js-composer div[data-vc-action="collapse"] .vc_tta.vc_general .vc_tta-panel.vc_active .vc_tta-panel-heading,
		.blog.layout_small .post-author:before,
		.portfolio-single-content .social-share:before,
		.rb_portfolio_module .rb_portfolio_items .rb_portfolio_item .text_info .h5:after,
		.header_icons .mini-cart .woo_mini-count>span,
		.rb-widget .price_slider_wrapper .price_slider .ui-slider-handle,
		.rb-widget .price_slider_wrapper .price_slider .ui-slider-range,
		ul .menu-item-object-rb-megamenu .sub-menu .rb_megamenu_item .widgettitle:before,
		.rb-widget.rb-about .name:before,
		.post-meta-wrapper:before,
		.post-password-form input[type='submit'],
		.main_member_info:before {
			background-color: #5163dd;
		}

		.rb_icon_preloader:after,
		.rb-widget .search-form .label input,
		body.wpb-js-composer .vc_tta.vc_general .vc_tta-panel,
		.slick-dots li.slick-active button,
		.woocommerce.single .content-area .site-main>.type-product .woocommerce-tabs .tabs li.active a,
		.post-password-form input[type='submit'] {
			border-color: #5163dd;
		}

		.rb_icon_preloader:after {
			border-color: #5163dd transparent #5163dd transparent;
		}

		/*========================================================
================= LINK/QUOTE POSTS COLOR =================
========================================================*/
		.search .post.format-quote .post-media .media-alternate,
		.archive .post.format-quote .post-media .media-alternate,
		.blog .post.format-quote .post-media .media-alternate {
			background: -webkit-linear-gradient(-10deg, #000, #000);
			background: linear-gradient(-10deg, #000, #000);
		}

		.search .post.format-link .post-media .media-alternate,
		.archive .post.format-link .post-media .media-alternate,
		.blog .post.format-link .post-media .media-alternate {
			background: -webkit-linear-gradient(-10deg, #000, #000);
			background: linear-gradient(-10deg, #000, #000);
		}

		/*========================================================
====================== BUTTONS COLOR =====================
========================================================*/
		.rb_button.simple {
			color: #3E4A59;
		}

		.rb_button.simple:after {
			color: #5163dd;
		}

		.rb_button,
		a.showcoupon,
		.next.page-numbers,
		.prev.page-numbers,
		.comment-form .submit,
		.added_to_cart,
		.woo_mini_cart .button,
		.woocommerce .button,
		.rb_woo_modal_content .button {
			background-color: #5163dd;
			border-color: #6c8fdd;
		}

		div.wpforms-container-full.wpforms-container .wpforms-form button[type=submit] {
			background-color: #5163dd !important;
			border-color: #6c8fdd !important;
		}

		/*========================================================
===================== BACKGROUND COLOR ====================
========================================================*/
		.toggle-content .hidden,
		.site-content,
		.rb_rev_slider,
		.before_footer_shortcode {
			background-color: #fff;
		}

		/*========================================================
==================== ONLY DESKTOP COLORS =================
========================================================*/
		@media screen and (min-width: 1367px),
		/*Disable this styles for iPad Pro 1024-1366*/
		screen and (min-width: 1200px) and (any-hover: hover),
		/*Check, is device a desktop (Not working on IE & FireFox)*/
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		/*Check, is device a desktop with firefox*/
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		/*Check, is device a desktop with IE 10 or above*/
		screen and (min-width: 1200px) and (-ms-high-contrast: active)

		/*Check, is device a desktop with IE 10 or below*/
			{

			/*==================== PRIMARY COLOR ===================*/
			.rb_button.empty_default:hover,
			.rb_button.empty_reversed:hover,
			.post-nav-link a:hover,
			.menu-main-container.header_menu>ul .sub-menu li a:hover,
			.menu-main-container.header_menu>ul .sub-menu li a.active,
			aside a:hover,
			.rb_custom_carousel .slick-arrow:hover,
			.rb_footer_template a:hover,
			.site-footer a:hover,
			.rb_presentation_module .presentation_triggers .presentation_trigger:hover,
			.portfolio-single-content .portfolio-content-wrapper .aside-part a:hover,
			.post-password-form input[type='submit']:hover {
				color: #3E4A59;
			}

			.wp-block-ugb-image-box.rb_image_1 .ugb-image-box__item:hover .ugb-image-box__content,
			.rb-widget.filter_size ul li a:hover {
				border-color: #3E4A59;
			}

			/*=================== SECONDARY COLOR ==================*/
			.rb-widget .search-form .label .search-submit:hover,
			.rb-widget.widget_archive ul li:hover>a,
			.rb-widget.widget_categories ul li:hover>a,
			.rb-widget.widget_meta ul li:hover>a,
			.rb-widget.widget_pages ul li:hover>a,
			.rb-widget.widget_nav_menu ul li:hover>a {
				color: #5163dd;
			}

			.rb-widget.widget_archive ul li:hover:before,
			.rb-widget.widget_categories ul li:hover:before,
			.rb-widget.widget_meta ul li:hover:before,
			.rb-widget.widget_pages ul li:hover:before,
			.rb-widget.widget_nav_menu ul li:hover:before,
			.rb-widget .tagcloud a:hover {
				background-color: #5163dd;
			}

			/*========================================================
====================== BUTTONS COLOR =====================
========================================================*/
			.rb_button:hover,
			a.showcoupon:hover,
			.next.page-numbers:hover,
			.prev.page-numbers:hover,
			.comment-form .submit:hover,
			.added_to_cart:hover,
			.woo_mini_cart .button:hover,
			.woocommerce .button:hover,
			.rb_woo_modal_content .button:hover {
				color: #3E4A59;
			}

			div.wpforms-container-full.wpforms-container .wpforms-form button[type=submit]:hover {
				color: #3E4A59 !important;
			}

			div.wpforms-container-full.wpforms-container .wpforms-form button[type=submit]:hover {
				border-color: #5163dd;
			}

			/*=================== BACKGROUND COLOR =================*/

		}

		/*========================================================
==================== ONLY TABLETS COLORS =================
========================================================*/
		@media screen and (max-width: 1199px),
		/*Check, is device a tablet*/
		screen and (max-width: 1366px) and (any-hover: none)

		/*Enable this styles for iPad Pro 1024-1366*/
			{}

		#rs-demo-id {}
	</style>
	<style id='woocommerce-inline-inline-css' type='text/css'>
		.woocommerce form .form-row .required {
			visibility: visible;
		}
	</style>
	<script type='text/javascript' src='wp-includes/js/jquery/jquery.js'></script>
	<script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.min.js'></script>
	<script type='text/javascript' src='wp-content/plugins/rb-svg-icons/rbsvgi_f.js'></script>
	<script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/revolution.tools.min.js'></script>
	<script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/rs6.min.js'></script>
	<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js'></script>
	<!-- <script type='text/javascript'>
		/* <![CDATA[ */
		var wc_add_to_cart_params = {
			"ajax_url": "\/wp-admin\/admin-ajax.php",
			"wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
			"i18n_view_cart": "View cart",
			"cart_url": "https:\/\/seoes.rainbow-themes.net\/cart\/",
			"is_cart": "1",
			"cart_redirect_after_add": "no"
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js'></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var wpgmza_google_api_status = {
			"message": "Enqueued",
			"code": "ENQUEUED"
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='wp-content/plugins/wp-google-maps/wpgmza_data.js'></script>
	<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js'></script> -->
	<script type="text/javascript">
		var rb_ajaxurl = "wp-admin/admin-ajax.php";
	</script>
	<script type="text/javascript">
		var rb_ajaxurl = "wp-admin/admin-ajax.php";
	</script> <noscript>
		<style>
			.woocommerce-product-gallery {
				opacity: 1 !important;
			}
		</style>
	</noscript>
	<meta name='robots' content='noindex,nofollow' />
	<style type="text/css">
		.recentcomments a {
			display: inline !important;
			padding: 0 !important;
			margin: 0 !important;
		}
	</style>
	<link rel="icon" href="wp-content/uploads/2013/06/cropped-favicon-32x32.png" sizes="32x32" />
	<link rel="icon" href="wp-content/uploads/2013/06/cropped-favicon-192x192.png" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="wp-content/uploads/2013/06/cropped-favicon-180x180.png" />
	<meta name="msapplication-TileImage" content="wp-content/uploads/2013/06/cropped-favicon-270x270.png" />
	<script type="text/javascript">
		function setREVStartSize(t) {
			try {
				var h, e = document.getElementById(t.c).parentNode.offsetWidth;
				if (e = 0 === e || isNaN(e) ? window.innerWidth : e, t.tabw = void 0 === t.tabw ? 0 : parseInt(t.tabw), t.thumbw = void 0 === t.thumbw ? 0 : parseInt(t.thumbw), t.tabh = void 0 === t.tabh ? 0 : parseInt(t.tabh), t.thumbh = void 0 === t.thumbh ? 0 : parseInt(t.thumbh), t.tabhide = void 0 === t.tabhide ? 0 : parseInt(t.tabhide), t.thumbhide = void 0 === t.thumbhide ? 0 : parseInt(t.thumbhide), t.mh = void 0 === t.mh || "" == t.mh || "auto" === t.mh ? 0 : parseInt(t.mh, 0), "fullscreen" === t.layout || "fullscreen" === t.l) h = Math.max(t.mh, window.innerHeight);
				else {
					for (var i in t.gw = Array.isArray(t.gw) ? t.gw : [t.gw], t.rl) void 0 !== t.gw[i] && 0 !== t.gw[i] || (t.gw[i] = t.gw[i - 1]);
					for (var i in t.gh = void 0 === t.el || "" === t.el || Array.isArray(t.el) && 0 == t.el.length ? t.gh : t.el, t.gh = Array.isArray(t.gh) ? t.gh : [t.gh], t.rl) void 0 !== t.gh[i] && 0 !== t.gh[i] || (t.gh[i] = t.gh[i - 1]);
					var r, a = new Array(t.rl.length),
						n = 0;
					for (var i in t.tabw = t.tabhide >= e ? 0 : t.tabw, t.thumbw = t.thumbhide >= e ? 0 : t.thumbw, t.tabh = t.tabhide >= e ? 0 : t.tabh, t.thumbh = t.thumbhide >= e ? 0 : t.thumbh, t.rl) a[i] = t.rl[i] < window.innerWidth ? 0 : t.rl[i];
					for (var i in r = a[0], a) r > a[i] && 0 < a[i] && (r = a[i], n = i);
					var d = e > t.gw[n] + t.tabw + t.thumbw ? 1 : (e - (t.tabw + t.thumbw)) / t.gw[n];
					h = t.gh[n] * d + (t.tabh + t.thumbh)
				}
				void 0 === window.rs_init_css && (window.rs_init_css = document.head.appendChild(document.createElement("style"))), document.getElementById(t.c).height = h, window.rs_init_css.innerHTML += "#" + t.c + "_wrapper { height: " + h + "px }"
			} catch (t) {
				console.log("Failure at Presize of Slider:" + t)
			}
		};
	</script>
	<style type="text/css" id="wp-custom-css">
		.page-id-1074 .featured-image img,
		.page-id-1064 .featured-image img {
			max-height: 490px;
		}
	</style>
	<noscript>
		<style>
			.wpb_animate_when_almost_visible {
				opacity: 1;
			}
		</style>
	</noscript>
</head>

<body class="page-template-default page page-id-2134 theme-seoes woocommerce-cart woocommerce-page woocommerce-no-js wpb-js-composer js-comp-ver-6.0.5 vc_responsive" data-boxed="false" data-default="false" itemscope="itemscope" itemtype="http://schema.org/WebPage">


	<!-- Start Search Form -->
	<!-- <div class="site-search hidden">
		<div class="container">
			<div class="search-title">Search for anything.</div>
			<i class="close-search"></i>
			<form role="search" method="get" class="search-form" action="index.php">

				<h3 class='success-search'>Your search for: &quot;&quot; revealed the following:</h3>

				<div class="label">
					<span class="screen-reader-text">Search...</span>
					<input type="search" class="search-field" value="" name="s" placeholder="Search..." />
					<button type="submit" class="search-submit">
						<span class='page-submit'>SEARCH</span>
					</button>
				</div>
			</form>
		</div>
	</div> -->
	<div class="rb-blank-preloader"></div>
	<div class="body-overlay"></div>


	<div id="site" class="site wrap desktop-menu-desktop">

		<div class='rb_sticky_template'>
			<div class='container'>
				<div id="rb_content_5de2283e167a2" class="rb_content_5de2283e167a2 rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1562326619547 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de2283e16c69' class='rb_column_wrapper vc_col-sm-3 '>
							<div class="wpb_column vc_column_container vc_col-sm-2">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_logo_5de2283e16f64' class='site_logotype'><a href='index.php'><img src='wp-content/uploads/2019/06/logo@2x.png' alt='some-alt' style='width:125px;'></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de2283e17002' class='rb_column_wrapper vc_col-sm-8 '>
							<div class="wpb_column vc_column_container vc_col-sm-7">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_menu_5de2283e171ba' class='menu-main-container header_menu rb_menu_module'>
											<!-- <ul id="menu-main" class="menu main-menu">
												<li id="menu-item-3078" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-3078"><a href="index.php">Home</a>
													<ul class="sub-menu">
														<li id="menu-item-3079" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-3079"><a href="index.php">SEO Agency</a></li>
														<li id="menu-item-3080" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3080"><a href="marketing-agency.php">Marketing Agency</a></li>
														<li id="menu-item-3081" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3081"><a href="seo-consultant.php">SEO Consultant</a></li>
														<li id="menu-item-3082" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3082"><a href="startup-agency.php">StartUp Agency</a></li>
														<li id="menu-item-3083" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3083"><a href="app-landing.php">App Landing</a></li>
														<li id="menu-item-3084" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3084"><a href="web-design-agency.php">Web Design Agency</a></li>
														<li id="menu-item-3085" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3085"><a href="creative-agency.php">Creative Agency</a></li>
														<li id="menu-item-3134" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3134"><a href="landing.php">Landing</a></li>
													</ul>
												</li>
												<li id="menu-item-3106" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3106"><a href="about-us.php">Pages</a>
													<ul class="sub-menu">
														<li id="menu-item-3135" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3135"><a href="seo-services.php">SEO Services</a></li>
														<li id="menu-item-3255" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3255"><a href="ppm-services.php">PPM Services</a></li>
														<li id="menu-item-3137" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3137"><a href="digital-marketing.php">Digital Marketing</a></li>
														<li id="menu-item-3087" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3087"><a href="about-us.php">About us</a></li>
														<li id="menu-item-3107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3107"><a href="our-story.php">Our Story</a></li>
														<li id="menu-item-3108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3108"><a href="our-team.php">Our Team</a></li>
														<li id="menu-item-3086" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3086"><a href="content-elements.php">Content Elements</a></li>
														<li id="menu-item-3105" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3105"><a href="pricing-tables.php">Pricing Tables</a></li>
													</ul>
												</li>
												<li id="menu-item-4407" class="menu-item menu-item-type-post_type menu-item-object-rb-megamenu menu-item-4407"><a href="rb-megamenu/portfolio/">Portfolio</a>
													<ul class="sub-menu">
														<li class='rb_megamenu_item' data-width='content_width' data-position='center'>
															<div id="rb_content_5de2283e18d89" class="rb_content_5de2283e18d89 rb-content background_no_hover">
																<div class="vc_row wpb_row vc_row-fluid vc_custom_1561704612827 vc_row-o-equal-height vc_row-o-content-top vc_row-flex">
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de2283e18f13' class='rb_column_wrapper vc_col-sm-3 '>
																		<div class="wpb_column vc_column_container vc_col-sm-3">
																			<div class="vc_column-inner">
																				<div class="wpb_wrapper">
																					<div class="vc_wp_custommenu wpb_content_element">
																						<div class="widget widget_nav_menu">
																							<h2 class="widgettitle">Portfolio Types</h2>
																							<div class="menu-portfolio-types-container">
																								<ul id="menu-portfolio-types" class="menu">
																									<li id="menu-item-3125" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3125"><a href="portfolio-asymetric.php">Asymetric</a></li>
																									<li id="menu-item-3128" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3128"><a href="portfolio-motion-category.php">Motion Category</a></li>
																									<li id="menu-item-3126" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3126"><a href="portfolio-slider.php">Slider</a></li>
																									<li id="menu-item-3127" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3127"><a href="portfolio-slider-wide.php">Slider Wide</a></li>
																									<li id="menu-item-3123" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3123"><a href="portfolio-masonry.php">Masonry</a></li>
																									<li id="menu-item-3124" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3124"><a href="portfolio-masonry-no-space.php">Masonry No Space</a></li>
																									<li id="menu-item-3129" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3129"><a href="portfolio-pinterest.php">Pinterest</a></li>
																									<li id="menu-item-3121" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3121"><a href="portfolio-gallery.php">Gallery</a></li>
																									<li id="menu-item-3120" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3120"><a href="portfolio-gallery-no-space.php">Gallery No Space</a></li>
																									<li id="menu-item-3122" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3122"><a href="portfolio-standard.php">Standard</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de2283e19d36' class='rb_column_wrapper vc_col-sm-3 '>
																		<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
																			<div class="vc_column-inner vc_custom_1562058808598">
																				<div class="wpb_wrapper">
																					<div class="vc_wp_custommenu wpb_content_element">
																						<div class="widget widget_nav_menu">
																							<h2 class="widgettitle">Portfolio Layouts</h2>
																							<div class="menu-portfolio-layouts-container">
																								<ul id="menu-portfolio-layouts" class="menu">
																									<li id="menu-item-3113" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3113"><a href="portfolio-two-columns.php">Two Columns</a></li>
																									<li id="menu-item-3114" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3114"><a href="three-columns-2.php">Three Columns</a></li>
																									<li id="menu-item-3115" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3115"><a href="portfolio-three-columns-wide.php">Three Columns Wide</a></li>
																									<li id="menu-item-3116" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3116"><a href="four-columns-2.php">Four Columns</a></li>
																									<li id="menu-item-3117" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3117"><a href="portfolio-four-columns-wide.php">Four Columns Wide</a></li>
																									<li id="menu-item-3118" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3118"><a href="portfolio-five-columns-wide.php">Five Columns Wide</a></li>
																									<li id="menu-item-3119" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3119"><a href="portfolio-six-columns-wide.php">Six Columns Wide</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de2283e1a7ef' class='rb_column_wrapper vc_col-sm-3 '>
																		<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
																			<div class="vc_column-inner vc_custom_1562058801976">
																				<div class="wpb_wrapper">
																					<div class="vc_wp_custommenu wpb_content_element">
																						<div class="widget widget_nav_menu">
																							<h2 class="widgettitle">Portfolio Hover</h2>
																							<div class="menu-portfolio-hover-container">
																								<ul id="menu-portfolio-hover" class="menu">
																									<li id="menu-item-3109" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3109"><a href="portfolio-overlay.php">Overlay</a></li>
																									<li id="menu-item-3110" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3110"><a href="portfolio-slide-from-bottom.php">Slide From Bottom</a></li>
																									<li id="menu-item-3112" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3112"><a href="portfolio-slide-from-left.php">Slide From Left</a></li>
																									<li id="menu-item-3111" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3111"><a href="portfolio-swipe-right.php">Swipe Right</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de2283e1b06b' class='rb_column_wrapper vc_col-sm-3 '>
																		<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
																			<div class="vc_column-inner vc_custom_1562058796768">
																				<div class="wpb_wrapper">
																					<div class="vc_wp_custommenu wpb_content_element">
																						<div class="widget widget_nav_menu">
																							<h2 class="widgettitle">Portfolio Single</h2>
																							<div class="menu-portfolio-single-container">
																								<ul id="menu-portfolio-single" class="menu">
																									<li id="menu-item-3073" class="menu-item menu-item-type-post_type menu-item-object-rb_portfolio menu-item-3073"><a href="portfolio-small-images.php">Small Images</a></li>
																									<li id="menu-item-3075" class="menu-item menu-item-type-post_type menu-item-object-rb_portfolio menu-item-3075"><a href="portfolio-small-slider.php">Small Slider</a></li>
																									<li id="menu-item-3070" class="menu-item menu-item-type-post_type menu-item-object-rb_portfolio menu-item-3070"><a href="portfolio-large-images.php">Large Images</a></li>
																									<li id="menu-item-3072" class="menu-item menu-item-type-post_type menu-item-object-rb_portfolio menu-item-3072"><a href="portfolio-large-slider.php">Large Slider</a></li>
																									<li id="menu-item-3069" class="menu-item menu-item-type-post_type menu-item-object-rb_portfolio menu-item-3069"><a href="portfolio-gallery_2.php">Gallery</a></li>
																									<li id="menu-item-3074" class="menu-item menu-item-type-post_type menu-item-object-rb_portfolio menu-item-3074"><a href="portfolio-small-masonry.php">Small Masonry</a></li>
																									<li id="menu-item-3071" class="menu-item menu-item-type-post_type menu-item-object-rb_portfolio menu-item-3071"><a href="portfolio-large-images-2.php">Large Masonry</a></li>
																									<li id="menu-item-3068" class="menu-item menu-item-type-post_type menu-item-object-rb_portfolio menu-item-3068"><a href="portfolio-custom-layout.php">Custom Layout</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li id="menu-item-4406" class="menu-item menu-item-type-post_type menu-item-object-rb-megamenu menu-item-4406"><a href="rb-megamenu/blog/">Blog</a>
													<ul class="sub-menu">
														<li class='rb_megamenu_item' data-width='content_width' data-position='center'>
															<div id="rb_content_5de2283e1bd97" class="rb_content_5de2283e1bd97 rb-content background_no_hover">
																<div class="vc_row wpb_row vc_row-fluid vc_custom_1561712578812 vc_row-o-equal-height vc_row-flex">
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de2283e1bed1' class='rb_column_wrapper vc_col-sm-4 '>
																		<div class="wpb_column vc_column_container vc_col-sm-4">
																			<div class="vc_column-inner">
																				<div class="wpb_wrapper">
																					<div class="vc_wp_custommenu wpb_content_element">
																						<div class="widget widget_nav_menu">
																							<h2 class="widgettitle">BLOG</h2>
																							<div class="menu-blog-container">
																								<ul id="menu-blog" class="menu">
																									<li id="menu-item-3089" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3089"><a href="checkerboard.php">Checkerboard</a></li>
																									<li id="menu-item-3090" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3090"><a href="masonry.php">Masonry</a></li>
																									<li id="menu-item-3092" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3092"><a href="four-col-full-width.php">Four Col Full Width</a></li>
																									<li id="menu-item-3091" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3091"><a href="three-columns.php">Three Columns</a></li>
																									<li id="menu-item-3093" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3093"><a href="three-col-full-width.php">Three Col Full Width</a></li>
																									<li id="menu-item-3094" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3094"><a href="two-columns.php">Two Columns</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de2283e1c8b0' class='rb_column_wrapper vc_col-sm-4 '>
																		<div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
																			<div class="vc_column-inner vc_custom_1561705174376">
																				<div class="wpb_wrapper">
																					<div class="vc_wp_custommenu wpb_content_element">
																						<div class="widget widget_nav_menu">
																							<h2 class="widgettitle">STANDARD</h2>
																							<div class="menu-standard-container">
																								<ul id="menu-standard" class="menu">
																									<li id="menu-item-3095" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3095"><a href="large-images.php">Large Images</a></li>
																									<li id="menu-item-3096" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3096"><a href="medium-images.php">Small Images</a></li>
																									<li id="menu-item-3097" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3097"><a href="left-sidebar.php">Left Sidebar</a></li>
																									<li id="menu-item-3098" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3098"><a href="right-sidebar.php">Right Sidebar</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de2283e1d113' class='rb_column_wrapper vc_col-sm-4 '>
																		<div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
																			<div class="vc_column-inner vc_custom_1561705188454">
																				<div class="wpb_wrapper">
																					<div class="vc_wp_custommenu wpb_content_element">
																						<div class="widget widget_nav_menu">
																							<h2 class="widgettitle">POST TYPES</h2>
																							<div class="menu-post-types-container">
																								<ul id="menu-post-types" class="menu">
																									<li id="menu-item-3104" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3104"><a href="audio.php">Audio</a></li>
																									<li id="menu-item-3103" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3103"><a href="gallery.php">Gallery</a></li>
																									<li id="menu-item-3102" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3102"><a href="link.php">Link</a></li>
																									<li id="menu-item-3101" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3101"><a href="quote.php">Quote</a></li>
																									<li id="menu-item-3100" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3100"><a href="image.php">Image</a></li>
																									<li id="menu-item-3099" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3099"><a href="video.php">Video</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li id="menu-item-3132" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-3132"><a href="shop/page/1/shop.php">Shop</a>
													<ul class="sub-menu">
														<li id="menu-item-3133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3133"><a href="shop/page/1/shop.php">Shop</a></li>
														<li id="menu-item-3131" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2134 current_page_item menu-item-3131"><a href="cart.php" aria-current="page">Cart</a></li>
														<li id="menu-item-3130" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3130"><a href="checkout/">Checkout</a></li>
														<li id="menu-item-3138" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3138"><a href="shortcodes.php">Shortcodes</a></li>
													</ul>
												</li>
												<li id="menu-item-3088" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3088"><a href="contacts.php">Contacts</a></li>
											</ul> -->
											<?php include 'Business/Navigation.php' ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row_hover_effect"></div>
						<div id="rb_column_5de2257c9f2a7" class="rb_column_wrapper vc_col-sm-1 ">
							<?php if (isset($_SESSION["userid"])) { ?>
								<div class="wpb_column vc_column_container vc_col-sm-2">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div id="rb_inner_row_5de2257c9f43f" class="rb_inner_row_wrapper">
												<div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex">
													<!-- <div id="rb_column_5de2257c9f569" class="rb_column_wrapper vc_col-sm-4 ">
														<div class="wpb_column vc_column_container vc_col-sm-4">
															<div class="vc_column-inner vc_custom_1561722795510">
																<div class="wpb_wrapper">
																	<div id="rb_search_5de2257c9f660" class="rb_search_module">
																		<i class="flaticon-user" style="color:black;"></i>
																	</div>
																</div>
															</div>
														</div>
													</div> -->
													<div id="rb_column_5de2257c9f6df" class="rb_column_wrapper vc_col-sm-12 ">
														<div class="wpb_column vc_column_container vc_col-sm-12">
															<div class="vc_column-inner">
																<div class="wpb_wrapper">
																	<div id="rb_icon_list_5de2257c9f83a" class="rb_icon_list_module header_icons direction_column">
																		<div class="mini-cart sidebar-view ">
																			<a href="cart.php" class="mini_cart_trigger">
																				<i class="woo_mini-count" style="color:black;">
																				<?php 
																					include_once('business/DB.php');
																					$sql = "SELECT *,(select Service_Name from services where Service_ID=Cart.Service_ID) as 'Service_Name', (select Service_Price from services where Service_ID=Cart.Service_ID) as 'Service_Price', (Select Category_Name from category where Category_ID = (SELECT Category_ID FROM `services` WHERE Service_ID=Cart.Service_ID)) as 'Category_Name' FROM `cart` where User_ID='" . $_SESSION["userid"] . "'";
																					$result = $conn->query($sql);

																					echo '<span>'.$result->num_rows.'</span>';
																				?>
																				</i>
																			</a>
																			<!-- <div class="woo_mini_cart">MY BAG (<div class="woo_items_count">0</div>)<i class="close_mini_cart"></i>
																			<p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
																		</div> -->
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php } else { ?>
								<div class="wpb_column vc_column_container vc_col-sm-2">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div id="rb_inner_row_5dfc576525fe2" class="rb_inner_row_wrapper">
												<div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex">
													<div id="rb_column_5dfc576526244" class="rb_column_wrapper vc_col-sm-12 ">
														<div class="wpb_column vc_column_container vc_col-sm-12">
															<div class="vc_column-inner">
																<div class="wpb_wrapper">
																	<div id="rb_button_wrapper_5dfc576526357" class="rb_button_wrapper "><a id="rb_button_5dfc57652638e" class="rb_button advanced  medium no_shadow" href="login.php">Login</a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="vc_row-full-width vc_clearfix"></div>
				</div>
			</div>
		</div>
		<!-- #site-sticky-mobile -->
		<div id="site-sticky-mobile" class="site-sticky sticky-mobile ">
			<div class="container">
				<a class="site_logotype" href="index.php">
					<img src='wp-content/uploads/2019/06/logo@2x.png' alt='some-alt' width='111' /> </a>
				<div class="header_icons">
					<?php if (isset($_SESSION["userid"])) { ?>
					<div class="mini-cart sidebar-view ">
						<a href="cart.php" class="mini_cart_trigger">
						<?php 
							include_once('business/DB.php');
							$sql = "SELECT *,(select Service_Name from services where Service_ID=Cart.Service_ID) as 'Service_Name', (select Service_Price from services where Service_ID=Cart.Service_ID) as 'Service_Price', (Select Category_Name from category where Category_ID = (SELECT Category_ID FROM `services` WHERE Service_ID=Cart.Service_ID)) as 'Category_Name' FROM `cart` where User_ID='" . $_SESSION["userid"] . "'";
							$result = $conn->query($sql);

							echo '<i class="woo_mini-count"><span>'.$result->num_rows.'</span></i>';
						?>
						</a>
					</div>
					<?php } ?>
					<div class="menu-trigger">
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div>
			</div>
		</div>
		<!-- \#site-sticky-mobile -->
		<div class='rb_header_template'>
			<div class='container'>
				<!-- <div id="rb_content_5de2283e1ed05" class="rb_content_5de2283e1ed05 rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571319827010 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de2283e1ee8d' class='rb_column_wrapper vc_col-sm-6 '>
							<div class="wpb_column vc_column_container vc_col-sm-6">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_icon_list_5de2283e1f008' class='rb_icon_list_module header_icons direction_line'><a href='tel:+305111222333%20' class='custom_url'><i class='flaticon-telephone-auricular-with-cable'></i><span class='title'>+(305) 111-222-333 </span></a><a href='mailto:info@seotechstore.com' class='custom_url'><i class='flaticon-email'></i><span class='title'>info@seotechstore.com</span></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de2283e1f186' class='rb_column_wrapper vc_col-sm-6 '>
							<div class="wpb_column vc_column_container vc_col-sm-6">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_icon_list_5de2283e1f2b9' class='rb_icon_list_module header_icons direction_line align_right'><a href='https://facebook.com' class='custom_url'><i class='flaticon-facebook'></i><span class='title'></span></a><a href='https://twitter.com' class='custom_url'><i class='flaticon-twitter-letter-logo'></i><span class='title'></span></a><a href='https://youtube.com' class='custom_url'><i class='flaticon-youtube'></i><span class='title'></span></a><a href='https://linkedin.com' class='custom_url'><i class='flaticon-linkedin'></i><span class='title'></span></a>
											<div class="mini-cart sidebar-view ">
												<a href="cart.php" class="mini_cart_trigger">
													<i class='woo_mini-count'>
														<span>0</span> </i>
												</a>
												<div class='woo_mini_cart'>MY BAG (<div class='woo_items_count'>0</div>)<i class='close_mini_cart'></i>

													<p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>


												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="vc_row-full-width vc_clearfix"></div>
				</div> -->
				<div id="rb_content_5de2283e1f5eb" class="rb_content_5de2283e1f5eb rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571720915789 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de2283e1f78b' class='rb_column_wrapper vc_col-sm-3 '>
							<div class="wpb_column vc_column_container vc_col-sm-2">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_logo_5de2283e1f978' class='site_logotype'><a href='index.php'><img src='wp-content/uploads/2019/06/logo@2x.png' alt='some-alt' style='width:187px;'></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de2283e1fa13' class='rb_column_wrapper vc_col-sm-8 '>
							<div class="wpb_column vc_column_container vc_col-sm-7">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_menu_5de2283e1fb8c' class='menu-main-container header_menu rb_menu_module'>
											<!-- <ul id="menu-main-1" class="menu main-menu">
												<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-has-children menu-item-3078"><a href="index.php">Home</a>
													<ul class="sub-menu">
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-3079"><a href="index.php">SEO Agency</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3080"><a href="marketing-agency.php">Marketing Agency</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3081"><a href="seo-consultant.php">SEO Consultant</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3082"><a href="startup-agency.php">StartUp Agency</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3083"><a href="app-landing.php">App Landing</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3084"><a href="web-design-agency.php">Web Design Agency</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3085"><a href="creative-agency.php">Creative Agency</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3134"><a href="landing.php">Landing</a></li>
													</ul>
												</li>
												<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3106"><a href="about-us.php">Pages</a>
													<ul class="sub-menu">
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3135"><a href="seo-services.php">SEO Services</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3255"><a href="ppm-services.php">PPM Services</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3137"><a href="digital-marketing.php">Digital Marketing</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3087"><a href="about-us.php">About us</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3107"><a href="our-story.php">Our Story</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3108"><a href="our-team.php">Our Team</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3086"><a href="content-elements.php">Content Elements</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3105"><a href="pricing-tables.php">Pricing Tables</a></li>
													</ul>
												</li>
												<li class="menu-item menu-item-type-post_type menu-item-object-rb-megamenu menu-item-4407"><a href="rb-megamenu/portfolio/">Portfolio</a>
													<ul class="sub-menu">
														<li class='rb_megamenu_item' data-width='content_width' data-position='center'>
															<div id="rb_content_5de2283e20ec8" class="rb_content_5de2283e20ec8 rb-content background_no_hover">
																<div class="vc_row wpb_row vc_row-fluid vc_custom_1561704612827 vc_row-o-equal-height vc_row-o-content-top vc_row-flex">
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de2283e21014' class='rb_column_wrapper vc_col-sm-3 '>
																		<div class="wpb_column vc_column_container vc_col-sm-3">
																			<div class="vc_column-inner">
																				<div class="wpb_wrapper">
																					<div class="vc_wp_custommenu wpb_content_element">
																						<div class="widget widget_nav_menu">
																							<h2 class="widgettitle">Portfolio Types</h2>
																							<div class="menu-portfolio-types-container">
																								<ul id="menu-portfolio-types-1" class="menu">
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3125"><a href="portfolio-asymetric.php">Asymetric</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3128"><a href="portfolio-motion-category.php">Motion Category</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3126"><a href="portfolio-slider.php">Slider</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3127"><a href="portfolio-slider-wide.php">Slider Wide</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3123"><a href="portfolio-masonry.php">Masonry</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3124"><a href="portfolio-masonry-no-space.php">Masonry No Space</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3129"><a href="portfolio-pinterest.php">Pinterest</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3121"><a href="portfolio-gallery.php">Gallery</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3120"><a href="portfolio-gallery-no-space.php">Gallery No Space</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3122"><a href="portfolio-standard.php">Standard</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de2283e21aa8' class='rb_column_wrapper vc_col-sm-3 '>
																		<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
																			<div class="vc_column-inner vc_custom_1562058808598">
																				<div class="wpb_wrapper">
																					<div class="vc_wp_custommenu wpb_content_element">
																						<div class="widget widget_nav_menu">
																							<h2 class="widgettitle">Portfolio Layouts</h2>
																							<div class="menu-portfolio-layouts-container">
																								<ul id="menu-portfolio-layouts-1" class="menu">
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3113"><a href="portfolio-two-columns.php">Two Columns</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3114"><a href="three-columns-2.php">Three Columns</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3115"><a href="portfolio-three-columns-wide.php">Three Columns Wide</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3116"><a href="four-columns-2.php">Four Columns</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3117"><a href="portfolio-four-columns-wide.php">Four Columns Wide</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3118"><a href="portfolio-five-columns-wide.php">Five Columns Wide</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3119"><a href="portfolio-six-columns-wide.php">Six Columns Wide</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de2283e225b1' class='rb_column_wrapper vc_col-sm-3 '>
																		<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
																			<div class="vc_column-inner vc_custom_1562058801976">
																				<div class="wpb_wrapper">
																					<div class="vc_wp_custommenu wpb_content_element">
																						<div class="widget widget_nav_menu">
																							<h2 class="widgettitle">Portfolio Hover</h2>
																							<div class="menu-portfolio-hover-container">
																								<ul id="menu-portfolio-hover-1" class="menu">
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3109"><a href="portfolio-overlay.php">Overlay</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3110"><a href="portfolio-slide-from-bottom.php">Slide From Bottom</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3112"><a href="portfolio-slide-from-left.php">Slide From Left</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3111"><a href="portfolio-swipe-right.php">Swipe Right</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de2283e22e87' class='rb_column_wrapper vc_col-sm-3 '>
																		<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-has-fill">
																			<div class="vc_column-inner vc_custom_1562058796768">
																				<div class="wpb_wrapper">
																					<div class="vc_wp_custommenu wpb_content_element">
																						<div class="widget widget_nav_menu">
																							<h2 class="widgettitle">Portfolio Single</h2>
																							<div class="menu-portfolio-single-container">
																								<ul id="menu-portfolio-single-1" class="menu">
																									<li class="menu-item menu-item-type-post_type menu-item-object-rb_portfolio menu-item-3073"><a href="portfolio-small-images.php">Small Images</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-rb_portfolio menu-item-3075"><a href="portfolio-small-slider.php">Small Slider</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-rb_portfolio menu-item-3070"><a href="portfolio-large-images.php">Large Images</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-rb_portfolio menu-item-3072"><a href="portfolio-large-slider.php">Large Slider</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-rb_portfolio menu-item-3069"><a href="portfolio-gallery_2.php">Gallery</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-rb_portfolio menu-item-3074"><a href="portfolio-small-masonry.php">Small Masonry</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-rb_portfolio menu-item-3071"><a href="portfolio-large-images-2.php">Large Masonry</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-rb_portfolio menu-item-3068"><a href="portfolio-custom-layout.php">Custom Layout</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li class="menu-item menu-item-type-post_type menu-item-object-rb-megamenu menu-item-4406"><a href="rb-megamenu/blog/">Blog</a>
													<ul class="sub-menu">
														<li class='rb_megamenu_item' data-width='content_width' data-position='center'>
															<div id="rb_content_5de2283e23d69" class="rb_content_5de2283e23d69 rb-content background_no_hover">
																<div class="vc_row wpb_row vc_row-fluid vc_custom_1561712578812 vc_row-o-equal-height vc_row-flex">
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de2283e23f11' class='rb_column_wrapper vc_col-sm-4 '>
																		<div class="wpb_column vc_column_container vc_col-sm-4">
																			<div class="vc_column-inner">
																				<div class="wpb_wrapper">
																					<div class="vc_wp_custommenu wpb_content_element">
																						<div class="widget widget_nav_menu">
																							<h2 class="widgettitle">BLOG</h2>
																							<div class="menu-blog-container">
																								<ul id="menu-blog-1" class="menu">
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3089"><a href="checkerboard.php">Checkerboard</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3090"><a href="masonry.php">Masonry</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3092"><a href="four-col-full-width.php">Four Col Full Width</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3091"><a href="three-columns.php">Three Columns</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3093"><a href="three-col-full-width.php">Three Col Full Width</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3094"><a href="two-columns.php">Two Columns</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de2283e24a1d' class='rb_column_wrapper vc_col-sm-4 '>
																		<div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
																			<div class="vc_column-inner vc_custom_1561705174376">
																				<div class="wpb_wrapper">
																					<div class="vc_wp_custommenu wpb_content_element">
																						<div class="widget widget_nav_menu">
																							<h2 class="widgettitle">STANDARD</h2>
																							<div class="menu-standard-container">
																								<ul id="menu-standard-1" class="menu">
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3095"><a href="large-images.php">Large Images</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3096"><a href="medium-images.php">Small Images</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3097"><a href="left-sidebar.php">Left Sidebar</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3098"><a href="right-sidebar.php">Right Sidebar</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de2283e253a3' class='rb_column_wrapper vc_col-sm-4 '>
																		<div class="wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
																			<div class="vc_column-inner vc_custom_1561705188454">
																				<div class="wpb_wrapper">
																					<div class="vc_wp_custommenu wpb_content_element">
																						<div class="widget widget_nav_menu">
																							<h2 class="widgettitle">POST TYPES</h2>
																							<div class="menu-post-types-container">
																								<ul id="menu-post-types-1" class="menu">
																									<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3104"><a href="audio.php">Audio</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3103"><a href="gallery.php">Gallery</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3102"><a href="link.php">Link</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3101"><a href="quote.php">Quote</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3100"><a href="image.php">Image</a></li>
																									<li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-3099"><a href="video.php">Video</a></li>
																								</ul>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-3132"><a href="shop/page/1/shop.php">Shop</a>
													<ul class="sub-menu">
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3133"><a href="shop/page/1/shop.php">Shop</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2134 current_page_item menu-item-3131"><a href="cart.php" aria-current="page">Cart</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3130"><a href="checkout/">Checkout</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3138"><a href="shortcodes.php">Shortcodes</a></li>
													</ul>
												</li>
												<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3088"><a href="contacts.php">Contacts</a></li>
											</ul> -->
											<?php include 'Business/Navigation.php' ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row_hover_effect"></div>
						<div id="rb_column_5de2257c9f2a7" class="rb_column_wrapper vc_col-sm-1 ">
							<?php if (isset($_SESSION["userid"])) { ?>
								<div class="wpb_column vc_column_container vc_col-sm-2">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div id="rb_inner_row_5de2257c9f43f" class="rb_inner_row_wrapper">
												<div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex">
													<!-- <div id="rb_column_5de2257c9f569" class="rb_column_wrapper vc_col-sm-4 ">
														<div class="wpb_column vc_column_container vc_col-sm-4">
															<div class="vc_column-inner vc_custom_1561722795510">
																<div class="wpb_wrapper">
																	<div id="rb_search_5de2257c9f660" class="rb_search_module">
																		<i class="flaticon-user" style="color:black;"></i>
																	</div>
																</div>
															</div>
														</div>
													</div> -->
													<div id="rb_column_5de2257c9f6df" class="rb_column_wrapper vc_col-sm-12 ">
														<div class="wpb_column vc_column_container vc_col-sm-12">
															<div class="vc_column-inner">
																<div class="wpb_wrapper">
																	<div id="rb_icon_list_5de2257c9f83a" class="rb_icon_list_module header_icons direction_column">
																		<div class="mini-cart sidebar-view ">
																			<a href="cart.php" class="mini_cart_trigger">
																				<i class="woo_mini-count" style="color:black;">
																				<?php 
																					include_once('business/DB.php');
																					$sql = "SELECT *,(select Service_Name from services where Service_ID=Cart.Service_ID) as 'Service_Name', (select Service_Price from services where Service_ID=Cart.Service_ID) as 'Service_Price', (Select Category_Name from category where Category_ID = (SELECT Category_ID FROM `services` WHERE Service_ID=Cart.Service_ID)) as 'Category_Name' FROM `cart` where User_ID='" . $_SESSION["userid"] . "'";
																					$result = $conn->query($sql);

																					echo '<span>'.$result->num_rows.'</span>';
																				?>
																				</i>
																			</a>
																			<!-- <div class="woo_mini_cart">MY BAG (<div class="woo_items_count">0</div>)<i class="close_mini_cart"></i>
																			<p class="woocommerce-mini-cart__empty-message">No products in the cart.</p>
																		</div> -->
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php } else { ?>
								<div class="wpb_column vc_column_container vc_col-sm-2">
									<div class="vc_column-inner">
										<div class="wpb_wrapper">
											<div id="rb_inner_row_5dfc576525fe2" class="rb_inner_row_wrapper">
												<div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex">
													<div id="rb_column_5dfc576526244" class="rb_column_wrapper vc_col-sm-12 ">
														<div class="wpb_column vc_column_container vc_col-sm-12">
															<div class="vc_column-inner">
																<div class="wpb_wrapper">
																	<div id="rb_button_wrapper_5dfc576526357" class="rb_button_wrapper "><a id="rb_button_5dfc57652638e" class="rb_button advanced  medium no_shadow" href="login.php">Login</a></div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
					<div class="vc_row-full-width vc_clearfix"></div>
				</div>
				<div id="rb_content_5de2283e26d42" class="rb_content_5de2283e26d42 rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de2283e26f7f' class='rb_column_wrapper vc_col-sm-12 '>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_title_area_5de2283e271ba' class='custom page_title_container  mouse_anim scroll_anim shared_bg' style=""><img data-depth='0.80' src='wp-content/uploads/2013/06/title_hexagons.png' class='page_title_dynamic_image' alt='Orders' />
											<div class='page_title_wrapper'>
												<div class="page_title_customizer_size">
													<h1 class='page_title'>Order History</h1>
												</div><span class='title_divider'></span>
												<div class="breadcrumbs">
													<div class="container">
														<nav class="bread-crumbs"><a href="index.php" property="v:title">Home</a><span class='delimiter'></span><span class="current">Order History</span></nav><!-- .breadcrumbs -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="vc_row-full-width vc_clearfix"></div>
				</div>
			</div>
		</div>
		<!-- #site-header-mobile -->
		<div id="site-header-mobile" class="site-header-mobile">
			<div class="header-content">
				<div class="top-bar-box">
					<div class="container">
						<div class="site_logotype">
							<a href="index.php">
								<img src='wp-content/uploads/2019/06/logo@2x.png' alt='some-alt' width='111' /> </a>
						</div>
						<div class="header_icons">
							<?php if (isset($_SESSION["userid"])) { ?>
							<div class="mini-cart sidebar-view ">
								<a href="cart.php" class="mini_cart_trigger">
								<?php 
									include_once('business/DB.php');
									$sql = "SELECT *,(select Service_Name from services where Service_ID=Cart.Service_ID) as 'Service_Name', (select Service_Price from services where Service_ID=Cart.Service_ID) as 'Service_Price', (Select Category_Name from category where Category_ID = (SELECT Category_ID FROM `services` WHERE Service_ID=Cart.Service_ID)) as 'Category_Name' FROM `cart` where User_ID='" . $_SESSION["userid"] . "'";
									$result = $conn->query($sql);

									echo '<i class="woo_mini-count"><span>'.$result->num_rows.'</span></i>';
								?>
								</a>
							</div>
							<?php } ?>
							<div class="menu-trigger">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
				</div>
				<div class="menu-box container">
					<div class="menu-box-logo">
						<a href="index.php">
							<img src='wp-content/uploads/2019/06/logo@2x.png' alt='some-alt' width='179' /> </a>
					</div>
					<div class="main-menu-wrapper">
						<nav class="menu-main-container">
							<?php include 'Business/Navigation.php' ?>
							<?php if (!isset($_SESSION["userid"])) { ?>
							<ul class="menu main-menu">
								<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="Login.php">Login</a></li>
								<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="Register.php">Register</a></li>
							</ul>
							<?php } ?>
						</nav>
					</div>
					<!-- <div class="menu-box-search">
						<form role="search" method="get" class="search-form" action="index.php">

							<h3 class='success-search'>Your search for: &quot;&quot; revealed the following:</h3>

							<div class="label">
								<span class="screen-reader-text">Search...</span>
								<input type="search" class="search-field" value="" name="s" placeholder="Search..." />
								<button type="submit" class="search-submit">
									<span class='page-submit'>SEARCH</span>
								</button>
							</div>
						</form>
					</div> -->
				</div>
				<div class="page_title_container masked" style="">

					<img data-depth="0.80" src="wp-content/uploads/2013/06/title_hexagons.png" class="page_title_dynamic_image" alt="Orders" />

					<div class="page_title_wrapper container">
						<div class="page_title_customizer_size">
							<h1 class="page_title">
								Order History </h1>
						</div>
						<span class="title_divider"></span>
						<div class="breadcrumbs">
							<div class="container">
								<nav class="bread-crumbs"><a href="index.php" property="v:title">Home</a><span class='delimiter'></span><span class="current">Order History</span></nav><!-- .breadcrumbs -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- \#site-header-mobile -->

		<div id="site-content" class="site-content">
			<!-- The main content -->
			<main id="main-content" class="main-content container" itemprop="mainContentOfPage">
				<div class="main-content-inner">


					<div class="main-content-inner-wrap post-type_page">
						<div class="page-content">
							<div class="woocommerce">
								<div class="woocommerce-notices-wrapper"></div>
								<?php if (isset($message) && $message !== '') { ?>
									<!-- <div class="woocommerce-message" role="alert">“Seo Fitness Workbook” removed. <a href="https://seoes.rainbow-themes.net/cart/?undo_item=1c6a0198177bfcc9bd93f6aab94aad3c&amp;_wpnonce=9edc4fa77d" class="restore-item">Undo?</a> </div> -->
									<div class="woocommerce-message" role="alert"><?php echo $message; ?></div>
									<script>
										setTimeout(function() {
											jQuery(".woocommerce-message").remove();
										}, 5000);
									</script>
								<?php } ?>
								<p class="cart-empty woocommerce-info">Order history is currently empty.</p>
								<div class="woocommerce-cart-form">
									<table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
										<thead>
											<tr>
												<th class="product-thumbnail">&nbsp;</th>
												<th class="product-name">Service</th>
												<th class="product-subtotal">Price</th>
												<th class="product-subtotal">Status</th>
												<th class="product-subtotal">Date</th>
											</tr>
										</thead>
										<tbody>
											<?php
											include_once('business/DB.php');
											$sql = "SELECT *,(select Service_Name from services where Service_ID=orders.Service_ID) as 'Service_Name', (select Service_Price from services where Service_ID=orders.Service_ID) as 'Service_Price', (Select Category_Name from category where Category_ID = (SELECT Category_ID FROM `services` WHERE Service_ID=orders.Service_ID)) as 'Category_Name' FROM `orders` where User_ID='" . $_SESSION["userid"] . "'";
											$result = $conn->query($sql);

											$carttotal = 0;
											if ($result->num_rows > 0) {
												while ($row = $result->fetch_assoc()) {
													$Service_Image = '';
													$carttotal = $carttotal + number_format($row["Service_Price"], 2);
													switch ($row["Category_Name"]) {
														case "SEO":
															$Service_Image = 'wp-content/uploads/2019/08/seo_600x400.jpg';
															break;
														case "Content Writing":
															$Service_Image = 'wp-content/uploads/2019/08/content-writing-3.png';
															break;
														case "Graphics Designing":
															$Service_Image = 'wp-content/uploads/2019/07/600x430.png';
															break;
														default:
															$Service_Image = 'wp-content/uploads/2019/08/seo_600x400.jpg';
													}

											?>
													<tr class="woocommerce-cart-form__cart-item cart_item">
														<td class="product-thumbnail">
															<img width="570" height="570" src="<?php echo $Service_Image; ?>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="some-alt">
														</td>
														<td class="product-name" data-title="Product"><?php echo $row["Service_Name"] ?></td>
														<td class="product-subtotal" data-title="Price">
                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span><?php echo $row["Service_Price"]; ?></span> </td>
                                                        <td class="product-subtotal"><?php echo $row["Order_Status"]; ?></td>
                                                        <td class="product-subtotal"><?php echo date('D, d M Y',strtotime($row["Order_Date"])); ?></td>
														<!-- <td class="product-quantity" data-title="Quantity">
																			<div class="quantity">
																				<label class="screen-reader-text" for="quantity_5df122150a36f">Seo Made Simple quantity</label>
																				<input type="number" id="quantity_5df122150a36f" class="input-text qty text" step="1" min="0" max="" name="cart[fea9c11c4ad9a395a636ed944a28b51a][qty]" value="1" title="Qty" size="4" inputmode="numeric">
																			</div>
																		</td> -->
														<!-- <td class="product-subtotal" data-title="Subtotal">
																			<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>187.00</span> </td> -->
													</tr>
												<?php
												}
												?>
												<script>
													jQuery('.woocommerce-info').remove();
												</script>
											<?php
											} else {
											?>
												<script>
													jQuery('.woocommerce-cart-form').remove();
												</script>
											<?php
											}
											?>
										</tbody>
									</table>

									<div class="cart_totals ">
										<h2>Orders total</h2>
										<table cellspacing="0" class="shop_table shop_table_responsive">
											<tbody>
												<!-- <tr class="cart-subtotal">
													<th>Subtotal</th>
													<td data-title="Subtotal">
														<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>666.00</span>
													</td>
												</tr> -->
												<tr class="woocommerce-shipping-totals shipping">
													<!-- <th>Shipping</th> -->
													<!-- <td data-title="Shipping">
														<ul id="shipping_method" class="woocommerce-shipping-methods">
															<li>
																<input type="hidden" name="shipping_method[0]" data-index="0" id="shipping_method_0_flat_rate2" value="flat_rate:2" class="shipping_method"><label for="shipping_method_0_flat_rate2">Flat rate: <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>5.00</span></label> </li>
														</ul>
														<p class="woocommerce-shipping-destination">
															Shipping to <strong>Pakistan</strong>. </p>
														<a href="#" class="shipping-calculator-button">Change address</a>
														<section class="shipping-calculator-form" style="display:none;">
															<p class="form-row form-row-wide" id="calc_shipping_country_field">
																<select name="calc_shipping_country" id="calc_shipping_country" class="country_to_state country_select" rel="calc_shipping_state">
																	<option value="">Select a country…</option>
																	<option value="AX">Åland Islands</option>
																	<option value="AF">Afghanistan</option>
																	<option value="AL">Albania</option>
																	<option value="DZ">Algeria</option>
																	<option value="AS">American Samoa</option>
																	<option value="AD">Andorra</option>
																	<option value="AO">Angola</option>
																	<option value="AI">Anguilla</option>
																	<option value="AQ">Antarctica</option>
																	<option value="AG">Antigua and Barbuda</option>
																	<option value="AR">Argentina</option>
																	<option value="AM">Armenia</option>
																	<option value="AW">Aruba</option>
																	<option value="AU">Australia</option>
																	<option value="AT">Austria</option>
																	<option value="AZ">Azerbaijan</option>
																	<option value="BS">Bahamas</option>
																	<option value="BH">Bahrain</option>
																	<option value="BD">Bangladesh</option>
																	<option value="BB">Barbados</option>
																	<option value="BY">Belarus</option>
																	<option value="PW">Belau</option>
																	<option value="BE">Belgium</option>
																	<option value="BZ">Belize</option>
																	<option value="BJ">Benin</option>
																	<option value="BM">Bermuda</option>
																	<option value="BT">Bhutan</option>
																	<option value="BO">Bolivia</option>
																	<option value="BQ">Bonaire, Saint Eustatius and Saba</option>
																	<option value="BA">Bosnia and Herzegovina</option>
																	<option value="BW">Botswana</option>
																	<option value="BV">Bouvet Island</option>
																	<option value="BR">Brazil</option>
																	<option value="IO">British Indian Ocean Territory</option>
																	<option value="BN">Brunei</option>
																	<option value="BG">Bulgaria</option>
																	<option value="BF">Burkina Faso</option>
																	<option value="BI">Burundi</option>
																	<option value="KH">Cambodia</option>
																	<option value="CM">Cameroon</option>
																	<option value="CA">Canada</option>
																	<option value="CV">Cape Verde</option>
																	<option value="KY">Cayman Islands</option>
																	<option value="CF">Central African Republic</option>
																	<option value="TD">Chad</option>
																	<option value="CL">Chile</option>
																	<option value="CN">China</option>
																	<option value="CX">Christmas Island</option>
																	<option value="CC">Cocos (Keeling) Islands</option>
																	<option value="CO">Colombia</option>
																	<option value="KM">Comoros</option>
																	<option value="CG">Congo (Brazzaville)</option>
																	<option value="CD">Congo (Kinshasa)</option>
																	<option value="CK">Cook Islands</option>
																	<option value="CR">Costa Rica</option>
																	<option value="HR">Croatia</option>
																	<option value="CU">Cuba</option>
																	<option value="CW">Curaçao</option>
																	<option value="CY">Cyprus</option>
																	<option value="CZ">Czech Republic</option>
																	<option value="DK">Denmark</option>
																	<option value="DJ">Djibouti</option>
																	<option value="DM">Dominica</option>
																	<option value="DO">Dominican Republic</option>
																	<option value="EC">Ecuador</option>
																	<option value="EG">Egypt</option>
																	<option value="SV">El Salvador</option>
																	<option value="GQ">Equatorial Guinea</option>
																	<option value="ER">Eritrea</option>
																	<option value="EE">Estonia</option>
																	<option value="ET">Ethiopia</option>
																	<option value="FK">Falkland Islands</option>
																	<option value="FO">Faroe Islands</option>
																	<option value="FJ">Fiji</option>
																	<option value="FI">Finland</option>
																	<option value="FR">France</option>
																	<option value="GF">French Guiana</option>
																	<option value="PF">French Polynesia</option>
																	<option value="TF">French Southern Territories</option>
																	<option value="GA">Gabon</option>
																	<option value="GM">Gambia</option>
																	<option value="GE">Georgia</option>
																	<option value="DE">Germany</option>
																	<option value="GH">Ghana</option>
																	<option value="GI">Gibraltar</option>
																	<option value="GR">Greece</option>
																	<option value="GL">Greenland</option>
																	<option value="GD">Grenada</option>
																	<option value="GP">Guadeloupe</option>
																	<option value="GU">Guam</option>
																	<option value="GT">Guatemala</option>
																	<option value="GG">Guernsey</option>
																	<option value="GN">Guinea</option>
																	<option value="GW">Guinea-Bissau</option>
																	<option value="GY">Guyana</option>
																	<option value="HT">Haiti</option>
																	<option value="HM">Heard Island and McDonald Islands</option>
																	<option value="HN">Honduras</option>
																	<option value="HK">Hong Kong</option>
																	<option value="HU">Hungary</option>
																	<option value="IS">Iceland</option>
																	<option value="IN">India</option>
																	<option value="ID">Indonesia</option>
																	<option value="IR">Iran</option>
																	<option value="IQ">Iraq</option>
																	<option value="IE">Ireland</option>
																	<option value="IM">Isle of Man</option>
																	<option value="IL">Israel</option>
																	<option value="IT">Italy</option>
																	<option value="CI">Ivory Coast</option>
																	<option value="JM">Jamaica</option>
																	<option value="JP">Japan</option>
																	<option value="JE">Jersey</option>
																	<option value="JO">Jordan</option>
																	<option value="KZ">Kazakhstan</option>
																	<option value="KE">Kenya</option>
																	<option value="KI">Kiribati</option>
																	<option value="KW">Kuwait</option>
																	<option value="KG">Kyrgyzstan</option>
																	<option value="LA">Laos</option>
																	<option value="LV">Latvia</option>
																	<option value="LB">Lebanon</option>
																	<option value="LS">Lesotho</option>
																	<option value="LR">Liberia</option>
																	<option value="LY">Libya</option>
																	<option value="LI">Liechtenstein</option>
																	<option value="LT">Lithuania</option>
																	<option value="LU">Luxembourg</option>
																	<option value="MO">Macao</option>
																	<option value="MG">Madagascar</option>
																	<option value="MW">Malawi</option>
																	<option value="MY">Malaysia</option>
																	<option value="MV">Maldives</option>
																	<option value="ML">Mali</option>
																	<option value="MT">Malta</option>
																	<option value="MH">Marshall Islands</option>
																	<option value="MQ">Martinique</option>
																	<option value="MR">Mauritania</option>
																	<option value="MU">Mauritius</option>
																	<option value="YT">Mayotte</option>
																	<option value="MX">Mexico</option>
																	<option value="FM">Micronesia</option>
																	<option value="MD">Moldova</option>
																	<option value="MC">Monaco</option>
																	<option value="MN">Mongolia</option>
																	<option value="ME">Montenegro</option>
																	<option value="MS">Montserrat</option>
																	<option value="MA">Morocco</option>
																	<option value="MZ">Mozambique</option>
																	<option value="MM">Myanmar</option>
																	<option value="NA">Namibia</option>
																	<option value="NR">Nauru</option>
																	<option value="NP">Nepal</option>
																	<option value="NL">Netherlands</option>
																	<option value="NC">New Caledonia</option>
																	<option value="NZ">New Zealand</option>
																	<option value="NI">Nicaragua</option>
																	<option value="NE">Niger</option>
																	<option value="NG">Nigeria</option>
																	<option value="NU">Niue</option>
																	<option value="NF">Norfolk Island</option>
																	<option value="KP">North Korea</option>
																	<option value="MK">North Macedonia</option>
																	<option value="MP">Northern Mariana Islands</option>
																	<option value="NO">Norway</option>
																	<option value="OM">Oman</option>
																	<option value="PK" selected="selected">Pakistan</option>
																	<option value="PS">Palestinian Territory</option>
																	<option value="PA">Panama</option>
																	<option value="PG">Papua New Guinea</option>
																	<option value="PY">Paraguay</option>
																	<option value="PE">Peru</option>
																	<option value="PH">Philippines</option>
																	<option value="PN">Pitcairn</option>
																	<option value="PL">Poland</option>
																	<option value="PT">Portugal</option>
																	<option value="PR">Puerto Rico</option>
																	<option value="QA">Qatar</option>
																	<option value="RE">Reunion</option>
																	<option value="RO">Romania</option>
																	<option value="RU">Russia</option>
																	<option value="RW">Rwanda</option>
																	<option value="ST">São Tomé and Príncipe</option>
																	<option value="BL">Saint Barthélemy</option>
																	<option value="SH">Saint Helena</option>
																	<option value="KN">Saint Kitts and Nevis</option>
																	<option value="LC">Saint Lucia</option>
																	<option value="SX">Saint Martin (Dutch part)</option>
																	<option value="MF">Saint Martin (French part)</option>
																	<option value="PM">Saint Pierre and Miquelon</option>
																	<option value="VC">Saint Vincent and the Grenadines</option>
																	<option value="WS">Samoa</option>
																	<option value="SM">San Marino</option>
																	<option value="SA">Saudi Arabia</option>
																	<option value="SN">Senegal</option>
																	<option value="RS">Serbia</option>
																	<option value="SC">Seychelles</option>
																	<option value="SL">Sierra Leone</option>
																	<option value="SG">Singapore</option>
																	<option value="SK">Slovakia</option>
																	<option value="SI">Slovenia</option>
																	<option value="SB">Solomon Islands</option>
																	<option value="SO">Somalia</option>
																	<option value="ZA">South Africa</option>
																	<option value="GS">South Georgia/Sandwich Islands</option>
																	<option value="KR">South Korea</option>
																	<option value="SS">South Sudan</option>
																	<option value="ES">Spain</option>
																	<option value="LK">Sri Lanka</option>
																	<option value="SD">Sudan</option>
																	<option value="SR">Suriname</option>
																	<option value="SJ">Svalbard and Jan Mayen</option>
																	<option value="SZ">Swaziland</option>
																	<option value="SE">Sweden</option>
																	<option value="CH">Switzerland</option>
																	<option value="SY">Syria</option>
																	<option value="TW">Taiwan</option>
																	<option value="TJ">Tajikistan</option>
																	<option value="TZ">Tanzania</option>
																	<option value="TH">Thailand</option>
																	<option value="TL">Timor-Leste</option>
																	<option value="TG">Togo</option>
																	<option value="TK">Tokelau</option>
																	<option value="TO">Tonga</option>
																	<option value="TT">Trinidad and Tobago</option>
																	<option value="TN">Tunisia</option>
																	<option value="TR">Turkey</option>
																	<option value="TM">Turkmenistan</option>
																	<option value="TC">Turks and Caicos Islands</option>
																	<option value="TV">Tuvalu</option>
																	<option value="UG">Uganda</option>
																	<option value="UA">Ukraine</option>
																	<option value="AE">United Arab Emirates</option>
																	<option value="GB">United Kingdom (UK)</option>
																	<option value="US">United States (US)</option>
																	<option value="UM">United States (US) Minor Outlying Islands</option>
																	<option value="UY">Uruguay</option>
																	<option value="UZ">Uzbekistan</option>
																	<option value="VU">Vanuatu</option>
																	<option value="VA">Vatican</option>
																	<option value="VE">Venezuela</option>
																	<option value="VN">Vietnam</option>
																	<option value="VG">Virgin Islands (British)</option>
																	<option value="VI">Virgin Islands (US)</option>
																	<option value="WF">Wallis and Futuna</option>
																	<option value="EH">Western Sahara</option>
																	<option value="YE">Yemen</option>
																	<option value="ZM">Zambia</option>
																	<option value="ZW">Zimbabwe</option>
																</select>
															</p>

															<p class="form-row form-row-wide" id="calc_shipping_state_field">
																<span>
																	<select name="calc_shipping_state" class="state_select" id="calc_shipping_state" data-placeholder="State / County">
																		<option value="">Select an option…</option>
																		<option value="JK">Azad Kashmir</option>
																		<option value="BA">Balochistan</option>
																		<option value="TA">FATA</option>
																		<option value="GB">Gilgit Baltistan</option>
																		<option value="IS">Islamabad Capital Territory</option>
																		<option value="KP">Khyber Pakhtunkhwa</option>
																		<option value="PB">Punjab</option>
																		<option value="SD">Sindh</option>
																	</select>
																</span>
															</p>

															<p class="form-row form-row-wide" id="calc_shipping_city_field">
																<input type="text" class="input-text" value="" placeholder="City" name="calc_shipping_city" id="calc_shipping_city">
															</p>

															<p class="form-row form-row-wide" id="calc_shipping_postcode_field">
																<input type="text" class="input-text" value="" placeholder="Postcode / ZIP" name="calc_shipping_postcode" id="calc_shipping_postcode">
															</p>

															<p><button type="submit" name="calc_shipping" value="1" class="button">Update</button></p>
															<input type="hidden" id="woocommerce-shipping-calculator-nonce" name="woocommerce-shipping-calculator-nonce" value="97ea457d93"><input type="hidden" name="_wp_http_referer" value="/cart/">
														</section>
													</td>
												</tr> -->
												<tr class="order-total">
													<th>Total</th>
													<td data-title="Total"><strong><span class="woocommerce-Price-amount amount">
																<span class="woocommerce-Price-currencySymbol">$</span><?php echo $carttotal; ?></span></strong>
													</td>
												</tr>
											</tbody>
										</table>

										<!-- <div class="wc-proceed-to-checkout">
											<a href="https://seoes.rainbow-themes.net/checkout/" class="checkout-button button alt wc-forward">
												Proceed to checkout</a>
										</div> -->
									</div>

									<!-- <div class="rb_coupon actions">
										<div class="coupon">
											<label for="coupon_code">Coupon:</label> <input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="Coupon code"> <button type="submit" class="button" name="apply_coupon" value="Apply coupon">Apply coupon</button>
										</div>
										<button type="submit" class="button" name="update_cart" value="Update cart" disabled="">Update cart</button>
										<input type="hidden" id="woocommerce-cart-nonce" name="woocommerce-cart-nonce" value="9edc4fa77d"><input type="hidden" name="_wp_http_referer" value="/cart/">
									</div> -->

									<div class="cart-collaterals">
									</div>
								</div>
								<!-- <p class="return-to-shop">
									<a class="button wc-backward" href="shop/page/1/shop.php">
										Return to shop </a>
								</p> -->
							</div>
						</div>

					</div>
					<!-- /.main-content-inner-wrap -->
				</div>
				<!-- /.main-content-inner -->
			</main> <!-- /.main-content -->
		</div>
		<!-- /.site-content -->

		<div class='rb_footer_template'>
			<div class='container'>
				<div id="rb_content_5de2283e30304" class="rb_content_5de2283e30304 rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571647263433 vc_row-has-fill">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de2283e304c4' class='rb_column_wrapper vc_col-sm-12 '>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_inner_row_5de2283e3066e' class='rb_inner_row_wrapper'>
											<div class="vc_row wpb_row vc_inner vc_row-fluid">
												<div id='rb_column_5de2283e307a6' class='rb_column_wrapper vc_col-sm-12 '>
													<div class="wpb_column vc_column_container vc_col-sm-12">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div id='rb_logo_5de2283e30a11' class='site_logotype'><a href='index.php'><img src='wp-content/uploads/2019/06/logo_white.png' alt='some-alt' style='width:143px;'></a></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id='rb_inner_row_5de2283e30acf' class='rb_inner_row_wrapper'>
											<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1570620243054">
												<div id='rb_column_5de2283e30c1e' class='rb_column_wrapper vc_col-sm-4 '>
													<div class="wpb_column vc_column_container vc_col-sm-4">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div id='rb_icon_list_5de2283e30d4c' class='rb_icon_list_module header_icons direction_column mobile_align_center'><a href='tel:3053335522' class='custom_url'><i class='flaticon-telephone-auricular-with-cable'></i><span class='title'>(305) 333-5522</span></a><a href='mailto:info@seotechstore.com' class='custom_url'><i class='flaticon-email'></i><span class='title'>info@seotechstore.com</span></a></div>
															</div>
														</div>
													</div>
												</div>
												<div id='rb_column_5de2283e30ebc' class='rb_column_wrapper vc_col-sm-4 '>
													<div class="wpb_column vc_column_container vc_col-sm-4">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<?php 
																if(isset($_SESSION["SubscriptionMessage"]))
																{
																	if(isset($_SESSION["SubscriptionMessageType"]) && $_SESSION["SubscriptionMessageType"] === "success")
																	{
																		echo '<div class="vc_column-inner"><div class="wpb_wrapper"><div class="rb_info_box success"><div class="icon_wrapper"><i></i></div><div class="content_wrapper"><p class="h5 info_box_title">'.$_SESSION["SubscriptionMessage"].'</p></div></div></div></div>';
																		unset($_SESSION["SubscriptionMessage"]);
																		unset($_SESSION["SubscriptionMessageType"]);
																	}
																	else if(isset($_SESSION["SubscriptionMessageType"]) && $_SESSION["SubscriptionMessageType"] === "info")
																	{
																		echo '<div class="vc_column-inner"><div class="wpb_wrapper"><div class="rb_info_box info"><div class="icon_wrapper"><i></i></div><div class="content_wrapper"><p class="h5 info_box_title">'.$_SESSION["SubscriptionMessage"].'</p></div></div></div></div>';
																		unset($_SESSION["SubscriptionMessage"]);
																		unset($_SESSION["SubscriptionMessageType"]);
																	}
																}
																?>
																<div class='rb_textmodule_5de2283e31037 rb_textmodule align_center mobile_align_center'>
																	<p class='h5 rb_textmodule_subtitle'>Get latest SEO tips from us!</p>
																</div>
																<div class="wpforms-container wpforms-container-full footer-form">
																	<form class="wpforms-validate wpforms-form" method="post" enctype="multipart/form-data" action="business/functions.php">
																		<div class="wpforms-field-container">
																			<div class="wpforms-field wpforms-field-text" data-field-id="1">
																				<input type="email" class="wpforms-field-large wpforms-field-required" name="tipemail" placeholder="Enter your email" required>
																				<input type="hidden" id="action" name="action" value="tip">
																			</div>
																		</div>
																		<!-- <div class="wpforms-field wpforms-field-hp"><label for="wpforms-4230-field-hp" class="wpforms-field-label">Comment</label><input type="text" name="wpforms[hp]" id="wpforms-4230-field-hp" class="wpforms-field-medium"></div> -->
																		<div class="wpforms-submit-container">
																			<button type="submit" name="btnTip" class="wpforms-submit " value="tip"></button>
																		</div>
																	</form>
																</div> <!-- .wpforms-container -->
															</div>
														</div>
													</div>
												</div>
												<div id='rb_column_5de2283e3136b' class='rb_column_wrapper vc_col-sm-4 '>
													<div class="wpb_column vc_column_container vc_col-sm-4">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div class='rb_textmodule_5de2283e314ea rb_textmodule align_right mobile_align_center'>
																	<p class='h5 rb_textmodule_subtitle'>Subscribe to our social</p>
																</div>
																<div id='rb_icon_list_5de2283e315f9' class='rb_icon_list_module header_icons direction_line icon_bg align_right mobile_align_center'><a href='https://facebook.com' class='custom_url'>
																		<div class='icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																				<defs>
																					<linearGradient id="gradient_5de2283e316ad" x1="0%" y1="0%" x2="0%" y2="100%">
																						<stop offset="0%" style="stop-color:#5163dd; stop-opacity:1" />
																						<stop offset="100%" style="stop-color:#5163dd; stop-opacity:1" />
																					</linearGradient>
																				</defs>
																				<polygon class="st0" points="6,25 6,75 49.3,100 92.6,75 92.6,25 49.3,0" fill="url(#gradient_5de2283e316ad)" />
																			</svg><i class='flaticon-facebook'></i></div><span class='title'></span>
																	</a><a href='https://www.linkedin.com/' class='custom_url'>
																		<div class='icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																				<defs>
																					<linearGradient id="gradient_5de2283e316fb" x1="0%" y1="0%" x2="0%" y2="100%">
																						<stop offset="0%" style="stop-color:#5163dd; stop-opacity:1" />
																						<stop offset="100%" style="stop-color:#5163dd; stop-opacity:1" />
																					</linearGradient>
																				</defs>
																				<polygon class="st0" points="6,25 6,75 49.3,100 92.6,75 92.6,25 49.3,0" fill="url(#gradient_5de2283e316fb)" />
																			</svg><i class='flaticon-linkedin'></i></div><span class='title'></span>
																	</a><a href='https://twitter.com' class='custom_url'>
																		<div class='icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																				<defs>
																					<linearGradient id="gradient_5de2283e31744" x1="0%" y1="0%" x2="0%" y2="100%">
																						<stop offset="0%" style="stop-color:#5163dd; stop-opacity:1" />
																						<stop offset="100%" style="stop-color:#5163dd; stop-opacity:1" />
																					</linearGradient>
																				</defs>
																				<polygon class="st0" points="6,25 6,75 49.3,100 92.6,75 92.6,25 49.3,0" fill="url(#gradient_5de2283e31744)" />
																			</svg><i class='flaticon-twitter'></i></div><span class='title'></span>
																	</a><a href='https://www.youtube.com/' class='custom_url'>
																		<div class='icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																				<defs>
																					<linearGradient id="gradient_5de2283e3178c" x1="0%" y1="0%" x2="0%" y2="100%">
																						<stop offset="0%" style="stop-color:#5163dd; stop-opacity:1" />
																						<stop offset="100%" style="stop-color:#5163dd; stop-opacity:1" />
																					</linearGradient>
																				</defs>
																				<polygon class="st0" points="6,25 6,75 49.3,100 92.6,75 92.6,25 49.3,0" fill="url(#gradient_5de2283e3178c)" />
																			</svg><i class='flaticon-youtube'></i></div><span class='title'></span>
																	</a></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="vc_row-full-width vc_clearfix"></div>
				</div>
				<div id="rb_content_5de2283e3184d" class="rb_content_5de2283e3184d rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1570622568954 vc_row-has-fill">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de2285940770' class='rb_column_wrapper vc_col-sm-12 '>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class='rb_textmodule_5de2285940917 rb_textmodule mobile_align_center'>
											<div class='rb_textmodule_content_wrapper'>
												<center>
													<p style="color:white;">Copyright © SEO-Tech-Store 2019 — All rights reserved.</p>
												</center>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row_hover_effect"></div>
						<!-- <div id='rb_column_5de2283e31c99' class='rb_column_wrapper vc_col-sm-7 '>
							<div class="wpb_column vc_column_container vc_col-sm-7">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class='rb_textmodule_5de2283e31dec rb_textmodule mobile_align_center'>
											<div class='rb_textmodule_content_wrapper'>
												<p>We’re on a mission to build a better future where technology creates good jobs for everyone.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
					</div>
					<div class="vc_row-full-width vc_clearfix"></div>
				</div>
			</div>
		</div>
		<div class="ajax_preloader body_loader">
			<div class="dots-wrapper">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>

		<div class="button-up"></div>
	</div>
	<!-- /.site-wrapper -->

	<div id="frame">
		<span class="frame_top"></span>
		<span class="frame_right"></span>
		<span class="frame_bottom"></span>
		<span class="frame_left"></span>
	</div>

	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
	<style id='rb-footer-inline-css' type='text/css'>
		.vc_custom_1562326619547 {
			border-bottom-width: 1px !important;
			background-color: #ffffff !important;
			border-bottom-color: #e5e5e5 !important;
			border-bottom-style: solid !important;
		}

		.vc_custom_1561722795510 {
			padding-right: 0px !important;
			padding-left: 0px !important;
		}

		.rb_content_5de2283e167a2>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2283e167a2>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2283e167a2>.vc_row {
			background-position: center !important;
		}

		.rb_content_5de2283e167a2>.vc_row {
			position: relative;
			overflow: visible;
			z-index: 2;
		}

		#rb_content_5de2283e167a2>.vc_row {
			-webkit-box-shadow: 0 0 15px 5px rgba(16, 1, 148, 0.05);
			-moz-box-shadow: 0 0 15px 5px rgba(16, 1, 148, 0.05);
			box-shadow: 0 0 15px 5px rgba(16, 1, 148, 0.05);
		}

		#rb_column_5de2283e16c69>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e16c69>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e16c69>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2283e17002>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e17002>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e17002>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_menu_5de2283e171ba>ul {
			-webkit-justify-content: center;
			justify-content: center;
		}

		#rb_menu_5de2283e171ba>.menu>.menu-item>a {
			color: #3e4a59;
		}

		#rb_menu_5de2283e171ba>.menu>.menu-item>a:before,
		#rb_menu_5de2283e171ba .menu-item-object-rb-megamenu .sub-menu .rb_megamenu_item .widgettitle:before {
			background-color: #5163dd;
		}

		.rb_content_5de2283e18d89>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2283e18d89>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2283e18d89>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2283e18f13>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e18f13>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e18f13>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2283e19d36>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e19d36>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e19d36>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2283e19d36>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de2283e1a7ef>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e1a7ef>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e1a7ef>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2283e1a7ef>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de2283e1b06b>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e1b06b>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e1b06b>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2283e1b06b>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		.vc_custom_1561704612827 {
			padding-top: 10px !important;
			padding-bottom: 5px !important;
		}

		.vc_custom_1562058808598 {
			border-left-width: 1px !important;
			padding-left: 50px !important;
			border-left-color: #e2e4e6 !important;
			border-left-style: solid !important;
		}

		.vc_custom_1562058808601 {
			border-left-width: 0px !important;
			padding-left: 15px !important;
		}

		.vc_custom_1562058801976 {
			border-left-width: 1px !important;
			padding-left: 50px !important;
			border-left-color: #e2e4e6 !important;
			border-left-style: solid !important;
		}

		.vc_custom_1562058801982 {
			border-left-width: 0px !important;
			padding-left: 15px !important;
		}

		.vc_custom_1562058796768 {
			border-left-width: 1px !important;
			padding-left: 50px !important;
			border-left-color: #e2e4e6 !important;
			border-left-style: solid !important;
		}

		.vc_custom_1562058796772 {
			border-left-width: 0px !important;
			padding-left: 15px !important;
		}

		.rb_content_5de2283e1bd97>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2283e1bd97>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2283e1bd97>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2283e1bed1>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e1bed1>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e1bed1>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2283e1c8b0>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e1c8b0>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e1c8b0>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2283e1d113>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e1d113>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e1d113>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.vc_custom_1561712578812 {
			padding-top: 10px !important;
			padding-bottom: 5px !important;
		}

		.vc_custom_1561705174376 {
			border-left-width: 1px !important;
			padding-left: 50px !important;
			border-left-color: #e2e4e6 !important;
			border-left-style: solid !important;
		}

		.vc_custom_1561705188454 {
			border-left-width: 1px !important;
			padding-left: 50px !important;
			border-left-color: #e2e4e6 !important;
			border-left-style: solid !important;
		}

		#rb_column_5de2283e1de56>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e1de56>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e1de56>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_inner_row_5de2283e1e0dd>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de2283e1e0dd>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de2283e1e0dd>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2283e1e317>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e1e317>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e1e317>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_search_5de2283e1e496 {
			text-align: right;
		}

		#rb_search_5de2283e1e496 .search-trigger {
			color: #3E4A59;
		}

		@media screen and (min-width: 1367px),
		/*Disable this styles for iPad Pro 1024-1366*/
		screen and (min-width: 1200px) and (any-hover: hover),
		/*Check, is device a desktop (Not working on IE & FireFox)*/
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		/*Check, is device a desktop with firefox*/
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		/*Check, is device a desktop with IE 10 or above*/
		screen and (min-width: 1200px) and (-ms-high-contrast: active)

		/*Check, is device a desktop with IE 10 or above*/
			{
			#rb_search_5de2283e1e496 .search-trigger:hover {
				color: #5163DD;
			}
		}

		#rb_column_5de2283e1e51d>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e1e51d>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e1e51d>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_button_wrapper_5de2283e1e670 {
			text-align: right;
		}

		.vc_custom_1571319827010 {
			border-bottom-width: 1px !important;
			padding-top: 10px !important;
			padding-bottom: 10px !important;
			background-color: #dde9fa !important;
			border-bottom-color: #d4dbe4 !important;
			border-bottom-style: solid !important;
		}

		.vc_custom_1571720915789 {
			border-bottom-width: 1px !important;
			border-bottom-color: #dde0e5 !important;
			border-bottom-style: solid !important;
		}

		.vc_custom_1561722795510 {
			padding-right: 0px !important;
			padding-left: 0px !important;
		}

		.rb_content_5de2283e1ed05>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2283e1ed05>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2283e1ed05>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2283e1ee8d>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e1ee8d>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e1ee8d>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_icon_list_5de2283e1f008 i:before {
			font-size: 16px;
		}

		#rb_icon_list_5de2283e1f008 .icon_wrapper svg {
			transform: scale(0.46);
		}

		#rb_icon_list_5de2283e1f008 .title {
			font-size: 14px;
		}

		#rb_icon_list_5de2283e1f008.direction_line>* {
			margin-right: 45px;
		}

		#rb_icon_list_5de2283e1f008.direction_column>*>* {
			margin-top: 45px;
		}

		#rb_icon_list_5de2283e1f008>a,
		#rb_icon_list_5de2283e1f008>.mini-cart>a,
		#rb_icon_list_5de2283e1f008 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a {
			color: #3e4a59;
		}

		#rb_icon_list_5de2283e1f008.header_icons>*~.mini-cart:not(:first-child) .woo_mini-count {
			border-color: #3e4a59;
		}

		@media screen and (min-width: 1367px),
		/*Disable this styles for iPad Pro 1024-1366*/
		screen and (min-width: 1200px) and (any-hover: hover),
		/*Check, is device a desktop (Not working on IE & FireFox)*/
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		/*Check, is device a desktop with firefox*/
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		/*Check, is device a desktop with IE 10 or above*/
		screen and (min-width: 1200px) and (-ms-high-contrast: active)

		/*Check, is device a desktop with IE 10 or above*/
			{

			#rb_icon_list_5de2283e1f008>a:hover,
			#rb_icon_list_5de2283e1f008>.mini-cart>a:hover,
			#rb_icon_list_5de2283e1f008 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a:hover {
				color: #3e4a59;
			}
		}

		#rb_column_5de2283e1f186>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e1f186>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e1f186>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_icon_list_5de2283e1f2b9 {
			text-align: right;
		}

		#rb_icon_list_5de2283e1f2b9 i:before {
			font-size: 18px;
		}

		#rb_icon_list_5de2283e1f2b9 .icon_wrapper svg {
			transform: scale(0.48);
		}

		#rb_icon_list_5de2283e1f2b9 .title {
			font-size: 16px;
		}

		#rb_icon_list_5de2283e1f2b9.direction_line>* {
			margin-right: 15px;
		}

		#rb_icon_list_5de2283e1f2b9.direction_column>*>* {
			margin-top: 15px;
		}

		#rb_icon_list_5de2283e1f2b9>a,
		#rb_icon_list_5de2283e1f2b9>.mini-cart>a,
		#rb_icon_list_5de2283e1f2b9 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a {
			color: #3e4a59;
		}

		#rb_icon_list_5de2283e1f2b9.header_icons>*~.mini-cart:not(:first-child) .woo_mini-count {
			border-color: #3e4a59;
		}

		@media screen and (min-width: 1367px),
		/*Disable this styles for iPad Pro 1024-1366*/
		screen and (min-width: 1200px) and (any-hover: hover),
		/*Check, is device a desktop (Not working on IE & FireFox)*/
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		/*Check, is device a desktop with firefox*/
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		/*Check, is device a desktop with IE 10 or above*/
		screen and (min-width: 1200px) and (-ms-high-contrast: active)

		/*Check, is device a desktop with IE 10 or above*/
			{

			#rb_icon_list_5de2283e1f2b9>a:hover,
			#rb_icon_list_5de2283e1f2b9>.mini-cart>a:hover,
			#rb_icon_list_5de2283e1f2b9 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a:hover {
				color: #3e4a59;
			}
		}

		.rb_content_5de2283e1f5eb>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2283e1f5eb>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2283e1f5eb>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2283e1f78b>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e1f78b>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e1f78b>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2283e1fa13>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e1fa13>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e1fa13>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_menu_5de2283e1fb8c>ul {
			-webkit-justify-content: center;
			justify-content: center;
		}

		#rb_menu_5de2283e1fb8c>.menu>.menu-item>a {
			color: #3e4a59;
		}

		#rb_menu_5de2283e1fb8c>.menu>.menu-item>a:before,
		#rb_menu_5de2283e1fb8c .menu-item-object-rb-megamenu .sub-menu .rb_megamenu_item .widgettitle:before {
			background-color: #5163dd;
		}

		.rb_content_5de2283e20ec8>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2283e20ec8>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2283e20ec8>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2283e21014>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e21014>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e21014>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2283e21aa8>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e21aa8>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e21aa8>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2283e21aa8>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de2283e225b1>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e225b1>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e225b1>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2283e225b1>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de2283e22e87>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e22e87>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e22e87>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2283e22e87>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		.vc_custom_1561704612827 {
			padding-top: 10px !important;
			padding-bottom: 5px !important;
		}

		.vc_custom_1562058808598 {
			border-left-width: 1px !important;
			padding-left: 50px !important;
			border-left-color: #e2e4e6 !important;
			border-left-style: solid !important;
		}

		.vc_custom_1562058808601 {
			border-left-width: 0px !important;
			padding-left: 15px !important;
		}

		.vc_custom_1562058801976 {
			border-left-width: 1px !important;
			padding-left: 50px !important;
			border-left-color: #e2e4e6 !important;
			border-left-style: solid !important;
		}

		.vc_custom_1562058801982 {
			border-left-width: 0px !important;
			padding-left: 15px !important;
		}

		.vc_custom_1562058796768 {
			border-left-width: 1px !important;
			padding-left: 50px !important;
			border-left-color: #e2e4e6 !important;
			border-left-style: solid !important;
		}

		.vc_custom_1562058796772 {
			border-left-width: 0px !important;
			padding-left: 15px !important;
		}

		.rb_content_5de2283e23d69>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2283e23d69>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2283e23d69>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2283e23f11>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e23f11>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e23f11>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2283e24a1d>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e24a1d>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e24a1d>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2283e253a3>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e253a3>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e253a3>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.vc_custom_1561712578812 {
			padding-top: 10px !important;
			padding-bottom: 5px !important;
		}

		.vc_custom_1561705174376 {
			border-left-width: 1px !important;
			padding-left: 50px !important;
			border-left-color: #e2e4e6 !important;
			border-left-style: solid !important;
		}

		.vc_custom_1561705188454 {
			border-left-width: 1px !important;
			padding-left: 50px !important;
			border-left-color: #e2e4e6 !important;
			border-left-style: solid !important;
		}

		#rb_column_5de2283e264bb>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e264bb>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e264bb>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_inner_row_5de2283e26692>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de2283e26692>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de2283e26692>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2283e267fb>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e267fb>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e267fb>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_search_5de2283e26997 {
			text-align: right;
		}

		#rb_search_5de2283e26997 .search-trigger {
			color: #3e4a59;
		}

		@media screen and (min-width: 1367px),
		/*Disable this styles for iPad Pro 1024-1366*/
		screen and (min-width: 1200px) and (any-hover: hover),
		/*Check, is device a desktop (Not working on IE & FireFox)*/
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		/*Check, is device a desktop with firefox*/
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		/*Check, is device a desktop with IE 10 or above*/
		screen and (min-width: 1200px) and (-ms-high-contrast: active)

		/*Check, is device a desktop with IE 10 or above*/
			{
			#rb_search_5de2283e26997 .search-trigger:hover {
				color: #3e4a59;
			}
		}

		#rb_column_5de2283e26a40>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e26a40>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e26a40>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_button_wrapper_5de2283e26bdb {
			text-align: right;
		}

		#rb_button_5de2283e26c17 {
			color: #3e4a59;
		}

		#rb_button_5de2283e26c17 {
			background-color: rgba(255, 255, 255, 0.01);
		}

		#rb_button_5de2283e26c17 {
			border-color: #5163dd;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			#rb_button_5de2283e26c17:hover {
				color: #ffffff;
			}

			#rb_button_5de2283e26c17:hover {
				background-color: #5163dd;
			}

			#rb_button_5de2283e26c17:hover {
				border-color: #5163dd;
			}
		}

		.rb_content_5de2283e26d42>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2283e26d42>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2283e26d42>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2283e26f7f>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e26f7f>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e26f7f>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_title_area_5de2283e271ba {
			-webkit-mask-image: url(wp-content/uploads/2019/07/title_mask.svg);
			-webkit-mask-size: cover;
			-webkit-mask-repeat: no-repeat;
			-webkit-mask-position: bottom center;
		}

		#rb_title_area_5de2283e271ba {
			background: -webkit-linear-gradient(-6deg, #e9eeff, #ffffff);
			background: linear-gradient(-6deg, #e9eeff, #ffffff);
		}

		#rb_title_area_5de2283e271ba .single_post_categories {
			background-color: #3e4a59;
		}

		#rb_title_area_5de2283e271ba .single_post_categories a {
			color: #ffffff;
		}

		#rb_title_area_5de2283e271ba .page_title {
			color: #3e4a59;
		}

		#rb_title_area_5de2283e271ba .single_post_meta a {
			color: #3e4a59;
		}

		#rb_title_area_5de2283e271ba .title_divider {
			background-color: #5163dd;
		}

		#rb_title_area_5de2283e271ba .woocommerce-breadcrumb *,
		#rb_title_area_5de2283e271ba .bread-crumbs * {
			color: #3e4a59;
		}

		.rb_content_5de2283e29e8c>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2283e29e8c>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2283e29e8c>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2283e2a005>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e2a005>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e2a005>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2283e2ab93>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e2ab93>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e2ab93>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2283e2ab93>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de2283e2b45b>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e2b45b>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e2b45b>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2283e2b45b>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de2283e2bae6>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e2bae6>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e2bae6>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2283e2bae6>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		.vc_custom_1561704612827 {
			padding-top: 10px !important;
			padding-bottom: 5px !important;
		}

		.vc_custom_1562058808598 {
			border-left-width: 1px !important;
			padding-left: 50px !important;
			border-left-color: #e2e4e6 !important;
			border-left-style: solid !important;
		}

		.vc_custom_1562058808601 {
			border-left-width: 0px !important;
			padding-left: 15px !important;
		}

		.vc_custom_1562058801976 {
			border-left-width: 1px !important;
			padding-left: 50px !important;
			border-left-color: #e2e4e6 !important;
			border-left-style: solid !important;
		}

		.vc_custom_1562058801982 {
			border-left-width: 0px !important;
			padding-left: 15px !important;
		}

		.vc_custom_1562058796768 {
			border-left-width: 1px !important;
			padding-left: 50px !important;
			border-left-color: #e2e4e6 !important;
			border-left-style: solid !important;
		}

		.vc_custom_1562058796772 {
			border-left-width: 0px !important;
			padding-left: 15px !important;
		}

		.rb_content_5de2283e2c875>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2283e2c875>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2283e2c875>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2283e2ca2d>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e2ca2d>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e2ca2d>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2283e2d539>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e2d539>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e2d539>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2283e2de88>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e2de88>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e2de88>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.vc_custom_1561712578812 {
			padding-top: 10px !important;
			padding-bottom: 5px !important;
		}

		.vc_custom_1561705174376 {
			border-left-width: 1px !important;
			padding-left: 50px !important;
			border-left-color: #e2e4e6 !important;
			border-left-style: solid !important;
		}

		.vc_custom_1561705188454 {
			border-left-width: 1px !important;
			padding-left: 50px !important;
			border-left-color: #e2e4e6 !important;
			border-left-style: solid !important;
		}

		.vc_custom_1571647263433 {
			padding-top: 40px !important;
			padding-bottom: 30px !important;
			background-color: #6c8fdd !important;
		}

		.vc_custom_1570622568954 {
			padding-top: 12px !important;
			padding-bottom: 12px !important;
			background-color: #5163dd !important;
		}

		.vc_custom_1570620243054 {
			padding-top: 45px !important;
		}

		.vc_custom_1570619792651 {
			border-bottom-width: 1px !important;
			padding-bottom: 35px !important;
			border-bottom-color: #454b52 !important;
			border-bottom-style: solid !important;
		}

		.vc_custom_1571654846417 {
			margin-bottom: 30px !important;
		}

		.vc_custom_1571905025301 {
			margin-bottom: 15px !important;
		}

		.vc_custom_1571905058062 {
			margin-bottom: 0px !important;
			padding-bottom: 0px !important;
		}

		.vc_custom_1571905058070 {
			margin-top: 30px !important;
		}

		.vc_custom_1571654788798 {
			margin-top: 25px !important;
		}

		.vc_custom_1571654724665 {
			margin-bottom: 30px !important;
		}

		.rb_content_5de2283e30304>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2283e30304>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2283e30304>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2283e304c4>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e304c4>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e304c4>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_inner_row_5de2283e3066e>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de2283e3066e>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de2283e3066e>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2283e307a6>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e307a6>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e307a6>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_logo_5de2283e30a11 {
			border-bottom-width: 1px !important;
			padding-bottom: 35px !important;
			border-bottom-color: #cccccc !important;
			border-bottom-style: solid !important;
		}

		#rb_logo_5de2283e30a11 {
			text-align: center;
		}

		#rb_inner_row_5de2283e30acf>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de2283e30acf>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de2283e30acf>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2283e30c1e>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e30c1e>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e30c1e>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_icon_list_5de2283e30d4c>a,
		#rb_icon_list_5de2283e30d4c>.mini-cart>a,
		#rb_icon_list_5de2283e30d4c .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a {
			color: #ffffff;
		}

		#rb_icon_list_5de2283e30d4c.header_icons>*~.mini-cart:not(:first-child) .woo_mini-count {
			border-color: #ffffff;
		}

		@media screen and (min-width: 1367px),
		/*Disable this styles for iPad Pro 1024-1366*/
		screen and (min-width: 1200px) and (any-hover: hover),
		/*Check, is device a desktop (Not working on IE & FireFox)*/
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		/*Check, is device a desktop with firefox*/
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		/*Check, is device a desktop with IE 10 or above*/
		screen and (min-width: 1200px) and (-ms-high-contrast: active)

		/*Check, is device a desktop with IE 10 or above*/
			{

			#rb_icon_list_5de2283e30d4c>a:hover,
			#rb_icon_list_5de2283e30d4c>.mini-cart>a:hover,
			#rb_icon_list_5de2283e30d4c .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a:hover {
				color: #ffffff;
			}
		}

		@media screen and (max-width: 767px) {
			#rb_icon_list_5de2283e30d4c {
				margin-bottom: 30px !important;
				;
			}

			#rb_icon_list_5de2283e30d4c {
				text-align: center;
			}
		}

		#rb_column_5de2283e30ebc>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e30ebc>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e30ebc>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de2283e31037 {
			margin-bottom: 15px !important;
			;
		}

		.rb_textmodule_5de2283e31037 {
			text-align: center;
		}

		.rb_textmodule_5de2283e31037 .rb_textmodule_title,
		.rb_textmodule_5de2283e31037 .rb_textmodule_button.simple {
			color: #ffffff;
		}

		.rb_textmodule_5de2283e31037 .rb_textmodule_subtitle {
			color: #ffffff;
		}

		.rb_textmodule_5de2283e31037 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de2283e31037 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2283e31037 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de2283e31037 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de2283e31037 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2283e31037 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de2283e31037 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de2283e31037 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de2283e31037 .rb_textmodule_title {
			font-size: 20px;
		}

		.rb_textmodule_5de2283e31037 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de2283e31037 .rb_textmodule_title {
			margin-bottom: 20px;
			padding-bottom: 20px;
		}

		.rb_textmodule_5de2283e31037 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de2283e31037 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de2283e31037 .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de2283e31037 {
				text-align: center;
			}
		}

		#rb_column_5de2283e3136b>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e3136b>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e3136b>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de2283e314ea {
			margin-bottom: 0px !important;
			padding-bottom: 0px !important;
			;
		}

		.rb_textmodule_5de2283e314ea {
			text-align: right;
		}

		.rb_textmodule_5de2283e314ea .rb_textmodule_title,
		.rb_textmodule_5de2283e314ea .rb_textmodule_button.simple {
			color: #ffffff;
		}

		.rb_textmodule_5de2283e314ea .rb_textmodule_subtitle {
			color: #ffffff;
		}

		.rb_textmodule_5de2283e314ea {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de2283e314ea a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2283e314ea .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de2283e314ea .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de2283e314ea .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2283e314ea .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de2283e314ea .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de2283e314ea .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de2283e314ea .rb_textmodule_title {
			font-size: 20px;
		}

		.rb_textmodule_5de2283e314ea .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de2283e314ea .rb_textmodule_title {
			margin-bottom: 0px;
			padding-bottom: 0px;
		}

		.rb_textmodule_5de2283e314ea .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de2283e314ea .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de2283e314ea .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de2283e314ea {
				margin-top: 30px !important;
				;
			}

			.rb_textmodule_5de2283e314ea {
				text-align: center;
			}
		}

		#rb_icon_list_5de2283e315f9 {
			margin-top: 25px !important;
			;
		}

		#rb_icon_list_5de2283e315f9 {
			text-align: right;
		}

		#rb_icon_list_5de2283e315f9 i:before {
			font-size: 17px;
		}

		#rb_icon_list_5de2283e315f9 .icon_wrapper svg {
			transform: scale(0.47);
		}

		#rb_icon_list_5de2283e315f9 .title {
			font-size: 16px;
		}

		#rb_icon_list_5de2283e315f9.direction_line>* {
			margin-right: 8px;
		}

		#rb_icon_list_5de2283e315f9.direction_column>*>* {
			margin-top: 8px;
		}

		#rb_icon_list_5de2283e315f9>a,
		#rb_icon_list_5de2283e315f9>.mini-cart>a,
		#rb_icon_list_5de2283e315f9 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a {
			color: #ffffff;
		}

		#rb_icon_list_5de2283e315f9.header_icons>*~.mini-cart:not(:first-child) .woo_mini-count {
			border-color: #ffffff;
		}

		@media screen and (min-width: 1367px),
		/*Disable this styles for iPad Pro 1024-1366*/
		screen and (min-width: 1200px) and (any-hover: hover),
		/*Check, is device a desktop (Not working on IE & FireFox)*/
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		/*Check, is device a desktop with firefox*/
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		/*Check, is device a desktop with IE 10 or above*/
		screen and (min-width: 1200px) and (-ms-high-contrast: active)

		/*Check, is device a desktop with IE 10 or above*/
			{

			#rb_icon_list_5de2283e315f9>a:hover,
			#rb_icon_list_5de2283e315f9>.mini-cart>a:hover,
			#rb_icon_list_5de2283e315f9 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a:hover {
				color: #ffffff;
			}
		}

		@media screen and (max-width: 991px) {
			#rb_icon_list_5de2283e315f9 *:before {
				font-size: 20px;
			}

			#rb_icon_list_5de2283e315f9 .title {
				font-size: 16px;
			}

			#rb_icon_list_5de2283e315f9.direction_line>* {
				margin-right: 12px;
			}

			#rb_icon_list_5de2283e315f9.direction_column>*>* {
				margin-top: 12px;
			}
		}

		@media screen and (max-width: 767px) {
			#rb_icon_list_5de2283e315f9 {
				text-align: center;
			}
		}

		.rb_content_5de2283e3184d>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2283e3184d>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2283e3184d>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2283e319dd>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e319dd>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e319dd>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2283e319dd>.wpb_column>.vc_column-inner {
				margin-bottom: 30px !important;
			}
		}

		.rb_textmodule_5de2283e31b63 .rb_textmodule_title,
		.rb_textmodule_5de2283e31b63 .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de2283e31b63 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de2283e31b63 {
			color: #ffffff;
		}

		.rb_footer_template .rb_textmodule_5de2283e31b63 a {
			color: #ffffff;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2283e31b63 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de2283e31b63 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de2283e31b63 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2283e31b63 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de2283e31b63 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de2283e31b63 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de2283e31b63 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de2283e31b63 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de2283e31b63 .rb_textmodule_title {
			margin-bottom: 20px;
			padding-bottom: 20px;
		}

		.rb_textmodule_5de2283e31b63 .rb_textmodule_content_wrapper {
			font-size: 16px;
		}

		.rb_textmodule_5de2283e31b63 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de2283e31b63 .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de2283e31b63 {
				text-align: center;
			}
		}

		#rb_column_5de2283e31c99>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2283e31c99>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2283e31c99>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de2283e31dec .rb_textmodule_title,
		.rb_textmodule_5de2283e31dec .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de2283e31dec .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de2283e31dec {
			color: #ffffff;
		}

		.rb_footer_template .rb_textmodule_5de2283e31dec a {
			color: #ffffff;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2283e31dec .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de2283e31dec .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de2283e31dec .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2283e31dec .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de2283e31dec .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de2283e31dec .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de2283e31dec .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de2283e31dec .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de2283e31dec .rb_textmodule_title {
			margin-bottom: 20px;
			padding-bottom: 20px;
		}

		.rb_textmodule_5de2283e31dec .rb_textmodule_content_wrapper {
			font-size: 16px;
		}

		.rb_textmodule_5de2283e31dec .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de2283e31dec .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de2283e31dec {
				text-align: center;
			}
		}
	</style>
	<link rel='stylesheet' id='js_composer_front-css' href='wp-content/plugins/js_composer/assets/css/js_composer.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='flaticons-css' href='wp-content/themes/seoes/assets/fonts/flaticons/style.css' type='text/css' media='all' />
	<link rel='stylesheet' id='rbicons-css' href='wp-content/themes/seoes/assets/fonts/rbicons/style.css' type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome-css' href='wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='seoes-fonts-css' href='https://fonts.googleapis.com/css?family=Nunito+Sans%3Aregular,700,900%7COpen+Sans%3Aregular,700&amp;ver=5.3' type='text/css' media='all' />
	<link rel='stylesheet' id='wpforms-full-css' href='wp-content/plugins/wpforms-lite/assets/css/wpforms-full.css' type='text/css' media='all' />
	<script type='text/javascript' src='wp-content/themes/seoes/assets/js/slick-slider.min.js'></script>
	<script type='text/javascript' src='wp-content/themes/seoes/assets/js/magnific-popup.min.js'></script>
	<script type='text/javascript' src='wp-content/themes/seoes/assets/js/waypoints.min.js'></script>
	<script type='text/javascript' src='wp-content/themes/seoes/assets/js/counterup.min.js'></script>
	<script type='text/javascript' src='wp-content/themes/seoes/assets/js/particles.min.js'></script>
	<script type='text/javascript' src='wp-content/themes/seoes/assets/js/jquery.sticky-sidebar.min.js'></script>
	<script type='text/javascript' src='wp-content/themes/seoes/assets/js/tilt.jquery.js'></script>
	<script type='text/javascript' src='wp-content/themes/seoes/assets/js/theme.js'></script>
	<script type='text/javascript' src='wp-includes/js/imagesloaded.min.js'></script>
	<script type='text/javascript' src='wp-includes/js/masonry.min.js'></script>
	<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js'></script>
	<!-- <script type='text/javascript'>
		/* <![CDATA[ */
		var woocommerce_params = {
			"ajax_url": "\/wp-admin\/admin-ajax.php",
			"wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
		};
		/* ]]> */
	</script> -->
	<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js'></script>
	<!-- <script type='text/javascript'>
		/* <![CDATA[ */
		var wc_country_select_params = {
			"countries": "{\"AF\":[],\"AO\":{\"BGO\":\"Bengo\",\"BLU\":\"Benguela\",\"BIE\":\"Bi\\u00e9\",\"CAB\":\"Cabinda\",\"CNN\":\"Cunene\",\"HUA\":\"Huambo\",\"HUI\":\"Hu\\u00edla\",\"CCU\":\"Kuando Kubango\",\"CNO\":\"Kwanza-Norte\",\"CUS\":\"Kwanza-Sul\",\"LUA\":\"Luanda\",\"LNO\":\"Lunda-Norte\",\"LSU\":\"Lunda-Sul\",\"MAL\":\"Malanje\",\"MOX\":\"Moxico\",\"NAM\":\"Namibe\",\"UIG\":\"U\\u00edge\",\"ZAI\":\"Zaire\"},\"AR\":{\"C\":\"Ciudad Aut\u00f3noma de Buenos Aires\",\"B\":\"Buenos Aires\",\"K\":\"Catamarca\",\"H\":\"Chaco\",\"U\":\"Chubut\",\"X\":\"C\u00f3rdoba\",\"W\":\"Corrientes\",\"E\":\"Entre R\u00edos\",\"P\":\"Formosa\",\"Y\":\"Jujuy\",\"L\":\"La Pampa\",\"F\":\"La Rioja\",\"M\":\"Mendoza\",\"N\":\"Misiones\",\"Q\":\"Neuqu\u00e9n\",\"R\":\"R\u00edo Negro\",\"A\":\"Salta\",\"J\":\"San Juan\",\"D\":\"San Luis\",\"Z\":\"Santa Cruz\",\"S\":\"Santa Fe\",\"G\":\"Santiago del Estero\",\"V\":\"Tierra del Fuego\",\"T\":\"Tucum\u00e1n\"},\"AT\":[],\"AU\":{\"ACT\":\"Australian Capital Territory\",\"NSW\":\"New South Wales\",\"NT\":\"Northern Territory\",\"QLD\":\"Queensland\",\"SA\":\"South Australia\",\"TAS\":\"Tasmania\",\"VIC\":\"Victoria\",\"WA\":\"Western Australia\"},\"AX\":[],\"BD\":{\"BD-05\":\"Bagerhat\",\"BD-01\":\"Bandarban\",\"BD-02\":\"Barguna\",\"BD-06\":\"Barishal\",\"BD-07\":\"Bhola\",\"BD-03\":\"Bogura\",\"BD-04\":\"Brahmanbaria\",\"BD-09\":\"Chandpur\",\"BD-10\":\"Chattogram\",\"BD-12\":\"Chuadanga\",\"BD-11\":\"Cox's Bazar\",\"BD-08\":\"Cumilla\",\"BD-13\":\"Dhaka\",\"BD-14\":\"Dinajpur\",\"BD-15\":\"Faridpur \",\"BD-16\":\"Feni\",\"BD-19\":\"Gaibandha\",\"BD-18\":\"Gazipur\",\"BD-17\":\"Gopalganj\",\"BD-20\":\"Habiganj\",\"BD-21\":\"Jamalpur\",\"BD-22\":\"Jashore\",\"BD-25\":\"Jhalokati\",\"BD-23\":\"Jhenaidah\",\"BD-24\":\"Joypurhat\",\"BD-29\":\"Khagrachhari\",\"BD-27\":\"Khulna\",\"BD-26\":\"Kishoreganj\",\"BD-28\":\"Kurigram\",\"BD-30\":\"Kushtia\",\"BD-31\":\"Lakshmipur\",\"BD-32\":\"Lalmonirhat\",\"BD-36\":\"Madaripur\",\"BD-37\":\"Magura\",\"BD-33\":\"Manikganj \",\"BD-39\":\"Meherpur\",\"BD-38\":\"Moulvibazar\",\"BD-35\":\"Munshiganj\",\"BD-34\":\"Mymensingh\",\"BD-48\":\"Naogaon\",\"BD-43\":\"Narail\",\"BD-40\":\"Narayanganj\",\"BD-42\":\"Narsingdi\",\"BD-44\":\"Natore\",\"BD-45\":\"Nawabganj\",\"BD-41\":\"Netrakona\",\"BD-46\":\"Nilphamari\",\"BD-47\":\"Noakhali\",\"BD-49\":\"Pabna\",\"BD-52\":\"Panchagarh\",\"BD-51\":\"Patuakhali\",\"BD-50\":\"Pirojpur\",\"BD-53\":\"Rajbari\",\"BD-54\":\"Rajshahi\",\"BD-56\":\"Rangamati\",\"BD-55\":\"Rangpur\",\"BD-58\":\"Satkhira\",\"BD-62\":\"Shariatpur\",\"BD-57\":\"Sherpur\",\"BD-59\":\"Sirajganj\",\"BD-61\":\"Sunamganj\",\"BD-60\":\"Sylhet\",\"BD-63\":\"Tangail\",\"BD-64\":\"Thakurgaon\"},\"BE\":[],\"BG\":{\"BG-01\":\"Blagoevgrad\",\"BG-02\":\"Burgas\",\"BG-08\":\"Dobrich\",\"BG-07\":\"Gabrovo\",\"BG-26\":\"Haskovo\",\"BG-09\":\"Kardzhali\",\"BG-10\":\"Kyustendil\",\"BG-11\":\"Lovech\",\"BG-12\":\"Montana\",\"BG-13\":\"Pazardzhik\",\"BG-14\":\"Pernik\",\"BG-15\":\"Pleven\",\"BG-16\":\"Plovdiv\",\"BG-17\":\"Razgrad\",\"BG-18\":\"Ruse\",\"BG-27\":\"Shumen\",\"BG-19\":\"Silistra\",\"BG-20\":\"Sliven\",\"BG-21\":\"Smolyan\",\"BG-23\":\"Sofia\",\"BG-22\":\"Sofia-Grad\",\"BG-24\":\"Stara Zagora\",\"BG-25\":\"Targovishte\",\"BG-03\":\"Varna\",\"BG-04\":\"Veliko Tarnovo\",\"BG-05\":\"Vidin\",\"BG-06\":\"Vratsa\",\"BG-28\":\"Yambol\"},\"BH\":[],\"BI\":[],\"BO\":{\"B\":\"Chuquisaca\",\"H\":\"Beni\",\"C\":\"Cochabamba\",\"L\":\"La Paz\",\"O\":\"Oruro\",\"N\":\"Pando\",\"P\":\"Potos\\u00ed\",\"S\":\"Santa Cruz\",\"T\":\"Tarija\"},\"BR\":{\"AC\":\"Acre\",\"AL\":\"Alagoas\",\"AP\":\"Amap\u00e1\",\"AM\":\"Amazonas\",\"BA\":\"Bahia\",\"CE\":\"Cear\u00e1\",\"DF\":\"Distrito Federal\",\"ES\":\"Esp\u00edrito Santo\",\"GO\":\"Goi\u00e1s\",\"MA\":\"Maranh\u00e3o\",\"MT\":\"Mato Grosso\",\"MS\":\"Mato Grosso do Sul\",\"MG\":\"Minas Gerais\",\"PA\":\"Par\u00e1\",\"PB\":\"Para\u00edba\",\"PR\":\"Paran\u00e1\",\"PE\":\"Pernambuco\",\"PI\":\"Piau\u00ed\",\"RJ\":\"Rio de Janeiro\",\"RN\":\"Rio Grande do Norte\",\"RS\":\"Rio Grande do Sul\",\"RO\":\"Rond\u00f4nia\",\"RR\":\"Roraima\",\"SC\":\"Santa Catarina\",\"SP\":\"S\u00e3o Paulo\",\"SE\":\"Sergipe\",\"TO\":\"Tocantins\"},\"CA\":{\"AB\":\"Alberta\",\"BC\":\"British Columbia\",\"MB\":\"Manitoba\",\"NB\":\"New Brunswick\",\"NL\":\"Newfoundland and Labrador\",\"NT\":\"Northwest Territories\",\"NS\":\"Nova Scotia\",\"NU\":\"Nunavut\",\"ON\":\"Ontario\",\"PE\":\"Prince Edward Island\",\"QC\":\"Quebec\",\"SK\":\"Saskatchewan\",\"YT\":\"Yukon Territory\"},\"CH\":{\"AG\":\"Aargau\",\"AR\":\"Appenzell Ausserrhoden\",\"AI\":\"Appenzell Innerrhoden\",\"BL\":\"Basel-Landschaft\",\"BS\":\"Basel-Stadt\",\"BE\":\"Bern\",\"FR\":\"Fribourg\",\"GE\":\"Geneva\",\"GL\":\"Glarus\",\"GR\":\"Graub\u00fcnden\",\"JU\":\"Jura\",\"LU\":\"Luzern\",\"NE\":\"Neuch\u00e2tel\",\"NW\":\"Nidwalden\",\"OW\":\"Obwalden\",\"SH\":\"Schaffhausen\",\"SZ\":\"Schwyz\",\"SO\":\"Solothurn\",\"SG\":\"St. Gallen\",\"TG\":\"Thurgau\",\"TI\":\"Ticino\",\"UR\":\"Uri\",\"VS\":\"Valais\",\"VD\":\"Vaud\",\"ZG\":\"Zug\",\"ZH\":\"Z\u00fcrich\"},\"CN\":{\"CN1\":\"Yunnan \\\/ \u4e91\u5357\",\"CN2\":\"Beijing \\\/ \u5317\u4eac\",\"CN3\":\"Tianjin \\\/ \u5929\u6d25\",\"CN4\":\"Hebei \\\/ \u6cb3\u5317\",\"CN5\":\"Shanxi \\\/ \u5c71\u897f\",\"CN6\":\"Inner Mongolia \\\/ \u5167\u8499\u53e4\",\"CN7\":\"Liaoning \\\/ \u8fbd\u5b81\",\"CN8\":\"Jilin \\\/ \u5409\u6797\",\"CN9\":\"Heilongjiang \\\/ \u9ed1\u9f99\u6c5f\",\"CN10\":\"Shanghai \\\/ \u4e0a\u6d77\",\"CN11\":\"Jiangsu \\\/ \u6c5f\u82cf\",\"CN12\":\"Zhejiang \\\/ \u6d59\u6c5f\",\"CN13\":\"Anhui \\\/ \u5b89\u5fbd\",\"CN14\":\"Fujian \\\/ \u798f\u5efa\",\"CN15\":\"Jiangxi \\\/ \u6c5f\u897f\",\"CN16\":\"Shandong \\\/ \u5c71\u4e1c\",\"CN17\":\"Henan \\\/ \u6cb3\u5357\",\"CN18\":\"Hubei \\\/ \u6e56\u5317\",\"CN19\":\"Hunan \\\/ \u6e56\u5357\",\"CN20\":\"Guangdong \\\/ \u5e7f\u4e1c\",\"CN21\":\"Guangxi Zhuang \\\/ \u5e7f\u897f\u58ee\u65cf\",\"CN22\":\"Hainan \\\/ \u6d77\u5357\",\"CN23\":\"Chongqing \\\/ \u91cd\u5e86\",\"CN24\":\"Sichuan \\\/ \u56db\u5ddd\",\"CN25\":\"Guizhou \\\/ \u8d35\u5dde\",\"CN26\":\"Shaanxi \\\/ \u9655\u897f\",\"CN27\":\"Gansu \\\/ \u7518\u8083\",\"CN28\":\"Qinghai \\\/ \u9752\u6d77\",\"CN29\":\"Ningxia Hui \\\/ \u5b81\u590f\",\"CN30\":\"Macao \\\/ \u6fb3\u95e8\",\"CN31\":\"Tibet \\\/ \u897f\u85cf\",\"CN32\":\"Xinjiang \\\/ \u65b0\u7586\"},\"CZ\":[],\"DE\":[],\"DK\":[],\"EE\":[],\"ES\":{\"C\":\"A Coru\u00f1a\",\"VI\":\"Araba\\\/\u00c1lava\",\"AB\":\"Albacete\",\"A\":\"Alicante\",\"AL\":\"Almer\u00eda\",\"O\":\"Asturias\",\"AV\":\"\u00c1vila\",\"BA\":\"Badajoz\",\"PM\":\"Baleares\",\"B\":\"Barcelona\",\"BU\":\"Burgos\",\"CC\":\"C\u00e1ceres\",\"CA\":\"C\u00e1diz\",\"S\":\"Cantabria\",\"CS\":\"Castell\u00f3n\",\"CE\":\"Ceuta\",\"CR\":\"Ciudad Real\",\"CO\":\"C\u00f3rdoba\",\"CU\":\"Cuenca\",\"GI\":\"Girona\",\"GR\":\"Granada\",\"GU\":\"Guadalajara\",\"SS\":\"Gipuzkoa\",\"H\":\"Huelva\",\"HU\":\"Huesca\",\"J\":\"Ja\u00e9n\",\"LO\":\"La Rioja\",\"GC\":\"Las Palmas\",\"LE\":\"Le\u00f3n\",\"L\":\"Lleida\",\"LU\":\"Lugo\",\"M\":\"Madrid\",\"MA\":\"M\u00e1laga\",\"ML\":\"Melilla\",\"MU\":\"Murcia\",\"NA\":\"Navarra\",\"OR\":\"Ourense\",\"P\":\"Palencia\",\"PO\":\"Pontevedra\",\"SA\":\"Salamanca\",\"TF\":\"Santa Cruz de Tenerife\",\"SG\":\"Segovia\",\"SE\":\"Sevilla\",\"SO\":\"Soria\",\"T\":\"Tarragona\",\"TE\":\"Teruel\",\"TO\":\"Toledo\",\"V\":\"Valencia\",\"VA\":\"Valladolid\",\"BI\":\"Bizkaia\",\"ZA\":\"Zamora\",\"Z\":\"Zaragoza\"},\"FI\":[],\"FR\":[],\"GP\":[],\"GR\":{\"I\":\"\\u0391\\u03c4\\u03c4\\u03b9\\u03ba\\u03ae\",\"A\":\"\\u0391\\u03bd\\u03b1\\u03c4\\u03bf\\u03bb\\u03b9\\u03ba\\u03ae \\u039c\\u03b1\\u03ba\\u03b5\\u03b4\\u03bf\\u03bd\\u03af\\u03b1 \\u03ba\\u03b1\\u03b9 \\u0398\\u03c1\\u03ac\\u03ba\\u03b7\",\"B\":\"\\u039a\\u03b5\\u03bd\\u03c4\\u03c1\\u03b9\\u03ba\\u03ae \\u039c\\u03b1\\u03ba\\u03b5\\u03b4\\u03bf\\u03bd\\u03af\\u03b1\",\"C\":\"\\u0394\\u03c5\\u03c4\\u03b9\\u03ba\\u03ae \\u039c\\u03b1\\u03ba\\u03b5\\u03b4\\u03bf\\u03bd\\u03af\\u03b1\",\"D\":\"\\u0389\\u03c0\\u03b5\\u03b9\\u03c1\\u03bf\\u03c2\",\"E\":\"\\u0398\\u03b5\\u03c3\\u03c3\\u03b1\\u03bb\\u03af\\u03b1\",\"F\":\"\\u0399\\u03cc\\u03bd\\u03b9\\u03bf\\u03b9 \\u039d\\u03ae\\u03c3\\u03bf\\u03b9\",\"G\":\"\\u0394\\u03c5\\u03c4\\u03b9\\u03ba\\u03ae \\u0395\\u03bb\\u03bb\\u03ac\\u03b4\\u03b1\",\"H\":\"\\u03a3\\u03c4\\u03b5\\u03c1\\u03b5\\u03ac \\u0395\\u03bb\\u03bb\\u03ac\\u03b4\\u03b1\",\"J\":\"\\u03a0\\u03b5\\u03bb\\u03bf\\u03c0\\u03cc\\u03bd\\u03bd\\u03b7\\u03c3\\u03bf\\u03c2\",\"K\":\"\\u0392\\u03cc\\u03c1\\u03b5\\u03b9\\u03bf \\u0391\\u03b9\\u03b3\\u03b1\\u03af\\u03bf\",\"L\":\"\\u039d\\u03cc\\u03c4\\u03b9\\u03bf \\u0391\\u03b9\\u03b3\\u03b1\\u03af\\u03bf\",\"M\":\"\\u039a\\u03c1\\u03ae\\u03c4\\u03b7\"},\"GF\":[],\"HK\":{\"HONG KONG\":\"Hong Kong Island\",\"KOWLOON\":\"Kowloon\",\"NEW TERRITORIES\":\"New Territories\"},\"HU\":{\"BK\":\"B\\u00e1cs-Kiskun\",\"BE\":\"B\\u00e9k\\u00e9s\",\"BA\":\"Baranya\",\"BZ\":\"Borsod-Aba\\u00faj-Zempl\\u00e9n\",\"BU\":\"Budapest\",\"CS\":\"Csongr\\u00e1d\",\"FE\":\"Fej\\u00e9r\",\"GS\":\"Gy\\u0151r-Moson-Sopron\",\"HB\":\"Hajd\\u00fa-Bihar\",\"HE\":\"Heves\",\"JN\":\"J\\u00e1sz-Nagykun-Szolnok\",\"KE\":\"Kom\\u00e1rom-Esztergom\",\"NO\":\"N\\u00f3gr\\u00e1d\",\"PE\":\"Pest\",\"SO\":\"Somogy\",\"SZ\":\"Szabolcs-Szatm\\u00e1r-Bereg\",\"TO\":\"Tolna\",\"VA\":\"Vas\",\"VE\":\"Veszpr\\u00e9m\",\"ZA\":\"Zala\"},\"ID\":{\"AC\":\"Daerah Istimewa Aceh\",\"SU\":\"Sumatera Utara\",\"SB\":\"Sumatera Barat\",\"RI\":\"Riau\",\"KR\":\"Kepulauan Riau\",\"JA\":\"Jambi\",\"SS\":\"Sumatera Selatan\",\"BB\":\"Bangka Belitung\",\"BE\":\"Bengkulu\",\"LA\":\"Lampung\",\"JK\":\"DKI Jakarta\",\"JB\":\"Jawa Barat\",\"BT\":\"Banten\",\"JT\":\"Jawa Tengah\",\"JI\":\"Jawa Timur\",\"YO\":\"Daerah Istimewa Yogyakarta\",\"BA\":\"Bali\",\"NB\":\"Nusa Tenggara Barat\",\"NT\":\"Nusa Tenggara Timur\",\"KB\":\"Kalimantan Barat\",\"KT\":\"Kalimantan Tengah\",\"KI\":\"Kalimantan Timur\",\"KS\":\"Kalimantan Selatan\",\"KU\":\"Kalimantan Utara\",\"SA\":\"Sulawesi Utara\",\"ST\":\"Sulawesi Tengah\",\"SG\":\"Sulawesi Tenggara\",\"SR\":\"Sulawesi Barat\",\"SN\":\"Sulawesi Selatan\",\"GO\":\"Gorontalo\",\"MA\":\"Maluku\",\"MU\":\"Maluku Utara\",\"PA\":\"Papua\",\"PB\":\"Papua Barat\"},\"IE\":{\"CW\":\"Carlow\",\"CN\":\"Cavan\",\"CE\":\"Clare\",\"CO\":\"Cork\",\"DL\":\"Donegal\",\"D\":\"Dublin\",\"G\":\"Galway\",\"KY\":\"Kerry\",\"KE\":\"Kildare\",\"KK\":\"Kilkenny\",\"LS\":\"Laois\",\"LM\":\"Leitrim\",\"LK\":\"Limerick\",\"LD\":\"Longford\",\"LH\":\"Louth\",\"MO\":\"Mayo\",\"MH\":\"Meath\",\"MN\":\"Monaghan\",\"OY\":\"Offaly\",\"RN\":\"Roscommon\",\"SO\":\"Sligo\",\"TA\":\"Tipperary\",\"WD\":\"Waterford\",\"WH\":\"Westmeath\",\"WX\":\"Wexford\",\"WW\":\"Wicklow\"},\"IN\":{\"AP\":\"Andhra Pradesh\",\"AR\":\"Arunachal Pradesh\",\"AS\":\"Assam\",\"BR\":\"Bihar\",\"CT\":\"Chhattisgarh\",\"GA\":\"Goa\",\"GJ\":\"Gujarat\",\"HR\":\"Haryana\",\"HP\":\"Himachal Pradesh\",\"JK\":\"Jammu and Kashmir\",\"JH\":\"Jharkhand\",\"KA\":\"Karnataka\",\"KL\":\"Kerala\",\"MP\":\"Madhya Pradesh\",\"MH\":\"Maharashtra\",\"MN\":\"Manipur\",\"ML\":\"Meghalaya\",\"MZ\":\"Mizoram\",\"NL\":\"Nagaland\",\"OR\":\"Orissa\",\"PB\":\"Punjab\",\"RJ\":\"Rajasthan\",\"SK\":\"Sikkim\",\"TN\":\"Tamil Nadu\",\"TS\":\"Telangana\",\"TR\":\"Tripura\",\"UK\":\"Uttarakhand\",\"UP\":\"Uttar Pradesh\",\"WB\":\"West Bengal\",\"AN\":\"Andaman and Nicobar Islands\",\"CH\":\"Chandigarh\",\"DN\":\"Dadra and Nagar Haveli\",\"DD\":\"Daman and Diu\",\"DL\":\"Delhi\",\"LD\":\"Lakshadeep\",\"PY\":\"Pondicherry (Puducherry)\"},\"IR\":{\"KHZ\":\"Khuzestan  (\\u062e\\u0648\\u0632\\u0633\\u062a\\u0627\\u0646)\",\"THR\":\"Tehran  (\\u062a\\u0647\\u0631\\u0627\\u0646)\",\"ILM\":\"Ilaam (\\u0627\\u06cc\\u0644\\u0627\\u0645)\",\"BHR\":\"Bushehr (\\u0628\\u0648\\u0634\\u0647\\u0631)\",\"ADL\":\"Ardabil (\\u0627\\u0631\\u062f\\u0628\\u06cc\\u0644)\",\"ESF\":\"Isfahan (\\u0627\\u0635\\u0641\\u0647\\u0627\\u0646)\",\"YZD\":\"Yazd (\\u06cc\\u0632\\u062f)\",\"KRH\":\"Kermanshah (\\u06a9\\u0631\\u0645\\u0627\\u0646\\u0634\\u0627\\u0647)\",\"KRN\":\"Kerman (\\u06a9\\u0631\\u0645\\u0627\\u0646)\",\"HDN\":\"Hamadan (\\u0647\\u0645\\u062f\\u0627\\u0646)\",\"GZN\":\"Ghazvin (\\u0642\\u0632\\u0648\\u06cc\\u0646)\",\"ZJN\":\"Zanjan (\\u0632\\u0646\\u062c\\u0627\\u0646)\",\"LRS\":\"Luristan (\\u0644\\u0631\\u0633\\u062a\\u0627\\u0646)\",\"ABZ\":\"Alborz (\\u0627\\u0644\\u0628\\u0631\\u0632)\",\"EAZ\":\"East Azarbaijan (\\u0622\\u0630\\u0631\\u0628\\u0627\\u06cc\\u062c\\u0627\\u0646 \\u0634\\u0631\\u0642\\u06cc)\",\"WAZ\":\"West Azarbaijan (\\u0622\\u0630\\u0631\\u0628\\u0627\\u06cc\\u062c\\u0627\\u0646 \\u063a\\u0631\\u0628\\u06cc)\",\"CHB\":\"Chaharmahal and Bakhtiari (\\u0686\\u0647\\u0627\\u0631\\u0645\\u062d\\u0627\\u0644 \\u0648 \\u0628\\u062e\\u062a\\u06cc\\u0627\\u0631\\u06cc)\",\"SKH\":\"South Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u062c\\u0646\\u0648\\u0628\\u06cc)\",\"RKH\":\"Razavi Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u0631\\u0636\\u0648\\u06cc)\",\"NKH\":\"North Khorasan (\\u062e\\u0631\\u0627\\u0633\\u0627\\u0646 \\u0634\\u0645\\u0627\\u0644\\u06cc)\",\"SMN\":\"Semnan (\\u0633\\u0645\\u0646\\u0627\\u0646)\",\"FRS\":\"Fars (\\u0641\\u0627\\u0631\\u0633)\",\"QHM\":\"Qom (\\u0642\\u0645)\",\"KRD\":\"Kurdistan \\\/ \\u06a9\\u0631\\u062f\\u0633\\u062a\\u0627\\u0646)\",\"KBD\":\"Kohgiluyeh and BoyerAhmad (\\u06a9\\u0647\\u06af\\u06cc\\u0644\\u0648\\u06cc\\u06cc\\u0647 \\u0648 \\u0628\\u0648\\u06cc\\u0631\\u0627\\u062d\\u0645\\u062f)\",\"GLS\":\"Golestan (\\u06af\\u0644\\u0633\\u062a\\u0627\\u0646)\",\"GIL\":\"Gilan (\\u06af\\u06cc\\u0644\\u0627\\u0646)\",\"MZN\":\"Mazandaran (\\u0645\\u0627\\u0632\\u0646\\u062f\\u0631\\u0627\\u0646)\",\"MKZ\":\"Markazi (\\u0645\\u0631\\u06a9\\u0632\\u06cc)\",\"HRZ\":\"Hormozgan (\\u0647\\u0631\\u0645\\u0632\\u06af\\u0627\\u0646)\",\"SBN\":\"Sistan and Baluchestan (\\u0633\\u06cc\\u0633\\u062a\\u0627\\u0646 \\u0648 \\u0628\\u0644\\u0648\\u0686\\u0633\\u062a\\u0627\\u0646)\"},\"IS\":[],\"IT\":{\"AG\":\"Agrigento\",\"AL\":\"Alessandria\",\"AN\":\"Ancona\",\"AO\":\"Aosta\",\"AR\":\"Arezzo\",\"AP\":\"Ascoli Piceno\",\"AT\":\"Asti\",\"AV\":\"Avellino\",\"BA\":\"Bari\",\"BT\":\"Barletta-Andria-Trani\",\"BL\":\"Belluno\",\"BN\":\"Benevento\",\"BG\":\"Bergamo\",\"BI\":\"Biella\",\"BO\":\"Bologna\",\"BZ\":\"Bolzano\",\"BS\":\"Brescia\",\"BR\":\"Brindisi\",\"CA\":\"Cagliari\",\"CL\":\"Caltanissetta\",\"CB\":\"Campobasso\",\"CE\":\"Caserta\",\"CT\":\"Catania\",\"CZ\":\"Catanzaro\",\"CH\":\"Chieti\",\"CO\":\"Como\",\"CS\":\"Cosenza\",\"CR\":\"Cremona\",\"KR\":\"Crotone\",\"CN\":\"Cuneo\",\"EN\":\"Enna\",\"FM\":\"Fermo\",\"FE\":\"Ferrara\",\"FI\":\"Firenze\",\"FG\":\"Foggia\",\"FC\":\"Forl\\u00ec-Cesena\",\"FR\":\"Frosinone\",\"GE\":\"Genova\",\"GO\":\"Gorizia\",\"GR\":\"Grosseto\",\"IM\":\"Imperia\",\"IS\":\"Isernia\",\"SP\":\"La Spezia\",\"AQ\":\"L'Aquila\",\"LT\":\"Latina\",\"LE\":\"Lecce\",\"LC\":\"Lecco\",\"LI\":\"Livorno\",\"LO\":\"Lodi\",\"LU\":\"Lucca\",\"MC\":\"Macerata\",\"MN\":\"Mantova\",\"MS\":\"Massa-Carrara\",\"MT\":\"Matera\",\"ME\":\"Messina\",\"MI\":\"Milano\",\"MO\":\"Modena\",\"MB\":\"Monza e della Brianza\",\"NA\":\"Napoli\",\"NO\":\"Novara\",\"NU\":\"Nuoro\",\"OR\":\"Oristano\",\"PD\":\"Padova\",\"PA\":\"Palermo\",\"PR\":\"Parma\",\"PV\":\"Pavia\",\"PG\":\"Perugia\",\"PU\":\"Pesaro e Urbino\",\"PE\":\"Pescara\",\"PC\":\"Piacenza\",\"PI\":\"Pisa\",\"PT\":\"Pistoia\",\"PN\":\"Pordenone\",\"PZ\":\"Potenza\",\"PO\":\"Prato\",\"RG\":\"Ragusa\",\"RA\":\"Ravenna\",\"RC\":\"Reggio Calabria\",\"RE\":\"Reggio Emilia\",\"RI\":\"Rieti\",\"RN\":\"Rimini\",\"RM\":\"Roma\",\"RO\":\"Rovigo\",\"SA\":\"Salerno\",\"SS\":\"Sassari\",\"SV\":\"Savona\",\"SI\":\"Siena\",\"SR\":\"Siracusa\",\"SO\":\"Sondrio\",\"SU\":\"Sud Sardegna\",\"TA\":\"Taranto\",\"TE\":\"Teramo\",\"TR\":\"Terni\",\"TO\":\"Torino\",\"TP\":\"Trapani\",\"TN\":\"Trento\",\"TV\":\"Treviso\",\"TS\":\"Trieste\",\"UD\":\"Udine\",\"VA\":\"Varese\",\"VE\":\"Venezia\",\"VB\":\"Verbano-Cusio-Ossola\",\"VC\":\"Vercelli\",\"VR\":\"Verona\",\"VV\":\"Vibo Valentia\",\"VI\":\"Vicenza\",\"VT\":\"Viterbo\"},\"IL\":[],\"IM\":[],\"JP\":{\"JP01\":\"Hokkaido\",\"JP02\":\"Aomori\",\"JP03\":\"Iwate\",\"JP04\":\"Miyagi\",\"JP05\":\"Akita\",\"JP06\":\"Yamagata\",\"JP07\":\"Fukushima\",\"JP08\":\"Ibaraki\",\"JP09\":\"Tochigi\",\"JP10\":\"Gunma\",\"JP11\":\"Saitama\",\"JP12\":\"Chiba\",\"JP13\":\"Tokyo\",\"JP14\":\"Kanagawa\",\"JP15\":\"Niigata\",\"JP16\":\"Toyama\",\"JP17\":\"Ishikawa\",\"JP18\":\"Fukui\",\"JP19\":\"Yamanashi\",\"JP20\":\"Nagano\",\"JP21\":\"Gifu\",\"JP22\":\"Shizuoka\",\"JP23\":\"Aichi\",\"JP24\":\"Mie\",\"JP25\":\"Shiga\",\"JP26\":\"Kyoto\",\"JP27\":\"Osaka\",\"JP28\":\"Hyogo\",\"JP29\":\"Nara\",\"JP30\":\"Wakayama\",\"JP31\":\"Tottori\",\"JP32\":\"Shimane\",\"JP33\":\"Okayama\",\"JP34\":\"Hiroshima\",\"JP35\":\"Yamaguchi\",\"JP36\":\"Tokushima\",\"JP37\":\"Kagawa\",\"JP38\":\"Ehime\",\"JP39\":\"Kochi\",\"JP40\":\"Fukuoka\",\"JP41\":\"Saga\",\"JP42\":\"Nagasaki\",\"JP43\":\"Kumamoto\",\"JP44\":\"Oita\",\"JP45\":\"Miyazaki\",\"JP46\":\"Kagoshima\",\"JP47\":\"Okinawa\"},\"KR\":[],\"KW\":[],\"LB\":[],\"LR\":{\"BM\":\"Bomi\",\"BN\":\"Bong\",\"GA\":\"Gbarpolu\",\"GB\":\"Grand Bassa\",\"GC\":\"Grand Cape Mount\",\"GG\":\"Grand Gedeh\",\"GK\":\"Grand Kru\",\"LO\":\"Lofa\",\"MA\":\"Margibi\",\"MY\":\"Maryland\",\"MO\":\"Montserrado\",\"NM\":\"Nimba\",\"RV\":\"Rivercess\",\"RG\":\"River Gee\",\"SN\":\"Sinoe\"},\"LU\":[],\"MD\":{\"C\":\"Chi\u0219in\u0103u\",\"BL\":\"B\u0103l\u021bi\",\"AN\":\"Anenii Noi\",\"BS\":\"Basarabeasca\",\"BR\":\"Briceni\",\"CH\":\"Cahul\",\"CT\":\"Cantemir\",\"CL\":\"C\u0103l\u0103ra\u0219i\",\"CS\":\"C\u0103u\u0219eni\",\"CM\":\"Cimi\u0219lia\",\"CR\":\"Criuleni\",\"DN\":\"Dondu\u0219eni\",\"DR\":\"Drochia\",\"DB\":\"Dub\u0103sari\",\"ED\":\"Edine\u021b\",\"FL\":\"F\u0103le\u0219ti\",\"FR\":\"Flore\u0219ti\",\"GE\":\"UTA G\u0103g\u0103uzia\",\"GL\":\"Glodeni\",\"HN\":\"H\u00eence\u0219ti\",\"IL\":\"Ialoveni\",\"LV\":\"Leova\",\"NS\":\"Nisporeni\",\"OC\":\"Ocni\u021ba\",\"OR\":\"Orhei\",\"RZ\":\"Rezina\",\"RS\":\"R\u00ee\u0219cani\",\"SG\":\"S\u00eengerei\",\"SR\":\"Soroca\",\"ST\":\"Str\u0103\u0219eni\",\"SD\":\"\u0218old\u0103ne\u0219ti\",\"SV\":\"\u0218tefan Vod\u0103\",\"TR\":\"Taraclia\",\"TL\":\"Telene\u0219ti\",\"UN\":\"Ungheni\"},\"MQ\":[],\"MT\":[],\"MX\":{\"DF\":\"Ciudad de M\u00e9xico\",\"JA\":\"Jalisco\",\"NL\":\"Nuevo Le\u00f3n\",\"AG\":\"Aguascalientes\",\"BC\":\"Baja California\",\"BS\":\"Baja California Sur\",\"CM\":\"Campeche\",\"CS\":\"Chiapas\",\"CH\":\"Chihuahua\",\"CO\":\"Coahuila\",\"CL\":\"Colima\",\"DG\":\"Durango\",\"GT\":\"Guanajuato\",\"GR\":\"Guerrero\",\"HG\":\"Hidalgo\",\"MX\":\"Estado de M\u00e9xico\",\"MI\":\"Michoac\u00e1n\",\"MO\":\"Morelos\",\"NA\":\"Nayarit\",\"OA\":\"Oaxaca\",\"PU\":\"Puebla\",\"QT\":\"Quer\u00e9taro\",\"QR\":\"Quintana Roo\",\"SL\":\"San Luis Potos\u00ed\",\"SI\":\"Sinaloa\",\"SO\":\"Sonora\",\"TB\":\"Tabasco\",\"TM\":\"Tamaulipas\",\"TL\":\"Tlaxcala\",\"VE\":\"Veracruz\",\"YU\":\"Yucat\u00e1n\",\"ZA\":\"Zacatecas\"},\"MY\":{\"JHR\":\"Johor\",\"KDH\":\"Kedah\",\"KTN\":\"Kelantan\",\"LBN\":\"Labuan\",\"MLK\":\"Malacca (Melaka)\",\"NSN\":\"Negeri Sembilan\",\"PHG\":\"Pahang\",\"PNG\":\"Penang (Pulau Pinang)\",\"PRK\":\"Perak\",\"PLS\":\"Perlis\",\"SBH\":\"Sabah\",\"SWK\":\"Sarawak\",\"SGR\":\"Selangor\",\"TRG\":\"Terengganu\",\"PJY\":\"Putrajaya\",\"KUL\":\"Kuala Lumpur\"},\"NG\":{\"AB\":\"Abia\",\"FC\":\"Abuja\",\"AD\":\"Adamawa\",\"AK\":\"Akwa Ibom\",\"AN\":\"Anambra\",\"BA\":\"Bauchi\",\"BY\":\"Bayelsa\",\"BE\":\"Benue\",\"BO\":\"Borno\",\"CR\":\"Cross River\",\"DE\":\"Delta\",\"EB\":\"Ebonyi\",\"ED\":\"Edo\",\"EK\":\"Ekiti\",\"EN\":\"Enugu\",\"GO\":\"Gombe\",\"IM\":\"Imo\",\"JI\":\"Jigawa\",\"KD\":\"Kaduna\",\"KN\":\"Kano\",\"KT\":\"Katsina\",\"KE\":\"Kebbi\",\"KO\":\"Kogi\",\"KW\":\"Kwara\",\"LA\":\"Lagos\",\"NA\":\"Nasarawa\",\"NI\":\"Niger\",\"OG\":\"Ogun\",\"ON\":\"Ondo\",\"OS\":\"Osun\",\"OY\":\"Oyo\",\"PL\":\"Plateau\",\"RI\":\"Rivers\",\"SO\":\"Sokoto\",\"TA\":\"Taraba\",\"YO\":\"Yobe\",\"ZA\":\"Zamfara\"},\"NL\":[],\"NO\":[],\"NP\":{\"BAG\":\"Bagmati\",\"BHE\":\"Bheri\",\"DHA\":\"Dhaulagiri\",\"GAN\":\"Gandaki\",\"JAN\":\"Janakpur\",\"KAR\":\"Karnali\",\"KOS\":\"Koshi\",\"LUM\":\"Lumbini\",\"MAH\":\"Mahakali\",\"MEC\":\"Mechi\",\"NAR\":\"Narayani\",\"RAP\":\"Rapti\",\"SAG\":\"Sagarmatha\",\"SET\":\"Seti\"},\"NZ\":{\"NL\":\"Northland\",\"AK\":\"Auckland\",\"WA\":\"Waikato\",\"BP\":\"Bay of Plenty\",\"TK\":\"Taranaki\",\"GI\":\"Gisborne\",\"HB\":\"Hawke\u2019s Bay\",\"MW\":\"Manawatu-Wanganui\",\"WE\":\"Wellington\",\"NS\":\"Nelson\",\"MB\":\"Marlborough\",\"TM\":\"Tasman\",\"WC\":\"West Coast\",\"CT\":\"Canterbury\",\"OT\":\"Otago\",\"SL\":\"Southland\"},\"PE\":{\"CAL\":\"El Callao\",\"LMA\":\"Municipalidad Metropolitana de Lima\",\"AMA\":\"Amazonas\",\"ANC\":\"Ancash\",\"APU\":\"Apur\u00edmac\",\"ARE\":\"Arequipa\",\"AYA\":\"Ayacucho\",\"CAJ\":\"Cajamarca\",\"CUS\":\"Cusco\",\"HUV\":\"Huancavelica\",\"HUC\":\"Hu\u00e1nuco\",\"ICA\":\"Ica\",\"JUN\":\"Jun\u00edn\",\"LAL\":\"La Libertad\",\"LAM\":\"Lambayeque\",\"LIM\":\"Lima\",\"LOR\":\"Loreto\",\"MDD\":\"Madre de Dios\",\"MOQ\":\"Moquegua\",\"PAS\":\"Pasco\",\"PIU\":\"Piura\",\"PUN\":\"Puno\",\"SAM\":\"San Mart\u00edn\",\"TAC\":\"Tacna\",\"TUM\":\"Tumbes\",\"UCA\":\"Ucayali\"},\"PH\":{\"ABR\":\"Abra\",\"AGN\":\"Agusan del Norte\",\"AGS\":\"Agusan del Sur\",\"AKL\":\"Aklan\",\"ALB\":\"Albay\",\"ANT\":\"Antique\",\"APA\":\"Apayao\",\"AUR\":\"Aurora\",\"BAS\":\"Basilan\",\"BAN\":\"Bataan\",\"BTN\":\"Batanes\",\"BTG\":\"Batangas\",\"BEN\":\"Benguet\",\"BIL\":\"Biliran\",\"BOH\":\"Bohol\",\"BUK\":\"Bukidnon\",\"BUL\":\"Bulacan\",\"CAG\":\"Cagayan\",\"CAN\":\"Camarines Norte\",\"CAS\":\"Camarines Sur\",\"CAM\":\"Camiguin\",\"CAP\":\"Capiz\",\"CAT\":\"Catanduanes\",\"CAV\":\"Cavite\",\"CEB\":\"Cebu\",\"COM\":\"Compostela Valley\",\"NCO\":\"Cotabato\",\"DAV\":\"Davao del Norte\",\"DAS\":\"Davao del Sur\",\"DAC\":\"Davao Occidental\",\"DAO\":\"Davao Oriental\",\"DIN\":\"Dinagat Islands\",\"EAS\":\"Eastern Samar\",\"GUI\":\"Guimaras\",\"IFU\":\"Ifugao\",\"ILN\":\"Ilocos Norte\",\"ILS\":\"Ilocos Sur\",\"ILI\":\"Iloilo\",\"ISA\":\"Isabela\",\"KAL\":\"Kalinga\",\"LUN\":\"La Union\",\"LAG\":\"Laguna\",\"LAN\":\"Lanao del Norte\",\"LAS\":\"Lanao del Sur\",\"LEY\":\"Leyte\",\"MAG\":\"Maguindanao\",\"MAD\":\"Marinduque\",\"MAS\":\"Masbate\",\"MSC\":\"Misamis Occidental\",\"MSR\":\"Misamis Oriental\",\"MOU\":\"Mountain Province\",\"NEC\":\"Negros Occidental\",\"NER\":\"Negros Oriental\",\"NSA\":\"Northern Samar\",\"NUE\":\"Nueva Ecija\",\"NUV\":\"Nueva Vizcaya\",\"MDC\":\"Occidental Mindoro\",\"MDR\":\"Oriental Mindoro\",\"PLW\":\"Palawan\",\"PAM\":\"Pampanga\",\"PAN\":\"Pangasinan\",\"QUE\":\"Quezon\",\"QUI\":\"Quirino\",\"RIZ\":\"Rizal\",\"ROM\":\"Romblon\",\"WSA\":\"Samar\",\"SAR\":\"Sarangani\",\"SIQ\":\"Siquijor\",\"SOR\":\"Sorsogon\",\"SCO\":\"South Cotabato\",\"SLE\":\"Southern Leyte\",\"SUK\":\"Sultan Kudarat\",\"SLU\":\"Sulu\",\"SUN\":\"Surigao del Norte\",\"SUR\":\"Surigao del Sur\",\"TAR\":\"Tarlac\",\"TAW\":\"Tawi-Tawi\",\"ZMB\":\"Zambales\",\"ZAN\":\"Zamboanga del Norte\",\"ZAS\":\"Zamboanga del Sur\",\"ZSI\":\"Zamboanga Sibugay\",\"00\":\"Metro Manila\"},\"PK\":{\"JK\":\"Azad Kashmir\",\"BA\":\"Balochistan\",\"TA\":\"FATA\",\"GB\":\"Gilgit Baltistan\",\"IS\":\"Islamabad Capital Territory\",\"KP\":\"Khyber Pakhtunkhwa\",\"PB\":\"Punjab\",\"SD\":\"Sindh\"},\"PL\":[],\"PT\":[],\"PY\":{\"PY-ASU\":\"Asunci\u00f3n\",\"PY-1\":\"Concepci\u00f3n\",\"PY-2\":\"San Pedro\",\"PY-3\":\"Cordillera\",\"PY-4\":\"Guair\u00e1\",\"PY-5\":\"Caaguaz\u00fa\",\"PY-6\":\"Caazap\u00e1\",\"PY-7\":\"Itap\u00faa\",\"PY-8\":\"Misiones\",\"PY-9\":\"Paraguar\u00ed\",\"PY-10\":\"Alto Paran\u00e1\",\"PY-11\":\"Central\",\"PY-12\":\"\u00d1eembuc\u00fa\",\"PY-13\":\"Amambay\",\"PY-14\":\"Canindey\u00fa\",\"PY-15\":\"Presidente Hayes\",\"PY-16\":\"Alto Paraguay\",\"PY-17\":\"Boquer\u00f3n\"},\"RE\":[],\"RO\":{\"AB\":\"Alba\",\"AR\":\"Arad\",\"AG\":\"Arge\u0219\",\"BC\":\"Bac\u0103u\",\"BH\":\"Bihor\",\"BN\":\"Bistri\u021ba-N\u0103s\u0103ud\",\"BT\":\"Boto\u0219ani\",\"BR\":\"Br\u0103ila\",\"BV\":\"Bra\u0219ov\",\"B\":\"Bucure\u0219ti\",\"BZ\":\"Buz\u0103u\",\"CL\":\"C\u0103l\u0103ra\u0219i\",\"CS\":\"Cara\u0219-Severin\",\"CJ\":\"Cluj\",\"CT\":\"Constan\u021ba\",\"CV\":\"Covasna\",\"DB\":\"D\u00e2mbovi\u021ba\",\"DJ\":\"Dolj\",\"GL\":\"Gala\u021bi\",\"GR\":\"Giurgiu\",\"GJ\":\"Gorj\",\"HR\":\"Harghita\",\"HD\":\"Hunedoara\",\"IL\":\"Ialomi\u021ba\",\"IS\":\"Ia\u0219i\",\"IF\":\"Ilfov\",\"MM\":\"Maramure\u0219\",\"MH\":\"Mehedin\u021bi\",\"MS\":\"Mure\u0219\",\"NT\":\"Neam\u021b\",\"OT\":\"Olt\",\"PH\":\"Prahova\",\"SJ\":\"S\u0103laj\",\"SM\":\"Satu Mare\",\"SB\":\"Sibiu\",\"SV\":\"Suceava\",\"TR\":\"Teleorman\",\"TM\":\"Timi\u0219\",\"TL\":\"Tulcea\",\"VL\":\"V\u00e2lcea\",\"VS\":\"Vaslui\",\"VN\":\"Vrancea\"},\"RS\":[],\"SG\":[],\"SK\":[],\"SI\":[],\"TH\":{\"TH-37\":\"Amnat Charoen\",\"TH-15\":\"Ang Thong\",\"TH-14\":\"Ayutthaya\",\"TH-10\":\"Bangkok\",\"TH-38\":\"Bueng Kan\",\"TH-31\":\"Buri Ram\",\"TH-24\":\"Chachoengsao\",\"TH-18\":\"Chai Nat\",\"TH-36\":\"Chaiyaphum\",\"TH-22\":\"Chanthaburi\",\"TH-50\":\"Chiang Mai\",\"TH-57\":\"Chiang Rai\",\"TH-20\":\"Chonburi\",\"TH-86\":\"Chumphon\",\"TH-46\":\"Kalasin\",\"TH-62\":\"Kamphaeng Phet\",\"TH-71\":\"Kanchanaburi\",\"TH-40\":\"Khon Kaen\",\"TH-81\":\"Krabi\",\"TH-52\":\"Lampang\",\"TH-51\":\"Lamphun\",\"TH-42\":\"Loei\",\"TH-16\":\"Lopburi\",\"TH-58\":\"Mae Hong Son\",\"TH-44\":\"Maha Sarakham\",\"TH-49\":\"Mukdahan\",\"TH-26\":\"Nakhon Nayok\",\"TH-73\":\"Nakhon Pathom\",\"TH-48\":\"Nakhon Phanom\",\"TH-30\":\"Nakhon Ratchasima\",\"TH-60\":\"Nakhon Sawan\",\"TH-80\":\"Nakhon Si Thammarat\",\"TH-55\":\"Nan\",\"TH-96\":\"Narathiwat\",\"TH-39\":\"Nong Bua Lam Phu\",\"TH-43\":\"Nong Khai\",\"TH-12\":\"Nonthaburi\",\"TH-13\":\"Pathum Thani\",\"TH-94\":\"Pattani\",\"TH-82\":\"Phang Nga\",\"TH-93\":\"Phatthalung\",\"TH-56\":\"Phayao\",\"TH-67\":\"Phetchabun\",\"TH-76\":\"Phetchaburi\",\"TH-66\":\"Phichit\",\"TH-65\":\"Phitsanulok\",\"TH-54\":\"Phrae\",\"TH-83\":\"Phuket\",\"TH-25\":\"Prachin Buri\",\"TH-77\":\"Prachuap Khiri Khan\",\"TH-85\":\"Ranong\",\"TH-70\":\"Ratchaburi\",\"TH-21\":\"Rayong\",\"TH-45\":\"Roi Et\",\"TH-27\":\"Sa Kaeo\",\"TH-47\":\"Sakon Nakhon\",\"TH-11\":\"Samut Prakan\",\"TH-74\":\"Samut Sakhon\",\"TH-75\":\"Samut Songkhram\",\"TH-19\":\"Saraburi\",\"TH-91\":\"Satun\",\"TH-17\":\"Sing Buri\",\"TH-33\":\"Sisaket\",\"TH-90\":\"Songkhla\",\"TH-64\":\"Sukhothai\",\"TH-72\":\"Suphan Buri\",\"TH-84\":\"Surat Thani\",\"TH-32\":\"Surin\",\"TH-63\":\"Tak\",\"TH-92\":\"Trang\",\"TH-23\":\"Trat\",\"TH-34\":\"Ubon Ratchathani\",\"TH-41\":\"Udon Thani\",\"TH-61\":\"Uthai Thani\",\"TH-53\":\"Uttaradit\",\"TH-95\":\"Yala\",\"TH-35\":\"Yasothon\"},\"TR\":{\"TR01\":\"Adana\",\"TR02\":\"Ad\u0131yaman\",\"TR03\":\"Afyon\",\"TR04\":\"A\u011fr\u0131\",\"TR05\":\"Amasya\",\"TR06\":\"Ankara\",\"TR07\":\"Antalya\",\"TR08\":\"Artvin\",\"TR09\":\"Ayd\u0131n\",\"TR10\":\"Bal\u0131kesir\",\"TR11\":\"Bilecik\",\"TR12\":\"Bing\u00f6l\",\"TR13\":\"Bitlis\",\"TR14\":\"Bolu\",\"TR15\":\"Burdur\",\"TR16\":\"Bursa\",\"TR17\":\"\u00c7anakkale\",\"TR18\":\"\u00c7ank\u0131r\u0131\",\"TR19\":\"\u00c7orum\",\"TR20\":\"Denizli\",\"TR21\":\"Diyarbak\u0131r\",\"TR22\":\"Edirne\",\"TR23\":\"Elaz\u0131\u011f\",\"TR24\":\"Erzincan\",\"TR25\":\"Erzurum\",\"TR26\":\"Eski\u015fehir\",\"TR27\":\"Gaziantep\",\"TR28\":\"Giresun\",\"TR29\":\"G\u00fcm\u00fc\u015fhane\",\"TR30\":\"Hakkari\",\"TR31\":\"Hatay\",\"TR32\":\"Isparta\",\"TR33\":\"\u0130\u00e7el\",\"TR34\":\"\u0130stanbul\",\"TR35\":\"\u0130zmir\",\"TR36\":\"Kars\",\"TR37\":\"Kastamonu\",\"TR38\":\"Kayseri\",\"TR39\":\"K\u0131rklareli\",\"TR40\":\"K\u0131r\u015fehir\",\"TR41\":\"Kocaeli\",\"TR42\":\"Konya\",\"TR43\":\"K\u00fctahya\",\"TR44\":\"Malatya\",\"TR45\":\"Manisa\",\"TR46\":\"Kahramanmara\u015f\",\"TR47\":\"Mardin\",\"TR48\":\"Mu\u011fla\",\"TR49\":\"Mu\u015f\",\"TR50\":\"Nev\u015fehir\",\"TR51\":\"Ni\u011fde\",\"TR52\":\"Ordu\",\"TR53\":\"Rize\",\"TR54\":\"Sakarya\",\"TR55\":\"Samsun\",\"TR56\":\"Siirt\",\"TR57\":\"Sinop\",\"TR58\":\"Sivas\",\"TR59\":\"Tekirda\u011f\",\"TR60\":\"Tokat\",\"TR61\":\"Trabzon\",\"TR62\":\"Tunceli\",\"TR63\":\"\u015eanl\u0131urfa\",\"TR64\":\"U\u015fak\",\"TR65\":\"Van\",\"TR66\":\"Yozgat\",\"TR67\":\"Zonguldak\",\"TR68\":\"Aksaray\",\"TR69\":\"Bayburt\",\"TR70\":\"Karaman\",\"TR71\":\"K\u0131r\u0131kkale\",\"TR72\":\"Batman\",\"TR73\":\"\u015e\u0131rnak\",\"TR74\":\"Bart\u0131n\",\"TR75\":\"Ardahan\",\"TR76\":\"I\u011fd\u0131r\",\"TR77\":\"Yalova\",\"TR78\":\"Karab\u00fck\",\"TR79\":\"Kilis\",\"TR80\":\"Osmaniye\",\"TR81\":\"D\u00fczce\"},\"TZ\":{\"TZ01\":\"Arusha\",\"TZ02\":\"Dar es Salaam\",\"TZ03\":\"Dodoma\",\"TZ04\":\"Iringa\",\"TZ05\":\"Kagera\",\"TZ06\":\"Pemba North\",\"TZ07\":\"Zanzibar North\",\"TZ08\":\"Kigoma\",\"TZ09\":\"Kilimanjaro\",\"TZ10\":\"Pemba South\",\"TZ11\":\"Zanzibar South\",\"TZ12\":\"Lindi\",\"TZ13\":\"Mara\",\"TZ14\":\"Mbeya\",\"TZ15\":\"Zanzibar West\",\"TZ16\":\"Morogoro\",\"TZ17\":\"Mtwara\",\"TZ18\":\"Mwanza\",\"TZ19\":\"Coast\",\"TZ20\":\"Rukwa\",\"TZ21\":\"Ruvuma\",\"TZ22\":\"Shinyanga\",\"TZ23\":\"Singida\",\"TZ24\":\"Tabora\",\"TZ25\":\"Tanga\",\"TZ26\":\"Manyara\",\"TZ27\":\"Geita\",\"TZ28\":\"Katavi\",\"TZ29\":\"Njombe\",\"TZ30\":\"Simiyu\"},\"LK\":[],\"SE\":[],\"UG\":{\"UG314\":\"Abim\",\"UG301\":\"Adjumani\",\"UG322\":\"Agago\",\"UG323\":\"Alebtong\",\"UG315\":\"Amolatar\",\"UG324\":\"Amudat\",\"UG216\":\"Amuria\",\"UG316\":\"Amuru\",\"UG302\":\"Apac\",\"UG303\":\"Arua\",\"UG217\":\"Budaka\",\"UG218\":\"Bududa\",\"UG201\":\"Bugiri\",\"UG235\":\"Bugweri\",\"UG420\":\"Buhweju\",\"UG117\":\"Buikwe\",\"UG219\":\"Bukedea\",\"UG118\":\"Bukomansimbi\",\"UG220\":\"Bukwa\",\"UG225\":\"Bulambuli\",\"UG416\":\"Buliisa\",\"UG401\":\"Bundibugyo\",\"UG430\":\"Bunyangabu\",\"UG402\":\"Bushenyi\",\"UG202\":\"Busia\",\"UG221\":\"Butaleja\",\"UG119\":\"Butambala\",\"UG233\":\"Butebo\",\"UG120\":\"Buvuma\",\"UG226\":\"Buyende\",\"UG317\":\"Dokolo\",\"UG121\":\"Gomba\",\"UG304\":\"Gulu\",\"UG403\":\"Hoima\",\"UG417\":\"Ibanda\",\"UG203\":\"Iganga\",\"UG418\":\"Isingiro\",\"UG204\":\"Jinja\",\"UG318\":\"Kaabong\",\"UG404\":\"Kabale\",\"UG405\":\"Kabarole\",\"UG213\":\"Kaberamaido\",\"UG427\":\"Kagadi\",\"UG428\":\"Kakumiro\",\"UG101\":\"Kalangala\",\"UG222\":\"Kaliro\",\"UG122\":\"Kalungu\",\"UG102\":\"Kampala\",\"UG205\":\"Kamuli\",\"UG413\":\"Kamwenge\",\"UG414\":\"Kanungu\",\"UG206\":\"Kapchorwa\",\"UG236\":\"Kapelebyong\",\"UG126\":\"Kasanda\",\"UG406\":\"Kasese\",\"UG207\":\"Katakwi\",\"UG112\":\"Kayunga\",\"UG407\":\"Kibaale\",\"UG103\":\"Kiboga\",\"UG227\":\"Kibuku\",\"UG432\":\"Kikuube\",\"UG419\":\"Kiruhura\",\"UG421\":\"Kiryandongo\",\"UG408\":\"Kisoro\",\"UG305\":\"Kitgum\",\"UG319\":\"Koboko\",\"UG325\":\"Kole\",\"UG306\":\"Kotido\",\"UG208\":\"Kumi\",\"UG333\":\"Kwania\",\"UG228\":\"Kween\",\"UG123\":\"Kyankwanzi\",\"UG422\":\"Kyegegwa\",\"UG415\":\"Kyenjojo\",\"UG125\":\"Kyotera\",\"UG326\":\"Lamwo\",\"UG307\":\"Lira\",\"UG229\":\"Luuka\",\"UG104\":\"Luwero\",\"UG124\":\"Lwengo\",\"UG114\":\"Lyantonde\",\"UG223\":\"Manafwa\",\"UG320\":\"Maracha\",\"UG105\":\"Masaka\",\"UG409\":\"Masindi\",\"UG214\":\"Mayuge\",\"UG209\":\"Mbale\",\"UG410\":\"Mbarara\",\"UG423\":\"Mitooma\",\"UG115\":\"Mityana\",\"UG308\":\"Moroto\",\"UG309\":\"Moyo\",\"UG106\":\"Mpigi\",\"UG107\":\"Mubende\",\"UG108\":\"Mukono\",\"UG334\":\"Nabilatuk\",\"UG311\":\"Nakapiripirit\",\"UG116\":\"Nakaseke\",\"UG109\":\"Nakasongola\",\"UG230\":\"Namayingo\",\"UG234\":\"Namisindwa\",\"UG224\":\"Namutumba\",\"UG327\":\"Napak\",\"UG310\":\"Nebbi\",\"UG231\":\"Ngora\",\"UG424\":\"Ntoroko\",\"UG411\":\"Ntungamo\",\"UG328\":\"Nwoya\",\"UG331\":\"Omoro\",\"UG329\":\"Otuke\",\"UG321\":\"Oyam\",\"UG312\":\"Pader\",\"UG332\":\"Pakwach\",\"UG210\":\"Pallisa\",\"UG110\":\"Rakai\",\"UG429\":\"Rubanda\",\"UG425\":\"Rubirizi\",\"UG431\":\"Rukiga\",\"UG412\":\"Rukungiri\",\"UG111\":\"Sembabule\",\"UG232\":\"Serere\",\"UG426\":\"Sheema\",\"UG215\":\"Sironko\",\"UG211\":\"Soroti\",\"UG212\":\"Tororo\",\"UG113\":\"Wakiso\",\"UG313\":\"Yumbe\",\"UG330\":\"Zombo\"},\"UM\":{\"81\":\"Baker Island\",\"84\":\"Howland Island\",\"86\":\"Jarvis Island\",\"67\":\"Johnston Atoll\",\"89\":\"Kingman Reef\",\"71\":\"Midway Atoll\",\"76\":\"Navassa Island\",\"95\":\"Palmyra Atoll\",\"79\":\"Wake Island\"},\"US\":{\"AL\":\"Alabama\",\"AK\":\"Alaska\",\"AZ\":\"Arizona\",\"AR\":\"Arkansas\",\"CA\":\"California\",\"CO\":\"Colorado\",\"CT\":\"Connecticut\",\"DE\":\"Delaware\",\"DC\":\"District Of Columbia\",\"FL\":\"Florida\",\"GA\":\"Georgia\",\"HI\":\"Hawaii\",\"ID\":\"Idaho\",\"IL\":\"Illinois\",\"IN\":\"Indiana\",\"IA\":\"Iowa\",\"KS\":\"Kansas\",\"KY\":\"Kentucky\",\"LA\":\"Louisiana\",\"ME\":\"Maine\",\"MD\":\"Maryland\",\"MA\":\"Massachusetts\",\"MI\":\"Michigan\",\"MN\":\"Minnesota\",\"MS\":\"Mississippi\",\"MO\":\"Missouri\",\"MT\":\"Montana\",\"NE\":\"Nebraska\",\"NV\":\"Nevada\",\"NH\":\"New Hampshire\",\"NJ\":\"New Jersey\",\"NM\":\"New Mexico\",\"NY\":\"New York\",\"NC\":\"North Carolina\",\"ND\":\"North Dakota\",\"OH\":\"Ohio\",\"OK\":\"Oklahoma\",\"OR\":\"Oregon\",\"PA\":\"Pennsylvania\",\"RI\":\"Rhode Island\",\"SC\":\"South Carolina\",\"SD\":\"South Dakota\",\"TN\":\"Tennessee\",\"TX\":\"Texas\",\"UT\":\"Utah\",\"VT\":\"Vermont\",\"VA\":\"Virginia\",\"WA\":\"Washington\",\"WV\":\"West Virginia\",\"WI\":\"Wisconsin\",\"WY\":\"Wyoming\",\"AA\":\"Armed Forces (AA)\",\"AE\":\"Armed Forces (AE)\",\"AP\":\"Armed Forces (AP)\"},\"VN\":[],\"YT\":[],\"ZA\":{\"EC\":\"Eastern Cape\",\"FS\":\"Free State\",\"GP\":\"Gauteng\",\"KZN\":\"KwaZulu-Natal\",\"LP\":\"Limpopo\",\"MP\":\"Mpumalanga\",\"NC\":\"Northern Cape\",\"NW\":\"North West\",\"WC\":\"Western Cape\"},\"ZM\":{\"ZM-01\":\"Western\",\"ZM-02\":\"Central\",\"ZM-03\":\"Eastern\",\"ZM-04\":\"Luapula\",\"ZM-05\":\"Northern\",\"ZM-06\":\"North-Western\",\"ZM-07\":\"Southern\",\"ZM-08\":\"Copperbelt\",\"ZM-09\":\"Lusaka\",\"ZM-10\":\"Muchinga\"}}",
			"i18n_select_state_text": "Select an option\u2026",
			"i18n_no_matches": "No matches found",
			"i18n_ajax_error": "Loading failed",
			"i18n_input_too_short_1": "Please enter 1 or more characters",
			"i18n_input_too_short_n": "Please enter %qty% or more characters",
			"i18n_input_too_long_1": "Please delete 1 character",
			"i18n_input_too_long_n": "Please delete %qty% characters",
			"i18n_selection_too_long_1": "You can only select 1 item",
			"i18n_selection_too_long_n": "You can only select %qty% items",
			"i18n_load_more": "Loading more results\u2026",
			"i18n_searching": "Searching\u2026"
		};
		/* ]]> */
	</script> -->
	<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/country-select.min.js'></script>
	<!-- <script type='text/javascript'>
		/* <![CDATA[ */
		var wc_address_i18n_params = {
			"locale": "{\"AE\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"required\":false}},\"AF\":{\"state\":{\"required\":false}},\"AO\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"label\":\"Province\"}},\"AT\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"AU\":{\"city\":{\"label\":\"Suburb\"},\"postcode\":{\"label\":\"Postcode\"},\"state\":{\"label\":\"State\"}},\"AX\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"BD\":{\"postcode\":{\"required\":false},\"state\":{\"label\":\"District\"}},\"BE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"label\":\"Province\"}},\"BH\":{\"postcode\":{\"required\":false},\"state\":{\"required\":false}},\"BI\":{\"state\":{\"required\":false}},\"BO\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"BS\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"CA\":{\"postcode\":{\"label\":\"Postal code\"},\"state\":{\"label\":\"Province\"}},\"CH\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Canton\",\"required\":false}},\"CL\":{\"city\":{\"required\":true},\"postcode\":{\"required\":false},\"state\":{\"label\":\"Region\"}},\"CN\":{\"state\":{\"label\":\"Province\"}},\"CO\":{\"postcode\":{\"required\":false}},\"CZ\":{\"state\":{\"required\":false}},\"DE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"DK\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"EE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"FI\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"FR\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"GP\":{\"state\":{\"required\":false}},\"GF\":{\"state\":{\"required\":false}},\"GR\":{\"state\":{\"required\":false}},\"HK\":{\"postcode\":{\"required\":false},\"city\":{\"label\":\"Town \\\/ District\"},\"state\":{\"label\":\"Region\"}},\"HU\":{\"state\":{\"label\":\"County\"}},\"ID\":{\"state\":{\"label\":\"Province\"}},\"IE\":{\"postcode\":{\"required\":false,\"label\":\"Eircode\"},\"state\":{\"label\":\"County\"}},\"IS\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"IL\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"IM\":{\"state\":{\"required\":false}},\"IT\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":true,\"label\":\"Province\"}},\"JP\":{\"last_name\":{\"class\":[\"form-row-first\"],\"priority\":10},\"first_name\":{\"class\":[\"form-row-last\"],\"priority\":20},\"postcode\":{\"class\":[\"form-row-first\"],\"priority\":65},\"state\":{\"label\":\"Prefecture\",\"class\":[\"form-row-last\"],\"priority\":66},\"city\":{\"priority\":67},\"address_1\":{\"priority\":68},\"address_2\":{\"priority\":69}},\"KR\":{\"state\":{\"required\":false}},\"KW\":{\"state\":{\"required\":false}},\"LV\":{\"state\":{\"label\":\"Municipality\",\"required\":false}},\"LB\":{\"state\":{\"required\":false}},\"MQ\":{\"state\":{\"required\":false}},\"MT\":{\"state\":{\"required\":false}},\"MZ\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"label\":\"Province\"}},\"NL\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false,\"label\":\"Province\"}},\"NG\":{\"postcode\":{\"label\":\"Postcode\",\"required\":false,\"hidden\":true},\"state\":{\"label\":\"State\"}},\"NZ\":{\"postcode\":{\"label\":\"Postcode\"},\"state\":{\"required\":false,\"label\":\"Region\"}},\"NO\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"NP\":{\"state\":{\"label\":\"State \\\/ Zone\"},\"postcode\":{\"required\":false}},\"PL\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"PT\":{\"state\":{\"required\":false}},\"RE\":{\"state\":{\"required\":false}},\"RO\":{\"state\":{\"label\":\"County\",\"required\":true}},\"RS\":{\"state\":{\"required\":false,\"hidden\":true}},\"SG\":{\"state\":{\"required\":false},\"city\":{\"required\":false}},\"SK\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"SI\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"SR\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"ES\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Province\"}},\"LI\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Municipality\",\"required\":false}},\"LK\":{\"state\":{\"required\":false}},\"LU\":{\"state\":{\"required\":false}},\"MD\":{\"state\":{\"label\":\"Municipality \\\/ District\"}},\"SE\":{\"postcode\":{\"priority\":65},\"state\":{\"required\":false}},\"TR\":{\"postcode\":{\"priority\":65},\"state\":{\"label\":\"Province\"}},\"UG\":{\"postcode\":{\"required\":false,\"hidden\":true},\"city\":{\"label\":\"Town \\\/ Village\",\"required\":true},\"state\":{\"label\":\"District\",\"required\":true}},\"US\":{\"postcode\":{\"label\":\"ZIP\"},\"state\":{\"label\":\"State\"}},\"GB\":{\"postcode\":{\"label\":\"Postcode\"},\"state\":{\"label\":\"County\",\"required\":false}},\"ST\":{\"postcode\":{\"required\":false,\"hidden\":true},\"state\":{\"label\":\"District\"}},\"VN\":{\"state\":{\"required\":false,\"hidden\":true},\"postcode\":{\"priority\":65,\"required\":false,\"hidden\":false},\"address_2\":{\"required\":false,\"hidden\":true}},\"WS\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"YT\":{\"state\":{\"required\":false}},\"ZA\":{\"state\":{\"label\":\"Province\"}},\"ZW\":{\"postcode\":{\"required\":false,\"hidden\":true}},\"default\":{\"first_name\":{\"label\":\"First name\",\"required\":true,\"class\":[\"form-row-first\"],\"autocomplete\":\"given-name\",\"priority\":10},\"last_name\":{\"label\":\"Last name\",\"required\":true,\"class\":[\"form-row-last\"],\"autocomplete\":\"family-name\",\"priority\":20},\"company\":{\"label\":\"Company name\",\"class\":[\"form-row-wide\"],\"autocomplete\":\"organization\",\"priority\":30,\"required\":false},\"country\":{\"type\":\"country\",\"label\":\"Country\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\",\"update_totals_on_change\"],\"autocomplete\":\"country\",\"priority\":40},\"address_1\":{\"label\":\"Street address\",\"placeholder\":\"House number and street name\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-line1\",\"priority\":50},\"address_2\":{\"placeholder\":\"Apartment, suite, unit etc. (optional)\",\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-line2\",\"priority\":60,\"required\":false},\"city\":{\"label\":\"Town \\\/ City\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"autocomplete\":\"address-level2\",\"priority\":70},\"state\":{\"type\":\"state\",\"label\":\"State \\\/ County\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"validate\":[\"state\"],\"autocomplete\":\"address-level1\",\"priority\":80},\"postcode\":{\"label\":\"Postcode \\\/ ZIP\",\"required\":true,\"class\":[\"form-row-wide\",\"address-field\"],\"validate\":[\"postcode\"],\"autocomplete\":\"postal-code\",\"priority\":90}}}",
			"locale_fields": "{\"address_1\":\"#billing_address_1_field, #shipping_address_1_field\",\"address_2\":\"#billing_address_2_field, #shipping_address_2_field\",\"state\":\"#billing_state_field, #shipping_state_field, #calc_shipping_state_field\",\"postcode\":\"#billing_postcode_field, #shipping_postcode_field, #calc_shipping_postcode_field\",\"city\":\"#billing_city_field, #shipping_city_field, #calc_shipping_city_field\"}",
			"i18n_required_text": "required",
			"i18n_optional_text": "optional"
		};
		/* ]]> */
	</script> -->
	<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/address-i18n.min.js'></script>
	<!-- <script type='text/javascript'>
		/* <![CDATA[ */
		var wc_cart_params = {
			"ajax_url": "\/wp-admin\/admin-ajax.php",
			"wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
			"update_shipping_method_nonce": "8696e72dd9",
			"apply_coupon_nonce": "3544dacd5c",
			"remove_coupon_nonce": "52bc0ae785"
		};
		/* ]]> */
	</script>
	<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart.min.js'></script> -->
	<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/selectWoo/selectWoo.full.min.js'></script>
	<!-- <script type='text/javascript'>
		/* <![CDATA[ */
		var wc_cart_fragments_params = {
			"ajax_url": "\/wp-admin\/admin-ajax.php",
			"wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
			"cart_hash_key": "wc_cart_hash_95a9aa4c85e6cbb9585ebe1fe0394376",
			"fragment_name": "wc_fragments_95a9aa4c85e6cbb9585ebe1fe0394376",
			"request_timeout": "5000"
		};
		/* ]]> */
	</script> -->
	<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js'></script>
	<script type='text/javascript' src='wp-content/plugins/rb-essentials/assets/js/rb-portfolio.js'></script>
	<script type='text/javascript' src='wp-includes/js/wp-embed.min.js'></script>
	<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js'></script>
	<script type='text/javascript' src='wp-content/plugins/wpforms-lite/assets/js/jquery.validate.min.js'></script>
	<!-- <script type='text/javascript' src='wp-content/plugins/wpforms-lite/assets/js/wpforms.js'></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var wpforms_settings = {
			"val_required": "This field is required.",
			"val_url": "Please enter a valid URL.",
			"val_email": "Please enter a valid email address.",
			"val_email_suggestion": "Did you mean {suggestion}?",
			"val_email_suggestion_title": "Click to accept this suggestion.",
			"val_number": "Please enter a valid number.",
			"val_confirm": "Field values do not match.",
			"val_fileextension": "File type is not allowed.",
			"val_filesize": "File exceeds max size allowed. File was not uploaded.",
			"val_time12h": "Please enter time in 12-hour AM\/PM format (eg 8:45 AM).",
			"val_time24h": "Please enter time in 24-hour format (eg 22:45).",
			"val_requiredpayment": "Payment is required.",
			"val_creditcard": "Please enter a valid credit card number.",
			"val_smart_phone": "Please enter a valid phone number.",
			"val_post_max_size": "The total size of the selected files {totalSize} Mb exceeds the allowed limit {maxSize} Mb.",
			"val_checklimit": "You have exceeded the number of allowed selections: {#}.",
			"val_limit_characters": "{count} of {limit} max characters.",
			"val_limit_words": "{count} of {limit} max words.",
			"post_max_size": "134217728",
			"uuid_cookie": "",
			"locale": "en",
			"wpforms_plugin_url": "https:\/\/seoes.rainbow-themes.net\/wp-content\/plugins\/wpforms-lite\/",
			"gdpr": "",
			"ajaxurl": "https:\/\/seoes.rainbow-themes.net\/wp-admin\/admin-ajax.php",
			"mailcheck_enabled": "1",
			"mailcheck_domains": [],
			"mailcheck_toplevel_domains": ["dev"]
		}
		/* ]]> */
	</script> -->
</body>

</html>