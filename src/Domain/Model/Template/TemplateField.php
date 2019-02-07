<?php

namespace Encyklopedia\Domain\Model\Template;

class TemplateField {
    private $name;
    private $type;

    public function __construct(string $name, string $type)
    {
        $this->name = $name;
        $this->type = $type;
    }
}