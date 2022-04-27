<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>SEO-Tech-Store About Us</title>
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

		.vc_custom_1571311981906 {
			padding-top: 80px !important;
			background-image: url(wp-content/uploads/2019/05/bg_450.png?id=165) !important;
		}

		.vc_custom_1557910811938 {
			margin-top: -100px !important;
			padding-top: 200px !important;
			padding-bottom: 100px !important;
			background-image: url(wp-content/uploads/2019/05/bg_800.png?id=788) !important;
		}

		.vc_custom_1571312729034 {
			padding-top: 100px !important;
			padding-bottom: 120px !important;
			background-image: url(wp-content/uploads/2019/10/2-2.png?id=4155) !important;
		}

		.vc_custom_1557911897930 {
			padding-top: 60px !important;
			padding-bottom: 60px !important;
		}

		.vc_custom_1571314901007 {
			padding-top: 90px !important;
			padding-bottom: 110px !important;
			background-color: #fcfdfe !important;
		}

		.vc_custom_1571314901014 {
			padding-top: 50px !important;
			padding-bottom: 50px !important;
		}

		.vc_custom_1571314783423 {
			margin-bottom: -100px !important;
			padding-top: 90px !important;
			padding-bottom: 100px !important;
			background-image: url(wp-content/uploads/2019/10/3-1.png?id=4141) !important;
		}

		.vc_custom_1571314783427 {
			padding-top: 50px !important;
			padding-bottom: 50px !important;
		}

		.vc_custom_1562654969173 {
			padding-bottom: 80px !important;
		}

		.vc_custom_1562654979260 {
			padding-bottom: 80px !important;
		}

		.vc_custom_1571232054929 {
			padding-top: 40px !important;
			padding-right: 25px !important;
			padding-bottom: 40px !important;
			padding-left: 25px !important;
		}

		.vc_custom_1571232062948 {
			padding-top: 40px !important;
			padding-right: 25px !important;
			padding-bottom: 40px !important;
			padding-left: 25px !important;
		}

		.vc_custom_1571232069705 {
			padding-top: 40px !important;
			padding-right: 25px !important;
			padding-bottom: 40px !important;
			padding-left: 25px !important;
		}

		.vc_custom_1561548889783 {
			padding-top: 100px !important;
		}

		.vc_custom_1561548900623 {
			padding-top: 120px !important;
		}

		.vc_custom_1571312902866 {
			padding-top: 60px !important;
		}

		.vc_custom_1561632733563 {
			padding-bottom: 20px !important;
		}

		.vc_custom_1561632738778 {
			padding-bottom: 20px !important;
		}

		.vc_custom_1561632744169 {
			padding-bottom: 20px !important;
		}

		.vc_custom_1561549155314 {
			padding-top: 120px !important;
		}

		.vc_custom_1561549205685 {
			padding-top: 80px !important;
			padding-left: 100px !important;
		}

		.vc_custom_1561549205689 {
			padding-left: 20px !important;
		}

		.vc_custom_1571313101905 {
			padding-bottom: 20px !important;
		}

		.vc_custom_1557493526313 {
			padding-top: 53px !important;
		}

		.vc_custom_1561632860154 {
			padding-bottom: 20px !important;
		}

		.vc_custom_1561632965313 {
			padding-bottom: 20px !important;
		}

		.vc_custom_1561632903979 {
			padding-bottom: 20px !important;
		}

		.vc_custom_1561632935889 {
			padding-bottom: 20px !important;
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
	<!-- <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js'></script>
	<script type='text/javascript'>
		/* <![CDATA[ */
		var wpgmza_google_api_status = {
			"message": "Enqueued",
			"code": "ENQUEUED"
		};
		/* ]]> */
	</script> -->
	<!-- <script type='text/javascript' src='wp-content/plugins/wp-google-maps/wpgmza_data.js'></script> -->
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

<body class="page-template-default page page-id-777 theme-seoes woocommerce-no-js wpb-js-composer js-comp-ver-6.0.5 vc_responsive" data-boxed="false" data-default="false" itemscope="itemscope" itemtype="http://schema.org/WebPage">


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
				<div id="rb_content_5de226d7d542c" class="rb_content_5de226d7d542c rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1562326619547 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de226d7d5c3a' class='rb_column_wrapper vc_col-sm-3 '>
							<div class="wpb_column vc_column_container vc_col-sm-2">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_logo_5de226d7d6109' class='site_logotype'><a href='index.php'><img src='wp-content/uploads/2019/06/logo@2x.png' alt='some-alt' style='width:125px;'></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de226d7d61e6' class='rb_column_wrapper vc_col-sm-8 '>
							<div class="wpb_column vc_column_container vc_col-sm-7">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_menu_5de226d7d64a6' class='menu-main-container header_menu rb_menu_module'>
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
												<li id="menu-item-3106" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-777 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-3106"><a href="about-us.php" aria-current="page">Pages</a>
													<ul class="sub-menu">
														<li id="menu-item-3135" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3135"><a href="seo-services.php">SEO Services</a></li>
														<li id="menu-item-3255" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3255"><a href="ppm-services.php">PPM Services</a></li>
														<li id="menu-item-3137" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3137"><a href="digital-marketing.php">Digital Marketing</a></li>
														<li id="menu-item-3087" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-777 current_page_item menu-item-3087"><a href="about-us.php" aria-current="page">About us</a></li>
														<li id="menu-item-3107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3107"><a href="our-story.php">Our Story</a></li>
														<li id="menu-item-3108" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3108"><a href="our-team.php">Our Team</a></li>
														<li id="menu-item-3086" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3086"><a href="content-elements.php">Content Elements</a></li>
														<li id="menu-item-3105" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3105"><a href="pricing-tables.php">Pricing Tables</a></li>
													</ul>
												</li>
												<li id="menu-item-4407" class="menu-item menu-item-type-post_type menu-item-object-rb-megamenu menu-item-4407"><a href="rb-megamenu/portfolio/">Portfolio</a>
													<ul class="sub-menu">
														<li class='rb_megamenu_item' data-width='content_width' data-position='center'>
															<div id="rb_content_5de226d7d9943" class="rb_content_5de226d7d9943 rb-content background_no_hover">
																<div class="vc_row wpb_row vc_row-fluid vc_custom_1561704612827 vc_row-o-equal-height vc_row-o-content-top vc_row-flex">
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de226d7d9c00' class='rb_column_wrapper vc_col-sm-3 '>
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
																	<div id='rb_column_5de226d7db6c4' class='rb_column_wrapper vc_col-sm-3 '>
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
																	<div id='rb_column_5de226d7dcbad' class='rb_column_wrapper vc_col-sm-3 '>
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
																	<div id='rb_column_5de226d7ddc1a' class='rb_column_wrapper vc_col-sm-3 '>
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
															<div id="rb_content_5de226d7df09b" class="rb_content_5de226d7df09b rb-content background_no_hover">
																<div class="vc_row wpb_row vc_row-fluid vc_custom_1561712578812 vc_row-o-equal-height vc_row-flex">
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de226d7df20c' class='rb_column_wrapper vc_col-sm-4 '>
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
																	<div id='rb_column_5de226d7dfd53' class='rb_column_wrapper vc_col-sm-4 '>
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
																	<div id='rb_column_5de226d7e085f' class='rb_column_wrapper vc_col-sm-4 '>
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
																	<div id="rb_button_wrapper_5dfc576526357" class="rb_button_wrapper "><a id="rb_button_5dfc57652638e" class="rb_button advanced  medium no_shadow" href="login.php" target="_blank">Login</a></div>
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
				<!-- <div id="rb_content_5de226d7e2739" class="rb_content_5de226d7e2739 rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571319827010 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de226d7e28e1' class='rb_column_wrapper vc_col-sm-6 '>
							<div class="wpb_column vc_column_container vc_col-sm-6">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_icon_list_5de226d7e2a86' class='rb_icon_list_module header_icons direction_line'><a href='tel:+305111222333%20' class='custom_url'><i class='flaticon-telephone-auricular-with-cable'></i><span class='title'>+(305) 111-222-333 </span></a><a href='mailto:info@seotechstore.com' class='custom_url'><i class='flaticon-email'></i><span class='title'>info@seotechstore.com</span></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de226d7e2c17' class='rb_column_wrapper vc_col-sm-6 '>
							<div class="wpb_column vc_column_container vc_col-sm-6">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_icon_list_5de226d7e2d56' class='rb_icon_list_module header_icons direction_line align_right'><a href='https://facebook.com' class='custom_url'><i class='flaticon-facebook'></i><span class='title'></span></a><a href='https://twitter.com' class='custom_url'><i class='flaticon-twitter-letter-logo'></i><span class='title'></span></a><a href='https://youtube.com' class='custom_url'><i class='flaticon-youtube'></i><span class='title'></span></a><a href='https://linkedin.com' class='custom_url'><i class='flaticon-linkedin'></i><span class='title'></span></a>
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
				<div id="rb_content_5de226d7e30b7" class="rb_content_5de226d7e30b7 rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571720915789 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de226d7e31fd' class='rb_column_wrapper vc_col-sm-3 '>
							<div class="wpb_column vc_column_container vc_col-sm-2">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_logo_5de226d7e3374' class='site_logotype'><a href='index.php'><img src='wp-content/uploads/2019/06/logo@2x.png' alt='some-alt' style='width:187px;'></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de226d7e3405' class='rb_column_wrapper vc_col-sm-8 '>
							<div class="wpb_column vc_column_container vc_col-sm-7">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_menu_5de226d7e3579' class='menu-main-container header_menu rb_menu_module'>
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
												<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-777 current_page_item current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-3106"><a href="about-us.php" aria-current="page">Pages</a>
													<ul class="sub-menu">
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3135"><a href="seo-services.php">SEO Services</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3255"><a href="ppm-services.php">PPM Services</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3137"><a href="digital-marketing.php">Digital Marketing</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-777 current_page_item menu-item-3087"><a href="about-us.php" aria-current="page">About us</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3107"><a href="our-story.php">Our Story</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3108"><a href="our-team.php">Our Team</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3086"><a href="content-elements.php">Content Elements</a></li>
														<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3105"><a href="pricing-tables.php">Pricing Tables</a></li>
													</ul>
												</li>
												<li class="menu-item menu-item-type-post_type menu-item-object-rb-megamenu menu-item-4407"><a href="rb-megamenu/portfolio/">Portfolio</a>
													<ul class="sub-menu">
														<li class='rb_megamenu_item' data-width='content_width' data-position='center'>
															<div id="rb_content_5de226d7e4e14" class="rb_content_5de226d7e4e14 rb-content background_no_hover">
																<div class="vc_row wpb_row vc_row-fluid vc_custom_1561704612827 vc_row-o-equal-height vc_row-o-content-top vc_row-flex">
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de226d7e502f' class='rb_column_wrapper vc_col-sm-3 '>
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
																	<div id='rb_column_5de226d7e5d31' class='rb_column_wrapper vc_col-sm-3 '>
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
																	<div id='rb_column_5de226d7e6835' class='rb_column_wrapper vc_col-sm-3 '>
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
																	<div id='rb_column_5de226d7e6fbe' class='rb_column_wrapper vc_col-sm-3 '>
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
															<div id="rb_content_5de226d7e7e89" class="rb_content_5de226d7e7e89 rb-content background_no_hover">
																<div class="vc_row wpb_row vc_row-fluid vc_custom_1561712578812 vc_row-o-equal-height vc_row-flex">
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de226d7e80a5' class='rb_column_wrapper vc_col-sm-4 '>
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
																	<div id='rb_column_5de226d7e8ef9' class='rb_column_wrapper vc_col-sm-4 '>
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
																	<div id='rb_column_5de226d7e9b90' class='rb_column_wrapper vc_col-sm-4 '>
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
				<div id="rb_content_5de226d7eb821" class="rb_content_5de226d7eb821 rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de226d7ebabf' class='rb_column_wrapper vc_col-sm-12 '>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_title_area_5de226d7ebd0e' class='custom page_title_container  mouse_anim scroll_anim shared_bg' style=""><img data-depth='0.80' src='wp-content/uploads/2013/06/title_hexagons.png' class='page_title_dynamic_image' alt='About us' />
											<div class='page_title_wrapper'>
												<div class="page_title_customizer_size">
													<h1 class='page_title'>About us</h1>
												</div><span class='title_divider'></span>
												<div class="breadcrumbs">
													<div class="container">
														<nav class="bread-crumbs"><a href="index.php" property="v:title">Home</a><span class='delimiter'></span><span class="current">About us</span></nav><!-- .breadcrumbs -->
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

					<img data-depth="0.80" src="wp-content/uploads/2013/06/title_hexagons.png" class="page_title_dynamic_image" alt="About us" />

					<div class="page_title_wrapper container">
						<div class="page_title_customizer_size">
							<h1 class="page_title">
								About us </h1>
						</div>
						<span class="title_divider"></span>
						<div class="breadcrumbs">
							<div class="container">
								<nav class="bread-crumbs"><a href="index.php" property="v:title">Home</a><span class='delimiter'></span><span class="current">About us</span></nav><!-- .breadcrumbs -->
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
							<div id="rb_content_5de226d803789" class="rb_content_5de226d803789 rb-content background_no_hover">
								<div class='particles-wrapper'>
									<div id='particles-5de226d80386c' class='particles-js top_center' data-color='#ff6840' data-size='10' data-count='3' data-speed='2' data-hide='767' data-shape='circle' data-mode='bounce' style='width:100%;height:100%;'></div>
								</div>
								<div class='vc_row-full-width vc_clearfix'></div>
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571311981906 vc_row-has-fill">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226d803ae9' class='rb_column_wrapper vc_col-sm-4 fade_bottom animated'>
										<div class="wpb_column vc_column_container vc_col-sm-4">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div id='rb_service_5de226d804079' class='rb_extended_service_module style_square '>
														<div class='extended_services_shape'><svg class="svg_shape" style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																<defs>
																	<filter id="shadow_5de226d8042ce" height="200%">
																		<feDropShadow dx="0" dy="6" stdDeviation="4" flood-color="rgba(16,1,148,0.18)" />
																	</filter>
																	<linearGradient id="bg_gradient_5de226d804253" x1="0%" y1="0%" x2="0%" y2="100%">
																		<stop offset="0%" style="stop-color:#ffffff; stop-opacity:1" />
																		<stop offset="100%" style="stop-color:#ffffff; stop-opacity:1" />
																	</linearGradient>
																	<mask id="mask_5de226d80428f">
																		<path d="M92,100H8c-4.4,0-8-3.6-8-8V8c0-4.4,3.6-8,8-8h84c4.4,0,8,3.6,8,8v84C100,96.4,96.4,100,92,100z" />
																	</mask>
																</defs>
																<g style="filter:url(#shadow_5de226d8042ce)">
																	<path class="default" d="M92,100H8c-4.4,0-8-3.6-8-8V8c0-4.4,3.6-8,8-8h84c4.4,0,8,3.6,8,8v84C100,96.4,96.4,100,92,100z" fill="#ffffff" mask="url(#mask_5de226d80428f)" />
																	<path class="hover" d="M92,100H8c-4.4,0-8-3.6-8-8V8c0-4.4,3.6-8,8-8h84c4.4,0,8,3.6,8,8v84C100,96.4,96.4,100,92,100z" fill="url(#bg_gradient_5de226d804253)" mask="url(#mask_5de226d80428f)" />
																</g>
															</svg></div>
														<div class='extended_service_content_wrapper'>
															<div class='service_icon_wrapper icon_shape_none icon_inside'><i class="flaticon-data"></i></div>
															<div class="service_content">
																<h5 class="service_title">SEO Optimization</h5><span class="divider"></span>
																<div class='content_wrapper'>
																	<!-- <p>Sadly, much of the content being published is simply not worth linking to. 75% of it is getting zero inbound links. So forget the ‘more is better’ approach to content if you want links. Go with quality instead. Your content will generate links only if it is truly exceptional—’remarkable,’ as Seth Godin would say.</p> -->
																	<p>Focusing on quality backlinks over quantity is what can help to protect your site as Google updates.</p>
																</div>
																<!-- <a class='service-button rb_button simple' href='about-us.php'>READ MORE</a> -->
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226d8043ac' class='rb_column_wrapper vc_col-sm-4 fade_bottom animated'>
										<div class="wpb_column vc_column_container vc_col-sm-4">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div id='rb_service_5de226d8046b2' class='rb_extended_service_module style_square '>
														<div class='extended_services_shape'><svg class="svg_shape" style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																<defs>
																	<filter id="shadow_5de226d80487d" height="200%">
																		<feDropShadow dx="0" dy="6" stdDeviation="4" flood-color="rgba(16,1,148,0.18)" />
																	</filter>
																	<linearGradient id="bg_gradient_5de226d804809" x1="0%" y1="0%" x2="0%" y2="100%">
																		<stop offset="0%" style="stop-color:#ffffff; stop-opacity:1" />
																		<stop offset="100%" style="stop-color:#ffffff; stop-opacity:1" />
																	</linearGradient>
																	<mask id="mask_5de226d804843">
																		<path d="M92,100H8c-4.4,0-8-3.6-8-8V8c0-4.4,3.6-8,8-8h84c4.4,0,8,3.6,8,8v84C100,96.4,96.4,100,92,100z" />
																	</mask>
																</defs>
																<g style="filter:url(#shadow_5de226d80487d)">
																	<path class="default" d="M92,100H8c-4.4,0-8-3.6-8-8V8c0-4.4,3.6-8,8-8h84c4.4,0,8,3.6,8,8v84C100,96.4,96.4,100,92,100z" fill="#ffffff" mask="url(#mask_5de226d804843)" />
																	<path class="hover" d="M92,100H8c-4.4,0-8-3.6-8-8V8c0-4.4,3.6-8,8-8h84c4.4,0,8,3.6,8,8v84C100,96.4,96.4,100,92,100z" fill="url(#bg_gradient_5de226d804809)" mask="url(#mask_5de226d804843)" />
																</g>
															</svg></div>
														<div class='extended_service_content_wrapper'>
															<div class='service_icon_wrapper icon_shape_none icon_inside'><i class="flaticon-banner"></i></div>
															<div class="service_content">
																<h5 class="service_title">Digital Marketing</h5><span class="divider"></span>
																<div class='content_wrapper'>
																	<p>It’s much easier to double your business by doubling your conversion rate than by doubling your traffic.</p>
																</div>
																<!-- <a class='service-button rb_button simple' href='about-us.php'>READ MORE</a> -->
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226d80493d' class='rb_column_wrapper vc_col-sm-4 fade_bottom animated'>
										<div class="wpb_column vc_column_container vc_col-sm-4">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div id='rb_service_5de226d804c24' class='rb_extended_service_module style_square '>
														<div class='extended_services_shape'><svg class="svg_shape" style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																<defs>
																	<filter id="shadow_5de226d804de7" height="200%">
																		<feDropShadow dx="0" dy="6" stdDeviation="4" flood-color="rgba(16,1,148,0.18)" />
																	</filter>
																	<linearGradient id="bg_gradient_5de226d804d71" x1="0%" y1="0%" x2="0%" y2="100%">
																		<stop offset="0%" style="stop-color:#ffffff; stop-opacity:1" />
																		<stop offset="100%" style="stop-color:#ffffff; stop-opacity:1" />
																	</linearGradient>
																	<mask id="mask_5de226d804dad">
																		<path d="M92,100H8c-4.4,0-8-3.6-8-8V8c0-4.4,3.6-8,8-8h84c4.4,0,8,3.6,8,8v84C100,96.4,96.4,100,92,100z" />
																	</mask>
																</defs>
																<g style="filter:url(#shadow_5de226d804de7)">
																	<path class="default" d="M92,100H8c-4.4,0-8-3.6-8-8V8c0-4.4,3.6-8,8-8h84c4.4,0,8,3.6,8,8v84C100,96.4,96.4,100,92,100z" fill="#ffffff" mask="url(#mask_5de226d804dad)" />
																	<path class="hover" d="M92,100H8c-4.4,0-8-3.6-8-8V8c0-4.4,3.6-8,8-8h84c4.4,0,8,3.6,8,8v84C100,96.4,96.4,100,92,100z" fill="url(#bg_gradient_5de226d804d71)" mask="url(#mask_5de226d804dad)" />
																</g>
															</svg></div>
														<div class='extended_service_content_wrapper'>
															<div class='service_icon_wrapper icon_shape_none icon_inside'><i class="flaticon-bullhorn"></i></div>
															<div class="service_content">
																<h5 class="service_title">Social Marketing</h5><span class="divider"></span>
																<div class='content_wrapper'>
																	<p><br>Marketing is no longer about the stuff that you make, but about the stories you tell.<br></p>
																</div>
																<!-- <a class='service-button rb_button simple' href='about-us.php'>READ MORE</a> -->
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
							<div id="rb_content_5de226d804ee3" class="rb_content_5de226d804ee3 rb-content background_no_hover">
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1557910811938 vc_row-has-fill">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226d805213' class='rb_column_wrapper vc_col-sm-7 vc_col-lg-6 vc_col-md-6 '>
										<div class="wpb_column vc_column_container vc_col-sm-7 vc_col-lg-6 vc_col-md-6">
											<div class="vc_column-inner vc_custom_1561548889783">
												<div class="wpb_wrapper">
													<div class='rb_textmodule_5de226d8054b7 rb_textmodule mobile_align_center'>
														<h3 class='rb_textmodule_title'><strong>We are Specialized<br />
																in Smart Development,<br />
																and Smart SEO</strong><span class='rb_textmodule_divider'></span></h3>
														<div class='rb_textmodule_content_wrapper'>
															<p>If you want to rank higher in the search engines, than our High Level SEO if for you, we pioneered many of today’s SEO techniques, and apply science and data for a winning formula.</p>
														</div>
														<!-- <a href='about-us.php' class='rb_textmodule_button rb_button advanced medium'>Our Approaches</a> -->
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226d805790' class='rb_column_wrapper vc_col-sm-5 vc_col-lg-6 vc_col-md-6 '>
										<div class="wpb_column vc_column_container vc_col-sm-5 vc_col-lg-6 vc_col-md-6">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div id='rb_image_5de226d8059b8' class='rb_image_module background_3d' data-max_tilt=10 data-perspective=1000 data-scale=1 data-speed=300>
														<div class="main_image"><img src="wp-content/uploads/2019/05/513x507.png" alt="some-alt" /></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
							</div>
							<div id="rb_content_5de226d805d03" class="rb_content_5de226d805d03 rb-content background_no_hover">
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571312729034 vc_row-has-fill">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226d805f95' class='rb_column_wrapper vc_col-sm-12 '>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class='rb_textmodule_5de226d80620e rb_textmodule align_center'>
														<h3 class='rb_textmodule_title'><strong>Why People Choose Us</strong><span class='rb_textmodule_divider'></span></h3>
													</div>
													<div id='rb_inner_row_5de226d8063bb' class='rb_inner_row_wrapper'>
														<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1571312902866">
															<div id='rb_column_5de226d8065b9' class='rb_column_wrapper vc_col-sm-3 '>
																<div class="wpb_column vc_column_container vc_col-sm-3">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_milestone_5de226d806c93' class='rb_milestone_module style_simple'>
																				<div class='milestone_content'>
																					<div class='milestone_icon shape_square'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																							<defs>
																								<linearGradient id="icon_gradient_5de226d806dc5" x1="0%" y1="0%" x2="0%" y2="100%">
																									<stop offset="0%" style="stop-color:#1367d3; stop-opacity:1" />
																									<stop offset="100%" style="stop-color:#1367d4; stop-opacity:1" />
																								</linearGradient>
																							</defs>
																							<path d="M92,100H8c-4.4,0-8-3.6-8-8V8c0-4.4,3.6-8,8-8h84c4.4,0,8,3.6,8,8v84C100,96.4,96.4,100,92,100z" fill="url(#icon_gradient_5de226d806dc5)" />
																						</svg><i class="flaticon-customer-review"></i></div>
																					<div class='count_wrapper title_ff'><span class='counter'>987</span></div>
																					<p class='milestone_title'>Satisfied Customers</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de226d806e74' class='rb_column_wrapper vc_col-sm-3 '>
																<div class="wpb_column vc_column_container vc_col-sm-3">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_milestone_5de226d807053' class='rb_milestone_module style_simple'>
																				<div class='milestone_content'>
																					<div class='milestone_icon shape_square'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																							<defs>
																								<linearGradient id="icon_gradient_5de226d807162" x1="0%" y1="0%" x2="0%" y2="100%">
																									<stop offset="0%" style="stop-color:#1367d3; stop-opacity:1" />
																									<stop offset="100%" style="stop-color:#1367d4; stop-opacity:1" />
																								</linearGradient>
																							</defs>
																							<path d="M92,100H8c-4.4,0-8-3.6-8-8V8c0-4.4,3.6-8,8-8h84c4.4,0,8,3.6,8,8v84C100,96.4,96.4,100,92,100z" fill="url(#icon_gradient_5de226d807162)" />
																						</svg><i class="flaticon-trophy"></i></div>
																					<div class='count_wrapper title_ff'><span class='counter'>2036</span></div>
																					<p class='milestone_title'>Successful Projects</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de226d807203' class='rb_column_wrapper vc_col-sm-3 '>
																<div class="wpb_column vc_column_container vc_col-sm-3">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_milestone_5de226d8073d5' class='rb_milestone_module style_simple'>
																				<div class='milestone_content'>
																					<div class='milestone_icon shape_square'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																							<defs>
																								<linearGradient id="icon_gradient_5de226d8074e2" x1="0%" y1="0%" x2="0%" y2="100%">
																									<stop offset="0%" style="stop-color:#1367d3; stop-opacity:1" />
																									<stop offset="100%" style="stop-color:#1367d4; stop-opacity:1" />
																								</linearGradient>
																							</defs>
																							<path d="M92,100H8c-4.4,0-8-3.6-8-8V8c0-4.4,3.6-8,8-8h84c4.4,0,8,3.6,8,8v84C100,96.4,96.4,100,92,100z" fill="url(#icon_gradient_5de226d8074e2)" />
																						</svg><i class="flaticon-bar-chart"></i></div>
																					<div class='count_wrapper title_ff'><span class='counter'>24</span>%</div>
																					<p class='milestone_title'>Average Conversion</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de226d807575' class='rb_column_wrapper vc_col-sm-3 '>
																<div class="wpb_column vc_column_container vc_col-sm-3">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_milestone_5de226d80774e' class='rb_milestone_module style_simple'>
																				<div class='milestone_content'>
																					<div class='milestone_icon shape_square'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																							<defs>
																								<linearGradient id="icon_gradient_5de226d807859" x1="0%" y1="0%" x2="0%" y2="100%">
																									<stop offset="0%" style="stop-color:#1367d3; stop-opacity:1" />
																									<stop offset="100%" style="stop-color:#1367d4; stop-opacity:1" />
																								</linearGradient>
																							</defs>
																							<path d="M92,100H8c-4.4,0-8-3.6-8-8V8c0-4.4,3.6-8,8-8h84c4.4,0,8,3.6,8,8v84C100,96.4,96.4,100,92,100z" fill="url(#icon_gradient_5de226d807859)" />
																						</svg><i class="flaticon-security"></i></div>
																					<div class='count_wrapper title_ff'><span class='counter'>100</span>%</div>
																					<p class='milestone_title'>Guaranteed Results</p>
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
									</div>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
							</div>
							<div id="rb_content_5de226d80797c" class="rb_content_5de226d80797c rb-content background_no_hover">
								<div class='particles-wrapper'>
									<div id='particles-5de226d807a32' class='particles-js bottom_right' data-color='#3E4A59' data-size='90' data-count='1' data-speed='2' data-hide='767' data-shape='image' data-mode='bounce' data-image-url='wp-content/uploads/2019/05/particle_240-1-150x150.png' data-image-width='150' data-image-height='150' style='width:25%;height:100%;'></div>
								</div>
								<div class='vc_row-full-width vc_clearfix'></div>
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1557911897930">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226d808094' class='rb_column_wrapper vc_col-sm-5 vc_col-lg-6 vc_col-md-6 '>
										<div class="wpb_column vc_column_container vc_col-sm-5 vc_col-lg-6 vc_col-md-6">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div id='rb_image_5de226d808290' class='rb_image_module background_3d' data-max_tilt=10 data-perspective=1000 data-scale=1 data-speed=300>
														<div class="main_image"><img src="wp-content/uploads/2019/05/620x636.png" alt="some-alt" /></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226d8085ac' class='rb_column_wrapper vc_col-sm-7 vc_col-lg-6 vc_col-md-6 '>
										<div class="wpb_column vc_column_container vc_col-sm-7 vc_col-lg-6 vc_col-md-6">
											<div class="vc_column-inner vc_custom_1561549205685">
												<div class="wpb_wrapper">
													<div class='rb_textmodule_5de226d808752 rb_textmodule mobile_align_center'>
														<h3 class='rb_textmodule_title'><strong>Our mission is to<br />
																empower brands to<br />
																achieve their goals</strong><span class='rb_textmodule_divider'></span></h3>
														<div class='rb_textmodule_content_wrapper'>
															<p>SEO Tech store offers extraordinary high level Social media management. Proud to be a Social Media Agency that has helped to pave the way for the rest to follow, we’re not afraid to shake things up.</p>
															<!--<ul>
																<li>Phasellus sit amet libero turpis nunc fermentum</li>
																<li>Fermentum mauris faucibus quam, pharetra nunc</li>
																<li>Dolor eu nulla pellentesque aliquam faucibus.</li>
															</ul>-->
															<p>
														</div>
														<!-- <a href='about-us.php' class='rb_textmodule_button rb_button advanced medium'>Our Story</a> -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
							</div>
							<!-- <div id="rb_content_5de226d808952" class="rb_content_5de226d808952 rb-content background_no_hover">
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571314901007 vc_row-has-fill">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226d808b21' class='rb_column_wrapper vc_col-sm-12 '>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class='rb_textmodule_5de226d808cc8 rb_textmodule align_center'>
														<h3 class='rb_textmodule_title'><strong>Our Standards</strong><span class='rb_textmodule_divider'></span></h3>
													</div>
													<div id='rb_inner_row_5de226d808dd1' class='rb_inner_row_wrapper'>
														<div class="vc_row wpb_row vc_inner vc_row-fluid">
															<div id='rb_column_5de226d808f1a' class='rb_column_wrapper vc_col-sm-4 '>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_service_5de226d809156' class='rb_service_module style_icon_top style_tablet_inherit shape_hexagon '>
																				<div class='service_icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																						<defs>
																							<linearGradient id="gradient_5de226d8091d0" x1="0%" y1="0%" x2="0%" y2="100%">
																								<stop offset="0%" style="stop-color:#ff9a16; stop-opacity:1" />
																								<stop offset="100%" style="stop-color:#ff9a17; stop-opacity:1" />
																							</linearGradient>
																						</defs>
																						<path class="st0" d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z" fill="url(#gradient_5de226d8091d0)" />
																					</svg><i class="flaticon-target-1"></i></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">Being Relevant</h5>
																					<div class='content_wrapper'>
																						<p>Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum fermentum.</p>
																					</div><a class='service-button rb_button simple' href='about-us.php'>READ MORE</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de226d809257' class='rb_column_wrapper vc_col-sm-4 '>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_service_5de226d809408' class='rb_service_module style_icon_top style_tablet_inherit shape_hexagon '>
																				<div class='service_icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																						<defs>
																							<linearGradient id="gradient_5de226d80947b" x1="0%" y1="0%" x2="0%" y2="100%">
																								<stop offset="0%" style="stop-color:#ff9a17; stop-opacity:1" />
																								<stop offset="100%" style="stop-color:#ff9a18; stop-opacity:1" />
																							</linearGradient>
																						</defs>
																						<path class="st0" d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z" fill="url(#gradient_5de226d80947b)" />
																					</svg><i class="flaticon-motivation"></i></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">Memorable Branding</h5>
																					<div class='content_wrapper'>
																						<p>Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum fermentum.</p>
																					</div><a class='service-button rb_button simple' href='about-us.php'>READ MORE</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de226d8094da' class='rb_column_wrapper vc_col-sm-4 '>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_service_5de226d809686' class='rb_service_module style_icon_top style_tablet_inherit shape_hexagon '>
																				<div class='service_icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																						<defs>
																							<linearGradient id="gradient_5de226d8096f9" x1="0%" y1="0%" x2="0%" y2="100%">
																								<stop offset="0%" style="stop-color:#ff9a17; stop-opacity:1" />
																								<stop offset="100%" style="stop-color:#ff9a18; stop-opacity:1" />
																							</linearGradient>
																						</defs>
																						<path class="st0" d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z" fill="url(#gradient_5de226d8096f9)" />
																					</svg><i class="flaticon-heart"></i></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">Positive Impact</h5>
																					<div class='content_wrapper'>
																						<p>Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum fermentum.</p>
																					</div><a class='service-button rb_button simple' href='about-us.php'>READ MORE</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div id='rb_inner_row_5de226d809789' class='rb_inner_row_wrapper'>
														<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1557493526313">
															<div id='rb_column_5de226d809886' class='rb_column_wrapper vc_col-sm-4 '>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_service_5de226d809a3b' class='rb_service_module style_icon_top style_tablet_inherit shape_hexagon '>
																				<div class='service_icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																						<defs>
																							<linearGradient id="gradient_5de226d809aaf" x1="0%" y1="0%" x2="0%" y2="100%">
																								<stop offset="0%" style="stop-color:#ff9917; stop-opacity:1" />
																								<stop offset="100%" style="stop-color:#ff9a17; stop-opacity:1" />
																							</linearGradient>
																						</defs>
																						<path class="st0" d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z" fill="url(#gradient_5de226d809aaf)" />
																					</svg><i class="flaticon-laptop"></i></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">Cross-functionaled</h5>
																					<div class='content_wrapper'>
																						<p>Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum fermentum.</p>
																					</div><a class='service-button rb_button simple' href='about-us.php'>READ MORE</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de226d809b2a' class='rb_column_wrapper vc_col-sm-4 '>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_service_5de226d809cad' class='rb_service_module style_icon_top style_tablet_inherit shape_hexagon '>
																				<div class='service_icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																						<defs>
																							<linearGradient id="gradient_5de226d809d21" x1="0%" y1="0%" x2="0%" y2="100%">
																								<stop offset="0%" style="stop-color:#ff9917; stop-opacity:1" />
																								<stop offset="100%" style="stop-color:#ff9a17; stop-opacity:1" />
																							</linearGradient>
																						</defs>
																						<path class="st0" d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z" fill="url(#gradient_5de226d809d21)" />
																					</svg><i class="flaticon-target"></i></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">Multidisciplinary Team</h5>
																					<div class='content_wrapper'>
																						<p>Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum fermentum.</p>
																					</div><a class='service-button rb_button simple' href='about-us.php'>READ MORE</a>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de226d809d99' class='rb_column_wrapper vc_col-sm-4 '>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_service_5de226d809f45' class='rb_service_module style_icon_top style_tablet_inherit shape_hexagon '>
																				<div class='service_icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																						<defs>
																							<linearGradient id="gradient_5de226d809fb7" x1="0%" y1="0%" x2="0%" y2="100%">
																								<stop offset="0%" style="stop-color:#ff9917; stop-opacity:1" />
																								<stop offset="100%" style="stop-color:#ff9a17; stop-opacity:1" />
																							</linearGradient>
																						</defs>
																						<path class="st0" d="M54.8,1.3l35.5,20.3c3,1.7,4.8,4.8,4.8,8.2v40.6c0,3.4-1.8,6.5-4.8,8.2L54.8,98.7c-3,1.7-6.6,1.7-9.5,0 L9.8,78.5c-3-1.7-4.8-4.8-4.8-8.2V29.7c0-3.4,1.8-6.5,4.8-8.2L45.2,1.3C48.2-0.4,51.8-0.4,54.8,1.3z" fill="url(#gradient_5de226d809fb7)" />
																					</svg><i class="flaticon-startup-a"></i></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">Recent Technology</h5>
																					<div class='content_wrapper'>
																						<p>Phasellus sit amet libero turpis. Nunc aliquet, sapien in fermentum fermentum.</p>
																					</div><a class='service-button rb_button simple' href='about-us.php'>READ MORE</a>
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
									</div>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
							</div> -->
							<!-- <div id="rb_content_5de226d80a08d" class="rb_content_5de226d80a08d rb-content background_no_hover">
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571314783423 vc_row-has-fill">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226d80a239' class='rb_column_wrapper vc_col-sm-2 '>
										<div class="wpb_column vc_column_container vc_col-sm-2">
											<div class="vc_column-inner">
												<div class="wpb_wrapper"></div>
											</div>
										</div>
									</div>
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226d80a34a' class='rb_column_wrapper vc_col-sm-8 '>
										<div class="wpb_column vc_column_container vc_col-sm-8">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class='rb_textmodule_5de226d80a4c9 rb_textmodule align_center'>
														<h3 class='rb_textmodule_title'>Get a <strong>Quote</strong>!<span class='rb_textmodule_divider'></span></h3>
														<div class='rb_textmodule_content_wrapper'>
															<div class="wpforms-container wpforms-container-full no_borders button_center" id="wpforms-3147">
																<form id="wpforms-form-3147" class="wpforms-validate wpforms-form" data-formid="3147" method="post" enctype="multipart/form-data" action="about-us.php">
																	<div class="wpforms-field-container">
																		<div id="wpforms-3147-field_1-container" class="wpforms-field wpforms-field-text width_50" data-field-id="1"><input type="text" id="wpforms-3147-field_1" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][1]" placeholder="Your Name" required></div>
																		<div id="wpforms-3147-field_4-container" class="wpforms-field wpforms-field-email width_50" data-field-id="4"><label class="wpforms-field-label wpforms-label-hide" for="wpforms-3147-field_4">Email <span class="wpforms-required-label">*</span></label><input type="email" id="wpforms-3147-field_4" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][4]" placeholder="Your email" required></div>
																		<div id="wpforms-3147-field_3-container" class="wpforms-field wpforms-field-text" data-field-id="3"><input type="text" id="wpforms-3147-field_3" class="wpforms-field-large" name="wpforms[fields][3]" placeholder="Send message"></div>
																	</div>
																	<div class="wpforms-field wpforms-field-hp"><label for="wpforms-3147-field-hp" class="wpforms-field-label">Message</label><input type="text" name="wpforms[hp]" id="wpforms-3147-field-hp" class="wpforms-field-medium"></div>
																	<div class="wpforms-submit-container">
																		<button type="submit" name="wpforms[submit]" class="wpforms-submit medium rb_button" id="wpforms-submit-3147" value="wpforms-submit" aria-live="assertive" data-alt-text="Sending..." data-submit-text="Send Request">Send Request</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226d80aa22' class='rb_column_wrapper vc_col-sm-2 '>
										<div class="wpb_column vc_column_container vc_col-sm-2">
											<div class="vc_column-inner">
												<div class="wpb_wrapper"></div>
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
				<div id="rb_content_5de226d80b90a" class="rb_content_5de226d80b90a rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571647263433 vc_row-has-fill">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de226d80bb79' class='rb_column_wrapper vc_col-sm-12 '>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_inner_row_5de226d80bdc1' class='rb_inner_row_wrapper'>
											<div class="vc_row wpb_row vc_inner vc_row-fluid">
												<div id='rb_column_5de226d80bf0f' class='rb_column_wrapper vc_col-sm-12 '>
													<div class="wpb_column vc_column_container vc_col-sm-12">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div id='rb_logo_5de226d80c178' class='site_logotype'><a href='index.php'><img src='wp-content/uploads/2019/06/logo_white.png' alt='some-alt' style='width:143px;'></a></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id='rb_inner_row_5de226d80c237' class='rb_inner_row_wrapper'>
											<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1570620243054">
												<div id='rb_column_5de226d80c38b' class='rb_column_wrapper vc_col-sm-4 '>
													<div class="wpb_column vc_column_container vc_col-sm-4">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div id='rb_icon_list_5de226d80c4de' class='rb_icon_list_module header_icons direction_column mobile_align_center'><a href='tel:3053335522' class='custom_url'><i class='flaticon-telephone-auricular-with-cable'></i><span class='title'>(305) 333-5522</span></a><a href='mailto:info@seotechstore.com' class='custom_url'><i class='flaticon-email'></i><span class='title'>info@seotechstore.com</span></a></div>
															</div>
														</div>
													</div>
												</div>
												<div id='rb_column_5de226d80c64b' class='rb_column_wrapper vc_col-sm-4 '>
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
																<div class='rb_textmodule_5de226d80c77a rb_textmodule align_center mobile_align_center'>
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
												<div id='rb_column_5de226d80ca2f' class='rb_column_wrapper vc_col-sm-4 '>
													<div class="wpb_column vc_column_container vc_col-sm-4">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div class='rb_textmodule_5de226d80cbc1 rb_textmodule align_right mobile_align_center'>
																	<p class='h5 rb_textmodule_subtitle'>Subscribe to our social</p>
																</div>
																<div id='rb_icon_list_5de226d80ccce' class='rb_icon_list_module header_icons direction_line icon_bg align_right mobile_align_center'><a href='https://facebook.com' class='custom_url'>
																		<div class='icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																				<defs>
																					<linearGradient id="gradient_5de226d80cd8d" x1="0%" y1="0%" x2="0%" y2="100%">
																						<stop offset="0%" style="stop-color:#5163dd; stop-opacity:1" />
																						<stop offset="100%" style="stop-color:#5163dd; stop-opacity:1" />
																					</linearGradient>
																				</defs>
																				<polygon class="st0" points="6,25 6,75 49.3,100 92.6,75 92.6,25 49.3,0" fill="url(#gradient_5de226d80cd8d)" />
																			</svg><i class='flaticon-facebook'></i></div><span class='title'></span>
																	</a><a href='https://www.linkedin.com/' class='custom_url'>
																		<div class='icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																				<defs>
																					<linearGradient id="gradient_5de226d80cddd" x1="0%" y1="0%" x2="0%" y2="100%">
																						<stop offset="0%" style="stop-color:#5163dd; stop-opacity:1" />
																						<stop offset="100%" style="stop-color:#5163dd; stop-opacity:1" />
																					</linearGradient>
																				</defs>
																				<polygon class="st0" points="6,25 6,75 49.3,100 92.6,75 92.6,25 49.3,0" fill="url(#gradient_5de226d80cddd)" />
																			</svg><i class='flaticon-linkedin'></i></div><span class='title'></span>
																	</a><a href='https://twitter.com' class='custom_url'>
																		<div class='icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																				<defs>
																					<linearGradient id="gradient_5de226d80ce26" x1="0%" y1="0%" x2="0%" y2="100%">
																						<stop offset="0%" style="stop-color:#5163dd; stop-opacity:1" />
																						<stop offset="100%" style="stop-color:#5163dd; stop-opacity:1" />
																					</linearGradient>
																				</defs>
																				<polygon class="st0" points="6,25 6,75 49.3,100 92.6,75 92.6,25 49.3,0" fill="url(#gradient_5de226d80ce26)" />
																			</svg><i class='flaticon-twitter'></i></div><span class='title'></span>
																	</a><a href='https://www.youtube.com/' class='custom_url'>
																		<div class='icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																				<defs>
																					<linearGradient id="gradient_5de226d80ce6f" x1="0%" y1="0%" x2="0%" y2="100%">
																						<stop offset="0%" style="stop-color:#5163dd; stop-opacity:1" />
																						<stop offset="100%" style="stop-color:#5163dd; stop-opacity:1" />
																					</linearGradient>
																				</defs>
																				<polygon class="st0" points="6,25 6,75 49.3,100 92.6,75 92.6,25 49.3,0" fill="url(#gradient_5de226d80ce6f)" />
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
				<div id="rb_content_5de226d80cf36" class="rb_content_5de226d80cf36 rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1570622568954 vc_row-has-fill">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de226d80d0d5' class='rb_column_wrapper vc_col-sm-12 '>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class='rb_textmodule_5de226d80d219 rb_textmodule mobile_align_center'>
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
						<div id='rb_column_5de226d80d35a' class='rb_column_wrapper vc_col-sm-7 '>
							<div class="wpb_column vc_column_container vc_col-sm-7">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class='rb_textmodule_5de226d80d48f rb_textmodule mobile_align_center'>
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

		.rb_content_5de226d7d542c>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226d7d542c>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226d7d542c>.vc_row {
			background-position: center !important;
		}

		.rb_content_5de226d7d542c>.vc_row {
			position: relative;
			overflow: visible;
			z-index: 2;
		}

		#rb_content_5de226d7d542c>.vc_row {
			-webkit-box-shadow: 0 0 15px 5px rgba(16, 1, 148, 0.05);
			-moz-box-shadow: 0 0 15px 5px rgba(16, 1, 148, 0.05);
			box-shadow: 0 0 15px 5px rgba(16, 1, 148, 0.05);
		}

		#rb_column_5de226d7d5c3a>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7d5c3a>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7d5c3a>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226d7d61e6>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7d61e6>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7d61e6>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_menu_5de226d7d64a6>ul {
			-webkit-justify-content: center;
			justify-content: center;
		}

		#rb_menu_5de226d7d64a6>.menu>.menu-item>a {
			color: #3e4a59;
		}

		#rb_menu_5de226d7d64a6>.menu>.menu-item>a:before,
		#rb_menu_5de226d7d64a6 .menu-item-object-rb-megamenu .sub-menu .rb_megamenu_item .widgettitle:before {
			background-color: #5163dd;
		}

		.rb_content_5de226d7d9943>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226d7d9943>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226d7d9943>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d7d9c00>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7d9c00>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7d9c00>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226d7db6c4>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7db6c4>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7db6c4>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226d7db6c4>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de226d7dcbad>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7dcbad>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7dcbad>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226d7dcbad>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de226d7ddc1a>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7ddc1a>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7ddc1a>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226d7ddc1a>.wpb_column>.vc_column-inner {
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

		.rb_content_5de226d7df09b>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226d7df09b>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226d7df09b>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d7df20c>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7df20c>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7df20c>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226d7dfd53>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7dfd53>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7dfd53>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226d7e085f>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7e085f>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7e085f>.wpb_column>.vc_column-inner {
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

		#rb_column_5de226d7e16ec>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7e16ec>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7e16ec>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_inner_row_5de226d7e19cb>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de226d7e19cb>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de226d7e19cb>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d7e1c17>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7e1c17>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7e1c17>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_search_5de226d7e1d9c {
			text-align: right;
		}

		#rb_search_5de226d7e1d9c .search-trigger {
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
			#rb_search_5de226d7e1d9c .search-trigger:hover {
				color: #5163DD;
			}
		}

		#rb_column_5de226d7e1e27>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7e1e27>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7e1e27>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_button_wrapper_5de226d7e1f80 {
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

		.rb_content_5de226d7e2739>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226d7e2739>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226d7e2739>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d7e28e1>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7e28e1>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7e28e1>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_icon_list_5de226d7e2a86 i:before {
			font-size: 16px;
		}

		#rb_icon_list_5de226d7e2a86 .icon_wrapper svg {
			transform: scale(0.46);
		}

		#rb_icon_list_5de226d7e2a86 .title {
			font-size: 14px;
		}

		#rb_icon_list_5de226d7e2a86.direction_line>* {
			margin-right: 45px;
		}

		#rb_icon_list_5de226d7e2a86.direction_column>*>* {
			margin-top: 45px;
		}

		#rb_icon_list_5de226d7e2a86>a,
		#rb_icon_list_5de226d7e2a86>.mini-cart>a,
		#rb_icon_list_5de226d7e2a86 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a {
			color: #3e4a59;
		}

		#rb_icon_list_5de226d7e2a86.header_icons>*~.mini-cart:not(:first-child) .woo_mini-count {
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

			#rb_icon_list_5de226d7e2a86>a:hover,
			#rb_icon_list_5de226d7e2a86>.mini-cart>a:hover,
			#rb_icon_list_5de226d7e2a86 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a:hover {
				color: #3e4a59;
			}
		}

		#rb_column_5de226d7e2c17>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7e2c17>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7e2c17>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_icon_list_5de226d7e2d56 {
			text-align: right;
		}

		#rb_icon_list_5de226d7e2d56 i:before {
			font-size: 18px;
		}

		#rb_icon_list_5de226d7e2d56 .icon_wrapper svg {
			transform: scale(0.48);
		}

		#rb_icon_list_5de226d7e2d56 .title {
			font-size: 16px;
		}

		#rb_icon_list_5de226d7e2d56.direction_line>* {
			margin-right: 15px;
		}

		#rb_icon_list_5de226d7e2d56.direction_column>*>* {
			margin-top: 15px;
		}

		#rb_icon_list_5de226d7e2d56>a,
		#rb_icon_list_5de226d7e2d56>.mini-cart>a,
		#rb_icon_list_5de226d7e2d56 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a {
			color: #3e4a59;
		}

		#rb_icon_list_5de226d7e2d56.header_icons>*~.mini-cart:not(:first-child) .woo_mini-count {
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

			#rb_icon_list_5de226d7e2d56>a:hover,
			#rb_icon_list_5de226d7e2d56>.mini-cart>a:hover,
			#rb_icon_list_5de226d7e2d56 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a:hover {
				color: #3e4a59;
			}
		}

		.rb_content_5de226d7e30b7>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226d7e30b7>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226d7e30b7>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d7e31fd>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7e31fd>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7e31fd>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226d7e3405>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7e3405>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7e3405>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_menu_5de226d7e3579>ul {
			-webkit-justify-content: center;
			justify-content: center;
		}

		#rb_menu_5de226d7e3579>.menu>.menu-item>a {
			color: #3e4a59;
		}

		#rb_menu_5de226d7e3579>.menu>.menu-item>a:before,
		#rb_menu_5de226d7e3579 .menu-item-object-rb-megamenu .sub-menu .rb_megamenu_item .widgettitle:before {
			background-color: #5163dd;
		}

		.rb_content_5de226d7e4e14>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226d7e4e14>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226d7e4e14>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d7e502f>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7e502f>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7e502f>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226d7e5d31>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7e5d31>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7e5d31>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226d7e5d31>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de226d7e6835>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7e6835>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7e6835>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226d7e6835>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de226d7e6fbe>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7e6fbe>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7e6fbe>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226d7e6fbe>.wpb_column>.vc_column-inner {
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

		.rb_content_5de226d7e7e89>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226d7e7e89>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226d7e7e89>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d7e80a5>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7e80a5>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7e80a5>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226d7e8ef9>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7e8ef9>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7e8ef9>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226d7e9b90>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7e9b90>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7e9b90>.wpb_column>.vc_column-inner {
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

		#rb_column_5de226d7eaeea>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7eaeea>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7eaeea>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_inner_row_5de226d7eb117>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de226d7eb117>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de226d7eb117>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d7eb2a1>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7eb2a1>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7eb2a1>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_search_5de226d7eb458 {
			text-align: right;
		}

		#rb_search_5de226d7eb458 .search-trigger {
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
			#rb_search_5de226d7eb458 .search-trigger:hover {
				color: #3e4a59;
			}
		}

		#rb_column_5de226d7eb500>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7eb500>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7eb500>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_button_wrapper_5de226d7eb6a7 {
			text-align: right;
		}

		#rb_button_5de226d7eb6e4 {
			color: #3e4a59;
		}

		#rb_button_5de226d7eb6e4 {
			background-color: rgba(255, 255, 255, 0.01);
		}

		#rb_button_5de226d7eb6e4 {
			border-color: #5163dd;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			#rb_button_5de226d7eb6e4:hover {
				color: #ffffff;
			}

			#rb_button_5de226d7eb6e4:hover {
				background-color: #5163dd;
			}

			#rb_button_5de226d7eb6e4:hover {
				border-color: #5163dd;
			}
		}

		.rb_content_5de226d7eb821>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226d7eb821>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226d7eb821>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d7ebabf>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7ebabf>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7ebabf>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_title_area_5de226d7ebd0e {
			-webkit-mask-image: url(wp-content/uploads/2019/07/title_mask.svg);
			-webkit-mask-size: cover;
			-webkit-mask-repeat: no-repeat;
			-webkit-mask-position: bottom center;
		}

		#rb_title_area_5de226d7ebd0e {
			background: -webkit-linear-gradient(-6deg, #e9eeff, #ffffff);
			background: linear-gradient(-6deg, #e9eeff, #ffffff);
		}

		#rb_title_area_5de226d7ebd0e .single_post_categories {
			background-color: #3e4a59;
		}

		#rb_title_area_5de226d7ebd0e .single_post_categories a {
			color: #ffffff;
		}

		#rb_title_area_5de226d7ebd0e .page_title {
			color: #3e4a59;
		}

		#rb_title_area_5de226d7ebd0e .single_post_meta a {
			color: #3e4a59;
		}

		#rb_title_area_5de226d7ebd0e .title_divider {
			background-color: #5163dd;
		}

		#rb_title_area_5de226d7ebd0e .woocommerce-breadcrumb *,
		#rb_title_area_5de226d7ebd0e .bread-crumbs * {
			color: #3e4a59;
		}

		.rb_content_5de226d7ef053>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226d7ef053>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226d7ef053>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d7ef29e>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7ef29e>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7ef29e>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226d7f07b7>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7f07b7>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7f07b7>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226d7f07b7>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de226d7f192b>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7f192b>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7f192b>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226d7f192b>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de226d7f25e0>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7f25e0>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7f25e0>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226d7f25e0>.wpb_column>.vc_column-inner {
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

		.rb_content_5de226d7f3916>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226d7f3916>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226d7f3916>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d7f3b56>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d7f3b56>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d7f3b56>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226d80087c>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d80087c>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d80087c>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226d8014f8>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d8014f8>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d8014f8>.wpb_column>.vc_column-inner {
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

		.rb_content_5de226d803789>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226d803789>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226d803789>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d803ae9>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d803ae9>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d803ae9>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226d803ae9 {
			transition-duration: 500ms;
		}

		#rb_column_5de226d803ae9 {
			transition-delay: 90ms;
		}

		#rb_column_5de226d803ae9 {
			transition-timing-function: ease;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226d803ae9>.wpb_column>.vc_column-inner {
				padding-bottom: 80px !important;
			}
		}

		#rb_service_5de226d804079 {
			padding-top: 40px !important;
			padding-right: 25px !important;
			padding-bottom: 40px !important;
			padding-left: 25px !important;
		}

		#rb_service_5de226d804079 .service_icon_wrapper i,
		#rb_service_5de226d804079 .service_icon_wrapper i:before {
			font-size: 80px;
		}

		#rb_service_5de226d804079 .service_icon_wrapper i.svg {
			width: 80px !important;
			height: 80px !important;
		}

		#rb_service_5de226d804079 .service_icon_wrapper>svg {
			width: 80px !important;
			height: 80px !important;
		}

		#rb_service_5de226d804079 .service_icon_wrapper>svg path,
		#rb_service_5de226d804079 .service_icon_wrapper>svg polygon,
		#rb_service_5de226d804079 .service_icon_wrapper>svg circle {
			-webkit-transform: scale(0.8);
			transform: scale(0.8);
		}

		#rb_service_5de226d804079 .service_icon_wrapper>svg rect {
			-webkit-transform: scale(0.8) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(0.8) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de226d804079.style_round .icon_outside {
			top: -32px;
		}

		#rb_service_5de226d804079.style_rhombus .icon_outside {
			top: -24.242424242424px;
		}

		#rb_service_5de226d804079.style_square .icon_outside {
			top: -40px;
		}

		#rb_service_5de226d804079.style_hexagon .icon_outside {
			top: -24.242424242424px;
		}

		#rb_service_5de226d804079 .service_title {
			font-size: 20px;
		}

		#rb_service_5de226d804079 .service_title {
			line-height: 25px;
		}

		#rb_service_5de226d804079 .service_title {
			margin-top: 20px;
		}

		#rb_service_5de226d804079 .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de226d804079 .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de226d804079 .service-button {
			font-size: 16px;
		}

		#rb_service_5de226d804079 .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de226d804079 .service-button {
			margin-top: 30px;
		}

		#rb_service_5de226d804079 .service_icon_wrapper i {
			background-image: -webkit-linear-gradient(-10deg, #3e4a59, #3e4a59, #3e4a59, #3e4a59);
			background-image: -moz-linear-gradient(-10deg, #3e4a59, #3e4a59, #3e4a59, #3e4a59);
			background-image: linear-gradient(-10deg, #3e4a59, #3e4a59, #3e4a59, #3e4a59);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_service_5de226d804079:hover .service_icon_wrapper i {
			background-position: 100% 100%;
		}

		#rb_service_5de226d804079 .service_title,
		#rb_service_5de226d804079 .content_wrapper,
		#rb_service_5de226d804079 .content_wrapper>a,
		#rb_service_5de226d804079 .service-button {
			color: #3e4a59;
		}

		#rb_service_5de226d804079:hover .service_title,
		#rb_service_5de226d804079:hover .content_wrapper,
		#rb_service_5de226d804079:hover .content_wrapper>a,
		#rb_service_5de226d804079:hover .service-button {
			color: #3e4a59;
		}

		#rb_service_5de226d804079 .service-button:after {
			color: #5163dd;
		}

		#rb_service_5de226d804079 .divider {
			background-color: #5163dd;
		}

		#rb_service_5de226d804079:hover .service-button:after {
			color: #5163dd;
		}

		#rb_service_5de226d804079:hover .divider {
			background-color: #5163dd;
		}

		#rb_column_5de226d8043ac>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d8043ac>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d8043ac>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226d8043ac {
			transition-duration: 500ms;
		}

		#rb_column_5de226d8043ac {
			transition-delay: 180ms;
		}

		#rb_column_5de226d8043ac {
			transition-timing-function: ease;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226d8043ac>.wpb_column>.vc_column-inner {
				padding-bottom: 80px !important;
			}
		}

		#rb_service_5de226d8046b2 {
			padding-top: 40px !important;
			padding-right: 25px !important;
			padding-bottom: 40px !important;
			padding-left: 25px !important;
		}

		#rb_service_5de226d8046b2 .service_icon_wrapper i,
		#rb_service_5de226d8046b2 .service_icon_wrapper i:before {
			font-size: 80px;
		}

		#rb_service_5de226d8046b2 .service_icon_wrapper i.svg {
			width: 80px !important;
			height: 80px !important;
		}

		#rb_service_5de226d8046b2 .service_icon_wrapper>svg {
			width: 80px !important;
			height: 80px !important;
		}

		#rb_service_5de226d8046b2 .service_icon_wrapper>svg path,
		#rb_service_5de226d8046b2 .service_icon_wrapper>svg polygon,
		#rb_service_5de226d8046b2 .service_icon_wrapper>svg circle {
			-webkit-transform: scale(0.8);
			transform: scale(0.8);
		}

		#rb_service_5de226d8046b2 .service_icon_wrapper>svg rect {
			-webkit-transform: scale(0.8) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(0.8) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de226d8046b2.style_round .icon_outside {
			top: -32px;
		}

		#rb_service_5de226d8046b2.style_rhombus .icon_outside {
			top: -24.242424242424px;
		}

		#rb_service_5de226d8046b2.style_square .icon_outside {
			top: -40px;
		}

		#rb_service_5de226d8046b2.style_hexagon .icon_outside {
			top: -24.242424242424px;
		}

		#rb_service_5de226d8046b2 .service_title {
			font-size: 20px;
		}

		#rb_service_5de226d8046b2 .service_title {
			line-height: 25px;
		}

		#rb_service_5de226d8046b2 .service_title {
			margin-top: 20px;
		}

		#rb_service_5de226d8046b2 .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de226d8046b2 .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de226d8046b2 .service-button {
			font-size: 16px;
		}

		#rb_service_5de226d8046b2 .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de226d8046b2 .service-button {
			margin-top: 30px;
		}

		#rb_service_5de226d8046b2 .service_icon_wrapper i {
			background-image: -webkit-linear-gradient(-10deg, #3e4a59, #3e4a59, #3e4a59, #3e4a59);
			background-image: -moz-linear-gradient(-10deg, #3e4a59, #3e4a59, #3e4a59, #3e4a59);
			background-image: linear-gradient(-10deg, #3e4a59, #3e4a59, #3e4a59, #3e4a59);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_service_5de226d8046b2:hover .service_icon_wrapper i {
			background-position: 100% 100%;
		}

		#rb_service_5de226d8046b2 .service_title,
		#rb_service_5de226d8046b2 .content_wrapper,
		#rb_service_5de226d8046b2 .content_wrapper>a,
		#rb_service_5de226d8046b2 .service-button {
			color: #3e4a59;
		}

		#rb_service_5de226d8046b2:hover .service_title,
		#rb_service_5de226d8046b2:hover .content_wrapper,
		#rb_service_5de226d8046b2:hover .content_wrapper>a,
		#rb_service_5de226d8046b2:hover .service-button {
			color: #3e4a59;
		}

		#rb_service_5de226d8046b2 .service-button:after {
			color: #5163dd;
		}

		#rb_service_5de226d8046b2 .divider {
			background-color: #5163dd;
		}

		#rb_service_5de226d8046b2:hover .service-button:after {
			color: #5163dd;
		}

		#rb_service_5de226d8046b2:hover .divider {
			background-color: #5163dd;
		}

		#rb_column_5de226d80493d>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d80493d>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d80493d>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226d80493d {
			transition-duration: 500ms;
		}

		#rb_column_5de226d80493d {
			transition-delay: 270ms;
		}

		#rb_column_5de226d80493d {
			transition-timing-function: ease;
		}

		#rb_service_5de226d804c24 {
			padding-top: 40px !important;
			padding-right: 25px !important;
			padding-bottom: 40px !important;
			padding-left: 25px !important;
		}

		#rb_service_5de226d804c24 .service_icon_wrapper i,
		#rb_service_5de226d804c24 .service_icon_wrapper i:before {
			font-size: 80px;
		}

		#rb_service_5de226d804c24 .service_icon_wrapper i.svg {
			width: 80px !important;
			height: 80px !important;
		}

		#rb_service_5de226d804c24 .service_icon_wrapper>svg {
			width: 80px !important;
			height: 80px !important;
		}

		#rb_service_5de226d804c24 .service_icon_wrapper>svg path,
		#rb_service_5de226d804c24 .service_icon_wrapper>svg polygon,
		#rb_service_5de226d804c24 .service_icon_wrapper>svg circle {
			-webkit-transform: scale(0.8);
			transform: scale(0.8);
		}

		#rb_service_5de226d804c24 .service_icon_wrapper>svg rect {
			-webkit-transform: scale(0.8) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(0.8) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de226d804c24.style_round .icon_outside {
			top: -32px;
		}

		#rb_service_5de226d804c24.style_rhombus .icon_outside {
			top: -24.242424242424px;
		}

		#rb_service_5de226d804c24.style_square .icon_outside {
			top: -40px;
		}

		#rb_service_5de226d804c24.style_hexagon .icon_outside {
			top: -24.242424242424px;
		}

		#rb_service_5de226d804c24 .service_title {
			font-size: 20px;
		}

		#rb_service_5de226d804c24 .service_title {
			line-height: 25px;
		}

		#rb_service_5de226d804c24 .service_title {
			margin-top: 20px;
		}

		#rb_service_5de226d804c24 .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de226d804c24 .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de226d804c24 .service-button {
			font-size: 16px;
		}

		#rb_service_5de226d804c24 .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de226d804c24 .service-button {
			margin-top: 30px;
		}

		#rb_service_5de226d804c24 .service_icon_wrapper i {
			background-image: -webkit-linear-gradient(-10deg, #3e4a59, #3e4a59, #3e4a59, #3e4a59);
			background-image: -moz-linear-gradient(-10deg, #3e4a59, #3e4a59, #3e4a59, #3e4a59);
			background-image: linear-gradient(-10deg, #3e4a59, #3e4a59, #3e4a59, #3e4a59);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_service_5de226d804c24:hover .service_icon_wrapper i {
			background-position: 100% 100%;
		}

		#rb_service_5de226d804c24 .service_title,
		#rb_service_5de226d804c24 .content_wrapper,
		#rb_service_5de226d804c24 .content_wrapper>a,
		#rb_service_5de226d804c24 .service-button {
			color: #3e4a59;
		}

		#rb_service_5de226d804c24:hover .service_title,
		#rb_service_5de226d804c24:hover .content_wrapper,
		#rb_service_5de226d804c24:hover .content_wrapper>a,
		#rb_service_5de226d804c24:hover .service-button {
			color: #3e4a59;
		}

		#rb_service_5de226d804c24 .service-button:after {
			color: #5163dd;
		}

		#rb_service_5de226d804c24 .divider {
			background-color: #5163dd;
		}

		#rb_service_5de226d804c24:hover .service-button:after {
			color: #5163dd;
		}

		#rb_service_5de226d804c24:hover .divider {
			background-color: #5163dd;
		}

		.rb_content_5de226d804ee3>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226d804ee3>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226d804ee3>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d805213>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d805213>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d805213>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de226d8054b7 .rb_textmodule_title,
		.rb_textmodule_5de226d8054b7 .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de226d8054b7 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de226d8054b7 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de226d8054b7 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de226d8054b7 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de226d8054b7 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de226d8054b7 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de226d8054b7 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de226d8054b7 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de226d8054b7 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de226d8054b7 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de226d8054b7 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de226d8054b7 .rb_textmodule_title {
			margin-bottom: 31px;
			padding-bottom: 31px;
		}

		.rb_textmodule_5de226d8054b7 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de226d8054b7 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de226d8054b7 .rb_textmodule_button {
			margin-top: 40px;
		}

		.rb_textmodule_5de226d8054b7 .rb_textmodule_button {
			color: #ffffff;
		}

		.rb_textmodule_5de226d8054b7 .rb_textmodule_button {
			background-color: #5163dd;
		}

		.rb_textmodule_5de226d8054b7 .rb_textmodule_button {
			border-color: #5163dd;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de226d8054b7 .rb_textmodule_button:hover {
				color: #3e4a59;
			}

			.rb_textmodule_5de226d8054b7 .rb_textmodule_button:hover {
				background-color: rgba(255, 255, 255, 0.01);
			}

			.rb_textmodule_5de226d8054b7 .rb_textmodule_button:hover {
				border-color: #5163dd;
			}
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de226d8054b7 {
				text-align: center;
			}

			.rb_textmodule_5de226d8054b7 .rb_textmodule_title {
				font-size: 30px;
			}

			.rb_textmodule_5de226d8054b7 .rb_textmodule_subtitle {
				font-size: 20px;
			}

			.rb_textmodule_5de226d8054b7 .rb_textmodule_title {
				margin-bottom: 20px;
				padding-bottom: 20px;
			}

			.rb_textmodule_5de226d8054b7 .rb_textmodule_button {
				margin-top: 35px;
			}
		}

		#rb_column_5de226d805790>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d805790>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d805790>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 991px) {
			#rb_column_5de226d805790>.wpb_column>.vc_column-inner {
				padding-top: 120px !important;
			}
		}

		@media screen and (max-width: 991px) {
			#rb_image_5de226d8059b8 {
				text-align: center;
			}
		}

		.rb_content_5de226d805d03>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226d805d03>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226d805d03>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d805f95>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d805f95>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d805f95>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de226d80620e {
			text-align: center;
		}

		.rb_textmodule_5de226d80620e .rb_textmodule_title,
		.rb_textmodule_5de226d80620e .rb_textmodule_button.simple {
			color: #ffffff;
		}

		.rb_textmodule_5de226d80620e .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de226d80620e {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de226d80620e a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de226d80620e .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de226d80620e .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de226d80620e .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de226d80620e .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de226d80620e .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de226d80620e .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de226d80620e .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de226d80620e .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de226d80620e .rb_textmodule_title {
			margin-bottom: 31px;
			padding-bottom: 31px;
		}

		.rb_textmodule_5de226d80620e .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de226d80620e .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de226d80620e .rb_textmodule_button {
			margin-top: 40px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de226d80620e .rb_textmodule_title {
				font-size: 30px;
			}

			.rb_textmodule_5de226d80620e .rb_textmodule_subtitle {
				font-size: 20px;
			}

			.rb_textmodule_5de226d80620e .rb_textmodule_title {
				margin-bottom: 20px;
				padding-bottom: 20px;
			}

			.rb_textmodule_5de226d80620e .rb_textmodule_button {
				margin-top: 35px;
			}
		}

		#rb_inner_row_5de226d8063bb>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de226d8063bb>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de226d8063bb>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d8065b9>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d8065b9>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d8065b9>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226d8065b9>.wpb_column>.vc_column-inner {
				padding-bottom: 20px !important;
			}
		}

		#rb_milestone_5de226d806c93 .milestone_icon>svg {
			-webkit-transform: translate(-50%, -50%) scale(1);
			-ms-transform: translate(-50%, -50%) scale(1);
			transform: translate(-50%, -50%) scale(1);
		}

		#rb_milestone_5de226d806c93 .milestone_icon:not(.shape_none) {
			width: 100px;
			height: 100px;
		}

		#rb_milestone_5de226d806c93 .milestone_icon i,
		#rb_milestone_5de226d806c93 .milestone_icon i:before {
			font-size: 50px;
			line-height: 50px;
		}

		#rb_milestone_5de226d806c93 .count_wrapper {
			font-size: 50px;
		}

		#rb_milestone_5de226d806c93 .count_wrapper {
			margin: 35px 0px 10px 0px;
		}

		#rb_milestone_5de226d806c93 .milestone_title {
			font-size: 20px;
		}

		#rb_milestone_5de226d806c93 .milestone_icon i {
			background-image: -webkit-linear-gradient(to bottom, #ffffff, #ffffff);
			background-image: -moz-linear-gradient(to bottom, #ffffff, #ffffff);
			background-image: linear-gradient(to bottom, #ffffff, #ffffff);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de226d806c93 .count_wrapper {
			background-image: -webkit-linear-gradient(to bottom, #ffffff, #ffffff);
			background-image: -moz-linear-gradient(to bottom, #ffffff, #ffffff);
			background-image: linear-gradient(to bottom, #ffffff, #ffffff);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de226d806c93 .milestone_title {
			color: #ffffff;
		}

		@media screen and (max-width: 991px) {
			#rb_milestone_5de226d806c93 .milestone_icon>svg {
				-webkit-transform: translate(-50%, -50%) scale(1);
				-ms-transform: translate(-50%, -50%) scale(1);
				transform: translate(-50%, -50%) scale(1);
			}

			#rb_milestone_5de226d806c93 .milestone_icon:not(.shape_none) {
				width: 100px;
				height: 100px;
			}

			#rb_milestone_5de226d806c93 .milestone_icon i,
			#rb_milestone_5de226d806c93 .milestone_icon i:before {
				font-size: 40px;
				line-height: 40px;
			}

			#rb_milestone_5de226d806c93 .count_wrapper {
				font-size: 40px;
			}

			#rb_milestone_5de226d806c93 .count_wrapper {
				margin: 0px 0px 0px 0px;
			}

			#rb_milestone_5de226d806c93 .milestone_title {
				font-size: 18px;
			}
		}

		@media screen and (max-width: 767px) {
			#rb_milestone_5de226d806c93 .milestone_icon>svg {
				-webkit-transform: translate(-50%, -50%) scale(1);
				-ms-transform: translate(-50%, -50%) scale(1);
				transform: translate(-50%, -50%) scale(1);
			}

			#rb_milestone_5de226d806c93 .milestone_icon:not(.shape_none) {
				width: 100px;
				height: 100px;
			}

			#rb_milestone_5de226d806c93 .milestone_icon i,
			#rb_milestone_5de226d806c93 .milestone_icon i:before {
				font-size: 75px;
				line-height: 75px;
			}

			#rb_milestone_5de226d806c93 .count_wrapper {
				font-size: 50px;
			}

			#rb_milestone_5de226d806c93 .count_wrapper {
				margin: 0px 0px 0px 0px;
			}

			#rb_milestone_5de226d806c93 .milestone_title {
				font-size: 20px;
			}
		}

		#rb_column_5de226d806e74>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d806e74>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d806e74>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226d806e74>.wpb_column>.vc_column-inner {
				padding-bottom: 20px !important;
			}
		}

		#rb_milestone_5de226d807053 .milestone_icon>svg {
			-webkit-transform: translate(-50%, -50%) scale(1);
			-ms-transform: translate(-50%, -50%) scale(1);
			transform: translate(-50%, -50%) scale(1);
		}

		#rb_milestone_5de226d807053 .milestone_icon:not(.shape_none) {
			width: 100px;
			height: 100px;
		}

		#rb_milestone_5de226d807053 .milestone_icon i,
		#rb_milestone_5de226d807053 .milestone_icon i:before {
			font-size: 50px;
			line-height: 50px;
		}

		#rb_milestone_5de226d807053 .count_wrapper {
			font-size: 50px;
		}

		#rb_milestone_5de226d807053 .count_wrapper {
			margin: 35px 0px 10px 0px;
		}

		#rb_milestone_5de226d807053 .milestone_title {
			font-size: 20px;
		}

		#rb_milestone_5de226d807053 .milestone_icon i {
			background-image: -webkit-linear-gradient(to bottom, #ffffff, #ffffff);
			background-image: -moz-linear-gradient(to bottom, #ffffff, #ffffff);
			background-image: linear-gradient(to bottom, #ffffff, #ffffff);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de226d807053 .count_wrapper {
			background-image: -webkit-linear-gradient(to bottom, #ffffff, #ffffff);
			background-image: -moz-linear-gradient(to bottom, #ffffff, #ffffff);
			background-image: linear-gradient(to bottom, #ffffff, #ffffff);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de226d807053 .milestone_title {
			color: #ffffff;
		}

		@media screen and (max-width: 991px) {
			#rb_milestone_5de226d807053 .milestone_icon>svg {
				-webkit-transform: translate(-50%, -50%) scale(1);
				-ms-transform: translate(-50%, -50%) scale(1);
				transform: translate(-50%, -50%) scale(1);
			}

			#rb_milestone_5de226d807053 .milestone_icon:not(.shape_none) {
				width: 100px;
				height: 100px;
			}

			#rb_milestone_5de226d807053 .milestone_icon i,
			#rb_milestone_5de226d807053 .milestone_icon i:before {
				font-size: 40px;
				line-height: 40px;
			}

			#rb_milestone_5de226d807053 .count_wrapper {
				font-size: 40px;
			}

			#rb_milestone_5de226d807053 .count_wrapper {
				margin: 0px 0px 0px 0px;
			}

			#rb_milestone_5de226d807053 .milestone_title {
				font-size: 18px;
			}
		}

		@media screen and (max-width: 767px) {
			#rb_milestone_5de226d807053 .milestone_icon>svg {
				-webkit-transform: translate(-50%, -50%) scale(1);
				-ms-transform: translate(-50%, -50%) scale(1);
				transform: translate(-50%, -50%) scale(1);
			}

			#rb_milestone_5de226d807053 .milestone_icon:not(.shape_none) {
				width: 100px;
				height: 100px;
			}

			#rb_milestone_5de226d807053 .milestone_icon i,
			#rb_milestone_5de226d807053 .milestone_icon i:before {
				font-size: 75px;
				line-height: 75px;
			}

			#rb_milestone_5de226d807053 .count_wrapper {
				font-size: 50px;
			}

			#rb_milestone_5de226d807053 .count_wrapper {
				margin: 0px 0px 0px 0px;
			}

			#rb_milestone_5de226d807053 .milestone_title {
				font-size: 20px;
			}
		}

		#rb_column_5de226d807203>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d807203>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d807203>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226d807203>.wpb_column>.vc_column-inner {
				padding-bottom: 20px !important;
			}
		}

		#rb_milestone_5de226d8073d5 .milestone_icon>svg {
			-webkit-transform: translate(-50%, -50%) scale(1);
			-ms-transform: translate(-50%, -50%) scale(1);
			transform: translate(-50%, -50%) scale(1);
		}

		#rb_milestone_5de226d8073d5 .milestone_icon:not(.shape_none) {
			width: 100px;
			height: 100px;
		}

		#rb_milestone_5de226d8073d5 .milestone_icon i,
		#rb_milestone_5de226d8073d5 .milestone_icon i:before {
			font-size: 50px;
			line-height: 50px;
		}

		#rb_milestone_5de226d8073d5 .count_wrapper {
			font-size: 50px;
		}

		#rb_milestone_5de226d8073d5 .count_wrapper {
			margin: 35px 0px 10px 0px;
		}

		#rb_milestone_5de226d8073d5 .milestone_title {
			font-size: 20px;
		}

		#rb_milestone_5de226d8073d5 .milestone_icon i {
			background-image: -webkit-linear-gradient(to bottom, #ffffff, #ffffff);
			background-image: -moz-linear-gradient(to bottom, #ffffff, #ffffff);
			background-image: linear-gradient(to bottom, #ffffff, #ffffff);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de226d8073d5 .count_wrapper {
			background-image: -webkit-linear-gradient(to bottom, #ffffff, #ffffff);
			background-image: -moz-linear-gradient(to bottom, #ffffff, #ffffff);
			background-image: linear-gradient(to bottom, #ffffff, #ffffff);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de226d8073d5 .milestone_title {
			color: #ffffff;
		}

		@media screen and (max-width: 991px) {
			#rb_milestone_5de226d8073d5 .milestone_icon>svg {
				-webkit-transform: translate(-50%, -50%) scale(1);
				-ms-transform: translate(-50%, -50%) scale(1);
				transform: translate(-50%, -50%) scale(1);
			}

			#rb_milestone_5de226d8073d5 .milestone_icon:not(.shape_none) {
				width: 100px;
				height: 100px;
			}

			#rb_milestone_5de226d8073d5 .milestone_icon i,
			#rb_milestone_5de226d8073d5 .milestone_icon i:before {
				font-size: 40px;
				line-height: 40px;
			}

			#rb_milestone_5de226d8073d5 .count_wrapper {
				font-size: 40px;
			}

			#rb_milestone_5de226d8073d5 .count_wrapper {
				margin: 0px 0px 0px 0px;
			}

			#rb_milestone_5de226d8073d5 .milestone_title {
				font-size: 18px;
			}
		}

		@media screen and (max-width: 767px) {
			#rb_milestone_5de226d8073d5 .milestone_icon>svg {
				-webkit-transform: translate(-50%, -50%) scale(1);
				-ms-transform: translate(-50%, -50%) scale(1);
				transform: translate(-50%, -50%) scale(1);
			}

			#rb_milestone_5de226d8073d5 .milestone_icon:not(.shape_none) {
				width: 100px;
				height: 100px;
			}

			#rb_milestone_5de226d8073d5 .milestone_icon i,
			#rb_milestone_5de226d8073d5 .milestone_icon i:before {
				font-size: 75px;
				line-height: 75px;
			}

			#rb_milestone_5de226d8073d5 .count_wrapper {
				font-size: 50px;
			}

			#rb_milestone_5de226d8073d5 .count_wrapper {
				margin: 0px 0px 0px 0px;
			}

			#rb_milestone_5de226d8073d5 .milestone_title {
				font-size: 20px;
			}
		}

		#rb_column_5de226d807575>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d807575>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d807575>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_milestone_5de226d80774e .milestone_icon>svg {
			-webkit-transform: translate(-50%, -50%) scale(1);
			-ms-transform: translate(-50%, -50%) scale(1);
			transform: translate(-50%, -50%) scale(1);
		}

		#rb_milestone_5de226d80774e .milestone_icon:not(.shape_none) {
			width: 100px;
			height: 100px;
		}

		#rb_milestone_5de226d80774e .milestone_icon i,
		#rb_milestone_5de226d80774e .milestone_icon i:before {
			font-size: 50px;
			line-height: 50px;
		}

		#rb_milestone_5de226d80774e .count_wrapper {
			font-size: 50px;
		}

		#rb_milestone_5de226d80774e .count_wrapper {
			margin: 35px 0px 10px 0px;
		}

		#rb_milestone_5de226d80774e .milestone_title {
			font-size: 20px;
		}

		#rb_milestone_5de226d80774e .milestone_icon i {
			background-image: -webkit-linear-gradient(to bottom, #ffffff, #ffffff);
			background-image: -moz-linear-gradient(to bottom, #ffffff, #ffffff);
			background-image: linear-gradient(to bottom, #ffffff, #ffffff);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de226d80774e .count_wrapper {
			background-image: -webkit-linear-gradient(to bottom, #ffffff, #ffffff);
			background-image: -moz-linear-gradient(to bottom, #ffffff, #ffffff);
			background-image: linear-gradient(to bottom, #ffffff, #ffffff);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de226d80774e .milestone_title {
			color: #ffffff;
		}

		@media screen and (max-width: 991px) {
			#rb_milestone_5de226d80774e .milestone_icon>svg {
				-webkit-transform: translate(-50%, -50%) scale(1);
				-ms-transform: translate(-50%, -50%) scale(1);
				transform: translate(-50%, -50%) scale(1);
			}

			#rb_milestone_5de226d80774e .milestone_icon:not(.shape_none) {
				width: 100px;
				height: 100px;
			}

			#rb_milestone_5de226d80774e .milestone_icon i,
			#rb_milestone_5de226d80774e .milestone_icon i:before {
				font-size: 40px;
				line-height: 40px;
			}

			#rb_milestone_5de226d80774e .count_wrapper {
				font-size: 40px;
			}

			#rb_milestone_5de226d80774e .count_wrapper {
				margin: 0px 0px 0px 0px;
			}

			#rb_milestone_5de226d80774e .milestone_title {
				font-size: 18px;
			}
		}

		@media screen and (max-width: 767px) {
			#rb_milestone_5de226d80774e .milestone_icon>svg {
				-webkit-transform: translate(-50%, -50%) scale(1);
				-ms-transform: translate(-50%, -50%) scale(1);
				transform: translate(-50%, -50%) scale(1);
			}

			#rb_milestone_5de226d80774e .milestone_icon:not(.shape_none) {
				width: 100px;
				height: 100px;
			}

			#rb_milestone_5de226d80774e .milestone_icon i,
			#rb_milestone_5de226d80774e .milestone_icon i:before {
				font-size: 75px;
				line-height: 75px;
			}

			#rb_milestone_5de226d80774e .count_wrapper {
				font-size: 50px;
			}

			#rb_milestone_5de226d80774e .count_wrapper {
				margin: 0px 0px 0px 0px;
			}

			#rb_milestone_5de226d80774e .milestone_title {
				font-size: 20px;
			}
		}

		.rb_content_5de226d80797c>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226d80797c>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226d80797c>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d808094>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d808094>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d808094>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 1199px) {
			#rb_column_5de226d808094>.wpb_column>.vc_column-inner {
				padding-top: 120px !important;
			}
		}

		@media screen and (max-width: 991px) {
			#rb_image_5de226d808290 {
				text-align: center;
			}
		}

		#rb_column_5de226d8085ac>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d8085ac>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d8085ac>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 991px) {
			#rb_column_5de226d8085ac>.wpb_column>.vc_column-inner {
				padding-left: 20px !important;
			}
		}

		.rb_textmodule_5de226d808752 .rb_textmodule_title,
		.rb_textmodule_5de226d808752 .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de226d808752 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de226d808752 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de226d808752 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de226d808752 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de226d808752 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de226d808752 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de226d808752 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de226d808752 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de226d808752 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de226d808752 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de226d808752 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de226d808752 .rb_textmodule_title {
			margin-bottom: 31px;
			padding-bottom: 31px;
		}

		.rb_textmodule_5de226d808752 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de226d808752 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de226d808752 .rb_textmodule_button {
			margin-top: 40px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de226d808752 {
				text-align: center;
			}

			.rb_textmodule_5de226d808752 .rb_textmodule_title {
				font-size: 30px;
			}

			.rb_textmodule_5de226d808752 .rb_textmodule_subtitle {
				font-size: 20px;
			}

			.rb_textmodule_5de226d808752 .rb_textmodule_title {
				margin-bottom: 20px;
				padding-bottom: 20px;
			}

			.rb_textmodule_5de226d808752 .rb_textmodule_button {
				margin-top: 35px;
			}
		}

		.rb_content_5de226d808952>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226d808952>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226d808952>.vc_row {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			.rb_content_5de226d808952>.vc_row {
				padding-top: 50px !important;
				padding-bottom: 50px !important;
			}
		}

		#rb_column_5de226d808b21>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d808b21>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d808b21>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de226d808cc8 {
			padding-bottom: 20px !important;
			;
		}

		.rb_textmodule_5de226d808cc8 {
			text-align: center;
		}

		.rb_textmodule_5de226d808cc8 .rb_textmodule_title,
		.rb_textmodule_5de226d808cc8 .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de226d808cc8 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de226d808cc8 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de226d808cc8 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de226d808cc8 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de226d808cc8 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de226d808cc8 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de226d808cc8 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de226d808cc8 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de226d808cc8 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de226d808cc8 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de226d808cc8 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de226d808cc8 .rb_textmodule_title {
			margin-bottom: 31px;
			padding-bottom: 31px;
		}

		.rb_textmodule_5de226d808cc8 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de226d808cc8 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de226d808cc8 .rb_textmodule_button {
			margin-top: 35px;
		}

		#rb_inner_row_5de226d808dd1>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de226d808dd1>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de226d808dd1>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d808f1a>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d808f1a>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d808f1a>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226d808f1a>.wpb_column>.vc_column-inner {
				padding-bottom: 20px !important;
			}
		}

		#rb_service_5de226d809156 {
			text-align: center;
		}

		#rb_service_5de226d809156 .service_icon_wrapper i,
		#rb_service_5de226d809156 .service_icon_wrapper i:before {
			font-size: 50px;
		}

		#rb_service_5de226d809156 .service_icon_wrapper i.svg {
			width: 50px !important;
			height: 50px !important;
		}

		#rb_service_5de226d809156 .service_icon_wrapper>svg {
			width: 100px !important;
			height: 100px !important;
		}

		#rb_service_5de226d809156 .service_icon_wrapper>svg path,
		#rb_service_5de226d809156 .service_icon_wrapper>svg polygon,
		#rb_service_5de226d809156 .service_icon_wrapper>svg circle {
			-webkit-transform: scale(1);
			transform: scale(1);
		}

		#rb_service_5de226d809156 .service_icon_wrapper>svg rect {
			-webkit-transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de226d809156 .service_title {
			font-size: 20px;
		}

		#rb_service_5de226d809156 .service_title {
			line-height: 25px;
		}

		#rb_service_5de226d809156 .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de226d809156 .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de226d809156 .service-button {
			font-size: 16px;
		}

		#rb_service_5de226d809156 .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de226d809156 .service-button {
			margin-top: 10px;
		}

		#rb_service_5de226d809156 .service_title {
			margin: 17px 0px 2px 0px;
		}

		#rb_service_5de226d809156 .service_icon_wrapper i,
		#rb_service_5de226d809156 .service_icon_wrapper i:before {
			color: #ffffff;
		}

		#rb_service_5de226d809156 .service_title {
			color: #3e4a59;
		}

		#rb_service_5de226d809156 .service_divider {
			background-color: #3e4a59;
		}

		#rb_service_5de226d809156 .content_wrapper,
		#rb_service_5de226d809156 .content_wrapper>a {
			color: #3e4a59;
		}

		#rb_service_5de226d809156 .content_wrapper>a:hover {
			color: rgba(62, 74, 89, 0.8);
		}

		#rb_service_5de226d809156 .service-button {
			color: #3e4a59;
		}

		#rb_service_5de226d809156 .service-button:after {
			color: #ff9a17;
		}

		#rb_column_5de226d809257>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d809257>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d809257>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226d809257>.wpb_column>.vc_column-inner {
				padding-bottom: 20px !important;
			}
		}

		#rb_service_5de226d809408 {
			text-align: center;
		}

		#rb_service_5de226d809408 .service_icon_wrapper i,
		#rb_service_5de226d809408 .service_icon_wrapper i:before {
			font-size: 50px;
		}

		#rb_service_5de226d809408 .service_icon_wrapper i.svg {
			width: 50px !important;
			height: 50px !important;
		}

		#rb_service_5de226d809408 .service_icon_wrapper>svg {
			width: 100px !important;
			height: 100px !important;
		}

		#rb_service_5de226d809408 .service_icon_wrapper>svg path,
		#rb_service_5de226d809408 .service_icon_wrapper>svg polygon,
		#rb_service_5de226d809408 .service_icon_wrapper>svg circle {
			-webkit-transform: scale(1);
			transform: scale(1);
		}

		#rb_service_5de226d809408 .service_icon_wrapper>svg rect {
			-webkit-transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de226d809408 .service_title {
			font-size: 20px;
		}

		#rb_service_5de226d809408 .service_title {
			line-height: 25px;
		}

		#rb_service_5de226d809408 .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de226d809408 .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de226d809408 .service-button {
			font-size: 16px;
		}

		#rb_service_5de226d809408 .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de226d809408 .service-button {
			margin-top: 10px;
		}

		#rb_service_5de226d809408 .service_title {
			margin: 17px 0px 2px 0px;
		}

		#rb_service_5de226d809408 .service_icon_wrapper i,
		#rb_service_5de226d809408 .service_icon_wrapper i:before {
			color: #ffffff;
		}

		#rb_service_5de226d809408 .service_title {
			color: #3e4a59;
		}

		#rb_service_5de226d809408 .service_divider {
			background-color: #3e4a59;
		}

		#rb_service_5de226d809408 .content_wrapper,
		#rb_service_5de226d809408 .content_wrapper>a {
			color: #3e4a59;
		}

		#rb_service_5de226d809408 .content_wrapper>a:hover {
			color: rgba(62, 74, 89, 0.8);
		}

		#rb_service_5de226d809408 .service-button {
			color: #3e4a59;
		}

		#rb_service_5de226d809408 .service-button:after {
			color: #ff9a17;
		}

		#rb_column_5de226d8094da>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d8094da>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d8094da>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_service_5de226d809686 {
			text-align: center;
		}

		#rb_service_5de226d809686 .service_icon_wrapper i,
		#rb_service_5de226d809686 .service_icon_wrapper i:before {
			font-size: 50px;
		}

		#rb_service_5de226d809686 .service_icon_wrapper i.svg {
			width: 50px !important;
			height: 50px !important;
		}

		#rb_service_5de226d809686 .service_icon_wrapper>svg {
			width: 100px !important;
			height: 100px !important;
		}

		#rb_service_5de226d809686 .service_icon_wrapper>svg path,
		#rb_service_5de226d809686 .service_icon_wrapper>svg polygon,
		#rb_service_5de226d809686 .service_icon_wrapper>svg circle {
			-webkit-transform: scale(1);
			transform: scale(1);
		}

		#rb_service_5de226d809686 .service_icon_wrapper>svg rect {
			-webkit-transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de226d809686 .service_title {
			font-size: 20px;
		}

		#rb_service_5de226d809686 .service_title {
			line-height: 25px;
		}

		#rb_service_5de226d809686 .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de226d809686 .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de226d809686 .service-button {
			font-size: 16px;
		}

		#rb_service_5de226d809686 .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de226d809686 .service-button {
			margin-top: 10px;
		}

		#rb_service_5de226d809686 .service_title {
			margin: 17px 0px 2px 0px;
		}

		#rb_service_5de226d809686 .service_icon_wrapper i,
		#rb_service_5de226d809686 .service_icon_wrapper i:before {
			color: #ffffff;
		}

		#rb_service_5de226d809686 .service_title {
			color: #3e4a59;
		}

		#rb_service_5de226d809686 .service_divider {
			background-color: #3e4a59;
		}

		#rb_service_5de226d809686 .content_wrapper,
		#rb_service_5de226d809686 .content_wrapper>a {
			color: #3e4a59;
		}

		#rb_service_5de226d809686 .content_wrapper>a:hover {
			color: rgba(62, 74, 89, 0.8);
		}

		#rb_service_5de226d809686 .service-button {
			color: #3e4a59;
		}

		#rb_service_5de226d809686 .service-button:after {
			color: #ff9a17;
		}

		#rb_inner_row_5de226d809789>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de226d809789>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de226d809789>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d809886>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d809886>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d809886>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226d809886>.wpb_column>.vc_column-inner {
				padding-bottom: 20px !important;
			}
		}

		#rb_service_5de226d809a3b {
			text-align: center;
		}

		#rb_service_5de226d809a3b .service_icon_wrapper i,
		#rb_service_5de226d809a3b .service_icon_wrapper i:before {
			font-size: 50px;
		}

		#rb_service_5de226d809a3b .service_icon_wrapper i.svg {
			width: 50px !important;
			height: 50px !important;
		}

		#rb_service_5de226d809a3b .service_icon_wrapper>svg {
			width: 100px !important;
			height: 100px !important;
		}

		#rb_service_5de226d809a3b .service_icon_wrapper>svg path,
		#rb_service_5de226d809a3b .service_icon_wrapper>svg polygon,
		#rb_service_5de226d809a3b .service_icon_wrapper>svg circle {
			-webkit-transform: scale(1);
			transform: scale(1);
		}

		#rb_service_5de226d809a3b .service_icon_wrapper>svg rect {
			-webkit-transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de226d809a3b .service_title {
			font-size: 20px;
		}

		#rb_service_5de226d809a3b .service_title {
			line-height: 25px;
		}

		#rb_service_5de226d809a3b .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de226d809a3b .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de226d809a3b .service-button {
			font-size: 16px;
		}

		#rb_service_5de226d809a3b .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de226d809a3b .service-button {
			margin-top: 10px;
		}

		#rb_service_5de226d809a3b .service_title {
			margin: 17px 0px 2px 0px;
		}

		#rb_service_5de226d809a3b .service_icon_wrapper i,
		#rb_service_5de226d809a3b .service_icon_wrapper i:before {
			color: #ffffff;
		}

		#rb_service_5de226d809a3b .service_title {
			color: #3e4a59;
		}

		#rb_service_5de226d809a3b .service_divider {
			background-color: #3e4a59;
		}

		#rb_service_5de226d809a3b .content_wrapper,
		#rb_service_5de226d809a3b .content_wrapper>a {
			color: #3e4a59;
		}

		#rb_service_5de226d809a3b .content_wrapper>a:hover {
			color: rgba(62, 74, 89, 0.8);
		}

		#rb_service_5de226d809a3b .service-button {
			color: #3e4a59;
		}

		#rb_service_5de226d809a3b .service-button:after {
			color: #ff9a17;
		}

		#rb_column_5de226d809b2a>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d809b2a>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d809b2a>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226d809b2a>.wpb_column>.vc_column-inner {
				padding-bottom: 20px !important;
			}
		}

		#rb_service_5de226d809cad {
			text-align: center;
		}

		#rb_service_5de226d809cad .service_icon_wrapper i,
		#rb_service_5de226d809cad .service_icon_wrapper i:before {
			font-size: 50px;
		}

		#rb_service_5de226d809cad .service_icon_wrapper i.svg {
			width: 50px !important;
			height: 50px !important;
		}

		#rb_service_5de226d809cad .service_icon_wrapper>svg {
			width: 100px !important;
			height: 100px !important;
		}

		#rb_service_5de226d809cad .service_icon_wrapper>svg path,
		#rb_service_5de226d809cad .service_icon_wrapper>svg polygon,
		#rb_service_5de226d809cad .service_icon_wrapper>svg circle {
			-webkit-transform: scale(1);
			transform: scale(1);
		}

		#rb_service_5de226d809cad .service_icon_wrapper>svg rect {
			-webkit-transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de226d809cad .service_title {
			font-size: 20px;
		}

		#rb_service_5de226d809cad .service_title {
			line-height: 25px;
		}

		#rb_service_5de226d809cad .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de226d809cad .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de226d809cad .service-button {
			font-size: 16px;
		}

		#rb_service_5de226d809cad .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de226d809cad .service-button {
			margin-top: 10px;
		}

		#rb_service_5de226d809cad .service_title {
			margin: 17px 0px 2px 0px;
		}

		#rb_service_5de226d809cad .service_icon_wrapper i,
		#rb_service_5de226d809cad .service_icon_wrapper i:before {
			color: #ffffff;
		}

		#rb_service_5de226d809cad .service_title {
			color: #3e4a59;
		}

		#rb_service_5de226d809cad .service_divider {
			background-color: #3e4a59;
		}

		#rb_service_5de226d809cad .content_wrapper,
		#rb_service_5de226d809cad .content_wrapper>a {
			color: #3e4a59;
		}

		#rb_service_5de226d809cad .content_wrapper>a:hover {
			color: rgba(62, 74, 89, 0.8);
		}

		#rb_service_5de226d809cad .service-button {
			color: #3e4a59;
		}

		#rb_service_5de226d809cad .service-button:after {
			color: #ff9a17;
		}

		#rb_column_5de226d809d99>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d809d99>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d809d99>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_service_5de226d809f45 {
			text-align: center;
		}

		#rb_service_5de226d809f45 .service_icon_wrapper i,
		#rb_service_5de226d809f45 .service_icon_wrapper i:before {
			font-size: 50px;
		}

		#rb_service_5de226d809f45 .service_icon_wrapper i.svg {
			width: 50px !important;
			height: 50px !important;
		}

		#rb_service_5de226d809f45 .service_icon_wrapper>svg {
			width: 100px !important;
			height: 100px !important;
		}

		#rb_service_5de226d809f45 .service_icon_wrapper>svg path,
		#rb_service_5de226d809f45 .service_icon_wrapper>svg polygon,
		#rb_service_5de226d809f45 .service_icon_wrapper>svg circle {
			-webkit-transform: scale(1);
			transform: scale(1);
		}

		#rb_service_5de226d809f45 .service_icon_wrapper>svg rect {
			-webkit-transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de226d809f45 .service_title {
			font-size: 20px;
		}

		#rb_service_5de226d809f45 .service_title {
			line-height: 25px;
		}

		#rb_service_5de226d809f45 .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de226d809f45 .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de226d809f45 .service-button {
			font-size: 16px;
		}

		#rb_service_5de226d809f45 .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de226d809f45 .service-button {
			margin-top: 10px;
		}

		#rb_service_5de226d809f45 .service_title {
			margin: 17px 0px 2px 0px;
		}

		#rb_service_5de226d809f45 .service_icon_wrapper i,
		#rb_service_5de226d809f45 .service_icon_wrapper i:before {
			color: #ffffff;
		}

		#rb_service_5de226d809f45 .service_title {
			color: #3e4a59;
		}

		#rb_service_5de226d809f45 .service_divider {
			background-color: #3e4a59;
		}

		#rb_service_5de226d809f45 .content_wrapper,
		#rb_service_5de226d809f45 .content_wrapper>a {
			color: #3e4a59;
		}

		#rb_service_5de226d809f45 .content_wrapper>a:hover {
			color: rgba(62, 74, 89, 0.8);
		}

		#rb_service_5de226d809f45 .service-button {
			color: #3e4a59;
		}

		#rb_service_5de226d809f45 .service-button:after {
			color: #ff9a17;
		}

		.rb_content_5de226d80a08d>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226d80a08d>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226d80a08d>.vc_row {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			.rb_content_5de226d80a08d>.vc_row {
				padding-top: 50px !important;
				padding-bottom: 50px !important;
			}
		}

		#rb_column_5de226d80a239>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d80a239>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d80a239>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226d80a34a>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d80a34a>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d80a34a>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de226d80a4c9 {
			text-align: center;
		}

		.rb_textmodule_5de226d80a4c9 .rb_textmodule_title,
		.rb_textmodule_5de226d80a4c9 .rb_textmodule_button.simple {
			color: #ffffff;
		}

		.rb_textmodule_5de226d80a4c9 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de226d80a4c9 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de226d80a4c9 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de226d80a4c9 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de226d80a4c9 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de226d80a4c9 .rb_textmodule_divider {
			background-color: #ff9a16;
		}

		.rb_textmodule_5de226d80a4c9 .rb_textmodule_button.simple:after {
			color: #ff9a16;
		}

		.rb_textmodule_5de226d80a4c9 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de226d80a4c9 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de226d80a4c9 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de226d80a4c9 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de226d80a4c9 .rb_textmodule_title {
			margin-bottom: 31px;
			padding-bottom: 31px;
		}

		.rb_textmodule_5de226d80a4c9 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de226d80a4c9 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de226d80a4c9 .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de226d80a4c9 .rb_textmodule_title {
				font-size: 30px;
			}

			.rb_textmodule_5de226d80a4c9 .rb_textmodule_subtitle {
				font-size: 20px;
			}

			.rb_textmodule_5de226d80a4c9 .rb_textmodule_title {
				margin-bottom: 20px;
				padding-bottom: 20px;
			}

			.rb_textmodule_5de226d80a4c9 .rb_textmodule_button {
				margin-top: 35px;
			}
		}

		#rb_column_5de226d80aa22>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d80aa22>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d80aa22>.wpb_column>.vc_column-inner {
			background-position: center !important;
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

		.rb_content_5de226d80b90a>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226d80b90a>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226d80b90a>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d80bb79>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d80bb79>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d80bb79>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_inner_row_5de226d80bdc1>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de226d80bdc1>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de226d80bdc1>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d80bf0f>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d80bf0f>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d80bf0f>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_logo_5de226d80c178 {
			border-bottom-width: 1px !important;
			padding-bottom: 35px !important;
			border-bottom-color: #cccccc !important;
			border-bottom-style: solid !important;
		}

		#rb_logo_5de226d80c178 {
			text-align: center;
		}

		#rb_inner_row_5de226d80c237>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de226d80c237>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de226d80c237>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d80c38b>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d80c38b>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d80c38b>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_icon_list_5de226d80c4de>a,
		#rb_icon_list_5de226d80c4de>.mini-cart>a,
		#rb_icon_list_5de226d80c4de .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a {
			color: #ffffff;
		}

		#rb_icon_list_5de226d80c4de.header_icons>*~.mini-cart:not(:first-child) .woo_mini-count {
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

			#rb_icon_list_5de226d80c4de>a:hover,
			#rb_icon_list_5de226d80c4de>.mini-cart>a:hover,
			#rb_icon_list_5de226d80c4de .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a:hover {
				color: #ffffff;
			}
		}

		@media screen and (max-width: 767px) {
			#rb_icon_list_5de226d80c4de {
				margin-bottom: 30px !important;
				;
			}

			#rb_icon_list_5de226d80c4de {
				text-align: center;
			}
		}

		#rb_column_5de226d80c64b>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d80c64b>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d80c64b>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de226d80c77a {
			margin-bottom: 15px !important;
			;
		}

		.rb_textmodule_5de226d80c77a {
			text-align: center;
		}

		.rb_textmodule_5de226d80c77a .rb_textmodule_title,
		.rb_textmodule_5de226d80c77a .rb_textmodule_button.simple {
			color: #ffffff;
		}

		.rb_textmodule_5de226d80c77a .rb_textmodule_subtitle {
			color: #ffffff;
		}

		.rb_textmodule_5de226d80c77a {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de226d80c77a a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de226d80c77a .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de226d80c77a .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de226d80c77a .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de226d80c77a .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de226d80c77a .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de226d80c77a .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de226d80c77a .rb_textmodule_title {
			font-size: 20px;
		}

		.rb_textmodule_5de226d80c77a .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de226d80c77a .rb_textmodule_title {
			margin-bottom: 20px;
			padding-bottom: 20px;
		}

		.rb_textmodule_5de226d80c77a .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de226d80c77a .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de226d80c77a .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de226d80c77a {
				text-align: center;
			}
		}

		#rb_column_5de226d80ca2f>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d80ca2f>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d80ca2f>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de226d80cbc1 {
			margin-bottom: 0px !important;
			padding-bottom: 0px !important;
			;
		}

		.rb_textmodule_5de226d80cbc1 {
			text-align: right;
		}

		.rb_textmodule_5de226d80cbc1 .rb_textmodule_title,
		.rb_textmodule_5de226d80cbc1 .rb_textmodule_button.simple {
			color: #ffffff;
		}

		.rb_textmodule_5de226d80cbc1 .rb_textmodule_subtitle {
			color: #ffffff;
		}

		.rb_textmodule_5de226d80cbc1 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de226d80cbc1 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de226d80cbc1 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de226d80cbc1 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de226d80cbc1 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de226d80cbc1 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de226d80cbc1 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de226d80cbc1 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de226d80cbc1 .rb_textmodule_title {
			font-size: 20px;
		}

		.rb_textmodule_5de226d80cbc1 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de226d80cbc1 .rb_textmodule_title {
			margin-bottom: 0px;
			padding-bottom: 0px;
		}

		.rb_textmodule_5de226d80cbc1 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de226d80cbc1 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de226d80cbc1 .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de226d80cbc1 {
				margin-top: 30px !important;
				;
			}

			.rb_textmodule_5de226d80cbc1 {
				text-align: center;
			}
		}

		#rb_icon_list_5de226d80ccce {
			margin-top: 25px !important;
			;
		}

		#rb_icon_list_5de226d80ccce {
			text-align: right;
		}

		#rb_icon_list_5de226d80ccce i:before {
			font-size: 17px;
		}

		#rb_icon_list_5de226d80ccce .icon_wrapper svg {
			transform: scale(0.47);
		}

		#rb_icon_list_5de226d80ccce .title {
			font-size: 16px;
		}

		#rb_icon_list_5de226d80ccce.direction_line>* {
			margin-right: 8px;
		}

		#rb_icon_list_5de226d80ccce.direction_column>*>* {
			margin-top: 8px;
		}

		#rb_icon_list_5de226d80ccce>a,
		#rb_icon_list_5de226d80ccce>.mini-cart>a,
		#rb_icon_list_5de226d80ccce .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a {
			color: #ffffff;
		}

		#rb_icon_list_5de226d80ccce.header_icons>*~.mini-cart:not(:first-child) .woo_mini-count {
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

			#rb_icon_list_5de226d80ccce>a:hover,
			#rb_icon_list_5de226d80ccce>.mini-cart>a:hover,
			#rb_icon_list_5de226d80ccce .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a:hover {
				color: #ffffff;
			}
		}

		@media screen and (max-width: 991px) {
			#rb_icon_list_5de226d80ccce *:before {
				font-size: 20px;
			}

			#rb_icon_list_5de226d80ccce .title {
				font-size: 16px;
			}

			#rb_icon_list_5de226d80ccce.direction_line>* {
				margin-right: 12px;
			}

			#rb_icon_list_5de226d80ccce.direction_column>*>* {
				margin-top: 12px;
			}
		}

		@media screen and (max-width: 767px) {
			#rb_icon_list_5de226d80ccce {
				text-align: center;
			}
		}

		.rb_content_5de226d80cf36>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226d80cf36>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226d80cf36>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226d80d0d5>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d80d0d5>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d80d0d5>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226d80d0d5>.wpb_column>.vc_column-inner {
				margin-bottom: 30px !important;
			}
		}

		.rb_textmodule_5de226d80d219 .rb_textmodule_title,
		.rb_textmodule_5de226d80d219 .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de226d80d219 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de226d80d219 {
			color: #ffffff;
		}

		.rb_footer_template .rb_textmodule_5de226d80d219 a {
			color: #ffffff;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de226d80d219 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de226d80d219 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de226d80d219 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de226d80d219 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de226d80d219 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de226d80d219 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de226d80d219 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de226d80d219 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de226d80d219 .rb_textmodule_title {
			margin-bottom: 20px;
			padding-bottom: 20px;
		}

		.rb_textmodule_5de226d80d219 .rb_textmodule_content_wrapper {
			font-size: 16px;
		}

		.rb_textmodule_5de226d80d219 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de226d80d219 .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de226d80d219 {
				text-align: center;
			}
		}

		#rb_column_5de226d80d35a>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226d80d35a>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226d80d35a>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de226d80d48f .rb_textmodule_title,
		.rb_textmodule_5de226d80d48f .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de226d80d48f .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de226d80d48f {
			color: #ffffff;
		}

		.rb_footer_template .rb_textmodule_5de226d80d48f a {
			color: #ffffff;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de226d80d48f .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de226d80d48f .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de226d80d48f .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de226d80d48f .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de226d80d48f .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de226d80d48f .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de226d80d48f .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de226d80d48f .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de226d80d48f .rb_textmodule_title {
			margin-bottom: 20px;
			padding-bottom: 20px;
		}

		.rb_textmodule_5de226d80d48f .rb_textmodule_content_wrapper {
			font-size: 16px;
		}

		.rb_textmodule_5de226d80d48f .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de226d80d48f .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de226d80d48f {
				text-align: center;
			}
		}
	</style>
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
	<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js'></script>
	<script type='text/javascript' src='wp-content/plugins/rb-essentials/assets/js/rb-portfolio.js'></script>
	<script type='text/javascript' src='wp-includes/js/wp-embed.min.js'></script>
	<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js'></script>
	<script type='text/javascript' src='wp-content/plugins/wpforms-lite/assets/js/jquery.validate.min.js'></script>
	<script type='text/javascript' src='wp-content/plugins/wpforms-lite/assets/js/mailcheck.min.js'></script>
</body>

</html>