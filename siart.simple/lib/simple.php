<?php

namespace Siart;

use Bitrix\Main\Config\Option;


/**
 * Class Simple
 * @package Siart
 */
class Simple
{
    private const MODULE_ID = 'siart.simple';

    /**
     * Возвращает опцию модуля с кодом 'INDEX'
     *
     * @return string
     * @throws \Bitrix\Main\ArgumentNullException
     */
    public static function test()
    {
        return Option::get(self::MODULE_ID, 'INDEX');
    }
}
