<?php

require_once 'Author.php';
require_once 'Book.php';
require_once 'Publisher.php';

$author = new Author();
$author->name = "J.K. Rowling";
$author->description = "Penulis buku";

$book = new Book();
$book->ISBN = 0747542155;
$book->title ="Harry Potter dan Tawanan Azkaban";
$book->description = "Menceritakan Harry Potter pada tahun ketiganya di sekolah sihir Hogwarts ";
$book->category = "Novel";
$book->language = "Indonesia";
$book->numberOfPage = 544;
$book->author = $author->name;
$book->publisher = $publisher->name;

$publisher = new Publisher();
$publisher->name = "Gramedia Pustaka Utama";
$publisher->address = "Jakarta";
$publisher->setPhone("02153650110");

print_r($book->showAll());