<?php
/**
 * @link https://github.com/zhuravljov/yii2-datetime-widgets
 * @copyright Copyright (c) 2017 Roman Zhuravlev
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace zhuravljov\yii\widgets;

use yii\helpers\Json;

/**
 * Class DateTimePicker
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 */
class DateTimePicker extends DateWidget
{
    /**
     * @var array options for datetimepicker
     */
    public $clientOptions = [];
    /**
     * @var array events for datetimepicker
     */
    public $clientEvents = [];

    /**
     * @inheritdoc
     */
    protected function registerPlugin()
    {
        $asset = DateTimePickerAsset::register($this->view);
        if (isset($this->clientOptions['language'])) {
            $lang = $this->clientOptions['language'];
            $this->view->registerJsFile($asset->baseUrl . "/js/locales/bootstrap-datetimepicker.$lang.js", [
                'depends' => DateTimePickerAsset::class,
            ]);
        }

        $id = $this->options['id'];
        $options = empty($this->clientOptions) ? '' : Json::encode($this->clientOptions);
        $js = "jQuery('#$id').datetimepicker($options)";
        foreach ($this->clientEvents as $event => $handler) {
            $js .= ".on('$event', $handler)";
        }
        $this->view->registerJs($js . ';');
    }
}