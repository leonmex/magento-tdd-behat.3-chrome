<?php
/**
 * Definition for the SystemContext of the project.
 *
 * @author Noel Barrera <nbgsys@gmail.com>
 */

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use MageTest\MagentoExtension\Context\MagentoContext;

/**
 * Defines application features from the specific context.
 */
class SystemContext extends MagentoContext implements Context, SnippetAcceptingContext {

    private $baseUrl;
    
    /**
     * @Given there is a base_url configuration option set
     */
    public function thereIsABaseUrlConfigurationOptionSet()
    {
        $this->baseUrl = Mage::getBaseUrl();
    }

    /**
     * @Then I should see the value being :url
     */
    public function iShouldSeeTheValueBeing($url)
    {
        expect($this->baseUrl)->toBe($url);
    }
}
