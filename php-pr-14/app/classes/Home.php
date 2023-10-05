<?php


namespace App\classes;
use App\classes\Product;


class Home
{
    public $product, $products;
    public function index()
    {
        $this->product= new Product();
        $this->products=$this->product->getAllProduct();
        return view('home',['products'=>$this->products]);
    }
    public function about(){
        return view('about');
    }
}