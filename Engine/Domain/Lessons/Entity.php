<?php

namespace Liloi\Bionic\Domain\Lessons;

use Liloi\Tools\Entity as AbstractEntity;

/**
 * @method string getTask()
 * @method void setTask(string $value)
 *
 * @method string getMark()
 * @method void setMark(string $value)
 *
 * @method string getDt()
 * @method void setDt(string $value)
 */
class Entity extends AbstractEntity
{
    public function getKey(): string
    {
        return $this->getField('key_lesson');
    }

    public function save(): void
    {
        Manager::save($this);
    }

    public function remove(): void
    {
        Manager::remove($this);
    }
}