<?php

use Behat\Behat\Context\Context;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends \Behat\MinkExtension\Context\MinkContext implements Context
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
     * @Then I wait during :arg1 ms
     */
    public function iWaitDuringMs($arg1)
    {
        $this->getSession()->wait($arg1);
    }

    /**
     * @Alors /^je devrais voir la date d'hier au format "([^"]*)"$/
     */
    public function jeDevraisVoirLaDateDHierAuFormat($format)
    {
        $yesterday = date($format, strtotime("-1 days"));

        $this->assertElementContainsText('#yesterday', $yesterday);
    }

    /**
     * @Then /^I should see yesterday's date with format "([^"]*)"$/
     */
    public function iShouldSeeYesterdaySDateWithFormat($format)
    {
        $yesterday = date($format, strtotime("-1 days"));

        $this->assertElementContainsText('#yesterday', $yesterday);
    }

    /**
     * @Then /^I check the "([^"]*)" checkbox$/
     */
    public function iCheckTheCheckbox($checkboxId)
    {
        $this->checkOption($checkboxId);
    }

    /**
     * @Then /^the "([^"]*)" checkbox must be unchecked$/
     */
    public function theCheckboxMustBeUnchecked($checkboxId)
    {
        $this->assertCheckboxNotChecked($checkboxId);
    }
}
