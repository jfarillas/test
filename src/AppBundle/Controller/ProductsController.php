<?php
// src/AppBundle/Controller/ProductsController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Picking_Station;

class ProductsController extends Controller
{
    /**
     * 
     */
    public function indexAction()
    {
        return $this->floorPlanAction();
    }

    public function floorPlanAction()
    {
        $stationService = $this->get('service.station');
        $stationList = $stationService->getPickingStation();
        /*print '<pre>';
        print_r($stationList);
        die();*/
        
        return $this->render(
            'products/floorplan.html.twig',
            array('stationList' => $stationList)
        );
    }
}
