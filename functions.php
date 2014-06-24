<?php
function the_breadcrumb() {
    global $post;
    if (!is_home()) {
	    echo '<ol class="breadcrumb">';
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        echo 'Home';
        echo '</a></li>';
        if (is_category() || is_single()) {
            echo '<li>';
            the_category(' </li><li> ');
            if (is_single()) {
                echo '</li><li>';
                the_title();
                echo '</li>';
            }
        } elseif (is_page()) {
            if($post->post_parent){
                $anc = get_post_ancestors( $post->ID );
                $title = get_the_title();
                foreach ( $anc as $ancestor ) {
                    $output = '<li><a href="'.get_permalink($ancestor).'" title="'.get_the_title($ancestor).'">'.get_the_title($ancestor).'</a></li> <li class="separator">/</li>';
                }
                echo $output;
                echo '<strong title="'.$title.'"> '.$title.'</strong>';
            } else {
                echo '<li><strong> '.get_the_title().'</strong></li>';
            }
        }
		echo '</ol>';
    }
    elseif (is_tag()) {single_tag_title();}
    elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
    elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
    elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
    elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
    elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
    elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}

}
?>

<?php

add_action( 'after_setup_theme', 'morganceken_theme_setup' );

function morganceken_theme_setup() {
	global $content_width;

	/* Set the $content_width for things such as video embeds. */
	if ( !isset( $content_width ) )
		$content_width = 600;

	/* Add theme support for automatic feed links. */	
	add_theme_support( 'automatic-feed-links' );

	/* Add theme support for post thumbnails (featured images). */
	add_theme_support( 'post-thumbnails' );
	
	/* Add theme support for widgets. */
	add_theme_support( 'widgets' );

	/* Add theme support for custom backgrounds. */
	add_custom_background();

	/* Add your nav menus function to the 'init' action hook. */
	add_action( 'init', 'morganceken_register_menus' );

	/* Add your sidebars function to the 'widgets_init' action hook. */
	add_action( 'widgets_init', 'morganceken_register_sidebars' );

	/* Load JavaScript files on the 'wp_enqueue_scripts' action hook. */
	add_action( 'wp_enqueue_scripts', 'morganceken_load_scripts' );
	

	/* This theme uses wp_nav_menu() in two locations. */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'morganceken' ),
		'secondary' => __( 'Secondary Menu', 'morganceken' ),
	) );	
}

function morganceken_register_menus() {
	/* Register nav menus using register_nav_menu() or register_nav_menus() here. */
	add_theme_support( 'menus' );
}

function morganceken_register_sidebars() {
	/* Register dynamic sidebars using register_sidebar() here. */
	register_sidebar( $args );
}

function morganceken_load_scripts() {
	/* Enqueue custom Javascript here using wp_enqueue_script(). */

	/* Load the comment reply JavaScript. */
	if ( is_singular() && get_option( 'thread_comments' ) && comments_open() )
		wp_enqueue_script( 'comment-reply' );
}

?>