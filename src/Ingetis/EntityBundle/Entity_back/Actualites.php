<?php

namespace Ingetis\EntityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actualites
 *
 * @ORM\Table(name="actualites", indexes={@ORM\Index(name="id_section", columns={"id_section"}), @ORM\Index(name="id_sous_type", columns={"id_sous_type"}), @ORM\Index(name="id_user_actualite", columns={"id_user_actualite"}), @ORM\Index(name="user_actualite", columns={"user_actualite"}), @ORM\Index(name="titre_actualite", columns={"titre_actualite"}), @ORM\Index(name="vues_actualite", columns={"vues_actualite"}), @ORM\Index(name="date_actualite", columns={"date_actualite"}), @ORM\Index(name="nbr_coms", columns={"nbr_coms"})})
 * @ORM\Entity
 */
class Actualites
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_actualite", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActualite;

    /**
     * @var boolean
     *
     * @ORM\Column(name="event", type="boolean", nullable=false)
     */
    private $event = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="id_section", type="boolean", nullable=false)
     */
    private $idSection;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_sous_type", type="integer", nullable=false)
     */
    private $idSousType = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user_actualite", type="integer", nullable=false)
     */
    private $idUserActualite = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="user_actualite", type="integer", nullable=false)
     */
    private $userActualite = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_topic_forum", type="integer", nullable=false)
     */
    private $idTopicForum;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_actualite", type="string", length=250, nullable=true)
     */
    private $titreActualite;

    /**
     * @var string
     *
     * @ORM\Column(name="artiste_actualite", type="string", length=150, nullable=false)
     */
    private $artisteActualite = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="featuring_actualite", type="string", length=250, nullable=false)
     */
    private $featuringActualite = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="titre_son_actualite", type="string", length=150, nullable=false)
     */
    private $titreSonActualite = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="resume_actualite", type="text", nullable=true)
     */
    private $resumeActualite;

    /**
     * @var string
     *
     * @ORM\Column(name="media_actualite", type="text", nullable=true)
     */
    private $mediaActualite;

    /**
     * @var string
     *
     * @ORM\Column(name="texte_actualite", type="text", nullable=true)
     */
    private $texteActualite;

    /**
     * @var integer
     *
     * @ORM\Column(name="vues_actualite", type="integer", nullable=true)
     */
    private $vuesActualite = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="date_actualite", type="integer", nullable=true)
     */
    private $dateActualite = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="photo_actualite", type="string", length=250, nullable=true)
     */
    private $photoActualite;

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="text", nullable=false)
     */
    private $tags;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbr_coms", type="integer", nullable=true)
     */
    private $nbrComs = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="note_actualite", type="float", precision=10, scale=0, nullable=false)
     */
    private $noteActualite;

    /**
     * @var integer
     *
     * @ORM\Column(name="favori", type="integer", nullable=false)
     */
    private $favori = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="dead", type="integer", nullable=false)
     */
    private $dead = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="exclu", type="integer", nullable=false)
     */
    private $exclu = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="last_id_member_fav", type="integer", nullable=false)
     */
    private $lastIdMemberFav = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="last_ip_actualite", type="string", length=250, nullable=false)
     */
    private $lastIpActualite;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_visit", type="integer", nullable=false)
     */
    private $lastVisit;



    /**
     * Get idActualite
     *
     * @return integer 
     */
    public function getIdActualite()
    {
        return $this->idActualite;
    }

    /**
     * Set event
     *
     * @param boolean $event
     * @return Actualites
     */
    public function setEvent($event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get event
     *
     * @return boolean 
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * Set idSection
     *
     * @param boolean $idSection
     * @return Actualites
     */
    public function setIdSection($idSection)
    {
        $this->idSection = $idSection;

        return $this;
    }

    /**
     * Get idSection
     *
     * @return boolean 
     */
    public function getIdSection()
    {
        return $this->idSection;
    }

    /**
     * Set idSousType
     *
     * @param integer $idSousType
     * @return Actualites
     */
    public function setIdSousType($idSousType)
    {
        $this->idSousType = $idSousType;

        return $this;
    }

    /**
     * Get idSousType
     *
     * @return integer 
     */
    public function getIdSousType()
    {
        return $this->idSousType;
    }

    /**
     * Set idUserActualite
     *
     * @param integer $idUserActualite
     * @return Actualites
     */
    public function setIdUserActualite($idUserActualite)
    {
        $this->idUserActualite = $idUserActualite;

        return $this;
    }

    /**
     * Get idUserActualite
     *
     * @return integer 
     */
    public function getIdUserActualite()
    {
        return $this->idUserActualite;
    }

    /**
     * Set userActualite
     *
     * @param integer $userActualite
     * @return Actualites
     */
    public function setUserActualite($userActualite)
    {
        $this->userActualite = $userActualite;

        return $this;
    }

    /**
     * Get userActualite
     *
     * @return integer 
     */
    public function getUserActualite()
    {
        return $this->userActualite;
    }

    /**
     * Set idTopicForum
     *
     * @param integer $idTopicForum
     * @return Actualites
     */
    public function setIdTopicForum($idTopicForum)
    {
        $this->idTopicForum = $idTopicForum;

        return $this;
    }

    /**
     * Get idTopicForum
     *
     * @return integer 
     */
    public function getIdTopicForum()
    {
        return $this->idTopicForum;
    }

    /**
     * Set titreActualite
     *
     * @param string $titreActualite
     * @return Actualites
     */
    public function setTitreActualite($titreActualite)
    {
        $this->titreActualite = $titreActualite;

        return $this;
    }

    /**
     * Get titreActualite
     *
     * @return string 
     */
    public function getTitreActualite()
    {
        return $this->titreActualite;
    }

    /**
     * Set artisteActualite
     *
     * @param string $artisteActualite
     * @return Actualites
     */
    public function setArtisteActualite($artisteActualite)
    {
        $this->artisteActualite = $artisteActualite;

        return $this;
    }

    /**
     * Get artisteActualite
     *
     * @return string 
     */
    public function getArtisteActualite()
    {
        return $this->artisteActualite;
    }

    /**
     * Set featuringActualite
     *
     * @param string $featuringActualite
     * @return Actualites
     */
    public function setFeaturingActualite($featuringActualite)
    {
        $this->featuringActualite = $featuringActualite;

        return $this;
    }

    /**
     * Get featuringActualite
     *
     * @return string 
     */
    public function getFeaturingActualite()
    {
        return $this->featuringActualite;
    }

    /**
     * Set titreSonActualite
     *
     * @param string $titreSonActualite
     * @return Actualites
     */
    public function setTitreSonActualite($titreSonActualite)
    {
        $this->titreSonActualite = $titreSonActualite;

        return $this;
    }

    /**
     * Get titreSonActualite
     *
     * @return string 
     */
    public function getTitreSonActualite()
    {
        return $this->titreSonActualite;
    }

    /**
     * Set resumeActualite
     *
     * @param string $resumeActualite
     * @return Actualites
     */
    public function setResumeActualite($resumeActualite)
    {
        $this->resumeActualite = $resumeActualite;

        return $this;
    }

    /**
     * Get resumeActualite
     *
     * @return string 
     */
    public function getResumeActualite()
    {
        return $this->resumeActualite;
    }

    /**
     * Set mediaActualite
     *
     * @param string $mediaActualite
     * @return Actualites
     */
    public function setMediaActualite($mediaActualite)
    {
        $this->mediaActualite = $mediaActualite;

        return $this;
    }

    /**
     * Get mediaActualite
     *
     * @return string 
     */
    public function getMediaActualite()
    {
        return $this->mediaActualite;
    }

    /**
     * Set texteActualite
     *
     * @param string $texteActualite
     * @return Actualites
     */
    public function setTexteActualite($texteActualite)
    {
        $this->texteActualite = $texteActualite;

        return $this;
    }

    /**
     * Get texteActualite
     *
     * @return string 
     */
    public function getTexteActualite()
    {
        return $this->texteActualite;
    }

    /**
     * Set vuesActualite
     *
     * @param integer $vuesActualite
     * @return Actualites
     */
    public function setVuesActualite($vuesActualite)
    {
        $this->vuesActualite = $vuesActualite;

        return $this;
    }

    /**
     * Get vuesActualite
     *
     * @return integer 
     */
    public function getVuesActualite()
    {
        return $this->vuesActualite;
    }

    /**
     * Set dateActualite
     *
     * @param integer $dateActualite
     * @return Actualites
     */
    public function setDateActualite($dateActualite)
    {
        $this->dateActualite = $dateActualite;

        return $this;
    }

    /**
     * Get dateActualite
     *
     * @return integer 
     */
    public function getDateActualite()
    {
        return $this->dateActualite;
    }

    /**
     * Set photoActualite
     *
     * @param string $photoActualite
     * @return Actualites
     */
    public function setPhotoActualite($photoActualite)
    {
        $this->photoActualite = $photoActualite;

        return $this;
    }

    /**
     * Get photoActualite
     *
     * @return string 
     */
    public function getPhotoActualite()
    {
        return $this->photoActualite;
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return Actualites
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string 
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set nbrComs
     *
     * @param integer $nbrComs
     * @return Actualites
     */
    public function setNbrComs($nbrComs)
    {
        $this->nbrComs = $nbrComs;

        return $this;
    }

    /**
     * Get nbrComs
     *
     * @return integer 
     */
    public function getNbrComs()
    {
        return $this->nbrComs;
    }

    /**
     * Set noteActualite
     *
     * @param float $noteActualite
     * @return Actualites
     */
    public function setNoteActualite($noteActualite)
    {
        $this->noteActualite = $noteActualite;

        return $this;
    }

    /**
     * Get noteActualite
     *
     * @return float 
     */
    public function getNoteActualite()
    {
        return $this->noteActualite;
    }

    /**
     * Set favori
     *
     * @param integer $favori
     * @return Actualites
     */
    public function setFavori($favori)
    {
        $this->favori = $favori;

        return $this;
    }

    /**
     * Get favori
     *
     * @return integer 
     */
    public function getFavori()
    {
        return $this->favori;
    }

    /**
     * Set dead
     *
     * @param integer $dead
     * @return Actualites
     */
    public function setDead($dead)
    {
        $this->dead = $dead;

        return $this;
    }

    /**
     * Get dead
     *
     * @return integer 
     */
    public function getDead()
    {
        return $this->dead;
    }

    /**
     * Set exclu
     *
     * @param integer $exclu
     * @return Actualites
     */
    public function setExclu($exclu)
    {
        $this->exclu = $exclu;

        return $this;
    }

    /**
     * Get exclu
     *
     * @return integer 
     */
    public function getExclu()
    {
        return $this->exclu;
    }

    /**
     * Set lastIdMemberFav
     *
     * @param integer $lastIdMemberFav
     * @return Actualites
     */
    public function setLastIdMemberFav($lastIdMemberFav)
    {
        $this->lastIdMemberFav = $lastIdMemberFav;

        return $this;
    }

    /**
     * Get lastIdMemberFav
     *
     * @return integer 
     */
    public function getLastIdMemberFav()
    {
        return $this->lastIdMemberFav;
    }

    /**
     * Set lastIpActualite
     *
     * @param string $lastIpActualite
     * @return Actualites
     */
    public function setLastIpActualite($lastIpActualite)
    {
        $this->lastIpActualite = $lastIpActualite;

        return $this;
    }

    /**
     * Get lastIpActualite
     *
     * @return string 
     */
    public function getLastIpActualite()
    {
        return $this->lastIpActualite;
    }

    /**
     * Set lastVisit
     *
     * @param integer $lastVisit
     * @return Actualites
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
}
