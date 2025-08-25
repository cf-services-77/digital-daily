<?php

namespace App\Service;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class GlobalService
{
    public $host;

    public function __construct(ParameterBagInterface $params)
    {
        $this->host = $params->get('host');
    }
}
