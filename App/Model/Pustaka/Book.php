<?php

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