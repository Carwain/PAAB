<?php

namespace Ingetis\CarouselBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panell
 *
 * @ORM\Table(name="panell", indexes={@ORM\Index(name="event", columns={"event"})})
 * @ORM\Entity
 */
class Panell
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_panell", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPanell;

    /**
     * @var integer
     *
     * @ORM\Column(name="event", type="integer", nullable=false)
     */
    private $event;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_section_panell", type="integer", nullable=false)
     */
    private $idSectionPanell;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type_article", type="integer", nullable=false)
     */
    private $idTypeArticle;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_panell", type="string", length=300, nullable=false)
     */
    private $titrePanell;

    /**
     * @var string
     *
     * @ORM\Column(name="image_panell", type="string", length=300, nullable=false)
     */
    private $imagePanell;

    /**
     * @var string
     *
     * @ORM\Column(name="video_panell", type="string", length=250, nullable=false)
     */
    private $videoPanell;

    /**
     * @var string
     *
     * @ORM\Column(name="swf_panell", type="string", length=250, nullable=false)
     */
    private $swfPanell;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_panell", type="string", length=300, nullable=false)
     */
    private $lienPanell;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_panell", type="text", nullable=false)
     */
    private $descPanell;

    /**
     * @var integer
     *
     * @ORM\Column(name="delais_panell", type="integer", nullable=false)
     */
    private $delaisPanell;



    /**
     * Get idPanell
     *
     * @return integer 
     */
    public function getIdPanell()
    {
        return $this->idPanell;
    }

    /**
     * Set event
     *
     * @param integer $event
     * @return Panell
     */
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return integer 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set idSectionPanell
     *
     * @param integer $idSectionPanell
     * @return Panell
     */
    public function setIdSectionPanell($idSectionPanell)
    {
        $this->idSectionPanell = $idSectionPanell;

        return $this;
    }

    /**
     * Get idSectionPanell
     *
     * @return integer 
     */
    public function getIdSectionPanell()
    {
        return $this->idSectionPanell;
    }

    /**
     * Set idTypeArticle
     *
     * @param integer $idTypeArticle
     * @return Panell
     */
    public function setIdTypeArticle($idTypeArticle)
    {
        $this->idTypeArticle = $idTypeArticle;

        return $this;
    }

    /**
     * Get idTypeArticle
     *
     * @return integer 
     */
    public function getIdTypeArticle()
    {
        return $this->idTypeArticle;
    }

    /**
     * Set titrePanell
     *
     * @param string $titrePanell
     * @return Panell
     */
    public function setTitrePanell($titrePanell)
    {
        $this->titrePanell = $titrePanell;

        return $this;
    }

    /**
     * Get titrePanell
     *
     * @return string 
     */
    public function getTitrePanell()
    {
        return $this->titrePanell;
    }

    /**
     * Set imagePanell
     *
     * @param string $imagePanell
     * @return Panell
     */
    public function setImagePanell($imagePanell)
    {
        $this->imagePanell = $imagePanell;

        return $this;
    }

    /**
     * Get imagePanell
     *
     * @return string 
     */
    public function getImagePanell()
    {
        return $this->imagePanell;
    }

    /**
     * Set videoPanell
     *
     * @param string $videoPanell
     * @return Panell
     */
    public function setVideoPanell($videoPanell)
    {
        $this->videoPanell = $videoPanell;

        return $this;
    }

    /**
     * Get videoPanell
     *
     * @return string 
     */
    public function getVideoPanell()
    {
        return $this->videoPanell;
    }

    /**
     * Set swfPanell
     *
     * @param string $swfPanell
     * @return Panell
     */
    public function setSwfPanell($swfPanell)
    {
        $this->swfPanell = $swfPanell;

        return $this;
    }

    /**
     * Get swfPanell
     *
     * @return string 
     */
    public function getSwfPanell()
    {
        return $this->swfPanell;
    }

    /**
     * Set lienPanell
     *
     * @param string $lienPanell
     * @return Panell
     */
    public function setLienPanell($lienPanell)
    {
        $this->lienPanell = $lienPanell;

        return $this;
    }

    /**
     * Get lienPanell
     *
     * @return string 
     */
    public function getLienPanell()
    {
        return $this->lienPanell;
    }

    /**
     * Set descPanell
     *
     * @param string $descPanell
     * @return Panell
     */
    public function setDescPanell($descPanell)
    {
        $this->descPanell = $descPanell;

        return $this;
    }

    /**
     * Get descPanell
     *
     * @return string 
     */
    public function getDescPanell()
    {
        return $this->descPanell;
    }

    /**
     * Set delaisPanell
     *
     * @param integer $delaisPanell
     * @return Panell
     */
    public function setDelaisPanell($delaisPanell)
    {
        $this->delaisPanell = $delaisPanell;

        return $this;
    }

    /**
     * Get delaisPanell
     *
     * @return integer 
     */
    public function getDelaisPanell()
    {
        return $this->delaisPanell;
    }
}
