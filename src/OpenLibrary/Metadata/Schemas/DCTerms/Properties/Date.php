<?php

    namespace OpenLibrary\Metadata\Schemas\DCTerms\Properties;

    use OpenLibrary\Metadata\Schemas\DCTerms\Property;

    /**
     * Class Date
     *
     */
    class Date extends Property
    {
        /**
         * @var string
         */
        protected $uri = "date";

        /**
         * @var string
         */
        protected $label = "Date";

        /**
         * @var string
         */
        protected $name = "date";//becomes dc.contributor

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
