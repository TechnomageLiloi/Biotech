<?php

namespace Liloi\Bionic\API;

use Liloi\API\Manager;
use Liloi\API\Method;

/**
 * @inheritDoc
 */
class Tree
{
    private static ?self $instance = null;

    private Manager $manager;

    private function __construct(Manager $manager)
    {
        $this->manager = $manager;
    }

    public static function getInstance(): self
    {
        if(self::$instance === null)
        {
            $manager = new Manager();

            $manager->add(new Method('Bionic.Exercises.Create', '\Liloi\Bionic\API\Exercises\Create\Method::execute'));
            $manager->add(new Method('Bionic.Exercises.Remove', '\Liloi\Bionic\API\Exercises\Remove\Method::execute'));
            $manager->add(new Method('Bionic.Exercises.Edit', '\Liloi\Bionic\API\Exercises\Edit\Method::execute'));
            $manager->add(new Method('Bionic.Exercises.Save', '\Liloi\Bionic\API\Exercises\Save\Method::execute'));
            $manager->add(new Method('Bionic.Exercises.Collection', '\Liloi\Bionic\API\Exercises\Collection\Method::execute'));

            $manager->add(new Method('Bionic.Dashboard.Show', '\Liloi\Bionic\API\Dashboard\Show\Method::execute'));

            self::$instance = new self($manager);
        }

        return self::$instance;
    }

    public function execute(): string
    {
        $response = $this->manager->search($_POST['method'])->execute($_POST['parameters'] ?? []);
        return $response->asJson();
    }
}