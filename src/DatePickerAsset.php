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
 * Class DatePickerAsset
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 *
 * @see https://github.com/uxsolutions/bootstrap-datepicker/blob/master/bower.json
 */
class DatePickerAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-datepicker/dist';
    public $js = [
        'js/bootstrap-datepicker.js',
    ];
    public $css = [
        'css/bootstrap-datepicker3.css',
    ];
    public $depends = [
        JqueryAsset::class,
        BootstrapAsset::class,
    ];
}