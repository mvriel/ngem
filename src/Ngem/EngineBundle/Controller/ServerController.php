<?php

namespace Ngem\EngineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ServerController extends Controller
{
    /**
     * @Route("/{server}", name="_server")
     * @Template()
     */
    public function indexAction($server)
    {
        return array('server' => $server);
    }

    /**
     * @Route("/query", name="_query")
     * @Template()
     */
    public function queryAction()
    {
        return array();
    }


}
