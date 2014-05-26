Yii2 users module.
==================
This module provide an RBAC managing system for your yii2 application.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist vova07/yii2-rbac-module "*"
```

or add

```
"vova07/yii2-rbac-module": "*"
```

to the require section of your `composer.json` file.

Configuration
-------------

Edit `authManager` component in your application config file:

```php
'authManager' => [
    'class' => 'yii\rbac\PhpManager',
    'defaultRoles' => [
        'user',
        'admin',
        'superadmin'
    ],
    'authFile' => '@vova07/rbac/data/rbac.php'
]
```

Add new filed `role` to your `users` table.

Usage
-----

Once the extension is installed, simply use it in your code by:

```php
Yii::$app->user->can('admin');
```

Info
----

By default `RBAC` module provide 3 defaults roles: `user`, `admin` and `superadmin`.

You can add more roles by creating your own `rbac.php` file.