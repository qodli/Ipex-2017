<?php 
/*
Template Name: Tentang Kami
*/
get_header(); ?>

<div class="content about">
	<div class="menu-about left width-20">
		<?php wp_nav_menu( array('theme_location' => 'footernav', 'menu_id' => 'footer-menu', 'menu_class' => 'nav-foot')); ?>
	</div>
	<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
		<div class="about-content left width-80">
			<div class="content about-content-ins tabcontent" style="display: block;">
				<h2 class="about-title"><?php the_title(); ?></h2>
				<div class="dynamic-content">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	<?php endwhile; endif; ?>
</div>


<?php get_footer();?>