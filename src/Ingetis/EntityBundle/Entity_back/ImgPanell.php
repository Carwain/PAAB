<?php

namespace Ingetis\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImgPanell
 *
 * @ORM\Table(name="img_panell")
 * @ORM\Entity
 */
class ImgPanell
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_img_panell", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idImgPanell;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_img_panell", type="string", length=250, nullable=false)
     */
    private $titreImgPanell;

    /**
     * @var string
     *
     * @ORM\Column(name="img_img_panell", type="text", nullable=false)
     */
    private $imgImgPanell;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_img_panell", type="integer", nullable=false)
     */
    private $dateImgPanell = '0';



    /**
     * Get idImgPanell
     *
     * @return integer 
     */
    public function getIdImgPanell()
    {
        return $this->idImgPanell;
    }

    /**
     * Set titreImgPanell
     *
     * @param string $titreImgPanell
     * @return ImgPanell
     */
    public function setTitreImgPanell($titreImgPanell)
    {
        $this->titreImgPanell = $titreImgPanell;

        return $this;
    }

    /**
     * Get titreImgPanell
     *
     * @return string 
     */
    public function getTitreImgPanell()
    {
        return $this->titreImgPanell;
    }

    /**
     * Set imgImgPanell
     *
     * @param string $imgImgPanell
     * @return ImgPanell
     */
    public function setImgImgPanell($imgImgPanell)
    {
        $this->imgImgPanell = $imgImgPanell;

        return $this;
    }

    /**
     * Get imgImgPanell
     *
     * @return string 
     */
    public function getImgImgPanell()
    {
        return $this->imgImgPanell;
    }

    /**
     * Set dateImgPanell
     *
     * @param integer $dateImgPanell
     * @return ImgPanell
     */
    public function setDateImgPanell($dateImgPanell)
    {
        $this->dateImgPanell = $dateImgPanell;

        return $this;
    }

    /**
     * Get dateImgPanell
     *
     * @return integer 
     */
    public function getDateImgPanell()
    {
        return $this->dateImgPanell;
    }
}
