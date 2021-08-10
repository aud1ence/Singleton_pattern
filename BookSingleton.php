<?php

class BookSingleton
{
    private $author;
    private $title;
    private static $book;
    private static $isLoanedOut;

    public function __construct()
    {
        $this->author = "Ashlee Vance";
        $this->title = "Elon Musk";
        self::$book = null;
        self::$isLoanedOut = false;
    }

    public static function borrowBook()
    {
        if (!self::$isLoanedOut) {
            if (self::$book == null) {
                self::$book = new BookSingleton();
            }
            self::$isLoanedOut = true;
            return self::$book;
        }
        return null;
    }

    public function returnBook()
    {
        self::$isLoanedOut = false;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getInfo()
    {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}