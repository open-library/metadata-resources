<?php

    namespace OpenLibrary\Metadata\Schemas\EDM\Properties;
    use OpenLibrary\Metadata\Schemas\EDM\Property;

    class HasType extends Property
    {
        protected $uri = "hasType";

        protected $label = "Has Type";

        protected $name = "hasType";

        public function __construct($value,$label = false){
            if(!$label){
                $label = $this->label;
            }
            parent::__construct($value,$this->uri,$this->name,$label);
        }
    }
