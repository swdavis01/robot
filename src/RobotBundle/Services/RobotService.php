<?php

namespace RobotBundle\Services;

//use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use RobotBundle\Command\ConsoleLogger;

class RobotService
{
    private $rows = 5;
    private $columns = 5;
    /**
     * @var ConsoleLogger
     */
    private $logger;

    public function __construct( $params = array() )
    {
        //print_r( $params );
        // get values from config
        if ( isset( $params['rows'] ) && is_int( $params['rows'] ) )
        {
            $rows = (int)$params['rows'];
            if ( $rows > 0 )
            {
                $this->rows = $rows;
            }
        }

        if ( isset( $params['columns'] ) && is_int( $params['columns'] ) )
        {
            $columns = (int)$params['columns'];
            if ( $columns > 0 )
            {
                $this->columns = $columns;
            }
        }

    }

    public function setLogger( $logger )
    {
        $this->logger = $logger;
    }

    public function test()
    {
        $this->logger->info("rows = " . $this->rows . ", columns " . $this->columns );
    }
}
