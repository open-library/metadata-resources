<?php

    namespace OpenLibrary\Metadata\Schemas\EDM\Properties;
    use OpenLibrary\Metadata\Schemas\EDM\Property;

    class HasView extends Property
    {
        protected $uri = "hasView";

        protected $label = "Has View";

        protected $name = "hasView";//becomes dc.contributor

        public function __construct($value,$label = false){
            if(!$label){
                $label = $this->label;
            }
            parent::__construct($value,$this->uri,$this->name,$label);
        }
    }
