<?php

namespace Ngem\EngineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class SchemaController extends Controller
{
    /**
     * @Route("/{server}/{schema}")
     * @Template()
     */
    public function indexAction($server, $schema)
    {
        return array('server' => $server, 'schema' => $schema);
    }

}
