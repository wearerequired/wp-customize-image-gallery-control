<?php
/**
 * Tests for Image Gallery Control class
 *
 * @package CustomizeImageGalleryControl
 */

namespace CustomizeImageGalleryControl;

class Test_Customize_Image_Gallery_Control extends \WP_UnitTestCase {

	/**
	 * @see Test_Customize_Image_Gallery_Control::customize_
	 */
	function test_customize_image_gallery_control_php_version_error() {
		ob_start();
		_customize_image_gallery_control_php_version_error();
		$buffer = ob_get_clean();
		$this->assertContains( '<div class="error">', $buffer );
	}

	/**
	 * @see customize_snapshots_php_version_text()
	 */
	function test_customize_image_gallery_control_php_version_text() {
		$this->assertContains( 'Customize Image Gallery Control plugin error:', _customize_image_gallery_control_php_version_text() );
	}
}