<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use AppBundle\Repository\apiKeyRepository;

class TutoAdmin extends Admin
{
    public $supportsPreviewMode = true;

	/**
	* Configuration des champs à afficher dans les actions Edit et Create tuto de Sonata
	*
	*/
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper->with("Création d'un tuto", array('description' => "Ce formulaire permet la création d'un tuto.")) ;
        $formMapper->add('titre', 'text', array('help'=>"Indiquer un titre décrivant ce tuto.")) ;
        $formMapper->add('description', 'textarea', array('help'=>"Indiquer un description décrivant ce tuto.", 'required'=>false)) ;
        $formMapper->add('type', 'entity', array('class' => 'AppBundle\Entity\Type', 'property' => 'type')) ;
        $formMapper->add('langages', 'entity', array('class' => 'AppBundle\Entity\Langage', 'property' => 'langage', 'multiple' => true)) ;
        $formMapper->add('membres', 'entity', array('class' => 'AppBundle\Entity\Membre', 'property' => 'nom', 'multiple' => true)) ;
        $formMapper->add('media', 'text', array('help'=>"Indiquer un lien Youtube.", 'label'=>'Lien Youtube', 'required'=>false)) ;
        $formMapper->add('active', 'choice', array('help'=>"Activer l'affichage du tuto", 'choices' => array(
                '0' => 'Désactiver',
                '1' => 'Activer'
            ))) ;
    }

    /**
    * Configuration des filtres utilisés pour filtrer et afficher la liste des tutos
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
    }

    /**
    * Configuration de l'affichage d'une liste de tutos
    * Spécification du champ affiché quand tous les modèles sont affichés (addIdentifier() méthode)
    *
    */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id');
        $listMapper->addIdentifier('titre');
        $listMapper->addIdentifier('type');
        $listMapper->addIdentifier('dataFarm');
        $listMapper
        ->addIdentifier('active', 'choice', array(
            'choices' => array(
                '0' => 'Désactivé',
                '1' => 'Activé'
            ),
            'catalogue' => 'AppBundle'
        ));
    }
}
