<?php
use Behat\Behat\Context\BehatContext;

use Behat\Mink\Mink;
use Behat\Mink\Session;
use Behat\Mink\Driver\Selenium2Driver;

use Selenium\Client as SeleniumClient;

require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';

class GuiContext extends BehatContext
{

public function __construct(array $parameters)
{
$mink = new Mink(array(
'selenium2' => new Session(new Selenium2Driver($parameters['wd_capabilities']['browser'], $parameters['wd_capabilities'], $parameters['wd_host'])),
));

$this->gui = $mink->getSession('selenium2');
}

}