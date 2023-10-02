<?php

namespace Liloi\Bionic\API\Lessons\Remove;

use Liloi\API\Response;
use Liloi\Bionic\API\Method as SuperMethod;
use Liloi\Bionic\Domain\Lessons\Manager as MapsManager;

/**
 * Rune API: Blueprint.Blueprints.Show
 * @package Liloi\Librarium\API\Blueprints\Show
 */
class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $keyLesson = self::getParameter('key_lesson');
        $entity = MapsManager::load($keyLesson);
        $entity->remove();

        return new Response();
    }
}