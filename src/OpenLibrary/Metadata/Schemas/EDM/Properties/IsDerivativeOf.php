<?php

    namespace OpenLibrary\Metadata\Schemas\EDM\Properties;
    use OpenLibrary\Metadata\Schemas\EDM\Property;

    class IsDerivativeOf extends Property
    {
        protected $uri = "isDerivativeOf";

        protected $label = "Translation";

        protected $name = "isDerivativeOf";

        public function __construct($value,$label = false){
            if(!$label){
                $label = $this->label;
            }
            parent::__construct($value,$this->uri,$this->name,$label);
        }
    }
