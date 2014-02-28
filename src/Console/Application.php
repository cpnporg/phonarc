<?php
/*
 * This file is part of the Witti FileConverter package.
 *
 * (c) Greg Payne
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Witti\Phonarc\Console;

class Application extends \Symfony\Component\Console\Application {
  public function __construct() {
    parent::__construct();
    $this->add(new Install());
  }
}