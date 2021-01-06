**Requirements:**

* composer
* php-cli 7.2.3 + 

**Setup:**

* cd ./test-app
* composer install

**Run command:**

`php bin/console app:calculate-salary [age] [base salary] [childs count] [car usage(yes|no)]`

**Example:**

`php bin/console app:calculate-salary 36 5000 3 yes`

**Testing:**

` php bin/phpunit`