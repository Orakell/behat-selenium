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

    //   @javascript
    //  Scenario: Le contenu de la page s'affiche avec selenium
    //    Quand je suis sur la page d'accueil
    //    Et que j'attends pendant 500 ms
    //    Alors je devrais voir la date d'hier au format "yyyy-mm-dd"

    /**
     * @Alors je devrais voir la date d'hier au format :format
     */
    public function jeDevraisVoirLaDateDhierAuFormat($format)
    {
        $yesterday = date($format, strtotime("-1 days"));

        $this->assertPageMatchesText($yesterday);
    }

    /**
     * @Then /^I should see yesterday's date with format "yyyy\-mm\-dd"$/
     */
    public function iShouldSeeYesterdaySDateWithFormat($arg1)
    {
        $yesterday = date($arg1, strtotime("-1 days"));

        $this->assertPageMatchesText($yesterday);
    }
}
