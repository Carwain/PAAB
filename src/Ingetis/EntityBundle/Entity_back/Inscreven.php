<?php

namespace Ingetis\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inscreven
 *
 * @ORM\Table(name="inscreven")
 * @ORM\Entity
 */
class Inscreven
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
     * @ORM\Column(name="civ", type="string", nullable=true)
     */
    private $civ;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=80, nullable=false)
     */
    private $nom = '';

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=80, nullable=false)
     */
    private $prenom = '';

    /**
     * @var string
     *
     * @ORM\Column(name="section", type="string", length=100, nullable=false)
     */
    private $section = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=10, nullable=false)
     */
    private $tel = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=100, nullable=false)
     */
    private $mail = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="idEven", type="integer", nullable=false)
     */
    private $ideven = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ext", type="integer", nullable=false)
     */
    private $ext = '0';



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
     * Set civ
     *
     * @param string $civ
     * @return Inscreven
     */
    public function setCiv($civ)
    {
        $this->civ = $civ;

        return $this;
    }

    /**
     * Get civ
     *
     * @return string 
     */
    public function getCiv()
    {
        return $this->civ;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Inscreven
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Inscreven
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set section
     *
     * @param string $section
     * @return Inscreven
     */
    public function setSection($section)
    {
        $this->section = $section;

        return $this;
    }

    /**
     * Get section
     *
     * @return string 
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Inscreven
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Inscreven
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set ideven
     *
     * @param integer $ideven
     * @return Inscreven
     */
    public function setIdeven($ideven)
    {
        $this->ideven = $ideven;

        return $this;
    }

    /**
     * Get ideven
     *
     * @return integer 
     */
    public function getIdeven()
    {
        return $this->ideven;
    }

    /**
     * Set ext
     *
     * @param integer $ext
     * @return Inscreven
     */
    public function setExt($ext)
    {
        $this->ext = $ext;

        return $this;
    }

    /**
     * Get ext
     *
     * @return integer 
     */
    public function getExt()
    {
        return $this->ext;
    }
}
