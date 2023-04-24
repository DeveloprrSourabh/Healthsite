<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package healthsite2
 */
get_header();

?>
<div class=" col-lg-4 col-md-6 col-sm-12 m-4 " id="cards" style="width: 18rem;">
<a id="blog-post" href="<?php the_permalink() ?>">
<?php echo get_the_post_thumbnail(); ?>
  <div class="card-body">
    <h5 class="card-title"><?php echo the_title(); ?></h5>
    <p class="card-text"><?php echo the_content(); ?></p>
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
  </a>
</div>
	