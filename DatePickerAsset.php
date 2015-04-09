<?php

namespace zhuravljov\widgets;

use yii\web\AssetBundle;

/**
 * Class DatePickerAsset
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 *
 * @see https://github.com/eternicode/bootstrap-datepicker/tree/v1.4.0
 */
class DatePickerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/zhuravljov/yii2-datetime-widgets/assets';
    public $js = [
        'js/bootstrap-datepicker.js',
        'js/bootstrap-datepicker.i18n.js',
    ];
    public $css = [
        'css/bootstrap3-datepicker.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}