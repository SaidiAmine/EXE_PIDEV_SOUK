<?php

namespace MehdiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rating
 *
 * @ORM\Table(name="rating")
 * @ORM\Entity(repositoryClass="MehdiBundle\Repository\RatingRepository")
 */
class Rating
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
     * @var int
     *
     * @ORM\Column(name="rating", type="integer")
     */
    private $rating;
    /**
     * Many Features have One Product.
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\User", inversedBy="Rating")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id",onDelete="CASCADE")
     */
    private $users;
    /**
     * Many Features have One Product.
     * @ORM\ManyToOne(targetEntity="Produit", inversedBy="Rating")
     * @ORM\JoinColumn(name="Produit_id", referencedColumnName="id",onDelete="CASCADE")
     */
    private $produits;


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
     * Set rating
     *
     * @param integer $rating
     *
     * @return Rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }


    /**
     * Set produits
     *
     * @param \MehdiBundle\Entity\Produit $produits
     *
     * @return Rating
     */
    public function setProduits(\MehdiBundle\Entity\Produit $produits = null)
    {
        $this->produits = $produits;

        return $this;
    }

    /**
     * Get produits
     *
     * @return \MehdiBundle\Entity\Produit
     */
    public function getProduits()
    {
        return $this->produits;
    }



    /**


    /**
     * Set users
     *
     * @param \AppBundle\Entity\User $users
     *
     * @return Rating
     */
    public function setUsers(\AppBundle\Entity\User $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \AppBundle\Entity\User
     */
    public function getUsers()
    {
        return $this->users;
    }
}

