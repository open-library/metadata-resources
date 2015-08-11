<?php

    namespace OpenLibrary\Metadata\Schemas\DCTerms\Properties;

    use OpenLibrary\Metadata\Schemas\DCTerms\Property;

    /**
     * Class Available
     *
     */
    class Available extends Property
    {
        /**
         * @var string
         */
        protected $uri = "available";

        /**
         * @var string
         */
        protected $label = "Available";

        /**
         * @var string
         */
        protected $name = "available";//becomes dc.contributor

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
