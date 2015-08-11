<?php

    namespace OpenLibrary\Metadata\Schemas\DCTerms\Properties;
    use OpenLibrary\Metadata\Schemas\DCTerms\Property;

    /**
     * Class Creator
     *
     */
    class Creator extends Property
    {
        /**
         * @var string
         */
        protected $uri = "creator";

        /**
         * @var string
         */
        protected $label = "Creator";

        /**
         * @var string
         */
        protected $name = "creator";//becomes dc.contributor

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
