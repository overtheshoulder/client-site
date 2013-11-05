<?php get_header(); ?>

<div class="top">
    <h2 class="page-title">The OTS Blog</h2>
</div>

<section class="content">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<h1 class="post-title"><?php the_title(); ?></h1>

			<div class="entry">
			    <p class="date"><?php the_date('F j, Y'); ?></p>
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>
				
				<?php // the_tags( __('Tags: '), ', ', ''); ?>
			
				<?php // posted_on(); ?>

			</div>
			
			<?php edit_post_link(__('Edit this entry'),'','.'); ?>
			
		</article>

	<?php // comments_template(); ?>

	<?php endwhile; endif; ?>

<?php post_navigation(); ?>

</section>

<?php if ( is_active_sidebar( 'sidebar-blog' ) ) : ?>

    <aside id="sidebar-right" class="sidebar sidebar-right right">
	    <?php dynamic_sidebar( 'sidebar-blog' ); ?>
    </aside>

<?php endif; ?>

<?php get_footer(); ?>