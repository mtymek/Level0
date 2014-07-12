Level Zero
==========

Better Skeleton Application for ZF2.

Development mode
----------------

Level Zero provides easy way to switch your application between production and development mode.
You can trigger it inside `public/.htaccess` file, pointing webserver to `index.php` (production)
or `index_dev.php` (development mode).

When dev mode is enabled, you get:
* Zend Developer Tools - toolbar showing various data about how application was executed;
* detailed exception information shown on screen (using Zf2Whoops module);
* `config/development.config.php` file, where you can enable modules that should run in dev mode only; 
* `config/autoload-dev` directory when you can put your own development-mode configuration.

Configuration
-------------

* put your development-mode configuration under `config/autoload-dev` directory.