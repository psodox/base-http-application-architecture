<?php

namespace Psodox\Core\Http\Response;

use Psr\Http\Message\ResponseInterface;

interface ResponseObjectProviderInterface
{
    /**
     * @return ResponseInterface
     */
    public function getResponseObject();
}