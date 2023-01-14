<?php
namespace Bugtracker\Lib\Metaboxes;

use Bugtracker\Lib\View;


class Metabox
{
    private $id;
    private $title;
    private $callback;
    private $screen;
    private $context;
    private $priority;
    private $callback_args;
    private $view;


    /**
     * Construct
     *
     * Adds new metabox. Wrapper for the Wordpress function add_meta_box().
     *
     * @param View $view Renders the specified template in the callback method.
     * @param array $config Contains elements for converting to values of fields of this class.
     */
    function __construct( $view, $config)
    {
        extract( $config );

        $this->id            = $id;
        $this->title         = $title;
        $this->screen        = $screen;
        $this->context       = $context;
        $this->priority      = $priority;
        $this->view          = $view;
        $this->callback      = array( $this, 'add_content_callback' );
        $this->callback_args = array(
            'template'   => $template,
            'form_attrs' => $form_attrs
        );
    }

    /**
     * Creates new meta box
     */
    public function init()
    {
        add_action( 'add_meta_boxes', function()
            {
                add_meta_box( $this->id, $this->title, $this->callback, $this->screen, $this->context, $this->priority, $this->callback_args );
            }
        );
    }

    /**
     * Callback function that fills the box with the desired content.
     *
     * @param WP_Post $post Instance of the WP_Post class
     * @param array $meta Contains data from the $callback_args of the add_meta_box() function.
     */
    public function add_content_callback( $post, $meta )
    {
        $template = $meta['args']['template'];
        $attrs = $meta['args']['form_attrs'];

        echo $this->view->render( $template, $attrs );
    }

}