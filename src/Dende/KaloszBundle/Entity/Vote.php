<?php

namespace Dende\KaloszBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vote
 *
 * @ORM\Table(name="votes")
 * @ORM\Entity
 */
class Vote
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
     * @var \Dende\KaloszBundle\Entity\User
     *
     * @ORM\OneToOne(targetEntity="Dende\KaloszBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id", unique=true)
     * })
     */
    private $user;

    /**
     * @var \Dende\KaloszBundle\Entity\Analysis
     *
     * @ORM\OneToOne(targetEntity="Dende\KaloszBundle\Entity\Analysis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="analysis_id", referencedColumnName="id", unique=true)
     * })
     */
    private $analysis;



    /**
     * Set id
     *
     * @param integer $id
     * @return Vote
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
     * Set user
     *
     * @param \Dende\KaloszBundle\Entity\User $user
     * @return Vote
     */
    public function setUser(\Dende\KaloszBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Dende\KaloszBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set analysis
     *
     * @param \Dende\KaloszBundle\Entity\Analysis $analysis
     * @return Vote
     */
    public function setAnalysis(\Dende\KaloszBundle\Entity\Analysis $analysis = null)
    {
        $this->analysis = $analysis;
    
        return $this;
    }

    /**
     * Get analysis
     *
     * @return \Dende\KaloszBundle\Entity\Analysis 
     */
    public function getAnalysis()
    {
        return $this->analysis;
    }
}