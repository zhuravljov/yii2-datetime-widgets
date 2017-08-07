<?php
/**
 * @link https://github.com/zhuravljov/yii2-datetime-widgets
 * @copyright Copyright (c) 2017 Roman Zhuravlev
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace zhuravljov\yii\widgets;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * Class DatePicker
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 */
class DatePicker extends InputWidget
{
    /**
     * @var string the template to render the input
     */
    public $template = '{input}';
    /**
     * @var array the HTML attributes for the input tag.
     */
    public $options = [
        'class' => 'form-control',
        'autocomplete' => 'off',
    ];
    /**
     * @var array options for datepicker
     */
    public $clientOptions = [];
    /**
     * @var array events for datepicker
     */
    public $clientEvents = [];

    public function init()
    {
        parent::init();
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->hasModel() ? Html::getInputId($this->model, $this->attribute) : $this->getId();
        }
    }

    public function run()
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

        return strtr($this->template, [
            '{input}' => $this->hasModel()
                ? Html::activeTextInput($this->model, $this->attribute, $this->options)
                : Html::textInput($this->name, $this->value, $this->options),
        ]);
    }
}