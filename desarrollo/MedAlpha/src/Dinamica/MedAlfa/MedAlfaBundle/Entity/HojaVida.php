<?php

namespace Dinamica\MedAlfa\MedAlfaBundle\Entity;

use Doctrine\DBAL\Types\StringType;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dinamica\MedAlfa\MedAlfaBundle\Entity\HojaVida
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dinamica\MedAlfa\MedAlfaBundle\Entity\HojaVidaRepository")
 */
class HojaVida {
	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string $idioma
	 *
	 * @ORM\Column(name="idioma", type="string", length=100)
	 */
	private $idioma;

	/**
	 * @var string $descripcion
	 *
	 * @ORM\Column(name="descripcion", type="string", length=1000)
	 */
	private $descripcion;

	/**
	 * La foto de perfil de medico.
	 * @var StringType $foto
	 * @ORM\Column(name="foto", type="string", length=1000)
	 */
	private $foto;

	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set idioma
	 *
	 * @param string $idioma
	 */
	public function setIdioma($idioma) {
		$this->idioma = $idioma;
	}

	/**
	 * Get idioma
	 *
	 * @return string 
	 */
	public function getIdioma() {
		return $this->idioma;
	}

	/**
	 * Set descripcion
	 *
	 * @param string $descripcion
	 */
	public function setDescripcion($descripcion) {
		$this->descripcion = $descripcion;
	}

	/**
	 * Get descripcion
	 *
	 * @return string 
	 */
	public function getDescripcion() {
		return $this->descripcion;
	}

	public function getFoto() {
		return $this->foto;
	}

	public function setFoto(StringType $foto) {
		$this->foto = $foto;
	}

}
