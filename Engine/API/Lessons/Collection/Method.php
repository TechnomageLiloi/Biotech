<?php

namespace Liloi\Bionic\API\Lessons\Collection;

use Liloi\API\Response;
use Liloi\Bionic\API\Method as SuperMethod;
use Liloi\Bionic\Domain\Lessons\Manager as ExercisesManager;

/**
 * Rune API: Blueprint.Blueprints.Show
 * @package Liloi\Librarium\API\Blueprints\Show
 */
class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $collection = ExercisesManager::loadCollection();

        $filTemplate = __DIR__ . '/Template.tpl';

        $response = new Response();
        $response->set('render', static::render($filTemplate, [
            'collection' => $collection
        ]));

        return $response;
    }
}