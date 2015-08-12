<?php
    namespace OpenLibrary\Metadata\Schemas\EDM;

    use OpenLibrary\Metadata\Schemas;

    trait ProvidedCHO
    {
        /**
         * @var string
         */
        private $uri = "http://www.europeana.eu/schemas/edm/ProvidedCHO";

        /**
         * @var bool|string
         */
        private $label = "ProvidedCHO";

        /**
         * @var string
         */
        private $name = "edm:ProvidedCHO";

        /**
         * @var string
         */
        private $description = "A Europeana Data Model Class";

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

        /**
         * ProvidedCHO constructor.
         * @param Schemas\DCTerms\Properties\IsReferencedBy $CatalogueRecord
         * @param Properties\CurrentLocation $RBSCLocation
         * @param Properties\IsDerivativeOf $Translation
         * @param Schemas\DCTerms\Properties\Temporal $Time
         */
        public function __construct(Schemas\DCTerms\Properties\IsReferencedBy $CatalogueRecord, Properties\CurrentLocation $RBSCLocation, Properties\IsDerivativeOf $Translation, Schemas\DCTerms\Properties\Temporal $Time)
        {
            $this->CatalogueRecord = $CatalogueRecord;
            $this->RBSCLocation = $RBSCLocation;
            $this->Translation = $Translation;
            $this->Time = $Time;
        }

        /**
         * @return bool|string
         */
        public function getLabel()
        {
            return $this->label;
        }

        /**
         * @param bool|string $label
         */
        public function setLabel($label)
        {
            $this->label = $label;
        }

        /**
         * @return string
         */
        public function getUri()
        {
            return $this->uri;
        }

        /**
         * @param string $uri
         */
        public function setUri($uri)
        {
            $this->uri = $uri;
        }

        /**
         * @return string
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param string $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }

        /**
         * @return string
         */
        public function getDescription()
        {
            return $this->description;
        }

        /**
         * @param string $description
         */
        public function setDescription($description)
        {
            $this->description = $description;
        }

        /**
         * @return Schemas\DCTerms\Properties\IsReferencedBy
         */
        public function getCatalogueRecord()
        {
            return $this->CatalogueRecord;
        }

        /**
         * @param Schemas\DCTerms\Properties\IsReferencedBy $CatalogueRecord
         */
        public function setCatalogueRecord($CatalogueRecord)
        {
            $this->CatalogueRecord = $CatalogueRecord;
        }

        /**
         * @return Properties\CurrentLocation
         */
        public function getRBSCLocation()
        {
            return $this->RBSCLocation;
        }

        /**
         * @param Properties\CurrentLocation $RBSCLocation
         */
        public function setRBSCLocation($RBSCLocation)
        {
            $this->RBSCLocation = $RBSCLocation;
        }

        /**
         * @return Properties\IsDerivativeOf
         */
        public function getTranslation()
        {
            return $this->Translation;
        }

        /**
         * @param Properties\IsDerivativeOf $Translation
         */
        public function setTranslation($Translation)
        {
            $this->Translation = $Translation;
        }

        /**
         * @return Schemas\DCTerms\Properties\Temporal
         */
        public function getTime()
        {
            return $this->Time;
        }

        /**
         * @param Schemas\DCTerms\Properties\Temporal $Time
         */
        public function setTime($Time)
        {
            $this->Time = $Time;
        }
    }
