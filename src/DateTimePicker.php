<?php

namespace zhuravljov\widgets;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * Class DateTimePicker
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 */
class DateTimePicker extends InputWidget
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
     * @var array options for datetimepicker
     */
    public $clientOptions = [];
    /**
     * @var array events for datetimepicker
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
        if ($this->hasModel()) {
            $input = Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            $input = Html::textInput($this->name, $this->value, $this->options);
        }
        echo strtr($this->template, ['{input}' => $input]);

        $view = $this->getView();
        DateTimePickerAsset::register($view);

        $id = $this->options['id'];
        $options = empty($this->clientOptions) ? '' : Json::encode($this->clientOptions);
        $js = "jQuery('#$id').datetimepicker($options)";
        foreach ($this->clientEvents as $event => $handler) {
            $js .= ".on('$event', $handler)";
        }
        $view->registerJs($js . ';');
    }
}