OWASP Bricks for Heruku
========================

Quick and dirty setup of OWASP Bricks version 2.2 (Tuivai) in Heroku using cleardb

```bash
heroku apps:create --region eu --stack cedar-14
composer install
module load php56
composer update

heroku addons:create cleardb:ignite
heroku config | grep CLEARDB_DATABASE_URL

git push heroku master
```

To get the DB configured: visit the setup page: `/config`, once it is up and running.
