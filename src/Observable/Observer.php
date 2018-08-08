<?php

namespace Observable;

/**
 * Interface Observer
 * @package Observable
 */
interface Observer {

	/**
	 * @param ObservableInterface $observable
	 *
	 * @return void
	 */
	public function update(ObservableInterface $observable);

	/**
	 * @param Observer $observer
	 *
	 * @return integer
	 */
	public function compareTo(Observer $observer);
}
