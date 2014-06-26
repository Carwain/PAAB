<?php

namespace Ingetis\DemandeDocBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemandeDoc
 *
 * @ORM\Table(name="demande_doc")
 * @ORM\Entity
 */
class DemandeDoc
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
     * @ORM\Column(name="civ", type="string", nullable=false)
     */
    private $civ = 'mme';

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom = '';

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=false)
     */
    private $prenom = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date", nullable=false)
     */
    private $datenaissance = '0000-00-00';

    /**
     * @var string
     *
     * @ORM\Column(name="adr1", type="string", length=64, nullable=false)
     */
    private $adr1 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="adr2", type="string", length=64, nullable=false)
     */
    private $adr2 = '';

    /**
     * @var string
     *
     * @ORM\Column(name="cp", type="string", length=10, nullable=false)
     */
    private $cp = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=64, nullable=false)
     */
    private $ville = '';

    /**
     * @var string
     *
     * @ORM\Column(name="telFixe", type="string", length=10, nullable=false)
     */
    private $telfixe = '';

    /**
     * @var string
     *
     * @ORM\Column(name="telPortable", type="string", length=10, nullable=false)
     */
    private $telportable = '';

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=128, nullable=false)
     */
    private $email = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="IDNiveau", type="smallint", nullable=false)
     */
    private $idniveau = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="niveauValide", type="string", nullable=false)
     */
    private $niveauvalide = 'non';

    /**
     * @var integer
     *
     * @ORM\Column(name="IDFormation1", type="integer", nullable=false)
     */
    private $idformation1 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tFormation1", type="string", nullable=false)
     */
    private $tformation1 = 'initial';

    /**
     * @var boolean
     *
     * @ORM\Column(name="aFormation1", type="boolean", nullable=false)
     */
    private $aformation1 = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="IDFormation2", type="integer", nullable=false)
     */
    private $idformation2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="tFormation2", type="string", nullable=false)
     */
    private $tformation2 = 'initial';

    /**
     * @var boolean
     *
     * @ORM\Column(name="aFormation2", type="boolean", nullable=false)
     */
    private $aformation2 = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="etablissement", type="string", length=255, nullable=false)
     */
    private $etablissement = '';



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
     * @return DemandeDoc
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
     * @return DemandeDoc
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
     * @return DemandeDoc
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
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     * @return DemandeDoc
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime 
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set adr1
     *
     * @param string $adr1
     * @return DemandeDoc
     */
    public function setAdr1($adr1)
    {
        $this->adr1 = $adr1;

        return $this;
    }

    /**
     * Get adr1
     *
     * @return string 
     */
    public function getAdr1()
    {
        return $this->adr1;
    }

    /**
     * Set adr2
     *
     * @param string $adr2
     * @return DemandeDoc
     */
    public function setAdr2($adr2)
    {
        $this->adr2 = $adr2;

        return $this;
    }

    /**
     * Get adr2
     *
     * @return string 
     */
    public function getAdr2()
    {
        return $this->adr2;
    }

    /**
     * Set cp
     *
     * @param string $cp
     * @return DemandeDoc
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string 
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return DemandeDoc
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set telfixe
     *
     * @param string $telfixe
     * @return DemandeDoc
     */
    public function setTelfixe($telfixe)
    {
        $this->telfixe = $telfixe;

        return $this;
    }

    /**
     * Get telfixe
     *
     * @return string 
     */
    public function getTelfixe()
    {
        return $this->telfixe;
    }

    /**
     * Set telportable
     *
     * @param string $telportable
     * @return DemandeDoc
     */
    public function setTelportable($telportable)
    {
        $this->telportable = $telportable;

        return $this;
    }

    /**
     * Get telportable
     *
     * @return string 
     */
    public function getTelportable()
    {
        return $this->telportable;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return DemandeDoc
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set idniveau
     *
     * @param integer $idniveau
     * @return DemandeDoc
     */
    public function setIdniveau($idniveau)
    {
        $this->idniveau = $idniveau;

        return $this;
    }

    /**
     * Get idniveau
     *
     * @return integer 
     */
    public function getIdniveau()
    {
        return $this->idniveau;
    }

    /**
     * Set niveauvalide
     *
     * @param string $niveauvalide
     * @return DemandeDoc
     */
    public function setNiveauvalide($niveauvalide)
    {
        $this->niveauvalide = $niveauvalide;

        return $this;
    }

    /**
     * Get niveauvalide
     *
     * @return string 
     */
    public function getNiveauvalide()
    {
        return $this->niveauvalide;
    }

    /**
     * Set idformation1
     *
     * @param integer $idformation1
     * @return DemandeDoc
     */
    public function setIdformation1($idformation1)
    {
        $this->idformation1 = $idformation1;

        return $this;
    }

    /**
     * Get idformation1
     *
     * @return integer 
     */
    public function getIdformation1()
    {
        return $this->idformation1;
    }

    /**
     * Set tformation1
     *
     * @param string $tformation1
     * @return DemandeDoc
     */
    public function setTformation1($tformation1)
    {
        $this->tformation1 = $tformation1;

        return $this;
    }

    /**
     * Get tformation1
     *
     * @return string 
     */
    public function getTformation1()
    {
        return $this->tformation1;
    }

    /**
     * Set aformation1
     *
     * @param boolean $aformation1
     * @return DemandeDoc
     */
    public function setAformation1($aformation1)
    {
        $this->aformation1 = $aformation1;

        return $this;
    }

    /**
     * Get aformation1
     *
     * @return boolean 
     */
    public function getAformation1()
    {
        return $this->aformation1;
    }

    /**
     * Set idformation2
     *
     * @param integer $idformation2
     * @return DemandeDoc
     */
    public function setIdformation2($idformation2)
    {
        $this->idformation2 = $idformation2;

        return $this;
    }

    /**
     * Get idformation2
     *
     * @return integer 
     */
    public function getIdformation2()
    {
        return $this->idformation2;
    }

    /**
     * Set tformation2
     *
     * @param string $tformation2
     * @return DemandeDoc
     */
    public function setTformation2($tformation2)
    {
        $this->tformation2 = $tformation2;

        return $this;
    }

    /**
     * Get tformation2
     *
     * @return string 
     */
    public function getTformation2()
    {
        return $this->tformation2;
    }

    /**
     * Set aformation2
     *
     * @param boolean $aformation2
     * @return DemandeDoc
     */
    public function setAformation2($aformation2)
    {
        $this->aformation2 = $aformation2;

        return $this;
    }

    /**
     * Get aformation2
     *
     * @return boolean 
     */
    public function getAformation2()
    {
        return $this->aformation2;
    }

    /**
     * Set etablissement
     *
     * @param string $etablissement
     * @return DemandeDoc
     */
    public function setEtablissement($etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return string 
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }
}
