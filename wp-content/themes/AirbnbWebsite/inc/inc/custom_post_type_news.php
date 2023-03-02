<?php
// Product Custom Post Type
function create_custom_post_type_news()
{
    // set up product labels
    $labels = array(
        'name' => 'News',
        'singular_name' => 'News',
        'add_new' => 'Add New',
        'add_new_item' => 'Add New News',
        'edit_item' => 'Edit News',
        'new_item' => 'New News',
        'all_items' => 'All News',
        'view_item' => 'View News',
        'search_items' => 'Search News',
        'not_found' =>  'No News Found',
        'not_found_in_trash' => 'No News found in Trash',
        'parent_item_colon' => '',
        'menu_name' => 'News',
    );

    // register post type
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'news'),
        'query_var' => true,
        'taxonomies' => array('post_tag', 'post'),
        'menu_icon' => 'dashicons-welcome-add-page',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes'
        )
    );
    register_post_type('news', $args);

    $labels = array(
        'name'              => _x('News Categories', 'phoronesis'),
        'singular_name'     => _x('News Category', 'phoronesis'),
        'search_items'      => __('Search Category', 'phoronesis'),
        'all_items'         => __('All Category', 'phoronesis'),
        'parent_item'       => __('Parent Category', 'phoronesis'),
        'parent_item_colon' => __('Parent Category:', 'phoronesis'),
        'edit_item'         => __('Edit Category', 'phoronesis'),
        'update_item'       => __('Update Category', 'phoronesis'),
        'add_new_item'      => __('Add New Category', 'phoronesis'),
        'new_item_name'     => __('New Category Name', 'phoronesis'),
        'menu_name'         => __('Category', 'phoronesis'),
    );

    $rewrite = array(
        'slug'                       => 'news-category',
        'with_front'                 => true,
        'hierarchical'               => false,
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'query_var' => true,
        'rewrite'                    => $rewrite,
    );

    register_taxonomy('news-category', array('news'), $args);
}
add_action('init', 'create_custom_post_type_news');


function load_posts_by_ajax_news_callback()
{
    echo "hello";
    $page = (isset($_POST['page'])) ? $_POST['page'] : 0;
    $cat = isset($_POST['cat'])?$_POST['cat']:"";
    // check_ajax_referer('load_more_posts', 'security');
    check_ajax_referer('load_more_posts', 'security');


    if (isset($_GET['cat'])) {
        $args = array(
            'post_type' => 'news',
            'post_status' => 'publish',

            'tax_query' => array(
                array(
                    'taxonomy' => 'news-category',
                    'field'    => 'slug',
                    'terms'    => $_GET['cat'],
                ),
            ),

            'posts_per_page' => 3,
            'paged' => $page,
            'offset' => ($page - 1) * 3 + 6,
        );
    } else {
       
        $args = array(
            'post_type' => 'news',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'paged' => $page,
            'offset' => ($page - 1) * 3 + 6,
        );
     }
    $the_query = new WP_Query($args);
    
    echo "##" . $count = $the_query->found_posts . "##";

   
    while($the_query -> have_posts()) : $the_query -> the_post();
    $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail');
    $trimTitle = wp_trim_words(get_the_title(), $num_words = 15);
    $shortdescription = wp_trim_words(get_the_content(), $num_words = 18);
    $terms = get_the_terms($post->ID, 'news-category');
    $nameTerm = $terms[0]->name;
  ?>
   <div class="card border-0 col-md-4 mb-4">
               
               <img src="<?php echo $image[0]; ?>" class="card-img-top imgss" alt="img1">
               <div class="card-body p-0">
                   <p class="mt-3"><?php echo $nameTerm; ?></p>
                   <h4 class="card-title mt-3 blog-text"><?php echo $trimTitle; ?></h4>
                   <p class="card-text mt-3 mb-3 three-lines-restrict"><?php echo $shortdescription; ?> </p>
                   <a href="<?php the_permalink(); ?>" class="mt-5 read-text">Read more</a>
               </div>
           </div>
      
      <?php endwhile; 
  wp_reset_query();
    }

add_action('wp_ajax_load_posts_by_ajax_news', 'load_posts_by_ajax_news_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax_news', 'load_posts_by_ajax_news_callback');
?>