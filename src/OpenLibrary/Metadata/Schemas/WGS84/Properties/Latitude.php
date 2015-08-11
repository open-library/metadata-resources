<?php

    namespace OpenLibrary\Metadata\Schemas\WGS84\Properties;
    use OpenLibrary\Metadata\Schemas\WGS84\Property;

    class Latitude extends Property
    {
        protected $uri = "lat";

        protected $label = "Latitude";

        protected $name = "lat";//becomes dc.contributor

        public function __construct($value,$label = false){
            if(!$label){
                $label = $this->label;
            }
            parent::__construct($value,$this->uri,$this->name,$label);
        }
    }
