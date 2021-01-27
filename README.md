To start, run `docker-compose up -d` from the project directory.

To fix the wordpress core/plugin/theme update issue, run the following command from your project root:

`sudo chown -R www-data:www-data wp/wp-content`