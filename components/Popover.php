<?php
namespace velosipedist\bootstructor\components;

use HtmlObject\Element;

class Popover extends Element
{
	/**
	 * @inheritdoc
	 *
	 * @return Popover
	 */
	public static function create($element = null, $value = null, $attributes = array()) {
		return parent::create($element, $value, $attributes);
	}

	public function __construct($element = null, $value = null, $attributes = array()) {
		parent::__construct($element, $value, $attributes);
		if (!$this->getAttribute('data-html')) {
			$this->setAttribute('data-html', 'true');
		}
		if (!$this->getAttribute('data-trigger')) {
			$this->setAttribute('data-trigger', 'hover');
		}
		$this->setAttribute('data-bootstrap-popover-trigger', $this->getAttribute('data-trigger'));
	}

	public function setPopoverPlacement($where) {
		$this->setAttribute('data-placement', $where);
		return $this;
	}

	public function setPopoverContainer($selector) {
		$this->setAttribute('data-container', $selector);
		return $this;
	}

	public function setPopoverTitle($title) {
		$this->setAttribute('data-title', $title);
		return $this;
	}

	public function setPopoverContent($content) {
		$this->setAttribute('data-content', htmlspecialchars($content));
		return $this;
	}
}
 