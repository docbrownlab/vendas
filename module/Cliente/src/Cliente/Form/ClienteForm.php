<?php

namespace Cliente\Form;

use Zend\Form\Form;
use Zend\Form\Element\Text;
use Zend\Form\Element\Email;
use Zend\Form\Element\Number;
use Zend\Form\Element\Button;
use Zend\Form\Element\Select;
use Cliente\Form\ClienteFilter;
use Utility\Functions\Functions;
use Zend\Form\Element\Radio;
use DateTime;

class ClienteForm extends Form{
    
    public function __construct() {
        
        parent::__construct(null);
        $this->setAttribute('method', 'post');
        $this->setAttribute('role', 'form');
        $this->setAttribute('class', '.form-inline');
        
        $dtcadastro = new Text('dtcadastro');
        $dtcadastro->setlabel('')
                ->setattributes(array(
                    'value'=> date('Y-m-d')
                ));
        $this->add($dtcadastro);

        $radio = new Radio('tipo');
        $radio->setLabel('Tipo');
        $radio->setAttributes(array(
            'id'=>'radioTipo'
        ));
        $radio->setValueOptions(
                array(
            '0' => 'Física',
            '1' => 'Jurídica',
        ));
        $radio->setValue('selected');

        $this->add($radio);        

        $documento = new Text('documento');
        $documento->setlabel('CPF')
                ->setattributes(array(
                    'id'=>'documento',
                    //'maxlength'=>16,
                    'size'=>5,
                    'class'=> 'form-control input-sm'
                ));
        $this->add($documento);
        
        
        $nome = new Text('descricao');
        $nome->setlabel('Nome')
                ->setattributes(array(
                    'maxlength'=>40,
                    'size'=>40,
                    'class'=> 'form-control input-sm '
                ));
        $this->add($nome);
        
        
        $email = new Email('email');
        $email->setLabel('E-Mail')
               ->setattributes(array(
                   'maxlength'=>20,
                   'size'=>20,
                    'class'=> 'form-control  input-sm'
                ));                
        $this->add($email);  
        
        $ddd1 = new Text('ddd1');
        $ddd1->setLabel('DDD')
               ->setattributes(array(
                   'maxlength'=>2,
                   'size'=>5,
                    'class'=> 'form-control  input-sm'
                ));                
        $this->add($ddd1);  

        $telefone1 = new Text('telefone1');
        $telefone1->setLabel('Telefone')
               ->setattributes(array(
                   'maxlength'=>10,
                   'size'=>20,
                    'class'=> 'form-control  input-sm'
                ));                
        $this->add($telefone1);  

        $ddd2 = new Text('ddd2');
        $ddd2->setLabel('DDD')
               ->setattributes(array(
                   'maxlength'=>2,
                   'size'=>5,
                    'class'=> 'form-control  input-sm'
                ));                
        $this->add($ddd2);  

        $telefone2 = new Text('telefone2');
        $telefone2->setLabel('Telefone')
               ->setattributes(array(
                   'maxlength'=>10,
                   'size'=>20,
                    'class'=> 'form-control  input-sm'
                ));                
        $this->add($telefone2);  
        
        $logradouro = new Text('logradouro');
        $logradouro->setlabel('Logradouro')
                ->setattributes(array(
                    'maxlength'=>70,
                    'size'=>60,
                    'class'=> 'form-control input-sm'
                ));
        $this->add($logradouro);

        
        $number = new Number('numero');
        $number
            ->setLabel('Número')
            ->setAttributes(array(
                    'maxlength'=>4,
                    'size'=>5,
                    //'pattern'=>'[A-Za-z]{3}',
                    'class'=> 'form-control input-sm'
                ));       
        $this->add($number);
        
        $complemento = new Text('complemento');
        $complemento->setlabel('Complemento')
                ->setattributes(array(
                    'maxlength'=>20,
                     'size'=>20,
                    'class'=> 'form-control input-sm'
                ));
        $this->add($complemento);

        
        $bairro = new Text('bairro');
        $bairro->setlabel('Bairro')
                ->setattributes(array(
                    'maxlength'=>25,
                    'size'=>20,
                    'class'=> 'form-control input-sm'
                ));
        $this->add($bairro);

        $cidade = new Text('cidade');
        $cidade->setlabel('Cidade')
                ->setattributes(array(
                    'maxlength'=>30,
                    'size'=>20,
                    'class'=> 'form-control input-sm'
                ));
        $this->add($cidade);
        
        $select = new Select('uf');
        $select->setLabel('Estado')
                ->setAttributes(array(
                    'class'=> 'form-control input-sm'
                ));
        
        $uf = new Functions();
        
        $select->setValueOptions($uf->getUf());         
        
        $this->add($select);

        $cidade = new Text('cep');
        $cidade->setlabel('CEP')
                ->setattributes(array(
                    'maxlength'=>30,
                    'class'=> 'form-control'
                ));
        $this->add($cidade);
        
        $button = new Button('submit');
        $button->setLabel('Gravar')
                 ->setattributes(array(
                    'type'=>'submit',
                    'class'=> 'btn btn-default'
                ));       
        
         $this->add($button);
        /*
        $this->add(array(
             'name' => 'nome',
             'type' => 'Text',
             'options' => array(
                 'label' => 'Nome',
                 'maxlength' => 40,
                 'class'=> 'form-control',
             ),
         'attributes' => array(
         'maxlength' => 40,
          'class'=> 'form-control',
          )
         * 
         ));
    

        $this->add(array(
             'name' => 'email',
             'type' => 'Text',
             'options' => array(
                 'label' => 'E-Mail',
             ),
         ));
        
        $this->add(array(
             'name' => 'logradouro',
             'type' => 'Text',
             'options' => array(
                 'label' => 'Logradouro',
             ),
         ));
        
        $this->add(array(
             'name' => 'numero',
             'type' => 'Text',
             'options' => array(
                 'label' => 'Número',
             ),
         ));
         
        $this->add(array(
             'name' => 'complemento',
             'type' => 'Text',
             'options' => array(
                 'label' => 'Complemento',
             ),
         ));

        $this->add(array(
             'name' => 'bairro',
             'type' => 'Text',
             'options' => array(
                 'label' => 'Bairro',
             ),
         ));
        
        $this->add(array(
             'name' => 'cidade',
             'type' => 'Text',
             'options' => array(
                 'label' => 'Cidade',
             ),
         ));
        
        $this->add(array(
             'name' => 'uf',
             'type' => 'Text',
             'options' => array(
                 'label' => 'UF',
             ),
         ));
        
        
         $this->add(array(
             'name' => 'submit',
             'type' => 'Submit',
             'attributes' => array(
                 'value' => 'Gravar',
                 'id' => 'submitbutton',
             ),
         ));        
             * 
         */
        
        
    }
    
}
