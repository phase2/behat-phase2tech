# Performance feature
Feature: Performance
  In order to have a good user experience
  As a website user
  I need to be able to browse a site without obvious performance problem

  Scenario: Having a valid favicon
    Given I am on homepage
    Then the favicon should be found
