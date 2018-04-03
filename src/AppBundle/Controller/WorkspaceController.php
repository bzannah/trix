<?php


namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class WorkspaceController
 * @package AppBundle\Controller
 *
 * @Route("/dashboard/workspace")
 */
class WorkspaceController extends Controller
{
    /**
     * @Route("/{name}", name="workspace_show")
     * @param $name
     * @return Response
     * @throws \LogicException
     */
    public function showAction($name)
    {
        // ToDo:find available projects in the given workspace
        return $this->render('workspace/show.html.twig', array('project' => 'Symfony book'));
    }

}