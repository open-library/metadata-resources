<?php
    use OpenLibrary\Metadata\Schemas\EDM\Properties\IsShownAt;

    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 21/08/2015
     * Time: 3:12 PM
     */
    trait WebResource
    {
        /**
         * @var IsShownAt
         *
         * This is the DOI
         */
        protected $IsShownAt;

        /**
         * @return IsShownAt
         */
        public function getIsShownAt ()
        {
            return $this->IsShownAt;
        }

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function setIsShownAt ($value, $label = false) {

            $this->IsShownAt = new IsShownAt($value, $label);
        }

    }
