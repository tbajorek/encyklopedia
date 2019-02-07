<?php

namespace Encyklopedia\Domain\Repository;

use Doctrine\DBAL\Connection;

abstract class AbstractRepository {
    protected $dbal;

    public function __construct(Connection $dbal)
    {
        $this->dbal = $dbal;
    }
}