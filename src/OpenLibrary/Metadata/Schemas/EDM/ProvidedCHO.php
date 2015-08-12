<?php
    namespace OpenLibrary\Metadata\Schemas\EDM;

    use OpenLibrary\Metadata\Schemas;

    trait ProvidedCHO
    {
        /**
         * @var Schemas\DCTerms\Properties\IsReferencedBy
         */
        protected $CatalogueRecord;

        /**
         * @var Schemas\EDM\Properties\CurrentLocation
         */
        protected $RBSCLocation;

        /**
         * @var Schemas\EDM\Properties\IsDerivativeOf
         */
        protected $Translation;

        /**
         * @var Schemas\DCTerms\Properties\Temporal
         */
        protected $Time;
    }
