<?php

declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

final class CategoryAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $filter): void
    {
        $filter
            ->add('title')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('active')
            ;
    }

    protected function configureListFields(ListMapper $list): void
    {
        $list
            ->add('title')
            ->add('parent')
            ->add('root')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('active')
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
            ->add('title')
            ->add('parent')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('active')
            ;
    }

    protected function configureShowFields(ShowMapper $show): void
    {
        $show
//            ->add('id')
            ->add('title')
            ->add('parent')
            ->add('root')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('lft')
            ->add('lvl')
            ->add('rgt')
            ->add('active')
            ;
    }
}
