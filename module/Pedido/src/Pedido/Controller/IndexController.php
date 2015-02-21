<?php


namespace Pedido\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Pedido\Form\PedidoForm;
use Pedido\Form\PesquisaClientePedidoForm;
use Pedido\Form\PedidoFilter;
use Produto\Entity\Produto;
use Zend\Debug\Debug;
use Zend\Stdlib\Hydrator\ClassMethods;



class IndexController extends AbstractActionController 
{
    
    protected $em;
    protected $entity;

    public function __construct() {
        $this->entity = 'Pedido\Entity\Pedido';
        
    }
    
    public function indexAction(){
         return new ViewModel();
//        $pedido = $this->getEM()->getRepository($this->entity)->findall();
//        
//        return new ViewModel(
//                array('pedidos'=>$pedido));
        
    }
    
    public function insertAction() {
        
        $form = new PedidoForm();
        $form2 = new PesquisaClientePedidoForm();
        $request = $this->getRequest();
        if ($request->ispost()){
            
            $form->setInputFilter(new PedidoFilter());
            
            $form->setData($request->getPost());
            
            if ($form->isValid()){
                
                $produto = new  $this->entity($form->getData());
                
                $this->getEM()->persist($produto);
                $this->getEM()->flush();
                return $this->redirect()->toRoute('pedido');
                
            }
            
        }
        
        
        return array('form'=>$form,'form2'=>$form2);
    }

    
    public function editAction(){
            ///$this->flashMessenger()->addInfoMessage("Registro não encontrado!");
        
        $request = $this->getRequest();
        
        $id = (int) $this->params()->fromRoute('id', 0);

        $form = new ProdutoForm();  
        
        $produto = $this->getEM()->getRepository($this->entity)
                ->find($id);

        if ($request->ispost()){

            $form->setInputFilter(new ProdutoFilter());
            $data = $request->getPost()->toArray();
            $form->setData($data);
            if ($form->isValid()){
                
    //            Debug::dump($produto, 'Dump do ID', true);

                $dados = $this->getEM()->getReference($this->entity,$id);

                $hydrator = new classmethods();
                $hydrator->hydrate($data,$dados);

                $this->getEM()->persist($dados);
                $this->getEM()->flush();

                return $this->redirect()->toRoute('produto');
                
            }
            
        }else{
            $form->setData($produto->toArray());
        }

        return array(
             'id' => $id,
             'form' => $form,
         );
    }
    
    function deleteAction() {

        $id = (int) $this->params()->fromRoute('id', 0);
        
        $produto = $this->getEM()->getRepository($this->entity)
                ->find($id);
        
        $this->getEM()->remove($produto);
        $this->getEM()->flush();
        return $this->redirect()->toRoute($this->route,array('controller'=>  $this->controller));
        
    }
    
    private function getEM() {
        
        $this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        return $this->em;     
    }

    
}
