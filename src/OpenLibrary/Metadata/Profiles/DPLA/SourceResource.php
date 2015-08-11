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
         * @var Schemas\DCTerms\Properties\Identifier
         */
        protected $Identifier;

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
        public function getIdentifier () {

            return $this->Identifier;
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

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function setIdentifier ($value, $label = false) {

            $this->Identifier = new Schemas\DCTerms\Properties\Identifier($value, $label);
        }

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function setAlternateTitle ($value, $label = false) {

            $this->AlternateTitle = new Schemas\DCTerms\Properties\Alternative ($value, $label);
        }

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function setCollection ($value, $label = false) {

            $this->Collection = new Schemas\DCTerms\Properties\IsPartOf ($value, $label);
        }

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function setContributor ($value, $label = false) {

            $this->Contributor = new Schemas\DCTerms\Properties\Contributor($value, $label);
        }

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function setCreator ($value, $label = false) {

            $this->Creator = new Schemas\DCTerms\Properties\Creator($value, $label);
        }

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function setDate ($value, $label = false) {

            $this->Date = new Schemas\DC\Properties\Date($value, $label);
        }

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function setDescription ($value, $label = false) {

            $this->Description = new Schemas\DCTerms\Properties\Description($value, $label);
        }

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function setExtent ($value, $label = false) {

            $this->Extent = new Schemas\DCTerms\Properties\Extent($value, $label);
        }

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function setGenre ($value, $label = false) {

            $this->Genre = new Schemas\EDM\Properties\HasType($value, $label);
        }

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function setGeographicLocation ($value, $label = false) {

            $this->GeographicLocation = new Schemas\DCTerms\Properties\Spatial($value, $label);
        }

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function setLanguage ($value, $label = false) {

            $this->Language = new Schemas\DCTerms\Properties\Language($value, $label);
        }

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function setProjectWebsite ($value, $label = false) {

            $this->ProjectWebsite = new Schemas\DCTerms\Properties\Relation($value, $label);
        }

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function setPublisher ($value, $label = false) {

            $this->Publisher = new Schemas\DCTerms\Properties\Publisher($value, $label);
        }

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function setSubject ($value, $label = false) {

            $this->Subject = new Schemas\DCTerms\Properties\Subject($value, $label);
        }

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function setTitle ($value, $label = false) {

            $this->Title = new Schemas\DCTerms\Properties\Title($value, $label);
        }

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function setType ($value, $label = false) {

            $this->Type = new Schemas\DCTerms\Properties\Type($value, $label);
        }

    }