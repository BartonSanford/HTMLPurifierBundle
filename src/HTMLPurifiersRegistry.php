<?php

namespace Exercise\HTMLPurifierBundle;

use Psr\Container\ContainerInterface;

class HTMLPurifiersRegistry implements HTMLPurifiersRegistryInterface
{
    private $purifiersLocator;

    public function __construct(ContainerInterface $purifiersLocator)
    {
        $this->purifiersLocator = $purifiersLocator;
    }

    public function has(string $profile): bool
    {
        return $this->purifiersLocator->has($profile);
    }

    public function get(string $profile): \HTMLPurifier
    {
        return $this->purifiersLocator->get($profile);
    }
}
