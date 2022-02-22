<?php

declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

final class ProductAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $filter): void
    {
        $filter
            ->add('name')
            ->add('description')
            ->add('category')
            ->add('active')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('rate')
            ->add('price')
            ;
    }

    protected function configureListFields(ListMapper $list): void
    {
        $list
            ->add('name')
            ->add('description')
            ->add('category')
            ->add('active')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('rate')
            ->add('price')
            ->add(ListMapper::NAME_ACTIONS, null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }

    protected function configureFormFields(FormMapper $form): void
    {
        $form
            ->add('name')
            ->add('description')
            ->add('category')
            ->add('active')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('rate')
            ->add('price')
            ;
    }

    protected function configureShowFields(ShowMapper $show): void
    {
        $show
            ->add('name')
            ->add('description')
            ->add('category')
            ->add('active')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('rate')
            ->add('price')
            ;
    }
}
