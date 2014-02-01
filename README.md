Datetime widgets for Yii2
=========================

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Add

```
"zhuravljov/yii2-datetime-widgets" : "dev-master"
```

to the require section of your application's `composer.json` file.

DatePicker
----------

### Usage

```php
use zhuravljov\widgets\DatePicker;
```

```php
<?= $form->field($model, 'attribute')->widget(DatePicker::className(), [
    'options' => ['class' => 'form-control'],
    'clientOptions' => [
        'format' => 'dd.mm.yyyy',
        'language' => 'ru',
        'autoclose' => true,
        'todayHighlight' => true,
    ],
]) ?>
```

DateTimePicker
--------------

### Usage

```php
use zhuravljov\widgets\DateTimePicker;
```

```php
<?= $form->field($model, 'attribute')->widget(DateTimePicker::className(), [
    'options' => ['class' => 'form-control'],
    'clientOptions' => [
        'format' => 'dd.mm.yyyy hh:ii',
        'language' => 'ru',
        'autoclose' => true,
    ],
]) ?>
```

DateRangePicker
---------------

### Usage

```php
use zhuravljov\widgets\DateRangePicker;
```

```php
<?= $form->field($model, 'actual_time')->widget(DateRangePicker::className(), [
    'options' => ['class' => 'form-control','autocomplete' => 'off'],
    'clientOptions' => [
        'ranges' => [
            'Today' => [
                new JsExpression('moment()'),
                new JsExpression('moment()'),
            ],
            'Yesterday' => [
                new JsExpression('moment().subtract("days", 1)'),
                new JsExpression('moment().subtract("days", 1)'),
            ],
        ],
        'format' => 'DD.MM.YYYY',
        'separator' => ' - ',
    ],
]) ?>
```
