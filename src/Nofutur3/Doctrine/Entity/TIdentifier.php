<?php

namespace Nofutur3\Toolbox\Entity;


use Doctrine\ORM\Mapping as ORM;

trait TIdentifier
{
    /**
     * @var integer
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @return integer
     */
    final public function getId()
    {
        return $this->id;
    }

    public function __clone()
    {
        $this->id = NULL;
    }
}