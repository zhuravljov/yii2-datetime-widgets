<?php

namespace zhuravljov\widgets;

use yii\web\AssetBundle;

/**
 * Class DateTimePickerAsset
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 */
class DateTimePickerAsset extends AssetBundle
{
    public $sourcePath = '@vendor/zhuravljov/yii2-datetimepicker-widget/assets';
	public $js = [
		'js/bootstrap-datetimepicker.js',
		'js/bootstrap-datetimepicker.i18n.js',
	];
	public $css = [
		'css/bootstrap-datetimepicker.css',
	];
	public $depends = [
        'yii\web\JqueryAsset',
		'yii\bootstrap\BootstrapAsset',
	];
}