<?php

namespace AppBundle\Service;

class StationService
{

    private $entityManager;

    /*
     * @param EntityManager $entityManager
     */
    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /*
     * @param integer $blogId
     *
     * @return Blog
     */
    public function getPickingStation()
    {
        $data = $this->entityManager
                     ->getRepository('AppBundle:Picking_Station');

        return $data->findAll();
    }
}
