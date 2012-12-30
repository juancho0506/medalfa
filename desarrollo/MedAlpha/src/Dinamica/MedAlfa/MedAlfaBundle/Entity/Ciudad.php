<?php

namespace Dinamica\MedAlfa\MedAlfaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dinamica\MedAlfa\MedAlfaBundle\Entity\Ciudad
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dinamica\MedAlfa\MedAlfaBundle\Entity\CiudadRepository")
 */
class Ciudad
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $nombreCiudad
     *
     * @ORM\Column(name="nombreCiudad", type="string", length=50)
     */
    private $nombreCiudad;

    /**
     * @var string $indicadorCiudad
     *
     * @ORM\Column(name="indicadorCiudad", type="string", length=10)
     */
    private $indicadorCiudad;

    /**
     * @var string $zipCode
     *
     * @ORM\Column(name="zipCode", type="string", length=10)
     */
    private $zipCode;

    /**
     * @var Estado $estado
     * @ORM\ManyToOne(targetEntity="Estado", inversedBy="ciudad")
     * @ORM\JoinColumn(name="estado_id", referencedColumnName="id", nullable=false)
     */
    
    private $estado;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreCiudad
     *
     * @param string $nombreCiudad
     */
    public function setNombreCiudad($nombreCiudad)
    {
        $this->nombreCiudad = $nombreCiudad;
    }

    /**
     * Get nombreCiudad
     *
     * @return string 
     */
    public function getNombreCiudad()
    {
        return $this->nombreCiudad;
    }

    /**
     * Set indicadorCiudad
     *
     * @param string $indicadorCiudad
     */
    public function setIndicadorCiudad($indicadorCiudad)
    {
        $this->indicadorCiudad = $indicadorCiudad;
    }

    /**
     * Get indicadorCiudad
     *
     * @return string 
     */
    public function getIndicadorCiudad()
    {
        return $this->indicadorCiudad;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
    }

    /**
     * Get zipCode
     *
     * @return string 
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }
}