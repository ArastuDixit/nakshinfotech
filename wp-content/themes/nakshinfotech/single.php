<?php
get_header();
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="post-entry">
                    <h3><?php the_title(); ?></h3>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <div>
        <?php
          /* Start the Loop */
            while ( have_posts() ) :
                the_post();
    	        get_template_part( 'templates' );

	        // If comments are open or there is at least one comment, load up the comment template.
	        if ( comments_open() || get_comments_number() ) {
		    comments_template();
	        }
            endwhile; // End of the loop.
            ?>
        </div>
        <!-- <div class="col-md-4">
            Sidebar
        </div> -->
    </div>
</div>
<?php get_footer(); ?>