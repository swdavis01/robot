<?php

namespace RobotBundle\Entity;

use RobotBundle\Command\ConsoleLogger;

class Entity
{
    /**
     * @var ConsoleLogger
     */
    private $logger;

    public function __construct()
    {
    }

    public function setLogger( $logger )
    {
        $this->logger = $logger;
        return $this;
    }
}
