<?php

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
        'moment.js',
        'daterangepicker.js',
    ];
    public $css = [
        'daterangepicker.css',
    ];
    public $depends = [
        JqueryAsset::class,
        BootstrapAsset::class,
    ];
}