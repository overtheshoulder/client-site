<?php get_header(); ?>

<div class="top cf">
    <h2 class="page-title">Jobs Openings</h2>
    <a href="/jobs/" class="view-all">View all Jobs ></a>
</div>

<section class="content">
    
    <div class="job-list">
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
    				<div class="job-item cf">
    				    <h3><a href="<?php echo $permalink; ?>"><?php the_title() ?></a></h3>
    				    <div class="view-link"><a href="<?php echo $permalink; ?>">View Job Details ></a></div>
    				</div>
    			<?php
    		}
    	}
    	else {
    		echo 'There are no job openings at this time.';
    	}
    
    ?>
    </div>

</section>

<?php // get_sidebar(); ?>

<?php get_footer(); ?>
