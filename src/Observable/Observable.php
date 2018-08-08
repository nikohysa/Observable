<?php

namespace Observable;

use Singleton\AbstractSingleton;

/**
 * Class Observable
 * @package Observable
 */
abstract class Observable extends AbstractSingleton implements ObservableInterface {
	/**
	 * @var Observer
	 */
	private $observers;

	/**
	 * @param Observer $observer
	 *
	 * @return ObservableInterface
	 */
	public function register(Observer $observer) {
		$this->observers[] = $observer;
		return $this;
	}

	public function remove(Observer $observer) {
		foreach ($this->observers as $key => $item) {
			if ($item->compareTo($observer) === 0) {
				unset($this->observers[$key]);
				return;
			}
		}
	}

	/**
	 * @return void
	 */
	public function fireUpdate() {
		foreach ($this->observers as $observer) {
			$observer->update($this);
		}
	}

}
