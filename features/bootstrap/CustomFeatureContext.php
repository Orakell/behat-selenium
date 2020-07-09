<?php

use Behat\Behat\Context\Context;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Class CustomFeatureContext
 */
class CustomFeatureContext extends MinkContext implements Context
{
    /**
     * CustomFeatureContext constructor.
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
