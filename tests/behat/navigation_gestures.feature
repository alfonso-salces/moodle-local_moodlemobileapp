@app @javascript
Feature: It navigates using gestures.

  Background:
    Given the following "users" exist:
      | username | firstname | lastname |
      | student1 | Student   | First    |
      | teacher1 | Teacher   | First    |
      | student2 | Student   | Second   |
      | teacher2 | Teacher   | Second   |
      | student3 | Student   | Third    |
    And the following "courses" exist:
      | fullname | shortname |
      | Course 1 | C1        |
    And the following "course enrolments" exist:
      | user     | course | role    |
      | student1 | C1     | student |
      | teacher1 | C1     | teacher |
      | student2 | C1     | student |
      | teacher2 | C1     | teacher |
      | student3 | C1     | student |

  Scenario: Swipe between participants
    When I enter the app
    And I log in as "student1"
    And I enter the course "Course 1" in the app
    And I press "Participants" in the app
    And I press "Student First" in the app
    And I swipe to the left in the app
    Then I should find "Teacher First" in the app

    When I swipe to the left in the app
    Then I should find "Student Second" in the app

    When I swipe to the right in the app
    Then I should find "Teacher First" in the app

    When I swipe to the right in the app
    Then I should find "Student First" in the app

    When I swipe to the right in the app
    Then I should find "Student First" in the app

  Scenario: Swipe between filtered participants
    When I enter the app
    And I log in as "student1"
    And I enter the course "Course 1" in the app
    And I press "Participants" in the app
    And I press "Search" in the app
    And I set the field "Search" to "student" in the app
    And I press "Search" "button" near "Clear search" in the app
    And I press "Student First" in the app
    And I swipe to the left in the app
    Then I should find "Student Second" in the app

    When I swipe to the left in the app
    Then I should find "Student Third" in the app

    When I swipe to the right in the app
    Then I should find "Student Second" in the app

    When I swipe to the right in the app
    Then I should find "Student First" in the app
