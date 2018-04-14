<?php
/**
 * Identifier using autoincremented integer.
 *
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

    public function __clone()
    {
        $this->id = null;
    }

    /**
     * @return integer
     */
    final public function getId()
    {
        return $this->id;
    }
}
