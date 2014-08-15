<?php
namespace app\extensions\velosipedist\bootstructor\base;

use HtmlObject\Element;

class Icon extends Element
{
	/**
	 * The element name
	 *
	 * @var string
	 */
	protected $element = 'i';
	/**
	 * The object's value
	 *
	 * @var string
	 */
	protected $value = '';

	/**
	 * @param string $iconClass
	 */
	public function __construct($iconClass) {
		parent::__construct('i', '', ['class' => $iconClass]);
	}

	/**
	 * @param string $iconClass
	 * @return static
	 */
	public static function create($iconClass) {
		return new static($iconClass);
	}
}