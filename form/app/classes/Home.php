<?php


namespace App\classes;


class Home
{
    public function index()
    {
        return view('home');
    }
    public function form()
    {
        return view('form');
    }



}