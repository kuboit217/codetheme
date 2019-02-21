<!--include Header vào index-->
<?php get_header(); ?>
<div id="content">
<div class="container">
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-9">
		<!--include nổi bật vào index-->
		<?php get_template_part( 'noibat'); ?>
		<div class="post-news">
			<h2 class="title-news">Bài viết mới nhất</h2>
			<div class="content-news">
				<!-- Get post mặt định -->
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
					<div class="news-detail">
					<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' =>'thumnail') ); ?></a>
					<div class="info-post">
						<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						<div class="meta">
							<span>Ngày đăng: <?php echo get_the_date('d-m-y'); ?></span>
						</div>
						<p><?php the_excerpt(); ?></p>
					</div>
					<div class="clear"></div>
				</div>
				<?php endwhile; else : ?>
				<p>Không có</p>
				<?php endif; ?>
				<!-- Get post mặt định -->
				
			</div>
			<div class="quatrang">
				<?php if(paginate_links()!='') {?>
				<div class="quatrang">
					<?php
					global $wp_query;
					$big = 999999999;
					echo paginate_links( array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'prev_text'    => __('«'),
						'next_text'    => __('»'),
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages
						) );
				    ?>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-3">
		<!--Include sidebar vào index-->
		<?php get_sidebar(); ?>
	</div>
</div>
</div>
</div>
<!--Include footer vào index-->
<?php get_footer() ?>