<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use AppBundle\Repository\apiKeyRepository;

class LangageAdmin extends Admin
{
    public $supportsPreviewMode = true;

	/**
	* Configuration des champs à afficher dans les actions Edit et Create Langage de Sonata
	*
	*/
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper->with("Création d'un langage de programmation", array('description' => "Ce formulaire permet la création d'un langage de programmation.")) ;
        $formMapper->add('langage', 'text', array('help'=>"Indiquer le nom de ce langage.")) ;
    }

    /**
    * Configuration des filtres utilisés pour filtrer et afficher la liste des langages
    *
    */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('id');
        $datagridMapper->add('langage');
    }

    /**
    * Configuration de l'affichage d'une liste de langages
    * Spécification du champ affiché quand tous les modèles sont affichés (addIdentifier() méthode)
    *
    */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id');
        $listMapper->addIdentifier('langage');
    }
}
