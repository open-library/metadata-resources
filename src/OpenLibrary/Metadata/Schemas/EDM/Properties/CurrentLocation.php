<?php

    namespace OpenLibrary\Metadata\Schemas\EDM\Properties;
    use OpenLibrary\Metadata\Schemas\EDM\Property;

    class CurrentLocation extends Property
    {
        protected $uri = "currentLocation";

        protected $label = "Current Location";

        protected $name = "currentLocation";

        public function __construct($value,$label = false){
            if(!$label){
                $label = $this->label;
            }
            parent::__construct($value,$this->uri,$this->name,$label);
        }
    }
