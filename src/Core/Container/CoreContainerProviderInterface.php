<?php


namespace Psodox\Core;


interface CoreContainerProviderInterface
{
    public function getCoreContainer(): CoreContainer;
}