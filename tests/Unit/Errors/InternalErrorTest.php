<?php

declare(strict_types = 1);

namespace AvtoDev\JsonRpc\Tests\Unit\Errors;

use AvtoDev\JsonRpc\Errors\InternalError;

/**
 * @group  rpc
 *
 * @covers \AvtoDev\JsonRpc\Errors\InternalError<extended>
 */
class InternalErrorTest extends AbstractErrorTestCase
{
    /**
     * @small
     *
     * @return void
     */
    public function testDefaultMessage(): void
    {
        $this->assertSame('Internal error', $this->errorFactory(null)->getMessage());
    }

    /**
     * {@inheritdoc}
     *
     * @return InternalError
     */
    protected function errorFactory(...$arguments)
    {
        return new InternalError(...$arguments);
    }
}
