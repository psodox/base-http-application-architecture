<?php


namespace Psodox\Core;


use Psodox\ApplicationInterface;
use Psodox\Core\Configuration\CoreConfigurationInterface;
use Psodox\Core\Http\Request\RequestObjectProviderInterface;
use Psodox\Core\Http\Response\ResponseObjectProviderInterface;

interface CoreInterface
{
    public function __construct(CoreConfigurationInterface $coreConfiguration);

    public function initApplication(): self;

    public function getApplication(): ApplicationInterface;

}