Yii2 TimeLine Widget
====================

[![Latest Version](https://img.shields.io/github/tag/mice-tm/yii2-timeline-widget.svg?style=flat-square&label=release)](https://github.com/mice-tm/yii2-timeline-widget/releases)
[![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
[![Dependency Status](https://www.versioneye.com/user/projects/5a2025600fb24f0018f8c517/badge.svg?style=flat-square)](https://www.versioneye.com/user/projects/5a2025600fb24f0018f8c517)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/mice-tm/yii2-timeline-widget/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/mice-tm/yii2-timeline-widget/?branch=master)
[![Build Status](https://scrutinizer-ci.com/g/mice-tm/yii2-timeline-widget/badges/build.png?b=master)](https://scrutinizer-ci.com/g/mice-tm/yii2-timeline-widget/build-status/master)
[![Total Downloads](https://img.shields.io/packagist/dt/mice-tm/yii2-timeline-widget.svg?style=flat-square)](https://packagist.org/packages/mice-tm/yii2-timeline-widget)


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist mice-tm/yii2-timeline-widget "*"
```

or add

```
"mice-tm/yii2-timeline-widget": "*"
```

to the require section of your `composer.json` file.


Usage
-----
Timeline widget expects array of LogModel-like models (micetm\timeline\LogModel) in `items`-param.
Where `title` and `body` can contain macros strings in yii macros-format `{here-is-macros}`.
With `eventIcons`-param you can extend or reassign icons for actions. 
 
```php
class LogModel extends Model
{

    public $action;
    public $title,
    public $body;
    public $log_date;
    public $macros;
    public $_id;
    
    public function rules()
    {
        return [
            [['action', 'title'], 'required'],
            [['action', 'title', 'body'], 'string'],
            ['log_date', 'integer'],
            ['macros', 'safe']
        ];
    }

    public function attributes()
    {
        return [
            '_id',
            'action',
            'title',
            'body',
            'macros',
            'log_date',
        ];
    }
    
    public function attributeLabels()
    {
        return [
            '_id' => '#',
            'action' => 'Action',
            'macros' => 'Macros',
            'title' => 'Title',
            'body' => 'Body',
            'log_date' => 'Date',
        ];
    }
}
```

Once the extension is installed, simply use it in your code by  :

```php
<?php
use micetm\timeline\Timeline;

/**
 * @var $dataProvider \yii\data\ActiveDataProvider
 */

echo Timeline::widget([
    'items' => $dataProvider->getModels(),
    'eventIcons' => [
        'update' => 'fa fa-pencil bg-orange',
        'add' => 'fa fa-pencil bg-orange',
        'create' => 'glyphicon glyphicon-star bg-green',
    ]
]); ?>

```
