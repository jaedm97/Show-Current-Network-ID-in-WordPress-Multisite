# Show Current Network ID in WordPress Multisite
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

	
### Screenshots

#### How it looks
![alt text](https://github.com/jaedm97/Show-Current-Network-ID-in-WordPress-Multisite/blob/master/screenshot.jpg "Code in Action")





### + Question
 
Answer
 
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
		$('.markdown-block .sqs-block-content h3').css('cursor','pointer');
		$(".markdown-block .sqs-block-content h3").nextUntil("h3").slideToggle();
		$(".markdown-block .sqs-block-content h3").click(function() {$(this).nextUntil("h3").slideToggle();});
	});
	</script>





