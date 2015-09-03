<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace OpenLibrary\Metadata\Schemas\VIVO\Properties;

    use OpenLibrary\Metadata\Schemas\VIVO\Property;

    class RelatedDegree extends Property
    {
        public function __construct($value,$label = 'Related Degree'){
            parent::__construct($value,'relatedDegree','relatedDegree',$label);
        }
    }
