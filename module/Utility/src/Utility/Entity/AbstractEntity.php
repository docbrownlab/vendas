<?php
namespace Utility\Entity;
use Zend\Stdlib\Hydrator\ClassMethods;


abstract class AbstractEntity {
    
    
     public function __construct(array $data) {
        $hydrator = new ClassMethods();
        $hydrator->hydrate($data,  $this);
    }
    
    public function toArray() {
        $hydrator = new ClassMethods();
        return $hydrator->extract($this);
    }
    
}
