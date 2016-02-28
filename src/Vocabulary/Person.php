<?php

namespace Microdata\Vocabulary;

use Microdata\DataType\Text;

class Person extends Thing {
    
    protected static $properties = [
        'additionalName' => Text::class,
        'address' => [
            Text::class,
            PostalAddress
        ],
        'affiliation' => Organization::class,
        'alumniOf' => EducationalOrganization::class,
        'award' => Text::class,
        'birthDate' => Date::class,
        'birthPlace' => Place::class,
        'brand' => [
            Brand::class,
            Organization::class
        ],
    ];
}