wp.mozilla-ignite.org
================================

The wp-content directory for the Mozilla Ignite blog (https://blog.mozillaignite.org). Installed separately to WordPress so that we can keep the theme and plug-ins separate to the app.

Using locally
--------------

This is just the theme directory for the Mozilla Ignite blog (minus the uploads) so if you want to help us out by fixing bugs or adding features you first want to set up a [local wordpress install](http://codex.wordpress.org/WordPress_Installation_Techniques).

Once you've got that up and running check out the theme in a separate location, alongside your local wordpress and set up a local VirtualHost pointing to `wp.mozilla-ignite.org/wp-content`. Below is a stripped down version of what I use on my mac (running a local apache webserver).

```
<VirtualHost *:80>
    DocumentRoot "/Users/rossilla/Sites/blog.mozilla-ignite.org/wp-content"
    ServerName dev-content.mozillaignite.org
</VirtualHost>
```

The final thing to do is add the following two lines to your local wp-config.php, this tells your local WordPress install where to look for the wp-content directory. 

```
define('WP_CONTENT_DIR', '/Users/rossilla/Sites/wp.mozilla-ignite.org/wp-content');
define('WP_CONTENT_URL', 'http://dev-content.mozillaignite.org');
```