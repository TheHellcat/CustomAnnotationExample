<?php

namespace AppBundle\Annotation;

use Doctrine\Common\Annotations\Annotation;

/**
 * This is our custom annotation class.
 * It works just like any other data model class, you can put getters, setters, default values and everything else
 * you need in here.
 * Upon reading/parsing the actual annotation you will get this class returned, filled with all values passed.
 *
 * @Annotation
 * @Target({"PROPERTY"})
 */
class DemoAnnotation extends Annotation
{
    /**
     * This is a possible value that can be passed on the annotation in the class it's used in.
     * This property **must** be public, or else reading/parsing the annotation will not work/crash.
     *
     * @var string
     */
    public $foo;

    /**
     * This is a possible value that can be passed on the annotation in the class it's used in.
     * This property **must** be public, or else reading/parsing the annotation will not work/crash.
     *
     * @var string
     */
    public $bar;
}
