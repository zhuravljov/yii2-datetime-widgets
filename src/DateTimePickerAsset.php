<?php
/**
 * @link https://github.com/zhuravljov/yii2-datetime-widgets
 * @copyright Copyright (c) 2017 Roman Zhuravlev
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace zhuravljov\yii\widgets;

use yii\bootstrap\BootstrapAsset;
use yii\web\AssetBundle;
use yii\web\JqueryAsset;

/**
 * Class DateTimePickerAsset
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 *
 * @see https://github.com/smalot/bootstrap-datetimepicker/blob/master/bower.json
 */
class DateTimePickerAsset extends AssetBundle
{
    public $sourcePath = '@bower/smalot-bootstrap-datetimepicker';
    public $js = [
        'js/bootstrap-datetimepicker.js',
    ];
    public $css = [
        'css/bootstrap-datetimepicker.css',
    ];
    public $depends = [
        JqueryAsset::class,
        BootstrapAsset::class,
    ];
}