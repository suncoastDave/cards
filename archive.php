<?php
    /*
    Template Name: page-archive
    */

get_header();

?>

<div class="row">
<div class="col-5">
<h1><?php the_archive_title(); ?></h1>
<h2><?php the_archive_description(); ?></h2>
<p></p>
<br>
<?php
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();
    ?>

     <div class="archive-post-item">
       <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
       <div class="meta-box">
         <p>Posted by: <strong><?php the_author_posts_link() ?></strong> on <?php the_time('M d Y') ?> in category <strong><?php echo get_the_category_list('and ') ?></strong></p>
       </div>
       <div class="generic-content">
         <?php the_excerpt( ); ?>
         <p><a class="btn" href="<?php the_permalink( ) ?>"><u>Continue Reading</u> <i class="fas fa-long-arrow-alt-right"></i></a></p>
       </div>
     </div>


    <?php
	}
  ?>
</div>


</div>

<?php
} else {

	// If no content, include the "No posts found" template.

}

get_footer();
