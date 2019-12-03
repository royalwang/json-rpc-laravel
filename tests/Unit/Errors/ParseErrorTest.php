<?php

declare(strict_types = 1);

namespace AvtoDev\JsonRpc\Tests\Unit\Errors;

use AvtoDev\JsonRpc\Errors\ParseError;

/**
 * @covers \AvtoDev\JsonRpc\Errors\ParseError<extended>
 */
class ParseErrorTest extends AbstractErrorTestCase
{
    /**
     * @return void
     */
    public function testDefaultMessage(): void
    {
        $this->assertSame('Parse error', $this->errorFactory(null)->getMessage());
    }

    /**
     * {@inheritdoc}
     *
     * @return ParseError
     */
    protected function errorFactory(...$arguments)
    {
        return new ParseError(...$arguments);
    }
}
