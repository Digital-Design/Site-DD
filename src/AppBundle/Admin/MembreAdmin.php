<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use AppBundle\Repository\apiKeyRepository;

class MembreAdmin extends Admin
{
    public $supportsPreviewMode = true;

	/**
	* Configuration des champs à afficher dans les actions Edit et Create membre de Sonata
	*
	*/
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper->with("Création d'un Membre", array('description' => "Ce formulaire permet la création d'un membre.")) ;
        $formMapper->add('nom', 'text', array('help'=>"Indiquer un nom décrivant ce membre.")) ;
        $formMapper->add('prenom', 'text', array('help'=>"Indiquer un prénom décrivant ce membre.")) ;
        $formMapper->add('description', 'textarea', array('help'=>"Indiquer une description ce membre.", 'required'=>false)) ;
        $formMapper->add('image', 'text', array("help"=>"Indiquer une image décrivant ce membre.", 'required'=>false)) ;
        $formMapper->add('site', 'url', array("help"=>"Indiquer un site décrivant ce membre.", 'required'=>false)) ;

    }

    /**
    * Configuration des filtres utilisés pour filtrer et afficher la liste des membres
    *
    */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('id');
        $datagridMapper->add('nom');
        $datagridMapper->add('prenom');
        $datagridMapper->add('image');
        $datagridMapper->add('site');
    }

    /**
    * Configuration de l'affichage d'une liste de membres
    * Spécification du champ affiché quand tous les modèles sont affichés (addIdentifier() méthode)
    *
    */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id');
        $listMapper->addIdentifier('nom');
        $listMapper->addIdentifier('prenom');
        $listMapper->addIdentifier('image');
        $listMapper->addIdentifier('site');
    }
}
