<?php

namespace Encyklopedia\Domain\Model\Template;

class Template {
    private $id;
    private $name;
    private $fields;
    private $created;
    private $updated;

    public function __construct(?string $id, string $name, array $fields = [], \DateTime $created, \DateTime $updated)
    {
        $this->id = $id;
        $this->name = $name;
        $this->fields = $fields;
        $this->created = $created;
        $this->updated = $updated;
    }
}