<?php

namespace Observable;

/**
 * Interface Observer
 * @package Observable
 */
interface Observer {

	/**
	 * Value to return on success between comparision
	 */
	const SUCCESS = 0;

	/**
	 * @param ObservableInterface $observable
	 *
	 * @return void
	 */
	public function update(ObservableInterface $observable);

	/**
	 * Return 0 if this is equals to $observer
	 *
	 * @param Observer $observer
	 *
	 * @return integer
	 */
	public function compareTo(Observer $observer):int;
}
