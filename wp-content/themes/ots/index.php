<?php get_header(); ?>

<div class="top">
    <h2 class="page-title">The OTS Blog</h2>
</div>

<section class="content">

    <div class="post-list cf">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article class="post cf">

            <div class="date"><?php the_date('M j, Y'); ?></div>
			<h3 class="title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>

		</article>

	<?php endwhile; ?>
    </div>

	<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>

</section>

<?php if ( is_active_sidebar( 'sidebar-blog' ) ) : ?>

<aside id="sidebar-right" class="sidebar sidebar-right right">
    <?php dynamic_sidebar( 'sidebar-blog' ); ?>
</aside>

<?php endif; ?>

<?php get_footer(); ?>
