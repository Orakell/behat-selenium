@homepage
Feature: Homepage default behavior

  @javascript
  Scenario: The Page content display with selenium
    When I am on the homepage
    Then I wait during 500 ms
    Then I should see "Hello World Continuous"

  @javascript
  Scenario: The Page content display with selenium
    When I am on the homepage
    Then I wait during 500 ms
    Then I should see yesterday's date with format "yy-m-d"

  @javascript
  Scenario: Le contenu de la page s'affiche avec selenium
    Quand je suis sur la page d'accueil
    Et que j'attends pendant 500 ms
    Alors je devrais voir la date d'hier au format "yy-m-d"

  @javascript
  Scenario: I am on the home page, the CGV checkbox must be unchecked
    When I am on the homepage
    Then I wait during 500 ms
    Then I check the "cgv" checkbox
    Then I reload the page
    Then the "cgv" checkbox must be unchecked