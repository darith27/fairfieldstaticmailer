<?php
require_once(dirname(dirname(__FILE__)) . '/src/darith27/contact-post/contact-post.php');
use darith27\contact-post\contact-post as myClass;

class contact-postTest extends PHPUnit_Framework_TestCase
{
	public function testCanBeNegated () {
		$a = new myClass();
		$a->increase(9)->increase(8);
		$b = $a->negate();
		$this->assertEquals(0, $b->myParam);
	}

}
