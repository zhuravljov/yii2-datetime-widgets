<?php

namespace zhuravljov\widgets;

use yii\web\AssetBundle;

/**
 * Class DatePickerAsset
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 */
class DatePickerAsset extends AssetBundle
{
	public $sourcePath = '@vendor/zhuravljov/yii2-datepicker-widget/assets';
	public $js = [
		'js/bootstrap-datepicker.js',
		'js/bootstrap-datepicker.i18n.js',
	];
	public $css = [
		'css/datepicker3.css',
	];
	public $depends = [
        'yii\web\JqueryAsset',
		'yii\bootstrap\BootstrapAsset',
	];
}