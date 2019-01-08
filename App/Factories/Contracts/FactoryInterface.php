<?php

namespace App\Factories\Contracts;

interface FactoryInterface
{
    /**
     * @param string $type
     * @param $argument
     *
     * @return FactoryInterface|null
     */
    public function create(string $type, $argument = null);

}
