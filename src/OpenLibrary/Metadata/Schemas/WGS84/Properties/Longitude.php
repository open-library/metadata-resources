<?php

    namespace OpenLibrary\Metadata\Schemas\WGS84\Properties;
    use OpenLibrary\Metadata\Schemas\WGS84\Property;

    class Longitude extends Property
    {
        protected $uri = "long";

        protected $label = "Longitude";

        protected $name = "long";//becomes dc.contributor

        public function __construct($value,$label = false){
            if(!$label){
                $label = $this->label;
            }
            parent::__construct($value,$this->uri,$this->name,$label);
        }
    }
