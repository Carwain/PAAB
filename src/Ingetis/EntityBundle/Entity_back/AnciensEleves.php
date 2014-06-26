<?php

namespace Ingetis\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnciensEleves
 *
 * @ORM\Table(name="anciens_eleves", indexes={@ORM\Index(name="titre_actualite", columns={"titre_ancien_eleve"}), @ORM\Index(name="vues_actualite", columns={"vues_ancien_eleve"}), @ORM\Index(name="date_actualite", columns={"date_ancien_eleve"}), @ORM\Index(name="nbr_coms", columns={"nbr_coms"})})
 * @ORM\Entity
 */
class AnciensEleves
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ancien_eleve", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAncienEleve;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_ancien_eleve", type="string", length=250, nullable=true)
     */
    private $titreAncienEleve;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_ancien_eleve", type="text", nullable=true)
     */
    private $texteAncienEleve;

    /**
     * @var integer
     *
     * @ORM\Column(name="vues_ancien_eleve", type="integer", nullable=true)
     */
    private $vuesAncienEleve = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="date_ancien_eleve", type="integer", nullable=true)
     */
    private $dateAncienEleve = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="photo_ancien_eleve", type="string", length=250, nullable=true)
     */
    private $photoAncienEleve;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_coms", type="integer", nullable=true)
     */
    private $nbrComs = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="last_ip_ancien_eleve", type="string", length=250, nullable=false)
     */
    private $lastIpAncienEleve;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_visit", type="integer", nullable=false)
     */
    private $lastVisit;



    /**
     * Get idAncienEleve
     *
     * @return integer 
     */
    public function getIdAncienEleve()
    {
        return $this->idAncienEleve;
    }

    /**
     * Set titreAncienEleve
     *
     * @param string $titreAncienEleve
     * @return AnciensEleves
     */
    public function setTitreAncienEleve($titreAncienEleve)
    {
        $this->titreAncienEleve = $titreAncienEleve;

        return $this;
    }

    /**
     * Get titreAncienEleve
     *
     * @return string 
     */
    public function getTitreAncienEleve()
    {
        return $this->titreAncienEleve;
    }

    /**
     * Set texteAncienEleve
     *
     * @param string $texteAncienEleve
     * @return AnciensEleves
     */
    public function setTexteAncienEleve($texteAncienEleve)
    {
        $this->texteAncienEleve = $texteAncienEleve;

        return $this;
    }

    /**
     * Get texteAncienEleve
     *
     * @return string 
     */
    public function getTexteAncienEleve()
    {
        return $this->texteAncienEleve;
    }

    /**
     * Set vuesAncienEleve
     *
     * @param integer $vuesAncienEleve
     * @return AnciensEleves
     */
    public function setVuesAncienEleve($vuesAncienEleve)
    {
        $this->vuesAncienEleve = $vuesAncienEleve;

        return $this;
    }

    /**
     * Get vuesAncienEleve
     *
     * @return integer 
     */
    public function getVuesAncienEleve()
    {
        return $this->vuesAncienEleve;
    }

    /**
     * Set dateAncienEleve
     *
     * @param integer $dateAncienEleve
     * @return AnciensEleves
     */
    public function setDateAncienEleve($dateAncienEleve)
    {
        $this->dateAncienEleve = $dateAncienEleve;

        return $this;
    }

    /**
     * Get dateAncienEleve
     *
     * @return integer 
     */
    public function getDateAncienEleve()
    {
        return $this->dateAncienEleve;
    }

    /**
     * Set photoAncienEleve
     *
     * @param string $photoAncienEleve
     * @return AnciensEleves
     */
    public function setPhotoAncienEleve($photoAncienEleve)
    {
        $this->photoAncienEleve = $photoAncienEleve;

        return $this;
    }

    /**
     * Get photoAncienEleve
     *
     * @return string 
     */
    public function getPhotoAncienEleve()
    {
        return $this->photoAncienEleve;
    }

    /**
     * Set nbrComs
     *
     * @param integer $nbrComs
     * @return AnciensEleves
     */
    public function setNbrComs($nbrComs)
    {
        $this->nbrComs = $nbrComs;

        return $this;
    }

    /**
     * Get nbrComs
     *
     * @return integer 
     */
    public function getNbrComs()
    {
        return $this->nbrComs;
    }

    /**
     * Set lastIpAncienEleve
     *
     * @param string $lastIpAncienEleve
     * @return AnciensEleves
     */
    public function setLastIpAncienEleve($lastIpAncienEleve)
    {
        $this->lastIpAncienEleve = $lastIpAncienEleve;

        return $this;
    }

    /**
     * Get lastIpAncienEleve
     *
     * @return string 
     */
    public function getLastIpAncienEleve()
    {
        return $this->lastIpAncienEleve;
    }

    /**
     * Set lastVisit
     *
     * @param integer $lastVisit
     * @return AnciensEleves
     */
    public function setLastVisit($lastVisit)
    {
        $this->lastVisit = $lastVisit;

        return $this;
    }

    /**
     * Get lastVisit
     *
     * @return integer 
     */
    public function getLastVisit()
    {
        return $this->lastVisit;
    }
}
