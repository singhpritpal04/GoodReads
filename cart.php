<?php

class cart
{

    public $bookid;
    public $bookname;
    public $price;
    public $qty;
    public $photo;
    public $discount;
    public $totalprice;


    function __construct($bid, $bname, $price, $qty, $photo, $discount, $totalprice)
    {
        $this->bookid = $bid;
        $this->bookname = $bname;
        $this->price = $price;
        $this->photo = $photo;
        $this->qty = $qty;
        $this->discount = $discount;
        $this->totalprice = $price-$discount/100*$price;

    }

    function getbookid()
    {

        return $this->bookid;
    }


}