Feature: Testing that behat and magento are working together
  In order to continue working on Magento
  As a magento developer
  I need to be able to configure behat and magento

  Scenario: Base URL is configured in the database
    Given there is a base_url configuration option set
    Then I should see the value being "http://ci.dyh.local/en/"