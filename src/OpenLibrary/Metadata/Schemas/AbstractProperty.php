<?php

    namespace OpenLibrary\Metadata\Schemas;

    abstract class AbstractProperty {

        private $uri;

        private $label;

        private $name;

        private $description;

        private $value;

        /**
         * @return string
         */
        abstract public function getUri ();

        /**
         * @param string $uri
         */
        abstract public function setUri ($uri);

        /**
         * @return string
         */
        abstract public function getLabel ();

        /**
         * @param string $label
         */
        abstract public function setLabel ($label);

        /**
         * @return string
         */
        abstract public function getName ();

        /**
         * @param string $name
         */
        abstract public function setName ($name);

        /**
         * @return mixed
         */
        abstract public function getValue ();

        /**
         * @param mixed $value
         */
        abstract public function setValue ($value);

        /**
         * @return string
         */
        abstract public function getDescription ();

        /**
         * @param string $description
         */
        abstract public function setDescription ($description);
    }
