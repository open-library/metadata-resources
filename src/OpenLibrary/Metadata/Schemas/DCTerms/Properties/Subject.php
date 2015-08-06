<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace OpenLibrary\Metadata\Schemas\DCTerms\Properties;

    use OpenLibrary\Metadata\Schemas\DCTerms\Property;

    class Subject extends Property
    {
        protected $uri = "subject";

        protected $label = "Subject";

        protected $name = "subject";//becomes dc.contributor

        public function __construct($value,$label = false){
            if(!$label){
                $label = $this->label;
            }
            parent::__construct($value,$this->uri,$this->name,$label);
        }
    }
