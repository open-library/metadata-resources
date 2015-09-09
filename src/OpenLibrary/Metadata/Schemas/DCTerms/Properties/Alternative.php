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
         * @param string $value
         * @param string $label
         */
        public function __construct($value,$label = 'Alternative'){

            parent::__construct($value,'alternative','alternative',$label);
        }
    }
