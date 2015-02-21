<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Cliente\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Cliente\Form\ClienteForm;
use Cliente\Form\ClienteFilter;
use Cliente\Entity\Cliente;
use Zend\Stdlib\Hydrator\ClassMethods;
use DateTime;

class IndexController extends AbstractActionController
{
    protected $em;
    protected $entity;

    public function __construct() {
        $this->entity = 'Cliente\Entity\Cliente';
        
    }    
    
    public function indexAction()
    {
        
        $cliente = $this->getEM()->getRepository($this->entity)->findAll();
        
        return new ViewModel(
                array(
             'albums' => $cliente,
         ));
        
    }
    public function  insertAction()
    {
        
        $form = new ClienteForm();
        
        $request = $this->getRequest();
        
        if ($request->isPost()) {
             
            $form->setInputFilter(new ClienteFilter());
             
             $form->setData($request->getPost());

             if ($form->isValid()) {
                 
                $cliente = new $this->entity($form->getData());
                
                $this->getEM()->persist($cliente);
                $this->getEM()->flush();
                return $this->redirect()->toRoute('cliente');
             }
         }
        
        
        return array('form' => $form);

    }
    public function editAction() {
        
        $request = $this->getRequest();
        
        $id = (int) $this->params()->fromRoute('id', 0);
        
        $form = new ClienteForm();
        
        $cliente = $this->getEM()->getRepository($this->entity)
                ->find($id);
        
        if ($request->isPost()) {
            
            $form->setInputFilter(new ClienteFilter());
            $data = $request->getPost()->toArray();
            $form->setData($data);

            if ($form->isValid()) {
                 
                $dados = $this->getEM()->getReference($this->entity,$id);
                $hydrator = new classmethods();
                $hydrator->hydrate($data,$dados);

                $this->getEM()->persist($dados);
                $this->getEM()->flush();

                return $this->redirect()->toRoute('cliente');


            }

         }else{
            $form->setData($cliente->toArray());
        }
        return array(
             'id' => $id,
             'form' => $form,
         );
        
    }
    
    public function deleteAction() {
        
        $id = (int) $this->params()->fromRoute('id', 0);
        
        //$cliente = new Cliente();
        $cliente = $this->getEM()->getRepository('Cliente\Entity\Cliente')
                ->find($id);
        
        
        $this->getEM()->remove($cliente);
        $this->getEM()->flush();
        return $this->redirect()->toRoute($this->route,array('controller'=>  $this->controller));
        
    }
   
    private function getEM() {
        
        $this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        return $this->em;     
        
    }
    
    
}

