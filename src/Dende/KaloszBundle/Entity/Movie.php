<?php

namespace Dende\KaloszBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movie
 *
 * @ORM\Table(name="movies")
 * @ORM\Entity
 */
class Movie {

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
     * @ORM\Column(name="url", type="string", length=45, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Dende\KaloszBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="author_id", referencedColumnName="id", unique=true)
     * })
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=160, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="analysis", type="string", length=320, nullable=true)
     */
    private $analysis;

    /**
     * @var string
     *
     * @ORM\Column(name="judge_name", type="string", length=45, nullable=true)
     */
    private $judgeName;

    /**
     * @var string
     *
     * @ORM\Column(name="event_description", type="string", length=45, nullable=true)
     */
    private $eventDescription;

    /**
     * @var \Dende\KaloszBundle\Entity\Discipline
     *
     * @ORM\OneToOne(targetEntity="Dende\KaloszBundle\Entity\Discipline")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="discipline_id", referencedColumnName="id", unique=true)
     * })
     */
    private $discipline;

    /**
     * Set id
     *
     * @param integer $id
     * @return Movie
     */
    public function setId($id) {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Movie
     */
    public function setUrl($url) {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * Set autorId
     *
     * @param string $authorId
     * @return Movie
     */
    public function setAuthorId($authorId) {
        $this->authorId = $authorId;

        return $this;
    }

    /**
     * Get autorId
     *
     * @return string 
     */
    public function getAuthorId() {
        return $this->authorId;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Movie
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set analysis
     *
     * @param string $analysis
     * @return Movie
     */
    public function setAnalysis($analysis) {
        $this->analysis = $analysis;

        return $this;
    }

    /**
     * Get analysis
     *
     * @return string 
     */
    public function getAnalysis() {
        return $this->analysis;
    }

    /**
     * Set judgeName
     *
     * @param string $judgeName
     * @return Movie
     */
    public function setJudgeName($judgeName) {
        $this->judgeName = $judgeName;

        return $this;
    }

    /**
     * Get judgeName
     *
     * @return string 
     */
    public function getJudgeName() {
        return $this->judgeName;
    }

    /**
     * Set eventDescription
     *
     * @param string $eventDescription
     * @return Movie
     */
    public function setEventDescription($eventDescription) {
        $this->eventDescription = $eventDescription;

        return $this;
    }

    /**
     * Get eventDescription
     *
     * @return string 
     */
    public function getEventDescription() {
        return $this->eventDescription;
    }

    /**
     * Set discipline
     *
     * @param \Dende\KaloszBundle\Entity\Discipline $discipline
     * @return Movie
     */
    public function setDiscipline(\Dende\KaloszBundle\Entity\Discipline $discipline =
    null) {
        $this->discipline = $discipline;

        return $this;
    }

    /**
     * Get discipline
     *
     * @return \Dende\KaloszBundle\Entity\Discipline 
     */
    public function getDiscipline() {
        return $this->discipline;
    }

}
