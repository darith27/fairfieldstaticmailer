<?php
/**
 * fairfieldstaticmailer
 * @package contact-post
 * @version 0.1.0
 * @link https://github.com/darith27/fairfieldstaticmailer
 * @author darith27 <https://github.com/darith27>
 * @license https://github.com/darith27/fairfieldstaticmailer/blob/master/LICENSE
 * @copyright Copyright (c) 2014, darith27 
 */

namespace darith27\contact-post;

require(dirname(dirname(dirname(dirname(__FILE__)))) . '/vendor/autoload.php');

/**
 * The contact-post class
 * @author darith27 <https://github.com/darith27>
 * @since 0.1.0
 */
class contact-post {

	/**
	 * A sample parameter
	 * @var int $myParam This is my parameter
	 * @since 0.1.0
	 */
	public $myParam = 0;

	/**
	 * A sample function that adds the $n param to $myParam
	 * @name increase
	 * @param int $n The number to add to $myParam
	 * @since 0.1.0
	 * @return object the contact-post object
	 */
	public function increase ( $n ) {
		$this->myParam += $n;
		return $this;
	}

	/**
	 * A sample function that sets $myParam to 0
	 * @name negate
	 * @since 0.1.0
	 * @return object the contact-post object
	 */
	public function negate (){
		$this->myParam = 0;
		return $this;
	}
}
