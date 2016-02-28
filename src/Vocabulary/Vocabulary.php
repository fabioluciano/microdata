<?php
/**
 * @author fabioluciano
 *
 */
namespace Microdata\Vocabulary;

use Microdata\Microdata;
use Microdata\Vocabulary\VocabularyInterface;

abstract class Vocabulary implements VocabularyInterface
{

    protected static $properties;
    
    /**
     * 
     */
    public static function getAllProperties()
    {
        $scoped_class = isset($this) ? get_class() : get_called_class();
        $parents = class_parents($scoped_class);
        $properties = $scoped_class::getProperties();
        array_pop($parents);
        
        foreach ($parents as $parent) {
            $properties = array_merge($properties, $parent::getProperties());
        }
        
        ksort($properties);
        
        return $properties;
    }
    
    /**
     * This method returns a 
     * 
     * @param string $property The property to return
     */
    protected static function getProperties($property = null)
    {
        if(! is_null($property)) {
            if (! in_array($property, static::$properties)) {
                throw OutOfBoundsException('The property is not defined');
            }
            
            return self::$properties[$property];
        }
        
        return static::$properties;
    }
}