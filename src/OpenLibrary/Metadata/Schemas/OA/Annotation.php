<?php

    namespace OpenLibrary\Metadata\Schemas\OA;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;
    use OpenLibrary\Metadata\Schemas\OA\Properties\Annotation\HasBody;
    use OpenLibrary\Metadata\Schemas\OA\Properties\Annotation\HasTarget;

    /**
     * Class Annotation
     */
    class Annotation
    {
        /**
         * @var string
         */
        protected $annotationText;

        /**
         * @var string
         */
        protected $isAnnotationFor;


        /**
         * @param            $annotationText
         * @param            $isAnnotationFor
         * @param bool|false $label
         */
        public function __construct($annotationText, $isAnnotationFor = '', $label = false){
            $this->annotationText = new HasBody($annotationText);
            $this->isAnnotationFor = new HasTarget($isAnnotationFor);# should be the doi | annotations are embedded, so this is technically optional
        }
    }
