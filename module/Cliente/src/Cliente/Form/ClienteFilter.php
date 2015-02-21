<?php

namespace Cliente\Form;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Input;
use Zend\Validator;
use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\Validator\NotEmpty;

class ClienteFilter extends Inputfilter {

    public function __construct(){
        
        $nome = new Input('descricao');
        $nome->setRequired(true)
                ->getFilterChain()
                    ->attach(new StringTrim())
                    ->attach(new StripTags());
        $nome->getValidatorChain()
                    ->attach(new NotEmpty());
        
        
        $this->add($nome);

        $mail = new Input('email');
        $mail->setRequired(true)
                ->getFilterChain()
                    ->attach(new StringTrim())
                    ->attach(new StripTags());
        $mail->getValidatorChain()
                    ->attach(new NotEmpty());
        
        
        $this->add($mail);
        
        $logradouro = new Input('logradouro');
        $logradouro->setRequired(false)
                ->getFilterChain()
                    ->attach(new StringTrim())
                    ->attach(new StripTags());
        $this->add($logradouro);
        
        
    }
    
    
}
