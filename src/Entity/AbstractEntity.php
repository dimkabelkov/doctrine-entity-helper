<?php

namespace Dimkabelkov\EntityHelper\Entity;

use JMS\Serializer\Annotation as Serializer;

abstract class AbstractEntity
{
    /**
     * @Serializer\VirtualProperty()
     *
     * @return string
     */
    public function getLabel(): string
    {
        return '';
    }
}
