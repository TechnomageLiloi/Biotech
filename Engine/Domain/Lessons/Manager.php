<?php

namespace Liloi\Bionic\Domain\Lessons;

use Liloi\Bionic\Domain\Manager as DomainManager;

class Manager extends DomainManager
{
    /**
     * Get table name.
     *
     * @return string
     */
    public static function getTableName(): string
    {
        return self::getTablePrefix() . 'lessons';
    }

    public static function loadCollection(): Collection
    {
        $name = self::getTableName();

        $rows = self::getAdapter()->getArray(sprintf(
            'select * from %s where dt between "%s" and "%s" order by dt desc;',
            $name,
            date('Y-m-d 00:00:00'),
            date('Y-m-d 23:59:59')
        ));

        $collection = new Collection();

        foreach($rows as $row)
        {
            $collection[] = Entity::create($row);
        }

        return $collection;
    }

    public static function create(string $keyExercise): void
    {
        self::getAdapter()->insert(self::getTableName(), [
            'key_exercise' => $keyExercise,
            'task' => 'Enter the task',
            'mark' => '0',
            'dt' => date('Y-m-d H:i:s')
        ]);
    }

    public static function load(string $keyLesson): Entity
    {
        $name = self::getTableName();

        $row = self::getAdapter()->getRow(sprintf(
            'select * from %s where key_lesson="%s";',
            $name, $keyLesson
        ));

        return Entity::create($row);
    }

    public static function save(Entity $entity): void
    {
        $name = self::getTableName();
        $data = $entity->get();
        unset($data['key_lesson']);

        self::getAdapter()->update($name, $data, sprintf('key_lesson="%s"', $entity->getKey()));
    }

    public static function remove(Entity $entity): void
    {
        $name = self::getTableName();
        self::getAdapter()->delete($name, sprintf('key_lesson="%s"', $entity->getKey()));
    }
}