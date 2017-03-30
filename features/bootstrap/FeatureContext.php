<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given The following products exist:
     */
    public function theFollowingProductsExist(TableNode $table)
    {
        throw new PendingException();
    }

    /**
     * @When I select the :arg1 product
     */
    public function iSelectTheProduct($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then Display the Status :arg1
     */
    public function displayTheStatus($arg1)
    {
        throw new PendingException();
    }
}
