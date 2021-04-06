<?php

namespace Dimkabelkov\EntityHelper\Entity;

use JMS\Serializer\Annotation as Serializer;
use Doctrine\ORM\Mapping as ORM;
use Ramsey\Uuid\UuidInterface;

abstract class AbstractUuidEntity extends AbstractEntity
{
    /**
     * @var UuidInterface
     *
     * @ORM\Id()
     * @ORM\Column(type="uuid", unique=true)
     * @ORM\GeneratedValue(strategy="CUSTOM")
     * @ORM\CustomIdGenerator(class="Ramsey\Uuid\Doctrine\UuidGenerator")
     *
     * @Serializer\Type("string")
     * @Serializer\Groups({"cabinet", "cabinet-list"})
     */
    protected ?UuidInterface $id = null;

    public function getId(): ?UuidInterface
    {
        return $this->id;
    }

    public function setId(UuidInterface $id)
    {
        $this->id = $id;
    }
}
