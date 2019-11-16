Feature: search wikipedia
  Just to undestand what is the shet
  As I doofer man would I start the test
  I will see how it would work

  Scenario: Search for BDD
    Given I am in wiki
    When I search for "Behaviour driven development"
    Then the first heading should be "Behavior-driven development"