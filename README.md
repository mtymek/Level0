Level Zero - a better skeleton application for ZF2.
===================================================

Introduction
------------

Zend Framework 2 comes with a starter pack - Zend Skeleton Application. Unfortunately, it requires some 
effort to make development comfortable (it doesn't come with asset manager or development toolbar) and to 
run fast on production (caching is turned off by default). It also comes with two alternate installation
scenarios - using Composer or Git submodules.

While there is a good rationale behind it (see closed pull requests for ZendSkeletonApp), a lot of people
feel it is not enough. "Level Zero" is an attempt to fill this gap. It is basically the same old ZendSkeletonApp,
with a few useful modules and tweaked configuration. It can be installed only via Composer, reducing complexity 
of this process and extra overhead.

Development mode
----------------

Level Zero provides and easy way to switch your application between production and development mode.
You can trigger it inside `public/.htaccess` file, pointing webserver to `index.php` (production)
or `index_dev.php` (development).

When dev mode is enabled, you get:
* Zend Developer Tools - toolbar showing various data about how application was executed;
* detailed exception information shown on screen (using Zf2Whoops module);
* `config/development.config.php` file, where you can enable modules that should run in dev mode only; 
* `config/autoload-dev` directory when you can put your own development-mode configuration.

Production mode is optimized for speed:
* configuration is cached
* assets are dumped into public directory
* module dependencies are not validated

Configuration
-------------

Production config works as usual. You can override it for dev mode in two locations:

* use `config/development.config.php` file to define which modules should be enabled for dev mode only;
* put your development-mode configuration under `config/autoload-dev` directory.

Modules shipped by default
--------------------------

* `AssetManager` - allows you to keep your assets clean from the very beginning
* `OcraCachedViewResolver` - caches process of resolving template names to template paths
* `ZendDeveloperTools` - shows some information useful in dev mode
* `Zf2Whoops` - displays nice error message in dev mode
