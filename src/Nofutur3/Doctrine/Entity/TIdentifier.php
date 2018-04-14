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
     * @var int
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
     * @return int
     */
    final public function getId(): int
    {
        return $this->id;
    }
}
