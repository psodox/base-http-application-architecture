<?php

namespace Psodox;

use Psodox\Core\CoreInterface;

interface ApplicationInterface
{
    public function __construct(CoreInterface $core);

    public function run(): self;

    public function getCore(): CoreInterface;
}