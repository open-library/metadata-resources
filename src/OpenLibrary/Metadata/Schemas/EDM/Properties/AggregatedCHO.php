<?php

    namespace OpenLibrary\Metadata\Schemas\EDM\Properties;
    use OpenLibrary\Metadata\Schemas\EDM\Property;

    class AggregatedCHO extends Property
    {
        protected $uri = "aggregatedCHO";

        protected $label = "Digital Resource Original Record";

        protected $name = "aggregatedCHO";

        public function __construct($value,$label = false){
            if(!$label){
                $label = $this->label;
            }
            parent::__construct($value,$this->uri,$this->name,$label);
        }
    }
