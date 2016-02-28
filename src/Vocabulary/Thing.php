<?php

/**
 * This namespace will be used like "Thing" 
 */
namespace Microdata\Vocabulary;

use Microdata\DataType\Text\URL,
    Microdata\DataType\Text;

class Thing extends Vocabulary {
    protected static $properties = [
        'additionalType' => URL::class,
        'alternateName' => Text::class,
        'description' => Text::class,
        'image' => [
            URL::class,
            ImageObject::class,
        ],
        'mainEntityOfPage' => [
            URL::class,
            CreativeWork::class,
        ],
        'name' => Text::class,
        'potentialAction' => Action::class,
        'sameAs' => URL::class,
        'url' => URL::class,
    ];
}