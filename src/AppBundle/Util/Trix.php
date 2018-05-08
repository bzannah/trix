<?php


namespace AppBundle\Util;

use Doctrine\ORM\EntityManagerInterface;

/**
 * Class Trix
 * @package AppBundle\Util
 */
class Trix
{
    /**
     * @var EntityManagerInterface
     */
    private $em;

    /**
     * Trix constructor.
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @param $wsId
     * @return int
     */
    public function finishedTasks($wsId)
    {
        $projects = $this->wsAllProjects($wsId);
        $taskRepo = $this->em->getRepository('AppBundle:Task');
        $total = 0;
        foreach ($projects as $project) {
            $total += count($taskRepo->
            getFinishedTasks($project->getId()));
        }
        return $total;
    }

    /**
     * @param $wsID
     * @return array
     */
    public function wsAllProjects($wsID)
    {
        return $this->em
            ->getRepository('AppBundle:Project')
            ->getAllProjects($wsID);
    }
}
