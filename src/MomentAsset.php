<?php
/**
 * @link https://github.com/zhuravljov/yii2-datetime-widgets
 * @copyright Copyright (c) 2017 Roman Zhuravlev
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace zhuravljov\yii\widgets;

use yii\web\AssetBundle;

/**
 * Class MomentAsset
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 */
class MomentAsset extends AssetBundle
{
    public $sourcePath = '@bower/moment/min';
    public $js = [
        'moment-with-locales.min.js',
    ];
}