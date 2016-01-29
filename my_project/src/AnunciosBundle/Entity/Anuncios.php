<?php

namespace AnunciosBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Anuncios
 *
 * @ORM\Table(name="anuncios")
 * @ORM\Entity(repositoryClass="AnunciosBundle\Repository\AnunciosRepository")
 */
class Anuncios
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
     * @ORM\Column(name="Titulo", type="string", length=255)
     */
    private $titulo;

    /**
     * @var int
     *
     * @ORM\Column(name="IdAnimal", type="integer", unique=true)
     */
    private $idAnimal;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     *
     * @return Anuncios
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set idAnimal
     *
     * @param integer $idAnimal
     *
     * @return Anuncios
     */
    public function setIdAnimal($idAnimal)
    {
        $this->idAnimal = $idAnimal;

        return $this;
    }

    /**
     * Get idAnimal
     *
     * @return int
     */
    public function getIdAnimal()
    {
        return $this->idAnimal;
    }
}

