<?php
namespace Bugtracker\Lib\Taxonomies;
/**
 * The Project class registers the `projects` taxonomy, for use with 'post'.
 */
class Projects
{
	/**
	 * Taxonomy initialization
	 */
	public function projects_init() {
		register_taxonomy( 'projects', [ 'post' ], [
			'hierarchical'          => false,
			'public'                => true,
			'show_in_nav_menus'     => true,
			'show_ui'               => true,
			'show_admin_column'     => false,
			'query_var'             => true,
			'rewrite'               => true,
			'capabilities'          => [
				'manage_terms' => 'edit_posts',
				'edit_terms'   => 'edit_posts',
				'delete_terms' => 'edit_posts',
				'assign_terms' => 'edit_posts',
			],
			'labels'                => [
				'name'                       => __( 'Projects', 'bugtracker' ),
				'singular_name'              => _x( 'Project', 'taxonomy general name', 'bugtracker' ),
				'search_items'               => __( 'Search Projects', 'bugtracker' ),
				'popular_items'              => __( 'Popular Projects', 'bugtracker' ),
				'all_items'                  => __( 'All Projects', 'bugtracker' ),
				'parent_item'                => __( 'Parent Project', 'bugtracker' ),
				'parent_item_colon'          => __( 'Parent Project:', 'bugtracker' ),
				'edit_item'                  => __( 'Edit Project', 'bugtracker' ),
				'update_item'                => __( 'Update Project', 'bugtracker' ),
				'view_item'                  => __( 'View Project', 'bugtracker' ),
				'add_new_item'               => __( 'Add New Project', 'bugtracker' ),
				'new_item_name'              => __( 'New Project', 'bugtracker' ),
				'separate_items_with_commas' => __( 'Separate projects with commas', 'bugtracker' ),
				'add_or_remove_items'        => __( 'Add or remove projects', 'bugtracker' ),
				'choose_from_most_used'      => __( 'Choose from the most used projects', 'bugtracker' ),
				'not_found'                  => __( 'No projects found.', 'bugtracker' ),
				'no_terms'                   => __( 'No projects', 'bugtracker' ),
				'menu_name'                  => __( 'Projects', 'bugtracker' ),
				'items_list_navigation'      => __( 'Projects list navigation', 'bugtracker' ),
				'items_list'                 => __( 'Projects list', 'bugtracker' ),
				'most_used'                  => _x( 'Most Used', 'projects', 'bugtracker' ),
				'back_to_items'              => __( '&larr; Back to Projects', 'bugtracker' ),
			],
			'show_in_rest'          => true,
			'rest_base'             => 'projects',
			'rest_controller_class' => 'WP_REST_Terms_Controller',
		] );

	}

	/**
	 * Sets the post updated messages for the `projects` taxonomy.
	 *
	 * @param  array $messages Post updated messages.
	 * @return array Messages for the `projects` taxonomy.
	 */
	public function projects_updated_messages( $messages ) {

		$messages['projects'] = [
			0 => '', // Unused. Messages start at index 1.
			1 => __( 'Project added.', 'bugtracker' ),
			2 => __( 'Project deleted.', 'bugtracker' ),
			3 => __( 'Project updated.', 'bugtracker' ),
			4 => __( 'Project not added.', 'bugtracker' ),
			5 => __( 'Project not updated.', 'bugtracker' ),
			6 => __( 'Projects deleted.', 'bugtracker' ),
		];

		return $messages;
	}
}