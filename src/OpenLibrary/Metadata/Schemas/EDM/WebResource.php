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
    }
