<?php

namespace EntityBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="EntityBundle\Repository\UserRepository")
 * @uniqueEntity(fields="nuip",message="nuip no puede repetirse")
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30)
     * @Assert\NotBlank(message="Debe ingresar el Nombre")
     * @Assert\Type("string", message="Debe ingresar letras")
     * @Assert\Length(max="30", maxMessage="Nombre demaciado Largo")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=30)
     * @Assert\NotBlank(message="Debe ingresar el Apellido")
     * @Assert\Type("string", message="Debe ingresar letras")
     * @Assert\Length(max="30", maxMessage="Apellido demaciado Largo")
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="nuip", type="string", length=16, unique=true)
     * @Assert\NotBlank(message="Debe Ingresar la Identificación del Usuario")
     * @Assert\Range(min="1", minMessage="Debe ingresar valores positivos")
     */
    private $nuip;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=10)
     * @Assert\NotBlank(message="Debe ingresar el telefono de Usuario")
     * @Assert\Length(min="7",max="10", minMessage="Debe ingresar 7 o 10 números", maxMessage="Debe ingresar 7 o 10 números")
     */
    private $tel;

    /**
     *
     * @ORM\OneToMany(targetEntity="Task", mappedBy="user")
     *
     */
    private $tasks;

    /**
     * User constructor.
     * @param $tasks
     */
    public function __construct()
    {
        $this->tasks = new ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return User
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set nuip
     *
     * @param string $nuip
     * @return User
     */
    public function setNuip($nuip)
    {
        $this->nuip = $nuip;

        return $this;
    }

    /**
     * Get nuip
     *
     * @return string
     */
    public function getNuip()
    {
        return $this->nuip;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return User
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Add tasks
     *
     * @param \EntityBundle\Entity\Task $tasks
     * @return User
     */
    public function addTask(\EntityBundle\Entity\Task $tasks)
    {
        $this->tasks[] = $tasks;

        return $this;
    }

    /**
     * Remove tasks
     *
     * @param \EntityBundle\Entity\Task $tasks
     */
    public function removeTask(\EntityBundle\Entity\Task $tasks)
    {
        $this->tasks->removeElement($tasks);
    }

    /**
     * Get tasks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTasks()
    {
        return $this->tasks;
    }
}
