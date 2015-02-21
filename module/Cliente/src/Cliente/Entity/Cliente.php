<?php

namespace Cliente\Entity;

use Doctrine\ORM\Mapping as ORM;
use Utility\Entity\AbstractEntity;
use DateTime;
/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity
 */
class Cliente extends AbstractEntity
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Clicod", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $clicod;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DtCadastro", type="date", nullable=false)
     */
    private $dtcadastro;

    /**
     * @var string
     *
     * @ORM\Column(name="Documento", type="string", length=14, nullable=false)
     */
    private $documento;

    /**
     * @var string
     *
     * @ORM\Column(name="Descricao", type="string", length=40, nullable=false)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=20, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Logradouro", type="string", length=70, nullable=true)
     */
    private $logradouro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="Complemento", type="string", length=20, nullable=true)
     */
    private $complemento;

    /**
     * @var string
     *
     * @ORM\Column(name="Bairro", type="string", length=25, nullable=true)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="Cidade", type="string", length=30, nullable=true)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="UF", type="string", length=2, nullable=true)
     */
    private $uf;

    /**
     * @var string
     *
     * @ORM\Column(name="CEP", type="string", length=9, nullable=true)
     */
    private $cep;



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
     * Set dtcadastro
     *
     * @param \DateTime $dtcadastro
     * @return Cliente
     */
    public function setDtcadastro($dtcadastro)
    {
        $this->dtcadastro = new DateTime($dtcadastro);

        return $this;
    }

    /**
     * Get dtcadastro
     *
     * @return \DateTime 
     */
    public function getDtcadastro()
    {
        return $this->dtcadastro->format('d/m/Y');
    }

    /**
     * Set documento
     *
     * @param string $documento
     * @return Cliente
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return string 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Cliente
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
     * Set email
     *
     * @param string $email
     * @return Cliente
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set logradouro
     *
     * @param string $logradouro
     * @return Cliente
     */
    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    /**
     * Get logradouro
     *
     * @return string 
     */
    public function getLogradouro()
    {
        return $this->logradouro;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return Cliente
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set complemento
     *
     * @param string $complemento
     * @return Cliente
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;

        return $this;
    }

    /**
     * Get complemento
     *
     * @return string 
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Set bairro
     *
     * @param string $bairro
     * @return Cliente
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;

        return $this;
    }

    /**
     * Get bairro
     *
     * @return string 
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set cidade
     *
     * @param string $cidade
     * @return Cliente
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    /**
     * Get cidade
     *
     * @return string 
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set uf
     *
     * @param string $uf
     * @return Cliente
     */
    public function setUf($uf)
    {
        $this->uf = $uf;

        return $this;
    }

    /**
     * Get uf
     *
     * @return string 
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * Set cep
     *
     * @param string $cep
     * @return Cliente
     */
    public function setCep($cep)
    {
        $this->cep = $cep;

        return $this;
    }

    /**
     * Get cep
     *
     * @return string 
     */
    public function getCep()
    {
        return $this->cep;
    }
}
