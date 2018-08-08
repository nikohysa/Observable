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
	 * @return Observable
	 */
	public function register(Observer $observer):Observable;

	/**
	 * @return void
	 */
	public function fireUpdate();

	/**
	 * @param Observer $observer
	 *
	 * @return void
	 */
	public function remove(Observer $observer);
}
