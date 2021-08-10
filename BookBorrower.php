<?php

class BookBorrower
{
    private $borrowedBook;
    private $haveBook = false;

    public function borrowBook()
    {
        $this->borrowedBook = BookSingleton::borrowBook();
        if ($this->borrowedBook == null) {
            $this->haveBook = false;
        } else {
            $this->haveBook = true;
        }
    }

    public function getInfo()
    {
        if ($this->haveBook) {
            return $this->borrowedBook->getInfo();
        }

        return "I don't have the book";
    }

    public function returnBook()
    {
        $this->borrowedBook->returnBook($this->borrowedBook);
    }
}