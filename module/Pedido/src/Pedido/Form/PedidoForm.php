<?php


namespace Pedido\Form;

use Zend\Form\Form;
use Zend\Form\Element\Text;
use Zend\Form\Element\Button;
use Zend\Form\Element\Select;
use Zend\Form\Element\Checkbox;

class PedidoForm extends Form
{
   
    public function __construct() {
        
        parent::__construct(null);
        
        $this->setAttribute('method', 'post');
        $this->setAttribute('role', 'form');
        $this->setAttribute('class', '.form-inline');

        $select = new Select('tpfrete');
        $select->setLabel('Tipo')
                ->setAttributes(array(
                    'class'=> 'form-control input-sm'
                ));
        
        $select->setValueOptions(array('1'=>'PAC',
            '2'=>'SEDEX',
            '3'=>'SEDEX10',
            '4'=>'TRANSPORTADORA',
            '5'=>'FROTA PRÓPRIA',
            '6'=>'CLIENTE RETIRA'));         
        
        $this->add($select);
        

        $NF = new Checkbox('nf');
        $NF->setlabel('Acompanha NF')
                ->setattributes(array(
                    
                ));
        $this->add($NF);

        $vrfrete = new Text('vrfrete');
        $vrfrete->setlabel('Valor')
                ->setattributes(array(
                    'maxlength'=>10,
                    'size'=>4,
                    'class'=> 'form-control input-sm '
                ));
        $this->add($vrfrete);
        
        $valor = new Text('valor');
        $valor->setlabel('Valor')
                ->setattributes(array(
                    'maxlength'=>10,
                    'size'=>10,
                    'class'=> 'form-control input-sm '
                ));
        $this->add($valor);

        
        for ($x=1; $x<=4;$x++){
             
            $qtdeGrid[$x] = new Text('qtdeGrid'.$x);
            $qtdeGrid[$x]->setlabel('')
                    ->setattributes(array(
                        'maxlength'=>4,
                        'size'=>2,
                        'class'=> 'form-control input-sm '
                    ));
            $this->add($qtdeGrid[$x]);

            $qtdeGrid[$x] = new Text('qtdeGrid'.$x);
            $qtdeGrid[$x]->setlabel('')
                    ->setattributes(array(
                        'maxlength'=>4,
                        'size'=>2,
                        'class'=> 'form-control input-sm '
                    ));
            $this->add($qtdeGrid[$x]);
            
        }
        
        
        $button = new Button('submit');
        $button->setLabel('Gravar')
                 ->setattributes(array(
                    'type'=>'submit',
                    'class'=> 'btn btn-default'
                ));       
        
         $this->add($button);
        
        
        
        
    }
    
    
    
}
