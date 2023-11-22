<?php 
namespace Textiledepartment;

use interFaseSuperMarket\SuperMarket;

class Textiledepartment extends SuperMarket{
    public function sale()
    {
        echo "prise 10 dollars";
    }
    public function viewing()
    {
        echo "try on clothers";
    }
    public function purchasereturns()
    {
        echo "return 10 dollars";
    }
}