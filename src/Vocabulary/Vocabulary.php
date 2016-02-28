<?php

namespace Microdata\Vocabulary;

use Microdata\Microdata;
use Microdata\Vocabulary\VocabularyInterface;

abstract class Vocabulary implements VocabularyInterface {
    protected static $properties;

    public static function getAllProperties() {
        $scoped_class = isset($this) ? get_class() : get_called_class();
        $parents = class_parents($scoped_class);
        $properties = $scoped_class::getProperties();
        array_pop($parents);
        
        foreach($parents as $parent) {
            $properties =  array_merge($properties, $parent::getProperties());

        }
        
        ksort($properties);
        
        return $properties;
    }
    
    protected static function getProperties() {
        return static::$properties;
    }
    
    public function __set($property, $value) {
        // TODO Switch between STRICT AND NON_STRICT constants
        $scoped_class = isset($this) ? get_class() : get_called_class();
        
        var_dump($scoped_class::$properties);
        
//         if(in_array($property, array_keys($scoped_class->properties))) {
            
//         }
            
    }
    
    public function __get($property) {
    
    }
}