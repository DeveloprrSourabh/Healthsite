<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package healthsite2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<div class="row">
<div class=" col-4 m-4 " id="cards" style="width: 18rem;">
<?php echo get_the_post_thumbnail(); ?>
  <div class="card-body">
    <h5 class="card-title"><?php echo the_title(); ?></h5>
    <p class="card-text"><?php echo the_content(); ?></p>
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</div>	
</div>

</article><!-- #post-<?php the_ID(); ?> -->
