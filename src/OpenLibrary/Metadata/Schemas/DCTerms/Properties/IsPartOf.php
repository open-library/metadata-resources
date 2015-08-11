<?php

    namespace OpenLibrary\Metadata\Schemas\DCTerms\Properties;

    use OpenLibrary\Metadata\Schemas\DCTerms\Property;

    /**
     * Class Date
     *
     */
    class IsPartOf extends Property
    {
        /**
         * @var string
         */
        protected $uri = "isPartOf";

        /**
         * @var string
         */
        protected $label = "IsPartOf";

        /**
         * @var string
         */
        protected $name = "isPartOf";//becomes dc.contributor

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
