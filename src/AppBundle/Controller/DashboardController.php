<?php
namespace AppBundle\Controller;

use AppBundle\Util\Trix;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DashboardController
 * @package AppBundle\Controller
 */
class DashboardController extends Controller
{
    /**
     * @Route("/dashboard", name="dashboard_index")
     * @return Response
     */
    public function indexAction($ws=7, Trix $util)
    {
        $finishedTasks = $util->FinishedTasks($ws);
        return $this->render('dashboard/index.html.twig', ['finishedTasks' => $finishedTasks]);
    }
}
