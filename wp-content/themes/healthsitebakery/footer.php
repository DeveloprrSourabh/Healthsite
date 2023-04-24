<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package healthsite2
 */

?>


<!--common all content ends--> 
<!--footer starts-->
   <!-- Site footer -->
  
    <!-- footer -->
    <div id="mainfooter">

        <!-- 1/3 -->
        <div class="four columns">
            <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-left-widget') ) ?>
        </div>
        <!-- /End 1/3 -->
        <!-- 2/3 -->
        <div class="four columns">
            <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-center-widget') ) ?>
        </div>
        <!-- /End 2/3 -->
        <!-- 3/3 -->
        <div class="four columns">
            <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-right-widget') ) ?>
        </div>
        <div class="four columns">
            <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('header_widget') ) ?>
        </div>
        <!-- /End 3/3 -->

    </div>
    <!-- /End Footer -->

<!--common js--> 
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.6.0.min.js"></script> 
<script src="<?php echo get_template_directory_uri() ?>/js/splide.min.js"></script> 
<script src="<?php echo get_template_directory_uri() ?>/js/lazyload.min.js"></script> 
<script src="<?php echo get_template_directory_uri() ?>/js/custom.js"></script>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
