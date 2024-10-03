<?php

class Author {
    public string $name;
    public string $description;

    public function show(array $type) : array {
        $hasil = [];

        foreach ($type as $key) {
            if ($key === "name") {
                $hasil["name"] = $this->name;
            } elseif ($key === "description") {
                $hasil["descriction"] = $this->description;
            } else {
                $hasil["error"] = "Tipe $key tidak ada yang sesuai.";
            }
        }

        return $hasil;
    }
}
