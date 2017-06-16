<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Model\DemoModel;

/**
 * Class DefaultController
 * @package AppBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     * @Template()
     */
    public function indexAction()
    {
        $demoService = $this->get('demo_service');

        $demoModel = new DemoModel();
        $demoModel
            ->setSomeValue('Some Thing')
            ->setSomeOtherValue('Some Other Thing')
            ->setYetAnotherValue('Anything Else');

        // passing our demo model to a service, just to demonstrate the annotation parsing/reading can be done
        // anywhere in the code
        $propertiesData = $demoService->doSomething($demoModel);

        return [
            'properties' => $propertiesData
        ];
    }
}
