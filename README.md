UserRbac
========

A Zend Framework 2 module to easily integrate [ZfcUser](https://github.com/ZF-Commons/ZfcUser) and [ZfcRbac](https://github.com/ZF-Commons/zfc-rbac)

Are your tired of doing tedious work of integrating ZfcUser and ZfcRbac again and again? Then, you are in the right place. This module comes to save us. This module, simply, gets roles of a user from the database and passes it to the ZfcRbac. You only need to focus on the domain logic of your application. No more repetive tasks.

## Storage Adapter Modules
By default, UserRbac ships with support for using Zend\Db. However, by installing an optional alternative storage adapter module, you can take advantage of other methods:
* [OjUserRbacDoctrineORM](https://github.com/ojhaujjwal/OjUserRbacDoctrineORM) - Doctrine2 ORM

## Features
1. No need to write code for integrating ZfcUser and ZfcRbac
2. A user`s roles are easily retrievable from the database
3. Addition of `SmartRedirectStrategy`

## Installation
* Add `"ujjwal/user-rbac": "0.0.*",` to your composer.json and run `php composer.phar update`
* Import the schema in `data/mysql.sql`
* Enable this module in `config/application.config.php`
* Copy file located in `vendor/ujjwal/user-rbac/config/user-rbac.global.php` to `./config/autoload/user-rbac.global.php` and change the values as you wish
 

## How it works
It gets a user's roles from the table `user_role_linker` and passes the roles to `ZfcRbac`. This module is best suited when you use `ZfcRbac\Role\InMemoryRoleProvider` as role provider.

## Options
Check the options available in `vendor/ujjwal/user-rbac/config/user-rbac.global.php`. 

## SmartRedirectStrategy

This module comes with a new strategy called `SmartRedirectStrategy`. This simply redirects to `ZfcUser`'s login page or route, `zfcuser/login` only when the user is unauthenticated. Otherwise, it shows a 403 error page!

#### Usage
```php
public function onBootstrap(EventInterface $e)
{
    $t = $e->getTarget();

    $t->getEventManager()->attach(
        $t->getServiceManager()->get('UserRbac\View\Strategy\SmartRedirectStrategy')
    );
}
```

## Known Limitation
This module is only ideal for small and meduim web sites as a quick and easy way. For complicated use cases, it may not suit your need.


[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/ojhaujjwal/userrbac/trend.png)](https://bitdeli.com/free "Bitdeli Badge")

