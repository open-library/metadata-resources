<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 22:47
     */
    
    namespace OpenLibrary\Metadata\Schemas\EDM;

    use OpenLibrary\Metadata\Schemas\WGS84\Properties\Latitude;
    use OpenLibrary\Metadata\Schemas\WGS84\Properties\Longitude;

    /**
     * Class Place
     *
     * @package OpenLibrary\Metadata\Schemas\EDM
     */
    trait Place
    {
        /**
         * @var string
         */
        private $uri = "http://www.europeana.eu/schemas/edm/Place";

        /**
         * @var bool|string
         */
        private $label = "Place";

        /**
         * @var string
         */
        private $name = "edm:Place";

        /**
         * @var string
         */
        private $description = "A Europeana Data Model Property";

        /**
         * @var \OpenLibrary\Metadata\Schemas\WGS84\Properties\Latitude
         */
        private $latitude;

        /**
         * @var \OpenLibrary\Metadata\Schemas\WGS84\Properties\Longitude
         */
        private $longitude;

        /**
         * @param bool|false $lat
         * @param bool|false $long
         * @param bool|false $uri
         * @param bool|false $name
         * @param bool|false $label
         */
        public function __construct($lat = false, $long = false, $uri = false, $name = false, $label = false){
            if($uri){
                $this->uri .= "{$uri}";
            }

            if($name){
                $this->name .= ":{$name}";
            }

            if($label){
                $this->label = $label;
            }

            if($lat) {
                $this->latitude = new Latitude($lat);
            }

            if($long) {
                $this->longitude = new Longitude($long);
            }

        }

        /**
         * @return string
         */
        public function getUri ()
        {
            return $this->uri;
        }

        /**
         * @param string $uri
         */
        public function setUri ($uri)
        {
            $this->uri = $uri;
        }

        /**
         * @return string
         */
        public function getLabel ()
        {
            return $this->label;
        }

        /**
         * @param string $label
         */
        public function setLabel ($label)
        {
            $this->label = $label;
        }

        /**
         * @return string
         */
        public function getName ()
        {
            return $this->name;
        }

        /**
         * @param string $name
         */
        public function setName ($name)
        {
            $this->name = $name;
        }


        /**
         * @return string
         */
        public function getDescription ()
        {
            return $this->description;
        }

        /**
         * @param string $description
         */
        public function setDescription ($description)
        {
            $this->description = $description;
        }

        /**
         * @return \OpenLibrary\Metadata\Schemas\WGS84\Properties\Latitude
         */
        public function getLatitude () {

            return $this->latitude;
        }

        /**
         * @param \OpenLibrary\Metadata\Schemas\WGS84\Properties\Latitude $latitude
         */
        public function setLatitude ($latitude) {

            $this->latitude = $latitude;
        }

        /**
         * @return \OpenLibrary\Metadata\Schemas\WGS84\Properties\Longitude
         */
        public function getLongitude () {

            return $this->longitude;
        }

        /**
         * @param \OpenLibrary\Metadata\Schemas\WGS84\Properties\Longitude $longitude
         */
        public function setLongitude ($longitude) {

            $this->longitude = $longitude;
        }

    }