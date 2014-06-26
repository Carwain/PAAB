<?php

namespace Ingetis\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Temoignages
 *
 * @ORM\Table(name="temoignages")
 * @ORM\Entity
 */
class Temoignages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEven", type="integer", nullable=false)
     */
    private $ideven = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="temoignage", type="text", nullable=false)
     */
    private $temoignage;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=80, nullable=false)
     */
    private $auteur = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date = '0000-00-00';



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
     * Set ideven
     *
     * @param integer $ideven
     * @return Temoignages
     */
    public function setIdeven($ideven)
    {
        $this->ideven = $ideven;

        return $this;
    }

    /**
     * Get ideven
     *
     * @return integer 
     */
    public function getIdeven()
    {
        return $this->ideven;
    }

    /**
     * Set temoignage
     *
     * @param string $temoignage
     * @return Temoignages
     */
    public function setTemoignage($temoignage)
    {
        $this->temoignage = $temoignage;

        return $this;
    }

    /**
     * Get temoignage
     *
     * @return string 
     */
    public function getTemoignage()
    {
        return $this->temoignage;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Temoignages
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Temoignages
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
