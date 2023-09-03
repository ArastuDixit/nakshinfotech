<?php
get_header();
?>
<div class="wrapper">
<section id="main" class="site-main" style="padding-top: 0px;padding-bottom: 20px;">
 <div class="container">
    <div class="row ratio_landscape">
       <div class="col">
          <!--<h1> page.php</h1>-->
          <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
             <div class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
             </div>
             <!-- .entry-header -->
             <div class="entry-content">
                <?php the_content(); ?>
             </div>
             <!-- .entry-content -->
          </article>
          <!-- #post-<?php the_ID(); ?> -->
          <?php endwhile; ?>
       </div>
    </div>
 </div>
</section>
<!-- #main -->
</div>
<?php
 get_footer();
 ?>