        </div>
    </section>

	<footer class="footer cf">
		<div class="wrapper cf">
			<div class="col col-1">
                <h4><a href="/jobs/">Job Postings</a></h4>
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
            </div>
			<div class="col col-2">
                <h4><a href="/blog/">From Our Blog</a></h4>
			    <ul>
			        <?php
			        $args = array( 'numberposts' => '2' );
                	$recent_posts = wp_get_recent_posts( $args );
                	foreach( $recent_posts as $recent ){
                		echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
                	}
                	?>
			    </ul>
			</div>
			<div class="col col-3">
			    <h4>Are you a participant?</h4>
			    <p><a href="">Right this way</a></p>
			</div>
			<div class="col col-4">
				<p>&copy;2013 Over the Shoulder, Inc.</p>
			    <p><a href="http://eggstrategy.com/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/logo-eggstrategy.png" alt="" /></a></p>
			</div>
		</div>
	</footer>
<!-- 	<p>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></p> -->

	<?php wp_footer(); ?>

<!-- jQuery is called via the WordPress-friendly way via functions.php -->
<script src="<?php bloginfo('template_directory'); ?>/js/video.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/scripts.js"></script>
<!-- <script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script> -->
	
</body>
</html>