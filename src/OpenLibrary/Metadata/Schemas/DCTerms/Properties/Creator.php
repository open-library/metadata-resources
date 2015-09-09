<?php

    namespace OpenLibrary\Metadata\Schemas\DCTerms\Properties;

    use OpenLibrary\Metadata\Schemas\DCTerms\Property;

    /**
     * Class Creator
     *
     */
    class Creator extends Property {

        /**
         * @param string $value
         * @param string $label
         */
        public function __construct ($value, $label = 'Creator') {

            # value, uri, name, label
            parent::__construct($value, 'creator', 'creator', $label);
        }
    }
