if ( ! function_exists('custom_post_type') ) {

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Shows', 'Post Type General Name', 'Custom Post Type' ),
		'singular_name'         => _x( 'Show', 'Post Type Singular Name', 'Custom Post Type' ),
		'menu_name'             => __( 'Shows', 'Custom Post Type' ),
		'name_admin_bar'        => __( 'Show', 'Custom Post Type' ),
		'archives'              => __( 'Item Archives', 'Custom Post Type' ),
		'attributes'            => __( 'Item Attributes', 'Custom Post Type' ),
		'parent_item_colon'     => __( 'Parent Item:', 'Custom Post Type' ),
		'all_items'             => __( 'Todos os Shows', 'Custom Post Type' ),
		'add_new_item'          => __( 'Adicionar Novo Show', 'Custom Post Type' ),
		'add_new'               => __( 'Adicionar Novo', 'Custom Post Type' ),
		'new_item'              => __( 'Novo Show', 'Custom Post Type' ),
		'edit_item'             => __( 'Editar Show', 'Custom Post Type' ),
		'update_item'           => __( 'Atualizar Show', 'Custom Post Type' ),
		'view_item'             => __( 'Ver Show', 'Custom Post Type' ),
		'view_items'            => __( 'View Items', 'Custom Post Type' ),
		'search_items'          => __( 'Search Item', 'Custom Post Type' ),
		'not_found'             => __( 'Not found', 'Custom Post Type' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'Custom Post Type' ),
		'featured_image'        => __( 'Featured Image', 'Custom Post Type' ),
		'set_featured_image'    => __( 'Set featured image', 'Custom Post Type' ),
		'remove_featured_image' => __( 'Remove featured image', 'Custom Post Type' ),
		'use_featured_image'    => __( 'Use as featured image', 'Custom Post Type' ),
		'insert_into_item'      => __( 'Insert into item', 'Custom Post Type' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'Custom Post Type' ),
		'items_list'            => __( 'Items list', 'Custom Post Type' ),
		'items_list_navigation' => __( 'Items list navigation', 'Custom Post Type' ),
		'filter_items_list'     => __( 'Filter items list', 'Custom Post Type' ),
	);
	$args = array(
		'label'                 => __( 'Show', 'Custom Post Type' ),
		'description'           => __( 'Post Type Description', 'Custom Post Type Description' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-tickets-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'shows', $args );

}
add_action( 'init', 'custom_post_type', 0 );

}