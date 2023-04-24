<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package healthsite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <link rel="preload" href="https://static.india.com/wp-content/themes/icom/fonts/Poppins-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
      <link rel="preload" href="https://static.india.com/wp-content/themes/icom/fonts/Poppins-latin-Bold.woff2" as="font" type="font/woff2" crossorigin>
      <!--styesheet starts-->
  
	  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/splide.min.css"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><i class="fa-regular fa-bars"></i></a>

	<header id="masthead" class="site-header">
		<div class="row">
			<div class="col-lg-3 col-sm-6">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$healthsite_description = get_bloginfo( 'description', 'display' );
			if ( $healthsite_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $healthsite_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		</div>
		<div class="col-lg-7 col-md-12">
               <nav id="site-navigation" class="main-navigation">
                  <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="fa-solid fa-bars"></i></button>
                  <?php
                     wp_nav_menu(
                         array(
                         'theme_location' => 'menu-1',
                         'menu_id'        => 'primary-menu',
                         )
                     );
                     ?>
               </nav>
               <!-- #site-navigation -->
            </div>
		<div class="head_btn col-lg-2 col-md-12 col-sm-6">
               <a id ="header-btn"  href="">
               <?php
                  $my_theme_settings = get_option('my_theme_settings');
                  echo $my_theme_settings['social_button'];?>
               </a>
            </div>
		</div>
	</header><!-- #masthead -->

	<!-- Program Overview Tabs -->
	<script type="text/javascript">
         jQuery(document).ready(function(){
         jQuery("#Overview_Tab p").click(function(){
		   jQuery('.Overview-Tab').removeClass('active');
           jQuery('#Overview_Tab').addClass('active');
		   jQuery('.Overview-rows').hide();
           jQuery('#Program-Overview').show();
          });
         
		  jQuery("#Webstory-Tab p").click(function(){
		   jQuery('.Overview-Tab').removeClass('active');
           jQuery('#Webstory-Tab').addClass('active');
		   jQuery('.Overview-rows').hide();
           jQuery('#Webstory-Row').show();
          });
         
		  
		  jQuery("#Photo-Tab p").click(function(){
		   jQuery('.Overview-Tab').removeClass('active');
           jQuery('#Photo-Tab').addClass('active');
		   jQuery('.Overview-rows').hide();
           jQuery('#Photo-Row').show();
          });

		  jQuery("#Video-Tab p").click(function(){
		   jQuery('.Overview-Tab').removeClass('active');
           jQuery('#Video-Tab').addClass('active');
		   jQuery('.Overview-rows').hide();
           jQuery('#Video-Row').show();
          });
		  
         });
      </script>


<script type="text/javascript">
         jQuery(document).ready(function(){
         jQuery(".filter-button-group ul h4 li.diagnostic").click(function(){
           jQuery('.all-icons figure.repeat-box').hide();jQuery('.diagnostic').show();
          });
         
          jQuery(".filter-button-group ul h4 li.simple").click(function(){
           jQuery('.all-icons figure.repeat-box ').hide();jQuery('.simple').show();
          });
          jQuery(".filter-button-group ul h4 li.active").click(function(){
           jQuery('.all-icons figure.repeat-box').show();
          });
         });
      </script>

<!-- Schedule Page -->
<script type="text/javascript">
         jQuery(document).ready(function(){
         jQuery("#First-Season").click(function(){
		   jQuery('.tablinks').removeClass('active')  
		 jQuery('#First-Season').addClass('active')  ;
		 jQuery('.tabcontent').hide();
		   jQuery('#Session1').show();

          });
         
		  jQuery("#Second-Season").click(function(){
		   jQuery('.tablinks').removeClass('active')  ;
		 jQuery('#Second-Season').addClass('active')  ;
		 jQuery('.tabcontent').hide();
		   jQuery('#Session2').show();

          });


		  jQuery("#Third-Season").click(function(){
		   jQuery('.tablinks').removeClass('active') ; 
		 jQuery('#Third-Season').addClass('active')  ;
		 jQuery('.tabcontent').hide();
		   jQuery('#Session3').show();

          });

         });
      </script>


<!-- Award Category Page -->

<script type="text/javascript">
         jQuery(document).ready(function(){
         jQuery("#Award-Tab1").click(function(){
		   jQuery('.tablink').removeClass('active');
		 jQuery('#Award-Tab1').addClass('active');
     jQuery('.Award-vote').show();
          });
         
          jQuery("#Award-Tab2").click(function(){
		   jQuery('.tablink').removeClass('active');
		 jQuery('#Award-Tab2').addClass('active');
     jQuery('.Award-vote').hide();
     jQuery('#Cat-Tab2').show();
          });


          jQuery("#Award-Tab3").click(function(){
		   jQuery('.tablink').removeClass('active');
		 jQuery('#Award-Tab3').addClass('active');
     jQuery('.Award-vote').hide();
     jQuery('#Cat-Tab3').show();
          });

         });
      </script>