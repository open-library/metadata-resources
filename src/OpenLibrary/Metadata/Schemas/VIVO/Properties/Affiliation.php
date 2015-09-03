<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace OpenLibrary\Metadata\Schemas\VIVO\Properties;

    use OpenLibrary\Metadata\Schemas\VIVO\Property;

    class Affiliation extends Property
    {
        public function __construct($value,$label = 'Affiliation'){
            parent::__construct($value,'departmentOfSchool','departmentOfSchool',$label);
        }
    }
