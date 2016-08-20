<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 23:29
     */

    namespace OpenLibrary\Metadata\Schemas\SKOS;

    use OpenLibrary\Metadata\Schemas\AbstractProperty;

    trait Concept {

        /**
         * @var AbstractProperty
         */
        protected $Notes;

        /**
         * @return AbstractProperty
         */
        public function getNotes () {

            return $this->Notes;
        }
    }
