<?php
/**
 * @link https://github.com/zhuravljov/yii2-datetime-widgets
 * @copyright Copyright (c) 2017 Roman Zhuravlev
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace zhuravljov\yii\widgets;

use yii\helpers\Json;

/**
 * Class DatePicker
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 */
class DatePicker extends DateWidget
{
    /**
     * @var array options for datepicker
     */
    public $clientOptions = [];
    /**
     * @var array events for datepicker
     */
    public $clientEvents = [];

    /**
     * @inheritdoc
     */
    protected function registerPlugin()
    {
        $asset = DatePickerAsset::register($this->view);
        if (isset($this->clientOptions['language'])) {
            $lang = $this->clientOptions['language'];
            $this->view->registerJsFile($asset->baseUrl . "/locales/bootstrap-datepicker.$lang.min.js", [
                'depends' => DatePickerAsset::class,
            ]);
        }

        $id = $this->options['id'];
        $options = empty($this->clientOptions) ? '' : Json::encode($this->clientOptions);
        $js = "jQuery('#$id').datepicker($options)";
        foreach ($this->clientEvents as $event => $handler) {
            $js .= ".on('$event', $handler)";
        }
        $this->view->registerJs($js . ';');
    }
}