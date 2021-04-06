<?php

namespace Dimkabelkov\EntityHelper\Entity;

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
