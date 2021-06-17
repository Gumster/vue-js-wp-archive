# A simple demonstration of Wordrpress posts using Vue.js for rendering and pagination

This WP app has only 5 edited PHP files in the twentytwentyone theme:

- index.php
- functions.php
- footer.php
- wp-config.php (of course)

and 1 new partial

- vue-js.php

The Vue app is contained in this file (included in footer.php), while the HTML template it uses is in index.php. 

The Vue instance reads posts from the WP REST API.

A page is created ('categories') which is set as the Posts page in Settings=>Reading. That page will utilise index.php, and display the posts using Vue.
