<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 15/07/2015
     * Time: 5:49 PM
     */

    namespace OpenLibrary\Metadata\Schemas\DCTerms\Properties;

    use OpenLibrary\Metadata\Schemas\DCTerms\Property;

    /**
     * Class Description
     *
     * @package OpenLibrary\Metadata\Schemas\DCTerms\Properties
     */
    class Description extends Property
    {
        /**
         * @var string
         */
        protected $uri = "description";

        /**
         * @var string
         */
        protected $label = "Description";

        /**
         * @var string
         */
        protected $name = "description";//becomes dc.contributor

        /**
         * @param            $value
         * @param bool|false $label
         */
        public function __construct($value,$label = false){
            if(!$label){
                $label = $this->label;
            }
            parent::__construct($value,$this->uri,$this->name,$label);
        }
    }