<?php

namespace Observable;

/**
 * Interface ObservableInterface
 * @package Observable
 */
interface ObservableInterface {
	/**
	 * @param Observer $observer
	 *
	 * @return mixed
	 */
	public function register(Observer $observer);

	/**
	 * @return mixed
	 */
	public function fireUpdate();

	/**
	 * @param Observer $observer
	 *
	 * @return mixed
	 */
	public function remove(Observer $observer);
}
