<?php

namespace Ingetis\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DivAccueil
 *
 * @ORM\Table(name="div_accueil")
 * @ORM\Entity
 */
class DivAccueil
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_div_accueil", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDivAccueil;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_div_accueil", type="text", nullable=false)
     */
    private $titreDivAccueil;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_div_accueil", type="text", nullable=false)
     */
    private $lienDivAccueil;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_div_accueil", type="text", nullable=false)
     */
    private $texteDivAccueil;

    /**
     * @var string
     *
     * @ORM\Column(name="img_div_accueil", type="text", nullable=false)
     */
    private $imgDivAccueil;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_div_accueil", type="integer", nullable=false)
     */
    private $dateDivAccueil;



    /**
     * Get idDivAccueil
     *
     * @return integer 
     */
    public function getIdDivAccueil()
    {
        return $this->idDivAccueil;
    }

    /**
     * Set titreDivAccueil
     *
     * @param string $titreDivAccueil
     * @return DivAccueil
     */
    public function setTitreDivAccueil($titreDivAccueil)
    {
        $this->titreDivAccueil = $titreDivAccueil;

        return $this;
    }

    /**
     * Get titreDivAccueil
     *
     * @return string 
     */
    public function getTitreDivAccueil()
    {
        return $this->titreDivAccueil;
    }

    /**
     * Set lienDivAccueil
     *
     * @param string $lienDivAccueil
     * @return DivAccueil
     */
    public function setLienDivAccueil($lienDivAccueil)
    {
        $this->lienDivAccueil = $lienDivAccueil;

        return $this;
    }

    /**
     * Get lienDivAccueil
     *
     * @return string 
     */
    public function getLienDivAccueil()
    {
        return $this->lienDivAccueil;
    }

    /**
     * Set texteDivAccueil
     *
     * @param string $texteDivAccueil
     * @return DivAccueil
     */
    public function setTexteDivAccueil($texteDivAccueil)
    {
        $this->texteDivAccueil = $texteDivAccueil;

        return $this;
    }

    /**
     * Get texteDivAccueil
     *
     * @return string 
     */
    public function getTexteDivAccueil()
    {
        return $this->texteDivAccueil;
    }

    /**
     * Set imgDivAccueil
     *
     * @param string $imgDivAccueil
     * @return DivAccueil
     */
    public function setImgDivAccueil($imgDivAccueil)
    {
        $this->imgDivAccueil = $imgDivAccueil;

        return $this;
    }

    /**
     * Get imgDivAccueil
     *
     * @return string 
     */
    public function getImgDivAccueil()
    {
        return $this->imgDivAccueil;
    }

    /**
     * Set dateDivAccueil
     *
     * @param integer $dateDivAccueil
     * @return DivAccueil
     */
    public function setDateDivAccueil($dateDivAccueil)
    {
        $this->dateDivAccueil = $dateDivAccueil;

        return $this;
    }

    /**
     * Get dateDivAccueil
     *
     * @return integer 
     */
    public function getDateDivAccueil()
    {
        return $this->dateDivAccueil;
    }
}
