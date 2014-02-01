<?php

namespace zhuravljov\widgets;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;

/**
 * Class DateRangePicker
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 */
class DateRangePicker extends InputWidget
{
	/**
	 * @var array the HTML attributes for the input tag.
	 */
	public $options = [];
	/**
	 * @var array options for daterangepicker
	 */
	public $clientOptions = [];

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
			echo Html::activeTextInput($this->model, $this->attribute, $this->options);
		} else {
			echo Html::textInput($this->name, $this->value, $this->options);
		}
		/** @var \yii\web\View $view */
		$view = $this->getView();
		DateRangePickerAsset::register($view);
		$id = $this->options['id'];
		$options = empty($this->clientOptions) ? '' : Json::encode($this->clientOptions);
		$view->registerJs("jQuery('#$id').daterangepicker($options);");
	}
}