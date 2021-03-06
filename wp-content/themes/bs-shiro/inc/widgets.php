<?php /**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bs_shiro_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'bs-shiro' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'bs-shiro' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bs_shiro_widgets_init' );
