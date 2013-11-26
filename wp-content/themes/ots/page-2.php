<?php get_header(); ?>

<?php get_sidebar(); ?>

<section class="content">

	<?php
		// Smartphone Ethnography
		$post_2 = get_post(2); 
		$content_2 = apply_filters('the_content', $post_2->post_content); 
	?>
	<article class="post post-2 show">
		<div class="top">
		<iframe width="853" height="480" src="//www.youtube.com/embed/lL3oY993_kc?modestbranding=1&autoplay=1&showinfo=0&controls=0&rel=0" frameborder="0" allowfullscreen></iframe>
<!-- 		<iframe width="853" height="480" src="//www.youtube.com/embed/dgAGudHcZr4?modestbranding=1&showinfo=0&controls=0&rel=0" frameborder="0" allowfullscreen></iframe> -->
<!--
	        <video id="home_video" class="video-js vjs-default-skin" controls width="640" height="360" poster="images/video.png" preload="auto" data-setup="{}">
	          <source type="video/mp4" src="http://f41dc80ccbaca57d6867-4cc568d425a2f7cbbc4f3c192ab0c020.r72.cf2.rackcdn.com/ots.mp4">
	          <source type="video/ogg" src="http://f41dc80ccbaca57d6867-4cc568d425a2f7cbbc4f3c192ab0c020.r72.cf2.rackcdn.com/ots.ogv">
	        </video>
-->
		</div>
		<div class="entry">
			<?php echo $content_2; ?>
		</div>
	</article>

	<?php
		$args = array(
			'post_type' => 'page',
			'post__in' => array( 6, 8, 10, 12, 14, 16 ),
			'orderby' => 'ID',
			'order' => 'ASC'
		);			
		$loop = new WP_Query($args);
		$count = 0;
	?>
	
	<?php while ($loop->have_posts()) : $loop->the_post(); ?>
		<?php $row = $count % 2 == 0 ? 'even' : 'odd'; ?>
		<article class="post post-<?php the_ID(); ?> cf">
			<div class="top">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="entry">
				<?php the_content(); ?>
			</div>
		</article>
		<?php $count++; ?>
	
	<?php endwhile; ?>
		
</section>

<?php get_footer(); ?>
