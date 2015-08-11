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
        protected $AccessIdentifier;

        /**
         * @var Schemas\DCTerms\Properties\Alternative
         */
        protected $AlternateTitle;

        /**
         * @var Schemas\DCTerms\Properties\IsPartOf
         */
        protected $Collection;

        /**
         * @var Schemas\DCTerms\Properties\Contributor
         */
        protected $Contributor;

        /**
         * @var Schemas\DCTerms\Properties\Creator
         */
        protected $Creator;

        /**
         * @var Schemas\DC\Properties\Date
         */
        protected $Date;

        /**
         * @var Schemas\DCTerms\Properties\Description
         */
        protected $Description;

        /**
         * @var Schemas\DCTerms\Properties\Extent
         */
        protected $Extent;

        /**
         * @var Schemas\EDM\Properties\HasType
         */
        protected $Genre;

        /**
         * @var Schemas\DCTerms\Properties\Spatial
         */
        protected $GeographicLocation;

        /**
         * @var Schemas\DCTerms\Properties\Language
         */
        protected $Language;

        /**
         * @var Schemas\DCTerms\Properties\Relation
         */
        protected $ProjectWebsite;

        /**
         * @var Schemas\DCTerms\Properties\Publisher
         */
        protected $Publisher;

        /**
         * @var Schemas\DCTerms\Properties\Subject
         */
        protected $Subject;

        /**
         * @var Schemas\DCTerms\Properties\Title
         */
        protected $Title;

        /**
         * @var Schemas\DCTerms\Properties\Type
         */
        protected $Type;

        /**
         * @return Schemas\DCTerms\Properties\Identifier
         */
        public function getAccessIdentifier () {

            return $this->AccessIdentifier;
        }

        /**
         * @return Schemas\DCTerms\Properties\Alternative
         */
        public function getAlternateTitle () {

            return $this->AlternateTitle;
        }

        /**
         * @return Schemas\DCTerms\Properties\IsPartOf
         */
        public function getCollection () {

            return $this->Collection;
        }

        /**
         * @return Schemas\DCTerms\Properties\Contributor
         */
        public function getContributor () {

            return $this->Contributor;
        }

        /**
         * @return Schemas\DCTerms\Properties\Creator
         */
        public function getCreator () {

            return $this->Creator;
        }

        /**
         * @return Schemas\DC\Properties\Date
         */
        public function getDate () {

            return $this->Date;
        }

        /**
         * @return Schemas\DCTerms\Properties\Description
         */
        public function getDescription () {

            return $this->Description;
        }

        /**
         * @return Schemas\DCTerms\Properties\Extent
         */
        public function getExtent () {

            return $this->Extent;
        }

        /**
         * @return Schemas\EDM\Properties\HasType
         */
        public function getGenre () {

            return $this->Genre;
        }

        /**
         * @return Schemas\DCTerms\Properties\Spatial
         */
        public function getGeographicLocation () {

            return $this->GeographicLocation;
        }

        /**
         * @return Schemas\DCTerms\Properties\Language
         */
        public function getLanguage () {

            return $this->Language;
        }

        /**
         * @return Schemas\DCTerms\Properties\Relation
         */
        public function getProjectWebsite () {

            return $this->ProjectWebsite;
        }

        /**
         * @return Schemas\DCTerms\Properties\Publisher
         */
        public function getPublisher () {

            return $this->Publisher;
        }

        /**
         * @return Schemas\DCTerms\Properties\Subject
         */
        public function getSubject () {

            return $this->Subject;
        }

        /**
         * @return Schemas\DCTerms\Properties\Title
         */
        public function getTitle () {

            return $this->Title;
        }

        /**
         * @return Schemas\DCTerms\Properties\Type
         */
        public function getType () {

            return $this->Type;
        }


        
    }