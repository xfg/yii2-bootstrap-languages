Yii2 bootstrap-languages
=======================
Yii2-extension for [bootstrap-languages](https://github.com/xfg/bootstrap-languages)

This project is distributed under the terms of the
[Apache Software License, Version 2](LICENSE.md).

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist xfg/yii2-bootstrap-languages "*"
```

or add

```
"xfg/yii2-bootstrap-languages": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```
<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace app\assets;
use yii\web\AssetBundle;
/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        __'xfg\bootstrapLanguages\BootstrapLanguagesAsset'__,
    ];
}
```
