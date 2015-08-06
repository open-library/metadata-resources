<?php

    namespace OpenLibrary\Metadata\Schemas\DCTerms\Properties;
    use OpenLibrary\Metadata\Schemas\DCTerms\Property;

    /**
     * Class Created
     *
     * @package OpenLibrary\Metadata\Schemas\DCTerms\Properties
     */
    class Created extends Property
    {
        /**
         * @var string
         */
        protected $uri = "created";

        /**
         * @var string
         */
        protected $label = "Created";

        /**
         * @var string
         */
        protected $name = "created";//becomes dc.contributor

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
