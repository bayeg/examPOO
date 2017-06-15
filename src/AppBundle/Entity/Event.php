<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use AppBundle\Entity\Categorie;
use AppBundle\Entity\Image;

/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventRepository")
 */
class Event
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="debut", type="datetime")
     */
    private $debut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fin", type="datetime")
     */
    private $fin;

    /*
     * @var Categorie
     * 
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Categorie", inversedBy="event")
     */
    private $categorie;
    function getCategorie() {
        return $this->categorie;
    }

    function setCategorie(Categorie $categorie) {
        $this->categorie = $categorie;
    }
    
    
    /*
     * @var Image
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Image", cascade={"persist"})
     */
    private $image;
    function getImage() {
        return $this->image;
    }

    function setImage(Image $image) {
        $this->image = $image;
    }

    /*
     * @var ArrayCollection
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\User")
     */
    
    private $user;
    function getUser() {
        return $this->user;
    }

    function setUser(ArrayCollection $user) {
        $this->user = $user;
    }

        

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Event
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Event
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set debut
     *
     * @param \DateTime $debut
     *
     * @return Event
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     *
     * @return Event
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime
     */
    public function getFin()
    {
        return $this->fin;
    }
}

