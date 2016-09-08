<?php
namespace WCCT;
 
use phpmock\phpunit\PHPMock;
 
class UnitTests extends \PHPUnit_Framework_TestCase{
    use PHPMock;

	/**
	 * A single example test.
	 */
	function test_wcct16_get_option() {
		// Replace this with some actual testing code.
		$this->assertEquals('river-club', wcct16_get_option('venue'));
	}
}