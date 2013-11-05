<?php get_header(); ?>

<div class="top cf">
    <h2 class="page-title">The OTS Blog</h2>
    <a href="/blog/" class="view-all">View all Articles ></a>
</div>

<section class="content">

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h3 class="archive-title"> <?php _e('Category:','html5reset'); ?> <?php single_cat_title(); ?>  </h3>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h3 class="archive-title"><?php _e('Posts Tagged','html5reset'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h3>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h3 class="archive-title"><?php _e('Archive for','html5reset'); ?> <?php the_time('F jS, Y'); ?></h3>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h3 class="archive-title"><?php _e('Archive for','html5reset'); ?> <?php the_time('F, Y'); ?></h3>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h3 class="archive-title"><?php _e('Archive for','html5reset'); ?> <?php the_time('Y'); ?></h3>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h3 class="archive-title"><?php _e('Author Archive','html5reset'); ?></h3>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h3 class="archive-title"><?php _e('Blog Archives','html5reset'); ?></h3>
			
			<?php } ?>

			<?php post_navigation(); ?>
            
            <div class="post-list cf">
			<?php while (have_posts()) : the_post(); ?>
			
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