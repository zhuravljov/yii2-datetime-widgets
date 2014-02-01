<?php

namespace zhuravljov\widgets;

use yii\web\AssetBundle;

/**
 * Class MomentAsset
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 *
 * @see http://momentjs.com/
 */
class MomentAsset extends AssetBundle
{
	public $sourcePath = '@vendor/zhuravljov/yii2-daterangepicker-widget/assets';

	public function init()
	{
		parent::init();
		if (YII_DEBUG) {
			$this->js = ['js/moment/moment.js', 'js/moment/langs.js'];
		} else {
			$this->js = ['js/moment/moment-with-langs.min.js'];
		}
	}
}