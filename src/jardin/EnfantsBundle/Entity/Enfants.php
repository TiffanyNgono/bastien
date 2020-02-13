<?php


namespace jardin\EnfantsBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity
 */
class Enfants
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
    private $nom;


    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $prenom;


    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $sexe;


    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $lieuNaissance;
    /**
     * @ORM\Column(type="datetime",nullable=true)
     */
    private $dateNaissance;


    /**
     * @ORM\Column(type="string",nullable=true)
     */
    private $medecin;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $medecinNumero;

    /**
     * @ORM\ManyToOne(targetEntity="jardin\ClasseBundle\Entity\Classe")
     * @ORM\JoinColumn(name="id_classe",referencedColumnName="id",onDelete="CASCADE",nullable=true)
     */
    private  $id_classe;


    public function __construct()
    {
        $this->dateNaissance = new \DateTime('now');
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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return mixed
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param mixed $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return mixed
     */
    public function getLieuNaissance()
    {
        return $this->lieuNaissance;
    }

    /**
     * @param mixed $lieuNaissance
     */
    public function setLieuNaissance($lieuNaissance)
    {
        $this->lieuNaissance = $lieuNaissance;
    }

    /**
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * @param \DateTime $dateNaissance
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }

    /**
     * @return mixed
     */
    public function getMedecin()
    {
        return $this->medecin;
    }

    /**
     * @param mixed $medecin
     */
    public function setMedecin($medecin)
    {
        $this->medecin = $medecin;
    }

    /**
     * @return mixed
     */
    public function getMedecinNumero()
    {
        return $this->medecinNumero;
    }

    /**
     * @param mixed $medecinNumero
     */
    public function setMedecinNumero($medecinNumero)
    {
        $this->medecinNumero = $medecinNumero;
    }

    /**
     * @return mixed
     */
    public function getIdClasse()
    {
        return $this->id_classe;
    }

    /**
     * @param mixed $id_classe
     */
    public function setIdClasse($id_classe)
    {
        $this->id_classe = $id_classe;
    }



}