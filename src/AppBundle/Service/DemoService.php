<?php

namespace AppBundle\Service;

use AppBundle\Model\DemoModel;
use AppBundle\Annotation\DemoAnnotation;

/**
 * Class DemoService
 *
 * Arbitrary service, demonstrating how to read the custom annotations from our demo model
 *
 * @package AppBundle\Service
 */
class DemoService
{
    /**
     * @var AnnotationHydrator
     */
    private $hydrator;

    public function __construct(AnnotationHydrator $hydrator)
    {
        $this->hydrator = $hydrator;
    }

    public function doSomething(DemoModel $data)
    {
        // fetch all annotated data from the given model and for our demo annotation
        return $this->hydrator->hydrateObject($data, DemoAnnotation::class);
    }
}
