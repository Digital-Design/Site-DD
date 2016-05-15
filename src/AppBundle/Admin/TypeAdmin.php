<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use AppBundle\Repository\apiKeyRepository;

class TypeAdmin extends Admin
{
    public $supportsPreviewMode = true;

	/**
	* Configuration des champs à afficher dans les actions Edit et Create Type de Sonata
	*
	*/
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper->with("Création d'un type", array('description' => "Ce formulaire permet la création d'un type.")) ;
        $formMapper->add('type', 'text', array('help'=>"Indiquer le nom de ce type.")) ;
    }

    /**
    * Configuration des filtres utilisés pour filtrer et afficher la liste des types
    *
    */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('id');
        $datagridMapper->add('type');
    }

    /**
    * Configuration de l'affichage d'une liste de type
    * Spécification du champ affiché quand tous les modèles sont affichés (addIdentifier() méthode)
    *
    */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id');
        $listMapper->addIdentifier('type');
    }
}
