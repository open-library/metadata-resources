<?php

    namespace OpenLibrary\Metadata\Schemas\DCTerms\Properties;
    use OpenLibrary\Metadata\Schemas\DCTerms\Property;

    /**
     * Class Coverage
     *
     * @package OpenLibrary\Metadata\Schemas\DCTerms\Properties
     */
    class Coverage extends Property
    {
        /**
         * @var string
         */
        protected $uri = "coverage";

        /**
         * @var string
         */
        protected $label = "Coverage";

        /**
         * @var string
         */
        protected $name = "coverage";//becomes dc.contributor

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function __construct($value,$label = false){
            if(!$label){
                $label = $this->label;
            }
            parent::__construct($value,$this->uri,$this->name,$label);
        }
    }
