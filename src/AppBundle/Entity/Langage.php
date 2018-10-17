<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Langage
 *
 * @ORM\Table(name="langage")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\LangageRepository")
 */
class Langage
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
     * @ORM\Column(name="langage", type="string", length=255, nullable=true)
     */
    private $langage;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return (string) $this->langage;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Language
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set langage
     *
     * @param string $langage
     *
     * @return Langage
     */
    public function setLangage($langage)
    {
        $this->langage = $langage;

        return $this;
    }

    /**
     * Get langage
     *
     * @return string
     */
    public function getLangage()
    {
        return $this->langage;
    }
}
