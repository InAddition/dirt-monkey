<?php
/*==============================================================================
Custom Login Style
==============================================================================*/
add_action( 'login_enqueue_scripts', 'my_login_stylesheet' );
function my_login_stylesheet() { ?>
	<link rel="stylesheet"  href="<?php echo get_bloginfo( 'stylesheet_directory' ) . '/css/wp-login.css'; ?>" />

	<?php }