<?php

require 'Book.php';
class Comic extends Book
{

    public function __construct($author, $title, $price, $stock, $id, public array $illustrators, private int $vol)
    {
        parent::__construct($author, $title, $price, $stock, $id);
    }

    public function getInfo()
    {
        $result = "volumen: $this->vol <br>";

        $ul = "<ul> -----Illustrators----- </ul>";
        foreach ($this->illustrators as $illustrator) {
            $ul .= "<li>$illustrator</li>";
        }
        $ul .= "</ul>";
        echo parent::getInfo();
        echo $result .= $ul;
    }
}

$comic1 = new Comic(
    'Alan Moore',
    'Batman',
    120.2,
    98,
    3,
    ['Brian Holland', 'Marcial Morales'],
    1
);

$comic1->getInfo();
