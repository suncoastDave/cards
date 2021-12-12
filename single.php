<?php
    /*
Template Name: single.php
*/
get_header();
?>
<div class="row">
<div class="col-6">
<?php
while(have_posts()) {
    the_post(); ?>



<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
<?php
}
?>
<p class="btn">
    <a href="<?php echo site_url('/blog')?>">Blog Home</a></p>
   </div>
    </div>
<?php
get_footer();
?>