<?php

	do_action( 'legit_news_doctype' );

?>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php

	do_action( 'legit_news_before_wp_head' );

	wp_head(); 
?>
</head>

<body <?php body_class(); ?>>

<div class="contaner">
	<div class="logo-image">
	<img src="https://vov.vn/themes/custom/vovvn/logo.svg" alt="">
	</div>
	<div class="icon">
	<i class="fa fa-facebook-official" aria-hidden="true"></i>
	<i class="fa fa-youtube-play" aria-hidden="true"></i>
	<i class="fa fa-twitter" aria-hidden="true"></i>
	
	</div>
	<div class="search">
		<input type="text">
	</div>
</div>




<?php do_action( 'wp_body_open' ); ?>

<?php

	do_action( 'legit_news_page_start_action' ); 

	do_action( 'legit_news_before_header' );

	do_action( 'legit_news_header_action' );


	do_action( 'legit_news_content_start_action' );


	do_action( 'legit_news_header_image_action' );
	
	if ( legit_news_is_frontpage() ) {

		$sorted = array( 'breaking_news','hero_post','must_read','main_post','related_post' );
	
		foreach ( $sorted as $section ) {	
			if ( $section == 'main_post' || $section == 'hero_post' ) {
				add_action( 'dark_legit_news_primary_content', 'next_legit_news_add_'. $section .'_section' );
			}else{
				add_action( 'dark_legit_news_primary_content', 'legit_news_add_'. $section .'_section' );
			}		
			
		}

		do_action( 'dark_legit_news_primary_content' );
	}

