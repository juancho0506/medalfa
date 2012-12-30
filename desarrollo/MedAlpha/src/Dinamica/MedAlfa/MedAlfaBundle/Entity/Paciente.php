<?php

namespace Dinamica\MedAlfa\MedAlfaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dinamica\MedAlfa\MedAlfaBundle\Entity\Paciente
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dinamica\MedAlfa\MedAlfaBundle\Entity\PacienteRepository")
 */
class Paciente {
	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * 
	 * Numero de Identificación del Paciente.
	 * @var string $numeroId
	 * @ORM\Column(name="numeroId", type="string", length=20)
	 */
	private $numeroId;

	/**
	 * @var string $primerNombre
	 *
	 * @ORM\Column(name="primerNombre", type="string", length=30)
	 */
	private $primerNombre;

	/**
	 * @var string $segundoNombre
	 *
	 * @ORM\Column(name="segundoNombre", type="string", length=30)
	 */
	private $segundoNombre;

	/**
	 * @var string $primerApellido
	 *
	 * @ORM\Column(name="primerApellido", type="string", length=30)
	 */
	private $primerApellido;

	/**
	 * @var string $segundoApellido
	 *
	 * @ORM\Column(name="segundoApellido", type="string", length=30)
	 */
	private $segundoApellido;

	/**
	 * @var string $email
	 *
	 * @ORM\Column(name="email", type="string", length=100)
	 */
	private $email;

	/**
	 * @var string $telefono1
	 *
	 * @ORM\Column(name="telefono1", type="string", length=20)
	 */
	private $telefono1;

	/**
	 * @var string $telefono2
	 *
	 * @ORM\Column(name="telefono2", type="string", length=20)
	 */
	private $telefono2;

	/**
	 * @var string $genero
	 *
	 * @ORM\Column(name="genero", type="string", length=1)
	 */
	private $genero;

	/**
	 * @var date $fechaNacimiento
	 *
	 * @ORM\Column(name="fechaNacimiento", type="date")
	 */
	private $fechaNacimiento;

	/**
	 * @var string $direccion
	 *
	 * @ORM\Column(name="direccion", type="string", length=150)
	 */
	private $direccion;

	/**
	 * 
	 * El estado civil del paciente (Ej: Soltero).
	 * @var EstadoCivil $estadoCivil
	 * @ORM\ManyToOne(targetEntity="EstadoCivil", inversedBy="paciente")
	 * @ORM\JoinColumn(name="estadoCivil_id", referencedColumnName="id", nullable=false)
	 */
	private $estadoCivil;

	/**
	 * 
	 * El tipo de documento del paciente.
	 * @var Tipod $tipoId
	 * @ORM\ManyToOne(targetEntity="TipoId", inversedBy="paciente")
	 * @ORM\JoinColumn(name="tipoId_id", referencedColumnName="id", nullable=false)
	 */
	private $tipoId;

	/**
	 * 
	 * La cudad a la que pertenece el paciente.
	 * @var Ciudad $ciudad
	 * @ORM\ManyToOne(targetEntity="Ciudad", inversedBy="paciente")
	 * @ORM\JoinColumn(name="ciudad_id", referencedColumnName="id", nullable=false)
	 */
	private $ciudad;

	/**
	 * El usuario asignado al paciente.
	 * @var Usuario $usuario
	 * @ORM\OneToOne(targetEntity="Usuario")
	 * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id") 
	 */
	private $usuario;

	/**
	 * Get id
	 *
	 * @return integer 
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Set NumeroId
	 *
	 * @param string $numeroId
	 */
	public function setNumeroId($numeroId) {
		$this->numeroId = $numeroId;
	}

	/**
	 * Get primerNombre
	 *
	 * @return string 
	 */
	public function getNumeroId() {
		return $this->numeroId;
	}

	/**
	 * Set primerNombre
	 *
	 * @param string $primerNombre
	 */
	public function setPrimerNombre($primerNombre) {
		$this->primerNombre = $primerNombre;
	}

	/**
	 * Get primerNombre
	 *
	 * @return string 
	 */
	public function getPrimerNombre() {
		return $this->primerNombre;
	}

	/**
	 * Set segundoNombre
	 *
	 * @param string $segundoNombre
	 */
	public function setSegundoNombre($segundoNombre) {
		$this->segundoNombre = $segundoNombre;
	}

	/**
	 * Get segundoNombre
	 *
	 * @return string 
	 */
	public function getSegundoNombre() {
		return $this->segundoNombre;
	}

	/**
	 * Set primerApellido
	 *
	 * @param string $primerApellido
	 */
	public function setPrimerApellido($primerApellido) {
		$this->primerApellido = $primerApellido;
	}

	/**
	 * Get primerApellido
	 *
	 * @return string 
	 */
	public function getPrimerApellido() {
		return $this->primerApellido;
	}

	/**
	 * Set segundoApellido
	 *
	 * @param string $segundoApellido
	 */
	public function setSegundoApellido($segundoApellido) {
		$this->segundoApellido = $segundoApellido;
	}

	/**
	 * Get segundoApellido
	 *
	 * @return string 
	 */
	public function getSegundoApellido() {
		return $this->segundoApellido;
	}

	/**
	 * Set email
	 *
	 * @param string $email
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Get email
	 *
	 * @return string 
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Set telefono1
	 *
	 * @param string $telefono1
	 */
	public function setTelefono1($telefono1) {
		$this->telefono1 = $telefono1;
	}

	/**
	 * Get telefono1
	 *
	 * @return string 
	 */
	public function getTelefono1() {
		return $this->telefono1;
	}

	/**
	 * Set telefono2
	 *
	 * @param string $telefono2
	 */
	public function setTelefono2($telefono2) {
		$this->telefono2 = $telefono2;
	}

	/**
	 * Get telefono2
	 *
	 * @return string 
	 */
	public function getTelefono2() {
		return $this->telefono2;
	}

	/**
	 * Set genero
	 *
	 * @param string $genero
	 */
	public function setGenero($genero) {
		$this->genero = $genero;
	}

	/**
	 * Get genero
	 *
	 * @return string 
	 */
	public function getGenero() {
		return $this->genero;
	}

	/**
	 * Set fechaNacimiento
	 *
	 * @param date $fechaNacimiento
	 */
	public function setFechaNacimiento($fechaNacimiento) {
		$this->fechaNacimiento = $fechaNacimiento;
	}

	/**
	 * Get fechaNacimiento
	 *
	 * @return date 
	 */
	public function getFechaNacimiento() {
		return $this->fechaNacimiento;
	}

	/**
	 * Set direccion
	 *
	 * @param string $direccion
	 */
	public function setDireccion($direccion) {
		$this->direccion = $direccion;
	}

	/**
	 * Get direccion
	 *
	 * @return string 
	 */
	public function getDireccion() {
		return $this->direccion;
	}

	/**
	 * Set estadoCivil
	 *
	 * @param EstadoCivil $direccion
	 */
	public function setEstadoCivil($estadoCivil) {
		$this->estadoCivil = $estadoCivil;
	}

	/**
	 * Get estadoCivil
	 *
	 * @return EstadoCivil
	 */
	public function getEstadoCivil() {
		return $this->estadoCivil;
	}

	/**
	 * @return \Dinamica\MedAlfa\MedAlfaBundle\Entity\Tipod
	 */
	public function getTipoId() {
		return $this->tipoId;
	}

	/**
	 * @param \Dinamica\MedAlfa\MedAlfaBundle\Entity\Tipod $tipoId
	 */
	public function setTipoId($tipoId) {
		$this->tipoId = $tipoId;
	}

	/**
	 * @return \Dinamica\MedAlfa\MedAlfaBundle\Entity\Ciudad
	 */
	public function getCiudad() {
		return $this->ciudad;
	}

	/**
	 * @param \Dinamica\MedAlfa\MedAlfaBundle\Entity\Ciudad $ciudad
	 */
	public function setCiudad($ciudad) {
		$this->ciudad = $ciudad;
	}

	public function getUsuario() {
		return $this->usuario;
	}

	public function setUsuario(Usuario $usuario) {
		$this->usuario = $usuario;
	}

	
}
