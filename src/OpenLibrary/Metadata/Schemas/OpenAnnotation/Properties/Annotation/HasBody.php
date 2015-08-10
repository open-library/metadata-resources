<?php

    namespace OpenLibrary\Metadata\Schemas\OpenAnnotation\Properties\Annotation;

    use OpenLibrary\Metadata\Schemas\OpenAnnotation\Property;

    /**
     * Class HasBody
     *
     * @package OpenLibrary\Metadata\Schemas\OpenAnnotation\Properties
     */
    class HasBody extends Property
    {
        /**
         * @var string
         */
        protected $uri = "hasBody";

        /**
         * @var string
         */
        protected $label = "has body";

        /**
         * @var string
         */
        protected $name = "hasBody";//becomes dc.contributor

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
