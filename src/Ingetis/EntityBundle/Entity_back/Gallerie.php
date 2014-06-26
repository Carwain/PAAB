<?php

namespace Ingetis\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gallerie
 *
 * @ORM\Table(name="gallerie")
 * @ORM\Entity
 */
class Gallerie
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
     * @ORM\Column(name="nomGallerie", type="string", length=100, nullable=false)
     */
    private $nomgallerie = '';



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
     * Set nomgallerie
     *
     * @param string $nomgallerie
     * @return Gallerie
     */
    public function setNomgallerie($nomgallerie)
    {
        $this->nomgallerie = $nomgallerie;

        return $this;
    }

    /**
     * Get nomgallerie
     *
     * @return string 
     */
    public function getNomgallerie()
    {
        return $this->nomgallerie;
    }
}
