<?php
/**
 * @link https://github.com/zhuravljov/yii2-datetime-widgets
 * @copyright Copyright (c) 2017 Roman Zhuravlev
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace zhuravljov\yii\widgets;

use yii\helpers\Json;

/**
 * Class DateRangePicker
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 */
class DateRangePicker extends DateWidget
{
    /**
     * @var array options for js plugin
     */
    public $clientOptions = [];
    /**
     * @var array events for js plugin
     */
    public $clientEvents = [];

    /**
     * @inheritdoc
     */
    protected function registerPlugin()
    {
        DateRangePickerAsset::register($this->view);

        $id = $this->options['id'];
        $options = empty($this->clientOptions) ? '' : Json::encode($this->clientOptions);
        $js = "jQuery('#$id').daterangepicker($options)";
        foreach ($this->clientEvents as $event => $handler) {
            $js .= ".on('$event', $handler)";
        }
        $this->view->registerJs($js . ';');
    }
}