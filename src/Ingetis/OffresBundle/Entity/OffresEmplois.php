<?php

namespace Ingetis\OffresBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OffresEmplois
 *
 * @ORM\Table(name="offres_emplois")
 * @ORM\Entity
 */
class OffresEmplois
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_offre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_offre", type="string", length=250, nullable=false)
     */
    private $titreOffre;

    /**
     * @var string
     *
     * @ORM\Column(name="description_offre", type="text", nullable=false)
     */
    private $descriptionOffre;

    /**
     * @var integer
     *
     * @ORM\Column(name="vues", type="integer", nullable=false)
     */
    private $vues;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="integer", nullable=false)
     */
    private $date;



    /**
     * Get idOffre
     *
     * @return integer 
     */
    public function getIdOffre()
    {
        return $this->idOffre;
    }

    /**
     * Set titreOffre
     *
     * @param string $titreOffre
     * @return OffresEmplois
     */
    public function setTitreOffre($titreOffre)
    {
        $this->titreOffre = $titreOffre;

        return $this;
    }

    /**
     * Get titreOffre
     *
     * @return string 
     */
    public function getTitreOffre()
    {
        return $this->titreOffre;
    }

    /**
     * Set descriptionOffre
     *
     * @param string $descriptionOffre
     * @return OffresEmplois
     */
    public function setDescriptionOffre($descriptionOffre)
    {
        $this->descriptionOffre = $descriptionOffre;

        return $this;
    }

    /**
     * Get descriptionOffre
     *
     * @return string 
     */
    public function getDescriptionOffre()
    {
        return $this->descriptionOffre;
    }

    /**
     * Set vues
     *
     * @param integer $vues
     * @return OffresEmplois
     */
    public function setVues($vues)
    {
        $this->vues = $vues;

        return $this;
    }

    /**
     * Get vues
     *
     * @return integer 
     */
    public function getVues()
    {
        return $this->vues;
    }

    /**
     * Set date
     *
     * @param integer $date
     * @return OffresEmplois
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return integer 
     */
    public function getDate()
    {
        return $this->date;
    }
}
