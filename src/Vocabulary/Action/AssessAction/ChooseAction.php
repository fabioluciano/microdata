<?php

namespace Microdata\Vocabulary\Action\AssessAction;

use Microdata\Vocabulary\Action\AssessAction;
use Microdata\DataType\Text;
use Microdata\Vocabulary\Thing;

class ChooseAction extends AssessAction{
    
    protected static $properties = [
        'actionOption' => [
            Text::class,
            Thing::class
        ]
    ];
}