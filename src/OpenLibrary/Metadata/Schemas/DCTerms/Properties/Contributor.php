<?php

    namespace OpenLibrary\Metadata\Schemas\DCTerms\Properties;

    use OpenLibrary\Metadata\Schemas\DCTerms\Property;

    /**
     * Class Contributor
     *
     * @package OpenLibrary\Metadata\Schemas\DCTerms\Properties
     */
    class Contributor extends Property
    {
        /**
         * @var string
         */
        protected $uri = "contributor";

        /**
         * @var string
         */
        protected $label = "Contributor";

        /**
         * @var string
         */
        protected $name = "contributor";//becomes dc.contributor

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
