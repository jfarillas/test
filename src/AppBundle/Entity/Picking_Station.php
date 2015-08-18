<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Picking_Station
 */
class Picking_Station
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $stationName;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set stationName
     *
     * @param string $stationName
     * @return Picking_Station
     */
    public function setStationName($stationName)
    {
        $this->stationName = $stationName;

        return $this;
    }

    /**
     * Get stationName
     *
     * @return string 
     */
    public function getStationName()
    {
        return $this->stationName;
    }
}
