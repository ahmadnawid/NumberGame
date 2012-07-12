<?php

namespace Game\GuessNumberBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Game\GuessNumberBundle\Entity\Topscorers
 */
class Topscorers
{
    /**
     * @var string $username
     */
    private $username;

    /**
     * @var integer $highscore
     */
    private $highscore;

    /**
     * @var text $gametype
     */
    private $gametype;

    /**
     * @var datetime $datetime
     */
    private $datetime;

    /**
     * @var integer $userid
     */
    private $userid;


    /**
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set highscore
     *
     * @param integer $highscore
     */
    public function setHighscore($highscore)
    {
        $this->highscore = $highscore;
    }

    /**
     * Get highscore
     *
     * @return integer 
     */
    public function getHighscore()
    {
        return $this->highscore;
    }

    /**
     * Set gametype
     *
     * @param text $gametype
     */
    public function setGametype($gametype)
    {
        $this->gametype = $gametype;
    }

    /**
     * Get gametype
     *
     * @return text 
     */
    public function getGametype()
    {
        return $this->gametype;
    }

    /**
     * Set datetime
     *
     * @param datetime $datetime
     */
    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;
    }

    /**
     * Get datetime
     *
     * @return datetime 
     */
    public function getDatetime()
    {
        return $this->datetime;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }
}