<?php 
/*
Plugin Name: Video Slider KZ
Author: KZ Team
Version: 1.0
*/
add_action('wp_enqueue_scripts', function() {
	wp_enqueue_script('videosliderscript-jssor', plugin_dir_url(__FILE__) . '/js/jssor.slider-22.2.16.min.js');
	wp_enqueue_script('videosliderscript', plugin_dir_url(__FILE__) . '/js/script.js');
	wp_enqueue_script('videosliderscriptinit', plugin_dir_url(__FILE__) . '/js/init.js', [], 1, true);
	wp_enqueue_style('videosliderstyle', plugin_dir_url(__FILE__) . '/css/style.css');
});
add_shortcode('videoslider', function($attr) {
	$video = get_post(get_post_meta(get_the_ID(), 'video', true)); 	
	?>
	<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:810px;height:300px;overflow:hidden;visibility:hidden;background-color:#000000;">
        <!-- Loading Screen -->
        <div data-u="loading" style="position:absolute;top:0px;left:0px;background-color:rgba(0,0,0,0.7);">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
            <div style="position:absolute;display:block;background:url('<?= plugin_dir_url(__FILE__) ?>/img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:600px;height:300px;overflow:hidden;">
        	<div>
            	<video data-u="image" src="<?= $video->guid ?>" controls poster="<?= get_stylesheet_directory_uri().'/images/poster.jpeg' ?>"></video>
                <div data-u="thumb">
                    <video class="i" src="<?= $video->guid ?>" controls poster="<?= get_stylesheet_directory_uri() ?>/images/poster.jpeg"></video>
                    <div class="t"><?= get_the_title() ?></div>
                    <div class="c"><?= date('d.m.Y', strtotime(get_post_meta(get_the_ID(), 'start_date', true))) ?></div>
                </div>
            </div>
        	<?php 
        	$query = new WP_Query([
				'post_type' => 'page',
				'post__not_in' => [get_the_ID()],
				'meta_key' => 'start_date',
				'orderby' => 'meta_value',
				'order' => 'desc',
			]);
        	while($query->have_posts()) { 
        		$query->the_post();
				$video = get_post(get_post_meta(get_the_ID(), 'video', true)); 
				?>
            <div>
            	<video data-u="image" src="<?= $video->guid ?>" controls></video>
                <div data-u="thumb">
                    <video class="i" src="<?= $video->guid ?>" controls></video>
                    <div class="t"><?= get_the_title() ?></div>
                    <div class="c"><?= date('d.m.Y', strtotime(get_post_meta(get_the_ID(), 'start_date', true))) ?></div>
                </div>
            </div>
        <?php } ?>
        </div>
        <!-- Thumbnail Navigator -->
        <div data-u="thumbnavigator" class="jssort11" style="position:absolute;right:5px;top:0px;font-family:Arial, Helvetica, sans-serif;-moz-user-select:none;-webkit-user-select:none;-ms-user-select:none;user-select:none;width:200px;height:300px;" data-autocenter="2">
            <!-- Thumbnail Item Skin Begin -->
            <div data-u="slides" style="cursor: default;">
                <div data-u="prototype" class="p">
                    <div data-u="thumbnailtemplate" class="tp"></div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora02l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora02r" style="top:0px;right:218px;width:55px;height:55px;" data-autocenter="2"></span>
    </div>
	<?php
	wp_reset_postdata();
});
?>