<?php
    /**
     * Created by PhpStorm.
     * User: hajime
     * Date: 10 Aug 15
     * Time: 21:52
     */

    namespace OpenLibrary\Metadata\Schemas\DCMIType;

    interface DCMIType {

        const Collection            = 'Collection';
        const Dataset               = 'Dataset';
        const Event                 = 'Event';
        const Image                 = 'Image';
        const InteractiveResource   = 'Interactive Resource';
        const Service               = 'Service';
        const Software              = 'Software';
        const Sound                 = 'Sound';
        const Text                  = 'Text';
    }
