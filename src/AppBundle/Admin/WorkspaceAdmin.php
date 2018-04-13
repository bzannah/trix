<?php

//  src/AppBundle/Admin/WorkspaceAdmin.php
namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class WorkspaceAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', TextType::class)
            ->add('description', TextareaType::class);
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(
        DatagridMapper $datagridMapper
    ) {
        $datagridMapper
            ->add('name')
            ->add('description');
    }

    // Fields to be shown on lists
    protected function configureListFields(
        ListMapper $listMapper
    ) {
        $listMapper
            ->addIdentifier('name')
            ->add('description');
    }
}
