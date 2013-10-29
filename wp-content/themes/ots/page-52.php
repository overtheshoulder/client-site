<?php get_header(); ?>

<section class="content">

    <h1>Jobs</h1>
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
					<div class="job-item">
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

</section>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
