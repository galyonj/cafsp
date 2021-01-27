To start, run `docker-compose up -d` from the project directory.

To fix an issue with updating/installing wordpress core files/plugins/themes from the browser after site creation, run the following command from your project root:

`sudo chown -R www-data:www-data wp/wp-content`