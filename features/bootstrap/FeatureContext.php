<?php
/**
 * @file
 * Our Behat feature context.
 */

use Behat\Behat\Context\ClosuredContextInterface,
Behat\Behat\Context\TranslatedContextInterface,
Behat\Behat\Context\BehatContext,
Behat\Behat\Exception\PendingException,
Behat\Behat\Context\Step;
use Behat\Gherkin\Node\PyStringNode,
  Behat\Gherkin\Node\TableNode;
use Behat\MinkExtension\Context\MinkContext;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';

/**
 * Features context.
 */
class FeatureContext extends Behat\MinkExtension\Context\MinkContext {
  /**
   * Initializes context.
   * Every scenario gets it's own context object.
   *
   * @param array $parameters
   *   context parameters (set them up through behat.yml)
   */
  public function __construct(array $parameters) {
  }

  /**
   * @Then /^the favicon should be found$/
   */
  public function theFaviconShouldBeFound() {
    if ($favicon_link = $this->getSession()->getPage()->find('css', 'link[rel="shortcut icon"]')) {
      $favicon_url = $favicon_link->getAttribute('href');
    }
    else {
      $favicon_url = "/favicon.ico";
    }

    return array(
      new Step\Given(sprintf('I go to "%s"', $favicon_url)),
      new Step\Then('the response status code should not be 404'),
    );
  }
}
