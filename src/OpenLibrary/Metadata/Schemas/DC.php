<?php
    /**
     * Created by PhpStorm.
     * User: skhanker
     * Date: 04/05/2015
     * Time: 12:20 PM
     */

    namespace OpenLibrary\Metadata\Schemas;

    use OpenLibrary\Metadata\Schemas\DC\Properties\Contributor;
    use OpenLibrary\Metadata\Schemas\DC\Properties\Coverage;
    use OpenLibrary\Metadata\Schemas\DC\Properties\Creator;
    use OpenLibrary\Metadata\Schemas\DC\Properties\Date;
    use OpenLibrary\Metadata\Schemas\DC\Properties\Description;
    use OpenLibrary\Metadata\Schemas\DC\Properties\Format;
    use OpenLibrary\Metadata\Schemas\DC\Properties\Identifier;
    use OpenLibrary\Metadata\Schemas\DC\Properties\Language;
    use OpenLibrary\Metadata\Schemas\DC\Properties\Publisher;
    use OpenLibrary\Metadata\Schemas\DC\Properties\Relation;
    use OpenLibrary\Metadata\Schemas\DC\Properties\Rights;
    use OpenLibrary\Metadata\Schemas\DC\Properties\Source;
    use OpenLibrary\Metadata\Schemas\DC\Properties\Subject;
    use OpenLibrary\Metadata\Schemas\DC\Properties\Title;
    use OpenLibrary\Metadata\Schemas\DC\Properties\Type;

    class DC
    {

        /**
         * @var string
         */
        public static $prefix = "dc";

        /**
         * @var string
         */
        public static $namespaceName = "http://purl.org/dc/elements/1.1/";

        /**
         * @var Contributor
         */
        protected $contributor;

        /**
         * @var  Coverage
         */
        protected $coverage;

        /**
         * @var Creator
         */
        protected $creator;

        /**
         * @var Date
         */
        protected $date;

        /**
         * @var Description
         */
        protected $description;

        /**
         * @var Format
         */
        protected $format;

        /**
         * @var Identifier
         */
        protected $identifier;

        /**
         * @var Language
         */
        protected $language;

        /**
         * @var Publisher
         */
        protected $publisher;

        /**
         * @var Relation
         */
        protected $relation;

        /**
         * @var Rights
         */
        protected $rights;

        /**
         * @var Source
         */
        protected $source;

        /**
         * @var Subject
         */
        protected $subject;

        /**
         * @var Title
         */
        protected $title;

        /**
         * @var Type
         */
        protected $type;

        /**
         * DC constructor.
         *
         * @param \OpenLibrary\Metadata\Schemas\DC\Properties\Contributor $contributor
         * @param \OpenLibrary\Metadata\Schemas\DC\Properties\Coverage    $coverage
         * @param \OpenLibrary\Metadata\Schemas\DC\Properties\Creator     $creator
         * @param \OpenLibrary\Metadata\Schemas\DC\Properties\Date        $date
         * @param \OpenLibrary\Metadata\Schemas\DC\Properties\Description $description
         * @param \OpenLibrary\Metadata\Schemas\DC\Properties\Format      $format
         * @param \OpenLibrary\Metadata\Schemas\DC\Properties\Identifier  $identifier
         * @param \OpenLibrary\Metadata\Schemas\DC\Properties\Language    $language
         * @param \OpenLibrary\Metadata\Schemas\DC\Properties\Publisher   $publisher
         * @param \OpenLibrary\Metadata\Schemas\DC\Properties\Relation    $relation
         * @param \OpenLibrary\Metadata\Schemas\DC\Properties\Rights      $rights
         * @param \OpenLibrary\Metadata\Schemas\DC\Properties\Source      $source
         * @param \OpenLibrary\Metadata\Schemas\DC\Properties\Subject     $subject
         * @param \OpenLibrary\Metadata\Schemas\DC\Properties\Title       $title
         * @param \OpenLibrary\Metadata\Schemas\DC\Properties\Type        $type
         */
        public function __construct (\OpenLibrary\Metadata\Schemas\DC\Properties\Contributor $contributor, \OpenLibrary\Metadata\Schemas\DC\Properties\Coverage $coverage, \OpenLibrary\Metadata\Schemas\DC\Properties\Creator $creator, \OpenLibrary\Metadata\Schemas\DC\Properties\Date $date, \OpenLibrary\Metadata\Schemas\DC\Properties\Description $description, \OpenLibrary\Metadata\Schemas\DC\Properties\Format $format, \OpenLibrary\Metadata\Schemas\DC\Properties\Identifier $identifier, \OpenLibrary\Metadata\Schemas\DC\Properties\Language $language, \OpenLibrary\Metadata\Schemas\DC\Properties\Publisher $publisher, \OpenLibrary\Metadata\Schemas\DC\Properties\Relation $relation, \OpenLibrary\Metadata\Schemas\DC\Properties\Rights $rights, \OpenLibrary\Metadata\Schemas\DC\Properties\Source $source, \OpenLibrary\Metadata\Schemas\DC\Properties\Subject $subject, \OpenLibrary\Metadata\Schemas\DC\Properties\Title $title, \OpenLibrary\Metadata\Schemas\DC\Properties\Type $type)
        {
            $this->contributor = $contributor;
            $this->coverage = $coverage;
            $this->creator = $creator;
            $this->date = $date;
            $this->description = $description;
            $this->format = $format;
            $this->identifier = $identifier;
            $this->language = $language;
            $this->publisher = $publisher;
            $this->relation = $relation;
            $this->rights = $rights;
            $this->source = $source;
            $this->subject = $subject;
            $this->title = $title;
            $this->type = $type;
        }


    }
