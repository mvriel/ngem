<?php

namespace Ngem\EngineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }

    /**
     * @Route("/about", name="about")
     * @Template()
     */
    public function aboutAction()
    {
      return array();
    }

    /**
     * @Template()
     */
    public function sidebarAction()
    {
      /** @var $db \Doctrine\DBAL\Connection */
      $db = $this->get('doctrine.dbal.default_connection');
      $tables = $db->getSchemaManager()->listTables();
//      var_dump($tables); die();
      return array("tables" => $tables);
    }

}
