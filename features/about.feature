Feature: about page
  In order to see about page contents
  As a user
  I am able to visit about page

  @javascript
  Scenario: Visiting about page
  Given am on "/about"
  Then should see "mava is a web app"