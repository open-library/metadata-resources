<?php
    /**
     * Created by PhpStorm.
     * User: seanmcna
     * Date: 12/08/2015
     * Time: 11:24 AM
     */

    namespace OpenLibrary\Metadata\Schemas\EDM\Properties;
    use OpenLibrary\Metadata\Schemas\EDM\Property;

    class IsShownAt extends Property
    {
        protected $uri = "isShownAt";

        protected $label = "Is Shown At";

        protected $name = "isShownAt";

        public function __construct($value,$label = false){
            if(!$label){
                $label = $this->label;
            }
            parent::__construct($value,$this->uri,$this->name,$label);
        }
    }