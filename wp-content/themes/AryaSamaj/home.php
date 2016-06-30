<?php
/**
 * Template Name: Home Page Template
 */
get_header(); ?>

<div class="clear"></div>
<?php
	//get_template_part( 'sections/big_title' );
	echo do_shortcode('[masterslider id="1"]');
?>
	<div id="main-nav1" class="navbar navbar-inverse bs-docs-nav" role="banner">
		<div class="container">
			<nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation" id="site-navigation" style="width:100%;">
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'zerif-lite' ); ?></a>
				<?php wp_nav_menu( array('theme_location' => 'secondary-menu', 'container' => false, 'menu_class' => 'nav navbar-nav navbar-right responsive-nav main-nav-list bottom-slider-menu', 'fallback_cb'     => 'zerif_wp_page_menu')); ?>
			</nav>
		</div>
	</div>
	<!-- / END TOP BAR -->
</header> <!-- / END HOME SECTION  -->

<div id="content" class="site-content">

	<div class="container">

		<div class="content-left-wrap col-md-12">

			<div id="primary" class="content-area">

				<main id="main" class="site-main" role="main">
				<?php
					$page = get_page_by_path('home-section1');
					echo $page->post_content;
				?>
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .content-left-wrap -->

	</div><!-- .container -->

</div><!-- .site-content -->


<div id="content" class="site-content help-section">

	<div class="container">

		<div class="help-left-wrap col-md-12">

			<div class="col-md-3"></div>
			<div class="col-md-6">
			<div id="primary" class="content-area">

				<main id="main" class="site-main" role="main">
					<h3 class="help-heading">How can you help ? </h3>
					<p class="help-content">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum is simply dummy textof the printing and typesetting industry.Lorem Ipsum is simply dummy text.
					</p>
					<?php
						$page = get_page_by_path('home-section1');
						//echo $page->post_content;
					?>
				</main><!-- #main -->

			</div><!-- #primary -->
			</div>
			<div class="col-md-3"></div>

		</div><!-- .content-left-wrap -->

	</div><!-- .container -->

</div><!-- .site-content -->

<div id="content" class="site-content donate-section">

	<div class="container">

		<div class="donate-left-wrap col-md-12">

			<div class="col-md-3"></div>
			<div class="col-md-6">
			<div id="primary" class="content-area">

				<main id="main" class="site-main" role="main">
					<div>
						<img class="donate-img1" src="<?php echo get_template_directory_uri() ?>/images/donate-grey.png">
						<img class="donate-img3" src="<?php echo get_template_directory_uri() ?>/images/donate-grey.png">
						<img class="donate-img2" src="<?php echo get_template_directory_uri() ?>/images/donate-blue.png">
					</div>
					<p class="donate-content">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum is simply dummy textof the printing and typesetting industry.Lorem Ipsum is simply dummy text.
					</p>
					<div><input type="button" class="donate-btn" value="Donate Us"/></div>
					<?php
						$page = get_page_by_path('home-section1');
						//echo $page->post_content;
					?>
				</main><!-- #main -->

			</div><!-- #primary -->
			</div>
			<div class="col-md-3"></div>

		</div><!-- .content-left-wrap -->

	</div><!-- .container -->

<?php get_footer(); ?>