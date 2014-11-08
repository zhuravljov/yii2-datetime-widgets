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
    public $sourcePath = '@vendor/bower/moment';

    public function init()
    {
        parent::init();
        if (YII_DEBUG) {
            $this->js = ['moment.js', 'min/locales.js'];
        } else {
            $this->js = ['min/moment-with-locales.min.js'];
        }
    }
}