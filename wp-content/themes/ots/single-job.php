<?php get_header(); ?>

		<section class="content">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


			
			<h1 class="post-title"><?php the_title(); ?></h1>

			<div class="entry">
				
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => __('Pages: '), 'next_or_number' => 'number')); ?>

			</div>
			
			<?php edit_post_link(__('Edit this entry'),'','.'); ?>
			

	<?php endwhile; endif; ?>

    <?php post_navigation(); ?>

		</section>
	
<?php if ( is_active_sidebar( 'sidebar-jobs' ) ) : ?>

    <aside id="sidebar-right" class="sidebar sidebar-right right">
	    <?php dynamic_sidebar( 'sidebar-jobs' ); ?>
	    <div class="widget">
	        <h3 class="widget-title">Jop Openings</h3>
	        <ul>
            <?php
        	    $args = array(
        			'post_type' => 'job'
        		);
        		$jobs = new WP_Query( $args );
        		if( $jobs->have_posts() ) {
        			while( $jobs->have_posts() ) {
        				$jobs->the_post();
        				$permalink = get_permalink( $id );
        				?>
        					<li><a href="<?php echo $permalink; ?>"><?php the_title() ?></a></li>
        				<?php
        			}
        		}
        		else {
        			echo '<li>'.'There are no job openings at this time.'.'</li>';
        		}
            ?>
	        </ul>
    </aside>

<?php endif; ?>

<?php get_footer(); ?>