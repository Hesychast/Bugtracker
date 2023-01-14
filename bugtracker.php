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

use Bugtracker\Lib\Taxonomies\Projects;
use Bugtracker\Lib\Metaboxes\Metabox;
use Bugtracker\Lib\View;

// Add the Projects taxonomy
add_action( 'init', array( Projects::class, 'projects_init' ) );
add_filter( 'term_updated_messages', array( Projects::class, 'projects_updated_messages' ) );


// Create meta boxes
require_once dirname(__FILE__) . '/lib/metaboxes/metaboxes-config.php';

$path = dirname(__FILE__) . '/lib/metaboxes/templates/';
$view = new View( $path );

foreach( $mbx_config as $config_item ) {
    $mbx_ticket_number = new Metabox( $view, $config_item );
    $mbx_ticket_number->init();
}
