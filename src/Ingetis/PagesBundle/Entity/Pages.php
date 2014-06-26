<?php

namespace Ingetis\PagesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pages
 *
 * @ORM\Table(name="pages", indexes={@ORM\Index(name="id_categorie", columns={"id_categorie", "id_sous_categorie"}), @ORM\Index(name="position", columns={"position"})})
 * @ORM\Entity
 */
class Pages
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_page", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPage;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_page", type="string", length=124, nullable=false)
     */
    private $titrePage;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_nav", type="text", nullable=false)
     */
    private $titreNav;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_page", type="text", nullable=false)
     */
    private $textePage;

    /**
     * @var string
     *
     * @ORM\Column(name="url_page", type="string", length=124, nullable=false)
     */
    private $urlPage;

    /**
     * @var integer
     *
     * @ORM\Column(name="vues_page", type="integer", nullable=false)
     */
    private $vuesPage;

    /**
     * @var string
     *
     * @ORM\Column(name="last_ip", type="string", length=124, nullable=false)
     */
    private $lastIp;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_page", type="integer", nullable=false)
     */
    private $datePage;

    /**
     * @var boolean
     *
     * @ORM\Column(name="index_categorie", type="boolean", nullable=false)
     */
    private $indexCategorie;

    /**
     * @var boolean
     *
     * @ORM\Column(name="index_sous_categorie", type="boolean", nullable=false)
     */
    private $indexSousCategorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_categorie", type="integer", nullable=false)
     */
    private $idCategorie;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_sous_categorie", type="integer", nullable=false)
     */
    private $idSousCategorie;

    /**
     * @var boolean
     *
     * @ORM\Column(name="page_fixe", type="boolean", nullable=false)
     */
    private $pageFixe;

    /**
     * @var string
     *
     * @ORM\Column(name="url_page_fixe", type="string", length=250, nullable=false)
     */
    private $urlPageFixe;

    /**
     * @var boolean
     *
     * @ORM\Column(name="link", type="boolean", nullable=false)
     */
    private $link;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_link", type="integer", nullable=false)
     */
    private $idLink;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_visit", type="integer", nullable=false)
     */
    private $lastVisit;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer", nullable=false)
     */
    private $position;



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
     * Set titrePage
     *
     * @param string $titrePage
     * @return Pages
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
     * Set titreNav
     *
     * @param string $titreNav
     * @return Pages
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

    /**
     * Set textePage
     *
     * @param string $textePage
     * @return Pages
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

    /**
     * Set urlPage
     *
     * @param string $urlPage
     * @return Pages
     */
    public function setUrlPage($urlPage)
    {
        $this->urlPage = $urlPage;

        return $this;
    }

    /**
     * Get urlPage
     *
     * @return string 
     */
    public function getUrlPage()
    {
        return $this->urlPage;
    }

    /**
     * Set vuesPage
     *
     * @param integer $vuesPage
     * @return Pages
     */
    public function setVuesPage($vuesPage)
    {
        $this->vuesPage = $vuesPage;

        return $this;
    }

    /**
     * Get vuesPage
     *
     * @return integer 
     */
    public function getVuesPage()
    {
        return $this->vuesPage;
    }

    /**
     * Set lastIp
     *
     * @param string $lastIp
     * @return Pages
     */
    public function setLastIp($lastIp)
    {
        $this->lastIp = $lastIp;

        return $this;
    }

    /**
     * Get lastIp
     *
     * @return string 
     */
    public function getLastIp()
    {
        return $this->lastIp;
    }

    /**
     * Set datePage
     *
     * @param integer $datePage
     * @return Pages
     */
    public function setDatePage($datePage)
    {
        $this->datePage = $datePage;

        return $this;
    }

    /**
     * Get datePage
     *
     * @return integer 
     */
    public function getDatePage()
    {
        return $this->datePage;
    }

    /**
     * Set indexCategorie
     *
     * @param boolean $indexCategorie
     * @return Pages
     */
    public function setIndexCategorie($indexCategorie)
    {
        $this->indexCategorie = $indexCategorie;

        return $this;
    }

    /**
     * Get indexCategorie
     *
     * @return boolean 
     */
    public function getIndexCategorie()
    {
        return $this->indexCategorie;
    }

    /**
     * Set indexSousCategorie
     *
     * @param boolean $indexSousCategorie
     * @return Pages
     */
    public function setIndexSousCategorie($indexSousCategorie)
    {
        $this->indexSousCategorie = $indexSousCategorie;

        return $this;
    }

    /**
     * Get indexSousCategorie
     *
     * @return boolean 
     */
    public function getIndexSousCategorie()
    {
        return $this->indexSousCategorie;
    }

    /**
     * Set idCategorie
     *
     * @param integer $idCategorie
     * @return Pages
     */
    public function setIdCategorie($idCategorie)
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

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
     * Set idSousCategorie
     *
     * @param integer $idSousCategorie
     * @return Pages
     */
    public function setIdSousCategorie($idSousCategorie)
    {
        $this->idSousCategorie = $idSousCategorie;

        return $this;
    }

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
     * Set pageFixe
     *
     * @param boolean $pageFixe
     * @return Pages
     */
    public function setPageFixe($pageFixe)
    {
        $this->pageFixe = $pageFixe;

        return $this;
    }

    /**
     * Get pageFixe
     *
     * @return boolean 
     */
    public function getPageFixe()
    {
        return $this->pageFixe;
    }

    /**
     * Set urlPageFixe
     *
     * @param string $urlPageFixe
     * @return Pages
     */
    public function setUrlPageFixe($urlPageFixe)
    {
        $this->urlPageFixe = $urlPageFixe;

        return $this;
    }

    /**
     * Get urlPageFixe
     *
     * @return string 
     */
    public function getUrlPageFixe()
    {
        return $this->urlPageFixe;
    }

    /**
     * Set link
     *
     * @param boolean $link
     * @return Pages
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return boolean 
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set idLink
     *
     * @param integer $idLink
     * @return Pages
     */
    public function setIdLink($idLink)
    {
        $this->idLink = $idLink;

        return $this;
    }

    /**
     * Get idLink
     *
     * @return integer 
     */
    public function getIdLink()
    {
        return $this->idLink;
    }

    /**
     * Set lastVisit
     *
     * @param integer $lastVisit
     * @return Pages
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

    /**
     * Set position
     *
     * @param integer $position
     * @return Pages
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
