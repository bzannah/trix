<?php


namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserAdmin extends AbstractAdmin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('username', TextType::class)
            ->add('email', EmailType::class)
            ->add('password', PasswordType::class);
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(
        DatagridMapper $datagridMapper
    ) {
        $datagridMapper
            ->add('username')
            ->add('email');
    }

    // Fields to be shown on lists
    protected function configureListFields(
        ListMapper $listMapper
    ) {
        $listMapper
            ->addIdentifier('username')
            ->add('email');
    }
}
