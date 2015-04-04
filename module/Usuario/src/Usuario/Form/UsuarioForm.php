<?php

namespace Usuario\Form;

use Zend\Form\Form;
use Zend\Form\Element\Text;
use Zend\Form\Element\Email;
use Zend\Form\Element\Button;
use Usuario\Form\UsuarioFilter;
use Utility\Functions\Functions;

class UsuarioForm extends Form{
    
    public function __construct() {
        
        parent::__construct(null);
        $this->setAttribute('method', 'post');
        $this->setAttribute('role', 'form');
        $this->setAttribute('class', '.form-inline');
        
        $nome = new Text('nome');
        $nome->setlabel('Nome:')
                ->setattributes(array(
                    'id'=>'nome',
                    'maxlength'=>50,
                    'size'=>10,
                    'class'=> 'form-control input-sm'

                ));
        $this->add($nome);


        $usuario = new Text('login');
        $usuario->setlabel('Usuário:')
                ->setattributes(array(
                    'id'=>'login',
                    'maxlength'=>16,
                    'size'=>10,
                    'class'=> 'form-control input-sm'
                ));
        $this->add($usuario);
        
        $email = new Email('email');
        $email->setLabel('E-Mail')
               ->setattributes(array(
                   'maxlength'=>20,
                   'size'=>20,
                    'class'=> 'form-control  input-sm'
                ));                
        $this->add($email);        
        
        $senha = new Text('senha');
        $senha->setlabel('Senha')
                ->setattributes(array(
                    'maxlength'=>70,
                    'size'=>60,
                    'class'=> 'form-control input-sm'
                ));
        $this->add($senha);
        
        $button = new Button('submit');
        $button->setLabel('Gravar')
                 ->setattributes(array(
                    'type'=>'submit',
                    'class'=> 'btn btn-default'
                ));       
        
         $this->add($button);
        
        
    }
    
}
