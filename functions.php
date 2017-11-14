function show_wordpress_blog_id( $wp_admin_bar ) {
	
	$current_blog_id = get_current_blog_id();
	$wp_admin_bar->add_node( array(
		'id'    => "blog_id",
		'title' => "<span style='color:#FFCE42;'>WP ID # $current_blog_id</span>",
		'href'  => '#',
	) );
}
add_action( 'admin_bar_menu', 'show_wordpress_blog_id', 999, 1 );
