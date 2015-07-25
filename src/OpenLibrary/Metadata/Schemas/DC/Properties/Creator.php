<?php

    namespace OpenLibrary\Metadata\Schemas\DC\Properties;
    use OpenLibrary\Metadata\Schemas\DC\Property;

    class Creator extends Property
    {
        protected $uri = "http://purl.org/dc/elements/1.1/creator";

        protected $label = "Creator";

        protected $term = "creator";//becomes dc.contributor

        public function __construct($value,$label = false){
            if(!$label){
                $label = $this->label;
            }
            parent::__construct($value,$this->uri,$this->term,$label);
        }
    }
