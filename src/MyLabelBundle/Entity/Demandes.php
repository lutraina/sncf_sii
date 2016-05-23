<?php

namespace MyLabelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demandes
 *
 * @ORM\Table(name="demandes")
 * @ORM\Entity(repositoryClass="MyLabelBundle\Repository\DemandesRepository")
 */
class Demandes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_dmd", type="date")
     */
    private $dateDmd;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=30)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="matricule", type="string", length=9)
     */
    private $matricule;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=30)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_projet", type="string", length=50)
     */
    private $nomProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="desc_projet", type="text")
     */
    private $descProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="carac_projet", type="text", nullable=true)
     */
    private $caracProjet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mep", type="date")
     */
    private $dateMEP;

    /**
     * @var int
     *
     * @ORM\Column(name="label_dmd", type="smallint")
     */
    private $labelDmd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_label", type="date", nullable=true)
     */
    private $dateLabel;

    /**
     * @var int
     *
     * @ORM\Column(name="statut_dmd", type="smallint")
     */
    private $statutDmd=1;


	  public function __construct()
    {
      // La date de la demande est la date d'aujourd'hui
	  $this->dateDmd = new \Datetime();
    } 
	
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

      /**
     * Set dateDmd
     *
     * @param \DateTime $dateDmd
     *
     * @return Demandes
     */
    public function setDateDmd($dateDmd)
    {
        $this->dateDmd = $dateDmd;

        return $this;
    }

    /**
     * Get dateDmd
     *
     * @return \DateTime
     */
    public function getDateDmd()
    {
        return $this->dateDmd;
    }

  /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Demandes
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
     *
     * @return Demandes
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
     * Set matricule
     *
     * @param string $matricule
     *
     * @return Demandes
     */
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }

    /**
     * Get matricule
     *
     * @return string
     */
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Demandes
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
     * Set nomProjet
     *
     * @param string $nomProjet
     *
     * @return Demandes
     */
    public function setNomProjet($nomProjet)
    {
        $this->nomProjet = $nomProjet;

        return $this;
    }

    /**
     * Get nomProjet
     *
     * @return string
     */
    public function getNomProjet()
    {
        return $this->nomProjet;
    }

    /**
     * Set descProjet
     *
     * @param string $descProjet
     *
     * @return Demandes
     */
    public function setDescProjet($descProjet)
    {
        $this->descProjet = $descProjet;

        return $this;
    }

    /**
     * Get descProjet
     *
     * @return string
     */
    public function getDescProjet()
    {
        return $this->descProjet;
    }

    /**
     * Set caracProjet
     *
     * @param string $caracProjet
     *
     * @return Demandes
     */
    public function setCaracProjet($caracProjet)
    {
        $this->caracProjet = $caracProjet;

        return $this;
    }

    /**
     * Get caracProjet
     *
     * @return string
     */
    public function getCaracProjet()
    {
        return $this->caracProjet;
    }

    /**
     * Set dateMEP
     *
     * @param \DateTime $dateMEP
     *
     * @return Demandes
     */
    public function setDateMEP($dateMEP)
    {
        $this->dateMEP = $dateMEP;

        return $this;
    }

    /**
     * Get dateMEP
     *
     * @return \DateTime
     */
    public function getDateMEP()
    {
        return $this->dateMEP;
    }

    /**
     * Set labelDmd
     *
     * @param integer $labelDmd
     *
     * @return Demandes
     */
    public function setLabelDmd($labelDmd)
    {
        $this->labelDmd = $labelDmd;

        return $this;
    }

    /**
     * Get labelDmd
     *
     * @return int
     */
    public function getLabelDmd()
    {
        return $this->labelDmd;
    }

    /**
     * Set dateLabel
     *
     * @param \DateTime $dateLabel
     *
     * @return Demandes
     */
    public function setDateLabel($dateLabel)
    {
        $this->dateLabel = $dateLabel;

        return $this;
    }

    /**
     * Get dateLabel
     *
     * @return \DateTime
     */
    public function getDateLabel()
    {
        return $this->dateLabel;
    }

    /**
     * Set statutDmd
     *
     * @param integer $statutDmd
     *
     * @return Demandes
     */
    public function setStatutDmd($statutDmd)
    {
        $this->statutDmd = $statutDmd;

        return $this;
    }

    /**
     * Get statutDmd
     *
     * @return integer
     */
    public function getStatutDmd()
    {
        return $this->statutDmd;
    }
}
