<?php

namespace Usuario\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Usuario\Entity\Usuario;
use Usuario\Form\UsuarioForm;
use Usuario\Form\UsuarioFilter;
use Zend\Stdlib\Hydrator\ClassMethods;

class IndexController extends AbstractActionController
{
    protected $em;
    protected $entity;

    public function __construct() {
        $this->entity = 'Usuario\Entity\Usuario';
        
    }    

    public function indexAction()
    {
        
        $entity = $this->getEM()->getRepository($this->entity)->findAll();
        
        return new ViewModel(
                array(
             'registros' => $entity,
         ));
    }
    
    public function  insertAction()
    {
        
        $form = new UsuarioForm();
        
        $request = $this->getRequest();
        
        if ($request->isPost()) {
             
            $form->setInputFilter(new UsuarioFilter());
             
             $form->setData($request->getPost());

             if ($form->isValid()) {
                 
                $entity = new $this->entity($form->getData());
                
                $this->getEM()->persist($entity);
                $this->getEM()->flush();
                return $this->redirect()->toRoute('usuario');
             }
         }
        
        
        return array('form' => $form);

    }    
    
    public function editAction(){
        
        $request = $this->getRequest();
        
        $id = (int) $this->params()->fromRoute('id', 0);

        $form = new UsuarioForm();  
        
        $entity = $this->getEM()->getRepository($this->entity)
                ->find($id);

        if ($request->ispost()){

            $form->setInputFilter(new UsuarioFilter());
            $data = $request->getPost()->toArray();
            $form->setData($data);
            if ($form->isValid()){

                $dados = $this->getEM()->getReference($this->entity,$id);

                $hydrator = new classmethods();
                $hydrator->hydrate($data,$dados);

                $this->getEM()->persist($dados);
                $this->getEM()->flush();

                return $this->redirect()->toRoute('usuario');
                
            }
            
        }else{
            $form->setData($entity->toArray());
        }

        return array(
             'id' => $id,
             'form' => $form,
         );
    }
    
    function deleteAction() {

        $id = (int) $this->params()->fromRoute('id', 0);
        
        $entity = $this->getEM()->getRepository($this->entity)
                ->find($id);
        
        $this->getEM()->remove($entity);
        $this->getEM()->flush();
        return $this->redirect()->toRoute($this->route,array('controller'=>  $this->controller));
        
    }

    
    private function getEM() {
        
        $this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        return $this->em;     
        
    }


}

