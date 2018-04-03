<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DashboardController extends Controller
{
    /**
     * @Route("/dashboard", name="dashboard_index")
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('dashboard/index.html.twig');
    }
}