<?php

namespace zhuravljov\widgets;

use yii\web\AssetBundle;

/**
 * Class DateTimePickerAsset
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 *
 * @see https://github.com/smalot/bootstrap-datetimepicker/tree/2.3.4
 */
class DateTimePickerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/zhuravljov/yii2-datetime-widgets/assets';
    public $js = [
        'js/bootstrap-datetimepicker.js',
        'js/bootstrap-datetimepicker.i18n.js',
    ];
    public $css = [
        'css/bootstrap3-datetimepicker.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}