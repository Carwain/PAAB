<?php

namespace Ingetis\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SousCategories
 *
 * @ORM\Table(name="sous_categories", uniqueConstraints={@ORM\UniqueConstraint(name="url_sous_categorie", columns={"url_sous_categorie"})}, indexes={@ORM\Index(name="position", columns={"position"})})
 * @ORM\Entity
 */
class SousCategories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_sous_categorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSousCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_sous_categorie", type="string", length=124, nullable=false)
     */
    private $titreSousCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="url_sous_categorie", type="string", length=124, nullable=false)
     */
    private $urlSousCategorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;



    /**
     * Get idSousCategorie
     *
     * @return integer 
     */
    public function getIdSousCategorie()
    {
        return $this->idSousCategorie;
    }

    /**
     * Set titreSousCategorie
     *
     * @param string $titreSousCategorie
     * @return SousCategories
     */
    public function setTitreSousCategorie($titreSousCategorie)
    {
        $this->titreSousCategorie = $titreSousCategorie;

        return $this;
    }

    /**
     * Get titreSousCategorie
     *
     * @return string 
     */
    public function getTitreSousCategorie()
    {
        return $this->titreSousCategorie;
    }

    /**
     * Set urlSousCategorie
     *
     * @param string $urlSousCategorie
     * @return SousCategories
     */
    public function setUrlSousCategorie($urlSousCategorie)
    {
        $this->urlSousCategorie = $urlSousCategorie;

        return $this;
    }

    /**
     * Get urlSousCategorie
     *
     * @return string 
     */
    public function getUrlSousCategorie()
    {
        return $this->urlSousCategorie;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return SousCategories
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }
}
