# A simple demonstration of using Vue.js for rendering and pagination of WP posts

This WP app has only 5 edited PHP files in the twentytwentyone theme:

- index.php
- functions.php
- footer.php
- wp-config.php (of course)

and 1 new partial

- vue-js.php

The Vue app is contained in this file (included in footer.php), while the HTML template it uses is in index.php. 

The Vue instance reads posts from the WP REST API.

## Setup

The 2021 theme index.php has been modified to respond with a Vue.js instance if the url is set as the Posts page in Settings->Reading->Posts page, using is_home() function.

The Fakerpress plugin is included, to generate random content for Posts. Once some content is present, the Vue rendering will work without further configuration.

No compilation. No Babel. No Webpack.
