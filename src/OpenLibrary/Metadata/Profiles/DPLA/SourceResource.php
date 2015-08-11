<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 21:41
     */
    
    namespace OpenLibrary\Metadata\Profiles\DPLA;

    use OpenLibrary\Metadata\Schemas;

    trait SourceResource {

        /**
         * @var Schemas\DCTerms\Properties\Identifier
         */
        private $AccessIdentifier;

        /**
         * @var Schemas\DCTerms\Properties\Alternative
         */
        private $AlternateTitle;

        /**
         * @var Schemas\DCTerms\Properties\IsPartOf
         */
        private $Collection;

        /**
         * @var Schemas\DCTerms\Properties\Contributor
         */
        private $Contributor;

        /**
         * @var Schemas\DCTerms\Properties\Creator
         */
        private $Creator;

        /**
         * @var Schemas\DC\Properties\Date
         */
        private $Date;

        /**
         * @var Schemas\DCTerms\Properties\Description
         */
        private $Description;

        /**
         * @var Schemas\DCTerms\Properties\Extent
         */
        private $Extent;

        /**
         * @var Schemas\EDM\Properties\HasType
         */
        private $Genre;

        /**
         * @var Schemas\DCTerms\Properties\Spatial
         */
        private $GeographicLocation;

        /**
         * @var Schemas\DCTerms\Properties\Language
         */
        private $Language;

        /**
         * @var Schemas\DCTerms\Properties\Relation
         */
        private $ProjectWebsite;

        /**
         * @var Schemas\DCTerms\Properties\Publisher
         */
        private $Publisher;

        /**
         * @var Schemas\DCTerms\Properties\Subject
         */
        private $Subject;

        /**
         * @var Schemas\DCTerms\Properties\Title
         */
        private $Title;

        /**
         * @var Schemas\DCTerms\Properties\Type
         */
        private $Type;
    }