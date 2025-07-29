<?php

namespace Liloi\Bionic\API\Exercises\Edit;

use Liloi\API\Response;
use Liloi\Bionic\API\Method as SuperMethod;
use Liloi\Bionic\Domain\Exercises\Manager as MapsManager;
use Liloi\Bionic\Domain\Exercises\Types as MapsTypes;

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

        $response = new Response();
        $response->set('render', static::render(__DIR__ . '/Template.tpl', [
            'entity' => $entity,
            'types' => MapsTypes::$list
        ]));

        return $response;
    }
}