<?php
/**
 * Definition for the SiteContext of the project.
 *
 * @author Noel Barrera <nbgsys@gmail.com>
 */

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use MageTest\MagentoExtension\Context\MagentoContext;

require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';

/**
 * Defines application features from the specific context.
 */
class SiteContext extends MagentoContext implements Context, SnippetAcceptingContext {

    private $_webDriver = '';

    /**
     * @Given I am on a product :urlProduct page
     */
    public function iAmOnAProductPage($urlProduct) {
        $this->getSession()->visit(Mage::getBaseUrl() . $urlProduct);
    }

    /**
     * @When I add the item to the cart
     */
    public function iAddTheItemToTheCart() {
        $button = $this->getSession()->getPage()->find('css', '.btn-cart');
        assertNotNull($button, 'Could not find the search button!');
        $button->press();

    }

    /**
     * @Then I should see that the total items in my basket is :total
     */
    public function iShouldSeeThatTheTotalItemsInMyBasketIs($total) {
        $pageTotal = $this->getSession()->getPage()->find('css', '.count')->getText();
        expect($pageTotal)->toBe($total);
    }

    /**
     * @When The test start the selenium should be up
     */
    public function theTestStartTheSeleniumShouldBeUp()
    {
        $this->setUp();
        
    }

    /**
     * @var \RemoteWebDriver
     */
    public function setUp()
    {
        $capabilities = array(\WebDriverCapabilityType::BROWSER_NAME => 'chrome');
        $this->_webDriver = RemoteWebDriver::create('http://127.0.0.1:4444/wd/hub', $capabilities);
    }


    /**
     * @Then Selenium should show the page :titleOfThepage
     */
    public function seleniumShouldShowThePage($titleOfThepage)
    {
        assertContains($titleOfThepage, '');
        throw new PendingException();
    }
}
