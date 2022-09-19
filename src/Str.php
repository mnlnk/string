<?php

namespace Manuylenko\StringHelper;

class Str
{
    /**
     * Получает длину строки.
     *
     * @param string $str
     *
     * @return int
     */
    public static function length($str)
    {
        return mb_strlen($str);
    }

    /**
     * Конвертирует строку в нижний регистр.
     *
     * @param string $str
     *
     * @return string
     */
    public static function toLower($str)
    {
        return mb_strtolower($str);
    }

    /**
     * Конвертирует строку в верхний регистр.
     *
     * @param string $str
     *
     * @return string
     */
    public static function toUpper($str)
    {
        return mb_strtoupper($str);
    }

    /**
     * Конвертирует строку в верблюжий регистр.
     *
     * @param string $str
     *
     * @return string
     */
    public static function toCamel($str)
    {
        return lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $str))));
    }

    /**
     * Конвертирует строку в змеиный регистр.
     *
     * @param string $str
     *
     * @return string
     */
    public static function toSnake($str)
    {
        return static::toLower(ltrim(preg_replace('/[A-Z]/', '_$0', $str), '_'));
    }
}
