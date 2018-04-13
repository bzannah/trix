<?php


namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class TaskAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title', TextType::class)
            ->add('description', TextareaType::class)
            ->add('attachment', CheckboxType::class)
            ->add('project', 'entity', array('class' => 'AppBundle\Entity\Project'), array('edit' => 'list'))
            ->add('user', 'entity', array('class' => 'AppBundle\Entity\User'), array('edit' => 'list'))
            ->add(
                'due_date',
                'date',
                array(
                    'input'  => 'datetime',
                    'widget' => 'single_text',
                    'format' => 'yyyy-MM-dd',
                )
            );
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(
        DatagridMapper $datagridMapper
    ) {
        $datagridMapper
            ->add('user')
            ->add('title')
            ->add('description')
            ->add('dueDate');
    }

    // Fields to be shown on lists
    protected function configureListFields(
        ListMapper $listMapper
    ) {
        $listMapper
            ->addIdentifier('user')
            ->add('title')
            ->add('project')
            ->add('dueDate');
    }
}
