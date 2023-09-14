<?php

namespace Liloi\Bionic\API\Dashboard\Show;

use Liloi\API\Response;
use Liloi\Bionic\API\Method as SuperMethod;
use Liloi\Bionic\Domain\Exercises\Manager as ExercisesManager;
use Liloi\Bionic\Domain\Exercises\Types as ExercisesTypes;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $percentages = ExercisesManager::getPercentages();
        $total = array_sum($percentages) / count($percentages);
        $response = new Response();
        $response->set('render', static::render(__DIR__ . '/Template.tpl', [
            'coordinates' => ExercisesTypes::$coordinates,
            'list' => ExercisesTypes::$list,
            'percentages' => $percentages,
            'total' => $total,
        ]));

        return $response;
    }
}