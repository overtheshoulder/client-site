<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section class="content">
			
			<h1 class="post-title"><?php the_title(); ?></h1>

			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>

			</div>
			
			<?php edit_post_link(__('Edit this entry'),'','.'); ?>
			
		</section>

	<?php endwhile; endif; ?>

<?php post_navigation(); ?>
	
<?php if ( is_active_sidebar( 'sidebar-jobs' ) ) : ?>
    <aside id="sidebar-right" class="sidebar sidebar-right right">
	<?php dynamic_sidebar( 'sidebar-jobs' ); ?>
    </aside>
<?php endif; ?>

<?php get_footer(); ?>