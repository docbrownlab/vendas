<?php


namespace Produto\Form;

use Zend\Form\Form;
use Zend\Form\Element\Text;
use Zend\Form\Element\Button;

class ProdutoForm extends Form
{
   
    public function __construct() {
        
        parent::__construct(null);
        
        $this->setAttribute('method', 'post');
        $this->setAttribute('role', 'form');
        $this->setAttribute('class', '.form-inline');


        $nome = new Text('descricao');
        $nome->setlabel('Nome')
                ->setattributes(array(
                    'maxlength'=>40,
                    'size'=>40,
                    'class'=> 'form-control input-sm '
                ));
        $this->add($nome);
        
        $valor = new Text('valor');
        $valor->setlabel('Valor')
                ->setattributes(array(
                    'maxlength'=>10,
                    'size'=>10,
                    'class'=> 'form-control input-sm '
                ));
        $this->add($valor);
        
        $button = new Button('submit');
        $button->setLabel('Gravar')
                 ->setattributes(array(
                    'type'=>'submit',
                    'class'=> 'btn btn-default'
                ));       
        
         $this->add($button);
        
        
        
        
    }
    
    
    
}
