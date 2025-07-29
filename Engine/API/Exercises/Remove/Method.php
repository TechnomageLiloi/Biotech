<?php

namespace Liloi\Bionic\API\Exercises\Remove;

use Liloi\API\Response;
use Liloi\Bionic\API\Method as SuperMethod;
use Liloi\Bionic\Domain\Exercises\Manager as MapsManager;

/**
 * Rune API: Blueprint.Blueprints.Show
 * @package Liloi\Librarium\API\Blueprints\Show
 */
class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $keyExercise = self::getParameter('key_exercise');
        $entity = MapsManager::load($keyExercise);
        $entity->remove();

        return new Response();
    }
}