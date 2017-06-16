<?php

namespace AppBundle\Model;

use AppBundle\Annotation\DemoAnnotation;

/**
 * Class DemoModel
 *
 * Arbitrary data model, holding custom annotations
 *
 * @package AppBundle\Model
 */
class DemoModel
{
    /**
     * Setting all possible values of our custom annotation:
     *
     * @DemoAnnotation("Some Value", foo="abc", bar="123")
     *
     * @var string
     */
    private $someValue;

    /**
     * Setting only the "main value" of our custom annotation:
     *
     * @DemoAnnotation("Some Other Value")
     *
     * @var string
     */
    private $someOtherValue;

    /**
     * Not using our cusotm annotation at all for this one
     *
     * @var string
     */
    private $yetAnotherValue;

    /**
     * @return string
     */
    public function getSomeValue()
    {
        return $this->someValue;
    }

    /**
     * @param string $someValue
     * @return DemoModel
     */
    public function setSomeValue($someValue)
    {
        $this->someValue = $someValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getSomeOtherValue()
    {
        return $this->someOtherValue;
    }

    /**
     * @param string $someOtherValue
     * @return DemoModel
     */
    public function setSomeOtherValue($someOtherValue)
    {
        $this->someOtherValue = $someOtherValue;
        return $this;
    }

    /**
     * @return string
     */
    public function getYetAnotherValue()
    {
        return $this->yetAnotherValue;
    }

    /**
     * @param string $yetAnotherValue
     * @return DemoModel
     */
    public function setYetAnotherValue($yetAnotherValue)
    {
        $this->yetAnotherValue = $yetAnotherValue;
        return $this;
    }


}
