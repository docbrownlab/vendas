<?php


namespace Pedido\Form;

use Zend\Form\Form;
use Zend\Form\Element\Text;
use Zend\Form\Element\Button;
use Zend\Form\Element\Select;
use Zend\Form\Element\Checkbox;

class PesquisaClientePedidoForm extends Form
{
   
    public function __construct() {
        
        parent::__construct(null);
        
        $this->setAttribute('method', 'post');
        $this->setAttribute('role', 'form');
        $this->setAttribute('class', '.form-inline');

        $documento = new Text('documento');
        $documento->setlabel('Documento')
                ->setattributes(array(
                    'maxlength'=>10,
                    'size'=>4,
                    'class'=> 'form-control input-sm '
                ));
        $this->add($documento);

        $pesquisardoc = new Button('submit');
        $pesquisardoc->setLabel('Buscar')
                 ->setattributes(array(
                    'type'=>'submit',
                    'class'=> 'btn btn-default'
                ));       
        
         $this->add($pesquisardoc);
        
        
    }
    
    
    
}
