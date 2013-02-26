<?php

namespace Dinamica\MedAlfa\MedAlfaBundle\Entity;

use FOS\UserBundle\Document\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Dinamica\MedAlfa\MedAlfaBundle\Entity\Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="Dinamica\MedAlfa\MedAlfaBundle\Entity\UsuarioRepository")
 */
class Usuario extends BaseUser
{
    /**
     * @var integer $id
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var date $ultimoLogueo
     *
     * @ORM\Column(name="ultimoLogueo", type="date")
     */
    private $ultimoLogueo;
    
    
    public function __construct()
    {
    	parent::__construct();
    	// inicializaar atributos si es necesario....
    }

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
     * Set login
     *
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set ultimoLogueo
     *
     * @param date $ultimoLogueo
     */
    public function setUltimoLogueo($ultimoLogueo)
    {
        $this->ultimoLogueo = $ultimoLogueo;
    }

    /**
     * Get ultimoLogueo
     *
     * @return date 
     */
    public function getUltimoLogueo()
    {
        return $this->ultimoLogueo;
    }
}