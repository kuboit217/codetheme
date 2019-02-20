<div class="noibat">
<h2 class="title-news">Bài viết nổi bật</h2>
<div class="content-nb">
	<?php 
	$args = array(
		'post_status' => 'publish', // Chỉ lấy những bài viết được publish
		'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
		'showposts' => 1, // số lượng bài viết
		'cat' => 9, // lấy bài viết trong chuyên mục có id là 1
	);
	?>
	<?php $getposts = new WP_query($args); ?>
	<?php global $wp_query; $wp_query->in_the_loop = true; ?>
	<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
		<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'full', array( 'class' =>'thumnail') ); ?></a>
		<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		<div class="meta">
			<span>Ngày đăng: <?php the_date(); ?></span>
			<span>Lượt xem: 2344 Lượt</span>
		</div>
		<p><?php the_excerpt(); ?></p>
	<?php endwhile; wp_reset_postdata(); ?>

	
</div>
<div class="list-nb">
	<div class="row">
			<?php 
			$args = array(
				'post_status' => 'publish', // Chỉ lấy những bài viết được publish
				'post_type' => 'post', // Lấy những bài viết thuộc post, nếu lấy những bài trong 'trang' thì để là page 
				'showposts' => 3, // số lượng bài viết
				'cat' => 9, // lấy bài viết trong chuyên mục có id là 1
				'offset' => 1, // bỏ đi bài viết đầu tiên			
			);
			?>
			<?php $getposts = new WP_query($args); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<div class="col-xs-4 col-sm-4 col-md-4 style-box">
				<div class="list-post">
					<a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail( $post_id, 'medium', array( 'class' =>'thumnail') ); ?></a>
					<h4>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</h4>
				</div>
				</div>
			<?php endwhile; wp_reset_postdata(); ?>
		
	</div>
</div>
</div>