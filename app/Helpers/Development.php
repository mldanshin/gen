<?php

namespace App\Helpers;

use Danshin\Development\Models\Author;
use Danshin\Development\Models\Year;

final class Development
{
    private static ?Author $author = null;
    private static ?string $year = null;

    public static function getAuthorRoleComment(): string
    {
        self::initialize();
        return self::$author->roleComment;
    }

    public static function getAuthorName(): string
    {
        self::initialize();
        return self::$author->surnameAndName;
    }

    public static function getAuthorEmail(): string
    {
        self::initialize();
        return self::$author->email;
    }

    public static function getYear(): string
    {
        self::initialize();
        return self::$year;
    }

    private static function initialize(): void
    {
        if (self::$author === null) {
            self::$author = Author::get(config("app.locale"));
        }

        if (self::$year === null) {
            self::$year = (new Year())->periodFrom(2021);
        }
    }
}
