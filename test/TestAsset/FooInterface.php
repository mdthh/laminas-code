<?php

/**
 * @see       https://github.com/laminas/laminas-code for the canonical source repository
 * @copyright https://github.com/laminas/laminas-code/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-code/blob/master/LICENSE.md New BSD License
 */

namespace LaminasTest\Code\TestAsset;

interface FooInterface extends \ArrayAccess
{
    public const BAR = 5;
    public const FOO = self::BAR;

    public function fooBarBaz();

}
