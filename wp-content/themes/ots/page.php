<?php get_header(); ?>

<?php get_sidebar(); ?>

<section class="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="top">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="entry">
				<?php the_content(); ?>
                <?php edit_post_link(__('Edit this entry.'), '<p>', '</p>'); ?>
			</div>

		</article>
		
		<?php endwhile; endif; ?>

</section>

<?php get_footer(); ?>
