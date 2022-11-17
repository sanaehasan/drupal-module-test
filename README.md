# drupal-module-test

## First time start
- install `lando` on your computer -> [instructions](https://docs.lando.dev/getting-started/installation.html)
- run `lando start`
- copy `config/settings.local.php` and `config/development.services.yml` to `web/sites/default`
- import database with `lando db-import ./config/initial-database.sql.gz`
- clear cache with `lando drush cr`
- login with `admin` and `1xw*N8wmzyXnTZ`

## Instructions
Create a custom module with following specification:
- create a `home` content type and use it as a default `homepage`
- create a new user with user role `limited`
- create a custom module `fun_time`
- module should have a configuration form with two text fields: `title`, `admin_description`
- display module `title` text field data on `home` as `H1`
- create a javascript file inside module
- `js` should find the `H1` and change colours on it every second
- use Drupal `hook` to attach module `.js` file only for user with role `limited`
- use `twig` to show `admin_description` for user with `administrator` role underneath the `H1`
- module should contain a `custom twig extension` with a `pipe` to camelcase the `admin_description`
- `anonymous` user should see only text: `You should login to see creation of the 'fun_time' module :)`

## Process
- fork this repository
- have fun with writing the code (see what you can do in max 2 hours)
- run `lando drush cex` to export your configuration
- run `lando drush sql-dump --gzip --result-file=./fun_time-db.sql`
- commit the code to your repo
- share with us :)
