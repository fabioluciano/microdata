<?php
namespace Microdata\Vocabulary;

use Microdata\DataType\DateTime;
use Microdata\DataType\Text;


class Action extends Thing {
    protected static $properties = [
        'actionStatus' => ActionStatusType::class,
        'agent' => [
            Person::class,
            Organization::class
        ],
        'endTime' => DateTime::class,
        'error' => Thing::class,
        'instrument' => Thing::class,
        'location' => [
            Text::class,
            PostalAddress::class,
            Place::class
        ],
        'object' => Thing::class,
        'participant' => [
            Person::class,
            Organization::class
        ],
        'result' => Thing::class,
        'startTime' => DateTime::class,
        'target' => EntryPoint::class
        
    ];
}