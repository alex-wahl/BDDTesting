<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Mink\Exception\ElementNotFoundException;
use Behat\MinkExtension\Context\RawMinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends RawMinkContext implements Context, SnippetAcceptingContext
{

    public function __construct()
    {
    }

    /**
     * @Given I am in wiki
     */
    public function iAmInWiki()
    {
        $this->visitPath("/");
    }

    /**
     * @When I search for :arg1
     * @param $searchString
     * @throws ElementNotFoundException
     */
    public function iSearchFor($searchString)
    {
        $this->getSession()->getPage()->fillField('searchInput',$searchString);
        $this->getSession()->getPage()->find('css','.searchButton')->click();
    }

    /**
     * @Then the first heading should be :heading
     */
    public function theFirstHeadingShouldBe($heading)
    {
        $pageHeading = $this->getSession()->getPage()->find('css','.firstHeading');
        expect($pageHeading->getText())->toBe($heading);
    }

    /**
     * @Given I am on Zamics Login
     */
    public function iAmOnZamicsLogin()
    {
        throw new PendingException();
    }

    /**
     * @When this happens
     */
    public function thisHappens()
    {
        throw new PendingException();
    }
}
