<?php

namespace DeezenUI\Deezen\Utils;

class PathUtil
{
    private static ?string $resourcePath = null;

    public static function resourcePath(): string
    {
        return self::$resourcePath ??= resource_path();
    }

    public static function setResourcePath(string $path): void
    {
        self::$resourcePath = $path;
    }

    public static function changeSeparator(string $path): string
    {
        return str_replace('/', DIRECTORY_SEPARATOR, $path);
    }
}
