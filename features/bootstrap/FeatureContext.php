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
     * @Alors /^je devrais voir la date d'hier au format "yyyy\-mm\-dd"$/
     */
    public function jeDevraisVoirLaDateDhierAuFormat($arg1)
    {
        $yesterday = date($arg1, strtotime("-1 days"));

        $this->assertPageMatchesText($yesterday);
    }

    /**
     * @Then /^I should see yesterday's date with format "$arg1"$/
     */
    public function iShouldSeeYesterdaySDateWithFormat($arg1)
    {
        $yesterday = date($arg1, strtotime("-1 days"));

        $this->assertPageMatchesText($yesterday);
    }
}
