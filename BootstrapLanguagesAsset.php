<?php
/**
 * @link https://github.com/xfg/yii2-bootstrap-languages
 * @license https://github.com/xfg/yii2-bootstrap-languages/blob/master/README.md
 */

namespace xfg\bootstrapLanguages;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter bootstrap languages css files.
 *
 * @author Timofey Suchkov <timofey.web@gmail.com>
 */
class BootstrapLanguagesAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-lang';
    public $css = [
        'languages.css',
    ];
}
