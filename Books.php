<?php 
namespace Books;

use Bookdepartment\Bookdepartment;

class Books extends Bookdepartment{
    public function sale()
    {
        echo "prise 2 dollars";
    }
    public function viewing()
    {
        echo "open the book";
    }
    public function purchasereturns()
    {
        echo "return 2 dollars";
    }
}