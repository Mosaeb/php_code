<?php


namespace App\classes;


class Product
{
    public $products=[];

    public function __construct()
    {
        $this->products=[
            0=>[
                'id'=>1,
                'name'=>'Smart Watch',
                'price'=>10000,
                'description'=>'This is a Xiaomi Smart Band',
                'image'=>'assets/img/product/product-1.jpg'
            ],
            1=>[
                'id'=>2,
                'name'=>'Hato Brushless Drill',
                'price'=>3000,
                'description'=>'This is a Hato Brushless Drill',
                'image'=>'assets/img/product/product-2.jpg'
            ],
            2=>[
                'id'=>3,
                'name'=>'Headphone',
                'price'=>5000,
                'description'=>'This is a Headphone',
                'image'=>'assets/img/product/product-3.jpg'
            ],
            3=>[
                'id'=>4,
                'name'=>'Macbook Air',
                'price'=>106000,
                'description'=>'This is a Macbook Air',
                'image'=>'assets/img/product/product-4.jpg'
            ],
            4=>[
                'id'=>5,
                'name'=>'Nike',
                'price'=>110250,
                'description'=>'This is a Nike shoe',
                'image'=>'assets/img/product/product-5.jpg'
            ],
            5=>[
                'id'=>6,
                'name'=>'Bag',
                'price'=>30000,
                'description'=>'This is a Waman Hand Bag',
                'image'=>'assets/img/product/product-6.jpg'
            ],
            6=>[
                'id'=>7,
                'name'=>'Nikon',
                'price'=>169500,
                'description'=>'This is a Nikon Camera',
                'image'=>'assets/img/product/product-7.jpg'
            ],
            7=>[
                'id'=>8 ,
                'name'=>'Sholder Bag',
                'price'=>10000,
                'description'=>'This is a Man Sholder Bag ',
                'image'=>'assets/img/product/product-8.jpg'
            ],
        ];
    }
    public function getAllProduct(){
        return $this->products;
    }
}