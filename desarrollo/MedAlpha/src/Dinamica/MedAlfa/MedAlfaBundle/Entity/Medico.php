<?php

namespace Dinamica\MedAlfa\MedAlfaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dinamica\MedAlfa\MedAlfaBundle\Entity\Medico
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Dinamica\MedAlfa\MedAlfaBundle\Entity\MedicoRepository")
 */
class Medico {
	/**
	 * @var integer $id
	 *
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @var string $numeroId
	 *
	 * @ORM\Column(name="$numeroId", type="string", length=20)
	 */
	private $numeroId;

	/**
	 * @var string $codigoRM
	 *
	 * @ORM\Column(name="$codigoRM", type="string", length=10)
	 */
	private $codigoRM;

	/**
	 * @var string $primerNombre
	 *
	 * @ORM\Column(name="primerNombre", type="string", length=20)
	 */
	private $primerNombre;

	/**
	 * @var string $segundoNombre
	 *
	 * @ORM\Column(name="segundoNombre", type="string", length=20)
	 */
	private $segundoNombre;

	/**
	 * @var string $primerApellido
	 *
	 * @ORM\Column(name="primerApellido", type="string", length=20)
	 */
	private $primerApellido;

	/**
	 * @var string $segundoApellido
	 *
	 * @ORM\Column(name="segundoApellido", type="string", length=20)
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
	 * @var string $telefono3
	 *
	 * @ORM\Column(name="telefono3", type="string", length=20)
	 */
	private $telefono3;

	/**
	 * @var string $direccion1
	 *
	 * @ORM\Column(name="direccion1", type="string", length=50)
	 */
	private $direccion1;

	/**
	 * @var string $direccion2
	 *
	 * @ORM\Column(name="direccion2", type="string", length=50)
	 */
	private $direccion2;

	/**
	 * 
	 * El tipo de documento del paciente.
	 * @var Tipod $tipoId
	 * @ORM\ManyToOne(targetEntity="TipoId", inversedBy="medico")
	 * @ORM\JoinColumn(name="tipoId_id", referencedColumnName="id", nullable=false)
	 */
	private $tipoId;

	/**
	 * @var EspecialidadMD $especialidadMD
	 *  @ORM\ManyToMany(targetEntity="EspecialidadMD", inversedBy="medicos")
	 *  @ORM\JoinTable(name="medico_especialidad",
	 *      joinColumns={@ORM\JoinColumn(name="especialidad_id", referencedColumnName="id")},
	 *      inverseJoinColumns={@ORM\JoinColumn(name="medico_id", referencedColumnName="id")}
	 *      )
	 */
	private $especialidadesMD;

	/**
	 * El usuario asignado al medico.
	 * @var Usuario $usuario
	 * @ORM\OneToOne(targetEntity="Usuario")
	 * @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
	 */
	private $usuario;

	/**
	 * La hoja de vida del Medico.
	 * @var HojaVida $hojaVida
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
	 * Set numeroId
	 *
	 * @param string $numeroId
	 */
	public function setNumeroId($numeroId) {
		$this->numeroId = $numeroId;
	}

	/**
	 * Get numeroId
	 *
	 * @return string
	 */
	public function getNumeroId() {
		return $this->numeroId;
	}

	/**
	 * Set codigoRM
	 *
	 * @param string $codigoRM
	 */
	public function setCodigoRM($codRM) {
		$this->codigoRM = $codRM;
	}

	/**
	 * Get codigoRM
	 *
	 * @return string 
	 */
	public function getCodigoRM() {
		return $this->codigoRM;
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
	 * Set telefono3
	 *
	 * @param string $telefono3
	 */
	public function setTelefono3($telefono3) {
		$this->telefono3 = $telefono3;
	}

	/**
	 * Get telefono3
	 *
	 * @return string 
	 */
	public function getTelefono3() {
		return $this->telefono3;
	}

	/**
	 * Set direccion1
	 *
	 * @param string $direccion1
	 */
	public function setDireccion1($direccion1) {
		$this->direccion1 = $direccion1;
	}

	/**
	 * Get direccion1
	 *
	 * @return string 
	 */
	public function getDireccion1() {
		return $this->direccion1;
	}

	/**
	 * Set direccion2
	 *
	 * @param string $direccion2
	 */
	public function setDireccion2($direccion2) {
		$this->direccion2 = $direccion2;
	}

	/**
	 * Get direccion2
	 *
	 * @return string 
	 */
	public function getDireccion2() {
		return $this->direccion2;
	}

	/**
	 * @return the Tipod
	 */
	public function getTipoId() {
		return $this->tipoId;
	}

	/**
	 * @param  $tipoId
	 */
	public function setTipoId($tipoId) {
		$this->tipoId = $tipoId;
	}

	/**
	 * @return the EspecialidadMD
	 */
	public function getEspecialidadesMD() {
		return $this->especialidadesMD;
	}

	/**
	 * @param EspecialidadMD $especialidadesMD
	 */
	public function setEspecialidadesMD(EspecialidadMD $especialidadesMD) {
		$this->especialidadesMD = $especialidadesMD;
	}

	public function getUsuario() {
		return $this->usuario;
	}

	public function setUsuario(Usuario $usuario) {
		$this->usuario = $usuario;
	}

	public function getHojaVida() {
		return $this->hojaVida;
	}

	public function setHojaVida(HojaVida $hojaVida) {
		$this->hojaVida = $hojaVida;
	}

	
}
