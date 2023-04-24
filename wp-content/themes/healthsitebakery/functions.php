<?php
/**
 * healthsitebakery functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package healthsitebakery
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function healthsitebakery_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on healthsitebakery, use a find and replace
		* to change 'healthsitebakery' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'healthsitebakery', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'healthsitebakery' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'healthsitebakery_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'healthsitebakery_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function healthsitebakery_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'healthsitebakery_content_width', 640 );
}
add_action( 'after_setup_theme', 'healthsitebakery_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function healthsitebakery_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'healthsitebakery' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'healthsitebakery' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'healthsitebakery_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function healthsitebakery_scripts() {
	wp_enqueue_style( 'healthsitebakery-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'healthsitebakery-style', 'rtl', 'replace' );

	wp_enqueue_script( 'healthsitebakery-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'healthsitebakery_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}




   
   
      
      // ===============Webstory Custom Post================ //
      
      function web_story()
      {
      // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x('Webstory', 'Post Type General Name', 'twentytwentyone'),
          'singular_name'       => _x('Webstory', 'Post Type Singular Name', 'twentytwentyone'),
          'menu_name'           => __('Webstory', 'twentytwentyone'),
          'parent_item_colon'   => __('Parent Webstory', 'twentytwentyone'),
          'all_items'           => __('All Webstory', 'twentytwentyone'),
          'view_item'           => __('View Webstory', 'twentytwentyone'),
          'add_new_item'        => __('Add New Webstory', 'twentytwentyone'),
          'add_new'             => __('Add New', 'twentytwentyone'),
          'edit_item'           => __('Edit Webstory', 'twentytwentyone'),
          'update_item'         => __('Update Webstory', 'twentytwentyone'),
          'search_items'        => __('Search Webstory', 'twentytwentyone'),
          'not_found'           => __('Not Found', 'twentytwentyone'),
          'not_found_in_trash'  => __('Not found in Trash', 'twentytwentyone'),
      );
      
      // Set other options for Custom Post Type
      
      $args = array(
          'label'               => __('Webstory', 'twentytwentyone'),
          'description'         => __('Webstory news and reviews', 'twentytwentyone'),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
          // You can associate this CPT with a taxonomy or custom taxonomy.
          'taxonomies'          => array( 'genres' ),
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */
          'hierarchical'        => false,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 5,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'post',
          'show_in_rest' => true,
      
      );
      
      // Registering your Custom Post Type
      register_post_type('webstory', $args);
      }
      add_action('init', 'web_story', 0);
      
      // ===============Webstory Custom Post================ //
      
      
      
      // ===============Webstory function Start================ //
      
      
      function web_storys()
      {
      ob_start();
      
      $args = array( 'post_type' => 'webstory', 'posts_per_page' => -1, 'order' => 'ASC');
      
      $loop = new WP_Query($args);
      
      ?>
	  <div class="tab-cnt webstory" id="Webstory">
          <div class="black-bg">
            <div id="Webstory-splide" class="splide">
              <div class="splide__track">
                <ul class="splide__list">
               <?php
                  while ($loop->have_posts()) : $loop->the_post();
                  
                      ?>
			
                 
                
               <li class="splide__slide">
                  <figure class="repeat-box">
                     <a href="<?php echo get_the_permalink(); ?>" aria-label="thehealthsite.com news">
                        <div class="photo">
                           <div class="lazy-image"><?php echo the_post_thumbnail('full'); ?></div>
                        </div>
                        <figcaption class="text">
                           <h3><?php echo the_title(); ?></h3>
                        </figcaption>
                     </a>
                  </figure>
               </li>
               <?php endwhile; ?>
			   </ul>
              </div>
            </div>
          </div>
        </div>
<?php wp_reset_query();
   return ob_get_clean();
   }
   add_shortcode('webstroys', 'web_storys');
   
   
   // ===============Webstory function End================ //
   



   
   
   
   
   // ===============Gallery Photo Custom Post================ //
   
   function photo_gallery()
   {
   // Set UI labels for Custom Post Type
   $labels = array(
       'name'                => _x('Photo', 'Post Type General Name', 'twentytwentyone'),
       'singular_name'       => _x('Photo', 'Post Type Singular Name', 'twentytwentyone'),
       'menu_name'           => __('Photo', 'twentytwentyone'),
       'parent_item_colon'   => __('Parent Photo', 'twentytwentyone'),
       'all_items'           => __('All Photo', 'twentytwentyone'),
       'view_item'           => __('View Photo', 'twentytwentyone'),
       'add_new_item'        => __('Add New Photo', 'twentytwentyone'),
       'add_new'             => __('Add New', 'twentytwentyone'),
       'edit_item'           => __('Edit Photo', 'twentytwentyone'),
       'update_item'         => __('Update Photo', 'twentytwentyone'),
       'search_items'        => __('Search Photo', 'twentytwentyone'),
       'not_found'           => __('Not Found', 'twentytwentyone'),
       'not_found_in_trash'  => __('Not found in Trash', 'twentytwentyone'),
   );
   
   // Set other options for Custom Post Type
   
   $args = array(
       'label'               => __('Photo', 'twentytwentyone'),
       'description'         => __('Photo news and reviews', 'twentytwentyone'),
       'labels'              => $labels,
       // Features this CPT supports in Post Editor
       'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
       // You can associate this CPT with a taxonomy or custom taxonomy.
       'taxonomies'          => array( 'genres' ),
       /* A hierarchical CPT is like Pages and can have
       * Parent and child items. A non-hierarchical CPT
       * is like Posts.
       */
       'hierarchical'        => false,
       'public'              => true,
       'show_ui'             => true,
       'show_in_menu'        => true,
       'show_in_nav_menus'   => true,
       'show_in_admin_bar'   => true,
       'menu_position'       => 5,
       'can_export'          => true,
       'has_archive'         => true,
       'exclude_from_search' => false,
       'publicly_queryable'  => true,
       'capability_type'     => 'post',
       'show_in_rest' => true,
   
   );
   
   // Registering your Custom Post Type
   register_post_type('photo', $args);
   }
   add_action('init', 'photo_gallery', 0);
   
   // ===============Gallery Photo Custom Post================ //
   
   
   // ===============Gallery Photo Start================ //
   
   function gallery_photos()
   {
   ob_start();
   
   $args = array( 'post_type' => 'photo', 'posts_per_page' => -1, 'order' => 'ASC');
   
   $loop = new WP_Query($args);
   
   ?>
<div class="tab-cnt photo-gallery" id="Photo-Gallery">
   <div class="black-bg">
      <div id="Photo-splide" class="splide">
         <div class="splide__track">
            <ul class=" splide__list ">
               <?php
                  while ($loop->have_posts()) : $loop->the_post();
                  
                      ?>
               <li class="splide__slide">
                  <figure class="repeat-box">
                     <a href="<?php echo get_the_permalink(); ?>" aria-label="thehealthsite.com news">
                        <div class="photo">
                           <div class="lazy-image">
                              <?php the_post_thumbnail('full'); ?>
                            
                           </div>
                        </div>
                        <figcaption class="bg-set text">
                           <h3><?php echo the_title(); ?></h3>
                        </figcaption>
                     </a>
                  </figure>
               </li>
               <?php endwhile; ?>
            </ul>
         </div>
      </div>
   </div>
</div>
<?php wp_reset_query();
   return ob_get_clean();
   }
   add_shortcode('gallery_photo', 'gallery_photos');
   
   
   // ===============Gallery Photo End================ //
   


    
   
   
   
   // ===============Gallery Video Custom Post================ //
   
   function gallery_video()
   {
   // Set UI labels for Custom Post Type
   $labels = array(
       'name'                => _x('Video', 'Post Type General Name', 'twentytwentyone'),
       'singular_name'       => _x('Video', 'Post Type Singular Name', 'twentytwentyone'),
       'menu_name'           => __('Video', 'twentytwentyone'),
       'parent_item_colon'   => __('Parent Video', 'twentytwentyone'),
       'all_items'           => __('All Video', 'twentytwentyone'),
       'view_item'           => __('View Video', 'twentytwentyone'),
       'add_new_item'        => __('Add New Video', 'twentytwentyone'),
       'add_new'             => __('Add New', 'twentytwentyone'),
       'edit_item'           => __('Edit Video', 'twentytwentyone'),
       'update_item'         => __('Update Video', 'twentytwentyone'),
       'search_items'        => __('Search Video', 'twentytwentyone'),
       'not_found'           => __('Not Found', 'twentytwentyone'),
       'not_found_in_trash'  => __('Not found in Trash', 'twentytwentyone'),
   );
   
   // Set other options for Custom Post Type
   
   $args = array(
       'label'               => __('Video', 'twentytwentyone'),
       'description'         => __('Video news and reviews', 'twentytwentyone'),
       'labels'              => $labels,
       // Features this CPT supports in Post Editor
       'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
         // You can associate this CPT with a taxonomy or custom taxonomy.
       'taxonomies'          => array( 'genres' ),
       /* A hierarchical CPT is like Pages and can have
       * Parent and child items. A non-hierarchical CPT
       * is like Posts.
       */
       'hierarchical'        => false,
       'public'              => true,
       'show_ui'             => true,
       'show_in_menu'        => true,
       'show_in_nav_menus'   => true,
       'show_in_admin_bar'   => true,
       'menu_position'       => 5,
       'can_export'          => true,
       'has_archive'         => true,
       'exclude_from_search' => false,
       'publicly_queryable'  => true,
       'capability_type'     => 'post',
       'show_in_rest' => true,
   
   );
   
   // Registering your Custom Post Type
   register_post_type('video', $args);
   }
   add_action('init', 'gallery_video', 0);
   
   // ===============Gallery Photo Custom Post================ //
   
   
   
   // ===============Gallery Video Start================ //
   
   function video_gallery()
   {
   ob_start();
   
   $args = array( 'post_type' => 'video', 'posts_per_page' => -1, 'order' => 'ASC');
   
   $loop = new WP_Query($args);
   
   ?>
<!-- <div class="video"> -->
<div class="tab-cnt video-gallery" id="Video-Gallery">
   <div class="black-bg">
      <div class="videos-iframe" id="liframe">
         <iframe class="lazy" loading="lazy" data-src="https://embed.india.com/video-gallery/tricolour-flies-high-over-indian-high-commission-in-london-amid-khalistani-protests-5959903/embed-video/?media_id=Tri_Color_in_UK" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="400px" width="600px" allowfullscreen title="Watch video"></iframe>
      </div>
      <div class="all-videos-thumbs">
         <div id="videos-splide" class="splide">
            <div class="splide__track">
               <ul class="splide__list">
                  <?php
                     while ($loop->have_posts()) : $loop->the_post();
                     
                         ?>
                  <li class="splide__slide">
                     <figure class="repeat-box thumbImg" embedurl="https://embed.india.com/video-gallery/mrunal-thakur-turns-head-in-princess-dress-saif-kareena-returns-from-vacation-with-jeh-5958850/embed-video/?media_id=VIRAL_SPOTTED">
                        <a href="<?php echo get_the_permalink(); ?>">
                           <div class="photo">
                              <div class="lazy-image"><?php echo the_post_thumbnail('full'); ?> </div>
                           </div>
                           <figcaption id="Video-Catption" class="text">
                              <h3><?php echo the_title(); ?></h3>
                           </figcaption>
                        </a>
                     </figure>
                  </li>
                  <?php endwhile; ?>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- </div> -->
<?php wp_reset_query();
   return ob_get_clean();
   }
   add_shortcode('gallery_videos', 'video_gallery');
   
   
   // ===============Gallery Video End================ //
   
   
   
   
   
   
   // ===============Chief Guest Custom Post================ //
   
   function minister_chief()
   {
       // Set UI labels for Custom Post Type
       $labels = array(
           'name'                => _x('Minister', 'Post Type General Name', 'twentytwentyone'),
           'singular_name'       => _x('Minister', 'Post Type Singular Name', 'twentytwentyone'),
           'menu_name'           => __('Minister', 'twentytwentyone'),
           'parent_item_colon'   => __('Parent Minister', 'twentytwentyone'),
           'all_items'           => __('All Minister', 'twentytwentyone'),
           'view_item'           => __('View Minister', 'twentytwentyone'),
           'add_new_item'        => __('Add New Minister', 'twentytwentyone'),
           'add_new'             => __('Add New', 'twentytwentyone'),
           'edit_item'           => __('Edit Minister', 'twentytwentyone'),
           'update_item'         => __('Update Minister', 'twentytwentyone'),
           'search_items'        => __('Search Minister', 'twentytwentyone'),
           'not_found'           => __('Not Found', 'twentytwentyone'),
           'not_found_in_trash'  => __('Not found in Trash', 'twentytwentyone'),
       );
   
       // Set other options for Custom Post Type
   
       $args = array(
           'label'               => __('Minister', 'twentytwentyone'),
           'description'         => __('Minister news and reviews', 'twentytwentyone'),
           'labels'              => $labels,
           // Features this CPT supports in Post Editor
           'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
           // You can associate this CPT with a taxonomy or custom taxonomy.
           'taxonomies'          => array( 'genres' ),
           /* A hierarchical CPT is like Pages and can have
           * Parent and child items. A non-hierarchical CPT
           * is like Posts.
           */
           'hierarchical'        => false,
           'public'              => true,
           'show_ui'             => true,
           'show_in_menu'        => true,
           'show_in_nav_menus'   => true,
           'show_in_admin_bar'   => true,
           'menu_position'       => 5,
           'can_export'          => true,
           'has_archive'         => true,
           'exclude_from_search' => false,
           'publicly_queryable'  => true,
           'capability_type'     => 'post',
           'show_in_rest' => true,
   
       );
   
       // Registering your Custom Post Type
       register_post_type('minister', $args);
   }
   add_action('init', 'minister_chief', 0);
   
   // ===============Chief Guest Custom Post================ //
   
   
   // ===============Chief Guest Start================ //
   
   function minister()
   {
       ob_start();
   
       $args = array( 'post_type' => 'minister', 'posts_per_page' => -1, 'order' => 'ASC');
   
       $loop = new WP_Query($args);
   
       ?>
<section class="chief-guest">
    <div class="container">
      <div class="drak-bg">
        <div class="two-boxes-bg">
          <div id="chief-guest-splide" class="splide">
            <div class="splide__track">
                <ul class="splide__list">
   <?php
      while ($loop->have_posts()) : $loop->the_post();
      
          ?>

<li class="splide__slide">
                    <figure class="repeat-box">
                      <div class="photo">
                        <div class="lazy-image">  <?php the_post_thumbnail('full'); ?></div>
                      </div>
                      <figcaption class="text">
                      <h2><?php echo the_title(); ?></h2>
                      <h3 class="mx"><strong><?php
               echo get_post_meta(get_the_id(),'my-meta-data', true);
                ?> </strong><?php echo the_excerpt(); ?></h3>
                        <?php echo the_content(); ?>
                      </figcaption>
                    </figure>
                  </li>

   <?php endwhile; ?>
   </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php wp_reset_query();
   return ob_get_clean();
   }
   add_shortcode('chief_minister', 'minister');
   
   
   // ===============Chief Guest End================ //
   
   
   // ==========Add custom filed in minister post========= //
   function my_meta_fields(){
      ?>
   <label for="my-meta-field1">name</label>
   <input type="text" name="my-meta-field1" id="my-meta-field1" value="<?php
      echo get_post_meta(get_the_id(),'my-meta-data', true);
       ?>">
   <?php
      }
      
      function add_my_meta_box(){
         add_meta_box('my-meta-box', 'position', 'my_meta_fields', 'minister');
      }
      
      
      
         add_action('add_meta_boxes','add_my_meta_box');
      
      function save_my_meta_data($post_id)
      {
         $name = $_POST['my-meta-field1'];
      
         if (isset($_POST['my-meta-field1'])) {
            if (get_post_meta($post_id, 'my-meta-data', true) != '') {
               update_post_meta($post_id, 'my-meta-data', $name );
            }else{
               add_post_meta($post_id, 'my-meta-data', $name );
            }
         }
      }
      
      
      add_action('save_post', 'save_my_meta_data');
      
      
        
   
   
   // ===============Chain Custom Post================ //
   
   function chain_list()
   {
   // Set UI labels for Custom Post Type
   $labels = array(
       'name'                => _x('Chain', 'Post Type General Name', 'twentytwentyone'),
       'singular_name'       => _x('Chain', 'Post Type Singular Name', 'twentytwentyone'),
       'menu_name'           => __('Chain', 'twentytwentyone'),
       'parent_item_colon'   => __('Parent Chain', 'twentytwentyone'),
       'all_items'           => __('All Chain', 'twentytwentyone'),
       'view_item'           => __('View Chain', 'twentytwentyone'),
       'add_new_item'        => __('Add New Chain', 'twentytwentyone'),
       'add_new'             => __('Add New', 'twentytwentyone'),
       'edit_item'           => __('Edit Chain', 'twentytwentyone'),
       'update_item'         => __('Update Chain', 'twentytwentyone'),
       'search_items'        => __('Search Chain', 'twentytwentyone'),
       'not_found'           => __('Not Found', 'twentytwentyone'),
       'not_found_in_trash'  => __('Not found in Trash', 'twentytwentyone'),
   );
   
   // Set other options for Custom Post Type
   
   $args = array(
       'label'               => __('Chain', 'twentytwentyone'),
       'description'         => __('Chain news and reviews', 'twentytwentyone'),
       'labels'              => $labels,
       // Features this CPT supports in Post Editor
       'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
       // You can associate this CPT with a taxonomy or custom taxonomy.
       'taxonomies'          => array( 'genres' ),
       /* A hierarchical CPT is like Pages and can have
       * Parent and child items. A non-hierarchical CPT
       * is like Posts.
       */
       'hierarchical'        => false,
       'public'              => true,
       'show_ui'             => true,
       'show_in_menu'        => true,
       'show_in_nav_menus'   => true,
       'show_in_admin_bar'   => true,
       'menu_position'       => 5,
       'can_export'          => true,
       'has_archive'         => true,
       'exclude_from_search' => false,
       'publicly_queryable'  => true,
       'capability_type'     => 'post',
       'show_in_rest' => true,
   
   );
   $labels = array(
       'name' => __('Category'),
       'singular_name' => __('Category'),
       'search_items' => __('Search'),
       'popular_items' => __('More Used'),
       'all_items' => __('All Categories'),
       'parent_item' => null,
       'parent_item_colon' => null,
       'edit_item' => __('Add new'),
       'update_item' => __('Update'),
       'add_new_item' => __('Add new Category'),
       'new_item_name' => __('New')
   );
   register_taxonomy('porfiolio_category', array('chain'), array(
   'hierarchical' => true,
   'labels' => $labels,
   'singular_label' => 'porfiolio_category',
   'all_items' => 'Category',
   'query_var' => true,
   'rewrite' => array('slug' => 'cat'))
   );
   
   // Registering your Custom Post Type
   register_post_type('chain', $args);
   }
   add_action('init', 'chain_list', 0);
   
   // ===============chain Custom Post================ //
   
   
   
   // ===============chain Start================ //
   
   function chains()
   {
   // WP_Query arguments
   $args = array(
      'post_type'		=> array( 'chain' ),
      'post_status'		=> array( 'publish' ),
      );
      
      // The Query
      $query = new WP_Query( $args );
      
      // The Loop
      if ( $query->have_posts() ) {
      ?>
   <section class="categories">
      <div class="container text-center">
         <div class="filters filter-button-group">
            <ul>
               <h4>
                  <li class="active" data-filter="*">All</li>
                  <?php
                     $terms = get_terms('porfiolio_category');
                     foreach ($terms as  $term) { ?>
                  <li class="<?php  echo $term->slug; ?>" data-filter=".<?php  echo $term->slug; ?>"><?php echo $term->name; ?></li>
                  <?php  }
                     ?>
                  <!-- <li data-filter=".webdesign">Logo</li>
                     <li data-filter=".webdev">videos</li>
                     <li data-filter=".brand">Websites</li> -->
               </h4>
            </ul>
         </div>
         <div id="categories-splide" class="splide">
            <div class="splide__track">
               <div class="all-icons splide__list">
                  <?php
                     while ( $query->have_posts() ) {
                        $query->the_post();
                        $categories = get_the_terms($post->ID, 'porfiolio_category');
                        // print_r($categories);
                        ?>
                  <figure class="repeat-box <?php foreach ( $categories as $key => $term) { echo $term->slug.' '; } ?>">
                     <a href="<?php the_permalink() ?>" aria-label="thehealthsite.com news">
                        <div class="photo">
                           <div class="lazy-image lz-img"><?php the_post_thumbnail('full'); ?></div>
                        </div>
                        <figcaption class="text">
                           <p><?php echo the_title(); ?></p>
                        </figcaption>
                     </a>
                  </figure>
                  <?php
                     }?>
               </div>
            </div>
         </div>
      </div>
   </section>
   <?php 
      } else {
         // no posts found
      }
   
   // Restore original Post Data
   wp_reset_postdata();
   }
   add_shortcode('chain_s', 'chains');
   
   
   // ===============chain End================ //
   
   
    
   
   // ===============SPEAKER Custom Post================ //
   
   function speaker()
   {
       // Set UI labels for Custom Post Type
       $labels = array(
           'name'                => _x('Speaker', 'Post Type General Name', 'twentytwentyone'),
           'singular_name'       => _x('Speaker', 'Post Type Singular Name', 'twentytwentyone'),
           'menu_name'           => __('Speaker', 'twentytwentyone'),
           'parent_item_colon'   => __('Parent Speaker', 'twentytwentyone'),
           'all_items'           => __('All Speaker', 'twentytwentyone'),
           'view_item'           => __('View Speaker', 'twentytwentyone'),
           'add_new_item'        => __('Add New Speaker', 'twentytwentyone'),
           'add_new'             => __('Add New', 'twentytwentyone'),
           'edit_item'           => __('Edit Speaker', 'twentytwentyone'),
           'update_item'         => __('Update Speaker', 'twentytwentyone'),
           'search_items'        => __('Search Speaker', 'twentytwentyone'),
           'not_found'           => __('Not Found', 'twentytwentyone'),
           'not_found_in_trash'  => __('Not found in Trash', 'twentytwentyone'),
       );
   
       // Set other options for Custom Post Type
   
       $args = array(
           'label'               => __('Speaker', 'twentytwentyone'),
           'description'         => __('Speaker news and reviews', 'twentytwentyone'),
           'labels'              => $labels,
           // Features this CPT supports in Post Editor
           'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
           // You can associate this CPT with a taxonomy or custom taxonomy.
           'taxonomies'          => array( 'genres' ),
           /* A hierarchical CPT is like Pages and can have
           * Parent and child items. A non-hierarchical CPT
           * is like Posts.
           */
           'hierarchical'        => false,
           'public'              => true,
           'show_ui'             => true,
           'show_in_menu'        => true,
           'show_in_nav_menus'   => true,
           'show_in_admin_bar'   => true,
           'menu_position'       => 5,
           'can_export'          => true,
           'has_archive'         => true,
           'exclude_from_search' => false,
           'publicly_queryable'  => true,
           'capability_type'     => 'post',
           'show_in_rest' => true,
   
       );
   
       // Registering your Custom Post Type
       register_post_type('speaker', $args);
   }
   add_action('init', 'speaker', 0);
   
   // ===============SPEAKER Custom Post================ //
   
   
   
   // ===============SPEAKER Start================ //
   
   function speakers()
   {
       ob_start();
   
       $args = array( 'post_type' => 'speaker', 'posts_per_page' => -1, 'order' => 'ASC');
   
       $loop = new WP_Query($args);
   
       ?>
<section class="speakers">
   <div class="container">
      <div id="speakers-splide" class="splide">
         <div class="splide__track">
            <ul class="splide__list ">
               <?php
                  while ($loop->have_posts()) : $loop->the_post();
                  
                      ?>
               <li class="splide__slide">
                  <figure class="repeat-box">
                     <a class="d-flex align" href="<?php echo get_the_permalink(); ?>" aria-label="thehealthsite.com news">
                        <div class="photo">
                           <div id="speak" class="lazy-image"><?php the_post_thumbnail('full'); ?></div>
                        </div>
                        <figcaption id="setw" class="text">
                           <p ><?php  the_title(); ?><br>
                              <?php echo the_content();  ?>
                           </p>
                        </figcaption>
                     </a>
                  </figure>
               </li>
               <?php endwhile; ?>
            </ul>
         </div>
      </div>
   </div>
</section>
<?php wp_reset_query();
   return ob_get_clean();
   }
   add_shortcode('speak', 'speakers');
   // ===============SPEKAER End================ //
   

   // ============== Custom Footer Widgets =============== //
   
   if (function_exists('register_sidebar')) {
      register_sidebar(array(
          'name' => 'Footer Left',
          'id'   => 'footer-left-widget',
          'description'   => 'Left Footer widget position.',
          'before_widget' => '<div id="%1$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2>',
          'after_title'   => '</h2>'
      ));
  
      register_sidebar(array(
          'name' => 'Footer Center',
          'id'   => 'footer-center-widget',
          'description'   => 'Centre Footer widget position.',
          'before_widget' => '<div id="%1$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2>',
          'after_title'   => '</h2>'
      ));
  
      register_sidebar(array(
          'name' => 'Footer Right',
          'id'   => 'footer-right-widget',
          'description'   => 'Right Footer widget position.',
          'before_widget' => '<div id="%1$s">',
          'after_widget'  => '</div>',
          'before_title'  => '<h2>',
          'after_title'   => '</h2>'
      ));
  
  
  }
  
   //======= Wp_customize register start ======//
   
   
   
   
   function mytheme_customize_register( $wp_customize ){
   	$wp_customize->add_section(
   	// ID
   	'layout_section',
   	// Arguments array
   	array(
   	  'title' => __( 'Layout', 'my_theme' ),
   	  'capability' => 'edit_theme_options',
   	  'description' => __( 'Social Button', 'my_theme' )
   	)
      );
     
     
     
      $wp_customize->add_setting(
   	// ID
   	'my_theme_settings[social_button]',
   	// Arguments array
   	array('type' => 'option',
     
   	)
   	);
     
      $wp_customize->add_control(
   	// ID
   	'layout_control',
     array(
   	'type' => 'text',
   	'label' => __( 'Button', 'my_theme' ),
   	'title'=>__('My Custom Text','mytheme'),
   	'section' => 'layout_section',
   	'settings' => 'my_theme_settings[social_button]',
   	
      )
      );
     }
     
     add_action( 'customize_register', 'mytheme_customize_register' );
     
     
   //======= Wp_customize register end ======//
     
      
      // ===============SPEAKER page Custom Post================ //
      
      function speaker_page()
      {
      // Set UI labels for Custom Post Type
      $labels = array(
          'name'                => _x('Speakerpage', 'Post Type General Name', 'twentytwentyone'),
          'singular_name'       => _x('Speakerpage', 'Post Type Singular Name', 'twentytwentyone'),
          'menu_name'           => __('Speakerpage', 'twentytwentyone'),
          'parent_item_colon'   => __('Parent Speakerpage', 'twentytwentyone'),
          'all_items'           => __('All Speakerpage', 'twentytwentyone'),
          'view_item'           => __('View Speakerpage', 'twentytwentyone'),
          'add_new_item'        => __('Add New Speakerpage', 'twentytwentyone'),
          'add_new'             => __('Add New', 'twentytwentyone'),
          'edit_item'           => __('Edit Speakerpage', 'twentytwentyone'),
          'update_item'         => __('Update Speakerpage', 'twentytwentyone'),
          'search_items'        => __('Search Speakerpage', 'twentytwentyone'),
          'not_found'           => __('Not Found', 'twentytwentyone'),
          'not_found_in_trash'  => __('Not found in Trash', 'twentytwentyone'),
      );
      
      // Set other options for Custom Post Type
      
      $args = array(
          'label'               => __('Speakerpage', 'twentytwentyone'),
          'description'         => __('Speakerpage news and reviews', 'twentytwentyone'),
          'labels'              => $labels,
          // Features this CPT supports in Post Editor
          'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
          // You can associate this CPT with a taxonomy or custom taxonomy.
          'taxonomies'          => array( 'genres' ),
          /* A hierarchical CPT is like Pages and can have
          * Parent and child items. A non-hierarchical CPT
          * is like Posts.
          */
          'hierarchical'        => false,
          'public'              => true,
          'show_ui'             => true,
          'show_in_menu'        => true,
          'show_in_nav_menus'   => true,
          'show_in_admin_bar'   => true,
          'menu_position'       => 5,
          'can_export'          => true,
          'has_archive'         => true,
          'exclude_from_search' => false,
          'publicly_queryable'  => true,
          'capability_type'     => 'post',
          'show_in_rest' => true,
      
      );
      
      // Registering your Custom Post Type
      register_post_type('speakerpages', $args);
      }
      add_action('init', 'speaker_page', 0);
      
      // ===============SPEAKER page Custom Post================ //
      
      
      
      // ===============SPEAKER page Start================ //
      
      function speakerp()
      {
      ob_start();
      
      $args = array( 'post_type' => 'speakerpages', 'posts_per_page' => -1, 'order' => 'ASC');
      
      $loop = new WP_Query($args);
      
      ?>
<main class="common-all-content margin-top">
   <div class="speakersAward">
      <div class="">
         <div class="black_bg text-center"></div>
         <div class=" speakers-boxes">
            <?php
               while ($loop->have_posts()) : $loop->the_post();
               
                   ?>
            <article class="repeat-box">
               <a href="<?php the_permalink(); ?>">
                  <div class="photo">
                     <div class="lazy-image shine"><?php the_post_thumbnail('full'); ?></div>
                  </div>
                  <div class="text">
                     <h2 class="mx-auto mt-3"><?php  echo the_title(); ?></h2>
                     <?php echo the_content(); ?>
                  </div>
               </a>
            </article>
            <?php endwhile; ?>
         </div>
      </div>
   </div>
</main>
<?php wp_reset_query();
   return ob_get_clean();
   }
   add_shortcode('speakpage', 'speakerp');
   
   
   // ===============Speaer page End================ //
   
   
   
   
   // ===============Schedule page Custom Post================ //
   
   function schedule_page()
   {
     // Set UI labels for Custom Post Type
     $labels = array(
         'name'                => _x('Schedulepage', 'Post Type General Name', 'twentytwentyone'),
         'singular_name'       => _x('Schedulepage', 'Post Type Singular Name', 'twentytwentyone'),
         'menu_name'           => __('Schedulepage', 'twentytwentyone'),
         'parent_item_colon'   => __('Parent Schedulepage', 'twentytwentyone'),
         'all_items'           => __('All Schedulepage', 'twentytwentyone'),
         'view_item'           => __('View Schedulepage', 'twentytwentyone'),
         'add_new_item'        => __('Add New Schedulepage', 'twentytwentyone'),
         'add_new'             => __('Add New', 'twentytwentyone'),
         'edit_item'           => __('Edit Schedulepage', 'twentytwentyone'),
         'update_item'         => __('Update Schedulepage', 'twentytwentyone'),
         'search_items'        => __('Search Schedulepage', 'twentytwentyone'),
         'not_found'           => __('Not Found', 'twentytwentyone'),
         'not_found_in_trash'  => __('Not found in Trash', 'twentytwentyone'),
     );
   
     // Set other options for Custom Post Type
   
     $args = array(
         'label'               => __('Schedulepage', 'twentytwentyone'),
         'description'         => __('Schedulepage news and reviews', 'twentytwentyone'),
         'labels'              => $labels,
         // Features this CPT supports in Post Editor
         'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
         // You can associate this CPT with a taxonomy or custom taxonomy.
         'taxonomies'          => array( 'genres' ),
         /* A hierarchical CPT is like Pages and can have
         * Parent and child items. A non-hierarchical CPT
         * is like Posts.
         */
         'hierarchical'        => false,
         'public'              => true,
         'show_ui'             => true,
         'show_in_menu'        => true,
         'show_in_nav_menus'   => true,
         'show_in_admin_bar'   => true,
         'menu_position'       => 5,
         'can_export'          => true,
         'has_archive'         => true,
         'exclude_from_search' => false,
         'publicly_queryable'  => true,
         'capability_type'     => 'post',
         'show_in_rest' => true,
   
     );
   
     // Registering your Custom Post Type
     register_post_type('schedulepages', $args);
   }
   add_action('init', 'schedule_page', 0);
   
   // ===============schedule page Custom Post================ //
   
   
   
   // ===============schedule page Start================ //
   
   function schedule()
   {
     ob_start();
   
     $args = array( 'post_type' => 'schedulepages', 'posts_per_page' => -1, 'order' => 'ASC');
   
     $loop = new WP_Query($args);
   
     ?>
<div id="Session1" class="tabcontent">
   <?php
      while ($loop->have_posts()) : $loop->the_post();
      
          ?>
   <a class="text-dark" href="<?php the_permalink(); ?>">
      <div class="sessionList">
         <div class="leftImg">
            <div class="circleDssh">
               <div class="lazy-image shine brdDash"><?php the_post_thumbnail('full'); ?></div>
            </div>
         </div>
         <div class="rightDetails">
            <h2><?php echo the_title(); ?></h2>
            <p><?php  echo the_content();?></p>
            <span>
               <i class="timeIcon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18.502" height="18.502" viewBox="0 0 18.502 18.502">
                     <path id="Icon_material-access-time" data-name="Icon material-access-time" d="M12.242,3a9.251,9.251,0,1,0,9.26,9.251A9.246,9.246,0,0,0,12.242,3Zm.009,16.652a7.4,7.4,0,1,1,7.4-7.4A7.4,7.4,0,0,1,12.251,19.652Zm.463-12.026H11.326v5.551l4.857,2.914.694-1.138-4.163-2.47Z" transform="translate(-3 -3)" fill="#67b755"/>
                  </svg>
               </i>
               2:30 - 4:30
            </span>
         </div>
      </div>
   </a>
   <?php endwhile; ?>
</div>
<?php wp_reset_query();
   return ob_get_clean();
   }
   add_shortcode('schedu', 'schedule');
   
   
   // ===============schedule page End================ //
   
   
   
   
   //Season 2 schedule
   
   
   
   // ===============Schedule page Custom Post================ //
   
   function schedule2_page()
   {
   // Set UI labels for Custom Post Type
   $labels = array(
       'name'                => _x('Schedulepage2', 'Post Type General Name', 'twentytwentyone'),
       'singular_name'       => _x('Schedulepage2', 'Post Type Singular Name', 'twentytwentyone'),
       'menu_name'           => __('Schedulepage2', 'twentytwentyone'),
       'parent_item_colon'   => __('Parent Schedulepage2', 'twentytwentyone'),
       'all_items'           => __('All Schedulepage2', 'twentytwentyone'),
       'view_item'           => __('View Schedulepage2', 'twentytwentyone'),
       'add_new_item'        => __('Add New Schedulepage2', 'twentytwentyone'),
       'add_new'             => __('Add New', 'twentytwentyone'),
       'edit_item'           => __('Edit Schedulepage2', 'twentytwentyone'),
       'update_item'         => __('Update Schedulepage2', 'twentytwentyone'),
       'search_items'        => __('Search Schedulepage2', 'twentytwentyone'),
       'not_found'           => __('Not Found', 'twentytwentyone'),
       'not_found_in_trash'  => __('Not found in Trash', 'twentytwentyone'),
   );
   
   // Set other options for Custom Post Type
   
   $args = array(
       'label'               => __('Schedulepage2', 'twentytwentyone'),
       'description'         => __('Schedulepage2 news and reviews', 'twentytwentyone'),
       'labels'              => $labels,
       // Features this CPT supports in Post Editor
       'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
       // You can associate this CPT with a taxonomy or custom taxonomy.
       'taxonomies'          => array( 'genres' ),
       /* A hierarchical CPT is like Pages and can have
       * Parent and child items. A non-hierarchical CPT
       * is like Posts.
       */
       'hierarchical'        => false,
       'public'              => true,
       'show_ui'             => true,
       'show_in_menu'        => true,
       'show_in_nav_menus'   => true,
       'show_in_admin_bar'   => true,
       'menu_position'       => 5,
       'can_export'          => true,
       'has_archive'         => true,
       'exclude_from_search' => false,
       'publicly_queryable'  => true,
       'capability_type'     => 'post',
       'show_in_rest' => true,
   
   );
   
   // Registering your Custom Post Type
   register_post_type('schedulepages2', $args);
   }
   add_action('init', 'schedule2_page', 0);
   
   // ===============schedule page Custom Post================ //
   
   
   
   // ===============schedule page Start================ //
   
   function schedule2()
   {
   ob_start();
   
   $args = array( 'post_type' => 'schedulepages2', 'posts_per_page' => -1, 'order' => 'ASC');
   
   $loop = new WP_Query($args);
   
   ?>
<div id="Session2" class="tabcontent">
   <?php
      while ($loop->have_posts()) : $loop->the_post();
      
          ?>
   <a class="text-dark" href="<?php the_permalink(); ?>">
      <div class="sessionList">
         <div class="leftImg">
            <div class="circleDssh">
               <div class="lazy-image shine brdDash"><?php the_post_thumbnail('full'); ?></div>
            </div>
         </div>
         <div class="rightDetails">
            <h2><?php echo the_title(); ?></h2>
            <p><?php  echo the_content();?></p>
            <span>
               <i class="timeIcon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18.502" height="18.502" viewBox="0 0 18.502 18.502">
                     <path id="Icon_material-access-time" data-name="Icon material-access-time" d="M12.242,3a9.251,9.251,0,1,0,9.26,9.251A9.246,9.246,0,0,0,12.242,3Zm.009,16.652a7.4,7.4,0,1,1,7.4-7.4A7.4,7.4,0,0,1,12.251,19.652Zm.463-12.026H11.326v5.551l4.857,2.914.694-1.138-4.163-2.47Z" transform="translate(-3 -3)" fill="#67b755"/>
                  </svg>
               </i>
               2:30 - 4:30
            </span>
         </div>
      </div>
   </a>
   <?php endwhile; ?>
</div>
<?php wp_reset_query();
   return ob_get_clean();
   }
   add_shortcode('schedu2', 'schedule2');
   
   
   // ===============schedule page End================ //
   
   
   
   
   //season 3 schedule 
   
   
   
   
   
   //Season 2 schedule
   
   
   
   // ===============Schedule page Custom Post================ //
   
   function schedule3_page()
   {
   // Set UI labels for Custom Post Type
   $labels = array(
       'name'                => _x('Schedulepage3', 'Post Type General Name', 'twentytwentyone'),
       'singular_name'       => _x('Schedulepage3', 'Post Type Singular Name', 'twentytwentyone'),
       'menu_name'           => __('Schedulepage3', 'twentytwentyone'),
       'parent_item_colon'   => __('Parent Schedulepage3', 'twentytwentyone'),
       'all_items'           => __('All Schedulepage3', 'twentytwentyone'),
       'view_item'           => __('View Schedulepage3', 'twentytwentyone'),
       'add_new_item'        => __('Add New Schedulepage3', 'twentytwentyone'),
       'add_new'             => __('Add New', 'twentytwentyone'),
       'edit_item'           => __('Edit Schedulepage3', 'twentytwentyone'),
       'update_item'         => __('Update Schedulepage3', 'twentytwentyone'),
       'search_items'        => __('Search Schedulepage3', 'twentytwentyone'),
       'not_found'           => __('Not Found', 'twentytwentyone'),
       'not_found_in_trash'  => __('Not found in Trash', 'twentytwentyone'),
   );
   
   // Set other options for Custom Post Type
   
   $args = array(
       'label'               => __('Schedulepage3', 'twentytwentyone'),
       'description'         => __('Schedulepage3 news and reviews', 'twentytwentyone'),
       'labels'              => $labels,
       // Features this CPT supports in Post Editor
       'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
       // You can associate this CPT with a taxonomy or custom taxonomy.
       'taxonomies'          => array( 'genres' ),
       /* A hierarchical CPT is like Pages and can have
       * Parent and child items. A non-hierarchical CPT
       * is like Posts.
       */
       'hierarchical'        => false,
       'public'              => true,
       'show_ui'             => true,
       'show_in_menu'        => true,
       'show_in_nav_menus'   => true,
       'show_in_admin_bar'   => true,
       'menu_position'       => 5,
       'can_export'          => true,
       'has_archive'         => true,
       'exclude_from_search' => false,
       'publicly_queryable'  => true,
       'capability_type'     => 'post',
       'show_in_rest' => true,
   
   );
   
   // Registering your Custom Post Type
   register_post_type('schedulepages3', $args);
   }
   add_action('init', 'schedule3_page', 0);
   
   // ===============schedule page Custom Post================ //
   
   
   
   // ===============schedule page Start================ //
   
   function schedule3()
   {
   ob_start();
   
   $args = array( 'post_type' => 'schedulepages3', 'posts_per_page' => -1, 'order' => 'ASC');
   
   $loop = new WP_Query($args);
   
   ?>
<div id="Session3" class="tabcontent">
   <?php
      while ($loop->have_posts()) : $loop->the_post();
      
          ?>
   <a class="text-dark" href="<?php the_permalink(); ?>">
      <div class="sessionList">
         <div class="leftImg">
            <div class="circleDssh">
               <div class="lazy-image shine brdDash"><?php the_post_thumbnail('full'); ?></div>
            </div>
         </div>
         <div class="rightDetails">
            <h2><?php echo the_title(); ?></h2>
            <p><?php  echo the_content();?></p>
            <span>
               <i class="timeIcon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="18.502" height="18.502" viewBox="0 0 18.502 18.502">
                     <path id="Icon_material-access-time" data-name="Icon material-access-time" d="M12.242,3a9.251,9.251,0,1,0,9.26,9.251A9.246,9.246,0,0,0,12.242,3Zm.009,16.652a7.4,7.4,0,1,1,7.4-7.4A7.4,7.4,0,0,1,12.251,19.652Zm.463-12.026H11.326v5.551l4.857,2.914.694-1.138-4.163-2.47Z" transform="translate(-3 -3)" fill="#67b755"/>
                  </svg>
               </i>
               2:30 - 4:30
            </span>
         </div>
      </div>
   </a>
   <?php endwhile; ?>
</div>
<?php wp_reset_query();
   return ob_get_clean();
   }
   add_shortcode('schedu3', 'schedule3');
   
   
   // ===============schedule page End================ //
   
   
   
   
    
   
   // ===============Award page Custom Post================ //
   
   function award_page()
   {
   // Set UI labels for Custom Post Type
   $labels = array(
       'name'                => _x('Award', 'Post Type General Name', 'twentytwentyone'),
       'singular_name'       => _x('Award', 'Post Type Singular Name', 'twentytwentyone'),
       'menu_name'           => __('Award', 'twentytwentyone'),
       'parent_item_colon'   => __('Parent Award', 'twentytwentyone'),
       'all_items'           => __('All Award', 'twentytwentyone'),
       'view_item'           => __('View Award', 'twentytwentyone'),
       'add_new_item'        => __('Add New Award', 'twentytwentyone'),
       'add_new'             => __('Add New', 'twentytwentyone'),
       'edit_item'           => __('Edit Award', 'twentytwentyone'),
       'update_item'         => __('Update Award', 'twentytwentyone'),
       'search_items'        => __('Search Award', 'twentytwentyone'),
       'not_found'           => __('Not Found', 'twentytwentyone'),
       'not_found_in_trash'  => __('Not found in Trash', 'twentytwentyone'),
   );
   
   // Set other options for Custom Post Type
   
   $args = array(
       'label'               => __('Award', 'twentytwentyone'),
       'description'         => __('Award news and reviews', 'twentytwentyone'),
       'labels'              => $labels,
       // Features this CPT supports in Post Editor
       'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
       // You can associate this CPT with a taxonomy or custom taxonomy.
       'taxonomies'          => array( 'genres' ),
       /* A hierarchical CPT is like Pages and can have
       * Parent and child items. A non-hierarchical CPT
       * is like Posts.
       */
       'hierarchical'        => false,
       'public'              => true,
       'show_ui'             => true,
       'show_in_menu'        => true,
       'show_in_nav_menus'   => true,
       'show_in_admin_bar'   => true,
       'menu_position'       => 5,
       'can_export'          => true,
       'has_archive'         => true,
       'exclude_from_search' => false,
       'publicly_queryable'  => true,
       'capability_type'     => 'post',
       'show_in_rest' => true,
   
   );
   
   // Registering your Custom Post Type
   register_post_type('award', $args);
   }
   add_action('init', 'award_page', 0);
   
   // ===============Award page Custom Post================ //
   
   
   
   // ===============Award page Start================ //
   
   function awards()
   {
   
   ob_start();
   
   $args = array( 'post_type' => 'award', 'posts_per_page' => -1, 'order' => 'ASC');
   
   $loop = new WP_Query($args);
   
   ?>
<div id="Catg1" class="tab-content text-center">
   <h2></h2>
   <div class="splide multiple-splide">
      <div class="splide__track">
         <ul class="splide__list">
            <?php
               while ($loop->have_posts()) : $loop->the_post();
               
                   ?>
            <li class="splide__slide">
               <div class="voteBox">
                  <div class="circleImg">
                     <div class="lazy-image shine"><?php the_post_thumbnail('full'); ?></div>
                  </div>
                  <h3><?php echo the_title(); ?></h3>
                  <button class="voteBtn"><?php echo the_content(); ?></button>
               </div>
            </li>
            <?php endwhile; ?>
         </ul>
      </div>
   </div>
</div>
<?php wp_reset_query();
   return ob_get_clean();
   }
   add_shortcode('award_s', 'awards');
   
   
   // ===============Award page End================ //
   
   
   
   
   
   // ===============Award page Custom Post================ //
   
   function award_page2()
   {
   // Set UI labels for Custom Post Type
   $labels = array(
       'name'                => _x('Award2', 'Post Type General Name', 'twentytwentyone'),
       'singular_name'       => _x('Award2', 'Post Type Singular Name', 'twentytwentyone'),
       'menu_name'           => __('Award2', 'twentytwentyone'),
       'parent_item_colon'   => __('Parent Award2', 'twentytwentyone'),
       'all_items'           => __('All Award2', 'twentytwentyone'),
       'view_item'           => __('View Award2', 'twentytwentyone'),
       'add_new_item'        => __('Add New Award2', 'twentytwentyone'),
       'add_new'             => __('Add New', 'twentytwentyone'),
       'edit_item'           => __('Edit Award2', 'twentytwentyone'),
       'update_item'         => __('Update Award2', 'twentytwentyone'),
       'search_items'        => __('Search Award2', 'twentytwentyone'),
       'not_found'           => __('Not Found', 'twentytwentyone'),
       'not_found_in_trash'  => __('Not found in Trash', 'twentytwentyone'),
   );
   
   // Set other options for Custom Post Type
   
   $args = array(
       'label'               => __('Award2', 'twentytwentyone'),
       'description'         => __('Award2 news and reviews', 'twentytwentyone'),
       'labels'              => $labels,
       // Features this CPT supports in Post Editor
       'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
       // You can associate this CPT with a taxonomy or custom taxonomy.
       'taxonomies'          => array( 'genres' ),
       /* A hierarchical CPT is like Pages and can have
       * Parent and child items. A non-hierarchical CPT
       * is like Posts.
       */
       'hierarchical'        => false,
       'public'              => true,
       'show_ui'             => true,
       'show_in_menu'        => true,
       'show_in_nav_menus'   => true,
       'show_in_admin_bar'   => true,
       'menu_position'       => 5,
       'can_export'          => true,
       'has_archive'         => true,
       'exclude_from_search' => false,
       'publicly_queryable'  => true,
       'capability_type'     => 'post',
       'show_in_rest' => true,
   
   );
   
   // Registering your Custom Post Type
   register_post_type('award2', $args);
   }
   add_action('init', 'award_page2', 0);
   
   // ===============Award page Custom Post================ //
   
   
   
   // ===============Award page Start================ //
   
   function awards2()
   {
   ob_start();
   
   $args = array( 'post_type' => 'award2', 'posts_per_page' => -1, 'order' => 'ASC');
   
   $loop = new WP_Query($args);
   
   ?>
<div id="Catg2" class="tab-content text-center">
   <h2></h2>
   <div class="splide multiple-splide">
      <div class="splide__track">
         <ul class="splide__list">
            <?php
               while ($loop->have_posts()) : $loop->the_post();
               
                   ?>
            <li class="splide__slide">
               <div class="voteBox">
                  <div class="circleImg">
                     <div class="lazy-image shine"><?php the_post_thumbnail('full'); ?></div>
                  </div>
                  <h3><?php echo the_title(); ?></h3>
                  <button class="voteBtn"><?php echo the_content(); ?></button>
               </div>
            </li>
            <?php endwhile; ?>
         </ul>
      </div>
   </div>
</div>
<?php wp_reset_query();
   return ob_get_clean();
   }
   add_shortcode('award_s2', 'awards2');
   
   
   // ===============Award2 page End================ //
   
   
   
   
   // ===============Award3 page Custom Post================ //
   
   function award_page3()
   {
   // Set UI labels for Custom Post Type
   $labels = array(
       'name'                => _x('Award3', 'Post Type General Name', 'twentytwentyone'),
       'singular_name'       => _x('Award3', 'Post Type Singular Name', 'twentytwentyone'),
       'menu_name'           => __('Award3', 'twentytwentyone'),
       'parent_item_colon'   => __('Parent Award3', 'twentytwentyone'),
       'all_items'           => __('All Award3', 'twentytwentyone'),
       'view_item'           => __('View Award3', 'twentytwentyone'),
       'add_new_item'        => __('Add New Award3', 'twentytwentyone'),
       'add_new'             => __('Add New', 'twentytwentyone'),
       'edit_item'           => __('Edit Award3', 'twentytwentyone'),
       'update_item'         => __('Update Award3', 'twentytwentyone'),
       'search_items'        => __('Search Award3', 'twentytwentyone'),
       'not_found'           => __('Not Found', 'twentytwentyone'),
       'not_found_in_trash'  => __('Not found in Trash', 'twentytwentyone'),
   );
   
   // Set other options for Custom Post Type
   
   $args = array(
       'label'               => __('Award3', 'twentytwentyone'),
       'description'         => __('Award3 news and reviews', 'twentytwentyone'),
       'labels'              => $labels,
       // Features this CPT supports in Post Editor
       'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
       // You can associate this CPT with a taxonomy or custom taxonomy.
       'taxonomies'          => array( 'genres' ),
       /* A hierarchical CPT is like Pages and can have
       * Parent and child items. A non-hierarchical CPT
       * is like Posts.
       */
       'hierarchical'        => false,
       'public'              => true,
       'show_ui'             => true,
       'show_in_menu'        => true,
       'show_in_nav_menus'   => true,
       'show_in_admin_bar'   => true,
       'menu_position'       => 5,
       'can_export'          => true,
       'has_archive'         => true,
       'exclude_from_search' => false,
       'publicly_queryable'  => true,
       'capability_type'     => 'post',
       'show_in_rest' => true,
   
   );
   
   // Registering your Custom Post Type
   register_post_type('award3', $args);
   }
   add_action('init', 'award_page3', 0);
   
   // ===============Award page Custom Post================ //
   
   
   
   // ===============Award page Start================ //
   
   function awards3()
   {
   ob_start();
   
   $args = array( 'post_type' => 'award3', 'posts_per_page' => -1, 'order' => 'ASC');
   
   $loop = new WP_Query($args);
   
   ?>
<div id="Catg3" class="tab-content text-center">
   <div class="splide multiple-splide">
      <div class="splide__track">
         <ul class="splide__list">
            <?php
               while ($loop->have_posts()) : $loop->the_post();
               
                   ?>
            <li class="splide__slide">
               <div class="voteBox">
                  <div class="circleImg">
                     <div class="lazy-image shine"><?php the_post_thumbnail('full'); ?></div>
                  </div>
                  <h3><?php echo the_title(); ?></h3>
                  <button class="voteBtn"><?php echo the_content(); ?></button>
               </div>
            </li>
            <?php endwhile; ?>
         </ul>
      </div>
   </div>
</div>
<?php wp_reset_query();
   return ob_get_clean();
   }
   add_shortcode('award_s3', 'awards3');
   // ===============Award page End================ //
   
   
   
   
   
   