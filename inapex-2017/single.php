<?php get_header(); ?>
	<div class="content single">
		<div class="container">
			<div class="single-news left width-60">
				<div class="ads single-one" style="margin: 50px 0 10px 0">
	<!-- <a href="http://inapex.co.id/20-tahun-fixed-nirwana-bojong-tawarkan-rumah-cicilan-rp-800-ribuan/">
	<img src="<?php bloginfo('template_directory'); ?>/img/nirwana_bojong.gif">
</a> -->
				</div>
				<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
					
					<h1 class="title-single">
						<?php the_title(); ?>
					</h1>
					
					<div class="time-share">
					<div class="time-author">
						<li>
							<span>Oleh </span> <?php the_author_posts_link(); ?>
						</li>
						<li>
							<i class="fa fa-clock-o"></i> <?php the_time('l, d M Y'); ?>
						</li>
					</div>
					
				</div>		
				
				<div class="content share-button">
					<!-- AddThis Button BEGIN -->
					<div class="addthis_custom addthis_toolbox addthis_default_style addthis_32x32_style">
						<a class="addthis_counter addthis_bubble_style" style="margin-bottom:0"></a>
						<a class="addthis_button_facebook" style="margin-bottom:0"></a>
						<a class="addthis_button_twitter" style="margin-bottom:0"></a>
					</div>
								<!-- AddThis Button END -->
				</div>

				<div class="desc-single">
					<?php the_content(); ?>
				</div>

				<?php endwhile; ?> <?php endif; ?>

				<div class="ads single-two">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ARTICLE RUMAH REI -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-0563446994775506"
     data-ad-slot="7521748182"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
					</div>
				<div class="content single-news-related">
					<h2 class="title-related">
						Berita Terkait
					</h2>
					
					<?php
						//for use in the loop, list 5 post titles related to first tag on current post
						$tags = wp_get_post_tags($post->ID);
						if ($tags) {
						
						$first_tag = $tags[0]->term_id;
						$args=array(
						'tag__in' => array($first_tag),
						'post__not_in' => array($post->ID),
						'posts_per_page'=>5,
						'caller_get_posts'=>1
						);
						$my_query = new WP_Query($args);
						if( $my_query->have_posts() ) {
						while ($my_query->have_posts()) : $my_query->the_post(); ?>
						<li>
						<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
							<div class="img">
									<?php if ( has_post_thumbnail() ) : ?>
						              <?php the_post_thumbnail('thumbnail'); ?>
						            <?php else : ?>
						              <img src="<?php bloginfo('template_directory'); ?>/assets/img/default.jpg">
						            <?php endif; ?>
								</div>

								<h3 class="title">
									<?php the_title(); ?>
								</h3>	
						</a>
						</li>
						
							

						<?php
						endwhile;
						}
						wp_reset_query();
						}
						?>

				</div>
				<div class="ads single-three">
						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ARTICLE RUMAH REI -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-0563446994775506"
     data-ad-slot="7521748182"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
					</div>
			</div>


			<div class="single-sidebar left width-30">
				<div class="sidebar-rekomen">
					<h2 class="title-rekomen">
						Rekomendasi Kami
					</h2>
					<?php  $args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'orderby' => 'rand',
						'tax_query' => array(
						    array(
						        'taxonomy' => 'category',
						        'field'    => 'slug',
						        'terms'    => 'berita-rekomendasi'
						    )
						),
					    'showposts' => 1
					);
					$wp_query = new WP_Query($args); if ($wp_query->have_posts()) :
					while ($wp_query->have_posts()) : the_post(); ?>
					<div class="rekomen-ins">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<div class="img">
									<?php if ( has_post_thumbnail() ) : ?>
						              <?php the_post_thumbnail('thumbnail'); ?>
						            <?php else : ?>
						              <img src="<?php bloginfo('template_directory'); ?>/assets/img/default.jpg">
						            <?php endif; ?>
								</div>

								<h3 class="title">
									<?php the_title(); ?>
								</h3>
									<div class="time-author">
										<span>Oleh </span> <?php the_author_posts_link(); ?> <span> - </span> <?php echo time_ago(); ?>
									</div>
							</a>
					</div>
					<?php endwhile; ?>  <?php else : ?>     <?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
				<div class="sidebar-popular">
					<h2 class="title-popular">
						Sedang Populer
					</h2>
					<?php query_posts('showposts=5&cat=10&orderby=rand'); ?> 
					<?php  $args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'orderby' => 'rand',
						'tax_query' => array(
						    array(
						        'taxonomy' => 'category',
						        'field'    => 'slug',
						        'terms'    => 'berita-terpopuler'
						    )
						),
					    'showposts' => 5
					);
					$wp_query = new WP_Query($args); if ($wp_query->have_posts()) :
					while ($wp_query->have_posts()) : the_post(); ?>
					<div class="popular-ins">
						<li>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<div class="img">
									<?php if ( has_post_thumbnail() ) : ?>
						              <?php the_post_thumbnail('thumbnail'); ?>
						            <?php else : ?>
						              <img src="<?php bloginfo('template_directory'); ?>/assets/img/default.jpg">
						            <?php endif; ?>
								</div>

								<h3 class="title">
									<?php the_title(); ?>
								</h3>
									<div class="time-author">
										<span>Oleh </span> <?php the_author_posts_link(); ?> <span> - </span> <?php echo time_ago(); ?>
									</div>
							</a>
						</li>
					</div>
					<?php endwhile; ?>  <?php else : ?>     <?php endif; ?>
					<?php wp_reset_query(); ?>
				</div>
				<div class="sidebar-ads">
					<li> <img src="<?php bloginfo('template_directory'); ?>/assets/img/ads4.gif"></li>
					<li> <img src="<?php bloginfo('template_directory'); ?>/assets/img/ads5.jpg"></li>
				</div>
				<div class="content subscribe">
					<h3>Dapatkan Info Dari Kami Setiap Harinya</h3>

					<?php echo do_shortcode( '[contact-form-7 id="12423" title="subscribe"]' ); ?>
					
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>