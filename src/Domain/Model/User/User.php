<?php

namespace Encyklopedia\Domain\Model\User;

class User {
    private $id;
    private $name;
    private $email;
    private $password;
    private $role;

    public function __construct(string $id, string $name, string $email, string $password, int $role)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->role = $role;
    }
}