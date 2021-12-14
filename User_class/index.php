<?php
class User {
    protected string $name;
    protected string $email;
    public int $role;
    protected function setName(string $name): void {
        $this->name = $name;
    }
    protected function getName(): string {
        return $this->name;
    }

    protected function setEmail(string $email): void {
        $this->email = $email;
    }
    protected function getEmail(): string {
        return $this->email;
    }

    public function setRole(string $role): void {
        $this->role = $role;
    } 
    public function getRole(): string {
        return $this->role;
    }
    function getInfo() {
        $this->getRole();
    }
    function isAdmin() {
        if ($this->role == 1) {
            echo 'là admin';
        } else if ($this->role == 2) {
            echo 'là người dùng bình thường';
        }
    }
}

$admin = new User();
$admin -> setRole(1);
$admin -> getInfo();
$admin -> isAdmin();
