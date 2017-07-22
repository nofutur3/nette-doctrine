<?php

namespace Nofutur3\Toolbox\Entity;


trait TUUIdentifier
{
    /**
     * @ORM\Id
     * @ORM\Column(type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
     * @var string
     */
    private $id;

    /**
     * @return string
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