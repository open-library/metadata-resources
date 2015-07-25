<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace OpenLibrary\Metadata\Schemas\DC\Properties;

    use OpenLibrary\Metadata\Schemas\DC\Property;

    class Type extends Property
    {
        protected $uri = "http://purl.org/dc/elements/1.1/type";

        protected $label = "Type";

        protected $term = "type";//becomes dc.contributor

        public function __construct($value,$label = false){
            if(!$label){
                $label = $this->label;
            }
            parent::__construct($value,$this->uri,$this->term,$label);
        }
    }
