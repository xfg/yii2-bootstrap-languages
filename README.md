Yii2 bootstrap-language
=======================
The _Languages for Bootstrap 3_ project provides a simple way to present
language labels and names in a _Bootstrap 3_ project.

Head over to the [documentation](http://usrz.github.io/bootstrap-languages)
pages for some hint on how languages are presented, and how to use this library.

This project is distributed under the terms of the
[Apache Software License, Version 2](LICENSE.md).

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist xfg/yii2-bootstrap-language "*"
```

or add

```
"xfg/yii2-bootstrap-language": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \xfg\bootstrapLanguage\AutoloadExample::widget(); ?>```