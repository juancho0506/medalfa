<?php

namespace Dinamica\MedAlfa\MedAlfaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Dinamica\MedAlfa\MedAlfaBundle\Entity\ExperienciaLaboral
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dinamica\MedAlfa\MedAlfaBundle\Entity\ExperienciaLaboralRepository")
 */
class ExperienciaLaboral {
	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string $empresa
	 *
	 * @ORM\Column(name="empresa", type="string", length=100)
	 */
	private $empresa;

	/**
	 * @var date $fechaInicio
	 *
	 * @ORM\Column(name="fechaInicio", type="date")
	 */
	private $fechaInicio;

	/**
	 * @var date $fechaTerminacion
	 *
	 * @ORM\Column(name="fechaTerminacion", type="date")
	 */
	private $fechaTerminacion;

	/**
	 * @var string $cargo
	 *
	 * @ORM\Column(name="cargo", type="string", length=100)
	 */
	private $cargo;

	/**
	 * @var string $descripcion
	 *
	 * @ORM\Column(name="descripcion", type="string", length=1000)
	 */
	private $descripcion;

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
	 * Set empresa
	 *
	 * @param string $empresa
	 */
	public function setEmpresa($empresa) {
		$this->empresa = $empresa;
	}

	/**
	 * Get empresa
	 *
	 * @return string 
	 */
	public function getEmpresa() {
		return $this->empresa;
	}

	/**
	 * Set fechaInicio
	 *
	 * @param date $fechaInicio
	 */
	public function setFechaInicio($fechaInicio) {
		$this->fechaInicio = $fechaInicio;
	}

	/**
	 * Get fechaInicio
	 *
	 * @return date 
	 */
	public function getFechaInicio() {
		return $this->fechaInicio;
	}

	/**
	 * Set fechaTerminacion
	 *
	 * @param date $fechaTerminacion
	 */
	public function setFechaTerminacion($fechaTerminacion) {
		$this->fechaTerminacion = $fechaTerminacion;
	}

	/**
	 * Get fechaTerminacion
	 *
	 * @return date 
	 */
	public function getFechaTerminacion() {
		return $this->fechaTerminacion;
	}

	/**
	 * Set cargo
	 *
	 * @param string $cargo
	 */
	public function setCargo($cargo) {
		$this->cargo = $cargo;
	}

	/**
	 * Get cargo
	 *
	 * @return string 
	 */
	public function getCargo() {
		return $this->cargo;
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

	public function getHojaVida() {
		return $this->hojaVida;
	}

	public function setHojaVida(HojaVida $hojaVida) {
		$this->hojaVida = $hojaVida;
	}

}
