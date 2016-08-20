<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 22:07
     */

    namespace OpenLibrary\Metadata\Schemas\DCTerms\Properties;

    use OpenLibrary\Metadata\Schemas\DCTerms\Property;

    class LicenseDocument extends Property {

        protected $uri = "License Document";

        protected $label = "License";

        protected $name = "LicenseDocument";//becomes dc.contributor

        public function __construct($value,$label = false){
            if(!$label){
                $label = $this->label;
            }
            parent::__construct($value,$this->uri,$this->name,$label);
        }
    }
