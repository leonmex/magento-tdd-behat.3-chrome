Feature: Verified that all the plugins for release the  test is on the
  machine and the services are  start up

Scenario: Verified that all the services is start up
  When The test start the selenium should be up
  Then Selenium should show the page "google.com"