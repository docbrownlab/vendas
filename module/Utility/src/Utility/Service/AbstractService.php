<?php


namespace Utility\Service;

use Zend\Mvc\Controller\AbstractActionController;

class AbstractService  extends AbstractActionController  {

    protected $em;
    
    public function getEM() {
        
        $this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        return $this->em;     
        
    }
    
    
}
