<?php


namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Class Builder
 * @package AppBundle\Menu
 */
class Builder extends ContainerBuilder
{
//    // each public method can be called in our template
//    /**
//     * @param FactoryInterface $factory
//     * @param array $options
//     * @return \Knp\Menu\ItemInterface
//     * @throws \InvalidArgumentException
//     */
//    public function topMenu(FactoryInterface $factory, array $options)
//    {
//        $menu = $factory->createItem('root');
//        $menu->setChildrenAttribute('class', 'nav navbar-top-links navbar-right');
//
//        $dropdown2 = $menu->addChild(' ', array('icon' => 'bell', 'dropdown' => true, 'caret' => true,));
//
//        // Create a dropdown header
//        $dropdown2->addChild('notifications', array('dropdown-header' => true))->setAttribute('divider_append', true);
//
//        // Create a dropdown with a caret
//        $dropdown = $menu->addChild('', array('icon' => 'user', 'dropdown' => true, 'caret' => true,));
//
//        // Create a dropdown header
//        $dropdown->addChild('Edit Profile', array('route' => 'fos_user_profile_edit'));
//        $dropdown->addChild('Change Password', array('route' => 'fos_user_change_password'));
//        $dropdown->addChild('Logout', array('route' => 'fos_user_security_logout'));
//        return $menu;
//    }
//
//    /**
//     * @param FactoryInterface $factory
//     * @param array $options
//     * @return \Knp\Menu\ItemInterface
//     */
//    public function sideMenu(FactoryInterface $factory, array $options)
//    {
//        // Menu will be a navbar menu anchored to right
//        $menu = $factory->createItem('root');
//        $menu->setChildrenAttribute('id', 'side-menu');
//        $menu->setChildrenAttribute('class', 'nav');
//        // Create a dropdown with a caret
//        $menu->addChild('Dashboard', array(
//            'icon' => 'dashboard',
//            'route' => 'dashboard_index'
//        ));
//        // Create a dropdown header
//        $dropdown = $menu->addChild('Project', array(
//            'icon'  => 'tasks',
//            'dropdown' => true,
//            'caret' => true,
//        ));
//        $dropdown->setChildrenAttribute('class', 'nav nav-second-level');
//        $dropdown->addChild("Project1", array('uri' => '#'));
//        $dropdown->addChild("Project2", array('uri' => '#'));
//        $menu->addChild('Team', array(
//            'icon' => 'users',
//            'uri'  => '#',
//        ));
//        return $menu;
//    }
}