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
    public $sourcePath = '@vendor/zhuravljov/yii2-datetime-widgets/assets';

    public function init()
    {
        parent::init();
        if (YII_DEBUG) {
            $this->js = ['js/moment.js', 'js/moment.langs.js'];
        } else {
            $this->js = ['js/moment-with-langs.min.js'];
        }
    }
}