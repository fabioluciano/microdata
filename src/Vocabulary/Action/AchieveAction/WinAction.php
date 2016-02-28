<?php
namespace Microdata\Vocabulary\Action\AchiveAction;

use Microdata\Vocabulary\Action\AchiveAction;

class WinAction extends AchiveAction {
    
    protected static $properties = [
        'loser' => Person::class
    ];
}