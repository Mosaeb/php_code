<?php


namespace App\classes;


class HelloWorld
{
    public $data = [];

    public function index()
    {
        $this->data = [
            0 => [
                'name' => 'Mosaeb',
                'email' => 'mosaeb009@gmail.com',
                'phone' => '01302692330',
                'address' => [
                'parmanent address'=>[
                    'address1'=>'Nathullabad',
                    'address2'=>'uzirpur'
                ],
                    'present address' => 'Bijoy Rakeen city,Mirpur-13'
                ]
            ],
            1 => [
                'name' => 'Mahtab',
                'email' => 'Mahtab@gmail.com',
                'phone' => '01608829332',
                'address' => [
                'parmanent address'=>[
                    'address1'=>'kuril',
                    'address2'=>'membarbari Mosaque'
                ],
                    'present address' => 'pulpar,mirpur-14'
                ]
            ],
            2 => [
                'name' => 'Morshed',
                'email' => 'morshed@gmail.com',
                'phone' => '01538390475',
                'address' => [
                'parmanent address'=>[
                    'address1'=>'Rajshahi',
                    'address2'=>'kuratoli'
                ],
                    'present address' => 'Lake-city,khelkhet,Dhaka'
                ]
            ]
        ];

        foreach ($this->data as $value) {
            foreach ($value as $item) {
                if (is_array($item)) {
                    foreach ($item as $item_value) {
                        if (is_array($item_value)){
                            foreach ($item_value as $add){
                                echo $add.'-----';
                            }
                        }
                        else{
                            echo $item_value . '-----';
                        }
                    }
                } else {
                    echo $item . '-----';

                }
            }
            echo '<br/> <br/>';
        }

    }
}