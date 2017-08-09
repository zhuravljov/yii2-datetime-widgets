Datetime widgets for Yii2
=========================

[![Latest Stable Version](https://poser.pugx.org/zhuravljov/yii2-datetime-widgets/version.svg)](https://packagist.org/packages/zhuravljov/yii2-datetime-widgets)
[![Total Downloads](https://poser.pugx.org/zhuravljov/yii2-datetime-widgets/downloads.png)](https://packagist.org/packages/zhuravljov/yii2-datetime-widgets)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Add

```
"zhuravljov/yii2-datetime-widgets" : "~1.1.0"
```

to the require section of your application's `composer.json` file.

DatePicker
----------

[Demo](https://uxsolutions.github.io/bootstrap-datepicker) from the bootstrap-datepicker plugin website.

### Usage

```php
<?= $form->field($model, 'attribute')->widget(DatePicker::class, [
    'clientOptions' => [
        'format' => 'dd.mm.yyyy',
        'language' => 'ru',
        'autoclose' => true,
        'todayHighlight' => true,
    ],
    'clientEvents' => [],
]) ?>
```

DateTimePicker
--------------

[Demo](http://www.malot.fr/bootstrap-datetimepicker/demo.php) from the bootstrap-datetimepicker plugin website.


### Usage

```php
<?= $form->field($model, 'attribute')->widget(DateTimePicker::class, [
    'clientOptions' => [
        'format' => 'dd.mm.yyyy hh:ii',
        'language' => 'ru',
        'autoclose' => true,
    ],
    'clientEvents' => [],
]) ?>
```

DateRangePicker
---------------

[Demo](http://www.daterangepicker.com) from the bootstrap-daterangepicker plugin website.

### Usage

```php
<?= $form->field($model, 'actual_time')->widget(DateRangePicker::class, [
    'clientOptions' => [
        'locale' => [
            'format' => 'YYYY-MM-DD',
            'separator' => ' - ',
        ],
        'ranges' => [
            'Today' => [
                new JsExpression('moment()'),
                new JsExpression('moment()'),
            ],
            'Yesterday' => [
                new JsExpression('moment().subtract(1, "days")'),
                new JsExpression('moment().subtract(1, "days")'),
            ],
        ],
    ],
    'clientEvents' => [],
]) ?>
```
