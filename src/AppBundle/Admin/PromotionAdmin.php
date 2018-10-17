<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use AppBundle\Repository\apiKeyRepository;

class PromotionAdmin extends Admin
{
    public $supportsPreviewMode = true;

	/**
	* Configuration des champs à afficher dans les actions Edit et Create promotion de Sonata
	*
	*/
    protected function configureFormFields(FormMapper $formMapper)
    {

        $promotion = $this->getSubject();

        $fileFieldOptions = array('required' => false, 'help'=>"Indiquer un média décrivant cette promotion.", 'label' => 'Media');
        if ($promotion && ($webPath = $promotion->getWebPath())) {

            $container = $this->getConfigurationPool()->getContainer();
            $fullPath = $container->get('request')->getBasePath().'/'.$webPath;

            $fileFieldOptions['help'] = '<img src="'.$fullPath.'" class="admin-preview" height="300" />';
        }
        $formMapper->with("Création d'une promotion", array('description' => "Ce formulaire permet la création d'une promotion.")) ;
        $formMapper->add('date', 'text', array('label' => 'Date de la promotion', 'help'=>"Interval d'années de cette promotion (ex : 2015 - 2016)")) ;
        $formMapper->add('membres', 'entity', array('class' => 'AppBundle\Entity\Membre', 'property' => 'nom', 'multiple' => true, 'required'=>false)) ;
        $formMapper->add('file', 'file', $fileFieldOptions) ;
    }

    public function prePersist($promotion) {
      $this->saveFile($promotion);
    }

    public function preUpdate($promotion) {
      $this->saveFile($promotion);
    }

    public function saveFile($promotion) {
      $promotion->upload();
    }

    private function manageFileUpload($promotion) {
      if ($promotion->getFile()) {
        $promotion->refreshUpdated();
      }
    }

    /**
    * Configuration des filtres utilisés pour filtrer et afficher la liste des promotions
    *
    */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
      $datagridMapper->add('id');
      $datagridMapper->add('date');
      $datagridMapper->add('membres');

    }

    /**
    * Configuration de l'affichage d'une liste de promotions
    * Spécification du champ affiché quand tous les modèles sont affichés (addIdentifier() méthode)
    *
    */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id');
        $listMapper->add('date');
        $listMapper->add('membre');
        $listMapper->add('media', 'string', array('template' => 'admin/list_image.html.twig'));
    }
}
