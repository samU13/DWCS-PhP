<?php

class Book
{
    //Propiedades

    //Metodos
    public function __construct(
        private string $author,
        private string $title,
        private float $price,
        private int $stock,
        private int $id
    ) {
    }

    public function getInfo()
    {
        $info = "<b>{$this->title}</b> escrito por: <i>{$this->author}</i> <br>
                precio : {$this->price} <br>
                ID : {$this->id} <br> ";

        if ($this->stock > 0) {
            $info .= "piezas disponibles: <span style='color:green'>{$this->stock}</span><br><br>";
        } else {
            $info .= "<span style='color:red'>No disponible</span><br><br>";
        }
        return $info;
    }
}

//Entrada de la clase Book

$book1 = new Book(
    'George Oswell',
    'Rebelion en la granja',
    199.90,
    100,
    1
);

$book2 = new Book(
    'Miguel de Cervantes',
    'El quijote',
    150.22,
    0,
    2
);

//echo $book1->getInfo();
//echo $book2->getInfo();