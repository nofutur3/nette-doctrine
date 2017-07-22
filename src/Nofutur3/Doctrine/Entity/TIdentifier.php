<?php
/**
 * Identifier using autoincremented integer
 *
 * @package  : nofutur3/nette-doctrine
 * @author   : Jakub Vyvazil <jakub@vyvazil.cz>
 * @copyright: 2017
 */

namespace Nofutur3\Doctrine\Entity;


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
        $this->id = null;
    }
}