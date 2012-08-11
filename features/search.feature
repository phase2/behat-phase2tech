# Search feature
Feature: Search
  In order to look for articles on the Phase2 website
  As a website user
  I need to be able to search for articles

  Scenario: Searching for responsive design articles
    Given I am on "/search"
    When I fill in "Enter your keywords" with "Responsive design"
    And I press "Search"
    Then I should see "Blog Entry"

  Scenario: Searching for Drupal blog posts
    Given I am on "/search"
    When I fill in "Enter your keywords" with "drupal"
    And I press "Search"
    Then I should see "Blog Entry"

  Scenario: Searching for Clojure articles :(
    Given I am on "/search"
    When I fill in "Enter your keywords" with "Clojure"
    And I press "Search"
    Then I should not see "Blog Entry"

