<?php get_header(); ?>
	<div class="content ads-mobile mobilepage-one" style="display: none;">
		<div class="container">
			<img src="<?php bloginfo('template_directory'); ?>/assets/img/ads1.png">
		</div>
	</div>
	<div class="content home">

	<!-- content ins 1 -->
    <div class="content-slide left width-100">
   		<div class="container">
   			<?php  $args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'tax_query' => array(
				    array(
				        'taxonomy' => 'category',
				        'field'    => 'slug',
				        'terms'    => 'ftrd'
				    )
				),
			    'showposts' => 5
			);
        	$wp_query = new WP_Query($args); if ($wp_query->have_posts()) : ?>
			    <div class="left">
			        <!-- slide -->
		            <div class="slide">
		                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                    <!-- Wrapper for slides -->
			                <div class="carousel-inner" role="listbox" >
								<?php $no = 1; while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
			                        <div class="item<?php {echo " $no";} ?><?php if ($no == 1){echo " active";} ?>" data-target="#myCarousel">
			                           	<div class="image">
				                            <?php if ( has_post_thumbnail() ) : ?>
									            <?php the_post_thumbnail('large'); ?>
									        <?php else : ?>
									            <img src="<?php bloginfo('template_directory'); ?>/assets/img/default.jpg">
									        <?php endif; ?>
									    	<div class="slider-mask"></div>
									    </div>
			                            <div class="carousel-caption">
			                               	<a href="<?php the_permalink(); ?>">
			                                 	<h2><?php the_title(); ?></h2>
			                                </a>
			                                <?php the_time('l - j F Y', '<span>', '</span>'); ?>
			                            </div>
			                         </div>
			                    <?php $no++; endwhile; ?>
			                </div><!-- end Wrapper for slides -->
							<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								<span><i class="fa fa-angle-left"></i></span>  
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							    <span><i class="fa fa-angle-right"></i></span>
							</a> 
			            </div>
			        </div><!-- end slide -->
			    </div>
			<?php endif; wp_reset_query(); ?>

			<?php  $args = array(
				'post_type' => 'post',
				'post_status' => 'publish',
				'tax_query' => array(
				    array(
				        'taxonomy' => 'category',
				        'field'    => 'slug',
				        'terms'    => 'slider-kanan'
				    )
				),
			    'showposts' => 2
			);
        	$wp_query = new WP_Query($args); if ($wp_query->have_posts()) : ?>
		      	<div class="right">
		         	<div class="slide-news">
		         		<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
							<li>
								<div class="img">
									<?php if ( has_post_thumbnail() ) : ?>
							            <?php the_post_thumbnail('thumbnail'); ?>
							        <?php else : ?>
							            <img src="<?php bloginfo('template_directory'); ?>/assets/img/default.jpg">
							        <?php endif; ?>
							        <div class="slider-mask"></div>
								</div>
								<div class="title-time">
									<h3 class="title">
										<a href="<?php the_permalink(); ?>">
											<?php the_title(); ?>
										</a>
									</h3>
								</div>
							</li>
						<?php endwhile; ?>
		         	</div>
		        </div>
	        <?php endif; wp_reset_query(); ?>
   		</div>
    </div><!-- endcontent ins 1 -->

    <div class="container">
    	<div class="content ads homepage-one">
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

		<?php  $args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
		    'showposts' => 8
		);
	    $wp_query = new WP_Query($args); if ($wp_query->have_posts()) : ?>
 			<div class="content home-new">
				<h2 class="title-home">Berita Terbaru</h2>
				<div class="swiper-container"></div>
			 	<div class="content news-swiper swiper-wrapper">
					<?php while ($wp_query->have_posts()) : $wp_query->the_post();  ?>
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
							<div class="baca-selengkapnya">
								<a href="http://inapex.co.id/category/ftrd/"><h3>Berita Terbaru Lainnya</h3></a>
							</div>
						</div>
				    <?php endwhile; ?>
				</div>
			</div> 
		<?php endif; wp_reset_query(); ?>

		<div class="content home-ins">
			<div class="home-ins-left left row3 margin3">
				<h2 class="title-home">Isu Properti</h2>
				<div class="content home-ins-list">
					<?php  $args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'tax_query' => array(
						    array(
							    'taxonomy' => 'category',
							    'field'    => 'slug',
							    'terms'    => 'i-prpr'
							)
						),
					    'showposts' => 6
					);
			       	$wp_query = new WP_Query($args); if ($wp_query->have_posts()) :
			       		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
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
						<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
			<div class="home-ins-middle left row3 margin3">
				<h2 class="title-home">Politik</h2>
				<div class="content home-ins-list">
					<?php  $args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'tax_query' => array(
						    array(
							    'taxonomy' => 'category',
							    'field'    => 'slug',
							    'terms'    => 'politik'
							)
						),
					    'showposts' => 6
					);
			       	$wp_query = new WP_Query($args); if ($wp_query->have_posts()) :
			       		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
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
						<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
			<div class="home-ins-ads left row3">
				<li>
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/ads4.gif">
				</li>
				<li>
					<img src="<?php bloginfo('template_directory'); ?>/assets/img/ads5.jpg">
				</li>
			</div>
		</div>
		<div class="content ads homepage-two">
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
		<div class="content home-ins">
			<div class="home-ins-left left row3 margin3">
				<h2 class="title-home">Figur</h2>
				<div class="content home-ins-list">
					<?php  $args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'tax_query' => array(
						    array(
							    'taxonomy' => 'category',
							    'field'    => 'slug',
							    'terms'    => 'fgr'
							)
						),
					    'showposts' => 5
					);
			       	$wp_query = new WP_Query($args); if ($wp_query->have_posts()) :
			       		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
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
						<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
			<div class="home-ins-middle left row3 margin3">
				<h2 class="title-home">Inspirasi Design</h2>
				<div class="content home-ins-list">
					<?php  $args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'tax_query' => array(
						    array(
							    'taxonomy' => 'category',
							    'field'    => 'slug',
							    'terms'    => 'inspr-dsn'
							)
						),
					    'showposts' => 5
					);
			       	$wp_query = new WP_Query($args); if ($wp_query->have_posts()) :
			       		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
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
						<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div>

			</div>
			<div class="home-ins-right left row3">
				<h2 class="title-home">Lifestyle</h2>
				<div class="content home-ins-list">
					<?php  $args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'tax_query' => array(
						    array(
							    'taxonomy' => 'category',
							    'field'    => 'slug',
							    'terms'    => 'lf-style'
							)
						),
					    'showposts' => 5
					);
			       	$wp_query = new WP_Query($args); if ($wp_query->have_posts()) :
			       		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
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
						<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
				</div>
			</div>
		</div>
		<div class="content news-mobile" style="display:none">
	   		<!-- BERITA TERKINI -->
	   		<div class="box-news berita-terkini">
	   			<h2 class="title-home">
					Semua Berita
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
						              <img src="<?php bloginfo('template_directory'); ?>/img/default.jpg">
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
	   	</div>
    </div>
</div>
<?php get_footer(); ?>
