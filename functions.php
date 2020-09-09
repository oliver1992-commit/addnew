<?php 


function files(){

//register jQuery
wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.5.0.min.js', array(),'1.0', true);
// register bootstrap.css file
wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.css');
// register bootstrap.js file
wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.js', array(),'1.0', true);
// register style.css file
wp_enqueue_style('my-style-sheet', get_template_directory_uri().'/style.css');

}

//add the action of calling codefactory_files when the scripts are loaded
add_action('wp_enqueue_scripts', 'files');



function register_navwalker(){

    // register the navwalker file
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

    register_nav_menus( array(
'primary' => __( 'Top-Menu'),
) );
}
add_action( 'after_setup_theme', 'register_navwalker' );


add_theme_support('post-thumbnails');

function set_excerpt_length(){
    return 20; //the number of words you want displayed
}
add_filter('excerpt_length','set_excerpt_length');

//Widget - sidebar
function wpb_init_widgets(){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
         ));
 }
 add_action('widgets_init', 'wpb_init_widgets');




class wpb_widget extends WP_Widget {
  
    function __construct() {
    parent::__construct(
      
   
    'wpb_widget', 
      
   
    __('1Dominiks Widget CR12', 'wpb_widget_domain'), 
      
        array( 'description' => __( 'A simple widget which shows a random Jokes from Serris API', 'wpb_widget_domain' ), ) 
    );
    }
      
   
      
    public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
      
    echo $args['before_widget'];
    if ( ! empty( $title ) )
    echo $args['before_title'] . $title . $args['after_title'];
      


echo '<h3 style="color:orange; font-weight:bolder;">Serris Funny Joke</h3>';


    
    $url = 'http://api.serri.codefactory.live/random/';
    $json = file_get_contents($url); //Reads entire file into a string

    $jokearray = json_decode($json, true);

echo $jokearray["joke"];




    echo $args['after_widget'];
    }
              
    public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) ) {
    $title = $instance[ 'title' ];
    }
    else {
    $title = __( 'New title', 'wpb_widget_domain' );
    }
    ?>
    <p>
    <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
    <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php 
    }
          
    public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
    }
     
    } 
     
     
    function wpb_load_widget() {
        register_widget( 'wpb_widget' );
    }
    add_action( 'widgets_init', 'wpb_load_widget' );





@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );




?>