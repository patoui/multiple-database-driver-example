# Installation

Clone the repository, run `composer install` then try both the tests

```
vendor/bin/phpunit --filter=testSQLite
vendor/bin/phpunit --filter=testMySQL
```

### Notes

There's commented lines of code within `web.php`, you can uncomment them so you can verify the database connection details
