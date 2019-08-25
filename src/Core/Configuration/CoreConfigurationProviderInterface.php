<?php


namespace Psodox\Core\Configuration;


interface CoreConfigurationProviderInterface
{
    public function getCoreConfiguration(): CoreConfigurationInterface;
}