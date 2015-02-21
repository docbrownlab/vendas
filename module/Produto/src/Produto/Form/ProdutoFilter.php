<?php


namespace Produto\Form;

use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Input;
use Zend\Validator;
use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\Validator\NotEmpty;


class ProdutoFilter extends InputFilter
{
    public function __construct() {
        
        $nome = new Input('descricao');
        $nome->setRequired(true)
                ->getFilterChain()
                    ->attach(new StringTrim())
                    ->attach(new StripTags());
        $nome->getValidatorChain()
                    ->attach(new NotEmpty());
        
        
        $this->add($nome);

        $valor = new Input('valor');
        $valor->setRequired(true)
                ->getFilterChain()
                    ->attach(new StringTrim())
                    ->attach(new StripTags());
        $valor->getValidatorChain()
                    ->attach(new NotEmpty());
        
        
        $this->add($valor);
        
        
    }
    
}
