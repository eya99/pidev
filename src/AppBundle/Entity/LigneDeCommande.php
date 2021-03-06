<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneDeCommande
 *
 * @ORM\Table(name="ligne_de_commande")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LigneDeCommandeRepository")
 */
class LigneDeCommande
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
     * @var float
     *
     * @ORM\Column(name="prixTotal", type="float")
     */
    private $prixTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse2", type="string", length=255)
     */
    private $adresse2;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostal", type="string", length=255)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="numTel", type="string", length=255)
     */
    private $numTel;
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateLivraison", type="date")
     */
    private $dateLivraison;
    /**
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer",nullable=true)
     */
    private $quantite;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Velo")
     * @ORM\JoinColumn(name="id_velo",referencedColumnName="id")
     */
    private $idVelo;


    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Commande")
     * @ORM\JoinColumn(name="id_commande",referencedColumnName="id")
     */
    private $idCommande;


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
     * Set prixTotal
     *
     * @param float $prixTotal
     *
     * @return LigneDeCommande
     */
    public function setPrixTotal($prixTotal)
    {
        $this->prixTotal = $prixTotal;

        return $this;
    }

    /**
     * Get prixTotal
     *
     * @return float
     */
    public function getPrixTotal()
    {
        return $this->prixTotal;
    }

    /**
     * Set adresse2
     *
     * @param string $adresse2
     *
     * @return LigneDeCommande
     */
    public function setAdresse2($adresse2)
    {
        $this->adresse2 = $adresse2;

        return $this;
    }

    /**
     * Get adresse2
     *
     * @return string
     */
    public function getAdresse2()
    {
        return $this->adresse2;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return LigneDeCommande
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return LigneDeCommande
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
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return LigneDeCommande
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set numTel
     *
     * @param string $numTel
     *
     * @return LigneDeCommande
     */
    public function setNumTel($numTel)
    {
        $this->numTel = $numTel;

        return $this;
    }

    /**
     * Get numTel
     *
     * @return string
     */
    public function getNumTel()
    {
        return $this->numTel;
    }

    /**
     * Set idVelo
     *
     * @param \AppBundle\Entity\Velo $idVelo
     *
     * @return LigneDeCommande
     */
    public function setIdVelo(\AppBundle\Entity\Velo $idVelo = null)
    {
        $this->idVelo = $idVelo;

        return $this;
    }

    /**
     * Get idVelo
     *
     * @return \AppBundle\Entity\Velo
     */
    public function getIdVelo()
    {
        return $this->idVelo;
    }



    /**
     * Set idCommande
     *
     * @param \AppBundle\Entity\Commande $idCommande
     *
     * @return LigneDeCommande
     */
    public function setIdCommande(\AppBundle\Entity\Commande $idCommande = null)
    {
        $this->idCommande = $idCommande;

        return $this;
    }

    /**
     * Get idCommande
     *
     * @return \AppBundle\Entity\Commande
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * Set dateLivraison
     *
     * @param \DateTime $dateLivraison
     *
     * @return LigneDeCommande
     */
    public function setDateLivraison($dateLivraison)
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

    /**
     * Get dateLivraison
     *
     * @return \DateTime
     */
    public function getDateLivraison()
    {
        return $this->dateLivraison;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     *
     * @return LigneDeCommande
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer
     */
    public function getQuantite()
    {
        return $this->quantite;
    }
}
