<?php
/**
 * @author fabioluciano
 *
 */
namespace Microdata\Writter;

/**
 * @author fabioluciano
 *
 */
abstract class AbstractFactoryWritter {
    
    /**
     * @var integer
     */
    const OUTPUT_FORMAT_HTML = 1;
    
    /**
     * @var integer
     */
    const OUTPUT_FORMAT_RDF = 2;
    
    /**
     * @var integer
     */
    const OUTPUT_FORMAT_JSON = 3;
    
}