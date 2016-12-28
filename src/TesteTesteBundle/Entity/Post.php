<?php

namespace TesteTesteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post")
 * @ORM\Entity(repositoryClass="TesteTesteBundle\Repository\PostRepository")
 */
class Post
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
     * @ORM\Column(name="IDs", type="string", length=255)
     */
    private $iDs;


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
     * Set iDs
     *
     * @param string $iDs
     * @return Post
     */
    public function setIDs($iDs)
    {
        $this->iDs = $iDs;

        return $this;
    }

    /**
     * Get iDs
     *
     * @return string 
     */
    public function getIDs()
    {
        return $this->iDs;
    }
}
