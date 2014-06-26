<?php

namespace Ingetis\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annonce
 *
 * @ORM\Table(name="annonce")
 * @ORM\Entity
 */
class Annonce
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_annonce", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_annonce", type="text", nullable=false)
     */
    private $texteAnnonce;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_page", type="text", nullable=false)
     */
    private $titrePage;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_page", type="text", nullable=false)
     */
    private $textePage;



    /**
     * Get idAnnonce
     *
     * @return integer 
     */
    public function getIdAnnonce()
    {
        return $this->idAnnonce;
    }

    /**
     * Set texteAnnonce
     *
     * @param string $texteAnnonce
     * @return Annonce
     */
    public function setTexteAnnonce($texteAnnonce)
    {
        $this->texteAnnonce = $texteAnnonce;

        return $this;
    }

    /**
     * Get texteAnnonce
     *
     * @return string 
     */
    public function getTexteAnnonce()
    {
        return $this->texteAnnonce;
    }

    /**
     * Set titrePage
     *
     * @param string $titrePage
     * @return Annonce
     */
    public function setTitrePage($titrePage)
    {
        $this->titrePage = $titrePage;

        return $this;
    }

    /**
     * Get titrePage
     *
     * @return string 
     */
    public function getTitrePage()
    {
        return $this->titrePage;
    }

    /**
     * Set textePage
     *
     * @param string $textePage
     * @return Annonce
     */
    public function setTextePage($textePage)
    {
        $this->textePage = $textePage;

        return $this;
    }

    /**
     * Get textePage
     *
     * @return string 
     */
    public function getTextePage()
    {
        return $this->textePage;
    }
}
