<?php

namespace Bookdepartment;

use interFaseSuperMarket\SuperMarket;

class Bookdepartment extends SuperMarket {
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