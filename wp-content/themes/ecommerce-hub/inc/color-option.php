<?php
	
	$ecommerce_hub_first_theme_color = get_theme_mod('ecommerce_hub_first_theme_color');

	$ecommerce_hub_custom_css = '';

	if($ecommerce_hub_first_theme_color != false){
		$ecommerce_hub_custom_css .=' input[type="submit"], #footer input[type="submit"], #sidebar .tagcloud a:hover,.nav-menu ul ul a, .social-icon,  h1.page-title, h1.search-title, .post-info, .blogbtn a, .inner, .footerinner .tagcloud a:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, #comments input[type="submit"].submit, #sidebar input[type="submit"], .pagination .current, span.meta-nav, .title-box,.more-btn a:hover, .tags a:hover, #comments a.comment-reply-link{';
			$ecommerce_hub_custom_css .='background-color: '.esc_html($ecommerce_hub_first_theme_color).';';
		$ecommerce_hub_custom_css .='}';
	}
	if($ecommerce_hub_first_theme_color != false){
		$ecommerce_hub_custom_css .=' .nav-menu ul li a:active, .nav-menu ul li a:hover, #sidebar ul li a:hover, a, .nav-menu ul li a:hover, .social-media i, .social-media i:hover, .contact-details i, .border-image i, .footerinner ul li a:hover, span.post-title, .nav-menu .current_page_item > a, .nav-menu .current-menu-item > a, .nav-menu .current_page_ancestor > a, .nav-menu ul li a:hover,#footer h3,.tags a i{';
			$ecommerce_hub_custom_css .='color: '.esc_html($ecommerce_hub_first_theme_color).';';
		$ecommerce_hub_custom_css .='}';
	}
	if($ecommerce_hub_first_theme_color != false){
		$ecommerce_hub_custom_css .=' #sidebar form, .more-btn a:hover, .nav-menu ul ul,.tags a:hover {';
			$ecommerce_hub_custom_css .='border-color: '.esc_html($ecommerce_hub_first_theme_color).';';
		$ecommerce_hub_custom_css .='}';
	}
	if($ecommerce_hub_first_theme_color != false){
		$ecommerce_hub_custom_css .=' 
		.nav-menu ul li a:hover {';
			$ecommerce_hub_custom_css .='border-left-color: '.esc_html($ecommerce_hub_first_theme_color).';';
		$ecommerce_hub_custom_css .='}';
	}
	if($ecommerce_hub_first_theme_color != false){
		$ecommerce_hub_custom_css .=' .blog-sec, #sidebar aside{';
			$ecommerce_hub_custom_css .='box-shadow: 2px 2px '.esc_html($ecommerce_hub_first_theme_color).';';
		$ecommerce_hub_custom_css .='}';
	}


	// Layout Options
	$ecommerce_hub_theme_layout = get_theme_mod( 'ecommerce_hub_theme_layout_options','Default Theme');
    if($ecommerce_hub_theme_layout == 'Default Theme'){
		$ecommerce_hub_custom_css .='body{';
			$ecommerce_hub_custom_css .='max-width: 100%;';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_theme_layout == 'Container Theme'){
		$ecommerce_hub_custom_css .='body{';
			$ecommerce_hub_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_theme_layout == 'Box Container Theme'){
		$ecommerce_hub_custom_css .='body{';
			$ecommerce_hub_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$ecommerce_hub_custom_css .='}';
	}

	/*------------- Slider Opacity -------------------*/
	$ecommerce_hub_slider_layout = get_theme_mod( 'ecommerce_hub_slider_opacity_color','0.7');
	if($ecommerce_hub_slider_layout == '0'){
		$ecommerce_hub_custom_css .='#slider img{';
			$ecommerce_hub_custom_css .='opacity:0';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_slider_layout == '0.1'){
		$ecommerce_hub_custom_css .='#slider img{';
			$ecommerce_hub_custom_css .='opacity:0.1';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_slider_layout == '0.2'){
		$ecommerce_hub_custom_css .='#slider img{';
			$ecommerce_hub_custom_css .='opacity:0.2';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_slider_layout == '0.3'){
		$ecommerce_hub_custom_css .='#slider img{';
			$ecommerce_hub_custom_css .='opacity:0.3';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_slider_layout == '0.4'){
		$ecommerce_hub_custom_css .='#slider img{';
			$ecommerce_hub_custom_css .='opacity:0.4';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_slider_layout == '0.5'){
		$ecommerce_hub_custom_css .='#slider img{';
			$ecommerce_hub_custom_css .='opacity:0.5';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_slider_layout == '0.6'){
		$ecommerce_hub_custom_css .='#slider img{';
			$ecommerce_hub_custom_css .='opacity:0.6';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_slider_layout == '0.7'){
		$ecommerce_hub_custom_css .='#slider img{';
			$ecommerce_hub_custom_css .='opacity:0.7';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_slider_layout == '0.8'){
		$ecommerce_hub_custom_css .='#slider img{';
			$ecommerce_hub_custom_css .='opacity:0.8';
		$ecommerce_hub_custom_css .='}';
	}else if($ecommerce_hub_slider_layout == '0.9'){
		$ecommerce_hub_custom_css .='#slider img{';
			$ecommerce_hub_custom_css .='opacity:0.9';
		$ecommerce_hub_custom_css .='}';
	}

	/*----------Slider Content Layout -------------------*/
	$ecommerce_hub_slider_layout = get_theme_mod( 'ecommerce_hub_slider_alignment_option','Left Align');
    if($ecommerce_hub_slider_layout == 'Left Align'){
		$ecommerce_hub_custom_css .='#slider .carousel-caption{';
			$ecommerce_hub_custom_css .='text-align:left;';
		$ecommerce_hub_custom_css .='}';
		$ecommerce_hub_custom_css .='#slider .carousel-caption{';
		$ecommerce_hub_custom_css .='left:15%; right:45%;';
		$ecommerce_hub_custom_css .='}';
		$ecommerce_hub_custom_css .='@media screen and (min-width: 720px) and (max-width:768px){
		#slider .carousel-caption{';
		$ecommerce_hub_custom_css .='left:15%; right:25%;';
		$ecommerce_hub_custom_css .='} }';
	}else if($ecommerce_hub_slider_layout == 'Center Align'){
		$ecommerce_hub_custom_css .='#slider .carousel-caption{';
			$ecommerce_hub_custom_css .='text-align:center;';
		$ecommerce_hub_custom_css .='}';
		$ecommerce_hub_custom_css .='#slider .carousel-caption{';
		$ecommerce_hub_custom_css .='left:25%; right:25%;';
		$ecommerce_hub_custom_css .='}';
		$ecommerce_hub_custom_css .='@media screen and (min-width: 720px) and (max-width:768px){
		#slider .carousel-caption{';
		$ecommerce_hub_custom_css .='left:15%; right:15%;';
		$ecommerce_hub_custom_css .='} }';
	}else if($ecommerce_hub_slider_layout == 'Right Align'){
		$ecommerce_hub_custom_css .='#slider .carousel-caption{';
			$ecommerce_hub_custom_css .='text-align:right;';
		$ecommerce_hub_custom_css .='}';
		$ecommerce_hub_custom_css .='#slider .carousel-caption{';
		$ecommerce_hub_custom_css .='left:45%; right:15%;';
		$ecommerce_hub_custom_css .='}';
		$ecommerce_hub_custom_css .='@media screen and (min-width: 720px) and (max-width:768px){
		#slider .carousel-caption{';
		$ecommerce_hub_custom_css .='right:15%; left:25%;';
		$ecommerce_hub_custom_css .='} }';
	}

	/*--------- Preloader Color Option -------*/
	$ecommerce_hub_preloader_color = get_theme_mod('ecommerce_hub_preloader_color');

	if($ecommerce_hub_preloader_color != false){
		$ecommerce_hub_custom_css .=' .tg-loader{';
			$ecommerce_hub_custom_css .='border-color: '.esc_html($ecommerce_hub_preloader_color).';';
		$ecommerce_hub_custom_css .='} ';
		$ecommerce_hub_custom_css .=' .tg-loader-inner, .preloader .preloader-container .animated-preloader, .preloader .preloader-container .animated-preloader:before{';
			$ecommerce_hub_custom_css .='background-color: '.esc_html($ecommerce_hub_preloader_color).';';
		$ecommerce_hub_custom_css .='} ';
	}

	$ecommerce_hub_preloader_bg_color = get_theme_mod('ecommerce_hub_preloader_bg_color');

	if($ecommerce_hub_preloader_bg_color != false){
		$ecommerce_hub_custom_css .=' #overlayer, .preloader{';
			$ecommerce_hub_custom_css .='background-color: '.esc_html($ecommerce_hub_preloader_bg_color).';';
		$ecommerce_hub_custom_css .='} ';
	}

	/*------------ Button Settings option-----------------*/
	$ecommerce_hub_top_button_padding = get_theme_mod('ecommerce_hub_top_button_padding');
	$ecommerce_hub_bottom_button_padding = get_theme_mod('ecommerce_hub_bottom_button_padding');
	$ecommerce_hub_left_button_padding = get_theme_mod('ecommerce_hub_left_button_padding');
	$ecommerce_hub_right_button_padding = get_theme_mod('ecommerce_hub_right_button_padding');
	if($ecommerce_hub_top_button_padding != false || $ecommerce_hub_bottom_button_padding != false || $ecommerce_hub_left_button_padding != false || $ecommerce_hub_right_button_padding != false){
		$ecommerce_hub_custom_css .='.blogbtn a, .more-btn a, #comments input[type="submit"].submit{';
			$ecommerce_hub_custom_css .='padding-top: '.esc_html($ecommerce_hub_top_button_padding).'px; padding-bottom: '.esc_html($ecommerce_hub_bottom_button_padding).'px; padding-left: '.esc_html($ecommerce_hub_left_button_padding).'px; padding-right: '.esc_html($ecommerce_hub_right_button_padding).'px; display:inline-block;';
		$ecommerce_hub_custom_css .='}';
	}

	$ecommerce_hub_button_border_radius = get_theme_mod('ecommerce_hub_button_border_radius');
	$ecommerce_hub_custom_css .='.blogbtn a, .more-btn a, #comments input[type="submit"].submit{';
		$ecommerce_hub_custom_css .='border-radius: '.esc_html($ecommerce_hub_button_border_radius).'px;';
	$ecommerce_hub_custom_css .='}';

	/*----------- Copyright css -----*/
	$ecommerce_hub_copyright_top_padding = get_theme_mod('ecommerce_hub_top_copyright_padding');
	$ecommerce_hub_copyright_bottom_padding = get_theme_mod('ecommerce_hub_top_copyright_padding');
	if($ecommerce_hub_copyright_top_padding != false || $ecommerce_hub_copyright_bottom_padding != false){
		$ecommerce_hub_custom_css .='.inner{';
			$ecommerce_hub_custom_css .='padding-top: '.esc_html($ecommerce_hub_copyright_top_padding).'px; padding-bottom: '.esc_html($ecommerce_hub_copyright_bottom_padding).'px; ';
		$ecommerce_hub_custom_css .='}';
	} 

	$ecommerce_hub_copyright_alignment = get_theme_mod('ecommerce_hub_copyright_alignment', 'center');
	if($ecommerce_hub_copyright_alignment == 'center' ){
		$ecommerce_hub_custom_css .='#footer .copyright p{';
			$ecommerce_hub_custom_css .='text-align: '. $ecommerce_hub_copyright_alignment .';';
		$ecommerce_hub_custom_css .='}';
	}elseif($ecommerce_hub_copyright_alignment == 'left' ){
		$ecommerce_hub_custom_css .='#footer .copyright p{';
			$ecommerce_hub_custom_css .=' text-align: '. $ecommerce_hub_copyright_alignment .';';
		$ecommerce_hub_custom_css .='}';
	}elseif($ecommerce_hub_copyright_alignment == 'right' ){
		$ecommerce_hub_custom_css .='#footer .copyright p{';
			$ecommerce_hub_custom_css .='text-align: '. $ecommerce_hub_copyright_alignment .';';
		$ecommerce_hub_custom_css .='}';
	}

	$ecommerce_hub_copyright_font_size = get_theme_mod('ecommerce_hub_copyright_font_size');
	$ecommerce_hub_custom_css .='#footer .copyright p{';
		$ecommerce_hub_custom_css .='font-size: '.esc_html($ecommerce_hub_copyright_font_size).'px;';
	$ecommerce_hub_custom_css .='}';

	/*------ Topbar padding ------*/
	$ecommerce_hub_top_topbar_padding = get_theme_mod('ecommerce_hub_top_topbar_padding');
	$ecommerce_hub_bottom_topbar_padding = get_theme_mod('ecommerce_hub_bottom_topbar_padding');
	if($ecommerce_hub_top_topbar_padding != false || $ecommerce_hub_bottom_topbar_padding != false){
		$ecommerce_hub_custom_css .='.social-icon{';
			$ecommerce_hub_custom_css .='padding-top: '.esc_html($ecommerce_hub_top_topbar_padding).'px; padding-bottom: '.esc_html($ecommerce_hub_bottom_topbar_padding).'px; ';
		$ecommerce_hub_custom_css .='}';
	}