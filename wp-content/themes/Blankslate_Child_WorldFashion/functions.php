<?php 
add_action('login_enqueue_scripts', function() {
	?>
	<style type="text/css">
	.login h1 a, #login h1 a {
		background-image: url('<?=  get_stylesheet_directory_uri()?>/images/login-logo.jpg');
		width: 100%;
		height: 200px;
		background-size: contain;
	}
</style>
<?php
});
add_filter('login_headerurl', function($url) {
	return esc_url(home_url( '/' ));
});
add_action('wp_enqueue_scripts', function() {
	wp_enqueue_script('fscript', get_stylesheet_directory_uri() . '/js/script.js', [], '1.0', true);
})
?>