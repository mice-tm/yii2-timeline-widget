<?php

namespace micetm\timeline;


use yii\base\Model;

class LogModel extends Model
{

    public $action;
    public $title;
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
    
    public function getMacros()
    {
        return $this->macros;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getBody()
    {
        return $this->body;
    }
}
