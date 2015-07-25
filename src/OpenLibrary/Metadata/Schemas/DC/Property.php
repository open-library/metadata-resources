<?php


    namespace OpenLibrary\Metadata\Schemas\DC;

    class Property {

        protected $uri = "http://purl.org/dc/elements/1.1/";

        protected $label = "";

        protected $term = "dc";

        protected $description = "A Dublin Core Property";

        protected $value;

        public function __construct($value, $uri = false, $term = false, $label = false){
            if($uri){
                $this->uri = $uri;
            }

            if($term){
                $this->term .= ".{$term}";
            }

            if($label){
                $this->label = $label;
            }

            $this->value = $value;
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
        public function getTerm ()
        {
            return $this->term;
        }

        /**
         * @param string $term
         */
        public function setTerm ($term)
        {
            $this->term = $term;
        }

        /**
         * @return mixed
         */
        public function getValue ()
        {
            return $this->value;
        }

        /**
         * @param mixed $value
         */
        public function setValue ($value)
        {
            $this->value = $value;
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
    }
