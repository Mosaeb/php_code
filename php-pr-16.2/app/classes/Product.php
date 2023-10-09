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
                'description'=>'This is a Smart watch band.',
                'image'=>'assets/img/product/product-1.jpg'
            ],
            1=>[
                'id'=>2,
                'name'=>'Drill',
                'description'=>'This is a Drill.',
                'image'=>'assets/img/product/product-2.jpg'
            ],
            2=>[
                'id'=>3,
                'name'=>'Headphone',
                'description'=>'This is a headphone.',
                'image'=>'assets/img/product/product-3.jpg'
            ],
            3=>[
                'id'=>4,
                'name'=>'Macbook Air',
                'description'=>'This is a Macbook Air.',
                'image'=>'assets/img/product/product-4.jpg'
            ],
            4=>[
                'id'=>5,
                'name'=>'Nike Shoe',
                'description'=>'This is a Nike Shoe.',
                'image'=>'assets/img/product/product-5.jpg'
            ],
            5=>[
                'id'=>6,
                'name'=>'Hand Bag',
                'description'=>'This is a hand bag.',
                'image'=>'assets/img/product/product-6.jpg'
            ],
            6=>[
                'id'=>7,
                'name'=>'Nikon Camera',
                'description'=>'This is a nikon camera',
                'image'=>'assets/img/product/product-7.jpg'
            ],
            7=>[
                'id'=>8,
                'name'=>'Sholder Bag',
                'description'=>'This is a sholder bag',
                'image'=>'assets/img/product/product-8.jpg'
            ]
        ];
    }
    public function getAllProduct()
    {
        return $this->products;
    }

    public function getBlogById($id)
    {
        foreach ($this->products as $pro)
        {
            if ($pro ['id']==$id)
            {
                return $pro;
            }
        }
    }
}