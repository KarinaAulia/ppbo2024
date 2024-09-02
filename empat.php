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


class Book {
    public int $ISBN;
    public string $title;
    public string $description;
    public string $category;
    public string $language;
    public int $numberOfPage;
    public string $author;
    public string $publisher;

    public function showAll(): array {
        return ["ISBN" => $this->ISBN,"Title"=>$this->title,"Description"=>$this->description,"Category"=>$this->category,"Language"=>$this->language,"Number of Page"=>$this->numberOfPage,"Author"=>$this->author,"Publisher"=>$this->publisher];
    }

    public function detail($ISBN): array {
        if ($this->ISBN == $ISBN) {
            return $this->showAll();
        }
    }
}


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

