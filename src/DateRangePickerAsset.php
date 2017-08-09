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
 * Class DateRangePickerAsset
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 *
 * @see https://github.com/dangrossman/bootstrap-daterangepicker
 */
class DateRangePickerAsset extends AssetBundle
{
    public $sourcePath = '@bower/bootstrap-daterangepicker';
    public $js = [
        'daterangepicker.js',
    ];
    public $css = [
        'daterangepicker.css',
    ];
    public $depends = [
        JqueryAsset::class,
        BootstrapAsset::class,
        MomentAsset::class,
    ];
}