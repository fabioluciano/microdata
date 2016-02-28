<?php
namespace Microdata\Vocabulary\Action\AchiveAction;

use Microdata\Vocabulary\Action\AchiveAction;

class LoseAction extends AchiveAction {
    
    protected static $properties = [
        'winner' => Person::class
    ];
}