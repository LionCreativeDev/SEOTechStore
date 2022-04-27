<?php
//echo date('m-yy-d h:i:sa').'</br>';// time();
//echo date('d-M-yy h:i:sa').'</br>';// time();
//exit();
session_start();
?>
<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<title>SEO-Tech-Store Home</title>
	<meta name='robots' content='noindex,nofollow' />

	<?php
	$page = strtolower(basename($_SERVER['PHP_SELF']));
	//echo $page;
	if($page === "seo.php" || $page === "content-writing.php" || $page === "graphics-designing.php")
	{
		//is a service and have to fetch meta for the service
		if(strstr($_SERVER['REQUEST_URI'], "sub-category")) {
			include_once('business/DB.php');

			$querystring = mysqli_real_escape_string($conn, urlencode($_GET["sub-category"]));
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
		$page = mysqli_real_escape_string($conn, urlencode($page));
		
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
	<link rel='stylesheet' id='siteground-optimizer-combined-styles-header-css' href='wp-content/uploads/siteground-optimizer-assets/siteground-optimizer-combined-styles-d67bc5d3870f0efe5478bdd6fe1ae182.css' type='text/css' media='all' />
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

		.vc_custom_1561624790555 {
			padding-bottom: 125px !important;
			background-image: url(wp-content/uploads/2019/05/1920x1195_01.png?id=392) !important;
		}

		.vc_custom_1561624790562 {
			padding-bottom: 50px !important;
		}

		.vc_custom_1571290830329 {
			padding-top: 90px !important;
			padding-bottom: 140px !important;
			background-color: #3148da !important;
		}

		.vc_custom_1571290830335 {
			padding-bottom: 50px !important;
		}

		.vc_custom_1570532712649 {
			padding-top: 50px !important;
			padding-bottom: 110px !important;
			background-color: #eeeffa !important;
		}

		.vc_custom_1571662265638 {
			padding-top: 90px !important;
			padding-bottom: 80px !important;
			background-image: url(wp-content/uploads/2019/05/bg_690.png?id=406) !important;
		}

		.vc_custom_1571662265646 {
			padding-top: 0px !important;
		}

		.vc_custom_1570532854626 {
			padding-top: 165px !important;
			padding-bottom: 143px !important;
			background-image: url(wp-content/uploads/2019/05/bg_600-1.png?id=414) !important;
		}

		.vc_custom_1570532854634 {
			padding-top: 50px !important;
		}

		.vc_custom_1571292354953 {
			padding-top: 90px !important;
			padding-bottom: 100px !important;
			background-image: url(wp-content/uploads/2019/10/04_5.png?id=3922) !important;
		}

		.vc_custom_1561625202975 {
			padding-top: 90px !important;
			padding-bottom: 120px !important;
		}

		.vc_custom_1561625202980 {
			padding-bottom: 50px !important;
		}

		.vc_custom_1561528410038 {
			margin-bottom: -100px !important;
			padding-top: 90px !important;
			padding-bottom: 100px !important;
			background-color: #eeeffa !important;
		}

		.vc_custom_1560338354751 {
			margin-top: -50px !important;
		}

		.vc_custom_1561624738861 {
			padding-top: 50px !important;
		}

		.vc_custom_1562659489884 {
			padding-top: 90px !important;
		}

		.vc_custom_1562659489889 {
			padding-bottom: 40px !important;
		}

		.vc_custom_1562659520099 {
			padding-top: 90px !important;
		}

		.vc_custom_1571289772666 {
			padding-top: 60px !important;
			padding-right: 50px !important;
			padding-bottom: 60px !important;
			padding-left: 50px !important;
		}

		.vc_custom_1571289772677 {
			padding-top: 50px !important;
			padding-right: 30px !important;
			padding-bottom: 50px !important;
			padding-left: 30px !important;
		}

		.vc_custom_1571289792746 {
			padding-top: 60px !important;
			padding-right: 50px !important;
			padding-bottom: 60px !important;
			padding-left: 50px !important;
		}

		.vc_custom_1571289792771 {
			padding-top: 50px !important;
			padding-right: 30px !important;
			padding-bottom: 50px !important;
			padding-left: 30px !important;
		}

		.vc_custom_1571289809051 {
			padding-top: 60px !important;
			padding-right: 50px !important;
			padding-bottom: 60px !important;
			padding-left: 50px !important;
		}

		.vc_custom_1571289809062 {
			padding-top: 50px !important;
			padding-right: 30px !important;
			padding-bottom: 50px !important;
			padding-left: 30px !important;
		}

		.vc_custom_1562662573210 {
			padding-top: 50px !important;
		}

		.vc_custom_1562662573212 {
			padding-top: 100px !important;
		}

		.vc_custom_1562662587214 {
			padding-top: 40px !important;
		}

		.vc_custom_1571291824742 {
			padding-bottom: 20px !important;
		}

		.vc_custom_1557493526313 {
			padding-top: 53px !important;
		}

		.vc_custom_1562740768596 {
			padding-bottom: 20px !important;
		}

		.vc_custom_1562740784077 {
			padding-bottom: 20px !important;
		}

		.vc_custom_1571913807926 {
			border-top-width: 1px !important;
			border-right-width: 1px !important;
			border-bottom-width: 1px !important;
			border-left-width: 1px !important;
			padding-top: 30px !important;
			padding-right: 70px !important;
			padding-bottom: 30px !important;
			padding-left: 30px !important;
			border-left-color: #6677e4 !important;
			border-left-style: solid !important;
			border-right-color: #6677e4 !important;
			border-right-style: solid !important;
			border-top-color: #6677e4 !important;
			border-top-style: solid !important;
			border-bottom-color: #6677e4 !important;
			border-bottom-style: solid !important;
			border-radius: 10px !important;
		}

		.vc_custom_1571913807935 {
			padding-right: 30px !important;
			padding-left: 30px !important;
		}

		.vc_custom_1571662176587 {
			border-top-width: 1px !important;
			border-right-width: 1px !important;
			border-bottom-width: 1px !important;
			border-left-width: 1px !important;
			padding-top: 30px !important;
			padding-right: 70px !important;
			padding-bottom: 30px !important;
			padding-left: 30px !important;
			border-left-color: #6677e4 !important;
			border-left-style: solid !important;
			border-right-color: #6677e4 !important;
			border-right-style: solid !important;
			border-top-color: #6677e4 !important;
			border-top-style: solid !important;
			border-bottom-color: #6677e4 !important;
			border-bottom-style: solid !important;
			border-radius: 10px !important;
		}

		.vc_custom_1571662176604 {
			padding-right: 30px !important;
			padding-left: 30px !important;
		}

		.vc_custom_1571662200042 {
			border-top-width: 1px !important;
			border-right-width: 1px !important;
			border-bottom-width: 1px !important;
			border-left-width: 1px !important;
			padding-top: 30px !important;
			padding-right: 70px !important;
			padding-bottom: 30px !important;
			padding-left: 30px !important;
			border-left-color: #6677e4 !important;
			border-left-style: solid !important;
			border-right-color: #6677e4 !important;
			border-right-style: solid !important;
			border-top-color: #6677e4 !important;
			border-top-style: solid !important;
			border-bottom-color: #6677e4 !important;
			border-bottom-style: solid !important;
			border-radius: 10px !important;
		}

		.vc_custom_1571662200054 {
			padding-right: 30px !important;
			padding-left: 30px !important;
		}

		.vc_custom_1562740775302 {
			padding-bottom: 20px !important;
		}

		.vc_custom_1562740790725 {
			padding-bottom: 20px !important;
		}

		.vc_custom_1571662165930 {
			border-top-width: 1px !important;
			border-right-width: 1px !important;
			border-bottom-width: 1px !important;
			border-left-width: 1px !important;
			padding-top: 30px !important;
			padding-right: 70px !important;
			padding-bottom: 30px !important;
			padding-left: 30px !important;
			border-left-color: #6677e4 !important;
			border-left-style: solid !important;
			border-right-color: #6677e4 !important;
			border-right-style: solid !important;
			border-top-color: #6677e4 !important;
			border-top-style: solid !important;
			border-bottom-color: #6677e4 !important;
			border-bottom-style: solid !important;
			border-radius: 10px !important;
		}

		.vc_custom_1571662165947 {
			padding-right: 30px !important;
			padding-left: 30px !important;
		}

		.vc_custom_1571662187364 {
			border-top-width: 1px !important;
			border-right-width: 1px !important;
			border-bottom-width: 1px !important;
			border-left-width: 1px !important;
			padding-top: 30px !important;
			padding-right: 70px !important;
			padding-bottom: 30px !important;
			padding-left: 30px !important;
			border-left-color: #6677e4 !important;
			border-left-style: solid !important;
			border-right-color: #6677e4 !important;
			border-right-style: solid !important;
			border-top-color: #6677e4 !important;
			border-top-style: solid !important;
			border-bottom-color: #6677e4 !important;
			border-bottom-style: solid !important;
			border-radius: 10px !important;
		}

		.vc_custom_1571662187373 {
			padding-right: 30px !important;
			padding-left: 30px !important;
		}

		.vc_custom_1571662211075 {
			border-top-width: 1px !important;
			border-right-width: 1px !important;
			border-bottom-width: 1px !important;
			border-left-width: 1px !important;
			padding-top: 30px !important;
			padding-right: 70px !important;
			padding-bottom: 30px !important;
			padding-left: 30px !important;
			border-left-color: #6677e4 !important;
			border-left-style: solid !important;
			border-right-color: #6677e4 !important;
			border-right-style: solid !important;
			border-top-color: #6677e4 !important;
			border-top-style: solid !important;
			border-bottom-color: #6677e4 !important;
			border-bottom-style: solid !important;
			border-radius: 10px !important;
		}

		.vc_custom_1571662211103 {
			padding-right: 30px !important;
			padding-left: 30px !important;
		}

		.vc_custom_1562659774978 {
			padding-top: 120px !important;
		}

		.vc_custom_1562659788029 {
			padding-top: 70px !important;
		}

		.vc_custom_1571646759627 {
			margin-bottom: 20px !important;
		}

		.vc_custom_1562659824890 {
			padding-top: 70px !important;
		}

		.vc_custom_1562659810109 {
			padding-top: 50px !important;
		}

		.vc_custom_1562659810110 {
			padding-top: 150px !important;
		}

		.vc_custom_1571292079967 {
			padding-right: 80px !important;
		}

		.vc_custom_1571292079980 {
			padding-right: 15px !important;
			padding-left: 15px !important;
		}

		.vc_custom_1562740855944 {
			padding-top: 120px !important;
		}

		.vc_custom_1571292148315 {
			padding-right: 80px !important;
		}

		.vc_custom_1571292148324 {
			padding-right: 15px !important;
			padding-left: 15px !important;
		}

		.vc_custom_1557734254984 {
			padding-right: 0px !important;
			padding-left: 0px !important;
		}

		.vc_custom_1557734260168 {
			padding-right: 0px !important;
			padding-left: 0px !important;
		}

		.vc_custom_1557734265448 {
			padding-right: 0px !important;
			padding-left: 0px !important;
		}

		.vc_custom_1561535591583 {
			border-right-width: 1px !important;
			border-bottom-width: 1px !important;
			padding-bottom: 55px !important;
			border-right-color: #d8dbde !important;
			border-right-style: solid !important;
			border-bottom-color: #d8dbde !important;
			border-bottom-style: solid !important;
		}

		.vc_custom_1561535598509 {
			border-right-width: 1px !important;
			padding-top: 40px !important;
			border-right-color: #d8dbde !important;
			border-right-style: solid !important;
		}

		.vc_custom_1561535550261 {
			border-right-width: 1px !important;
			border-bottom-width: 1px !important;
			padding-bottom: 55px !important;
			border-right-color: #d8dbde !important;
			border-right-style: solid !important;
			border-bottom-color: #d8dbde !important;
			border-bottom-style: solid !important;
		}

		.vc_custom_1561535581141 {
			border-right-width: 1px !important;
			padding-top: 40px !important;
			border-right-color: #d8dbde !important;
			border-right-style: solid !important;
		}

		.vc_custom_1561535608055 {
			border-bottom-width: 1px !important;
			padding-bottom: 55px !important;
			border-bottom-color: #d8dbde !important;
			border-bottom-style: solid !important;
		}

		.vc_custom_1561535615271 {
			padding-top: 40px !important;
		}

		.vc_custom_1562740876101 {
			padding-right: 140px !important;
		}

		.vc_custom_1562740876105 {
			padding-right: 50px !important;
			padding-left: 50px !important;
		}

		.vc_custom_1557736548729 {
			padding-top: 50px !important;
		}

		.vc_custom_1562660003123 {
			padding-bottom: 40px !important;
		}

		.vc_custom_1562660017133 {
			padding-bottom: 20px !important;
		}

		.vc_custom_1562660030816 {
			padding-bottom: 40px !important;
		}

		.vc_custom_1571292668613 {
			padding-top: 20px !important;
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

<body class="page-template-default page page-id-373 theme-seoes woocommerce-no-js wpb-js-composer js-comp-ver-6.0.5 vc_responsive" data-boxed="false" data-default="false" itemscope="itemscope" itemtype="http://schema.org/WebPage">

	<div class="rb-blank-preloader"></div>
	<div class="body-overlay"></div>


	<div id="site" class="site wrap desktop-menu-desktop">

		<div class="rb_sticky_template">
			<div class="container">
				<div id="rb_content_5de2257c921fd" class="rb_content_5de2257c921fd rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="true" class="vc_row wpb_row vc_row-fluid vc_custom_1562326619547 vc_row-has-fill vc_row-o-content-middle vc_row-flex" style="position: relative; left: -74.5px; box-sizing: border-box; width: 1349px; padding-left: 74.5px; padding-right: 74.5px;">
						<div class="row_hover_effect"></div>
						<div id="rb_column_5de2257c926c4" class="rb_column_wrapper vc_col-sm-3 ">
							<div class="wpb_column vc_column_container vc_col-sm-2">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id="rb_logo_5de2257c92992" class="site_logotype"><a href="index.php"><img src="wp-content/uploads/2019/06/logo@2x.png" alt="some-alt" style="width:125px;"></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row_hover_effect"></div>
						<div id="rb_column_5de2257c92a24" class="rb_column_wrapper vc_col-sm-8 ">
							<div class="wpb_column vc_column_container vc_col-sm-7">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id="rb_menu_5de2257c92bd5" class="menu-main-container header_menu rb_menu_module" style="pointer-events: auto;">
											<?php include 'Business/Navigation.php' ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row_hover_effect"></div>
						<div id="rb_column_5de2257c993b5" class="rb_column_wrapper vc_col-sm-1 ">
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
					<img src="wp-content/uploads/2019/06/logo@2x.png" alt="some-alt" width="111"> </a>
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
		<div class="rb_header_template absolute_pos">
			<div class="container">
				<div id="rb_content_5de2257c9a11f" class="rb_content_5de2257c9a11f rb-content background_no_hover">
					<div class="vc_row wpb_row vc_row-fluid vc_row-o-content-middle vc_row-flex">
						<div class="row_hover_effect"></div>
						<div id="rb_column_5de2257c9a2a0" class="rb_column_wrapper vc_col-sm-3 ">
							<div class="wpb_column vc_column_container vc_col-sm-2">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id="rb_logo_5de2257c9a405" class="site_logotype"><a href="index.php"><img src="wp-content/uploads/2019/06/logo@2x.png" alt="some-alt" style="width:187px;"></a></div>
									</div>
								</div>
							</div>
						</div>
						<div class="row_hover_effect"></div>
						<div id="rb_column_5de2257c9a492" class="rb_column_wrapper vc_col-sm-8 ">
							<div class="wpb_column vc_column_container vc_col-sm-8">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id="rb_menu_5de2257c9a603" class="menu-main-container header_menu rb_menu_module" style="pointer-events: auto;">
											<?php include 'Business/Navigation.php' ?>
											<script>
												jQuery("#rb_menu_5de2257c9a603 ul li a[href=#], #rb_menu_5de2257c9a603 ul li a[href='about-us.php'], #rb_menu_5de2257c9a603 ul li a[href='contacts.php']").css({
													"color": "white"
												});
											</script>
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
																		<i class="flaticon-user" style="color:white;"></i>
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
																				<i class="woo_mini-count" style="color:white;">
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
								<img src="wp-content/uploads/2019/06/logo@2x.png" alt="some-alt" width="111"> </a>
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
							<img src="wp-content/uploads/2019/06/logo@2x.png" alt="some-alt" width="179"> </a>
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

							<h3 class="success-search">Your search for: "" revealed the following:</h3>

							<div class="label">
								<span class="screen-reader-text">Search...</span>
								<input type="search" class="search-field" value="" name="s" placeholder="Search...">
								<button type="submit" class="search-submit">
									<span class="page-submit">SEARCH</span>
								</button>
							</div>
						</form>
					</div> -->
				</div>
			</div>
		</div>
		<!-- \#site-header-mobile -->

		<div class="rb_rev_slider container">

			<!-- START StartUp REVOLUTION SLIDER 6.1.3 -->
			<p class="rs-p-wp-fix"></p>
			<rs-module-wrap id="rev_slider_7_1_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
				<rs-module id="rev_slider_7_1" style="display:none;" data-version="6.1.3">
					<rs-slides>
						<rs-slide data-key="rs-17" data-title="Intro" data-thumb="wp-content/uploads/revslider/starz_02-100x50.png" data-anim="ei:d;eo:d;s:500;r:0;t:fade;sl:7;" data-firstanim="t:fade;s:1000;sl:7;">
							<img src="wp-content/uploads/revslider/starz_02.png" alt="SeoEs" title="starz_02.png" width="1920" height="848" data-bg="p:center top;" data-parallax="off" data-panzoom="d:20000;e:Power1.easeOut;ss:100;se:105;" class="rev-slidebg" data-no-retina>
							<!--
							-->
							<rs-layer id="slider-7-slide-17-layer-1" class="Restaurant-Display" data-type="text" data-color="#3e4a59||#3e4a59||#000000||#ffffff" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:35px,35px,0,0;y:m;yo:-30px,-155px,-127px,-60px;" data-text="w:normal;s:50,50,60,40;l:55,55,65,55;ls:0px,0px,0px,0;fw:700;a:left,left,center,center;" data-dim="w:459px,459px,554px,380px;h:168px,168px,auto,auto;" data-frame_0="y:100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:400;sp:1000;sR:400;" data-frame_1_mask="u:t;" data-frame_999="o:0;tp:600;e:nothing;st:w;sp:500;sR:7600;" style="z-index:11;font-family:Open Sans;">With Deep Roots In Paid Media And Technical SEO</rs-layer>
							<!--

							-->
							<rs-layer id="slider-7-slide-17-layer-7" data-type="text" data-color="#3e4a59||#000000||#000000||#ffffff" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:35px,35px,0,0;y:m;yo:122px,-30px,46px,80px;" data-text="w:normal;s:17,18,18,18;l:26;a:left,inherit,center,center;" data-dim="w:478px,414px,422px,394px;h:54px,54px,53px,auto;" data-frame_0="x:100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:640;sp:1500;sR:640;" data-frame_1_mask="u:t;" data-frame_999="o:0;tp:600;e:nothing;st:w;sp:500;sR:6860;" style="z-index:5;font-family:Nunito Sans;">Our knowledgeable team combines experience and patented technology
							</rs-layer>
							<!--

							-->
							<rs-layer id="slider-7-slide-17-layer-11" class="rev-btn" data-type="button" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:35px,35px,0,-90px;y:m;yo:220px,70px,133px,64px;" data-text="w:nowrap,nowrap,nowrap,normal;s:18,18,16,14;l:18,18,16,14;fw:900,900,400,700;a:inherit;" data-dim="w:auto,auto,auto,138px;h:auto,auto,auto,37px;" data-vbility="t,t,t,f" data-padding="t:20,20,15,10;r:55,55,40,30;b:20,20,15,10;l:55,55,40,30;" data-border="bos:solid;boc:#5163dd;bow:1px,1px,1px,1px;bor:50px,50px,50px,50px;" data-frame_0="tp:600;" data-frame_1="tp:600;st:940;sp:1500;sR:940;" data-frame_999="o:0;tp:600;st:w;sp:500;sR:6560;" data-frame_hover="c:#242c34;bgc:rgba(255,255,255,0.1);boc:#5163dd;bor:50px,50px,50px,50px;bos:solid;bow:1px,1px,1px,1px;oX:50;oY:50;sp:200;" style="z-index:13;background-color:#5163dd;font-family:Nunito Sans;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">Talk To Us
							</rs-layer>
							<!--

							-->
							<rs-layer id="slider-7-slide-17-layer-13" data-type="image" data-rsp_ch="on" data-xy="xo:664px;yo:-158px,-153px,-153px,-153px;" data-text="l:22;a:inherit;" data-dim="w:['948px','948px','948px','948px'];h:['736px','736px','736px','736px'];" data-vbility="t,t,f,f" data-frame_0="tp:600;" data-frame_1="tp:600;st:400;sp:2500;sR:400;" data-frame_999="o:0;tp:600;st:w;sp:500;sR:6100;" style="z-index:8;font-family:Roboto;"><img src="wp-content/uploads/revslider/Asset-2@2x-1.png" alt="SeoEs" width="948" height="736" data-no-retina>
							</rs-layer>
							<!--

							-->
							<rs-layer id="slider-7-slide-17-layer-14" data-type="image" data-rsp_ch="on" data-xy="x:c;xo:530px,422px,530px,530px;y:m;yo:0,-49px,-49px,-49px;" data-text="l:22;a:inherit;" data-dim="w:['322px','322px','322px','322px'];h:['579px','579px','579px','579px'];" data-vbility="t,t,f,f" data-frame_0="y:175%;tp:600;" data-frame_1="tp:600;e:Power2.easeInOut;st:690;sp:1200;sR:690;" data-frame_999="y:-100%;o:0;tp:600;e:nothing;st:w;sp:500;sR:7110;" style="z-index:10;font-family:Roboto;"><img src="wp-content/uploads/revslider/Asset-3@2x-1.png" alt="SeoEs" width="322" height="579" data-no-retina>
							</rs-layer>
							<!--

							-->
							<rs-layer id="slider-7-slide-17-layer-18" data-type="image" data-rsp_ch="on" data-xy="x:c;xo:516px,410px,516px,516px;y:m;yo:-173px,-222px,-222px,-222px;" data-text="l:22;a:inherit;" data-dim="w:['279px','279px','279px','279px'];h:['279px','279px','279px','279px'];" data-vbility="t,t,f,f" data-frame_0="tp:600;" data-frame_1="tp:600;st:1160;sp:720;sR:1160;" data-frame_999="o:0;tp:600;st:w;sR:7120;" style="z-index:9;font-family:Roboto;"><img src="wp-content/uploads/revslider/Asset-5-1.png" alt="SeoEs" width="279" height="279" data-no-retina>
							</rs-layer>
							<!--

							-->
							<rs-layer id="slider-7-slide-17-layer-22" data-type="image" data-rsp_ch="on" data-xy="x:r,r,c,c;xo:-825px,-825px,0,0;" data-text="l:22;a:inherit;" data-dim="w:['1835px','1835px','1835px','1835px'];h:['848px','848px','848px','848px'];" data-frame_0="tp:600;" data-frame_1="tp:600;st:200;sp:1480;sR:200;" data-frame_999="o:0;tp:600;st:w;sp:490;sR:7320;" style="z-index:5;font-family:Roboto;"><img src="wp-content/uploads/2019/10/bg_1835x848.png" alt="some-alt" width="1835" height="848" data-no-retina>
							</rs-layer>
							<!--
-->
						</rs-slide>
						<rs-slide data-key="rs-18" data-title="Intro" data-thumb="wp-content/uploads/revslider/starz_02-100x50.png" data-anim="ei:d;eo:d;s:500;r:0;t:fade;sl:7;">
							<img src="wp-content/uploads/revslider/starz_02.png" alt="SeoEs" title="starz_02.png" width="1920" height="848" data-bg="p:center top;" data-parallax="off" data-panzoom="d:20000;e:Power1.easeOut;ss:100;se:105;" class="rev-slidebg" data-no-retina>
							<!--
							-->
							<rs-layer id="slider-7-slide-18-layer-1" class="Restaurant-Display" data-type="text" data-color="#3e4a59||#3e4a59||#000000||#ffffff" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:35px,35px,0,0;y:m;yo:-30px,-155px,-127px,-60px;" data-text="w:normal;s:50,50,60,40;l:55,55,65,47;ls:0px,0px,0px,0;fw:700;a:left,left,center,center;" data-dim="w:513px,508px,554px,419px;h:169px,169px,auto,auto;" data-frame_0="y:100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:400;sp:1000;sR:400;" data-frame_1_mask="u:t;" data-frame_999="o:0;tp:600;e:nothing;st:w;sp:500;sR:7600;" style="z-index:7;font-family:Open Sans;">Better Results With A Data-Driven Strategy
							</rs-layer>
							<!--

							-->
							<rs-layer id="slider-7-slide-18-layer-7" data-type="text" data-color="#3e4a59||#000000||#000000||#ffffff" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:35px,35px,0,0;y:m;yo:122px,-30px,46px,80px;" data-text="w:normal;s:17,18,18,18;l:26;a:left,inherit,center,center;" data-dim="w:478px,414px,422px,394px;h:54px,54px,53px,auto;" data-vbility="t,t,t,f" data-frame_0="x:100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:640;sp:1500;sR:640;" data-frame_1_mask="u:t;" data-frame_999="o:0;tp:600;e:nothing;st:w;sp:500;sR:6860;" style="z-index:8;font-family:Nunito Sans;">When it comes to search, there are a lot of factors that are outside of your control
							</rs-layer>
							<!--

							-->
							<rs-layer id="slider-7-slide-18-layer-11" class="rev-btn" data-type="button" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:35px,35px,0,-90px;y:m;yo:220px,70px,133px,64px;" data-text="w:nowrap,nowrap,nowrap,normal;s:18,18,16,14;l:18,18,16,14;fw:900,900,400,700;a:inherit;" data-dim="w:auto,auto,auto,138px;h:auto,auto,auto,37px;" data-vbility="t,t,t,f" data-padding="t:20,20,15,10;r:55,55,40,30;b:20,20,15,10;l:55,55,40,30;" data-border="bos:solid;boc:#5163dd;bow:1px,1px,1px,1px;bor:50px,50px,50px,50px;" data-frame_0="tp:600;" data-frame_1="tp:600;st:940;sp:1500;sR:940;" data-frame_999="o:0;tp:600;st:w;sp:500;sR:6560;" data-frame_hover="c:#242c34;bgc:rgba(255,255,255,0.1);boc:#5163dd;bor:50px,50px,50px,50px;bos:solid;bow:1px,1px,1px,1px;oX:50;oY:50;sp:200;" style="z-index:9;background-color:#5163dd;font-family:Nunito Sans;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">Talk To Us
							</rs-layer>
							<!--

							-->
							<rs-layer id="slider-7-slide-18-layer-13" class="rs-pxl-1" data-type="image" data-rsp_ch="on" data-xy="xo:850px,637px,664px,664px;yo:157px,157px,-153px,-153px;" data-text="l:22;a:inherit;" data-dim="w:610px,610px,948px,948px;h:499px,473px,736px,736px;" data-vbility="t,t,f,f" data-frame_0="tp:600;" data-frame_1="tp:600;st:400;sp:2500;sR:400;" data-frame_999="o:0;tp:600;st:w;sp:500;sR:6100;" style="z-index:6;font-family:Roboto;"><img src="wp-content/uploads/revslider/el_01.png" alt="SeoEs" width="622" height="509" data-no-retina>
							</rs-layer>
							<!--

							-->
							<rs-layer id="slider-7-slide-18-layer-20" class="rs-pxl-1" data-type="image" data-rsp_ch="on" data-xy="x:r;xo:21px;yo:102px;" data-text="l:22;a:inherit;" data-dim="w:['140px','140px','140px','140px'];h:['161px','161px','161px','161px'];" data-vbility="t,t,f,f" data-frame_0="y:-175%;tp:600;" data-frame_1="tp:600;st:940;sp:1500;sR:940;" data-frame_999="o:0;tp:600;st:w;sR:6560;" style="z-index:10;font-family:Roboto;"><img src="wp-content/uploads/revslider/el_04.png" alt="SeoEs" width="140" height="161" data-no-retina>
							</rs-layer>
							<!--

							-->
							<rs-layer id="slider-7-slide-18-layer-21" class="rs-pxl-2" data-type="image" data-rsp_ch="on" data-xy="x:r;xo:-148px;yo:251px;" data-text="l:22;a:inherit;" data-dim="w:['98px','98px','98px','98px'];h:['84px','84px','84px','84px'];" data-vbility="t,t,f,f" data-frame_0="y:175%;tp:600;" data-frame_1="tp:600;e:Power2.easeInOut;st:1080;sp:1500;sR:1080;" data-frame_999="x:100%;y:-175%;o:0;tp:600;st:w;sp:1000;sR:6420;" style="z-index:11;font-family:Roboto;"><img src="wp-content/uploads/revslider/el_03.png" alt="SeoEs" width="98" height="84" data-no-retina>
							</rs-layer>
							<!--

							-->
							<rs-layer id="slider-7-slide-18-layer-22" data-type="image" data-rsp_ch="on" data-xy="x:r;xo:278px;yo:241px;" data-text="l:22;a:inherit;" data-dim="w:['86px','86px','86px','86px'];h:['86px','86px','86px','86px'];" data-vbility="t,t,f,f" data-frame_0="x:-100%;y:100%;tp:600;" data-frame_1="tp:600;st:940;sp:1500;sR:940;" data-frame_999="o:0;tp:600;st:w;sR:6560;" style="z-index:5;font-family:Roboto;"><img src="wp-content/uploads/revslider/el_02.png" alt="SeoEs" width="86" height="86" data-no-retina>
							</rs-layer>
							<!--

							-->
							<rs-layer id="slider-7-slide-18-layer-24" data-type="image" data-rsp_ch="on" data-xy="x:r,r,c,c;xo:-819px,-819px,0,0;" data-text="l:22;a:inherit;" data-dim="w:['1835px','1835px','1835px','1835px'];h:['848px','848px','848px','848px'];" data-frame_0="tp:600;" data-frame_1="tp:600;st:200;sp:1480;sR:200;" data-frame_999="o:0;tp:600;st:w;sp:500;sR:7320;" style="z-index:5;font-family:Roboto;"><img src="wp-content/uploads/revslider/bg_1835x848_2.png" alt="SeoEs" width="1835" height="848" data-no-retina>
							</rs-layer>
							<!--
-->
						</rs-slide>
						<rs-slide data-key="rs-19" data-title="Intro" data-thumb="wp-content/uploads/revslider/starz_02-100x50.png" data-anim="ei:d;eo:d;s:500;r:0;t:fade;sl:7;">
							<img src="wp-content/uploads/revslider/starz_02.png" alt="SeoEs" title="starz_02.png" width="1920" height="848" data-bg="p:center top;" data-parallax="off" data-panzoom="d:20000;e:Power1.easeOut;ss:100;se:105;" class="rev-slidebg" data-no-retina>
							<!--
							-->
							<rs-layer id="slider-7-slide-19-layer-1" class="Restaurant-Display" data-type="text" data-color="#3e4a59||#3e4a59||#000000||#ffffff" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:35px,35px,1px,0;y:m;yo:-30px,-155px,-128px,-60px;" data-text="w:normal;s:50,50,60,40;l:55,55,65,47;ls:0px,0px,0px,0;fw:700;a:left,left,center,center;" data-dim="w:513px,513px,622px,424px;h:169px,169px,211px,auto;" data-frame_0="y:100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:400;sp:1000;sR:400;" data-frame_1_mask="u:t;" data-frame_999="o:0;tp:600;e:nothing;st:w;sp:500;sR:7600;" style="z-index:10;font-family:Open Sans;">Internet Marketing Agency Leading Your Business In The Right Direction
							</rs-layer>
							<!--

							-->
							<rs-layer id="slider-7-slide-19-layer-7" data-type="text" data-color="#3e4a59||#000000||#000000||#ffffff" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:35px,35px,0,0;y:m;yo:122px,-30px,46px,80px;" data-text="w:normal;s:17,18,18,18;l:26;a:left,inherit,center,center;" data-dim="w:478px,414px,422px,394px;h:54px,54px,53px,auto;" data-frame_0="x:100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:640;sp:1500;sR:640;" data-frame_1_mask="u:t;" data-frame_999="o:0;tp:600;e:nothing;st:w;sp:500;sR:6860;" style="z-index:11;font-family:Nunito Sans;">A results-driven Internet marketing company offers Web design, PPC and SEO services
							</rs-layer>
							<!--

							-->
							<rs-layer id="slider-7-slide-19-layer-11" class="rev-btn" data-type="button" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:35px,35px,0,-90px;y:m;yo:220px,70px,133px,64px;" data-text="w:nowrap,nowrap,nowrap,normal;s:18,18,16,14;l:18,18,16,14;fw:900,900,400,700;a:inherit;" data-dim="w:auto,auto,auto,138px;h:auto,auto,auto,37px;" data-vbility="t,t,t,f" data-padding="t:20,20,15,10;r:55,55,40,30;b:20,20,15,10;l:55,55,40,30;" data-border="bos:solid;boc:#5163dd;bow:1px,1px,1px,1px;bor:50px,50px,50px,50px;" data-frame_0="tp:600;" data-frame_1="tp:600;st:940;sp:1500;sR:940;" data-frame_999="o:0;tp:600;st:w;sp:500;sR:6560;" data-frame_hover="c:#242c34;bgc:rgba(255,255,255,0.1);boc:#5163dd;bor:50px,50px,50px,50px;bos:solid;bow:1px,1px,1px,1px;oX:50;oY:50;sp:200;" style="z-index:12;background-color:#5163dd;font-family:Nunito Sans;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">Talk To Us
							</rs-layer>
							<!--

							-->
							<rs-layer id="slider-7-slide-19-layer-24" data-type="image" data-rsp_ch="on" data-xy="x:r;xo:0,-30px,-30px,-30px;yo:144px;" data-text="l:22;a:inherit;" data-dim="w:['264px','264px','264px','264px'];h:['412px','412px','412px','412px'];" data-vbility="t,t,f,f" data-frame_0="tp:600;" data-frame_1="tp:600;st:400;sp:1480;sR:400;" data-frame_999="o:0;tp:600;st:w;sp:500;sR:7120;" style="z-index:9;font-family:Roboto;"><img src="wp-content/uploads/revslider/el_01_sl_3.png" alt="SeoEs" width="264" height="412" data-no-retina>
							</rs-layer>
							<!--

							-->
							<rs-layer id="slider-7-slide-19-layer-25" data-type="image" data-rsp_ch="on" data-xy="x:c;xo:363px,277px,277px,277px;yo:242px;" data-text="l:22;a:inherit;" data-dim="w:['174px','174px','174px','174px'];h:['389px','389px','389px','389px'];" data-vbility="t,t,f,f" data-frame_0="y:-175%;tp:600;" data-frame_1="tp:600;st:640;sp:1260;sR:640;" data-frame_999="o:0;tp:600;st:w;sp:500;sR:7100;" style="z-index:13;font-family:Roboto;"><img src="wp-content/uploads/revslider/el_01_sl_5.png" alt="SeoEs" width="174" height="389" data-no-retina>
							</rs-layer>
							<!--

							-->
							<rs-layer id="slider-7-slide-19-layer-26" data-type="image" data-rsp_ch="on" data-xy="x:r;xo:-200px,-170px,-170px,-170px;yo:409px;" data-text="l:22;a:inherit;" data-dim="w:['310px','310px','310px','310px'];h:['302px','302px','302px','302px'];" data-vbility="t,t,f,f" data-frame_0="x:100%;tp:600;" data-frame_1="tp:600;st:1080;sp:1310;sR:1080;" data-frame_999="o:0;tp:600;st:w;sp:500;sR:6610;" style="z-index:14;font-family:Roboto;"><img src="wp-content/uploads/revslider/el_01_sl_4.png" alt="SeoEs" width="310" height="302" data-no-retina>
							</rs-layer>
							<!--

							-->
							<rs-layer id="slider-7-slide-19-layer-28" data-type="image" data-rsp_ch="on" data-xy="x:r,r,c,c;xo:-836px,-836px,0,0;yo:0,0,0,-1px;" data-text="l:22;a:inherit;" data-dim="w:['1835px','1835px','1835px','1835px'];h:['848px','848px','848px','848px'];" data-frame_0="tp:600;" data-frame_1="tp:600;st:200;sp:1480;sR:200;" data-frame_999="o:0;tp:600;st:w;sp:500;sR:7320;" style="z-index:8;font-family:Roboto;"><img src="wp-content/uploads/revslider/bg_1835x848_3.png" alt="SeoEs" width="1835" height="848" data-no-retina>
							</rs-layer>
							<!--
-->
						</rs-slide>
					</rs-slides>
					<rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
				</rs-module>
				<script type="text/javascript">
					setREVStartSize({
						c: 'rev_slider_7_1',
						rl: [1240, 1024, 768, 480],
						el: [840, 768, 960, 500],
						gw: [1240, 1024, 778, 480],
						gh: [840, 768, 960, 500],
						layout: 'fullwidth',
						mh: "0"
					});
					var revapi7,
						tpj;
					jQuery(function() {
						tpj = jQuery;
						if (tpj("#rev_slider_7_1").revolution == undefined) {
							revslider_showDoubleJqueryError("#rev_slider_7_1");
						} else {
							revapi7 = tpj("#rev_slider_7_1").show().revolution({
								jsFileLocation: "wp-content/plugins/revslider/public/assets/js/",
								sliderLayout: "fullwidth",
								visibilityLevels: "1240,1024,768,480",
								gridwidth: "1240,1024,778,480",
								gridheight: "840,768,960,500",
								minHeight: "",
								editorheight: "840,768,960,500",
								responsiveLevels: "1240,1024,768,480",
								disableProgressBar: "on",
								navigation: {
									mouseScrollNavigation: false,
									arrows: {
										enable: true,
										style: "persephone",
										hide_onmobile: true,
										hide_under: 767,
										hide_onleave: true,
										left: {

										},
										right: {

										}
									}
								},
								parallax: {
									levels: [1, 2, 3, 4, 25, 30, 35, 40, 45, 50, 47, 48, 49, 50, 51, 55],
									type: "mouse"
								},
								viewPort: {
									enable: true,
									visible_area: "20%"
								},
								fallbacks: {
									allowHTML5AutoPlayOnAndroid: true
								},
							});
						}

					});
				</script>
				<script>
					var htmlDivCss = unescape("%23rev_slider_7_1_wrapper%20.persephone.tparrows%20%7B%0A%09cursor%3Apointer%3B%0A%09background%3Argba%28255%2C%20255%2C%20255%2C%200%29%3B%0A%09width%3A40px%3B%0A%09height%3A40px%3B%0A%09position%3Aabsolute%3B%0A%09display%3Ablock%3B%0A%09z-index%3A1000%3B%0A%20%20%20%20border%3A1px%20solid%20rgba%28255%2C%20255%2C%20255%2C%200%29%3B%0A%7D%0A%23rev_slider_7_1_wrapper%20.persephone.tparrows%3Ahover%20%7B%0A%09background%3Argba%28255%2C%20255%2C%20255%2C%200%29%3B%0A%7D%0A%23rev_slider_7_1_wrapper%20.persephone.tparrows%3Abefore%20%7B%0A%09font-family%3A%20%27revicons%27%3B%0A%09font-size%3A40px%3B%0A%09color%3A%20%233e4a59%3B%0A%09display%3Ablock%3B%0A%09line-height%3A%2040px%3B%0A%09text-align%3A%20center%3B%0A%7D%0A%23rev_slider_7_1_wrapper%20.persephone.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%27%5Ce824%27%3B%0A%7D%0A%23rev_slider_7_1_wrapper%20.persephone.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%27%5Ce825%0A%27%3B%0A%7D%0A%0A%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if (htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					} else {
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				</script>
				<script>
					var htmlDivCss = unescape("%0A%0A%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if (htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					} else {
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				</script>
			</rs-module-wrap>
			<!-- END REVOLUTION SLIDER -->
		</div>

		<div id="site-content" class="site-content">
			<!-- The main content -->
			<main id="main-content" class="main-content container" itemprop="mainContentOfPage">
				<div class="main-content-inner">


					<div class="main-content-inner-wrap post-type_page">
						<div class="page-content">
							<div id="rb_content_5de2268cc3a87" class="rb_content_5de2268cc3a87 rb-content background_no_hover">
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1561624790555 vc_row-has-fill">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de2268cc3c74' class='rb_column_wrapper vc_col-sm-12 '>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div id='rb_inner_row_5de2268cc3e36' class='rb_inner_row_wrapper'>
														<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1560338354751">
															<div id='rb_column_5de2268cc3f97' class='rb_column_wrapper vc_col-sm-4 fade_bottom animated'>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner vc_custom_1562659489884">
																		<div class="wpb_wrapper">
																			<div id='rb_service_5de2268cc42b9' class='rb_extended_service_module style_rhombus '>
																				<div class='extended_services_shape'><svg class="svg_shape" style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																						<defs>
																							<filter id="shadow_5de2268cc446e" height="200%">
																								<feDropShadow dx="0" dy="6" stdDeviation="4" flood-color="rgba(16,1,148,0.18)" />
																							</filter>
																							<linearGradient id="bg_gradient_5de2268cc4401" x1="0%" y1="0%" x2="0%" y2="100%">
																								<stop offset="0%" style="stop-color:rgba(255,175,0,0.01); stop-opacity:1" />
																								<stop offset="100%" style="stop-color:rgba(255,104,73,0.01); stop-opacity:1" />
																							</linearGradient>
																							<mask id="mask_5de2268cc4437">
																								<path d="M60.5,4.4l35.1,35.1c5.8,5.8,5.8,15.2,0,21.1L60.5,95.6c-5.8,5.8-15.2,5.8-21.1,0L4.4,60.5 c-5.8-5.8-5.8-15.2,0-21.1L39.5,4.4C45.3-1.5,54.7-1.5,60.5,4.4z" />
																							</mask>
																						</defs>
																						<g style="filter:url(#shadow_5de2268cc446e)">
																							<path class="default" d="M60.5,4.4l35.1,35.1c5.8,5.8,5.8,15.2,0,21.1L60.5,95.6c-5.8,5.8-15.2,5.8-21.1,0L4.4,60.5 c-5.8-5.8-5.8-15.2,0-21.1L39.5,4.4C45.3-1.5,54.7-1.5,60.5,4.4z" fill="#ffffff" mask="url(#mask_5de2268cc4437)" />
																							<path class="hover" d="M60.5,4.4l35.1,35.1c5.8,5.8,5.8,15.2,0,21.1L60.5,95.6c-5.8,5.8-15.2,5.8-21.1,0L4.4,60.5 c-5.8-5.8-5.8-15.2,0-21.1L39.5,4.4C45.3-1.5,54.7-1.5,60.5,4.4z" fill="url(#bg_gradient_5de2268cc4401)" mask="url(#mask_5de2268cc4437)" />
																						</g>
																					</svg></div>
																				<div class='extended_service_content_wrapper'>
																					<div class='service_icon_wrapper icon_shape_none icon_inside'><i class="flaticon-computer"></i></div>
																					<div class="service_content">
																						<h5 class="service_title">UI/UX Design</h5><span class="divider"></span>
																						<div class='content_wrapper'>
																							<p>If a picture is worth 1000 words, a prototype is worth 1000 meetings.</p>
																						</div>
																						<!--<a class='service-button rb_button simple' href='startup-agency.php'>READ MORE</a>-->
																						<div><p><br/><p></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de2268cc4501' class='rb_column_wrapper vc_col-sm-4 fade_bottom animated'>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_service_5de2268cc46be' class='rb_extended_service_module style_rhombus '>
																				<div class='extended_services_shape'><svg class="svg_shape" style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																						<defs>
																							<filter id="shadow_5de2268cc4829" height="200%">
																								<feDropShadow dx="0" dy="6" stdDeviation="4" flood-color="rgba(16,1,148,0.18)" />
																							</filter>
																							<linearGradient id="bg_gradient_5de2268cc47bc" x1="0%" y1="0%" x2="0%" y2="100%">
																								<stop offset="0%" style="stop-color:rgba(255,175,0,0.01); stop-opacity:1" />
																								<stop offset="100%" style="stop-color:rgba(255,104,73,0.01); stop-opacity:1" />
																							</linearGradient>
																							<mask id="mask_5de2268cc47f3">
																								<path d="M60.5,4.4l35.1,35.1c5.8,5.8,5.8,15.2,0,21.1L60.5,95.6c-5.8,5.8-15.2,5.8-21.1,0L4.4,60.5 c-5.8-5.8-5.8-15.2,0-21.1L39.5,4.4C45.3-1.5,54.7-1.5,60.5,4.4z" />
																							</mask>
																						</defs>
																						<g style="filter:url(#shadow_5de2268cc4829)">
																							<path class="default" d="M60.5,4.4l35.1,35.1c5.8,5.8,5.8,15.2,0,21.1L60.5,95.6c-5.8,5.8-15.2,5.8-21.1,0L4.4,60.5 c-5.8-5.8-5.8-15.2,0-21.1L39.5,4.4C45.3-1.5,54.7-1.5,60.5,4.4z" fill="#ffffff" mask="url(#mask_5de2268cc47f3)" />
																							<path class="hover" d="M60.5,4.4l35.1,35.1c5.8,5.8,5.8,15.2,0,21.1L60.5,95.6c-5.8,5.8-15.2,5.8-21.1,0L4.4,60.5 c-5.8-5.8-5.8-15.2,0-21.1L39.5,4.4C45.3-1.5,54.7-1.5,60.5,4.4z" fill="url(#bg_gradient_5de2268cc47bc)" mask="url(#mask_5de2268cc47f3)" />
																						</g>
																					</svg></div>
																				<div class='extended_service_content_wrapper'>
																					<div class='service_icon_wrapper icon_shape_none icon_inside'><i class="flaticon-business"></i></div>
																					<div class="service_content">
																						<h5 class="service_title">Brand Strategy</h5><span class="divider"></span>
																						<div class='content_wrapper'>
																							<p>There are some things money can't buy. For everything else, there's MasterCard.</p>
																						</div>
																						<!--<a class='service-button rb_button simple' href='startup-agency.php'>READ MORE</a>-->
																						<div><p><br/><p></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de2268cc48a6' class='rb_column_wrapper vc_col-sm-4 fade_bottom animated'>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner vc_custom_1562659520099">
																		<div class="wpb_wrapper">
																			<div id='rb_service_5de2268cc4a59' class='rb_extended_service_module style_rhombus '>
																				<div class='extended_services_shape'><svg class="svg_shape" style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																						<defs>
																							<filter id="shadow_5de2268cc4bc3" height="200%">
																								<feDropShadow dx="0" dy="6" stdDeviation="4" flood-color="rgba(16,1,148,0.18)" />
																							</filter>
																							<linearGradient id="bg_gradient_5de2268cc4b57" x1="0%" y1="0%" x2="0%" y2="100%">
																								<stop offset="0%" style="stop-color:rgba(255,175,0,0.01); stop-opacity:1" />
																								<stop offset="100%" style="stop-color:rgba(255,104,73,0.01); stop-opacity:1" />
																							</linearGradient>
																							<mask id="mask_5de2268cc4b8d">
																								<path d="M60.5,4.4l35.1,35.1c5.8,5.8,5.8,15.2,0,21.1L60.5,95.6c-5.8,5.8-15.2,5.8-21.1,0L4.4,60.5 c-5.8-5.8-5.8-15.2,0-21.1L39.5,4.4C45.3-1.5,54.7-1.5,60.5,4.4z" />
																							</mask>
																						</defs>
																						<g style="filter:url(#shadow_5de2268cc4bc3)">
																							<path class="default" d="M60.5,4.4l35.1,35.1c5.8,5.8,5.8,15.2,0,21.1L60.5,95.6c-5.8,5.8-15.2,5.8-21.1,0L4.4,60.5 c-5.8-5.8-5.8-15.2,0-21.1L39.5,4.4C45.3-1.5,54.7-1.5,60.5,4.4z" fill="#ffffff" mask="url(#mask_5de2268cc4b8d)" />
																							<path class="hover" d="M60.5,4.4l35.1,35.1c5.8,5.8,5.8,15.2,0,21.1L60.5,95.6c-5.8,5.8-15.2,5.8-21.1,0L4.4,60.5 c-5.8-5.8-5.8-15.2,0-21.1L39.5,4.4C45.3-1.5,54.7-1.5,60.5,4.4z" fill="url(#bg_gradient_5de2268cc4b57)" mask="url(#mask_5de2268cc4b8d)" />
																						</g>
																					</svg></div>
																				<div class='extended_service_content_wrapper'>
																					<div class='service_icon_wrapper icon_shape_none icon_inside'><i class="flaticon-startup-a"></i></div>
																					<div class="service_content">
																						<h5 class="service_title">Growth Marketing</h5><span class="divider"></span>
																						<div class='content_wrapper'>
																							<p>Create Content. Publish Content. Amplify Content. Repeat!</p>
																						</div>
																						<!--<a class='service-button rb_button simple' href='startup-agency.php'>READ MORE</a>-->
																						<div><p><br/><p></div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div id='rb_inner_row_5de2268cc4c54' class='rb_inner_row_wrapper'>
														<div class="vc_row wpb_row vc_inner vc_row-fluid">
															<div id='rb_column_5de2268cc4d96' class='rb_column_wrapper vc_col-sm-12 '>
																<div class="wpb_column vc_column_container vc_col-sm-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class='rb_textmodule_5de2268cc4f1e rb_textmodule align_center'>
																				<h3 class='rb_textmodule_title'>Our <strong>Story</strong><span class='rb_textmodule_divider'></span></h3>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div id='rb_inner_row_5de2268cc5052' class='rb_inner_row_wrapper'>
														<div class="vc_row wpb_row vc_inner vc_row-fluid">
															<div id='rb_column_5de2268cc51aa' class='rb_column_wrapper vc_col-sm-5 vc_col-lg-7 fade_bottom animated'>
																<div class="wpb_column vc_column_container vc_col-sm-5 vc_col-lg-7">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_image_5de2268cc530d' class='rb_image_module background_3d' data-max_tilt=15 data-perspective=1500 data-scale=1 data-speed=400>
																				<div class="main_image"><img src="wp-content/uploads/2019/05/511x490.png" alt="some-alt" /></div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de2268cc552f' class='rb_column_wrapper vc_col-sm-7 vc_col-lg-5 fade_bottom animated'>
																<div class="wpb_column vc_column_container vc_col-sm-7 vc_col-lg-5">
																	<div class="vc_column-inner vc_custom_1562662587214">
																		<div class="wpb_wrapper">
																			<div class='rb_textmodule_5de2268cc5676 rb_textmodule mobile_align_center'>
																				<div class='rb_textmodule_content_wrapper'>
																					<strong>SEARCH ENGINE OPTIMIZATION - SEO</strong>
																					<p>If you want to rank higher in the search engines, than our High Level SEO if for you, we pioneered many of today’s SEO techniques, and apply science and data for a winning formula.</p>
																					<strong>SOCIAL MEDIA MANAGEMENT</strong>
																					<p>SEO Tech store offers extraordinary high level Social media management. Proud to be a Social Media Agency that has helped to pave the way for the rest to follow, we’re not afraid to shake things up.</p>

																					<p>
																					</p>
																				</div>
																				<!--<a href='startup-agency.php' class='rb_textmodule_button rb_button advanced medium'>Learn More</a>-->
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
							<div id="rb_content_5de2268cc588d" class="rb_content_5de2268cc588d rb-content background_no_hover">
								<div class='particles-wrapper'>
									<div id='particles-5de2268cc590c' class='particles-js top_left' data-color='#ffffff' data-size='2' data-linked='1' data-count='50' data-speed='5' data-hide='767' data-shape='circle' data-mode='out' style='width:100%;height:100%;'></div>
								</div>
								<div class='vc_row-full-width vc_clearfix'></div>
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571290830329 vc_row-has-fill">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de2268cc5a93' class='rb_column_wrapper vc_col-sm-12 '>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class='rb_textmodule_5de2268cc5c4a rb_textmodule align_center mobile_align_center'>
														<h3 class='rb_textmodule_title'><strong>What We Do</strong><span class='rb_textmodule_divider'></span></h3>
													</div>
													<div id='rb_inner_row_5de2268cc5d40' class='rb_inner_row_wrapper'>
														<div class="vc_row wpb_row vc_inner vc_row-fluid">
															<div id='rb_column_5de2268cc5e8d' class='rb_column_wrapper vc_col-sm-4 fade_bottom animated'>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_service_5de2268cc60a5' class='rb_service_module style_icon_top style_tablet_inherit shape_square '>
																				<div class='service_icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																						<defs>
																							<linearGradient id="gradient_5de2268cc6129" x1="0%" y1="0%" x2="0%" y2="100%">
																								<stop offset="0%" style="stop-color:rgba(255,255,255,0.01); stop-opacity:1" />
																								<stop offset="100%" style="stop-color:rgba(255,255,255,0.01); stop-opacity:1" />
																							</linearGradient>
																						</defs>
																						<path d="M92,100H8c-4.4,0-8-3.6-8-8V8c0-4.4,3.6-8,8-8h84c4.4,0,8,3.6,8,8v84C100,96.4,96.4,100,92,100z" fill="url(#gradient_5de2268cc6129)" />
																					</svg><i class="flaticon-online"></i></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">Context Ads</h5>
																					<div class='content_wrapper'>
																						<p>Contextual advertising is advertising on a website that is relevant to the page’s content. In traditional contextual advertising, automated systems display ads related to the content of your site based on keyword targeting.<br><br><br></p>
																					</div>
																					<!-- <a class='service-button rb_button simple' href='startup-agency.php'>READ MORE</a> -->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de2268cc61ad' class='rb_column_wrapper vc_col-sm-4 fade_bottom animated'>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_service_5de2268cc636f' class='rb_service_module style_icon_top style_tablet_inherit shape_square '>
																				<div class='service_icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																						<defs>
																							<linearGradient id="gradient_5de2268cc63ed" x1="0%" y1="0%" x2="0%" y2="100%">
																								<stop offset="0%" style="stop-color:transparent; stop-opacity:1" />
																								<stop offset="100%" style="stop-color:rgba(255,255,255,0.01); stop-opacity:1" />
																							</linearGradient>
																						</defs>
																						<path d="M92,100H8c-4.4,0-8-3.6-8-8V8c0-4.4,3.6-8,8-8h84c4.4,0,8,3.6,8,8v84C100,96.4,96.4,100,92,100z" fill="url(#gradient_5de2268cc63ed)" />
																					</svg><i class="flaticon-feature"></i></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">Website Audits</h5>
																					<div class='content_wrapper'>
																						<p>Customize Embed Form layout style, behavior, colors, fonts and language. Customize shown Audit Report content including branding, text and checks included.<br><br><br><br><br></p>
																					</div>
																					<!-- <a class='service-button rb_button simple' href='startup-agency.php'>READ MORE</a> -->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de2268cc6448' class='rb_column_wrapper vc_col-sm-4 fade_bottom animated'>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_service_5de2268cc65f2' class='rb_service_module style_icon_top style_tablet_inherit shape_square '>
																				<div class='service_icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																						<defs>
																							<linearGradient id="gradient_5de2268cc6670" x1="0%" y1="0%" x2="0%" y2="100%">
																								<stop offset="0%" style="stop-color:transparent; stop-opacity:1" />
																								<stop offset="100%" style="stop-color:rgba(255,255,255,0.01); stop-opacity:1" />
																							</linearGradient>
																						</defs>
																						<path d="M92,100H8c-4.4,0-8-3.6-8-8V8c0-4.4,3.6-8,8-8h84c4.4,0,8,3.6,8,8v84C100,96.4,96.4,100,92,100z" fill="url(#gradient_5de2268cc6670)" />
																					</svg><i class="flaticon-analysis"></i></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">Keyword Research</h5>
																					<div class='content_wrapper'>
																						<p>Which strategic keywords to target in your website’s content, and how to craft that content to satisfy both users and search engines, the power of keyword research lies in better understanding your target market and how they are searching for your content, services, or products.</p>
																					</div>
																					<!-- <a class='service-button rb_button simple' href='startup-agency.php'>READ MORE</a> -->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div id='rb_inner_row_5de2268cc66f7' class='rb_inner_row_wrapper'>
														<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1557493526313">
															<div id='rb_column_5de2268cc67fc' class='rb_column_wrapper vc_col-sm-4 fade_bottom animated'>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_service_5de2268cc69b7' class='rb_service_module style_icon_top style_tablet_inherit shape_square '>
																				<div class='service_icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																						<defs>
																							<linearGradient id="gradient_5de2268cc6a35" x1="0%" y1="0%" x2="0%" y2="100%">
																								<stop offset="0%" style="stop-color:transparent; stop-opacity:1" />
																								<stop offset="100%" style="stop-color:rgba(255,255,255,0.01); stop-opacity:1" />
																							</linearGradient>
																						</defs>
																						<path d="M92,100H8c-4.4,0-8-3.6-8-8V8c0-4.4,3.6-8,8-8h84c4.4,0,8,3.6,8,8v84C100,96.4,96.4,100,92,100z" fill="url(#gradient_5de2268cc6a35)" />
																					</svg><i class="flaticon-banner"></i></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">Content Marketing</h5>
																					<div class='content_wrapper'>
																						<p>Content marketing consists of all marketing activities that focus on creating and sharing information. It should be part of every SEO strategy, but it’s also crucial for branding. The idea of content marketing is that sharing valuable information is a great way to attract an audience and to build a brand.</p>
																					</div>
																					<!-- <a class='service-button rb_button simple' href='startup-agency.php'>READ MORE</a> -->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de2268cc6ab1' class='rb_column_wrapper vc_col-sm-4 fade_bottom animated'>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_service_5de2268cc6c65' class='rb_service_module style_icon_top style_tablet_inherit shape_square '>
																				<div class='service_icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																						<defs>
																							<linearGradient id="gradient_5de2268cc6ce2" x1="0%" y1="0%" x2="0%" y2="100%">
																								<stop offset="0%" style="stop-color:transparent; stop-opacity:1" />
																								<stop offset="100%" style="stop-color:rgba(255,255,255,0.01); stop-opacity:1" />
																							</linearGradient>
																						</defs>
																						<path d="M92,100H8c-4.4,0-8-3.6-8-8V8c0-4.4,3.6-8,8-8h84c4.4,0,8,3.6,8,8v84C100,96.4,96.4,100,92,100z" fill="url(#gradient_5de2268cc6ce2)" />
																					</svg><i class="flaticon-research"></i></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">Technical SEO</h5>
																					<div class='content_wrapper'>
																						<p>Technical SEO refers to the process of optimizing your website for the crawling and indexing phase. With technical SEO, you can help search engines access, crawl, interpret and index your website without any problems.<br><br><br><br></p>
																					</div>
																					<!-- <a class='service-button rb_button simple' href='startup-agency.php'>READ MORE</a> -->
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de2268cc6d5c' class='rb_column_wrapper vc_col-sm-4 fade_bottom animated'>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_service_5de2268cc6f05' class='rb_service_module style_icon_top style_tablet_inherit shape_square '>
																				<div class='service_icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																						<defs>
																							<linearGradient id="gradient_5de2268cc6f81" x1="0%" y1="0%" x2="0%" y2="100%">
																								<stop offset="0%" style="stop-color:transparent; stop-opacity:1" />
																								<stop offset="100%" style="stop-color:rgba(255,255,255,0.01); stop-opacity:1" />
																							</linearGradient>
																						</defs>
																						<path d="M92,100H8c-4.4,0-8-3.6-8-8V8c0-4.4,3.6-8,8-8h84c4.4,0,8,3.6,8,8v84C100,96.4,96.4,100,92,100z" fill="url(#gradient_5de2268cc6f81)" />
																					</svg><i class="flaticon-presentation"></i></div>
																				<div class="service_content_wrapper">
																					<h5 class="service_title">SEO Coaching</h5>
																					<div class='content_wrapper'>
																						<p>SEO coaching and training programs are designed by the SEO professionals that help you to learn SEO techniques. These techniques enable you to improve the rankings, sales performance as well as increase traffic of your business. SEO training is normally offered by ingenious SEO specialists.</p>
																					</div>
																					<!-- <a class='service-button rb_button simple' href='startup-agency.php'>READ MORE</a> -->
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
							<div id="rb_content_5de2268cc704e" class="rb_content_5de2268cc704e rb-content background_no_hover">
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1570532712649 vc_row-has-fill vc_row-o-equal-height vc_row-flex">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de2268cc71ed' class='rb_column_wrapper vc_col-sm-5 vc_col-lg-6 vc_col-md-6 grow_left animated'>
										<div class="wpb_column vc_column_container vc_col-sm-5 vc_col-lg-6 vc_col-md-6">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div id='rb_image_5de2268cc7318' class='rb_image_module background_3d' data-max_tilt=10 data-perspective=1000 data-scale=1 data-speed=300>
														<div class="main_image"><img src="wp-content/uploads/2019/05/527x527.png" alt="some-alt" /></div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de2268cc74e1' class='rb_column_wrapper vc_col-sm-7 vc_col-lg-6 vc_col-md-6 grow_left animated'>
										<div class="wpb_column vc_column_container vc_col-sm-7 vc_col-lg-6 vc_col-md-6">
											<div class="vc_column-inner vc_custom_1562659788029">
												<div class="wpb_wrapper">
													<div class='rb_textmodule_5de2268cc7632 rb_textmodule mobile_align_center'>
														<h3 class='rb_textmodule_title'>MAKE US PROVE IT TO YOU, EACH & EVERY MONTH!!!!<br />
															<span class='rb_textmodule_divider'></span></h3>
														<div class='rb_textmodule_content_wrapper'>
															<p>We’re in the business of delivering results. By partnering with us, you gain a trusted digital advisor with certified expertise. We take pride in the level of service we provide, and our clients agree. There’s a good reason why 85% of our clients stick with us long-term even though they never have to make a long-term commitment. With month-to-month agreements, you can cancel future work at any time for any reason. We have to continually prove ourselves to you. Read on to learn how we can help your business grow confidently online.</p>
															<!-- <ul>
																<li>Phasellus sit amet libero turpis nunc sapien fermentum</li>
																<li>Fermentum libero mauris faucibus quam, sed pharetra</li>
																<li>Dolor eu nulla. Pellentesque aliquam in mi quis faucibus.</li>
															</ul> -->
															<p>
														</div>
														<!-- <a href='startup-agency.php' class='rb_textmodule_button rb_button advanced medium'>Learn More</a> -->
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
							</div>
							<div id="rb_content_5de2268cc77cf" class="rb_content_5de2268cc77cf rb-content background_no_hover">
								<div class='particles-wrapper'>
									<div id='particles-5de2268cc7844' class='particles-js top_left' data-color='#3E4A59' data-size='80' data-count='1' data-speed='2' data-hide='767' data-shape='image' data-mode='bounce' data-image-url='wp-content/uploads/2019/05/particle_76-150x150.png' data-image-width='150' data-image-height='150' style='width:50%;height:100%;'></div>
								</div>
								<div class='vc_row-full-width vc_clearfix'></div>
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571662265638 vc_row-has-fill vc_row-o-equal-height vc_row-flex">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de2268cc7b13' class='rb_column_wrapper vc_col-sm-7 vc_col-lg-6 vc_col-md-6 grow_right animated'>
										<div class="wpb_column vc_column_container vc_col-sm-7 vc_col-lg-6 vc_col-md-6">
											<div class="vc_column-inner vc_custom_1562659824890">
												<div class="wpb_wrapper">
													<div class='rb_textmodule_5de2268cc7c6a rb_textmodule mobile_align_center'>
														<h3 class='rb_textmodule_title'>We are crazy about<br />
															creating <strong>positive impact</strong><span class='rb_textmodule_divider'></span></h3>
														<div class='rb_textmodule_content_wrapper'>
															<p>SEO Tech Store will ensure you've got maximum potential to rank for your target keywords by auditing the content on your pages and recommending specific improvements.</p>
															Spend your time where it matters most with prioritized recommendations to improve page optimization</p>
															Know what content to create next with custom suggestions based on other pages that rank for your keywords</p>
														</div>
														<!-- <a href='startup-agency.php' class='rb_textmodule_button rb_button advanced medium'>Our Advantages</a> -->
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de2268cc7dcf' class='rb_column_wrapper vc_col-sm-5 vc_col-lg-6 vc_col-md-6 grow_right animated'>
										<div class="wpb_column vc_column_container vc_col-sm-5 vc_col-lg-6 vc_col-md-6">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div id='rb_image_5de2268cc7ef1' class='rb_image_module background_3d' data-max_tilt=10 data-perspective=1000 data-scale=1 data-speed=300>
														<div class="main_image"><img src="wp-content/uploads/2019/05/525x520.png" alt="some-alt" /></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
							</div>
							<!-- <div id="rb_content_5de2268cc8071" class="rb_content_5de2268cc8071 rb-content background_no_hover">
								<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de2268cc81db' class='rb_column_wrapper vc_col-sm-12 fade_bottom animated'>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div id='rb_portfolio_5de2268cc84aa' class='rb_portfolio_module layout_masonry hover_overlay columns_4' data-columns='4' data-spacings='true'>
														<div class='rb_portfolio_items  '>
															<div class="grid-sizer"></div>
															<div class="rb_portfolio_item preloaded all " data-masonry-width="2" data-masonry-height="2">
																<div class="image_wrapper hover_overlay" style="background-image: url(wp-content/uploads/2019/05/img_14.jpg)"><a href="aliquam-ut-porttitor.php"><img width="1920" height="1080" src="wp-content/uploads/2019/05/img_14.jpg" class="attachment-1436 size-1436 wp-post-image" alt="some-alt" srcset="wp-content/uploads/2019/05/img_14.jpg 1920w, wp-content/uploads/2019/05/img_14-300x169.jpg 300w, wp-content/uploads/2019/05/img_14-768x432.jpg 768w, wp-content/uploads/2019/05/img_14-1024x576.jpg 1024w, wp-content/uploads/2019/05/img_14-600x338.jpg 600w" sizes="(max-width: 1920px) 100vw, 1920px" /></a>
																	<div class="hidden_info"><a class="h5" href="aliquam-ut-porttitor.php">Aliquam ut porttitor</a>
																		<p><a href='portfolio_category/creativity/creativity.php'>Creativity</a></p>
																	</div>
																</div>
															</div>
															<div class="rb_portfolio_item preloaded all " data-masonry-width="1" data-masonry-height="1">
																<div class="image_wrapper hover_overlay" style="background-image: url(wp-content/uploads/2019/05/img_19.jpg)"><a href="leo-in-vitae-turpis.php"><img width="1920" height="1080" src="wp-content/uploads/2019/05/img_19.jpg" class="attachment-1437 size-1437 wp-post-image" alt="some-alt" srcset="wp-content/uploads/2019/05/img_19.jpg 1920w, wp-content/uploads/2019/05/img_19-300x169.jpg 300w, wp-content/uploads/2019/05/img_19-768x432.jpg 768w, wp-content/uploads/2019/05/img_19-1024x576.jpg 1024w, wp-content/uploads/2019/05/img_19-600x338.jpg 600w" sizes="(max-width: 1920px) 100vw, 1920px" /></a>
																	<div class="hidden_info"><a class="h5" href="leo-in-vitae-turpis.php">Leo in vitae turpis</a>
																		<p><a href='portfolio_category/creativity/creativity.php'>Creativity</a> / <a href='portfolio_tag/creativity/creativity.php'>Creativity</a></p>
																	</div>
																</div>
															</div>
															<div class="rb_portfolio_item preloaded all " data-masonry-width="1" data-masonry-height="1">
																<div class="image_wrapper hover_overlay" style="background-image: url(wp-content/uploads/2019/05/img_18.jpg)"><a href="dignissim-enim-sit.php"><img width="1920" height="1080" src="wp-content/uploads/2019/05/img_18.jpg" class="attachment-1439 size-1439 wp-post-image" alt="some-alt" srcset="wp-content/uploads/2019/05/img_18.jpg 1920w, wp-content/uploads/2019/05/img_18-300x169.jpg 300w, wp-content/uploads/2019/05/img_18-768x432.jpg 768w, wp-content/uploads/2019/05/img_18-1024x576.jpg 1024w, wp-content/uploads/2019/05/img_18-600x338.jpg 600w" sizes="(max-width: 1920px) 100vw, 1920px" /></a>
																	<div class="hidden_info"><a class="h5" href="dignissim-enim-sit.php">Dignissim enim sit</a>
																		<p><a href='portfolio_category/creativity/creativity.php'>Creativity</a> / <a href='portfolio_tag/awesome/awesome.php'>Awesome</a></p>
																	</div>
																</div>
															</div>
															<div class="rb_portfolio_item preloaded all " data-masonry-width="2" data-masonry-height="1">
																<div class="image_wrapper hover_overlay" style="background-image: url(wp-content/uploads/2019/05/img_07.jpg)"><a href="porta-lorem-mollis.php"><img width="1920" height="1080" src="wp-content/uploads/2019/05/img_07.jpg" class="attachment-1442 size-1442 wp-post-image" alt="some-alt" srcset="wp-content/uploads/2019/05/img_07.jpg 1920w, wp-content/uploads/2019/05/img_07-300x169.jpg 300w, wp-content/uploads/2019/05/img_07-768x432.jpg 768w, wp-content/uploads/2019/05/img_07-1024x576.jpg 1024w, wp-content/uploads/2019/05/img_07-600x338.jpg 600w" sizes="(max-width: 1920px) 100vw, 1920px" /></a>
																	<div class="hidden_info"><a class="h5" href="porta-lorem-mollis.php">Porta lorem mollis</a>
																		<p><a href='portfolio_category/design/design.php'>Design</a> / <a href='portfolio_tag/design/design.php'>Design</a></p>
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
							<div id="rb_content_5de2268cca2a5" class="rb_content_5de2268cca2a5 rb-content background_no_hover">
								<div class='particles-wrapper'>
									<div id='particles-5de2268cca32f' class='particles-js top_left' data-color='#3E4A59' data-size='80' data-count='1' data-speed='2' data-hide='767' data-shape='image' data-mode='bounce' data-image-url='wp-content/uploads/2019/05/particle_76-150x150.png' data-image-width='150' data-image-height='150' style='width:50%;height:100%;'></div>
								</div>
								<div class='vc_row-full-width vc_clearfix'></div>
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1570532854626 vc_row-has-fill vc_row-o-equal-height vc_row-flex">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de2268cca5dd' class='rb_column_wrapper vc_col-sm-6 fade_bottom animated'>
										<div class="wpb_column vc_column_container vc_col-sm-6">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class='rb_textmodule_5de2268cca747 rb_textmodule mobile_align_center'>
														<h3 class='rb_textmodule_title'>Why choose our agency<br />
															for <strong>your projects?</strong><span class='rb_textmodule_divider'></span></h3>
														<div class='rb_textmodule_content_wrapper'>
															<p>Based on years of experience and careful attention to what makes us the most successful for our clients, The SEO Tech Store is a collection of our proprietary best practices to developing digital marketing solutions proven to get the best results. These best practices include a disciplined approach to developing tailored solutions, honest straightforward communications, complete transparency, and a culture centered on excellence.</p>
														</div>
														<!-- <a href='startup-agency.php' class='rb_textmodule_button rb_button advanced medium'>Order Services</a> -->
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de2268cca8c0' class='rb_column_wrapper vc_col-sm-6 fade_bottom animated'>
										<div class="wpb_column vc_column_container vc_col-sm-6">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div id='rb_inner_row_5de2268ccaa4a' class='rb_inner_row_wrapper'>
														<div class="vc_row wpb_row vc_inner vc_row-fluid">
															<div id='rb_column_5de2268ccab9e' class='rb_column_wrapper vc_col-sm-4 '>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner vc_custom_1557734254984">
																		<div class="wpb_wrapper">
																			<div id='rb_milestone_5de2268ccad1f' class='rb_milestone_module style_simple'>
																				<div class='milestone_content'>
																					<div class='count_wrapper title_ff'><span class='counter'>1530</span></div>
																					<p class='milestone_title'>Customers</p>
																				</div>
																			</div>
																			<div id='rb_milestone_5de2268ccae4d' class='rb_milestone_module style_simple'>
																				<div class='milestone_content'>
																					<div class='count_wrapper title_ff'><span class='counter'>203</span>K</div>
																					<p class='milestone_title'>Projects</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de2268ccaf6e' class='rb_column_wrapper vc_col-sm-4 '>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner vc_custom_1557734260168">
																		<div class="wpb_wrapper">
																			<div id='rb_milestone_5de2268ccb096' class='rb_milestone_module style_simple'>
																				<div class='milestone_content'>
																					<div class='count_wrapper title_ff'><span class='counter'>53</span></div>
																					<p class='milestone_title'>Global Awards</p>
																				</div>
																			</div>
																			<div id='rb_milestone_5de2268ccb1b6' class='rb_milestone_module style_simple'>
																				<div class='milestone_content'>
																					<div class='count_wrapper title_ff'><span class='counter'>150</span></div>
																					<p class='milestone_title'>Employees</p>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de2268ccb2cc' class='rb_column_wrapper vc_col-sm-4 '>
																<div class="wpb_column vc_column_container vc_col-sm-4">
																	<div class="vc_column-inner vc_custom_1557734265448">
																		<div class="wpb_wrapper">
																			<div id='rb_milestone_5de2268ccb3f2' class='rb_milestone_module style_simple'>
																				<div class='milestone_content'>
																					<div class='count_wrapper title_ff'><span class='counter'>102</span></div>
																					<p class='milestone_title'>SEO Winners</p>
																				</div>
																			</div>
																			<div id='rb_milestone_5de2268ccb50e' class='rb_milestone_module style_simple'>
																				<div class='milestone_content'>
																					<div class='count_wrapper title_ff'><span class='counter'>658</span></div>
																					<p class='milestone_title'>Registrations</p>
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
							<!-- <div id="rb_content_5de2268ccb64b" class="rb_content_5de2268ccb64b rb-content background_no_hover">
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571292354953 vc_row-has-fill">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de2268ccb7c3' class='rb_column_wrapper vc_col-sm-12 vc_col-lg-4 vc_col-md-4 '>
										<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-4 vc_col-md-4">
											<div class="vc_column-inner">
												<div class="wpb_wrapper"></div>
											</div>
										</div>
									</div>
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de2268ccb8d4' class='rb_column_wrapper vc_col-sm-12 vc_col-lg-8 vc_col-md-8 fade_bottom animated'>
										<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-8 vc_col-md-8">
											<div class="vc_column-inner vc_custom_1562740876101">
												<div class="wpb_wrapper">
													<div class='rb_textmodule_5de2268ccba15 rb_textmodule portrait_align_center'>
														<h3 class='rb_textmodule_title'><strong>Victory is Ours</strong><span class='rb_textmodule_divider'></span></h3>
														<div class='rb_textmodule_content_wrapper'>
															<p>mauris, auctor a magna et, dignissim lobortis turpis. Nunc nisi lorem, pharetra condimentum lectus in, finibus dictum augue. Donec euismod lectus non.</p>
														</div><a href='startup-agency.php' class='rb_textmodule_button rb_button advanced medium'>Let’s Talk</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="vc_row-full-width vc_clearfix"></div>
							</div> -->
							<!-- <div id="rb_content_5de2268ccbb9a" class="rb_content_5de2268ccbb9a rb-content background_no_hover">
								<div class='particles-wrapper'>
									<div id='particles-5de2268ccbc0d' class='particles-js top_left' data-color='#a4aeed' data-size='2' data-count='50' data-speed='4' data-hide='767' data-shape='circle' data-mode='out' style='width:100%;height:100%;'></div>
								</div>
								<div class='vc_row-full-width vc_clearfix'></div>
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1561625202975">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de2268ccbd88' class='rb_column_wrapper vc_col-sm-12 '>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div id='rb_inner_row_5de2268ccbf2b' class='rb_inner_row_wrapper'>
														<div class="vc_row wpb_row vc_inner vc_row-fluid">
															<div id='rb_column_5de2268ccc016' class='rb_column_wrapper vc_col-sm-12 '>
																<div class="wpb_column vc_column_container vc_col-sm-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div class='rb_textmodule_5de2268ccc136 rb_textmodule align_center'>
																				<h3 class='rb_textmodule_title'>Choose <strong>Your Plan</strong><span class='rb_textmodule_divider'></span></h3>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div id='rb_inner_row_5de2268ccc23f' class='rb_inner_row_wrapper'>
														<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1557736548729">
															<div id='rb_column_5de2268ccc39d' class='rb_column_wrapper vc_col-sm-6 vc_col-lg-3 vc_col-md-3 fade_bottom animated'>
																<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_pricing_plan_5de2268ccc515' class='rb_pricing_plan_module' style=''>
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
																				</div><a href='startup-agency.php' class='rb_button medium pricing_plan_button'>Sign Up</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de2268ccc676' class='rb_column_wrapper vc_col-sm-6 vc_col-lg-3 vc_col-md-3 fade_bottom animated'>
																<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_pricing_plan_5de2268ccc79f' class='rb_pricing_plan_module highlighted' style='background-image: url(wp-content/uploads/2019/10/basic.png);'>
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
																				</div><a href='startup-agency.php' class='rb_button medium pricing_plan_button'>Sign Up</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de2268ccca4f' class='rb_column_wrapper vc_col-sm-6 vc_col-lg-3 vc_col-md-3 fade_bottom animated'>
																<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_pricing_plan_5de2268cccb73' class='rb_pricing_plan_module' style=''>
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
																				</div><a href='startup-agency.php' class='rb_button medium pricing_plan_button'>Sign Up</a>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div id='rb_column_5de2268ccccaa' class='rb_column_wrapper vc_col-sm-6 vc_col-lg-3 vc_col-md-3 fade_bottom animated'>
																<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-3 vc_col-md-3">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_pricing_plan_5de2268cccdbe' class='rb_pricing_plan_module' style=''>
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
																				</div><a href='startup-agency.php' class='rb_button medium pricing_plan_button'>Sign Up</a>
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
							<!-- <div id="rb_content_5de2268cccf27" class="rb_content_5de2268cccf27 rb-content background_no_hover">
								<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1561528410038 vc_row-has-fill">
									<div class="row_hover_effect"></div>
									<div id='rb_column_5de2268ccd0a3' class='rb_column_wrapper vc_col-sm-12 '>
										<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner">
												<div class="wpb_wrapper">
													<div class='rb_textmodule_5de2268ccd234 rb_textmodule align_center'>
														<h3 class='rb_textmodule_title'>Latest From <strong>Blog</strong><span class='rb_textmodule_divider'></span></h3>
													</div>
													<div id='rb_inner_row_5de2268ccd31c' class='rb_inner_row_wrapper'>
														<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1571292668613">
															<div id='rb_column_5de2268ccd45a' class='rb_column_wrapper vc_col-sm-12 fade_bottom animated'>
																<div class="wpb_column vc_column_container vc_col-sm-12">
																	<div class="vc_column-inner">
																		<div class="wpb_wrapper">
																			<div id='rb_blog_5de2268ccd653' class='rb_blog_module_wrapper animate'>
																				<div class="blog blog_grid layout_3">
																					<div class="content_inner" data-columns="3">
																						<div class="rb_carousel_wrapper" data-columns="3" data-pagination="on" data-navigation="on" data-draggable="on">
																							<div class="rb_carousel">
																								<div id="post-957" class="post post-957 type-post status-publish format-standard has-post-thumbnail hentry category-strategy">
																									<div class="post-inner">
																										<div class="post-media-wrapper">
																											
																											<div class="post-media format"><a class="featured-image" href="duis-gravida-justo-finibus-lectus-vehicula-eget-laoreet.php" target="_self"><img width="1920" height="1080" src="wp-content/uploads/2019/05/img_06.jpg" class=" no_lazy_load wp-post-image" alt="some-alt" srcset="wp-content/uploads/2019/05/img_06.jpg 1920w, wp-content/uploads/2019/05/img_06-300x169.jpg 300w, wp-content/uploads/2019/05/img_06-768x432.jpg 768w, wp-content/uploads/2019/05/img_06-1024x576.jpg 1024w, wp-content/uploads/2019/05/img_06-600x338.jpg 600w" sizes="(max-width: 1920px) 100vw, 1920px" /></a></div>
																											
																											<div class="post-date"><a class="title_ff" href="2019/05/30/30.php"><span class="day">30</span><span class="month">May</span></a></div>
																										</div>

																										
																										<div class="post-categories color_default"><a href="category/strategy/strategy.php" rel="category tag">Strategy</a> </div>
																										

																										<h3 class="post-title">
																											<a href="duis-gravida-justo-finibus-lectus-vehicula-eget-laoreet.php" rel="bookmark">
																												Better style </a>
																										</h3>


																										
																										<div class="post-meta-wrapper">
																											<div class="post-date"><a href="2019/05/30/30.php">May 30, 2019</a></div>
																										</div>
																										
																										<div class="post-content">
																											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget or...<div class="blog-readmore-wrap"><a class="blog-readmore rb_button simple" href="duis-gravida-justo-finibus-lectus-vehicula-eget-laoreet.php" target="_self"><span>Read More</span></a></div>
																										</div>
																									</div>
																								</div>
																								<div id="post-960" class="post post-960 type-post status-publish format-standard has-post-thumbnail hentry category-strategy">
																									<div class="post-inner">
																										<div class="post-media-wrapper">
																											
																											<div class="post-media format"><a class="featured-image" href="nam-leo-urna-porttitor-non-nulla-ut-semper-iaculis-justo.php" target="_self"><img width="1920" height="1080" src="wp-content/uploads/2019/05/img_20.jpg" class=" no_lazy_load wp-post-image" alt="some-alt" srcset="wp-content/uploads/2019/05/img_20.jpg 1920w, wp-content/uploads/2019/05/img_20-300x169.jpg 300w, wp-content/uploads/2019/05/img_20-768x432.jpg 768w, wp-content/uploads/2019/05/img_20-1024x576.jpg 1024w, wp-content/uploads/2019/05/img_20-600x338.jpg 600w" sizes="(max-width: 1920px) 100vw, 1920px" /></a></div>
																											
																											<div class="post-date"><a class="title_ff" href="2019/05/30/30.php"><span class="day">30</span><span class="month">May</span></a></div>
																										</div>

																										
																										<div class="post-categories color_default"><a href="category/strategy/strategy.php" rel="category tag">Strategy</a> </div>
																										

																										<h3 class="post-title">
																											<a href="nam-leo-urna-porttitor-non-nulla-ut-semper-iaculis-justo.php" rel="bookmark">
																												New team </a>
																										</h3>


																										
																										<div class="post-meta-wrapper">
																											<div class="post-date"><a href="2019/05/30/30.php">May 30, 2019</a></div>
																										</div>
																										
																										<div class="post-content">
																											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget or...<div class="blog-readmore-wrap"><a class="blog-readmore rb_button simple" href="nam-leo-urna-porttitor-non-nulla-ut-semper-iaculis-justo.php" target="_self"><span>Read More</span></a></div>
																										</div>
																									</div>
																								</div>
																								<div id="post-961" class="post post-961 type-post status-publish format-standard has-post-thumbnail hentry category-strategy">
																									<div class="post-inner">
																										<div class="post-media-wrapper">
																											
																											<div class="post-media format"><a class="featured-image" href="cras-ornare-nunc-vel-sem-interdum-fringilla.php" target="_self"><img width="1920" height="1080" src="wp-content/uploads/2019/05/img_24.jpg" class=" no_lazy_load wp-post-image" alt="some-alt" srcset="wp-content/uploads/2019/05/img_24.jpg 1920w, wp-content/uploads/2019/05/img_24-300x169.jpg 300w, wp-content/uploads/2019/05/img_24-768x432.jpg 768w, wp-content/uploads/2019/05/img_24-1024x576.jpg 1024w, wp-content/uploads/2019/05/img_24-600x338.jpg 600w" sizes="(max-width: 1920px) 100vw, 1920px" /></a></div>
																											
																											<div class="post-date"><a class="title_ff" href="2019/05/30/30.php"><span class="day">30</span><span class="month">May</span></a></div>
																										</div>

																										
																										<div class="post-categories color_default"><a href="category/strategy/strategy.php" rel="category tag">Strategy</a> </div>
																										

																										<h3 class="post-title">
																											<a href="cras-ornare-nunc-vel-sem-interdum-fringilla.php" rel="bookmark">
																												Amazing support </a>
																										</h3>


																										
																										<div class="post-meta-wrapper">
																											<div class="post-date"><a href="2019/05/30/30.php">May 30, 2019</a></div>
																										</div>
																										
																										<div class="post-content">
																											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget or...<div class="blog-readmore-wrap"><a class="blog-readmore rb_button simple" href="cras-ornare-nunc-vel-sem-interdum-fringilla.php" target="_self"><span>Read More</span></a></div>
																										</div>
																									</div>
																								</div>
																								<div id="post-966" class="post post-966 type-post status-publish format-standard has-post-thumbnail hentry category-strategy">
																									<div class="post-inner">
																										<div class="post-media-wrapper">
																											
																											<div class="post-media format"><a class="featured-image" href="quisque-ornare-mauris-a-luctus-tristique.php" target="_self"><img width="1920" height="1080" src="wp-content/uploads/2019/05/img_23.jpg" class=" no_lazy_load wp-post-image" alt="some-alt" srcset="wp-content/uploads/2019/05/img_23.jpg 1920w, wp-content/uploads/2019/05/img_23-300x169.jpg 300w, wp-content/uploads/2019/05/img_23-768x432.jpg 768w, wp-content/uploads/2019/05/img_23-1024x576.jpg 1024w, wp-content/uploads/2019/05/img_23-600x338.jpg 600w" sizes="(max-width: 1920px) 100vw, 1920px" /></a></div>
																											
																											<div class="post-date"><a class="title_ff" href="2019/05/30/30.php"><span class="day">30</span><span class="month">May</span></a></div>
																										</div>

																										
																										<div class="post-categories color_default"><a href="category/strategy/strategy.php" rel="category tag">Strategy</a> </div>
																										

																										<h3 class="post-title">
																											<a href="quisque-ornare-mauris-a-luctus-tristique.php" rel="bookmark">
																												Great team </a>
																										</h3>


																										
																										<div class="post-meta-wrapper">
																											<div class="post-date"><a href="2019/05/30/30.php">May 30, 2019</a></div>
																										</div>
																										
																										<div class="post-content">
																											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget or...<div class="blog-readmore-wrap"><a class="blog-readmore rb_button simple" href="quisque-ornare-mauris-a-luctus-tristique.php" target="_self"><span>Read More</span></a></div>
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
				<div id="rb_content_5de2268cd1853" class="rb_content_5de2268cd1853 rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1571647263433 vc_row-has-fill">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de2268cd19f8' class='rb_column_wrapper vc_col-sm-12 '>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div id='rb_inner_row_5de2268cd1b8c' class='rb_inner_row_wrapper'>
											<div class="vc_row wpb_row vc_inner vc_row-fluid">
												<div id='rb_column_5de2268cd1cc1' class='rb_column_wrapper vc_col-sm-12 '>
													<div class="wpb_column vc_column_container vc_col-sm-12">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div id='rb_logo_5de2268cd1ed9' class='site_logotype'><a href='index.php'><img src='wp-content/uploads/2019/06/logo_white.png' alt='some-alt' style='width:143px;'></a></div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id='rb_inner_row_5de2268cd1f8a' class='rb_inner_row_wrapper'>
											<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1570620243054">
												<div id='rb_column_5de2268cd20db' class='rb_column_wrapper vc_col-sm-4 '>
													<div class="wpb_column vc_column_container vc_col-sm-4">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div id='rb_icon_list_5de2268cd2206' class='rb_icon_list_module header_icons direction_column mobile_align_center'><a href='tel:3053335522' class='custom_url'><i class='flaticon-telephone-auricular-with-cable'></i><span class='title'>(305) 333-5522</span></a><a href='mailto:info@seotechstore.com' class='custom_url'><i class='flaticon-email'></i><span class='title'>info@seotechstore.com</span></a></div>
															</div>
														</div>
													</div>
												</div>
												<div id='rb_column_5de2268cd2379' class='rb_column_wrapper vc_col-sm-4 '>
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
																<div class='rb_textmodule_5de2268cd2500 rb_textmodule align_center mobile_align_center'>
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
												<div id='rb_column_5de2268cd27dc' class='rb_column_wrapper vc_col-sm-4 '>
													<div class="wpb_column vc_column_container vc_col-sm-4">
														<div class="vc_column-inner">
															<div class="wpb_wrapper">
																<div class='rb_textmodule_5de2268cd2956 rb_textmodule align_right mobile_align_center'>
																	<p class='h5 rb_textmodule_subtitle'>Subscribe to our social</p>
																</div>
																<div id='rb_icon_list_5de2268cd2a48' class='rb_icon_list_module header_icons direction_line icon_bg align_right mobile_align_center'><a href='https://facebook.com' class='custom_url'>
																		<div class='icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																				<defs>
																					<linearGradient id="gradient_5de2268cd2aee" x1="0%" y1="0%" x2="0%" y2="100%">
																						<stop offset="0%" style="stop-color:#5163dd; stop-opacity:1" />
																						<stop offset="100%" style="stop-color:#5163dd; stop-opacity:1" />
																					</linearGradient>
																				</defs>
																				<polygon class="st0" points="6,25 6,75 49.3,100 92.6,75 92.6,25 49.3,0" fill="url(#gradient_5de2268cd2aee)" />
																			</svg><i class='flaticon-facebook'></i></div><span class='title'></span>
																	</a><a href='https://www.linkedin.com/' class='custom_url'>
																		<div class='icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																				<defs>
																					<linearGradient id="gradient_5de2268cd2b3e" x1="0%" y1="0%" x2="0%" y2="100%">
																						<stop offset="0%" style="stop-color:#5163dd; stop-opacity:1" />
																						<stop offset="100%" style="stop-color:#5163dd; stop-opacity:1" />
																					</linearGradient>
																				</defs>
																				<polygon class="st0" points="6,25 6,75 49.3,100 92.6,75 92.6,25 49.3,0" fill="url(#gradient_5de2268cd2b3e)" />
																			</svg><i class='flaticon-linkedin'></i></div><span class='title'></span>
																	</a><a href='https://twitter.com' class='custom_url'>
																		<div class='icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																				<defs>
																					<linearGradient id="gradient_5de2268cd2b7a" x1="0%" y1="0%" x2="0%" y2="100%">
																						<stop offset="0%" style="stop-color:#5163dd; stop-opacity:1" />
																						<stop offset="100%" style="stop-color:#5163dd; stop-opacity:1" />
																					</linearGradient>
																				</defs>
																				<polygon class="st0" points="6,25 6,75 49.3,100 92.6,75 92.6,25 49.3,0" fill="url(#gradient_5de2268cd2b7a)" />
																			</svg><i class='flaticon-twitter'></i></div><span class='title'></span>
																	</a><a href='https://www.youtube.com/' class='custom_url'>
																		<div class='icon_wrapper'><svg style="width:100px; height:100px;" xmlns="http://www.w3.org/2000/svg">
																				<defs>
																					<linearGradient id="gradient_5de2268cd2bc4" x1="0%" y1="0%" x2="0%" y2="100%">
																						<stop offset="0%" style="stop-color:#5163dd; stop-opacity:1" />
																						<stop offset="100%" style="stop-color:#5163dd; stop-opacity:1" />
																					</linearGradient>
																				</defs>
																				<polygon class="st0" points="6,25 6,75 49.3,100 92.6,75 92.6,25 49.3,0" fill="url(#gradient_5de2268cd2bc4)" />
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
				<div id="rb_content_5de2268cd2c6c" class="rb_content_5de2268cd2c6c rb-content background_no_hover">
					<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1570622568954 vc_row-has-fill">
						<div class="row_hover_effect"></div>
						<div id='rb_column_5de2268cd2d97' class='rb_column_wrapper vc_col-sm-12 '>
							<div class="wpb_column vc_column_container vc_col-sm-12">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class='rb_textmodule_5de2268cd2ec5 rb_textmodule mobile_align_center'>
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
						<div id='rb_column_5de2268cd2fea' class='rb_column_wrapper vc_col-sm-7 '>
							<div class="wpb_column vc_column_container vc_col-sm-7">
								<div class="vc_column-inner">
									<div class="wpb_wrapper">
										<div class='rb_textmodule_5de2268cd3114 rb_textmodule mobile_align_center'>
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

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:700%7CNunito+Sans:400%2C900%2C700%7CRoboto:400" rel="stylesheet" property="stylesheet" media="all" type="text/css">

	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
	<script type="text/javascript">
		if (typeof revslider_showDoubleJqueryError === "undefined") {
			function revslider_showDoubleJqueryError(sliderID) {
				var err = "<div class='rs_error_message_box'>";
				err += "<div class='rs_error_message_oops'>Oops...</div>";
				err += "<div class='rs_error_message_content'>";
				err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
				err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' ->  'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
				err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
				err += "</div>";
				err += "</div>";
				jQuery(sliderID).show().html(err);
			}
		}
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

		.rb_content_5de2268ca7ef5>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2268ca7ef5>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2268ca7ef5>.vc_row {
			background-position: center !important;
		}

		.rb_content_5de2268ca7ef5>.vc_row {
			position: relative;
			overflow: visible;
			z-index: 2;
		}

		#rb_content_5de2268ca7ef5>.vc_row {
			-webkit-box-shadow: 0 0 15px 5px rgba(16, 1, 148, 0.05);
			-moz-box-shadow: 0 0 15px 5px rgba(16, 1, 148, 0.05);
			box-shadow: 0 0 15px 5px rgba(16, 1, 148, 0.05);
		}

		#rb_column_5de2268ca83af>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268ca83af>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268ca83af>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268ca870b>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268ca870b>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268ca870b>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_menu_5de2268ca88c7>ul {
			-webkit-justify-content: center;
			justify-content: center;
		}

		#rb_menu_5de2268ca88c7>.menu>.menu-item>a {
			color: #3e4a59;
		}

		#rb_menu_5de2268ca88c7>.menu>.menu-item>a:before,
		#rb_menu_5de2268ca88c7 .menu-item-object-rb-megamenu .sub-menu .rb_megamenu_item .widgettitle:before {
			background-color: #5163dd;
		}

		.rb_content_5de2268caa2a9>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2268caa2a9>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2268caa2a9>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268caa42a>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268caa42a>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268caa42a>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cab209>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cab209>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cab209>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2268cab209>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de2268cabcea>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cabcea>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cabcea>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2268cabcea>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de2268cac527>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cac527>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cac527>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2268cac527>.wpb_column>.vc_column-inner {
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

		.rb_content_5de2268cad1e9>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2268cad1e9>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2268cad1e9>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268cad30f>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cad30f>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cad30f>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cadca2>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cadca2>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cadca2>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cae584>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cae584>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cae584>.wpb_column>.vc_column-inner {
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

		#rb_column_5de2268caf2cd>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268caf2cd>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268caf2cd>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_inner_row_5de2268caf550>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de2268caf550>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de2268caf550>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268caf780>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268caf780>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268caf780>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_search_5de2268caf8fa {
			text-align: right;
		}

		#rb_search_5de2268caf8fa .search-trigger {
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
			#rb_search_5de2268caf8fa .search-trigger:hover {
				color: #5163DD;
			}
		}

		#rb_column_5de2268caf97a>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268caf97a>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268caf97a>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_button_wrapper_5de2268cafac6 {
			text-align: right;
		}

		.vc_custom_1561722795510 {
			padding-right: 0px !important;
			padding-left: 0px !important;
		}

		.rb_content_5de2268cb0096>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2268cb0096>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2268cb0096>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268cb0226>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cb0226>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cb0226>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cb041e>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cb041e>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cb041e>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_menu_5de2268cb058d>ul {
			-webkit-justify-content: flex-end;
			justify-content: flex-end;
		}

		#rb_menu_5de2268cb058d>.menu>.menu-item>a {
			color: #ffffff;
		}

		#rb_menu_5de2268cb058d>.menu>.menu-item>a:before,
		#rb_menu_5de2268cb058d .menu-item-object-rb-megamenu .sub-menu .rb_megamenu_item .widgettitle:before {
			background-color: #ffffff;
		}

		.rb_content_5de2268cb1826>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2268cb1826>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2268cb1826>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268cb1974>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cb1974>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cb1974>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cb23df>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cb23df>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cb23df>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2268cb23df>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de2268cb2c1c>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cb2c1c>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cb2c1c>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2268cb2c1c>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de2268cb328a>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cb328a>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cb328a>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2268cb328a>.wpb_column>.vc_column-inner {
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

		.rb_content_5de2268cb3ca1>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2268cb3ca1>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2268cb3ca1>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268cb3dd3>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cb3dd3>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cb3dd3>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cb4557>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cb4557>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cb4557>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cb4bbb>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cb4bbb>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cb4bbb>.wpb_column>.vc_column-inner {
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

		#rb_column_5de2268cb55a0>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cb55a0>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cb55a0>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_inner_row_5de2268cb5739>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de2268cb5739>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de2268cb5739>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268cb5879>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cb5879>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cb5879>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_search_5de2268cb598e {
			text-align: right;
		}

		#rb_search_5de2268cb598e .search-trigger {
			color: #ffffff;
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
			#rb_search_5de2268cb598e .search-trigger:hover {
				color: #ffffff;
			}
		}

		#rb_column_5de2268cb5a06>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cb5a06>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cb5a06>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_icon_list_5de2268cb5b61>a,
		#rb_icon_list_5de2268cb5b61>.mini-cart>a,
		#rb_icon_list_5de2268cb5b61 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a {
			color: #ffffff;
		}

		#rb_icon_list_5de2268cb5b61.header_icons>*~.mini-cart:not(:first-child) .woo_mini-count {
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

			#rb_icon_list_5de2268cb5b61>a:hover,
			#rb_icon_list_5de2268cb5b61>.mini-cart>a:hover,
			#rb_icon_list_5de2268cb5b61 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a:hover {
				color: #ffffff;
			}
		}

		.rb_content_5de2268cb7355>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2268cb7355>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2268cb7355>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268cb74a8>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cb74a8>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cb74a8>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cb7f7e>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cb7f7e>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cb7f7e>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2268cb7f7e>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de2268cb87bb>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cb87bb>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cb87bb>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2268cb87bb>.wpb_column>.vc_column-inner {
				border-left-width: 0px !important;
				padding-left: 15px !important;
			}
		}

		#rb_column_5de2268cb8df2>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cb8df2>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cb8df2>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2268cb8df2>.wpb_column>.vc_column-inner {
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

		.rb_content_5de2268cb97d4>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2268cb97d4>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2268cb97d4>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268cb9900>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cb9900>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cb9900>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cba0f4>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cba0f4>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cba0f4>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cba711>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cba711>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cba711>.wpb_column>.vc_column-inner {
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

		.rb_content_5de2268cc3a87>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2268cc3a87>.vc_row {
			background-size: contain !important;
		}

		.rb_content_5de2268cc3a87>.vc_row {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			.rb_content_5de2268cc3a87>.vc_row {
				padding-bottom: 50px !important;
			}
		}

		#rb_column_5de2268cc3c74>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cc3c74>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cc3c74>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_inner_row_5de2268cc3e36>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de2268cc3e36>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de2268cc3e36>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268cc3f97>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cc3f97>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cc3f97>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cc3f97 {
			transition-duration: 500ms;
		}

		#rb_column_5de2268cc3f97 {
			transition-delay: 90ms;
		}

		#rb_column_5de2268cc3f97 {
			transition-timing-function: ease;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2268cc3f97>.wpb_column>.vc_column-inner {
				padding-bottom: 40px !important;
			}
		}

		#rb_service_5de2268cc42b9 {
			padding-top: 60px !important;
			padding-right: 50px !important;
			padding-bottom: 60px !important;
			padding-left: 50px !important;
		}

		#rb_service_5de2268cc42b9 .service_icon_wrapper i,
		#rb_service_5de2268cc42b9 .service_icon_wrapper i:before {
			font-size: 60px;
		}

		#rb_service_5de2268cc42b9 .service_icon_wrapper i.svg {
			width: 60px !important;
			height: 60px !important;
		}

		#rb_service_5de2268cc42b9 .service_icon_wrapper>svg {
			width: 100px !important;
			height: 100px !important;
		}

		#rb_service_5de2268cc42b9 .service_icon_wrapper>svg path,
		#rb_service_5de2268cc42b9 .service_icon_wrapper>svg polygon,
		#rb_service_5de2268cc42b9 .service_icon_wrapper>svg circle {
			-webkit-transform: scale(1);
			transform: scale(1);
		}

		#rb_service_5de2268cc42b9 .service_icon_wrapper>svg rect {
			-webkit-transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de2268cc42b9.style_round .icon_outside {
			top: -40px;
		}

		#rb_service_5de2268cc42b9.style_rhombus .icon_outside {
			top: -30.30303030303px;
		}

		#rb_service_5de2268cc42b9.style_square .icon_outside {
			top: -50px;
		}

		#rb_service_5de2268cc42b9.style_hexagon .icon_outside {
			top: -30.30303030303px;
		}

		#rb_service_5de2268cc42b9 .service_title {
			font-size: 20px;
		}

		#rb_service_5de2268cc42b9 .service_title {
			line-height: 25px;
		}

		#rb_service_5de2268cc42b9 .service_title {
			margin-top: 14px;
		}

		#rb_service_5de2268cc42b9 .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de2268cc42b9 .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de2268cc42b9 .service-button {
			font-size: 16px;
		}

		#rb_service_5de2268cc42b9 .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de2268cc42b9 .service-button {
			margin-top: 10px;
		}

		#rb_service_5de2268cc42b9 .service_icon_wrapper i {
			background-image: -webkit-linear-gradient(-10deg, #6276fe, #5264df, #5264df, #6276fe);
			background-image: -moz-linear-gradient(-10deg, #6276fe, #5264df, #5264df, #6276fe);
			background-image: linear-gradient(-10deg, #6276fe, #5264df, #5264df, #6276fe);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_service_5de2268cc42b9:hover .service_icon_wrapper i {
			background-position: 100% 100%;
		}

		#rb_service_5de2268cc42b9 .service_title,
		#rb_service_5de2268cc42b9 .content_wrapper,
		#rb_service_5de2268cc42b9 .content_wrapper>a,
		#rb_service_5de2268cc42b9 .service-button {
			color: #3e4a59;
		}

		#rb_service_5de2268cc42b9:hover .service_title,
		#rb_service_5de2268cc42b9:hover .content_wrapper,
		#rb_service_5de2268cc42b9:hover .content_wrapper>a,
		#rb_service_5de2268cc42b9:hover .service-button {
			color: #3e4a59;
		}

		#rb_service_5de2268cc42b9 .service-button:after {
			color: #5163dd;
		}

		#rb_service_5de2268cc42b9 .divider {
			background-color: #5163dd;
		}

		#rb_service_5de2268cc42b9:hover .service-button:after {
			color: #5163dd;
		}

		#rb_service_5de2268cc42b9:hover .divider {
			background-color: #5163dd;
		}

		@media screen and (max-width: 991px) {
			#rb_service_5de2268cc42b9 {
				padding-top: 50px !important;
				padding-right: 30px !important;
				padding-bottom: 50px !important;
				padding-left: 30px !important;
			}
		}

		#rb_column_5de2268cc4501>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cc4501>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cc4501>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cc4501 {
			transition-duration: 500ms;
		}

		#rb_column_5de2268cc4501 {
			transition-delay: 180ms;
		}

		#rb_column_5de2268cc4501 {
			transition-timing-function: ease;
		}

		#rb_service_5de2268cc46be {
			padding-top: 60px !important;
			padding-right: 50px !important;
			padding-bottom: 60px !important;
			padding-left: 50px !important;
		}

		#rb_service_5de2268cc46be .service_icon_wrapper i,
		#rb_service_5de2268cc46be .service_icon_wrapper i:before {
			font-size: 60px;
		}

		#rb_service_5de2268cc46be .service_icon_wrapper i.svg {
			width: 60px !important;
			height: 60px !important;
		}

		#rb_service_5de2268cc46be .service_icon_wrapper>svg {
			width: 100px !important;
			height: 100px !important;
		}

		#rb_service_5de2268cc46be .service_icon_wrapper>svg path,
		#rb_service_5de2268cc46be .service_icon_wrapper>svg polygon,
		#rb_service_5de2268cc46be .service_icon_wrapper>svg circle {
			-webkit-transform: scale(1);
			transform: scale(1);
		}

		#rb_service_5de2268cc46be .service_icon_wrapper>svg rect {
			-webkit-transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de2268cc46be.style_round .icon_outside {
			top: -40px;
		}

		#rb_service_5de2268cc46be.style_rhombus .icon_outside {
			top: -30.30303030303px;
		}

		#rb_service_5de2268cc46be.style_square .icon_outside {
			top: -50px;
		}

		#rb_service_5de2268cc46be.style_hexagon .icon_outside {
			top: -30.30303030303px;
		}

		#rb_service_5de2268cc46be .service_title {
			font-size: 20px;
		}

		#rb_service_5de2268cc46be .service_title {
			line-height: 25px;
		}

		#rb_service_5de2268cc46be .service_title {
			margin-top: 14px;
		}

		#rb_service_5de2268cc46be .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de2268cc46be .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de2268cc46be .service-button {
			font-size: 16px;
		}

		#rb_service_5de2268cc46be .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de2268cc46be .service-button {
			margin-top: 10px;
		}

		#rb_service_5de2268cc46be .service_icon_wrapper i {
			background-image: -webkit-linear-gradient(-10deg, #6276fe, #5264df, #5264df, #6276fe);
			background-image: -moz-linear-gradient(-10deg, #6276fe, #5264df, #5264df, #6276fe);
			background-image: linear-gradient(-10deg, #6276fe, #5264df, #5264df, #6276fe);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_service_5de2268cc46be:hover .service_icon_wrapper i {
			background-position: 100% 100%;
		}

		#rb_service_5de2268cc46be .service_title,
		#rb_service_5de2268cc46be .content_wrapper,
		#rb_service_5de2268cc46be .content_wrapper>a,
		#rb_service_5de2268cc46be .service-button {
			color: #3e4a59;
		}

		#rb_service_5de2268cc46be:hover .service_title,
		#rb_service_5de2268cc46be:hover .content_wrapper,
		#rb_service_5de2268cc46be:hover .content_wrapper>a,
		#rb_service_5de2268cc46be:hover .service-button {
			color: #3e4a59;
		}

		#rb_service_5de2268cc46be .service-button:after {
			color: #5163dd;
		}

		#rb_service_5de2268cc46be .divider {
			background-color: #5163dd;
		}

		#rb_service_5de2268cc46be:hover .service-button:after {
			color: #5163dd;
		}

		#rb_service_5de2268cc46be:hover .divider {
			background-color: #5163dd;
		}

		@media screen and (max-width: 991px) {
			#rb_service_5de2268cc46be {
				padding-top: 50px !important;
				padding-right: 30px !important;
				padding-bottom: 50px !important;
				padding-left: 30px !important;
			}
		}

		#rb_column_5de2268cc48a6>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cc48a6>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cc48a6>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cc48a6 {
			transition-duration: 500ms;
		}

		#rb_column_5de2268cc48a6 {
			transition-delay: 270ms;
		}

		#rb_column_5de2268cc48a6 {
			transition-timing-function: ease;
		}

		#rb_service_5de2268cc4a59 {
			padding-top: 60px !important;
			padding-right: 50px !important;
			padding-bottom: 60px !important;
			padding-left: 50px !important;
		}

		#rb_service_5de2268cc4a59 .service_icon_wrapper i,
		#rb_service_5de2268cc4a59 .service_icon_wrapper i:before {
			font-size: 60px;
		}

		#rb_service_5de2268cc4a59 .service_icon_wrapper i.svg {
			width: 60px !important;
			height: 60px !important;
		}

		#rb_service_5de2268cc4a59 .service_icon_wrapper>svg {
			width: 100px !important;
			height: 100px !important;
		}

		#rb_service_5de2268cc4a59 .service_icon_wrapper>svg path,
		#rb_service_5de2268cc4a59 .service_icon_wrapper>svg polygon,
		#rb_service_5de2268cc4a59 .service_icon_wrapper>svg circle {
			-webkit-transform: scale(1);
			transform: scale(1);
		}

		#rb_service_5de2268cc4a59 .service_icon_wrapper>svg rect {
			-webkit-transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(1) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de2268cc4a59.style_round .icon_outside {
			top: -40px;
		}

		#rb_service_5de2268cc4a59.style_rhombus .icon_outside {
			top: -30.30303030303px;
		}

		#rb_service_5de2268cc4a59.style_square .icon_outside {
			top: -50px;
		}

		#rb_service_5de2268cc4a59.style_hexagon .icon_outside {
			top: -30.30303030303px;
		}

		#rb_service_5de2268cc4a59 .service_title {
			font-size: 20px;
		}

		#rb_service_5de2268cc4a59 .service_title {
			line-height: 25px;
		}

		#rb_service_5de2268cc4a59 .service_title {
			margin-top: 14px;
		}

		#rb_service_5de2268cc4a59 .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de2268cc4a59 .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de2268cc4a59 .service-button {
			font-size: 16px;
		}

		#rb_service_5de2268cc4a59 .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de2268cc4a59 .service-button {
			margin-top: 10px;
		}

		#rb_service_5de2268cc4a59 .service_icon_wrapper i {
			background-image: -webkit-linear-gradient(-10deg, #6276fe, #5264df, #5264df, #6276fe);
			background-image: -moz-linear-gradient(-10deg, #6276fe, #5264df, #5264df, #6276fe);
			background-image: linear-gradient(-10deg, #6276fe, #5264df, #5264df, #6276fe);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_service_5de2268cc4a59:hover .service_icon_wrapper i {
			background-position: 100% 100%;
		}

		#rb_service_5de2268cc4a59 .service_title,
		#rb_service_5de2268cc4a59 .content_wrapper,
		#rb_service_5de2268cc4a59 .content_wrapper>a,
		#rb_service_5de2268cc4a59 .service-button {
			color: #3e4a59;
		}

		#rb_service_5de2268cc4a59:hover .service_title,
		#rb_service_5de2268cc4a59:hover .content_wrapper,
		#rb_service_5de2268cc4a59:hover .content_wrapper>a,
		#rb_service_5de2268cc4a59:hover .service-button {
			color: #3e4a59;
		}

		#rb_service_5de2268cc4a59 .service-button:after {
			color: #5163dd;
		}

		#rb_service_5de2268cc4a59 .divider {
			background-color: #5163dd;
		}

		#rb_service_5de2268cc4a59:hover .service-button:after {
			color: #5163dd;
		}

		#rb_service_5de2268cc4a59:hover .divider {
			background-color: #5163dd;
		}

		@media screen and (max-width: 991px) {
			#rb_service_5de2268cc4a59 {
				padding-top: 50px !important;
				padding-right: 30px !important;
				padding-bottom: 50px !important;
				padding-left: 30px !important;
			}
		}

		#rb_inner_row_5de2268cc4c54>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de2268cc4c54>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de2268cc4c54>.vc_row {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_inner_row_5de2268cc4c54>.vc_row {
				padding-top: 50px !important;
			}
		}

		#rb_column_5de2268cc4d96>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cc4d96>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cc4d96>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de2268cc4f1e {
			text-align: center;
		}

		.rb_textmodule_5de2268cc4f1e .rb_textmodule_title,
		.rb_textmodule_5de2268cc4f1e .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de2268cc4f1e .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cc4f1e {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de2268cc4f1e a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2268cc4f1e .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de2268cc4f1e .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cc4f1e .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2268cc4f1e .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cc4f1e .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de2268cc4f1e .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de2268cc4f1e .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de2268cc4f1e .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de2268cc4f1e .rb_textmodule_title {
			margin-bottom: 31px;
			padding-bottom: 31px;
		}

		.rb_textmodule_5de2268cc4f1e .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de2268cc4f1e .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de2268cc4f1e .rb_textmodule_button {
			margin-top: 35px;
		}

		#rb_inner_row_5de2268cc5052>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de2268cc5052>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de2268cc5052>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268cc51aa>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cc51aa>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cc51aa>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cc51aa {
			transition-duration: 500ms;
		}

		#rb_column_5de2268cc51aa {
			transition-timing-function: ease;
		}

		@media screen and (max-width: 1199px) {
			#rb_column_5de2268cc51aa>.wpb_column>.vc_column-inner {
				padding-top: 50px !important;
			}
		}

		@media screen and (max-width: 991px) {
			#rb_column_5de2268cc51aa>.wpb_column>.vc_column-inner {
				padding-top: 100px !important;
			}
		}

		@media screen and (max-width: 991px) {
			#rb_image_5de2268cc530d {
				text-align: center;
			}
		}

		#rb_column_5de2268cc552f>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cc552f>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cc552f>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cc552f {
			transition-duration: 500ms;
		}

		#rb_column_5de2268cc552f {
			transition-timing-function: ease;
		}

		.rb_textmodule_5de2268cc5676 .rb_textmodule_title,
		.rb_textmodule_5de2268cc5676 .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de2268cc5676 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cc5676 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de2268cc5676 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2268cc5676 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de2268cc5676 .rb_textmodule_content_wrapper ul li:before {
			color: #6e7de3;
		}

		.rb_textmodule_5de2268cc5676 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2268cc5676 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cc5676 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de2268cc5676 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de2268cc5676 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de2268cc5676 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de2268cc5676 .rb_textmodule_title {
			margin-bottom: 12.5px;
			padding-bottom: 12.5px;
		}

		.rb_textmodule_5de2268cc5676 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de2268cc5676 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de2268cc5676 .rb_textmodule_button {
			margin-top: 40px;
		}

		.rb_textmodule_5de2268cc5676 .rb_textmodule_button {
			color: #ffffff;
		}

		.rb_textmodule_5de2268cc5676 .rb_textmodule_button {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2268cc5676 .rb_textmodule_button {
			border-color: #5163dd;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2268cc5676 .rb_textmodule_button:hover {
				color: #3e4a59;
			}

			.rb_textmodule_5de2268cc5676 .rb_textmodule_button:hover {
				background-color: rgba(255, 255, 255, 0.01);
			}

			.rb_textmodule_5de2268cc5676 .rb_textmodule_button:hover {
				border-color: #5163dd;
			}
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de2268cc5676 {
				text-align: center;
			}

			.rb_textmodule_5de2268cc5676 .rb_textmodule_title {
				font-size: 30px;
			}

			.rb_textmodule_5de2268cc5676 .rb_textmodule_subtitle {
				font-size: 20px;
			}

			.rb_textmodule_5de2268cc5676 .rb_textmodule_title {
				margin-bottom: 20px;
				padding-bottom: 20px;
			}

			.rb_textmodule_5de2268cc5676 .rb_textmodule_button {
				margin-top: 35px;
			}
		}

		.rb_content_5de2268cc588d>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2268cc588d>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2268cc588d>.vc_row {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			.rb_content_5de2268cc588d>.vc_row {
				padding-bottom: 50px !important;
			}
		}

		#rb_column_5de2268cc5a93>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cc5a93>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cc5a93>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de2268cc5c4a {
			padding-bottom: 20px !important;
			;
		}

		.rb_textmodule_5de2268cc5c4a {
			text-align: center;
		}

		.rb_textmodule_5de2268cc5c4a .rb_textmodule_title,
		.rb_textmodule_5de2268cc5c4a .rb_textmodule_button.simple {
			color: #ffffff;
		}

		.rb_textmodule_5de2268cc5c4a .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cc5c4a {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de2268cc5c4a a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2268cc5c4a .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de2268cc5c4a .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cc5c4a .rb_textmodule_divider {
			background-color: #ffffff;
		}

		.rb_textmodule_5de2268cc5c4a .rb_textmodule_button.simple:after {
			color: #ffffff;
		}

		.rb_textmodule_5de2268cc5c4a .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de2268cc5c4a .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de2268cc5c4a .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de2268cc5c4a .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de2268cc5c4a .rb_textmodule_title {
			margin-bottom: 31px;
			padding-bottom: 31px;
		}

		.rb_textmodule_5de2268cc5c4a .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de2268cc5c4a .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de2268cc5c4a .rb_textmodule_button {
			margin-top: 40px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de2268cc5c4a {
				text-align: center;
			}

			.rb_textmodule_5de2268cc5c4a .rb_textmodule_title {
				font-size: 30px;
			}

			.rb_textmodule_5de2268cc5c4a .rb_textmodule_subtitle {
				font-size: 20px;
			}

			.rb_textmodule_5de2268cc5c4a .rb_textmodule_title {
				margin-bottom: 20px;
				padding-bottom: 20px;
			}

			.rb_textmodule_5de2268cc5c4a .rb_textmodule_button {
				margin-top: 35px;
			}
		}

		#rb_inner_row_5de2268cc5d40>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de2268cc5d40>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de2268cc5d40>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268cc5e8d>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cc5e8d>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cc5e8d>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cc5e8d {
			transition-duration: 500ms;
		}

		#rb_column_5de2268cc5e8d {
			transition-delay: 270ms;
		}

		#rb_column_5de2268cc5e8d {
			transition-timing-function: ease;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2268cc5e8d>.wpb_column>.vc_column-inner {
				padding-bottom: 20px !important;
			}
		}

		#rb_service_5de2268cc60a5 {
			border-top-width: 1px !important;
			border-right-width: 1px !important;
			border-bottom-width: 1px !important;
			border-left-width: 1px !important;
			padding-top: 30px !important;
			padding-right: 70px !important;
			padding-bottom: 30px !important;
			padding-left: 30px !important;
			border-left-color: #6677e4 !important;
			border-left-style: solid !important;
			border-right-color: #6677e4 !important;
			border-right-style: solid !important;
			border-top-color: #6677e4 !important;
			border-top-style: solid !important;
			border-bottom-color: #6677e4 !important;
			border-bottom-style: solid !important;
			border-radius: 10px !important;
		}

		#rb_service_5de2268cc60a5 .service_icon_wrapper i,
		#rb_service_5de2268cc60a5 .service_icon_wrapper i:before {
			font-size: 50px;
		}

		#rb_service_5de2268cc60a5 .service_icon_wrapper i.svg {
			width: 50px !important;
			height: 50px !important;
		}

		#rb_service_5de2268cc60a5 .service_icon_wrapper>svg {
			width: 80px !important;
			height: 80px !important;
		}

		#rb_service_5de2268cc60a5 .service_icon_wrapper>svg path,
		#rb_service_5de2268cc60a5 .service_icon_wrapper>svg polygon,
		#rb_service_5de2268cc60a5 .service_icon_wrapper>svg circle {
			-webkit-transform: scale(0.8);
			transform: scale(0.8);
		}

		#rb_service_5de2268cc60a5 .service_icon_wrapper>svg rect {
			-webkit-transform: scale(0.8) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(0.8) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de2268cc60a5 .service_title {
			font-size: 20px;
		}

		#rb_service_5de2268cc60a5 .service_title {
			line-height: 25px;
		}

		#rb_service_5de2268cc60a5 .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de2268cc60a5 .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de2268cc60a5 .service-button {
			font-size: 16px;
		}

		#rb_service_5de2268cc60a5 .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de2268cc60a5 .service-button {
			margin-top: 10px;
		}

		#rb_service_5de2268cc60a5 .service_title {
			margin: 0px 0px 2px 0px;
		}

		#rb_service_5de2268cc60a5 .service_icon_wrapper i,
		#rb_service_5de2268cc60a5 .service_icon_wrapper i:before {
			color: #ffffff;
		}

		#rb_service_5de2268cc60a5 .service_title {
			color: #ffffff;
		}

		#rb_service_5de2268cc60a5 .service_divider {
			background-color: #3e4a59;
		}

		#rb_service_5de2268cc60a5 .content_wrapper,
		#rb_service_5de2268cc60a5 .content_wrapper>a {
			color: rgba(255, 255, 255, 0.8);
		}

		#rb_service_5de2268cc60a5 .content_wrapper>a:hover {
			color: rgba(255, 255, 255, 0.8);
		}

		#rb_service_5de2268cc60a5 .service-button {
			color: #ffffff;
		}

		#rb_service_5de2268cc60a5 .service-button:after {
			color: #ffffff;
		}

		@media screen and (max-width: 767px) {
			#rb_service_5de2268cc60a5 {
				padding-right: 30px !important;
				padding-left: 30px !important;
			}

			#rb_service_5de2268cc60a5 {
				text-align: center;
			}
		}

		#rb_column_5de2268cc61ad>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cc61ad>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cc61ad>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cc61ad {
			transition-duration: 500ms;
		}

		#rb_column_5de2268cc61ad {
			transition-delay: 180ms;
		}

		#rb_column_5de2268cc61ad {
			transition-timing-function: ease;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2268cc61ad>.wpb_column>.vc_column-inner {
				padding-bottom: 20px !important;
			}
		}

		#rb_service_5de2268cc636f {
			border-top-width: 1px !important;
			border-right-width: 1px !important;
			border-bottom-width: 1px !important;
			border-left-width: 1px !important;
			padding-top: 30px !important;
			padding-right: 70px !important;
			padding-bottom: 30px !important;
			padding-left: 30px !important;
			border-left-color: #6677e4 !important;
			border-left-style: solid !important;
			border-right-color: #6677e4 !important;
			border-right-style: solid !important;
			border-top-color: #6677e4 !important;
			border-top-style: solid !important;
			border-bottom-color: #6677e4 !important;
			border-bottom-style: solid !important;
			border-radius: 10px !important;
		}

		#rb_service_5de2268cc636f .service_icon_wrapper i,
		#rb_service_5de2268cc636f .service_icon_wrapper i:before {
			font-size: 50px;
		}

		#rb_service_5de2268cc636f .service_icon_wrapper i.svg {
			width: 50px !important;
			height: 50px !important;
		}

		#rb_service_5de2268cc636f .service_icon_wrapper>svg {
			width: 80px !important;
			height: 80px !important;
		}

		#rb_service_5de2268cc636f .service_icon_wrapper>svg path,
		#rb_service_5de2268cc636f .service_icon_wrapper>svg polygon,
		#rb_service_5de2268cc636f .service_icon_wrapper>svg circle {
			-webkit-transform: scale(0.8);
			transform: scale(0.8);
		}

		#rb_service_5de2268cc636f .service_icon_wrapper>svg rect {
			-webkit-transform: scale(0.8) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(0.8) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de2268cc636f .service_title {
			font-size: 20px;
		}

		#rb_service_5de2268cc636f .service_title {
			line-height: 25px;
		}

		#rb_service_5de2268cc636f .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de2268cc636f .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de2268cc636f .service-button {
			font-size: 16px;
		}

		#rb_service_5de2268cc636f .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de2268cc636f .service-button {
			margin-top: 10px;
		}

		#rb_service_5de2268cc636f .service_title {
			margin: 0px 0px 2px 0px;
		}

		#rb_service_5de2268cc636f .service_icon_wrapper i,
		#rb_service_5de2268cc636f .service_icon_wrapper i:before {
			color: #ffffff;
		}

		#rb_service_5de2268cc636f .service_title {
			color: #ffffff;
		}

		#rb_service_5de2268cc636f .service_divider {
			background-color: #3e4a59;
		}

		#rb_service_5de2268cc636f .content_wrapper,
		#rb_service_5de2268cc636f .content_wrapper>a {
			color: rgba(255, 255, 255, 0.8);
		}

		#rb_service_5de2268cc636f .content_wrapper>a:hover {
			color: rgba(255, 255, 255, 0.8);
		}

		#rb_service_5de2268cc636f .service-button {
			color: #ffffff;
		}

		#rb_service_5de2268cc636f .service-button:after {
			color: #ffffff;
		}

		@media screen and (max-width: 767px) {
			#rb_service_5de2268cc636f {
				padding-right: 30px !important;
				padding-left: 30px !important;
			}

			#rb_service_5de2268cc636f {
				text-align: center;
			}
		}

		#rb_column_5de2268cc6448>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cc6448>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cc6448>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cc6448 {
			transition-duration: 500ms;
		}

		#rb_column_5de2268cc6448 {
			transition-delay: 90ms;
		}

		#rb_column_5de2268cc6448 {
			transition-timing-function: ease;
		}

		#rb_service_5de2268cc65f2 {
			border-top-width: 1px !important;
			border-right-width: 1px !important;
			border-bottom-width: 1px !important;
			border-left-width: 1px !important;
			padding-top: 30px !important;
			padding-right: 70px !important;
			padding-bottom: 30px !important;
			padding-left: 30px !important;
			border-left-color: #6677e4 !important;
			border-left-style: solid !important;
			border-right-color: #6677e4 !important;
			border-right-style: solid !important;
			border-top-color: #6677e4 !important;
			border-top-style: solid !important;
			border-bottom-color: #6677e4 !important;
			border-bottom-style: solid !important;
			border-radius: 10px !important;
		}

		#rb_service_5de2268cc65f2 .service_icon_wrapper i,
		#rb_service_5de2268cc65f2 .service_icon_wrapper i:before {
			font-size: 50px;
		}

		#rb_service_5de2268cc65f2 .service_icon_wrapper i.svg {
			width: 50px !important;
			height: 50px !important;
		}

		#rb_service_5de2268cc65f2 .service_icon_wrapper>svg {
			width: 80px !important;
			height: 80px !important;
		}

		#rb_service_5de2268cc65f2 .service_icon_wrapper>svg path,
		#rb_service_5de2268cc65f2 .service_icon_wrapper>svg polygon,
		#rb_service_5de2268cc65f2 .service_icon_wrapper>svg circle {
			-webkit-transform: scale(0.8);
			transform: scale(0.8);
		}

		#rb_service_5de2268cc65f2 .service_icon_wrapper>svg rect {
			-webkit-transform: scale(0.8) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(0.8) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de2268cc65f2 .service_title {
			font-size: 20px;
		}

		#rb_service_5de2268cc65f2 .service_title {
			line-height: 25px;
		}

		#rb_service_5de2268cc65f2 .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de2268cc65f2 .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de2268cc65f2 .service-button {
			font-size: 16px;
		}

		#rb_service_5de2268cc65f2 .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de2268cc65f2 .service-button {
			margin-top: 10px;
		}

		#rb_service_5de2268cc65f2 .service_title {
			margin: 0px 0px 2px 0px;
		}

		#rb_service_5de2268cc65f2 .service_icon_wrapper i,
		#rb_service_5de2268cc65f2 .service_icon_wrapper i:before {
			color: #ffffff;
		}

		#rb_service_5de2268cc65f2 .service_title {
			color: #ffffff;
		}

		#rb_service_5de2268cc65f2 .service_divider {
			background-color: #3e4a59;
		}

		#rb_service_5de2268cc65f2 .content_wrapper,
		#rb_service_5de2268cc65f2 .content_wrapper>a {
			color: rgba(255, 255, 255, 0.8);
		}

		#rb_service_5de2268cc65f2 .content_wrapper>a:hover {
			color: rgba(255, 255, 255, 0.8);
		}

		#rb_service_5de2268cc65f2 .service-button {
			color: #ffffff;
		}

		#rb_service_5de2268cc65f2 .service-button:after {
			color: #ffffff;
		}

		@media screen and (max-width: 767px) {
			#rb_service_5de2268cc65f2 {
				padding-right: 30px !important;
				padding-left: 30px !important;
			}

			#rb_service_5de2268cc65f2 {
				text-align: center;
			}
		}

		#rb_inner_row_5de2268cc66f7>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de2268cc66f7>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de2268cc66f7>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268cc67fc>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cc67fc>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cc67fc>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cc67fc {
			transition-duration: 500ms;
		}

		#rb_column_5de2268cc67fc {
			transition-delay: 270ms;
		}

		#rb_column_5de2268cc67fc {
			transition-timing-function: ease;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2268cc67fc>.wpb_column>.vc_column-inner {
				padding-bottom: 20px !important;
			}
		}

		#rb_service_5de2268cc69b7 {
			border-top-width: 1px !important;
			border-right-width: 1px !important;
			border-bottom-width: 1px !important;
			border-left-width: 1px !important;
			padding-top: 30px !important;
			padding-right: 70px !important;
			padding-bottom: 30px !important;
			padding-left: 30px !important;
			border-left-color: #6677e4 !important;
			border-left-style: solid !important;
			border-right-color: #6677e4 !important;
			border-right-style: solid !important;
			border-top-color: #6677e4 !important;
			border-top-style: solid !important;
			border-bottom-color: #6677e4 !important;
			border-bottom-style: solid !important;
			border-radius: 10px !important;
		}

		#rb_service_5de2268cc69b7 .service_icon_wrapper i,
		#rb_service_5de2268cc69b7 .service_icon_wrapper i:before {
			font-size: 50px;
		}

		#rb_service_5de2268cc69b7 .service_icon_wrapper i.svg {
			width: 50px !important;
			height: 50px !important;
		}

		#rb_service_5de2268cc69b7 .service_icon_wrapper>svg {
			width: 80px !important;
			height: 80px !important;
		}

		#rb_service_5de2268cc69b7 .service_icon_wrapper>svg path,
		#rb_service_5de2268cc69b7 .service_icon_wrapper>svg polygon,
		#rb_service_5de2268cc69b7 .service_icon_wrapper>svg circle {
			-webkit-transform: scale(0.8);
			transform: scale(0.8);
		}

		#rb_service_5de2268cc69b7 .service_icon_wrapper>svg rect {
			-webkit-transform: scale(0.8) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(0.8) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de2268cc69b7 .service_title {
			font-size: 20px;
		}

		#rb_service_5de2268cc69b7 .service_title {
			line-height: 25px;
		}

		#rb_service_5de2268cc69b7 .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de2268cc69b7 .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de2268cc69b7 .service-button {
			font-size: 16px;
		}

		#rb_service_5de2268cc69b7 .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de2268cc69b7 .service-button {
			margin-top: 10px;
		}

		#rb_service_5de2268cc69b7 .service_title {
			margin: 0px 0px 2px 0px;
		}

		#rb_service_5de2268cc69b7 .service_icon_wrapper i,
		#rb_service_5de2268cc69b7 .service_icon_wrapper i:before {
			color: #ffffff;
		}

		#rb_service_5de2268cc69b7 .service_title {
			color: #ffffff;
		}

		#rb_service_5de2268cc69b7 .service_divider {
			background-color: #3e4a59;
		}

		#rb_service_5de2268cc69b7 .content_wrapper,
		#rb_service_5de2268cc69b7 .content_wrapper>a {
			color: rgba(255, 255, 255, 0.8);
		}

		#rb_service_5de2268cc69b7 .content_wrapper>a:hover {
			color: rgba(255, 255, 255, 0.8);
		}

		#rb_service_5de2268cc69b7 .service-button {
			color: #ffffff;
		}

		#rb_service_5de2268cc69b7 .service-button:after {
			color: #ffffff;
		}

		@media screen and (max-width: 767px) {
			#rb_service_5de2268cc69b7 {
				padding-right: 30px !important;
				padding-left: 30px !important;
			}

			#rb_service_5de2268cc69b7 {
				text-align: center;
			}
		}

		#rb_column_5de2268cc6ab1>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cc6ab1>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cc6ab1>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cc6ab1 {
			transition-duration: 500ms;
		}

		#rb_column_5de2268cc6ab1 {
			transition-delay: 180ms;
		}

		#rb_column_5de2268cc6ab1 {
			transition-timing-function: ease;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2268cc6ab1>.wpb_column>.vc_column-inner {
				padding-bottom: 20px !important;
			}
		}

		#rb_service_5de2268cc6c65 {
			border-top-width: 1px !important;
			border-right-width: 1px !important;
			border-bottom-width: 1px !important;
			border-left-width: 1px !important;
			padding-top: 30px !important;
			padding-right: 70px !important;
			padding-bottom: 30px !important;
			padding-left: 30px !important;
			border-left-color: #6677e4 !important;
			border-left-style: solid !important;
			border-right-color: #6677e4 !important;
			border-right-style: solid !important;
			border-top-color: #6677e4 !important;
			border-top-style: solid !important;
			border-bottom-color: #6677e4 !important;
			border-bottom-style: solid !important;
			border-radius: 10px !important;
		}

		#rb_service_5de2268cc6c65 .service_icon_wrapper i,
		#rb_service_5de2268cc6c65 .service_icon_wrapper i:before {
			font-size: 50px;
		}

		#rb_service_5de2268cc6c65 .service_icon_wrapper i.svg {
			width: 50px !important;
			height: 50px !important;
		}

		#rb_service_5de2268cc6c65 .service_icon_wrapper>svg {
			width: 80px !important;
			height: 80px !important;
		}

		#rb_service_5de2268cc6c65 .service_icon_wrapper>svg path,
		#rb_service_5de2268cc6c65 .service_icon_wrapper>svg polygon,
		#rb_service_5de2268cc6c65 .service_icon_wrapper>svg circle {
			-webkit-transform: scale(0.8);
			transform: scale(0.8);
		}

		#rb_service_5de2268cc6c65 .service_icon_wrapper>svg rect {
			-webkit-transform: scale(0.8) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(0.8) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de2268cc6c65 .service_title {
			font-size: 20px;
		}

		#rb_service_5de2268cc6c65 .service_title {
			line-height: 25px;
		}

		#rb_service_5de2268cc6c65 .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de2268cc6c65 .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de2268cc6c65 .service-button {
			font-size: 16px;
		}

		#rb_service_5de2268cc6c65 .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de2268cc6c65 .service-button {
			margin-top: 10px;
		}

		#rb_service_5de2268cc6c65 .service_title {
			margin: 0px 0px 2px 0px;
		}

		#rb_service_5de2268cc6c65 .service_icon_wrapper i,
		#rb_service_5de2268cc6c65 .service_icon_wrapper i:before {
			color: #ffffff;
		}

		#rb_service_5de2268cc6c65 .service_title {
			color: #ffffff;
		}

		#rb_service_5de2268cc6c65 .service_divider {
			background-color: #3e4a59;
		}

		#rb_service_5de2268cc6c65 .content_wrapper,
		#rb_service_5de2268cc6c65 .content_wrapper>a {
			color: rgba(255, 255, 255, 0.8);
		}

		#rb_service_5de2268cc6c65 .content_wrapper>a:hover {
			color: rgba(255, 255, 255, 0.8);
		}

		#rb_service_5de2268cc6c65 .service-button {
			color: #ffffff;
		}

		#rb_service_5de2268cc6c65 .service-button:after {
			color: #ffffff;
		}

		@media screen and (max-width: 767px) {
			#rb_service_5de2268cc6c65 {
				padding-right: 30px !important;
				padding-left: 30px !important;
			}

			#rb_service_5de2268cc6c65 {
				text-align: center;
			}
		}

		#rb_column_5de2268cc6d5c>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cc6d5c>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cc6d5c>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cc6d5c {
			transition-duration: 500ms;
		}

		#rb_column_5de2268cc6d5c {
			transition-delay: 90ms;
		}

		#rb_column_5de2268cc6d5c {
			transition-timing-function: ease;
		}

		#rb_service_5de2268cc6f05 {
			border-top-width: 1px !important;
			border-right-width: 1px !important;
			border-bottom-width: 1px !important;
			border-left-width: 1px !important;
			padding-top: 30px !important;
			padding-right: 70px !important;
			padding-bottom: 30px !important;
			padding-left: 30px !important;
			border-left-color: #6677e4 !important;
			border-left-style: solid !important;
			border-right-color: #6677e4 !important;
			border-right-style: solid !important;
			border-top-color: #6677e4 !important;
			border-top-style: solid !important;
			border-bottom-color: #6677e4 !important;
			border-bottom-style: solid !important;
			border-radius: 10px !important;
		}

		#rb_service_5de2268cc6f05 .service_icon_wrapper i,
		#rb_service_5de2268cc6f05 .service_icon_wrapper i:before {
			font-size: 50px;
		}

		#rb_service_5de2268cc6f05 .service_icon_wrapper i.svg {
			width: 50px !important;
			height: 50px !important;
		}

		#rb_service_5de2268cc6f05 .service_icon_wrapper>svg {
			width: 80px !important;
			height: 80px !important;
		}

		#rb_service_5de2268cc6f05 .service_icon_wrapper>svg path,
		#rb_service_5de2268cc6f05 .service_icon_wrapper>svg polygon,
		#rb_service_5de2268cc6f05 .service_icon_wrapper>svg circle {
			-webkit-transform: scale(0.8);
			transform: scale(0.8);
		}

		#rb_service_5de2268cc6f05 .service_icon_wrapper>svg rect {
			-webkit-transform: scale(0.8) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
			transform: scale(0.8) matrix(0.7071, -0.7071, 0.7071, 0.7071, -20.7107, 50);
		}

		#rb_service_5de2268cc6f05 .service_title {
			font-size: 20px;
		}

		#rb_service_5de2268cc6f05 .service_title {
			line-height: 25px;
		}

		#rb_service_5de2268cc6f05 .content_wrapper {
			font-size: 17px;
		}

		#rb_service_5de2268cc6f05 .content_wrapper {
			line-height: 30px;
		}

		#rb_service_5de2268cc6f05 .service-button {
			font-size: 16px;
		}

		#rb_service_5de2268cc6f05 .service-button:after {
			font-size: 12px;
		}

		#rb_service_5de2268cc6f05 .service-button {
			margin-top: 10px;
		}

		#rb_service_5de2268cc6f05 .service_title {
			margin: 0px 0px 2px 0px;
		}

		#rb_service_5de2268cc6f05 .service_icon_wrapper i,
		#rb_service_5de2268cc6f05 .service_icon_wrapper i:before {
			color: #ffffff;
		}

		#rb_service_5de2268cc6f05 .service_title {
			color: #ffffff;
		}

		#rb_service_5de2268cc6f05 .service_divider {
			background-color: #3e4a59;
		}

		#rb_service_5de2268cc6f05 .content_wrapper,
		#rb_service_5de2268cc6f05 .content_wrapper>a {
			color: rgba(255, 255, 255, 0.8);
		}

		#rb_service_5de2268cc6f05 .content_wrapper>a:hover {
			color: rgba(255, 255, 255, 0.8);
		}

		#rb_service_5de2268cc6f05 .service-button {
			color: #ffffff;
		}

		#rb_service_5de2268cc6f05 .service-button:after {
			color: #ffffff;
		}

		@media screen and (max-width: 767px) {
			#rb_service_5de2268cc6f05 {
				padding-right: 30px !important;
				padding-left: 30px !important;
			}

			#rb_service_5de2268cc6f05 {
				text-align: center;
			}
		}

		.rb_content_5de2268cc704e>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2268cc704e>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2268cc704e>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268cc71ed>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cc71ed>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cc71ed>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cc71ed {
			transition-duration: 500ms;
		}

		#rb_column_5de2268cc71ed {
			transition-delay: 90ms;
		}

		#rb_column_5de2268cc71ed {
			transition-timing-function: ease;
		}

		@media screen and (max-width: 991px) {
			#rb_column_5de2268cc71ed>.wpb_column>.vc_column-inner {
				padding-top: 120px !important;
			}
		}

		@media screen and (max-width: 991px) {
			#rb_image_5de2268cc7318 {
				text-align: center;
			}
		}

		#rb_column_5de2268cc74e1>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cc74e1>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cc74e1>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cc74e1 {
			transition-duration: 500ms;
		}

		#rb_column_5de2268cc74e1 {
			transition-delay: 180ms;
		}

		#rb_column_5de2268cc74e1 {
			transition-timing-function: ease;
		}

		.rb_textmodule_5de2268cc7632 {
			margin-bottom: 20px !important;
			;
		}

		.rb_textmodule_5de2268cc7632 .rb_textmodule_title,
		.rb_textmodule_5de2268cc7632 .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de2268cc7632 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cc7632 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de2268cc7632 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2268cc7632 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de2268cc7632 .rb_textmodule_content_wrapper ul li:before {
			color: #6e7de3;
		}

		.rb_textmodule_5de2268cc7632 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2268cc7632 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cc7632 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de2268cc7632 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de2268cc7632 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de2268cc7632 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de2268cc7632 .rb_textmodule_title {
			margin-bottom: 31px;
			padding-bottom: 31px;
		}

		.rb_textmodule_5de2268cc7632 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de2268cc7632 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de2268cc7632 .rb_textmodule_button {
			margin-top: 40px;
		}

		.rb_textmodule_5de2268cc7632 .rb_textmodule_button {
			color: #ffffff;
		}

		.rb_textmodule_5de2268cc7632 .rb_textmodule_button {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2268cc7632 .rb_textmodule_button {
			border-color: #5163dd;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2268cc7632 .rb_textmodule_button:hover {
				color: #3e4a59;
			}

			.rb_textmodule_5de2268cc7632 .rb_textmodule_button:hover {
				background-color: rgba(255, 255, 255, 0.01);
			}

			.rb_textmodule_5de2268cc7632 .rb_textmodule_button:hover {
				border-color: #5163dd;
			}
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de2268cc7632 {
				text-align: center;
			}

			.rb_textmodule_5de2268cc7632 .rb_textmodule_title {
				font-size: 30px;
			}

			.rb_textmodule_5de2268cc7632 .rb_textmodule_subtitle {
				font-size: 20px;
			}

			.rb_textmodule_5de2268cc7632 .rb_textmodule_title {
				margin-bottom: 20px;
				padding-bottom: 20px;
			}

			.rb_textmodule_5de2268cc7632 .rb_textmodule_button {
				margin-top: 35px;
			}
		}

		.rb_content_5de2268cc77cf>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2268cc77cf>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2268cc77cf>.vc_row {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			.rb_content_5de2268cc77cf>.vc_row {
				padding-top: 0px !important;
			}
		}

		#rb_column_5de2268cc7b13>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cc7b13>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cc7b13>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cc7b13 {
			transition-duration: 500ms;
		}

		#rb_column_5de2268cc7b13 {
			transition-delay: 180ms;
		}

		#rb_column_5de2268cc7b13 {
			transition-timing-function: ease;
		}

		.rb_textmodule_5de2268cc7c6a {
			padding-right: 80px !important;
			;
		}

		.rb_textmodule_5de2268cc7c6a .rb_textmodule_title,
		.rb_textmodule_5de2268cc7c6a .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de2268cc7c6a .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cc7c6a {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de2268cc7c6a a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2268cc7c6a .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de2268cc7c6a .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cc7c6a .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2268cc7c6a .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cc7c6a .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de2268cc7c6a .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de2268cc7c6a .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de2268cc7c6a .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de2268cc7c6a .rb_textmodule_title {
			margin-bottom: 31px;
			padding-bottom: 31px;
		}

		.rb_textmodule_5de2268cc7c6a .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de2268cc7c6a .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de2268cc7c6a .rb_textmodule_button {
			margin-top: 40px;
		}

		.rb_textmodule_5de2268cc7c6a .rb_textmodule_button {
			color: #ffffff;
		}

		.rb_textmodule_5de2268cc7c6a .rb_textmodule_button {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2268cc7c6a .rb_textmodule_button {
			border-color: #5163dd;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2268cc7c6a .rb_textmodule_button:hover {
				color: #3e4a59;
			}

			.rb_textmodule_5de2268cc7c6a .rb_textmodule_button:hover {
				background-color: rgba(255, 255, 255, 0.01);
			}

			.rb_textmodule_5de2268cc7c6a .rb_textmodule_button:hover {
				border-color: #5163dd;
			}
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de2268cc7c6a {
				padding-right: 15px !important;
				padding-left: 15px !important;
				;
			}

			.rb_textmodule_5de2268cc7c6a {
				text-align: center;
			}

			.rb_textmodule_5de2268cc7c6a .rb_textmodule_title {
				font-size: 30px;
			}

			.rb_textmodule_5de2268cc7c6a .rb_textmodule_subtitle {
				font-size: 20px;
			}

			.rb_textmodule_5de2268cc7c6a .rb_textmodule_title {
				margin-bottom: 20px;
				padding-bottom: 20px;
			}

			.rb_textmodule_5de2268cc7c6a .rb_textmodule_button {
				margin-top: 35px;
			}
		}

		#rb_column_5de2268cc7dcf>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cc7dcf>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cc7dcf>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cc7dcf {
			transition-duration: 500ms;
		}

		#rb_column_5de2268cc7dcf {
			transition-delay: 90ms;
		}

		#rb_column_5de2268cc7dcf {
			transition-timing-function: ease;
		}

		@media screen and (max-width: 1199px) {
			#rb_column_5de2268cc7dcf>.wpb_column>.vc_column-inner {
				padding-top: 50px !important;
			}
		}

		@media screen and (max-width: 991px) {
			#rb_column_5de2268cc7dcf>.wpb_column>.vc_column-inner {
				padding-top: 150px !important;
			}
		}

		@media screen and (max-width: 991px) {
			#rb_image_5de2268cc7ef1 {
				text-align: center;
			}
		}

		.rb_content_5de2268cc8071>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2268cc8071>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2268cc8071>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268cc81db>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cc81db>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cc81db>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cc81db {
			transition-duration: 500ms;
		}

		#rb_column_5de2268cc81db {
			transition-timing-function: ease;
		}

		#rb_portfolio_5de2268cc84aa .rb_portfolio_items .rb_portfolio_item .h5,
		#rb_portfolio_5de2268cc84aa .rb_portfolio_items .rb_portfolio_item .h3,
		#rb_portfolio_5de2268cc84aa .rb_portfolio_items .rb_portfolio_item h1,
		#rb_portfolio_5de2268cc84aa .rb_portfolio_items .rb_portfolio_item h2,
		#rb_portfolio_5de2268cc84aa .rb_portfolio_items .rb_portfolio_item h3,
		#rb_portfolio_5de2268cc84aa .rb_portfolio_items .rb_portfolio_item h4,
		#rb_portfolio_5de2268cc84aa .rb_portfolio_items .rb_portfolio_item h5,
		#rb_portfolio_5de2268cc84aa .rb_portfolio_items .rb_portfolio_item h6 {
			color: #fff;
		}

		#rb_portfolio_5de2268cc84aa .rb_portfolio_items .rb_portfolio_item p,
		#rb_portfolio_5de2268cc84aa .rb_portfolio_items .rb_portfolio_item p>a,
		#rb_portfolio_5de2268cc84aa .rb_portfolio_items .rb_portfolio_item .image_wrapper .hidden_info .advanced_detail {
			color: rgba(255, 255, 255, .8);
		}

		#rb_portfolio_5de2268cc84aa .rb_portfolio_items .rb_portfolio_item .text_info .h5:after {
			background-color: #5163DD;
		}

		#rb_portfolio_5de2268cc84aa .rb_portfolio_items .rb_portfolio_item .image_wrapper .hidden_info {
			background-color: rgba(0, 0, 0, .8);
		}

		#rb_portfolio_5de2268cc84aa .rb_portfolio_items .rb_portfolio_item .image_wrapper {
			-webkit-border-radius: 0px;
			border-radius: 0px;
		}

		.rb_content_5de2268cca2a5>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2268cca2a5>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2268cca2a5>.vc_row {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			.rb_content_5de2268cca2a5>.vc_row {
				padding-top: 50px !important;
			}
		}

		#rb_column_5de2268cca5dd>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cca5dd>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cca5dd>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cca5dd {
			transition-duration: 500ms;
		}

		#rb_column_5de2268cca5dd {
			transition-delay: 90ms;
		}

		#rb_column_5de2268cca5dd {
			transition-timing-function: ease;
		}

		.rb_textmodule_5de2268cca747 {
			padding-right: 80px !important;
			;
		}

		.rb_textmodule_5de2268cca747 .rb_textmodule_title,
		.rb_textmodule_5de2268cca747 .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de2268cca747 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cca747 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de2268cca747 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2268cca747 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de2268cca747 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cca747 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2268cca747 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cca747 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de2268cca747 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de2268cca747 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de2268cca747 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de2268cca747 .rb_textmodule_title {
			margin-bottom: 31px;
			padding-bottom: 31px;
		}

		.rb_textmodule_5de2268cca747 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de2268cca747 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de2268cca747 .rb_textmodule_button {
			margin-top: 40px;
		}

		.rb_textmodule_5de2268cca747 .rb_textmodule_button {
			color: #ffffff;
		}

		.rb_textmodule_5de2268cca747 .rb_textmodule_button {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2268cca747 .rb_textmodule_button {
			border-color: #5163dd;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2268cca747 .rb_textmodule_button:hover {
				color: #3e4a59;
			}

			.rb_textmodule_5de2268cca747 .rb_textmodule_button:hover {
				background-color: rgba(255, 255, 255, 0.01);
			}

			.rb_textmodule_5de2268cca747 .rb_textmodule_button:hover {
				border-color: #5163dd;
			}
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de2268cca747 {
				padding-right: 15px !important;
				padding-left: 15px !important;
				;
			}

			.rb_textmodule_5de2268cca747 {
				text-align: center;
			}

			.rb_textmodule_5de2268cca747 .rb_textmodule_title {
				font-size: 30px;
			}

			.rb_textmodule_5de2268cca747 .rb_textmodule_subtitle {
				font-size: 20px;
			}

			.rb_textmodule_5de2268cca747 .rb_textmodule_title {
				margin-bottom: 20px;
				padding-bottom: 20px;
			}

			.rb_textmodule_5de2268cca747 .rb_textmodule_button {
				margin-top: 35px;
			}
		}

		#rb_column_5de2268cca8c0>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cca8c0>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cca8c0>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268cca8c0 {
			transition-duration: 500ms;
		}

		#rb_column_5de2268cca8c0 {
			transition-delay: 180ms;
		}

		#rb_column_5de2268cca8c0 {
			transition-timing-function: ease;
		}

		@media screen and (max-width: 991px) {
			#rb_column_5de2268cca8c0>.wpb_column>.vc_column-inner {
				padding-top: 120px !important;
			}
		}

		#rb_inner_row_5de2268ccaa4a>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de2268ccaa4a>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de2268ccaa4a>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268ccab9e>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268ccab9e>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268ccab9e>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_milestone_5de2268ccad1f {
			border-right-width: 1px !important;
			border-bottom-width: 1px !important;
			padding-bottom: 55px !important;
			border-right-color: #d8dbde !important;
			border-right-style: solid !important;
			border-bottom-color: #d8dbde !important;
			border-bottom-style: solid !important;
		}

		#rb_milestone_5de2268ccad1f .milestone_icon>svg {
			-webkit-transform: translate(-50%, -50%) scale(0.8);
			-ms-transform: translate(-50%, -50%) scale(0.8);
			transform: translate(-50%, -50%) scale(0.8);
		}

		#rb_milestone_5de2268ccad1f .milestone_icon:not(.shape_none) {
			width: 80px;
			height: 80px;
		}

		#rb_milestone_5de2268ccad1f .milestone_icon i,
		#rb_milestone_5de2268ccad1f .milestone_icon i:before {
			font-size: 38px;
			line-height: 38px;
		}

		#rb_milestone_5de2268ccad1f .count_wrapper {
			font-size: 60px;
		}

		#rb_milestone_5de2268ccad1f .count_wrapper {
			margin: 0px 0px 0px 0px;
		}

		#rb_milestone_5de2268ccad1f .milestone_title {
			font-size: 20px;
		}

		#rb_milestone_5de2268ccad1f .milestone_icon i {
			background-image: -webkit-linear-gradient(to bottom, #3e4a59, #3e4a59);
			background-image: -moz-linear-gradient(to bottom, #3e4a59, #3e4a59);
			background-image: linear-gradient(to bottom, #3e4a59, #3e4a59);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de2268ccad1f .count_wrapper {
			background-image: -webkit-linear-gradient(to bottom, #5ea8f4, #7966fe);
			background-image: -moz-linear-gradient(to bottom, #5ea8f4, #7966fe);
			background-image: linear-gradient(to bottom, #5ea8f4, #7966fe);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de2268ccad1f .milestone_title {
			color: #3e4a59;
		}

		@media screen and (max-width: 991px) {
			#rb_milestone_5de2268ccad1f .milestone_icon>svg {
				-webkit-transform: translate(-50%, -50%) scale(0.8);
				-ms-transform: translate(-50%, -50%) scale(0.8);
				transform: translate(-50%, -50%) scale(0.8);
			}

			#rb_milestone_5de2268ccad1f .milestone_icon:not(.shape_none) {
				width: 80px;
				height: 80px;
			}

			#rb_milestone_5de2268ccad1f .milestone_icon i,
			#rb_milestone_5de2268ccad1f .milestone_icon i:before {
				font-size: 38px;
				line-height: 38px;
			}

			#rb_milestone_5de2268ccad1f .count_wrapper {
				font-size: 40px;
			}

			#rb_milestone_5de2268ccad1f .count_wrapper {
				margin: 0px 0px 0px 0px;
			}

			#rb_milestone_5de2268ccad1f .milestone_title {
				font-size: 17px;
			}

			#rb_milestone_5de2268ccad1f .milestone_title {
				font-weight: 400;
			}
		}

		#rb_milestone_5de2268ccae4d {
			border-right-width: 1px !important;
			padding-top: 40px !important;
			border-right-color: #d8dbde !important;
			border-right-style: solid !important;
		}

		#rb_milestone_5de2268ccae4d .milestone_icon>svg {
			-webkit-transform: translate(-50%, -50%) scale(0.8);
			-ms-transform: translate(-50%, -50%) scale(0.8);
			transform: translate(-50%, -50%) scale(0.8);
		}

		#rb_milestone_5de2268ccae4d .milestone_icon:not(.shape_none) {
			width: 80px;
			height: 80px;
		}

		#rb_milestone_5de2268ccae4d .milestone_icon i,
		#rb_milestone_5de2268ccae4d .milestone_icon i:before {
			font-size: 38px;
			line-height: 38px;
		}

		#rb_milestone_5de2268ccae4d .count_wrapper {
			font-size: 60px;
		}

		#rb_milestone_5de2268ccae4d .count_wrapper {
			margin: 0px 0px 0px 0px;
		}

		#rb_milestone_5de2268ccae4d .milestone_title {
			font-size: 20px;
		}

		#rb_milestone_5de2268ccae4d .milestone_icon i {
			background-image: -webkit-linear-gradient(to bottom, #3e4a59, #3e4a59);
			background-image: -moz-linear-gradient(to bottom, #3e4a59, #3e4a59);
			background-image: linear-gradient(to bottom, #3e4a59, #3e4a59);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de2268ccae4d .count_wrapper {
			background-image: -webkit-linear-gradient(to bottom, #5ea8f4, #7966fe);
			background-image: -moz-linear-gradient(to bottom, #5ea8f4, #7966fe);
			background-image: linear-gradient(to bottom, #5ea8f4, #7966fe);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de2268ccae4d .milestone_title {
			color: #3e4a59;
		}

		@media screen and (max-width: 991px) {
			#rb_milestone_5de2268ccae4d .milestone_icon>svg {
				-webkit-transform: translate(-50%, -50%) scale(0.8);
				-ms-transform: translate(-50%, -50%) scale(0.8);
				transform: translate(-50%, -50%) scale(0.8);
			}

			#rb_milestone_5de2268ccae4d .milestone_icon:not(.shape_none) {
				width: 80px;
				height: 80px;
			}

			#rb_milestone_5de2268ccae4d .milestone_icon i,
			#rb_milestone_5de2268ccae4d .milestone_icon i:before {
				font-size: 38px;
				line-height: 38px;
			}

			#rb_milestone_5de2268ccae4d .count_wrapper {
				font-size: 40px;
			}

			#rb_milestone_5de2268ccae4d .count_wrapper {
				margin: 0px 0px 0px 0px;
			}

			#rb_milestone_5de2268ccae4d .milestone_title {
				font-size: 17px;
			}

			#rb_milestone_5de2268ccae4d .milestone_title {
				font-weight: 400;
			}
		}

		#rb_column_5de2268ccaf6e>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268ccaf6e>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268ccaf6e>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_milestone_5de2268ccb096 {
			border-right-width: 1px !important;
			border-bottom-width: 1px !important;
			padding-bottom: 55px !important;
			border-right-color: #d8dbde !important;
			border-right-style: solid !important;
			border-bottom-color: #d8dbde !important;
			border-bottom-style: solid !important;
		}

		#rb_milestone_5de2268ccb096 .milestone_icon>svg {
			-webkit-transform: translate(-50%, -50%) scale(0.8);
			-ms-transform: translate(-50%, -50%) scale(0.8);
			transform: translate(-50%, -50%) scale(0.8);
		}

		#rb_milestone_5de2268ccb096 .milestone_icon:not(.shape_none) {
			width: 80px;
			height: 80px;
		}

		#rb_milestone_5de2268ccb096 .milestone_icon i,
		#rb_milestone_5de2268ccb096 .milestone_icon i:before {
			font-size: 38px;
			line-height: 38px;
		}

		#rb_milestone_5de2268ccb096 .count_wrapper {
			font-size: 60px;
		}

		#rb_milestone_5de2268ccb096 .count_wrapper {
			margin: 0px 0px 0px 0px;
		}

		#rb_milestone_5de2268ccb096 .milestone_title {
			font-size: 20px;
		}

		#rb_milestone_5de2268ccb096 .milestone_icon i {
			background-image: -webkit-linear-gradient(to bottom, #3e4a59, #3e4a59);
			background-image: -moz-linear-gradient(to bottom, #3e4a59, #3e4a59);
			background-image: linear-gradient(to bottom, #3e4a59, #3e4a59);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de2268ccb096 .count_wrapper {
			background-image: -webkit-linear-gradient(to bottom, #5ea8f4, #7966fe);
			background-image: -moz-linear-gradient(to bottom, #5ea8f4, #7966fe);
			background-image: linear-gradient(to bottom, #5ea8f4, #7966fe);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de2268ccb096 .milestone_title {
			color: #3e4a59;
		}

		@media screen and (max-width: 991px) {
			#rb_milestone_5de2268ccb096 .milestone_icon>svg {
				-webkit-transform: translate(-50%, -50%) scale(0.8);
				-ms-transform: translate(-50%, -50%) scale(0.8);
				transform: translate(-50%, -50%) scale(0.8);
			}

			#rb_milestone_5de2268ccb096 .milestone_icon:not(.shape_none) {
				width: 80px;
				height: 80px;
			}

			#rb_milestone_5de2268ccb096 .milestone_icon i,
			#rb_milestone_5de2268ccb096 .milestone_icon i:before {
				font-size: 38px;
				line-height: 38px;
			}

			#rb_milestone_5de2268ccb096 .count_wrapper {
				font-size: 40px;
			}

			#rb_milestone_5de2268ccb096 .count_wrapper {
				margin: 0px 0px 0px 0px;
			}

			#rb_milestone_5de2268ccb096 .milestone_title {
				font-size: 17px;
			}

			#rb_milestone_5de2268ccb096 .milestone_title {
				font-weight: 400;
			}
		}

		#rb_milestone_5de2268ccb1b6 {
			border-right-width: 1px !important;
			padding-top: 40px !important;
			border-right-color: #d8dbde !important;
			border-right-style: solid !important;
		}

		#rb_milestone_5de2268ccb1b6 .milestone_icon>svg {
			-webkit-transform: translate(-50%, -50%) scale(0.8);
			-ms-transform: translate(-50%, -50%) scale(0.8);
			transform: translate(-50%, -50%) scale(0.8);
		}

		#rb_milestone_5de2268ccb1b6 .milestone_icon:not(.shape_none) {
			width: 80px;
			height: 80px;
		}

		#rb_milestone_5de2268ccb1b6 .milestone_icon i,
		#rb_milestone_5de2268ccb1b6 .milestone_icon i:before {
			font-size: 38px;
			line-height: 38px;
		}

		#rb_milestone_5de2268ccb1b6 .count_wrapper {
			font-size: 60px;
		}

		#rb_milestone_5de2268ccb1b6 .count_wrapper {
			margin: 0px 0px 0px 0px;
		}

		#rb_milestone_5de2268ccb1b6 .milestone_title {
			font-size: 20px;
		}

		#rb_milestone_5de2268ccb1b6 .milestone_icon i {
			background-image: -webkit-linear-gradient(to bottom, #3e4a59, #3e4a59);
			background-image: -moz-linear-gradient(to bottom, #3e4a59, #3e4a59);
			background-image: linear-gradient(to bottom, #3e4a59, #3e4a59);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de2268ccb1b6 .count_wrapper {
			background-image: -webkit-linear-gradient(to bottom, #5ea8f4, #7966fe);
			background-image: -moz-linear-gradient(to bottom, #5ea8f4, #7966fe);
			background-image: linear-gradient(to bottom, #5ea8f4, #7966fe);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de2268ccb1b6 .milestone_title {
			color: #3e4a59;
		}

		@media screen and (max-width: 991px) {
			#rb_milestone_5de2268ccb1b6 .milestone_icon>svg {
				-webkit-transform: translate(-50%, -50%) scale(0.8);
				-ms-transform: translate(-50%, -50%) scale(0.8);
				transform: translate(-50%, -50%) scale(0.8);
			}

			#rb_milestone_5de2268ccb1b6 .milestone_icon:not(.shape_none) {
				width: 80px;
				height: 80px;
			}

			#rb_milestone_5de2268ccb1b6 .milestone_icon i,
			#rb_milestone_5de2268ccb1b6 .milestone_icon i:before {
				font-size: 38px;
				line-height: 38px;
			}

			#rb_milestone_5de2268ccb1b6 .count_wrapper {
				font-size: 40px;
			}

			#rb_milestone_5de2268ccb1b6 .count_wrapper {
				margin: 0px 0px 0px 0px;
			}

			#rb_milestone_5de2268ccb1b6 .milestone_title {
				font-size: 17px;
			}

			#rb_milestone_5de2268ccb1b6 .milestone_title {
				font-weight: 400;
			}
		}

		#rb_column_5de2268ccb2cc>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268ccb2cc>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268ccb2cc>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_milestone_5de2268ccb3f2 {
			border-bottom-width: 1px !important;
			padding-bottom: 55px !important;
			border-bottom-color: #d8dbde !important;
			border-bottom-style: solid !important;
		}

		#rb_milestone_5de2268ccb3f2 .milestone_icon>svg {
			-webkit-transform: translate(-50%, -50%) scale(0.8);
			-ms-transform: translate(-50%, -50%) scale(0.8);
			transform: translate(-50%, -50%) scale(0.8);
		}

		#rb_milestone_5de2268ccb3f2 .milestone_icon:not(.shape_none) {
			width: 80px;
			height: 80px;
		}

		#rb_milestone_5de2268ccb3f2 .milestone_icon i,
		#rb_milestone_5de2268ccb3f2 .milestone_icon i:before {
			font-size: 38px;
			line-height: 38px;
		}

		#rb_milestone_5de2268ccb3f2 .count_wrapper {
			font-size: 60px;
		}

		#rb_milestone_5de2268ccb3f2 .count_wrapper {
			margin: 0px 0px 0px 0px;
		}

		#rb_milestone_5de2268ccb3f2 .milestone_title {
			font-size: 20px;
		}

		#rb_milestone_5de2268ccb3f2 .milestone_icon i {
			background-image: -webkit-linear-gradient(to bottom, #3e4a59, #3e4a59);
			background-image: -moz-linear-gradient(to bottom, #3e4a59, #3e4a59);
			background-image: linear-gradient(to bottom, #3e4a59, #3e4a59);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de2268ccb3f2 .count_wrapper {
			background-image: -webkit-linear-gradient(to bottom, #5ea8f4, #7966fe);
			background-image: -moz-linear-gradient(to bottom, #5ea8f4, #7966fe);
			background-image: linear-gradient(to bottom, #5ea8f4, #7966fe);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de2268ccb3f2 .milestone_title {
			color: #3e4a59;
		}

		@media screen and (max-width: 991px) {
			#rb_milestone_5de2268ccb3f2 .milestone_icon>svg {
				-webkit-transform: translate(-50%, -50%) scale(0.8);
				-ms-transform: translate(-50%, -50%) scale(0.8);
				transform: translate(-50%, -50%) scale(0.8);
			}

			#rb_milestone_5de2268ccb3f2 .milestone_icon:not(.shape_none) {
				width: 80px;
				height: 80px;
			}

			#rb_milestone_5de2268ccb3f2 .milestone_icon i,
			#rb_milestone_5de2268ccb3f2 .milestone_icon i:before {
				font-size: 38px;
				line-height: 38px;
			}

			#rb_milestone_5de2268ccb3f2 .count_wrapper {
				font-size: 40px;
			}

			#rb_milestone_5de2268ccb3f2 .count_wrapper {
				margin: 0px 0px 0px 0px;
			}

			#rb_milestone_5de2268ccb3f2 .milestone_title {
				font-size: 17px;
			}

			#rb_milestone_5de2268ccb3f2 .milestone_title {
				font-weight: 400;
			}
		}

		#rb_milestone_5de2268ccb50e {
			padding-top: 40px !important;
		}

		#rb_milestone_5de2268ccb50e .milestone_icon>svg {
			-webkit-transform: translate(-50%, -50%) scale(0.8);
			-ms-transform: translate(-50%, -50%) scale(0.8);
			transform: translate(-50%, -50%) scale(0.8);
		}

		#rb_milestone_5de2268ccb50e .milestone_icon:not(.shape_none) {
			width: 80px;
			height: 80px;
		}

		#rb_milestone_5de2268ccb50e .milestone_icon i,
		#rb_milestone_5de2268ccb50e .milestone_icon i:before {
			font-size: 38px;
			line-height: 38px;
		}

		#rb_milestone_5de2268ccb50e .count_wrapper {
			font-size: 60px;
		}

		#rb_milestone_5de2268ccb50e .count_wrapper {
			margin: 0px 0px 0px 0px;
		}

		#rb_milestone_5de2268ccb50e .milestone_title {
			font-size: 20px;
		}

		#rb_milestone_5de2268ccb50e .milestone_icon i {
			background-image: -webkit-linear-gradient(to bottom, #3e4a59, #3e4a59);
			background-image: -moz-linear-gradient(to bottom, #3e4a59, #3e4a59);
			background-image: linear-gradient(to bottom, #3e4a59, #3e4a59);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de2268ccb50e .count_wrapper {
			background-image: -webkit-linear-gradient(to bottom, #5ea8f4, #7966fe);
			background-image: -moz-linear-gradient(to bottom, #5ea8f4, #7966fe);
			background-image: linear-gradient(to bottom, #5ea8f4, #7966fe);
			-webkit-background-clip: text;
			-moz-background-clip: text;
			background-clip: text;
		}

		#rb_milestone_5de2268ccb50e .milestone_title {
			color: #3e4a59;
		}

		@media screen and (max-width: 991px) {
			#rb_milestone_5de2268ccb50e .milestone_icon>svg {
				-webkit-transform: translate(-50%, -50%) scale(0.8);
				-ms-transform: translate(-50%, -50%) scale(0.8);
				transform: translate(-50%, -50%) scale(0.8);
			}

			#rb_milestone_5de2268ccb50e .milestone_icon:not(.shape_none) {
				width: 80px;
				height: 80px;
			}

			#rb_milestone_5de2268ccb50e .milestone_icon i,
			#rb_milestone_5de2268ccb50e .milestone_icon i:before {
				font-size: 38px;
				line-height: 38px;
			}

			#rb_milestone_5de2268ccb50e .count_wrapper {
				font-size: 40px;
			}

			#rb_milestone_5de2268ccb50e .count_wrapper {
				margin: 0px 0px 0px 0px;
			}

			#rb_milestone_5de2268ccb50e .milestone_title {
				font-size: 17px;
			}

			#rb_milestone_5de2268ccb50e .milestone_title {
				font-weight: 400;
			}
		}

		.rb_content_5de2268ccb64b>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2268ccb64b>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2268ccb64b>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268ccb7c3>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268ccb7c3>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268ccb7c3>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268ccb8d4>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268ccb8d4>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268ccb8d4>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268ccb8d4 {
			transition-duration: 500ms;
		}

		#rb_column_5de2268ccb8d4 {
			transition-delay: 90ms;
		}

		#rb_column_5de2268ccb8d4 {
			transition-timing-function: ease;
		}

		@media screen and (max-width: 991px) {
			#rb_column_5de2268ccb8d4>.wpb_column>.vc_column-inner {
				padding-right: 50px !important;
				padding-left: 50px !important;
			}
		}

		.rb_textmodule_5de2268ccba15 .rb_textmodule_title,
		.rb_textmodule_5de2268ccba15 .rb_textmodule_button.simple {
			color: #ffffff;
		}

		.rb_textmodule_5de2268ccba15 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de2268ccba15 {
			color: rgba(255, 255, 255, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de2268ccba15 a {
			color: rgba(255, 255, 255, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2268ccba15 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de2268ccba15 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de2268ccba15 .rb_textmodule_divider {
			background-color: #ffffff;
		}

		.rb_textmodule_5de2268ccba15 .rb_textmodule_button.simple:after {
			color: #ffffff;
		}

		.rb_textmodule_5de2268ccba15 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de2268ccba15 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de2268ccba15 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de2268ccba15 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de2268ccba15 .rb_textmodule_title {
			margin-bottom: 31px;
			padding-bottom: 31px;
		}

		.rb_textmodule_5de2268ccba15 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de2268ccba15 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de2268ccba15 .rb_textmodule_button {
			margin-top: 40px;
		}

		.rb_textmodule_5de2268ccba15 .rb_textmodule_button {
			color: #3e4a59;
		}

		.rb_textmodule_5de2268ccba15 .rb_textmodule_button {
			background-color: #ffffff;
		}

		.rb_textmodule_5de2268ccba15 .rb_textmodule_button {
			border-color: #ffffff;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2268ccba15 .rb_textmodule_button:hover {
				color: #ffffff;
			}

			.rb_textmodule_5de2268ccba15 .rb_textmodule_button:hover {
				background-color: rgba(255, 255, 255, 0.01);
			}

			.rb_textmodule_5de2268ccba15 .rb_textmodule_button:hover {
				border-color: #ffffff;
			}
		}

		@media screen and (max-width: 991px) {
			.rb_textmodule_5de2268ccba15 {
				text-align: center;
			}
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de2268ccba15 .rb_textmodule_title {
				font-size: 30px;
			}

			.rb_textmodule_5de2268ccba15 .rb_textmodule_subtitle {
				font-size: 20px;
			}

			.rb_textmodule_5de2268ccba15 .rb_textmodule_title {
				margin-bottom: 20px;
				padding-bottom: 20px;
			}

			.rb_textmodule_5de2268ccba15 .rb_textmodule_button {
				margin-top: 35px;
			}
		}

		.rb_content_5de2268ccbb9a>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2268ccbb9a>.vc_row {
			background-size: contain !important;
		}

		.rb_content_5de2268ccbb9a>.vc_row {
			background-position: top !important;
		}

		@media screen and (max-width: 767px) {
			.rb_content_5de2268ccbb9a>.vc_row {
				padding-bottom: 50px !important;
			}
		}

		#rb_column_5de2268ccbd88>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268ccbd88>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268ccbd88>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_inner_row_5de2268ccbf2b>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de2268ccbf2b>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de2268ccbf2b>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268ccc016>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268ccc016>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268ccc016>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de2268ccc136 {
			text-align: center;
		}

		.rb_textmodule_5de2268ccc136 .rb_textmodule_title,
		.rb_textmodule_5de2268ccc136 .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de2268ccc136 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de2268ccc136 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de2268ccc136 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2268ccc136 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de2268ccc136 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de2268ccc136 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2268ccc136 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de2268ccc136 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de2268ccc136 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de2268ccc136 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de2268ccc136 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de2268ccc136 .rb_textmodule_title {
			margin-bottom: 31px;
			padding-bottom: 31px;
		}

		.rb_textmodule_5de2268ccc136 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de2268ccc136 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de2268ccc136 .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de2268ccc136 .rb_textmodule_title {
				font-size: 30px;
			}

			.rb_textmodule_5de2268ccc136 .rb_textmodule_subtitle {
				font-size: 20px;
			}

			.rb_textmodule_5de2268ccc136 .rb_textmodule_title {
				margin-bottom: 20px;
				padding-bottom: 20px;
			}

			.rb_textmodule_5de2268ccc136 .rb_textmodule_button {
				margin-top: 35px;
			}
		}

		#rb_inner_row_5de2268ccc23f>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de2268ccc23f>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de2268ccc23f>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268ccc39d>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268ccc39d>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268ccc39d>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268ccc39d {
			transition-duration: 500ms;
		}

		#rb_column_5de2268ccc39d {
			transition-delay: 90ms;
		}

		#rb_column_5de2268ccc39d {
			transition-timing-function: ease;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2268ccc39d>.wpb_column>.vc_column-inner {
				padding-bottom: 40px !important;
			}
		}

		#rb_pricing_plan_5de2268ccc515 {
			background-color: #ffffff;
		}

		#rb_pricing_plan_5de2268ccc515,
		#rb_pricing_plan_5de2268ccc515 h3 {
			color: #3e4a59;
		}

		#rb_pricing_plan_5de2268ccc515 h3:after {
			background-color: #5163dd;
		}

		#rb_pricing_plan_5de2268ccc515 .hightlight {
			background-color: #1ED2B4;
		}

		#rb_pricing_plan_5de2268ccc515 .pricing_plan_button {
			color: #242c34;
		}

		#rb_pricing_plan_5de2268ccc515 .pricing_plan_button {
			background-color: rgba(255, 255, 255, 0.01);
		}

		#rb_pricing_plan_5de2268ccc515 .pricing_plan_button {
			border-color: #5163dd;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			#rb_pricing_plan_5de2268ccc515 .pricing_plan_button:hover {
				color: #3e4a59;
			}

			#rb_pricing_plan_5de2268ccc515 .pricing_plan_button:hover {
				background-color: rgba(255, 255, 255, 0.01);
			}

			#rb_pricing_plan_5de2268ccc515 .pricing_plan_button:hover {
				border-color: #5163dd;
			}
		}

		#rb_column_5de2268ccc676>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268ccc676>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268ccc676>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268ccc676 {
			transition-duration: 500ms;
		}

		#rb_column_5de2268ccc676 {
			transition-delay: 180ms;
		}

		#rb_column_5de2268ccc676 {
			transition-timing-function: ease;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2268ccc676>.wpb_column>.vc_column-inner {
				padding-bottom: 20px !important;
			}
		}

		#rb_pricing_plan_5de2268ccc79f {
			background-color: #ffffff;
		}

		#rb_pricing_plan_5de2268ccc79f,
		#rb_pricing_plan_5de2268ccc79f h3 {
			color: #ffffff;
		}

		#rb_pricing_plan_5de2268ccc79f h3:after {
			background-color: #ffffff;
		}

		#rb_pricing_plan_5de2268ccc79f .hightlight {
			background-color: #5163dd;
		}

		#rb_pricing_plan_5de2268ccc79f .pricing_plan_button {
			color: #644bd1;
		}

		#rb_pricing_plan_5de2268ccc79f .pricing_plan_button {
			background-color: #ffffff;
		}

		#rb_pricing_plan_5de2268ccc79f .pricing_plan_button {
			border-color: #ffffff;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			#rb_pricing_plan_5de2268ccc79f .pricing_plan_button:hover {
				color: #644bd1;
			}

			#rb_pricing_plan_5de2268ccc79f .pricing_plan_button:hover {
				background-color: #ffffff;
			}

			#rb_pricing_plan_5de2268ccc79f .pricing_plan_button:hover {
				border-color: #ffffff;
			}
		}

		#rb_column_5de2268ccca4f>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268ccca4f>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268ccca4f>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268ccca4f {
			transition-duration: 500ms;
		}

		#rb_column_5de2268ccca4f {
			transition-delay: 270ms;
		}

		#rb_column_5de2268ccca4f {
			transition-timing-function: ease;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2268ccca4f>.wpb_column>.vc_column-inner {
				padding-bottom: 40px !important;
			}
		}

		#rb_pricing_plan_5de2268cccb73 {
			background-color: #ffffff;
		}

		#rb_pricing_plan_5de2268cccb73,
		#rb_pricing_plan_5de2268cccb73 h3 {
			color: #3e4a59;
		}

		#rb_pricing_plan_5de2268cccb73 h3:after {
			background-color: #5163dd;
		}

		#rb_pricing_plan_5de2268cccb73 .hightlight {
			background-color: #1ED2B4;
		}

		#rb_pricing_plan_5de2268cccb73 .pricing_plan_button {
			color: #3e4a59;
		}

		#rb_pricing_plan_5de2268cccb73 .pricing_plan_button {
			background-color: rgba(255, 255, 255, 0.01);
		}

		#rb_pricing_plan_5de2268cccb73 .pricing_plan_button {
			border-color: #5163dd;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			#rb_pricing_plan_5de2268cccb73 .pricing_plan_button:hover {
				color: #3e4a59;
			}

			#rb_pricing_plan_5de2268cccb73 .pricing_plan_button:hover {
				background-color: rgba(255, 255, 255, 0.01);
			}

			#rb_pricing_plan_5de2268cccb73 .pricing_plan_button:hover {
				border-color: #5163dd;
			}
		}

		#rb_column_5de2268ccccaa>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268ccccaa>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268ccccaa>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268ccccaa {
			transition-duration: 500ms;
		}

		#rb_column_5de2268ccccaa {
			transition-delay: 360ms;
		}

		#rb_column_5de2268ccccaa {
			transition-timing-function: ease;
		}

		#rb_pricing_plan_5de2268cccdbe {
			background-color: #ffffff;
		}

		#rb_pricing_plan_5de2268cccdbe,
		#rb_pricing_plan_5de2268cccdbe h3 {
			color: #3e4a59;
		}

		#rb_pricing_plan_5de2268cccdbe h3:after {
			background-color: #5163dd;
		}

		#rb_pricing_plan_5de2268cccdbe .hightlight {
			background-color: #1ED2B4;
		}

		#rb_pricing_plan_5de2268cccdbe .pricing_plan_button {
			color: #3e4a59;
		}

		#rb_pricing_plan_5de2268cccdbe .pricing_plan_button {
			background-color: rgba(255, 255, 255, 0.01);
		}

		#rb_pricing_plan_5de2268cccdbe .pricing_plan_button {
			border-color: #5163dd;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			#rb_pricing_plan_5de2268cccdbe .pricing_plan_button:hover {
				color: #3e4a59;
			}

			#rb_pricing_plan_5de2268cccdbe .pricing_plan_button:hover {
				background-color: rgba(255, 255, 255, 0.01);
			}

			#rb_pricing_plan_5de2268cccdbe .pricing_plan_button:hover {
				border-color: #5163dd;
			}
		}

		.rb_content_5de2268cccf27>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2268cccf27>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2268cccf27>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268ccd0a3>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268ccd0a3>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268ccd0a3>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de2268ccd234 {
			text-align: center;
		}

		.rb_textmodule_5de2268ccd234 .rb_textmodule_title,
		.rb_textmodule_5de2268ccd234 .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de2268ccd234 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de2268ccd234 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de2268ccd234 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2268ccd234 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de2268ccd234 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de2268ccd234 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2268ccd234 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de2268ccd234 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de2268ccd234 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de2268ccd234 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de2268ccd234 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de2268ccd234 .rb_textmodule_title {
			margin-bottom: 31px;
			padding-bottom: 31px;
		}

		.rb_textmodule_5de2268ccd234 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de2268ccd234 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de2268ccd234 .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de2268ccd234 .rb_textmodule_title {
				font-size: 30px;
			}

			.rb_textmodule_5de2268ccd234 .rb_textmodule_subtitle {
				font-size: 20px;
			}

			.rb_textmodule_5de2268ccd234 .rb_textmodule_title {
				margin-bottom: 20px;
				padding-bottom: 20px;
			}

			.rb_textmodule_5de2268ccd234 .rb_textmodule_button {
				margin-top: 35px;
			}
		}

		#rb_inner_row_5de2268ccd31c>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de2268ccd31c>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de2268ccd31c>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268ccd45a>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268ccd45a>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268ccd45a>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_column_5de2268ccd45a {
			transition-duration: 500ms;
		}

		#rb_column_5de2268ccd45a {
			transition-timing-function: ease;
		}

		#rb_blog_5de2268ccd653 .post-inner {
			background-color: #ffffff;
		}

		#rb_blog_5de2268ccd653 .post-title a {
			color: #3e4a59;
		}

		#rb_blog_5de2268ccd653 .post-content {
			color: rgba(62, 74, 89, 0.8);
		}

		#rb_blog_5de2268ccd653 .post-meta-wrapper .coments_count a:before {
			color: #5163dd;
		}

		#rb_blog_5de2268ccd653 .blog_grid .content_inner .post .post-inner .post-meta-wrapper:before {
			background-color: #5163dd;
		}

		#rb_blog_5de2268ccd653 .post-meta-wrapper,
		#rb_blog_5de2268ccd653 .post-meta-wrapper a {
			color: #3e4a59;
		}

		#rb_blog_5de2268ccd653 .slick-dots li.slick-active button {
			border-color: #5566de;
		}

		#rb_blog_5de2268ccd653 .rb_carousel .slick-arrow {
			color: #3e4a59;
		}

		#rb_blog_5de2268ccd653 .post-inner .post-media-wrapper .post-date a {
			color: #3e4a59;
		}

		#rb_blog_5de2268ccd653 .post-inner .post-media-wrapper .post-date {
			background-color: #ffffff;
		}

		#rb_blog_5de2268ccd653 .rb_button {
			color: #3e4a59;
		}

		#rb_blog_5de2268ccd653 .rb_button {
			border-color: #e2e2e2;
		}

		#rb_blog_5de2268ccd653 .rb_button.simple:after {
			color: #5566de;
		}

		#rb_blog_5de2268ccd653 .rb_button {
			background-color: #ffffff;
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

		.rb_content_5de2268cd1853>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2268cd1853>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2268cd1853>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268cd19f8>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cd19f8>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cd19f8>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_inner_row_5de2268cd1b8c>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de2268cd1b8c>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de2268cd1b8c>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268cd1cc1>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cd1cc1>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cd1cc1>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_logo_5de2268cd1ed9 {
			border-bottom-width: 1px !important;
			padding-bottom: 35px !important;
			border-bottom-color: #cccccc !important;
			border-bottom-style: solid !important;
		}

		#rb_logo_5de2268cd1ed9 {
			text-align: center;
		}

		#rb_inner_row_5de2268cd1f8a>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_inner_row_5de2268cd1f8a>.vc_row {
			background-size: cover !important;
		}

		#rb_inner_row_5de2268cd1f8a>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268cd20db>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cd20db>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cd20db>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		#rb_icon_list_5de2268cd2206>a,
		#rb_icon_list_5de2268cd2206>.mini-cart>a,
		#rb_icon_list_5de2268cd2206 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a {
			color: #ffffff;
		}

		#rb_icon_list_5de2268cd2206.header_icons>*~.mini-cart:not(:first-child) .woo_mini-count {
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

			#rb_icon_list_5de2268cd2206>a:hover,
			#rb_icon_list_5de2268cd2206>.mini-cart>a:hover,
			#rb_icon_list_5de2268cd2206 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a:hover {
				color: #ffffff;
			}
		}

		@media screen and (max-width: 767px) {
			#rb_icon_list_5de2268cd2206 {
				margin-bottom: 30px !important;
				;
			}

			#rb_icon_list_5de2268cd2206 {
				text-align: center;
			}
		}

		#rb_column_5de2268cd2379>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cd2379>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cd2379>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de2268cd2500 {
			margin-bottom: 15px !important;
			;
		}

		.rb_textmodule_5de2268cd2500 {
			text-align: center;
		}

		.rb_textmodule_5de2268cd2500 .rb_textmodule_title,
		.rb_textmodule_5de2268cd2500 .rb_textmodule_button.simple {
			color: #ffffff;
		}

		.rb_textmodule_5de2268cd2500 .rb_textmodule_subtitle {
			color: #ffffff;
		}

		.rb_textmodule_5de2268cd2500 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de2268cd2500 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2268cd2500 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de2268cd2500 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cd2500 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2268cd2500 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cd2500 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de2268cd2500 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de2268cd2500 .rb_textmodule_title {
			font-size: 20px;
		}

		.rb_textmodule_5de2268cd2500 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de2268cd2500 .rb_textmodule_title {
			margin-bottom: 20px;
			padding-bottom: 20px;
		}

		.rb_textmodule_5de2268cd2500 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de2268cd2500 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de2268cd2500 .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de2268cd2500 {
				text-align: center;
			}
		}

		#rb_column_5de2268cd27dc>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cd27dc>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cd27dc>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de2268cd2956 {
			margin-bottom: 0px !important;
			padding-bottom: 0px !important;
			;
		}

		.rb_textmodule_5de2268cd2956 {
			text-align: right;
		}

		.rb_textmodule_5de2268cd2956 .rb_textmodule_title,
		.rb_textmodule_5de2268cd2956 .rb_textmodule_button.simple {
			color: #ffffff;
		}

		.rb_textmodule_5de2268cd2956 .rb_textmodule_subtitle {
			color: #ffffff;
		}

		.rb_textmodule_5de2268cd2956 {
			color: rgba(62, 74, 89, 0.8);
		}

		.rb_footer_template .rb_textmodule_5de2268cd2956 a {
			color: rgba(62, 74, 89, 0.8);
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2268cd2956 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de2268cd2956 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cd2956 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2268cd2956 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cd2956 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de2268cd2956 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de2268cd2956 .rb_textmodule_title {
			font-size: 20px;
		}

		.rb_textmodule_5de2268cd2956 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de2268cd2956 .rb_textmodule_title {
			margin-bottom: 0px;
			padding-bottom: 0px;
		}

		.rb_textmodule_5de2268cd2956 .rb_textmodule_content_wrapper {
			font-size: 17px;
		}

		.rb_textmodule_5de2268cd2956 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de2268cd2956 .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de2268cd2956 {
				margin-top: 30px !important;
				;
			}

			.rb_textmodule_5de2268cd2956 {
				text-align: center;
			}
		}

		#rb_icon_list_5de2268cd2a48 {
			margin-top: 25px !important;
			;
		}

		#rb_icon_list_5de2268cd2a48 {
			text-align: right;
		}

		#rb_icon_list_5de2268cd2a48 i:before {
			font-size: 17px;
		}

		#rb_icon_list_5de2268cd2a48 .icon_wrapper svg {
			transform: scale(0.47);
		}

		#rb_icon_list_5de2268cd2a48 .title {
			font-size: 16px;
		}

		#rb_icon_list_5de2268cd2a48.direction_line>* {
			margin-right: 8px;
		}

		#rb_icon_list_5de2268cd2a48.direction_column>*>* {
			margin-top: 8px;
		}

		#rb_icon_list_5de2268cd2a48>a,
		#rb_icon_list_5de2268cd2a48>.mini-cart>a,
		#rb_icon_list_5de2268cd2a48 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a {
			color: #ffffff;
		}

		#rb_icon_list_5de2268cd2a48.header_icons>*~.mini-cart:not(:first-child) .woo_mini-count {
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

			#rb_icon_list_5de2268cd2a48>a:hover,
			#rb_icon_list_5de2268cd2a48>.mini-cart>a:hover,
			#rb_icon_list_5de2268cd2a48 .wpml-ls-statics-shortcode_actions .wpml-ls-current-language>a:hover {
				color: #ffffff;
			}
		}

		@media screen and (max-width: 991px) {
			#rb_icon_list_5de2268cd2a48 *:before {
				font-size: 20px;
			}

			#rb_icon_list_5de2268cd2a48 .title {
				font-size: 16px;
			}

			#rb_icon_list_5de2268cd2a48.direction_line>* {
				margin-right: 12px;
			}

			#rb_icon_list_5de2268cd2a48.direction_column>*>* {
				margin-top: 12px;
			}
		}

		@media screen and (max-width: 767px) {
			#rb_icon_list_5de2268cd2a48 {
				text-align: center;
			}
		}

		.rb_content_5de2268cd2c6c>.vc_row {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		.rb_content_5de2268cd2c6c>.vc_row {
			background-size: cover !important;
		}

		.rb_content_5de2268cd2c6c>.vc_row {
			background-position: center !important;
		}

		#rb_column_5de2268cd2d97>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cd2d97>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cd2d97>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		@media screen and (max-width: 767px) {
			#rb_column_5de2268cd2d97>.wpb_column>.vc_column-inner {
				margin-bottom: 30px !important;
			}
		}

		.rb_textmodule_5de2268cd2ec5 .rb_textmodule_title,
		.rb_textmodule_5de2268cd2ec5 .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de2268cd2ec5 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cd2ec5 {
			color: #ffffff;
		}

		.rb_footer_template .rb_textmodule_5de2268cd2ec5 a {
			color: #ffffff;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2268cd2ec5 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de2268cd2ec5 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cd2ec5 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2268cd2ec5 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cd2ec5 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de2268cd2ec5 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de2268cd2ec5 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de2268cd2ec5 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de2268cd2ec5 .rb_textmodule_title {
			margin-bottom: 20px;
			padding-bottom: 20px;
		}

		.rb_textmodule_5de2268cd2ec5 .rb_textmodule_content_wrapper {
			font-size: 16px;
		}

		.rb_textmodule_5de2268cd2ec5 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de2268cd2ec5 .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de2268cd2ec5 {
				text-align: center;
			}
		}

		#rb_column_5de2268cd2fea>.wpb_column>.vc_column-inner {
			background-attachment: scroll !important;
			background-repeat: no-repeat !important;
		}

		#rb_column_5de2268cd2fea>.wpb_column>.vc_column-inner {
			background-size: cover !important;
		}

		#rb_column_5de2268cd2fea>.wpb_column>.vc_column-inner {
			background-position: center !important;
		}

		.rb_textmodule_5de2268cd3114 .rb_textmodule_title,
		.rb_textmodule_5de2268cd3114 .rb_textmodule_button.simple {
			color: #3e4a59;
		}

		.rb_textmodule_5de2268cd3114 .rb_textmodule_subtitle {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cd3114 {
			color: #ffffff;
		}

		.rb_footer_template .rb_textmodule_5de2268cd3114 a {
			color: #ffffff;
		}

		@media screen and (min-width: 1367px),
		screen and (min-width: 1200px) and (any-hover: hover),
		screen and (min-width: 1200px) and (min--moz-device-pixel-ratio:0),
		screen and (min-width: 1200px) and (-ms-high-contrast: none),
		screen and (min-width: 1200px) and (-ms-high-contrast: active) {
			.rb_textmodule_5de2268cd3114 .rb_textmodule_content_wrapper a:hover {
				color: #5163dd;
			}
		}

		.rb_textmodule_5de2268cd3114 .rb_textmodule_content_wrapper ul li:before {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cd3114 .rb_textmodule_divider {
			background-color: #5163dd;
		}

		.rb_textmodule_5de2268cd3114 .rb_textmodule_button.simple:after {
			color: #5163dd;
		}

		.rb_textmodule_5de2268cd3114 .rb_textmodule_subtitle {
			font-size: 20px;
		}

		.rb_textmodule_5de2268cd3114 .rb_textmodule_subtitle {
			line-height: initial;
		}

		.rb_textmodule_5de2268cd3114 .rb_textmodule_title {
			font-size: 40px;
		}

		.rb_textmodule_5de2268cd3114 .rb_textmodule_title {
			line-height: 1.2em;
		}

		.rb_textmodule_5de2268cd3114 .rb_textmodule_title {
			margin-bottom: 20px;
			padding-bottom: 20px;
		}

		.rb_textmodule_5de2268cd3114 .rb_textmodule_content_wrapper {
			font-size: 16px;
		}

		.rb_textmodule_5de2268cd3114 .rb_textmodule_content_wrapper {
			line-height: 30px;
		}

		.rb_textmodule_5de2268cd3114 .rb_textmodule_button {
			margin-top: 35px;
		}

		@media screen and (max-width: 767px) {
			.rb_textmodule_5de2268cd3114 {
				text-align: center;
			}
		}
	</style>
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
	<script type='text/javascript' src='wp-content/themes/seoes/assets/js/isotope.min.js'></script>
	<script type='text/javascript' src='wp-content/plugins/wpforms-lite/assets/js/jquery.validate.min.js'></script>

	<!--<script type = "text/javascript" src = "js/scripts.php?build=12345&load=script1,script2,script3,folder/script4"> </script> -->
	<!-- do not specify the .js extension -->
	
	<!-- defer parse these javascripts
	https://www.seotechstore.com/wp-content/plugins/revslider/public/assets/js/rs6.min.js
	https://www.seotechstore.com/wp-content/plugins/revslider/public/assets/js/revolution.tools.min.js
	https://www.seotechstore.com/wp-includes/js/jquery/jquery.js
	https://www.seotechstore.com/wp-includes/js/jquery/jquery-migrate.min.js
	https://www.seotechstore.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js
	https://www.seotechstore.com/ (3.0KiB of inline JavaScript)
	https://www.seotechstore.com/wp-content/plugins/rb-svg-icons/rbsvgi_f.js
	-->
	
	<script>
		function downloadJSAtOnload(element) {
			var element = document.createElement("script");
			element.src = example;
			document.body.appendChild(element);
		}

		function appendDeferJavascript()
		{
			var deferjavascript = ["https://www.seotechstore.com/wp-content/plugins/revslider/public/assets/js/rs6.min.js",
			"https://www.seotechstore.com/wp-content/plugins/revslider/public/assets/js/revolution.tools.min.js",
			"https://www.seotechstore.com/wp-includes/js/jquery/jquery.js",
			"https://www.seotechstore.com/wp-includes/js/jquery/jquery-migrate.min.js",
			"https://www.seotechstore.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js",
			"https://www.seotechstore.com/wp-content/plugins/rb-svg-icons/rbsvgi_f.js"];

			deferjavascript.forEach(element => downloadJSAtOnload(element));
		}

		if (window.addEventListener)
			window.addEventListener("load", appendDeferJavascript, false);
		else if (window.attachEvent)
			window.attachEvent("onload", appendDeferJavascript);
		else window.onload = appendDeferJavascript;
	</script>

</body>

</html>