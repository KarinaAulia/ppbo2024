<?php

class Publisher {
    public string $name;
    public string $address;
    private string $phone;

    public function setPhone($int) {
        return $this->phone = $int;
    }

    public function getPhone(): int {
        return $this->phone;
    }


}