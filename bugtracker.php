<?php
/**
 * Plugin Name:     Bugtracker
 * Plugin URI:      https://github.com/Hesychast/Bugtracker
 * Description:     Bugtracker application with specific usage requirements.
 * Author:          Hesychast
 * Author URI:      https://github.com/Hesychast
 * Text Domain:     bugtracker
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Bugtracker
 */
require_once dirname(__FILE__) . '/autoloader.php';

use Bugtracker\Taxonomies\Projects;

add_action( 'init', array( Projects::class, 'projects_init' ) );
add_filter( 'term_updated_messages', array( Projects::class, 'projects_updated_messages' ) );
