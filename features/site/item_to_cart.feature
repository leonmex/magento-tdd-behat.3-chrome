Feature: Visitor can add items to the cart and shop
  In order to make a purchase
  As a visitor to the site
  I need to be able to see the product page and add the item to the cart

  Scenario: Adding the item to the cart
    Given I am on a product "furniture/tables/desks/votna-desk.html#.WNvHW3V96kA" page
    When I add the item to the cart
    Then I should see that the total items in my basket is "1"
