<?php

namespace zhuravljov\yii\widgets;

use yii\web\AssetBundle;

/**
 * Class DateRangePickerAsset
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 *
 * @see https://github.com/dangrossman/bootstrap-daterangepicker/tree/v1.3.21
 */
class DateRangePickerAsset extends AssetBundle
{
    public $sourcePath = '@zhuravljov/yii/widgets/assets';
    public $js = [
        'js/bootstrap-daterangepicker.js'
    ];
    public $css = [
        'css/bootstrap3-daterangepicker.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'zhuravljov\yii\widgets\MomentAsset',
    ];
}