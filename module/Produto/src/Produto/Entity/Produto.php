<?php

namespace Produto\Entity;

use Doctrine\ORM\Mapping as ORM;
use Utility\Entity\AbstractEntity;

/**
 * Produto
 *
 * @ORM\Table(name="produto")
 * @ORM\Entity
 */
class Produto extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ProdCod", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $prodcod;

    /**
     * @var string
     *
     * @ORM\Column(name="Descricao", type="string", length=40, nullable=false)
     */
    private $descricao;

    /**
     * @var float
     *
     * @ORM\Column(name="Valor", type="float", precision=10, scale=0, nullable=false)
     */
    private $valor;



    /**
     * Get prodcod
     *
     * @return integer 
     */
    public function getProdcod()
    {
        return $this->prodcod;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Produto
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set valor
     *
     * @param float $valor
     * @return Produto
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return float 
     */
    public function getValor()
    {
        return $this->valor;
    }
}
