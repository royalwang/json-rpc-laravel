<?php

declare(strict_types = 1);

namespace AvtoDev\JsonRpc\Tests\Unit\MethodParameters;

use AvtoDev\JsonRpc\Tests\Unit\AbstractUnitTestCase;
use AvtoDev\JsonRpc\MethodParameters\BaseMethodParameters;

/**
 * @covers \AvtoDev\JsonRpc\MethodParameters\BaseMethodParameters<extended>
 */
class BaseMethodParametersTest extends AbstractUnitTestCase
{
    /**
     * @return void
     */
    public function testParse(): void
    {
        $parameters = new BaseMethodParameters;
        $params     = ['foo' => 'bar', 'bar' => 'foo'];
        $parameters->parse($params);
        $this->assertSame($parameters->getParams(), $params);
    }

    /**
     * @return void
     */
    public function testParseNull(): void
    {
        $parameters = new BaseMethodParameters;
        $parameters->parse(null);
        $this->assertNull($parameters->getParams());
    }
}
