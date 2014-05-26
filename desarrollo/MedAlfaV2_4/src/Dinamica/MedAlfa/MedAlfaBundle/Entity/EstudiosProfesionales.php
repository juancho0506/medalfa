<?php

namespace Dinamica\MedAlfa\MedAlfaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Dinamica\MedAlfa\MedAlfaBundle\Entity\EstudiosProfesionales
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dinamica\MedAlfa\MedAlfaBundle\Entity\EstudiosProfesionalesRepository")
 */
class EstudiosProfesionales {
	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string $titulo
	 *
	 * @ORM\Column(name="titulo", type="string", length=100)
	 */
	private $titulo;

	/**
	 * @var string $descripcion
	 *
	 * @ORM\Column(name="descripcion", type="string", length=1000)
	 */
	private $descripcion;

	/**
	 * @var string $institucion
	 *
	 * @ORM\Column(name="institucion", type="string", length=100)
	 */
	private $institucion;

	/**
	 * La hoja de vida a la cual pertenece estos estudios.
	 * @var HojaVida $horaVida
	 * @ORM\OneToOne(targetEntity="HojaVida")
	 * @ORM\JoinColumn(name="hojavida_id", referencedColumnName="id")
	 */
	private $hojaVida;

	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set titulo
	 *
	 * @param string $titulo
	 */
	public function setTitulo($titulo) {
		$this->titulo = $titulo;
	}

	/**
	 * Get titulo
	 *
	 * @return string 
	 */
	public function getTitulo() {
		return $this->titulo;
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

	/**
	 * Set institucion
	 *
	 * @param string $institucion
	 */
	public function setInstitucion($institucion) {
		$this->institucion = $institucion;
	}

	/**
	 * Get institucion
	 *
	 * @return string 
	 */
	public function getInstitucion() {
		return $this->institucion;
	}

	public function getHojaVida() {
		return $this->hojaVida;
	}

	public function setHojaVida(HojaVida $hojaVida) {
		$this->hojaVida = $hojaVida;
	}
	
}
