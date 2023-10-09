<?php


namespace App\classes;
use App\classes\Product;


class Home
{
    public $product,$products,$singleProduct;
    public function index()
    {
        $this->product=new Product();
        $this->products=$this->product->getAllProduct();
        return view('home',['products'=>$this->products]);
    }
    public function about()
    {
        return view('about');
    }

    public function deatail($id)
    {
        $this->product        =new Product();
        $this->singleProduct  =$this->product->getBlogById($id);
        return view('detail',['product'=>$this->singleProduct]);
    }
    public function form()
    {
        return view('form');
    }

}