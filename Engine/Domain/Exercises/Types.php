<?php

namespace Liloi\Bionic\Domain\Exercises;

class Types
{
    public const GENERAL = 1;
    public const BALANCE = 2;
    public const STRETCH = 3;
    public const SWORD_PLAY = 4;
    public const FINE_MOTOR_SKILLS = 5;

    static public array $list = [
        self::GENERAL => 'General',
        self::BALANCE => 'Balance',
        self::STRETCH => 'Stretch',
        self::SWORD_PLAY => 'Sword play',
        self::FINE_MOTOR_SKILLS => 'Fine motor skills',
    ];

    static public array $coordinates = [
        self::GENERAL => ['x' => 146, 'y' => 195],
        self::BALANCE => ['x' => 162, 'y' => 923],
        self::STRETCH => ['x' => 66, 'y' => 335],
        self::SWORD_PLAY => ['x' => 66, 'y' => 640],
        self::FINE_MOTOR_SKILLS => ['x' => 250, 'y' => 640],
    ];
}