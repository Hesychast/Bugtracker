<?php
namespace Bugtracker\Lib;
/**
 * This class implements a View pattern
 */
class View
{
	private $templates_dir;

	/**
	 * Constructor
	 *
	 * @param string $templates_dir Path to the directory of template files.
	 */
	function __construct( $templates_dir )
	{
		$this->templates_dir = $templates_dir;
	}

	/**
	 * Renders specified view
	 *
	 * @param string $template A template file name.
	 * @param array $params Parameters passed to the template.
	 * @return string
	 */
	public function render( string $template, array $params ) {
		ob_start();
		include $this->templates_dir . $template;
		return ob_get_clean();
	}
}
