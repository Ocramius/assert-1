<?php

namespace Webmozart\Assert\Tests\StaticAnalysis;

use Webmozart\Assert\Assert;

/**
 * @psalm-param mixed $value
 *
 * @return array|\ArrayAccess
 */
function consume($value)
{
    Assert::isArrayAccessible($value);

    return $value;
}
