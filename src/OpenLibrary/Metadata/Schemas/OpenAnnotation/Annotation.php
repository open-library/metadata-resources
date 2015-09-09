<?php

    namespace OpenLibrary\Metadata\Schemas\OpenAnnotation;

    use OpenLibrary\Metadata\Schemas\OpenAnnotation\Properties\Annotation\HasBody;
    use OpenLibrary\Metadata\Schemas\OpenAnnotation\Properties\Annotation\HasTarget;

    /**
     * Class Alternative
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
        public function __construct($hasBody, $hasTarget = '', $label = false){
            if(!$label){
                $label = $this->label;
            }

            $value = new HasBody($hasBody);

            $this->hasTarget = new HasTarget($hasTarget);# should be the doi | annotations are embedded, so this is technically optional

            parent::__construct($value,$this->uri,$this->name,$label);
        }
    }
