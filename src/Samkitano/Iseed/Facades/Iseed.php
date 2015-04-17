<?php namespace Samkitano\Iseed\Facades;

use Illuminate\Support\Facades\Facade;

class Iseed extends Facade {

  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor()
  {
	  return 'iseed';
  }

}
