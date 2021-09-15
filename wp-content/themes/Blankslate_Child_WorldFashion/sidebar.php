<input type="checkbox" id="sidebar-checker">
<aside id="sidebar" role="complementary" class="bg-light">
	<div class="mb-30">
		<label for="sidebar-checker" class="sidebar-toggler">
			<span></span>
			<span></span>
			<span></span>
		</label>
	</div>
	<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
		<div id="primary" class="widget-area">
			<ul class="xoxo">
				<?php dynamic_sidebar( 'primary-widget-area' ); ?>
			</ul>
		</div>
	<?php endif; ?>
</aside>