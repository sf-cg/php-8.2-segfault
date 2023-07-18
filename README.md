## About PHP 8.2 Segfault Example

This repo exists purely to give a simple reproducible codebase to use to get a segfault many people have come across when using PHP 8.2 with PHP-VCR.

There are other segfault issues in PHP 8.2, but this is a common and easily reproducible one.

The repo is essentially Laravel 10 init with some tests added and the php-vcr library added.

### How to use

- Install PHP 8.2 (any patch version should work, but I have tested this on 8.2.8)
- clone this repository
- Run `composer install`
- run `./vendor/bin/phpunit` or `composer test`

### Outcome

You should see the first test pass, but before completion of the second one you should get a segfault.
