<?php



// hide update notifications
function remove_core_updates(){
global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates'); //hide updates for WordPress itself
add_filter('pre_site_transient_update_plugins','remove_core_updates'); //hide updates for all plugins
add_filter('pre_site_transient_update_themes','remove_core_updates'); //hide updates for all themes




function indirme_linki_register() {
    register_taxonomy( 'indirme_linki', 'post', array(
        'rewrite'      => array( 'slug' => 'indirme_linki' ),
		'label'      => 'İndirme Linkleri' ,
		'show_admin_column'      => true ,
		'show_in_nav_menus'      => true ,
		'show_ui'      => true ,
		'query_var'      => true ,
		'public'      => true ,
		'show_in_rest'      => true 
    ) );
}
add_action( 'init', 'indirme_linki_register', 0 );







register_sidebars(1, array('name'=>'Sidebar_Single'));
register_sidebars(1, array('name'=>'Sidebar_Archive'));
register_sidebars(1, array('name'=>'Sidebar_Download'));
register_sidebars(1, array('name'=>'Sidebar_Schematic'));



/*
register_sidebars(1, array('name'=>'Arama_Alt'));
register_sidebars(1, array('name'=>'Header_Top_Right'));
register_sidebars(1, array('name'=>'Download_Reklam'));

*/


add_theme_support( 'menus' );

register_nav_menus( array(
	'ust_menu' => 'HeaderMenu',
	'alt_menu' => 'FooterMEnu' 
) );



add_theme_support( 'post-thumbnails' ); 


add_image_size( 'resim-800x460', 800, 460 , true );
add_image_size( 'resim-500x280', 500, 280 , true );
add_image_size( 'resim-350x200', 350, 200 , true );
add_image_size( 'resim-240x135', 240, 135 , true );
add_image_size( 'resim-105x60', 105, 60 , true );
add_image_size( 'resim-90x90', 90, 90 , true );








/*
add_action('after_setup_theme', 'remove_admin_bar');
 
function remove_admin_bar() {
if (!current_user_can('author')) {
  show_admin_bar(false);
}
}

*/



function remove_all_theme_styles() {
    if ( is_page_template('trading-dashboard.php') ) {
        global $wp_styles,$wp_scripts;
        foreach( $wp_styles->queue as $style ) :
           wp_deregister_style($wp_styles->registered[$style]->handle);
           wp_dequeue_style($wp_styles->registered[$style]->handle);
        endforeach;    
        foreach( $wp_scripts->queue as $script ) :
            wp_dequeue_script($wp_scripts->registered[$script]->handle);
            wp_deregister_script($wp_scripts->registered[$script]->handle);
        endforeach;
    }
}
add_action( 'wp_enqueue_scripts', 'remove_all_theme_styles', 100 );







function Schematic() {
    $args = array(
        'public'    => true,
        'label'     => __( 'Schematic', 'Schematic' ),
        'menu_icon' => 'dashicons-book',
		'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields','editor','taxonomies'),
        'show_in_rest' => true
    );
    register_post_type( 'schematic', $args );
}
add_action( 'init', 'Schematic' );


function schematics() {
    $args = array(
        'label'        => "Schematic Kategori",
        'public'       => true,
        'rewrite'      => true,
        'hierarchical' => true,
        'show_in_rest' =>true
    );
     
    register_taxonomy( 'schematics', 'schematic', $args );
}
add_action( 'init', 'schematics', 0 );




/*


function Minecraft_Wiki() {
    $args = array(
        'public'    => true,
        'label'     => __( 'Minecraft Wiki', 'Minecraft Wiki' ),
        'menu_icon' => 'dashicons-book',
		'supports' => array('title','editor','author','thumbnail','excerpt','comments','custom-fields','editor','taxonomies'),
        'show_in_rest' => true
    );
    register_post_type( 'minecraft_wiki', $args );
}
add_action( 'init', 'Minecraft_Wiki' );


function minecraft_wiki_tag() {
    $args = array(
        'label'        => "Minecraft Wiki Tag",
        'public'       => true,
        'rewrite'      => true,
        'hierarchical' => true,
        'show_in_rest' =>true
    );
     
    register_taxonomy( 'minecraft_wiki_tag', 'minecraft_wiki', $args );
}
add_action( 'init', 'minecraft_wiki_tag', 0 );



*/







function add_your_fields_meta_box() {
	add_meta_box(
		'your_fields_meta_box', // $id
		'Your Fields', // $title
		'show_your_fields_meta_box', // $callback
		'schematic', // $screen
		'normal', // $context
		'high' // $priority
	);
}
add_action( 'add_meta_boxes', 'add_your_fields_meta_box' );

function show_your_fields_meta_box() {
    global $post;  
    
		$meta = get_post_meta( $post->ID, 'your_fields', true ); ?>

  <input type="hidden" name="your_meta_box_nonce" value="<?php echo wp_create_nonce( basename(__FILE__) ); ?>">

  
  
  <p>
    <label for="your_fields[image]">Schematic Yükle</label><br>
    <input type="text" name="your_fields[image]" id="your_fields[image]" class="meta-image regular-text" value="<?php echo $meta['image']; ?>">
    <input type="button" class="button image-upload" value="Browse">
  </p>
  <div class="image-preview">Yüklendi: <?php echo $meta['image']; ?></div>


  <script>
    jQuery(document).ready(function ($) {
      // Instantiates the variable that holds the media library frame.
      var meta_image_frame;
      // Runs when the image button is clicked.
      $('.image-upload').click(function (e) {
        // Get preview pane
        var meta_image_preview = $(this).parent().parent().children('.image-preview');
        // Prevents the default action from occuring.
        e.preventDefault();
        var meta_image = $(this).parent().children('.meta-image');
        // If the frame already exists, re-open it.
        if (meta_image_frame) {
          meta_image_frame.open();
          return;
        }
        // Sets up the media library frame
        meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
          title: meta_image.title,
          button: {
            text: meta_image.button
          }
        });
        // Runs when an image is selected.
        meta_image_frame.on('select', function () {
          // Grabs the attachment selection and creates a JSON representation of the model.
          var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
          // Sends the attachment URL to our custom image input field.
          meta_image.val(media_attachment.url);
          meta_image_preview.children('img').attr('src', media_attachment.url);
        });
        // Opens the media library frame.
        meta_image_frame.open();
      });
    });
  </script>

  <?php }
function save_your_fields_meta( $post_id ) {   
	// verify nonce
	if ( isset($_POST['your_meta_box_nonce']) 
			&& !wp_verify_nonce( $_POST['your_meta_box_nonce'], basename(__FILE__) ) ) {
			return $post_id; 
		}
	// check autosave
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return $post_id;
	}
	// check permissions
	if (isset($_POST['post_type'])) { //Fix 2
        if ( 'page' === $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ) ) {
                return $post_id;
            } elseif ( !current_user_can( 'edit_post', $post_id ) ) {
                return $post_id;
            }  
        }
    }
	
	$old = get_post_meta( $post_id, 'your_fields', true );
		if (isset($_POST['your_fields'])) { //Fix 3
			$new = $_POST['your_fields'];
			if ( $new && $new !== $old ) {
				update_post_meta( $post_id, 'your_fields', $new );
			} elseif ( '' === $new && $old ) {
				delete_post_meta( $post_id, 'your_fields', $old );
			}
		}
}

add_action( 'save_post', 'save_your_fields_meta' );






































function wpdocs_get_paginated_links( $query ) {
    // When we're on page 1, 'paged' is 0, but we're counting from 1,
    // so we're using max() to get 1 instead of 0
    $currentPage = max( 1, get_query_var( 'paged', 1 ) );
 
    // This creates an array with all available page numbers, if there
    // is only *one* page, max_num_pages will return 0, so here we also
    // use the max() function to make sure we'll always get 1
    $pages = range( 1, max( 1, $query->max_num_pages ) );
 
    // Now, map over $pages and return the page number, the url to that
    // page and a boolean indicating whether that number is the current page
    return array_map( function( $page ) use ( $currentPage ) {
        return ( object ) array(
            "isCurrent" => $page == $currentPage,
            "page" => $page,
            "url" => get_pagenum_link( $page )
        );
    }, $pages );
}





 add_filter( 'posts_search', function( $search, \WP_Query $q )
    {
        $sphrase = get_search_query();
        $slen = strlen($sphrase);
        $minlen = 2;
            if( ! is_admin() && $slen < $minlen && $q->is_search() && $q->is_main_query() ){
                $search .=" AND 0=1 ";
            }
        return $search;
    }, 10, 2 );






add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );
function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}


function wpdocs_custom_excerpt_length( $length ) {
    return 18;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
function wpdocs_excerpt_more( $more ) {
    if ( ! is_single() ) {
        $more = sprintf( '%2$s',
            get_permalink( get_the_ID() ),
            __( '...', 'textdomain' )
        );
    }
 
    return $more;
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


add_filter( 'rest_authentication_errors', function( $result ) {
    if ( ! empty( $result ) ) {
        return $result;
    }
    if ( ! is_user_logged_in() ) {
        return new WP_Error( 'rest_not_logged_in', 'You are not currently logged in.', array( 'status' => 401 ) );
    }
    return $result;
});











// widget register class
class AnasayfaCategory extends WP_Widget {

	function __construct() {
		// widget isim
		parent::__construct( false, 'Anasayfa Category' );
	}

	function widget( $args, $instance ) {
		// widget çıktısı html css tarafı
		?>
		
		
<div class="category-blok">
<div class="container rm-pd">
	<div class="row rm-pd">
		<div class="category-blok-title-ust">
			<?php echo $instance['title']; ?>
		</div>
		<div class="category-blok-title"></div>
		<div class="category-blok-yazilar">
		
			<?php $a = 1 ; query_posts( 'posts_per_page=5&category_name='.$instance['category'].'&tag='.$instance['tag'] ); if (have_posts()) :  while (have_posts()) : the_post(); ?>
			
				<a href="<?php the_permalink(); ?>" class="category-blok-yazilar-tek cbyt-<?php echo $a; $a++; ?>">
						<?php the_post_thumbnail('resim-350x200'); ?>
						
						<span class="category-blok-category" style="background:<?php echo $instance['renk'] ?>">
						<?php $categories = get_the_category(); if ( ! empty( $categories ) ) { echo esc_html( $categories[0]->name ); } ?>
						</span>
						
						<span class="category-blok-title-title">
						<?php 
						echo substr(the_title('', '', FALSE), 0, 50);
						$say = strlen(get_the_title());
						if($say > 50){echo "..."; }
						?>
						</span>
				</a>
				
			<?php  endwhile; endif; wp_reset_query(); ?>
		</div>
	</div>
</div>
</div>

		
		<?php
		
	}



	function form( $instance ) {
		// widget kayıt formu
		
		$title = $instance['title'];
		$category = $instance['category'];
		$tag = $instance['tag'];
		$renk = $instance['renk'];
		?>
		
		<p>
        <label for="<?php echo $this->get_field_id( 'title' ); ?>">Başlık</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" 
			name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>">
        </p>

		<p>
        <label for="<?php echo $this->get_field_id( 'category' ); ?>">Category</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'category' ); ?>" 
			name="<?php echo $this->get_field_name( 'category' ); ?>" type="text" value="<?php echo $category; ?>">
        </p>
		
        <label for="<?php echo $this->get_field_id( 'tag' ); ?>">tag</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'tag' ); ?>" 
			name="<?php echo $this->get_field_name( 'tag' ); ?>" type="text" value="<?php echo $tag; ?>">
        </p>
		
        <label for="<?php echo $this->get_field_id( 'renk' ); ?>">renk</label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'renk' ); ?>" 
			name="<?php echo $this->get_field_name( 'renk' ); ?>" type="text" value="<?php echo $renk; ?>">
        </p>



		<?php
	}
	
	function update( $new_instance, $old_instance ) {
		// widget kayıtlar
		
		$instance = array();
		
		$instance['title'] = ( !empty( $new_instance['title'] ) ) ? $new_instance['title'] : '';
		$instance['category'] = ( !empty( $new_instance['category'] ) ) ? $new_instance['category'] : '';
		$instance['tag'] = ( !empty( $new_instance['tag'] ) ) ? $new_instance['tag'] : '';
		$instance['renk'] = ( !empty( $new_instance['renk'] ) ) ? $new_instance['renk'] : '';
		
		return $instance;
 
	}
	
}

function myplugin_register_widgets() {
	register_widget( 'AnasayfaCategory' );
}

add_action( 'widgets_init', 'myplugin_register_widgets' );



































// Custom Callback
            
function atarikafa_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
	    
		<div class="comment-wrap">
			<div class="comment-img">
				<?php echo get_avatar($comment,$args['avatar_size'],null,null,array('class' => array('img-responsive', 'img-circle') )); ?>
			</div>
			<div class="comment-body">
				<h4 class="comment-author"><?php echo get_comment_author_link(); ?></h4>
				<span class="comment-date"><?php printf(__('%1$s at %2$s', 'atarikafa'), get_comment_date(),  get_comment_time()) ?></span>
				<?php if ($comment->comment_approved == '0') { ?><em><i class="fa fa-spinner fa-spin" aria-hidden="true"></i> <?php _e('Comment awaiting approval', 'atarikafa'); ?></em><br /><?php } ?>
				<?php comment_text(); ?>
				<span class="comment-reply"> <?php comment_reply_link(array_merge( $args, array('reply_text' => __('Cevap', 'atarikafa'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?></span>
			</div>
		</div>
<?php }

// Enqueue comment-reply

add_action('wp_enqueue_scripts', 'atarikafa_public_scripts');

function atarikafa_public_scripts() {
    if (!is_admin()) {
        if (is_singular() && get_option('thread_comments')) { wp_enqueue_script('comment-reply'); }
    }
}

// Enqueue fontawesome

add_action('wp_enqueue_scripts', 'atarikafa_public_styles');

function atarikafa_public_styles() {
        wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0', 'all');
}

    



add_action('admin_head', 'webroom_add_css_js_to_admin');

function webroom_add_css_js_to_admin() {
echo '




<style type="text/css">


.edit-post-sidebar {
    width: 510px !important;
}


.components-panel__body{
    width: 245px !important;
	border-right:solid 1px #e2e2e2;
	float:left;
}


</style>
';
}

































?>