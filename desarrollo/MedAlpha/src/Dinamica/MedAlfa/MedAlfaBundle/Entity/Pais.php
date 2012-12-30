<?php

namespace Dinamica\MedAlfa\MedAlfaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dinamica\MedAlfa\MedAlfaBundle\Entity\Pais
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dinamica\MedAlfa\MedAlfaBundle\Entity\PaisRepository")
 */
class Pais
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
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=50)
     */
    private $nombre;

    /**
     * @var string $nombreCorto
     *
     * @ORM\Column(name="nombreCorto", type="string", length=5)
     */
    private $nombreCorto;

    /**
     * 
     * Enter description here ...
     * @var Estado $estados
     * @ORM\OneToMany(targetEntity="Estado", mappedBy="pais", cascade={"ALL"}, indexBy="estado")
     */
    private $estados;

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
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set nombreCorto
     *
     * @param string $nombreCorto
     */
    public function setNombreCorto($nombreCorto)
    {
        $this->nombreCorto = $nombreCorto;
    }

    /**
     * Get nombreCorto
     *
     * @return string 
     */
    public function getNombreCorto()
    {
        return $this->nombreCorto;
    }
}