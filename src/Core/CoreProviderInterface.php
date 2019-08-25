<?php

namespace Psodox\Core;

interface CoreProviderInterface
{
    public function __construct(CoreContainerProviderInterface $coreContainerProvider);

    /**
     * @return CoreInterface
     */
    public function getCore(): CoreInterface;
}