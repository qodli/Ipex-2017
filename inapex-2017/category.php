<?php get_header(); ?>
<div class="content category"> 

    <div class="container">

    	<div class="content ads category-one">
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
    	<div class="content category-ins">
    			
		<h2 class="title-home">
			<?php echo single_cat_title(); ?> 
		</h2>
	
		 	<div class="content news-swiper swiper-container">
		 		<?php global $query_string; query_posts( $query_string . '&posts_per_page=12' );
	        	if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
	            <div class="swiper-slide">
	            	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		            	<div class="img">
							<?php if ( has_post_thumbnail() ) : ?>
				              <?php the_post_thumbnail('thumbnail'); ?>
				            <?php else : ?>
				              <img src="<?php bloginfo('template_directory'); ?>/assets/img/default.jpg">
				            <?php endif; ?>
							<h3 class="title">
								<?php the_title(); ?>
							</h3>
						</div>
	            	</a>
	            </div>
	            <?php endwhile; ?>  <?php else : ?>
	            	<div class="no-article">
	            		<h3>Tidak Ada Artikel Tersedia untuk <?php echo single_cat_title(); ?></h3>
	            	</div>
	        	<?php endif; ?>
				<?php wp_reset_query(); ?>
   			</div>
   			<?php wpbeginner_numeric_posts_nav(); ?>
    	</div>
    
    <div class="content news-mobile" style="display:none">
	   		<!-- BERITA TERKINI -->
	   		<div class="box-news berita-terkini">
	   			<h2 class="title-home">
					<?php printf( __( '<span>%s</span>', 'themater' ), single_cat_title( '', false ) ); ?> 
				</h2>
	
				
				<div class="isi-news">
					<?php if (have_posts()) : ?><?php $no = 0; while (have_posts()) : the_post(); ?>
					<?php $no++; ?>
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
							</a>
						</li>
					<?php endwhile; ?>  <?php else : ?>     <?php endif; ?>
					<?php wp_reset_query(); ?>

				</div>

				<?php wpbeginner_numeric_posts_nav(); ?>

	   		</div><!-- end BERITA TERKINI -->

    <div class="content ads category-two">


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
	


</div>

<?php get_footer(); ?>