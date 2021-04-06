<?php

namespace Dimkabelkov\EntityHelper\Entity;

use DateTime;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

trait SoftDeleteableEntity
{
    /**
     * @var DateTime
     *
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @Serializer\Type("DateTime<'Y-m-d H:i:s'>")
     */
    protected $deletedAt;

    /**
     * Sets deletedAt.
     *
     * @param DateTime|null $deletedAt
     *
     * @return $this
     */
    public function setDeletedAt(DateTime $deletedAt = null)
    {
        $this->deletedAt = $deletedAt;

        return $this;
    }

    /**
     * Returns deletedAt.
     *
     * @return DateTime
     */
    public function getDeletedAt()
    {
        return $this->deletedAt;
    }

    /**
     * Is deleted?
     *
     * @return bool
     */
    public function isDeleted()
    {
        return null !== $this->deletedAt;
    }
}
