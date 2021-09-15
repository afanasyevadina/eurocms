<?php 
get_header();
get_sidebar();
echo do_shortcode('[videoslider]');
?>
<section class="bg-gradient">
	<div class="container">
		<div class="section-title text-right text-sketch">Global fashion event</div>
		<div class="main-description">
			<div class="img">
				<img src="<?= get_stylesheet_directory_uri() ?>/images/main-img.jpg" alt="">
			</div>
			<div class="text"><?= get_the_content() ?></div>
		</div>
	</div>
</section>
<section class="scene">
	<div class="img-wrapper">
		<div class="img img-1"></div>
	</div>
	<div class="counter-block bg-blue">
		<h3 class="text-sketch section-title mb-30">Time remaining</h3>
		<div class="counter mb-30">
			<span class="days"></span>
			<span class="divider">:</span>
			<span class="hours"></span>
			<span class="divider">:</span>
			<span class="mins"></span>
			<span class="divider">:</span>
			<span class="secs"></span>
		</div>
		<br>
		<div class="text-center">October, 18, 2021</div>
	</div>
	<div class="img-wrapper">
		<div class="img img-2"></div>
	</div>
</section>
<section class="bg-light">
	<div class="container">
		<div class="section-title text-right text-sketch">News</div>
		<?php $query = new WP_Query(['post_type' => 'post']); ?>
		<div class="news-grid">
			<?php while($query->have_posts()) { $query->the_post(); ?>
				<div class="news-item">
					<div class="img">
						<img src="<?= get_the_post_thumbnail_url() ?>" alt="">
					</div>
					<h3><?= get_the_title() ?></h3>
					<div class="news-footer">
						<small><?= implode(', ', array_column(get_the_category(), 'name')) ?></small>
						<small><?= get_the_date() ?></small>
					</div>
				</div>
			<?php } ?>
		</div>
		<?php wp_reset_postdata(); ?>
	</div>
</section>
<section class="bg-gradient">
	<div class="container">
		<div class="section-title text-right text-sketch">Here we are</div>
		<div class="main-description">
			<div class="img">
				<img src="<?= get_the_post_thumbnail_url() ?>" alt="">
			</div>
			<div class="text">
				<p>resh Off The Rail Fest is a five-day event in Midtown Houston, Texas, held October 16–20, 2017 celebrating the convergence of culture, creativity, and innovation.</p>
				<p>Many southern streetwear designers, ready to wear and emerging brands will share their art and vision. The Fashion Week includes runway shows, live creative sessions, presentations and musical performances. With 20 shows and thousands of visitors expected, Fresh Off The Rail Fashion Week is a platform for emerging designers in the street-wear and street style market.</p>
			</div>
		</div>
	</div>
</section>
<section class="bg-blue">
	<div class="container sponsors">
		<div class="img">
			<img src="<?= get_stylesheet_directory_uri() ?>/images/sponsors/1.jpeg" alt="">
		</div>
		<div class="img">
			<img src="<?= get_stylesheet_directory_uri() ?>/images/sponsors/2.jpg" alt="">
		</div>
		<div class="img">
			<img src="<?= get_stylesheet_directory_uri() ?>/images/sponsors/3.png" alt="">
		</div>
		<div class="img">
			<img src="<?= get_stylesheet_directory_uri() ?>/images/sponsors/4.jpg" alt="">
		</div>
		<div class="img">
			<img src="<?= get_stylesheet_directory_uri() ?>/images/sponsors/5.png" alt="">
		</div>
		<div class="img">
			<img src="<?= get_stylesheet_directory_uri() ?>/images/sponsors/6.png" alt="">
		</div>
	</div>
</section>
<?php
get_footer();
?>