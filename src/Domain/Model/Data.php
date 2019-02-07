<?php

namespace Encyklopedia\Domain\Model;

class Data {
    private $data;

    public function __construct(array $origin = [])
    {
        foreach ($origin as $key=> $value) {
            $this->$key = $value;
        }
    }

    public function __set($name, $value) {
        if($value === [] || array_keys($value) !== range(0, count($value) - 1)) {
            $this->data[$name] = new Data($value);
        } else {
            $this->data[$name] = $value;
        }
    }

    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }
}