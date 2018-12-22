## CodeIgniter 3 benchmark prep for phpbenchmarks.com

This project provides the sample benchmark features described on
http://www.phpbenchmarks.com/en/participate/create-framework-benchmarks.html

This readme identified the components made to address the above.

### Installation

Configure Apache to use the **public** folder inside this project
as the webapp document root.

### Defaults

This project is based off of [codeigniter3/starter3.1](https://packagist.org/packages/codeigniter3/starter3.1)

If this project is installed into the folder `codeigniter-common`, and
if you have configured a local domain `testbed.local`, pointing to
`codeigniter-common/public`, then the URL `http://testbed.local`
will result in the default CI3 welcome page.

A simple page has been provided to make easier to checkout the
different benchmark features: `http://testbed.local/welcome/bench`,
following the same convention above.

## Hello World

Displays the text "Hello World"

Components:

- controller at `application/controllers/benchmark/Helloworld.php`.
- routing at `application/config/routes.php`

Usage:

- direct access as `http://testbed.local/benchmark/helloworld`
- routed access as `http://testbed.local/benchmark/hello-world`

## REST API

Displays an array of users retrieved from the benchmark data service.

I consider this only vaguely RESTish, as it only handles a GET,
for all data in the resource, and returns them in JSON format.

Components:

- `application/config/config.php` - composer autoload enabled, line 139
- `application/controllers/benchmark/rest.php`
- `application/models/ShadowComment.php` - User with serialization
- `application/models/ShadowCommentType.php` - Comment with serialization
- `application/models/ShadowUser.php` - CommentType with serialization
- `application/models/Users.php` - User collection, serializable

Usage:

- direct access as `http://testbed.local/benchmark/rest`

## FEATURES

Foo and Bar entities, with validation; 3 translations, with localization;
2 event listeners, 2 routes, 2 services; and a module.

The "foo" route shows a session key, a templated view of the "foo" entities,
the users data in JSON format, and a templated and localized calendar.

Components:


Usage:

- `http://benchmark/foo` invokes the first route