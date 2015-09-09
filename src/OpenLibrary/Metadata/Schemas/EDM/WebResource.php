<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 11/08/2015
     * Time: 1:02 PM
     */

    namespace OpenLibrary\Metadata\Schemas\EDM;

    use OpenLibrary\Metadata\Schemas;

    trait WebResource
    {
        /**
         * @var string
         */
        private $uri = 'http://www.europeana.eu/schemas/edm/WebResource';

        /**
         * @var bool|string
         */
        private $label = 'WebResource';

        /**
         * @var string
         */
        private $name = 'edm:WebResource';

        /**
         * @var string
         */
        private $description = 'A Europeana Data Model Class';

        /**
         * @var Schemas\DC\Properties\Format
         */
        protected $FileFormat;

        /**
         * @var Schemas\DCTerms\Properties\Rights
         */
        protected $Rights;

        /**
         * @var Schemas\DCTerms\Properties\Issued
         */
        protected $DateIssued;

        /**
         * @var Schemas\EDM\Properties\IsShownAt
         */
        protected $IsShownAt;

        /**
         * WebResource constructor.
         * @param Schemas\DC\Properties\Format $FileFormat
         * @param Schemas\DCTerms\Properties\Rights $Rights
         * @param Schemas\DCTerms\Properties\Issued $DateIssued
         * @param Properties\IsShownAt $IsShownAt
         */
        public function __construct(Schemas\DC\Properties\Format $FileFormat, Schemas\DCTerms\Properties\Rights $Rights, Schemas\DCTerms\Properties\Issued $DateIssued, Properties\IsShownAt $IsShownAt)
        {
            $this->FileFormat = $FileFormat;
            $this->Rights = $Rights;
            $this->DateIssued = $DateIssued;
            $this->IsShownAt = $IsShownAt;
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
         * @return Schemas\DC\Properties\Format
         */
        public function getFileFormat()
        {
            return $this->FileFormat;
        }

        /**
         * @param Schemas\DC\Properties\Format $FileFormat
         */
        public function setFileFormat($FileFormat)
        {
            $this->FileFormat = $FileFormat;
        }

        /**
         * @return Schemas\DCTerms\Properties\Rights
         */
        public function getRights()
        {
            return $this->Rights;
        }

        /**
         * @param Schemas\DCTerms\Properties\Rights $Rights
         */
        public function setRights($Rights)
        {
            $this->Rights = $Rights;
        }

        /**
         * @return Schemas\DCTerms\Properties\Issued
         */
        public function getDateIssued()
        {
            return $this->DateIssued;
        }

        /**
         * @param Schemas\DCTerms\Properties\Issued $DateIssued
         */
        public function setDateIssued($DateIssued)
        {
            $this->DateIssued = $DateIssued;
        }

    }
