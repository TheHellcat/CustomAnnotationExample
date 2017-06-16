<?php

namespace AppBundle\Service;

use Doctrine\Common\Annotations\AnnotationReader;

/**
 * Class AnnotationHydrator
 *
 * "Hydrates" (fills) the annotation class with the annotated values
 *
 * @package AppBundle\Service
 */
class AnnotationHydrator
{
    /**
     * @param mixed $entityClass
     * @param string $annotationClass
     * @return array
     */
    public function hydrateObject($entityClass, $annotationClass)
    {
        // get the Doctrine annotation reader
        $reader = new AnnotationReader();

        // ser up a reflection object of the actual data object
        $reflectionObject = new \ReflectionObject(new $entityClass);

        // for simplicity sake of this demo, we'll just be returning an array of all the data we fetched
        $resultSet = [];

        // loop through all properties of the data object
        foreach($reflectionObject->getProperties() as $reflectionProperty)
        {
            // use the Doctrine annotation reader to get our annotation class,
            // with all "annotated values" set for the current property of the data class
            $annotationData = $reader->getPropertyAnnotation($reflectionProperty, $annotationClass);

            // also get the name of current property, so we know to what property the annotation data belongs to
            $propertyName = $reflectionProperty->getName();

            // and while we're here, why not get the actual value of the data class' property as well
            $reflectionProperty->setAccessible(true);
            $propertyValue = $reflectionProperty->getValue($entityClass);

            // finally save everything into our return array
            $propData = [];
            $propData['name'] = $propertyName;
            $propData['value'] = $propertyValue;
            $propData['annotationData'] = $annotationData;
            $resultSet[$propertyName] = $propData;
        }

        return $resultSet;
    }
}
