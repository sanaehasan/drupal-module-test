# drupal-module-test

### First time start
- install `lando` on your computer -> [instructions](https://docs.lando.dev/getting-started/installation.html)
- run `lando start`
- copy `config/settings.local.php` and `config/development.service.yml` to `web/sites/default`
- navigate to `web` folder
- import database with `lando drush sql-cli < ./config/initial-dbatabase.sql.gz`
- login with `admin` and `1xw*N8wmzyXnTZ`