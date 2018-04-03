<?php
namespace AppBundle\Admin;

use AppBundle\Entity\Workspace;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class ProjectAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title' , TextType::class)
            ->add('description', TextareaType::class)
            ->add('workspace','entity',
                array(
                    'class' => 'AppBundle\Entity\Workspace',
                    'property' => 'name'
                ))
            ->add('due_date', 'date',
                array(
                    'input'  => 'datetime',
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                ));
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(
        DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title')
            ->add('description');
    }

    // Fields to be shown on lists
    protected function configureListFields(
        ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title')
            ->add('description');
    }
}