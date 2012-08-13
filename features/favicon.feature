# Favicon feature
Feature: Favicon
  In order to have a good user experience
  As a website user
  I need to be able to distinguish the site by its favicon

  Scenario: The favicon is not missing
    Given I am on homepage
    Then the favicon should be found
