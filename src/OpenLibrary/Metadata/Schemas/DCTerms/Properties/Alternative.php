<?php

    namespace OpenLibrary\Metadata\Schemas\DCTerms\Properties;

    use OpenLibrary\Metadata\Schemas\DCTerms\Property;

    /**
     * Class Alternative
     *
     */
    class Alternative extends Property
    {
        /**
         * @var string
         */
        protected $uri = "alternative";

        /**
         * @var string
         */
        protected $label = "Alternative";

        /**
         * @var string
         */
        protected $name = "alternative";//becomes dc.contributor

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
