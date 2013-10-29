<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="content">
			
			<h1 class="entry-title"><?php the_title(); ?></h1>

			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>

			</div>
			
			<?php edit_post_link(__('Edit this entry'),'','.'); ?>
			
		</section>

	<?php endwhile; endif; ?>

<?php post_navigation(); ?>
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>