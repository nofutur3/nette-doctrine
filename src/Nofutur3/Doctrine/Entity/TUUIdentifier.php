<?php
/**
 * Identifier using GUID
 *
 * @package  : nofutur3/nette-doctrine
 * @author   : Jakub Vyvazil <jakub@vyvazil.cz>
 * @copyright: 2017
 */

namespace Nofutur3\Doctrine\Entity;


use Doctrine\ORM\Mapping as ORM;

trait TUUIdentifier
{
    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(type="guid")
     * @ORM\GeneratedValue(strategy="UUID")
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
        $this->id = null;
    }
}