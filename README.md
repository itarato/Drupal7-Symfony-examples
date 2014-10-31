Drupal7-Symfony-examples
========================

![Motivation](http://intellectualcramps.files.wordpress.com/2010/04/chuckhappy2.png)

Example use cases of Symfony components in Drupal 7.

# Install
```
$ composer update
$ drush en d7sy_class_loader d7sy_di d7sy_event d7sy_finder d7sy_stopwatch d7sy_yaml -y
```


PSR-4 class loader
------------------

*Use: file (class) organization, project level*

Class loader helps you to use your classes without using custom prefixes or loading them or defining them individually in info files. Makes the code cleaner, class names more obvious and being able to use PSR-4 (current industry standard).

In the example module you can see defining the namespace prefix. Note, that in this module we define them manually. In general it happens through Composer, however composer might not be available at some environments.

- http://www.php-fig.org/psr/psr-4/
- http://symfony.com/doc/current/components/class_loader/psr4_class_loader.html


Depencency injection
--------------------

*Use: file (class) organization, project level*

The DI layer helps you to create clean architecture for your project by eliminating hardcoded service dependencies and providing and easy instance creation.

In the example we define couple of services in the configuration yaml file, and use them from the module. The service container will access the defined services. Ideally there is one global container. For safer type casting there are often helper methods returning one service.

- http://symfony.com/doc/current/components/dependency_injection/introduction.html
- http://en.wikipedia.org/wiki/Dependency_injection


YAML
----

*Use: feature level configuration loading*

YAML is a file format, convenient for storing structured data which can be often configuration. The component allows you to load and handle them easily.

In the example we store a resume form configuration, and the module builds a form out of it. The module also looks for a local override (if there is any).

- http://symfony.com/doc/current/components/yaml/introduction.html
- http://en.wikipedia.org/wiki/YAML


Event dispatcher
----------------

*Use: any level of event distribution*

Event dispatcher is similar to drupal_alter and hook system - however it gives a little bit of extra control over it.

The module contains a form which creates an event on submit. There are some event handlers subscribed to the event - for example a logger that logs the event - so application logic can be separated, - and one to alter the email address to avoid spamming if it's presented.

- http://symfony.com/doc/current/components/event_dispatcher/introduction.html
- http://en.wikipedia.org/wiki/Observer_pattern


Stopwatch
---------

*Use: debugging or profiling code*

Stopwatch is a very simple profiler, measuring time and memory allocation.

In the example we just do some fake action to mimic resource intense computation and present the results.

- http://symfony.com/doc/current/components/stopwatch.html

Finder
------

*Use: locating files, for example for migration*

Finder is a very clever and easy to use file locator tool.

In the example we look for some css/js files in several folders.

- http://symfony.com/doc/current/components/finder.html
