<?php

    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 3:53 PM
     */

    namespace UBC\LSIT\OpenCollections\Metadata;

    use UBC\LSIT\OpenCollections\Repositories\ISO\Series639\Revision1\ISO_639_1;

    class EntityStatement
    {

        protected $property;

        protected $refinement;

        protected $value;

        protected $label;

        protected $language;

        public function __construct ($value, $property, $refinement = "", $label = "", $language = ISO_639_1::English)
        {
            $this->value        = $value;
            $this->property     = $property;
            $this->$refinement  = $refinement;
            $this->label        = $label;
            $this->language     = $language;
        }

    }
