<?php

    namespace OpenLibrary\Metadata\Schemas\DCTerms\Properties;

    use OpenLibrary\Metadata\Schemas\DCTerms\Property;

    /**
     * Class Extent
     *
     * @package OpenLibrary\Metadata\Schemas\DCTerms\Properties
     */
    class Extent extends Property
    {
        /**
         * @var string
         */
        protected $uri = "extent";

        /**
         * @var string
         */
        protected $label = "Extent";

        /**
         * @var string
         */
        protected $name = "extent";//becomes dc.contributor

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
