SentryBundle for Symfony2 [![Build Status](https://secure.travis-ci.org/Kunstmaan/KunstmaanSentryBundle.png?branch=master)](http://travis-ci.org/Kunstmaan/KunstmaanSentryBundle)
================================

This helps binds the [raven-php module](https://github.com/getsentry/raven-php) into a Symfony2 bundle for easy use with the framework. It will autoload an exception handler into the framework, so that all uncaught errors are sent to a [Sentry server](https://www.getsentry.com).

*Important*: This bundle is heavily inspired by [Drew Butler](https://github.com/nodrew)'s Airbrake bundle.

Installation requirements
-------------------------
You should be able to get Symfony 2.1 up and running before you can install the KunstmaanAdminBundle.

Installation instructions
-------------------------
Assuming you have installed composer.phar or composer binary:

``` bash
$ composer require kunstmaan/sentry-bundle
```

Add the KunstmaanSentryBundle to your AppKernel.php file:

```
new Kunstmaan\SentryBundle\KunstmaanSentryBundle(),
```

Configuration
-------------------------

Add the followings lines to your `config.yml` file

```yml
kunstmaan_sentry:
    enable: true
    dsn: %sentry_dsn%
```

You can disable the logging by setting enable to false
