<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>SEO-Tech-Store Contact Us</title>
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
	<link rel='stylesheet' id='siteground-optimizer-combined-styles-header-css' href='wp-content/uploads/siteground-optimizer-assets/siteground-optimizer-combined-styles-3398dd01890532841c18cdfc7463d509.css' type='text/css' media='all' />
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

		.vc_custom_1571807643128 {
			padding-bottom: 50px !important;
		}

		.vc_custom_1571827997954 {
			padding-top: 70px !important;
		}

		.vc_custom_1571827968981 {
			padding-top: 0px !important;
			padding-bottom: 80px !important;
		}

		.vc_custom_1564061073203 {
			margin-bottom: -115px !important;
		}

		.vc_custom_1572870659576 {
			margin-top: 10px !important;
			border-top-width: 1px !important;
			border-right-width: 1px !important;
			border-bottom-width: 1px !important;
			border-left-width: 1px !important;
			padding-top: 60px !important;
			padding-right: 30px !important;
			padding-bottom: 50px !important;
			padding-left: 30px !important;
			border-left-color: #5163dd !important;
			border-left-style: solid !important;
			border-right-color: #5163dd !important;
			border-right-style: solid !important;
			border-top-color: #5163dd !important;
			border-top-style: solid !important;
			border-bottom-color: #5163dd !important;
			border-bottom-style: solid !important;
			border-radius: 15px !important;
		}

		.vc_custom_1572870659580 {
			margin-right: 15px !important;
			margin-left: 15px !important;
			padding-right: 15px !important;
			padding-left: 15px !important;
		}

		.vc_custom_1572870666232 {
			margin-top: 30px !important;
		}

		.vc_custom_1572870670332 {
			margin-top: 30px !important;
		}

		.vc_custom_1571827208745 {
			margin-right: 30px !important;
			margin-left: 30px !important;
			padding-right: 20px !important;
			padding-left: 20px !important;
		}
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
			"is_cart": "",
			"cart_redirect_after_add": "no"
		};
		/* ]]> */
	</script> -->
	<!-- <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js'></script> -->
	<!-- <script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js'></script> -->
	<noscript>
		<style>
			.woocommerce-product-gallery {
				opacity: 1 !important;
			}
		</style>
	</noscript>
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

<body class="page-template-default page page-id-910 theme-seoes woocommerce-no-js wpb-js-composer js-comp-ver-6.0.5 vc_responsive" data-boxed="false" data-default="false" itemscope="itemscope" itemtype="http://schema.org/WebPage">


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
				<div id="rb_content_5de2285923fa3" class="rb_content_5de2285923fa3 rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1562326619547 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de22859244ab' class='rb_column_wrapper vc_col-sm-3 '>
							<div class="wpb_column vc_column_container vc_col-sm-2">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_logo_5de22859247b2' class='site_logotype'><a href='index.php'><img src='wp-content/uploads/2019/06/logo@2x.png' alt='some-alt' style='width:125px;'></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de228592484f' class='rb_column_wrapper vc_col-sm-8 '>
							<div class="wpb_column vc_column_container vc_col-sm-7">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_menu_5de2285924a0d' class='menu-main-container header_menu rb_menu_module'>
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
															<div id="rb_content_5de2285926679" class="rb_content_5de2285926679 rb-content background_no_hover">
																<div class="vc_row wpb_row vc_row-fluid vc_custom_1561704612827 vc_row-o-equal-height vc_row-o-content-top vc_row-flex">
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de228592683d' class='rb_column_wrapper vc_col-sm-3 '>
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
																	<div id='rb_column_5de22859277e0' class='rb_column_wrapper vc_col-sm-3 '>
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
																	<div id='rb_column_5de22859283f3' class='rb_column_wrapper vc_col-sm-3 '>
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
																	<div id='rb_column_5de2285928d76' class='rb_column_wrapper vc_col-sm-3 '>
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
															<div id="rb_content_5de2285929b40" class="rb_content_5de2285929b40 rb-content background_no_hover">
																<div class="vc_row wpb_row vc_row-fluid vc_custom_1561712578812 vc_row-o-equal-height vc_row-flex">
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de2285929c60' class='rb_column_wrapper vc_col-sm-4 '>
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
																	<div id='rb_column_5de228592a6bf' class='rb_column_wrapper vc_col-sm-4 '>
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
																	<div id='rb_column_5de228592af72' class='rb_column_wrapper vc_col-sm-4 '>
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
												<li id="menu-item-3132" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3132"><a href="shop/page/1/shop.php">Shop</a>
													<ul class="sub-menu">
														<li id="menu-item-3133" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3133"><a href="shop/page/1/shop.php">Shop</a></li>
														<li id="menu-item-3131" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3131"><a href="cart.php">Cart</a></li>
														<li id="menu-item-3130" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3130"><a href="checkout/">Checkout</a></li>
														<li id="menu-item-3138" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3138"><a href="shortcodes.php">Shortcodes</a></li>
													</ul>
												</li>
												<li id="menu-item-3088" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-910 current_page_item menu-item-3088"><a href="contacts.php" aria-current="page">Contacts</a></li>
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
				<!-- <div id="rb_content_5de228592ccec" class="rb_content_5de228592ccec rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571319827010 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de228592ceac' class='rb_column_wrapper vc_col-sm-6 '>
							<div class="wpb_column vc_column_container vc_col-sm-6">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_icon_list_5de228592d04e' class='rb_icon_list_module header_icons direction_line'><a href='tel:+305111222333%20' class='custom_url'><i class='flaticon-telephone-auricular-with-cable'></i><span class='title'>+(305) 111-222-333 </span></a><a href='mailto:info@seotechstore.com' class='custom_url'><i class='flaticon-email'></i><span class='title'>info@seotechstore.com</span></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de228592d1da' class='rb_column_wrapper vc_col-sm-6 '>
							<div class="wpb_column vc_column_container vc_col-sm-6">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_icon_list_5de228592d313' class='rb_icon_list_module header_icons direction_line align_right'><a href='https://facebook.com' class='custom_url'><i class='flaticon-facebook'></i><span class='title'></span></a><a href='https://twitter.com' class='custom_url'><i class='flaticon-twitter-letter-logo'></i><span class='title'></span></a><a href='https://youtube.com' class='custom_url'><i class='flaticon-youtube'></i><span class='title'></span></a><a href='https://linkedin.com' class='custom_url'><i class='flaticon-linkedin'></i><span class='title'></span></a>
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
				<div id="rb_content_5de228592d650" class="rb_content_5de228592d650 rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571720915789 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de228592d787' class='rb_column_wrapper vc_col-sm-3 '>
							<div class="wpb_column vc_column_container vc_col-sm-2">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_logo_5de228592d901' class='site_logotype'><a href='index.php'><img src='wp-content/uploads/2019/06/logo@2x.png' alt='some-alt' style='width:187px;'></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de228592d993' class='rb_column_wrapper vc_col-sm-8 '>
							<div class="wpb_column vc_column_container vc_col-sm-7">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_menu_5de228592dae0' class='menu-main-container header_menu rb_menu_module'>
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
															<div id="rb_content_5de228592ee66" class="rb_content_5de228592ee66 rb-content background_no_hover">
																<div class="vc_row wpb_row vc_row-fluid vc_custom_1561704612827 vc_row-o-equal-height vc_row-o-content-top vc_row-flex">
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de228592efbf' class='rb_column_wrapper vc_col-sm-3 '>
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
																	<div id='rb_column_5de228592faa4' class='rb_column_wrapper vc_col-sm-3 '>
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
																	<div id='rb_column_5de228593032d' class='rb_column_wrapper vc_col-sm-3 '>
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
																	<div id='rb_column_5de22859309ad' class='rb_column_wrapper vc_col-sm-3 '>
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
															<div id="rb_content_5de2285931419" class="rb_content_5de2285931419 rb-content background_no_hover">
																<div class="vc_row wpb_row vc_row-fluid vc_custom_1561712578812 vc_row-o-equal-height vc_row-flex">
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de228593154e' class='rb_column_wrapper vc_col-sm-4 '>
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
																	<div id='rb_column_5de2285931ce9' class='rb_column_wrapper vc_col-sm-4 '>
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
																	<div id='rb_column_5de228593234e' class='rb_column_wrapper vc_col-sm-4 '>
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
												<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-3132"><a href="shop/page/1/shop.php">Shop</a>
													<ul class="sub-menu">
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3133"><a href="shop/page/1/shop.php">Shop</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3131"><a href="cart.php">Cart</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3130"><a href="checkout/">Checkout</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3138"><a href="shortcodes.php">Shortcodes</a></li>
													</ul>
												</li>
												<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-910 current_page_item menu-item-3088"><a href="contacts.php" aria-current="page">Contacts</a></li>
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
													<div id="rb_column_5de2257c9f6df" class="rb_column_wrapper vc_col-sm-12">
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
				<div id="rb_content_5de2285933363" class="rb_content_5de2285933363 rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de22859334b5' class='rb_column_wrapper vc_col-sm-12 '>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_title_area_5de228593362b' class='custom page_title_container  mouse_anim scroll_anim shared_bg' style=""><img data-depth='0.80' src='wp-content/uploads/2013/06/title_hexagons.png' class='page_title_dynamic_image' alt='Contacts' />
											<div class='page_title_wrapper'>
												<div class="page_title_customizer_size">
													<h1 class='page_title'>Contacts</h1>
												</div><span class='title_divider'></span>
												<div class="breadcrumbs">
													<div class="container">
														<nav class="bread-crumbs"><a href="index.php" property="v:title">Home</a><span class='delimiter'></span><span class="current">Contact Us</span></nav><!-- .breadcrumbs -->
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

					<img data-depth="0.80" src="wp-content/uploads/2013/06/title_hexagons.png" class="page_title_dynamic_image" alt="Contact Us" />

					<div class="page_title_wrapper container">
						<div class="page_title_customizer_size">
							<h1 class="page_title">
								Contact Us </h1>
						</div>
						<span class="title_divider"></span>
						<div class="breadcrumbs">
							<div class="container">
								<nav class="bread-crumbs"><a href="index.php" property="v:title">Home</a><span class='delimiter'></span><span class="current">Contact Us</span></nav><!-- .breadcrumbs -->
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
							<!-- <div id="rb_content_5de228593a8c6" class="rb_content_5de228593a8c6 rb-content background_no_hover">
								<div class="vc_row wpb_row vc_row-fluid vc_custom_1571807643128">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de228593aa80' class='rb_column_wrapper vc_col-sm-12 '>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class='rb_textmodule_5de228593ac45 rb_textmodule align_center'>
														<h3 class='rb_textmodule_title'><strong>Address</strong><span class='rb_textmodule_divider'></span></h3>
													</div>
													<div id='rb_inner_row_5de228593add1' class='rb_inner_row_wrapper'>
														<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1572870659576 vc_row-has-fill">
															<div id='rb_column_5de228593af32' class='rb_column_wrapper vc_col-sm-4 '>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper"><a href='contacts.php' id='rb_service_5de228593b217' class='rb_service_module style_icon_left style_tablet_inherit shape_none '>
																				<div class='service_icon_wrapper'><i class="flaticon-location-pin"></i></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">Paris main Venue</h5>
																					<div class='content_wrapper'>
																						<p>Adam Russell for Congress<br />
																							PO Box 3740, Austin</p>
																					</div>
																				</div>
																			</a></div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de228593b30b' class='rb_column_wrapper vc_col-sm-4 '>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper"><a href='contacts.php' id='rb_service_5de228593b4c2' class='rb_service_module style_icon_left style_tablet_inherit shape_none '>
																				<div class='service_icon_wrapper'><i class="flaticon-compass"></i></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">E-mail address</h5>
																					<div class='content_wrapper'>
																						<p>info@adamrussell.com</p>
																					</div>
																				</div>
																			</a></div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de228593b598' class='rb_column_wrapper vc_col-sm-4 '>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper"><a href='contacts.php' id='rb_service_5de228593b740' class='rb_service_module style_icon_left style_tablet_inherit shape_none '>
																				<div class='service_icon_wrapper'><i class="flaticon-telephone-auricular-with-cable"></i></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">Office number</h5>
																					<div class='content_wrapper'>
																						<p>(932) 733-33-90</p>
																					</div>
																				</div>
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
							<div id="rb_content_5de228593b84f" class="rb_content_5de228593b84f rb-content background_no_hover">
								<div class="vc_row wpb_row vc_row-fluid vc_custom_1571827997954">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de228593b9cd' class='rb_column_wrapper vc_col-sm-12 '>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div id='rb_testimonials_5de228593bb49' class='rb_testimonials_module content_bottom style_clear'>
														<div class='rb_testimonials_wrapper columns_3'>
															<div class='testimonial'>
																<div class='image_wrapper round'><img src='wp-content/uploads/2019/06/img_1_b.jpg' alt='some-alt' /></div>
																<p class='h4 testimonial_name'>Alex Doe</p>
																<p class='testimonial_pos'>Owner &amp; SEO</p>
																<p class='testimonial_desc'><i class='fa fa-phone'></i><a href="tel:9327333390">(932) 733-33-90</a></p>
															</div>
															<div class='testimonial'>
																<div class='image_wrapper round'><img src='wp-content/uploads/2019/06/img_4_b.jpg' alt='some-alt' /></div>
																<p class='h4 testimonial_name'>Lisa Doe</p>
																<p class='testimonial_pos'>Account manager, Ados</p>
																<p class='testimonial_desc'><i class='fa fa-phone'></i><a href="tel:4528994187">(452) 899-41-87</a></p>
															</div>
															<div class='testimonial'>
																<div class='image_wrapper round'><img src='wp-content/uploads/2019/06/img_2_b.jpg' alt='some-alt' /></div>
																<p class='h4 testimonial_name'>Joseph Doe</p>
																<p class='testimonial_pos'>Manager</p>
																<p class='testimonial_desc'><i class='fa fa-phone'></i><a href="tel:2548451124">(254) 845-11-24</a></p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div> -->
							<div id="rb_content_5de228593bf8a" class="rb_content_5de228593bf8a rb-content background_no_hover">
								<div class="vc_row wpb_row vc_row-fluid overflow_hidden vc_custom_1571827968981 vc_row-o-equal-height vc_row-flex">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de228593c10c' class='rb_column_wrapper vc_col-sm-3 vc_col-xs-12 '>
										<div class="wpb_column vc_column_container vc_col-sm-3 vc_col-xs-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper"></div>
											</div>
										</div>
									</div>
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de228593c22c' class='rb_column_wrapper vc_col-sm-6 '>
										<div class="wpb_column vc_column_container vc_col-sm-6">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<?php 
													if(isset($_SESSION["ContactUsMessage"]))
													{
														if(isset($_SESSION["ContactUsMessageType"]) && $_SESSION["ContactUsMessageType"] === "success")
														{
															echo '<div class="vc_column-inner"><div class="wpb_wrapper"><div class="rb_info_box success"><div class="icon_wrapper"><i></i></div><div class="content_wrapper"><p class="h5 info_box_title">'.$_SESSION["ContactUsMessage"].'</p></div></div></div></div>';
															unset($_SESSION["ContactUsMessage"]);
															unset($_SESSION["ContactUsMessageType"]);
														}
														else if(isset($_SESSION["ContactUsMessageType"]) && $_SESSION["ContactUsMessageType"] === "info")
														{
															echo '<div class="vc_column-inner"><div class="wpb_wrapper"><div class="rb_info_box info"><div class="icon_wrapper"><i></i></div><div class="content_wrapper"><p class="h5 info_box_title">'.$_SESSION["ContactUsMessage"].'</p></div></div></div></div>';
															unset($_SESSION["ContactUsMessage"]);
															unset($_SESSION["ContactUsMessageType"]);
														}
													}
													?>
													<div class='rb_textmodule_5de228593c3a5 rb_textmodule align_center'>
														<h4 class='rb_textmodule_title'><strong>Have a Question ?</strong><span class='rb_textmodule_divider'></span></h4>
													</div>
													<div class="wpforms-container wpforms-container-full button_center">
														<form class="wpforms-validate wpforms-form" method="post" enctype="multipart/form-data" action="business/functions.php">
															<div class="wpforms-field-container">
																<div class="wpforms-field wpforms-field-text width_50">
																	<input type="text" class="wpforms-field-large wpforms-field-required" name="name" placeholder="Name" required>
																</div>
																<div class="wpforms-field wpforms-field-email width_50">
																	<label class="wpforms-field-label wpforms-label-hide" for="email">Email <span class="wpforms-required-label">*</span></label>
																	<input type="email" class="wpforms-field-large wpforms-field-required" name="email" placeholder="E-mail" required>
																</div>
																<div class="wpforms-field wpforms-field-textarea margin_top_70">
																	<textarea class="wpforms-field-large" name="message" placeholder="Write your message" required></textarea>
																	<input type="hidden" id="action" name="action" value="contactusmessage">
																</div>
															</div>
															<!-- <div class="wpforms-field wpforms-field-hp">
																<label for="wpforms-4323-field-hp" class="wpforms-field-label">Email</label>
																<input type="text" name="wpforms[hp]" id="wpforms-4323-field-hp" class="wpforms-field-medium">
															</div> -->
															<div class="wpforms-submit-container">
																<button type="submit" name="btnSendMessage" class="wpforms-submit medium rb_button">Send Message</button>
															</div>
														</form>
													</div> <!-- .wpforms-container -->
												</div>
											</div>
										</div>
									</div>
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de228593c770' class='rb_column_wrapper vc_col-sm-3 '>
										<div class="wpb_column vc_column_container vc_col-sm-3">
											<div class="vc_column-inner">
												<div class="wpb_wrapper"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- <div id="rb_content_5de228593c8a1" class="rb_content_5de228593c8a1 rb-content background_no_hover">
								<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1564061073203 vc_row-no-padding">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de228593ca29' class='rb_column_wrapper vc_col-sm-12 '>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class="wpb_text_column wpb_content_element ">
														<div class="wpb_wrapper">


															<div id="wpgmza_map" data-settings='{"id":"1","map_title":"My first map","map_width":"100","map_height":"400","map_start_lat":"30.236279","map_start_lng":"-97.724848","map_start_location":"30.236279038259347,-97.72484765983968","map_start_zoom":"11","default_marker":"0","type":"1","alignment":"1","directions_enabled":"1","styling_enabled":"0","styling_json":"","active":"0","kml":"","bicycle":"2","traffic":"2","dbox":"1","dbox_width":"100","listmarkers":"0","listmarkers_advanced":"0","filterbycat":"0","ugm_enabled":"0","ugm_category_enabled":"0","fusion":"","map_width_type":"\\%","map_height_type":"px","mass_marker_support":"1","ugm_access":"0","order_markers_by":"1","order_markers_choice":"2","show_user_location":"0","default_to":"","other_settings":{"store_locator_enabled":2,"store_locator_distance":2,"store_locator_default_radius":10,"store_locator_not_found_message":"No results found in this location. Please try again.","store_locator_bounce":1,"store_locator_query_string":"ZIP \/ Address:","store_locator_default_address":"","wpgmza_store_locator_restrict":"","store_locator_style":"modern","wpgmza_store_locator_radius_style":"modern","map_max_zoom":"1","transport_layer":2,"wpgmza_theme_data":"","wpgmza_show_points_of_interest":1,"wpgmza_auto_night":0}}' data-shortcode-attributes='{"id":"1"}' style="display:block; overflow:auto; width:100%; height:400px; float:left;">

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
				<div id="rb_content_5de228593f16b" class="rb_content_5de228593f16b rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571647263433 vc_row-has-fill">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de228593f32e' class='rb_column_wrapper vc_col-sm-12 '>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_inner_row_5de228593f4d4' class='rb_inner_row_wrapper'>
											<div class="vc_row wpb_row vc_inner vc_row-fluid">
												<div id='rb_column_5de228593f610' class='rb_column_wrapper vc_col-sm-12 '>
													<div class="wpb_column vc_column_container vc_col-sm-12">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div id='rb_logo_5de228593f858' class='site_logotype'><a href='index.php'><img src='wp-content/uploads/2019/06/logo_white.png' alt='some-alt' style='width:143px;'></a></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id='rb_inner_row_5de228593f91d' class='rb_inner_row_wrapper'>
											<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1570620243054">
												<div id='rb_column_5de228593fa6a' class='rb_column_wrapper vc_col-sm-4 '>
													<div class="wpb_column vc_column_container vc_col-sm-4">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div id='rb_icon_list_5de228593fb99' class='rb_icon_list_module header_icons direction_column mobile_align_center'><a href='tel:3053335522' class='custom_url'><i class='flaticon-telephone-auricular-with-cable'></i><span class='title'>(305) 333-5522</span></a><a href='mailto:info@seotechstore.com' class='custom_url'><i class='flaticon-email'></i><span class='title'>info@seotechstore.com</span></a></div>
															</div>
														</div>
													</div>
												</div>
												<div id='rb_column_5de228593fd11' class='rb_column_wrapper vc_col-sm-4 '>
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
																<div class='rb_textmodule_5de228593fe43 rb_textmodule align_center mobile_align_center'>
																	<p class='h5 rb_textmodule_subtitle'>Get latest SEO tips from us!</p>
																</div>
																<div class="wpforms-container wpforms-container-full footer-form" id="wpforms-4230">
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
												<div id='rb_column_5de2285940109' class='rb_column_wrapper vc_col-sm-4 '>
													<div class="wpb_column vc_column_container vc_col-sm-4">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div class='rb_textmodule_5de2285940285 rb_textmodule align_right mobile_align_center'>
																	<p class='h5 rb_textmodule_subtitle'>Subscribe to our social</p>
																</div>
																<div id='rb_icon_list_5de228594038d' class='rb_icon_list_module header_icons direction_line icon_bg align_right mobile_align_center'><a href='https://facebook.com' class='custom_url'>
																		<div class='icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																				<defs>
																					<linearGradient id="gradient_5de228594044b" x1="0%" y1="0%" x2="0%" y2="100%">
																						<stop offset="0%" style="stop-color:#5163dd; stop-opacity:1" />
																						<stop offset="100%" style="stop-color:#5163dd; stop-opacity:1" />
																					</linearGradient>
																				</defs>
																				<polygon class="st0" points="6,25 6,75 49.3,100 92.6,75 92.6,25 49.3,0" fill="url(#gradient_5de228594044b)" />
																			</svg><i class='flaticon-facebook'></i></div><span class='title'></span>
																	</a><a href='https://www.linkedin.com/' class='custom_url'>
																		<div class='icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																				<defs>
																					<linearGradient id="gradient_5de228594049a" x1="0%" y1="0%" x2="0%" y2="100%">
																						<stop offset="0%" style="stop-color:#5163dd; stop-opacity:1" />
																						<stop offset="100%" style="stop-color:#5163dd; stop-opacity:1" />
																					</linearGradient>
																				</defs>
																				<polygon class="st0" points="6,25 6,75 49.3,100 92.6,75 92.6,25 49.3,0" fill="url(#gradient_5de228594049a)" />
																			</svg><i class='flaticon-linkedin'></i></div><span class='title'></span>
																	</a><a href='https://twitter.com' class='custom_url'>
																		<div class='icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																				<defs>
																					<linearGradient id="gradient_5de22859404e4" x1="0%" y1="0%" x2="0%" y2="100%">
																						<stop offset="0%" style="stop-color:#5163dd; stop-opacity:1" />
																						<stop offset="100%" style="stop-color:#5163dd; stop-opacity:1" />
																					</linearGradient>
																				</defs>
																				<polygon class="st0" points="6,25 6,75 49.3,100 92.6,75 92.6,25 49.3,0" fill="url(#gradient_5de22859404e4)" />
																			</svg><i class='flaticon-twitter'></i></div><span class='title'></span>
																	</a><a href='https://www.youtube.com/' class='custom_url'>
																		<div class='icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																				<defs>
																					<linearGradient id="gradient_5de228594052c" x1="0%" y1="0%" x2="0%" y2="100%">
																						<stop offset="0%" style="stop-color:#5163dd; stop-opacity:1" />
																						<stop offset="100%" style="stop-color:#5163dd; stop-opacity:1" />
																					</linearGradient>
																				</defs>
																				<polygon class="st0" points="6,25 6,75 49.3,100 92.6,75 92.6,25 49.3,0" fill="url(#gradient_5de228594052c)" />
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
				<div id="rb_content_5de22859405ea" class="rb_content_5de22859405ea rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1570622568954 vc_row-has-fill">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de2285940770' class='rb_column_wrapper vc_col-sm-12 '>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class='rb_textmodule_5de2285940917 rb_textmodule mobile_align_center'>
											<div class='rb_textmodule_content_wrapper'>
												<center>
													<p>Copyright © SEO-Tech-Store 2019 — All rights reserved.</p>
												</center>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- <div class="row_hover_effect"></div>
						<div id='rb_column_5de2285940a5a' class='rb_column_wrapper vc_col-sm-7 '>
							<div class="wpb_column vc_column_container vc_col-sm-7">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class='rb_textmodule_5de2285940bde rb_textmodule mobile_align_center'>
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
	<link rel='stylesheet' id='wpforms-full-css' href='wp-content/plugins/wpforms-lite/assets/css/wpforms-full.css' type='text/css' media='all' />
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

		.rb_content_5de2285923fa3>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2285923fa3>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2285923fa3>.vc_row {
			background-position: center !important;
		}

		.rb_content_5de2285923fa3>.vc_row {
			position: relative;
			overflow: visible;
			z-index: 2;
		}

		#rb_content_5de2285923fa3>.vc_row {
			-webkit-box-shadow: 0 0 15px 5px rgba(16, 1, 148, 0.05);
			-moz-box-shadow: 0 0 15px 5px rgba(16, 1, 148, 0.05);
			box-shadow: 0 0 15px 5px rgba(16, 1, 148, 0.05);
		}

		#rb_column_5de22859244ab>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de22859244ab>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de22859244ab>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de228592484f>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228592484f>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228592484f>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_menu_5de2285924a0d>ul {
			-webkit-justify-content: center;
			justify-content: center;
		}

		#rb_menu_5de2285924a0d>.menu>.menu-item>a {
			color: #3e4a59;
		}

		#rb_menu_5de2285924a0d>.menu>.menu-item>a:before,
		#rb_menu_5de2285924a0d .menu-item-object-rb-megamenu .sub-menu .rb_megamenu_item .widgettitle:before {
			background-color: #5163dd;
		}

		.rb_content_5de2285926679>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2285926679>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2285926679>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de228592683d>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228592683d>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228592683d>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de22859277e0>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de22859277e0>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de22859277e0>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de22859277e0>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de22859283f3>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de22859283f3>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de22859283f3>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de22859283f3>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de2285928d76>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2285928d76>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2285928d76>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2285928d76>.wpb_column>.vc_column-inner {
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

		.rb_content_5de2285929b40>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2285929b40>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2285929b40>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2285929c60>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2285929c60>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2285929c60>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de228592a6bf>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228592a6bf>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228592a6bf>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de228592af72>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228592af72>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228592af72>.wpb_column>.vc_column-inner {
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

		#rb_column_5de228592bd7b>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228592bd7b>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228592bd7b>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_inner_row_5de228592c03c>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de228592c03c>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de228592c03c>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de228592c27b>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228592c27b>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228592c27b>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_search_5de228592c40a {
			text-align: right;
		}

		#rb_search_5de228592c40a .search-trigger {
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
			#rb_search_5de228592c40a .search-trigger:hover {
				color: #5163DD;
			}
		}

		#rb_column_5de228592c489>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228592c489>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228592c489>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_button_wrapper_5de228592c5e0 {
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

		.rb_content_5de228592ccec>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de228592ccec>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de228592ccec>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de228592ceac>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228592ceac>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228592ceac>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_icon_list_5de228592d04e i:before {
			font-size: 16px;
		}

		#rb_icon_list_5de228592d04e .icon_wrapper svg {
			transform: scale(0.46);
		}

		#rb_icon_list_5de228592d04e .title {
			font-size: 14px;
		}

		#rb_icon_list_5de228592d04e.direction_line>* {
			margin-right: 45px;
		}

		#rb_icon_list_5de228592d04e.direction_column>*>* {
			margin-top: 45px;
		}

		#rb_icon_list_5de228592d04e>a,
		#rb_icon_list_5de228592d04e>.mini-cart>a,
		#rb_icon_list_5de228592d04e .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a {
			color: #3e4a59;
		}

		#rb_icon_list_5de228592d04e.header_icons>*~.mini-cart:not(:first-child) .woo_mini-count {
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

			#rb_icon_list_5de228592d04e>a:hover,
			#rb_icon_list_5de228592d04e>.mini-cart>a:hover,
			#rb_icon_list_5de228592d04e .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a:hover {
				color: #3e4a59;
			}
		}

		#rb_column_5de228592d1da>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228592d1da>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228592d1da>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_icon_list_5de228592d313 {
			text-align: right;
		}

		#rb_icon_list_5de228592d313 i:before {
			font-size: 18px;
		}

		#rb_icon_list_5de228592d313 .icon_wrapper svg {
			transform: scale(0.48);
		}

		#rb_icon_list_5de228592d313 .title {
			font-size: 16px;
		}

		#rb_icon_list_5de228592d313.direction_line>* {
			margin-right: 15px;
		}

		#rb_icon_list_5de228592d313.direction_column>*>* {
			margin-top: 15px;
		}

		#rb_icon_list_5de228592d313>a,
		#rb_icon_list_5de228592d313>.mini-cart>a,
		#rb_icon_list_5de228592d313 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a {
			color: #3e4a59;
		}

		#rb_icon_list_5de228592d313.header_icons>*~.mini-cart:not(:first-child) .woo_mini-count {
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

			#rb_icon_list_5de228592d313>a:hover,
			#rb_icon_list_5de228592d313>.mini-cart>a:hover,
			#rb_icon_list_5de228592d313 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a:hover {
				color: #3e4a59;
			}
		}

		.rb_content_5de228592d650>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de228592d650>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de228592d650>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de228592d787>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228592d787>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228592d787>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de228592d993>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228592d993>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228592d993>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_menu_5de228592dae0>ul {
			-webkit-justify-content: center;
			justify-content: center;
		}

		#rb_menu_5de228592dae0>.menu>.menu-item>a {
			color: #3e4a59;
		}

		#rb_menu_5de228592dae0>.menu>.menu-item>a:before,
		#rb_menu_5de228592dae0 .menu-item-object-rb-megamenu .sub-menu .rb_megamenu_item .widgettitle:before {
			background-color: #5163dd;
		}

		.rb_content_5de228592ee66>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de228592ee66>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de228592ee66>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de228592efbf>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228592efbf>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228592efbf>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de228592faa4>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228592faa4>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228592faa4>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de228592faa4>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de228593032d>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228593032d>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228593032d>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de228593032d>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de22859309ad>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de22859309ad>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de22859309ad>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de22859309ad>.wpb_column>.vc_column-inner {
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

		.rb_content_5de2285931419>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2285931419>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2285931419>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de228593154e>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228593154e>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228593154e>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2285931ce9>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2285931ce9>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2285931ce9>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de228593234e>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228593234e>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228593234e>.wpb_column>.vc_column-inner {
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

		#rb_column_5de2285932d7c>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2285932d7c>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2285932d7c>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_inner_row_5de2285932eb2>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de2285932eb2>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de2285932eb2>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2285932fab>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2285932fab>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2285932fab>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_search_5de22859330be {
			text-align: right;
		}

		#rb_search_5de22859330be .search-trigger {
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
			#rb_search_5de22859330be .search-trigger:hover {
				color: #3e4a59;
			}
		}

		#rb_column_5de2285933140>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2285933140>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2285933140>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_button_wrapper_5de2285933250 {
			text-align: right;
		}

		#rb_button_5de2285933287 {
			color: #3e4a59;
		}

		#rb_button_5de2285933287 {
			background-color: rgba(255, 255, 255, 0.01);
		}

		#rb_button_5de2285933287 {
			border-color: #5163dd;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			#rb_button_5de2285933287:hover {
				color: #ffffff;
			}

			#rb_button_5de2285933287:hover {
				background-color: #5163dd;
			}

			#rb_button_5de2285933287:hover {
				border-color: #5163dd;
			}
		}

		.rb_content_5de2285933363>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2285933363>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2285933363>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de22859334b5>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de22859334b5>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de22859334b5>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_title_area_5de228593362b {
			-webkit-mask-image: url(wp-content/uploads/2019/07/title_mask.svg);
			-webkit-mask-size: cover;
			-webkit-mask-repeat: no-repeat;
			-webkit-mask-position: bottom center;
		}

		#rb_title_area_5de228593362b {
			background: -webkit-linear-gradient(-6deg, #e9eeff, #ffffff);
			background: linear-gradient(-6deg, #e9eeff, #ffffff);
		}

		#rb_title_area_5de228593362b .single_post_categories {
			background-color: #3e4a59;
		}

		#rb_title_area_5de228593362b .single_post_categories a {
			color: #ffffff;
		}

		#rb_title_area_5de228593362b .page_title {
			color: #3e4a59;
		}

		#rb_title_area_5de228593362b .single_post_meta a {
			color: #3e4a59;
		}

		#rb_title_area_5de228593362b .title_divider {
			background-color: #5163dd;
		}

		#rb_title_area_5de228593362b .woocommerce-breadcrumb *,
		#rb_title_area_5de228593362b .bread-crumbs * {
			color: #3e4a59;
		}

		.rb_content_5de228593520c>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de228593520c>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de228593520c>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de228593538b>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228593538b>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228593538b>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2285935eac>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2285935eac>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2285935eac>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2285935eac>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de22859367d5>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de22859367d5>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de22859367d5>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de22859367d5>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de2285936ea0>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2285936ea0>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2285936ea0>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2285936ea0>.wpb_column>.vc_column-inner {
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

		.rb_content_5de228593793f>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de228593793f>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de228593793f>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2285937a7d>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2285937a7d>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2285937a7d>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de228593826e>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228593826e>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228593826e>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2285939398>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2285939398>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2285939398>.wpb_column>.vc_column-inner {
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

		.rb_content_5de228593a8c6>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de228593a8c6>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de228593a8c6>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de228593aa80>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228593aa80>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228593aa80>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de228593ac45 {
			text-align: center;
		}

		.rb_textmodule_5de228593ac45 .rb_textmodule_title,
		.rb_textmodule_5de228593ac45 .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de228593ac45 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de228593ac45 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de228593ac45 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de228593ac45 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de228593ac45 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de228593ac45 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de228593ac45 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de228593ac45 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de228593ac45 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de228593ac45 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de228593ac45 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de228593ac45 .rb_textmodule_title {
			margin-bottom: 31px;
			padding-bottom: 31px;
		}

		.rb_textmodule_5de228593ac45 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de228593ac45 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de228593ac45 .rb_textmodule_button {
			margin-top: 35px;
		}

		#rb_inner_row_5de228593add1>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de228593add1>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de228593add1>.vc_row {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_inner_row_5de228593add1>.vc_row {
				margin-right: 15px !important;
				margin-left: 15px !important;
				padding-right: 15px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de228593af32>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228593af32>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228593af32>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_service_5de228593b217 .service_icon_wrapper i,
		#rb_service_5de228593b217 .service_icon_wrapper i:before {
			font-size: 42px;
		}

		#rb_service_5de228593b217 .service_icon_wrapper i.svg {
			width: 42px !important;
			height: 42px !important;
		}

		#rb_service_5de228593b217 .service_title {
			font-size: 24px;
		}

		#rb_service_5de228593b217 .service_title {
			line-height: 25px;
		}

		#rb_service_5de228593b217 .content_wrapper {
			font-size: 20px;
		}

		#rb_service_5de228593b217 .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de228593b217 .service-button {
			font-size: 16px;
		}

		#rb_service_5de228593b217 .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de228593b217 .service-button {
			margin-top: 10px;
		}

		#rb_service_5de228593b217 .service_title {
			margin: 4px 0px 20px 0px;
		}

		#rb_service_5de228593b217 .service_icon_wrapper i,
		#rb_service_5de228593b217 .service_icon_wrapper i:before {
			color: #3e4a59;
		}

		#rb_service_5de228593b217 .service_title {
			color: #3e4a59;
		}

		#rb_service_5de228593b217 .service_divider {
			background-color: #3e4a59;
		}

		#rb_service_5de228593b217 .content_wrapper,
		#rb_service_5de228593b217 .content_wrapper>a {
			color: rgba(62, 74, 89, 0.8);
		}

		#rb_service_5de228593b217 .content_wrapper>a:hover {
			color: #5163dd;
		}

		#rb_service_5de228593b217 .service-button {
			color: #3e4a59;
		}

		#rb_service_5de228593b217 .service-button:after {
			color: #3e4a59;
		}

		@media screen and (max-width: 767px) {
			#rb_service_5de228593b217 {
				text-align: center;
			}
		}

		#rb_column_5de228593b30b>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228593b30b>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228593b30b>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_service_5de228593b4c2 .service_icon_wrapper i,
		#rb_service_5de228593b4c2 .service_icon_wrapper i:before {
			font-size: 42px;
		}

		#rb_service_5de228593b4c2 .service_icon_wrapper i.svg {
			width: 42px !important;
			height: 42px !important;
		}

		#rb_service_5de228593b4c2 .service_title {
			font-size: 24px;
		}

		#rb_service_5de228593b4c2 .service_title {
			line-height: 25px;
		}

		#rb_service_5de228593b4c2 .content_wrapper {
			font-size: 20px;
		}

		#rb_service_5de228593b4c2 .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de228593b4c2 .service-button {
			font-size: 16px;
		}

		#rb_service_5de228593b4c2 .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de228593b4c2 .service-button {
			margin-top: 10px;
		}

		#rb_service_5de228593b4c2 .service_title {
			margin: 4px 0px 20px 0px;
		}

		#rb_service_5de228593b4c2 .service_icon_wrapper i,
		#rb_service_5de228593b4c2 .service_icon_wrapper i:before {
			color: #3e4a59;
		}

		#rb_service_5de228593b4c2 .service_title {
			color: #3e4a59;
		}

		#rb_service_5de228593b4c2 .service_divider {
			background-color: #3e4a59;
		}

		#rb_service_5de228593b4c2 .content_wrapper,
		#rb_service_5de228593b4c2 .content_wrapper>a {
			color: rgba(62, 74, 89, 0.8);
		}

		#rb_service_5de228593b4c2 .content_wrapper>a:hover {
			color: #5163dd;
		}

		#rb_service_5de228593b4c2 .service-button {
			color: #3e4a59;
		}

		#rb_service_5de228593b4c2 .service-button:after {
			color: #3e4a59;
		}

		@media screen and (max-width: 767px) {
			#rb_service_5de228593b4c2 {
				margin-top: 30px !important;
			}

			#rb_service_5de228593b4c2 {
				text-align: center;
			}
		}

		#rb_column_5de228593b598>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228593b598>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228593b598>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_service_5de228593b740 .service_icon_wrapper i,
		#rb_service_5de228593b740 .service_icon_wrapper i:before {
			font-size: 42px;
		}

		#rb_service_5de228593b740 .service_icon_wrapper i.svg {
			width: 42px !important;
			height: 42px !important;
		}

		#rb_service_5de228593b740 .service_title {
			font-size: 24px;
		}

		#rb_service_5de228593b740 .service_title {
			line-height: 25px;
		}

		#rb_service_5de228593b740 .content_wrapper {
			font-size: 20px;
		}

		#rb_service_5de228593b740 .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de228593b740 .service-button {
			font-size: 16px;
		}

		#rb_service_5de228593b740 .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de228593b740 .service-button {
			margin-top: 10px;
		}

		#rb_service_5de228593b740 .service_title {
			margin: 4px 0px 20px 0px;
		}

		#rb_service_5de228593b740 .service_icon_wrapper i,
		#rb_service_5de228593b740 .service_icon_wrapper i:before {
			color: #3e4a59;
		}

		#rb_service_5de228593b740 .service_title {
			color: #3e4a59;
		}

		#rb_service_5de228593b740 .service_divider {
			background-color: #3e4a59;
		}

		#rb_service_5de228593b740 .content_wrapper,
		#rb_service_5de228593b740 .content_wrapper>a {
			color: rgba(62, 74, 89, 0.8);
		}

		#rb_service_5de228593b740 .content_wrapper>a:hover {
			color: #5163dd;
		}

		#rb_service_5de228593b740 .service-button {
			color: #3e4a59;
		}

		#rb_service_5de228593b740 .service-button:after {
			color: #3e4a59;
		}

		@media screen and (max-width: 767px) {
			#rb_service_5de228593b740 {
				margin-top: 30px !important;
			}

			#rb_service_5de228593b740 {
				text-align: center;
			}
		}

		.rb_content_5de228593b84f>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de228593b84f>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de228593b84f>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de228593b9cd>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228593b9cd>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228593b9cd>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_testimonials_5de228593bb49.style_with_bg .testimonial {
			background-image: linear-gradient(0deg, #5163DD, #5163DD, #fff, #fff);
		}

		#rb_testimonials_5de228593bb49 .testimonial_pos,
		#rb_testimonials_5de228593bb49 .testimonial_desc,
		#rb_testimonials_5de228593bb49 .testimonial_desc a {
			color: rgba(62, 74, 89, 0.8);
		}

		#rb_testimonials_5de228593bb49 .testimonial_name {
			color: #3e4a59;
		}

		#rb_testimonials_5de228593bb49 .testimonial_desc:before {
			background-color: #5163dd;
		}

		#rb_testimonials_5de228593bb49.style_with_bg .image_wrapper.round,
		#rb_testimonials_5de228593bb49.style_with_bg .image_wrapper.square {
			-webkit-box-shadow: 0 5px 15px 0 rgba(255, 255, 255, .35);
			-moz-box-shadow: 0 5px 15px 0 rgba(255, 255, 255, .35);
			box-shadow: 0 5px 15px 0 rgba(255, 255, 255, .35);
		}

		#rb_testimonials_5de228593bb49.style_with_bg .testimonial {
			-webkit-box-shadow: 0 8px 14px 2px rgba(85, 76, 181, .17);
			-moz-box-shadow: 0 8px 14px 2px rgba(85, 76, 181, .17);
			box-shadow: 0 8px 14px 2px rgba(85, 76, 181, .17);
		}

		#rb_testimonials_5de228593bb49 .slick-dots li button {
			border-color: #e5e5e5;
		}

		#rb_testimonials_5de228593bb49 .slick-dots li:after {
			background-color: #e5e5e5;
		}

		#rb_testimonials_5de228593bb49 .slick-dots li.slick-active button {
			border-color: #5163DD;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {

			#rb_testimonials_5de228593bb49.style_with_bg .testimonial:hover .testimonial_pos,
			#rb_testimonials_5de228593bb49.style_with_bg .testimonial:hover .testimonial_desc {
				color: #fff;
			}

			#rb_testimonials_5de228593bb49.style_with_bg .testimonial:hover .testimonial_name {
				color: #fff;
			}

			#rb_testimonials_5de228593bb49.style_with_bg .testimonial:hover .testimonial_desc:before {
				background-color: #fff;
			}
		}

		.rb_content_5de228593bf8a>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de228593bf8a>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de228593bf8a>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de228593c10c>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228593c10c>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228593c10c>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de228593c10c>.wpb_column>.vc_column-inner {
				margin-right: 30px !important;
				margin-left: 30px !important;
				padding-right: 20px !important;
				padding-left: 20px !important;
			}
		}

		#rb_column_5de228593c22c>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228593c22c>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228593c22c>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de228593c3a5 {
			text-align: center;
		}

		.rb_textmodule_5de228593c3a5 .rb_textmodule_title,
		.rb_textmodule_5de228593c3a5 .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de228593c3a5 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de228593c3a5 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de228593c3a5 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de228593c3a5 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de228593c3a5 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de228593c3a5 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de228593c3a5 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de228593c3a5 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de228593c3a5 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de228593c3a5 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de228593c3a5 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de228593c3a5 .rb_textmodule_title {
			margin-bottom: 31px;
			padding-bottom: 31px;
		}

		.rb_textmodule_5de228593c3a5 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de228593c3a5 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de228593c3a5 .rb_textmodule_button {
			margin-top: 35px;
		}

		#rb_column_5de228593c770>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228593c770>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228593c770>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_content_5de228593c8a1>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de228593c8a1>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de228593c8a1>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de228593ca29>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228593ca29>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228593ca29>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de228593e8bc .rb_textmodule_title,
		.rb_textmodule_5de228593e8bc .rb_textmodule_button.simple {
			color: #3E4A59;
		}

		.rb_textmodule_5de228593e8bc .rb_textmodule_subtitle {
			color: #5163DD;
		}

		.rb_textmodule_5de228593e8bc {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de228593e8bc a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de228593e8bc .rb_textmodule_content_wrapper a:hover {
				color: #5163DD;
			}
		}

		.rb_textmodule_5de228593e8bc .rb_textmodule_content_wrapper ul li:before {
			color: #5163DD;
		}

		.rb_textmodule_5de228593e8bc .rb_textmodule_divider {
			background-color: #5163DD;
		}

		.rb_textmodule_5de228593e8bc .rb_textmodule_button.simple:after {
			color: #5163DD;
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

		.rb_content_5de228593f16b>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de228593f16b>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de228593f16b>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de228593f32e>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228593f32e>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228593f32e>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_inner_row_5de228593f4d4>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de228593f4d4>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de228593f4d4>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de228593f610>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228593f610>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228593f610>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_logo_5de228593f858 {
			border-bottom-width: 1px !important;
			padding-bottom: 35px !important;
			border-bottom-color: #cccccc !important;
			border-bottom-style: solid !important;
		}

		#rb_logo_5de228593f858 {
			text-align: center;
		}

		#rb_inner_row_5de228593f91d>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de228593f91d>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de228593f91d>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de228593fa6a>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228593fa6a>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228593fa6a>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_icon_list_5de228593fb99>a,
		#rb_icon_list_5de228593fb99>.mini-cart>a,
		#rb_icon_list_5de228593fb99 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a {
			color: #ffffff;
		}

		#rb_icon_list_5de228593fb99.header_icons>*~.mini-cart:not(:first-child) .woo_mini-count {
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

			#rb_icon_list_5de228593fb99>a:hover,
			#rb_icon_list_5de228593fb99>.mini-cart>a:hover,
			#rb_icon_list_5de228593fb99 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a:hover {
				color: #ffffff;
			}
		}

		@media screen and (max-width: 767px) {
			#rb_icon_list_5de228593fb99 {
				margin-bottom: 30px !important;
				;
			}

			#rb_icon_list_5de228593fb99 {
				text-align: center;
			}
		}

		#rb_column_5de228593fd11>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de228593fd11>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de228593fd11>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de228593fe43 {
			margin-bottom: 15px !important;
			;
		}

		.rb_textmodule_5de228593fe43 {
			text-align: center;
		}

		.rb_textmodule_5de228593fe43 .rb_textmodule_title,
		.rb_textmodule_5de228593fe43 .rb_textmodule_button.simple {
			color: #ffffff;
		}

		.rb_textmodule_5de228593fe43 .rb_textmodule_subtitle {
			color: #ffffff;
		}

		.rb_textmodule_5de228593fe43 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de228593fe43 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de228593fe43 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de228593fe43 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de228593fe43 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de228593fe43 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de228593fe43 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de228593fe43 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de228593fe43 .rb_textmodule_title {
			font-size: 20px;
		}

		.rb_textmodule_5de228593fe43 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de228593fe43 .rb_textmodule_title {
			margin-bottom: 20px;
			padding-bottom: 20px;
		}

		.rb_textmodule_5de228593fe43 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de228593fe43 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de228593fe43 .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de228593fe43 {
				text-align: center;
			}
		}

		#rb_column_5de2285940109>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2285940109>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2285940109>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de2285940285 {
			margin-bottom: 0px !important;
			padding-bottom: 0px !important;
			;
		}

		.rb_textmodule_5de2285940285 {
			text-align: right;
		}

		.rb_textmodule_5de2285940285 .rb_textmodule_title,
		.rb_textmodule_5de2285940285 .rb_textmodule_button.simple {
			color: #ffffff;
		}

		.rb_textmodule_5de2285940285 .rb_textmodule_subtitle {
			color: #ffffff;
		}

		.rb_textmodule_5de2285940285 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de2285940285 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2285940285 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de2285940285 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de2285940285 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2285940285 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de2285940285 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de2285940285 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de2285940285 .rb_textmodule_title {
			font-size: 20px;
		}

		.rb_textmodule_5de2285940285 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de2285940285 .rb_textmodule_title {
			margin-bottom: 0px;
			padding-bottom: 0px;
		}

		.rb_textmodule_5de2285940285 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de2285940285 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de2285940285 .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de2285940285 {
				margin-top: 30px !important;
				;
			}

			.rb_textmodule_5de2285940285 {
				text-align: center;
			}
		}

		#rb_icon_list_5de228594038d {
			margin-top: 25px !important;
			;
		}

		#rb_icon_list_5de228594038d {
			text-align: right;
		}

		#rb_icon_list_5de228594038d i:before {
			font-size: 17px;
		}

		#rb_icon_list_5de228594038d .icon_wrapper svg {
			transform: scale(0.47);
		}

		#rb_icon_list_5de228594038d .title {
			font-size: 16px;
		}

		#rb_icon_list_5de228594038d.direction_line>* {
			margin-right: 8px;
		}

		#rb_icon_list_5de228594038d.direction_column>*>* {
			margin-top: 8px;
		}

		#rb_icon_list_5de228594038d>a,
		#rb_icon_list_5de228594038d>.mini-cart>a,
		#rb_icon_list_5de228594038d .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a {
			color: #ffffff;
		}

		#rb_icon_list_5de228594038d.header_icons>*~.mini-cart:not(:first-child) .woo_mini-count {
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

			#rb_icon_list_5de228594038d>a:hover,
			#rb_icon_list_5de228594038d>.mini-cart>a:hover,
			#rb_icon_list_5de228594038d .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a:hover {
				color: #ffffff;
			}
		}

		@media screen and (max-width: 991px) {
			#rb_icon_list_5de228594038d *:before {
				font-size: 20px;
			}

			#rb_icon_list_5de228594038d .title {
				font-size: 16px;
			}

			#rb_icon_list_5de228594038d.direction_line>* {
				margin-right: 12px;
			}

			#rb_icon_list_5de228594038d.direction_column>*>* {
				margin-top: 12px;
			}
		}

		@media screen and (max-width: 767px) {
			#rb_icon_list_5de228594038d {
				text-align: center;
			}
		}

		.rb_content_5de22859405ea>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de22859405ea>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de22859405ea>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2285940770>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2285940770>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2285940770>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2285940770>.wpb_column>.vc_column-inner {
				margin-bottom: 30px !important;
			}
		}

		.rb_textmodule_5de2285940917 .rb_textmodule_title,
		.rb_textmodule_5de2285940917 .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de2285940917 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de2285940917 {
			color: #ffffff;
		}

		.rb_footer_template .rb_textmodule_5de2285940917 a {
			color: #ffffff;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2285940917 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de2285940917 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de2285940917 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2285940917 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de2285940917 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de2285940917 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de2285940917 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de2285940917 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de2285940917 .rb_textmodule_title {
			margin-bottom: 20px;
			padding-bottom: 20px;
		}

		.rb_textmodule_5de2285940917 .rb_textmodule_content_wrapper {
			font-size: 16px;
		}

		.rb_textmodule_5de2285940917 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de2285940917 .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de2285940917 {
				text-align: center;
			}
		}

		#rb_column_5de2285940a5a>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2285940a5a>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2285940a5a>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de2285940bde .rb_textmodule_title,
		.rb_textmodule_5de2285940bde .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de2285940bde .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de2285940bde {
			color: #ffffff;
		}

		.rb_footer_template .rb_textmodule_5de2285940bde a {
			color: #ffffff;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2285940bde .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de2285940bde .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de2285940bde .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2285940bde .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de2285940bde .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de2285940bde .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de2285940bde .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de2285940bde .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de2285940bde .rb_textmodule_title {
			margin-bottom: 20px;
			padding-bottom: 20px;
		}

		.rb_textmodule_5de2285940bde .rb_textmodule_content_wrapper {
			font-size: 16px;
		}

		.rb_textmodule_5de2285940bde .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de2285940bde .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de2285940bde {
				text-align: center;
			}
		}
	</style>
	<link rel='stylesheet' id='fontawesome-css' href='wp-content/plugins/wp-google-maps/css/font-awesome.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='wpgmza-common-css' href='wp-content/plugins/wp-google-maps/css/common.css' type='text/css' media='all' />
	<link rel='stylesheet' id='remodal-css' href='wp-content/plugins/wp-google-maps/lib/remodal.css' type='text/css' media='all' />
	<link rel='stylesheet' id='remodal-default-theme-css' href='wp-content/plugins/wp-google-maps/lib/remodal-default-theme.css' type='text/css' media='all' />
	<link rel='stylesheet' id='wpgmza-ui-legacy-css' href='wp-content/plugins/wp-google-maps/css/styles/legacy.css' type='text/css' media='all' />
	<link rel='stylesheet' id='flaticons-css' href='wp-content/themes/seoes/assets/fonts/flaticons/style.css' type='text/css' media='all' />
	<link rel='stylesheet' id='rbicons-css' href='wp-content/themes/seoes/assets/fonts/rbicons/style.css' type='text/css' media='all' />
	<link rel='stylesheet' id='font-awesome-css' href='wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='seoes-fonts-css' href='https://fonts.googleapis.com/css?family=Nunito+Sans%3Aregular,700,900%7COpen+Sans%3Aregular,700&amp;ver=5.3' type='text/css' media='all' />
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
	<script type='text/javascript' src='https://maps.google.com/maps/api/js?v=quarterly&amp;language=en&amp;key=AIzaSyCXbevZouZ7WDJofdbBBWP4ihz9zVE3FbU&amp;libraries=geometry,places,visualization&amp;ver=5.3' data-usercentrics="Google Maps"></script>
	<script type='text/javascript' src='wp-content/plugins/wp-google-maps/lib/CanvasLayerOptions.js'></script>
	<script type='text/javascript' src='wp-content/plugins/wp-google-maps/lib/CanvasLayer.js'></script>
	<script type='text/javascript' src='wp-content/plugins/wp-google-maps/js/jquery.dataTables.js'></script>
	<script type='text/javascript' src='wp-content/plugins/wp-google-maps/lib/jquery-cookie.js'></script>
	<script type='text/javascript' src='wp-content/plugins/wp-google-maps/lib/remodal.js'></script>
	<script type='text/javascript' src='wp-content/plugins/wp-google-maps/lib/spectrum.js'></script>
	<script type='text/javascript' src='wp-content/plugins/wp-google-maps/lib/text.min.js'></script>
	<script type='text/javascript' src='wp-content/plugins/wp-google-maps/lib/pako_deflate.min.js'></script>
	<script type='text/javascript' src='wp-content/plugins/wpforms-lite/assets/js/jquery.validate.min.js'></script>
	<script type='text/javascript' src='wp-content/plugins/wpforms-lite/assets/js/mailcheck.min.js'></script>

</body>

</html>