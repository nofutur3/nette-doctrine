<?php
/**
 * BaseEntity.php
 *
 * @package  : nofutur3/nette-doctrine
 * @author   : Jakub Vyvazil <jakub@vyvazil.cz>
 * @copyright: 2017
 */

namespace Nofutur3\Doctrine\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass()
 * @ORM\HasLifecycleCallbacks()
 */
abstract class BaseEntity
{
	/**
	 * @var bool
	 * @ORM\Column(name="is_enabled", type="boolean")
	 */
	protected $enabled;

	/**
	 * @var \DateTime
	 * @ORM\Column(name="created_at", type="datetime")
	 */
	protected $createdAt;

	/**
	 * @var \DateTime
	 * @ORM\Column(name="updated_at", type="datetime")
	 */
	protected $updatedAt;

	/**
	 * BaseEntity constructor.
	 */
	public function __construct()
	{
		$this->createdAt = new \DateTime();
		$this->enabled = true;
	}

	public function __get($property)
	{
		if (property_exists($this, $property)) {
			return $this->$property;
		}
	}

	public function __set($property, $value)
	{
		if (property_exists($this, $property)) {
			$this->$property = $value;
		}
	}

	/**
	 * @return bool
	 */
	public function isEnabled()
	{
		return $this->enabled;
	}

	/**
	 * @param bool $enabled
	 */
	public function setEnabled($enabled)
	{
		$this->enabled = $enabled;
	}

	/**
	 * @return \DateTime
	 */
	public function getCreatedAt()
	{
		return $this->createdAt;
	}

	/**
	 * @return \DateTime
	 */
	public function getUpdatedAt()
	{
		return $this->updatedAt;
	}

	/** @ORM\PrePersist() */
	public function saveDatetimeOnPrePersist()
	{
		if (!$this->createdAt) {
			$this->createdAt = new \DateTime();
		}
		$this->updatedAt = new \DateTime();
	}

	/** @ORM\PreUpdate() */
	public function saveDatetimeOnPreUpdate()
	{
		$this->updatedAt = new \DateTime();
	}
}