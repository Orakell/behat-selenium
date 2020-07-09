@custom
Feature: Custom Homepage default behavior

  @javascript
  Scenario: I am on the home page, the CGV checkbox must be unchecked
    When I am on the homepage
    Then I wait during 500 ms
    Then I check the "cgv" checkbox
    Then I reload the page
    Then the "cgv" checkbox must be unchecked