# Show Blog ID in Admin Bar for WordPress Multisite
This code will show the Current WordPress Blog ID on WordPress admin menu bar

### How to use
Just cope the code from here and paste this on your active theme's functions.php file

	function show_wordpress_blog_id( $wp_admin_bar ) {
	
		$current_blog_id = get_current_blog_id();
		$wp_admin_bar->add_node( array(
			'id'    => "blog_id",
			'title' => "<span style='color:#FFCE42;'>WP ID # $current_blog_id</span>",
			'href'  => '#',
		) );
	}
	add_action( 'admin_bar_menu', 'show_wordpress_blog_id', 999 );
