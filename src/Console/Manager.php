<?php
/*
 * This file is part of the FileConverter package.
 *
 * (c) Greg Payne
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Phonarc\Console;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Manager extends \Symfony\Component\Console\Command\Command {
  protected function configure() {
    $this->setName('phonarc:sync');
    $this->setDescription('Run steps 1-3 to download email, convert it, and import to PDO.');
  }

  protected function execute(InputInterface $input, OutputInterface $output) {
  }

}