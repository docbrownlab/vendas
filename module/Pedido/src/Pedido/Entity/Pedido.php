<?php

namespace Cliente\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pedido
 *
 * @ORM\Table(name="pedido")
 * @ORM\Entity
 */
class Pedido
{
    /**
     * @var integer
     *
     * @ORM\Column(name="PedCod", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pedcod;

    /**
     * @var string
     *
     * @ORM\Column(name="Referencia", type="string", length=40, nullable=false)
     */
    private $referencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clicod", type="integer", nullable=false)
     */
    private $clicod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DtPedido", type="date", nullable=false)
     */
    private $dtpedido;

    /**
     * @var float
     *
     * @ORM\Column(name="VRTotal", type="float", precision=10, scale=0, nullable=false)
     */
    private $vrtotal;

    /**
     * @var boolean
     *
     * @ORM\Column(name="NF", type="boolean", nullable=false)
     */
    private $nf;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DTEntrega", type="date", nullable=false)
     */
    private $dtentrega;

    /**
     * @var string
     *
     * @ORM\Column(name="Frete", type="string", length=40, nullable=false)
     */
    private $frete;

    /**
     * @var integer
     *
     * @ORM\Column(name="VendCod", type="integer", nullable=false)
     */
    private $vendcod;

    /**
     * @var integer
     *
     * @ORM\Column(name="StatusCod", type="integer", nullable=false)
     */
    private $statuscod;

    /**
     * @var string
     *
     * @ORM\Column(name="Rastreio", type="string", length=10, nullable=false)
     */
    private $rastreio;

    /**
     * @var float
     *
     * @ORM\Column(name="VRFrete", type="float", precision=10, scale=0, nullable=false)
     */
    private $vrfrete;

    /**
     * @var float
     *
     * @ORM\Column(name="VRFinalFrete", type="float", precision=10, scale=0, nullable=false)
     */
    private $vrfinalfrete;

    /**
     * @var integer
     *
     * @ORM\Column(name="Comissão", type="integer", nullable=false)
     */
    private $comissao;



    /**
     * Get pedcod
     *
     * @return integer 
     */
    public function getPedcod()
    {
        return $this->pedcod;
    }

    /**
     * Set referencia
     *
     * @param string $referencia
     * @return Pedido
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return string 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set clicod
     *
     * @param integer $clicod
     * @return Pedido
     */
    public function setClicod($clicod)
    {
        $this->clicod = $clicod;

        return $this;
    }

    /**
     * Get clicod
     *
     * @return integer 
     */
    public function getClicod()
    {
        return $this->clicod;
    }

    /**
     * Set dtpedido
     *
     * @param \DateTime $dtpedido
     * @return Pedido
     */
    public function setDtpedido($dtpedido)
    {
        $this->dtpedido = $dtpedido;

        return $this;
    }

    /**
     * Get dtpedido
     *
     * @return \DateTime 
     */
    public function getDtpedido()
    {
        return $this->dtpedido;
    }

    /**
     * Set vrtotal
     *
     * @param float $vrtotal
     * @return Pedido
     */
    public function setVrtotal($vrtotal)
    {
        $this->vrtotal = $vrtotal;

        return $this;
    }

    /**
     * Get vrtotal
     *
     * @return float 
     */
    public function getVrtotal()
    {
        return $this->vrtotal;
    }

    /**
     * Set nf
     *
     * @param boolean $nf
     * @return Pedido
     */
    public function setNf($nf)
    {
        $this->nf = $nf;

        return $this;
    }

    /**
     * Get nf
     *
     * @return boolean 
     */
    public function getNf()
    {
        return $this->nf;
    }

    /**
     * Set dtentrega
     *
     * @param \DateTime $dtentrega
     * @return Pedido
     */
    public function setDtentrega($dtentrega)
    {
        $this->dtentrega = $dtentrega;

        return $this;
    }

    /**
     * Get dtentrega
     *
     * @return \DateTime 
     */
    public function getDtentrega()
    {
        return $this->dtentrega;
    }

    /**
     * Set frete
     *
     * @param string $frete
     * @return Pedido
     */
    public function setFrete($frete)
    {
        $this->frete = $frete;

        return $this;
    }

    /**
     * Get frete
     *
     * @return string 
     */
    public function getFrete()
    {
        return $this->frete;
    }

    /**
     * Set vendcod
     *
     * @param integer $vendcod
     * @return Pedido
     */
    public function setVendcod($vendcod)
    {
        $this->vendcod = $vendcod;

        return $this;
    }

    /**
     * Get vendcod
     *
     * @return integer 
     */
    public function getVendcod()
    {
        return $this->vendcod;
    }

    /**
     * Set statuscod
     *
     * @param integer $statuscod
     * @return Pedido
     */
    public function setStatuscod($statuscod)
    {
        $this->statuscod = $statuscod;

        return $this;
    }

    /**
     * Get statuscod
     *
     * @return integer 
     */
    public function getStatuscod()
    {
        return $this->statuscod;
    }

    /**
     * Set rastreio
     *
     * @param string $rastreio
     * @return Pedido
     */
    public function setRastreio($rastreio)
    {
        $this->rastreio = $rastreio;

        return $this;
    }

    /**
     * Get rastreio
     *
     * @return string 
     */
    public function getRastreio()
    {
        return $this->rastreio;
    }

    /**
     * Set vrfrete
     *
     * @param float $vrfrete
     * @return Pedido
     */
    public function setVrfrete($vrfrete)
    {
        $this->vrfrete = $vrfrete;

        return $this;
    }

    /**
     * Get vrfrete
     *
     * @return float 
     */
    public function getVrfrete()
    {
        return $this->vrfrete;
    }

    /**
     * Set vrfinalfrete
     *
     * @param float $vrfinalfrete
     * @return Pedido
     */
    public function setVrfinalfrete($vrfinalfrete)
    {
        $this->vrfinalfrete = $vrfinalfrete;

        return $this;
    }

    /**
     * Get vrfinalfrete
     *
     * @return float 
     */
    public function getVrfinalfrete()
    {
        return $this->vrfinalfrete;
    }

    /**
     * Set comissao
     *
     * @param integer $comissao
     * @return Pedido
     */
    public function setComissao($comissao)
    {
        $this->comissao = $comissao;

        return $this;
    }

    /**
     * Get comissao
     *
     * @return integer 
     */
    public function getComissao()
    {
        return $this->comissao;
    }
}
