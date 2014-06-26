<?php

namespace Ingetis\PagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categories
 *
 * @ORM\Table(name="categories", uniqueConstraints={@ORM\UniqueConstraint(name="url_categorie", columns={"url_categorie"})}, indexes={@ORM\Index(name="position", columns={"position"})})
 * @ORM\Entity
 */
class Categories
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_categorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_categorie", type="string", length=124, nullable=false)
     */
    private $titreCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="url_categorie", type="string", length=124, nullable=false)
     */
    private $urlCategorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;



    /**
     * Get idCategorie
     *
     * @return integer 
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * Set titreCategorie
     *
     * @param string $titreCategorie
     * @return Categories
     */
    public function setTitreCategorie($titreCategorie)
    {
        $this->titreCategorie = $titreCategorie;

        return $this;
    }

    /**
     * Get titreCategorie
     *
     * @return string 
     */
    public function getTitreCategorie()
    {
        return $this->titreCategorie;
    }

    /**
     * Set urlCategorie
     *
     * @param string $urlCategorie
     * @return Categories
     */
    public function setUrlCategorie($urlCategorie)
    {
        $this->urlCategorie = $urlCategorie;

        return $this;
    }

    /**
     * Get urlCategorie
     *
     * @return string 
     */
    public function getUrlCategorie()
    {
        return $this->urlCategorie;
    }

    /**
     * Set position
     *
     * @param integer $position
     * @return Categories
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
