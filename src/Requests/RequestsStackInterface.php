<?php

namespace AvtoDev\JsonRpc\Requests;

use Countable;
use LogicException;
use IteratorAggregate;
use Illuminate\Contracts\Support\Arrayable;

/**
 * @see RequestsStack
 */
interface RequestsStackInterface extends Countable, Arrayable, IteratorAggregate
{
    /**
     * Push request into stack.
     *
     * @param ErroredRequestInterface|RequestInterface $request
     */
    public function push($request);

    /**
     * @throws LogicException
     *
     * @return ErroredRequestInterface|RequestInterface
     */
    public function first();

    /**
     * @return mixed[]
     */
    public function all();

    /**
     * Is batch response?
     *
     * @return bool
     */
    public function isBatch(): bool;
}
