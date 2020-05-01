<?php

namespace Turanct\Migrations;

final class Group
{
    private $name;
    private $databases;

    /**
     * @param string $name
     * @param Database[] $databases
     */
    public function __construct(string $name, array $databases)
    {
        $this->name = $name;
        $this->databases = $databases;
    }
}
