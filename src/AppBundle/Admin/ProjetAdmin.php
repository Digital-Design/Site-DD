<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use AppBundle\Repository\apiKeyRepository;

class ProjetAdmin extends Admin
{
    public $supportsPreviewMode = true;

	/**
	* Configuration des champs à afficher dans les actions Edit et Create projet de Sonata
	*
	*/
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper->with("Création d'un projet", array('description' => "Ce formulaire permet la création d'un projet.")) ;
        $formMapper->add('titre', 'text', array('help'=>"Indiquer un titre décrivant ce projet.")) ;
        $formMapper->add('date', 'date', array('help'=>"Indiquer la date du projet.", 'required'=>false)) ;
        $formMapper->add('description', 'textarea', array('required' => false,'help'=>"Indiquer un description décrivant ce projet.")) ;
        $formMapper->add('type', 'entity', array('class' => 'AppBundle\Entity\Type', 'property' => 'type')) ;
        $formMapper->add('langages', 'entity', array('class' => 'AppBundle\Entity\Langage', 'property' => 'langage', 'multiple' => true)) ;
        $formMapper->add('membres', 'entity', array('class' => 'AppBundle\Entity\Membre', 'property' => 'nom', 'multiple' => true)) ;
        $formMapper->add('media', 'file', array('required' => false, 'help'=>"Indiquer un média décrivant ce projet.")) ;
        $formMapper->add('active', 'choice', array('help'=>"Activer l'affichage du projet", 'choices' => array(
                '0' => 'Désactiver',
                '1' => 'Activer'
            ))) ;
        $formMapper->add('fini', 'choice', array('help'=>"Activer si le projet est fini", 'choices' => array(
                '0' => 'Non fini',
                '1' => 'Fini'
            ))) ;
    }

    public function prePersist($image)
    {
        $this->manageFileUpload($image);
    }

    public function preUpdate($image)
    {
        $this->manageFileUpload($image);
    }

    private function manageFileUpload($image)
    {
        if ($image->getMedia()) {
            $image->refreshUpdated();
        }
    }

    /**
    * Configuration des filtres utilisés pour filtrer et afficher la liste des Clés API
    *
    */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('id');
        $datagridMapper->add('titre');
        $datagridMapper->add('type');
        $datagridMapper->add('active', 'doctrine_orm_choice', array(
            'label' => 'active'),
            'choice',
            array(
                'choices' => array(
                    '0' => 'Désactivé',  // The key (value1) will contain the actual value that you want to filter on
                    '1' => 'Activé',  // The 'Name Two' is the "display" name in the filter
            ),
            'expanded' => true,
            'multiple' => true));
        $datagridMapper->add('fini', 'doctrine_orm_choice', array(
            'label' => 'fini'),
            'choice',
            array(
                'choices' => array(
                    '0' => 'Non Fini',  // The key (value1) will contain the actual value that you want to filter on
                    '1' => 'Fini',  // The 'Name Two' is the "display" name in the filter
            ),
            'expanded' => true,
            'multiple' => true));
    }

    /**
    * Configuration de l'affichage d'une liste d'utilisateurs
    * Spécification du champ affiché quand tous les modèles sont affichés (addIdentifier() méthode)
    *
    */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id');
        $listMapper->addIdentifier('titre');
        $listMapper->addIdentifier('type');
        $listMapper
        ->addIdentifier('active', 'choice', array(
            'choices' => array(
                '0' => 'Désactivé',
                '1' => 'Activé'
            ),
            'catalogue' => 'AppBundle'
        ));
        $listMapper
        ->addIdentifier('fini', 'choice', array(
            'choices' => array(
                '0' => 'Non Fini',
                '1' => 'Fini'
            ),
            'catalogue' => 'AppBundle'
        ));
        $listMapper->addIdentifier('date');
    }
}