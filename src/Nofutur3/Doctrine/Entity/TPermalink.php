<?php
/**
 * TPermalink.php.
 *
 * @author   : Jakub Vyvazil <jakub@vyvazil.cz>
 * @copyright: 2017
 */

namespace Nofutur3\Doctrine\Entity;

trait TPermalink
{
    /**
     * @var string
     * @ORM\Column(name="permalink", type="string", length=120, unique=true)
     */
    private $permalink;

    /**
     * @return string
     */
    public function getPermalink(): ? string
    {
        return $this->permalink;
    }

    /**
     * @param string $permalink
     *
     * @return TPermalink
     */
    public function setPermalink($permalink)
    {
        $this->permalink = Strings::webalize($permalink);

        return $this;
    }

    /** @ORM\PrePersist */
    public function savePermalinkOnPrePersist()
    {
        if (!$this->permalink && property_exists($this, 'title')) {
            $this->setPermalink($this->title);
        }
    }

    /** @ORM\PreUpdate */
    public function updatePermalinkOnPreUpdate()
    {
        if (!$this->permalink && property_exists($this, 'title')) {
            $this->setPermalink($this->title);
        }
    }
}
