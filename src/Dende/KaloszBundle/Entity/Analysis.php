<?php

namespace Dende\KaloszBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Analysis
 *
 * @ORM\Table(name="analysis")
 * @ORM\Entity
 */
class Analysis
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=320, nullable=true)
     */
    private $description;

    /**
     * @var \Dende\KaloszBundle\Entity\Movie
     *
     * @ORM\OneToOne(targetEntity="Dende\KaloszBundle\Entity\Movie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="movie_id", referencedColumnName="id", unique=true)
     * })
     */
    private $movie;

    /**
     * Set id
     *
     * @param integer $id
     * @return Analysis
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

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
     * Set description
     *
     * @param string $description
     * @return Analysis
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set movie
     *
     * @param \Dende\KaloszBundle\Entity\Movie $movie
     * @return Analysis
     */
    public function setMovie(\Dende\KaloszBundle\Entity\Movie $movie = null)
    {
        $this->movie = $movie;
    
        return $this;
    }

    /**
     * Get movie
     *
     * @return \Dende\KaloszBundle\Entity\Movie 
     */
    public function getMovie()
    {
        return $this->movie;
    }
}