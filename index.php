<?php

require "BookBorrower.php";
require "BookSingleton.php";

$borrower1 = new BookBorrower();
$borrower2 = new BookBorrower();

echo "BEGIN TESTING SINGLETON PATTERN";
echo "<br>";
$borrower1->borrowBook();
echo "Borrower1 asked to borrow the book ";
echo "<br>";
echo $borrower1->getInfo();
echo "<br>";

$borrower2->borrowBook();
echo "Borrower2 asked to borrow the book ";
echo "<br>";
echo "Borrower2 Author and Title: ";
echo "<br>";
echo $borrower2->getInfo();
echo "<br>";

$borrower1->returnBook();
echo "Borrower1 returned the book";
echo "<br>";

$borrower2->borrowBook();
echo "Borrower2 Author and Title: ";
echo "<br>";

echo $borrower1->getInfo();
echo "<br>";

echo "END TESTING SINGLETON PATTERN";

