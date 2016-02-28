<?php

namespace Microdata\Vocabulary\Action\ChooseAction;

use Microdata\Vocabulary\Action\AssessAction\ChooseAction;

class VoteAction extends ChooseAction {
    protected static $properties = [
        'candidate' => Person::class
    ];
}