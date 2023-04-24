<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package healthsite2
 */

get_header();
?>

	<main id="primary" class="blog_post ml-5 site-main" >

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<div class="row">
					<div class="col-8">
						<div class="row">
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				?>

			 <div class=" col-lg-3 col-md-6 col-sm-12 mx-2 my-3 mw-100" id="cards" style="width: 18rem;">
			 <a class="text-white" href="<?php the_permalink(); ?>">
<?php echo get_the_post_thumbnail(); ?>
  <div class="card-body">
    <h5 class="card-title"><?php echo the_title(); ?></h5>
    <p class="card-text"><?php echo the_content(); ?></p>
    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
  </div>
</a>
</div>
	<?php

			endwhile;
?></div></div>
<div class="col-3">
<?php get_sidebar(); ?>
</div>
</div></div><?php 


		endif;
		?>

	</main><!-- #main -->

<?php

get_footer();
