<?php

    namespace OpenLibrary\Metadata\Schemas\OpenAnnotation;

    use OpenLibrary\Metadata\Schemas\OpenAnnotation\Properties\HasBody;
    use OpenLibrary\Metadata\Schemas\OpenAnnotation\Properties\HasTarget;

    /**
     * Class Alternative
     *
     * @package OpenLibrary\Metadata\Schemas\OpenAnnotation\Properties
     */
    class Annotation extends Property
    {
        /**
         * @var string
         */
        protected $uri = "Annotation";

        /**
         * @var string
         */
        protected $label = "Annotation";

        /**
         * @var string
         */
        protected $name = "annotation";//becomes dc.contributor


        protected $hasTarget;

        /**
         * @param            $hasBody
         * @param            $hasTarget
         * @param bool|false $label
         */
        public function __construct($hasBody, $hasTarget, $label = false){
            if(!$label){
                $label = $this->label;
            }

            $value = new HasBody($hasBody);

            $this->hasTarget = new HasTarget($hasTarget);

            parent::__construct($value,$this->uri,$this->name,$label);
        }
    }
