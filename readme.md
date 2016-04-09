# Raw PHP blog
Attempt to make a real-world MVC PHP site without any full-featured framework

Project only uses third-parties forbasic stuff like URL routing and HTML templating

Project is planned to be working either on Apache or with built-in PHP webserver

## Set up

### Serve with builtin PHP webserver:
 * make sure PHP interpreter in your PATH so you can type 'php -v' in console and see PHP version
 * go to public folder and type
   '''
   php -S 0.0.0.0:88 htaccess.php
   '''

## TODO LIST
 * v.1 - basic hand-made routing
 * v.2 - basic hand-made MVC
 * v.3 - routing with URL params (use Slim)
 * v.4 - templates for views (use Twig)
 * v.5 - basic hand-made ORM
 * v.6 - real ORM (ActiveRecord)
