<?php

namespace Ingetis\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Navig
 *
 * @ORM\Table(name="navig")
 * @ORM\Entity
 */
class Navig
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_nav", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idNav;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_page", type="integer", nullable=false)
     */
    private $idPage;

    /**
     * @var integer
     *
     * @ORM\Column(name="parent", type="integer", nullable=false)
     */
    private $parent;

    /**
     * @var string
     *
     * @ORM\Column(name="url_nav", type="text", nullable=false)
     */
    private $urlNav;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_nav", type="text", nullable=false)
     */
    private $titreNav;



    /**
     * Get idNav
     *
     * @return integer 
     */
    public function getIdNav()
    {
        return $this->idNav;
    }

    /**
     * Set idPage
     *
     * @param integer $idPage
     * @return Navig
     */
    public function setIdPage($idPage)
    {
        $this->idPage = $idPage;

        return $this;
    }

    /**
     * Get idPage
     *
     * @return integer 
     */
    public function getIdPage()
    {
        return $this->idPage;
    }

    /**
     * Set parent
     *
     * @param integer $parent
     * @return Navig
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return integer 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set urlNav
     *
     * @param string $urlNav
     * @return Navig
     */
    public function setUrlNav($urlNav)
    {
        $this->urlNav = $urlNav;

        return $this;
    }

    /**
     * Get urlNav
     *
     * @return string 
     */
    public function getUrlNav()
    {
        return $this->urlNav;
    }

    /**
     * Set titreNav
     *
     * @param string $titreNav
     * @return Navig
     */
    public function setTitreNav($titreNav)
    {
        $this->titreNav = $titreNav;

        return $this;
    }

    /**
     * Get titreNav
     *
     * @return string 
     */
    public function getTitreNav()
    {
        return $this->titreNav;
    }
}
