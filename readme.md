# What is this?

These are some files I use for client WordPress installations.

# How do I use this?

* `env-sample.php` defines some constants that will probably differ between your dev, staging, and production environments. Copy the contents of this file to a file (ignored in .gitignore) `env.php` in your webroot, and replace the default definitions with the correct data for your setup. Then remove the corresponding definitions from WP's auto-generated wp-config.php file, and add the following line to the top of wp-config.php:

    require( dirname(__FILE__) . '/env.php' );

* `.gitignore` is my default WordPress .gitignore. Modify it as you see fit.
* `env-type-flag.php` is a simple plugin that displays a very large and obvious "LOCAL ENVIRONMENT" or "STAGING ENVIRONMENT" flag when appropriate. This can be helpful when your local and staging environments are accessed under the same URL as the production site, using custom hosts file definitions.

# This repo sucks

1. It's for my personal use, so bite me
2. If you want something more full featured, and more ready to use, check out Mark Jaquith's WordPress Skeleton: https://github.com/markjaquith/WordPress-Skeleton
