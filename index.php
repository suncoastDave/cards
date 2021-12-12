<?php
    /*
    Template Name: Index.php
    */

get_header();

?>
<div class=" blog-home">
<aside class="col-2 blog-l">
<h1>Blog</h1>
<h2>About Us</h2>
<p>is a drug coupon service that helps consumers save money off the retail price at pharmacies when their insurance does not cover their drug. Stanton McMaster, LLC is the parent company to Prescription.cards and its forerunner, AxiaRx.com which began life in 2011 and launched in January of 2012. Stanton Health is a Veteran-Owned Business (VOB) with headquarters in Bradenton on Florida’s Gulf Coast. Learn how we got started and how we've raised over $60,000 to date for animal welfare organizations. This prescription discount card may be used at 65,000 pharmacies in the U.S., Puerto Rico, U.S Virgin Islands and Guam.</p>
<br>
<h3>Latest Posts</h3>
<?php
	// Load posts loop.
	while ( have_posts() ) {
		the_post();
    ?>
    <h4 class="blog-links"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h4>
    <hr>
    <?php } ?>
</aside>
<div class="col-4 blog-r">
<?php
if ( have_posts() ) {

	// Load posts loop.
	while ( have_posts() ) {
		the_post();
    ?>

     <div class="post-item">
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
<div class="col-1">
  <h3>Categories</h3>
 <?php // Load posts loop.
	while ( have_posts() ) {
		the_post();
    ?>
  <p><?php echo get_the_category_list(',') ?></p>
  <hr>
  <?php } ?>
</div>

</div>

<?php
} else {

	// If no content, include the "No posts found" template.

}

get_footer();
