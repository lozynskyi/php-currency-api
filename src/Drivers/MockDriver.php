<?php namespace Otherguy\Currency\Drivers;

use DateTime;

/**
 * Class MockDriver
 *
 * @package Otherguy\Currency\Drivers
 */
class MockDriver extends BaseDriver implements DriverInterface
{
  protected $apiURL    = 'localhost';

  /**
   * @param null|string $forCurrency
   *
   * @return array
   */
  public function get(string $forCurrency = null): array
  {
    return [];
  }

  /**
   * @param double|integer|float $amount
   * @param string               $fromCurrency
   * @param string               $toCurrency
   *
   * @return array
   */
  public function convert($amount = null, string $fromCurrency = null, string $toCurrency = null): array
  {
    return [];
  }

  /**
   * @param string|DateTime $date
   * @param null|string     $forCurrency
   *
   * @return array
   */
  public function historical($date = null, string $forCurrency = null): array
  {
    return [];
  }
}
