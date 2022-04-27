<?php
session_start();
if (!isset($_GET["sub-category"])) {
	header("location: index.php");
}

$message = '';
//<div class="vc_column-inner"><div class="wpb_wrapper"><div class="rb_info_box info"><div class="icon_wrapper"><i></i></div><div class="content_wrapper"><p class="h5 info_box_title">Information Box</p></div></div></div></div>
//<div class="vc_column-inner"><div class="wpb_wrapper"><div class="rb_info_box success"><div class="icon_wrapper"><i></i></div><div class="content_wrapper"><p class="h5 info_box_title">Login Successfully</p></div></div></div></div>
//<div class="vc_column-inner"><div class="wpb_wrapper"><div class="rb_info_box error"><div class="icon_wrapper"><i></i></div><div class="content_wrapper"><p class="h5 info_box_title">Error Message</p></div></div></div></div>
//<div class="vc_column-inner"><div class="wpb_wrapper"><div class="rb_info_box warning"><div class="icon_wrapper"><i></i></div><div class="content_wrapper"><p class="h5 info_box_title">Warning Message</p></div></div></div></div>
if (isset($_SESSION["Item_Exists"])) {
	if ($_SESSION["Item_Exists"] === true) {
		$message = '<div class="vc_column-inner mymessage"><div class="wpb_wrapper"><div class="rb_info_box error"><div class="icon_wrapper"><i></i></div><div class="content_wrapper"><p class="h5 info_box_title">Item Already Exists In Your Cart</p></div></div></div></div><script> setTimeout(function(){ jQuery(".mymessage").remove(); }, 5000); </script>';
		unset($_SESSION["Item_Exists"]);
	} else if ($_SESSION["Item_Exists"] === false) {
		$message = '<div class="vc_column-inner mymessage"><div class="wpb_wrapper"><div class="rb_info_box success"><div class="icon_wrapper"><i></i></div><div class="content_wrapper"><p class="h5 info_box_title">Item Added In Cart Successfully</p></div></div></div></div><script> setTimeout(function(){ jQuery(".mymessage").remove(); }, 5000); </script>';
		unset($_SESSION["Item_Exists"]);
	}
}
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>SEO-Tech-Store SEO</title>
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

		.vc_custom_1565595645374 {
			padding-top: 90px !important;
			padding-bottom: 100px !important;
			background-image: url(wp-content/uploads/2019/08/seo_bg_1920x600.png?id=3490) !important;
		}

		.vc_custom_1565595645378 {
			padding-top: 50px !important;
			padding-bottom: 50px !important;
		}

		.vc_custom_1571303858992 {
			padding-top: 100px !important;
			padding-bottom: 90px !important;
			background-image: url(wp-content/uploads/2019/10/3-1.png?id=4141) !important;
		}

		.vc_custom_1571303858997 {
			padding-top: 50px !important;
			padding-bottom: 50px !important;
		}

		.vc_custom_1565599414002 {
			background-color: #f2f7fc !important;
		}

		.vc_custom_1565597273030 {
			border-bottom-width: 1px !important;
			padding-top: 45px !important;
			padding-bottom: 35px !important;
			border-bottom-color: #d8dbde !important;
			border-bottom-style: solid !important;
		}

		.vc_custom_1562592575017 {
			padding-top: 90px !important;
		}

		.vc_custom_1562592575022 {
			padding-bottom: 50px !important;
		}

		.vc_custom_1562325548819 {
			padding-top: 50px !important;
		}

		.vc_custom_1562325548823 {
			padding-top: 70px !important;
		}

		.vc_custom_1562325548825 {
			margin-top: 90px !important;
		}

		.vc_custom_1562325548830 {
			padding-top: 0px !important;
		}

		.vc_custom_1565592487743 {
			padding-left: 30px !important;
		}

		.vc_custom_1565592530244 {
			border-radius: 25px !important;
		}

		.vc_custom_1571303570399 {
			padding-top: 70px !important;
		}

		.vc_custom_1571303570410 {
			padding-top: 50px !important;
		}

		.vc_custom_1571303645647 {
			padding-top: 90px !important;
		}

		.vc_custom_1565599362510 {
			padding-bottom: 20px !important;
		}

		.vc_custom_1565599373696 {
			padding-bottom: 20px !important;
		}

		.vc_custom_1565595572947 {
			padding-top: 60px !important;
			padding-right: 60px !important;
			padding-bottom: 50px !important;
			padding-left: 60px !important;
			background-color: #ffffff !important;
			border-radius: 15px !important;
		}

		.vc_custom_1565595758375 {
			padding-top: 60px !important;
			padding-right: 60px !important;
			padding-bottom: 50px !important;
			padding-left: 60px !important;
			background-color: #ffffff !important;
			border-radius: 15px !important;
		}

		.vc_custom_1565595807994 {
			padding-top: 60px !important;
			padding-right: 60px !important;
			padding-bottom: 50px !important;
			padding-left: 60px !important;
			background-color: #ffffff !important;
			border-radius: 15px !important;
		}

		.vc_custom_1565599457164 {
			padding-top: 115px !important;
			padding-bottom: 125px !important;
		}

		.vc_custom_1565599457170 {
			padding-bottom: 0px !important;
		}

		.vc_custom_1562323648638 {
			margin-top: 150px !important;
		}

		.vc_custom_1562247544794 {
			padding-top: 20px !important;
		}

		.vc_custom_1562247590467 {
			padding-top: 20px !important;
		}

		.vc_custom_1571303983527 {
			border-right-width: 1px !important;
			border-right-color: #d8dbde !important;
			border-right-style: solid !important;
		}

		.vc_custom_1557736548729 {
			padding-top: 50px !important;
		}

		.vc_custom_1561625156405 {
			padding-bottom: 40px !important;
		}

		.vc_custom_1561625166093 {
			padding-bottom: 20px !important;
		}

		.vc_custom_1561625175165 {
			padding-bottom: 40px !important;
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

<body class="page-template-default page page-id-2541 theme-seoes woocommerce-no-js wpb-js-composer js-comp-ver-6.0.5 vc_responsive" data-boxed="false" data-default="false" itemscope="itemscope" itemtype="http://schema.org/WebPage">


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
				<div id="rb_content_5de226dca7707" class="rb_content_5de226dca7707 rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1562326619547 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de226dca7c38' class='rb_column_wrapper vc_col-sm-3 '>
							<div class="wpb_column vc_column_container vc_col-sm-2">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_logo_5de226dca890e' class='site_logotype'><a href='index.php'><img src='wp-content/uploads/2019/06/logo@2x.png' alt='some-alt' style='width:125px;'></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de226dca89db' class='rb_column_wrapper vc_col-sm-8 '>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_menu_5de226dca8c11' class='menu-main-container header_menu rb_menu_module'>
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
												<li id="menu-item-3106" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-3106"><a href="about-us.php">Pages</a>
													<ul class="sub-menu">
														<li id="menu-item-3135" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2541 current_page_item menu-item-3135"><a href="seo-services.php" aria-current="page">SEO Services</a></li>
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
															<div id="rb_content_5de226dcac3d6" class="rb_content_5de226dcac3d6 rb-content background_no_hover">
																<div class="vc_row wpb_row vc_row-fluid vc_custom_1561704612827 vc_row-o-equal-height vc_row-o-content-top vc_row-flex">
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de226dcac673' class='rb_column_wrapper vc_col-sm-3 '>
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
																	<div id='rb_column_5de226dcae6a0' class='rb_column_wrapper vc_col-sm-3 '>
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
																	<div id='rb_column_5de226dcb1efd' class='rb_column_wrapper vc_col-sm-3 '>
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
																	<div id='rb_column_5de226dcb2c49' class='rb_column_wrapper vc_col-sm-3 '>
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
															<div id="rb_content_5de226dcb55a6" class="rb_content_5de226dcb55a6 rb-content background_no_hover">
																<div class="vc_row wpb_row vc_row-fluid vc_custom_1561712578812 vc_row-o-equal-height vc_row-flex">
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de226dcb56ba' class='rb_column_wrapper vc_col-sm-4 '>
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
																	<div id='rb_column_5de226dcb665a' class='rb_column_wrapper vc_col-sm-4 '>
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
																	<div id='rb_column_5de226dcb7216' class='rb_column_wrapper vc_col-sm-4 '>
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
													<!-- <div id="rb_column_5de2257c9f569" class="rb_column_wrapper vc_col-sm- ">
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
				<!-- <div id="rb_content_5de226dcb9f5a" class="rb_content_5de226dcb9f5a rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571319827010 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de226dcba0f4' class='rb_column_wrapper vc_col-sm-6 '>
							<div class="wpb_column vc_column_container vc_col-sm-6">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_icon_list_5de226dcba281' class='rb_icon_list_module header_icons direction_line'><a href='tel:+305111222333%20' class='custom_url'><i class='flaticon-telephone-auricular-with-cable'></i><span class='title'>+(305) 111-222-333 </span></a><a href='mailto:info@seotechstore.com' class='custom_url'><i class='flaticon-email'></i><span class='title'>info@seotechstore.com</span></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de226dcba40c' class='rb_column_wrapper vc_col-sm-6 '>
							<div class="wpb_column vc_column_container vc_col-sm-6">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_icon_list_5de226dcba56b' class='rb_icon_list_module header_icons direction_line align_right'><a href='https://facebook.com' class='custom_url'><i class='flaticon-facebook'></i><span class='title'></span></a><a href='https://twitter.com' class='custom_url'><i class='flaticon-twitter-letter-logo'></i><span class='title'></span></a><a href='https://youtube.com' class='custom_url'><i class='flaticon-youtube'></i><span class='title'></span></a><a href='https://linkedin.com' class='custom_url'><i class='flaticon-linkedin'></i><span class='title'></span></a>
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
				<div id="rb_content_5de226dcba891" class="rb_content_5de226dcba891 rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571720915789 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de226dcba9c9' class='rb_column_wrapper vc_col-sm-3 '>
							<div class="wpb_column vc_column_container vc_col-sm-2">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_logo_5de226dcbab7e' class='site_logotype'><a href='index.php'><img src='wp-content/uploads/2019/06/logo@2x.png' alt='some-alt' style='width:187px;'></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de226dcbafdd' class='rb_column_wrapper vc_col-sm-8 '>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_menu_5de226dcbb1bb' class='menu-main-container header_menu rb_menu_module'>
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
												<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-ancestor current-menu-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-3106"><a href="about-us.php">Pages</a>
													<ul class="sub-menu">
														<li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2541 current_page_item menu-item-3135"><a href="seo-services.php" aria-current="page">SEO Services</a></li>
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
															<div id="rb_content_5de226dcbc9b6" class="rb_content_5de226dcbc9b6 rb-content background_no_hover">
																<div class="vc_row wpb_row vc_row-fluid vc_custom_1561704612827 vc_row-o-equal-height vc_row-o-content-top vc_row-flex">
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de226dcbcb00' class='rb_column_wrapper vc_col-sm-3 '>
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
																	<div id='rb_column_5de226dcbd6c0' class='rb_column_wrapper vc_col-sm-3 '>
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
																	<div id='rb_column_5de226dcbe267' class='rb_column_wrapper vc_col-sm-3 '>
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
																	<div id='rb_column_5de226dcbf8f4' class='rb_column_wrapper vc_col-sm-3 '>
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
															<div id="rb_content_5de226dcc0ed5" class="rb_content_5de226dcc0ed5 rb-content background_no_hover">
																<div class="vc_row wpb_row vc_row-fluid vc_custom_1561712578812 vc_row-o-equal-height vc_row-flex">
																	<div class="row_hover_effect"></div>
																	<div id='rb_column_5de226dcc1018' class='rb_column_wrapper vc_col-sm-4 '>
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
																	<div id='rb_column_5de226dcc1a0c' class='rb_column_wrapper vc_col-sm-4 '>
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
																	<div id='rb_column_5de226dcc289e' class='rb_column_wrapper vc_col-sm-4 '>
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
						<!-- <div id='rb_column_5de226dcc3ad4' class='rb_column_wrapper vc_col-sm-3 '>
							<div class="wpb_column vc_column_container vc_col-sm-3">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_inner_row_5de226dcc3c17' class='rb_inner_row_wrapper'>
											<div class="vc_row wpb_row vc_inner vc_row-fluid vc_row-o-content-middle vc_row-flex">
												<div id='rb_column_5de226dcc3d15' class='rb_column_wrapper vc_col-sm-4 '>
													<div class="wpb_column vc_column_container vc_col-sm-4">
														<div class="vc_column-inner vc_custom_1561722795510">
															<div class="wpb_wrapper">
																<div id='rb_search_5de226dcc3e37' class='rb_search_module'>
																	<div class='search-trigger'></div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div id='rb_column_5de226dcc3eb2' class='rb_column_wrapper vc_col-sm-8 '>
													<div class="wpb_column vc_column_container vc_col-sm-8">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div id='rb_button_wrapper_5de226dcc3fbf' class='rb_button_wrapper '><a id='rb_button_5de226dcc3ff7' class='rb_button advanced  medium no_shadow' href='seo-services.php' target="_blank">Get a Quote</a></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
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
				<div id="rb_content_5de226dcc40c8" class="rb_content_5de226dcc40c8 rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de226dcc4272' class='rb_column_wrapper vc_col-sm-12 '>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_title_area_5de226dcc43e9' class='custom page_title_container  mouse_anim scroll_anim shared_bg' style=""><img data-depth='0.80' src='wp-content/uploads/2013/06/title_hexagons.png' class='page_title_dynamic_image' alt='SEO Services' />
											<div class='page_title_wrapper'>
												<div class="page_title_customizer_size">
													<h1 class='page_title'>SEO Services</h1>
												</div><span class='title_divider'></span>
												<div class="breadcrumbs">
													<div class="container">
														<nav class="bread-crumbs"><a href="index.php" property="v:title">Home</a><span class='delimiter'></span><span class="current">SEO Services</span></nav><!-- .breadcrumbs -->
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

					<img data-depth="0.80" src="wp-content/uploads/2013/06/title_hexagons.png" class="page_title_dynamic_image" alt="SEO Services" />

					<div class="page_title_wrapper container">
						<div class="page_title_customizer_size">
							<h1 class="page_title">
								SEO Services </h1>
						</div>
						<span class="title_divider"></span>
						<div class="breadcrumbs">
							<div class="container">
								<nav class="bread-crumbs"><a href="index.php" property="v:title">Home</a><span class='delimiter'></span><span class="current">SEO Services</span></nav><!-- .breadcrumbs -->
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
							<div id="rb_content_5de226dcd87cf" class="rb_content_5de226dcd87cf rb-content background_no_hover">
								<div class='particles-wrapper'>
									<div id='particles-5de226dcd8869' class='particles-js top_left' data-color='#3E4A59' data-size='50' data-count='1' data-speed='2' data-hide='767' data-shape='image' data-mode='bounce' data-image-url='wp-content/uploads/2019/05/particle_240-1-150x150.png' data-image-width='150' data-image-height='150' style='width:20%;height:100%;'></div>
								</div>
								<?php echo $message; ?>
								<div class="vc_row wpb_row vc_row-fluid vc_row-o-equal-height vc_row-flex">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226dcd9043' class='rb_column_wrapper vc_col-sm-5 vc_col-lg-7 vc_col-md-5 '>
										<div class="wpb_column vc_column_container vc_col-sm-5 vc_col-lg-7 vc_col-md-5">
											<div class="vc_column-inner vc_custom_1562325548819">
												<div class="wpb_wrapper">
													<div id='rb_image_5de226dcd91ea' class='rb_image_module background_3d' data-max_tilt=10 data-perspective=1000 data-scale=1 data-speed=300>
														<div class="main_image">
															<img src="wp-content/uploads/2019/08/seo_600x400.jpg" alt="some-alt" />
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226dcd93dc' class='rb_column_wrapper vc_col-sm-7 vc_col-lg-5 vc_col-md-7 '>
										<div class="wpb_column vc_column_container vc_col-sm-7 vc_col-lg-5 vc_col-md-7">
											<div class="vc_column-inner vc_custom_1565592487743">
												<div class="wpb_wrapper">
													<div class='rb_textmodule_5de226dcd958e rb_textmodule align_left mobile_align_center'>
														<!-- <p class='h5 rb_textmodule_subtitle'>ABOUT US</p> -->
														<h3 class='rb_textmodule_title'><strong>Awesome Things</strong> About <?php echo htmlspecialchars(urldecode($_GET["sub-category"])); ?><span class='rb_textmodule_divider'></span></h3>
														<div class='rb_textmodule_content_wrapper'>
															<?php if(htmlspecialchars(urldecode($_GET["sub-category"])) == 'Link Building'){ ?>
															<p>Link building is the practice of building one-way hyperlinks (also known as “backlinks”) to a website with the goal of improving search engine visibility. Common link building strategies include content marketing, building useful tools, email outreach, broken link building and public relations.</p>
															<?php } elseif(htmlspecialchars(urldecode($_GET["sub-category"])) == 'High DR Blog Comments'){ ?>
															<p>Blog commenting is one of the very effective ways to keep your website running with a constant or continuously growing up backlink graph. Even in the case that you want to work with a new or old website, the easiest way to obtain backlinks to your site is Blog Commenting.</p>
															<?php } elseif(htmlspecialchars(urldecode($_GET["sub-category"])) == 'High DA Blog Comments'){ ?>
															<p>Blog commenting is one of the very effective ways to keep your website running with a constant or continuously growing up backlink graph. Even in the case that you want to work with a new or old website, the easiest way to obtain backlinks to your site is Blog Commenting.</p>
															<?php } elseif(htmlspecialchars(urldecode($_GET["sub-category"])) == 'High TF Blog Comments'){ ?>
															<p>If you want to rank high on search engines then you come to the right place. High Metrics Blog Comments lets you generate more traffic to your website by getting rank higher on search engines</p>
															<?php } elseif(htmlspecialchars(urldecode($_GET["sub-category"])) == 'DoFollow Blog Comments'){ ?>
															<p>Do follow Blogs” are those that remove the common rel=”nofollow” tag from the website URL of those commenting on the site. This means that if you leave a comment on the blog along with a link to your site, you may receive more “link juice” from it to help your Page rank.</p>
															<?php } elseif(htmlspecialchars(urldecode($_GET["sub-category"])) == 'Niche Blog Comments'){ ?>
															<p>Our strategy, we are providing Niche Related Blog Comments service 100% manually so your site is safe, you can get all good quality links and the ranking of your site increases. Niche Related Blog Comments is secure and best link building strategy.</p>
															<?php } elseif(htmlspecialchars(urldecode($_GET["sub-category"])) == 'Local Citation'){ ?>
															<p>A local citation is any online mention of the name, address, and phone number for a local business. Citations can occur on local business directories, on websites and apps, and on social platforms. Citations help Internet users to discover local businesses and can also impact local search engine rankings.</p>
															<?php } elseif(htmlspecialchars(urldecode($_GET["sub-category"])) == 'Web 2.0 Creation'){ ?>
															<p>Web 2.0 is the term given to describe a second generation of the World Wide Web that is focused on the ability for people to collaborate and share information online. Web 2.0 basically refers to the transition from static HTML Web pages to a more dynamic Web that is more organized and is based on serving Web applications to users.</p>
															<?php } ?>
														</div>
														<!-- <a href='seo-services.php' class='rb_textmodule_button rb_button advanced medium'>Contact Us</a> -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="rb_content_5de226dcd9861" class="rb_content_5de226dcd9861 rb-content background_no_hover">
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1565595645374 vc_row-has-fill">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226dcd99f8' class='rb_column_wrapper vc_col-sm-12 '>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class='rb_textmodule_5de226dcd9b93 rb_textmodule align_center'>
														<h3 class='rb_textmodule_title'><strong><?php echo htmlspecialchars(urldecode($_GET["sub-category"])); ?></strong> Packages<span class='rb_textmodule_divider'></span></h3>
													</div>
													<div class='rb_inner_row_wrapper'>
														<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1571303645647">
															<?php
															include_once('business/DB.php');
															$sql = "SELECT * FROM `services` where Category_ID=(select Category_ID from category where Category_Name='SEO') and SubCategory_ID=(select SubCategory_ID from sub_category where SubCategory_Name='" . htmlspecialchars(urldecode($_GET["sub-category"])) . "')";
															$result = $conn->query($sql);

															if ($result->num_rows > 0) {
																while ($row = $result->fetch_assoc()) {
															?>
																	<div class='rb_column_wrapper vc_col-sm-4 fade_bottom animated' style="margin-bottom: 50px;">
																		<div class="wpb_column vc_column_container vc_col-sm-4">
																			<div class="vc_column-inner">
																				<div class="wpb_wrapper">
																					<div href='seo-services.php' id='rb_service_5de226dcda3bc' class='rb_service_module style_icon_top style_tablet_inherit shape_none animate '>
																						<div class='service_image_wrapper'>
																							<img src='wp-content/uploads/2019/08/seo_600x400.jpg' alt='some-alt' />
																						</div>
																						<div class="service_content_wrapper">
																							<span class="price">
																								<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span><?php echo number_format((float) $row["Service_Price"], 2, '.', ''); ?></span>
																							</span>
																							<h5 class="service_title"><?php echo $row["Service_Name"]; ?></h5>
																							<div class='content_wrapper'>
																								<p><?php echo $row["Service_Description"]; ?></p>
																							</div>
																						</div>
																						<?php if (isset($_SESSION["userid"])) { ?>
																						<!-- <a href="business/functions.php?action=AddToCart&Service_ID=<?php echo $row["Service_ID"]; ?>" class="rb_textmodule_button rb_button advanced medium">Add To Cart</a> -->
																						<a class="rb_textmodule_button rb_button advanced medium" onclick="ShowOrderForm(this,'<?php echo $row["Service_ID"]; ?>','<?php echo $row["Service_Name"]; ?>')">Add To Cart</a>
																						<?php } else { ?>
																							<a class="rb_textmodule_button rb_button advanced medium">Login To Continue</a>
																						<?php } ?>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
															<?php
																}
															}
															?>
															<!-- <div id='rb_column_5de226dcd9e11' class='rb_column_wrapper vc_col-sm-4 fade_bottom animated' style="margin-bottom: 50px;">
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div href='seo-services.php' id='rb_service_5de226dcda3bc' class='rb_service_module style_icon_top style_tablet_inherit shape_none animate '>
																				<div class='service_image_wrapper'><img src='wp-content/uploads/2019/08/seo_1920x1080_01.png' alt='some-alt' /></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">Expert Consultation</h5>
																					<div class='content_wrapper'>
																						<p>Ornare tincidunt est, vel volutpat metus consequat sit amet.</p>
																					</div>
																				</div>
																				<a href="seo-services.php" class="rb_textmodule_button rb_button advanced medium">Add To Cart</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de226dcda4dd' class='rb_column_wrapper vc_col-sm-4 fade_bottom animated' style="margin-bottom: 50px;">
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div href='seo-services.php' id='rb_service_5de226dcdb4d0' class='rb_service_module style_icon_top style_tablet_inherit shape_none animate '>
																				<div class='service_image_wrapper'><img src='wp-content/uploads/2019/08/seo_1920x1080_02.png' alt='some-alt' /></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">Discovery &amp; Strategy</h5>
																					<div class='content_wrapper'>
																						<p>Ornare tincidunt est, vel volutpat metus consequat sit amet.</p>
																					</div>
																				</div>
																				<a href="seo-services.php" class="rb_textmodule_button rb_button advanced medium">Add To Cart</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de226dcdb5e2' class='rb_column_wrapper vc_col-sm-4 fade_bottom animated' style="margin-bottom: 50px;">
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div href='seo-services.php' id='rb_service_5de226dcdc1c2' class='rb_service_module style_icon_top style_tablet_inherit shape_none animate '>
																				<div class='service_image_wrapper'><img src='wp-content/uploads/2019/08/seo_1920x1080_03.png' alt='some-alt' /></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">Technical SEO Training</h5>
																					<div class='content_wrapper'>
																						<p>Ornare tincidunt est, vel volutpat metus consequat sit amet.</p>
																					</div>
																				</div>
																				<a href="seo-services.php" class="rb_textmodule_button rb_button advanced medium">Add To Cart</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de226dcd9e11' class='rb_column_wrapper vc_col-sm-4 fade_bottom animated' style="margin-bottom: 50px;">
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div href='seo-services.php' id='rb_service_5de226dcda3bc' class='rb_service_module style_icon_top style_tablet_inherit shape_none animate '>
																				<div class='service_image_wrapper'><img src='wp-content/uploads/2019/08/seo_1920x1080_01.png' alt='some-alt' /></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">Expert Consultation</h5>
																					<div class='content_wrapper'>
																						<p>Ornare tincidunt est, vel volutpat metus consequat sit amet.</p>
																					</div>
																				</div>
																				<a href="seo-services.php" class="rb_textmodule_button rb_button advanced medium">Add To Cart</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de226dcda4dd' class='rb_column_wrapper vc_col-sm-4 fade_bottom animated' style="margin-bottom: 50px;">
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div href='seo-services.php' id='rb_service_5de226dcdb4d0' class='rb_service_module style_icon_top style_tablet_inherit shape_none animate '>
																				<div class='service_image_wrapper'><img src='wp-content/uploads/2019/08/seo_1920x1080_02.png' alt='some-alt' /></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">Discovery &amp; Strategy</h5>
																					<div class='content_wrapper'>
																						<p>Ornare tincidunt est, vel volutpat metus consequat sit amet.</p>
																					</div>
																				</div>
																				<a href="seo-services.php" class="rb_textmodule_button rb_button advanced medium">Add To Cart</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de226dcdb5e2' class='rb_column_wrapper vc_col-sm-4 fade_bottom animated' style="margin-bottom: 50px;">
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div href='seo-services.php' id='rb_service_5de226dcdc1c2' class='rb_service_module style_icon_top style_tablet_inherit shape_none animate '>
																				<div class='service_image_wrapper'><img src='wp-content/uploads/2019/08/seo_1920x1080_03.png' alt='some-alt' /></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">Technical SEO Training</h5>
																					<div class='content_wrapper'>
																						<p>Ornare tincidunt est, vel volutpat metus consequat sit amet.</p>
																					</div>
																				</div>
																				<a href="seo-services.php" class="rb_textmodule_button rb_button advanced medium">Add To Cart</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div> -->
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
							</div>
							<!-- <div id="rb_content_5de226dcdc306" class="rb_content_5de226dcdc306 rb-content background_no_hover">
								<div class='particles-wrapper'>
									<div id='particles-5de226dcdc382' class='particles-js top_left' data-color='#ff861a' data-size='5' data-count='1' data-speed='2' data-hide='767' data-shape='circle' data-mode='bounce' style='width:25%;height:100%;'></div>
								</div>
								<div class='vc_row-full-width vc_clearfix'></div>
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571303858992 vc_row-has-fill">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226dcdc4f7' class='rb_column_wrapper vc_col-sm-2 '>
										<div class="wpb_column vc_column_container vc_col-sm-2">
											<div class="vc_column-inner">
												<div class="wpb_wrapper"></div>
											</div>
										</div>
									</div>
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226dcdc60a' class='rb_column_wrapper vc_col-sm-8 '>
										<div class="wpb_column vc_column_container vc_col-sm-8">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class='rb_textmodule_5de226dcdc780 rb_textmodule align_center'>
														<h3 class='rb_textmodule_title'>Check <strong>Your Website</strong><span class='rb_textmodule_divider'></span></h3>
														<div class='rb_textmodule_content_wrapper'>
															<div class="wpforms-container wpforms-container-full no_borders button_center" id="wpforms-3147">
																<form id="wpforms-form-3147" class="wpforms-validate wpforms-form" data-formid="3147" method="post" enctype="multipart/form-data" action="seo-services.php">
																	<div class="wpforms-field-container">
																		<div id="wpforms-3147-field_1-container" class="wpforms-field wpforms-field-text width_50" data-field-id="1"><input type="text" id="wpforms-3147-field_1" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][1]" placeholder="Your Name" required></div>
																		<div id="wpforms-3147-field_4-container" class="wpforms-field wpforms-field-email width_50" data-field-id="4"><label class="wpforms-field-label wpforms-label-hide" for="wpforms-3147-field_4">Email <span class="wpforms-required-label">*</span></label><input type="email" id="wpforms-3147-field_4" class="wpforms-field-large wpforms-field-required" name="wpforms[fields][4]" placeholder="Your email" required></div>
																		<div id="wpforms-3147-field_3-container" class="wpforms-field wpforms-field-text" data-field-id="3"><input type="text" id="wpforms-3147-field_3" class="wpforms-field-large" name="wpforms[fields][3]" placeholder="Send message"></div>
																	</div>
																	<div class="wpforms-field wpforms-field-hp"><label for="wpforms-3147-field-hp" class="wpforms-field-label">Website</label><input type="text" name="wpforms[hp]" id="wpforms-3147-field-hp" class="wpforms-field-medium"></div>
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
									<div id='rb_column_5de226dcdd038' class='rb_column_wrapper vc_col-sm-2 '>
										<div class="wpb_column vc_column_container vc_col-sm-2">
											<div class="vc_column-inner">
												<div class="wpb_wrapper"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
							</div> -->
							<!-- <div id="rb_content_5de226dcdd168" class="rb_content_5de226dcdd168 rb-content background_no_hover">
								<div class='rb_layer rb_stretch_row' data-vc-full-width='true' data-vc-full-width-init='false'>
									<div style='background-image:url(&quot;wp-content/uploads/2019/08/seo_960x600.jpg&quot;);
						right:0%;
						 width:50% !important;
						 background-size:initial;
						 background-position:right center;
						 background-repeat:no-repeat;
						
						 margin: 0px 0px;
						 opacity: 1;
					'></div>
								</div>
								<div class='vc_row-full-width vc_clearfix'></div>
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1565599414002 vc_row-has-fill vc_row-o-content-middle vc_row-flex">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226dcdd751' class='rb_column_wrapper vc_col-sm-6 '>
										<div class="wpb_column vc_column_container vc_col-sm-6">
											<div class="vc_column-inner vc_custom_1565599457164">
												<div class="wpb_wrapper">
													<div class='rb_textmodule_5de226dcdd93e rb_textmodule mobile_align_center'>
														<p class='h5 rb_textmodule_subtitle'>FEATURES</p>
														<h3 class='rb_textmodule_title'>A Flexible Solution With<br />
															<strong>Lots of Advantages</strong><span class='rb_textmodule_divider'></span></h3>
														<div class='rb_textmodule_content_wrapper'>
															<p>Nam quis accumsan risus. Aenean id volutpat nibh. Nullam mollis elit pellentesque, gravida turpis id, aliquam magna.</p>
														</div>
													</div>
													<div id='rb_inner_row_5de226dcddac6' class='rb_inner_row_wrapper'>
														<div class="vc_row wpb_row vc_inner vc_row-fluid">
															<div id='rb_column_5de226dcddc16' class='rb_column_wrapper vc_col-sm-6 '>
																<div class="wpb_column vc_column_container vc_col-sm-6">
																	<div class="vc_column-inner vc_custom_1562247544794">
																		<div class="wpb_wrapper">
																			<div id='rb_milestone_5de226dcdddab' class='rb_milestone_module style_simple'>
																				<div class='milestone_content'>
																					<div class='count_wrapper title_ff'><span class='counter'>142</span>k</div>
																					<p class='milestone_title'>Successful Projects</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de226dcdded3' class='rb_column_wrapper vc_col-sm-6 '>
																<div class="wpb_column vc_column_container vc_col-sm-6">
																	<div class="vc_column-inner vc_custom_1562247590467">
																		<div class="wpb_wrapper">
																			<div id='rb_milestone_5de226dcde005' class='rb_milestone_module style_simple'>
																				<div class='milestone_content'>
																					<div class='count_wrapper title_ff'><span class='counter'>1859</span></div>
																					<p class='milestone_title'>Satisfied Customers</p>
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
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226dcde128' class='rb_column_wrapper vc_col-sm-6 '>
										<div class="wpb_column vc_column_container vc_col-sm-6">
											<div class="vc_column-inner">
												<div class="wpb_wrapper"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
							</div> -->
							<!-- <div id="rb_content_5de226dcde256" class="rb_content_5de226dcde256 rb-content background_no_hover">
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1565597273030 vc_row-has-fill">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226dcde3d1' class='rb_column_wrapper vc_col-sm-1/5 '>
										<div class="wpb_column vc_column_container vc_col-sm-1/5">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div id='rb_image_5de226dcde4f6' class='rb_image_module background_no_hover'>
														<div class="main_image"><img src="wp-content/uploads/2019/08/logo1.jpg" alt="some-alt" /></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226dcdede5' class='rb_column_wrapper vc_col-sm-1/5 '>
										<div class="wpb_column vc_column_container vc_col-sm-1/5">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div id='rb_image_5de226dcdef44' class='rb_image_module background_no_hover'>
														<div class="main_image"><img src="wp-content/uploads/2019/08/logo2.jpg" alt="some-alt" /></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226dcdf0bd' class='rb_column_wrapper vc_col-sm-1/5 '>
										<div class="wpb_column vc_column_container vc_col-sm-1/5">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div id='rb_image_5de226dcdf1dd' class='rb_image_module background_no_hover'>
														<div class="main_image"><img src="wp-content/uploads/2019/08/logo3.jpg" alt="some-alt" /></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226dcdf347' class='rb_column_wrapper vc_col-sm-1/5 '>
										<div class="wpb_column vc_column_container vc_col-sm-1/5">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div id='rb_image_5de226dcdf463' class='rb_image_module background_no_hover'>
														<div class="main_image"><img src="wp-content/uploads/2019/08/logo4.jpg" alt="some-alt" /></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226dcdf653' class='rb_column_wrapper vc_col-sm-1/5 '>
										<div class="wpb_column vc_column_container vc_col-sm-1/5">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div id='rb_image_5de226dcdf776' class='rb_image_module background_no_hover'>
														<div class="main_image"><img src="wp-content/uploads/2019/08/logo5.jpg" alt="some-alt" /></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
							</div> -->
							<!-- <div id="rb_content_5de226dce0500" class="rb_content_5de226dce0500 rb-content background_no_hover">
								<div class='particles-wrapper'>
									<div id='particles-5de226dce057d' class='particles-js top_right' data-color='#3E4A59' data-size='60' data-count='1' data-speed='2' data-hide='767' data-shape='image' data-mode='bounce' data-image-url='wp-content/uploads/2019/05/particle_240-1-150x150.png' data-image-width='150' data-image-height='150' style='width:20%;height:100%;'></div>
								</div>
								<div class='vc_row-full-width vc_clearfix'></div>
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1562592575017">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de226dce085b' class='rb_column_wrapper vc_col-sm-12 '>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div id='rb_inner_row_5de226dce09f8' class='rb_inner_row_wrapper'>
														<div class="vc_row wpb_row vc_inner vc_row-fluid">
															<div id='rb_column_5de226dce0b45' class='rb_column_wrapper vc_col-sm-12 '>
																<div class="wpb_column vc_column_container vc_col-sm-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class='rb_textmodule_5de226dce0c86 rb_textmodule align_center'>
																				<h3 class='rb_textmodule_title'>Choose <strong>Your Plan</strong><span class='rb_textmodule_divider'></span></h3>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div id='rb_inner_row_5de226dce0dc5' class='rb_inner_row_wrapper'>
														<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1557736548729">
															<div id='rb_column_5de226dce0f2f' class='rb_column_wrapper vc_col-sm-6 vc_col-lg-3 vc_col-md-3 '>
																<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_pricing_plan_5de226dce10c1' class='rb_pricing_plan_module' style=''>
																				<h3>Essentials</h3>
																				<div class='price_wrapper title_ff'><i>$</i><span>29</span>
																					<p>/month</p>
																				</div>
																				<div class='content-wrapper'>
																					<p>5 Users</p>
																					<p>50 Team Members</p>
																					<p>Unlimited Email</p>
																					<p>Manage Permissions</p>
																					<p><del>Developer Support </del></p>
																					<p><del>A/B Testing</del></p>
																				</div><a href='seo-services.php' class='rb_button medium pricing_plan_button'>Sign Up</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de226dce1251' class='rb_column_wrapper vc_col-sm-6 vc_col-lg-3 vc_col-md-3 '>
																<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_pricing_plan_5de226dce1377' class='rb_pricing_plan_module highlighted' style='background-image: url(wp-content/uploads/2019/05/Untitled-bg.jpg);'>
																				<h3>Basic</h3>
																				<div class='price_wrapper title_ff'><i>$</i><span>49</span>
																					<p>/month</p>
																				</div>
																				<div class='content-wrapper'>
																					<p>20 Users</p>
																					<p>200 Team Members</p>
																					<p>Unlimited Email</p>
																					<p>Manage Permissions</p>
																					<p>Developer Support</p>
																					<p><del>A/B Testing</del></p>
																				</div><a href='seo-services.php' class='rb_button medium pricing_plan_button'>Sign Up</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de226dce16a5' class='rb_column_wrapper vc_col-sm-6 vc_col-lg-3 vc_col-md-3 '>
																<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_pricing_plan_5de226dce17c6' class='rb_pricing_plan_module' style=''>
																				<h3>Ultra</h3>
																				<div class='price_wrapper title_ff'><i>$</i><span>69</span>
																					<p>/month</p>
																				</div>
																				<div class='content-wrapper'>
																					<p>50 Users</p>
																					<p>500 Team Members</p>
																					<p>Unlimited Email</p>
																					<p>Manage Permissions</p>
																					<p>Developer Support</p>
																					<p>A/B Testing</p>
																				</div><a href='seo-services.php' class='rb_button medium pricing_plan_button'>Sign Up</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de226dce1901' class='rb_column_wrapper vc_col-sm-6 vc_col-lg-3 vc_col-md-3 '>
																<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_pricing_plan_5de226dce1a22' class='rb_pricing_plan_module' style=''>
																				<h3>Premium</h3>
																				<div class='price_wrapper title_ff'><i>$</i><span>99</span>
																					<p>/month</p>
																				</div>
																				<div class='content-wrapper'>
																					<p>50 Users</p>
																					<p>500 Team Members</p>
																					<p>Unlimited Email</p>
																					<p>Manage Permissions</p>
																					<p>Developer Support</p>
																					<p>A/B Testing</p>
																				</div><a href='seo-services.php' class='rb_button medium pricing_plan_button'>Sign Up</a>
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
						</div>




					</div>
					<!-- /.main-content-inner-wrap -->
				</div>
				<!-- /.main-content-inner -->
			</main> <!-- /.main-content -->
		</div>
		<!-- /.site-content -->

		<div class='rb_footer_template' style="margin-top:0px; margin-bottom:-80px;">
			<div class='container'>
				<div id="rb_content_5de226dce2528" class="rb_content_5de226dce2528 rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571647263433 vc_row-has-fill">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de226dce26d8' class='rb_column_wrapper vc_col-sm-12 '>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_inner_row_5de226dce2863' class='rb_inner_row_wrapper'>
											<div class="vc_row wpb_row vc_inner vc_row-fluid">
												<div id='rb_column_5de226dce299d' class='rb_column_wrapper vc_col-sm-12 '>
													<div class="wpb_column vc_column_container vc_col-sm-12">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div id='rb_logo_5de226dce2f4c' class='site_logotype'><a href='index.php'><img src='wp-content/uploads/2019/06/logo_white.png' alt='some-alt' style='width:143px;'></a></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id='rb_inner_row_5de226dce300a' class='rb_inner_row_wrapper'>
											<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1570620243054">
												<div id='rb_column_5de226dce3132' class='rb_column_wrapper vc_col-sm-4 '>
													<div class="wpb_column vc_column_container vc_col-sm-4">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div id='rb_icon_list_5de226dce3261' class='rb_icon_list_module header_icons direction_column mobile_align_center'><a href='tel:3053335522' class='custom_url'><i class='flaticon-telephone-auricular-with-cable'></i><span class='title'>(305) 333-5522</span></a><a href='mailto:info@seotechstore.com' class='custom_url'><i class='flaticon-email'></i><span class='title'>info@seotechstore.com</span></a></div>
															</div>
														</div>
													</div>
												</div>
												<div id='rb_column_5de226dce33d6' class='rb_column_wrapper vc_col-sm-4 '>
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
																<div class='rb_textmodule_5de226dce350b rb_textmodule align_center mobile_align_center'>
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
												<div id='rb_column_5de226dce37a9' class='rb_column_wrapper vc_col-sm-4 '>
													<div class="wpb_column vc_column_container vc_col-sm-4">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div class='rb_textmodule_5de226dce3906 rb_textmodule align_right mobile_align_center'>
																	<p class='h5 rb_textmodule_subtitle'>Subscribe to our social</p>
																</div>
																<div id='rb_icon_list_5de226dce3a06' class='rb_icon_list_module header_icons direction_line icon_bg align_right mobile_align_center'><a href='https://facebook.com' class='custom_url'>
																		<div class='icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																				<defs>
																					<linearGradient id="gradient_5de226dce3ab1" x1="0%" y1="0%" x2="0%" y2="100%">
																						<stop offset="0%" style="stop-color:#5163dd; stop-opacity:1" />
																						<stop offset="100%" style="stop-color:#5163dd; stop-opacity:1" />
																					</linearGradient>
																				</defs>
																				<polygon class="st0" points="6,25 6,75 49.3,100 92.6,75 92.6,25 49.3,0" fill="url(#gradient_5de226dce3ab1)" />
																			</svg><i class='flaticon-facebook'></i></div><span class='title'></span>
																	</a><a href='https://www.linkedin.com/' class='custom_url'>
																		<div class='icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																				<defs>
																					<linearGradient id="gradient_5de226dce3b00" x1="0%" y1="0%" x2="0%" y2="100%">
																						<stop offset="0%" style="stop-color:#5163dd; stop-opacity:1" />
																						<stop offset="100%" style="stop-color:#5163dd; stop-opacity:1" />
																					</linearGradient>
																				</defs>
																				<polygon class="st0" points="6,25 6,75 49.3,100 92.6,75 92.6,25 49.3,0" fill="url(#gradient_5de226dce3b00)" />
																			</svg><i class='flaticon-linkedin'></i></div><span class='title'></span>
																	</a><a href='https://twitter.com' class='custom_url'>
																		<div class='icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																				<defs>
																					<linearGradient id="gradient_5de226dce3b4a" x1="0%" y1="0%" x2="0%" y2="100%">
																						<stop offset="0%" style="stop-color:#5163dd; stop-opacity:1" />
																						<stop offset="100%" style="stop-color:#5163dd; stop-opacity:1" />
																					</linearGradient>
																				</defs>
																				<polygon class="st0" points="6,25 6,75 49.3,100 92.6,75 92.6,25 49.3,0" fill="url(#gradient_5de226dce3b4a)" />
																			</svg><i class='flaticon-twitter'></i></div><span class='title'></span>
																	</a><a href='https://www.youtube.com/' class='custom_url'>
																		<div class='icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																				<defs>
																					<linearGradient id="gradient_5de226dce3b92" x1="0%" y1="0%" x2="0%" y2="100%">
																						<stop offset="0%" style="stop-color:#5163dd; stop-opacity:1" />
																						<stop offset="100%" style="stop-color:#5163dd; stop-opacity:1" />
																					</linearGradient>
																				</defs>
																				<polygon class="st0" points="6,25 6,75 49.3,100 92.6,75 92.6,25 49.3,0" fill="url(#gradient_5de226dce3b92)" />
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
				<div id="rb_content_5de226dce3c43" class="rb_content_5de226dce3c43 rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1570622568954 vc_row-has-fill">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de226dce3dc9' class='rb_column_wrapper vc_col-sm-12 '>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class='rb_textmodule_5de226dce3f0a rb_textmodule mobile_align_center'>
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
						<div id='rb_column_5de226dce4031' class='rb_column_wrapper vc_col-sm-7 '>
							<div class="wpb_column vc_column_container vc_col-sm-7">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class='rb_textmodule_5de226dce4169 rb_textmodule mobile_align_center'>
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

	<!-- <script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script> -->
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

		.rb_content_5de226dca7707>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226dca7707>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226dca7707>.vc_row {
			background-position: center !important;
		}

		.rb_content_5de226dca7707>.vc_row {
			position: relative;
			overflow: visible;
			z-index: 2;
		}

		#rb_content_5de226dca7707>.vc_row {
			-webkit-box-shadow: 0 0 15px 5px rgba(16, 1, 148, 0.05);
			-moz-box-shadow: 0 0 15px 5px rgba(16, 1, 148, 0.05);
			box-shadow: 0 0 15px 5px rgba(16, 1, 148, 0.05);
		}

		#rb_column_5de226dca7c38>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dca7c38>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dca7c38>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226dca89db>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dca89db>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dca89db>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_menu_5de226dca8c11>ul {
			-webkit-justify-content: center;
			justify-content: center;
		}

		#rb_menu_5de226dca8c11>.menu>.menu-item>a {
			color: #3e4a59;
		}

		#rb_menu_5de226dca8c11>.menu>.menu-item>a:before,
		#rb_menu_5de226dca8c11 .menu-item-object-rb-megamenu .sub-menu .rb_megamenu_item .widgettitle:before {
			background-color: #5163dd;
		}

		.rb_content_5de226dcac3d6>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226dcac3d6>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226dcac3d6>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dcac673>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcac673>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcac673>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226dcae6a0>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcae6a0>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcae6a0>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226dcae6a0>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de226dcb1efd>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcb1efd>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcb1efd>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226dcb1efd>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de226dcb2c49>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcb2c49>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcb2c49>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226dcb2c49>.wpb_column>.vc_column-inner {
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

		.rb_content_5de226dcb55a6>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226dcb55a6>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226dcb55a6>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dcb56ba>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcb56ba>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcb56ba>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226dcb665a>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcb665a>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcb665a>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226dcb7216>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcb7216>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcb7216>.wpb_column>.vc_column-inner {
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

		#rb_column_5de226dcb8b06>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcb8b06>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcb8b06>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_inner_row_5de226dcb8dfb>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de226dcb8dfb>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de226dcb8dfb>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dcb9044>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcb9044>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcb9044>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_search_5de226dcb91db {
			text-align: right;
		}

		#rb_search_5de226dcb91db .search-trigger {
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
			#rb_search_5de226dcb91db .search-trigger:hover {
				color: #5163DD;
			}
		}

		#rb_column_5de226dcb925e>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcb925e>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcb925e>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_button_wrapper_5de226dcb93b5 {
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

		.rb_content_5de226dcb9f5a>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226dcb9f5a>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226dcb9f5a>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dcba0f4>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcba0f4>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcba0f4>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_icon_list_5de226dcba281 i:before {
			font-size: 16px;
		}

		#rb_icon_list_5de226dcba281 .icon_wrapper svg {
			transform: scale(0.46);
		}

		#rb_icon_list_5de226dcba281 .title {
			font-size: 14px;
		}

		#rb_icon_list_5de226dcba281.direction_line>* {
			margin-right: 45px;
		}

		#rb_icon_list_5de226dcba281.direction_column>*>* {
			margin-top: 45px;
		}

		#rb_icon_list_5de226dcba281>a,
		#rb_icon_list_5de226dcba281>.mini-cart>a,
		#rb_icon_list_5de226dcba281 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a {
			color: #3e4a59;
		}

		#rb_icon_list_5de226dcba281.header_icons>*~.mini-cart:not(:first-child) .woo_mini-count {
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

			#rb_icon_list_5de226dcba281>a:hover,
			#rb_icon_list_5de226dcba281>.mini-cart>a:hover,
			#rb_icon_list_5de226dcba281 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a:hover {
				color: #3e4a59;
			}
		}

		#rb_column_5de226dcba40c>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcba40c>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcba40c>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_icon_list_5de226dcba56b {
			text-align: right;
		}

		#rb_icon_list_5de226dcba56b i:before {
			font-size: 18px;
		}

		#rb_icon_list_5de226dcba56b .icon_wrapper svg {
			transform: scale(0.48);
		}

		#rb_icon_list_5de226dcba56b .title {
			font-size: 16px;
		}

		#rb_icon_list_5de226dcba56b.direction_line>* {
			margin-right: 15px;
		}

		#rb_icon_list_5de226dcba56b.direction_column>*>* {
			margin-top: 15px;
		}

		#rb_icon_list_5de226dcba56b>a,
		#rb_icon_list_5de226dcba56b>.mini-cart>a,
		#rb_icon_list_5de226dcba56b .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a {
			color: #3e4a59;
		}

		#rb_icon_list_5de226dcba56b.header_icons>*~.mini-cart:not(:first-child) .woo_mini-count {
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

			#rb_icon_list_5de226dcba56b>a:hover,
			#rb_icon_list_5de226dcba56b>.mini-cart>a:hover,
			#rb_icon_list_5de226dcba56b .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a:hover {
				color: #3e4a59;
			}
		}

		.rb_content_5de226dcba891>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226dcba891>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226dcba891>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dcba9c9>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcba9c9>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcba9c9>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226dcbafdd>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcbafdd>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcbafdd>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_menu_5de226dcbb1bb>ul {
			-webkit-justify-content: center;
			justify-content: center;
		}

		#rb_menu_5de226dcbb1bb>.menu>.menu-item>a {
			color: #3e4a59;
		}

		#rb_menu_5de226dcbb1bb>.menu>.menu-item>a:before,
		#rb_menu_5de226dcbb1bb .menu-item-object-rb-megamenu .sub-menu .rb_megamenu_item .widgettitle:before {
			background-color: #5163dd;
		}

		.rb_content_5de226dcbc9b6>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226dcbc9b6>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226dcbc9b6>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dcbcb00>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcbcb00>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcbcb00>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226dcbd6c0>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcbd6c0>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcbd6c0>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226dcbd6c0>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de226dcbe267>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcbe267>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcbe267>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226dcbe267>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de226dcbf8f4>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcbf8f4>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcbf8f4>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226dcbf8f4>.wpb_column>.vc_column-inner {
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

		.rb_content_5de226dcc0ed5>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226dcc0ed5>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226dcc0ed5>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dcc1018>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcc1018>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcc1018>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226dcc1a0c>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcc1a0c>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcc1a0c>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226dcc289e>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcc289e>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcc289e>.wpb_column>.vc_column-inner {
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

		#rb_column_5de226dcc3ad4>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcc3ad4>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcc3ad4>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_inner_row_5de226dcc3c17>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de226dcc3c17>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de226dcc3c17>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dcc3d15>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcc3d15>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcc3d15>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_search_5de226dcc3e37 {
			text-align: right;
		}

		#rb_search_5de226dcc3e37 .search-trigger {
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
			#rb_search_5de226dcc3e37 .search-trigger:hover {
				color: #3e4a59;
			}
		}

		#rb_column_5de226dcc3eb2>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcc3eb2>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcc3eb2>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_button_wrapper_5de226dcc3fbf {
			text-align: right;
		}

		#rb_button_5de226dcc3ff7 {
			color: #3e4a59;
		}

		#rb_button_5de226dcc3ff7 {
			background-color: rgba(255, 255, 255, 0.01);
		}

		#rb_button_5de226dcc3ff7 {
			border-color: #5163dd;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			#rb_button_5de226dcc3ff7:hover {
				color: #ffffff;
			}

			#rb_button_5de226dcc3ff7:hover {
				background-color: #5163dd;
			}

			#rb_button_5de226dcc3ff7:hover {
				border-color: #5163dd;
			}
		}

		.rb_content_5de226dcc40c8>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226dcc40c8>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226dcc40c8>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dcc4272>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcc4272>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcc4272>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_title_area_5de226dcc43e9 {
			-webkit-mask-image: url(wp-content/uploads/2019/07/title_mask.svg);
			-webkit-mask-size: cover;
			-webkit-mask-repeat: no-repeat;
			-webkit-mask-position: bottom center;
		}

		#rb_title_area_5de226dcc43e9 {
			background: -webkit-linear-gradient(-6deg, #e9eeff, #ffffff);
			background: linear-gradient(-6deg, #e9eeff, #ffffff);
		}

		#rb_title_area_5de226dcc43e9 .single_post_categories {
			background-color: #3e4a59;
		}

		#rb_title_area_5de226dcc43e9 .single_post_categories a {
			color: #ffffff;
		}

		#rb_title_area_5de226dcc43e9 .page_title {
			color: #3e4a59;
		}

		#rb_title_area_5de226dcc43e9 .single_post_meta a {
			color: #3e4a59;
		}

		#rb_title_area_5de226dcc43e9 .title_divider {
			background-color: #5163dd;
		}

		#rb_title_area_5de226dcc43e9 .woocommerce-breadcrumb *,
		#rb_title_area_5de226dcc43e9 .bread-crumbs * {
			color: #3e4a59;
		}

		.rb_content_5de226dcc6aab>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226dcc6aab>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226dcc6aab>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dcc6c15>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcc6c15>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcc6c15>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226dcc7dfa>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcc7dfa>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcc7dfa>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226dcc7dfa>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de226dcca7e7>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcca7e7>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcca7e7>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226dcca7e7>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de226dccc105>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dccc105>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dccc105>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226dccc105>.wpb_column>.vc_column-inner {
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

		.rb_content_5de226dccd008>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226dccd008>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226dccd008>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dccd161>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dccd161>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dccd161>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226dcd0934>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcd0934>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcd0934>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226dcd1236>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcd1236>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcd1236>.wpb_column>.vc_column-inner {
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

		.rb_content_5de226dcd87cf>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226dcd87cf>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226dcd87cf>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dcd9043>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcd9043>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcd9043>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 1199px) {
			#rb_column_5de226dcd9043>.wpb_column>.vc_column-inner {
				padding-top: 70px !important;
			}
		}

		@media screen and (max-width: 991px) {
			#rb_column_5de226dcd9043>.wpb_column>.vc_column-inner {
				margin-top: 90px !important;
			}
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226dcd9043>.wpb_column>.vc_column-inner {
				padding-top: 0px !important;
			}
		}

		#rb_image_5de226dcd91ea {
			border-radius: 25px !important;
		}

		@media screen and (max-width: 991px) {
			#rb_image_5de226dcd91ea {
				text-align: center;
			}
		}

		#rb_column_5de226dcd93dc>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcd93dc>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcd93dc>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de226dcd958e {
			padding-top: 70px !important;
			;
		}

		.rb_textmodule_5de226dcd958e {
			text-align: left;
		}

		.rb_textmodule_5de226dcd958e .rb_textmodule_title,
		.rb_textmodule_5de226dcd958e .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de226dcd958e .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de226dcd958e {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de226dcd958e a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de226dcd958e .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de226dcd958e .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de226dcd958e .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de226dcd958e .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de226dcd958e .rb_textmodule_subtitle {
			font-size: 14px;
		}

		.rb_textmodule_5de226dcd958e .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de226dcd958e .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de226dcd958e .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de226dcd958e .rb_textmodule_title {
			margin-bottom: 31px;
			padding-bottom: 31px;
		}

		.rb_textmodule_5de226dcd958e .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de226dcd958e .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de226dcd958e .rb_textmodule_button {
			margin-top: 40px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de226dcd958e {
				padding-top: 50px !important;
				;
			}

			.rb_textmodule_5de226dcd958e {
				text-align: center;
			}

			.rb_textmodule_5de226dcd958e .rb_textmodule_title {
				font-size: 30px;
			}

			.rb_textmodule_5de226dcd958e .rb_textmodule_subtitle {
				font-size: 20px;
			}

			.rb_textmodule_5de226dcd958e .rb_textmodule_title {
				margin-bottom: 20px;
				padding-bottom: 20px;
			}

			.rb_textmodule_5de226dcd958e .rb_textmodule_button {
				margin-top: 35px;
			}
		}

		.rb_content_5de226dcd9861>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226dcd9861>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226dcd9861>.vc_row {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			.rb_content_5de226dcd9861>.vc_row {
				padding-top: 50px !important;
				padding-bottom: 50px !important;
			}
		}

		#rb_column_5de226dcd99f8>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcd99f8>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcd99f8>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de226dcd9b93 {
			text-align: center;
		}

		.rb_textmodule_5de226dcd9b93 .rb_textmodule_title,
		.rb_textmodule_5de226dcd9b93 .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de226dcd9b93 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de226dcd9b93 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de226dcd9b93 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de226dcd9b93 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de226dcd9b93 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de226dcd9b93 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de226dcd9b93 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de226dcd9b93 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de226dcd9b93 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de226dcd9b93 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de226dcd9b93 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de226dcd9b93 .rb_textmodule_title {
			margin-bottom: 31px;
			padding-bottom: 31px;
		}

		.rb_textmodule_5de226dcd9b93 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de226dcd9b93 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de226dcd9b93 .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de226dcd9b93 .rb_textmodule_title {
				font-size: 30px;
			}

			.rb_textmodule_5de226dcd9b93 .rb_textmodule_subtitle {
				font-size: 20px;
			}

			.rb_textmodule_5de226dcd9b93 .rb_textmodule_title {
				margin-bottom: 20px;
				padding-bottom: 20px;
			}

			.rb_textmodule_5de226dcd9b93 .rb_textmodule_button {
				margin-top: 35px;
			}
		}

		#rb_inner_row_5de226dcd9c88>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de226dcd9c88>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de226dcd9c88>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dcd9e11>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcd9e11>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcd9e11>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226dcd9e11 {
			transition-duration: 500ms;
		}

		#rb_column_5de226dcd9e11 {
			transition-delay: 90ms;
		}

		#rb_column_5de226dcd9e11 {
			transition-timing-function: ease;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226dcd9e11>.wpb_column>.vc_column-inner {
				padding-bottom: 20px !important;
			}
		}

		#rb_service_5de226dcda3bc {
			padding-top: 60px !important;
			padding-right: 60px !important;
			padding-bottom: 50px !important;
			padding-left: 60px !important;
			background-color: #ffffff !important;
			border-radius: 15px !important;
		}

		#rb_service_5de226dcda3bc {
			text-align: center;
		}

		#rb_service_5de226dcda3bc .service_icon_wrapper i,
		#rb_service_5de226dcda3bc .service_icon_wrapper i:before {
			font-size: 50px;
		}

		#rb_service_5de226dcda3bc .service_icon_wrapper i.svg {
			width: 50px !important;
			height: 50px !important;
		}

		#rb_service_5de226dcda3bc .service_icon_wrapper>svg {
			width: 100px !important;
			height: 100px !important;
		}

		#rb_service_5de226dcda3bc .service_icon_wrapper>svg path,
		#rb_service_5de226dcda3bc .service_icon_wrapper>svg polygon,
		#rb_service_5de226dcda3bc .service_icon_wrapper>svg circle {
			-webkit-transform: scale(1);
			transform: scale(1);
		}

		#rb_service_5de226dcda3bc .service_icon_wrapper>svg rect {
			-webkit-transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de226dcda3bc .service_title {
			font-size: 20px;
		}

		#rb_service_5de226dcda3bc .service_title {
			line-height: 20px;
		}

		#rb_service_5de226dcda3bc .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de226dcda3bc .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de226dcda3bc .service-button {
			font-size: 16px;
		}

		#rb_service_5de226dcda3bc .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de226dcda3bc .service-button {
			margin-top: 10px;
		}

		#rb_service_5de226dcda3bc .service_title {
			margin: 35px 0px 0px 0px;
		}

		#rb_service_5de226dcda3bc .service_icon_wrapper i,
		#rb_service_5de226dcda3bc .service_icon_wrapper i:before {
			color: #ffffff;
		}

		#rb_service_5de226dcda3bc .service_title {
			color: #3e4a59;
		}

		#rb_service_5de226dcda3bc .service_divider {
			background-color: #01d6ad;
		}

		#rb_service_5de226dcda3bc {
			-webkit-box-shadow: 0px 0px 15px -2px rgba(15, 1, 148, 0.15);
			-moz-box-shadow: 0px 0px 15px -2px rgba(15, 1, 148, 0.15);
			box-shadow: 0px 0px 15px -2px rgba(15, 1, 148, 0.15);
		}

		#rb_service_5de226dcda3bc .content_wrapper,
		#rb_service_5de226dcda3bc .content_wrapper>a {
			color: rgba(62, 74, 89, 0.8);
		}

		#rb_service_5de226dcda3bc .content_wrapper>a:hover {
			color: #5163dd;
		}

		#rb_service_5de226dcda3bc .service-button {
			color: #3e4a59;
		}

		#rb_service_5de226dcda3bc .service-button:after {
			color: #3e4a59;
		}

		#rb_column_5de226dcda4dd>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcda4dd>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcda4dd>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226dcda4dd {
			transition-duration: 500ms;
		}

		#rb_column_5de226dcda4dd {
			transition-delay: 180ms;
		}

		#rb_column_5de226dcda4dd {
			transition-timing-function: ease;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226dcda4dd>.wpb_column>.vc_column-inner {
				padding-bottom: 20px !important;
			}
		}

		#rb_service_5de226dcdb4d0 {
			padding-top: 60px !important;
			padding-right: 60px !important;
			padding-bottom: 50px !important;
			padding-left: 60px !important;
			background-color: #ffffff !important;
			border-radius: 15px !important;
		}

		#rb_service_5de226dcdb4d0 {
			text-align: center;
		}

		#rb_service_5de226dcdb4d0 .service_icon_wrapper i,
		#rb_service_5de226dcdb4d0 .service_icon_wrapper i:before {
			font-size: 50px;
		}

		#rb_service_5de226dcdb4d0 .service_icon_wrapper i.svg {
			width: 50px !important;
			height: 50px !important;
		}

		#rb_service_5de226dcdb4d0 .service_icon_wrapper>svg {
			width: 100px !important;
			height: 100px !important;
		}

		#rb_service_5de226dcdb4d0 .service_icon_wrapper>svg path,
		#rb_service_5de226dcdb4d0 .service_icon_wrapper>svg polygon,
		#rb_service_5de226dcdb4d0 .service_icon_wrapper>svg circle {
			-webkit-transform: scale(1);
			transform: scale(1);
		}

		#rb_service_5de226dcdb4d0 .service_icon_wrapper>svg rect {
			-webkit-transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de226dcdb4d0 .service_title {
			font-size: 20px;
		}

		#rb_service_5de226dcdb4d0 .service_title {
			line-height: 20px;
		}

		#rb_service_5de226dcdb4d0 .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de226dcdb4d0 .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de226dcdb4d0 .service-button {
			font-size: 16px;
		}

		#rb_service_5de226dcdb4d0 .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de226dcdb4d0 .service-button {
			margin-top: 10px;
		}

		#rb_service_5de226dcdb4d0 .service_title {
			margin: 35px 0px 0px 0px;
		}

		#rb_service_5de226dcdb4d0 .service_icon_wrapper i,
		#rb_service_5de226dcdb4d0 .service_icon_wrapper i:before {
			color: #ffffff;
		}

		#rb_service_5de226dcdb4d0 .service_title {
			color: #3e4a59;
		}

		#rb_service_5de226dcdb4d0 .service_divider {
			background-color: #01d6ad;
		}

		#rb_service_5de226dcdb4d0 .content_wrapper,
		#rb_service_5de226dcdb4d0 .content_wrapper>a {
			color: rgba(62, 74, 89, 0.8);
		}

		#rb_service_5de226dcdb4d0 .content_wrapper>a:hover {
			color: #5163dd;
		}

		#rb_service_5de226dcdb4d0 .service-button {
			color: #3e4a59;
		}

		#rb_service_5de226dcdb4d0 .service-button:after {
			color: #3e4a59;
		}

		#rb_column_5de226dcdb5e2>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcdb5e2>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcdb5e2>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226dcdb5e2 {
			transition-duration: 500ms;
		}

		#rb_column_5de226dcdb5e2 {
			transition-delay: 270ms;
		}

		#rb_column_5de226dcdb5e2 {
			transition-timing-function: ease;
		}

		#rb_service_5de226dcdc1c2 {
			padding-top: 60px !important;
			padding-right: 60px !important;
			padding-bottom: 50px !important;
			padding-left: 60px !important;
			background-color: #ffffff !important;
			border-radius: 15px !important;
		}

		#rb_service_5de226dcdc1c2 {
			text-align: center;
		}

		#rb_service_5de226dcdc1c2 .service_icon_wrapper i,
		#rb_service_5de226dcdc1c2 .service_icon_wrapper i:before {
			font-size: 50px;
		}

		#rb_service_5de226dcdc1c2 .service_icon_wrapper i.svg {
			width: 50px !important;
			height: 50px !important;
		}

		#rb_service_5de226dcdc1c2 .service_icon_wrapper>svg {
			width: 100px !important;
			height: 100px !important;
		}

		#rb_service_5de226dcdc1c2 .service_icon_wrapper>svg path,
		#rb_service_5de226dcdc1c2 .service_icon_wrapper>svg polygon,
		#rb_service_5de226dcdc1c2 .service_icon_wrapper>svg circle {
			-webkit-transform: scale(1);
			transform: scale(1);
		}

		#rb_service_5de226dcdc1c2 .service_icon_wrapper>svg rect {
			-webkit-transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de226dcdc1c2 .service_title {
			font-size: 20px;
		}

		#rb_service_5de226dcdc1c2 .service_title {
			line-height: 20px;
		}

		#rb_service_5de226dcdc1c2 .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de226dcdc1c2 .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de226dcdc1c2 .service-button {
			font-size: 16px;
		}

		#rb_service_5de226dcdc1c2 .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de226dcdc1c2 .service-button {
			margin-top: 10px;
		}

		#rb_service_5de226dcdc1c2 .service_title {
			margin: 35px 0px 0px 0px;
		}

		#rb_service_5de226dcdc1c2 .service_icon_wrapper i,
		#rb_service_5de226dcdc1c2 .service_icon_wrapper i:before {
			color: #ffffff;
		}

		#rb_service_5de226dcdc1c2 .service_title {
			color: #3e4a59;
		}

		#rb_service_5de226dcdc1c2 .service_divider {
			background-color: #01d6ad;
		}

		#rb_service_5de226dcdc1c2 .content_wrapper,
		#rb_service_5de226dcdc1c2 .content_wrapper>a {
			color: rgba(62, 74, 89, 0.8);
		}

		#rb_service_5de226dcdc1c2 .content_wrapper>a:hover {
			color: #5163dd;
		}

		#rb_service_5de226dcdc1c2 .service-button {
			color: #3e4a59;
		}

		#rb_service_5de226dcdc1c2 .service-button:after {
			color: #3e4a59;
		}

		.rb_content_5de226dcdc306>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226dcdc306>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226dcdc306>.vc_row {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			.rb_content_5de226dcdc306>.vc_row {
				padding-top: 50px !important;
				padding-bottom: 50px !important;
			}
		}

		#rb_column_5de226dcdc4f7>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcdc4f7>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcdc4f7>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de226dcdc60a>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcdc60a>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcdc60a>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de226dcdc780 {
			text-align: center;
		}

		.rb_textmodule_5de226dcdc780 .rb_textmodule_title,
		.rb_textmodule_5de226dcdc780 .rb_textmodule_button.simple {
			color: #ffffff;
		}

		.rb_textmodule_5de226dcdc780 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de226dcdc780 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de226dcdc780 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de226dcdc780 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de226dcdc780 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de226dcdc780 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de226dcdc780 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de226dcdc780 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de226dcdc780 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de226dcdc780 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de226dcdc780 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de226dcdc780 .rb_textmodule_title {
			margin-bottom: 31px;
			padding-bottom: 31px;
		}

		.rb_textmodule_5de226dcdc780 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de226dcdc780 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de226dcdc780 .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de226dcdc780 .rb_textmodule_title {
				font-size: 30px;
			}

			.rb_textmodule_5de226dcdc780 .rb_textmodule_subtitle {
				font-size: 20px;
			}

			.rb_textmodule_5de226dcdc780 .rb_textmodule_title {
				margin-bottom: 20px;
				padding-bottom: 20px;
			}

			.rb_textmodule_5de226dcdc780 .rb_textmodule_button {
				margin-top: 35px;
			}
		}

		#rb_column_5de226dcdd038>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcdd038>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcdd038>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_content_5de226dcdd168>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226dcdd168>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226dcdd168>.vc_row {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			.rb_content_5de226dcdd168>.rb_layer {
				display: none;
			}
		}

		#rb_column_5de226dcdd751>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcdd751>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcdd751>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226dcdd751>.wpb_column>.vc_column-inner {
				padding-bottom: 0px !important;
			}
		}

		.rb_textmodule_5de226dcdd93e .rb_textmodule_title,
		.rb_textmodule_5de226dcdd93e .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de226dcdd93e .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de226dcdd93e {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de226dcdd93e a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de226dcdd93e .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de226dcdd93e .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de226dcdd93e .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de226dcdd93e .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de226dcdd93e .rb_textmodule_subtitle {
			font-size: 14px;
		}

		.rb_textmodule_5de226dcdd93e .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de226dcdd93e .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de226dcdd93e .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de226dcdd93e .rb_textmodule_title {
			margin-bottom: 31px;
			padding-bottom: 31px;
		}

		.rb_textmodule_5de226dcdd93e .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de226dcdd93e .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de226dcdd93e .rb_textmodule_button {
			margin-top: 40px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de226dcdd93e {
				text-align: center;
			}

			.rb_textmodule_5de226dcdd93e .rb_textmodule_title {
				font-size: 30px;
			}

			.rb_textmodule_5de226dcdd93e .rb_textmodule_subtitle {
				font-size: 20px;
			}

			.rb_textmodule_5de226dcdd93e .rb_textmodule_title {
				margin-bottom: 20px;
				padding-bottom: 20px;
			}

			.rb_textmodule_5de226dcdd93e .rb_textmodule_button {
				margin-top: 35px;
			}
		}

		#rb_inner_row_5de226dcddac6>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de226dcddac6>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de226dcddac6>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dcddc16>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcddc16>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcddc16>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_milestone_5de226dcdddab {
			border-right-width: 1px !important;
			border-right-color: #d8dbde !important;
			border-right-style: solid !important;
		}

		#rb_milestone_5de226dcdddab .milestone_content {
			text-align: left;
		}

		#rb_milestone_5de226dcdddab .milestone_icon>svg {
			-webkit-transform: translate(-50%, -50%) scale(0.8);
			-ms-transform: translate(-50%, -50%) scale(0.8);
			transform: translate(-50%, -50%) scale(0.8);
		}

		#rb_milestone_5de226dcdddab .milestone_icon:not(.shape_none) {
			width: 80px;
			height: 80px;
		}

		#rb_milestone_5de226dcdddab .milestone_icon i,
		#rb_milestone_5de226dcdddab .milestone_icon i:before {
			font-size: 38px;
			line-height: 38px;
		}

		#rb_milestone_5de226dcdddab .count_wrapper {
			font-size: 55px;
		}

		#rb_milestone_5de226dcdddab .count_wrapper {
			margin: 0px 0px 0px 0px;
		}

		#rb_milestone_5de226dcdddab .milestone_title {
			font-size: 20px;
		}

		#rb_milestone_5de226dcdddab .milestone_icon i {
			background-image: -webkit-linear-gradient(to bottom, #3e4a59, #3e4a59);
			background-image: -moz-linear-gradient(to bottom, #3e4a59, #3e4a59);
			background-image: linear-gradient(to bottom, #3e4a59, #3e4a59);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de226dcdddab .count_wrapper {
			background-image: -webkit-linear-gradient(to bottom, #5163dd, #ffaf01);
			background-image: -moz-linear-gradient(to bottom, #5163dd, #ffaf01);
			background-image: linear-gradient(to bottom, #5163dd, #ffaf01);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de226dcdddab .milestone_title {
			color: #3e4a59;
		}

		@media screen and (max-width: 767px) {
			#rb_milestone_5de226dcdddab .milestone_content {
				text-align: center;
			}
		}

		#rb_column_5de226dcdded3>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcdded3>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcdded3>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_milestone_5de226dcde005 .milestone_content {
			text-align: left;
		}

		#rb_milestone_5de226dcde005 .milestone_icon>svg {
			-webkit-transform: translate(-50%, -50%) scale(0.8);
			-ms-transform: translate(-50%, -50%) scale(0.8);
			transform: translate(-50%, -50%) scale(0.8);
		}

		#rb_milestone_5de226dcde005 .milestone_icon:not(.shape_none) {
			width: 80px;
			height: 80px;
		}

		#rb_milestone_5de226dcde005 .milestone_icon i,
		#rb_milestone_5de226dcde005 .milestone_icon i:before {
			font-size: 38px;
			line-height: 38px;
		}

		#rb_milestone_5de226dcde005 .count_wrapper {
			font-size: 55px;
		}

		#rb_milestone_5de226dcde005 .count_wrapper {
			margin: 0px 0px 0px 0px;
		}

		#rb_milestone_5de226dcde005 .milestone_title {
			font-size: 20px;
		}

		#rb_milestone_5de226dcde005 .milestone_icon i {
			background-image: -webkit-linear-gradient(to bottom, #3e4a59, #3e4a59);
			background-image: -moz-linear-gradient(to bottom, #3e4a59, #3e4a59);
			background-image: linear-gradient(to bottom, #3e4a59, #3e4a59);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de226dcde005 .count_wrapper {
			background-image: -webkit-linear-gradient(to bottom, #5163dd, #ffaf01);
			background-image: -moz-linear-gradient(to bottom, #5163dd, #ffaf01);
			background-image: linear-gradient(to bottom, #5163dd, #ffaf01);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de226dcde005 .milestone_title {
			color: #3e4a59;
		}

		@media screen and (max-width: 767px) {
			#rb_milestone_5de226dcde005 .milestone_content {
				text-align: center;
			}
		}

		#rb_column_5de226dcde128>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcde128>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcde128>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 991px) {
			#rb_column_5de226dcde128>.wpb_column>.vc_column-inner {
				margin-top: 150px !important;
			}
		}

		.rb_content_5de226dcde256>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226dcde256>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226dcde256>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dcde3d1>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcde3d1>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcde3d1>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_image_5de226dcde4f6 {
			text-align: center;
		}

		#rb_column_5de226dcdede5>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcdede5>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcdede5>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_image_5de226dcdef44 {
			text-align: center;
		}

		#rb_column_5de226dcdf0bd>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcdf0bd>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcdf0bd>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_image_5de226dcdf1dd {
			text-align: center;
		}

		#rb_column_5de226dcdf347>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcdf347>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcdf347>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_image_5de226dcdf463 {
			text-align: center;
		}

		#rb_column_5de226dcdf653>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dcdf653>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dcdf653>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_image_5de226dcdf776 {
			text-align: center;
		}

		.rb_content_5de226dce0500>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226dce0500>.vc_row {
			background-size: contain !important;
		}

		.rb_content_5de226dce0500>.vc_row {
			background-position: top !important;
		}

		@media screen and (max-width: 767px) {
			.rb_content_5de226dce0500>.vc_row {
				padding-bottom: 50px !important;
			}
		}

		#rb_column_5de226dce085b>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dce085b>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dce085b>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_inner_row_5de226dce09f8>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de226dce09f8>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de226dce09f8>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dce0b45>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dce0b45>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dce0b45>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de226dce0c86 {
			text-align: center;
		}

		.rb_textmodule_5de226dce0c86 .rb_textmodule_title,
		.rb_textmodule_5de226dce0c86 .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de226dce0c86 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de226dce0c86 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de226dce0c86 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de226dce0c86 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de226dce0c86 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de226dce0c86 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de226dce0c86 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de226dce0c86 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de226dce0c86 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de226dce0c86 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de226dce0c86 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de226dce0c86 .rb_textmodule_title {
			margin-bottom: 31px;
			padding-bottom: 31px;
		}

		.rb_textmodule_5de226dce0c86 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de226dce0c86 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de226dce0c86 .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de226dce0c86 .rb_textmodule_title {
				font-size: 30px;
			}

			.rb_textmodule_5de226dce0c86 .rb_textmodule_subtitle {
				font-size: 20px;
			}

			.rb_textmodule_5de226dce0c86 .rb_textmodule_title {
				margin-bottom: 20px;
				padding-bottom: 20px;
			}

			.rb_textmodule_5de226dce0c86 .rb_textmodule_button {
				margin-top: 35px;
			}
		}

		#rb_inner_row_5de226dce0dc5>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de226dce0dc5>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de226dce0dc5>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dce0f2f>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dce0f2f>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dce0f2f>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226dce0f2f>.wpb_column>.vc_column-inner {
				padding-bottom: 40px !important;
			}
		}

		#rb_pricing_plan_5de226dce10c1 {
			background-color: #ffffff;
		}

		#rb_pricing_plan_5de226dce10c1,
		#rb_pricing_plan_5de226dce10c1 h3 {
			color: #3e4a59;
		}

		#rb_pricing_plan_5de226dce10c1 h3:after {
			background-color: #5163dd;
		}

		#rb_pricing_plan_5de226dce10c1 .hightlight {
			background-color: #1ED2B4;
		}

		#rb_pricing_plan_5de226dce10c1 .pricing_plan_button {
			color: #242c34;
		}

		#rb_pricing_plan_5de226dce10c1 .pricing_plan_button {
			background-color: rgba(255, 255, 255, 0.01);
		}

		#rb_pricing_plan_5de226dce10c1 .pricing_plan_button {
			border-color: #5163dd;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			#rb_pricing_plan_5de226dce10c1 .pricing_plan_button:hover {
				color: #ffffff;
			}

			#rb_pricing_plan_5de226dce10c1 .pricing_plan_button:hover {
				background-color: #5163dd;
			}

			#rb_pricing_plan_5de226dce10c1 .pricing_plan_button:hover {
				border-color: #5163dd;
			}
		}

		#rb_column_5de226dce1251>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dce1251>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dce1251>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226dce1251>.wpb_column>.vc_column-inner {
				padding-bottom: 20px !important;
			}
		}

		#rb_pricing_plan_5de226dce1377 {
			background-color: #ffffff;
		}

		#rb_pricing_plan_5de226dce1377,
		#rb_pricing_plan_5de226dce1377 h3 {
			color: #ffffff;
		}

		#rb_pricing_plan_5de226dce1377 h3:after {
			background-color: #5163dd;
		}

		#rb_pricing_plan_5de226dce1377 .hightlight {
			background-color: #5163dd;
		}

		#rb_pricing_plan_5de226dce1377 .pricing_plan_button {
			color: #644bd1;
		}

		#rb_pricing_plan_5de226dce1377 .pricing_plan_button {
			background-color: #ffffff;
		}

		#rb_pricing_plan_5de226dce1377 .pricing_plan_button {
			border-color: #ffffff;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			#rb_pricing_plan_5de226dce1377 .pricing_plan_button:hover {
				color: #3e4a59;
			}

			#rb_pricing_plan_5de226dce1377 .pricing_plan_button:hover {
				background-color: #5163dd;
			}

			#rb_pricing_plan_5de226dce1377 .pricing_plan_button:hover {
				border-color: #5163dd;
			}
		}

		#rb_column_5de226dce16a5>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dce16a5>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dce16a5>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226dce16a5>.wpb_column>.vc_column-inner {
				padding-bottom: 40px !important;
			}
		}

		#rb_pricing_plan_5de226dce17c6 {
			background-color: #ffffff;
		}

		#rb_pricing_plan_5de226dce17c6,
		#rb_pricing_plan_5de226dce17c6 h3 {
			color: #3e4a59;
		}

		#rb_pricing_plan_5de226dce17c6 h3:after {
			background-color: #5163dd;
		}

		#rb_pricing_plan_5de226dce17c6 .hightlight {
			background-color: #1ED2B4;
		}

		#rb_pricing_plan_5de226dce17c6 .pricing_plan_button {
			color: #242c34;
		}

		#rb_pricing_plan_5de226dce17c6 .pricing_plan_button {
			background-color: #ffffff;
		}

		#rb_pricing_plan_5de226dce17c6 .pricing_plan_button {
			border-color: #5163dd;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			#rb_pricing_plan_5de226dce17c6 .pricing_plan_button:hover {
				color: #ffffff;
			}

			#rb_pricing_plan_5de226dce17c6 .pricing_plan_button:hover {
				background-color: #5163dd;
			}

			#rb_pricing_plan_5de226dce17c6 .pricing_plan_button:hover {
				border-color: #5163dd;
			}
		}

		#rb_column_5de226dce1901>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dce1901>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dce1901>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_pricing_plan_5de226dce1a22 {
			background-color: #ffffff;
		}

		#rb_pricing_plan_5de226dce1a22,
		#rb_pricing_plan_5de226dce1a22 h3 {
			color: #3e4a59;
		}

		#rb_pricing_plan_5de226dce1a22 h3:after {
			background-color: #5163dd;
		}

		#rb_pricing_plan_5de226dce1a22 .hightlight {
			background-color: #1ED2B4;
		}

		#rb_pricing_plan_5de226dce1a22 .pricing_plan_button {
			color: #242c34;
		}

		#rb_pricing_plan_5de226dce1a22 .pricing_plan_button {
			background-color: #ffffff;
		}

		#rb_pricing_plan_5de226dce1a22 .pricing_plan_button {
			border-color: #5163dd;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			#rb_pricing_plan_5de226dce1a22 .pricing_plan_button:hover {
				color: #ffffff;
			}

			#rb_pricing_plan_5de226dce1a22 .pricing_plan_button:hover {
				background-color: #5163dd;
			}

			#rb_pricing_plan_5de226dce1a22 .pricing_plan_button:hover {
				border-color: #5163dd;
			}
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

		.rb_content_5de226dce2528>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226dce2528>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226dce2528>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dce26d8>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dce26d8>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dce26d8>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_inner_row_5de226dce2863>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de226dce2863>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de226dce2863>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dce299d>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dce299d>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dce299d>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_logo_5de226dce2f4c {
			border-bottom-width: 1px !important;
			padding-bottom: 35px !important;
			border-bottom-color: #cccccc !important;
			border-bottom-style: solid !important;
		}

		#rb_logo_5de226dce2f4c {
			text-align: center;
		}

		#rb_inner_row_5de226dce300a>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de226dce300a>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de226dce300a>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dce3132>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dce3132>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dce3132>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_icon_list_5de226dce3261>a,
		#rb_icon_list_5de226dce3261>.mini-cart>a,
		#rb_icon_list_5de226dce3261 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a {
			color: #ffffff;
		}

		#rb_icon_list_5de226dce3261.header_icons>*~.mini-cart:not(:first-child) .woo_mini-count {
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

			#rb_icon_list_5de226dce3261>a:hover,
			#rb_icon_list_5de226dce3261>.mini-cart>a:hover,
			#rb_icon_list_5de226dce3261 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a:hover {
				color: #ffffff;
			}
		}

		@media screen and (max-width: 767px) {
			#rb_icon_list_5de226dce3261 {
				margin-bottom: 30px !important;
				;
			}

			#rb_icon_list_5de226dce3261 {
				text-align: center;
			}
		}

		#rb_column_5de226dce33d6>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dce33d6>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dce33d6>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de226dce350b {
			margin-bottom: 15px !important;
			;
		}

		.rb_textmodule_5de226dce350b {
			text-align: center;
		}

		.rb_textmodule_5de226dce350b .rb_textmodule_title,
		.rb_textmodule_5de226dce350b .rb_textmodule_button.simple {
			color: #ffffff;
		}

		.rb_textmodule_5de226dce350b .rb_textmodule_subtitle {
			color: #ffffff;
		}

		.rb_textmodule_5de226dce350b {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de226dce350b a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de226dce350b .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de226dce350b .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de226dce350b .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de226dce350b .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de226dce350b .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de226dce350b .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de226dce350b .rb_textmodule_title {
			font-size: 20px;
		}

		.rb_textmodule_5de226dce350b .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de226dce350b .rb_textmodule_title {
			margin-bottom: 20px;
			padding-bottom: 20px;
		}

		.rb_textmodule_5de226dce350b .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de226dce350b .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de226dce350b .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de226dce350b {
				text-align: center;
			}
		}

		#rb_column_5de226dce37a9>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dce37a9>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dce37a9>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de226dce3906 {
			margin-bottom: 0px !important;
			padding-bottom: 0px !important;
			;
		}

		.rb_textmodule_5de226dce3906 {
			text-align: right;
		}

		.rb_textmodule_5de226dce3906 .rb_textmodule_title,
		.rb_textmodule_5de226dce3906 .rb_textmodule_button.simple {
			color: #ffffff;
		}

		.rb_textmodule_5de226dce3906 .rb_textmodule_subtitle {
			color: #ffffff;
		}

		.rb_textmodule_5de226dce3906 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de226dce3906 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de226dce3906 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de226dce3906 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de226dce3906 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de226dce3906 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de226dce3906 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de226dce3906 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de226dce3906 .rb_textmodule_title {
			font-size: 20px;
		}

		.rb_textmodule_5de226dce3906 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de226dce3906 .rb_textmodule_title {
			margin-bottom: 0px;
			padding-bottom: 0px;
		}

		.rb_textmodule_5de226dce3906 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de226dce3906 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de226dce3906 .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de226dce3906 {
				margin-top: 30px !important;
				;
			}

			.rb_textmodule_5de226dce3906 {
				text-align: center;
			}
		}

		#rb_icon_list_5de226dce3a06 {
			margin-top: 25px !important;
			;
		}

		#rb_icon_list_5de226dce3a06 {
			text-align: right;
		}

		#rb_icon_list_5de226dce3a06 i:before {
			font-size: 17px;
		}

		#rb_icon_list_5de226dce3a06 .icon_wrapper svg {
			transform: scale(0.47);
		}

		#rb_icon_list_5de226dce3a06 .title {
			font-size: 16px;
		}

		#rb_icon_list_5de226dce3a06.direction_line>* {
			margin-right: 8px;
		}

		#rb_icon_list_5de226dce3a06.direction_column>*>* {
			margin-top: 8px;
		}

		#rb_icon_list_5de226dce3a06>a,
		#rb_icon_list_5de226dce3a06>.mini-cart>a,
		#rb_icon_list_5de226dce3a06 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a {
			color: #ffffff;
		}

		#rb_icon_list_5de226dce3a06.header_icons>*~.mini-cart:not(:first-child) .woo_mini-count {
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

			#rb_icon_list_5de226dce3a06>a:hover,
			#rb_icon_list_5de226dce3a06>.mini-cart>a:hover,
			#rb_icon_list_5de226dce3a06 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a:hover {
				color: #ffffff;
			}
		}

		@media screen and (max-width: 991px) {
			#rb_icon_list_5de226dce3a06 *:before {
				font-size: 20px;
			}

			#rb_icon_list_5de226dce3a06 .title {
				font-size: 16px;
			}

			#rb_icon_list_5de226dce3a06.direction_line>* {
				margin-right: 12px;
			}

			#rb_icon_list_5de226dce3a06.direction_column>*>* {
				margin-top: 12px;
			}
		}

		@media screen and (max-width: 767px) {
			#rb_icon_list_5de226dce3a06 {
				text-align: center;
			}
		}

		.rb_content_5de226dce3c43>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de226dce3c43>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de226dce3c43>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de226dce3dc9>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dce3dc9>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dce3dc9>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de226dce3dc9>.wpb_column>.vc_column-inner {
				margin-bottom: 30px !important;
			}
		}

		.rb_textmodule_5de226dce3f0a .rb_textmodule_title,
		.rb_textmodule_5de226dce3f0a .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de226dce3f0a .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de226dce3f0a {
			color: #ffffff;
		}

		.rb_footer_template .rb_textmodule_5de226dce3f0a a {
			color: #ffffff;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de226dce3f0a .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de226dce3f0a .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de226dce3f0a .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de226dce3f0a .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de226dce3f0a .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de226dce3f0a .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de226dce3f0a .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de226dce3f0a .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de226dce3f0a .rb_textmodule_title {
			margin-bottom: 20px;
			padding-bottom: 20px;
		}

		.rb_textmodule_5de226dce3f0a .rb_textmodule_content_wrapper {
			font-size: 16px;
		}

		.rb_textmodule_5de226dce3f0a .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de226dce3f0a .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de226dce3f0a {
				text-align: center;
			}
		}

		#rb_column_5de226dce4031>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de226dce4031>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de226dce4031>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de226dce4169 .rb_textmodule_title,
		.rb_textmodule_5de226dce4169 .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de226dce4169 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de226dce4169 {
			color: #ffffff;
		}

		.rb_footer_template .rb_textmodule_5de226dce4169 a {
			color: #ffffff;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de226dce4169 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de226dce4169 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de226dce4169 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de226dce4169 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de226dce4169 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de226dce4169 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de226dce4169 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de226dce4169 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de226dce4169 .rb_textmodule_title {
			margin-bottom: 20px;
			padding-bottom: 20px;
		}

		.rb_textmodule_5de226dce4169 .rb_textmodule_content_wrapper {
			font-size: 16px;
		}

		.rb_textmodule_5de226dce4169 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de226dce4169 .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de226dce4169 {
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
	<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js'></script>
	<!-- <script type='text/javascript'>
		/* <![CDATA[ */
		var woocommerce_params = {
			"ajax_url": "\/wp-admin\/admin-ajax.php",
			"wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
		};
		/* ]]> */
	</script> -->
	<!-- <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js'></script>
	<script type='text/javascript'>
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
	<!-- <script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js'></script> -->
	<script type='text/javascript' src='wp-content/plugins/rb-essentials/assets/js/rb-portfolio.js'></script>
	<script type='text/javascript' src='wp-includes/js/wp-embed.min.js'></script>
	<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js'></script>
	<script type='text/javascript' src='wp-content/plugins/wpforms-lite/assets/js/jquery.validate.min.js'></script>
	<script type='text/javascript' src='wp-content/plugins/wpforms-lite/assets/js/mailcheck.min.js'></script>

	<style>
		/* * {
			padding: 0;
			margin: 0;
			list-style: none;
			text-decoration: none;
		}

		body {
			font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
			padding: 25px;
		} */

		.popup-container {
			display: inline-block;
		}

		.popup-container .popup-button {
			background: #333;
			line-height: 34px;
			color: #fff;
			padding: 0 20px;
			border-radius: 3px;
			display: block;
			cursor: pointer;
		}

		.popup-container .popup-button:hover {
			background: #444;
		}

		.popup-container .popup {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: rgba(0, 0, 0, 0.7);
			z-index: 10;
			opacity: 0;
			visibility: hidden;
			transition: 250ms all;
		}

		.popup-container .popup .popup-inner {
			width: 400px;
			box-sizing: border-box;
			padding: 20px;
			background: #fff;
			position: absolute;
			left: 50%;
			transform: translate(-50%, -50%);
			top: 150%;
			transition: 250ms all;
		}

		.popup-container .popup .popup-inner .popup-title {
			display: flex;
			justify-content: space-between;
			align-items: center;
			margin-bottom: 20px;
		}

		.popup-container .popup .popup-inner .popup-title h6 {
			font-size: 18px;
			font-weight: 500;
		}

		.popup-container .popup .popup-inner .popup-title .popup-close-btn {
			cursor: pointer;
			background: #eee;
			display: block;
			line-height: 30px;
			padding: 0 15px;
			font-size: 14px;
			color: #222;
			border-radius: 3px;
		}

		.popup-container .popup .popup-inner .popup-content input {
			width: 100%;
			border: 1px solid #ddd;
			border-radius: 3px;
			line-height: 34px;
			padding: 0 15px;
			font-size: 14px;
			box-sizing: border-box;
			margin-bottom: 10px;
		}

		.popup-container .popup .popup-inner .popup-content button {
			width: 100%;
			line-height: 34px;
			background: #666;
			color: #fff;
			cursor: pointer;
			border-radius: 3px;
			border: none;
			font-size: 14px;
		}

		.popup-container .popup .popup-inner .popup-content button:hover {
			background: #444;
		}

		.popup-container .popup .transparent-label {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			z-index: -1;
			cursor: pointer;
		}

		.popup-container>input {
			display: none;
		}

		.popup-container>input:checked+.popup {
			opacity: 1;
			visibility: visible;
		}

		.popup-container>input:checked+.popup .popup-inner {
			top: 50%;
		}
	</style>
	<div class="popup-container">
		<label class="popup-button" for="order-form"></label>
		<input type="checkbox" id="order-form">
		<div class="popup">
			<label for="order-form" class="transparent-label"></label>
			<div class="popup-inner">
				<div class="popup-title">
					<h6>Order Form</h6>
					<label for="order-form" class="popup-close-btn">Close</label>
				</div>
				<div class="popup-content">
					<form id="myOrderForm" action="business/functions.php" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
						<div class="form-group">
							<label for="txtservice">Service</label>
							<input type="text" class="form-control" id="txtservice" name="txtservice" placeholder="Selected Service" readonly>
						</div>
						<div class="form-group">
							<label for="upDescription">Description File</label><!-- <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label> -->
							<input type="file" class="form-control" id="upDescription" name="upDescription" placeholder="Please Provide Description File" required>
							<input type="hidden" id="action" name="action" value="AddToCart">
							<input type="hidden" id="Service_ID" name="Service_ID">
							<input type="hidden" id="Service_Name" name="Service_Name">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-success btn-default" value="submit">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script>
		//jQuery(".popup-container").hide();
		function ShowOrderForm(eve, serviceid, servicename){
			jQuery("#Service_ID").val(serviceid);
			jQuery("#Service_Name").val(servicename);
			jQuery("#Service_ID").attr('value', serviceid);
			jQuery("#Service_Name").attr('value', servicename);
			jQuery("#txtservice").val(servicename);
			jQuery(".popup-button").click();
		}

		function validateForm() {
			if (document.getElementById("upDescription").files.length == 0) {
				alert("Description File Is Required");
				return false;
			}
		}
	</script>
</body>

</html>