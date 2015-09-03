<?php

    namespace OpenLibrary\Metadata\Schemas\VIVO;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    class Property extends AbstractProperty{

        public function __construct($value, $uri = 'http://vivoweb.org/ontology/core#', $name = 'vivo', $label = ''){
            if($uri !== ''){
                $this->uri .= "{$uri}";
            }

            if($name !== ''){
                $this->name .= "{$this->namespaceVariableSeparator}{$name}";
            }

            if($label !== ''){
                $this->label = $label;
            }

            $this->description = 'A VIVO Property';

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
