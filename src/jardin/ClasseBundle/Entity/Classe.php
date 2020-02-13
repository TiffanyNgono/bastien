<?php


namespace jardin\ClasseBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 *
 * @ORM\Entity
 */
class Classe
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue
     */
    private $id;


    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $niveau;


    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $educatrice;

    public function __toString(){
        // to show the name of the Category in the select
        return $this->niveau;
        // to show the id of the Category in the select
        // return $this->id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * @param mixed $niveau
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    }

    /**
     * @return mixed
     */
    public function getEducatrice()
    {
        return $this->educatrice;
    }

    /**
     * @param mixed $educatrice
     */
    public function setEducatrice($educatrice)
    {
        $this->educatrice = $educatrice;
    }



}