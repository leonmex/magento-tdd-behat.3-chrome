Feature: Admin Panel is working and is possible to select from catalog one product
  This save own backs that the server is working and the product
  list is working correctly

Scenario: Manage catalog products works
  Given The following products exist:
      | id      | sku |
      | 5235 | CMT725002-Beige |

  When I select the "5235" product
  Then Display the Status "Enabled"