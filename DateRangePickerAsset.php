<?php

namespace zhuravljov\widgets;

use yii\web\AssetBundle;

/**
 * Class DateRangePickerAsset
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 */
class DateRangePickerAsset extends AssetBundle
{
	public $sourcePath = '@vendor/zhuravljov/yii2-daterangepicker-widget/assets';
	public $js = [
		'js/daterangepicker.js'
	];
	public $css = [
		'css/daterangepicker-bs3.css',
	];
	public $depends = [
		'yii\web\JqueryAsset',
		'yii\bootstrap\BootstrapAsset',
		'zhuravljov\widgets\MomentAsset',
	];
}