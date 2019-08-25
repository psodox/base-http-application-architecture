<?php

namespace Psodox\Core\Http\Request;

use Psr\Http\Message\RequestInterface;

interface RequestObjectProviderInterface
{
    /**
     * @return RequestInterface
     */
    public function getRequestObject(): RequestInterface;
}