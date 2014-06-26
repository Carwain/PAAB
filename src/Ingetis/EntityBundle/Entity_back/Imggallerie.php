<?php

namespace Ingetis\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imggallerie
 *
 * @ORM\Table(name="imggallerie")
 * @ORM\Entity
 */
class Imggallerie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="img", type="string", length=100, nullable=false)
     */
    private $img = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="idGallerie", type="integer", nullable=false)
     */
    private $idgallerie = '0';



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return Imggallerie
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set idgallerie
     *
     * @param integer $idgallerie
     * @return Imggallerie
     */
    public function setIdgallerie($idgallerie)
    {
        $this->idgallerie = $idgallerie;

        return $this;
    }

    /**
     * Get idgallerie
     *
     * @return integer 
     */
    public function getIdgallerie()
    {
        return $this->idgallerie;
    }
}
