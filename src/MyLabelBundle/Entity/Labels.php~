<?php

namespace MyLabelBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Labels
 *
 * @ORM\Table(name="labels")
 * @ORM\Entity(repositoryClass="MyLabelBundle\Repository\LabelsRepository")
 */
class Labels
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
     * @var string
     *
     * @ORM\Column(name="nom_projet", type="string", length=50, unique=true)
     */
    private $nomProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_projet", type="string", length=255)
     */
    private $lienProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="version_projet", type="string", length=20)
     */
    private $versionProjet;

    /**
     * @var int
     *
     * @ORM\Column(name="label_projet", type="smallint")
     */
    private $labelProjet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="annee1_label", type="date")
     */
    private $annee1Label;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="annee2_label", type="date", nullable=true)
     */
    private $annee2Label;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="annee3_label", type="date", nullable=true)
     */
    private $annee3Label;


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
     * Set nomProjet
     *
     * @param string $nomProjet
     *
     * @return Labels
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
     * Set lienProjet
     *
     * @param string $lienProjet
     *
     * @return Labels
     */
    public function setLienProjet($lienProjet)
    {
        $this->lienProjet = $lienProjet;

        return $this;
    }

    /**
     * Get lienProjet
     *
     * @return string
     */
    public function getLienProjet()
    {
        return $this->lienProjet;
    }

    /**
     * Set versionProjet
     *
     * @param string $versionProjet
     *
     * @return Labels
     */
    public function setVersionProjet($versionProjet)
    {
        $this->versionProjet = $versionProjet;

        return $this;
    }

    /**
     * Get versionProjet
     *
     * @return string
     */
    public function getVersionProjet()
    {
        return $this->versionProjet;
    }

    /**
     * Set labelProjet
     *
     * @param integer $labelProjet
     *
     * @return Labels
     */
    public function setLabelProjet($labelProjet)
    {
        $this->labelProjet = $labelProjet;

        return $this;
    }

    /**
     * Get labelProjet
     *
     * @return int
     */
    public function getLabelProjet()
    {
        return $this->labelProjet;
    }

    /**
     * Set annee1Label
     *
     * @param \DateTime $annee1Label
     *
     * @return Labels
     */
    public function setAnnee1Label($annee1Label)
    {
        $this->annee1Label = $annee1Label;

        return $this;
    }

    /**
     * Get annee1Label
     *
     * @return \DateTime
     */
    public function getAnnee1Label()
    {
        return $this->annee1Label;
    }

    /**
     * Set annee2Label
     *
     * @param \DateTime $annee2Label
     *
     * @return Labels
     */
    public function setAnnee2Label($annee2Label)
    {
        $this->annee2Label = $annee2Label;

        return $this;
    }

    /**
     * Get annee2Label
     *
     * @return \DateTime
     */
    public function getAnnee2Label()
    {
        return $this->annee2Label;
    }

    /**
     * Set annee3Label
     *
     * @param \DateTime $annee3Label
     *
     * @return Labels
     */
    public function setAnnee3Label($annee3Label)
    {
        $this->annee3Label = $annee3Label;

        return $this;
    }

    /**
     * Get annee3Label
     *
     * @return \DateTime
     */
    public function getAnnee3Label()
    {
        return $this->annee3Label;
    }
}
