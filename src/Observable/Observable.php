<?php

namespace Observable;

/**
 * Class Observable
 * @package Observable
 */
abstract class Observable implements ObservableInterface {

	private $observers;

	/**
	 * @param Observer $observer
	 *
	 * @return Observable
	 */
	public function register(Observer $observer) {
		$this->observers[] = $observer;
		return $this;
	}

	public function remove(Observer $observer) {
		foreach ($this->observers as $key => $item) {
			if ($item->compareTo($observer) === 0) {
				unset($this->observers[$key]);
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
